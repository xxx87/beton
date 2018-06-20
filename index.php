<?php
$ini = parse_ini_file('./config/config.ini');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ABD&#183;BETON</title>
	<meta name="description" content="Якісний бетон ✔ Індивідуальний підхід до кожного клієнта ✔  ☎ +38 (067) 914-83-77">
	<meta name="keywords" content="бетон, цемент, Киев, бетономешалка, песок, щебень, груша">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/mixer.png">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container logo">
    <a href="index.html"><img src="img/mixer32.png" alt=""></a>
</div>
<div class="container page">
    <div class="border">
        <img src="img/line.png" alt="">
    </div>
    <div class="text-header">
        <p>Цінова пропозиція на продукцію</p>
        <p>Телефон для замовлення:&#8195;<a class="telephone" href="tel:0679148377">&#9742;<span>&#8194;(067)&#8194;914-83-77</span></a></p>
    </div>
    <div class="prices">
        <table id="prices" class="table table-bordered table-responsive">
            <tbody>
            <tr class="tr-title"><td colspan="8"><strong>Бетон базова ціна (без доставки)</strong></td></tr>
            <tr class="tr-mark"><td rowspan="2" class="td-mark">Марка бетону</td><td>В7,5 F50</td><td>В12,5 F50</td><td>В15 F50</td><td>В20 F200W6</td><td>В25 F200W6</td><td>В30 F200W6</td></tr>
            <tr><td>М100</td><td>М150</td><td>M200</td><td>M250</td><td>M350</td><td>M400</td></tr>
            <tr class="tr-title"><td>Ціна 1 м.куб. грн P3</td><td><?php print $ini['M100_P3'];?></td><td><?php print $ini['M150_P3'];?></td><td><?php print $ini['M200_P3'];?></td><td><?php print $ini['M250_P3'];?></td><td><?php print $ini['M350_P3'];?></td><td><?php print $ini['M400_P3'];?></td></tr>
            <tr class="tr-title"><td>Ціна 1 м.куб. грн P4 (під насос)</td><td><?php print $ini['M100_P4'];?></td><td><?php print $ini['M150_P4'];?></td><td><?php print $ini['M200_P4'];?></td><td><?php print $ini['M250_P4'];?></td><td><?php print $ini['M350_P4'];?></td><td><?php print $ini['M400_P4'];?></td></tr>
            <tr><td colspan="8"></td></tr>
            <tr class="tr-title"><td colspan="8"><strong>Цементні розчини (без доставки)</strong></td></tr>
            <tr><td colspan="2">Марка розчину</td><td>М50</td><td>M75</td><td>M100</td><td>M150</td><td>M200</td></tr>
            <tr class="tr-title"><td colspan="2">Ціна 1 м.куб. грн P8</td><td><?php print $ini['M50_P8'];?></td><td><?php print $ini['M75_P8'];?></td><td><?php print $ini['M100_P8'];?></td><td><?php print $ini['M150_P8'];?></td><td><?php print $ini['M200_P8'];?></td></tr>
            <tr class="tr-title"><td colspan="2">Ціна 1 м.куб. грн P12</td><td><?php print $ini['M50_P12'];?></td><td><?php print $ini['M75_P12'];?></td><td><?php print $ini['M100_P12'];?></td><td><?php print $ini['M150_P12'];?></td><td><?php print $ini['M200_P12'];?></td></tr>
            <tr><td colspan="8"></td></tr>
            <tr class="tr-title"><td colspan="8"><strong>Доставка</strong></td></tr>
            <tr><td colspan="8"><strong>Доставка прораховується індивідуально. <br>Детальні умови доставки Ви можете дізнатись за телефоном: <a class="telephone" href="tel:0679148377"><span>(067) 914-83-77</span></a></strong></td></tr>
        </tbody>
        </table>
    </div>
</div>

<div id="footer">
    <div class="footer-wrapper">
        <div class="copyright">
            <span class="footer-text">© 2017. ABD&#183;BETON. Київ. Всі права захищені.</span>
        </div>
    </div>
</div>

</body>
</html>