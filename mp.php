<?php
include "key.php";

$content =  $twitterConnection->get('account/verify_credentials');

$getMP = $twitterConnection->get('direct_messages', array('count' => 1 ));

$toast = array(array('DM @'), array('D @'));
 
if (in_array(array('DM @', 'D @'), $toast)) {
	echo "none";
} else {
	foreach ($getMP as $TextMP) {
	$roger = $TextMP->text;
	$htag = "#JPTC";
	$twitterConnection->post('statuses/update', array('status' => $roger . " ". $htag));
	} 
}
 

?>