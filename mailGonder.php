<?php

	if (isset($_POST['mailGonderBilgileri'])){

        if(isset($_POST['onay']))
        {
            $adsoyad = htmlspecialchars(trim($_POST['adsoyad']));
            //$eposta = htmlspecialchars(trim($_POST['eposta']));
            $konu=  htmlspecialchars(trim($_POST['konu']));
            $mesaj = htmlspecialchars(trim($_POST['mesaj']));
        
            include 'class.phpmailer.php';
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'gönderen mail adresi';
            $mail->Password = 'gönderen mail sifresi';

            $mail->SetFrom($mail->Username, 'Miraç Keskin');

            $mail->AddAddress("gönderilen mail adresi", $adsoyad);

            $mail->CharSet = 'UTF-8';
            $mail->Subject = $konu;

            $content = '<div style="background: #eee; padding: 10px; font-size: 14px">'.$mesaj.'</div>';
            $mail->MsgHTML($content);
            if($mail->Send()) {
                // e-posta başarılı ile gönderildi
                header("location:index.php?mailDurumu=gonderildi");
            } else {
                // bir sorun var, sorunu ekrana bastıralım
                echo '<div class="error">'.$mail->ErrorInfo.'</div>';
            }
        
        
        }else
        {
            header("location:index.php");
        }	
    }
    

    
	
?>