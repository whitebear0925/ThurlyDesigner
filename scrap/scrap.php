<?php
ini_set('max_execution_time', 300);
function get_url($api_obj) {
	$url = $api_obj->url . "?";
	$url .= "path=" . $api_obj->path;
	if(isset($api_obj->type)) {
		$url .= "&type=" . $api_obj->type;
	}
	if(isset($api_obj->limit)) {
		$url .= "&limit=" . $api_obj->limit;
	}
	if(isset($api_obj->skip)) {
		$url .= "&skip=" . $api_obj->skip;
	}
	if(isset($api_obj->sort)) {
		$url .= "&sort=" . $api_obj->sort;
	}
	return $url;
}
function get_file_path ( $path ) {
	//https://cloud.gravit.io/market?limit=10000&skip=0&path=template.presentation&sort=name;
	global $json;
	$arr = explode("path=", $path);
	$arr_1 = explode("&", $arr[1]);
	$real_path = $arr_1[0];
	$file_path = "";
	foreach($json as $api_obj) {
		if($api_obj->path == $real_path) {
			$file_path = $api_obj->file;
		}
	}
	return $file_path;
}

function callback_func($content, $info)
{
	$file_path = get_file_path($info["url"]);
	if($file_path != "") {
		file_put_contents($file_path, $content);
		echo "<b>[".$file_path ."]</b>: done (<b>".$info['total_time']."s</b>) <br />";
	} else {
		echo "<path-invalid>: ". $info["url"];
	}

}

$file = 'scrap.json';
$json = json_decode(file_get_contents($file));
$mh = curl_multi_init();
foreach($json as $api_obj) {
	$url = get_url($api_obj);
	$ch = curl_init($url);
	curl_setopt_array($ch, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_SSL_VERIFYHOST => 0,
	  CURLOPT_SSL_VERIFYPEER => 0,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache",
	    "postman-token: f5e3a2a7-3d9b-6cf5-f163-6cd354661eb5"
	  ),
	));
	curl_multi_add_handle($mh, $ch);
}

do {
	$mrc = curl_multi_exec($mh, $active);
	if($state = curl_multi_info_read($mh)) {
		$info = curl_getinfo($state['handle']);
		callback_func(curl_multi_getcontent($state['handle']), $info);
		curl_multi_remove_handle($mh,$state['handle']);
	}
	usleep(1000);
} while($mrc == CURLM_CALL_MULTI_PERFORM || $active);
?>