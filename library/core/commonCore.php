<?php

class commonCore{
	
	public function cleanUp($input){
		$filteredInput = addslashes($input);
		
		return  $filteredInput;
	}
}


?>