<?php
include "key.php";

$content =  $twitterConnection->get('account/verify_credentials');

$getMP = $twitterConnection->get('direct_messages', array('count' => 1 ));

	foreach ($getMP as $textMP) {
	$roger = $textMP->text;
	$htag = "#JPTC"; // Je porte tes couilles
	 $twitterConnection->post('statuses/update', array('status' => $roger . " ". $htag));
	}
?>