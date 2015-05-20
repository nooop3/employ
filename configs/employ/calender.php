	<?php
	header ( 'Content-type: text/calendar; charset=utf-8' ); 
	header ( 'Content-Disposition: attachment; filename=employ'); 
	echo $ical ;
	$eventData = array ( 
	        'title'        => $event -> getTitle (), 
	        'address'      => $address , 
	        'description'  => strip_tags ( $event -> getBody ()), 
	        'stage'        => $stage , 
	        'date'         => $event -> getDate () 
	    );

	    // Build the ics file


	    $ical =  'BEGIN:VCALENDAR
		VERSION:2.0
		PRODID:-//hacksw/handcal//NONSGML v1.0//EN
		CALSCALE:GREGORIAN
		BEGIN:VEVENT
		DTEND:'  . $this -> dateToCal ( $eventData [ 'date' ])  .  '
		UID:'  . md5 ( $eventData [ 'title' ])  .  '
		DTSTAMP:'  . time ()  .  '
		LOCATION:'  . $eventData [ 'address' ]  .  '
		DESCRIPTION:'  . $eventData [ 'description' ]  .  '
		URL;VALUE=URI:http://go.okdo.it'  .  '
		SUMMARY:'  . $eventData [ 'title' ]  .  '
		DTSTART:'  . $this -> dateToCal ( $eventData [ 'date' ])  .  '
		END:VEVENT
		END:VCALENDAR' ;

	function dateToCal ( $timestamp ) 
	{ 
	    return date ( 'Ymd\This' , time ())  .  'Z' ; 
	}
	?>