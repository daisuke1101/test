<?php
require_once 'htrbusinessperson.php';

$bp = new parent('Daisuke', 'Morita');
$hbp = new HtrBusinessPerson ('祥寛', '山田');

$bp->work();
$hbp->work();

$bp->show();
$hbp->show();