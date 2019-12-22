<section>
	<div class="container">
		<h2 style="padding: 20px;">Form Daftar</h2>
		<form class="form-horizontal" action="<?php echo base_url().'index.php/welcome/do_daftar' ?>" method="POST" >
			<div class="form-group">
			  <div class="col-sm-10">
			    <input type="text" class="form-control" id="nim" placeholder="Masukkan Nim" name="nim" value="">
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-sm-10">          
			    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-sm-10">
			    <select class="form-control" name="prodi" required> 
			    	<option value=" ">
			    		--Pilih Prodi--
			    	</option>
			    	<option value="TI">
			    		<label>Teknik Informatika</label>
			    	</option>
			    	<option value="SI">
			    		<label>Sistem Informasi</label>
			    	</option>
			    	<option value="KA">
			    		<label>Komputerisasi Akutansi</label>
			    	</option>
			    	<option value="TK">
			    		<label>Teknik Komputer</label>
			    	</option>
			    </select>
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-sm-10">
			    <select class="form-control" name="sertifikasi" required>
			    	<option value=" ">
			    		--Pilih Sertifikasi--
			    	</option>
			    	<option value="CCNA">
			    		<label>CCNA</label>
			    	</option>
			    	<option value="ORACLE">
			    		<label>ORACLE</label>
			    	</option>
			    	<option value="TOEFL">
			    		<label>TOEFL</label>
			    	</option>
			    </select>
			  </div>
			</div>
			<div class="form-group">				
				<div class="col-sm-10">  
					<input class="form-control" type="date" name="tgl" value=" ">
				</div>
			</div>
			<div class="form-group">
			  <div class="col-sm-10">          
			    <input type="text" class="form-control" id="nama" placeholder="Nomor HP" name="nohp">
			  </div>
			</div>
			<div class="form-group">         
			  <div class="col-sm-offset-2 col-sm-10">
			    <button type="submit" class="btn btn-primary">Daftar</button>
			  </div>
			</div>
		</form>
	</div>
</section>
