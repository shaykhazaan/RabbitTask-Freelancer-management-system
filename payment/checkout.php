<style type="text/css">
    body {
            background: linear-gradient(90deg, rgba(100,92,252,1) 0%, rgba(9,9,121,1) 100%, rgba(100,92,252,1) 100%);
            width: 90% !important;
    }
#wrapper1{
    width: 40%;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    margin-bottom: 20px;
  }
  #wrapper1>img {
      border-radius: 10px;
      height: 70px
  }
  form{
    max-width: 40% !important;
    margin-right: auto;
    margin-left: auto;
    background-color: white;
  }
  #submit-btn{
    width: 100%;
  }
  .both{
    width: 40%  !important;;
    text-align: center  !important;;
    margin-left: auto  !important;;
    margin-right: auto  !important;
    background-color: whitesmoke;
  }

</style>
<?php
ob_start();
session_start();
use \PhpPot\Service\StripePayment;

require_once "config.php";

if (!empty($_POST["token"])) {
    require_once 'StripePayment.php';
    $stripePayment = new StripePayment();
    
    $stripeResponse = $stripePayment->chargeAmountFromCard($_POST);
    
    require_once "DBController.php";
    $dbController = new DBController();
    
    $amount = $stripeResponse["amount"] /100;
    
    $param_type = 'sssssdsssss';
    $param_value_array = array(
        $_POST['email'],
        $_POST['address'],
        $_POST['phone'],
        $_POST['name'],
        $_POST['item_number'],
        $amount,
        $stripeResponse["currency"],
        $stripeResponse["balance_transaction"],
        $stripeResponse["status"],
        json_encode($stripeResponse),
        $_POST['job_id']
    );
    $query = "INSERT INTO tbl_payment (email, address,phone,name, item_number, amount, currency_code, txn_id, payment_status, payment_response,job_id) values (?, ?, ?, ?, ?, ?, ?, ?,?,?,?)";
    $id = $dbController->insert($query, $param_type, $param_value_array);
    
    if ($stripeResponse['amount_refunded'] == 0 && empty($stripeResponse['failure_code']) && $stripeResponse['paid'] == 1 && $stripeResponse['captured'] == 1 && $stripeResponse['status'] == 'succeeded') 
    {
        $successMessage = "Stripe payment is completed successfully. The TXN ID is " . $stripeResponse["balance_transaction"];

         $to = ""; // Please add Email address on which you want to recieve emails
            $from = $_POST['email']; // this is the sender's Email address
            $subject = "New Payment";
            $message = "Name: " . $_POST['name']  . "\n"."EmailID: ". $from. "\n"."Billing address: ". $_POST['address']. "\n"."phone:".$_POST['phone']. "\n"."amount:".$amount ;
            
            $headers = "From:" . $from;
            
            // mail($to,$subject,$message,$headers);   
    }
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/ >
</head>
<body>

    <section id="wrapper1">
         <img src="images/st.png" >
       </section>

    <section id="main-wrapper">   
        <?php if(!empty($successMessage)) { ?>
        <div id="success-message" class="both"><?php echo $successMessage; ?></div>
        <?php  } ?>
        <div id="error-message" class="both"></div>    
            <form id="frmStripePayment" action=""
                method="post" style="">
                <div class="field-row">
                    <label>Card Holder Name</label> <span
                        id="card-holder-name-info" class="info"></span><br>
                    <input type="text" id="name" name="name"
                        class="demoInputBox">
                </div>
                <div class="field-row">
                    <label>Email</label> <span id="email-info"
                        class="info"></span><br> <input type="email"
                        id="email" name="email" class="demoInputBox"
                         value="<?php echo $_SESSION['validclient']; ?>" readonly >
                </div>
                <div class="field-row">
                    <label>Phone</label> <span id="phone-info"
                        class="info"></span><br> <input type="text"
                        id="phone" name="phone" class="demoInputBox" >
                </div>
                <div class="field-row">
                    <label>Address</label> <span id="address-info"
                        class="info"></span><br> <input type="text"
                        id="address" name="address" class="demoInputBox" >
                </div>
                
                
                <div class="field-row">
                    <label>Card Number</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text" id="card-number" name="card-number"
                        class="demoInputBox">
                </div>
                <div class="field-row">
                    <div class="contact-row column-right">
                        <label>Expiry Month / Year</label> <span
                            id="userEmail-info" class="info"></span><br>
                        <select name="month" id="month"
                            class="demoSelectBox">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select> 
                        <input type="text" name="year" id="year" class="demoSelectBox" style="width: 60px"> 

                    </div>
                    <div class="contact-row cvv-box">
                        <label>CVC</label> <span id="cvv-info"
                            class="info"></span><br> <input type="text"
                            name="cvc" id="cvc"
                            class="demoInputBox cvv-input">
                    </div>
                </div>
                <div>
                    <input type="submit" name="pay_now" value="Pay"
                        id="submit-btn" class="btnAction"
                        onClick="stripePay(event);">

                    <div id="loader">
                        <img alt="loader" src="LoaderIcon.gif">
                    </div>
                </div>
                <input type='hidden' name='amount' value='<?php echo $_SESSION['amount']; ?>'>
                 
                
                <input
                    type='hidden' name='currency_code' value='USD'>
                     <input type='hidden' name='item_name' value='<?php echo $_SESSION['clientid']; ?>'>
                     <input type='hidden' name='job_id' value='<?php echo $_SESSION['clientid']; ?>'>
                <input type='hidden' name='item_number'
                    value='<?php echo $_SESSION['clientid']; ?>'>
            </form>
    </section>        

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="stripe-php-master/node_modules/jquery/dist/jquery.min.js"
        type="text/javascript"></script>
    <script>
function cardValidation () {
    var valid = true;
    var name = $('#name').val();
    var email = $('#email').val();
    var cardNumber = $('#card-number').val();
    var month = $('#month').val();
    var year = $('#year').val();
    var cvc = $('#cvc').val();

    var address = $('#address').val();
    var phone = $('#phone').val();

    $("#error-message").html("").hide();

    if (name.trim() == "") {
        valid = false;
    }
    if (email.trim() == "") {
    	   valid = false;
    }
    if (cardNumber.trim() == "") {
    	   valid = false;
    }

    if (month.trim() == "") {
    	    valid = false;
    }
    if (year.trim() == "") {
        valid = false;
    }
    if (cvc.trim() == "") {
        valid = false;
    }

     if (address.trim() == "") {
        valid = false;
    }
    if (phone.trim() == "") {
        valid = false;
    }

    if(valid == false) {
        $("#error-message").html("All Fields are required").show();
    }

    return valid;
}
//set your publishable key
Stripe.setPublishableKey("<?php echo STRIPE_PUBLISHABLE_KEY; ?>");

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $("#submit-btn").show();
        $( "#loader" ).css("display", "none");
        //display the errors on the form
        $("#error-message").html(response.error.message).show();
    } else {
        //get token id
        var token = response['id'];
        //insert the token into the form
        $("#frmStripePayment").append("<input type='hidden' name='token' value='" + token + "' />");
        //submit form to the server
        $("#frmStripePayment").submit();
    }
}
function stripePay(e) {
    e.preventDefault();
    var valid = cardValidation();

    if(valid == true) {
        $("#submit-btn").hide();
        $( "#loader" ).css("display", "inline-block");
        Stripe.createToken({
            number: $('#card-number').val(),
            cvc: $('#cvc').val(),
            exp_month: $('#month').val(),
            exp_year: $('#year').val()
        }, stripeResponseHandler);

        //submit from callback
        return false;
    }
}
</script>
</body>
</html>