<?php

	$koneksi = new mysqli("localhost","root","","db_perpustakaan");

	$filename = "anggota_excel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vnd.ms-excel");

?>

<h2> Laporan Anggota</h2>

<table border="1">
	<tr>
        <th>NO</th>
        <th>Nama</th>
        <th>NISN</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>

    <?php
            $no = 1;
            $sql = $koneksi->query("select * from tb_anggota");

            while ($data=$sql->fetch_assoc()) {
                                            
                $jk = ($data['jk']=='l')?"Laki-laki":"Wanita";

                    // $prodi = ($data['prodi']=='Kelas 1A','Kelas 1B')?"Kelas 1A":"Kelas 1B";

    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['nisn'];?></td>
        <td><?php echo $data['tempat_lahir'];?></td>
        <td><?php echo $data['tgl_lahir'];?></td>
        <td><?php echo $jk;?></td>
        <td><?php echo $data['prodi'];?></td>
        <td>
            <a href="?page=anggota&aksi=ubah&nisn=<?php echo $data['nisn']; ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Ubah </a>
            <a href="?page=anggota&aksi=hapus&nisn=<?php echo $data['nisn']; ?>" class="btn btn-success"><i class="fa fa-trash-o"></i> Hapus </a>
        </td>
                </tr>
                                

            <?php } ?>
</table>