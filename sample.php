<?php
	session_start();
    header("content-type: text/xml");

	switch ($answer) {
		case 'headache' : {
			print('OTC Crocin may help!');
			break;
		case 'stomachache' : {
			print('OTC Tylenol may help!');
			break;
		case 'cough' : {
			print('OTC Robitussin Cough may help!');
			break;
		case 'cold' : {
			print('OTC Aspirin may help!');
			break;	
		case 'vomiting' : {
			print('OTC Pepto-Bismol may help!');
			break;
		case 'headache doctor' : {
			print('Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx');
			break;
		case 'stomachache doctor' : {
			print('Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx');
			break;
		case 'cough doctor' : {
			print('Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx');
			break;
		case 'cold doctor' : {
			print('Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx');
			break;
		case 'vomiting doctor' : {
			print('Dr. Lorem Ipsum - Here is the address! Call at +1 xxx xxx xxxx');
			break;
	}
		
		
	
	
	$from   = $_POST['From'];
	$answer = $_POST['Body'];
	$reply  = array();
		
	
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
