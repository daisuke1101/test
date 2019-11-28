<?php
function max_min () {
    $args = func_get_args();
    return array(max($args), min($args));
}
