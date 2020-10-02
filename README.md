# love-calculator-prank
The Name Of The Project Is Love Calculator Prank It is Written in PHP By Me It is basically clone of https://quiz.playing.com i have taken the frontend from there site and implemented the backend in core php using the basic or advance php skills i know 
# How It Works - Tried To Explain How This PHP SCRIPT WORK 
1-When User Enter His Her Name In Input Field There Is Two Hidden Input Field Which Has Randomly Genrated Value I Call This Value Known As secretid and userid when user submits  the data got inserted into db in the corresponding column with name , secretid ,userid .<br/>
2- After Submiting The Data In DB The Page sends the get request to https://example.com/index.php?userid=genrateduserid now it's an intresting page this page has two views 
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;2.1 authorized view 
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;2.2 unauthroized view<br/>
<br/>3-The Cookie Has Also Been Created With The Values Of secretid and userid to differntiate in these views a person having these cookies gonna have authorized view as long as they have cookie in there browser also the page renders a shortlink which users can share with there friends the shortlink has been created using an third party api the api uses <b>$finalurl.'?'.$_COOKIE['userid'] </b>these variables to create short link 
<br/>4-When User Share The Link & Victim Visits The Link Name Of Ther Person(WHo Created The Link) Will Be Reflected (Because Of Get Paramterer In User Id)In Unauthroized View Where Vicitm Can ENter His Crush Name & His Name 
<br/>&nbsp;&nbsp;&nbsp;&nbsp;5- There Are Three Fields In Total  & one submit button
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;5.1-Your Name- It Is Visible Field Victim Can Enter His Name
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;5.2-Crush Name - It is Visibile Field Victim Can Enter His Crush Name
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;5.3-secretid- it is not visible field and it has default value fetched from get paramter in the request by which this unauth page has been rendered and that paramter is userid 
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;5.4-Calculate Love Button- This Button Sends Data In Another Table Having Two Columns Secretid and message in which every secret id has one corresponding column named messages
<br/>5- Now If Authorized Users Go To https://example.com/ the php script checks for cookie if it is there then it redirects to https://example.com/index.php?userid=genrateduserid and there as he is authorized there the messages having secret id he genrated will be rendered hence the Victim Name & Cursh Name Will Be Rendered 
# Functions Used
<br/>1-Cookies & Session
<br/>2-Dealing With Database 
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;2.1 - Storing Data In Database
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;2.2 - Fetching Data From Database
  <br/>&nbsp;&nbsp;&nbsp;&nbsp;2.3 - Creating Relational Database & Using In Php
<br/>3-Authorization & Authentication logic 
<br/>4-Get & Post Requests
<br/>5-API Fetching For Shortlinks
<br/>6-MIND (Most Important)
# How To Implement
<br/>Step 1- Simply Upload The Files Onto Server Using FTP.
<br/>Step 2- Create Database & Import The File db.sql. 
<br/>Step 3- Edit The db.php file and check the connection with db.
<br/>Step 4- Edit The app.php file and find if there is any url like example.com replace with your site url (Maybe You Have To Change Or Maybe Not The Code May Get Updated Soon)
<br/>Step 5- Boom That's It You Setup Your Own Love Calculator. 
<hr>
# Screenshots & Overview
<h3>Homepage</h3>
<img src='https://i.imgur.com/oELuQyK.png'><img> <br>
<h3> Authorized User View page</h3>
<img src='https://imgur.com/fAyzKTs.png'><img> <br>
<h3>  UnAuthorized User View Page</h3>
<img src='https://imgur.com/CUwHBkT.png'><img><br>
<h3> Authorized User View Page With Data </h3>
<img src='https://imgur.com/HrL97FV.png'><img><br>
<h3>  UnAuthorized User Final View Page </h3>
<img src='https://imgur.com/cdvHhle.png'><img> <br>

# Check The Code In Action 
Live Url - https://playlovegame.ml/
# Any Bugs Or Fixes 
Please Contact - <br>blogwithvansh@gmail.com (Primary)
<br> vanshdevgans@gmail.com 
# Follow Me On Social Media
<br> Facebook - <a href='https://www.facebook.com/vanshdevgan0221'>Vansh Devgan</a>
<br> Twitter - <a href='https://www.twitter.com/vanshdevgans'>Vansh Devgan</a>
<br> Instagram - <a href='www.instagram.com/vanshdevgan'>Vansh Devgan</a>
<br> Linkedin - <a href='https://www.linkedin.com/in/vanshdevgan/'>Vansh Devgan</a>

