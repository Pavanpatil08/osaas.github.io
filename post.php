<?php 


if(isset($_POST['name']))

 {

  $name = $_POST['name'];
  
  $cc = $_POST['cc'];

  $phone = $_POST['phone'];

  $mail = $_POST['email'];

  $individual = $_POST['individual'];

  $designation = $_POST['designation'];

  $service = $_POST['services'];
	
  $message = $_POST['message'];

  

  
  $text = " Name: " . $name . "\n Phone: " . $cc . "-" . $phone . "\n Mail: " .$mail . "\n Individual: " . $individual . "\n Designation: " . $designation . "\n Service: " . $service . "\n\n Message: " . $message . "\n";

  $subject = "OSAAS: Message from " . $name;

  $fp = fopen('wqasxzedcft.txt', "w");



    if(fwrite($fp, $text))  {

        mail("sachintrack@gmail.com",$subject,$text);



    }

fclose ($fp);    

}

 header('Location: index.html');
?>