<?php
function calendar($year, $month) {
    for ($i = 1; $i < 32; $i++) {
        if(checkdate($month, $i, $year)) {
            print "{$i} &nbsp;";
        }
    }
}
print'2012年２月分<br />';
calendar(2012,2);