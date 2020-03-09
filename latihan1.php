<?php
$A=123;//variable global
funtcion Test(){
$A="Test";//variable local
echo"Nilai A dalam fungsi=$A\n";
}
Test();
echo"Nilai A luar fungsi=$A\n";
?>