<div class="panel panel-default">
    <div class="panel-heading">
         STT MANDALA KUISIONER <span class="pull-right clickable panel-toggle panel-button-tab-center">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
    <?php
        echo form_open('Admin/teskuisioner/add', 'class="form-horizontal"');
 
        ?>
    <div class="form-group">
            <label class="control-label col-sm-3" for="nis">NIS*</label>
            <div class="col-sm-9">
           <?php echo $this->session->userdata('nis')?>
            </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-sm-3" for="nama">Nama Dosen*</label>
            <div class="col-sm-9">
      
              <?php echo cmb_dinamis('nama', 'guru', 'nama', 'nama', NULL, "id='nik' onChange='isi_otomatis()'") ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="nama_matkul">Mata Kuliah*</label>
            <div class="col-sm-9">
            <?php echo cmb_dinamis('nama_matkul', 'matkul', 'nama_matkul', 'nama_matkul', NULL, "id='id_matkul' onChange='isi_otomatis()'") ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="tanggal">Tanggal*</label>
            <div class="col-sm-9">
            <?php echo date("Y-m-d")?>
            </div>

        <center>
            <tr>
                <td>&nbsp;</td>
                <button type="submit" name="submit" class="btn btn-info btn-md ">KUISIONER</button>
            </tr>
        </center>
            </table>
</form>

                    <div>
        </fieldset>
        <?php echo form_close(); ?>

    </div>