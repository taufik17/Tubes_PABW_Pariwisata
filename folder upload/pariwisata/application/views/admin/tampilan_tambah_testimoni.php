<script type="text/javascript">
	function cekform()
	{
		if (!$("#nama").val())
		{
			alert('maaf Nama tidak boleh kosong');
			$("#Email_Leader").focus();
			return false;
		}

		if (!$("#text").val())
		{
			alert('maaf teks tidak boleh kosong');
			$("#Nama_Leader").focus();
			return false;
		}

		if (!$("#asal").val())
		{
			alert('maaf asal tidak boleh kosong');
			$("#Instansi").focus();
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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>Testimoni/simpan" onsubmit="return cekform();">

	<div class="control-group">
		<label class="control-label">Id</label>
		<div class="controls">
			<input type="text" name="id_testimoni" id="id_testimoni" placeholder="" class="span4" value="<?php echo $id_testimoni; ?>">
		</div>
	</div>

  <div class="control-group">
		<label class="control-label">Nama</label>
		<div class="controls">
			<input type="text" name="nama" id="nama" placeholder="" class="span4" value="<?php echo $nama; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Teks</label>
		<div class="controls">
      <input type="text" name="text" id="text" value="<?php echo $text; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Asal</label>
		<div class="controls">
			<input type="text" name="asal" id="asal" placeholder="" class="span4" value="<?php echo $asal; ?>">
		</div>
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
		</button>
		&nbsp; &nbsp;
		<a href="<?php echo base_url();?>Testimoni" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>
		
	</div>
</form>
