<?php
class AllegedRC4
{
	public static function encode($msg, $key, $mode='hex')
	{
		$state = array();
		for ($i=0; $i<256; $i++) $state[] = $i;
		$x = $y = $i1 = $i2 = 0;
		$key_length = strlen($key);
		for ($i=0; $i<256; $i++)
		{
			$i2 = (ord($key[$i1])+$state[$i]+$i2) % 256;
			self::swap($state[$i], $state[$i2]);
			$i1 = ($i1+1) % $key_length;
		}
		$msg_length = strlen($msg);
		$msg_hex = '';
		for ($i=0; $i<$msg_length; $i++)
		{
			$x = ($x + 1) % 256;
			$y = ($state[$x] + $y) % 256;
			self::swap($state[$x], $state[$y]);
			$xi = ($state[$x] + $state[$y]) % 256;
			$r = ord($msg[$i]) ^ $state[$xi];
			$msg[$i] = chr($r);
			$msg_hex .= sprintf("%02X",$r);
		}
		return ($mode=='hex'?$msg_hex:$msg);
	}
	private static function swap(&$x, &$y)
	{
		$z = $x; $x = $y; $y = $z;
	}
}
