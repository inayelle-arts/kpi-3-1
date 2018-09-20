<?php
$js = require_once 'plot.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="myDiv">
    
</div>

<script type="text/javascript" src="plotly-latest.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
        var trace = null;
	    <?= $js ?>

        var data = [trace];
        Plotly.newPlot('myDiv', data);
        });
    
</script>
</body>
</html>