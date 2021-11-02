$(document).ready((e) => {
	$.get("http://localhost:8080/admin/getData.php", (data, status) => {  
		console.dir(data);
	}, "json");
});