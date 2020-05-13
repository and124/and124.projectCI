<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit Hasil Kuisioner  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
         <?php
        echo form_open('Admin/Hasilkuisioner/edit', 'class="form-horizontal"');
        echo form_hidden('id_hasil', $hasil_kuis['id_hasil']);
        ?>
        <fieldset>
            <!-- Name input-->
           
        <div class="form-group">
            <label class="control-label col-sm-3" for="total_kehad">Edit Total Kehadiran*</label>
            <div class="col-sm-9">
                 <input id="email" name="total_kehad" value="<?php echo $hasil_kuis['total_kehad'] ?>" type="text"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="total_perku">Edit Total Perkuliahan*</label>
            <div class="col-sm-9">
                 <input id="email" name="total_perku" value="<?php echo $hasil_kuis['total_perku'] ?>" type="text"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="total_marku">Edit Total Materi Perkuliahan*</label>
            <div class="col-sm-9">
                 <input id="email" name="total_marku" value="<?php echo $hasil_kuis['total_marku'] ?>" type="text"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="total_silu">Edit Sistem Evaluasi*</label>
            <div class="col-sm-9">
                 <input id="email" name="total_silu" value="<?php echo $hasil_kuis['total_silu'] ?>" type="text"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="ket">Keterangan*</label>
            <div class="col-sm-9">
                 <input id="email" name="ket" value="<?php echo $hasil_kuis['ket'] ?>" type="text"  class="form-control">
            </div>
        </div>  
        <div>Keterangan : * = Harus diisi</div> 
      
       <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">Submit</button>
                    <?php echo anchor('Admin/Hasilkuisioner', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
    </div>