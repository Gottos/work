<?php

class SocksMachine {

	public function countUnpaired (array $socks) {
		$group = array_count_values(array_count_values($socks));
		return isset($group['1']) ? $group['1'] : 0;
	}

}

$sm = new SocksMachine();
echo $sm->countUnpaired([ 10, 10, 1, 1, 2 ]); //1