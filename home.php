<a href="index.html">HOME</a>
<?php

echo"<h1>TAMPILAN KEBAWAH (KOLOM)</h1>";
$i = 1;
do {
    echo" $i ";
    $i+=2;
    echo"</br>";
} while ($i <= 20);

echo "<br>";
echo "<br>";

echo "<h1>TAMPILAN BARIS (KESAMPING)</h1>";

$i = 1;
do {
    echo" $i ";
    $i+=2;
} while ($i <= 20);


?>