<div class="container">
								<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : <?php echo $jumlah;?></h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Usia</th>
					<th>Status</th>
					<th>Keterangan</th>
					<th>Dokumen</th>
					<th align="center"><a href="<?php echo site_url('admin/tambahpeserta');?>">Tambah Peserta</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->agama;?></td>
					<td><?php echo $peserta->usia;?></td>
					<td><?php echo $peserta->status;?></td>
					<td><?php echo $peserta->keterangan;?></td>
					<td><a href="<?php echo site_url('admin/download/'.$peserta->dokumen);?>">Download Lampiran</a></td>
					<td><a href="<?php echo site_url('admin/biodatapeserta/'.$peserta->id_peserta);?>">Selengkapnya | </a>
					<a href="<?php echo site_url('admin/editpeserta/'.$peserta->id_peserta);?>">Edit | </a>
					<a href="<?php echo site_url('admin/hapus_peserta/'.$peserta->id_peserta);?>">Hapus</a>
					</td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>