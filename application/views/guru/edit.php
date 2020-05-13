<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit DOSEN  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open_multipart('Admin/Guru/edit', 'class="form-horizontal"');
        echo form_hidden('nik', $guru['nik']);
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="nama">Nama Dosen</label>
                <div class="col-md-9">
                    <input id="email" name="nama" value="<?php echo $guru['nama'] ?>" type="text" placeholder="nama" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="alamat">Alamat Dosen</label>
                <div class="col-md-9">
                    <input id="email" name="alamat" value="<?php echo $guru['alamat'] ?>" type="text" placeholder="alamat" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="telepon">Telepon </label>
                <div class="col-md-9">
                    <input id="email" name="telepon" value="<?php echo $guru['telepon'] ?>" type="text" placeholder="telepon" class="form-control">
                </div>
            </div>
            <div class="form-group">
                        <label class="col-md-3 control-label" >FOTO</label>
                        <div class="col-md-9">
                        <input type="file" name="userfile" class="form-control">
                        </div>
                 </div>
            <center>
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">Submit</button>
                    <?php echo anchor('Admin/Guru', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
            </center>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
    </div>