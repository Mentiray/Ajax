var loginTable = {
	username : $("#userName").val(),
	userpwd  : $("#userPwd").val()
};
$("#login").click(function(){
	$.ajax({
		type: "POST",
		url: "login.php",
		data: {
			"username" : $("#userName").val(),
			"userpwd"  : $("#userPwd").val()
		},
		dataType: "json",
		success: function(data){
			switch(data.type){
				case 0:
					alert("账户不存在");
					break;
				case 1:
					alert("登陆成功");
					window.location.href="system.html";
					break;
				case 2:
					alert("密码错误");
					break;
			}
		},
		error: function(jqXHR){
			alert(jqXHR.status);
		}
	})
});