<?php

final class Operation {
	const __default = 1;
	
	/* API */
	const VERSION 	= 1;
	
	/* AUTH */
	const LOGIN	 	= 10;
	const LOGOUT 	= 11;
	
	/* FEEDS */
	const ADDFEED	= 101;
	const RMFEED	= 102;
	const EDITFEED	= 103;
	const MARKFEED	= 104;
	
	/* ITEM */
	const MARKITEM	= 201;
	const FLAGITEM	= 202;
	const SHAREITEM	= 203;
	const GETITEM	= 204;
	
	/* FU! */
	const GETTREE	= 301;
	const GETFUTREE	= 302;
	
	const UNKNOWN	= 999;

	public function fromString($name) {
		$op = strtoupper($name);
		
		switch ($op) {
			case 'VERSION': 	return Operation::VERSION;
			case 'LOGIN': 		return Operation::LOGIN;
			case 'LOGOUT': 		return Operation::LOGOUT;
			case 'ADDFEED': 	return Operation::ADDFEED;
			case 'RMFEED': 		return Operation::RMFEED;
			case 'EDITFEED': 	return Operation::EDITFEED;
			case 'MARKFEED': 	return Operation::MARKFEED;
			case 'MARKITEM': 	return Operation::MARKITEM;
			case 'FLAGITEM': 	return Operation::FLAGITEM;
			case 'SHAREITEM': 	return Operation::SHAREITEM;
			case 'GETITEM': 	return Operation::GETITEM;
			case 'GETTREE': 	return Operation::GETTREE;
			case 'GETFUTREE': 	return Operation::GETFUTREE;
			
			default:
				return Operation::UNKNOWN;
		}
	}
}
?>