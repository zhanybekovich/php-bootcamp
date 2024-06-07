<?php
$day = 6;

switch ($day) {
    case 1:
        echo 'Monday' . '<br>';
        break;
    case 2:
        echo 'Tuesday' . '<br>';
        break;
    case 3:
        echo 'Wednesday' . '<br>';
        break;
    case 4:
        echo 'Thursday' . '<br>';
        break;
    case 5:
        echo 'Friday' . '<br>';
        break;
    case 6:
        echo 'Saturday' . '<br>';
        break;
    case 7:
        echo 'Sunday' . '<br>';
        break;

    default:
        echo 'Unknown day' . '<br>';
        break;
}

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Working day' . '<br>';
        break;
    case 6:
    case 7:
        echo 'Weekend' . '<br>';
        break;

    default:
        echo 'Unknown day' . '<br>';
        break;
}
