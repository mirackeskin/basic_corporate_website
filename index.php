<?php include "baglan.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="description" content="Kişisel blog sitem  ">
    <meta name="keywords" content="bilgisayar mühendisliği,miraç keskin,mehmet akif ersoy üniversitesi">
    <meta name="author" content="Miraç Keskin">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stil.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   

    <!--Font Kısmı-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@1,100&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  </head>
  <body>

  <?php 
    $kapakSor=$db->prepare("SELECT * FROM kapak_tablosu");
    $kapakSor->execute();
    $kapakCek=$kapakSor->fetch(PDO::FETCH_ASSOC);
  ?>
    
    <!--Bölüm 1 Başlangıç-->
    <div id="kapsayici1" class="container-fluid">
       <div id="satir1" class="row align-items-center" >
         <div class="col-lg-3 col-md-3 col-sm-0"  ></div>
         <div id="abc" class="col-lg-6 col-md-6 col-sm-12" >
           <div id="resimKapsayici"><img src="upload/<?php echo $kapakCek['kapak_resmi']; ?>" alt=""></div>
              <div id="resimYazisi">
                <h3>- <?php echo $kapakCek['kullanici_adi']; ?> -</h3>
                <p><?php echo $kapakCek['kullanici_meslek']; ?></p>
                <div class="socialmedia">
                  <a href="<?php echo $kapakCek['facebook_url']; ?>"><i class="fab fa-facebook"></i></a>
                  <a href="<?php echo $kapakCek['instagram_url']; ?>"><i class="fab fa-instagram"></i></a>
                  <a href="<?php echo $kapakCek['twitter_url']; ?>"><i class="fab fa-twitter"></i></a>
                  <a href="<?php echo $kapakCek['linkedin_url']; ?>"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
           </div>
         <div class="col-lg-3 col-md-3 col-sm-0" ></div>
       </div>
        
    </div>

    
    <!--Bölüm 1 Son-->

    <!--Bölüm 2 Başlangıç-->
    <?php 
      $hakkimdaSor=$db->prepare("SELECT * FROM hakkimda_tablosu");
      $hakkimdaSor->execute();
      $hakkimdaCek=$hakkimdaSor->fetch(PDO::FETCH_ASSOC);

    ?>

    <section class="blm2" >
      <div class="container">
        <div class="row blm2s1">
          <div class="col-md-12">
            <h1 class="blm2s1Baslik"><?php echo $hakkimdaCek['ana_baslik']; ?></h1>
          </div>
          <div class="col-md-4 hizalama">
            <div class="bilgiKarti">
                <br>
                <p>İsmi : <?php echo $hakkimdaCek['ad']; ?></p>
                <p>Telefon : <?php echo $hakkimdaCek['telefon']; ?></p>
                <p>Email : <?php echo $hakkimdaCek['mail']; ?></p>
                <p>Website : <?php echo $hakkimdaCek['site_adi']; ?></p>
                <p>Adres : <?php echo $hakkimdaCek['adres']; ?></p>
            </div>
          </div>
          <div class="col-md-8 hizalama">
            <div class="hakkimdaKart">
              <h2><?php echo $hakkimdaCek['yardimci_baslik']; ?></h2>
              <p><?php echo $hakkimdaCek['giris_paragraf']; ?></p><br>
              <p><?php echo $hakkimdaCek['gelisme_paragraf']; ?></p>
              <p><?php echo $hakkimdaCek['sonuc_paragraf']; ?></p>
                  
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Bölüm 2 Son-->

    <!--Bölüm 3 Başlangıç-->

    <?php
          $ozgecmisBaslikSor=$db->prepare("SELECT * FROM ozgecmis_tablosu ORDER BY ozgecmis_id DESC");
          $ozgecmisBaslikSor->execute();
          $ozgecmisBaslikCek=$ozgecmisBaslikSor->fetch(PDO::FETCH_ASSOC)
    ?>

    <section class="blm3">
      <div class="container">

        <div class="row blm3s1">
          <div class="col-md-12">
            <div id="ozgecmisbaslikdiv">
              <h2 class="ozgecmisbaslik"><?php echo $ozgecmisBaslikCek['ana_baslik']; ?></h2>
            </div>
          </div>
        </div>

        <?php
          $ozgecmisSor=$db->prepare("SELECT * FROM ozgecmis_tablosu ORDER BY ozgecmis_id DESC");
          $ozgecmisSor->execute();
          while($ozgecmisCek=$ozgecmisSor->fetch(PDO::FETCH_ASSOC))
          {
            if($ozgecmisCek['kart_konum']==0){
        ?>

        <div class="row blm3s2">
          <div class="col-md-6">
            <div class="ozgecmis <?php if($ozgecmisCek['kart_konum']=="0"){echo "ozgecmissol";} else{echo "ozgecmissag";} ?>" >
              <h2><?php echo $ozgecmisCek['kart_anabaslik']; ?></h2>
              <h5><?php echo $ozgecmisCek['kart_ortabaslik']; ?></h5>
              <p><?php echo $ozgecmisCek['kart_yazisi']; ?></p>
            </div>
          </div>          
          <div class="col-md-6"></div>
        </div>
              <?php }else{?>
        

        <div class="row blm3s3">
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <div class="ozgecmis <?php if($ozgecmisCek['kart_konum']=="0"){echo "ozgecmissol";} else{echo "ozgecmissag";} ?>" >
              <h2><?php echo $ozgecmisCek['kart_anabaslik']; ?></h2>
              <h5><?php echo $ozgecmisCek['kart_ortabaslik']; ?></h5>
              <p><?php echo $ozgecmisCek['kart_yazisi']; ?></p>
            </div>
          </div>
        </div>

        <?php } }?>

        

      </div>
    </section>

    <!--Bölüm 3 Son-->


    <!--Bölüm 4 Başlangıç-->

    <?php
          $ilgialaniBaslikSor=$db->prepare("SELECT * FROM ilgialani_tablosu ");
          $ilgialaniBaslikSor->execute();
          $ilgialaniBaslikCek=$ilgialaniBaslikSor->fetch(PDO::FETCH_ASSOC)
    ?>

    <section class="blm4">
      <div class="container">
        <div class="row blm4s1">

          <div class="col-md-12">
            <div class="blm4baslik">
              <h1><?php echo $ilgialaniBaslikCek['ana_baslik']; ?></h1>
            </div>
          </div>

          <?php
            $ilgialaniSor=$db->prepare("SELECT * FROM ilgialani_tablosu");
            $ilgialaniSor->execute();
            while($ilgialaniCek=$ilgialaniSor->fetch(PDO::FETCH_ASSOC))
            {
          ?>
          <div class="col-md-4">
            <div class="hobikart">
              <div class="hobikartust">
                <i class="<?php echo $ilgialaniCek['logo_url']; ?>"></i>
              </div>
              <div class="hobikartalt">
                <h3><?php echo $ilgialaniCek['orta_baslik']; ?></h3>
                <p><?php echo $ilgialaniCek['icerik']; ?></p>
              </div>
            </div>
          </div>

          <?php } ?>

          
          
        </div>
      </div>
    </section>
    
    
    <!--Bölüm 4 Son-->

    <!--Bölüm 5 Başlangıç-->

    <?php
          $yeteneklerBaslikSor=$db->prepare("SELECT * FROM yetenekler_tablosu ");
          $yeteneklerBaslikSor->execute();
          $yeteneklerBaslikCek=$yeteneklerBaslikSor->fetch(PDO::FETCH_ASSOC)
    ?>

    <section class="blm5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blm5baslik">
              <h1><?php echo $yeteneklerBaslikCek['ana_baslik']; ?></h1>
            </div>
          </div>

          <?php
            $yeteneklerSor=$db->prepare("SELECT * FROM yetenekler_tablosu");
            $yeteneklerSor->execute();
            while($yeteneklerCek=$yeteneklerSor->fetch(PDO::FETCH_ASSOC))
            {
              if($yeteneklerCek['yetenekbar_konum']==0)
              { 
          ?>

          <div class="col-md-6">           
            <div class="progreskapsayici">
              <h5>
                  <span style=" display:inline-block;" ><?php echo $yeteneklerCek['yetenek_adi']; ?></span>
                  <span style=" display:block; float:right;  ">%<?php echo $yeteneklerCek['yetenek_puani']; ?></span>
              </h5>
              <div class="progress progresbaryukseklik">
                <div class="progress-bar progress-bar-striped progress-bar-animated <?php if($yeteneklerCek['renk']==0){echo "bg-danger";}else if($yeteneklerCek['renk']==1){echo "bg-warning";}else if($yeteneklerCek['renk']==3){echo "bg-success";}else{ echo "bg-primary";} ?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $yeteneklerCek['yetenek_puani']; ?>%"></div>
              </div>
            </div>            
          </div>
          <div class="col-md-6"></div>
                <?php }
                if($yeteneklerCek['yetenekbar_konum']==1){ ?>
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <div class="progreskapsayici">
              <h5>
                  <span style=" display:inline-block;" ><?php echo $yeteneklerCek['yetenek_adi']; ?></span>
                  <span style=" display:block; float:right;  ">%<?php echo $yeteneklerCek['yetenek_puani']; ?></span>
              </h5>
              <div class="progress progresbaryukseklik">
                <div class="progress-bar progress-bar-striped progress-bar-animated <?php if($yeteneklerCek['renk']==0){echo "bg-danger";}else if($yeteneklerCek['renk']==1){echo "bg-warning";}else if($yeteneklerCek['renk']==3){echo "bg-success";}else{ echo "bg-primary";} ?>" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $yeteneklerCek['yetenek_puani']; ?>%"></div>
              </div>
            </div>            
          </div>
                <?php } } ?>
        </div>
      </div>
    </section>

    <!--Bölüm 5 Son-->

    <!--Bölüm 6 Başlangıç-->

    <section class="blm6">
      <div class="container">
        <div class="row blm6s1">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="teklifkapsayici">
              <h1>İş Teklifi !</h1>
              <h5>İş teklifleri için bana mail atabilirsiniz yada herhangi bir sorunuz varsa alttan yazabilirsiniz..</h5>
              <a href="#" class="btn teklifbutton">Mail ile İletişim</a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </section>

    <!--Bölüm 6 Son-->

    <!--Bölüm 7 Başlangıç-->

    <section class="blm7">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blm7baslik">
              <h1>İletişim</h1>
            </div>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="formkapsayici">
              <form action="mesajGonder.php" method="POST">

                <div class="form-group">
                  <label for="exampleInputEmail1">Adınız</label>
                  <input type="text" name="iletisim_ad" class="form-control shadow" aria-describedby="emailHelp">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Soyadınız</label>
                  <input type="text" name="iletisim_soyad" class="form-control shadow"  aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">E-mail Adres</label>
                  <input type="email" name="iletisim_mail" class="form-control shadow"  aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mesaj Konusu</label>
                  <input type="text" name="iletisim_konu" class="form-control shadow" >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Mesajınız</label>
                  <textarea class="form-control shadow" name="iletisim_mesaj" rows="4"></textarea>
                </div>
                <button type="submit" name="mesajGonder" class="btn btn-dark">Mesajımı İlet</button>
              </form>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </section>

    <!--Bölüm 7 Son-->

    <!--Bölüm 8 Başlangıç-->

    <section class="blm8">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h6>2020  - <a href="girisYap.php" style="color:white;">Miraç Keskin.</a>  Tüm hakları saklıdır.</h6>
          </div>
        </div>
      </div>
    </section>

    

    
    


    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/clean-blog.min.js"></script>
  </body>
</html>