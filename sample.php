<?php
    header("content-type: text/xml");
	$headache = array("OTC Crocin may help! Need doctor? Reply <headachedoctor>");
	$stomachache = array("OTC Tylenol may help! Need doctor? Reply <stomachachedoctor>");
	$cough = array("OTC Robitussin Cough may help! Need doctor? Reply <coughdoctor>");
	$cold = array("OTC Aspirin may help! Need doctor? Reply <colddoctor>");
	$vomiting = array("OTC Pepto-Bismol may help! Need doctor? Reply <vomitingdoctor>");
	$headachedoctor = array("Dr. Lorem Ipsum1 - Here is the address! Call at +1 xxx xxx xxxx");
	$stomachachedoctor = array("Dr. Lorem Ipsum2 - Here is the address! Call at +1 xxx xxx xxxx");
	$coughdoctor = array("Dr. Lorem Ipsum3 - Here is the address! Call at +1 xxx xxx xxxx");
	$colddoctor = array("Dr. Lorem Ipsum4 - Here is the address! Call at +1 xxx xxx xxxx");
	$vomitingdoctor = array("Dr. Lorem Ipsum5 - Here is the address! Call at +1 xxx xxx xxxx");
	
	
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
	
	$answer = $_REQUEST['Body'];
	$answer = strtolower($answer);
	$reply  = array();
	
	if(is_string($answer)){
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
