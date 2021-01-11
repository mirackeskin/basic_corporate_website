<?php
    include "baglan.php";

    //Kapak bölümü Başlangıç
    if(isset($_POST['kapakBilgileri']))
    {
        $update=$db->prepare("UPDATE  kapak_tablosu 
                                    SET kapak_resmi=:kapak_resmi,
                                        kullanici_adi=:kullanici_adi,
                                        kullanici_meslek=:kullanici_meslek,
                                        facebook_url=:facebook_url,
                                        instagram_url=:instagram_url,
                                        twitter_url=:twitter_url,
                                        linkedin_url=:linkedin_url");
        $kapakData=array(
            "kapak_resmi"=>$_POST['kapak_resmi'],
            "kullanici_adi"=>$_POST['kullanici_adi'],
            "kullanici_meslek"=>$_POST['kullanici_meslek'],
            "facebook_url"=>$_POST['facebook_url'],
            "instagram_url"=>$_POST['instagram_url'],
            "twitter_url"=>$_POST['twitter_url'],
            "linkedin_url"=>$_POST['linkedin_url']
        );
        $update->execute($kapakData);

        if($update)
        {
            header("Location:adminPanel.php?durum=ok"); 
        }
        else
        {
            header("location:adminKapak.php?durum=no");
        }
    }

    //Kapak bölümü Son

    //Hakkımda Bölümü Başlangıç

    if(isset($_POST['hakkimdaBilgileri']))
    {
        $update=$db->prepare("UPDATE hakkimda_tablosu SET
                                                        ana_baslik=:ana_baslik,
                                                        yardimci_baslik=:yardimci_baslik,
                                                        ad=:ad,
                                                        telefon=:telefon,
                                                        mail=:mail,
                                                        site_adi=:site_adi,
                                                        adres=:adres,
                                                        giris_paragraf=:giris_paragraf,
                                                        gelisme_paragraf=:gelisme_paragraf,
                                                        sonuc_paragraf=:sonuc_paragraf ");
        
        $hakkimdaData=array(
            "ana_baslik"=>$_POST['ana_baslik'],
            "yardimci_baslik"=>$_POST['yardimci_baslik'],
            "ad"=>$_POST['ad'],
            "telefon"=>$_POST['telefon'],
            "mail"=>$_POST['mail'],
            "site_adi"=>$_POST['site_adi'],
            "adres"=>$_POST['adres'],
            "giris_paragraf"=>$_POST['giris_paragraf'],
            "gelisme_paragraf"=>$_POST['gelisme_paragraf'],
            "sonuc_paragraf"=>$_POST['sonuc_paragraf']
        );
        $update->execute($hakkimdaData);

        if($update)
        {
            header("location:adminPanel.php?durum=ok");
        }else
        {
            header("location:adminHakkimda.php?durum=no");
        }

        
    }

    //Hakkımda Bölümü Son

    //Özgeçmiş Bölümü Başlangıç

    if($_GET['ozgecmis_id'])
    {
        $ozgecmis_id=$_GET['ozgecmis_id'];
        $delete=$db->prepare("DELETE FROM ozgecmis_tablosu where ozgecmis_id=$ozgecmis_id");
        $delete->execute();
        
        if($delete)
        {
            header("location:adminOzgecmis.php?durum=ok");
        }else
        {
            header("location:adminOzgecmis.php?durum=no");
        }
                
    }

    if(isset($_POST['ozgecmisDuzenleBilgileri']))
    {
        $ozgecmis_id=$_POST['ozgecmis_id'];
        $update=$db->prepare("UPDATE  ozgecmis_tablosu 
                                    SET ana_baslik=:ana_baslik,
                                        kart_anabaslik=:kart_anabaslik,
                                        kart_ortabaslik=:kart_ortabaslik,
                                        kart_yazisi=:kart_yazisi,
                                        kart_konum=:kart_konum
                                         WHERE ozgecmis_id=$ozgecmis_id");
        $ozgecmisDuzenleData=array(
            "ana_baslik"=>$_POST['ana_baslik'],
            "kart_anabaslik"=>$_POST['kart_anabaslik'],
            "kart_ortabaslik"=>$_POST['kart_ortabaslik'],
            "kart_yazisi"=>$_POST['kart_yazisi'],
            "kart_konum"=>$_POST['kart_konum']
        );
        $update->execute($ozgecmisDuzenleData);

        if($update)
        {
            header("Location:adminOzgecmis.php?durum=ok"); 
        }
        else
        {
            header("location:adminOzgecmis.php?durum=no");
        }
    }

    if(isset($_POST['ozgecmisEkleBilgileri']))
    {
        $insert=$db->prepare("INSERT INTO ozgecmis_tablosu SET ana_baslik=:ana_baslik,
                                                                kart_anabaslik=:kart_anabaslik,
                                                                kart_ortabaslik=:kart_ortabaslik,
                                                                kart_yazisi=:kart_yazisi,
                                                                kart_konum=:kart_konum");
        $ozgecmisEkleData=array(
            "ana_baslik"=>$_POST['ana_baslik'],
            "kart_anabaslik"=>$_POST['kart_anabaslik'],
            "kart_ortabaslik"=>$_POST['kart_ortabaslik'],
            "kart_yazisi"=>$_POST['kart_yazisi'],
            "kart_konum"=>$_POST['kart_konum']
        );

        $insert->execute($ozgecmisEkleData);
        
        if($insert)
        {
            header("location:adminOzgecmis.php");
        }else
        {
            header("location:adminOzgecmisEkle.php?durum=no");
        }

    }
    //Özgeçmiş Bölümü Son

    //İlgi Alanım Bölümü Başlangıç

    if($_GET['ilgialani_id'])
    {
        $ilgialani_id=$_GET['ilgialani_id'];
        $delete=$db->prepare("DELETE FROM ilgialani_tablosu where ilgialani_id=$ilgialani_id");
        $delete->execute();
        
        if($delete)
        {
            header("location:adminilgiAlanlarim.php?durum=ok");
        }else
        {
            header("location:adminilgiAlanlarim.php?durum=no");
        }
                
    }

    if(isset($_POST['ilgiAlanlarimEkleBilgileri']))
    {
        $insert=$db->prepare("INSERT INTO ilgialani_tablosu SET logo_url=:logo_url,
                                                                ana_baslik=:ana_baslik,
                                                                orta_baslik=:orta_baslik,
                                                                icerik=:icerik");
        $ilgiAlanlarimEkleData=array(
            "logo_url"=>$_POST['logo_url'],
            "ana_baslik"=>$_POST['ana_baslik'],
            "orta_baslik"=>$_POST['orta_baslik'],
            "icerik"=>$_POST['icerik']
        );

        $insert->execute($ilgiAlanlarimEkleData);
        
        if($insert)
        {
            header("location:adminilgiAlanlarim.php");
        }else
        {
            header("location:adminilgiAlanlarimEkle.php?durum=no");
        }

    }

    if(isset($_POST['ilgiAlanlarimDuzenleBilgileri']))
    {
        $ilgialani_id=$_POST['ilgialani_id'];
        $update=$db->prepare("UPDATE  ilgialani_tablosu 
                                    SET ana_baslik=:ana_baslik,
                                        logo_url=:logo_url,
                                        orta_baslik=:orta_baslik,
                                        icerik=:icerik
                                        WHERE ilgialani_id=$ilgialani_id");
        $ilgialaniDuzenleData=array(
            "ana_baslik"=>$_POST['ana_baslik'],
            "logo_url"=>$_POST['logo_url'],
            "orta_baslik"=>$_POST['orta_baslik'],
            "icerik"=>$_POST['icerik']
        );
        $update->execute($ilgialaniDuzenleData);

        if($update)
        {
            header("Location:adminilgiAlanlarim.php?durum=ok"); 
        }
        else
        {
            header("location:adminilgiAlanlarimDuzenle.php?durum=no");
        }
    }

    //İlgi Alanım Bölümü Son

    //Yeteneklerim Bölümü Başlangıç

    if(isset($_POST['yeteneklerimEkleBilgileri']))
    {
        $insert=$db->prepare("INSERT INTO yetenekler_tablosu SET ana_baslik=:ana_baslik,
                                                                yetenek_adi=:yetenek_adi,
                                                                yetenek_puani=:yetenek_puani,
                                                                renk=:renk,
                                                                yetenekbar_konum=:yetenekbar_konum");
        $yeteneklerimEkleData=array(
            "ana_baslik"=>$_POST['ana_baslik'],
            "yetenek_adi"=>$_POST['yetenek_adi'],
            "yetenek_puani"=>$_POST['yetenek_puani'],
            "renk"=>$_POST['renk'],
            "yetenekbar_konum"=>$_POST['yetenekbar_konum']
        );

        $insert->execute($yeteneklerimEkleData);

        if($insert)
        {
            header("location:adminYetenekler.php");
        }else
        {
            header("location:adminYetenekler.php?durum=no");
        }
    }

    if($_GET['yetenekler_id'])
    {
        $yetenekler_id=$_GET['yetenekler_id'];
        $delete=$db->prepare("DELETE FROM yetenekler_tablosu where yetenekler_id=$yetenekler_id");
        $delete->execute();
        
        if($delete)
        {
            header("location:adminYetenekler.php?durum=ok");
        }else
        {
            header("location:adminYetenekler.php?durum=no");
        }
                
    }

    if(isset($_POST['yeteneklerimDuzenleBilgileri']))
    {
        $yetenekler_id=$_POST['yetenekler_id'];
        $update=$db->prepare("UPDATE  yetenekler_tablosu 
                                    SET ana_baslik=:ana_baslik,
                                        yetenek_adi=:yetenek_adi,
                                        yetenek_puani=:yetenek_puani,
                                        renk=:renk,
                                        yetenekbar_konum=:yetenekbar_konum
                                        WHERE yetenekler_id=$yetenekler_id");
        $yetenekAlaniDuzenleData=array(
            "ana_baslik"=>$_POST['ana_baslik'],
            "yetenek_adi"=>$_POST['yetenek_adi'],
            "yetenek_puani"=>$_POST['yetenek_puani'],
            "renk"=>$_POST['renk'],
            "yetenekbar_konum"=>$_POST['yetenekbar_konum']
        );
        $update->execute($yetenekAlaniDuzenleData);

        if($update)
        {
            header("Location:adminYetenekler.php?durum=ok"); 
        }
        else
        {
            header("location:adminYetenekler.php?durum=no");
        }
    }

    //Yeteneklerim Bölümü Son

    //İletişim Bölümü Başlangıç

    if($_GET['iletisim_id'])
    {
        $iletisim_id=$_GET['iletisim_id'];
        $delete=$db->prepare("DELETE FROM iletisim_tablosu WHERE iletisim_id=$iletisim_id");
        $delete->execute();

        if($delete)
        {
            header("location:adminMesajKutusu.php?durum=ok");
        }else
        {
            header("location:adminMesajKutusu.php?durum=no");
        }
    }

    //İletişim Bölümü Son

    //Kullanıcı Giriş Bölümü Başlangıç

    session_start();
    ob_start();
    if(isset($_POST['adminGirisButton']))
    {
        $admin_mail="example@example.com";
        $admin_sifre=$_POST['admin_sifre'];
        //echo $admin_mail;

        $adminSor=$db->prepare("SELECT * FROM admin_tablosu WHERE admin_mail='".$admin_mail."' and admin_sifre=$admin_sifre");
        $adminSor->execute();
        $adminCek=$adminSor->fetch(PDO::FETCH_ASSOC);

        if($adminSor->rowCount())
        {
            $_SESSION['kullanici_adi']=$adminCek['admin_mail'];

            if($_SESSION['kullanici_adi'])
            {
                header("location:adminPanel.php");
            }
        }
    }

?>