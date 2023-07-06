<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-color: green;
        }

        .bgberish{
            border: 1px solid black;
            width: 80%;
            margin: 110px 10px 10px 10px;
            padding: 10px 10px 10px 10px;
        }
        .img1fon{
            width: 10px;

        }
        .firmclas{
            padding: 5px 15px 15px 15px;
        }
        .pgpfil{
            width: 80%;
            background-color: blue;
            color: white;
            padding: 10px 5px 1px 35px;
            margin: 30px 5px 5px 5 -10px;
        }
        .razmeri{
            width: 90%;
        }
        .subminga{
            width: 100%;
            height: 50px;
            color: blue;
            background: orange;
        }
    </style>
</head>

<body>
    
    <div class="bgberish">
        
    <form action="" method="GET">
        <input type="number" name="s1" placeholder="Son kiriting !"> <br><br>
        <select class="razmeri" name="amal">
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <br><br>
        <input type="number" name="s2" placeholder="Son kiriting !"> <br><br>
        <input class="subminga" type="submit" name="ok"> <br><br>
    </form>
    <div class="pgpfil">
    <?php
    if (isset($_GET['ok'])) {
        $s1 = $_GET['s1'];
        $s2 = $_GET['s2'];
        $k = $_GET['amal'];
        if ($k == '-') {
        $c = $s1 - $s2;
            echo "<h2>{$s1} - {$s2} = {$c}";
        } elseif ($k == '+') {
            $c = $s1 + $s2;
            echo "<h2>{$s1} + {$s2} = {$c}";
        }elseif ($k == '/') {
            $c = $s1 / $s2;
        echo "<h2>{$s1} / {$s2} = {$c}";
        }elseif ($k == '*') {
            $c = $s1 * $s2;
        echo "<h2>{$s1} * {$s2} = {$c}";
        }else {
            echo "Hamma maydonni to'ldiring";
        }
    }

    ?>
    </div>
</body>

</html>