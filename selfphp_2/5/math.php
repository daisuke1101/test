<?PHP
print abs(-100) . '<br />' ;				// 「-100」の絶対値
print base_convert(100, 2, 10) . '<br />' ;	// 「100」を２進数から10進数に変換
print ceil(1234.56) . '<br />' ;			// 小数「1234.56」を切り上げ
print floor(1234.56) . '<br />' ;			// 小数「1234.56」を切り捨て
print fmod(10.5, 5) . '<br />' ;			// 小数「10.5」を5で割った余り
print max(1, 5, 3) . '<br />' ;				// 1,5,3のうちの最大
print min(1, 5, 3) . '<br />' ;				// 1,5,3のうちの最小
print mt_rand(2, 4) . '<br />' ;			// 2～4の範囲で乱数
print pow(2, 4) . '<br />' ;				// 2の4乗
print round(123.456, 2) . '<br />' ;		// 123.456を小数点2桁で丸める
print sqrt(10000) . '<br />' ;				// 10000の平方根
print cos(deg2rad(60)) . '<br />' ;			// cos60(度数法を弧度法に変換して代入)
print sin(deg2rad(30)) . '<br />' ;			// sin30(度数法を弧度法に変換して代入)
print tan(deg2rad(45)) . '<br />' ;			// tan45(度数法を弧度法に変換して代入)
print deg2rad(180) . '<br />' ;				// 度数法180を弧度法に変換
print exp(1) . '<br />' ;					// eの1乗
print log10(100) . '<br />' ;				// 底10の対数
print log(125,5) . '<br />' ;				// 底5の対数
print log(125) . '<br />' ;					// 底eの対数

