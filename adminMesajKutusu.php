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
    
    <h1 align="center">Mesaj Kutusu</h1><br><br>    

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <a href="adminPanel.php" class="btn btn-warning">Ana Sayfa</a>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gönderen Adı:</th>
                        <th scope="col">Gönderen Soyadı:</th>
                        <th scope="col">İletişim Maili:</th>
                        <th scope="col">Mesaj Konusu</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $verisor=$db->prepare("SELECT * FROM iletisim_tablosu");
                    $verisor->execute();
                    while($vericek=$verisor->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                    <tr>
                        <td ><?php echo $vericek['iletisim_id']; ?></td>
                        <td ><?php echo $vericek['iletisim_ad']; ?></td>
                        <td ><?php echo $vericek['iletisim_soyad']; ?></td>
                        <td><?php echo $vericek['iletisim_mail']; ?></td>
                        <td><?php echo $vericek['iletisim_konu']; ?></td>
                        <td><a href="islem.php?iletisim_id=<?php echo $vericek['iletisim_id']; ?>" class="btn btn-danger">Sil</a><a href="adminMesajIcerik.php?iletisim_id=<?php echo $vericek['iletisim_id'] ?>" class="btn btn-secondary">Oku!</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
        </div>
      </div>
    </div><br> <br> <br>

    

    




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