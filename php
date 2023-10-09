<!DOCTYPE html>
<html>
<head>
    <title>My Title</title>
</head>
<body>
    <?php
    $x = 5;
    
    function myTest() {
        $y = -5;
        echo "<p>Variable y inside function is: $y </p>";
        global $x; // You need to make $x available inside the function.
        echo "<p>Variable x inside function is: $x </p>";
    }

    myTest();
    
    echo "<p>Variable x outside function is: $x </p>";
    // Variable $y is not available outside the function.
    ?>


   <?php
$x = true;
$y = true;

if ($x xor $y) {
    echo "One of the conditions is true, but not both.";
} else {
    echo "Both conditions are either true or false.";
}
?>
 
</body>
</html>
