<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-success btn-sm">
				<?php  

					$grandtotal = 0;
					if($keranjang = $this->cart->contents())
					{
						foreach ($keranjang as $item) {
							$grandtotal = $grandtotal + $item['subtotal'];
						}
					echo "Total Belanja anda : Rp. ".number_format($grandtotal, 0,',','.');
					

				 ?>
			</div>
			<br><br>
			<h3>Input alamat Pembayaran anda : </h3>
			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
				

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="no_telp" placeholder="Nomr Telepon" class="form-control">
				</div>
				<div class="form-group">
					<label>Jasa Pengirima</label>
					<select class="form-control">
						<option>Jne</option>
						<option>TIKI</option>
						<option>POS INDONESIA</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>
				</div>
				<div class="form-group">
					<label>Pembayaran</label>
					<select class="form-control">
						<option>BCA - XXXX</option>
						<option>BNI -XXXX</option>
						<option>BRI - XXXX</option>
						<option>MANDIRI -XXXX</option>
						
					</select>
				</div>

				<button class="btn btn-sm btn-primary">Pesan</button>
			</form>
			<?php
		} else {
			echo "<h4>keranjang Belanja anda Masih Kosong</h4>";
		}

			 ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>