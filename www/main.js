$(document).ready((e) => {
	$.get("http://localhost:8080/admin/getData.php", (data, status) => {  
		console.log("status: " + status);
		console.log("data: " + data);
	}, "json");
});