function Ajax({method = 'get',url,data,success,error}){
	var xhr = null;
	try{
		xhr = new XMLHttpRequest();
	}catch(error){
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (method == 'get' && data) {
		url += '?' + data +'&' + new Date().getTime();
	}
	xhr.open(method,url,true);

	if (method == 'get') {
		xhr.send();
	}else{
		xhr.setRequestHeader("content-type,application/x-www-form-urlencoded");
		xhr.send(data);
	}


	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4) {
			if(xhr.status == 200){
				if (success) {
					success(xhr.responseText)
				}
			}else{
				if (error) {
					error("error :" + xhr.status);
				}
			}
		}
	}
}