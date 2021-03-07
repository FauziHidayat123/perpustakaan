<?php
	$id = $_GET['id'];

	$koneksi->query("delete from tb_buku where id = '$id'");

?>

<script type="text/javascript">
	alert("Data Buku Berhasil Di Hapus");
	window.location.href="?page=buku";
</script>