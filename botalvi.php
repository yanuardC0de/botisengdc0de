<?php
//bot by yanuardc0de
$namae = 'Alvi';
$umur = 19;
echo 'BOT PENDETEKSI ALVI'. PHP_EOL;
echo 'bot ini dibuat oleh yanuardc0de'. PHP_EOL;
echo '-+-+-+-+-+-+-+-+-+-+-+'. PHP_EOL;
sleep(1);
echo '> Masukan nama anda : ';
$input = fopen("php://stdin","r");
$answer = trim(fgets($input));
if($answer!==''){
	$nama=$answer;
}
sleep(1);
echo '> Masukan umur anda : ';
$input = fopen("php://stdin","r");
$answer = trim(fgets($input));
if($answer!=='') {
	$umurnya=$answer;
}
sleep(1);
echo '[Siap untuk mengeksekusi..]' .PHP_EOL;
sleep(1);
echo 'Berikut adalah data-data anda :'. PHP_EOL;
echo '[x] Nama anda : ' . $nama. PHP_EOL;
echo '[x] Umur anda : ' . $umurnya. PHP_EOL;
sleep(1);
if($namae.$umur > $nama.$umurnya) {
	echo "bukan alvi" ;
} else if($namae.$umur < $nama.$umurnya) {
	echo "bukan alvi tapi si " .$nama;
} else if($namae.$umur == $nama.$umurnya) {
	echo "Ini baru alvi!";
}

?>
