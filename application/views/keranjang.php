<div class="container-fluid">
	<h4>Keranjang Belanja</h4>

	<table class="table table-bodered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Nama Product</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub Total</th>
		</tr>

		<?php  

		$no=1;
		foreach($this->cart->contents() as $item) :	?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $item['name'] ?></td>
				<td><?php echo $item['qty'] ?></td>
				<td align="right">Rp. <?php echo number_format($item['price'], 0,',','.')  ?></td>
				<td align="right">Rp. <?php echo number_format($item['subtotal'], 0,',','.')  ?></td>
			</tr>
			

		<?php endforeach; ?>
			<tr>
				<td colspan="4"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->Total(), 0,',','.')  ?></td>
			</tr>
	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-danger btn-sm">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-primary btn-sm">Lanjutkan Belanja</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-success btn-sm">Pembayaran</div></a>
	</div>
</div>