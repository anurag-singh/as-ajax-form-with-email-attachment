<?php 
    // print_r($_POST);
     print_r($_FILES);

$totalElements = count($_POST);
$arrKey = array_keys($_POST);
$arrVal = array_values($_POST);

function as_format_text($text){
    return ucwords((str_replace("_", " ", $text)));
}

$name = $_POST['name'];         // used in email sending
$email = $_POST['email'];       // used in email sending
?>

<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 ref -https://stackoverflow.com/questions/10899384/uploading-both-data-and-files-in-one-form-using-ajax
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;


if (array_key_exists('file_photo_id', $_FILES)) {

    $attachFileSize = $_FILES['file_photo_id']['size'];

    if($attachFileSize > 0) {
        $hasAttachment = TRUE;
        echo "attached";
    } else {
        $hasAttachment = FALSE;

        echo "sorry";
        
    }


    die;

    // First handle the upload
    // Don't trust provided filename - same goes for MIME types
    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation

    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['file_photo_id']['name']));
    move_uploaded_file($_FILES['file_photo_id']['tmp_name'], $uploadfile);

} 

require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

// Enable HTML format
$mail->IsHTML(true);

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "anuragsinghce@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "idozyshwmgvepuru";

//Set who the message is to be sent from
$mail->setFrom('anuragsinghce@gmail.com', 'seniorassist.in');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@seniorassist.in', 'seniorassist.in');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = 'Register Email - seniorassist.in';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//$mail->msgHTML($response);

$mail->Body = '<b>Email Content</b> <br><br>';

for($i= 0; $i<$totalElements; $i++) {
     $mail->Body .= '<b>' . as_format_text($arrKey[$i]) .'</b> - '. $arrVal[$i] . " </br> ";
}

//Replace the plain text body with one created manually
// $mail->AltBody = $email;

//Attach an image file
if ($hasAttachment === TRUE) {
    $mail->addAttachment($uploadfile, 'Photo-id-proof.jpg');
}

//send the message, check for errors
if (!$mail->send()) {
    $output = json_encode(array('status'=> 0, 'text' => $mail->ErrorInfo));
} else {
    $output = json_encode(array('status'=>1, 'text' => 'Thanks for your message'));
}
die($output);
