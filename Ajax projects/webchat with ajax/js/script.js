function update() {
	var chatlog = $('.chatlog');
	$.ajax({
		url: "api/retreivechat.php",
		method:"GET",
		success:function(data){
			chatlog.html(data);
		}
	});
}

function sendmsg(username){
	var msg = $('#msgbox').val();
	if(msg != ''){
		$.ajax({
			url: "api/sendchat.php",
			method: "POST",
			data: {msg:msg,uname:username},
			success: function(data){
				update();
			}
		});
	}
}

$(document).ready(function(){
	setInterval(function(){
		update();
	}, 1000);
});