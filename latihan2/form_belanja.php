<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="font-size: 18px;">
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6">
                <form method="POST" action="total_belanja.php">
                    <fieldset class="border border-dark p-3 rounded" style="background-color: lightyellow;">
                        <legend class="float-none w-auto px-3 fw-bold h3">Form Belanja</legend>
                        <div class="form-group row">
                            <label for="namapemesan" class="col-4 col-form-label">Nama Customer</label> 
                            <div class="col-8">
                                <input id="namapemesan" name="namapemesan" placeholder="Nama kamoe" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label> 
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="tv" value="TV" required>
                                    <label class="form-check-label" for="tv">TV</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="KULKAS LG 2 PINTU" value="KULKAS LG 2 PINTU">
                                    <label class="form-check-label" for="KULKAS LG 2 PINTU">KULKAS LG 2 PINTU</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="mesincuci" value="MESIN CUCI">
                                    <label class="form-check-label" for="mesincuci">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" type="number" required="required" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="col-md-6">
                <br>
                <div class="harga-container">
                    <h4 class="text-center">Daftar Harga</h4>
                    <ul>
                        <li><strong>TV</strong>: Rp 4.200.000</li>
                        <li><strong>Kulkas</strong>: Rp 3.100.000</li>
                        <li><strong>Mesin Cuci</strong>: Rp 3.800.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>