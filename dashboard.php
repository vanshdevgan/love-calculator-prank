<script>
    function copyit(){
        var id = 'cpfinalurl';
        var el = document.getElementById(id);
        var range = document.createRange();
        range.selectNodeContents(el);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
        document.execCommand('copy');
        $('#clp').toggleClass('mt-3 mx-auto w-64 hover');
        return false;
    }
</script>
<body classname="antialiased leading-tight bg-gray-200">
	<noscript>You need to enable JavaScript to run this app.</noscript>
	<div class="bg-gray-200" id="root">
		<div class="text-center bg-gray-200 h-full">
			<div class="justify-center text-white flex bg-red-600">

				<div class="flex flex-1 justify-center items-center">
					<div class="flex-1 hidden md:block"></div>
					<div class="flex justify-center items-center content-center"><span class="px-2 md:px-5 text-xl md:text-2xl"><img class="w-8 md:w-16" alt="Love Calculator prank" src="https://lovecalczone.com/images/devil7.png"></span><a href="/" class="flex-1 py-2 text-xl md:text-2xl font-semibold hover:font-bold hover:no-underline hover:text-white">Love Calculator Prank </a>
					</div>
					<div class="flex-1 md:hidden block"></div>
					<div class="flex-1 text-right"><span class="mr-2 text-lg"><a href="logout.php"><span class="hover:text-gray-400" style="text-decoration: none;"><?php if(isset($_COOKIE['secretid']) && isset($_COOKIE['userid'])){
                        echo "Logout";
                    }?>
                   </span></a>
					</div>
				</div>
			</div>
			<br>
			<div class="mx-1 md:mx-4">
				<div class="max-w-2xl bg-red-600 mx-auto p-2 font-bold text-white font-sans rounded-lg antialiased leading-relaxed">Know How well your friends know you? ! <a class="hover:text-gray-400" href="https://guess.quizplaying.com/?ref=love" style="text-decoration: underline;">Click here</a>
				</div>
			</div>
			<div class="w-full max-w-3xl mx-auto px-3 p-2 mt-3 bg-white border border-gray-600 rounded-xlg">
				<div class="mt-3">
					<h3 class="text-xl font-semibold">Love Calculator Prank</h3>
				</div>
				<div class="mt-2 text-gray-600">
					<h4 class="text-xl font-medium">Share your link with friends on Facebook and Whatsapp to know their crush names </h4>
				</div>
				<div class="mt-3">
					<div class="border bg-white py-2 text-md md:text-lg rounded-xlg" id="cpfinalurl"><?php 
echo $_SESSION['finalurl'];?></div>
				</div>
				<div class="mt-3 mx-auto w-64" data-tooltip="Copied"><span class="text-md"><button class="w-full p-2 focus:outline-0 hover:outline-0 font-semibold tracking-wide text-white text-center rounded-lg bg-red-600"  onclick="copyit();">Copy this link</button></span>
				</div>
				<div class="my-3 mx-auto w-full md:w-2/3"><span class="text-md"><button class="w-full p-2 focus:outline-0 hover:outline-0 font-semibold tracking-wide text-white text-center rounded-lg bg-red-600">Check who your friends love</button></span>
				</div>
				<div class="my-1 flex">
					<a class="flex-1 my-2 mx-1 md:mx-2 md:px-1 py-2 border rounded-lg text-sm md:text-base font-semibold text-white" <?php 
					include 'urlget.php';
					echo "href=https://api.whatsapp.com/send?text=%e2%9d%a4%20%2aAmazing%20Astrology%20Love%20Calculator%2a%20%e2%9d%a4%20%20Calculate%20Love%20Percentage%20Between%20You%20and%20Your%20Partner%20%f0%9f%98%bb%f0%9f%98%bb%20%e2%80%bc%f0%9f%91%87%f0%9f%91%87%f0%9f%91%87%f0%9f%91%87%f0%9f%91%87%f0%9f%91%87%e2%80%bc%20%20%20".$wpurl;?> target="_blank" rel="noopener noreferrer" style="background: rgb(28, 176, 109);">
						<div class="flex items-center justify-center ">
							<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0 0 90 90">
								<g>
									<path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z" fill="#eeeeee"></path>
								</g>
							</svg><span class="text-sm md:text-base">Whatsapp Status</span>
						</div>
					</a><a class="flex-1 my-2 mx-1 md:mx-2 md:px-1 py-2 border rounded-lg text-sm md:text-base font-semibold text-white" href="https://www.instagram.com/accounts/edit/" target="_blank" rel="noopener noreferrer" style="background: linear-gradient(45deg, rgb(240, 148, 51) 0px, rgb(230, 104, 60) 25%, rgb(220, 39, 67) 50%, rgb(204, 35, 102) 75%, rgb(188, 24, 136) 100%);">Add to Instagram Bio</a>
				</div>
	                <div class="addthis_inline_share_toolbox"></div>
</div>
			<div class="mt-4">
				<div class="w-full max-w-3xl mx-auto px-3 p-2 my-5 bg-gray-300 border border-gray-600 rounded-xlg">
					<h4 class="text-xl font-medium">Friends' Crushes</h4>
					<div class="mt-2 text-yellow-800">Important:- Once your Friend Enter name of Lover, Results will be shown here. Please reload the page to see latest results</div>
					<div class="w-full max-w-3xl mx-auto p-1 border-gray-600 rounded-lg">
						<table class="table-bordered table bg-white mt-3 rounded ">
							<thead class="">
								<tr>
									<th>Name</th>
									<th>Crush Name</th>
								</tr>
							</thead>
							<tbody>
								<?php 
$secretid=$_COOKIE['secretid'];
$sqla = "SELECT victim,crush FROM usersdata WHERE secret='$secretid'";
$result = $link->query($sqla);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr key='0'>";
        echo "<td>";
        echo$row["victim"];
        echo "</td>";
        echo"<td>";
        echo $row['crush'];
        echo"</td>";
    }
} else {
      echo "<tbody>";
      echo "</tbody>";
}?>  
<!-- 
								<tr kry="0">
<td>Hey</td>
<td>Vansh</td>
</tr> -->

							</tbody>
						</table>
						<?php 
						$secretid=$_COOKIE['secretid'];
$sqla = "SELECT victim,crush FROM usersdata WHERE secret='$secretid'";
$result = $link->query($sqla);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    }
} else {
     echo "No Friend has tried the love calculator yet. Share link to receive updates";
}?>  
						
						</div>
				</div>
			</div>
			<div class="mt-2 text-md p-3">© 2019 - <?php echo $domain;?> - Love Calculator
				<div class="mt-2 text-md flex justify-center p-2"><a href="/" class="px-2 border-r-2">HomePage</a><a href="/terms.html" class="px-2">Terms of Use</a>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="./static/js/2.a24ff718.chunk.js"></script>
	<script src="//static/js/main.a62b4172.chunk.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d532c5e805404ee"></script>
<!-- add this end -->
	<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;">
	</div>
	<style id="service-icons-0"></style>
</body>


</html>