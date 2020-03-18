<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center mx-4">Data Pakaian</h3>
 
    <div class="container">

    <a href="/pakaian" class="btn btn-warning"> Kembali</a>
 
    <br/>
 
    <form action="/pakaian/store" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Nama" required class="form-control">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" placeholder="Deskripsi" required class="form-control">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" placeholder="Harga" required class="form-control">
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary btn-block">
    </form>
    </div>
    
</body>
</html>