<?php


	function formatManagerRequest($manager){
		if($manager)
			return "Sim";
		return "Não";
	}

	function formatDate($date){
		$date = new DateTime($date);
		return $date->format('d/m/Y H:i:s');
	}


?>