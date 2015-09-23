<?php 

$word_list = Array(
    0 => 'New',
    1 => 'History',
    2 => 'Word',
	3 => 'Giraffe',
	4 => 'Make',
	5 => 'Man',
	6 => 'Own',
	7 => 'Such',
	8 => 'Up',
	9 => 'Under'
);

$password = '';

$parameters = Array (
	'words_number' => 5,
	'need_number' => 'OFF',
	'need_special' => 'OFF'
);

foreach ($_POST as $key => $value) {
	$parameters[$key] = $value;
}

for ($i=0; $i<$parameters['words_number']; $i++){
	$x=rand (0,count($word_list)-1);
	$password .= $word_list[$x].'-';
}

$password=trim($password,"-");

if($parameters['need_number']=='on'){
	$password .= rand(0,9);
}

if($parameters['need_special']=='on') {
	$x=rand(32,47);					//Special Characters;
	$character = chr($x);
	$password .= $character;
}


 ?>
