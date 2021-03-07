<div class="panel panel-primary">
<div class="panel-heading">
    <center> Tambah Data Buku</center>
</div>

<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="form-group">
                    <label> Judul : </label>
                    	<input class="form-control" name="judul" />
                </div>

                 <!-- <div class="form-group">
                    <label> Gambar : </label>
                        <input type="file" class="form-control" name="gambar" />
                </div> -->


                <div class="form-group">
                    <label> Pengarang : </label>
                    	<input class="form-control" name="pengarang" />
                </div>

                <div class="form-group">
                    <label> Penerbit : </label>
                    	<input class="form-control" name="penerbit" />
                </div>

                <div class="form-group">
                    <label>Tahun Terbit : </label>
                    	<select class="form-control" name="tahun" />
	                    	<?php
	                    		$tahun = date("Y");

	                    		for ($i=$tahun-29; $i <= $tahun; $i++) { 
	                    			echo'
	                    				<option value="'.$i.'">'.$i.'</option>
	                    			';
	                    		}

	                    	?>
                    	</select>
                </div>

                <div class="form-group">
                    <label> Kode Buku : </label>
                    	<input class="form-control" name="kode_buku" />
                </div>

                <div class="form-group">
                    <label> Jumlah Buku : </label>
                    	<input class="form-control" type="number" name="jumlah" />
                </div>

                <div class="form-group">
                    <label> Lokasi : </label>
                            <select class="form-control" name="lokasi">
                                <option value="rak1">Rak 1</option>
                                <option value="rak2">Rak 2</option>
                                <option value="rak3">Rak 3</option>
                            </select>
                </div>

                <div class="form-group">
                    <label> Tanggal Input : </label>
                    	<input class="form-control" name="tanggal" type="date" />
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
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $tahun=$_POST['tahun'];
    $kode_buku=$_POST['kode_buku'];
    $jumlah=$_POST['jumlah'];
    $lokasi=$_POST['lokasi'];
    $tanggal=$_POST['tanggal'];

    // $fileName = $_FILES['gambar']['name'];
    $simpan=$_POST['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, kode_buku, jumlah_buku, lokasi, tgl_input)values('$judul', '$pengarang', '$penerbit', '$tahun', '$kode_buku', '$jumlah', '$lokasi', '$tanggal')");
        


        if ($sql) {
            
            ?>
                <script type="text/javascript">
                    alert("Tambah Data Buku Berhasil Disimpan");
                    window.location.href="?page=buku";
                </script>
            <?php
        }
    }

?>