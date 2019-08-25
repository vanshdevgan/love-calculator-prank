<?php
$nuid=$_GET['userid'];
			$sqla = "SELECT secret FROM users WHERE userid='$nuid'";
$result = $link->query($sqla);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nsecret=$row["secret"];
    }
}
?>
<body classname="antialiased leading-tight bg-gray-200">
   <noscript>You need to enable JavaScript to run this app.</noscript>
   <div class="bg-gray-200" id="root">
      <div class="text-center bg-gray-200 h-full">
         <div class="w-full h-full p-3 pb-5 overflow-scroll" style="background: url(&quot;https://lovecalczone.com/img/bg3.jpg&quot;);">
            <div class="md:max-w-2xl mx-auto"><img class="bg-cover" alt="Love Calculator" src="https://lovecalczone.com/img/heartlogo.png"></div>
            <form action='send.php' method='GET'>
            <h4 class="text-xl font-medium">Enter Your and Your Crush/GF Name!</h4>
            <div class="mt-4 max-w-lg px-3 mx-auto">
               <input type="text" name="vname" class="form-control mt-1 focus:outline-0 focus:shadow-outline h-10 border-2 border-gray-500 rounded-lg px-2 block w-full appearance-none leading-normal" placeholder="Enter Your Name" value="">
               
               <input type="text" name="cname" class="form-control mt-3 focus:outline-0 focus:shadow-outline h-10 border-2 border-gray-500 rounded-lg px-2 block w-full appearance-none leading-normal" placeholder="Enter Your Crush Name" value="">
				<input type="hidden" name="secret" class="form-control mt-3 focus:outline-0 focus:shadow-outline h-10 border-2 border-gray-500 rounded-lg px-2 block w-full appearance-none leading-normal" placeholder="Enter Your Crush Name" value=<?php echo $nsecret;?>>

               <div class="w-64 mt-4 mx-auto">
               	<button class="w-full p-2 focus:outline-0 hover:outline-0 font-semibold tracking-wide text-white text-center rounded-lg bg-blue-800">&hearts; Calculate &hearts;</button></div>
            </div>
            <div class="mt-2 max-w-4xl mx-auto">
               We all know that a name can tell a lot about a person. Names are not randomly chosen: they all have a meaning.
               <div class="mt-3">Doctor Love knew this so he made another great invention just for the lonely you! The Love Calculator is an affective way to get an impression of what the chances are on a relationship between two people.</div>
               <div class="mt-3">Enter Your and your Crush's Full name and click Calculate Button.</div>
            </div>
         </div>
         <div class="mt-2 text-md p-3">
            © 2019 - love.quizplaying.com - Love Calculator
            <div class="mt-2 text-md flex justify-center p-2"><a href="/" class="px-2 border-r-2">HomePage</a><a href="/terms.html" class="px-2">Terms of Use</a></div>
         </div>
      </div>
   </div>
   <script src="./static/js/2.a24ff718.chunk.js"></script><script src="./static/js/main.a62b4172.chunk.js"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>