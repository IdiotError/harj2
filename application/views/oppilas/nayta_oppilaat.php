<h1>opiskelijat</h1>
<table border="1">
  <tr>
    <th>etunimi</th><th>sukunimi</th><th>syntymävuosi</th><th>poista</th>
  </tr>
  <?php
   foreach ($oppilaat as $r) {
     echo '<tr>';
     echo '<td>'.$r['etunimi'].'</td>';
     echo '<td>'.$r['sukunimi'].'</td>';
     echo '<td>'.$r['syntymavuosi'].'</td>';
     echo '<td><a href="'.site_url('oppilas/poista_oppilas').'/'.$r['idOpiskelija'].'">Exterminate</a></td>';
     echo '</tr>';
   }
   ?>
</table>
