<?php
    $max = $sum = 0;
    if (isset($_GET['n'])){
        $max = $_GET['n'];
        $sum = 0; $i = 1;
        while($i<=$max){
            $sum += $i;
            $i++;
        }
    }


?>
<form>
    1+2+...+
    <input type="number" name="n"/>
    <input type="submit" value="="/>
    <?php echo $sum; ?>
</form>
