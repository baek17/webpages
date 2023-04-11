<?php
echo 'Q1';
?>
<br>
<?php
// Q1
$n = 30;
$sum = 0;
for ($a = 1; $a < 30; $a++) {
        echo " $a +";
}
for($x=$n; $x>=1; $x--)
{
    $sum = $sum+$x;
}
echo " 30 = $sum";
?>
<br><br>

<?php
$n = 30;
$prod = 1;
for ($a = 1; $a < 30; $a++) {
        echo " $a *";
}
for($x=$n; $x>=1; $x--)
{
    $prod = $prod*$x;
}
echo " 30 = $prod";
?>


