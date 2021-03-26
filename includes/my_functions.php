<?php


function find_article_category_name($categories, $id_category) { 
   		 $categ = false;
   		 foreach ($categories as $cat){                 
                 if ($cat['id'] == $id_category) {
                    $categ = $cat['category_name'];
                    return $categ;
                 	}
    	 }
}



function verifyEmailApi($email){
	$url   	= 'http:/api.by';
	$data 	= json_encode($email);
	$ch 	= curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
	$response = curl_exec($ch);
	curl_close($ch);
	return json_decode($response);
	
	

}





?>