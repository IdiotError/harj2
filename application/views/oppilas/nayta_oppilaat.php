<h1>Opiskelijat</h1>
<a href="<?php echo site_url('oppilas/lisays_lomake')?> "><button type="button" class="btn btn-primary">Lisää opiskelija</button></a>
<table class="table table-bordered table-striped">
  <tr>
    <th>etunimi</th><th>sukunimi</th><th>syntymävuosi</th><th>poista</th>
  </tr>
  <?php
   foreach ($oppilaat as $r) {
     echo '<tr>';
     echo '<td>'.$r['etunimi'].'</td>';
     echo '<td>'.$r['sukunimi'].'</td>';
     echo '<td>'.$r['syntymavuosi'].'</td>';
     echo '<td><button class="btn btn-danger"><a href="'.site_url('oppilas/poista_oppilas').'/'.$r['idOpiskelija'].'">Exterminate</a></button></td>';
     echo '</tr>';
   }
   ?>
</table>
