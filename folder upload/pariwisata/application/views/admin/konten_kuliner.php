<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>
<p>
<a href="<?php echo base_url(); ?>Kuliner_admin/tambah" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>
<div class="table-header">
  <i class="icon-credit-card"></i>
  Data 
</div>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>id_resto </th>
      <th>id_daerah </th>
      <th>nam_resto </th>
      <th>tempat </th>
      <th>lokasi </th> 
      <th>deskripsi </th>
      <th>gambar </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $no = 1;
    foreach ($data->result() as $row ) {
    ?>
      <td><?php echo $row->id_resto ;?></td>
      <td><?php echo $row->id_daerah; ?></td>
      <td><?php echo $row->nam_resto ;?></td>
      <td><?php echo $row->tempat ;?></td>
      <td><?php echo $row->lokasi ;?></td>
      <td><?php echo $row->deskripsi ;?></td>
      <td><?php echo $row->gambar ;?></td>
      <td>
        <a href="<?php echo base_url() . 'asset/images/'.$row->gambar ;?>" ><i class="icon-picture bigger-230"></i></a>
      </td>
      <td>
          <a href="<?php echo base_url();?>Kuliner_admin/edit/<?php echo $row->id_resto; ?>" ><i class="icon-edit bigger-150"></i></a>
          <a href="<?php echo base_url();?>Kuliner_admin/delete/<?php echo $row->id_resto; ?>" onclick="return confirm('anda yakin ingin menghapus data ini ?');" >
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
