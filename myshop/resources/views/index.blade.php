<!DOCTYPE html>
<html lang="en">
<head>
    <title>MoyShop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<h3 class="text-center my-4">Data Pakaian</h3>
 
 <a href="/pakaian/tambah" class="btn btn-primary mx-4"> + Tambah Pakaian Baru</a>
 
 <br/>
 <br/>

 <table class="table table-striped">
	 <tr>
		 <th>Nama</th>
		 <th>Deskripsi</th>
		 <th>Harga</th>
		 <th>Opsi</th>
	 </tr>
	 @foreach($pakaian as $p)
	 <tr>
		 <td>{{ $p->NamaBarang }}</td>
		 <td>{{ $p->Deskripsi }}</td>
		 <td>{{ $p->Harga }}</td>
		 <td>
			 <a href="/pakaian/edit/{{ $p->No }}" class="btn btn-warning">Edit</a>
			 &nbsp;
			 <a href="/pakaian/hapus/{{ $p->No }}" class="btn btn-danger">Hapus</a>
		 </td>
	 </tr>
	 @endforeach

</table>
</body>
</html>