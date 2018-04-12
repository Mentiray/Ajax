$(function(){
	refresh();
});
function refresh(){
	$("tbody").empty();
	$.ajax({
		url : "GetData.php",
		type : "POST",
		dataType : "json",
		success : function(data){
			var $tbody = $("tbody");
			var list = data.boss; //选取list对象，进行遍历
			/*foreach遍历list对象
			list.forEach(function(item){
				var $bossname = $("<td></td>").html(item.bossname);
				var $bossage = $("<td></td>").html(item.bossage);
				var $tr = $("<tr></tr>");
				$tr.append($bossname,$bossage);
				$tbody.append($tr);
			});*/
			
			/*$.each遍历list对象*/
			$.each(list,function(index,item){
				var $bossname = $("<td></td>").html(item.bossname);
				var $bossage = $("<td></td>").html(item.bossage);
				var $tr = $("<tr></tr>");
				$tr.append($bossname,$bossage);
				$tbody.append($tr);
			});
		},
		error : function(jqXHR){
			alert(jqXHR.status);
		}	
	})
}