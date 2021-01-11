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
    
    <h1 align="center">Özgeçmiş Düzenleme Bölümü</h1><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <?php 
            $verisor=$db->prepare("SELECT * FROM ozgecmis_tablosu");
            $verisor->execute();
            $vericek=$verisor->fetch(PDO::FETCH_ASSOC);
        ?>
            <form action="islem.php" method="POST">
              
              <div class="form-group">
                <label >Bölüm Başlığı:</label>
                <input type="text" name="ana_baslik" class="form-control"  placeholder="İçerik öncesi selamlama bölümüdür.." value="<?php echo $vericek['ana_baslik']; ?>">
              </div>

              <div class="form-group">
                <label >Kartın Ana Başlığı:</label>
                <input type="text" name="kart_anabaslik" class="form-control"  placeholder="Adınız.." value="<?php echo $vericek['kart_anabaslik']; ?>">
              </div>

              <div class="form-group">
                <label >Kartın Orta Başlığı:</label>
                <input type="text" name="kart_ortabaslik" class="form-control"  placeholder="0511 000 00 00" value="<?php echo $vericek['kart_ortabaslik']; ?>">
              </div>

              <div class="form-group">
                <label>Kartın Konumu:</label>
                <select name="kart_konum" id="">
                    <option value="0">Sol</option>
                    <option value="1">Sağ</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kartın Yazısı:</label>
                <textarea class="form-control" name="kart_yazisi" rows="5"><?php echo $vericek['kart_yazisi']; ?></textarea>
              </div>
              
              <div hidden class="form-group ">
                <input type="text" name="ozgecmis_id" class="form-control" value="<?php echo $_GET['ozgecmis_id']; ?>">
              </div>

              <button type="submit" name="ozgecmisDuzenleBilgileri" class="btn btn-outline-primary">Gönder</button>
              <a href="adminOzgecmis.php" class="btn btn-outline-danger">Geri Dön</a>
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