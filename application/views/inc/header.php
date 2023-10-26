<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logistics &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/flaticon/font/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-3" role="banner">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h4 class="mb-0"><a href="<?= base_url() ?>" class="text-white mb-0 font-weight-bold"><?= BUSINESSNAME ?></a></h4>
                    </div>
                    <div class="col-md-8 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li class="<?= $url == '' ? 'active' : '' ?>"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="<?= $url == 'about' ? 'active' : '' ?>"><a href="<?= base_url('about') ?>">About Us</a></li>
                                <li class="has-children <?= $url == 'services' ? 'active' : '' ?>">
                                    <a href="<?= ('services') ?>">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('services/freight-shipping') ?>">Freight Shipping</a></li>
                                        <li><a href="<?= base_url('services/cross-border-logistics') ?>">Cross Border Logistics</a></li>
                                        <li><a href="<?= base_url('services/fulfillment-of-ecommerce') ?>">Fulfillment Of Ecommerce</a></li>
                                        <li><a href="<?= base_url('services/monitored-transportation') ?>">Monitored Transportation</a></li>
                                        <li><a href="<?= base_url('services/retailers-guide') ?>">Retailer's Guide</a></li>
                                        <li><a href="<?= base_url('services/saas-tms') ?>">SaaS TMS</a></li>
                                        <li><a href="<?= base_url('services/services-for-capacity') ?>">Services for Capacity</a></li>
                                        <li><a href="<?= base_url('services/supply-chain-optimization') ?>">Supply Chain Optimization</a></li>
                                        <li><a href="<?= base_url('services/transport-logistics-companies') ?>">Transport Logistics Companies</a></li>
                                        <li><a href="<?= base_url('services/warehouse-maufacturing-optimization') ?>">Warehouse and Manufacturing Optimization</a></li>
                                        <li><a href="<?= base_url('services/warehouse-and-distribution') ?>">Warehouse and Distribution</a></li>
                                    </ul>
                                </li>
                                <li class="<?= $url == 'blog' ? 'active' : '' ?>"><a href="<?= base_url('blog') ?>">Blog</a></li>
                                <li class="<?= $url == 'contact' ? 'active' : '' ?>"><a href="<?= base_url('contact') ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                </div>

            </div>
    </div>

    </header>