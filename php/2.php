<?php
    Echo "Hello World";
    ECHO "Hello World";
    EcHo "Hello World";
?>
<?php
$andi= "Andi";
echo $Andi; // Notice : Undefined variable: Andi
?>
<?php
    $i;
    $nama;
    $Umur;
    $_lokasi_memori;
    $ANGKA_MAKSIMUM;
?>
<?php
    $a='Saya Sedang belajar PHP';
    $b=5;

    print $a;
    echo$b;
?>
<?php
    $a=5;
    $b="Sedang belajar PHP $a";

    echo $b;
    // hasil: Saya Sedang belajar PHP 5
?>
<?php
    $umur=21;
    $harga=15000;
    $rugi=-500000;

    echo $umur; //21
    echo "<br />";
    echo $harga; //15000
    echo "<br />";
    echo $rugi; //-500000
?>
<?php
    $a=14;
    $b=16;
    $c= $a + $b;
    echo $c; // 30

    $d=$a * $b;
    echo $d; // 224
?>
<?php
    $angka_float1= 0.78;
    $angka_float2= 14.99;
    $angka_scientific1=0.314E1;
    $angka_scientific2=0.3365E-3;

    echo $angka_float1; // 0.78
    echo "<br />";
    echo $angka_float2; //14.99
    echo "<br />";
    echo $angka_scientific1; //3.14
    echo "<br />";
    echo $angka_scientific2; //0.0003365
?>
<?php   
    $a=10.66;
    $b=12.4;
    $c= $a + $b;
    echo $c; // 23.06

    $d=$a / $b;
    echo $d; // 0.85967741935484
?>
<?php
$string1='Ini adalah string sederhana';

$string2="Ini adalah string
yang bisa memiliki beberapa baris";

$string3='Dia berkata: "I\'ll be back"';


echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";

?>
<?php
$benar=true;
$salah=false;

echo "benar = $benar, salah = $salah";
// hasil output: benar = 1, salah =
?>
<?php
$hasil1= -3;
$hasil2=3+5;
$hasil3=8-5.5;
$hasil4=2*5;
$hasil5=3+8/5-3;
$hasil6=10 % 4;

echo "$hasil1:"; var_dump($hasil1);
echo "<br />";
echo "$hasil2:"; var_dump($hasil2);
echo "<br />";
echo "$hasil3:"; var_dump($hasil3);
echo "<br />";
echo "$hasil4:"; var_dump($hasil4);
echo "<br />";
echo "$hasil5:"; var_dump($hasil5);
echo "<br />";
echo "$hasil6:"; var_dump($hasil6);
?>





