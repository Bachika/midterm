<article>
        <?php
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM words WHERE sityva = '$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div>
        <br><?=$row["targmani"]?><br><br>
        </div>
</article>