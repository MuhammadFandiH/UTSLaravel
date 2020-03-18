<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<h3 class="text-center my-4"> Edit Pakaian</h3>
 
	<a href="/pakaian" class="btn btn-warning"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pakaian as $p)
	<form action="/pakaian/update" method="post">
		@csrf
        <div class="container">
        <div class="form-group">
		    <input type="hidden" name="id" value="{{ $p->No }}"> <br/>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" required="required" name="nama" value="{{ $p->NamaBarang }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" required="required" name="deskripsi" value="{{ $p->Deskripsi }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" required="required" name="harga" value="{{ $p->Harga }}" class="form-control">
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary btn-block">
	</form>

        </div>
        
	@endforeach
		
 
</body>
</html>