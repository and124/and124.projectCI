<?php  
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('Hapus')) {
    
    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('Hapus');
    echo "</div>";
}elseif ($this->session->flashdata('edit')) {
    
    echo "<div class='alert alert-danger bg-danger'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
}
?>

<div class="panel panel-default">
    <div class="panel-heading">
    <span class="pull-right clickable panel-toggle panel-button-tab-center">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
    
    <center> 
    <div class="col-sm-9">
    <h4>DATA PROFIL</h4> 
    </div>
    <div class="col-sm-9">
   <?php echo "<img src=" . base_url() . "uploads/admin/kk.png width = '150px' alt=''>";?>
   </div>

    
    <div class="col-sm-9">
           <?php echo $this->session->userdata('nama')?>
    </div>
     
    
         <tr>
            <?php echo anchor('Auth/edit', 'EDIT PROFIL', array('class' => "btn btn-danger btn-md pull-righ")) ?>
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
                                <em class="fa fa-xs fa-user color-white">&nbsp;Ganti Password</em>
                            </button>
            </tr>
        </center>
  </div>
  </div>
  </div>

