function populateAllTuples() {
	var queryResult;
	$("#select").empty();
	$.ajax({
		url: 'back-end/populateAllTuples.php',
		success: function (data) {
			queryResult = JSON.parse(data);
			console.log(queryResult);
			appender(queryResult);
			// document.getElementById('select').innerHTML = data;
		}
	});
}

// "SELECT uid, pass FROM userdata WHERE username='$username'"
function appender(data) {

	var divr = '<div class="select-row">';
	var divt = '<div class="select-all-tuple">';
	var dive = '<div class="select-all-edit">';
	var al = '<a class="select-all-left">';
	var ar = '<a class="select-all-right">';
	var e1 = '<a class="editor1 edit-child">';
	var e2 = '" class="editor2 edit-child btn material_shadow">';
	var se = '</a>';
	var ae = '</a>';
	var divend = '</div>';

	/**
	 * 
	 * 	<div class="select-row">
			<div class="select-all-tuple">
				<a></a><a><a>
			</div>
			<div class="select-all-edit">
				<a class="editor1"></a>
				<span>class="editor2></span>
			</div>
		</div.			
	*/

	for (var i = 0; i < data.length; i++) {
		$('#select').append(
			divr +
				divt +
					al + data[i].TITLE + ae + ar + data[i].UID + ae +
				divend +
				dive +
					e1 +
						"<p>Password:</p><p>" + data[i].PASS + "</p>" +
					ae +
					'<a target="_blank" href="https://' + data[i].URL + e2 + 
						"open website" +
					ae +
				divend +
			divend
		);
	}
};