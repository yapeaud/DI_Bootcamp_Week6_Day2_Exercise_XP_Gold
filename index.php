<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day2_Exercise_XP_Gold</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        $nbr = 3;
        $factorial = 1;

        for ($y=$nbr; $y>=1; $y--)
        {
            $factorial = $factorial * $y;
        }
    ?>
    <p><?php echo "The factorial of $nbr is $factorial"; ?></p>
    <hr>
    <h1>Exercise 2</h1>
        <?php
        for($i=1;$i<=8;$i++)
            {
            for ($star=1;$star<=$i;$star++)
                {
                echo "*";
                }
            echo "<br>";
            }
        ?>
        <hr>
        <h1>Exercise 3</h1>
        
<?php
// PHP code for find the century
// in a given year
 
function find_century( $year)
{
     
    // No negative value is
    // allow for year
    if ($year <= 0)
        echo "0 and negative is not allow"
              , "for a year";
 
    // If year is between 1 to 100 it
    // will come in 1st century
    else if($year <= 100)
        echo "1st century\n";
 
    else if ($year % 100 == 0)
        echo $year / 100 ," century";
    else
        echo floor($year / 100) + 1 , " century";    
}
 
    // Driver Code
    $year = 1100;
    find_century($year);
?>
    <hr>
</body>
</html>