<?php
$API = '5569138339:AAFPifJL8KvfHAjwIjyVx6EzMMlGrwWvPmw';
define('API_KEY',$API);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$Ch = "https://t.me/eng_hasan97"; // معرف قناتك بدون@
//////////////////
$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$Ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"👨‍💻¦ لا تستطيع استخدام البوت ؛🍂
📬¦ عليك الاشتراك في قناة البوت ؛ 🕸
📡¦ CHannel -: •⊱ @eng_hasan97 ⊰•️
ثم ارسل { /start }",
]);return false;}
if($text == "/start"){
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"🕵‍♂¦ اهلا بك يا 👋🏻 ؛ [$name](tg://user?id=$from_id)
- يمكنك من خلال هذا البوت معرفه *Bio* حسابك او حساب اصدقائك او قناتك
فقط ارسل المعرف بدون { @ }
- مثال -: *RAMBO_SYR*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📡¦ [اضغط هنا وتابع جديدنا 🌐؛](https://t.me/eng_hasan97)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"✡قــنــاة الــبوت✡",'url'=>"https://t.me/eng_hasan97"]],
[['text'=>" ☑لــشــراء بــوت راسـلني☑ ",'url'=>"https://t.me/Lq_bc"]],[['text'=>" 🔉تــــابــع جــديــدنــا لبـوتـات🔉",'url'=>"https://t.me/Lq_bc"]],
]
])
]);
}
if($text != '/start'){
if(preg_match('/([a-z])|([A-Z])/i',$text)){
    $getbio = file_get_contents("https://t.me/Lq_bc/bio/?userid=$text");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حسنا بايو هذا المعرف  {@$text} 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

$getbio
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$Message->message_id,
 ]);
} else 
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"- عزيزي ؛ $name 

- لايدعم اللغه العربيه 🌝 ارسل المعرف بدون @📌⚡️",
'reply_to_message_id'=>$Message->message_id,
  ]);
  }
  $SAEEDFiles = 618182912; //ايديك
$SA3ED = explode("\n",file_get_contents("SAEED.txt"));
$SAEED = count($SA3ED)-1;
$T4TTTT = file_get_contents("T4TTTT.txt");
if ($update && !in_array($chat_id, $SA3ED)) {
    file_put_contents("HASSAN.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == "م" and $chat_id == $SAEEDFiles){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤عدد مشتركين بوتك سيدي المطور هو { $HASSAN } مشترك ؛ 👥"
    ]);
}
if($text == "ن" and $chat_id == $SAEEDFiles){
 file_put_contents("HASSAN.txt", "HASSAN");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى { $HASSAN } مشترك ؛ 📬"
    ]);
}
if($text != "ن" and $T4TTTT == "HASSAN" and $chat_id == $SAEEDFiles){
  for ($i=0; $i < count($SA3ED); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$SA3ED[$i],
      'text'=>$text,
    ]);
  }
  unlink("HASSAN.txt");
}

?>