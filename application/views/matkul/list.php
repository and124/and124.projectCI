<?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('Hapus')) {

    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('Hapus');
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {

    echo "<div class='alert alert-danger bg-danger'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
}
?>


<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
    Tambah Mata Kuliah
</button>
<h4>MATA KULIAH </h4> 
<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah </th>
            <th>Nama Mata Kuliah</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($matkul as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->kodematkul</td>
                <td>$row->nama_matkul</td> 
                <td>" . anchor('Admin/Matkul/edit/' . $row->id_matkul, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Matkul/Hapus/' . $row->id_matkul, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/Matkul/add'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH MATA KULIAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group"><label>Kode Mata Kuliah</label>
                    <input type="text" name="kodematkul" class="form-control">
                </div>
                 <div class="form-group"><label>Nama Mata Kuliah</label>
                    <input type="text" name="nama_matkul" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

