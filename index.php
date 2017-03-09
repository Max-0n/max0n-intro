<!DOCTYPE html>
<html>
	<head>
		<title>Max0n - Intro</title>
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
		<meta name="charset" content="UTF-8">
		<meta name="author" content="Максим Рожков">
		<meta name="link" content="artweb.io">
		<meta name="copyright" content="Copyright © 2016 Рожков Максим. All Rights Reserved.">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/intro.css" rel="stylesheet">
		<script>
			window.onload = function(){
				setTimeout(
					function()
					{
						var elem = document.getElementById("fading");
						elem.parentElement.removeChild(elem);
					},
					2200
				);
				
			}
		</script>
	</head>
	<body>		
		<div style="display: table; position: fixed; height: 100%; width: 100%; margin: 0; z-index: 10;" id="fading">
			<div style="display: table-cell; vertical-align: middle;">
				<svg style="margin: auto; display: block; width: 100%; height: 100%; background: linear-gradient(to top, #056dad, #6bc6ff);" viewBox="-170 -40 680 160">
					<g fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" id="intro">
						<line class="path1_0" x1="12.3" y1="56" x2="29.9" y2="23.6"/>
						<circle class="path1_1" cx="42.4" cy="37.8" r="0.1" />
						<line class="path1_2" x1="72.6" y1="56" x2="54.9" y2="23.6"/>
						
						<path class="path2" d="M114.3,56.2c-9,0-16.2-7.3-16.2-16.2s7.3-16.2,16.2-16.2S130.5,31,130.5,40v16.2"/>
						<g class="r2">
							<line class="path3" x1="154.8" y1="23.6" x2="162.2" y2="31.1"/>
							<line class="path3" x1="154.8" y1="56.2" x2="162.2" y2="48.8"/>
							<line class="path3" x1="187.4" y1="23.6" x2="179.9" y2="31.1"/>
							<line class="path3" x1="187.4" y1="56.2" x2="179.9" y2="48.8"/>
						</g>
						<path class="path4" d="M231.7,68.4c3,1,6.3,1.6,9.7,1.6c16.6,0,30-13.4,30-30s-13.4-30-30-30s-30,13.4-30,30c0,2.5,0.3,4.9,0.9,7.2"/>
						
						<path class="path5" d="M295.5,23.8c6.2,0,7.2,0,16.1,0s16.1,7.2,16.1,16.1V56"/>
						<path class="path6" d="M295.5,56c0-2.1,0-8.2,0-12"/>
					</g>
				</svg>
			</div>
		</div>
		<h1>Some content here</h1>
</body>
</html>