<?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {

    echo "<div class='alert alert-warning'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {

    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('hapus');
    echo "</div>";
}
?>
<h4>SOAL KUISIONER</h4> 
<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
    Tambah Soal
</button>
<table id="example" class="table table-striped table-responsive table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Soal Kuisioner</th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            <th>Paket</th>
            <th>AKSI EDIT</th>
            <th>AKSI HAPUS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($kuisioner as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->soalkuisioner</td>
                <td>$row->A</td>
                <td>$row->B</td>
                <td>$row->C</td>
                <td>$row->D</td>
                <td>$row->E</td>
                <td>$row->paket</td>
                <td>" . anchor('Admin/kuisioner/edit/' . $row->idkuisioner, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/kuisioner/Hapus/' . $row->idkuisioner, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/kuisioner/add'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" >Tambah Soal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">No</label>
                        <input type="number" name="idkuisioner" class="form-control" required=""  placeholder="number">
                    </div>

                <div class="form-group">
                        <label for="exampleInputEmail1">Soal Kuisioner</label>
                        <input type="text" name="soalkuisioner" class="form-control" required=""  placeholder="soalkuisioner">
                    </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Jawaban A</label>
                        <input type="text" name="A" class="form-control" required=""  placeholder="A">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">Jawaban B</label>
                        <input type="text" name="B" class="form-control" required=""  placeholder="B">
                    </div>  
                <div class="form-group">
                        <label for="exampleInputEmail1">Jawaban C</label>
                        <input type="text" name="C" class="form-control" required=""  placeholder="C">
                    </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Jawaban D</label>
                        <input type="text" name="D" class="form-control" required=""  placeholder="D">
                    </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Jawaban E</label>
                        <input type="text" name="E" class="form-control" required=""  placeholder="E">
                    </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Paket</label>
                <?php echo cmb_dinamis('id_paket','paket','id_paket','id_paket') ?>
                    </div>    
       
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>