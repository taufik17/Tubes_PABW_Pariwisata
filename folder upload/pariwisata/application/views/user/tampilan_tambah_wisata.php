    <script type="text/javascript">
	function cekform()
	{
        *if (!$("#id_daerah").val())
        {
            alert('maaf Daerah tidak boleh kosong');
            $("#Email_Leader").focus();
            return false;
        }
		if (!$("#nama").val())
		{
			alert('maaf Nama tidak boleh kosong');
			$("#Email_Leader").focus();
			return false;
		}

		if (!$("#lokasi").val())
		{
			alert('maaf Lokasi tidak boleh kosong');
			$("#Nama_Leader").focus();
			return false;
		}

		if (!$("#deskripsi").val())
		{
			alert('maaf Deskripsi tidak boleh kosong');
			$("#Instansi").focus();
			return false;
		}
        if (!$("#harga").val())
        {
            alert('maaf Harga tidak boleh kosong');
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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>Objekwisata/simpan" onsubmit="return cekform();">

    <div class="control-group">
        <label class="control-label">Nama Daerah</label>
        <div class="controls">
            <select name="id_daerah"  id="id_daerah">
                <option value=" "selected></option>
                <?php
                $sql="select * from daerah";
                $res = $this->db->query($sql);
                $a = $res->row();

                foreach ($res->result() as $r){
                    $a = new stdClass();
                    echo '<option value="'.$r->id_daerah.'"'.$s.'>'.$r->nama_daerah.'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="control-group">
		<label class="control-label">Nama Wisata</label>
		<div class="controls">
			<input type="text" name="nama" id="nama" placeholder=""  >
		</div>
	</div>
    <div class="control-group">
		<label class="control-label">Lokasi</label>
		<div class="controls">
      <input type="text" name="lokasi" id="lokasi">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Deskripsi</label>
		<div class="controls">
			<input type="text" name="deskripsi" id="deskripsi" placeholder="" class="span4" >
		</div>
	</div>

    <div class="control-group">
        <label class="control-label">Harga</label>
        <div class="controls">
            <input type="number" name="harga" id="harga" placeholder="" class="span4" >
        </div>
    </div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
		</button>
		&nbsp; &nbsp;
		<a href="<?php echo base_url();?>Objekwisata" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>

	</div>
</form>
