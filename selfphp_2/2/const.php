<?php
    const VAT1 = 1.1;   // 通常税率
    const VAT2 = 1.08;  // 据置税率(食品・新聞ナド)

    $price = 1000;
    $sum1 = $price * VAT1;   // 通常の場合
    $sum2 = $price * VAT2;   // 据置の場合

    print '通常の場合、税込' . $sum1 . '円</br>';
    print '食品の場合、税込' . $sum2 . '円';