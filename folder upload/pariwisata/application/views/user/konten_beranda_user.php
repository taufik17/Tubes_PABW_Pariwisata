<div class="alert alert-block alert-success">
  <button type="button" class="close" data-dismiss="alert">
    <i class="icon-remove"></i>
  </button>

  <i class="icon-ok green"></i>

  Selamat datang
  <strong class="green">
      <?php echo $this->session->userdata('uname'); ?>,</strong>
      Ingin menambahkan data wisata?


</div>

  <div class="infobox infobox-green2  ">
    <div class="infobox-icon">
      <i class="icon-globe"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number"><?php echo $wisata; ?></span>
      <div class="infobox-content">Data Tempat Wisata</div>
    </div>
  </div>


</div>
