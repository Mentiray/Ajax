$("#add").click(function(){
	var insertData ={
		insertName : $("#insertName").val(),
		insertAge  : $("#insertAge").val()
	};
	$.ajax({
		url : "insert.php",
		type : "POST",
		data: insertData,
		dataType : "json",
		success: function(data){
			refresh();
		},
		error : function(jqXHR){
			alert(jqXHR.status);
		}
	});
})