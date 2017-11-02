<h1>Test controller neljäs metodi</h1>
<p>data modelista:</p>
<?php print_r($oppilaat); ?>
<p>
  Ja forEach tulos:
</p>
<?php
  foreach ($oppilaat as $rivi) {
    echo $rivi['en'].' '.$rivi['sn'].'<br>';
  }
 ?>
