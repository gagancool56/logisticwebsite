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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Blogs
                        </h3>
                        <a href="<?= base_url('admin/blogs') ?>" class="px-5 float-right btn btn-info btn-sm">View Posts</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= base_url('admin/create-blogs') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title here">
                            </div>
                            <div class="form-group">
                                <label for="title">Cover Image (Dimension:750X350  Max size - 1.5 mb)</label>
                                <input type="file" class="form-control" id="coverimg" name="coverimg" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="summernote" name="content" style="display: none;">Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;</textarea>
                            </div>
                            <button type="reset" class="btn btn-info px-5">Reset</button>
                            <button type="submit" class="btn btn-info px-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
</div>
<?php $this->load->view('admin/inc/footer') ?>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()
    })
</script>