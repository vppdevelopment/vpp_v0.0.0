<?php 
	
	/*if ($_POST["inputname"] == "")
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Name fields are empty!'));
		die($output);
	}
	else*/if ($_POST["inputemail"] == "")
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Email fields are empty!'));
		die($output);
	}/*
	elseif ($_POST["inputevents"] == "")
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Events fields are empty!'));
		die($output);
	}*/
	else
	{
		$email_to 			=   'sebastian.benitez@outlook.com'; 
		//$contact_name     	=   $_POST['inputname'];  
		$contact_email    	=   $_POST['inputemail'];
    	//$contact_events 	=   $_POST['inputevents'];	
		//$contact_events_string = implode(", ", $contact_events);
	
    	$headers  	= "From: ".$contact_email."\r\n";	
		$headers   .= "Reply-To: ".$contact_email."\r\n";	
		$subject 	= "Gracias por hacer parte de la conversación."//.$contact_name;		
		
		//$finalmessage = "I will attend to: ". $contact_events_string;

    	if(mail($email_to, $subject, $finalmessage, $headers)){
        	$output = json_encode(array('type'=>'success', 'text' => 'Message Sent'));
    	}else{
        	$output = json_encode(array('type'=>'error', 'text' => 'Failed'));
   		}		
		$output = json_encode(array('type'=>'success', 'text' => 'Message Sent'));
		die($output);
	}
?>