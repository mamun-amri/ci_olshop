<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-body">
					<h4 class="text-center">Laporan Stok Barang</h4>
					<p class="text-center">Sate bandeng Hj. Mariyam</p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Barang</th>
								<th>Stok</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach($barang as $row ): ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $row['nama_barang'] ?></td>
									<td><?= $row['stok'] ?> Tusuk</td>
								</tr>
							<?php endforeach; ?>
							
						</tbody>
					</table>
					<?php foreach($laporan_stok as $row): ?>
						<p>Total barang terjual : <b><?= $row['laporan_stok'] ?></b> Barang</p>
					<?php endforeach; ?>
				<a href="<?= base_url('admin/AdminController/laporan_stok_pdf') ?>" class="ml-2 btn btn-sm btn-primary"><i class="fa fa-print"></i> Cetak </a>
				</div>
			</div>
		</div>
	</div>
</div>