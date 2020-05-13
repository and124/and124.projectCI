<div class="panel panel-default">
     <?php echo form_open_multipart('Admin/Kuisioner/lanjut');  ?>
    <div class="panel-heading">
    <h4>ANGKET EVALUASI PROSES PEMBELAJARAN</h4> 
      <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
                <div class="col-md-6"> 
                <input type="hidden" name="jurusan" value="<?php echo (!empty($Kuisioner['jurusan']))?$_POST['jurusan']:set_value('jurusan') ?>">
                 <input type="hidden" name="matakuliah" value="<?php echo (!empty($Kuisioner['matakuliah']))?$_POST['matakuliah']:set_value('matakuliah') ?>">
                  <input type="hidden" name="semeter" value="<?php echo (!empty($Kuisioner['semeter']))?$_POST['semester']:set_value('semeter') ?>">
                   <input type="hidden" name="tahun" value="<?php echo (!empty($Kuisioner['tahun']))?$_POST['tahun']:set_value('tahun') ?>">
                    <input type="hidden" name="sks" value="<?php echo (!empty($Kuisioner['sks']))?$_POST['sks']:set_value('sks') ?>">
                    
                   <h4>KEHADIRAN </h4>
                    <label for="kehadiran">1. Kehadiran dosen untuk menjalankan kewajiban mengajar minimal 12 kali*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="kehadiran1" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="kehadiran1" value="4"  required> Baik </label>
                                <label><input type="radio" name="kehadiran1" value="3"  required> Sedang</label>
                                <label><input type="radio" name="kehadiran1" value="2"  required> Kurang</label>
                                <label><input type="radio" name="kehadiran1" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                    <label for="kehadiran">2. Waktu tatap muka / perkuliahan sesuai dengan waktu yang telah ditetapkan (1 sks= 50 menit)*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="kehadiran2" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="kehadiran2" value="4"  required> Baik </label>
                                <label><input type="radio" name="kehadiran2" value="3"  required> Sedang</label>
                                <label><input type="radio" name="kehadiran2" value="2"  required> Kurang</label>
                                <label><input type="radio" name="kehadiran2" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                         <label for="kehadiran">3. Waktu kuliah dimanfaatkan dengn efisien oleh dosen*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="kehadiran3" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="kehadiran3" value="4"  required> Baik </label>
                                <label><input type="radio" name="kehadiran3" value="3"  required> Sedang</label>
                                <label><input type="radio" name="kehadiran3" value="2"  required> Kurang</label>
                                <label><input type="radio" name="kehadiran3" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                      
                        <h4>PERKULIAHAN</h4>
                         <label for="perkuliahan">1. Kesesuaian materi kuliah yang diberikan dosen dengan materi di SAP (Acara Perkuliahan)*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="perkuliahan1" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="perkuliahan1" value="4"  required> Baik </label>
                                <label><input type="radio" name="perkuliahan1" value="3"  required> Sedang</label>
                                <label><input type="radio" name="perkuliahan1" value="2"  required> Kurang</label>
                                <label><input type="radio" name="perkuliahan1" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                         <label for="perkuliahan">2. Handout yang dibuat / diberikan oleh dosen*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="perkuliahan2" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="perkuliahan2" value="4"  required> Baik </label>
                                <label><input type="radio" name="perkuliahan2" value="3"  required> Sedang</label>
                                <label><input type="radio" name="perkuliahan2" value="2"  required> Kurang</label>
                                <label><input type="radio" name="perkuliahan2" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                          <label for="perkuliahan">3. Kejelasan dosen dalam penyampaian materi perkuliahan*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="perkuliahan3" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="perkuliahan3" value="4"  required> Baik </label>
                                <label><input type="radio" name="perkuliahan3" value="3"  required> Sedang</label>
                                <label><input type="radio" name="perkuliahan3" value="2"  required> Kurang</label>
                                <label><input type="radio" name="perkuliahan3" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                          <label for="perkuliahan">4. Cara / teknik menyampaikan materi kuliah*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="perkuliahan4" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="perkuliahan4" value="4"  required> Baik </label>
                                <label><input type="radio" name="perkuliahan4" value="3"  required> Sedang</label>
                                <label><input type="radio" name="perkuliahan4" value="2"  required> Kurang</label>
                                <label><input type="radio" name="perkuliahan4" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                          <label for="perkuliahan">5. Pemberian kesempatan dan motivasi unruk bertanya / dialog*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="perkuliahan5" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="perkuliahan5" value="4"  required> Baik </label>
                                <label><input type="radio" name="perkuliahan5" value="3"  required> Sedang</label>
                                <label><input type="radio" name="perkuliahan5" value="2"  required> Kurang</label>
                                <label><input type="radio" name="perkuliahan5" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                          <label for="perkuliahan">6. Pemberian contoh-contoh soal dan penyelesaiannya*</label> 
                        <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="perkuliahan6" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="perkuliahan6" value="4"  required> Baik </label>
                                <label><input type="radio" name="perkuliahan6" value="3"  required> Sedang</label>
                                <label><input type="radio" name="perkuliahan6" value="2"  required> Kurang</label>
                                <label><input type="radio" name="perkuliahan6" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                         <H4>MATERI PERKULIAHAN</H4>
                    <label for="materiperku">1. Materi yang diberikan berkaitan dengan manfaat untuk menguasai bidang ilmu serta mengikuti perkembangan teknologi*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="materiperku1" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="materiperku1" value="4"  required> Baik </label>
                                <label><input type="radio" name="materiperku1" value="3"  required> Sedang</label>
                                <label><input type="radio" name="materiperku1" value="2"  required> Kurang</label>
                                <label><input type="radio" name="materiperku1" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                        <label for="materiperku">2. Materi kuliah yang diberikan berkaitan dengan kemampuan dari mahasiswa yang diharapkan manfaat untuk memperluas wawasan pikiran*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="materiperku2" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="materiperku2" value="4"  required> Baik </label>
                                <label><input type="radio" name="materiperku2" value="3"  required> Sedang</label>
                                <label><input type="radio" name="materiperku2" value="2"  required> Kurang</label>
                                <label><input type="radio" name="materiperku2" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                        <label for="materiperku">3. Sistematika pemberian materi mudah dimengerti*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="materiperku3" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="materiperku3" value="4"  required> Baik </label>
                                <label><input type="radio" name="materiperku3" value="3"  required> Sedang</label>
                                <label><input type="radio" name="materiperku3" value="2"  required> Kurang</label>
                                <label><input type="radio" name="materiperku3" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>

                    <br> 
                    
                    </div> 
    
                <div class="col-md-6">
                      <label for="materiperku">4. Ketidak tumpang tindihan materi yang diberikan dengan materi kuliah yang lain*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="materiperku4" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="materiperku4" value="4"  required> Baik </label>
                                <label><input type="radio" name="materiperku4" value="3"  required> Sedang</label>
                                <label><input type="radio" name="materiperku4" value="2"  required> Kurang</label>
                                <label><input type="radio" name="materiperku4" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                          <label for="materiperku">5. Buku wajib dan buku anjuran terbitan / edisi terbaru*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="materiperku5" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="materiperku5" value="4"  required> Baik </label>
                                <label><input type="radio" name="materiperku5" value="3"  required> Sedang</label>
                                <label><input type="radio" name="materiperku5" value="2"  required> Kurang</label>
                                <label><input type="radio" name="materiperku5" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                          <label for="materiperku">6. Dosen memberikan materi diluar materi pembelajaran yang ditetapkan*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="materiperku6" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="materiperku6" value="4"  required> Baik </label>
                                <label><input type="radio" name="materiperku6" value="3"  required> Sedang</label>
                                <label><input type="radio" name="materiperku6" value="2"  required> Kurang</label>
                                <label><input type="radio" name="materiperku6" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                        <h4>SISTEM EVALUASI</h4>
                          <label for="sistemevaluasi">1. Jumlah tugas yang diberikan*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="sistemevaluasi1" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="sistemevaluasi1" value="4"  required> Baik </label>
                                <label><input type="radio" name="sistemevaluasi1" value="3"  required> Sedang</label>
                                <label><input type="radio" name="sistemevaluasi1" value="2"  required> Kurang</label>
                                <label><input type="radio" name="sistemevaluasi1" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                           <label for="sistemevaluasi">2. Bobot tugas yang diberikan*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="sistemevaluasi2" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="sistemevaluasi2" value="4"  required> Baik </label>
                                <label><input type="radio" name="sistemevaluasi2" value="3"  required> Sedang</label>
                                <label><input type="radio" name="sistemevaluasi2" value="2"  required> Kurang</label>
                                <label><input type="radio" name="sistemevaluasi2" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                           <label for="sistemevaluasi">3. Manfaat tugas untuk menguasai mata kuliah*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="sistemevaluasi3" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="sistemevaluasi3" value="4"  required> Baik </label>
                                <label><input type="radio" name="sistemevaluasi3" value="3"  required> Sedang</label>
                                <label><input type="radio" name="sistemevaluasi3" value="2"  required> Kurang</label>
                                <label><input type="radio" name="sistemevaluasi3" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                           <label for="sistemevaluasi">4. Bobot kesulitan soal UTS dan UAS*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="sistemevaluasi4" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="sistemevaluasi4" value="4"  required> Baik </label>
                                <label><input type="radio" name="sistemevaluasi4" value="3"  required> Sedang</label>
                                <label><input type="radio" name="sistemevaluasi4" value="2"  required> Kurang</label>
                                <label><input type="radio" name="sistemevaluasi4" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                           <label for="sistemevaluasi">5. Kesesuaian soal ujian dengan materi perkuliahan*</label>
                       <table class="table-kuisioner" border="0">
                            <tr>
                            <td>
                                <label><input type="radio" name="sistemevaluasi5" value="5"  required> Baik Seklai</label>
                                <label><input type="radio" name="sistemevaluasi5" value="4"  required> Baik </label>
                                <label><input type="radio" name="sistemevaluasi5" value="3"  required> Sedang</label>
                                <label><input type="radio" name="sistemevaluasi5" value="2"  required> Kurang</label>
                                <label><input type="radio" name="sistemevaluasi5" value="1"  required> Kurang Sekali</label>
                            </td>
                            </tr>
                        </table>
                </div>       
                <p>
                    <label>Saran-saran :</label>
                     <div class="col-md-6" >
                         <textarea class="texteditor"  id="message" name="keterangan" placeholder="Please enter your message here..." rows="5"></textarea>
                     </div>
                     <br>
                     <button class="btn btn-primary" type="submit"
                        name="submit" style="width: 120px;">kirim</button>

                </p>
                </div>
           </div>
            </div>
        </div> 

<script type="text/javascript">

    
</script>