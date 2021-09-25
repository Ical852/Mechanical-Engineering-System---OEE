<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Shift</th>
			<th>Nama Mesin</th>
			<th>Availibility</th>
			<th>Performance</th>
			<th>Quality</th>
			<th>OEE</th>
		</tr>

		<?php
		$no = 1;
		foreach ($reportshift as $r):  ?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $r->date; ?></td>
			<td><?php echo $r->shift; ?></td>
			<td><?php echo $r->nama_mesin; ?></td>
			<td><?php echo $r->AvailRatio; ?></td>
			<td><?php echo $r->Performance; ?></td>
			<td><?php echo $r->Quality; ?></td>
			<td><?php echo $r->OEE; ?></td>
		</tr>

		<?php endforeach; ?>

	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>