<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit Mata Kuliah  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open('Admin/Matkul/edit', 'class="form-horizontal"');
        echo form_hidden('id_matkul', $matkul['id_matkul']);
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="kodematkul">Kode Mata Kuliah</label>
                <div class="col-md-9">
                    <input id="email" name="kodematkul" value="<?php echo $matkul['kodematkul'] ?>" type="text" placeholder="" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="nama_matkul">Nama Mata Kuliah </label>
                <div class="col-md-9">
                    <input id="email" name="nama_matkul" value="<?php echo $matkul['nama_matkul'] ?>" type="text" placeholder="nama_matkul" class="form-control">
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">Submit</button>
                    <?php echo anchor('Admin/Matkul', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>