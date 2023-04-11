<?php
echo 'Q2';
?>
<br>
<?php
$n=30;
$data=array(mt_rand(10,100));
sort($data);
for ($i = 0; $i < $n; $i++) {
    $data = mt_rand(10, 100);
    echo "$data\n";
  }
?>