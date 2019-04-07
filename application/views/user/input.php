<div class="container">
	<h4>Tambah Data</h4><br>
	<div class="row">
		<form class="col s12" id="inputdata">
			<div class="row">
				<div class="input-field col s12">
					<input id="name" name="name" type="text" class="validate">
					<label for="name">Nama Proyek</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="kode" name="kode" type="text" class="validate">
					<label for="kode">Kode Buku</label>
				</div>
				<div class="input-field col s6">
					<input id="tahun" name="tahun" type="text" class="validate">
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
			</div><br>
			<div class="row">
				<div class="input-field col s6">
					<input id="jenis" name="jenis" type="text" class="validate">
					<label for="jenis">Jenis Pekerjaan</label>
				</div>
				<div class="input-field col s6">
					<input id="lokasi" name="lokasi" type="text" class="validate">
					<label for="lokasi">Lokasi</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="volume" name="volume" class="materialize-textarea"></textarea>
					<label for="volume">Volume Pekerjaan</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="pt" name="pt" type="text" class="validate">
					<label for="pt">Pemberi Kerja</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="alamatpt" name="alamatpt" class="materialize-textarea"></textarea>
					<label for="alamatpt">alamat</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="no" name="no" type="text" class="validate">
					<label for="no">No. Kontrak</label>
				</div>
				<div class="input-field col s6">
					<input type="text" id="tglkontrak" class="datepicker" name="tglkontrak">
					<label for="tanggal">Tanggal</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s4">
					<input id="spk" name="spk" type="text" class="validate">
					<label for="spk">Nilai Kontrak (SPK)</label>
				</div>
				<div class="input-field col s4">
					<input id="nonppn" name="nonppn" type="text" class="validate">
					<label for="nonppn">Nilai Kontrak (Tanpa PPN)</label>
				</div>
				<div class="input-field col s4">
					<input id="final" name="final" type="text" class="validate">
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
					<input type="text" id="mulai" class="datepicker" name="mulai">
					<label for="nonppn">Mulai</label>
				</div>
				<div class="input-field col s4">
					<input type="text" id="selesai" class="datepicker" name="selesai">
					<label for="final">Selesai</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="pj" name="pj" type="text" class="validate">
					<label for="pj">Penaggung Jawab</label>
				</div>
			</div>	
			<div class="row">
				<div class="input-field col s12">
					<textarea id="konsultan" name="konsultan" class="materialize-textarea"></textarea>
					<label for="konsultan">Konsultan</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="ket" name="ket" class="materialize-textarea"></textarea>
					<label for="ket">Keterangan</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l3">
					<button class="btn waves-effect waves-light red lighten-2" id="clear" type="submit" name="action" style="margin-right: 15px;">Reset</button>
					<button class="btn waves-effect waves-light" id="send" type="submit" name="action" >Simpan</button>
				</div>
			</div>	
		</form>
	</div>
</div>
<script>
	$(document).ready(function() {

		$('#clear').on('click',function(){
			$('#inputdata').trigger("reset");
		});

		$('#send').on('click',function(){
			var nama=$('#name').val();
			var kode=$('#kode').val();
			var tahun=$('#tahun').val();
			var jenis=$('#jenis').val();
			var lokasi=$('#lokasi').val();
			var volume=$('#volume').val();
			var pt=$('#pt').val();
			var alamatpt=$('#alamatpt').val();
			var no=$('#no').val();
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

			if ((nama.length==0) || (kode.length==0) || (tahun.length==0) || (jenis.length==0) || (lokasi.length==0) || (volume.length==0) || (pt.length==0) || (alamatpt.length==0) || (no.length==0) || (tglkontrak.length==0) || (spk.length==0) || (nonppn.length==0) || (final.length==0) || (mulai.length==0) || (selesai.length==0) || (pj.length==0) || (konsultan.length==0) || (ket.length==0)) {
				alert('lengkapi data');
			}
			else{
				$.ajax({
					type : "POST",
					url  : "<?php echo base_url("data/add") ?>",
					dataType : "JSON",
					data : {nama:nama, kode:kode, tahun:tahun, jenis:jenis, lokasi:lokasi, volume:volume, pt:pt, alamatpt:alamatpt, no:no, tglkontrak:tglkontrak, spk:spk, nonppn:nonppn, final:final, status:status, mulai:mulai, selesai:selesai, pj:pj, konsultan:konsultan, ket:ket, lingkupkerja:lingkupkerja },
					success: function(data){
						$('#inputdata').trigger("reset");;
					}
				});
				return false;
			}
		});

		$('.datepicker').datepicker();
		$('select').formSelect();
	});
</script>
