<?php
/* Ushbu kod @Intelcore tomonidan yozildi  */
$madmin = '846828502'; // Admin ID
$admin = '732918719'; // Admin ID
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
[['text'=>"📶 Internet paketlar"]],[['text'=>"❇️USSD kodlar"],
['text'=>"🔷Tarif rejalari"]],[['text'=>"📊 Statistika"]],
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
if($text=="❇ 20000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 20.000MB
     Narxi 65.000 so'm
     Kodi   *147*10078*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 500MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"<b> 📶Internet paket 500MB
     Narxi 10.000 so'm
     Kodi   *147*10072*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 1500MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 1500MB
     Narxi 15.000 so'm
     Kodi   *147*10073*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 3000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 3000MB
     Narxi 24.000 so'm
     Kodi   *147*10074*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 5000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 5000MB
     Narxi 32.000 so'm
     Kodi   *147*10075*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 8000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 8000MB
     Narxi 41.000 so'm
     Kodi   *147*10076*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 12000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 12000MB
     Narxi 50.000 so'm
     Kodi   *147*10077*49350#</b>",
'parse_mode'=>'html',
]);

}
if($text=="❇️ 30000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 30.000MB
     Narxi 75.000 so'm
     Kodi   *147*10079*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 50000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 50.000MB
     Narxi 85.000 so'm
     Kodi   *147*10080*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 75000MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 75.000MB
     Narxi 110.000 so'm
     Kodi   *147*10150*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 100MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 100 MB 
💲Narxi  3000 so'm 
🕗Amal qilish muddati: 1 kun
 👁‍🗨Kodi *147*10050*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 300MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 300 MB 
💲Narxi  6000 so'm 
🕗Amal qilish muddati: 1 kun
 👁‍🗨Kodi *147*10050*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️ 600MB"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>📶Internet paket 600 MB 
💲Narxi  9000 so'm 
🕗Amal qilish muddati: 1 kun
 👁‍🗨Kodi *147*10051*49350#</b>",
'parse_mode'=>'html',
]);
}
if($text=="❇️USSD kodlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" <b>✳️ *107# - Limit qoldig'i va balansni tekshirish

✳️ *100*4# - Mening raqamim

✳️ *100*5# - Mening raqamlarim

✳️ *555# - Restart xizmatini muvaffaqiyatli faollashtirganda

✳️ *111*2*7*1# 4G LTE ni yoqish

✳️ *111*2*7*2# 4G LTE ni o'chirish

✳️ *43# - Kutib turishni faollashtirish

✳️ *#67# - Peredaritsiyani tekshirish

✳️*124*Pul*99.......# - Mobil pul o'tkazish (5000 ming o'tkazish uchun 5 yozing ) 

✳️*122*99xxx xxxx*mb# +998 shart emas!!!</b>",
'parse_mode'=>'html',
]);
}
if($text=="🔸Internet non-stop"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"✅ 3000 MB non-stop
💰 To'plam narxi: 24000 so'm ikkinchi va keyingi oylardagi narxi 21600 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10055*49350#

🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰

✅ 5000 MB non-stop
💰 To'plam narxi: 32000 so'm ikkinchi va keyingi oylardagi narxi 28800 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10056*49350#

🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰

✅ 8000 MB non-stop
💰 To'plam narxi: 41000 so'm ikkinchi va keyingi oylardagi narxi 36900 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10057*49350#

🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰

✅ 12000 MB non-stop
💰 To'plam narxi: 50000 so'm ikkinchi va keyingi oylardagi narxi 45000 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10151*49350#

🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰

✅ 20000 MB non-stop
💰 To'plam narxi: 65000 so'm ikkinchi va keyingi oylardagi narxi 58500 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10152*49350#

🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰

✅ 30000 MB non-stop
💰 To'plam narxi: 75000 so'm ikkinchi va keyingi oylardagi narxi 67500 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10153*49350#

🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰🔰

✅ 50000 MB non-stop
💰 To'plam narxi: 85000 so'm ikkinchi va keyingi oylardagi narxi 76500 so'm 
🔁 Amal qilish muddati: 30 kun
🔔 Faollashtirish: *147*10154*49350#",
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
if($text=="🔸Tungi internet"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" ☪️ TUN
💰 To'plam narxi: 6300 so'm
🕰 Amal qilish muddati: 1 tun (01:00 - 07:59)
✅ Faollashtirish: *111*2*18*1#

✳️✳️✳️✳️✳️✳️✳️✳️✳️✳️✳️✳️

☪️ 7 TUN
💰 To'plam narxi: 31500 so'm
🕰 Amal qilish muddati: 7 tun (01:00 - 07:59)
✅ Faollashtirish: *111*2*18*3#

✳️✳️✳️✳️✳️✳️✳️✳️✳️✳️✳️✳️

☪️ 30 TUN
💰 To'plam narxi: 99000 so'm
🕰 Amal qilish muddati: 30 tun (01:00 - 07:59)
✅ Faollashtirish: *111*2*18*2#",
'parse_mode'=>'html',
]);
}
if($text=="✳️Ishbilarmon"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💰 Abanent to'lovi oyiga: 99000 so'm
📞 O'zbekiston bo'yicha daqiqalar: CHEKSIZ*
⚛️Mobil internet: 20000 MB
✉️O'zbekiston bo'yicha: 3000 SMS

Tarifga o'tish bepul
🔍Tarif o'zgartirish: *111*1*11*10#",
'parse_mode'=>'html',
]);
}
if($text=="✳️Oddiy 10"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💰 Abanent to'lovi oyiga: 10000 so'm
📞 O'zbekiston bo'yicha: 10 daqiqa 
⚛️Mobil internet: 10 MB
✉️O'zbekiston bo'yicha: 10 SMS

⏱ O'zbekiston bo'yicha daqiqa 10 so'm (limitdan tashqari)
1MB internet trafik: 10 so'm (limitdan tashqari)
O'zbekiton bo'ylab SMS: 10 so'm (limitdan tashqari)

🔍Tarif o'zgartirish: *111*1*11*12#",
'parse_mode'=>'html',
]);
}
if($text=="✳️Royal"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>"💰 Abanent to'lovi oyiga: 149900 so'm
📞 O'zbekiston bo'yicha daqiqalar: CHEKSIZ* 
⚛️Mobil internet: CHEKSIZ*
✉️O'zbekiston bo'yicha: 5000 SMS

🔍Tarif o'zgartirish: *111*1*11*3*1#",
'parse_mode'=>'html',
]);
}
if($text=="✳️Flash"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💰 Abanent to'lovi oyiga: 69900 so'm
📞 O'zbekiston bo'yicha: 1500 daqiqa 
⚛️ Tarmoq ichida: 2000 daqiqa 
Mobil internet: 14000 MB
✉️O'zbekiston bo'yicha: 1500 SMS

O'zbekiston bo'yicha daqiqa 84 so'm (limitdan tashqari)
1MB internet trafik: 160 so'm (limitdan tashqari)
O'zbekiton bo'ylab SMS: 84 so'm (limitdan tashqari)

🔍 Tarif o'zgartirish: *111*1*11*2*1#",
'parse_mode'=>'html',
]);
}
if($text=="✳️Street"){
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=> $mid,
'text'=>" 💰 Abanent to'lovi oyiga: 39900 so'm
📞 O'zbekiston bo'yicha: 750 daqiqa 
⚛️ Tarmoq ichida: 1500 daqiqa 
Mobil internet: 5000 MB
✉️O'zbekiston bo'yicha: 750 SMS

O'zbekiston bo'yicha daqiqa 126 so'm (limitdan tashqari)
1MB internet trafik: 160 so'm (limitdan tashqari)
O'zbekiton bo'ylab SMS: 84 so'm (limitdan tashqari)

🔍 Tarif o'zgartirish: *111*1*11*1*1#",
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
if($text=="🔑 Botdan foydalanish 🔑"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>" *Assalomu alaykum o'zingizga kerakli bo'limni tanlang* ",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}}


if($text=="📊 Statistika"){
$a=file_get_contents("lichka.txt");
$ab=substr_count($a,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>" Assalomu alaykum

Botdagi foydalanuvchilar soni:  <b>$ab</b>


Reklama va takliflar bo'lsa - adminga yozing: 👉🏻   @N_jabborov",
'reply_markup'=>$key,
'parse_mode'=>'html',
'disable_web_page_preview'=>true

]);


}
##core
if($text==""){
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
if($text=="🔷Tarif rejalari"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"✳️Street"],['text'=>"✳️Flash"]],
[['text'=>"✳️Royal"],['text'=>"✳️Oddiy 10"]],
[['text'=>"✳️Ishbilarmon"],['text'=>"⬅️ Orqaga"]]

]
])
]);
}
##@UzWebDev dan Ramazon oyi uchun sovg'a##
if($text=="/start"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Botni ishlatish uchun pastdagi knopkani bosing👇",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔑 Botdan foydalanish 🔑"]],


]
])
]);
}
##INTEL
if($text=="🔸Kunlik paketlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❇️ 100MB"],['text'=>"❇️ 300MB"]],[['text'=>"❇️ 600MB"],
['text'=>"⬅️ Orqaga"]]

]
])
]);

}
##INTEL
if($text=="🔸Oylik paketlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❇️ 500MB"],['text'=>"❇️ 1500MB"],
['text'=>"❇️ 3000MB"]],[['text'=>"❇️ 5000MB"],['text'=>"❇️ 8000MB"],['text'=>"❇️ 12000MB"]],[['text'=>"❇ 20000MB"],
['text'=>"❇️ 30000MB"],['text'=>"❇️ 50000MB"]],[['text'=>"❇️ 75000MB"],
['text'=>"⬅️ Orqaga"]]

]
])
]);



}
##INTEL
if($text=="📶 Internet paketlar"){
file_put_contents("data/$from_id/ali.txt", '1');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔸Oylik paketlar"],['text'=>"🔸Kunlik paketlar"]],
[['text'=>"🔸Tungi internet"],['text'=>"🔸Internet non-stop"]],
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
'text'=>"<b>Assalomu alaykum o'zingizga kerakli bo'limni tanlang</b>",
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

if($text=="/stut" and $cid==$madmin){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📊Bot foydalanuvchilari soni $lich ta.",
'parse_mode'=>"html"
]);
}
if(mb_stripos($text,"$text") !== false){
  bot('sendmesaвфыфыge',[
    'reply_to_message_id'=>$mid,
    'chat_id'=>$cid,
    'text'=>"Xabaringiz <a href='tg://user?id=$admin'>#King</a> ga yetkazildi!",
    'parse_mode'=>'html'
  ]);
  bot('sendmeфывфssage',[
    'chat_id'=>$madmin,
    'text'=>"

Ботда янги хабар 

👉Ism: [$name](tg://user?id=$uid)




          $text",
   'parse_mode'=>'markdown'
  ]);
}





?>
