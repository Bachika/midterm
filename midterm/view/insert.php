<?php
    if(isset($_POST['insertbutton'])){
    $sityva = $_POST['sityva'];
    $targmani = $_POST['targmani'];
    $sql = "INSERT INTO words (sityva, targmani)
    VALUES ('$sityva',
    '$targmani')"; 
    mysqli_query($connection, $sql);
    header('Location: ?top=insert');
    }
?>
<article>
    <h1>INSERT</h1>
    <form action="" style = "padding:20px" method="post">
    sityva
    <br>
    <input type="text" name="sityva" required minlength="2" maxlength=" ">
    <br><br>
    targmani
    <br>
    <input type="text" name="targmani">
    <br><br>
    <input type="submit" name="insertbutton" value="INSERT">
    </form>
</article>