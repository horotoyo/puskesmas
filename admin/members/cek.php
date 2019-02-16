<?php

//input index family DEPAN
$a 		= 1;

$sql    = "SELECT * FROM jabatan";
$result = mysqli_query($konek, $sql);

if (mysqli_num_rows($result)>0) {
for ($i=0; $i<20 ; $i++) { 
	echo str_pad($a++, 3, '0', STR_PAD_LEFT)."<br>";
}
} else {
	echo "error";
}

?>