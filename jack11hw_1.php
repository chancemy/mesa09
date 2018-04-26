<?php
    $x = '';
    $y = '';
    $resultQuo = '';
    $resultRem = '';
    $ans = '';
    if(isset($_GET['x'])){
        $x=$_GET['x'];
        $y=$_GET['y'];
        $resultQuo=(int)($x/$y);
        $resultRem=$x%$y;
        $ans = $resultQuo ."......".$resultRem;
    }
?>
<form>
    <input type="text" name="x" value="<?php echo $x ?>" />
    %
    <input type="text" name="y" value="<?php echo $y ?>" />
    <input type="submit" name="result" value="="/>
    <?php echo $ans; ?>
</form>
