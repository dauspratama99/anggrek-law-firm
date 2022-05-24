<?php
  mysqli_query($con, "UPDATE code_overview SET viewer=viewer+1 WHERE judulseo='$_GET[id]'");
  $berita = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM code_overview WHERE judulseo='$_GET[id]'"));
 ?>
<section class="portfolio-header parallax parallax1" style="background:#000 url('<?= $base_url ?>img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
    <div class="yeye-overlay p-t-b-80" data-overlay-opacity="0.8">
        <div class="container">
            <div class="row">
                <p class="col-sm-12 text-light text-center" data-aos="fade-down" data-aos-delay="0"></p>
                <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">CODE OVERVIEW</h2>
                <p class="col-sm-12 text-light text-center" data-aos="fade-up" data-aos-delay="300"></p>
            </div>
        </div>
    </div>
</section>

<section class="single-post">
    <div class="container p-t-80">
        <div class="row">
          <div class="col-md-9 col-xs-12" data-aos="fade">
              <article><img class="p-b-20" src="<?= $base_url ?>img/codeoverview/<?= $berita['gambar'] ?>" alt="<?= $berita['judulseo'] ?>">
                  <h2 class="font-poppins emphasis"><?= $berita['judul'] ?></h2>
                  <p><i class="fa fa-clock-o"></i> <?= tgl_indo($berita['tanggal_upload'] )?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> <?= $berita['viewer'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <i class="fa fa-user"></i> <?= $berita['upload_by'] ?></p>
                  <p><?= $berita['deskripsi'] ?></p>
                  <br>
              </article>
          </div>
            <?php
              include "sidebar.php";
            ?>
        </div>
    </div>
</section>
