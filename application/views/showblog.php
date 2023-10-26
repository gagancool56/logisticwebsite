<?php $this->load->view('inc/header') ?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(../assets/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white font-weight-light text-uppercase font-weight-bold"><?= $post['title'] ?></h1>
        <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Blog</span></p>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img src="<?= base_url('upload/blogs/' . $post['coverimg']) ?>" height="540px" width="100%" alt="Image" class="img-fluid">
        <h2 class="font-size-regular mt-2 font-weight-bold"><?= $post['title'] ?></h2>
        <?= $post['content'] ?>
      </div>
      <div class="col-md-4">
        <h3 class="text-center font-weight-bold">&mdash; Recent Posts &mdash;</h3>
        <div class="row border px-3 pt-4">
          <?php foreach ($posts as $post) { ?>
            <div class="col-md-12 col-lg-12 mb-4 mb-lg-4 border-bottom">
              <div class="h-entry">
                <img src="<?= base_url('upload/blogs/' . $post['coverimg']) ?>" height="100px" width="100px" alt="Image" class="img-fluid float-left mr-3">
                <h6 class="font-size-regular"><a href="<?= base_url('blog/' . $post['postid']) ?>"><?= $post['title'] ?></a></h6>
                <div class="meta mb-4"><?= ucwords($post['createdby']) ?> <span class="mx-2">&bullet;</span> <?= date('M d ,Y', strtotime($post['createddatetime'])) ?> <span class="mx-2"></div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container text-center pb-5">
  <div class="row">
    <div class="col-12">
      <p class="custom-pagination">
        <span>1</span>
        <a href="#">2</a>
        <a href="#">3</a>
      </p>
    </div>
  </div>
</div> -->
<?php $this->load->view('inc/footer') ?>