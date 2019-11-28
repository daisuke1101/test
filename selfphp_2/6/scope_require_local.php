<?php
function checkScope() {
    require_once 'scope_required.php';
    return $scope;
}

print checkScope() . '<br />';  // 「アクセスできました」と表示
print $scope . '<br />';        // カラッポ(NULL)