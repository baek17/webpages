<?php
echo 'Q4';
?>
<br>
<?php
echo 'enter no';
?>
<form action='' method='post'>
    <input type='text' name='num1' value='' placeholder='밑변, 가로'><br>
    <input type='text' name='num2' value='' placeholder='높이, 세로'><br>
    <input type='submit' name='triangle' value='삼각형 면적'>
    <input type='submit' name='rectangle' value='직사각형 면적'>
</form>
<?php

if(isset($_POST['triangle']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $triangle = $num1 * $num2/2;
    echo $triangle;
}
if(isset($_POST['rectangle']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $rectangle = $num1 * $num2;
    echo $rectangle;
}
?>
<br>
<form action='' method='post'>
    <input type='text' name='num3' value='' placeholder='반지름'><br>
    <input type='text' name='num4' value='' placeholder='PI 값'><br>
    <input type='submit' name='circle' value='원 면적'>
    <input type='submit' name='one' value='구 체적'>
</form>
<?php
if(isset($_POST['circle']))
{
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $circle = $num4 * $num3^2;
    echo $circle;
}

if(isset($_POST['one']))
{
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $one = 4/3 * $num4 * $num3^3;
    echo $one;
}
?>
<br>
<form action='' method='post'>
    <input type='text' name='num5' value='' placeholder='가로'><br>
    <input type='text' name='num6' value='' placeholder='세로'><br>
    <input type='text' name='num7' value='' placeholder='높이'><br>
    <input type='submit' name='rectangular' value='직육면체 체적'>
</form>
<?php
if(isset($_POST['rectangular']))
{
    $num5 = $_POST['num5'];
    $num6 = $_POST['num6'];
    $num7 = $_POST['num7'];
    $rectangular = $num5 * $num6 * $num7;
    echo $rectangular;
}
?>
<br>
<form action='' method='post'>
    <input type='text' name='num8' value='' placeholder='반지름'><br>
    <input type='text' name='num9' value='' placeholder='높이'><br>
    <input type='text' name='num10' value='' placeholder='PI 값'><br>
    <input type='submit' name='cylinder' value='원통 체적'>
</form>
<?php
if(isset($_POST['cylinder']))
{
    $num8 = $_POST['num8'];
    $num9 = $_POST['num9'];
    $num10 = $_POST['num10'];
    $cylinder = $num10 * $num8^2 * $num9;
    echo $cylinder;
}
?>