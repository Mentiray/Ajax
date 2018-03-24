$("#register").click(function(){
	$.ajax({
		type:"post",
		url:"register.php",
		async:true,
		data:{
			"reginame" : $("#userName").val(),
			"regipwd"  : $("#userPwd").val()
		},
		dataType:'json',
		success:function(data){
			switch(data.type){
				case 0:
					alert("账号已存在");
					break;
				case 1:
					alert("注册成功");
					break;
			}
		}
	});
});