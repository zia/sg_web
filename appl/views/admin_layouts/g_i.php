<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <?php if($this->session->tempdata('error')){ ?>
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning !</strong> <?=$this->session->tempdata('error')?>
                    </div>
                <?php } ?>
                <h1 class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add <small>(Gallery Info)</small>
                        </div>
                        <div class="col-sm-6" align="right">
                            
                        </div>
                    </div>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?=base_url();?>/admin/xQzMe">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Forms
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <?php if($this->session->flashdata('error')){?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning !</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
            </div>
        </div>

        <?php } ?>

        <?php if($this->session->flashdata('success')){?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
            </div>
        </div>

        <?php } ?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">

                <?php
                    $attributes = array('role' => 'form');
                    echo form_open_multipart('admin/add_g_i', $attributes);
                ?>

                    <div class="form-group">
                        <label>Heading *</label>
                        <input type="text" name="title" value="" class="form-control"  placeholder="Enter text" required="required">
                        <p class="help-block">Introduction Heading For 'Gallery' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Sections</label>
                        <select class="form-control" name="section">
                            <option>Home</option>
                            <option>DABIRUDDIN SPINNING MILLS LTD.</option>
                            <option>TAMIJUDDIN TEXTILE MILLS LTD.</option>
                            <option>BSB SPINNING MILLS LTD.</option>
                        </select>
                        <p class="help-block">Select Heading For Sections.</p>
                    </div>

                    <div class="form-group">
                        <label>Content *</label>
                        <textarea name="subtitle" id="cont" class="form-control" rows="10"  placeholder="Enter text"></textarea>
                        <p class="help-block">Introduction Tagline For 'Gallery' section.</p>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                <?php
                    echo form_close();
                ?>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <?=br(6)?>
                <img class="img-responsive img-thumbnail" style="opacity:0.5;" src="<?=base_url()?>assets/images/q.jpg" alt="Logo">
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->