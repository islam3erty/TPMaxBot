<?php
ob_start();
$API_KEY = 'توكن';
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
/*
مشكول الذمة كلمن يغير القناة :)
معرف القناة 👇
*/
echo " team ~ tp";
$ch = "dev_kasper";
$setbot = "kasper_dev";
if(!file_exists("settings.json")){
file_put_contents("settings.json", "{\"groups\":[]}");
}
if(!file_exists("users.php")){
file_put_contents("users.php", "<?php\n");
}
$update = json_decode(file_get_contents('php://input'));
$msg = $update->message;
$text = $msg->text;
$inline = $update->inline_query;
$voice = $msg->voice;
$video = $msg->video;
$audio = $msg->audio;
$photo = $msg->photo;
$game = $msg->game;
$sticker = $msg->sticker;
$contact = $msg->contact;
$chat_id = $msg->chat->id;
$from_id = $msg->from->id;
$fwd = $msg->forward_from;
$is_bot = $msg->from->is_bot;
$user = $msg->from->username;
$document = $msg->document;
$title_name = $msg->chat->title;
$name = $msg->from->first_name;
$reply = $msg->reply_to_message; 	
$message_id = $msg->message_id;
$fwd0 = $msg->forward_from_chat->id;
$newid = $msg->new_chat_member->id;
$edited = $update->edited_message->text;
$reply_id = $msg->reply_to_message->from->id;
$newbots = $msg->new_chat_member->username;
$edit_id = $update->edited_message->message_id;
$edit_chat_id = $update->edited_message->chat->id;
$newname = $msg->new_chat_member->first_name;
$reply_user = $msg->reply_to_message->from->username;
$reply_name = $msg->reply_to_message->from->first_name;
$edit_from_id = $update->edited_message->message->from->id;
$get = json_decode(file_get_contents("settings.json"));
$getsticker = $get->groups->$chat_id->sticker;
$getphoto = $get->groups->$chat_id->photo;
$getids = $get->groups->$chat_id->ids;
$getvideo = $get->groups->$chat_id->video;
$getlinks = $get->groups->$chat_id->links;
$gethash = $get->groups->$chat_id->hash;
$getfwd = $get->groups->$chat_id->fwd;
$getaudio = $get->groups->$chat_id->audio;
$getvoice = $get->groups->$chat_id->voice;
$getbots = $get->groups->$chat_id->bots;
$getar = $get->groups->$chat_id->ar;
$geten = $get->groups->$chat_id->en;
$getusername = $get->groups->$chat_id->username;
$getdocument = $get->groups->$chat_id->document;
$getedited = $get->groups->$chat_id->edited;
$getinline = $get->groups->$chat_id->inline;
$getgif = $get->groups->$chat_id->gif;
$getspam = $get->groups->$chat_id->spam;
$getwlc = $get->groups->$chat_id->wlc;
$getcontact = $get->groups->$chat_id->contact;
$getmute = $get->groups->$chat_id->mute;
$getgame = $get->groups->$chat_id->game;
$getreplay = $get->groups->$chat_id->replay;
$getadd = $get->groups->$chat_id->add;
$getleave = $get->groups->$chat_id->leave;
$lang = $get->groups->$chat_id->lang;
$title =  "\nֆ • ᘐᖘ ᘉᗩᙢᕮ • ".$title_name."\nֆ • ᘐᖘ Ꭵᗪ • ".$chat_id;
include "users.php";
if(!in_array($chat_id, $users) and $update->message->chat->type == "private"){ 
file_put_contents("users.php", '$users[]= "' . $chat_id . '"'.";\n", FILE_APPEND);
}
if(!in_array($chat_id, $groups) and $update->message->chat->type == "supergroup"){ 
file_put_contents("users.php", '$groups[]= "' . $chat_id . '"'.";\n", FILE_APPEND);
}
//حصانة الادمنيه
$sudo = "219844437";
$id_bot = "403181608"; 
$info = json_decode(file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id), true);
$group = $info['result']['status'];
$admin = "administrator";
$mudir = "creator";
$bot = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$id_bot");
//فنكشنات
function delete($chat_id, $message_id){
KasperTP('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message_id
]);
}
function en($text){
if(stristr($text,"a") or stristr($text, 'b') or stristr($text, 'c') or stristr($text, 'd') or stristr($text, 'e') or stristr($text, 'f') or stristr($text, 'g') or stristr($text, 'h') or stristr($text, 'i') or stristr($text, 'j') or stristr($text, 'k') or stristr($text, 'l') or stristr($text, 'm') or stristr($text, 'n') or stristr($text, 'o') or stristr($text, 'p') or stristr($text, 'q') or stristr($text, 'r') or stristr($text, 's') or stristr($text, 't') or stristr($text, 'u') or stristr($text, 'v') or stristr($text, 'w') or stristr($text, 'x') or stristr($text, 'y') or stristr($text, 'z')){
return true;
}else{
return false;
}
}
$en = en($text);
function ar($text){
if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
return true;
}else{
return false;
}
}
function save($chat_id){
$get = json_decode(file_get_contents("settings.json"), true);
if (!in_array($chat_id, $get['groups']) or in_array($chat_id, $get['groups'])){
$get['groups'][$chat_id] = array('photo'=>"🔓",'video'=>"🔐",'voice'=>"🔓",'audio'=>"🔓",'hash'=>"🔐",'sticker'=>"🔓",'fwd'=>"🔐",'links'=>"🔐",'bots'=>"🔐",'ar'=>"🔓",'en'=>"🔓",'username'=>"🔐",'document'=>"🔐",'edited'=>"🔐",'inline'=>"🔐",'gif'=>"🔓",'spam'=>"🔐",'wlc'=>"🔓",'replay'=>"🔐",'add'=>"🔓",'contact'=>"🔐",'mute'=>"🔓",'game'=>"🔐","leave"=>"🔐","ids"=>"🔓","lang"=>"عـربـي");
$json = json_encode($get);
file_put_contents("settings.json", $json);
return true;
}else{
return false;
}
}
function lock_settings($chat_id, $yes){
$get = json_decode(file_get_contents("settings.json"), true);
$get['groups'][$chat_id][$yes] = "🔐";
$json = json_encode($get);
file_put_contents("settings.json", $json);
return true;
}
function open_settings($chat_id, $no){
$get = json_decode(file_get_contents("settings.json"), true);
$get['groups'][$chat_id][$no] = "🔓";
file_put_contents("settings.json", json_encode($get));
return true;
}
$ar = ar($text);
// علان انلاين
KasperTP('answerInlineQuery',['inline_query_id'=>$update->inline_query->id,'results' => json_encode([['type'=>'article','id'=>base64_encode(rand(5,555)),'title'=>'ارسـل الـםـنـشـ໑ر 📬','input_message_content'=>['parse_mode'=>'markdown','message_text'=>"😃 - اهلا بك في بوت حماية - ☑️\n🔝 - البوت سريع جدا ومميز 👁‍🗨\n🔋 - اضف البوت ادمن في قروبك - 🎩\n🔌 - ثمة ارسل امر (تفعيل) وسيتم تفعيلة - 💡\n💎 - البوت لا يتخطئ اي شي ولا يتوقف ابداً - 🛡"],'reply_markup'=>['inline_keyboard'=>[[['text'=>"اضافة البوت الى مجموعتك",'url'=>"t.me/kazpermaxbot?startgroup=new"]],[['text'=>"تواصل المطور",'url'=>"t.me/kasper_dev_bot"]],[['text'=>'شارك المنشور فضلا','switch_inline_query'=>""]],]]]])
]);
// تحذير
$members = array("الاوامر","الاعدادات","تفعيل الترحيب","تعطيل الترحيب","فتح هاش تاك","قفل هاش تاك","فتح المعرفات","قفل المعرفات","فتح الروابط","قفل الروابط","فتح الانكليزيه","قفل الانكليزيه","فتح العربيه","قفل العربيه","فتح الكلايش","قفل الكلايش","فتح التوجيه","قفل التوجيه","فتح الملصقات","قفل الملصقات","فتح الفيديو","قفل الفيديو","فتح الصوت","قفل الصوت","فتح البصمه","قفل البصمه","فتح الجهات","قفل الجهات","فتح الملفات","قفل الملفات","فتح العاب","قفل العاب","فتح البوتات","قفل البوتات","فتح الصور","قفل الصور","تعطيل","تفعيل","تعطيل الردود","تعفيل الردود","فتح الدردشه","قفل الدردشه","فتح انلاين","قفل انلاين","فتح التعديل","قفل التعديل","فتح المتحركة","قفل المتحركة","الغاء تثبيت","تثبيت","مغادرة البوت","حظر","الغاء كتم","كتم","ضع اسم","تفعيل الايدي","تعطيل الايدي",
"");
if($text and in_array($text, $members) and $group == "member" and $from_id != $sudo){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"عـذراً ⚠️ هـذا الأمـر❗️لـلادمـنـيـة فـقـط 🔰",'reply_to_message_id'=>$message_id,
]);
}
// الترحيب
if($update->message->new_chat_members and $newid != $id_bot and $getwlc == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"- םـرحـبـا بـك ؏ـزيـزي 📮 •\n- اسـمـك • $newname 📌 • \n- مـعـرفـك • @$newbots 🗳 •\n- ايـديـك • $newid 🏷 •\n- لـلـمـغـادرة ارسـل (مغادرة) 🚶🏼•\n- ضـيـف جـهـاتـك خـوة 😻 •",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- تـابـ؏ جـديـدنـا 📢 •", 'url'=>"https://t.me/$ch"]],]])
]);
}
if($msg->new_chat_members and $newid == $id_bot){
save($chat_id);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"ار๛ـل الان ( تفعيل ) 👾\nاذا لـ۾ تـر๛ـل تـفـ؏ـيـل الـبـوتـ» لـن يـ؏ـمـل 🎩\nتـابـ؏ جـديـدنـا [اضـغـط هـنـا](t.me/dev_kasper) 📢",'parse_mode'=>markdown,'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
}
//الاوامر
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if($text == "الاوامر"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>'
`😃 - اهـلا بـك فـي الاوامـر - 🎩
🔝 - اوامـر الادارة - ⏬`
|---------------------------------------------------------|
_- (ضع اسم) + الاسم الجديد 👥
- (تفعيل الردود) | (تعطيل الردود) 👄
- (تفعيل الترحيب) | (تعطيل الترحيب) 🗣
- (تثبيت) | (الغاء تثبيت) + رد ع رسـالـة 📌
- (كتم) | (الغاء كتم) + [رد/ايدي] 👤
- (حظر) + رد ع رسـالة العضو او ايدي العضو 👞_
|---------------------------------------------------------|
`⚠️ - اوامـر الـحـمـايـة - 🚨`
|---------------------------------------------------------|
`قفل 🔐| فتح 🔓> الروابط 📎
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
قفل 🔐| فتح 🔓> المتحركة 🔞
قفل 🔐| فتح 🔓> الجهات ☎️
قفل 🔐| فتح 🔓> البوتات 🤖
قفل 🔐| فتح 🔓> المعرفات Ⓜ️
قفل 🔐| فتح 🔓> هاش تاك #⃣
قفل 🔐| فتح 🔓> العاب 🕹
قفل 🔐| فتح 🔓> الملفات 🗃
قفل 🔐| فتح 🔓> المغادرة 🚶🏼
قفل 🔐| فتح 🔓> الدردشه 👤`
|---------------------------------------------------------|
`🔱 - اوامـر الاضـافـيـة - ⚜`
|---------------------------------------------------------|
`تفعيل 📳| تعطيل 📴> الترحيب
تفعيل 📳| تعطيل 📴> الردود
تفعيل 📳| تعطيل 📴> الايدي
تفعيل 📳| تعطيل 📴> المجموعة`
|---------------------------------------------------------|
`🎩 - اوامـر الاخـره - ☑️`
|---------------------------------------------------------|
`- (رابط حذف) 🔘 
- (ماركت) + اسم التطبيق 🔝
- (معلوماتي) | (معوماته) ℹ️
- (ماركداون) + النص المراد تحويلة ☑️`
|---------------------------------------------------------|
`📡⸽ قـنـاتـنـا` - [TP Team](t.me/'.$ch.')
','parse_mode'=>markdown,'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
}
if($text == "الاعدادات"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"
`اهـلا بـك فـي الاعـدادات الـحـمـايـة الـمـجـمـوعـة: ⚙`
|---------------------------------------------------------|
`🏞⸽ الـصـور - $getphoto
🎥⸽ الـفـيـديـو - $getvideo
🔉⸽ الـصـوت - $getaudio
🎙⸽ الـبـصـمـة - $getvoice
🌠⸽ الـمـتـحـركـة - $getgif
🎭⸽ الـمـلـصـقـات - $getsticker
🤖⸽ الـبـوتـات - $getbots
Ⓜ️⸽ الـمـعـرفـات - $getusername
♻️⸽ الـتـعـديـل - $getedited
🔘⸽ انـلايـن - $getinline 
🔻⸽ الـكـلايـش - $getspam
☎️⸽ الـجـهـات - $getcontact
🕹⸽ الـعـاب - $getgame
🗂⸽ الـمـلـفـات - $getdocument
🚶🏼⸽ الـمـغـادرة - $getleave
🔆⸽ الـغـة الـعـربـيـه - $getar
🔅⸽ الـغـة الانـجـلـيـزيـة - $geten`
|---------------------------------------------------------|
`📍⸽ الـتـرحـيـب - $getwlc
😝⸽ الردود - $getreplay
🆔⸽ الايـدي - $getids
💬⸽ لـغـة الـبـوت - $lang`
|---------------------------------------------------------|
📡⸽ قـنـاتـنـا - [TP Team](t.me/$ch)
",'parse_mode'=>markdown,'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل الترحيب"){
lock_settings($chat_id, "wlc");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل 📳 الـتـرحـيـب 📊".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل الترحيب"){
open_settings($chat_id, "wlc");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 📴 الـتـرحـيـب 📊".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الروابط" and $getlinks == "🔓"){
lock_settings($chat_id, "links");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـروابـط 🖇".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الروابط" and $getlinks == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـروابـط 🖇 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الروابط" and $getlinks == "🔐"){
open_settings($chat_id, "links");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـروابـط 🖇".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الروابط" and $getlinks == "🔓"){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـروابـط 🖇 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل المعرفات" and $getusername == "🔓"){
lock_settings($chat_id, "username");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـعـرفـات Ⓜ️".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل المعرفات" and $getusername == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـعـرفـات Ⓜ️ بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح المعرفات" and $getusername == "🔐"){
open_settings($chat_id, "username");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـعـرفـات Ⓜ️".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح المعرفات" and $getusername == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـعـرفـات Ⓜ️ بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل هاش تاك" and $gethash == "🔓"){
lock_settings($chat_id, "hash");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـهـاش تـاك #⃣".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل هاش تاك" and $gethash == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـهـاش تـاك #⃣ بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح هاش تاك" and $gethash == "🔐"){
open_settings($chat_id, "hash");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـهـاش تـاك #⃣".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح هاش تاك" and $gethash == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـهـاش تـاك #⃣ بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل التوجيه" and $getfwd == "🔓"){
lock_settings($chat_id, "fwd");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـتـوجـيـه 🔄".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل التوجيه" and $getfwd == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـتـوجـيـه 🔄 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح التوجيه" and $getfwd == "🔐"){
open_settings($chat_id, "fwd");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـتـوجـيـه 🔄".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح التوجيه" and $getfwd == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـتـوجـيـه 🔄 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الكلايش" and $getspam == "🔓"){
lock_settings($chat_id, "spam");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـكـلايـش 📊".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الكلايش" and $getspam == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـكـلايـش 📊".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الكلايش" and $getspam == "🔐"){
open_settings($chat_id, "spam");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـكـلايـش 📊".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الكلايش" and $getspam == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـكـلايـش 📊 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل العربيه" and $getar == "🔓"){
lock_settings($chat_id, "ar");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـعـربـيـه 🇮🇶".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل العربيه" and $getar == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـعـربـيـه 🇮🇶 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح العربيه" and $getar == "🔐"){
open_settings($chat_id, "ar");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـعـربـيـه 🇮🇶".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح العربيه" and $getar == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـعـربـيـه 🇮🇶 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الانكليزيه" and $geten == "🔓"){
lock_settings($chat_id, "en");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الانـكـلـيـزيـه 🇱🇷".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الانكليزيه" and $geten == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الانـكـلـيـزيـه 🇱🇷 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الانكليزيه" and $geten == "🔐"){
open_settings($chat_id, "en");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الانـكـلـيـزيـه 🇱🇷".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الانكليزيه" and $geten == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الانـكـلـيـزيـه 🇱🇷 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل البصمه" and $getvoice == "🔓"){
lock_settings($chat_id, "voice");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـبـصـمـه 🎙".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل البصمه" and $getvoice == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـبـصـمـه 🎙 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح البصمه" and $getvoice == "🔐"){
open_settings($chat_id, "voice");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـبـصـمـه 🎙".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح البصمه" and $getvoice == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـبـصـمـه 🎙 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الصوت" and $getaudio == "🔓"){
lock_settings($chat_id, "audio");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـصـوت 🔕".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الصوت" and $getaudio == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـصـوت 🔕 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الصوت" and $getaudio == "🔐"){
open_settings($chat_id, "audio");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـصـوت 🔕".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الصوت" and $getaudio == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـصـوت 🔕 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الفيديو" and $getvideo == "🔓"){
lock_settings($chat_id, "video");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـفـيـديـو 🎥".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الفيديو" and $getvideo == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـفـيـديـو 🎥 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الفيديو" and $getvideo == "🔐"){
open_settings($chat_id, "video");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـفـيـديـو 🎥".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الفيديو" and $getvideo == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـفـيـديـو 🎥 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الملصقات" and $getsticker == "🔓"){
lock_settings($chat_id, "sticker");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـلصـقـات 🎭".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الملصقات" and $getsticker == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـلصـقـات 🎭 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الملصقات" and $getsticker == "🔐"){
open_settings($chat_id, "sticker");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـصـقـات 🎭".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الملصقات" and $getsticker == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـصـقـات 🎭 بـتـأكـيـد 🔝 ".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الصور" and $getphoto == "🔓"){
lock_settings($chat_id, "photo");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـصـور 🏞".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الصور" and $getphoto == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـصـور 🏞 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الصور" and $getphoto == "🔐"){
open_settings($chat_id, "photo");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـصـور 🏞".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الصور" and $getphoto == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـصـور 🏞 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل البوتات" and $getbots == "🔓"){
lock_settings($chat_id, "bots");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـبـوتـات 🤖".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل البوتات" and $getbots == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔐 الـبـوتـات 🤖 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح البوتات" and $getbots == "🔐"){
open_settings($chat_id, "bots");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـبـوتـات 🤖".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح البوتات" and $getbots == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـبـوتـات 🤖 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل العاب" and $getgame == "🔓"){
lock_settings($chat_id, "game");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـعـاب 🕹".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل العاب" and $getgame == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـعـاب 🕹 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح العاب" and $getgame == "🔐"){
open_settings($chat_id, "game");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـعـاب 🕹".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح العاب" and $getgame == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـعـاب 🕹 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الملفات" and $getdocument == "🔓"){
lock_settings($chat_id, "document");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـلـفـات 🗃".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الملفات" and $getdocument == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـلـفـات 🗃 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الملفات" and $getdocument == "🔐"){
open_settings($chat_id, "document");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـفـات 🗃".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الملفات" and $getdocument == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـفـات 🗃 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الجهات" and $getcontact == "🔓"){
lock_settings($chat_id, "contact");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـجـهـات ☎️".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الجهات" and $getcontact == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـجـهـات ☎️ بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الجهات" and $getcontact == "🔐"){
open_settings($chat_id, "contact");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـجـهـات ☎️".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الجهات" and $getcontact == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـجـهـات ☎️ بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل المتحركة" and $getgif == "🔓"){
lock_settings($chat_id, "gif");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـتـحـركـه 🔞".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل المتحركة" and $getgif == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـتـحـركـه 🔞 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح المتحركة" and $getgif == "🔐"){
open_settings($chat_id, "gif");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـتـحـركـه 🔞".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح المتحركة" and $getgif == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـتـحـركـه 🔞 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل التعديل" and $getedited == "🔓"){
lock_settings($chat_id, "edited");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـتـعـديـل ⚡️".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل التعديل" and $getedited == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـتـعـديـل ⚡️ بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح التعديل" and $getedited == "🔐"){
open_settings($chat_id, "edited");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـتـعـديـل ⚡️".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح التعديل" and $getedited == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـتـعـديـل ⚡️ بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل انلاين" and $getinline == "🔓"){
lock_settings($chat_id, "inline");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 انـلايـن 💎".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل انلاين" and $getinline == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 انـلايـن 💎 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح انلاين" and $getinline == "🔐"){
open_settings($chat_id, "inline");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 انـلايـن 💎".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح انلاين" and $getinline == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 انـلايـن 💎 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل المغاردة" and $getleave == "🔓"){
lock_settings($chat_id, "leave");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـغـادرة 🚶🏾‍♂️".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل المغادرة" and $getleave == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـمـغـادرة 🚶🏾‍♂️ بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح المغادرة" and $getleave == "🔐"){
open_settings($chat_id, "leave");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـغـادرة 🚶🏾‍♂️".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح المغادرة" and $getleave == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـمـغـادرة 🚶🏾‍♂️ بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الدردشه" and $getmute == "🔓"){
lock_settings($chat_id, "mute");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـدردشـه 👥".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "قفل الدردشه" and $getmute == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ قـفـل 🔒 الـدردشـه 👥 بـتـأكـيـد 🔝".$title, 'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الدردشه" and $getmute == "🔐"){
open_settings($chat_id, "mute");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـدردشـه 👥".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "فتح الدردشه" and $getmute == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ فـتـح 🔓 الـدردشـه 👥 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل الردود" and $getreplay == "🔐"){
open_settings($chat_id, "replay");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل💡الـردود 😌".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل الردود" and $getreplay == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل💡الـردود 😌 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل الردود" and $getreplay == "🔓"){
lock_settings($chat_id, "replay");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 🔇 الـردود 😌".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل الردود" and $getreplay == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 🔇 الـردود 😌 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل الايدي" and $getids == "🔓"){
lock_settings($chat_id, "replay");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل💡الايـدي 🆔".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل الايدي" and $getids == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل💡الايـدي 🆔 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل الايدي" and $getids == "🔐"){
open_settings($chat_id, "replay");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 🔇 الايـدي 🆔".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل الايدي" and $getids == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 🔇 الايـدي 🆔 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل" and $getadd == "🔓"){
lock_settings($chat_id, "add");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل 💡 الـبـوت 👾".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تفعيل" and $getadd == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـفـعـيـل 💡 الـبـوت 👾 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل" and $getadd == "🔐"){
open_settings($chat_id, "add");
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 📴 الـبـوت 👾".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "تعطيل" and $getadd == "🔓"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ تـعـطـيـل 📴 الـبـوت 👾 بـتـأكـيـد 🔝".$title,'reply_to_message_id'=>$message_id,
]);
}
//كتم عضو
if(preg_match("/^(كتم)/", $text) and $reply and $reply_id != $id_bot){
KasperTP('restrictChatMember',['chat_id'=>$chat_id,'user_id'=>$reply_id,'can_send_messages'=>false,
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ كـتـم 🔕 الـعـضـو 🗣".$title,'reply_to_message_id'=>$message_id,
]);
}
if(preg_match("/^(كتم) (.*)/", $text, $silcket) and $reply_id != $id_bot){
KasperTP('restrictChatMember',['chat_id'=>$chat_id,'user_id'=>$silcket[2],'can_send_messages'=>false,
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ كـتـم 🔕 الـعـضـو 🗣".$title,'reply_to_message_id'=>$message_id,
]);
}
if(preg_match("/^(كتم)/", $text) and $reply and $reply_id == $id_bot){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"عـذراً ⚠️ لا يـمـكـن‼️كـتـم نـفـسـي 🚫".$title,'reply_to_message_id'=>$message_id,
]);
}
if(preg_match("/^(الغاء كتم)/", $text) and $reply and $reply_id != $id_bot){
KasperTP('restrictChatMember',['chat_id'=>$chat_id,'user_id'=>$reply_id,'can_send_messages'=>true,
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ الـغـاء 🎈 كـتـم 🔕 الـعـضـو 🗣".$title,'reply_to_message_id'=>$message_id,
]);
}
if(preg_match("/^(الغاء كتم) (.*)/", $text, $silcket) and $reply_id != $id_bot){
KasperTP('restrictChatMember',['chat_id'=>$chat_id,'user_id'=>$silcket[2],'can_send_messages'=>true,
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم ✔️ الـغـاء 🎈 كـتـم 🔕 الـعـضـو 🗣".$title,'reply_to_message_id'=>$message_id,
]);
}
//حضر مستخدم
if($text == "حظر" and $reply and $reply_id != $id_bot){
KasperTP('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$reply_id,
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>'تـم ✔️ دفـر 👞 الـعـضـو 🗣'.$title,'reply_to_message_id'=>$message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>$reply_name, 'url'=>"https://telegram.me/$reply_user"]],]])
]);
}
if(preg_match("/^(حظر) (.*)/", $text, $ban)){
KasperTP('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$ban[2],
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>'تـم ✔️ دفـر 👞 الـعـضـو 🗣'.$title,'reply_to_message_id'=>$message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>$reply_name, 'url'=>"https://telegram.me/$reply_user"]],]])
]);
}
//مغادرة البوت
if($text == "بوت غادر"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"بـاي 😔🚶🏼",'reply_to_message_id'=>$message_id,
]);
KasperTP('leaveChat',['chat_id'=>$chat_id,
]);
}
 //تثبيت الرساله او الغائها
if($replay and $text == "تثبيت"){
KasperTP('pinChatMessage',['chat_id'=>$chat_id,'message_id'=>$message->reply_to_message->message_id,
]);
}
if($replay and $text =="الغاء تثبيت"){
KasperTP('unpinChatMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,
]);
}
//تغير اسم المجموعة
$setname = str_replace("ضع اسم", "$setname", $text);
if($text == "ضع اسم $setname"){
KasperTP('setChatTitle',['chat_id'=>$chat_id,'title'=>$setname,
]);
}
}
// قسم التنفيذ
if($group == "member"){
if(preg_match('/^(.*)([Bb][Oo][Tt])/s',$newbots) and $getbots == "🔐"){
KasperTP('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$newid
]);
KasperTP('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$from_id
]);
}
if(preg_match("/^([Tt][Ee][Ll][Ee][Ss][Cc][Oo])(.*)|(.*)([Tt][Ee][Ll][Ee][Ss][Cc][Oo])|(.*)([Tt][Ee][Ll][Ee][Ss][Cc][Oo])(.*)|(.*)([Tt].[Mm][Ee])|(.*)([Tt].[Mm][Ee])(.*)|([Tt].[Mm][Ee])(.*)|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|(.*)([Ww][Ww][Ww])|(.*)([Ww][Ww][Ww])(.*)|(.*)([Cc][Oo][Mm])|(.*)([Cc][Oo][Mm])(.*)|([Cc][Oo][Mm])(.*)/", $text) and $getlinks == "🔐"){
delete($chat_id, $message_id);
}
if($update->entities->type == "text_link" and $getlinks == "🔐"){
delete($chat_id, $message_id);
}
if(preg_match("/^(@)(.*)|(.*)(@)|(.*)(@)(.*)/s", $text) and $getusername == "🔐"){
delete($chat_id, $message_id);
}
if(preg_match("/^(#)(.*)|(.*)(#)|(.*)(#)(.*)/s", $text) and $gethash == "🔐"){
delete($chat_id, $message_id);
}
if($edited and $getedited == "🔐"){
delete($edit_chat_id, $edit_id);
}
if($inline and $getinline == "🔐"){
delete($chat_id, $message_id);
}
if(count(explode("\n", $text)) == 50 and $getspam == "🔐"){
delete($chat_id, $message_id);
}
if($fwd and $getfwd == "🔐"){
delete($chat_id, $message_id);
}
if($fwd0 and $getfwd == "🔐"){
delete($chat_id, $message_id);
}
if($voice and $getvoice == "🔐"){
delete($chat_id, $message_id);
}
if($audio and $getaudio == "🔐"){
delete($chat_id, $message_id);
}
if($video and $getvideo == "🔐"){
delete($chat_id, $message_id);
}
if($sticker and $getsticker == "🔐"){
delete($chat_id, $message_id);
}
if($en and $geten == "🔐"){
delete($chat_id, $message_id);
}
if($ar and $getar == "🔐"){
delete($chat_id, $message_id);
}
if($photo and $getphoto == "🔐"){
delete($chat_id, $message_id);
}
if($game and $getgame == "🔐"){
delete($chat_id, $message_id);
}
if($document and $getdocument == "🔐"){
delete($chat_id, $message_id);
}
if($contact and $getcontact == "🔐"){
delete($chat_id, $message_id);
}
if($document and $getgif == "🔐"){
delete($chat_id, $message_id);
}
if($message and $getmute == "🔐"){
delete($chat_id, $message_id);
}
}
//ايدي
if($text == "معلوماتي" or $text == "/id" or $text == "ايدي" or $text == "موقعي"){
if($getids == "🔓"){
$photo = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id&limit=1"))->result->photos[0][0]->file_id;
$json = json_decode(file_get_contents("https://wathiq.us/api/getbio/$user"));
$bio = $json->bio;
KasperTP("sendPhoto",['chat_id'=>$chat_id,"photo"=>$photo,'caption'=>"- اسـمـك • $name 📍 •\n- مـعـرفـك • @$user 📌 •\n- ايـديـك • $from_id 🗳 •\n- الـبـايـو • $bio 📮 •",
]);
}
}
if($text == "معلوماته" or $text == "/id" or $text == "ايديه" or $text == "موقعه" and $replay){
if($getids == "🔓"){
$photo = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$reply_id&limit=1"))->result->photos[0][0]->file_id;
$json = json_decode(file_get_contents("https://wathiq.us/api/getbio/$reply_user"));
$bio = $json->bio;
KasperTP("sendPhoto",['chat_id'=>$chat_id,"photo"=>$photo,'caption'=>"- اسـمـك • $reply_name 📍 •\n- مـعـرفـك • @$reply_user 📌 •\n- ايـديـك • $reply_id 🗳 •\n- الـبـايـو • $bio 📮 •",
]);
}
}
// اوامر الادمن
if($from_id == $sudo){
$bc = explode("اذاعه", $text);
if(preg_match('/^(اذاعه) (.*)/s', $text, $free)){ 
for($h=0;$h<count($users);$h++){ 
KasperTP('sendMessage',[ 'chat_id'=>$users[$h], 'text'=>$bc[1], 'parse_mode'=>markdown, 'disable_web_page_preview'=>true,
]); 
}
}
if(preg_match('/^(اذاعه) (.*)/s', $text, $free)){ 
for($i=0;$i<count($groups);$i++){ 
KasperTP('sendMessage',[ 'chat_id'=>$groups[$i], 'text'=>$bc[1], 'parse_mode'=>markdown, 'disable_web_page_preview'=>true,
]); 
}
}
if($text == "المشتركين"){
$l = count($groups);
$ll = count($users);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"👥⸽ عـدد الـمـجـمـوعـات ~ $l\n👤⸽ عـدد الـمـشـتـركـيـن ~ $ll",'reply_to_message_id'=>$message_id,
]);
}
if(preg_match('/^(مسح) (.*)/', $text, $delmsg)){
for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
delete($chat_id, $h);
}
}
}
// مغادرة
if($text == "مغادرة" and $getleave == "🔓"){
KasperTP('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$from_id,
]);
}
if($text == "مغادرة" and $getleave == "🔐"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"عـذرا❗️الـمـغـادرة 🚶🏼 مـقـفـولـة 🔐",'reply_to_message_id'=>$message_id,
]);
}
//تسلسل لا يمكن التعديل الكود
$inch = file_get_contents("https://api.telegram.org/bot497610205:AAHonI4VSZkWWBS-OUkxEVuPfbvcLdLYzSo/getChatMember?chat_id=@dev_kasper&user_id=".$from_id);
if(strpos($inch, '"status":"left"') !== false and $update->message->chat->type == "private"){
KasperTP('sendMessage', ['chat_id'=>$chat_id,'parse_mode'=>'Markdown','text'=>"- عذرا عزيزي اشترك في قناة البوت اولا 🚫\n- اشترك في قناة البوت اولا 💯\n- ارجع الى بوت ارسل امر /start 🔰",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'✔️ اضغط هنا للاشتراك ✔️', 'url'=>"https://telegram.me/dev_kasper"],]]])
]);
}
if(strpos($bot, '"status":"left"') !== false and $update->message->chat->type == "supergroup"){
KasperTP('sendMessage', ['chat_id'=>$chat_id,'parse_mode'=>'Markdown','text'=>"- لا يـمـكـنـنـي الـعـمـل بـصـورة صـحـيـحـة ‼️•\n- يـرجـئ رفـعـي ادمـن لـكـي اسـتـخـدم قـوتـي 💯•",
]);
}
//رابط حذف
if($text == "رابط حذف"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"https://telegram.org/deactivate".$title,'reply_to_message_id'=>$message_id,
]);
}
if($text == "السورس" or $text == "سورس" or $text == "يا سورس هاذه"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"- سورس بوت : TP Max Bot 🤖 •\n\n- احسن بوت حصل ع تقيم من (⭐️⭐️⭐️⭐️⭐️)  على التليجرام 🌝🎩 •\n\n- رابط السورس 👾 •\nhttps://github.com/ibr773/TPMaxBot\n\n- اذا واجهتك اي مشكله كروب الدعم 👥 •\nhttps://t.me/joinchat/DRqPVUNiNeDgAayTENSvwA\n\n- تحياتي : KasperTP 👾 •\n\n- تابع اخر تحديث للسورس 📊 •\nhttps://telegram.me/$ch",'reply_to_message_id'=>$message_id,
]);
}
//اوامر الماركداون
$mark = explode("ماركداون", $text);
if($mark){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"$mark[1]", 'parse_mode'=>markdown,'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
}
//رقم المطور
if($text == 'المطور' or $text == '/dev'){
KasperTP('sendContact',['chat_id'=>$chat_id,'phone_number'=>"+9647700631183",'first_name'=>"‹Kᗩᔕᖘᕮᖇᵗᵖ┆ᘓᓅɹ̤ jgᓗ̣ gɹ̣Ĩ›"
]);
}
// احفظ ودز نقطة
if($contact){
KasperTP('sendContact',['chat_id'=>$chat_id,'phone_number'=>"+9647700631183",'first_name'=>"‹Kᗩᔕᖘᕮᖇᵗᵖ┆ᘓᓅɹ̤ jgᓗ̣ gɹ̣Ĩ›"
]);
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"احـفـظ 💯 ودز نـقـطـة ♻️ خـاص",'reply_to_message_id'=>$message_id,
]);
}
$inch = json_decode(file_get_contents("https://api.telegram.org/bot368706192:AAGMGHP5_AdQsu-Bp9OZ4RGrixzvTAWL95w/getChatMember?chat_id=@dev_kasper&user_id=".$from_id));
$goo = $inch->result->status;
if($goo != "left"){
if($text == "/start"){
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"
😃 - اهلا بك في بوت حماية - ☑️
🔝 - البوت سريع جدا ومميز 👁‍🗨
🔋 - اضف البوت ادمن في قروبك - 🎩
🔌 - ثمة ارسل امر (تفعيل) وسيتم تفعيلة - 💡
💎 - البوت لا يتخطئ اي شي ولا يتوقف ابداً - 🛡",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔱 - صنع بوت خاص بك - ⚜",'url'=>"t.me/$setbot"]],
]])
]);
}
}
if($goo == "left"){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'text'=>"⏬ - اهلا بك عزيزي يجب عليك تقوم القوانين - ⏬\n╣▪اولا يجب الاشتراك في قناة البوت - 🔆\n╣▪معرف قناة البوت : [اضغط هنا](t.me/dev_kasper) - 📡\n╣▪اذا لا تشترك البوت لا يعمل ابداً - 🔘\n╣▪اشترك ثمة ارجع ارسل امر /start - 🔅\n╝▪تحياتي لكم : KasperTP - ⚜",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'قناة البوت', 'url'=>"https://telegram.me/dev_kasper"]],
]])
]);
}
// الردود
if($text and $getreplay == "🔓"){
$get = file_get_contents("https://omarrealxp.000webhostapp.com/pp.php");
KasperTP("sendChatAction",["chat_id"=>$chat_id,"action"=>"typing",
]); 
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"$get",'reply_to_message_id'=>$message_id,
]);
}
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
KasperTP("sendChatAction",["chat_id"=>$chat_id,"action"=>"typing",
]); 
KasperTP('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎩 - اسـم الـبـرنـامـج : $stor[2] - ☑️\n🔝 - مـتـاح فـي بـعـض الـمـاركـتـات لـلـبـرامـج - 📊*\n\n[Googli Play Market]($rs)\n\n[Mobogenie Market]($rs1)\n\n[Mobo Market]($rs2)\n\n[Apkmirror Market]($rs3)\n\n[Appsodo Market]($rs4)\n\n[Appoide Market]($rs5)\n\n[Opera Market]($rs5)\n\n[Androide Dwar Market]($rs7)\n",'parse_mode'=>markdown,'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
}
?>
