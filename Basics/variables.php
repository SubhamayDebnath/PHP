<!-- Rules for PHP variables: -->

<!-- A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) -->


<!-- PHP supports the following data types: -->

<!-- 
1.String
2.Integer
3.Float (floating point numbers - also called double)
4.Boolean
5.Array
6.Object
7.NULL
8.Resource -->
<?php 
    $num1 = 10;
    $num3 = 10;
    echo "{$num1} + {$num3} = ".$num1 + $num3;
    echo '<br/>';
?>