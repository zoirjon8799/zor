<?php
/* Ushbu kod @Intelcore tomonidan yozildi  */

$admin = '846828502'; // Admin ID
$token = '1218335123:AAE-mfTxmgRsQ66t99mTSlopQOXYi6DOtFQ';  //Bot token

function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
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
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$name = $message->from->first_name;
$UzWebDev = file_get_contents("data/$from_id/ali.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌐 Internet paketlar"],['text'=>"#⃣ USSD kodlar"]],
[['text'=>"🛄 Tarif rejalari"],['text'=>"🗂 Xizmatlar"]],
[['text'=>"🧭 Daqiqa to'plamlar"],['text'=>"📨 SMS to'plamlar"]],[['text'=>"🗞Reklama berish"]]
]
]);

if($text=="Qo`llanma"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Ismingiz yozilgan Ramazon tabrigini olish uchun  🕋  Ramazon tabrigi tugmasini bosing va Ismingizni yozib yuboring!</b> \n Bot esa Ismingiz yozilgan Tabriknomani tezda sizga yuboradi!",
'parse_mode'=>'html',
'reply_to_message_id'=> $mid,
'reply_markup'=>$key
]);
}
if($text=="<Constructor> TR abanentlar uchun SMS"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 🔹 10 SMS
💳 Narxi: 420 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *9999*2*4*1#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 50 SMS
💳 Narxi: 1680 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *9999*2*4*2#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 300 SMS
💳 Narxi: 9470 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *9999*2*4*4#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 500 SMS
💳 Narxi: 12630 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *9999*2*4*5#",
'parse_mode'=>'html',
]);
}
if($text=="Xalqaro SMS paketlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 🔹 10 SMS
💳 Narxi: 5050 so'm
⏱ Amal qiish muddati: 30 kecha-kunduz
📲 Faollashtirish: *111*2*2*1#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 20 SMS
💳 Narxi: 9260 so'm
⏱ Amal qiish muddati: 30 kecha-kunduz
📲 Faollashtirish: *111*2*2*2#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 30 SMS
💳 Narxi: 12630 so'm
⏱ Amal qiish muddati: 30 kecha-kunduz
📲 Faollashtirish: *111*2*2*3#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 40 SMS
💳 Narxi: 15150 so'm
⏱ Amal qiish muddati: 30 kecha-kunduz
📲 Faollashtirish: *111*2*2*4#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 50 SMS
💳 Narxi: 16840 so'm
⏱ Amal qiish muddati: 30 kecha-kunduz
📲 Faollashtirish: *111*2*2*5#

➖➖➖➖➖➖➖➖➖➖➖➖
Xalqaro SMS-paketlar xizmati abanentlarga arzon narxlarda xalaqaro SMS-jo'natish imkonini beradi.",
'parse_mode'=>'html',
]);
}
if($text=="Oylik SMS paketlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 🔹 10 SMS
💳 Narxi: 420 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *111*2*1*1#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 50 SMS
💳 Narxi: 1680 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *111*2*1*2#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 200 SMS
💳 Narxi: 5200 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *111*2*1*3#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 500 SMS
💳 Narxi: 9500 so'm
⏱ Amal qiish muddati: 30 kun
📲 Faollashtirish: *111*2*1*4#",
'parse_mode'=>'html',
]);
}
if($text=="Kunlik SMS paketlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 🔹 50 SMS
💳 Kunlik abanent to'lovi: 420 so'm 
⏱ Amal qiish muddati: 1 kun
📲 Faollashtirish: *111*2*19*1*2#
🗑 O'chirish: *111*1*19*1*2#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 100 SMS
💳 Kunlik abanent to'lovi: 840 so'm 
⏱ Amal qiish muddati: 1 kun
📲 Faollashtirish: *111*2*19*2*2#
🗑 O'chirish: *111*1*19*1*2#",
'parse_mode'=>'html',
]);

}
if($text=="<Constructor> TR abanentlar uchun"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 🔹 50 daqiqa
💳 Narxi: 3360 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *9999*1*3*1#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 100 daqiqa
💳 Narxi: 5260 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *9999*1*3*2#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 300 daqiqa
💳 Narxi: 16840 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *9999*1*3*3#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 500 daqiqa
💳 Narxi: 23150 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *9999*1*3*4#",
'parse_mode'=>'html',
]);
}
if($text=="Daqiqa to'plamlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 🔹 100 daqiqa
💳 Narxi: 4000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *111*2*3*1#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 300 daqiqa
💳 Narxi: 10000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *111*2*3*2#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 600 daqiqa
💳 Narxi: 16000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *111*2*3*3#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 1200 daqiqa
💳 Narxi: 24000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *111*2*3*4#",
'parse_mode'=>'html',
]);
}
if($text=="Yoshlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 5000 so'm
⏱ O'zbekiston bo'yicha daqiqa 25 so'm
1MB internet trafik: 25 so'm
O'zbekiton bo'ylab SMS: 25 so'm 

Tarif rejasiga boshqa tarif rejalaridan o'tish mumkin emas!",
'parse_mode'=>'html',
]);
}
if($text=="Bolajon"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 18000 so'm
⏱ O'zbekiston bo'yicha chiquvchi: 200 daqiqa 
Mobil internet: 2000 MB
O'zbekiston bo'yicha: 200 SMS

* Trafik trafikatsiyasi APN ziyonet.uzmobile.uz
* Tarif bolalar uchun mo'jallangan, ushbu tarifdagi raqamlar ota-onalardan biriga ulanadi.",
'parse_mode'=>'html',
]);
}
if($text=="Ishbilarmon"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 99000 so'm
⏱ O'zbekiston bo'yicha daqiqalar: CHEKSIZ*
Mobil internet: 20000 MB
O'zbekiston bo'yicha: 3000 SMS

Tarifga o'tish bepul
Tarif o'zgartirish: *111*1*11*10#",
'parse_mode'=>'html',
]);
}
if($text=="Oddiy 10"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 10000 so'm
⏱ O'zbekiston bo'yicha: 10 daqiqa 
Mobil internet: 10 MB
O'zbekiston bo'yicha: 10 SMS

⏱ O'zbekiston bo'yicha daqiqa 10 so'm (limitdan tashqari)
1MB internet trafik: 10 so'm (limitdan tashqari)
O'zbekiton bo'ylab SMS: 10 so'm (limitdan tashqari)

Tarif o'zgartirish: *111*1*11*12#",
'parse_mode'=>'html',
]);
}
if($text=="ROYAL"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 149900 so'm
⏱ O'zbekiston bo'yicha daqiqalar: CHEKSIZ* 
Mobil internet: CHEKSIZ*
O'zbekiston bo'yicha: 5000 SMS

Tarif o'zgartirish: *111*1*11*3*1#",
'parse_mode'=>'html',
]);
}
if($text=="Flash"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 69900 so'm
⏱ O'zbekiston bo'yicha: 1500 daqiqa 
⏱ Tarmoq ichida: 2000 daqiqa 
Mobil internet: 14000 MB
O'zbekiston bo'yicha: 1500 SMS

O'zbekiston bo'yicha daqiqa 84 so'm (limitdan tashqari)
1MB internet trafik: 160 so'm (limitdan tashqari)
O'zbekiton bo'ylab SMS: 84 so'm (limitdan tashqari)

Tarif o'zgartirish: *111*1*11*2*1#",
'parse_mode'=>'html',
]);
}
if($text=="STREET"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💳 Abanent to'lovi oyiga: 39900 so'm
⏱ O'zbekiston bo'yicha: 750 daqiqa 
⏱ Tarmoq ichida: 1500 daqiqa 
Mobil internet: 5000 MB
O'zbekiston bo'yicha: 750 SMS

O'zbekiston bo'yicha daqiqa 126 so'm (limitdan tashqari)
1MB internet trafik: 160 so'm (limitdan tashqari)
O'zbekiton bo'ylab SMS: 84 so'm (limitdan tashqari)

📲 Tarif o'zgartirish: *111*1*11*1*1#",
'parse_mode'=>'html',
]);
}
if($text=="#⃣ USSD kodlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"🔹107# - Limit qoldig'i va balansni tekshirish
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *100*4# - Mening raqamim
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *100*2# - Qolgan vaqt, internet va sms limiti haqida ma'lumot
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *100*5# - Mening raqamlarim
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *555# - Restart xizmatini muvaffaqiyatli faollashtirganda
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *111*2*7*1# 4G LTE ni yoqish
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *111*2*7*2# 4G LTE ni o'chirish
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *43# - Kutib turishni faollashtirish
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 *#67# - Peredaritsiyani tekshirish",
'parse_mode'=>'html',
]);
}
if($text=="<Constructor> TR abanentlar uchun!"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"🔹 100 MB
💳 To'plam narxi: 6310 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: **147*10130*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 500 MB
💳 To'plam narxi: 20050 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10072*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 1000 MB
💳 To'plam narxi: 27360 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10132*49350*

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 2000 MB
💳 To'plam narxi: 46310 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10131*49350*

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 4000 MB
💳 To'plam narxi: 71570 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10130*49350*",
'parse_mode'=>'html',
]);

}
if($text=="Internet non-stop"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"🔹 3000 MB non-stop
💳 To'plam narxi: 24000 so'm ikkinchi va keyingi oylardagi narxi 21600 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10055*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 5000 MB non-stop
💳 To'plam narxi: 32000 so'm ikkinchi va keyingi oylardagi narxi 28800 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10056*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 8000 MB non-stop
💳 To'plam narxi: 41000 so'm ikkinchi va keyingi oylardagi narxi 36900 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10057*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 12000 MB non-stop
💳 To'plam narxi: 50000 so'm ikkinchi va keyingi oylardagi narxi 45000 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10151*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 20000 MB non-stop
💳 To'plam narxi: 65000 so'm ikkinchi va keyingi oylardagi narxi 58500 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10152*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 30000 MB non-stop
💳 To'plam narxi: 75000 so'm ikkinchi va keyingi oylardagi narxi 67500 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10153*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 50000 MB non-stop
💳 To'plam narxi: 85000 so'm ikkinchi va keyingi oylardagi narxi 76500 so'm 
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10154*49350#",
'parse_mode'=>'html',
]);
}
if($text=="Tungi internet"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"🔹 TUN
💳 To'plam narxi: 6300 so'm
⏱ Amal qilish muddati: 1 tun (01:00 - 07:59)
📲 Faollashtirish: *111*2*18*1#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 7 TUN
💳 To'plam narxi: 31500 so'm
⏱ Amal qilish muddati: 7 tun (01:00 - 07:59)
📲 Faollashtirish: *111*2*18*3#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 30 TUN
💳 To'plam narxi: 99000 so'm
⏱ Amal qilish muddati: 30 tun (01:00 - 07:59)
📲 Faollashtirish: *111*2*18*2#",
'parse_mode'=>'html',
]);
}
if($text=="TAS-IX uchun paketlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"🔹 TAS-IX 2 GB
💳 To'plam narxi: 15000 so'm
⏱ Amal qilish muddati: 90 kun
📲 Faollashtirish: *147*10068*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 TAS-IX 10 GB
💳 To'plam narxi: 40000 so'm
⏱ Amal qilish muddati: 90 kun
📲 Faollashtirish: *147*10069*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 TAS-IX 15 GB
💳 To'plam narxi: 50000 so'm
⏱ Amal qilish muddati: 90 kun
📲 Faollashtirish: *147*10070*49350#",
'parse_mode'=>'html',
]);
}
if($text=="Kunlik paketlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"
🔹 100 MB
💳 To'plam narxi: 3000 so'm
⏱ Amal qilish muddati: 1 kun
📲 Faollashtirish: *147*10043*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 300 MB
💳 To'plam narxi: 6000 so'm
⏱ Amal qilish muddati: 1 kun
📲 Faollashtirish: *147*10050*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 600 MB
💳 To'plam narxi: 9000 so'm
⏱ Amal qilish muddati: 1 kun
📲 Faollashtirish: *147*10051*49350#",
'parse_mode'=>'html',
]);

}
if($text=="Oylik paketlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"
🔹 500 MB
💳 To'plam narxi: 10000 so'm
⏱  Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10072*49350#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 1500 MB
💳 To'plam narxi: 15000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10073*49350#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 3000 MB
💳 To'plam narxi: 24000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10074*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 5000 MB
💳 To'plam narxi: 32000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10075*49350#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 8000 MB
💳 To'plam narxi: 41000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10076*49350#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 12000 MB
💳 To'plam narxi: 50000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10077*49350# 

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 20000 MB
💳 To'plam narxi: 65000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10078*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 30000 MB
💳 To'plam narxi: 75000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10079*49350#

➖➖➖➖➖➖➖➖➖➖➖➖
    
🔹 50000 MB
💳 To'plam narxi: 85000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10080*49350#

➖➖➖➖➖➖➖➖➖➖➖➖

🔹 75000 MB
💳 To'plam narxi: 110000 so'm
⏱ Amal qilish muddati: 30 kun
📲 Faollashtirish: *147*10150*49350#",
'parse_mode'=>'html',
]);

}


$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️ Orqaga"]],
]
]);

if($type=="private"){
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>" *Assalomu alaykum o'zingizga kerakli bo'limni tanlang* ",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}}


if($text=="🗞Reklama berish"){
$a=file_get_contents("lichka.txt");
$ab=substr_count($a,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>" *REKLAMA RASSILKA* xizmati - sizning reklama postingizga bog'liq bo'ladi.

Botdagi foydalanuvchilar soni:  <b>$ab</b>
Xizmat narxi - <b>kelishiladi</b>

Xizmatdan foydalanish bo'yicha - adminga yozing: 👉🏻   @N_jabborov",
'reply_markup'=>$key,
'parse_mode'=>'html',
'disable_web_page_preview'=>true

]);
}
##core
if($text=="📨 SMS to'plamlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Kunlik SMS paketlar"],['text'=>"Oylik SMS paketlar"]],
[['text'=>"Xalqaro SMS paketlar"],['text'=>"<Constructor> TR abanentlar uchun SMS"]],
[['text'=>"⬅️ Orqaga"]]

]
])
]);
}
##core
if($text=="🧭 Daqiqa to'plamlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Daqiqa to'plamlar"],['text'=>"<Constructor> TR abanentlar uchun"]],
[['text'=>"⬅️ Orqaga"]]

]
])
]);
}
##core
if($text=="🗂 Xizmatlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Limitsiz ovoz"],['text'=>"Restart xizmati"]],
[['text'=>"Oila uchun"],['text'=>"Sevimli raqamlar"]],
[['text'=>"Tezkor o'tkazmalar"],['text'=>"Tungi internet"]],
[['text'=>"Yashirin qo'ng'iroq"],['text'=>"Sizga qo'ng'iroq qilishdi"]],
[['text'=>"Foydali almashinuv"],['text'=>"GMS abonent xizmatlari"]],
[['text'=>"Jarimalar haqida"],['text'=>"ZiyoNet"]],
[['text'=>"Xalqaro aloqa"],['text'=>"⬅️ Orqaga"]]

]
])
]);

}
##core
if($text=="🛄 Tarif rejalari"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"STREET"],['text'=>"Flash"]],
[['text'=>"ROYAL"],['text'=>"Oddiy 10"]],
[['text'=>"Ishbilarmon"],['text'=>"Bolajon"]],
[['text'=>"Yoshlar"],['text'=>"⬅️ Orqaga"]]

]
])
]);

}
##@UzWebDev dan Ramazon oyi uchun sovg'a##
if($text=="🌐 Internet paketlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Oylik paketlar"],['text'=>"Kunlik paketlar"]],
[['text'=>"Tungi internet"],['text'=>"TAS-IX uchun paketlar"]],
[['text'=>"Internet non-stop"],['text'=>"<Constructor> TR abanentlar uchun!"]],
[['text'=>"⬅️ Orqaga"]]

]
])
]);


}
elseif($UzWebDev == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzwebnet.altervista.org/api/?name=$ex",
'caption'=>" <b>Ushbu Botdan foydalanganingiz uchun minnatdorman!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️ Orqaga"]],
]
])
]);
unlink("data/$from_id/ali.txt");
exit();
}

##@UzWebDev dan Ramazon oyi uchun sovg'a##
if($text=="⬅️ Orqaga"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>🌐 UZMOBILE - Ishonchli aloqa mobil operatori</b>",
'parse_mode'=>'html',
'reply_markup'=>$key
]);
}

$lichka = file_get_contents("lichka.txt");
mkdir("data");
mkdir("data/$cid");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichka\n$cid");
}
}
$reply = $message->reply_to_message->text;
$rpl = json_encode([
'resize_keyboard'=>false,
'force_reply' => true,
'selective' => true
]);

##@UzWebDev dan Ramazon oyi uchun sovg'a##
if($text=="/intel" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Yuboriladigan xabar matnini kiriting!",'parse_mode'=>"html",'reply_markup'=>$rpl
]);
}
if($reply=="Yuboriladigan xabar matnini kiriting!"){
$lich = file_get_contents("lichka.txt");
$lichka = explode("\n",$lich);
foreach($lichka as $uid){
bot("sendmessage",[
'chat_id'=>$uid,
'text'=>"$text"]);
}
}
if($text=="/stat" and $cid==$admin){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot foydalanuvchilari soni $lich ta.",
'parse_mode'=>"html"
]);
}





?>
