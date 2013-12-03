<?
	foreach($_REQUEST["val"] as $key => $array){
		if(!empty($array["value"])){
			if(empty($form[$array["name"]])){
				$form[$array["name"]] = $array["value"];
			}else{
				if(!is_array($form[$array["name"]])){
					$sub_array = $form[$array["name"]];
					unset($form[$array["name"]]);
					
					$form[$array["name"]][] = $sub_array;
					$form[$array["name"]][] = $array["value"];
				}else{
					$form[$array["name"]][] = $array["value"];
				}
			}
		}
	}
	
	print_r($form);
?>