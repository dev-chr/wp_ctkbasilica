<?php

date_default_timezone_set("America/New_York");

$value = (isset($_GET['who']))?$_GET['who']:'7';

settype($value, "integer");

if ((0 < $value) && ($value < 5)) { 

	switch($value) {
		case 1;
			$user = 'Person 1';
		break; 
		case 2;
			$user = 'Person 2';
		break;
		case 3;
			$user = 'Person 3';
		break;
		case 4;
			$user = 'Person 4';
		break;
		default:
			$user = 'Person 5';
		break;
	}
} else {
	$user = 'Parish'; 
}

require_once 'autoload.php';
require_once 'SimpleMail.class.php';
require_once 'Config.class.php';

$helperLoader = new SplClassLoader('Helpers');
$mailLoader   = new SplClassLoader('SimpleMail');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;

$config->load('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

	$secret = 'google-secret-here';

	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	
	$responseData = json_decode($verifyResponse);
	} else {
		$responseData = "empty";
	}
	
	
	$destination = (isset($_POST['form-dest']))?$_POST['form-dest']:'9';
	settype($destination, "integer");
	
	if ((0 < $destination) && ($destination < 5)) { 
	
		switch($destination) {
			case 1;
				$to_e = 'email@domain.com';
			break; 
			case 2;
				$to_e = 'email@domain.com';
			break;
			case 3;
				$to_e = 'email@domain.com';
			break;
			case 4;
        $to_e = 'email@domain.com';
			break;
			default:
				$to_e = 'email@domain.com';
			break;
		}
	} else {
		$to_e = 'basilica@hamiltondiocese.com';
	}
	
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

	

    if ($name && $email && $emailIsValid && $subject && $message && $responseData->success ) {
	 							 
        $mail = new SimpleMail();

        $mail->setTo($to_e);
        $mail->setFrom($config->get('emails.from'));
        $mail->setReplyTo($email);
        $mail->setSender($name);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);
        
function substrwords($text, $maxchar, $end='... Excessive length. Message trimmed.') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

$message = substrwords($message,3000);

$body = "{$config->get('fields.name')}: {$name}
{$config->get('fields.email')}: {$email}
{$config->get('fields.phone')}: {$phone}
                
{$config->get('fields.message')}:

{$message}".PHP_EOL;



        $mail->setHtml($body);
        
		$mail->send();
        $emailSent = true;
        
    } else {
        $hasError = true;
    }
} 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en-US">
<head>
	
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	 
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/ctkbasilica/style.css" />
	
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/ctkbasilica/css/cbck.css" />

	<link rel="stylesheet" type="text/css" href="/wp-content/themes/ctkbasilica/css/form.css" />

	<title>Contact</title>
	
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<script type="text/javascript" src="/wp-content/themes/ctkbasilica/js/contact-form.js"></script>
	<script type="text/javascript" src="/wp-content/themes/ctkbasilica/js/expanding-text.js"></script>
	
		
	
</head>

<body style="background: #fff; padding: 2rem;">
	
	
	<? if(!empty($emailSent)): ?>
   
		     <p><? echo $config->get('messages.success'); ?></p>
   
    <?php else: ?>
    
        		<?php if(!empty($hasError)): ?>
        
	        <p><?php echo $config->get('messages.error'); ?></p>
            
			<?php endif; ?>

    
	    <h2>Contact: <?=$user?></h2>
	    
        <form action="<? echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>?contact=done" enctype="application/x-www-form-urlencoded" id="contact-form" method="post">
	      
		<input type="hidden" value="<?=$value?>" name="form-dest">

        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>

           
        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
              

        <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                
 
        <input type="text" class="balloon" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
               
  		<textarea class="expanding" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message');?>" required maxlength="3000"></textarea>
          
            
        <div class="g-recaptcha" data-sitekey="google-public-key-here"></div>
           
           
        <button type="submit" class="btn">
        <?php echo $config->get('fields.btn-send'); ?>
        </button>
            
        </form>
    
    <?php endif; ?>
	
	
</body>
</html>