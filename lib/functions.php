	<?php
	/**
	 * Perform a GET request to the API endpoint
	 *
	 * @param  string $method with the url to to the request
	 *
	 * @return array  with the result
	 */
	
	function getJSON($method) {
	    /**
	     * TODO: Desarrolla un método para obtener los resultados de los ficheros JSON. Preferiblemente utilizando cURL.
		**/
		
		$url = '';
		
	    switch ($method) {
	    	case 'slides':
	    	$url = './api/slides.json';
			break;
	    	case 'products':
	    	$url = './api/products.json';
	    	break;
	    }
	    

	    $ch = curl_init($url);
	    $data = json_decode(file_get_contents($url),true);

	    if(!empty($data)) {
		//var_dump($data);
	    } else {
	    	echo "Ha ocurrido un error al obtener los datos";
	    }
	    $error = curl_error($ch);
	    if($error) {
	    	echo $error;
	    }

	    curl_close($ch);
	    return $data;
	} // END getSlides



