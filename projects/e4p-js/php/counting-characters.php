
	

	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>jess rockwell | e4p</title>
			<meta name="description" content="e4p">
			<meta property="og:image" content="images/meta-default.jpg">
			
			<link rel="stylesheet" href="../css/style.css">
	</head>

	<body class="page-content">
		<inner-column>
		<form>
	
			<div class="form-heading">
				<h2>counting characters</h2>
			</div>
		
			<field class="text">
				<label for="string">Enter a word.</label>
				<input id ="string" type="text">
			</field>
		
			<button type="submit">Submit</button>

			<output class="form-output">
				<p></p>
			</output>
	
		</form>

		<form class="live-count">
	
			<div class="form-heading">
				<h2>live character counting</h2>
			</div>
		
			<field class="text">
				<label for="my-text">Enter a word or phrase.</label>
				<input id ="my-text" type="text">
			</field>

			<output class="form-output">
				<p id="count-result" >character count: 0</p>
			</output>
	
		</form>
		<a href="../index.php">e4p homepage</a>
	</inner-column>
</body>

<script src="../js/counting-characters.js"></script>
		