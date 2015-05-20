$(document).ready(function(){
	$('input:button').click(function(){
		var email = $('#inputEmail').val();
		var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
        if (!reg.test(email)) {
             alert('您填写的邮箱格式不正确,请重新填写!');
             return false;
     	}
		$.getJSON(
			"configs/employ/subscribe.php",
			{
				email: email
			},
			function(data){
        		alert(data);
      		});
	});
});