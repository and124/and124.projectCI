<div class="panel panel-default">
    <div class="panel-heading">
         STT MANDALA KUISIONER <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
<form action="../hitung" method="POST">

    <table  class="table table-striped table-responsive table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Soal Kuisioner</th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($kuisioner as $row => $key) {
            // print_r($row);
            echo "<tr>
                <td>$no</td>
                <td>$key->soalkuisioner</td>
                <td><input required type='radio' name='jawaban[".$row."]' value='A-".$key->paket."' />$key->A</td>
                <td><input required type='radio' name='jawaban[".$row."]' value='B-".$key->paket."' />$key->B</td>
                <td><input required type='radio' name='jawaban[".$row."]' value='C-".$key->paket."' />$key->C</td>
                <td><input required type='radio' name='jawaban[".$row."]' value='D-".$key->paket."' />$key->D</td>
                <td><input required type='radio' name='jawaban[".$row."]' value='E-".$key->paket."' />$key->E</td> 
               
            </tr>";

            $no++;
        }
        
        ?>

    </tbody>
</table>   
            <input type="hidden" name="nik" value="<?php echo $_GET['nik']; ?>">
            
            <label>Saran-saran :</label>
                     <div class="col-md-9" >
                        <textarea class="texteditor"  id="message" name="ket" placeholder="Please enter your message here..." rows="5"></textarea>
                     </div>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Jawaban" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
            </table>

                    <div>
        </fieldset>
</form>

    </div>