<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$length = strlen($str);

for ($i = 0; $i < $length; $i++) {
    if (in_array($str[$i], $vowels)) {
        echo $str[$i];
    }
}
?>