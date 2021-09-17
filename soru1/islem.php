<?php 
	error_reporting(0);

	$agil_sayi=$_POST['agil_sayi'];
	$agil_kapasite=$_POST['agil_kapasite'];
	$toplam_koyun=$_POST['toplam_koyun'];

	if(empty($agil_sayi)||empty($agil_kapasite)||empty($toplam_koyun)){
		echo "Tüm alanları eksiksiz bir şekilde doldurunuz!";
	}else{
		$sonuc="";
	$koyunDeger=($agil_sayi*$agil_kapasite)-$toplam_koyun;

	if($koyunDeger<0){
		$sonuc.="Bu kadar koyun açıkta kaldı :".(-$koyunDeger). "<br>";
	}else{
		$sonuc.="Koyunlar eksiksiz şekilde ağıllara yerleştirildi <br>";
	}

	$agillar=array();
	for ($i=$agil_sayi; $i>0 ; $i--) { 
		$agillar[$i]=0;
		for ($j=$agil_kapasite; $j >0 ; $j--) { 
			if($toplam_koyun>0) {
				$agillar[$i]++;
				$toplam_koyun--;
			}
		}
	}


	
	foreach ($agillar as $key => $value) {
		if(empty($agillar[$key])){
			$agillar[$key]=0;
		}
		$sonuc.=($key).".Ağıl : $value <br>";
	}

	echo $sonuc;


	}

	

 ?>