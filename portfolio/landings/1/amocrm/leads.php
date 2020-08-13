<?

$lead=array(
      'name'=>$name,
      'custom_fields'=>array(
        array(
          'id'=>1326243,
          'values'=>array(
            array(
              'value'=>$number
            )
          )
        ),
        array(
          'id'=>1326229,
          'values'=>array(
            array(
              'value'=>$referer
            )
          )
        ),
        array(
          'id'=>1326241,
          'values'=>array(
            array(
              'value'=>$phrase
            )
          )
        )


      )
    );
$leads['request']['leads']['add'][]=$lead;

$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';



$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($leads));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);


?>