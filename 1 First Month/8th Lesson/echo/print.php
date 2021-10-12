<?php
//PHP echo va print funksiyalari
//PHP -da chiqishni olishning ikkita asosiy usuli bor: echo va chop etish.
//
//Bu qo'llanmada biz deyarli har bir misolda echo yoki printdan foydalanamiz. Shunday qilib, ushbu bobda ushbu ikkita chiqish bayonoti haqida bir oz ko'proq ma'lumot mavjud.



//PHP echo va bosma bayonotlar
//echo va bosma deyarli bir xil. Ularning ikkalasi ham ma'lumotlarni ekranga chiqarish uchun ishlatiladi.
//
//Farqlar unchalik katta emas: echo qaytish qiymatiga ega emas, bosma qaytarish qiymati 1 ga teng, shuning uchun uni ifodalarda ishlatish mumkin. echo bir nechta parametrlarni olishi mumkin (garchi bunday foydalanish kamdan -kam hollarda), bosma esa bitta argumentni olishi mumkin. echo bosmadan biroz tezroq.


//PHP echo bayonoti
//Echo iborasi qavsli yoki qavssiz ishlatilishi mumkin: echo yoki echo ().
//
//Matnni ko'rsatish
//
//Quyidagi misol echo buyrug'i bilan matnni qanday chiqarish kerakligini ko'rsatadi (matnda HTML belgilash bo'lishi mumkinligiga e'tibor bering):
?>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<?php
//Quyidagi misol echo iborasi yordamida matn va o'zgaruvchilarni qanday chiqarish kerakligini ko'rsatadi:

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>

<?php

//PHP bosma bayonoti
//Chop etish bayonnomasi qavsli yoki qavssiz ishlatilishi mumkin: print yoki print ().
//
//    Matnni ko'rsatish
//
//Quyidagi misolda chop etish buyrug'i bilan matnni qanday chiqarish ko'rsatiladi (matnda HTML belgilash bo'lishi mumkinligiga e'tibor bering):
