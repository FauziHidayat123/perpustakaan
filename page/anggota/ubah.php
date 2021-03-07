<?php
        $nisn = $_GET['nisn'];

        $sql = $koneksi->query("select * from tb_anggota where nisn='$nisn'");

        $tampil = $sql->fetch_assoc();

        $jkl = $tampil['jk'];

        $prodi = $tampil['prodi'];

?>

<div class="panel panel-primary">
<div class="panel-heading">
    <center> Ubah Data Angggota</center>
</div>

<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="form-group">
                    <label> NISN : </label>
                    	<input class="form-control" name="nisn" value="<?php echo $tampil['nisn']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Nama : </label>
                    	<input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Tempat Lahir : </label>
                    	<input class="form-control" name="tmpt_lahir" value="<?php echo $tampil['tempat_lahir']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Tanggal Lahir : </label>
                        <input class="form-control" name="tgl_lahir" type="date" value="<?php echo $tampil['tgl_lahir']; ?>"/>
                </div>

                <div class="form-group">
                    <label> Jenis Kelamin : </label>
                        <br>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="l" name="jk" <?php if ($jkl=="l") {
                                echo "checked"; } ?>/> Laki-laki
                        </label>
                                            
                        <label class="checkbox-inline">
                            <input type="checkbox" value="p" name="jk" <?php if ($jkl=="p") {
                                echo "checked"; } ?>/> Wanita
                        </label>
                                            
                </div>

                <div class="form-group">
                    <label> Prodi : </label>
                        <input class="form-control" name="prodi"  value="<?php echo $tampil['prodi']; ?>"/>
                </div>


                <div>
                	<input type="submit" name="simpan" value="Ubah" class="btn btn-success">
                </div>
            </form>
        </div>
	</div>
</div>
</div>



<?php
    $nama=$_POST['nama'];
    $nisn=$_POST['nisn'];
    $tmpt_lahir=$_POST['tmpt_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $jk=$_POST['jk'];
    $prodi=$_POST['prodi'];
    
    $simpan=$_POST['simpan'];

    if ($simpan) {
        
        $sql = $koneksi->query("update tb_anggota set nama='$nama', nisn='$nisn', tempat_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi' where nisn='$nisn'"); 

        if ($sql) {
            
            ?>
                <script type="text/javascript">
                    alert("Ubah Data Anggota Berhasil Disimpan");
                    window.location.href="?page=anggota";
                </script>
            <?php
        }
    }

?>