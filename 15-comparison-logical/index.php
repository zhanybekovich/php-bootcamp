<?php

/* Comparison operators
'==' - Equal to
'===' - Strict equal
'!=' - Not equal
'<>' - Not equal
'!==' Strict not equal
'<' - Less
'>' - Greater
'<=' Less or equal
'>=' Greater or equal
*/

var_dump(10 == 10);
echo '<hr>';

var_dump(10 == '10');
echo '<hr>';

var_dump(10 === '10');
echo '<hr>';

var_dump(10 != '10');
echo '<hr>';

var_dump(10 <> '10');
echo '<hr>';

var_dump(10 === '10');
echo '<hr>';

var_dump(10 > '10');
echo '<hr>';

var_dump(10 < '10');
echo '<hr>';

var_dump(10 <= '10');
echo '<hr>';

var_dump(10 >= '10');
echo '<hr>';

/* Logical operators
'and' - Logical AND
'&&' - Logical AND
'or' - Logical OR
'||' - Logical OR
'xor' - Exclusive OR (True of one is true)
'!' - Logical NOT
*/

var_dump(10 == 10 and 20 == 20);
echo '<hr>';

var_dump(10 == 10 && 20 == 20);
echo '<hr>';

var_dump(10 == 10 or 20 == 20);
echo '<hr>';

var_dump(10 == 10 || 20 == 20);
echo '<hr>';

var_dump(!true);
echo '<hr>';
