<?php
if (isset($_POST['submit'])) {
    $first = $_POST['num1'];
    $second = $_POST['num2'];

    $num = 1;
    $array = [];
    $array1 = [];
//بزرگترین مقسوم علیه مشترک
    if ($first > $second) {
        $max = $first;
    } else {
        $max = $second;
    }
    $num = $max;
    while ($num) {
        if ($first % $num == 0) {
            $array[] = $num;
        }
        if ($second % $num == 0) {
            $array1[] = $num;
        }
        --$num;
    }
    $bmm = array_intersect($array, $array1);
    echo "بزرگترین مقسوم علیه مشترک :" . current($bmm) . "<br>";
}
?>
<form method="post">
    <label> عدد اول را وارد کنید</label><br/>
    <input type="number" name="num1"/><br/>
    <label> عدد دوم را وارد کنید</label><br/>
    <input type="number" name="num2"/><br/>
    <input type="submit" name="submit" value="run"/>
</form>