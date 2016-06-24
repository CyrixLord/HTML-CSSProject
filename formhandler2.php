<?php
if (empty($_POST)) {
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
}

//Creates function that removes magic escaping, if it's been applied, from values and then removes extra newlines and returns to foil spammers.
function clear_user_input($value) {
	if (get_magic_quotes_gpc()) $value=stripslashes($value);
	$value= str_replace( "\n", '', trim($value));
	$value= str_replace( "\r", '', $value);
	return $value;
	}

if ($_POST['comments'] == 'Please share any comments you have here') $_POST['comments'] = '[NO COMMENTS WERE INPUT BY THE USER]';	

//Create body of message by cleaning each field and then appending each name and value to it

$message ="Message from your web site:\r\n";

foreach ($_POST as $key => $value) {
	if(is_array($value)){ 				// if this post element is a checkbox group or multiple select box
		$value = implode(', ',$value);	// show array of values selected
		
	}

	$key = clear_user_input($key); 
	$value = clear_user_input($value);
	$$key = $value;
	
	$message .= "$key: $value\r\n";
}

//
// --------------------------------------------------------------------------------
//
$to = "aaron.edmonds@outlook.com";
$subject = "A message from the Tamanaka Collective";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@tamanaka.com>' . "\r\n";
$headers .= 'Reply-To: '. $email . "(" . $name . ")" . "\r\n";
//$headers .= 'Cc: '. $name . "\r\n";

mail($to,$subject,$message,$headers);

header('Location: thanks.html'); // replace "thanks.html" with the name and path to your actual thank you page
// Be sure to update the url to thanks.php if you use PHP file extensions!
?>