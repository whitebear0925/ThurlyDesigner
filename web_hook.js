function get_real_url(url) {
	
	var arr_t1 = url.split("?");
	var param_flag = false;
	var param = "";
	if( arr_t1.length > 1) {
		param_flag = true;
		param = arr_t1[1];
	}
	var real_path = arr_t1[0];
	var arr_t2 = real_path.split("/");
	var api_endpoint = arr_t2[arr_t2.length - 1];
	//console.log("URL*********", url);
	//console.log(api_endpoint)
	var return_url = "";
	if( api_endpoint == 'user' ) {
		return_url = site_url + "/user";
	} else if( api_endpoint == 'market' ) {
		return_url = php_api_url + "/market.php";
		if ( param_flag ) {
			return_url += "?" + param;
		}
	} 
	else {
		return_url = url;
	}
	return return_url;
}