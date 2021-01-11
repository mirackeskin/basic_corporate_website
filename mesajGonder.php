<?php

    include "baglan.php";

    if(isset($_POST['mesajGonder']))
    {
        $insert=$db->prepare("INSERT INTO iletisim_tablosu SET iletisim_ad=:iletisim_ad,
                                                                iletisim_soyad=:iletisim_soyad,
                                                                iletisim_mail=:iletisim_mail,
                                                                iletisim_konu=:iletisim_konu,
                                                                iletisim_mesaj=:iletisim_mesaj");

        $mesajGonderData=array(
            "iletisim_ad"=>$_POST['iletisim_ad'],
            "iletisim_soyad"=>$_POST['iletisim_soyad'],
            "iletisim_mail"=>$_POST['iletisim_mail'],
            "iletisim_konu"=>$_POST['iletisim_konu'],
            "iletisim_mesaj"=>$_POST['iletisim_mesaj']
        );
        $insert->execute($mesajGonderData);

        if($insert)
        {
            header("location:index.php");
        }else
        {
            header("location:index.php?durum=gonderilmedi");
        }
    }
    

?>