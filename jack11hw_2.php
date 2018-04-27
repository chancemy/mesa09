
<?php
    $year ='';
    $leapYear ='';
    if(isset($_GET['year'])){
        $year = $_GET['year'];
        if($year%400==0||$year==1752||$year%4==0&&$year%100!=0){
            $leapYear=" : 是閏年";
        }else{
            $leapYear=" : 不是閏年";
        }


    }




?>
<form>
    <input type="text" name="year" size="10" style="font-size:20px" value="<?php echo $year; ?>" />
    年<?php
    echo $leapYear;
    ?><br>


</form>
