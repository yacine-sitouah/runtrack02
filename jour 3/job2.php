<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$length = strlen($str);

for ($i = 0; $i < $length; $i += 2) {
    echo $str[$i];
}
?>