<?php
    header("content-type: text/xml");
	$headache 	= array("OTC Crocin may help! Need doctor? Reply <headachedoctor>");
	$stomachache = array("OTC Tylenol may help! Need doctor? Reply <stomachachedoctor>");
	$cough 	= array("OTC Robitussin Cough may help! Need doctor? Reply <coughdoctor>");
	$cold = array("OTC Aspirin may help! Need doctor? Reply <colddoctor>");
	$vomiting = array("OTC Pepto-Bismol may help! Need doctor? Reply <vomitingdoctor>");
	$headachedoctor = array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx");
	$stomachachedoctor = array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx");
	$coughdoctor = array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx");
	$colddoctor = array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx");
	$vomitingdoctor = array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx");
	
	
	$headacheanswer   = 2;
	$stomachacheanswer = 2;
	$coughanswer   = 2;
    $quiz = array(
	    "headache" => $headache,	
	    "stomachache" => $stomachache,	
	    "cough" => $cough,
	    "cold" => $cold,
	    "vomiting" => $vomiting,
	    "headachedoctor" => $headachedoctor,
	    "stomachachedoctor" => $stomachachedoctor,
	    "coughdoctor" => $coughdoctor,
	    "colddoctor" => $colddoctor,
	    "vomiting" => $vomitingdoctor
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
