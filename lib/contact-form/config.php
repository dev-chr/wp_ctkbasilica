<?php
	return [
	    'subject' => [
	        'prefix' => 'Website:'
	    ],
	    'emails' => [
	        'from' =>  'no-reply@domain.com'
	    ],
	    'messages' => [
	        'error'   => 'There was an error sending, did you complete the bot test? Or maybe the destination is not what we gave you?',
	        'success' => '<p style="text-align: center">Your message has been sent successfully.</p>',
	    ],
	    'fields' => [
	        'name'     => 'Name',
	        'email'    => 'Email',
	        'phone'    => 'Phone',
	        'subject'  => 'Subject',
	        'message'  => 'Message',
	        'btn-send' => 'Send'
	    ]
	];