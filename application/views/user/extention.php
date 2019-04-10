<h5>Data Proyek </h5>
<?php foreach ($detail as $data) { ?>
<div>
	<h4><b><?php echo $data->nama_proyek ?></b></h4>
	<div class="line"></div>
	<h5><b>Lokasi : </b><?php echo $data->lokasi ?></h5>
	<h6><i><?php echo $data->alamat_proyek ?></i></h6>
	<p><?php echo '<b>Kode Buku : </b>'.$data->kode_buku.'     <b>Tahun : </b>'.$data->tahun
	.'     <b>Jenis Pekerjaan : </b>'.$data->jenis_pekerjaan ?></p>

	<ul id="tabs-swipe-demo" class="tabs">
		<li class="tab col s3"><a class="active" href="#test-swipe-1"><b>Detail Pekerjaan</b></a></li>
		<li class="tab col s3"><a href="#test-swipe-2"><b>Kontrak</a></b></li>
		<li class="tab col s3"><a href="#test-swipe-3"><b>Status Pelaksanaan</b></a></li>
	</ul>
	<div id="test-swipe-1" class="col s12">
		<div class="row">
			<div class="col s6">
				<p><b>Lingkup Pekerjaan : </b><br>
					<?php $array =  explode(',', $data->lingkup_pekerjaan);
					foreach ($array as $item) {
						echo "<li>".$item."</li>";
					}?>
				</p>
			</div>
			<div class="col s6">
				<p><b>Volume Pekerjaan : </b><br>
					<?php $array =  explode(',', $data->volume_pekerjaan);
					foreach ($array as $item) {
						echo "<li>".$item."</li>";
					}?>
				</p>
			</div>
		</div>
	</div>
	<div id="test-swipe-2" class="col s12">
		<div class="row">
			<div class="col s12">
				<p><b>Pemberi Kerja : </b></p>
				<b><?php echo $data->pemberi_kerja ?></b>
				<p><i><?php echo $data->alamat_pemberi_kerja ?></i></p>
			</div>
			<div class="col s6">
				<p><b>No. Kontrak : </b></p>
				<p><i><?php echo $data->no_kontrak ?></i></p>
			</div>
			<div class="col s6">
				<p><b>Tanggal Kontrak : </b></p>
				<p><i><?php echo date('d-m-Y', strtotime($data->tanggal_kontrak)) ?></i></p>
			</div>
			<div class="col s4">
				<p><b>Nilai Kontrak (SPK) : </b></p>
				<p><i><?php echo 'Rp. '.number_format($data->nilai_kontrak).',-' ?></i></p>
			</div>
			<div class="col s4">
				<p><b>Nilai Kontrak (Tanpa PPN) : </b></p>
				<p><i><?php echo 'Rp. '.number_format($data->nilai_kontrak_nonppn).',-' ?></i></p>
			</div>
			<div class="col s4">
				<p><b>Nilai Final Account : </b></p>
				<p><i><?php echo 'Rp. '.number_format($data->nilai_final).',-' ?></i></p>
			</div>
		</div>
	</div>
	<div id="test-swipe-3" class="col s12">
		<div class="row">
			<div class="col s4">
				<p><b>Status : </b></p>
				<p><i><?php echo $data->status ?></i></p>
			</div>
			<div class="col s4">
				<p><b>Mulai : </b></p>
				<p><i><?php echo date('d-m-Y', strtotime($data->mulai)) ?></i></p>
			</div>
			<div class="col s4">
				<p><b>Selesai : </b></p>
				<p><i><?php echo date('d-m-Y', strtotime($data->selesai)) ?></i></p>
			</div>
			<div class="col s12">
				<p><b>Penanggung Jawab: </b></p>
				<p><i><?php echo $data->penanggung_jawab ?></i></p>
			</div>
			<div class="col s6">
				<p><b>Konsultan: </b></p>
				<p><i><?php echo $data->konsultan ?></i></p>
			</div>
			<div class="col s6">
				<p><b>Keterangan: </b></p>
				<p><i><?php echo $data->keterangan ?></i></p>
			</div>
		</div>
	</div>
</div>


<?php } ?>
<script>
	$(document).ready(function(){
		$('.tabs').tabs();
	});
</script>
<style>

/*.tabs .tab a{
	color:teal;
}
.tabs .tab a:focus, .tabs .tab a:focus.active {
	background-color: transparent;
	outline: none;
}
.tabs .tab a:hover,tabs .tab a:active,.tabs .tab a.active {
	background-color:transparent;
	color:teal;
}
.tabs .tab.disabled a,.tabs .tab.disabled a:hover {
	color:rgba(102,147,153,0.7);
}
.tabs .indicator {
	background-color:#009688;
}*/

.line {

	width: 100%;
	max-width: 17rem;
	height: 4px;
	margin: 1rem 0 0;
	background: #11B8AB;

}
</style>