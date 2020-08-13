<?php
//проверка на спам
if(!empty($_POST['name'])) {
	//неудачная проверка на спам
}
else {
	//удачная проверка на спам
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//техническое задание
			//$url = '<br><br>'.$_SERVER['HTTP_REFERER'].'';
			$date = date('d.m.Y G:i:s').'<br>';
			if (!empty($_POST['tid'])) {$tid = '<br><b>Тема:</b> '.trim($_POST['tid']);}
                        if (!empty($_POST['inpt1'])) {$name = '<br><b>Имя:</b> '.trim($_POST['inpt1']);} else {$name = '<br><b>Имя:</b> н/з';}
			if (!empty($_POST['number'])) {$number = '<br><b>Телефон:</b> '.trim($_POST['number']);}
			//if (!empty($_POST['email'])) {$email = '<br><b>Email:</b> '.trim($_POST['email']);}
			//if (!empty($_POST['message'])) {$message = '<br><b>Сообщение:</b> '.trim($_POST['message']);}
			if(!empty($_POST['tz_name'])) {$tz_name = "<br><b>Наименование объекта, регион строительства, адрес:</b> ".trim($_POST['tz_name'])."";}
			if(!empty($_POST['tz_nazn'])) {$tz_nazn = "<br><b>Функциональное назначение объекта:</b> ".trim($_POST['tz_nazn'])."";}
			if(!empty($_POST['tz_type'])) {$tz_type = "<br><b>Вид строительства:</b> ".trim($_POST['tz_type'])."";}
			if(!empty($_POST['tz_roof'])) {$tz_roof = "<br><b>Кровля:</b> ".trim($_POST['tz_roof'])."";}
			if(!empty($_POST['tz_roof_w_1'])) {$tz_roof_w_1 = trim($_POST['tz_roof_w_1'])." мм";}
			if(!empty($_POST['tz_roof_w_2'])) {$tz_roof_w_2 = trim($_POST['tz_roof_w_2'])." мм";}
			if(!empty($_POST['tz_roof_color'])) {$tz_roof_color = "<br><b>Цвет кровли RAL:</b> ".trim($_POST['tz_roof_color'])."";}
			if(!empty($_POST['tz_walls'])) {$tz_walls = "<br><b>Стены:</b> ".trim($_POST['tz_walls'])."";}
			if(!empty($_POST['tz_walls_w_1'])) {$tz_walls_w_1 = trim($_POST['tz_walls_w_1'])." мм<br>";}
			if(!empty($_POST['tz_walls_w_2'])) {$tz_walls_w_2 = trim($_POST['tz_walls_w_2'])." мм<br>";}
			if(!empty($_POST['tz_wall_color'])) {$tz_wall_color = "<br><b>Цвет кровли RAL:</b> ".trim($_POST['tz_wall_color'])."";}
			if(!empty($_POST['tz_size_w_1'])) {$tz_size_w_1 = "<br><b>Длина:</b> ".trim($_POST['tz_size_w_1'])." м";}
			if(!empty($_POST['tz_size_w_2'])) {$tz_size_w_2 = "<br><b>Ширина:</b> ".trim($_POST['tz_size_w_2'])." м";}
			if(!empty($_POST['tz_size_w_3'])) {$tz_size_w_3 = "<br><b>Высота до низа несущих конструкций:</b> ".trim($_POST['tz_size_w_3'])." м";}
			if(!empty($_POST['tz_floor'])) {$tz_floor = "<br><b>Этажность:</b> ".trim($_POST['tz_floor'])."";}
			if(!empty($_POST['tz_area'])) {$tz_area = "<br><b>Общая площадь здания:</b> ".trim($_POST['tz_area'])." м2";}
			if(!empty($_POST['tz_frame_color'])) {$tz_frame_color = "<br><b>Цвет металлокаркаса:</b> ".trim($_POST['tz_frame_color'])."";}
			if(!empty($_POST['tz_windows'])) {$tz_windows = "<br><b>Окна:</b> ".trim($_POST['tz_windows'])."";}
			if(!empty($_POST['tz_windows_other'])) {$tz_windows_other = trim($_POST['tz_windows_other'])."";}
			if(!empty($_POST['tz_foundation_beam'])) {$tz_foundation_beam = "<br><b>Фундаментная балка:</b> ".trim($_POST['tz_foundation_beam'])."";}
			if(!empty($_POST['tz_gate'])) {$tz_gate = "<br><b>Ворота:</b> ".trim($_POST['tz_gate'])."";}
			if(!empty($_POST['tz_gate_other'])) {$tz_gate_other = trim($_POST['tz_gate_other'])."";}
			if(!empty($_POST['tz_doors'])) {$tz_doors = "<br><b>Двери:</b> ".trim($_POST['tz_doors'])."";}
			if(!empty($_POST['tz_foundation'])) {$tz_foundation = "<br><b>Фундаменты:</b> ".trim($_POST['tz_foundation'])."";}
			if(!empty($_POST['tz_foundation_other'])) {$tz_foundation_other = trim($_POST['tz_foundation_other'])."";}
			if(!empty($_POST['tz_cathead'])) {$tz_cathead = "<br><b>Кран-балка:</b> ".trim($_POST['tz_cathead'])."";}
			if(!empty($_POST['tz_cathead_capacity'])) {$tz_cathead_capacity = "<br><b>Грузоподъемность:</b> ".trim($_POST['tz_cathead_capacity'])."";}
			if(!empty($_POST['tz_floor_1'])) {$tz_floor_1 = "<br><b>Полы:</b> ".trim($_POST['tz_floor_1'])."";}
			if(!empty($_POST['tz_overlap'])) {$tz_overlap = "<br><b>Перекрытие:</b> ".trim($_POST['tz_overlap'])."";}
			if(!empty($_POST['tz_overlap_other'])) {$tz_overlap_other = trim($_POST['tz_overlap_other'])."";}
			if(!empty($_POST['tz_message_1'])) {$tz_message_1 = "<br><b>Особые условия строительства:</b> ".trim($_POST['tz_message_1'])."";}
			//Проект для получения разрешения на строительство
			$stage1_0 = "<br><br><b>Проект для получения разрешения на строительство:</b>";
			if(!empty($_POST['stage1_1'])) {$stage1_1 = "<br>".trim($_POST['stage1_1']);}
			if(!empty($_POST['stage1_2'])) {$stage1_2 = "<br>".trim($_POST['stage1_2']);}
			if(!empty($_POST['stage1_3'])) {$stage1_3 = "<br>".trim($_POST['stage1_3']);}
			if(!empty($_POST['stage1_4'])) {$stage1_4 = "<br>".trim($_POST['stage1_4']);}
			if(!empty($_POST['stage1_5'])) {$stage1_5 = "<br>".trim($_POST['stage1_5']);}
			if(!empty($_POST['stage1_6'])) {$stage1_6 = "<br>".trim($_POST['stage1_6']);}
			if(!empty($_POST['stage1_7'])) {$stage1_7 = "<br>".trim($_POST['stage1_7']);}
			if(!empty($_POST['stage1_8'])) {$stage1_8 = "<br>".trim($_POST['stage1_8']);}
			//рабочий проект
			$stage2_0 = "<br><br><b>Рабочий проект:</b>";
			if(!empty($_POST['stage2_1'])) {$stage2_1 = "<br>".trim($_POST['stage2_1']);}
			if(!empty($_POST['stage2_2'])) {$stage2_2 = "<br>".trim($_POST['stage2_2']);}
			if(!empty($_POST['stage2_3'])) {$stage2_3 = "<br>".trim($_POST['stage2_3']);}
			if(!empty($_POST['stage2_4'])) {$stage2_4 = "<br>".trim($_POST['stage2_4']);}
			if(!empty($_POST['stage2_5'])) {$stage2_5 = "<br>".trim($_POST['stage2_5']);}
			if(!empty($_POST['stage2_6'])) {$stage2_6 = "<br>".trim($_POST['stage2_6']);}
			//Исходные данные, предоставляемые заказчиком
			$stage3_0 = "<br><br><b>Исходные данные, предоставляемые заказчиком:</b>";
			if(!empty($_POST['stage3_1'])) {$stage3_1 = "<br>".trim($_POST['stage3_1']);}
			if(!empty($_POST['stage3_2'])) {$stage3_2 = "<br>".trim($_POST['stage3_2']);}
			if(!empty($_POST['stage3_3'])) {$stage3_3 = "<br>".trim($_POST['stage3_3']);}
			if(!empty($_POST['stage3_4'])) {$stage3_4 = "<br>".trim($_POST['stage3_4']);}
			if(!empty($_POST['stage3_5'])) {$stage3_5 = "<br>".trim($_POST['stage3_5']);}
			if(!empty($_POST['stage3_6'])) {$stage3_6 = "<br>".trim($_POST['stage3_6']);}
			//ТУ на подключение инженерных коммуникаций
			$stage4_0 = "<br><br><b>ТУ на подключение инженерных коммуникаций:</b>";
			if(!empty($_POST['stage4_1'])) {$stage4_1 = "<br>".trim($_POST['stage4_1']);}
			if(!empty($_POST['stage4_2'])) {$stage4_2 = "<br>".trim($_POST['stage4_2']);}
			if(!empty($_POST['stage4_3'])) {$stage4_3 = "<br>".trim($_POST['stage4_3']);}
			if(!empty($_POST['stage4_4'])) {$stage4_4 = "<br>".trim($_POST['stage4_4']);}
			if(!empty($_POST['stage4_5'])) {$stage4_5 = "<br>".trim($_POST['stage4_5']);}
			if(!empty($_POST['stage4_5_other'])) {$stage4_5_other = trim($_POST['stage4_5_other']);}		
			$to = "info@me-g.ru"; //адрес почты получателя
			$sendfrom   = "admin@me-g.ru";
			$headers  = "From: " . strip_tags($sendfrom) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
			$subject = "\"Заявка с сайта Metal Expert group\"\n";
			$body = "$date $tid $name $number 
			$tz_name
			$tz_nazn
			$tz_type
			$tz_roof $tz_roof_w_1 $tz_roof_w_2
			$tz_roof_color
			$tz_walls $tz_walls_w_1 $tz_walls_w_2
			$tz_wall_color
			$tz_size_w_1
			$tz_size_w_2
			$tz_size_w_3
			$tz_floor
			$tz_area
			$tz_frame_color
			$tz_windows $tz_windows_other
			$tz_foundation_beam
			$tz_gate $tz_gate_other
			$tz_doors
			$tz_foundation $tz_foundation_other
			$tz_cathead
			$tz_cathead_capacity
			$tz_floor_1
			$tz_overlap $tz_overlap_other
			$tz_message_1
			$stage1_0
			$stage1_1
			$stage1_2
			$stage1_3
			$stage1_4
			$stage1_5
			$stage1_6
			$stage1_7
			$stage1_8
			$stage2_0
			$stage2_1
			$stage2_2
			$stage2_3
			$stage2_4
			$stage2_5
			$stage2_6
			$stage3_0
			$stage3_1
			$stage3_2
			$stage3_3
			$stage3_4
			$stage3_5
			$stage3_6
			$stage4_0
			$stage4_1
			$stage4_2
			$stage4_3
			$stage4_4
			$stage4_5 $stage4_5_other
			";
			$boundary = md5(date('r', time()));
			$filesize = '';
			$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
			$body="
			Content-Type: multipart/mixed; boundary=\"$boundary\"

			--$boundary
			Content-Type: text/html; charset=\"utf-8\"
			Content-Transfer-Encoding: 7bit

			$body";
			  for($i=0;$i<count($_FILES['fileFF']['name']);$i++) {
				 if(is_uploaded_file($_FILES['fileFF']['tmp_name'][$i])) {
					 $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'][$i])));
					 $filename = $_FILES['fileFF']['name'][$i];
					 $filetype = $_FILES['fileFF']['type'][$i];
					 $filesize += $_FILES['fileFF']['size'][$i];
					 $body.="

			--$boundary
			Content-Type: \"$filetype\"; name=\"$filename\"
			Content-Transfer-Encoding: base64
			Content-Disposition: attachment; filename=\"$filename\"

			$attachment";
				 }
			   }
			   $body.="
			--$boundary--";

			  if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
				$send = mail ($to, $subject, $body, $headers);
                                
                                ### Интеграция с AmoCRM ###   
                                /*comment*/             
                                //mail("20966626.144532@parser.amocrm.ru", $subject, $body, $headers); 
                                /*comment*/ 
                                //"7741076.92779@parser.amocrm.ru"            
                                ############################

			  } else {
				echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
			  }
				
			}
			else {
				http_response_code(403);
				echo "Попробуйте еще раз";
			}
}
?>