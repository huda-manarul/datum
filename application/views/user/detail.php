<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<?php foreach ($detail as $data) { ?>
		<input type="text" id="id" value="<?php echo $data->id ?>" hidden="">
		<?php } ?>
		<div class="section1" id="section1">
			<?php foreach ($detail as $data) { ?>
			<h5>Data Proyek </h5>
			<h4><b><?php echo $data->nama_proyek ?></b></h4>
			<div class="line"></div>
			<h5><b>Lokasi : </b><?php echo $data->lokasi ?></h5>
			<h6><i><?php echo $data->alamat_proyek ?></i></h6>
			<p><?php echo '<b>Kode Buku : </b>'.$data->kode_buku.'     <b>Tahun : </b>'.$data->tahun
			.'     <b>Jenis Pekerjaan : </b>'.$data->jenis_pekerjaan ?></p>
			<?php } ?>
		</div>
		<div class="divider"></div>
		<div class="section">
			<h5>File Proyek</h5>
			<table id="article" class="responsive-table highlight">
				<thead>
					<tr>
						<td>Jenis File</td>
						<td>Nama File</td>
						<td>Keterangan</td>
						<td><center>aksi</center></td>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div id="upload" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h5>Tambahkan File</h5><br>
				<form class="col s12" id="inputfile">
					<div class="row">
						<div class="input-field col s4">
							<select id="file" name="file">
								<option value="" disabled selected>Pilih Jenis File</option>
								<option value="SPK">SPK</option>
								<option value="Kontrak">Kontrak</option>
								<option value="Adendum">Adendum</option>
								<option value="BAST">BAST</option>
							</select>
							<label>Jenis File</label>
						</div>
					</div>
					<div class="row">
						<div class="file-field input-field s12">
							<input type="file" name="datafile" class="dropify">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="keterangan" name="keterangan" class="materialize-textarea"></textarea>
							<label for="keterangan">Keterangan</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Kembali</a>
					<button  class="modal-close waves-effect waves-green btn" id="btn_upload" type="submit">Upload</button>
				</div>
			</form>
		</div>
		<div id="reset" class="modal">
			<div class="modal-content">
				<h4>Hapus Data</h4><br>
				<?php foreach ($detail as $data) { ?>
				<p>hapus data dan file dari <b><?php echo $data->nama_proyek; ?></b> ?
				</p>
				<?php } ?>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-close waves-effect waves-green btn-flat">Kembali</a>
				<button  class="modal-close waves-effect waves-green btn" id="resetrecord" type="submit">hapus</button>
			</div>
		</div>

		<div id="edit" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h5>Edit Data</h5><br>
				<div class="row">
					<?php foreach ($detail as $data) { ?>
					<form class="col s12" id="inputdata">
						<div class="row">
							<div class="input-field col s12">
								<input id="name" name="name" type="text" value="<?php echo $data->nama_proyek ?>" class="validate">
								<label for="name">Nama Proyek</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="alamatproyek" name="alamatproyek" type="text" value="<?php echo $data->alamat_proyek ?>" class="validate">
								<label for="alamatproyek">Nama Proyek</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="kode" name="kode" type="text" value="<?php echo $data->kode_buku ?>" class="validate">
								<label for="kode">Kode Buku</label>
							</div>
							<div class="input-field col s6">
								<input id="tahun" name="tahun" type="text" value="<?php echo $data->tahun ?>" class="validate">
								<label for="tahun">Tahun</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Struktur" />
									<span>Pekerjaan Struktur</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Arsitektur" />
									<span>Pekerjaan Arsitektur</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Plumbing" />
									<span>Pekerjaan Plumbing</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Sipil" />
									<span>Pekerjaan Sipil</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Jalan" />
									<span>Pekerjaan Jalan</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Jembatan" />
									<span>Pekerjaan Jembatan</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Pondasi" />
									<span>Pekerjaan Pondasi</span>
								</label>
							</div>
							<div class="input-field col s6">
								<label>
									<input type="checkbox" checked="" class="filled-in" name="lingkupkerja" id="lingkupkerja"  value="Pekerjaan Lainya" />
									<span>Pekerjaan Lainya</span>
								</label>
							</div>
						</div><br>
						<div class="row">
							<div class="input-field col s6">
								<input id="jenis" name="jenis" type="text" value="<?php echo $data->jenis_pekerjaan ?>" class="validate">
								<label for="jenis">Jenis Pekerjaan</label>
							</div>
							<div class="input-field col s6">
								<input id="lokasi" name="lokasi" type="text" value="<?php echo $data->lokasi ?>" class="validate">
								<label for="lokasi">Lokasi</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="volume" name="volume" class="materialize-textarea"><?php echo $data->volume_pekerjaan ?></textarea>
								<label for="volume">Volume Pekerjaan</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="pt" name="pt" type="text" value="<?php echo $data->pemberi_kerja ?>" class="validate">
								<label for="pt">Pemberi Kerja</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="alamatpt" name="alamatpt" class="materialize-textarea"><?php echo $data->alamat_pemberi_kerja ?></textarea>
								<label for="alamatpt">alamat</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="nomor" name="nomor" type="text" value="<?php echo $data->no_kontrak ?>" class="validate">
								<label for="nomor">No. Kontrak</label>
							</div>
							<div class="input-field col s6">
								<input type="text" id="tglkontrak" value="<?php echo $data->tanggal_kontrak ?>" class="datepicker" name="tglkontrak">
								<label for="tanggal">Tanggal</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s4">
								<input id="spk" name="spk" type="text" value="<?php echo $data->nilai_kontrak ?>" class="validate">
								<label for="spk">Nilai Kontrak (SPK)</label>
							</div>
							<div class="input-field col s4">
								<input id="nonppn" name="nonppn" value="<?php echo $data->nilai_kontrak_nonppn ?>" type="text" class="validate">
								<label for="nonppn">Nilai Kontrak (Tanpa PPN)</label>
							</div>
							<div class="input-field col s4">
								<input id="final" name="final" value="<?php echo $data->nilai_final ?>" type="text" class="validate">
								<label for="final">Nilai Final Account</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s4">
								<select id="status" name="status">
									<option value="" disabled selected>Pilih status</option>
									<option value="On Progress">On Progress</option>
									<option value="Stopped">Stopped</option>
									<option value="Completed">Completed</option>
								</select>
								<label>Status Pengembangan</label>
							</div>
							<div class="input-field col s4">
								<input type="text" id="mulai" value="<?php echo $data->mulai ?>" class="datepicker" name="mulai">
								<label for="nonppn">Mulai</label>
							</div>
							<div class="input-field col s4">
								<input type="text" id="selesai" value="<?php echo $data->selesai ?>" class="datepicker" name="selesai">
								<label for="final">Selesai</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="pj" name="pj" type="text" value="<?php echo $data->penanggung_jawab ?>" class="validate">
								<label for="pj">Penaggung Jawab</label>
							</div>
						</div>	
						<div class="row">
							<div class="input-field col s12">
								<textarea id="konsultan" name="konsultan" class="materialize-textarea"><?php echo $data->konsultan ?></textarea>
								<label for="konsultan">Konsultan</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="ket" name="ket" class="materialize-textarea"><?php echo $data->keterangan ?></textarea>
								<label for="ket">Keterangan</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Kembali</a>
					<button  class="modal-close waves-effect waves-green btn" id="send" type="submit">update</button>
				</div>
			</form>
			<?php } ?>
		</div>

		<div class="fixed-action-btn">
			<a class="btn-floating btn-large  teal lighten-1" >
				<i class="large material-icons">mode_edit</i>
			</a>
			<ul>
				<li><a class="btn-floating amber" id="refresh"><i class="material-icons">refresh</i></a></li>
				<li><a class="btn-floating  green lighten-1 modal-trigger" data-target="edit"><i class="material-icons">text_fields</i></a></li>
				<li><a class="btn-floating light-blue lighten-1 modal-trigger" data-target="upload"><i class="material-icons">attach_file</i></a></li>
				<li><a class="btn-floating red lighten-1 modal-trigger" data-target="reset"><i class="material-icons">delete</i></a></li>
			</ul>
		</div>

	</div>
</body>
</html>
<script>
	$(document).ready(function() {
		var id = $('#id').val();
		$('#article').DataTable({
			"ajax": {
				url : '<?php echo base_url("data/getdatafile/") ?>'+id,
				type : 'GET'
			},
			"lengthChange": false,
			"bPaginate": false,
			"bInfo" : false,
			"bFilter": false
		});

		$('#inputfile').submit(function(e){
			e.preventDefault(); 
			formdata = new FormData(this)
			var id = $('#id').val();
			$.ajax({
				url:'<?php echo base_url("data/upload/") ?>'+id,
				type:"post",
				data:formdata,
				processData:false,
				contentType:false,
				cache:false,
				async:false,
				success: function(data){
					$('#article').DataTable().ajax.reload();
				}

			});
		});
		$('.tabs').tabs();
		$('.modal').modal();
		$('select').formSelect();
		$('.datepicker').datepicker({
			container: 'body'
		});			
		$('.fixed-action-btn').floatingActionButton();
		$('.dropify').dropify({
			messages: {
				default: 'Drag atau drop untuk memilih file',
				replace: 'Ganti',
				remove:  'Hapus',
				error:   'error'
			}
		});


		$(document).on('click', '#delete', function(){  
			var no = $(this).attr("no");  
			var file = $(this).attr("file");  
			if(confirm("Are you sure you want to delete this?"))  
			{  
				$.ajax({  
					url:"<?php echo base_url("data/delete/") ?>",  
					method:"POST",  
					data:{nomor:no, namafile:file},  
					success:function(data){  
						$('#article').DataTable().ajax.reload();
					}  
				});  
			}  
			else  
			{  
				return false;       
			}  
		});  

		$('#refresh').on('click',function(){
			$("#section1").load("<?php echo base_url("home/detail/") ?>"+id);
		}); 

		$('#resetrecord').on('click',function(){
			$.ajax({  
				url:"<?php echo base_url("data/batchdelete/") ?>"+id,  
				method:"POST",  
				data:{id:id},  
				success:function(data){  
					$(location).attr('href','<?php echo base_url() ?>');
				}  
			}); 
		});  

		$('#send').on('click',function(){
			var nama=$('#name').val();
			var alamatproyek=$('#alamatproyek').val();
			var kode=$('#kode').val();
			var tahun=$('#tahun').val();
			var jenis=$('#jenis').val();
			var lokasi=$('#lokasi').val();
			var volume=$('#volume').val();
			var pt=$('#pt').val();
			var alamatpt=$('#alamatpt').val();
			var nomor=$('#nomor').val();
			var tglkontrak=$('#tglkontrak').val();
			var spk=$('#spk').val();
			var nonppn=$('#nonppn').val();
			var final=$('#final').val();
			var status=$('#status').val();
			var mulai=$('#mulai').val();
			var selesai=$('#selesai').val();
			var pj=$('#pj').val();
			var konsultan=$('#konsultan').val();
			var ket=$('#ket').val();

			var lingkupkerja = [];
			$('input[id="lingkupkerja"]:checked').each(function() {
				lingkupkerja.push(this.value); 
			});

			$.ajax({
				type : "POST",
				url  : "<?php echo base_url("data/update/") ?>"+id,
				dataType : "JSON",
				data : {nama:nama, alamatproyek:alamatproyek, kode:kode, tahun:tahun, jenis:jenis, lokasi:lokasi, volume:volume, pt:pt, alamatpt:alamatpt, no:nomor, tglkontrak:tglkontrak, spk:spk, nonppn:nonppn, final:final, status:status, mulai:mulai, selesai:selesai, pj:pj, konsultan:konsultan, ket:ket, lingkupkerja:lingkupkerja },
				success: function(data){
					$("#section1").load("<?php echo base_url("home/demo/") ?>"+id);
					// alert('data telah diupdate');
					$('.modal').modal('close', "#edit");
				}
			});
			return false;
			
		});

	});
</script>
<style type="text/css">
.tabs .tab a{
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
}
.line {

	width: 100%;
	max-width: 17rem;
	height: 4px;
	margin: 1rem 0 0;
	background: #11B8AB;

}
#edit{
	width: 900px;
	height: 100%;
}
</style>