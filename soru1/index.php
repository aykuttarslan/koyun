<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Koyun Ağıl Uygulaması</title>
</head>


<form id="formGonder">
	
<b><i>Ağıl Sayısı : </i></b>
<input type="number" name="agil_sayi"> <br>


<b><i>Ağıl Kapasitesi :</i></b>
<input type="number" name="agil_kapasite"> <br>	

<b><i>Koyun toplam : </i></b>
<input type="number" name="toplam_koyun"> <br>	

<button class="hesapla">Hesapla</button>

</form>

<b id="sonuc"> </b>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	
	 $(document).ready(function(){

	 
      	$("#formGonder").submit(function(e){
			e.preventDefault(); 
		});

	 	
	 	$(".hesapla").click(function(){
	 		
	 		var sayilar=$("#formGonder").serialize();
	 		
	 		$.ajax({
		 		url:"islem.php",
		 		type:"post",
		 		data:sayilar,
		 		 success: function(e){
	                   $('#sonuc').html( e);
	             },
	 		});
	 		
	 	})
	 	
           
    });
</script>
</body>
</html>
