<?php
session_start();
include  'random_num.php';
if(isset($_COOKIE['secretid']) && isset($_COOKIE['userid']))
{
    header("Location:app.php", true, 301);
}
?>
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
         
        <link href="./static/css/main.d94dcee9.chunk.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    </head>
    <body classname="antialiased leading-tight bg-gray-200">
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div class="bg-gray-200" id="root">
            <div class="text-center bg-gray-200 h-full">
                <div class="justify-center text-white flex bg-red-600">
                    <div class="flex flex-1 justify-center items-center">
                        <div class="flex-1 hidden md:block"></div>
                        <div class="flex justify-center items-center content-center"><span class="px-2 md:px-5 text-xl md:text-2xl"><img class="w-8 md:w-16" alt="Love Calculator prank" src="https://lovecalczone.com/images/devil7.png"></span><a href="/" class="flex-1 py-2 text-xl md:text-2xl font-semibold hover:font-bold hover:no-underline hover:text-white">Love Calculator Prank </a></div>
                        <div class="flex-1 md:hidden block"></div>
                        <div class="flex-1 text-right"></div>
                    </div>
                </div>
                <br>
                <div class="mx-1 md:mx-4">
                    <div class="max-w-2xl bg-red-600 mx-auto p-2 font-bold text-white font-sans rounded-lg antialiased leading-relaxed">Know what your friends think about you? ! <a class="hover:text-gray-400" href="https://secret.quizplaying.com/?ref=love" style="text-decoration: underline;">Click here</a></div>
                </div>
                <div class="w-full max-w-3xl mx-auto px-3 p-2 mt-3 bg-white border border-gray-600 rounded-xlg">
                    <h3 class="text-xl font-semibold">Want to know who He/She really likes? </h3>
                    <div class="mt-2">
                        <h4 class="text-xl font-medium">Trick them into telling you</h4>
                    </div>
                    <div class="my-4 mx-2 md:mx-5 text-gray-700">
                        <div class="bullets">
                            <ol class="text-left list-disc text-base font-semibold list-outside" style="list-style-position: inside;">
                                <li>Enter Your Name and click create link button.</li>
                                <li>Share your Link via Whatsapp /Facebook or Anywhere else with your Friends, Families, Co-Workers.</li>
                                <li>Tell them it's a Real love calculator, When they open Link it looks like Real love Calculator Website.</li>
                                <li>Once Your Friend Enter Crush's Name to Calculate Love, we will share them with you.</li>
                            </ol>
                        </div>
                    </div>
                    <form action="app.php" method="POST">
                    <div class="mx-5 text-left">
                        <h4 class="text-xl font-medium">Your Name:</h4>
                        <input type="text" name="fname" class="form-control mt-1 focus:outline-0 focus:shadow-outline h-10 border-2 border-gray-500 rounded-lg px-2 block w-full appearance-none leading-normal" placeholder="Full Name" value="">
                         <input type="hidden" name="secretkey" class="form-control mt-1 focus:outline-0 focus:shadow-outline h-10 border-2 border-gray-500 rounded-lg px-2 block w-full appearance-none leading-normal" placeholder="Full Name" value=<?php echo $secretkey;?>>
                              <input type="hidden" name="userid" class="form-control mt-1 focus:outline-0 focus:shadow-outline h-10 border-2 border-gray-500 rounded-lg px-2 block w-full appearance-none leading-normal" placeholder="Full Name" value=<?php echo $userid;?>>
                        <div class="my-4" data-tooltip="Enter valid name">
                            <span class="text-md">
                                <button class="w-full p-2 focus:outline-0 hover:outline-0 font-semibold tracking-wide text-white text-center rounded-lg bg-red-600">
                                    <div class="flex justify-center items-center content-center">
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 504 512" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M501.1 402.5c-8-20.8-31.5-31.5-53.1-25.9l-8.4 2.2-2.3-8.4c-5.9-21.4-27-36.5-49-33-25.2 4-40.6 28.6-34 52.6l22.9 82.6c1.5 5.3 7 8.5 12.4 7.1l83-21.5c24.1-6.3 37.7-31.8 28.5-55.7zm-177.6-4c-5.6-20.3-2.3-42 9-59.7 29.7-46.3 98.7-45.5 127.8 4.3 6.4.1 12.6 1.4 18.6 2.9 10.9-27.9 17.1-58.2 17.1-90C496 119 385 8 248 8S0 119 0 256s111 248 248 248c35.4 0 68.9-7.5 99.4-20.9-.3-.7-23.9-84.6-23.9-84.6zM168 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm120 156c0 19.2-28.7 41.5-71.5 44-8.5.8-12.1-11.8-3.6-15.4l17-7.2c13-5.5 20.8-13.5 20.8-21.5s-7.8-16-20.8-21.5l-17-7.2c-6-2.5-5.7-12.3 0-14.8l17-7.2c13-5.5 20.8-13.5 20.8-21.5s-7.8-16-20.8-21.5l-17-7.2c-8.8-3.7-4.6-16.6 3.6-15.4 42.8 2.5 71.5 24.8 71.5 44 0 13-13.4 27.3-35.2 36C274.6 368.7 288 383 288 396zm16-179c-8.3 7.4-21.6.4-19.8-10.8 4-25.2 34.2-42.1 59.9-42.1S400 181 404 206.2c1.7 11.1-11.3 18.3-19.8 10.8l-9.5-8.5c-14.8-13.2-46.2-13.2-61 0L304 217z"></path>
                                            </svg>
                                        </div>
                                        <div class="mx-2 text-xl" >Create Link</div></form>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 504 512" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M501.1 402.5c-8-20.8-31.5-31.5-53.1-25.9l-8.4 2.2-2.3-8.4c-5.9-21.4-27-36.5-49-33-25.2 4-40.6 28.6-34 52.6l22.9 82.6c1.5 5.3 7 8.5 12.4 7.1l83-21.5c24.1-6.3 37.7-31.8 28.5-55.7zm-177.6-4c-5.6-20.3-2.3-42 9-59.7 29.7-46.3 98.7-45.5 127.8 4.3 6.4.1 12.6 1.4 18.6 2.9 10.9-27.9 17.1-58.2 17.1-90C496 119 385 8 248 8S0 119 0 256s111 248 248 248c35.4 0 68.9-7.5 99.4-20.9-.3-.7-23.9-84.6-23.9-84.6zM168 240c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm120 156c0 19.2-28.7 41.5-71.5 44-8.5.8-12.1-11.8-3.6-15.4l17-7.2c13-5.5 20.8-13.5 20.8-21.5s-7.8-16-20.8-21.5l-17-7.2c-6-2.5-5.7-12.3 0-14.8l17-7.2c13-5.5 20.8-13.5 20.8-21.5s-7.8-16-20.8-21.5l-17-7.2c-8.8-3.7-4.6-16.6 3.6-15.4 42.8 2.5 71.5 24.8 71.5 44 0 13-13.4 27.3-35.2 36C274.6 368.7 288 383 288 396zm16-179c-8.3 7.4-21.6.4-19.8-10.8 4-25.2 34.2-42.1 59.9-42.1S400 181 404 206.2c1.7 11.1-11.3 18.3-19.8 10.8l-9.5-8.5c-14.8-13.2-46.2-13.2-61 0L304 217z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mt-2 text-md p-3">
                    © 2019 - love.quizplaying.com - Love Calculator
                    <div class="mt-2 text-md flex justify-center p-2"><a href="/" class="px-2 border-r-2">HomePage</a><a href="/terms.html" class="px-2">Terms of Use</a></div>
                </div>
            </div>
        </div>
        <script src="./static/js/2.a24ff718.chunk.js">
        	
        </script><script src="./static/js/main.a62b4172.chunk.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>