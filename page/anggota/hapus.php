<?php
	$nisn = $_GET['nisn'];

	$koneksi->query("delete from tb_anggota where nisn = '$nisn'");

?>

<script type="text/javascript">
	alert("Data Anggota Berhasil Di Hapus");
	window.location.href="?page=anggota";
</script>