<?php

// posted data to local variables
$Name = Trim(stripslashes($_POST['Name'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$appName = Trim(stripslashes($_POST['appName']));
$appPhone = Trim(stripslashes($_POST['appPhone']));
$appEmail = Trim(stripslashes($_POST['appEmail']));
$appURL1 = Trim(stripslashes($_POST['appURL1']));
$appURL2 = Trim(stripslashes($_POST['appURL2']));
$Address = Trim(stripslashes($_POST['Address']));
$City = Trim(stripslashes($_POST['City']));
$State = Trim(stripslashes($_POST['State']));
$Zip = Trim(stripslashes($_POST['Zip']));
$Section1 = Trim(stripslashes($_POST['Section1']));
$Fields1 = Trim(stripslashes($_POST['Fields1']));
$Section2 = Trim(stripslashes($_POST['Section2']));
$Fields2 = Trim(stripslashes($_POST['Fields2']));
$Section3 = Trim(stripslashes($_POST['Section3']));
$Fields3 = Trim(stripslashes($_POST['Fields3']));
$chkFeatures = Trim(stripslashes($_POST['chkFeatures']));
$Features = Trim(stripslashes($_POST['Features']));
$logoColor = Trim(stripslashes($_POST['logoColor']));
$Color1 = Trim(stripslashes($_POST['Color1']));
$Color2 = Trim(stripslashes($_POST['Color2']));
$GoogleAccount = Trim(stripslashes($_POST['GoogleAccount']));
$Username = Trim(stripslashes($_POST['Username']));
$Password = Trim(stripslashes($_POST['Password']));
$ReferralEmail = Trim(stripslashes($_POST['ReferralEmail']));
$emailSubject = Trim(stripslashes($_POST['emailSubject']));
$emailBody = Trim(stripslashes($_POST['emailBody']));
$Hosting = Trim(stripslashes($_POST['Hosting']));
$Subdomain = Trim(stripslashes($_POST['Subdomain']));
$Domain = Trim(stripslashes($_POST['Domain']));
$HostUsername = Trim(stripslashes($_POST['HostUsername']));
$HostPassword = Trim(stripslashes($_POST['HostPassword']));

// Validate E-Mail isn't not a Email
if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
	} 
	else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../formerror.htm\">";
	exit;
}

// validate required fields have data
if(trim($Name) == '' || trim($Email) == '') {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../formerror.htm\">";
	exit;
}

// prepare email
$EmailFrom = "info@app-platform.net";
$EmailTo = "info@app-platform.net";
$Subject = "Custom Info Capture App Info from app-platform.net";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "App Info";
$Body .= "\n";
$Body .= "App Name: ";
$Body .= $appName;
$Body .= "\n";
$Body .= "App Phone: ";
$Body .= $appPhone;
$Body .= "\n";
$Body .= "App Email: ";
$Body .= $appEmail;
$Body .= "\n";
$Body .= "App URL 1: ";
$Body .= $appURL1;
$Body .= "\n";
$Body .= "App URL 2: ";
$Body .= $appURL2;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "State: ";
$Body .= $State;
$Body .= "\n";
$Body .= "Zip: ";
$Body .= $Zip;
$Body .= "\n";
$Body .= "\n";
$Body .= "Section1: ";
$Body .= $Section1;
$Body .= "\n";
$Body .= "Fields: ";
$Body .= "\n";
$Body .= $Fields1;
$Body .= "\n";
$Body .= "\n";
$Body .= "Section2: ";
$Body .= $Section2;
$Body .= "\n";
$Body .= "Fields: ";
$Body .= "\n";
$Body .= $Fields2;
$Body .= "\n";
$Body .= "\n";
$Body .= "Section3: ";
$Body .= $Section3;
$Body .= "\n";
$Body .= "Fields: ";
$Body .= "\n";
$Body .= $Fields3;
$Body .= "\n";
$Body .= "\n";
$Body .= "I want a quote on Additonal Features: ";
$Body .= $chkFeatures;
$Body .= "\n";
$Body .= "Features I would like: ";
$Body .= "\n";
$Body .= $Features;
$Body .= "\n";
$Body .= "\n";
$Body .= "Colors";
$Body .= "\n";
$Body .= "Use my corporate / logos colors: ";
$Body .= $logoColor;
$Body .= "\n";
$Body .= "Color 1: ";
$Body .= $Color1;
$Body .= "\n";
$Body .= "Color2: ";
$Body .= $Color2;
$Body .= "\n";
$Body .= "\n";
$Body .= "Photo Gallery";
$Body .= "\n";
$Body .= "I would like to use a Picasa photo gallery: ";
$Body .= $GoogleAccount;
$Body .= "\n";
$Body .= "Username: ";
$Body .= $Username;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $Password;
$Body .= "\n";
$Body .= "\n";
$Body .= "Referral Email";
$Body .= "\n";
$Body .= "I would like to add a Referral Email: ";
$Body .= $ReferralEmail;
$Body .= "\n";
$Body .= "Email Subject: ";
$Body .= $emailSubject;
$Body .= "\n";
$Body .= "Email Body: ";
$Body .= "\n";
$Body .= $emailBody;
$Body .= "\n";
$Body .= "\n";
$Body .= "Hosting";
$Body .= "\n";
$Body .= "I would like my app hosted on App-Platform.net: ";
$Body .= $Hosting;
$Body .= "\n";
$Body .= "I would like my subdomain to be: ";
$Body .= $Subdomain;
$Body .= "\n";
$Body .= "\n";
$Body .= "I have my own hosting";
$Body .= "\n";
$Body .= "Domain: ";
$Body .= $Domain;
$Body .= "\n";
$Body .= "Username: ";
$Body .= $HostUsername;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $HostPassword;

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../paymentCIC.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.htm\">";
}
?>