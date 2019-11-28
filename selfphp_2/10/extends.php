<?php
    require_once 'businessperson.php';

    $bp = new BusinessPerson('Daisuke', 'Morita');

    $bp->work();
    $bp->show();