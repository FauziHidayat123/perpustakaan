<div class="panel panel-primary">
<div class="panel-heading">
    <center> Tambah Data Anggota</center>
</div>

<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="form-group">
                    <label> NISN : </label>
                    	<input class="form-control" name="nisn" />
                </div>

                <div class="form-group">
                    <label> Nama : </label>
                    	<input class="form-control" name="nama" />
                </div>

                <div class="form-group">
                    <label> Tempat Lahir : </label>
                    	<input class="form-control" name="tmpt_lahir" />
                </div>

                <div class="form-group">
                    <label> Tanggal Lahir : </label>
                        <input class="form-control" name="tgl_lahir" type="date" />
                </div>

                <div class="form-group">
                    <label> Jenis Kelamin : </label>
                        <br>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="l" name="jk" /> Laki-laki
                        </label>
                                            
                        <label class="checkbox-inline">
                            <input type="checkbox" value="p" name="jk" /> Wanita
                        </label>
                                            
                </div>

                <div class="form-group">
                    <label>Prodi : </label>
                    	<select class="form-control" name="prodi" />
	                    	<option value="Kelas1A">Kelas 1A</option>
                            <option value="Kelas1B">Kelas 1B</option>
                            <option value="Kelas1C">Kelas 1C</option>
                    	</select>
                </div>

                <div>
                	<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
	</div>
</div>
</div>


<?php
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $tmpt_lahir=$_POST['tmpt_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $jk=$_POST['jk'];
    $prodi=$_POST['prodi'];
    
    $simpan=$_POST['simpan'];

    if ($simpan) {
        
        $sql = $koneksi->query("insert into tb_anggota (nisn, nama, tempat_lahir, tgl_lahir, jk, prodi)values('$nisn', '$nama', '$tmpt_lahir', '$tgl_lahir', '$jk', '$prodi')");

        if ($sql) {
            
            ?>
                <script type="text/javascript">
                    alert("Tambah Data Anggota Berhasil Disimpan");
                    window.location.href="?page=anggota";
                </script>
            <?php
        }
    }

?>