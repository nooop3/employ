	<?php

	include_once("curl.php");

	$user = isset($_POST["user"])? $_POST["user"] : '';
	$pwd = isset($_POST["pwd"])? $_POST["pwd"] : '';

	if (($user)&&($pwd)) {
		
		$string = get_course_person($user, $pwd);

		$match = "/(?<=<\/th><\/tr>)[\s\S]*(?=<tr><td class=\"firstHiddenTd\">)/";
	    
		preg_match($match, $string, $table);

		$course = tableToArray($table[0]);

		echo json_encode($course);
			
	}

	

	function get_course_person($user, $pwd){

		$url_login = "http://ssfw.xmu.edu.cn/cmstar/userPasswordValidate.portal";
		$url_content = "http://ssfw.xmu.edu.cn/cmstar/index.portal?.pn=p1201_p3530_p3531";
		$post = "Login.Token1=" . $user . "&Login.Token2=" . $pwd . "&goto=http%3A%2F%2Fssfw.xmu.edu.cn%2Fcmstar%2FloginSuccess.portal&gotoOnFail=http%3A%2F%2Fssfw.xmu.edu.cn%2Fcmstar%2FloginFailure.portal";
		$cookie = dirname(__FILE__) . '/cookie.txt';

		login($url_login, $post, $cookie);
		return get_content($url_content, $cookie);

	}

	function tableToArray($str){

		$match1 = "/(?<=rowspan=\")[123456789]/";
		preg_match_all($match1, $str, $rowspan);

		$match2 = "/(?<=rowspan=\"[123456789]\"[( >)|>])[\s\S]*?(?=<\/td>)/";
		preg_match_all($match2, $str, $results2, 2);

		$k = 0;

		for ($i = 0; $i  <= 10; $i ++) { 
			
			for ($j = 0; $j <= 7; $j++) { 
				
				$n =$rowspan[0][$k];
				if (!isset($course[$i][$j])) {

					$course[$i][$j] = str_replace('<br>',',', $results2[$k][0]);
					$course[$i][$j] = trim(strip_tags($course[$i][$j]));
					$course[$i][$j] = str_replace('>&nbsp;', '', $course[$i][$j] );
					$course[$i][$j] = str_replace('&nbsp;', '', $course[$i][$j] );
					$course[$i][$j] = str_replace('style="text-align:center;vertical-align: middle;">', '', $course[$i][$j] );
					
					if (($course[$i][$j])&&($j)) {
						
						$str = explode(',',trim($course[$i][$j]));
						$course[$i][$j] = $str[0] . "<br />" . $str[1] . "<br />" . $str[3];

					}

					while ( $n != 1){
							
							$n--; 
							$course[$n + $i][$j] = $course[$i][$j];

					}

					$k++;
				}
				
			}

		}

		return  $course;
		
	}

	?>