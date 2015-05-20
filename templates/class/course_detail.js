
	$(".weekday").click(function(){
		var i = $(this).attr("id");
		$(".weekday").attr("class", "column weekday col-xs-1 success ");
		$(this).attr("class", "column weekday col-xs-11 info");
		$.ajax({
			url: "configs/class/course_person.php",
			type: "POST",
			data:{
				user: $("#stunumber").val(),
				pwd: $("#stupwd").val()
			},
			dataType: "json",
			error: function(){  
	        	alert('连接教务处出错，请检查用户名和密码重试~');  
	    	}, 
			success: function(data){
				var _dayCourse = '';
				$.each(data, function(k, v){
					_dayCourse += "<tr class=\"row info\">";
					$.each(v, function(k1, v1){
						if (k1 == 0) {
							_dayCourse += "<td class=\"column col-xs-1 success\">" + v1 + "</td>";
						}
						else if (k1 == i) {
							_dayCourse += "<td class=\"column col-xs-11\">" + v1 + "</td>";
						}
						else {
							_dayCourse += "<td class=\"column col-xs-1\"></td>";
						}
					});
					_dayCourse += "</tr>";
				});
				$("#detail").html(_dayCourse);
			}
		});
	});
	$("button").click(function(){
		var day = new Date().getDay();	
		$.ajax({
	        url: "configs/class/course_person.php",  
	        type: "POST",
	        data:{
	            user: $("#stunumber").val(),
	            pwd: $("#stupwd").val()
	        },
	        dataType: "json",
	        error: function(){  
	            alert('连接教务处出错，请检查用户名和密码重试~');  
	        }, 
	        success: function(data) {   //如果调用php成功 
	        	var _table = '';
	        	$.each(data, function(k, v){
	        		_table += "<tr class=\"row success\">";
	        		$.each(v, function(k1,v1){
	        			if (k1 == 0) {
							_table += "<td class=\"column col-xs-1 success\">" + v1 + "</td>";
						}
						else if (k1 == day) {
							_table += "<td class=\"column col-xs-7\">" + v1 + "</td>";
						}
						else {
							_table += "<td class=\"column col-xs-0\">" + v1 + "</td>";
						}
	        		});
	        		_table += "</tr>";
	        	});
	        	$("#detail").html(_table);
	    } 
	});
	});