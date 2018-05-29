function askGoogleSuggest(){
	var input = document.getElementById('textfield');
	if(input.value){
		getData("google.php?qu=" + input.value);
	}else{
		var targetDiv = document.getElementById("targetDiv");
		targetDiv.innerHTML = "";
	}
}



function getData(datasrc) {
	var req = false;

	if(window.XMLHttpRequest){
		req = new XMLHttpRequest();
	}else if(window.ActiveXObject){
		req = new ActiveXObject("Microsoft.XMLHTTP");
	}

	if(req){
		req.open("GET", datasrc);
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				var text = req.responseText;
				update(text);
			}
		}
		req.send();
	}
}

function update(text) {
	var parser = new DOMParser();
	var xmldoc = parser.parseFromString(text,'text/xml');
	
	//console.log(xmldoc.getElementsByTagName('suggestion')[0].getAttribute('data'));

	var suggestions = xmldoc.getElementsByTagName('suggestion');
	var data = '';
	for(var i = 0; i < suggestions.length; i++){
		data += '<li class="list-group-item">' + suggestions[i].getAttribute('data') + '</li>';
	}
	console.log(data);
	document.getElementById('targetDiv').innerHTML = data;
}
