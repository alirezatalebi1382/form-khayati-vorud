<?php
// تنظیم کاراکترها برای نمایش درست فارسی
header('Content-Type: text/html; charset=utf-8');

// بررسی ارسال فرم
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // گرفتن اطلاعات فرم
    $firstName = $_POST["firstName"] ?? '';
    $lastName = $_POST["lastName"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $address = $_POST["address"] ?? '';
    $registerDate = $_POST["registerDate"] ?? '';
    $deliveryDate = $_POST["deliveryDate"] ?? '';

    // گرفتن اطلاعات سایزها (با فرض ترتیب ورودی‌ها)
    $sizes = [
        "قد کامل", "دور سینه", "دور کمر", "دور شکم", "دور باسن", "دور بازو",
        "سرشانه تک", "سرشانه + قد آستین", "قد فاق", "دور ران", "عرض دم‌پا", "قد"
    ];

    
    $sizeValues = [];
    foreach ($sizes as $index => $label) {
        $sizeValues[$label] = $_POST["size"][$index] ?? '';
    }

    // نمایش ساده اطلاعات دریافتی
    echo "<h2>اطلاعات ثبت‌شده:</h2>";
    echo "<p>نام: $firstName</p>";
    echo "<p>نام خانوادگی: $lastName</p>";
    echo "<p>شماره تماس: $phone</p>";
    echo "<p>آدرس: $address</p>";
    echo "<p>تاریخ ثبت: $registerDate</p>";
    echo "<p>تاریخ تحویل: $deliveryDate</p>";

    echo "<h3>اطلاعات سایز:</h3><ul>";
    foreach ($sizeValues as $label => $value) {
        echo "<li>$label: $value</li>";
    }
    echo "</ul>";
} else {
    echo "فرم ارسال نشده است.";
}
?>
