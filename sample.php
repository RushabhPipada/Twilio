<?php
    header("content-type: text/xml");
	$headache 	= array("crap");
	$stomachache = array(array("OTC Tylenol may help",array("1: Doctor?","2: Hospital?")));
	$cough 	= array(array("OTC Robitussin Cough may help",array("1: Doctor?","2: Hospital?")));
	$headacheanswer   = 2;
	$stomachacheanswer = 2;
	$coughanswer   = 2;
    $quiz = array(
	    "headache" => $headache,		// easy question and answer
	    "stomachache" => $stomachache,	// medium question and answer
	    "cough" => $cough			// hard question and answer
	);
	// $to 	= $_REQUEST['to'];
	// $from   = $_REQUEST['from'];
	$answer = $_REQUEST['Body'];
	$reply  = array();
	if (is_numeric($answer)) {
		if($answer == 2){
			$reply = 'Asrani';
		}
		else{
			$reply = 'Wisrani';
		}
	}
	else if(is_string($answer)){
		array_push($reply, $quiz[$answer][0]);
		foreach ($quiz[$answer][0] as $key => $value) {
			array_push($reply, PHP_EOL);
			array_push($reply, $value);
		}
	}
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
	<Sms>
			<?php
				if(is_array($reply)){
					foreach($reply as $key => $value){
						echo $value;
					}
				}
				else{
					echo $reply;
				}
			?>
	</Sms>
</Response>
