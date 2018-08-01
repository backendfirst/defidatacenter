<style type="text/css">
.input {
	float: left;
	width: 100%;
}
.caja {
	width: 400px;
}
.resultados {
	float: left;
	width: 400px;
	min-height: 100px;
	border: 1px dashed #F00;
}
</style>
<script src="ajax.js" language="javascript"></script>
<div class="input"><input type="text" size="40" class="caja" id="valor" onkeyup="Buscar();"/></div>
<div class="resultados" id="resultados"></div>