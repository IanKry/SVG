<html>
	<head>
		<style>
			.linecircle{
				width: 200px;
				height: 300px;
				background-color: red;
			}
			.circlerectangle{
				width: 200px;
				height: 300px;
				background-color: rgb(236, 222, 14);
			}
			.polylinecircle{
				width: 200px;
				height: 300px;
				background-color: rgb(13, 180, 13);
			}
			.polygoncircle{
				width: 200px;
				height: 300px;
				background-color: blue;
			}
		</style>
	</head>
	<body>
		<table>
		<th>
			<div class="linecircle">
				<svg style="position: absolute;" width="200" height="300">
				<line x1="0" y1="0" x2="200" y2="300" stroke-width="3" stroke="#fff"/>
				</svg>
				<svg width="320" height="50">
				<circle cx="20" cy="30" r="20" fill="#6795E5"/>
				</svg>
				<svg width="320" height="120">
				<circle cx="145" cy="80" r="40" fill="#EDF50B"/>
                </svg>
                <svg width="320" height="120">
                    <circle cx="70" cy="40" r="40" fill="#EDF50B"/>
                    </svg>
			</div>
		</th>
		<th>
			<div class="circlerectangle">
			
				<svg width="320" height="200" style="position: absolute;">
				<circle cx="100" cy="50" r="25" fill="#FC9C0D"/>
				</svg>
				<svg width="320" height="300" style="position: absolute;">
				<circle cx="100" cy="250" r="25" fill="#FC9C0D"/>
				</svg>
				<svg width="320" height="80" style="margin: 10px;">
				<rect width="180" height="80" fill="#fff"/>
                </svg>
                <svg width="320" height="80" style="margin: 10px;">
                <rect width="180" height="80" fill="#ECDE0E"/>
                 </svg>
                 <svg width="320" height="80" style="margin: 10px;">
                 <rect width="180" height="80" fill="#fff"/>
                 </svg>
				
		
			</div>
		</th>
		<th>
			<div class="polylinecircle">
				<svg width="320" height="90" style="position: absolute;">
				<circle cx="100" cy="50" r="25" fill="#DF2821"/>
				</svg>
				<svg width="320" height="200" style="position: absolute;">
				<circle cx="100" cy="150" r="25" fill="#DF2821"/>
				</svg>
				<svg width="320" height="300" style="position: absolute;">
				<circle cx="100" cy="250" r="25" fill="#DF2821"/>
				</svg>
				
				</svg>
				<svg height="50" transform="translate(0,90)">
				   <polyline points="0,20 20,40 40,40 40,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140" fill="none" stroke-width="3" stroke="#fff" transform="rotate(-45)"/>
				</svg>
				<svg height="50" transform="translate(0,150)">
				   <polyline points="0,20 20,40 40,40 40,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140" fill="none" stroke-width="3" stroke="#fff" transform="rotate(-45)"/>
				</svg>
				
			</div>
		</th>
		<th>
			<div class="polygoncircle">
				<svg width="320" height="90" style="position: absolute; margin-left: 100px;">
					<polygon points="0,100 50,25 50,75 100,0" />
				</svg>
				<svg width="320" height="200" style="position: absolute; margin-top: 100px; margin-left: 100px;">
					<polygon points="0,100 50,25 50,75 100,0" />	
				</svg>
				<svg width="320" height="300" style="position: absolute; margin-top: 200px; margin-left: 100px;">
					<polygon points="0,100 50,25 50,75 100,0" />	
				</svg>
				<svg width="320" height="90" >
				<ellipse cx="50" cy="60" rx="50" ry="25" fill="#006366"/>
				<ellipse cx="150" cy="60" rx="50" ry="25" fill="#006366"/>
				</svg>
			
			</div>
		</th>
		<th>
			<div class="linecircle">
				<svg style="position: absolute;" width="200" height="300">
				<line x1="0" y1="0" x2="200" y2="300" stroke-width="3" stroke="#006366"/>
				</svg>
				<svg style="position: absolute;" width="200" height="300">
				<line x1="200" y1="0" x2="0" y2="300" stroke-width="3" stroke="#006366"/>
				</svg>
				<svg width="320" height="250" style="position: absolute;">
				<circle cx="100" cy="150" r="40" fill="#185c4b"/>
				</svg>
				<svg width="320" height="80" style="margin: 10px;">
				   <rect width="180" height="80" fill="#fff"/>
				</svg>
				
			</div>
		</th>
		<th>
			<div class="polylinecircle">
				<svg width="320" height="90" style="position: absolute; margin-left: 100px;">
				<polygon points="0 0, 0 50, 50 0" fill="#006366" transform="rotate(45)"/>
				</svg>
				<svg width="320" height="200" style="position: absolute; margin-top: 100px; margin-left: 100px;">
				<polygon points="0 0, 0 50, 50 0" fill="#006366" transform="rotate(45)"/>
				</svg>
				<svg width="320" height="300" style="position: absolute; margin-top: 200px; margin-left: 100px;">
				<polygon points="0 0, 0 50, 50 0" fill="#006366" transform="rotate(45)"/>
				</svg>
				<svg height="50" transform="translate(0,90)">
					<polyline points="0,20 20,40 40,40 40,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140" fill="none" stroke-width="3" stroke="#fff" transform="rotate(-45)"/>
				 </svg>
				 <svg height="50" transform="translate(0,150)">
					<polyline points="0,20 20,40 40,40 40,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140" fill="none" stroke-width="3" stroke="#fff" transform="rotate(-45)"/>
				 </svg>
				
		
			</div>
		</th>
		<th>
			<div class="circlerectangle">
				<svg width="320" height="90" style="position: absolute; z-index: 1;">
				<circle cx="100" cy="50" r="25" fill="#fff"/>
				</svg>
				<svg width="200" height="90" >
				<ellipse cx="50" cy="50" rx="50" ry="25" fill="#006366"/>
				<ellipse cx="150" cy="50" rx="50" ry="25" fill="#006366"/>
				</svg>
				<svg height="50" style="margin-top: 20px; position: absolute;">
				   <polyline points="0,20 20,40 40,40 40,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140" fill="none" stroke-width="3" stroke="#000" transform="rotate(-45)"/>
				</svg>
				<svg height="50" style="margin-top: 40px; position: absolute;">
				   <polyline points="0,20 20,40 40,40 40,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140" fill="none" stroke-width="3" stroke="#000" transform="rotate(-45)"/>
				</svg>
				<svg style="position: absolute;" transform="translate(50,100)">
				<polygon points="0,100 50,25 50,75 100,0" />
				</svg>
				<svg width="320" height="80" style="margin: 10px;">
				   <rect width="180" height="80" fill="#fff"/>
				</svg>
				<svg width="320" height="80" style="margin: 10px;">
				   <rect width="180" height="80" fill="#fff"/>
				</svg>
				<svg width="320" height="80" style="margin: 10px;">
				   <rect width="180" height="80" fill="#fff"/>
				</svg>
			</div>
		</th>
	</body>
</html>
