<html>
	<head>
		<script language="JavaScript" type="text/javascript">
			function extra_info(){
				//alert("button has been clicked");
				var xtp = new XMLHttpRequest();
				xtp.onreadystatechange = function(){
					if(xtp.readyState ==4){
						//alert("your code is working");
						document.getElementById('extr').innerHTML = xtp.responseText;
						
					}
				}
				xtp.open('GET','extra_info.php');
				xtp.send(null);
				
			}
		</script>
	</head>
	<body>
		<h1>This page is about Computer Science Class Activities</h1>
		<div id="extr">If you want more information click on the button </div>
		<button id="btn" onclick="extra_info()">more info</button>
	</body>
	
</html>