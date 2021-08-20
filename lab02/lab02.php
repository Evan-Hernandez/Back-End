<!--Evan Hernandez-->
<html>

<head>
    <title>Array</title>
</head>

<body>
    <?php #Evan Hernandez

    #Display a title for your program.
    echo '<h1><p>Adding numbers from an array</p></h1>';

    #Create an array of any 7 numbers.
    $sevnums = array(2, 5, 6, 4, 7, 9, 1);

    ### Just a little extra ###
    echo '<p>Array = [';
    $i = 0;
    for ($i = 0; $i <= 6; $i++) {
        if ($i < 6) {
            echo $sevnums[$i] . ', ';
        } else {
            echo $sevnums[$i];
        }
    }
    echo ']</p>';
    ##########################


    #Add the first, third and fifth numbers of the array.
    $total = $sevnums[0] + $sevnums[2] + $sevnums[4];
    echo '<p>The total of adding the 1st(' . $sevnums[0] . ') , 
    3rd(' . $sevnums[2] . ') , and 5th(' . $sevnums[4] . ') numbers of this array is: '
        . $total;
    ?>

</body>

</html>