<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplikasi Sederhana</title>
        <link rel="shortcut icon" href="<?=base_url()?>uploads/mandala.jpg" type="image/x-icon">
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <div  clas="panel-body"class="login-panel"style="text-align: center" style="object-position: center"> <img src =" http://localhost/mandala/uploads/kampus.PNG" ></div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                          
                        </li>
                    </ul>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <!-- update  -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('Admin/Siswa/update'); ?>
                    <div class="modal-body">
                        <div class="form-group"><label>Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group"><label>password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>


        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <?php
                    if ($this->session->userdata('level') == 1) {
                        echo "<img src=" . base_url() . "uploads/admin/kk.png class='img-responsive' alt=''>";
                    } elseif ($this->session->userdata('level') == 3) {
                        echo "<img src=" . base_url() . "uploads/siswa/" . $this->session->userdata('foto') . " class='img-responsive' alt=''>";
                    }elseif ($this->session->userdata('level') == 2) {
                        echo "<img src=" . base_url() . "uploads/guru/" . $this->session->userdata('foto') . " class='img-responsive' alt=''>";
                    }
                    ?>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?php echo $this->session->userdata('nama') ?></div>
                    <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <form role="search">
                <div class="form-group">
                </div>
            </form>
            <ul class="nav menu">
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <li><?php echo anchor('Admin/Dashboard', '<em class="fa fa-dashboard"></em>&nbsp;Dashboard'); ?></li>
                    <li><?php echo anchor('Admin/Siswa', '<em class="fa fa-calendar">&nbsp;</em>Data Mahasiswa'); ?></li>
                    <li><?php echo anchor('Admin/Guru', '<em class="fa fa-bar-chart">&nbsp;</em> Data Dosen'); ?></li>
                    <li><?php echo anchor('Admin/Matkul', '<em class="fa fa-calendar">&nbsp;</em> Data  Mata Kuliah'); ?></li>
                    <li><?php echo anchor('Admin/kuisioner', '<em class="fa fa-clone">&nbsp;</em>Soal Kuisioner'); ?></li>
                    <li><?php echo anchor('Admin/hasilkuisioner', '<em class="fa fa-calendar">&nbsp;</em>Hasil Kuisioner'); ?></li>
                    <li><?php echo anchor('Auth/profil', '<em class="fa fa-clone">&nbsp;</em>Profil'); ?></li>
                    <li><li><?php echo anchor('Admin/Logout', '<em class="fa fa-power-off">&nbsp;</em> Logout'); ?></li>
                <?php } elseif ($this->session->userdata('level') == 2) { ?>
                    <li><li><?php echo anchor('Admin/Logout', '<em class="fa fa-power-off">&nbsp;</em> Logout'); ?></li>

                <?php } elseif ($this->session->userdata('level') == 3) { ?>
                    <li><?php echo anchor('Admin/teskuisioner', '<em class="fa fa-clone">&nbsp;</em>Kuisioner'); ?></li>
                    <li><?php echo anchor('Admin/Siswa/ganti', '<em class="fa fa-clone">&nbsp;</em>Profil'); ?></li>
                    <li><li><?php echo anchor('Admin/Logout', '<em class="fa fa-power-off">&nbsp;</em> Logout'); ?></li>
                <?php } elseif ($this->session->userdata('level') == 0) 
                         redirect('Auth');
                    { ?>
 
                </ul>
            <?php } ?>
        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
              <div class="col-lg-12">




              <h1 class="page-header"></h1>
                </div>
            </div><!--/.row-->

            <div class="row">
               
            </div><!--/.row-->

            <div class="panel panel-container">
                <div class="row" style="margin-right: 20px;" >
                    <div style="margin-left: 40px;" >
                        <marquee type="scroll" ><B>SELAMAT DATANG DI APLIKASI KUISIONER SEDERHANA </B></marquee>
                    </div>
                </div><!--/.row-->
            </div>
            <!--/.row-->


            <div class="panel panel-default ">

                <?php
                if ($this->session->flashdata('Update')) {

                    echo "<div class='alert alert-warning bg-danger'>";
                    echo $this->session->flashdata('Update');
                    echo "</div>";
                }
                ?>

                <?php echo $contents ?>
            </div>
        </div><!--/.col-->

        <br>
        <div class="col-sm-12">
            <center> <p>Pewerd by Andri D3 Teknik Informatika</p></center>
        </div>
    </div><!--/.row-->
</div>  <!--/.main-->

<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart-data.js"></script>
<script src="<?php echo base_url() ?>assets/js/easypiechart.js"></script>
<script src="<?php echo base_url() ?>assets/js/easypiechart-data.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-1.12.4.js"></script>
<script src="<?php echo base_url() ?>assets/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
</body>
<script>
    $('textarea.texteditor').ckeditor();
</script>

<script type="text/javascript">
 
      $(function () {
        $("#example").DataTable({         
          "language": {
            "url":"<?php echo base_url()?>assets/indonesia.json",
            "sEmptyTable": "Tidak ada data di database"
        }
        });
      
      });
 
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };



</script>

</body>
</html>