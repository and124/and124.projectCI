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
<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
        Tamabah Mahasiswa
</button>
<h4>DATA MAHASISWA</h4> 
<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIS</th>
            <th>FOTO</th>
            <th>NOMOR TELEPON</th>
            <th>ALAMAT</th>
            <th>JURUSAN</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($siswa as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nama</td>
                <td>$row->nis</td>
                <td><img src = '".base_url()."uploads/siswa/$row->foto' width = '40px' ></td> 
                <td>$row->no_hp_ortu</td>
                <td>$row->alamat</td>
                <td>$row->kelas</td>    
                <td>" . anchor('Admin/Siswa/edit/' . $row->nis, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Siswa/Hapus/' . $row->nis, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/Siswa/add');  ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MAHASISWA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">Nis</label>
                        <input type="text" name="nis" class="form-control" required=""  placeholder="nis">
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
                        <label for="exampleInputEmail1">No Telepon</label>
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
                        <label for="exampleInputEmail1">Foto</label>
                        <input type="file" name="userfile" class="form-control" required=""  placeholder="">
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

