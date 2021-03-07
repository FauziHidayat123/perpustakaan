
<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus"></i> Tambah Data Buku</a>

<div class="row">
<div class="col-md-12">
                    
    <div class="panel panel-primary">
        <div class="panel-heading">
             DATA BUKU
        </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Kode Buku</th>
                                    <th>Jumlah Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                                <tbody>
                                    <?php
                                        $no = 1;
                                        $sql = $koneksi->query("select * from tb_buku");

                                        while ($data=$sql->fetch_assoc()) {
                                           
                                    ?>

                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td ><?php echo $data['judul'];?><br>
                                        <td><?php echo $data['pengarang'];?></td>
                                        <td><?php echo $data['penerbit'];?></td>
                                        <td><?php echo $data['kode_buku'];?></td>
                                        <td><?php echo $data['jumlah_buku'];?></td>
                                        <td>
                                            <a href="?page=buku&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Ubah </a>
                                            <a href="?page=buku&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-success"><i class="fa fa-trash-o"></i> Hapus </a>
                                        </td>
                                    </tr>
                                

                                        <?php } ?>
                                </tbody>
                        </table>
                    </div>
                </div>
    </div>
</div>
</div>