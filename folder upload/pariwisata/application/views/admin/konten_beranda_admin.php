<div class="alert alert-block alert-success">
  <button type="button" class="close" data-dismiss="alert">
    <i class="icon-remove"></i>
  </button>

  <i class="icon-ok green"></i>

  Selamat datang
  <strong class="green">
    <?php echo $this->session->userdata('username'); ?>,
  </strong>
  Halaman ini untuk mengolah data sistem informasi pariwisata yang ada di lampung
</div>
<div class="span12 infobox-container">
  <div class="infobox infobox-green  ">
    <div class="infobox-icon">
      <i class="icon-home"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number"><?php echo $hotel ?></span>
      <div class="infobox-content">Data Hotel</div>
    </div>
  </div>

  <div class="infobox infobox-green2  ">
    <div class="infobox-icon">
      <i class="icon-globe"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number"><?php echo $wisata ?></span>
      <div class="infobox-content">Data Tempat Wisata</div>
    </div>
  </div>

  <div class="infobox infobox-blue  ">
    <div class="infobox-icon">
      <i class="icon-food"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number"><?php echo $kuliner ?></span>
      <div class="infobox-content">Data Kuliner</div>
    </div>
  </div>

  <div class="infobox infobox-red  ">
    <div class="infobox-icon">
      <i class="icon-book"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number"><?php echo $testimoni ?></span>
      <div class="infobox-content">Data Testimoni</div>
    </div>
  </div>

</div>
