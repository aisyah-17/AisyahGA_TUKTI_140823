<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
	<title>Surat Masuk</title>

</head>
<body>
	
<?php
//------------------------------HOME
if ($page=='home')
{
?>
<style>
	.judul {
		padding-top: 200px;
		padding-bottom: 200px;
		text-align: center;
	}
</style>
	<div class="judul">
		<h2 style="align-content: center;">LSP Poliban</h2>
	</div> -->
	
<?php
}
//----------------------------SURAT MASUK
else if ($page=='suratmasuk_aisyahga')
{
?>
<style>
	.tbldm{
		margin: 10px;
		width: auto;
	}
</style>

<div class="tbldm">
	<h2>Surat Masuk</h2>
	
	<table class="table table-sm table-bordered border-dark">
		
		<div class="tombol">
		<a href=<?php echo site_url('kampus/suratmasuk_aisyahga_tambah');?> ><button type="button" class="btn btn-outline-dark">Tambah</button></a> 
		<a href=<?php echo site_url('kampus/suratmasuk_aisyahga_cetak');?> ><button type="button" class="btn btn-outline-dark">Cetak</button></a>
		</div>
		<br>

		<tr>
			<th>No Surat</th>
			<th>Pengirim</th>
			<th>Waktu</th>
			<th>Tempat</th>
			<th>Lampiran</th>
			<th>Perihal</th>
			<th>Aksi</th>
		</tr>
	<?php foreach ($dt as $d) { ?>
		<tr>
			<td><?php echo $d['no_surat']; ?></td>
			<td><?php echo $d['pengirim']; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['tempat']; ?></td>
			<td><?php echo $d['lampiran']; ?></td>
			<td><?php echo $d['perihal']; ?></td>
			<td>
				<a href=<?php echo site_url('kampus/suratmasuk_aisyahga_edit/'.$d['pengirim']);?>><button type="button" class="btn btn-outline-warning">Edit</button> </a>
				<a href=<?php echo site_url('kampus/suratmasuk_aisyahga_hapus/'.$d['pengirim']);?>><button type="button" class="btn btn-outline-danger">Hapus</button> </a>
			</td>
		</tr>
	<?php } ?>	
	</table>
</div>

<?php
}
elseif ($page=='suratmasuk_aisyahga_tambah') 
{
?>
<style>
	.tbltambah{
		margin: 20px;
		width: 500px;
	}
</style>

<div class="tbltambah">
	<h2>Tambah Surat Masuk</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('kampus/suratmasuk_aisyahga_tambah'); ?>

	<form class="form-horizontal" method="post" action="M_kampus.php">
		<div class="mb-3">
			<label for="no_surat" class="form-label">No Surat</label>
			<input type="text" class="form-control" name="no_surat" autocomplete="off">
			</div>

		<div class="mb-3">
			<label for="pengirim" class="form-label">Pengirim</label>
			<input type="text" class="form-control" name="pengirim" autocomplete="off">
		</div>

		<div class="mb-3">
			<label for="waktu" class="form-label">Waktu</label>
			<input type="text" class="form-control" name="waktu" autocomplete="off">
		</div>  

		<div class="mb-3">
			<label for="tempat" class="form-label">Tempat</label>
			<input type="text" class="form-control" name="tempat" autocomplete="off">
		</div>

		<div class="mb-3">
			<label for="lampiran" class="form-label">Lampiran</label>
			<input type="text" class="form-control" name="lampiran" autocomplete="off">
		</div> 

		<div class="mb-3">
			<label for="perihal" class="form-label">Perihal</label>
			<input type="text" class="form-control" name="perihal" autocomplete="off">
		</div> 
		
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>	
<?php
}
elseif ($page=='suratmasuk_aisyahga_edit') 
{
?>
<style>
	.tbledit{
		margin: 20px;
		width: 500px;
	}
</style>
<div class="tbledit">
	<h2>Edit Surat Masuk</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('kampus/suratmasuk_aisyahga_edit/'.$d['pengirim']); ?>
	<form method="post" action="M_kampus.php">
		<div class="mb-3">
				<label for="no_surat" class="form-label">No Surat</label>
				<input type="text" class="form-control" value="<?php echo $d['no_surat'];?>" readonly name="no_surat">
		</div>
		
		<div class="mb-3">
				<label for="pengirim" class="form-label">Pengirim</label>
				<input type="text" class="form-control" value="<?php echo $d['pengirim'];?>" name="pengirim">
		</div>
		<div class="mb-3">
				<label for="waktu" class="form-label">Waktu</label>
				<input type="text" class="form-control" value="<?php echo $d['waktu'];?>" name="waktu">
		</div>

		<div class="mb-3">
				<label for="tempat" class="form-label">Tempat</label>
				<input type="text" class="form-control" value="<?php echo $d['tempat'];?>" name="tempat">
		</div>

		<div class="mb-3">
				<label for="lampiran" class="form-label">Lampiran</label>
				<input type="text" class="form-control" value="<?php echo $d['lampiran'];?>" name="lampiran">
		</div>
		<div class="mb-3">
				<label for="perihal" class="form-label">Perihal</label>
				<input type="text" class="form-control" value="<?php echo $d['perihal'];?>" name="perihal">
		</div>
		
	
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
<?php
} 

//------------------------------SURAT KELUAR
else if ($page=='suratkeluar_aisyahga')
{
?>
<style>
	.tbldm{
		margin: 10px;
		width: auto;
	}
</style>

<div class="tbldm">
	<h2>Surat Keluar</h2>
	
	<table class="table table-sm table-bordered border-dark">
		
		<div class="tombol">
		<a href=<?php echo site_url('kampus/suratkeluar_aisyahga_tambah');?> ><button type="button" class="btn btn-outline-dark">Tambah</button></a> 
		<a href=<?php echo site_url('kampus/suratkeluar_aisyahga_cetak');?> ><button type="button" class="btn btn-outline-dark">Cetak</button></a>
		</div>
		<br>

		<tr>
			<th>No Surat</th>
			<th>Penerima</th>
			<th>Waktu</th>
			<th>Tempat</th>
			<th>Perihal</th>
			<th>Pengesah</th>
			<th>Aksi</th>
		</tr>
	<?php foreach ($dt as $d) { ?>
		<tr>
			<td><?php echo $d['no_surat']; ?></td>
			<td><?php echo $d['penerima']; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['tempat']; ?></td>
			<td><?php echo $d['perihal']; ?></td>
			<td><?php echo $d['pengesah']; ?></td>
			<td>
				<a href=<?php echo site_url('kampus/suratkeluar_aisyahga_edit/'.$d['penerima']);?>><button type="button" class="btn btn-outline-warning">Edit</button> </a>
				<a href=<?php echo site_url('kampus/suratkeluar_aisyahga_hapus/'.$d['penerima']);?>><button type="button" class="btn btn-outline-danger">Hapus</button> </a>
			</td>
		</tr>
	<?php } ?>	
	</table>
</div>

<?php
}
elseif ($page=='suratkeluar_aisyahga_tambah') 
{
?>
<style>
	.tbltambah{
		margin: 20px;
		width: 500px;
	}
</style>

<div class="tbltambah">
	<h2>Tambah Surat Keluar</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('kampus/suratkeluar_aisyahga_tambah'); ?>

	<form class="form-horizontal" method="post" action="M_kampus.php">
		<div class="mb-3">
			<label for="no_surat" class="form-label">No Surat</label>
			<input type="text" class="form-control" name="no_surat" autocomplete="off">
			</div>

		<div class="mb-3">
			<label for="penerima" class="form-label">Penerima</label>
			<input type="text" class="form-control" name="penerima" autocomplete="off">
		</div>

		<div class="mb-3">
			<label for="waktu" class="form-label">Waktu</label>
			<input type="text" class="form-control" name="waktu" autocomplete="off">
		</div>  

		<div class="mb-3">
			<label for="tempat" class="form-label">Tempat</label>
			<input type="text" class="form-control" name="tempat" autocomplete="off">
		</div>

		<div class="mb-3">
			<label for="perihal" class="form-label">Perihal</label>
			<input type="text" class="form-control" name="perihal" autocomplete="off">
		</div> 

		<div class="mb-3">
			<label for="pengesah" class="form-label">Pengesah</label>
			<input type="text" class="form-control" name="pengesah" autocomplete="off">
		</div> 
		
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>	
<?php
}
elseif ($page=='suratkeluar_aisyahga_edit') 
{
?>
<style>
	.tbledit{
		margin: 20px;
		width: 500px;
	}
</style>
<div class="tbledit">
	<h2>Edit Surat Keluar</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('kampus/suratkeluar_aisyahga_edit/'.$d['penerima']); ?>
	<form method="post" action="M_kampus.php">
		<div class="mb-3">
				<label for="no_surat" class="form-label">No Surat</label>
				<input type="text" class="form-control" value="<?php echo $d['no_surat'];?>" readonly name="no_surat">
		</div>
		
		<div class="mb-3">
				<label for="penerima" class="form-label">Penerima</label>
				<input type="text" class="form-control" value="<?php echo $d['penerima'];?>" name="penerima">
		</div>
		<div class="mb-3">
				<label for="waktu" class="form-label">Waktu</label>
				<input type="text" class="form-control" value="<?php echo $d['waktu'];?>" name="waktu">
		</div>

		<div class="mb-3">
				<label for="tempat" class="form-label">Tempat</label>
				<input type="text" class="form-control" value="<?php echo $d['tempat'];?>" name="tempat">
		</div>

		<div class="mb-3">
				<label for="perihal" class="form-label">Perihal</label>
				<input type="text" class="form-control" value="<?php echo $d['perihal'];?>" name="perihal">
		</div>
		<div class="mb-3">
				<label for="pengesah" class="form-label">Pengesah</label>
				<input type="text" class="form-control" value="<?php echo $d['pengesah'];?>" name="pengesah">
		</div>
		
	
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
<?php
} 
?>

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
</body>
</html>