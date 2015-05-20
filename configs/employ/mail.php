<?php


	class Send_Mail 
	{
		var $message;
		var $to;

		function __construct()
		{
			# code...
		}

		public function new_subscribe()
		{
			$to = $this->to;
			$subject = "【XMU employ information】Subscribe successfully";

			$message = "
			<div style=\"background-color:#d0d0d0;background-image:url(http://weixin.qq.com/zh_CN/htmledition/images/weixin/letter/mmsgletter_2_bg.png);text-align:center;padding:40px;\">
				<div class=\"mmsgLetter\" style=\"width:580px;margin:0 auto;padding:10px;color:#333;background-color:#fff;border:0px solid #aaa;border-radius:5px;-webkit-box-shadow:3px 3px 10px #999;-moz-box-shadow:3px 3px 10px #999;box-shadow:3px 3px 10px #999;font-family:Verdana, sans-serif; \">	
					<div>
						<p>
							Congratulations, your E-mail " . $to . " have subscribe successfully.<br>Please add this E-mail addrsss 'admin@guandong.com' to white list.
						</p>
						<p>
							You can get the latest news from the link bellow.

						</p>
						<p style=\"word-wrap:break-word;word-break:break-all;\">
							<a href=\"http://104.224.175.151/findjob\" target=\"_blank\">XMU employ information</a>
						</p>
						<p>
							If the request is not made by you, there may be a security risk about your E-mail.
						</p>			
					</div>	
				</div>
			</div>";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= 'From: <admin@guandong.com>' . "\r\n";
			$headers .= 'Bcc: 1165638411@qq.com' . "\r\n";

			return mail($to, $subject, $message, $headers);
		}
		
		
		public function new_message()
		{
			$mail_list = fopen("maillist.txt", "r") or die("Unable to open file!");
			while (!feof($mail_list)) {
				$to = trim(fgets($mail_list));
				$this->new_message_single($to);
			}
			fclose($mail_list);
		}

		public function new_message_single($to)
		{

			$subject = "【XMU employ information】New message had posted";

			$message = "<div style=\"background-color:#d0d0d0;background-image:url(http://weixin.qq.com/zh_CN/htmledition/images/weixin/letter/mmsgletter_2_bg.png);text-align:center;padding:40px;\">
				<div class=\"mmsgLetter\" style=\"width:580px;margin:0 auto;padding:10px;color:#333;background-color:#fff;border:0px solid #aaa;border-radius:5px;-webkit-box-shadow:3px 3px 10px #999;-moz-box-shadow:3px 3px 10px #999;box-shadow:3px 3px 10px #999;font-family:Verdana, sans-serif; \">	
					<div>
						<p>
							Some new information <br>" . $this->message . "<br>had posted.
						</p>
						<p>
							You can get the latest news from the link bellow.

						</p>
						<p style=\"word-wrap:break-word;word-break:break-all;\">
							<a href=\"http://104.224.175.151/findjob\" target=\"_blank\">XMU employ information</a>
						</p>			
					</div>	
				</div>
			</div>";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

			$headers .= 'From: <admin@guandong.com>' . "\r\n";

			mail($to, $subject, $message, $headers);
		}

	}

?>
