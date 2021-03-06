
<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus"></i> Tambah Data Anggota</a>

<div class="row">
<div class="col-md-12">
                    
    <div class="panel panel-primary">
        <div class="panel-heading">
             Data Anggota
        </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
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
                            </thead>

                                <tbody>
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
                                </tbody>
                        </table>
                    </div>

                        <a href="./laporan/laporan_anggota__exel.php" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i> Export To Excel</a>

                </div>
    </div>
</div>
</div>