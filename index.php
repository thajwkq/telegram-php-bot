<?php
// توكن البوت الخاص بك
$botToken = "8656732691:AAF1JKCovpnu8XnFyO_gzPf7hEo_c2A7sMA"; 
$website = "https://api.telegram.org/bot".$botToken;

// استقبال البيانات القادمة من تليجرام
$content = file_get_contents("php://input");
$update = json_decode($content, true);

// التأكد من وجود رسالة نصية
if (isset($update["message"])) {
    $chatId = $update["message"]["chat"]["id"];
    $text = $update["message"]["text"];

    // الرد على المستخدم بناءً على رسالته
    if ($text == "/start") {
        $reply = "أهلاً بك! البوت شغال تمام عبر PHP ومستضاف على Render 🚀";
    } else {
        $reply = "لقد أرسلت لي: " . $text;
    }

    // إرسال الرد إلى تليجرام
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".urlencode($reply);
    file_get_contents($url);
}
?>
