<?php
//arrive, sejong gov building
 
//$lat1= '126.978304';
//$lon1= '37.574240';
//$lat2= '127.289030'; //세종시청
//$lon2= '36.480146';

$co1 = $_GET['co1'];
$co2 = $_GET['co2'];

$lat1 = trim(explode(",", $co1)[1]);
$lon1 = trim(explode(",", $co1)[0]);
$lat2 = trim(explode(",", $co2)[1]);
$lon2 = trim(explode(",", $co2)[0]);


//$lat2= '127.267749'; //정부세종청사
//$lon2= '36.504337';
$url = "https://naveropenapi.apigw.ntruss.com/map-direction/v1/driving?start=$lat1,$lon1&goal=$lat2,$lon2&option=trafast";
$headers = array("X-NCP-APIGW-API-KEY-ID: 4x7btpvjs3", "X-NCP-APIGW-API-KEY: V9kKAURy62T92qvdgXyWcsz11snsncFeCDqMlfTl");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // exec 실행 후 결과 자동으로 출력 안됨

//print_r($url);

$result = curl_exec($ch);

print_r($result);

if ($result === false) {
    //print_r(curl_errno($ch));
    //echo "<br>";
    print_r(curl_error($ch));
    echo "<br>";
}

curl_close($ch);
?>
