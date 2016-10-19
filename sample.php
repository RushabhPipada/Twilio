<?php
    header("content-type: text/xml");
	$headache 	= array("OTC Crocin may help! Need doctor? Reply <headache doctor>");
	$stomachache = array("OTC Tylenol may help! Need doctor? Reply <stomachache doctor>");
	$cough 	= array("OTC Robitussin Cough may help! Need doctor? Reply <cough doctor");
	$cold 	= array("OTC Aspirin may help! Need doctor? Reply <cold doctor>");
	$vomiting 	= array("OTC Pepto-Bismol may help! Need doctor? Reply <vomiting doctor>");
	
	$headacheanswer   = 2;
	$stomachacheanswer = 2;
	$coughanswer   = 2;
    $quiz = array(
	    "headache" => $headache,		
	    "stomachache" => $stomachache,	
	    "cough" => $cough			
	);
	// $to 	= $_REQUEST['to'];
	// $from   = $_REQUEST['from'];
	$answer = $_REQUEST['Body'];
	$reply  = array();
	
		if($answer == "headache"){
			$reply = 'lorem';
		}
		else{
			$reply = 'ipsum';
		}
	
	else if(is_string($answer)){
		array_push($reply, $quiz[$answer][0][0]);
		foreach ($quiz[$answer][0][1] as $key => $value) {
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
