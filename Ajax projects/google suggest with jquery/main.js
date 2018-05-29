$(document).ready(function(){
	$('#searchField').keyup(function(){
		var qu = $(this).val();
		var obj = $('#searchField');
		if(qu != ''){
			$.ajax({
				url:"http://clients1.google.com/complete/search?hl=en&client=firefox&q=" + qu,
				method:"GET",
				dataType:"jsonp",
				success: function(data){
					var searchList = $('#searchList');
					var link = '';
					$.each(data[1],function(key, value){
						link += '<li class="list-group-item">' + value + '</li>';
					});
					searchList.html(link);
				}
			});
		}else{
			obj.html('');
		}
	});

	$(document).on('click','li',function(){
		$("#searchField").val($(this).text());
		$("#searchList").fadeOut();
	});
});