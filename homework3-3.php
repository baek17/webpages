<?php
echo 'Q3';
?>
<br>
<?php
function fibonacci($n, $fir = 0, $sec = 1) { 
  $fib = [$fir, $sec]; 
  for($i=1; $i<$n; $i++) { 
    $fib[] = $fib[$i] + $fib[$i-1]; 
    echo $i .' '. $fib[$i] .' '. $fib[$i+1]/$fib[$i] ."<br/>"; 
 } 
} 
fibonacci(8);
?>
