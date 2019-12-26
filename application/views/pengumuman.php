<section>
	
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
							<div class="container">
								<h2 style="padding: 50px; padding-bottom: 30px;">Jadwal Sertifikasi</h2><hr>
								<div class="panel-body col-md-10">
			                      <table class="table">
			                        <thead>
			                          <tr>
			                            <th scope="col">No</th>
			                            <th scope="col">Nama Sertifikasi</th>
			                            <th scope="col">Tanggal Mulai</th>
			                            <th scope="col">Tanggal Selesai</th>
			                            <th scope="col">Dosen</th>
			                            <th scope="col">Jam</th>
			                          </tr>
			                        </thead>
			                        <tbody>
			                        <?php 
			                          $no=1; 
			                          foreach ($data as $isi) { ?>
			                          <tr>
			                            <td><?php echo $no++;?></td>
			                            <td><?php echo $isi['namaSertifikasi'];?></td>
			                            <td><?php echo $isi['tglMulai'];?></td>
			                            <td><?php echo $isi['tglSelesai'];?></td>
			                            <td><?php echo $isi['dosen'];?></td>
			                            <td><?php echo $isi['jam'];?></td>
			                          </tr>
			                        <?php } ?>
			                        </tbody>
			                      </table>
			                  </div>
			                  <br><a class="nav-link" href="<?php echo site_url('welcome') ?>"><button class="btn btn-primary btn-lg">Daftar Sertifikasi</button></a>
							</div>
					</div>
				</div>
						
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
</section>