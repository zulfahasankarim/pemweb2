<?php
    require_once "class_mahasiswa.php";

    $hasil = '';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $matkul = $_POST['matkul'];
        $nilai = $_POST['nilai'];

        $mahasiswa = new Mahasiswa($nim, $nama, $matkul, $nilai);
        $hasil =  "<div>
                <strong>NIM :</strong> {$mahasiswa->nim} <br>
                <strong>Nama Mata Kuliah :</strong> {$mahasiswa->matkul} <br>
                <strong>Nilai :</strong> {$mahasiswa->nilai} <br>
                <strong>Hasil Ujian :</strong> {$mahasiswa->grade()} <br>
                <strong>Grade :</strong> {$mahasiswa->kelulusan()} 
              </div>";
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form mahasigma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-5">
        <h2>Form Nilai Ujian</h2>
        <form method="post">
        <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="matkul" class="form-label">Pilih MK</label>
                <select class="form-select" id="matkul" name="matkul" required>
                    <option value="Data Warehouse">Dasar Dasar Pemrograman</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Basis Data">Basis Data</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" class="form-control" id="nilai" name="nilai" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>

     </div>
     <div>
        <?php echo $hasil; ?>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>