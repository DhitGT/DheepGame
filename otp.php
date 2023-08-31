<?php
$smtpServer = "smtp.mailtrap.io";
$smtpPort = 587;
$smtpUsername = "61a86173564b69";
$smtpPassword = "36d4a7b9e1f256";

$to = "dhitgrow@gmail.com";
$from = "dheep.co@gmail.com";
$subject = "Your OTP Code";
$otp = random_int(100000, 999999);
$message = "Your OTP code is: " . $otp;

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "Content-Type: text/html\r\n";

$smtpAuth = [
    "auth" => "login",
    "username" => $smtpUsername,
    "password" => $smtpPassword
];

$smtpOptions = [
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false,
        "allow_self_signed" => true
    ]
];

$smtpContext = stream_context_create([
    "ssl" => $smtpOptions,
    "smtp" => $smtpAuth
]);

$mailSuccess = mail($to, $subject, $message, $headers, "-f $from");

if ($mailSuccess) {
    echo "OTP sent successfully!";
} else {
    echo "Failed to send OTP.";
}
