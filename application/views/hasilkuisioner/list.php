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
</button>
<h4>HASIL KUISIONER</h4>
<p><a href="<?php echo base_url();?>Admin/laporanpdf" class="btn btn-primary btn-md pull-right" target="_blank"><i class='fa fa-print'></i> Cetak</a></p>     
<table id="example" class="table table-striped table-responsive table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Kehadiran</th>
            <th>Perkuliahan</th>
            <th>Materi Perkuliahan</th>
            <th>Sistem Evaluasi</th>
            <th>Saran</th>
            <th>Tanggal</th>
            <th>AKSI EDIT</th>
            <th>AKSI HAPUS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($hasil_kuis as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nik</td>
                <td>$row->nama</td>
                <td>$row->total_kehad</td>
                <td>$row->total_perku</td>
                <td>$row->total_marku</td>
                <td>$row->total_silu</td>
                <td>$row->ket</td>
                <td>$row->tanggal</td>
                <td>" . anchor('Admin/Hasilkuisioner/edit/' . $row->id_hasil, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Hasilkuisioner/Hapus/' . $row->id_hasil, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
