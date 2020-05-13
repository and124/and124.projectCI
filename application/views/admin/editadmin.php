<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit Profil <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open_multipart('Auth/edit', 'class="form-horizontal"');
      
       
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="nama">Nama</label>
                <div class="col-md-9">
                <input id="email" name="id" value="<?php echo $this->session->userdata('id')?>" type="hidden" placeholder="" class="form-control">
                    <input id="email" name="nama" value="<?php echo $this->session->userdata('nama')?>" type="text" placeholder="nama" class="form-control">
                </div>
            </div>

            <center>
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">SUBMIT</button>
                    <?php echo anchor('Auth/profil', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
            </center>
        </fieldset>
       
        <?php echo form_close(); ?>
    </div>