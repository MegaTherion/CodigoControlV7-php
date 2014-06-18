<?php
class Verhoeff
{
	private static $mul = array(
		array(0,1,2,3,4,5,6,7,8,9),
		array(1,2,3,4,0,6,7,8,9,5),
		array(2,3,4,0,1,7,8,9,5,6),
		array(3,4,0,1,2,8,9,5,6,7),
		array(4,0,1,2,3,9,5,6,7,8),
		array(5,9,8,7,6,0,4,3,2,1),
		array(6,5,9,8,7,1,0,4,3,2),
		array(7,6,5,9,8,2,1,0,4,3),
		array(8,7,6,5,9,3,2,1,0,4),
		array(9,8,7,6,5,4,3,2,1,0),
		);
	private static $per = array(
		array(0,1,2,3,4,5,6,7,8,9),
		array(1,5,7,6,2,8,3,0,9,4),
		array(5,8,0,3,7,9,6,1,4,2),
		array(8,9,1,6,0,4,3,5,2,7),
		array(9,4,5,3,1,2,6,8,7,0),
		array(4,2,8,6,5,7,3,9,0,1),
		array(2,7,9,3,8,0,6,4,1,5),
		array(7,0,4,6,9,1,3,2,5,8),
		);
	private static $inv = array(0,4,3,2,1,5,6,7,8,9);

	public static function get($num)
	{
		$ck = 0;
		$num = ''.$num;
		$num_length = strlen($num);
		for ($i=$num_length-1; $i>=0; $i--)
			$ck = self::$mul[$ck][self::$per[($num_length-$i) % 8][$num[$i]]];
		return self::$inv[$ck];
	}
}
