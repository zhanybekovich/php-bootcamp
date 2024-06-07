<?php

/*
- 'Y' - The year
- 'm' - The month
- 'd' - The day
- 'D' - The day of the week short name
- 'l' - The full day of the week name
- 'h' - The hour
- 'i' - The minute
- 's' - The second
- 'a' - AM/PM 
*/

// Year
echo date('Y');
echo '<hr>';

// Timestamp
// get year from timestamp
echo date('Y', 936345600);
echo '<hr>';

// strtotime
echo date('Y', strtotime('1990-09-01'));
echo '<hr>';

// get month
echo date('m');
echo '<hr>';

// get day
echo date('D');
echo '<hr>';

// year, month, day
echo date('Y-m-d');
echo '<hr>';

// hour
echo date('h');
echo '<hr>';

// minute
echo date('i');
echo '<hr>';

// am or pm
echo date('a');
echo '<hr>';

// all together
echo date('Y-m-d h:i:s a');
echo '<hr>';
