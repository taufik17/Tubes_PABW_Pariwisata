<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>
<p>
<a href="<?php echo base_url(); ?>ObjekWisata/tambahdata" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>
<div class="table-header">
  <i class="icon-credit-card"></i>
  Data Testimoni
</div>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>No </th>
      <th>Nama Wisata</th>
      <th>Lokasi </th>
      <th>Deskripsi </th>
      <th>Harga Tiket </th>
      <th>Gambar </th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php

  $no = 1;
  foreach ($data->result() as $row ) {
      ?>
      <td><?php echo $no++; ?></td>
      <td><?php echo $row->nama_wisata ;?></td>
      <td><?php echo $row->lokasi; ?></td>
      <td><?php echo $row->deskripsi ;?></td>
      <td><?php echo $row->harga ;?></td>

      <td>
          <a href="<?php echo base_url() . 'asset/images/'.$row->gambar ;?>" ><i class="icon-picture bigger-230"></i></a>
      </td>
      <td>
          <a href="<?php echo base_url();?>Objekwisata/edit/<?php echo $row->id_wisata; ?>" ><i class="icon-edit bigger-150"></i></a>
          <a href="<?php echo base_url();?>Objekwisata/delete/<?php echo $row->id_wisata; ?>" onclick="return confirm('anda yakin ingin menghapus data ini ?');" >
              <i class="icon-trash bigger-150 red"></i></a>
      </td>
      </tr>
  <?php }?>
  </tbody>
</table>
<div>&nbsp </div>
<div>&nbsp </div>
<div>&nbsp </div>
</div>
