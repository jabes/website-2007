<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Random Game</title>
<style type="text/css">
	body { background:#000; color:#FFF; }
	input { background:#FFF; border:none; }
	input.input { width:20px; }
	textarea#results { width:100px; height:100px; }
	input#count { width:50px; }
</style>
<? 
$n = $_GET['num'];
for ($i=1; $i<=$n; $i++) {
	if ($i != $n) { $coma = ","; } else { $coma = ""; }
	$str01 .= "tf0".$i.".value".$coma;
	$str02 .= "v0".$i.$coma;
}
?>
</head>
<body>
<script type="text/javascript">
var winner = null;
var pasval = null;
function navto(urlnum){ window.location = "http://www.jbull.ca/gen.php?num="+urlnum; }
function start(<? echo $str02; ?>){
<? for ($i=1; $i<=$n; $i++) { ?>
	if (<? echo "v0".$i; ?> =="") { alert("Field #<? echo $i ?> is empty"); exit; }
	if (isNaN(<? echo "v0".$i; ?>)){ alert("Field #<? echo $i ?> may only contain numbers"); exit; }
<? } ?>
	if (winner != null) { alert("The winner is "+winner); } else { nodice(<? echo $str02; ?>); }
}
function nodice(<? echo $str02; ?>) {
	var num = Math.random() * 100;
	num = Math.round(num);
	document.getElementById('results').value += num + " ";
<? for ($i=1; $i<=$n; $i++) { ?>
	if (<? echo "v0".$i; ?> == num) { winner = <? echo $i; ?>; }
<? } ?>
	pasval += 1;
	document.getElementById('count').value = pasval;
	start(<? echo $str02; ?>);
}
</script>
<? if ($n != "") { ?>
<form name="passer">
	<p>Input Area</p>
	<? for ($i=1; $i<=$n; $i++) { ?><p>Player #<? echo $i; ?> Guess: <input type="text" autocomplete="off" name="tf0<? echo $i ?>" class="input" maxlength="2" /></p><? } ?>
	<p><input value="GO!" type="button" onclick="start(<? echo $str01; ?>)" /> | <input value="CLEAR" type="button" onclick="document.passer.reset();" /></p>
	<p>Generator Results</p>
	<textarea id="results" readonly="readonly"></textarea>
    <p>Number Of Passes</p>
	<input id="count" readonly="readonly"></textarea>
</form>
<? } else { ?>
<form name="former">
	<p>Number Of Players</p>
	<select name="numofplayers">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	</select>
	<input value="GO!" type="button" onclick="navto(document.forms['former'].numofplayers.options[numofplayers.selectedIndex].value)" />
</form>
<? } ?>
</body>
</html>
