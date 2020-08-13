<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//проверка на спам
	if(!empty($_POST['name'])) {
		//неудачная проверка на спам
	}
	else {
		if(!empty($_POST['number'])) {
		//удачная проверка на спам
    //основная форма
    $url = '<br><br>'.$_SERVER['HTTP_REFERER'].'';
    $date = date('d.m.Y G:i:s').'<br>';
    if (isset($_POST['tid'])) {$tid = '<br><b>Тема:</b> '.trim($_POST['tid']);}
    if (isset($_POST['inpt1'])) {$name = '<br><b>Имя:</b> '.trim($_POST['inpt1']);}
    if (isset($_POST['number'])) {$number = '<br><b>Телефон:</b> '.trim($_POST['number']);}
    if (isset($_POST['email'])) {$email = '<br><b>Email:</b> '.trim($_POST['email']);}
    if (isset($_POST['message'])) {$message = '<br><b>Сообщение:</b> '.trim($_POST['message']);}
    //акции
    if (isset($_POST['sale_type'])) {$sale_type = '<br><b>Тип акции:</b> '.($_POST['sale_type']);}
    //форма узнать расчёт
    if(isset($_POST['calc_type'])) {$calc_type = '<br><b>Тип постройки:</b> '.trim($_POST['calc_type']);}
    if(isset($_POST['calc_sq'])) {$calc_sq = '<br><b>Площадь здания: </b>'.trim($_POST['calc_sq']);}
    if(isset($_POST['calc_profile'])) {$calc_profile = '<br><b>Утепленное или холодное здание: </b>'.trim($_POST['calc_profile']);}
    //калькулятор
    if(isset($_POST['calc_dlina'])) {$calc_dlina = '<br><b>Длина здания:</b> '.trim($_POST['calc_dlina']);}
    if(isset($_POST['calc_shirina'])) {$calc_shirina = '<br><b>Ширина здания:</b> '.trim($_POST['calc_shirina']);}
    if(isset($_POST['calc_square'])) {$calc_square = '<br><b>Площадь здания:</b> '.trim($_POST['calc_square']);}
    if(isset($_POST['calc_profile'])) {$calc_profile = '<br><b>Утепленное или холодное здание: </b>'.trim($_POST['calc_profile']);}
    if (isset($_POST['calc_message'])) {$calc_message = '<br><b>Дополнительная информация:</b> '.trim($_POST['calc_message']);}
    $to = "info@me-g.ru"; //адрес почты получателя
    $sendfrom   = "admin@me-g.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "\"Заявка с сайта Metal Expert group\"\n";
    $body = "$date $tid $name $number $email $message $sale_type $calc_type $calc_sq $calc_profile $url $calc_dlina $calc_shirina $calc_square $calc_profile $calc_message";
    $send = mail($to, $subject, $body, $headers);
                    
                    
                    
                    ### Интеграция с AmoCRM ###
                    
                    $original_body = $body;
                    $mail = (object) array(
                        'url' => $_SERVER['HTTP_REFERER'].'',
                        'date' => date('d.m.Y G:i:s'),
                        'tid' => trim($_POST['tid']),
                        'name' => trim($_POST['inpt1']),
                        'number' => trim($_POST['number']),
                        'email' => trim($_POST['email']),
                        'message' => trim($_POST['message']),
                        'sale_type' => trim($_POST['sale_type']),
                        'calc_type' => trim($_POST['calc_type']),
                        'calc_sq' => trim($_POST['calc_sq']),
                        'calc_profile' => trim($_POST['calc_profile'])
                    );
                    
                    foreach ($mail as &$field) {
                        if (empty($field) AND ($field != '0')) {
                            $field = 'н/з';
                        }
                    }
                    
                    switch ($mail->tid) {
                        
                        case 'Заказать обратный звонок' :
                            $to = "20966626.144478@parser.amocrm.ru"; //"7741076.92757@parser.amocrm.ru";
                            $body = "<b>Дата:</b> $mail->date<br>"
                                  . "<b>Тема:</b> $mail->tid<br>"
                                  . "<b>Телефон:</b> $mail->number<br>"
                                  . "<b>Источник:</b> $mail->url";
                            break;
                        
                        case 'Расчёт ангара за 20 минут!' :
                            $to = "20966626.144480@parser.amocrm.ru";//"7741076.92761@parser.amocrm.ru";
                            $body = "<b>Дата:</b> $mail->date<br>"
                                  . "<b>Тема:</b> $mail->tid<br>"
                                  . "<b>Имя:</b> $mail->name<br>"
                                  . "<b>Телефон:</b> $mail->number<br>"
                                  . "<b>Email:</b> $mail->email<br>"
                                  . "<b>Сообщение:</b> $mail->message<br>"
                                  . "<b>Источник:</b> $mail->url";
                            break;
                        
                        case 'Расчитать стоимость' :
                            $to = "20966626.144484@parser.amocrm.ru"; //"7741076.92763@parser.amocrm.ru";
                            $body = "<b>Дата:</b> $mail->date<br>"
                                  . "<b>Тема:</b> $mail->tid<br>"
                                  . "<b>Имя:</b> $mail->name<br>"
                                  . "<b>Телефон:</b> $mail->number<br>"
                                  . "<b>Сообщение:</b> $mail->message<br>"
                                  . "<b>Тип постройки:</b> $mail->calc_type<br>"
                                  . "<b>Площадь здания:</b> $mail->calc_sq<br>"
                                  . "<b>Утепленное или холодное здание:</b> $mail->calc_profile<br>"
                                  . "<b>Источник:</b> $mail->url";
                            break;
                        
                        case 'Написать письмо' :
                            $to = "20966626.144486@parser.amocrm.ru";//"7741076.92759@parser.amocrm.ru";
                            $body = "<b>Дата:</b> $mail->date<br>"
                                  . "<b>Тема:</b> $mail->tid<br>"
                                  . "<b>Имя:</b> $mail->name<br>"
                                  . "<b>Телефон:</b> $mail->number<br>"
                                  . "<b>Email:</b> $mail->email<br>"
                                  . "<b>Сообщение:</b> $mail->message<br>"
                                  . "<b>Источник:</b> $mail->url";
                            break;
                        
                        case 'Заявка на лизинг' :
                            $to = "20966626.146610@parser.amocrm.ru";
                            $body = "<b>Дата:</b> $mail->date<br>"
                                  . "<b>Тема:</b> $mail->tid<br>"
                                  . "<b>Имя:</b> $mail->name<br>"
                                  . "<b>Телефон:</b> $mail->number<br>"
                                  . "<b>Сообщение:</b> $mail->message<br>"
                                  . "<b>Источник:</b> $mail->url";
                            break;
                        
                        default :
                           
                            if (preg_match('/\AСпецпредложения:/',$mail->tid)) {
                                $to = "20966626.144488@parser.amocrm.ru";//"7741076.92769@parser.amocrm.ru";
                                $body = "<b>Дата:</b> $mail->date<br>"
                                      . "<b>Тема:</b> $mail->tid<br>"
                                      . "<b>Имя:</b> $mail->name<br>"
                                      . "<b>Телефон:</b> $mail->number<br>"
                                      . "<b>Email:</b> $mail->email<br>"
                                      . "<b>Сообщение:</b> $mail->message<br>"
                                      . "<b>Источник:</b> $mail->url";
                            } elseif (preg_match('/\AЗаказ:/',$mail->tid)) {
                                $to = "20966626.144490@parser.amocrm.ru";//"7741076.92841@parser.amocrm.ru";
                                $body = "<b>Дата:</b> $mail->date<br>"
                                      . "<b>Тема:</b> $mail->tid<br>"
                                      . "<b>Имя:</b> $mail->name<br>"
                                      . "<b>Телефон:</b> $mail->number<br>"
                                      . "<b>Email:</b> $mail->email<br>"
                                      . "<b>Сообщение:</b> $mail->message<br>"
                                      . "<b>Источник:</b> $mail->url";
                            } else {
                                $to = "20966626.146624@parser.amocrm.ru";
                                $body = $original_body;
                            }
                    }
                    mail($to, $subject, $body, $headers);
                    
                    ##################
                }
            }
}
else {
	http_response_code(403);
	echo "Попробуйте еще раз";
}
?>