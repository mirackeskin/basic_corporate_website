<?php include "baglan.php"; ?>
<?php 
  session_start();
  if(isset($_SESSION['kullanici_adi']))
  {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--adminStill CSS-->
    <link rel="stylesheet" href="css/adminStil.css">

    <script src="js/dropzone/dist/dropzone.js"></script>
    <link rel="stylesheet" href="js/dropzone/dist/dropzone.css">


    <title>Yönetici Paneli!</title>
  </head>
  <body>

    <header class="row">
      <div class="col-md-12 bg-dark" style="height:50px;"></div>
    </header>

    <br>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="upload.php" class="dropzone" method="POST" enctype="multipart/form-data">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

              <?php
                $verisor=$db->prepare("SELECT * FROM kapak_tablosu where id=1");
                $verisor->execute();
                $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
              ?>

            <form action="islem.php" method="POST">
              <div class="form-group">
                <label >Yüklenilen Resim Adı:</label>
                <input type="text" name="kapak_resmi" class="form-control"  placeholder="Enter email" value="<?php echo $vericek['kapak_resmi']; ?>">
              </div>
              <div class="form-group">
                <label >Adınız:</label>
                <input type="text" name="kullanici_adi" class="form-control"  placeholder="Adınız.." value="<?php echo $vericek['kullanici_adi']; ?>">
              </div>

              <div class="form-group">
                <label >Mesleğiniz:</label>
                <input type="text" name="kullanici_meslek" class="form-control"  placeholder="Mesleğiniz.." value="<?php echo $vericek['kullanici_meslek']; ?>">
              </div>

              <div class="form-group">
                <label >Facebook Adresiniz:</label>
                <input type="text" name="facebook_url" class="form-control"  placeholder="https://www.facebook.com/.." value="<?php echo $vericek['facebook_url']; ?>">
              </div>

              <div class="form-group">
                <label >Instagram Adresiniz:</label>
                <input type="text" name="instagram_url" class="form-control"  placeholder="https://www.facebook.com/.." value="<?php echo $vericek['instagram_url']; ?>">
              </div>

              <div class="form-group">
                <label >Twitter Adresiniz:</label>
                <input type="text" name="twitter_url" class="form-control"  placeholder="https://www.facebook.com/.." value="<?php echo $vericek['twitter_url']; ?>">
              </div>

              <div class="form-group">
                <label >Linkedin Adresiniz:</label>
                <input type="text" name="linkedin_url" class="form-control"  placeholder="https://www.facebook.com/.." value="<?php echo $vericek['linkedin_url']; ?>">
              </div>

              <button type="submit" name="kapakBilgileri" class="btn btn-outline-primary">Gönder</button>
              <a href="adminPanel.php" class="btn btn-outline-danger">Geri Dön</a>
            </form><br><br>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
}else
{
  header("location:girisYap.php");
} 
?>