$(document).ready(function(){
	$('#country').keyup(function(){
		var query = $(this).val();
		var obj = $('#countryList');
		if(query != ''){
			$.ajax({
				url: "search.php",
				method: "POST",
				data:{query:query},
				success:function(data){
					obj.fadeIn();
					obj.html(data);
				}
			});
		}else{
			obj.html('');
		}
	});

	$(document).on('click','li',function(){
		$("#country").val($(this).text());
		$("#countryList").fadeOut();
	});
});