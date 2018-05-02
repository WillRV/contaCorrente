$(document).ready(function () {
	$.ajax({
		url: 'api/saldo.json.php',
		success: function (dados) {
			$('#valor-saldo-atual').html(parseFloat(dados.saldo).toFixed(2).replace(".", ","));
		}
	});
});