<div>
  <style>
.new-footer {
    background-color: #6d519d;
    color:white;
    position:relative;
}
.new-footer a {
    color:white;
}
.new-footer-pattern {
    opacity: .5;
    background-image: url(<?php echo base_url();?>asset/images/background-footer.png);
    width: 100%;
    height: 100%;
    position: absolute;
    bottom: 0px;
    left: 0;
    background-position: bottom;
    background-repeat-y: no-repeat;
    background-repeat: repeat-x;
}
.new-footer .indt-container {
    padding-top:2em;
    padding-bottom:2em;
}
.footer-ministry {
    padding-bottom:2em;
    font-size: 14pt;
    letter-spacing: 1px;
}
.footer-ministry-partner a:last-child {
    margin-left:15px;
}
.footer-disclaimer {
    color: #dddddd;
    padding-top: 5px;
    padding-bottom: 5px;
    font-size: 8pt;
    margin-top: 1em;
}
.footer-menu {
	font-size: 10pt;
    margin-top: 2em;
}
.footer-menu li {
    border-right: 1px solid white;
    padding: 0px 15px;
    color: white;
    list-style-type: none;
    display: inline-block;
}
.footer-menu li:first-child {
    padding-left:0px;
}
.footer-menu li:last-child {
    border-right:0px !important;
}

.footer-sosial-a a {
    margin-left: 40px;
    font-size: large;
}
.footer-sosial-a a:first-child {
    margin-left:0px !important;
}

.indt-republik-indonesia {
    font-weight:bold;
    display:inline-block;
}

@media (max-width:767px) {
    .indt-republik-indonesia {
        display:block;
        width:100%;
    }
    .new-footer .indt-container {
        padding-bottom: 3.5em;
    }

    .footer-ministry-partner a:last-child {
        width: 100%;
        display: block;
        margin-left: 0px;
        margin-top: 15px;
    }

    .footer-menu li {
        border-right: 0px;
        padding: 0px;
        text-align: left;
        width: 100%;
    }
    .footer-sosial-a {
        text-align:left !important;
        margin-top: 1em;
        margin-bottom: 2em;
    }
    .new-footer-order {
        flex-direction: column-reverse !important;
    }
}

@media (max-width:1245px) {
	.new-footer .indt-container > .row {
        margin-right:0px !important;
    }
    .new-footer .indt-container {
        padding-left:15px !important;
    }
    .row.row-mob {
        margin-right: 0px;
    }
}

</style>
<div class="new-footer">
  <div class="new-footer-pattern"></div>
	<div class="container indt-container">
		<div class="row">
			<div class="col-12 footer-ministry">Tugas Besar, <span class="indt-republik-indonesia">Pengembangan Aplikasi Berbasis Web</span></div>
      <div class="col-12">
        <b style="font-size: 16px;">Anggota Kelompok :</b>
      </div>
			<div class="col-12">
				<ul class="footer-menu" style="font-size: 10pt;">
          <li>
						<div class="dropdown-content">
							<a href="#">Taufik Agung S</a>
						</div>
					</li>
					<li>
						<div class="dropdown-content">
							<a href="#">Yulianto Pambudi</a>
						</div>
					</li>
					<li>
						<a href="#">Nursano Gandung P </a>
					</li>
					<li>
						<a href="#">Dean Christoper</a>
					</li>
          <li>
						<a href="#">Pasha Abdul Khalid</a>
					</li>
          <li>
						<a href="#">Ahmad Reza Aidil A</a>
					</li>
				</ul>
			</div>
            <div class="col-12">
				<div class="row new-footer-order">
                    <div class="col-12 col-md-7 footer-disclaimer" style="margin-top:0px !important;">
                      <p style="font-size: 9pt;">
                        Ini adalah web informasi pariwisata yang ada di lampung. Konten yang tercantum di web ini dimaksudkan untuk tujuan informasi daripada komersial.
                        Setiap penjualan yang ditampilkan dimaksudkan sebagai token kemitraan dan akan selalu mengarahkan Anda ke situs mitra kami.
                      </p>
                      </div>
					<div class="col-12 col-md-5 text-right footer-sosial-a">
						<a target="_blank" href="#" title="Twitter"><i class="icon-twitter"></i></a>
						<a target="_blank" href="#" title="Instagram"><i class="icon-instagram"></i></a>
						<a target="_blank" href="#" title="Facebook"><i class="icon-facebook"></i></a>
						<a target="_blank" href="#" title="Youtube"><i class="icon-youtube-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
