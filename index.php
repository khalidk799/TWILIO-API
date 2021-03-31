?php
$sid = "***********"; // Your Account SID from www.twilio.com/console
$token = "**********"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  'dESTINATION NUMBER', // Text this number
  [
    'from' => 'SOURCE NUMBER', // From a valid Twilio number
    'body' => 'HEY FRIENDS, CHAI PEELO'
  ]
);
print $message->sid;