<?php
if(isset($_POST['send'])) {
require_once 'mail.php';
$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User'); // Add a recipient
$mail->Subject = 'Here is the subject';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->send();
header("Location: index.php", true);
}
?>
<form method="POST">
<button type="submit" name="send">ارسال</button>
</form>
