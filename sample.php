<?php
	session_start();
    header("content-type: text/xml");
	$question 	= array(
						0  => array("OTC Crocin may help! Need doctor? Reply <headache doctor> "),
						1  => array("OTC Tylenol may help! Need doctor? Reply <headache doctor> "),
						2  => array("OTC Robitussin Cough may help! Need doctor? Reply <headache doctor> "),
						3  => array("OTC Aspirin may help! Need doctor? Reply <headache doctor> "),
						4  => array("OTC Pepto-Bismol may help! Need doctor? Reply <headache doctor> "),
						5  => array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx"),
						6  => array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx"),
						7  => array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx"),
						8  => array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx"),
						9  => array("Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx"),
						10  => array("Enter valid inquiry"),
						);
	
	$from   = $_POST['From'];
	$answer = $_POST['Body'];
	$reply  = array();
	if ($answer == 'headache') 
		
			$reply = printqt($question[0][1]);
			
		elseif ($answer == 'stomachache') 
		
			$reply = printqt($question[1][1]);
		
		elseif ($answer == 'cough') 
		
			$reply = printqt($question[2][1]);
		
		elseif ($answer == 'cold') 
		
			$reply = printqt($question[3][1]);
			
		elseif ($answer == 'vomiting') 
		
			$reply = printqt($question[4][1]);
			
		elseif ($answer == 'headache doctor') 
		
			$reply = printqt($question[5][1]);
		
		elseif ($answer == 'stomachache doctor') 
		
			$reply = printqt($question[6][1]);
		
		elseif ($answer == 'cough doctor') 
		
			$reply = printqt($question[7][1]);
			
		elseif ($answer == 'cold doctor') 
		
			$reply = printqt($question[8][1]);
		
		elseif ($answer == 'vomiting doctor') 
		
			$reply = printqt($question[9][1]);
			
		else{
		$reply = printqt($question[10][1]);
		}
		
		
	
	function printqt($answer){
		
			$makereply['qt'] = $question[0][1] : 
		return $makereply;
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
