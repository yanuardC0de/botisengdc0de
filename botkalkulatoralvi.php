<?php
//SISTEM KALKULATOR SIMPLE
echo 'SIST3M KALKUL4TOR SIMPLE'. PHP_EOL;
sleep(1);
echo 'Created by yanuardc0de'. PHP_EOL;
sleep (1);
echo 'FOLLOW IG : @yanuaralvian' . PHP_EOL;
sleep(1);
echo 'MEMULAI PROGRAMNYA....' .PHP_EOL;
sleep(1);
$operator1 = '+';
$operator2 =  '-';
$operator3 = '*';
$operator4 = '/';
sleep(1);
echo '> Masukan nilai awal anda : ';
$input = fopen("php://stdin","r");
$answer = trim(fgets($input));
if($answer!=='') {
	$nilaiawal=$answer;
}
sleep(1);
echo '> Masukan nilai kedua anda : ';
$input = fopen("php://stdin","r");
$answer = trim(fgets($input));
if($answer!=='') {
	$nilaikedua=$answer;
}
sleep(1);
echo '> Masukan operator aritmatika : (ex : +,-,*,/) ';
$input = fopen("php://stdin","r");
$answer = trim(fgets($input));
if($answer!=='') {
	$operatornya=$answer;
}
sleep(1);
echo 'Berikut datanya anda : '.PHP_EOL;
echo 'Nilai awal anda : ' . $nilaiawal . PHP_EOL;
echo 'Nilai kedua anda : ' . $nilaikedua . PHP_EOL;
echo 'Operator aritmatikanya : ' . $operatornya . PHP_EOL;
sleep(1);
echo '[Sedang Memprosesnya...]' . PHP_EOL;
sleep(1);
 switch($operatornya) {
 case  '+' :
 echo 'Hasil penjumlahanya yaitu : ' .$nilaiawal + $nilaikedua;
break;
case '-' :
echo 'Hasil penguranganya yaitu : ' .$nilaiawal - $nilaikedua;
break;
case '*' :
echo 'Hasil perkalianya yaitu : ' .$nilaiawal * $nilaikedua;
break;
case '/' :
echo 'Hasil pembagianya yaitu : ' .$nilaiawal / $nilaikedua;
break;
default :
}
?>
