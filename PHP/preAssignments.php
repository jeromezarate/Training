<?php
    //odd numbers
    for ($i = 1; $i <= 1000; $i+=2) {
        echo $i . ", ";
    }
    
    //multiples of 5
    for ($i = 5; $i <= 1000000; $i+=5) {
        echo $i . ", ";
    }

    //sum of array values
    $numbers = array(1, 2, 5, 10, 255, 3);
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $sum += $numbers[$i];
    }
    echo "The sum is: " . $sum;

    //average
    $numbers = array( 1, 2, 5, 10, 255, 3);
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $sum += $numbers[$i];
    }
    echo "The average is: " . $average = $sum/count($numbers);

    //odd numbers array
    $odd_array = array();
    for ($i = 1; $i <= 20000; $i+=2) {
        array_push($odd_array, $i);
    }
    var_dump($odd_array);

    //odd or even
    for ($i = 1; $i <= 1000; $i++) {
        if ($i%2 != 0) {
            echo "Numeber is " . $i . ". This is an odd number";
        }
        else {
            echo "Numeber is " . $i . ". This is an even number";
        }
        echo "<br>";
    }

    /*
    understanding foreach
    1.
        0 - 1
        1 - 3
        2 - 5
        3 - 7 
    2.
        1
        3
        5
        7
    3.
        hi - Dojo
        awesome - game
    4.
        Dojo
        game
    5.
        hi
        awesome
    6.
        Key is 0
        var_dumping valuearray(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } Key is 1
        var_dumping valuearray(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } Key is 2
        var_dumping valuearray(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }
    7.
        var_dumping valuearray(3) { [0]=> int(1) [1]=> int(3) [2]=> int(5) } var_dumping valuearray(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) } var_dumping valuearray(3) { [0]=> int(3) [1]=> int(6) [2]=> int(9) }
    8.
        key is 0
        hi - Dojo
        game - awesome
        key is 1
        dude - fun
        play - what?
        key is 2
        no - way
        i am - confused?
    9.
        hi - Dojo
        game - awesome
        dude - fun
        play - what?
        no - way
        i am - confused?
    */
    
    //multiplied by 5
    $A = array(2,4,10,16);
    function multiply($arr, $factor) {
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] *= $factor;
        }
        return $arr;
    }
    $B = multiply($A, 2);
    var_dump($B);

    // get array values
    $A = array(2,4,15,"hello");
    function print_lists($arr) {
        echo "<ul>";
        foreach ($arr as $key) {
            echo "<li> {$key} </li><br>";
        }
        echo "</ul>";
        return $arr;
    }
    print_lists($A);

    //keys and values
    $users = array("first_name" => "Michael", "last_name" => "Choi");
    function keysAndValues($arr) {
        $count = count($arr);
        echo "There are {$count} keys in this array: <br>";
        foreach ($arr as $key => $value) {
            echo "{$key} <br>";
        }
        foreach ($arr as $key => $value) {
            echo "The value in the key {$key} is {$value} <br>";
        }
        return $arr;
    }
    keysAndValues($users);
?>