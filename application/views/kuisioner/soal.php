<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit SOAL Kuisioner  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
         <?php
        echo form_open('Admin/kuisioner/edit', 'class="form-horizontal"');
        echo form_hidden('idkuisioner', $kuisioner['idkuisioner']);
        ?>
        <fieldset>
            <!-- Name input-->
        <div class="form-group">
            <label class="control-label col-sm-3" for="soalkuisioner">Soal Kuisioner*</label>
            <div class="col-sm-9">
                 <input id="email" name="soalkuisioner" value="<?php echo $kuisioner['soalkuisioner'] ?>" type="text" placeholder="soalkuisioner" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="soalkuisioner">A*</label>
            <div class="col-sm-9">
                <input id="email" name="A" value="<?php echo $kuisioner['A'] ?>" type="text" placeholder="A" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="B">B*</label>
            <div class="col-sm-9">
              <input id="email" name="B" value="<?php echo $kuisioner['B'] ?>" type="text" placeholder="B" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="soalkuisioner">C*</label>
            <div class="col-sm-9">
               <input id="email" name="C" value="<?php echo $kuisioner['C'] ?>" type="text" placeholder="C" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="D">D*</label>
            <div class="col-sm-9">
               <input id="email" name="D" value="<?php echo $kuisioner['D'] ?>" type="text" placeholder="D" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="E">E*</label>
            <div class="col-sm-9">
              <input id="email" name="E" value="<?php echo $kuisioner['E'] ?>" type="text" placeholder="E" class="form-control">
            </div>
        </div>        
        <div class="form-group">
            <label class="control-label col-sm-3" for="id_paket">Paket*</label>
            <div class="col-sm-9">
              <?php echo cmb_dinamis('id_paket','paket','id_paket','id_paket',$kuisioner['id_paket']) ?>
            </div>
        </div>  
        <div>Keterangan : * = Harus diisi</div> 
      
       <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">Submit</button>
                    <?php echo anchor('Admin/Kuisioner', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
    </div>