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
	<h2>Surat Keluar</h2>
	
	<table class="table table-sm table-bordered border-dark">
	<table border="1">
		<tr>
			<th>No Surat</th>
			<th>Penerima</th>
			<th>Waktu</th>
			<th>Tempat</th>
			<th>perihal</th>
			<th>pengesah</th>
		</tr>
	<?php foreach ($dt as $d) { ?>
		<tr>
			<td><?php echo $d['no_surat']; ?></td>
			<td><?php echo $d['penerima']; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['tempat']; ?></td>
			<td><?php echo $d['perihal']; ?></td>
			<td><?php echo $d['pengesah']; ?></td>
		</tr>
	<?php } ?>	
	</table>
</div>
	<script>
		window.print();
	</script>
</body>
</html>