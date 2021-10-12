<?php
//O'zgaruvchilar - bu ma'lumotlarni saqlash uchun "konteynerlar"dir.

//PHP o'zgaruvchilarini yaratish (e'lon qilish)
//PHP -da o'zgaruvchi $ belgisi bilan boshlanadi, keyin o'zgaruvchining nomi:
?>
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>

<?php
//Yuqoridagi bayonotlar bajarilgandan so'ng, $txt o'zgaruvchisi Salom dunyo!, $X o'zgaruvchisi 5, $y o'zgaruvchisi esa 10,5 qiymatiga ega bo'ladi.
//
//Eslatma: O'zgaruvchiga matn qiymatini belgilaganingizda, qiymat atrofida tirnoqlarni qo'ying.
//
//Eslatma: PHP boshqa dasturlash tillaridan farqli o'laroq, o'zgaruvchini e'lon qilish buyrug'iga ega emas. U siz unga birinchi marta qiymat tayinlagan paytingizda yaratiladi.
//
//O'zgaruvchilarni ma'lumotlarni saqlash uchun konteynerlar deb hisoblang.


//PHP o'zgaruvchilari
//O'zgaruvchining qisqa nomi bo'lishi mumkin (x va y kabi) yoki aniqroq nom (yosh, avtomobil nomi, total_volume).
//
//PHP o'zgaruvchilari uchun qoidalar:
//
//O'zgaruvchi $ belgisidan boshlanadi, keyin o'zgaruvchining nomi
//O'zgaruvchining nomi harf yoki pastki chiziqdan boshlanishi kerak
//O'zgaruvchining nomi raqam bilan boshlanishi mumkin emas
//O'zgaruvchilar nomi faqat alfa-raqamli belgilar va pastki chiziqlarni o'z ichiga olishi mumkin (A-z, 0-9 va _)
//O'zgaruvchilar nomlari katta-kichikligini hisobga oladi ($ age va $ AGE-ikki xil o'zgaruvchi)


//
// o'zgaruvchilari chiqarish
//PHP echo bayonoti ko'pincha ma'lumotlarni ekranga chiqarish uchun ishlatiladi.
//
//Quyidagi misol matn va o'zgaruvchini qanday chiqarish kerakligini ko'rsatadi:


$txt = "W3Schools.com";
echo "I love $txt!";
?>
<?php

//
// Quyidagi misol yuqoridagi misol bilan bir xil natijani beradi:


$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>
<?php

//Quyidagi misol ikkita o'zgaruvchining yig'indisini chiqaradi:
//
//PHP - bu erkin yozilgan til
//Yuqoridagi misolda, biz PHPga o'zgarmaydigan ma'lumot turini aytib berishimiz shart emasligiga e'tibor bering.
//
//PHP o'z qiymatiga qarab ma'lumotlar turini avtomatik ravishda o'zgaruvchiga bog'laydi. Ma'lumotlar turlari aniq ma'noda o'rnatilmaganligi uchun siz xato qilmasdan butun songa mag'lubiyat qo'shish kabi ishlarni bajarishingiz mumkin.
//
//PHP 7 da turdagi deklaratsiyalar qo'shildi. Bu funktsiyani e'lon qilishda kutilayotgan ma'lumotlar turini belgilash imkoniyatini beradi va qat'iy talabni yoqib, turning mos kelmasligiga "halokatli xato" ni chiqaradi.
//
//PHP funktsiyalari bo'limida siz qattiq va qat'iy bo'lmagan talablar va ma'lumotlar turi deklaratsiyalari haqida ko'proq bilib olasiz.