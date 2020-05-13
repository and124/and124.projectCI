<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STT MANDALA </title>
        <link rel="shortcut icon" href="<?=base_url()?>uploads/mandala.jpg" type="image/x-icon">
        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body style="background: #ffffff url(uploads/sttmandala.jpg) left bottom fixed;" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1007.81px; height: 672px; max-width: none; z-index: -999999; left: -248.905px; top: 0px;">
        <div class="row" style="margin-top: 30px;">
            
              <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                  <div  clas="panel-body"class="login-panel"style="text-align: center" style="object-position: center"> <img src =" http://localhost/mandala/uploads/mandala.jpg" ><P style="text-align: center" ><B> LOGIN</B></P></div>
                 
               <div class="panel-body">
                        <?php  echo form_open('Auth/chek_login') ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                 
                                <button name=submit class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
                        <center>
                            <div class="registration" style="margin-top: 35px">
                        Belum mempunyai akun ?<br/>
                    <a data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
                        <!-- <a href="daftar/registrasi" style="cursor: pointer;"> -->
                            Buat akun baru
                        </a>
                        </center>
                           </div>
                             
            <?php echo form_close(); ?>
        </div>
                        <?php echo form_close();  ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/Siswa/add');  ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">Nis</label>
                        <input type="number" name="nis" class="form-control" required=""  placeholder="nis">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">Nama </label>
                        <input type="text" name="nama" class="form-control" required=""  placeholder="nama">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required=""  placeholder="alamat">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">No Telapan</label>
                        <input type="text" name="no_hp_ortu" class="form-control" required=""  placeholder="no hp">
                 </div>
                
                 <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <select name="kelas" class="form-control">
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
                <div class="form-group">
                        <label for="exampleInputEmail1">foto</label>
                        <input type="file" name="userfile" class="form-control" required=""  placeholder="no hp">
                 </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
      <?php echo form_close();  ?>
    </div>
</div>

        <script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
