<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit Mahasiswa  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open_multipart('Admin/Siswa/edit', 'class="form-horizontal"');
        echo form_hidden('nis', $siswa['nis']);
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="nama">Nama</label>
                <div class="col-md-9">
                    <input id="email" name="nama" value="<?php echo $siswa['nama'] ?>" type="text" placeholder="nama" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="alamat">Alamat</label>
                <div class="col-md-9">
                    <input id="email" name="alamat" value="<?php echo $siswa['alamat'] ?>" type="text" placeholder="alamat" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="kelas">Jurusan</label>
                <div class="col-md-9">
                     <select name="kelas" class="form-control" value="<?php echo $siswa['kelas'] ?>">
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
                    <input id="email" name="no_hp_ortu" value="<?php $siswa['no_hp_ortu'] ?>" type="text" placeholder="no_hp" class="form-control">
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
                    <?php echo anchor('Admin/Siswa', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
            </center>
        </fieldset>
        <?php echo form_close(); ?>
    </div>