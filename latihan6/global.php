<?php  
// variabel scope / lingkup variabel
$x = 2013;

function tampilx() {
    global $x;
    echo $x;
}

tampilx();

?>