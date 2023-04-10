x
<!-- Check to make the request method we get back from the server is set to POST and 
	field that are filled are not empty -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);


// 配置 SMTP 服务器
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host       = 'smtp.qq.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '706546983';
    $mail->Password   = 'qouehxqdjwmxbeaa';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	// it is going to check for the POST superglobal with the value
	// if it does exist, then it will just create a new variable. 
	// And assign that value to that variable
	// So whatever the uses types in when they fill out the form originally 
	// and add it to the value of our inputs
	// meaning that when the form reloads it's going to remember everything
	if (isset($_POST['name'])) { 
		$clientName = strip_tags(trim($_POST['name'])); }
	if (isset($_POST['email'])) { 
		$clientEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);}
	if (isset($_POST['field'])) {	
		$clientSubject = strip_tags(trim($_POST['field'])); }
	if (isset($_POST['gender'])) { 
		$clientGender = $_POST['gender']; }
	
	if (isset($_POST['institute'])) {	
		$clientInstitute = strip_tags(trim($_POST['institute'])); }	
	// here i am taking the variable $clientMessage
		//and running a filter sanitizing the string form the posted message, which will remove any HTML special characters
if (isset($_POST['remark'])) {
	$clientMessage = filter_input(INPUT_POST, 'remark', FILTER_SANITIZE_SPECIAL_CHARS);
}
	
	//// i don't want to mail anything unless my form is error-free. So here i am creating a form error variable
	// and sent that to false
	$formerrors = false; 
	if (empty($clientInstitute)):
		$err_institute = '<div class="error"> Institute is required</div>';
		//here variable is set to true if any validation or sanitization generates an error
		$formerrors = true; 
		endif;
	
	if (empty($clientName)):
		$err_name = '<div class="error"> Name is required</div>';
		//here variable is set to true if any validation or sanitization generates an error
		$formerrors = true; 
	endif; //input name field empty
	
	if (empty($clientGender)):
		$err_gender = '<div class="error"> Gender is required</div>';
		//here variable is set to true if any validation or sanitization generates an error
		$formerrors = true; 
	endif;

	if (!preg_match("/^[a-zA-Z ]*$/",$clientName)):
		$err_name = '<div class="error">Letters and whitespace only</div>';
		$formerrors = true;
	endif; // pattern doesn't match for name field

    if (!preg_match("/^[A-Za-z0-9._ ]*$/",$clientInstitute)):
		$err_institute = '<div class="error">Invalid formal</div>';
		$formerrors = true;
	endif; 
	

	if (!preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $clientEmail)):
    $err_email = '<div class="error">Email is invalid</div>';
		$formerrors = true;
	endif;// pattern doesn't match for email field

	if (empty($clientEmail)):
		$err_email = '<div class="error">Email is required</div>';
		$formerrors = true;
	endif; //input email field empty

	if (empty($clientSubject)):
		$err_subject = '<div class="error">Research field is required </div>';
		$formerrors = true;
	endif; // input subject field empty

	//if (empty($clientMessage)):
		//$err_message = '<div class="error">Message is required </div>';
		//$formerrors = true;
	//endif; //input message field empty

	//here i am creating if statement that verifies that there are no errors
	// and place mail() function
	if (!($formerrors)):
		
		 $mail->CharSet = 'UTF-8';
		 $mail->setFrom('706546983@qq.com' , $clientName);
         $mail->addAddress('daimy@ios.ac.cn');
         $mail->Subject = 'Beijing Logic Meeting 2023, From '.$clientEmail.' -- Contact Form';
         $mail->Body = "Name：$clientName \r\n".
		       "E-mail：$clientEmail \r\n".
              "Gender：$clientGender \r\n".
              "Institute：$clientInstitute \r\n".
              "Field：$clientSubject \r\n".
              "Message：$clientMessage";
			  

		// issue the mail command
		// Just to remind PHP doesn't actually mail anything
	    // Mail is handled by your server's send mail command.
		if ($mail->send()):	
			$msg = "Thank You! Your message has been sent.";
			// The following code will empty the input field after form has be emailed
			
			$mail->ClearAllRecipients();
			$mail->CharSet = 'UTF-8';
		 $mail->setFrom('706546983@qq.com' , 'Beijing Logic Meeting 2023');
         $mail->addAddress($clientEmail);
         $mail->Subject = 'Thanks for the registration of Beijing Logic Meeting 2023 ';
         $mail->Body = "Conference Schedule \r\n".
		               "Conference dates: 24-28 July 2023. \r\n".
					   "Schedule: There will be five speakers reporting every day from Monday to Thursday, and Friday is free. \r\n".
					   "Venue: Academy of Mathematics and Systems Science, Chinese Academy of Sciences. \r\n".
					   "Lunch and Dinner: Banquet style.";
					   
		 $mail->send();
		 
		 
		 
		 
			
			
			$clientName = empty($clientName);
			$clientEmail = empty($clientEmail);
			$clientSubject = empty($clientSubject);
			$clientMessage = empty($clientMessage);
			$clientInstitute = empty($clientInstitute);
			$clientGender = empty($clientGender);

		else:
			$msg = "Oops! Something went wrong and message couldn't be sent.";
		endif; // mail form data


	endif; //check for form errors


endif; //form submitted

?>

