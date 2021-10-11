<?php
//PHP asosiy sintaksisi
//PHP skriptini hujjatning istalgan joyiga joylashtirish mumkin.
//PHP skripti <?php bilan boshlanadi va  <!-- Bilan tugaydi:-->


// PHP kodi shu yerda yoziladi


//PHP fayllari uchun standart fayl kengaytmasi ".php" dir.
//
//PHP faylida odatda HTML teglari va ba'zi PHP skript kodlari mavjud.
//
//Quyida bizda PHP-ning "echo"  funktsiyasidan foydalangan holda "Salom dunyo!" Matnini chiqarish uchun oddiy PHP faylining namunasi.
?>
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
<!--Eslatma: PHP bayonotlari nuqta -vergul (;) bilan tugaydi.-->


<!--PHP harflarni katta kichikligagag qaramaydi-->
<!--PHP-da kalit so'zlar (masalan, if, else, while, echo va h.k.), sinflar, funktsiyalar va foydalanuvchi tomonidan belgilanadigan funktsiyalar katta-kichik harflarga bog'liq emas.-->
<!---->
<!--Quyidagi misolda, quyidagi uchta echo funksilar tengdir:-->


<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>


<!--Eslatma: Biroq; barcha o'zgaruvchilar nomlari katta-kichik harflar bilan yoziladi va ular farqlanadi!-->