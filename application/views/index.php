<?php $this->load->view('inc/header.php') ?>

<div class="site-blocks-cover overlay" style="background-image: url(assets/images/hero_img.png);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Freight Services</h1>
                <p><a href="#quotation" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

            </div>
        </div>
    </div>
</div>

<div class="container" id="quotation">
    <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
            <div class="feature-1 pricing h-100 text-center">
                <div class="icon">
                    <span class="icon-dollar"></span>
                </div>
                <h2 class="my-4 heading">Best Prices</h2>
                <p>Best of Industry prices,
                    Custom based quantity Plan
                    Monthly & Yearly Contract Based Plans</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="free-quote bg-dark h-100">
                <h2 class="my-4 heading  text-center">Get Free Quote</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="fq_name">Name</label>
                        <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="fq_email">Email</label>
                        <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="fq_email">Phone</label>
                        <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Get Quote">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-3 pricing h-100 text-center">
                <div class="icon">
                    <span class="icon-phone"></span>
                </div>
                <h2 class="my-4 heading">24/7 Support</h2>
                <p>Phone No. & Email ID of the company, will be provided</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="mb-0 text-primary">What We Offer</h2>
                <p class="color-black-opacity-5">We Offer The Following Services</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                    <div>
                        <h3>Monitored Transportation</h3>
                        <p>Our Managed Transportation Services, which bring together the industry's largest shipper-carrier network and our innovative logistics platform, plan and execute your logistics plans on your behalf</p>
                        <p class="mb-0"><a href="<?= base_url('services/monitored-transportation') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
                    <div>
                        <h3>Cross-Border Logistics</h3>
                        <p>For shippers doing cross-border, intra-Canada operations, understanding the security challenges, economic environment, and regulatory issues that lie ahead, as well as how to manage them, is crucial.</p>
                        <p class="mb-0"><a href="<?= base_url('services/cross-border-logistics') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                    <div>
                        <h3>Warehouse & Manufacturing Optimization</h3>
                        <p>The principles of Lean warehouse management, warehouse best practices, and the most efficient warehouse layout are all part of warehouse optimization. </p>
                        <p class="mb-0"><a href="<?= base_url('services/warehouse-maufacturing-optimization') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="site-section pb-0">
    <div class="owl-carousel nonloop-block-13">
        <a href="#" class="unit-1 text-center">
            <img src="assets/images/hero_img_5.png" alt="Image" class="img-fluid" height="200px">
            <div class="unit-1-text">
                <h1 class="unit-1-heading">Storage</h1>
                <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>
            </div>
        </a>
    </div>
</div>




<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">More Services</h2>
                <p class="color-black-opacity-5">We Offer The Following Services</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                    <div>
                        <h3 class="text-capitalize">fulfillment of e-commerce orders</h3>
                        <p class="text-justify">For e-commerce enterprises, outsourced fulfillment reduces the need for merchants to keep inventory or pick, pack, and ship.</p>
                        <p><a href="<?= base_url('services/fulfillment-of-ecommerce') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
                    <div>
                        <h3 class="text-capitalize">supply chain optimization</h3>
                        <p class="text-justify">To optimize your supply chain, you must do a thorough Supply Chain Analysis that includes all of your cost-drivers and customer service metrics. </p>
                        <p><a href="<?= base_url('services/supply-chain-optimization') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                    <div>
                        <h3 class="text-capitalize">warehousing and distribution</h3>
                        <p class="text-justify">Distribution management is the process of overseeing the movement of commodities from a supplier or producer...</p>
                        <p><a href="<?= base_url('services/warehouse-and-distribution') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
                    <div>
                        <h3 class="text-capitalize">SaaS TMS</h3>
                        <p class="text-justify">The SaaS Transportation Management System (TMS) was developed in-house and is geared exclusively for customers in our global transportation and logistics network...</p>
                        <p><a href="<?= base_url('services/saas-tms') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-platform"></span></div>
                    <div>
                        <h3 class="text-capitalize">Retailer's Guide</h3>
                        <p>Developing a comprehensive logistics strategy ahead of time to prepare for peak seasons can go a long way toward navigating the turmoil and reducing service risk. Retailers may take use of...</p>
                        <p><a href="<?= base_url('services/retailers-guide') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-car"></span></div>
                    <div>
                        <h3 class="text-capitalize">Transpoprt Logistics</h3>
                        <p>Our transportation company provides a broad range of services to meet our clients' logistics requirements. It has the resources and knowledge to address any logistical difficulty... </p>
                        <p><a href="<?= base_url('services/transport-logistics-companies') ?>">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="site-section border-bottom">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Testimonials</h2>
            </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="assets/images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                        <p>John Smith</p>
                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="assets/images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                        <p>Christine Aguilar</p>
                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="assets/images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                        <p>Robert Spears</p>
                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="assets/images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                        <p>Bruce Rogers</p>
                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Our Blog</h2>
                <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
            </div>
        </div>
        <div class="row mb-3 align-items-stretch">
            <?php $count = 1;
            foreach ($posts as $post) {
                if ($count >= 3) continue;
            ?>
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="<?= base_url('upload/blogs/' . $post['coverimg']) ?>" height="540px" width="100%" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="<?= base_url('blog/' . $post['postid']) ?>"><?= $post['title'] ?></a></h2>
                        <div class="meta mb-4"><?= ucwords($post['createdby']) ?> <span class="mx-2">&bullet;</span> <?= date('M d, Y', strtotime($post['createddatetime'])) ?> <span class="mx-2"></div>
                        <p class="blogcontent"><?= strip_tags($post['content'])  ?></p>
                    </div>
                </div>
            <?php $count++;
            } ?>
        </div>
    </div>
</div>

<div class="site-section border-top">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="mb-5 text-black">Try Our Services</h2>
                <p class="mb-0"><a href="#quotation" class="btn btn-primary py-3 px-5 text-white">Get Started</a></p>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('inc/footer.php') ?>