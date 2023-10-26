<?php $this->load->view('admin/inc/header') ?>
<?php $this->load->view('admin/inc/topbar') ?>
<?php $this->load->view('admin/inc/sidebar') ?>
<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Career</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Career</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success auto-remove"><?= $this->session->flashdata('success') ?></div>
        <?php } elseif ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger auto-remove"><?= $this->session->flashdata('error') ?></div>
        <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Of Job Applied</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Applied At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sr = 1;
                                foreach ($career as $c) { ?>
                                    <tr>
                                        <td><?= $sr++ ?></td>
                                        <td><?= $c['name'] ?></td>
                                        <td><?= $c['phone'] ?></td>
                                        <td><?= $c['email'] ?></td>
                                        <td><?= $c['position'] ?></td>
                                        <td><?= date('d-M-y h:i:s a', strtotime($c['createddatetime'])) ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="<?= base_url('upload/career/' . $c['resume']) ?>" class="btn text-info"><i class="fa fa-eye"></i></a>
                                                <a href="<?= base_url('upload/career/' . $c['resume']) ?>" class="btn text-success" download="<?= $c['name'] . '_resume' ?>"><i class="fa fa-download"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Applied At</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
</div>
<?php $this->load->view('admin/inc/footer') ?>