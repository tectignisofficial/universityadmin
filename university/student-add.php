<?php
session_start();
include("config.php");

if(isset($_POST['submit1'])){
    $fname=$_POST['fname'];
    $name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile_Number=$_POST['number'];
    $Category=$_POST['category'];
    $file=$_FILES['image']['name'];
    $filetmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($filetmp,"images/clientImage/".$file);
date_default_timezone_set('Asia/Kolkata');
$Date = date('y-m-d h:i:s');
$Password= rand(100000, 999999);
$hashPassword=password_hash($Password,PASSWORD_BCRYPT);

$from = 'Enquiry <snehal7039@gmail.com>' . "\r\n";
$sendTo = 'Enquiry <'.$Email.'>';
$subject = 'Your New Password';
// $fields = array( 'name' => 'name' );
$from = 'Tectignis IT Solution: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$qcheckclient=mysqli_query($conn,"select * from client where Email='".$Email."'");
$qcheckclientcount=mysqli_num_rows($qcheckclient);
if($qcheckclientcount>0){
    echo '<script>alert("Email already exists");window.location.href="clients.php"</script>';
}else{

$emailText = '
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting"> 
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <style>
      html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
  background: #f1f1f1;
}
* {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
  </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
<div style="margin:50px auto;width:70%;padding:20px 0">
<div style="border-bottom:1px solid #eee">
  <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">CRM</a>
</div>
<p style="font-size:1.1em">Hi '.$name.'</p>
<p>Please enter below password</p>
<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$Password.'</h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
</div>
</div>
</body>
</html>';

try{
foreach($_POST as $key => $value){
  if(isset($fields[$key])){
    $emailText.="$fields[$key]: $value\n";
  }
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){

    $sql=mysqli_query($conn,"INSERT INTO `client`( `Firm_Name`, `Authorized_Name`, `Email`, `Mobile_Number`, `Category`, `Password`,  `Date`, `Status`,`image`) VALUES ('$fname','$name','$Email','$Mobile_Number','$Category','$hashPassword','$Date','Activated','$file')");

    if($sql==1){
        echo '<script>alert("data successfully submitted");</script>';
        header("location:clients.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
 
}else{
  echo "something went wrong";
}
}
catch(\Exception $e){
echo "not done";
}
}
}

?>