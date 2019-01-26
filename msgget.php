$ch = curl_init("https://api.line.me/v2/bot/message/".$obj_id."/content");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json; charser=UTF-8',
	'Authorization: Bearer ' . $this-&gt;AccessToken
));
$result = curl_exec($ch);
curl_close($ch);
$msg    = json_decode($result);
if ( $msg-&gt;message != "" ){
	// ÉGÉâÅ[èàóù
}