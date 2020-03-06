<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Center</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/site.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--<script src="./js/jquery-3.3.1.js"></script>-->
    <!--<script src="./js/bootstrap.js"></script>-->
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

</head>

<body>
    <nav class="navbar">
        <div class="container center">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#"><img class="img-responsive center" src="images.jpg" width="70px"
                        style="border-radius: 50%;"></a>
            </div>
        </div>
    </nav>



    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <img src="images.jpg" class="img-responsive">

            </img>
            <a href="#">

                Some Text
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <img src="images.jpg" class="img-responsive">

            </img>
            <a href="#">
                Some Text
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <img src="images.jpg" class="img-responsive">

            </img>
            <a href="#">
                Some Text
            </a>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
            <img src="images.jpg" class="img-responsive">

            </img>
            <a href="#">
                Some Text
            </a>
        </div>
    </div>
    <hr>

    <div class="row">
        <form method="post" action="./Index.php" class="col-md-8 col-md-offset-2">

            <div class="form-group">
                <h3 for="sel1">Quote Preference</h3>
                <select class="green_border" id="sel1" name="sel1">
                    <option>Contact Borrower</option>
                    <option>Send to Lender</option>
                </select>
            </div>
            <div class="form-group">
                <h3 class="text-capitalize">Primary Contact</h3>
                <label for="phoneno">Phone #</label>
                <input type="text" id='phoneno' name="phoneno" class="green_border">
                <label for="email" class="mt">Email</label>
                <input type="text" id='email' name="email" class="green_border">
            </div>
            <div class="form-group">
                <h3 class="text-capitalize">Primary Borrower's Information</h3>
                <label for="fulname">Full Name</label>
                <input type="text" id='fulname' name="fulname" class="green_border">
                <label for="dob" class="mt">Date of Birth</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' class="green_border" name="dob" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h3 class="text-capitalize">Spouse/2nd Borrower's Information</h3>
                <label for="fulname1">Full Name</label>
                <input type="text" name="fulname1" id='fulname1' class="green_border">
                <label for="dob1" class="mt">Date of Birth</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1' name="dob1">
                        <input type='text' name="dob1" class="green_border " />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <h3 class="text-capitalize">Other Information</h3>
                    <label for="currentaddress">Current Address</label>
                    <input type="text" id='currentaddress' name="currentaddress" class="green_border">
                    <label for="newaddress" class="mt">New Home Address</label>
                    <input type="text" id='newaddress' name="newaddress" class="green_border">
                    <label for="closedate" class="mt">Closing Date</label>
                    <div class='input-group date' id='datetimepicker3' name="dob1">
                        <input type='text' name="closedate" class="green_border " />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <!-- <input type="text" id='closedate' name="closedate" class="green_border"> -->
                    <label for="loanno" class="mt">Loan #</label>
                    <input type="text" id='loanno' name="loanno" class="green_border">
                    <label for="insurance">Insurance Escrowed</label>
                    <br>
                    <label class="radio-inline">
                        <input type="radio" value="Yes" name="optradio" checked>Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="No" name="optradio">No
                    </label>
                </div>

                <div class="form-group">
                    <label for="mortgage">Mortgage Information</label>
                    <textarea type="text" class="green_border" name="mortageInformation" rows="5"></textarea>
                </div>
                <div class="pull-right">
                    <button class="btn btn-lg btn-success" name='btn_submit' type="submit">Get a Quote</button>
                </div>


        </form>
    </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
        $(function () {
            $('#datetimepicker2').datetimepicker();
        });
        $(function () {
            $('#datetimepicker3').datetimepicker();
        });
    </script>
</body>

</html>


<?php
if(!empty($_POST)){
   $email_to="rite2rafi@gmail.com";
   ini_set("smtp_server","smtp.gmail.com");
   ini_set("smtp_port","587");
   ini_set("error_logfile","error.log");
   ini_set("debug_logfile","debug.log");
   ini_set("auth_username","myemail@portal.eabc.ac.ug"); // here you email from cpanel 
   ini_set("auth_password","ie9kHkjljTZK"); // password of account
   ini_set("force_sender","ekaur45Dev@gmail.com");
   mail("ekaur45Dev@gmail.com","test","sadfsad");
   $quote_referece = $primary_contact_phone_no = $Primary_contact_email = $primary_borrower_Name = $primary_borrower_dob = $second_borrower_Name = $second_borrower_dob = $current_address = $new_address = $closing_date = $loanNo = $insurance = $Mortgage_Information = "";
   if (isset($_POST['btn_submit'])){
   $quote_referece = $_POST['sel1'];
   $primary_contact_phone_no = $_POST['phoneno'];
   $Primary_contact_email = $_POST['email'];
   $primary_borrower_Name = $_POST['fulname'];
   $primary_borrower_dob = $_POST['dob'];
   $second_borrower_Name = $_POST['fulname1'];
   $second_borrower_dob = $_POST['dob1'];
   $current_address = $_POST['currentaddress'];
   $new_address = $_POST['newaddress'];
   $closing_date = $_POST['closedate'];
   $loanNo = $_POST['loanno'];
   $insurance = $_POST['optradio'];
   $Mortgage_Information = $_POST['mortageInformation'];
   $body="<style>
   table, th, td {
     border: 1px solid black;
   }
   
   th, td {
     padding: 10px;
   }
   </style><table cellpadding='10' border=1>
   <tr>
       <td>Quote Preference:</td>
       <td>$quote_referece</td>
   </tr>
   <tr>
       <td>Phone #:</td>
       <td>$primary_contact_phone_no</td>
   </tr>
   <tr>
       <td>Email:</td>
       <td>$Primary_contact_email</td>
   </tr>
   <tr>
       <td>Full Name:</td>
       <td>$primary_borrower_Name</td>
   </tr>
   <tr>
       <td>Date of Birth:</td>
       <td>$primary_borrower_dob</td>
   </tr>
   <tr>
       <td>Spouse Full Name:</td>
       <td>$second_borrower_Name</td>
   </tr>
   <tr>
       <td>Spouse Date of Birth:</td>
       <td>$second_borrower_dob</td>
   </tr>
   <tr>
       <td>Current Address:</td>
       <td>$current_address</td>
   </tr>
   <tr>
       <td>New Home Address:</td>
       <td>$new_address</td>
   </tr>
   <tr>
       <td>Closing Date:</td>
       <td>$closing_date</td>
   </tr>
   <tr>
       <td>Loan #:</td>
       <td>$loanNo</td>
   </tr>
   <tr>
       <td>Insurance Escrowed:</td>
       <td>$insurance</td>
   </tr>
   <tr>
       <td>Mortgage Information:</td>
       <td>$Mortgage_Information</td>
   </tr>
</table>";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   $result = mail($email_to,"Information About Insurance", $body,$headers);
   if( $result == true ) {
               echo "<script>alert('Thank you for submitting your details. You will be contacted soon.');</script>";
            }else {
               //echo "Message could not be sent...";
            }
    }
}
?>
