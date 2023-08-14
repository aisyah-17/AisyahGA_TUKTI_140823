<html>
<head>
	<style>
	.tbldm2{
		margin: 10px;
		width: auto;
	}
</style>

</head>
<body>
<div class="tbldm2">
	<h2>Surat Masuk</h2>
	
	<table class="table table-sm table-bordered border-dark">
	<table border="1">
		<tr>
			<th>No Surat</th>
			<th>Pengirim</th>
			<th>Waktu</th>
			<th>Tempat</th>
			<th>Lampiran</th>
			<th>Perihal</th>
		</tr>
	<?php foreach ($dt as $d) { ?>
		<tr>
			<td><?php echo $d['no_surat']; ?></td>
			<td><?php echo $d['pengirim']; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['tempat']; ?></td>
			<td><?php echo $d['lampiran']; ?></td>
			<td><?php echo $d['perihal']; ?></td>
		</tr>
	<?php } ?>	
	</table>
</div>
	<script>
		window.print();
	</script>
</body>
</html>