<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Nhập n <br></br>
        <input type="text" name="n"></br>
        <input type="submit" value="Nhập"></br>
    </form>
    <?php
        $arr =array(rand(1, 100));

        echo"<h3>Gía trị ngẫu nhiên arr</h3>";
        foreach($arr as $v) {
            echo $v;
        }
        echo "<br>";
        $dem = 0;
        foreach($arr1 as $v){
            if($v % 2 == 0){
                $dem++;
            }
        }
        echo "số phần tử chẵn của mảng:".$dem;
        echo "<br>";
        $dem5 = 0;
        foreach($arr1 as $v){
            if($v % 5 == 0){
                $dem5++;
            }
            }    
        echo "số phần tử chia hết cho 5 của mảng:".$dem5; 
        

    ?>
</body>
</html>