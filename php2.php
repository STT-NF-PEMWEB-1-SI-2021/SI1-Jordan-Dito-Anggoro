<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>

<body>
    <h1> Belanja Online </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="cs" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 23rem;">
                    <div class="card-header text-white bg-primary">
                        Daftar Harga
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">kulkas : 3.100.000</li>
                        <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    </ul>
                    <div class="card-footer text-white bg-primary">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
      $nama = $_POST['cs'];
      $produk = $_POST['produk'];
      $Jumlah = $_POST['jumlah'];

      if($produk == 'TV'){
        $harga = 4200000;
      }elseif($produk == 'Kulkas'){
        $harga = 3100000;
      }elseif($produk == 'Mesin cuci'){
        $harga = 3800000;
      }

      $Total = $Jumlah * $harga;

      echo 'Nama Customer : '.$nama;
      echo '<br/> Produk Pilihan : '.$produk;
      echo '<br/> Jumlah Beli : '.$Jumlah;
      echo '<br/> Total Beli : '.$Total;

    ?>
</body>
</html>