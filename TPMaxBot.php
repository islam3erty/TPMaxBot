<?php
ob_start();
$API_KEY = 'توكن';
echo "api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
define('API_KEY',$API_KEY);
function KasperTP($method,$datas=[]){
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
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$inline=$update->inline_query;
$voice = $update->message->voice;
$video = $update->message->video;
$audio = $update->message->audio;
$photo = $update->message->photo;
$game = $update->message->game;
$sticker = $update->message->sticker;
$contact = $update->message->contact;
$chat_id = $update->message->chat->id;
$replay = $message->reply_to_message; 
$from_id = $update->message->from->id;
$fwd = $update->message->forward_from;
$edited = $update->edited_message->text;
$document = $update->message->document;
$title_name = $update->message->chat->title;
$user = $update->message->from->username;
$name = $update->message->from->first_name;
$message_id = $update->message->message_id;
$edit_id = $update->edited_message->message_id;
$edit_chat_id = $update->edited_message->chat->id;
$fwd0 = $update->message->forward_from_chat->id;
$newid = $update->message->new_chat_member->id;
$edit_from_id = $update->edited_message->message->from->id;
$newbots = $update->message->new_chat_member->username;
$newname = $update->message->new_chat_member->first_name;
$reply_name = $update->message->reply_to_message->from->first_name;
$reply_user = $update->message->reply_to_message->from->username;
$reply_id = $update->message->reply_to_message->from->id;
$title =  "\nֆ • ᘐᖘ ᘉᗩᙢᕮ • ".$title_name."\nֆ • ᘐᖘ Ꭵᗪ • ".$chat_id;
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(KasperTP('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage]));
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}
//حصانة الادمنيه
$sudo = "219844437";
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id), true);
$group = $info['result']['status'];
$admin = "administrator";
$mudir = "creator";
$info_ = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$edit_chat_id&user_id=".$edit_from_id), true);
$group_ = $info_['result']['status'];
$bot = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=395446310");
//فنكشنات
function en($text) {
if(stristr($text,"a") or stristr($text, 'b') or stristr($text, 'c') or stristr($text, 'd') or stristr($text, 'e') or stristr($text, 'f') or stristr($text, 'g') or stristr($text, 'h') or stristr($text, 'i') or stristr($text, 'j') or stristr($text, 'k') or stristr($text, 'l') or stristr($text, 'm') or stristr($text, 'n') or stristr($text, 'o') or stristr($text, 'p') or stristr($text, 'q') or stristr($text, 'r') or stristr($text, 's') or stristr($text, 't') or stristr($text, 'u') or stristr($text, 'v') or stristr($text, 'w') or stristr($text, 'x') or stristr($text, 'y') or stristr($text, 'z')){
return true;
}
else
{
return false;
}
}
$en = en($text);
function ar($text) {
if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
return true;
}
else
{
return false;
}
}
$ar = ar($text);
// تخزين المجموعات
$_gif = file_get_contents("data/gif.json");
$gif_ = explode("\n", $_gif);
$_link = file_get_contents("data/link.json");
$link_ = explode("\n", $_link);
$_fwd = file_get_contents("data/fwd.json");
$fwd_ = explode("\n", $_fwd);
$_voice = file_get_contents("data/voice.json");
$voice_ = explode("\n", $_voice);
$_audio = file_get_contents("data/audio.json");
$audio_ = explode("\n", $_audio);
$_video = file_get_contents("data/video.json");
$video_ = explode("\n", $_video);
$_sticker = file_get_contents("tg/sticker.json");
$sticker_ = explode("\n", $_sticker);
$_photo = file_get_contents("data/photo.json");
$photo_ = explode("\n", $_photo);
$_hash = file_get_contents("data/hash.json");
$hash_ = explode("\n", $_hash);
$_ar = file_get_contents("data/ar.json");
$ar_ = explode("\n", $_ar);
$_en = file_get_contents("data/en.json");
$en_ = explode("\n", $_en);
$_game = file_get_contents("data/game.json");
$game_ = explode("\n", $_game);
$_contact = file_get_contents("data/contact.json");
$contact_ = explode("\n", $_contact);
$_document = file_get_contents("data/document.json");
$document_ = explode("\n", $_document);
$_username = file_get_contents("data/username.json");
$username_ = explode("\n", $_username);
$_bots = file_get_contents("data/bots.json");
$bots_ = explode("\n", $_bots);
$_edited = file_get_contents("data/edited.json");
$edited_ = explode("\n", $_edited);
$_inline = file_get_contents("data/inline.json");
$inline_ = explode("\n", $_inline);
$_spam = file_get_contents("data/spam.json");
$spam_ = explode("\n", $_spam);
$_mute = file_get_contents("data/mute.json");
$mute_ = explode("\n", $_mute);
$_add = file_get_contents("data/add.json");
$add_ = explode("\n", $_add);
$_replay = file_get_contents("data/replay.json");
$replay_ = explode("\n", $_replay);
$_wlc = file_get_contents("data/wlc.json");
$wlc_ = explode("\n", $_wlc);
$selict = explode("\n", file_get_contents("data/selict/s$chat_id.json"));
// الترحيب
if($data == "back"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"\n\nםـرحـبـا بـك فـي الاواםـر 🔰الان يـםـكـنـك اخـتـيـار םـا يـنـا๛ـبـك مـن الاواםـر ☑️",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"💬 ا໑امـﮩر الـحـمـايـة 🔰",'callback_data'=>"help"],['text'=>"💭 ا໑امـﮩر الاخـﮩرہ📍",'callback_data'=>"help1"]],[['text'=>"⏱ الـوقـﮩت وتـاريـخ ⏱",'callback_data'=>"time"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆",'callback_data'=>"rem"]],]])]);}}
if($text == "الاوامر" and $message->chat->type == "supergroup"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"\n\nםـرحـبـا بـك فـي الاواםـر 🔰الان يـםـكـنـك اخـتـيـار םـا يـنـا๛ـبـك مـن الاواםـر ☑️",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"💬 ا໑امـﮩر الـحـمـايـة 🔰",'callback_data'=>"help"],['text'=>"💭 ا໑امـﮩر الاخـﮩرہ📍",'callback_data'=>"help1"]],[['text'=>"⏱ الـوقـﮩت وتـاريـخ ⏱",'callback_data'=>"time"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆",'callback_data'=>"rem"]],]])]);}}
if($data == "help1"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
|---------------------------------------------------------|
(تثبيت) + برد
رد ؏ رسـالـه لـيـتـم تـثـبـيـتـه 📌
|---------------------------------------------------------|
(الغاء تثبيت) + برد
رد ؏ رسـالـه لـيـتـم الـغـاء تـثـبـيـتـه 📌
|---------------------------------------------------------|
(كتم) + برد
كـتـم ؏ـضـو بـرد 🔕
|---------------------------------------------------------|
(الغاء كتم) + برد
الـغـاء كـتـﮩم عـن الـ؏ـضـو 🔕
|---------------------------------------------------------|
(مسح المكتومين)
لـםـسـح جـםـيـ؏ الـםـكـتـ໑םـيـن 🔕
|---------------------------------------------------------|
(منع) + الكلمة
لـ໑ضـ؏ كـلـםـة داخـل الـفـلـتـر 🚯
|---------------------------------------------------------|
(الغاء منع) + الكلمة
لاخـراج كـلـםـة םـن الـفـلـتـر 🚯
|---------------------------------------------------------|
(قائمة المنع)
لـ؏ـرض كـلـםـات الـداخـل الـفـلـتـر 🚯
|---------------------------------------------------------|
(مسح قائمة المنع)
لـםـسـح كـلـםـات الـداخـل الـفـلـتـر 🚯
|---------------------------------------------------------|
(حظر) + برد
حـضر ؏ـضـو 📛
|---------------------------------------------------------|
(مغادرة البوت)
لـﮩخـر໑ج الـبـ໑ت םـﮩن الـمـجـمـو؏ـة 👞
|---------------------------------------------------------|
(تفعيل الردود)
لـﮩجـ؏ـل الـبـ໑تـ« يـتـﮩكـلـم
|---------------------------------------------------------|
(تعطيل الردود)
لـﮩجـ؏ـل الـبـ໑تـ« لا يـتـﮩكـلـم
|---------------------------------------------------------|
(مسح) + عدد / مطور فقط
مـسـح الرسـائـل بـ؏ـدد 🗑
|---------------------------------------------------------|
(ضع اسم) + نص
تـغـيـر اسـم الـمـجـمـو؏ـة 🔁
|---------------------------------------------------------|
(ماركداون) + نص
عـمـل نـصـوص بـجـمـيـ؏ انـوا؏ الـمـاركـدا໑ن ✨
|---------------------------------------------------------|
(معلوماتي)
اضـهـار مـ؏ـلـ໑مـاتـك الـشـخـصـيـه 📍
|---------------------------------------------------------|
(معلوماته) برد
اضـهـار مـ؏ـلـﮩ໑مـات الـمـسـتـخـدم بـرد 🎫
|---------------------------------------------------------|
(ماركت) + اسم
لـلـبـحـث ؏ـن تـطـبـيـق انـدرويـد 🛍
|---------------------------------------------------------|
(اختصار الرابط) + رابط
اخـتـصـار روابـط بـأشـهـر مـواقـ؏ الاخـتـصـار 🖇
|---------------------------------------------------------|
(انستا) + يوز
اضـهـار םـ؏ـلـ໑םـات الانـسـتـا الـخـاصـه بـ يـ໑زر
|---------------------------------------------------------|
(اشعار) + رقم + نص
تـصـםـيـ۾ اشـ؏ـار خـاص بـك 
|---------------------------------------------------------|
(قالب لوا) + الكليشه=الامر
انـشـاء كـ໑د كـلـيـشـه جـاهـزه
|---------------------------------------------------------|
(رابط حذف)
رابـط حـذفـ« حـ๛ـاب الـتـلـي نـهـائـيـاً
|---------------------------------------------------------|
📡┊*Channel Bots* [TP Team](t.me/dev_kasper)",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجـ(🔙)ـو؏", 'callback_data'=>"back"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆", 'callback_data'=>"rem"]],]])]);}}
if($data == "help"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"مـرحـبـا بـك 🌹
فـي ا໑امـﮩر الـحـمـايـة الـمـجـمـوعـة 🎋🙂
{-------------------------------------------------------}
قفل 🔐| فتح 🔓> الروابط 📎
قفل 🔐| فتح 🔓> التوجيه 🔄
قفل 🔐| فتح 🔓> الكلايش 📊
قفل 🔐| فتح 🔓> البصمة 🎙
قفل 🔐| فتح 🔓> الصوت 🔕
قفل 🔐| فتح 🔓> الصور 🏞
قفل 🔐| فتح 🔓> الفيديو 🎥
قفل 🔐| فتح 🔓> التعديل ⚡️
قفل 🔐| فتح 🔓> العربيه 🇮🇶
قفل 🔐| فتح 🔓> الانكليزيه 🇱🇷
قفل 🔐| فتح 🔓> انلاين 💎
قفل 🔐| فتح 🔓> الملصقات 🎭
قفل 🔐| فتح 🔓> الصور متحركه 🔞
قفل 🔐| فتح 🔓> جهات تصال ☎️
قفل 🔐| فتح 🔓> البوتات 🤖
قفل 🔐| فتح 🔓> المعرفات Ⓜ️
قفل 🔐| فتح 🔓> هاش تاك #⃣
قفل 🔐| فتح 🔓> العاب 🕹
قفل 🔐| فتح 🔓> الملفات 🗃
قفل 🔐| فتح 🔓> الدردشه 👤
{-------------------------------------------------------}
📡┊*Channel Bots* [TP Team](t.me/dev_kasper)",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجـ(🔙)ـو؏", 'callback_data'=>"back"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆", 'callback_data'=>"rem"]],]])]);}}
if($data == 'rem'){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/twsal.json");
$send = str_replace($from_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/twsal.json', $send);
KasperTP('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"✔️ تـﮩم اخـفـاء الاوامـﮩر 👁‍🗨",
'message_id'=>$message_id,]);}}
if($text == "/start" and !strpos($inch , '"status":"left"') !== false and $message->chat->type == "private"){
mkdir("data");
mkdir("data/selict");
mkdir("data/filter");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- םـرحـبـا بـك فـي بـ໑تـ» الـحـםـايـة 👾 •

- الـبـ໑تـ» رسـםـي مـن شـركـة تـلـيـجـرا۾ 🔰 •

- الـبـ໑تـ» يـجـ؏ـل םـجـםـو؏ـة اםـنـه 💯 •

- םـسـح جـםـيـ؏ ؏ـلانـاتـ» الـمـز؏ـجـه םـن الـםـيـديـا ♻️ •

- الـبـ໑ت حـصـل ؏ تـقـيـ۾ (⭐️⭐️⭐️⭐️⭐️) •

- كـيـف يـ؏ـםـل الـبـ໑تـ» ?? ⚠️ •

- اضـاف الـبـوتــ» اداري فـي الـםـجـםـ໑؏ـة ☑️ •

- ار๛ـل اםـر ( تفعيل ) في الـםـجـםـ໑؏ـة💡•

- بـ؏ـدهـا ار๛ـل اםـر ( الاوامر ) فـي الـםـجـםـ໑؏ـة 🛠 •
",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"الـםـطـ໑ر",'url'=>"t.me/dev_kasper"]],[['text'=>"تـ໑اصـل الـםـطـ໑ر",'url'=>"t.me/kasper_dev_bot"]],[['text'=>"هل لديك اقتراح ؟",'callback_data'=>"sendsudo"]],]])]);}
if($text == "تفعيل الترحيب" and !in_array($chat_id, $wlc_)){
if($from_id == $sudo){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل 📳 الـتـرحـيـب 📊".$title,]);}}
if($text == "تفعيل الترحيب" and in_array($chat_id, $wlc_)){
if($from_id == $sudo){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل 📳 الـتـرحـيـب 📊 بـتـأكـيـد 🔝".$title,]);}}
if($text == "تعطيل الترحيب" and in_array($chat_id, $wlc_)){
if($from_id == $sudo){
$send = file_get_contents("data/wlc.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/wlc.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 📴 الـتـرحـيـب 📊".$title,]);}}
if($text == "تعطيل الترحيب" and !in_array($chat_id, $wlc_)){
if($from_id == $sudo){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 📴 الـتـرحـيـب 📊 بـتـأكـيـد 🔝".$title,]);}}
if($update->message->new_chat_members and $newid != 341488340){
if(in_array($chat_id, $wlc_)){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- םـرحـبـا بـك ؏ـزيـزي 📮 •
- اسـمـك • $newname 📌 • 
- مـعـرفـك • @$newbots 🗳 •
- ايـديـك • $newid 🏷 •
- ضـيـف جـهـاتـك خـوة 😻 •
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"- تـابـ؏ جـديـدنـا 📢 •", 'url'=>"https://t.me/joinchat/AAAAAD_tj8ChUsPMOwncsQ"]],]])]);
}else
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
if($update->message->new_chat_members and $newid == 341488340 and !in_array($chat_id, $wlc_)){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[ 
'chat_id'=>$chat_id, 'text'=>"
ار๛ـل الان ( تفعيل ) 👾
اذا لـ۾ تـر๛ـل تـفـ؏ـيـل الـبـوتـ» لـن يـ؏ـمـل 🎩
تـابـ؏ جـديـدنـا [اضـغـط هـنـا](t.me/dev_kasper) 📢
", 'parse_mode'=>markdown, 'disable_web_page_preview'=>true,]);}
//الاوامر
if($text == "قفل الروابط" and !in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـروابـط 🖇".$title,]);}}
if($text == "قفل الروابط" and in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـروابـط 🖇 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الروابط" and in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/link.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/link.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـروابـط 🖇".$title,]);}}
if($text == "فتح الروابط" and !in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـروابـط 🖇 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل المعرفات" and !in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـمـعـرفـات Ⓜ️".$title,]);}}
if($text == "قفل المعرفات" and in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـمـعـرفـات Ⓜ️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح المعرفات" and in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/username.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/username.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـعـرفـات Ⓜ️".$title,]);}}
if($text == "فتح المعرفات" and !in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـعـرفـات Ⓜ️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل هاش تاك" and !in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـهـاش تـاك #⃣".$title,]);}}
if($text == "قفل هاش تاك" and in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـهـاش تـاك #⃣ بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح هاش تاك" and in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/hash.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/hash.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـهـاش تـاك #⃣".$title,]);}}
if($text == "فتح هاش تاك" and !in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـهـاش تـاك #⃣ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل التوجيه" and !in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـتـوجـيـه 🔄".$title,]);}}
if($text == "قفل التوجيه" and in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـتـوجـيـه 🔄 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح التوجيه" and in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/fwd.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/fwd.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـوجـيـه 🔄".$title,]);}}
if($text == "فتح التوجيه" and !in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـوجـيـه 🔄 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الكلايش" and !in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـكـلايـش 📊".$title,]);}}
if($text == "قفل الكلايش" and in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـكـلايـش 📊 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الكلايش" and in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/spam.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/spam.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـكـلايـش 📊".$title,]);}}
if($text == "فتح الكلايش" and !in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـكـلايـش 📊 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل العربيه" and !in_array($chat_id, $ar_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/ar.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـعـربـيـه 🇮🇶".$title,]);}}
if($text == "قفل العربيه" and in_array($chat_id, $ar_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـعـربـيـه 🇮🇶 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح العربيه" and !strpos($inch , '"status":"left"') !== false and in_array($chat_id, $add_) and in_array($chat_id, $ar_)){
if($from_id == $admin | strpos($inch , '"status":"member"') == false){
$send = file_get_contents("data/ar.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/ar.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـربـيـه 🇮🇶".$title,]);}}
if($text == "فتح العربيه" and !in_array($chat_id, $ar_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـربـيـه 🇮🇶 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الانكليزيه" and !in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/en.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الانـكـلـيـزيـه 🇱🇷".$title,]);}}
if($text == "قفل الانكليزيه" and in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الانـكـلـيـزيـه 🇱🇷 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الانكليزيه" and in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/en.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/en.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الانـكـلـيـزيـه 🇱🇷".$title,]);}}
if($text == "فتح الانكليزيه" and !in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الانـكـلـيـزيـه 🇱🇷 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل البصمه" and !in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـبـصـمـه 🎙".$title,]);}}
if($text == "قفل البصمه" and in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـبـصـمـه 🎙 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح البصمه" and in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/voice.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/voice.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـصـمـه 🎙".$title,]);}}
if($text == "فتح البصمه" and !in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـصـمـه 🎙 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الصوت" and !in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـصـوت 🔕".$title,]);}}
if($text == "قفل الصوت" and in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـصـوت 🔕 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الصوت" and in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/audio.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/audio.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـوت 🔕".$title,]);}}
if($text == "فتح الصوت" and !in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـوت 🔕 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الفيديو" and !in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـفـيـديـو 🎥".$title,]);}}
if($text == "قفل الفيديو" and in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـفـيـديـو 🎥 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الفيديو" and in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/video.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/video.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـفـيـديـو 🎥".$title,]);}}
if($text == "فتح الفيديو" and !in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـفـيـديـو 🎥 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الملصقات" and !in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـمـلصـقـات 🎭".$title,]);}}
if($text == "قفل الملصقات" and in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـمـلـصـقـات 🎭 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح الملصقات" and in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/sticker.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/sticker.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـصـقـات 🎭".$title,]);}}
if($text == "فتح الملصقات" and !in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـصـقـات 🎭 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "قفل الصور" and !in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـصـور 🏞".$title,]);}}
if($text == "قفل الصور" and in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـصـور 🏞 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح الصور" and in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/photo.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/photo.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور 🏞".$title,]);}}
if($text == "فتح الصور" and !in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور 🏞 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "قفل البوتات" and !in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـبـوتـات 🤖".$title,]);}}
if($text == "قفل البوتات" and in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـبـوتـات 🤖 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح البوتات" and in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/bots.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/bots.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـوتـات 🤖".$title,]);}}
if($text == "فتح البوتات" and !in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـوتـات 🤖 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل العاب" and !in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـعـاب 🕹".$title,]);}}
if($text == "قفل العاب" and in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـعـاب 🕹 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح العاب" and in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/game.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/game.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـاب 🕹".$title,]);}}
if($text == "فتح العاب" and !in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـاب 🕹 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الملفات" and !in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـمـلـفـات 🗃".$title,]);}}
if($text == "قفل الملفات" and in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـمـلـفـات 🗃 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الملفات" and in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/document.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/document.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـفـات 🗃".$title,]);}}
if($text == "فتح الملفات" and !in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـفـات 🗃 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل جهات تصال" and !in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 جـهـات تـصـال ☎️".$title,]);}}
if($text == "قفل جهات تصال" and in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 جـهـات تـصـال ☎️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح جهات تصال" and in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/contact.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/contact.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 جـهـات تـصـال ☎️".$title,]);}}
if($text == "فتح جهات تصال" and !in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 جـهـات تـصـال ☎️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الصور متحركه" and !in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـصـور مـتـحـركـه 🔞".$title,]);}}
if($text == "قفل الصور متحركه" and in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـصـور مـتـحـركـه 🔞 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الصور متحركه" and in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/gif.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/gif.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور مـتـحـركـه 🔞".$title,]);}}
if($text == "فتح الصور متحركه" and !in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور مـتـحـركـه 🔞 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل التعديل" and !in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/edited.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـتـعـديـل ⚡️".$title,]);}}
if($text == "قفل التعديل" and in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـتـعـديـل ⚡️ بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح التعديل" and in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/edited.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/edited.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـعـديـل ⚡️".$title,]);}}
if($text == "فتح التعديل" and !in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـعـديـل ⚡️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل انلاين" and !in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/inline.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 انـلايـن 💎".$title,]);}}
if($text == "قفل انلاين" and in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 انـلايـن 💎 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح انلاين" and in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/inline.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/inline.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 انـلايـن 💎".$title,]);}}
if($text == "فتح انلاين" and !in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 انـلايـن 💎 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الدردشه" and !in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/mute.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـدردشـه 👥".$title,]);}}
if($text == "قفل الدردشه" and in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـدردشـه 👥 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح الدردشه" and in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/mute.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/mute.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـدردشـه 👥".$title,]);}}
if($text == "فتح الدردشه" and !in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـدردشـه 👥 بـتـأكـيـد 🔝".$title,]);}}
//كتم عضو
if($replay and $text == "كتم" and in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ كـتـم 🔕 الـعـضـو 🗣 بـتـأكـيـد 🔝".$title,]);}}
if($replay and $text == "كتم" and !in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/selict/s$chat_id.json", "$reply_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ كـتـم 🔕 الـعـضـو 🗣".$title,]);}}
if($replay and $text == "الغاء كتم" and !in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء 🎈 كـتـم 🔕 الـعـضـو 🗣 بـتـأكـيـد 🔝".$title,]);}}
if($replay and $text == "الغاء كتم" and in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/selict/s$chat_id.json");
$send = str_replace($reply_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents("data/selict/s$chat_id.json", $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء 🎈 كـتـم 🔕 الـعـضـو 🗣".$title,]);}}
//مسح المكتومين
if($text == "مسح المكتومين" and !file_exists("data/selict/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لا يـوجـد ❌ مـكـتـومـيـن 🔕 لـلـمـسـح 🗑".$title,]);}}
if($text == "مسح المكتومين" and file_exists("data/selict/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/selict/s$chat_id.json");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـسـح 🗑 الـمـكـتـومـيـن 🔕".$title,]);}}
//فلتر كلمات
if(preg_match('/^(منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـنـع 🚯 الـ($filter[2]) 💯 بـتـأكـيـد 🔝".$title,]);}}}
if(preg_match('/^(منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
file_put_contents("data/filter/s$chat_id.json", "$filter[2]\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـنـع 🚯 الـ($filter[2]) 💯".$title,]);}}}
if(preg_match('/^(الغاء منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء مـنـع 🚯 الـ($filter[2]) 💯 بـتـأكـيـد 🔝",]);}}}
if(preg_match('/^(الغاء منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
$send = file_get_contents("data/filter/s$chat_id.json");
$send = str_replace($filter[2], " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents("data/filter/s$chat_id.json", $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء مـنـع 🚯 الـ($filter[2]) 💯",]);}}}
if($text == "قائمة المنع"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$filter = file_get_contents("data/filter/s$chat_id.json");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
قـائـمـة 📃 الـكـلـمـات 📈 الـمـمـنـوعـة 🚯 
داخـل الـمـجـمـوعـه 👥 ⏬
|---------------------------------------------------------|
$filter
|---------------------------------------------------------|
📡┊*Channel Bots* [TP Team](t.me/dev_kasper)",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,]);}}
if($text == "مسح قائمة المنع" and !file_exists("data/filter/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لا يـوجـد ❌ قـائـمـة الـمـنـع 🚯 لـلـمـسـح 🗑".$title,]);}}
if($text == "مسح قائمة المنع" and file_exists("data/filter/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/filter/s$chat_id.json");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـسـح 🗑 قـائـمـة الـمـنـع 🚯".$title,]);}}
// قسم التنفيذ
if(preg_match("/^(.*)([Tt].[Mm][Ee])|(.*)([Tt].[Mm][Ee])(.*)|([Tt].[Mm][Ee])(.*)|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|(.*)([Ww][Ww][Ww])|(.*)([Ww][Ww][Ww])(.*)|(.*)([Cc][Oo][Mm])|(.*)([Cc][Oo][Mm])(.*)|([Cc][Oo][Mm])(.*)/", $text) and in_array($chat_id, $link_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($message->text_entities->type == "text_link" and in_array($chat_id, $link_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if(preg_match('/^(.*)([Bb][Oo][Tt])/s',$newbots) and in_array($chat_id, $bots_)){
if($group == "member"){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- لـقـد تـم ໑جـ໑د بـ໑ت تـفـلـيـش 🚨 •\n\n- وقـد تـم طـرده ໑طـرد םـن قـام بـ اضـافـتـه 👞 •", ]);
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id]);
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id]);}}
if(preg_match("/^(@)(.*)|(.*)(@)|(.*)(@)(.*)/s", $text) and in_array($chat_id, $username_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if(preg_match("/^(#)(.*)|(.*)(#)|(.*)(#)(.*)/s", $text) and in_array($chat_id, $hash_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($edited and in_array($chat_id, $edited_)){
if($group_ == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$edit_chat_id,
'message_id'=>$edit_id]);}}
if($inline and in_array($chat_id, $inline_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if(str_word_count($text) > 40 and in_array($chat_id, $spam_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($fwd and in_array($chat_id, $fwd_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($fwd0 and in_array($chat_id, $fwd_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($voice and in_array($chat_id, $voice_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($audio and in_array($chat_id, $audio_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($video and in_array($chat_id, $video_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($sticker and in_array($chat_id, $sticker_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($text == $en and in_array($chat_id, $en_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($text == $ar and in_array($chat_id, $ar_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($photo and in_array($chat_id, $photo_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($game and in_array($chat_id, $game_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $document_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($contact and in_array($chat_id, $contact_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $gif_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($text and in_array($from_id, explode("\n", file_get_contents("data/selict/s$chat_id.json")))){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,]);}}
if($text and in_array($text, explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,]);}}
if($message and in_array($chat_id, $mute_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
//حضر مستخدم
if($text == "حظر" and $replay){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$reply_id,]);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'- ☑️ تـ۾ دفـر الـ؏ـضـ໑ 👞 •',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$reply_name, 'url'=>"https://telegram.me/$reply_user"]],]])]);}}
if(preg_match('/^(حظر) (.*)/s', $text, $ban)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$ban[2]"), true);
$_user = $info['result']['user']['username'];
$_name = $info['result']['user']['first_name'];
$_id = $info['result']['user']['id'];
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$_id,]);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'- ☑️ تـ۾ دفـر الـ؏ـضـ໑ 👞 •',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$_name, 'url'=>"https://telegram.me/$_user"]],]])]);}}
//مغادرة
if($text == "مغادرة البوت"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/add.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/add.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"الـى الـْقـاء اعـﮩزائـي سـررتـ» بـﮩمـعـرفـتـﮩكـم 😃✋",
'parse_mode'=>markdown,]);
KasperTP('leaveChat',[
'chat_id'=>$chat_id,]);}}
 //تثبيت الرساله او الغائها
if($replay and $text == "تثبيت"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('pinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->reply_to_message->message_id,]);}}
if($replay and $text =="الغاء تثبيت"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('unpinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,]);}}
//مسح الرسائل
if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo){
for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
KasperTP('deletemessage',[
'chat_id' => $chat_id,
'message_id' =>$h,]);}}
//الوقت وتاريخ
$time = time() + (979 * 11 + 1 + 30);
if($data == "time"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
⏰┊*Time ::* `".date('g', $time).":".date('i', $time)."`
📆┊*Date ::* `".date("Y")."/".date("n")."/".date("d")."`
",
'parse_mode'=>'MARKDOWN',
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجـ(🔙)ـو؏", 'callback_data'=>"back"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆", 'callback_data'=>"rem"]],]])]);}}
//تفعيل البوت
if($text == "تفعيل" and !in_array($chat_id, $add_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/add.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل 💡 الـبـوت 👾".$title,]);}}
if($text == "تفعيل" and in_array($chat_id, $add_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل 💡 الـبـوت 👾 بـتـأكـيـد 🔝".$title,]);}}
if($text == "تعطيل" and in_array($chat_id, $add_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/add.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/add.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 📴 الـبـوت 👾".$title,]);}}
if($text == "تعطيل" and !in_array($chat_id, $add_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 📴 الـبـوت 👾 بـتـأكـيـد 🔝".$title,]);}}
// اختصار روابط
$short = str_replace("اختصار الرابط", "$short", $text);
if($text == "اختصار الرابط $short"){
$g = json_decode(file_get_contents("https://proprogram.org/api.php?method=short&link=".$short));
$google = $g->Google;
$adfly = $g->adfly;
$Isgd = $g->Isgd;
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
تـﮩم خـتـصـﮩار الـرابـﮩط
🔗╔AdFly╗【 $adfly 】

📎╔Google╗【 $google 】

🖇╔Isgd╗【 $Isgd 】
",]);}
//معلومات انستا
if(preg_match('/^(انستا) (.*)/', $text, $iinsta)){
$insta = json_decode(file_get_contents("https://instagram.com/".$iinsta[2]."/?__a=1"), true);
$a1 = $insta['user']['biography'];
$a2 = $insta["user"]["followed_by"]["count"];
$a3 = $insta["user"]["follows"]["count"];
$a4 = $insta["user"]["media"]["count"];
$a5 = $insta["user"]["profile_pic_url_hd"];
KasperTP('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$a5,
'caption'=>"ـ םـ؏ـلـوםـاتـ« الـحـ๛ـاب ⏬ •",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"بـايـ໑ الـحـ๛ـابـ»",'url'=>"http://instagram.com/$iinsta[2]"],['text'=>"$a1",'url'=>"http://instagram.com/$iinsta[2]"]],[['text'=>"الـםـتـابـ؏ـيـن لـك",'callback_data'=>"2$iinsta[2]"],['text'=>"$a2",'url'=>"http://instagram.com/$iinsta[2]"]],[['text'=>"الـםـتـابـ؏ لـهـ۾",'callback_data'=>"3$iinsta[2]"],['text'=>"$a3",'url'=>"http://instagram.com/$iinsta[2]"]],[['text'=>"الـםـشـارڪـات",'callback_data'=>"4$iinsta[2]"],['text'=>"$a4",'url'=>"http://instagram.com/$iinsta[2]"]],]])]);}
//تحويل نص اشعر
if(preg_match('/^(اشعار) (.*) (.*)/', $text, $shar)){
KasperTP('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"http://api.monsterbot.ir/pic/?text=".$shar[3]."&y=15&font=Steamy&fsize=90&bg=logo$shar[2]",]);}
//قالب كليشه لوا
if(preg_match('/^(قالب لوا) (.*)=(.*)/', $text, $lua)){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'
do
local function TPTeam(msg, matches)
if matches[1] == "'.$lua[3].'" then
return [['.$lua[2].']]
end
end
return {  
patterns = {
"[!/#]('.$lua[3].')$"
},
run = TPTeam,
}
end
',]);}
//رابط حذف
if($text == "رابط حذف"){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"https://telegram.org/deactivate"]);}
//ان واجهتك مشكله فرق الدعم
$_twsal = file_get_contents("data/twsal.json");
$twsal_ = explode("\n", $_twsal);
if($data == "sendsudo" and !in_array($from_id, $twsal_)){
file_put_contents("data/twsal.json", $from_id."\n", FILE_APPEND);
KasperTP('editmessagetext',[
'chat_id' => $chat_id,
'text'=>"📤 ارسـل الان قـتـراحـك 📬",
'message_id'=>$message_id,]);}
if($text and !$data and in_array($from_id, $twsal_)){
$send = file_get_contents("data/twsal.json");
$send = str_replace($from_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/twsal.json', $send);
KasperTP('forwardMessage',[
'chat_id'=>"219844437",
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,]);
KasperTP('sendmessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"تـم ارسـال اقـتـراحـك ✔️✨"]);}
if($text and $replay and $message->from->id == "219844437" and $message->chat->type == "private"){
KasperTP('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,]);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"☑️ تـم ارسـال رسـالـتـك ✔️",]);}
//اوامر الماركداون
if(preg_match('/^(ماركداون (.*)/s', $text, $markdown)){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$markdown[2],
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,]);}
//تغير اسم المجموعة
$setname = str_replace("ضع اسم", "$setname", $text);
if($text == "ضع اسم $setname"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('setChatTitle',[
'chat_id'=>$chat_id,
'title'=>$setname,]);}}
//اوامر ادمن
if($text == "/admin" and $from_id == $sudo){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*Welcome* _to the orders of_ *Admins* ❤",
'parse_mode'=>markdown,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"Exit all groups ?",'callback_data'=>"delegroups"]],[['text'=>"Kick group ?",'callback_data'=>"kickgroup"]],[['text'=>"broadcast forward ?",'callback_data'=>"bcfwd"]],[['text'=>"broadcast ?",'callback_data'=>"bc"]],[['text'=>"Users ?",'callback_data'=>"users"]],]])]);}
if($data == "🔙"){
Rmdir("bcfwd.json");
Rmdir("bc.json");
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"*Welcome* _to the orders of_ *Admins* ❤",
'parse_mode'=>markdown,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"Exit all groups ?",'callback_data'=>"delegroups"]],[['text'=>"Kick group ?",'callback_data'=>"kickgroup"]],[['text'=>"broadcast forward ?",'callback_data'=>"bcfwd"]],[['text'=>"broadcast ?",'callback_data'=>"bc"]],[['text'=>"Users ?",'callback_data'=>"users"]],]])]);}
if($data == "kickgroup"){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"/kick group + id chat",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔙",'callback_data'=>"🔙"]],]])]);}
if($data == "users"){
$user = count($add_);
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"🔰┊_Groups_ >*$user*",
'message_id'=>$message_id,
'parse_mode'=>markdown,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"🔙",'callback_data'=>"🔙"]],]])]);}
if($data == "bcfwd"){
file_put_contents("data/unll.json", "fwd");
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"♻️ ارسـل الان الـتـوجـيـه لـيـتـم نـشـره ؏ مـشـتـركـيـن ✔️",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"🔙",'callback_data'=>"🔙"]],]])]);}
if($text and !$data and file_put_contents("data/unll.json") == "fwd" and $from_id == $admin){
for($h=0;$h<count($add_);$h++){
file_put_contents("data/unll.json", " ");
KasperTP('forwardMessage',[
'chat_id'=>$add_[$h],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,]);}}
if($text and !$data and file_put_contents("data/unll.json") == "fwd" and $from_id == $admin){
$user = count($add_);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"_Broadcasted forward on everyone_\n `groups` *$user*",
'parse_mode'=>markdown,
'reply_to_message_id'=>$message_id,]);}
if($data == "bc"){
file_put_contents("data/unll.json", "bc");
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"♻️ ارسـل الان الـنـص لـيـتـم نـشـره ؏ مـشـتـركـيـن ✔️",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"🔙",'callback_data'=>"🔙"]],]])]);}
if($text and !$data and file_get_contents("data/unll.json") == "bc" and $from_id == $sudo){
for($h=0;$h<count($add_);$h++){
file_put_contents("data/unll.json", " ");
KasperTP('sendMessage',[
'chat_id'=>$add_[$h],
'text'=>$text,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,]);}}
if($text and !$data and file_get_contents("data/unll.json") == "bc" and $from_id == $sudo){
$user = count($add_);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"_Broadcasted on everyone_\n\n`groups` *$user*",
'parse_mode'=>markdown,
'reply_to_message_id'=>$message_id,]);}
//مغادرة ع ايدي
$kickgroup = str_replace("/kick group", "$kickgroup", $text);
if($text == "/kick group $kickgroup" and $from_id == $sudo){
KasperTP('kickChatMember',[
'chat_id'=>$kickgroup,
'user_id'=>341488340,
'message_id'=>$message_id,]);
KasperTP('sendMessage',[
'chat_id'=>$sudo,
'text'=>"*The group was leaving*",
'parse_mode'=>markdown,]);}
//مغادرة جميع لكروبات
if($data == "delegroups"){
KasperTP('sendMessage',[
'chat_id'=>$sudo,
'text'=>"*All* _groups have been_ *signed out*",
'parse_mode'=>markdown,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"🔙",'callback_data'=>"🔙"]],]])]);
for($h=0;$h<count($add_);$h++){
KasperTP('kickChatMember',[
'chat_id'=>$add_[$h],
'user_id'=>341488340,
'message_id'=>$message_id,]);}}
//رقم المطور
if($text == 'المطور' or $text == '/dev'){
KasperTP('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647700631183",
'first_name'=>"‹Kᗩᔕᖘᕮᖇᵗᵖ┆ᘓᓅɹ̤ jgᓗ̣ gɹ̣Ĩ›"
]);
}
//ايدي
if($text == "معلوماتي" or $text == "/id" or $text == "ايدي" or $text == "موقعي"){
if($from_id == $sudo){
$get = json_decode(file_get_contents("https://wathiq.us/api/getbio/".$user));
$bio = $get->bio; 
$rand = rand(1,999999999999999999);
$get = KasperTP("getUserProfilePhotos",["user_id"=>$from_id,"limit"=>1,"offset"=>0]);
$res = $get->result->photos[0][2]->file_id;
$id_file = KasperTP("getFile",["file_id"=>$res]);
$path = $id_file->result->file_path;
file_put_contents("$rand.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://tpmaxbot-tpmaxbot.c9users.io/$rand.jpg"; // رابط استضافتك
KasperTP("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
- اسـمـك • $name 📍 •
- مـعـرفـك • @$user 📌 •
- ايـديـك • $from_id 🗳 •
- الـبـايـو • $bio 📮 •
- رتـبـتـك • مـطـور 🔰 •
",
'reply_to_message_id'=>$message_id, ]);
unlink("$rand.jpg");
}}
if($text == "معلوماتي" or $text == "/id" or $text == "ايدي" or $text == "موقعي"){
if($group == $mudir and $from_id != $sudo){
$get = json_decode(file_get_contents("https://wathiq.us/api/getbio/".$user));
$bio = $get->bio; 
$rand = rand(1,999999999999999999);
$get = KasperTP("getUserProfilePhotos",["user_id"=>$from_id,"limit"=>1,"offset"=>0]);
$res = $get->result->photos[0][2]->file_id;
$id_file = KasperTP("getFile",["file_id"=>$res]);
$path = $id_file->result->file_path;
file_put_contents("$rand.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://tpmaxbot-tpmaxbot.c9users.io/$rand.jpg"; // رابط استضافتك
KasperTP("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
- اسـمـك • $name 📍 •
- مـعـرفـك • @$user 📌 •
- ايـديـك • $from_id 🗳 •
- الـبـايـو • $bio 📮 •
- رتـبـتـك • مـديـر 🔰 •
",
'reply_to_message_id'=>$message_id, ]);
unlink("$rand.jpg");
}}
if($text == "معلوماتي" or $text == "/id" or $text == "ايدي" or $text == "موقعي"){
if($group == $admin and $from_id != $sudo){
$get = json_decode(file_get_contents("https://wathiq.us/api/getbio/".$user));
$bio = $get->bio; 
$rand = rand(1,999999999999999999);
$get = KasperTP("getUserProfilePhotos",["user_id"=>$from_id,"limit"=>1,"offset"=>0]);
$res = $get->result->photos[0][2]->file_id;
$id_file = KasperTP("getFile",["file_id"=>$res]);
$path = $id_file->result->file_path;
file_put_contents("$rand.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://tpmaxbot-tpmaxbot.c9users.io/$rand.jpg"; // رابط استضافتك
KasperTP("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
- اسـمـك • $name 📍 •
- مـعـرفـك • @$user 📌 •
- ايـديـك • $from_id 🗳 •
- الـبـايـو • $bio 📮 •
- رتـبـتـك • ادمـن 🔰 •
",
'reply_to_message_id'=>$message_id, ]); 
unlink("$rand.jpg");
}}
if($text == "معلوماتي" or $text == "/id" or $text == "ايدي" or $text == "موقعي"){
if($group == "member" and $from_id != $sudo){
$get = json_decode(file_get_contents("https://wathiq.us/api/getbio/".$user));
$bio = $get->bio; 
$rand = rand(1,999999999999999999);
$get = KasperTP("getUserProfilePhotos",["user_id"=>$from_id,"limit"=>1,"offset"=>0]);
$res = $get->result->photos[0][2]->file_id;
$id_file = KasperTP("getFile",["file_id"=>$res]);
$path = $id_file->result->file_path;
file_put_contents("$rand.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://tpmaxbot-tpmaxbot.c9users.io/$rand.jpg"; // رابط استضافتك
KasperTP("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
- اسـمـك • $name 📍 •
- مـعـرفـك • @$user 📌 •
- ايـديـك • $from_id 🗳 •
- الـبـايـو • $bio 📮 •
- رتـبـتـك • عـضـو 🔰 •
",
'reply_to_message_id'=>$message_id, ]); 
unlink("$rand.jpg");
}}
if($text == "معلوماته" or $text == "/id" or $text == "ايديه" or $text == "موقعه" and in_array($chat_id, $add_) and $replay and $message->chat->type == "supergroup"){
$get = json_decode(file_get_contents("https://wathiq.us/api/getbio/".$reply_user));
$bio = $get->bio; 
$rand = rand(1,999999999999999999);
$get = KasperTP("getUserProfilePhotos",["user_id"=>$reply_id,"limit"=>1,"offset"=>0]);
$res = $get->result->photos[0][2]->file_id;
$id_file = KasperTP("getFile",["file_id"=>$res]);
$path = $id_file->result->file_path;
file_put_contents("$rand.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://tpmaxbot-tpmaxbot.c9users.io/$rand.jpg"; // رابط استضافتك
KasperTP("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
- اسـمـك • $reply_name 📍 •
- مـعـرفـك • @$reply_user 📌 •
- ايـديـك • $reply_id 🗳 •
- الـبـايـو • $bio 📮 •
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,]);
unlink("$rand.jpg");
}
$info = str_replace("معلومات ", "$info", $text);
//ماركت
if(preg_match('/^(ماركت) (.*)/s', $text, $stor)){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
$rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]);
$rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]);
$rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk";
$rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1";
$rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps";
$rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]);
$rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
KasperTP('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);
sleep(1);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"*✔️ تـﮩم انـتـهـا۽ الـبـحـث اليك الـر໑ابـط ⚶*\n\n[Googli Play Market]($rs)\n\n[Mobogenie Market]($rs1)\n\n[Mobo Market]($rs2)\n\n[Apkmirror Market]($rs3)\n\n[Appsodo Market]($rs4)\n\n[Appoide Market]($rs5)\n\n[Opera Market]($rs5)\n\n[Androide Dwar Market]($rs7)\n",]);}
//الردود
if($text == "تفعيل الردود" and !in_array($chat_id, $replay_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/replay.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل💡الـردود 😌".$title,]);}}
if($text == "تفعيل الردود" and in_array($chat_id, $replay_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل💡الـردود 😌 بـتـأكـيـد 🔝".$title,]);}}
if($text == "تعطيل الردود" and in_array($chat_id, $replay_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/replay.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/replay.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 🔇 الـردود 😌".$title,]);}}
if($text == "تعطيل الردود" and !in_array($chat_id, $replay_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 🔇 الـردود 😌 بـتـأكـيـد 🔝".$title,]);}}
$textreply = array(
'نعل ابوك' => 'وابوك عل واهس🌚✋🏻',
'تزوجني' => 'اي تعال والمهر عليه ولايهمك🙊😂',
'زاحف' => 'زاحف ع اختك مثلا🌚☝️🏽️',
'بوسني' =>'ٲٳٲمــﮨ﴿💋﴾ﮨﮨﮨﮨ﴿😚﴾ﮨــوٱآاﮨـٍٰۣۗح✵❤ لحلك/ج',
'مرحبا' => 'مـراحـݕ ياۿـلا┋ 💖😻',
'هلاو' => 'هــلؤﯙؤات ﺣﻳـاﺗـﻲ 🌸💖',
'السلام عليكم' => 'وعـﻟﻳـكم الــﺳـلام 😻🌸',
'الحمد لله' => "عســاها دو{مـو يـوم}وم┋ 💜'ء",
'شلونكم' => "انـي الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'هاي' => "هـايـات يـروحـي┋🌸😻'ء",
'جاو' => "اﻟﻟـﮧ'ه ويـاك حيـاتي┋💛💭ء",
'سلام' => "سـلامات حـﺒﯥ┋💝✨",
'اعشقك' => "اؤوؤف شۿـال جفـاف ¦ 😹😻'ء",
'شخباركم' =>"انـي الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'شكرا' => "{ •• الـّ~ـعـفو •• }",
'تمام' => "عســاها دو{مـو يـوم}وم┋💜'ء",
'بوس الكروب' => "😁🌹امووووح فديتكم عضو عضو بس بنات اني استحرم غمضن خ ابوسجن ورطني المطور┋💜'ء",
'حكومه' => "تاج راسي وراس صاحبتي كول يا بعد  كلبي وغراضه┋💜'ء",
'تكرهني' => "طـبعاً مـا اكـرهك ¦ 😹✨'ء",
'😒' => 'ﺷﺒﮧ❃ہيكہ/ج.  كالب خـلـ🌚ـقتك🚶🏻',
'🌚' => 'منور صخام الجدر😹☝',
'بوسه' => 'امــہـ😘😚😘😚😘ــہــواااااح',
'انته وين' => 'بالــبــ🏠ــيــت',
'وينك' =>'بالــســ🚗ــيــارﮭﮧ',
'مح' => 'محات حياتي🙈❤',
'منور' => 'نِْـِْـــِْ([💡])ِْــــًِـًًْـــِْـِْـِْـورِْكِْ',
'دي' => '🚬 😌 يكولوها بس الك/ج',
'تخليني' => 'تعالي ورة الكروب واخليك 😻🚶',
'غنيلي' =>'💖احبك انا  🙊 انا احبك 🙉 واتحدى واحد بلبشر متلي يحبك 🙊',
'المدرسة' => '😒🍃 الله لا يـرويـنا',
'طفي المبردة' => 'طفيتهه 😒🍃',
'شغل السبلت' => 'شغلته 🌚🍃 بس حثلجون معليه ترا',
'مايا خليفة' => '😂 عيب صايمين',
'فطور' =>'واخيراً 😍😍 بدي روح افطر',
'ههه' => '❀دِْوم حبيْ❀',
'هههه' => '❀دِْوم حبيْ❀',
'ههههه' => '❀دِْوم حبيْ❀',
'هههههه' => '❀دِْوم حبيْ❀',
'ههههههه' => '❀دِْوم حبيْ❀',
'هههههههه' => '❀دِْوم حبيْ❀',
'ههههههههه' => '❀دِْوم حبيْ❀',
'تركيا' => '😐🍃 فديتهه',
'عراسي' => 'يـسـلـمراسـك',
'تبادل' => 'ماا مليت من التبادل😓😐?•',
'اكطع' =>'سِـلُـطِـُه مٌـنَ بّْعـدِ 😅الُبّـ🤖ـوَتْ🎄',
'صايم' => 'شــو اساويلك 😐🍃',
'عطشان' => 'روح ٲشـﮩـرب مــيي',
'جوعان' => 'تـ؏ـال كـلـني☺ 😐😂',
'😐' => 'شـبك صــافن😒👋🏻',
'😭' => '😢 لا👈تـبـكـي 😿',
'وينها' => 'زاحـﮩـف 😹',
'😍' => 'آإمـ﴿😚﴾ـح',
'بوت'=>"نعم وشتبي ترا مالي خلك وضايج حيل فك عني 🙁🚶",
'ممكن' => 'ﺗْـ•ـﮩ؏ْﮩـ•ــ🚶ـاْل طبعااا ممكن 😋',
'حلو' => 'ٱنـﮩـت الاحـلآ 🌚❤️️',
'غبي' => 'انـت ٱڵٱغبۍ',
'😔' => 'لـﮩـيـﺵ ضـٲيـﮩـج 😿🍃',
'☹️' => 'لـﮩـضـوج פـٍـٍبيبي  😢❤️🍃',
'توته' => 'عوفوها هاي اخت هيمو لحد يندك بيه 😂😂',
'شهد' => 'حبيبت هيمو يمعود 🤤😜',
'شنو تتمنه' => 'أمنية حياتي أن أغوص في أعماقك🍷🌝',
'دايخ' => 'مڪ͜͡ﮩـ❦ـبـ﴿☺️﴾ـہسैـل┇?🌿',
'ضوجه' => 'نِتـ؏ـاآركك ! 🙂🌸',
'👞' => 'ع راسك وراس الخلفك 🌚😹',
'😑' => 'ليش عصبي 🙁💔',
'🚶' => 'وين رايح وين جاي 🌚😹😹',
'وين المدير' => 'ڸﯿﺸ شتريد🙄💔🍃',
'لتزحف' => 'دعوفه زاحف ع خالتك خلي يستفاد😕😹🙊',
'تنح' => 'من يصير عندك عود اتنح دي فرخي😸🤘🏿',
'🙄' => 'نزل عيونك لتنحول 😐😹😹',
'قناة' => '📡┊*Channel Bots* [TP Team](t.me/dev_kasper)',
'القناة' => '📡┊*Channel Bots* [TP Team](t.me/dev_kasper)',
'كروب' => '[اضغط هنا وطب لكروبي 😍😘](https://t.me/joinchat/AAAAAEDjqxF3Psw9OQls-A)',
'كروبي' => '[اضغط هنا وطب لكروبي 😍😘](https://t.me/joinchat/AAAAAEDjqxF3Psw9OQls-A)',
'كروبك' => '[اضغط هنا وطب لكروبي 😍😘](https://t.me/joinchat/AAAAAEDjqxF3Psw9OQls-A)',
);
foreach($textreply as $txt => $send){
if($text == $txt and in_array($chat_id, $replay_) and !$game and !$photo and !$edited and !$audio and !$video and !$voice and !$inline and !$gif and !$fwd0 and !$document and !$fwd and !$contact and !$sticker and !$update->message->new_chat_members){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$send,
'reply_to_message_id'=>$message->message_id,	
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',]);}}
//علان انلاين
KasperTP('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
'results' => json_encode([[
'type'=>'article', 'id'=>base64_encode(rand(5,555)),
'title'=>'ارسـل الـםـنـشـ໑ر 📬', 'input_message_content'=>['parse_mode'=>'markdown','message_text'=>"
- םـرحـبـا بـك فـي بـ໑تـ» الـحـםـايـة 👾 •

- الـبـ໑تـ» رسـםـي مـن شـركـة تـلـيـجـرا۾ 🔰 •

- الـبـ໑تـ» يـجـ؏ـل םـجـםـو؏ـة اםـنـه 💯 •

- םـسـح جـםـيـ؏ ؏ـلانـاتـ» الـمـز؏ـجـه םـن الـםـيـديـا ♻️ •

- الـبـ໑ت حـصـل ؏ تـقـيـ۾ (⭐️⭐️⭐️⭐️⭐️) •

- كـيـف يـ؏ـםـل الـبـ໑تـ» ?? ⚠️ •

- اضـاف الـبـوتــ» اداري فـي الـםـجـםـ໑؏ـة ☑️ •

- ار๛ـل اםـر ( تفعيل ) في الـםـجـםـ໑؏ـة💡•

- بـ؏ـدهـا ار๛ـل اםـر ( الاوامر ) فـي الـםـجـםـ໑؏ـة 🛠 •
"],
'reply_markup'=>['inline_keyboard'=>[[['text'=>"اضافة البوت الى مجموعتك",'url'=>"t.me/KasperMaxBot?startgroup=new"]],[['text'=>"تواصل المطور",'url'=>"t.me/kasper_dev_bot"]],[['text'=>'شارك المنشور فضلا','switch_inline_query'=>""]],]]]])]);
?>
