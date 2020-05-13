<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit Profil <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open_multipart('Admin/Siswa/gantiprofil', 'class="form-horizontal"');
       $data =array(
        'nama'         => $this->input->post('nama'),
        'alamat'       => $this->input->post('alamat'),
        'no_hp_ortu'   => $this->input->post('no_hp_ortu'),
        'kelas'        => $this->input->post('kelas'),
        
        );
    
    $nis= $this->input->post('nis');
    $this->db->where('nis',$nis);
   
       
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="nama">Nama</label>
                <div class="col-md-9">
                <input id="email" name="id" value="<?php echo $this->session->userdata('nis')?>" type="hidden" placeholder="" class="form-control">
                    <input id="email" name="nama" value="<?php echo $this->session->userdata('nama')?>" type="text" placeholder="nama" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="alamat">Alamat</label>
                <div class="col-md-9">
                    <input id="email" name="alamat" value="<?php echo $this->session->userdata('alamat')?>" type="text" placeholder="alamat" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="kelas">Jurusan</label>
                <div class="col-md-9">
                     <select name="kelas" class="form-control" value="<?php echo $this->session->userdata('kelas')?>">
                     <option value="" selected>-- Pilih Jurusan --</option>
                    <option value="TI S1" <?php echo set_select('jurusan', 'TI S1', FALSE)?>>TI S1</option>
                    <option value="TI D3" <?php echo set_select('jurusan', 'TI D3', FALSE)?>>TI D3</option>
                    <option value="TM S1" <?php echo set_select('jurusan', 'TM S1', FALSE)?>>TM S1</option>
                    <option value="TM D3" <?php echo set_select('jurusan', 'TM D3', FALSE)?>>TM D3</option>
                    <option value="TSis S1" <?php echo set_select('jurusan', 'TSis S1', FALSE)?>>TSis S1</option>
                    <option value="TM S1" <?php echo set_select('jurusan', 'TM S1', FALSE)?>>TM S1</option>
                    <option value="TE D3" <?php echo set_select('jurusan', 'TE D3', FALSE)?>>TE D3</option>
                        </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="nohp">No Telepon</label>
                <div class="col-md-9">
                    <input id="email" name="no_hp_ortu" value="<?php echo $this->session->userdata('no_hp_ortu')?>" type="text" placeholder="no_hp" class="form-control">
                </div>
            </div>
            <div class="form-group">
            <label class="col-md-3 control-label" for="exampleInputEmail1">FOTO</label>
                <div class="col-md-9">
                              <input type="file" name="userfile" class="form-control" required=""  placeholder="">
                 </div>
            <center>
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">SUBMIT</button>
                    <?php echo anchor('Admin/Siswa/ganti', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
            </center>
        </fieldset>
       
        <?php echo form_close(); ?>
    </div>