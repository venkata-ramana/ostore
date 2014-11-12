<!doctype html>
<html>
	<head>
		<title>Pie Chart</title>
		<script src="../Chart.js"></script>
	</head>
<?$a=100?><?$b=100?><?$c=100?><?$d=100?><?$e=100?>

	<body>
	
		<div id="canvas-holder">
			<canvas id="chart-area" width="300" height="300"/>
		</div>

	<script>
var a,b,c,d,e;
a=<?=$a?>;
b=<?=$b?>;
c=<?=$c?>;
d=<?=$d?>;
e=<?=$e?>;
var pieData = [
				{
					value: a,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: b,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: c,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: d,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: e,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);				
				
			};



	</script>

	</body>

</html>
