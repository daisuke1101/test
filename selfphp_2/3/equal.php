<?php
var_dump('3.14' == 3.14000);
var_dump('3.14E2' == 314);
var_dump('0x10' == 16);
var_dump('010' == 8);
var_dump('1.3xyz' == 1.3);
var_dump('X' == 0);

var_dump('3.14' == '3.14000');
var_dump('3.14E2' == '314');
var_dump('1.3xyz' == '1.3');
