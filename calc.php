<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> Lommeregner</title>
</head>
<body>
<h1>Lommeregner</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
	<input type="number" name="val1" placeholder="0" required="" /><br>
	<input type="number" name="val2" placeholder="0" required="" /><br>
	<button type="submit" name="operator" value="add">+</button>
	<button type="submit" name="operator" value="sub">-</button>
	<button type="submit" name="operator" value="mul">*</button>
	<button type="submit" name="operator" value="dev">/</button>
	<button type="submit" name="operator" value="mod">%</button>
	
	
</form>

<?php 

//$v1 = $_GET['val1'];
//$v2 = $_GET['val2'];
$op = $_GET['operator'];
if (!empty($op)) {

$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die ('missing or illegal val1 parameter');
$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die ('missing or illegal val2 parameter');


switch ($op) {
	case 'add':
		$res = $v1 + $v2;
		$opchar = ' + ';
		break;
	case 'sub':
		$res = $v1 - $v2;
		$opchar = ' - ';
		break;
	case 'mul':
		$res = $v1 * $v2;
		$opchar = ' * ';
		break;
	case 'dev':
		$res = $v1 / $v2;
		$opchar = ' / ';
		break;
	case 'mod':
		$res = $v1 % $v2;
		$opchar = ' % ';
		break;
	default:
		$res = 'unknown operator"'.$op.'"';
		break;
}

echo $v1.''.$opchar.''.$v2.' = '.$res;
}
?>

</body>
</html>