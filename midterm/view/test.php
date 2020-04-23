<article>
    <h1>TEST</h1>
    <form method="post" action="index.php?top=test">
<?php $asda = "SELECT sityva FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>
<br>
  <input type="radio" name="pirveli" value="1">  
<?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>

  <br>
  <input type="radio" name="pirveli" value="2">
  <?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?> 
  <br>


  <br>  

  <?php $asda = "SELECT sityva FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?><br>
  <input type="radio" name="meore" value="3">
  <?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?> <br>
  <input type="radio" name="meore" value="4">
  <?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?> <br>


  <br>  

  <?php $asda = "SELECT sityva FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?><br>
  <input type="radio" name="mesame" value="5">
  <?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?> <br>
  <input type="radio" name="mesame" value="6">
  <?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?> <br>
  <br>


  <?php $asda = "SELECT sityva FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>

<br>

<input type="radio" name="meotxe" value="7">
<?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>

 <br>

<input type="radio" name="meotxe" value="8">
<?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?> <br>

<br>  

<?php $asda = "SELECT sityva FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>

<br>

<input type="radio" name="mexute" value="9">
<?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>

<br>

<input type="radio" name="mexute" value="10">
<?php $asda = "SELECT targmani FROM words ORDER BY RAND() LIMIT 1";
$result1 = mysqli_query($connection, $asda);
$row1 = mysqli_fetch_assoc($result1);
print_r($row1); ?>
<br>

<br>
  <input type="submit" value="Submit"> <br><br>
</form>

<?php
$pirveli = $_POST["pirveli"];
$meore = $_POST["meore"];
$mesame = $_POST["mesame"];
$meotxe = $_POST["meotxe"];
$mexute = $_POST["mexute"];

    if($pirveli == $row1){
    $kitxva1 = true;
}else{
    $kitxva1 = false;
}


if($meore == $row1){
    $kitxva2 = true;
}else{
    $kitxva2 = false;
}

if($mesame == $row1){
    $kitxva3 = true;
}else{
    $kitxva3 = false;
}

if($meotxe == $row1){
    $kitxva4 = true;
}else{
    $kitxva4 = false;
}

if($mexute == $row1){
    $kitxva5 = true;
}else{
    $kitxva5 = false;
}

$pasuxebi = array($kitxva1, $kitxva2, $kitxva3, $kitxva4, $kitxva5);
echo "სწორი პასუხი ";
echo count(array_filter($pasuxebi));
?>  
</article>