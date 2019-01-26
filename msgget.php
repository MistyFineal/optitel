$ch = curl_init("https://api.line.me/v2/bot/message/".$obj_id."/content");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json; charser=UTF-8',
	'Authorization: Bearer ' . $this-&gt;ZxkQ9wbu0kkxOOi/Z9+ZmTZ6uvC8amCbW0m4T0mr5aGMCPu8ICoZdfAxG67mMJBelOVz8qkyAS0gaNGnQ+dU0ty+lAodW3v0HfGTKFtIYajk/eEJreqn2w8WhGTAFobZuALCQZ0WVBbfw13NM1kx+QdB04t89/1O/w1cDnyilFU=

));
$result = curl_exec($ch);
curl_close($ch);
$msg    = json_decode($result);
if ( $msg-&gt;message != "" ){
	//error
}
