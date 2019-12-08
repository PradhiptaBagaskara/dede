<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="input" method="post" enctype="multipart/form-data">
		gambar<input type="file" name="img">
		judul<input type="text" name="judul">
		deskripsi<input type="text" name="diskripsi">
		Ukm<select name="id_Ukm" >
			<?php foreach ($data as $key ): ?>
			<option value="<?=$key->id_Ukm?>"><?=$key->nama_kategori?></option>
				
			<?php endforeach ?>
			option
		</select>
		isi<input type="text" name="isi">
		<input type="submit" name="">

		
	</form>
	
</body>
</html>