<?php

echo"\033[92 email/nohp : ";
$uid 	= trim(fgets(STDIN));
echo"\033[92m password :";
$n 	= trim(fgets(STDIN));
echo"\033[93m jumlah yg mau di undang :";
$jumlah = trim(fgets(STDIN));
echo"\033[91m waktu tunngu (5-9999sec) :";
$wait	= trim(fgets(STDIN));
    $i=0;
while($i<$jumlah){
			sleep($wait);
			$i++;
			flush();
			
		$news		=	
news($uid,$n);
		$video		=	
video($uid,$n);
		$share		=	
share($uid,$n);
		$code		=	
code($uid,$n);
		$klik		=
klik($uid,$n);
	echo "invite failed kode reff modifikasi salah
";
	
	}
function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://baca.co.id/api/v1/News?categoryId=-1&fromUser=true"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = 
"Cookie: u=$uid;n=$n";
				$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
		curl_setopt($ch, CURLOPT_HTTPHEADER, 
$headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://baca.co.id/api/v1/News?categoryId=-1&fromUser=true"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://baca.co.id/api/v1/News?categoryId=-1&fromUser=true"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://baca.co.id/api/v1/News?categoryId=-1&fromUser=true"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://baca.co.id/api/v1/News?categoryId=-1&fromUser=true"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
