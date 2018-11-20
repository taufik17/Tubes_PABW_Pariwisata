<script type="text/javascript">
	function cekform()
	{
		if (!$("#id_resto").val())
		{
			alert('maaf id_resto tidak boleh kosong');
			$("#id_resto_Leader").focus();
			return false;
		}

		if (!$("#id_daerah").val())
		{
			alert('maaf Tempat tidak boleh kosong');
			$("#id_daerah_Leader").focus();
			return false;
		}

		if (!$("#nam_resto").val())
		{
			alert('maaf nama restoran tidak boleh kosong');
			$("#nam_resto_Leader").focus();
			return false;
		}

		if (!$("#tempat").val())
		{
			alert('maaf Tempat tidak boleh kosong');
			$("#tempat_Leader").focus();
			return false;
		}

		if (!$("#lokasi").val())
		{
			alert('maaf lokasi tidak boleh kosong');
			$("#lokasi").focus();
			return false;
		}

		if (!$("#deskripsi").val())
		{
			alert('maaf deskripsi tidak boleh kosong');
			$("#deskripsi").focus();
			return false;
		}

		if (!$("#gambar").val())
		{
			alert('maaf gambar tidak boleh kosong');
			$("#gambar").focus();
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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>Kuliner_admin/simpan" onsubmit="return cekform();" enctype="multipart/form-data">

	<div class="control-group">
		<label class="control-label">Id Restoran</label>
		<div class="controls">
			<input type="text" name="id_resto" id="id_resto" placeholder="" class="span4" value="<?php echo $id_resto; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Id daerah</label>
		<div class="controls">
			<input type="text" name="id_daerah" id="id_daerah" placeholder="" class="span4" value="<?php echo $id_daerah; ?>">
		</div>
	</div>


	<div class="control-group">
		<label class="control-label">nama restoran</label>
		<div class="controls">
      <input type="text" name="nam_resto" id="nam_resto" value="<?php echo $nam_resto; ?>">
		</div>
	</div>


  <div class="control-group">
		<label class="control-label">tempat</label>
		<div class="controls">
			<input type="text" name="tempat" id="tempat" placeholder="" class="span4" value="<?php echo $tempat; ?>">
		</div>
	</div>


	<div class="control-group">
		<label class="control-label">lokasi</label>
		<div class="controls">
			<input type="text" name="lokasi" id="lokasi" placeholder="" class="span4" value="<?php echo $lokasi; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">deskripsi</label>
		<div class="controls">
			<input type="text" name="deskripsi" id="deskripsi" placeholder="" class="span4" value="<?php echo $deskripsi; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">gambar</label>
		<div class="controls">
			<input type="file" name="gambar" id="gambar" placeholder="" class="span4" value="<?php echo $gambar; ?>">
		</div>
	</div>




	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
		</button>
		&nbsp; &nbsp;
		<a href="<?php echo base_url();?>Kuliner_admin" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>
		
	</div>
</form>
