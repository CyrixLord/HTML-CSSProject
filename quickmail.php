<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("aaron.edmonds@outlook.com","My subject",$msg);
mail("cyrixboy@hotmail.com","my subject",$msg);
mail("cyrixlord@gmail.com","my subject",$msg);
mail("aaronedmondsphone@gmail.com","my subject",$msg);

echo "mail ('name@sitedomain.com', $msg);";
echo "end";
exit();
?>
