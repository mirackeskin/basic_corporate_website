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

    <title>Yönetici Paneli!</title>
  </head>
  <body id="bdy">
    
    <section class="container">
        <div class="row blm1s1">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="menu">
                    <div class="menuHeader">
                        <h2>Yönetici Menü</h2>
                    </div>
                    <div class="menuBody">
                        <a href="adminKapak.php" class="menuButton btn">Kapak Bölümü</a>
                        <a href="adminHakkimda.php" class="menuButton btn">Hakkımda Bölümü</a>
                        <a href="adminOzgecmis.php" class="menuButton btn">Özgeçmiş Bölümü</a>
                        <a href="adminilgiAlanlarim.php" class="menuButton btn">İlgi Alanlarım Bölümü</a>
                        <a href="adminYetenekler.php" class="menuButton btn">Yetenekler Bölümü</a>
                        <a href="adminMesajKutusu.php" class="menuButton btn">Mesaj Kutusu Bölümü</a>
                        <a href="cikisYap.php" class="menuButton btn">Çıkış Yap!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>









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
