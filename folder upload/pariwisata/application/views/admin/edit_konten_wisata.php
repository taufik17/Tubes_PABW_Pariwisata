<script type="text/javascript">
	function cekform()
	{
		if (!$("#tempat").val())
		{
			alert('maaf Tempat tidak boleh kosong');
			$("#tempat_Leader").focus();
			return false;
		}

		if (!$("#nama_wisata").val())
		{
			alert('maaf nama wisata tidak boleh kosong');
			$("#Nama_wisata_Leader").focus();
			return false;
		}

		if (!$("#lokasi").val())
		{
			alert('maaf lokasi tidak boleh kosong');
			$("#lokasi").focus();
			return false;
		}

		if (!$("#harga").val())
		{
			alert('maaf harga tidak boleh kosong');
			$("#harga").focus();
			return false;
		}

		if (!$("#deskripsi").val())
		{
			alert('maaf deskripsi tidak boleh kosong');
			$("#deskripsi").focus();
			return false;
		}
	}
</script>

<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>
<div>&nbsp </div>
<div>&nbsp </div>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>Wisata/simpan" onsubmit="return cekform();">

	<div class="control-group">
		<label class="control-label">Id</label>
		<div class="controls">
			<input type="text" name="id_wisata" id="id_wisata" placeholder="" class="span4" value="<?php echo $id_wisata; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Id daerah</label>
		<div class="controls">
			<input type="text" name="id_daerah" id="id_daera" placeholder="" class="span4" value="<?php echo $id_daerah; ?>">
		</div>
	</div>

  <div class="control-group">
		<label class="control-label">tempat</label>
		<div class="controls">
			<input type="text" name="tempat" id="tempat" placeholder="" class="span4" value="<?php echo $tempat; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">nama wisata</label>
		<div class="controls">
      <input type="text" name="nama_wisata" id="nama_wisata" value="<?php echo $nama_wisata; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">lokasi</label>
		<div class="controls">
			<input type="text" name="lokasi" id="lokasi" placeholder="" class="span4" value="<?php echo $lokasi; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">harga</label>
		<div class="controls">
			<input type="text" name="harga" id="harga" placeholder="" class="span4" value="<?php echo $harga; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">deskripsi</label>
		<div class="controls">
			<input type="text" name="deskripsi" id="deskripsi" placeholder="" class="span4" value="<?php echo $deskripsi; ?>">
		</div>
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
		</button>
		&nbsp; &nbsp;
		<a href="<?php echo base_url();?>Wisata_admin" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>
		
	</div>
</form>
