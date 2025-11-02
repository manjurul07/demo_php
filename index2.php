<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>

</head>
<body>

        <div>
            <form action="" method="POST">
                <label>First Number</label><br>
                <input type="text" name="num1"> <br>
                <label>Second Number</label><br>
                <input type="text" name="num2"> <br>
                <input type="submit" name="submit">
            </form>
        </div>

    <?php 

    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $sum = $num1 + $num2;
        echo $sum;
    }

    /*echo "Hello World";
    echo "<h1>Hello Php</h1>";
    $num1 = 20;
    $num2 = 30;

    $sum = $num1 +$num2;
    echo $sum;
    echo "<br>";
    echo "Sum =".$sum;
    echo "<h3> sum = ".$sum."</h3>";
    echo "La ilaha illahu muhammadur rasullallah"."<br>";

    $n=5;

    $sum= $n *( $n + 1 ) /2;

    echo $sum;

    define("STUDENT", "Manjurul Hasan");

    $lang ="php";

    $a = 10;
    $b = 20;
    $sum = $a +$b;

    echo "<h2> Welcome to My PHP practice Page </h2>";

    echo "Student Name = ".STUDENT."<br><br>";

    echo "Favorite Language =".$lang."<br><br>";

    echo "Message in Uppercase :".strtoupper("hello world")."<br><br>";

    echo "Math Result: <br> $a + $b =".$sum."<br><br>";

    $age = 17;

    if ($age >=18) {
            echo "You are a Adult";
    } else {
            echo "You are a baby";
        }

    echo "<br><br><br>";

    $mark = 67;

    if ($mark <0 || $mark >100) {
        echo "Your Mark is Invaild";
    }
    elseif ($mark >=80) {
        echo "You got 'A+'";
    }
    elseif ($mark >=70) {
        echo "You got 'A'";
    }
    elseif ($mark >=60) {
        echo "You got 'A-'";
    }
    elseif ($mark >=50) {
        echo "You got 'B'";
    }
    elseif ($mark >=40) {
        echo "You got 'D'";
    }
    elseif ($mark >=33) {
        echo "You got 'D'";
    }
    else {
        echo "You are fail";
    }
    echo "<br><br><br>";



    $day = "Sunday";

    switch ($day) {
        case 'Saturday':
        case 'Sunday':
            echo "It's Weekend Day!!";
            break;
        case 'Monday':
            echo "Start of The Week";
            break;
        default:
            echo "It's a weekday";
            break;
    }
    echo "<br><br><br>";

*/


     ?>

</body>
</html>