<?php
declare( strict_type=1 );

class Persion
{
	public function age(int $age)
	{
		echo $age;
	}
}

$obj = new Persion();
$obj->age(1.02);