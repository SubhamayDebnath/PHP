<!-- Rules for PHP variables: -->

<!-- A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) -->


<!-- PHP has three different variable scopes: -->

<!-- 
    1.local
    2.global
    3.static 
-->
<?php 
    $num1 = 10;
    $num3 = 10;
    echo "{$num1} + {$num3} = ".$num1 + $num3;
    echo '<br/>';

    var_dump(4);
    echo '<br/>';
    var_dump(4.5);
    echo '<br/>';
    var_dump(true);
    echo '<br/>';
    var_dump(array(1,2,3));
    echo '<br/>';
    var_dump(null);
    echo '<br/>';
    echo '<br/>';
    // Constants in PHP
    define('PI', 3.14);
    echo PI;
    
    const num = 12345;
    const num = 999;
    echo num
?>