<?php
error_reporting(0);
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';

// ADMIN PANELE GIRIS ======================================================================================================


//-------------------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);



	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail AND kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(

		'mail'=> $kullanici_mail,
		'password'=> $kullanici_password,
		'yetki' => 5

	));

	echo $say=$kullanicisor->rowCount();


	if ($say==1) {
		
		$_SESSION['kullanici_mail']=$kullanici_mail;


		header("location:../production/index.php");

		exit;

	}  else{


		header("location:../production/login.php?durum=no");
		exit;
	}

}


//--------------------------------------------------------------------------------------------------------------------------------------


//========================================================================================================================




// QEYDIYYATDAN KECME ------------------------------------------------------------------------------------------

if (isset($_POST['musterikaydet'])) {

	$kullanici_ad=htmlspecialchars($_POST['kullanici_ad']);
	$kullanici_soyad=htmlspecialchars($_POST['kullanici_soyad']);  
	$kullanici_mail=htmlspecialchars($_POST['kullanici_mail']);  
	$kullanici_passwordone=htmlspecialchars(trim($_POST['kullanici_passwordone']));  
	$kullanici_passwordtwo=htmlspecialchars(trim($_POST['kullanici_passwordtwo']));   



	if ($kullanici_passwordone==$kullanici_passwordtwo) {

		if (strlen($kullanici_passwordone)>=6) {
			
			$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
			$kullanicisor->execute(array(

				'mail' => $kullanici_mail

			));

			$say = $kullanicisor->rowCount();

			if ($say==0) {


				$password=md5($kullanici_passwordone);

				$kullanici_yetki = 1;
				$kullanici_durum = 0;


				$kullanicikaydet=$db->prepare("INSERT into kullanici SET
					kullanici_ad=:kullanici_ad,
					kullanici_soyad=:kullanici_soyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_yetki=:kullanici_yetki,
					kullanici_durum=:kullanici_durum
					");


				$insert=$kullanicikaydet->execute(array(

					'kullanici_ad' => $kullanici_ad,
					'kullanici_soyad' => $kullanici_soyad,

					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki,
					'kullanici_durum' => $kullanici_durum
				));


				if ($insert) {
	//echo "basarili";

					header("location:../../register.php?durum=basarili");

				} else{
	//echo "alinmadi";

					header("location:../../register.php?durum=basarisiz");

				}

				
			} else{
	//echo "eyni adam";

				header("location:../../register.php?durum=eynikayit");
			}


		} else {

//echo "azdi parol";

			header("Location:../../register.php?durum=eksisifre");


		}
		
	} else {

//echo "ferqli shifr";
		header("Location:../../register.php?durum=farklisifre");


	}



}
// KULLANICI SILINMESI -----------------------------------------------------------------------------------------

if ($_GET['kullanicisil']=="ok") {

	kontrol();


	$sil=$db->prepare("DELETE FROM kullanici WHERE kullanici_id=:id");


	$kontrol=$sil->execute(array(

		'id' => $_GET['kullanici_id']

	));


	if ($kontrol) {

		header("location:../production/kullanici.php?sil=ok");

	} else{

		header("location:../production/kullanici.php?sil=no");

	}


}

//ISTIFADECININ SAYTA DAXIL OLMASI ------------------------------------------------------------------------------------------      

if (isset($_POST['musterigiris'])) {


	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);





	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail AND kullanici_password=:password and kullanici_yetki=:yetki and kullanici_durum=:durum");
	$kullanicisor->execute(array(

		'mail'=> $kullanici_mail,
		'password'=> $kullanici_password,
		'yetki' => 1,
		'durum' => 1
	));

	$say=$kullanicisor->rowCount(); 


	if ($say==1) {
		
		$_SESSION['userkullanici_mail']=$kullanici_mail;
		$_SESSION['userkullanici_pass']=$kullanici_password;

		
		if (isset($_POST['beni_hatirla'])) {
			
			setcookie("mail","resad",strtotime("+1 hours"));
			setcookie("pass","resad",strtotime("+1 hours"));



		} else{

			setcookie("mail","resad",strtotime("-1 hours"));
			setcookie("pass","resad",strtotime("-1 hours"));


		}	 
		header("location:../../index.php?durum=ok");



	}


	else{


		header("location:../../index.php?durum=no");

	}

}

// MELUMATLARIN GUNCELLENMESI --------------------------------------------------------------------------------------------------------


if (isset($_POST['musteriguncelle'])) {



	$kullanicikaydet=$db->prepare("UPDATE kullanici SET
		kullanici_ad=:kullanici_ad,
		kullanici_soyad=:kullanici_soyad,
		kullanici_tel=:kullanici_tel

		where kullanici_id={$_SESSION['userkullanici_id']}

		");

	$insert=$kullanicikaydet->execute(array(

		'kullanici_ad' => $_POST['kullanici_ad'],
		'kullanici_soyad' => $_POST['kullanici_soyad'],
		'kullanici_tel' => $_POST['kullanici_tel']

	));

	if ($insert) {
		header("location:../../hesabim?durum=ok");


	}else{
		header("location:../../hesabim?durum=no");


	}


}

//SIFRENI DEYISME --------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['musterisifreguncelle'])) {

	
	$kullanici_passwordeski=trim($_POST['kullanici_passwordeski']); 
	$kullanici_passwordone=trim($_POST['kullanici_passwordone']);  
	
	$kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']);   

	$kullanici_password=md5($_POST['kullanici_passwordeski']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_password=:password");
	$kullanicisor->execute(array(

		'password' => $kullanici_password

	));

	$say = $kullanicisor->rowCount();

	if($say=="0")

	{

		header("location:../../sifre-guncelle.php?durum=eskisifreyanlis");

	}
	else {
		
		if ($kullanici_passwordone==$kullanici_passwordtwo) {

			if (strlen($kullanici_passwordone)>=6) {
				

				$password=md5($kullanici_passwordone);


				$kullanicikaydet=$db->prepare("UPDATE kullanici SET

					kullanici_password=:kullanici_password

					where kullanici_id={$_SESSION['userkullanici_id']}
					");


				$insert=$kullanicikaydet->execute(array(

					'kullanici_password' => $password

				));


				if ($insert) {
	//echo "basarili";

					header("location:../../sifre-guncelle.php?durum=basarili");

				} else{
	//echo "alinmadi";

					header("location:../../sifre-guncelle.php?durum=basarisiz");

				}
				
			} else{
	//echo "azdi parol";

				header("Location:../../sifre-guncelle.php?durum=eksisifre");

			}

		} else {

//echo "ferqli shifr";
			header("Location:../../sifre-guncelle.php?durum=farklisifre");



		}

		
	}



}

// ADRESS GUNCELLENMESI -------------------------------------------------------------------------------------------------------------

if (isset($_POST['musteriadressguncelle'])) {



	$kullanicikaydet=$db->prepare("UPDATE kullanici SET
		kullanici_tip=:kullanici_tip,
		kullanici_tc=:kullanici_tc,
		kullanici_vdairesi=:kullanici_vdairesi,
		kullanici_adress=:kullanici_adress,

		kullanici_vno=:kullanici_vno,
		kullanici_seher=:kullanici_seher

		where kullanici_id={$_SESSION['userkullanici_id']}

		");

	$insert=$kullanicikaydet->execute(array(

		'kullanici_tip' => $_POST['kullanici_tip'],
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_vdairesi' => $_POST['kullanici_vdairesi'],
		'kullanici_adress' => $_POST['kullanici_adress'],
		'kullanici_vno' => $_POST['kullanici_vno'],
		'kullanici_seher' => $_POST['kullanici_seher']
	));

	if ($insert) {
		header("location:../../adress-bilgileri?durum=ok");


	}else{
		header("location:../../adress-bilgileri?durum=no");


	}


}

// MAGAZA BASVURU GUNCELLEE ---------------------------------------------------------------------------------------------------------

if (isset($_POST['magazabasvuru'])) {



	$kullanicikaydet=$db->prepare("UPDATE kullanici SET
		kullanici_banka=:kullanici_banka,
		kullanici_iban=:kullanici_iban,	
		kullanici_ad=:kullanici_ad,
		kullanici_soyad=:kullanici_soyad,
		kullanici_tel=:kullanici_tel,
		kullanici_tip=:kullanici_tip,
		kullanici_tc=:kullanici_tc,
		kullanici_vdairesi=:kullanici_vdairesi,
		kullanici_adress=:kullanici_adress,
		kullanici_vno=:kullanici_vno,
		kullanici_seher=:kullanici_seher,
		kullanici_magaza=:kullanici_magaza
		where kullanici_id={$_SESSION['userkullanici_id']}

		");

	$insert=$kullanicikaydet->execute(array(
		'kullanici_banka' => $_POST['kullanici_banka'],
		'kullanici_iban' => $_POST['kullanici_iban'],
		'kullanici_ad' => $_POST['kullanici_ad'],
		'kullanici_soyad' => $_POST['kullanici_soyad'],
		'kullanici_tel' => $_POST['kullanici_tel'],
		'kullanici_tip' => $_POST['kullanici_tip'],
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_vdairesi' => $_POST['kullanici_vdairesi'],
		'kullanici_adress' => $_POST['kullanici_adress'],
		'kullanici_vno' => $_POST['kullanici_vno'],
		'kullanici_seher' => $_POST['kullanici_seher'],
		'kullanici_magaza' => 1
	));

	if ($insert) {
		header("location:../../magaza-basvuru?durum=ok");


	}else{
		header("location:../../mahaza-basvuru?durum=no");


	}


}


// MAGAZA BASVURU QEBULU ---------------------------------------------------------------------------------------------------------

if (isset($_POST['basvuruonayla'])) {



	$kullanicikaydet=$db->prepare("UPDATE kullanici SET

		kullanici_magaza=:kullanici_magaza

		where kullanici_id={$_POST['kullanici_id']}

		");

	$insert=$kullanicikaydet->execute(array(

		'kullanici_magaza' => 2
	));

	if ($insert) {
		header("location:../production/magaza-onay?durum=ok");


	}else{
		header("location:../production/magaza-onay?durum=no");


	}


}

// MAGAZA BASVURU REDD CAVABI ---------------------------------------------------------------------------------------------------------

if (isset($_POST['basvuruiptal'])) {



	$sil=$db->prepare("UPDATE kullanici SET

		kullanici_magaza=:kullanici_magaza

		where kullanici_id={$_POST['kullanici_id']}

		");

	$insert=$sil->execute(array(

		'kullanici_magaza' => 0
	));

	if ($insert) {
		header("location:../production/magaza-onay?durum=basvuruiptal");


	}else{
		header("location:../production/magaza-onay?durum=no");


	}


}

// PROFIL RESIMINI GUNCELLEME ----------------------------------------------------------------------------------------------------------

if (isset($_POST['profilresimguncelle'])) {

	include 'SimpleImage.php';
	$image = new SimpleImage();
	$image->load($tmp_name);
	$image->resize(128,128);

	$image->save($tmp_name); 



	$uploads_dir= '../../dimg/magaza-foto';

	@$tmp_name= $_FILES['kullanici_magazafoto']["tmp_name"];
	@$name= $_FILES['kullanici_magazafoto']["name"];

	$uniqid=rand(20000,50000);

	
	$refimgyol= substr($uploads_dir, 6)."/".$uniqid.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$uniqid$name");



	$duzenle=$db->prepare("UPDATE kullanici SET
		
		kullanici_magazafoto=:kullanici_magazafoto

		WHERE kullanici_id={$_SESSION['userkullanici_id']}");


	$update=$duzenle->execute(array(

		'kullanici_magazafoto' => $refimgyol
	));


	if ($update) {

		$unilinksil=$_POST['eski_yol'];

		unlink("../../$unilinksil");

		header("location:../../profil-resim-guncelle.php?durum=ok");


	} else{


		header("location:../../profil-resim-guncelle.php?durum=no");


	}


}

// MEHSULLARIN ELAVE EDILMESI ---------------------------------------------------------------------------------------------------------

if (isset($_POST['urunekle'])) {

	$urun_seourl=seo($_POST['urun_ad']);

	include 'SimpleImage.php';
	$image = new SimpleImage();
	$image->load($tmp_name);
	$image->resize(829,422);
	$image->save($tmp_name); 



	$uploads_dir= '../../dimg/urun-foto';

	@$tmp_name= $_FILES['urunfoto_resimyol']["tmp_name"];
	@$name= $_FILES['urunfoto_resimyol']["name"];

	$uniqid=rand(20000,50000);

	
	$refimgyol= substr($uploads_dir, 6)."/".$uniqid.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$uniqid$name");



	$duzenle=$db->prepare("INSERT INTO urun SET
		
		urunfoto_resimyol=:urunfoto_resimyol,
		kategori_id=:kategori_id,
		kullanici_id=:kullanici_id,
		urun_ad=:urun_ad,
		urun_detay=:urun_detay,
		urun_fiyat=:urun_fiyat,
		urun_durum=:urun_durum,
		urun_seourl=:urun_seourl,
		urun_stok=:urun_stok

		");


	$insert=$duzenle->execute(array(

		'urunfoto_resimyol' => $refimgyol,
		'kategori_id' => $_POST['kategori_id'],
		'kullanici_id' => $_SESSION['userkullanici_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_durum' => 0,
		'urun_seourl' => $urun_seourl,
		'urun_stok' => $_POST['urun_stok'],

	));


	if ($insert) {


		header("location:../../urunekle?durum=ok");
	}

	else{

		header("location:../../urunekle?durum=no"); }


	}

	// MEHSULLARI SIL -----------------------------------------------------------------------------------------------------------


	if ($_GET['urunsil']=="ok") {



		$sil=$db->prepare("DELETE FROM urun WHERE urun_id=:id");


		$kontrol=$sil->execute(array(

			'id' => $_GET['urun_id']

		));


		if ($kontrol) {

			header("location:../../urunlerim?sil=ok");

		} else{

			header("location:../../urunlerim?sil=no");

		}


	}

//--------========================-------------========================-------------===================----------------============

	if ($_GET['urunsila']=="ok") {



		$sil=$db->prepare("DELETE FROM urun WHERE urun_id=:id");


		$kontrol=$sil->execute(array(

			'id' => $_GET['urun_id']

		));


		if ($kontrol) {

			header("location:../production/urun?sil=ok");

		} else{

			header("location:../production/urun?sil=no");

		}


	}


//  MEHSULUN QABAGA CIXARDILMASI ----------------------------------------------------------------------------------------------


	if ($_GET['urun_o']=="ok") {


		$urunkaydet=$db->prepare("UPDATE urun SET

			urun_onecikar=:urun_onecikar


			WHERE urun_id={$_GET['urun_id']}");



		$update=$urunkaydet->execute(array(

			'urun_onecikar'=> $_GET['urun_onecikar']


		));


		if ($update) {

			header("location:../production/urun.php?durum=ok");

		} else{

			header("location:../production/urun.php?durum=no");

		}

	}

//  KULLANICININ AKTIV VE PASSIV EDILMESI ----------------------------------------------------------------------------------------

	if ($_GET['kullanici_duru']=="ok") {


		$urunkaydet=$db->prepare("UPDATE kullanici SET

			kullanici_durum=:kullanici_durum


			WHERE kullanici_id={$_GET['kullanici_id']}");



		$update=$urunkaydet->execute(array(

			'kullanici_durum'=> $_GET['kullanici_durum']


		));


		if ($update) {

			header("location:../production/kullanici.php?durum=ok");

		} else{

			header("location:../production/kullanici.php?durum=no");

		}

	}


// URUNLERIN AKTIV EDILMESI  ----------------------------------------------------------------------------------------------------------

	if ($_GET['urun_duru']=="ok") {


		$urunkaydet=$db->prepare("UPDATE urun SET

			urun_durum=:urun_durum


			WHERE urun_id={$_GET['urun_id']}");



		$update=$urunkaydet->execute(array(

			'urun_durum'=> $_GET['urun_durum']


		));


		if ($update) {

			header("location:../production/urun.php?durum=ok");

		} else{

			header("location:../production/urun.php?durum=no");

		}

	}


// KATEGORIYI DUZENLE  ------------------------------------------------------------------------------------------------------------------




	if (isset($_POST['kategoriduzenle'])) {

		$kategori_id=$_POST['kategori_id'];
		$kategori_seourl=seo($_POST['kategori_ad']);

		$kategorikaydet=$db->prepare("UPDATE kategori SET

			kategori_ad=:kategori_ad,
			kategori_sira=:kategori_sira,
			kategori_durum=:kategori_durum,
			kategori_seourl=:kategori_seourl
			where kategori_id={$_POST['kategori_id']}
			");

		$update=$kategorikaydet->execute(array(

			'kategori_ad' => $_POST['kategori_ad'],
			'kategori_sira' => $_POST['kategori_sira'],
			'kategori_durum' => $_POST['kategori_durum'],
			'kategori_seourl' => $kategori_seourl

		));

		if ($update) {

			header("location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=ok");

		} else{

			header("location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=no");

		}


	}

//   KATEGORIYI SILME --------------------------------------------------------------------------------------------------------------


	if ($_GET['kategorisil']=="ok") {

		kontrol();

		$sil=$db->prepare("DELETE FROM kategori WHERE kategori_id=:id");


		$kontrol=$sil->execute(array(

			'id' => $_GET['kategori_id']

		));


		if ($kontrol) {

			header("location:../production/kategori.php?sil=ok");

		} else{

			header("location:../production/kategori.php?sil=no");

		}


	}


//  KATEGORIYANI ELAVE ET   -----------------------------------------------------------------------------------------------------------


	if (isset($_POST['kategorikaydet'])) {

		$kategori_id=$_POST['kategori_id'];
		$kategori_seourl=seo($_POST['kategori_ad']);

		$kategorikaydet=$db->prepare("INSERT into kategori SET
			kategori_ad=:kategori_ad,
			kategori_sira=:kategori_sira,
			kategori_durum=:kategori_durum,
			kategori_seourl=:kategori_seourl
			");


		$insert=$kategorikaydet->execute(array(

			'kategori_ad' => $_POST['kategori_ad'],
			'kategori_sira' => $_POST['kategori_sira'],
			'kategori_durum' => $_POST['kategori_durum'],
			'kategori_seourl' => $kategori_seourl
		));


		if ($insert) {

			header("location:../production/kategori-ekle.php?kategori_id=$kategori_id&durum=ok");

		} else{

			header("location:../production/kategori-ekle.php?kategori_id=$kategori_id&durum=no");

		}

	}


// SIPARIS EKLEME KODLARI ----------------------------------------------------------------------------------------------------------


	if (isset($_POST['sifarisver'])) {
		sleep(5);

		$sipariskaydet=$db->prepare("INSERT INTO siparis SET

			kullanici_id=:kullanici_id,
			kullanici_idsatici=:kullanici_idsatici
			");


		$insert=$sipariskaydet->execute(array(

			'kullanici_idsatici' => $_POST['kullanici_idsatici'],
			'kullanici_id' => $_SESSION['userkullanici_id']

		));

		if ($insert) {

			$siparis_id=$db->lastInsertID();

			
			$kaydet=$db->prepare("INSERT INTO siparis_detay SET
				siparis_id=:siparis_id,
				kullanici_id=:kullanici_id,
				kullanici_idsatici=:kullanici_idsatici,
				urun_id=:urun_id,
				urun_fiyat=:urun_fiyat
				");


			$insertkaydet=$kaydet->execute(array(
				'siparis_id' => $siparis_id,
				'kullanici_idsatici' => $_POST['kullanici_idsatici'],
				'kullanici_id' => $_SESSION['userkullanici_id'],
				'urun_id' => $_POST['urun_id'],
				'urun_fiyat' => $_POST['urun_fiyat']

			));

			if ($insertkaydet) {

				header("location:../../siparislerim?durum=ok");
				exit;
			} else {
				echo "basarisiz";
				//header("location:../../404");
				exit;

			}

		} else{

			
			header("location:../../404");
			exit;
		}

	}		


	

// SIPARISE ONAY VERILMESI -----------------------------------------------------------------------------------------------------

	if ($_GET['siparis_onay']=="ok") {
		sleep(3);

		$urunkaydet=$db->prepare("UPDATE siparis_detay SET

			siparisdetay_onay=:siparisdetay_onay


			WHERE siparisdetay_id={$_GET['siparisdetay_id']}");



		$update=$urunkaydet->execute(array(

			'siparisdetay_onay' => $_GET['siparisdetay_onay']


		));


		if ($update) {


			header("location:../../yenisiparislerim.php?durum=ok");

		} else{

			header("location:../../404.php?durum=no");

		}

	}


// YORUM VE PUANLAMA HISSENIN QEYDIYYATA ALINMASI -----------------------------------------------------------------------------------

	if (isset($_POST['yorumkaydet'])) {

		$gelen_url=$_POST['gelen_url'];


		$yorumkaydet=$db->prepare("INSERT into yorum SET

			kullanici_id=:kullanici_id,
			urun_id=:urun_id,
			yorum_puan=:yorum_puan,
			yorum_detay=:yorum_detay

			");


		$insert=$yorumkaydet->execute(array(
			'kullanici_id' => $_POST['kullanici_id'],
			'urun_id' => $_POST['urun_id'],
			'yorum_puan' => $_POST['yorum_puan'],
			'yorum_detay' => $_POST['yorum_detay']));



		if ($insert) {

			header("location:$gelen_url?durum=ok");

		} else{

			header("location:$gelen_url?durum=no");

		}

	}


// yorum onaylama ---------------------------------------------------------------------------------------------------------------

	if ($_GET['yorum_duru']=="ok") {


		$yorumkaydet=$db->prepare("UPDATE yorum SET

			yorum_durum=:yorum_durum


			WHERE yorum_id={$_GET['yorum_id']}");



		$update=$yorumkaydet->execute(array(

			'yorum_durum'=> $_GET['yorum_durum']


		));


		if ($update) {

			header("location:../production/yorum.php?durum=ok");

		} else{

			header("location:../production/yorum.php?durum=no");

		}

	}

// YORUM SILL ----------------------------------------------------------------------------------------------------------------

	if ($_GET['yorumsil']=="ok") {
		kontrol();


		$sil=$db->prepare("DELETE FROM yorum WHERE yorum_id=:id");


		$kontrol=$sil->execute(array(

			'id' => $_GET['yorum_id']

		));


		if ($kontrol) {

			header("location:../production/yorum.php?sil=ok");

		} else{

			header("location:../production/yorum.php?sil=no");

		}


	}

// MESAJ GONDERME ISLEMLERI ---------------------------------------------------------------------------------------------------------

	if (isset($_POST['mesajekle'])) {

		$kullanici_gel=$_POST['kullanici_gel'];

		$mesajkaydet=$db->prepare("INSERT into mesaj SET
			mesaj_detay=:mesaj_detay,
			kullanici_gel=:kullanici_gel,
			kullanici_gon=:kullanici_gon

			");


		$insert=$mesajkaydet->execute(array(
			'mesaj_detay'=> $_POST['mesaj_detay'],
			'kullanici_gel'=> $_POST['kullanici_gel'],
			'kullanici_gon' => $_SESSION['userkullanici_id']
		));


		if ($insert) {

			header("location:../../mesaj-gonder.php?kullanici_gel=$kullanici_gel&durum=ok");

		} else{
			header("location:../../mesaj-gonder.php?kullanici_gel=$kullanici_gel&durum=ok");

		}

	}

// MESAJLARİN SİLİNMESİ  -------------------------------------------------------------------------------------------------------------------



	if ($_GET['mesajsilgeden']=="ok") {
		kontrol();


		$sil=$db->prepare("DELETE FROM mesaj WHERE mesaj_id=:id");


		$kontrol=$sil->execute(array(

			'id' => $_GET['mesaj_id']

		));


		if ($kontrol) {

			header("location:../../geden-mesaj.php?sil=ok");

		} else{

			header("location:../../geden-mesaj.php?sil=no");

		}


	}

	if ($_GET['mesajsilgelen']=="ok") {
		kontrol();


		$sil=$db->prepare("DELETE FROM mesaj WHERE mesaj_id=:id");


		$kontrol=$sil->execute(array(

			'id' => $_GET['mesaj_id']

		));


		if ($kontrol) {

			header("location:../../gelen-mesaj.php?sil=ok");

		} else{

			header("location:../../gelen-mesaj.php?sil=no");

		}


	}



	?>