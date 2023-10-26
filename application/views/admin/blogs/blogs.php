<?php $this->load->view('admin/inc/header') ?>
<?php $this->load->view('admin/inc/topbar') ?>
<?php $this->load->view('admin/inc/sidebar') ?>
<div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blogs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
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
                        <h3 class="card-title">List Of All Posts</h3>
                        <a href="<?= base_url('admin/create-blogs') ?>" class="px-5 float-right btn btn-info btn-sm">Create Post</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Post ID</th>
                                    <th>Cover Image</th>
                                    <th>Title</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sr = 1;
                                foreach ($posts as $post) { ?>
                                    <tr>
                                        <td><?= $sr++ ?></td>
                                        <td><?= $post['postid'] ?></td>
                                        <td><img src="<?= base_url('upload/blogs/' . $post['coverimg']) ?>" height="50px" alt=""></td>
                                        <td><?= $post['title'] ?></td>
                                        <td><?= $post['createdby'] ?></td>
                                        <td><?= date('d-m-y H:i:s a', strtotime($post['createddatetime'])) ?></td>
                                        <td><?= $post['status'] ?></td>
                                        <td><a href="<?= base_url('admin/revise-blog/' . $post['postid']) ?>" class="btn text-success"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Post ID</th>
                                    <th>Title</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Active</th>
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