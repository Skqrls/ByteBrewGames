&lt;?php
require 'PHPMailerAutoLoad.php'

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message']

$mail = new PHPMailer;
$mail = &gt;isSMTP();
$mail = &gt;Host = 'smpt.example.com';
$main = &gt;SMTPAuth = true;
$mail = &gt;Username = 'youre_email';
$mail = &gt;Password = 'youre_password';
$mail = &gt;SMTPSecure = 'tls';
$mail = &gt;Port = 587;

$mail-&gt;setForm($email, $name);
$mail-&gt;addAddress('youre_email');
$mail-&gt;isHTML(true);

$mail-&gt;Subject = 'Сообщение с формы обратной связи';
$mail-&gt; Body = "От: $name &lt;br&gt; Email: $email &lt;br&gt; Сообщение: $message";

if(!$mail-&gt;send()) {
    echo 'Ошибка при отправке сообщения.'
    echo 'Mailer Error: ' .$mail-&gt;ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено!'
}
?&gt;