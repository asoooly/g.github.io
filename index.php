<?php
if(isset($_POST['send'])) {
require_once 'mail.php';
$mail->setFrom('mustufa1148@gmail.com', 'hooooo');
$mail->addAddress('ak2825530@gmail.com‏');         // Add a recipient
$mail->Subject = 'I wish this program to work';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->send();
header("Location: index.php", true);
}
?>
<form method="POST">
<button type="submit" name="send">ارسال</button>
</form>
