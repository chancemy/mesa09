<?php
    $year ='';
    $leapYear ='';
    if(isset($_GET['year'])){
        $year = $_GET['year'];
        if($year%4==0){
            if($year%100){
                if($year%400){
                    //29
                }else{
                    //
                }
            }else{
                //29
            }
        }else{
            //28
        }
    }
?>
<form>
    輸入年份：<input type="number" name="year" value="<?php echo $year; ?>"/>
    <input type="submit" value="判斷閏年" />
    <?php
        if($isLeap !== ''){
            echo ($isLeap?"閏年":"平年");
        }
    ?>
</form>
