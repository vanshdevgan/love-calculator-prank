<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>2019 Secret Message Book</title>
	<meta name="description" content="2019 Love Calculator">
	<meta property="og:title" content="2019 Love Calculator">
	<meta property="og:description" content="2019 Love Calculator">
	<meta property="og:image" content="/Calculator.jpeg">
	<link rel="icon" href="https://lovecalczone.com/images/devil7.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</script>
	<link href="/static/css/main.d94dcee9.chunk.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
</head>

<body classname="antialiased leading-tight bg-gray-200">
	<noscript>You need to enable JavaScript to run this app.</noscript>
	<div class="bg-gray-200" id="root">
		<div class="text-center bg-gray-200 h-full">
			<div class="w-full h-full p-3 pb-5 overflow-scroll" style="background: url(&quot;https://lovecalczone.com/img/bg3.jpg&quot;);">
				<div class="mt-2">
				</div>
				<div class="mt-4">
					<h3 class="text-xl font-semibold">You have successfully been FOOLED!</h3>
				</div>
				<div class="mt-4">
					<h3 class="text-xl font-semibold">Your Name &amp; Crush's Name has been Sent to</h3>
				</div>
				<div class="mt-2 text-4xl mx-auto">
				<?php 
				include 'db.php';
$uid=$_GET['userid'];
																				 $sqlc = "SELECT username FROM users WHERE userid='$uid'";
																					$result = $link->query($sqlc);
																					if ($result->num_rows > 0) {
																					    // output data of each row
																					    while($row = $result->fetch_assoc()) {
																					     $Username=$row['username'];
																					    }
																					    }	
																				echo $Username;
																				?></div>
				<img class="bg-cover mx-auto" alt="Love Calculator" src="https://lovecalczone.com/img/gifbb702.gif">
				<div class="mt-4">
					<h3 class="text-xl font-semibold">To Create your own prank</h3>
					<div class="max-w-xl mt-4 mx-auto">
						<a href='logout.php'><img class="w-40 mx-auto" src="https://www.stickpng.com/assets/images/59060c290cbeef0acff9a659.png" alt="Click"></a>
					</div>
				</div>
			</div>
			<div class="mt-2 text-md p-3">© 2019 - love.quizplaying.com - Love Calculator
				<div class="mt-2 text-md flex justify-center p-2"><a href="/" class="px-2 border-r-2">HomePage</a><a href="/terms.html" class="px-2">Terms of Use</a>
				</div>
			</div>
		</div>
	</div>
	<script src="/static/js/2.a24ff718.chunk.js"></script>
	<script src="/static/js/main.a62b4172.chunk.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>