<?php
# ----------------------------------------------------
# -----
# ----- This script was generated by PHP-Form Wizard 1.2.5 on 5/24/2011 at 4:56:08 PM
# -----
# ----- http://www.tools4php.com
# -----
# ----------------------------------------------------


// Receiving variables
@$pfw_ip= $_SERVER['REMOTE_ADDR'];
@$Full_name = addslashes($_POST['Full_name']);
@$Email = addslashes($_POST['Email']);
@$Contact_Number = addslashes($_POST['Contact_Number']);
@$Arrival_Date = addslashes($_POST['Arrival_Date']);
@$Arrival_Month = addslashes($_POST['Arrival_Month']);
@$Arrival_Year = addslashes($_POST['Arrival_Year']);
@$Departure_Date = addslashes($_POST['Departure_Date']);
@$Departure_Month = addslashes($_POST['Departure_Month']);
@$Departure_Year = addslashes($_POST['Departure_Year']);
@$Child = addslashes($_POST['Child']);
@$Adult = addslashes($_POST['Adult']);
@$Other_Details = addslashes($_POST['Other_Details']);

// Validation
//Sending Email to form owner
$pfw_header = "From: $Email\n"
  . "Reply-To: $Email\n";
$pfw_subject = "Mail from website | Naldehra Cottages";
$pfw_email_to = "ritasawhney@hotmail.com";
$pfw_message = "Visitor's IP: $pfw_ip\n"
. "Full_name: $Full_name\n"
. "Email: $Email\n"
. "Contact_Number: $Contact_Number\n"
. "Arrival_Date: $Arrival_Date\n"
. "Arrival_Month: $Arrival_Month\n"
. "Arrival_Year: $Arrival_Year\n"
. "Departure_Date: $Departure_Date\n"
. "Departure_Month: $Departure_Month\n"
. "Departure_Year: $Departure_Year\n"
. "Child: $Child\n"
. "Adult: $Adult\n"
. "Other_Details: $Other_Details\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

header("Location: success.html");

?>
