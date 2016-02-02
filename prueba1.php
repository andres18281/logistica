<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
var str = "joselito@velasquez.com";
    var n = '';

    for(var i = 0;i <= 2;i++){
      n = n + str.charCodeAt(i);
    }
    n = n.replace('NaN','');
    alert(n);
</script>
</body>
</html>