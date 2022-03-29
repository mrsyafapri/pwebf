<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
    <h1>Mahasiswa</h1>
    <form action="simpan.php" method="POST" enctype="multipart/form-data">
        NIM : <input type="text" name="nim" maxlength="11" placeholder="Isi 11 angka" required autofocus><br>

        Nama : <input type="text" name="nama" maxlength="50" required><br>

        Tanggal Lahir : <input type="date" name="birthday" required><br>

        Password : <input type="password" name="password" required><br>

        Jurusan :
        <select name="jurusan" size="1">
            <optgroup label="Dakwah">
                <option value="IK">Ilmu Komunikasi</option>
            </optgroup>
            <optgroup label="Sains dan Teknologi">
                <option value="TIF">Teknik Informatika</option>
                <option value="SI" selected>Sistem Informasi</option>
            </optgroup>
        </select><br>

        Semester : <input type="number" name="semester" min="1" max="14"><br>

        Jenis Kelamin :
        <input type="radio" name="jk" value="L" id="l" checked>
        <label for="l">Laki-Laki</label>
        <input type="radio" name="jk" value="P" id="p">
        <label for="p">Perempuan</label>
        <br>

        Hobi : <input type="checkbox" id="hobi1" name="hobi" value="Olahraga" checked disabled><label for="hobi1">Olahraga</label><br>

        Foto : <input type="file" name="foto" accept="image/*">
        <br>

        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>