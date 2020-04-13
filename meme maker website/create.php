<?php
   //this redirects to the login page if the user is not logged in
   ob_start();
   session_start();
   $url = 'login.php';
   if($_SESSION["username"] != true) {
       header( "Location: $url" );
       exit();
   }
   ?>
<?php
   ob_start();
   $nameErr = $codeErr = $htmlfilenameErr = $htmlErr = $htmlfilenameErr2 = "";
   $name = $code = $sitetitle = $filename = $htmlfilename = "";
   $sitedescriptiondata = $filenamez = "";
   $nameCHECK = $filenameCHECK = "hotdogs";
   $text3 = $text2 = $text1 = $forimageurl = $midimgurl8 = $midimgurl7 = $midimgurl6 = $midimgurl5 = $midimgurl4 = $midimgurl3 = $midimgurl2 = $backgroundimgurl1 = "";
   $blankurl = "blankimage.gif";
   $background1place = "repeat";
   $forimageplace = "no-repeat center";
   $image8place = $image7place = $image6place = $image5place = $image4place = $image3place = $image2place = "no-repeat bottom right";
   $audiorul = "https://www.INSERTDOMAIN.com/blankaudio.mp3";
   $fuck = $_SESSION["username"];
   $randomfile = uniqid(rand());
   $PAGE = sha1("$fuck");
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    //site title 
    if (empty($_POST["field2"])) {
       $nameErr = "* Site Title is required";
     } else {
       $name = test_input($_POST["field2"]);
       $nameCHECK = "";
     }
   
    //html name related 
    if (empty($_POST["field4"])) {
       $htmlfilenameErr = "* html file name is required";
     } else {
       $filenameCHECK = "";
     }
     
     //sets html name ot lower case
     $filename = strtolower($_POST['field4']);
     
     //checks if it has more than letters or numbers 'I use javascript to check before goes to php
     if (ctype_alnum($filename) === false) {
     $htmlfilenameErr2 = ' Name must contain letters numbers only';
     }
      
     //checks if the html file already exists 
     $pathpath = "/var/www/html2/sites/$filename.html";
       if (file_exists($pathpath)) {
           $htmlErr = "nope";
       } 
       
    //site descirption
    if (empty($_POST["sitedescriptioner"])) {
       
     } else {
       $sitedescriptiondata = test_input($_POST["sitedescriptioner"]);
     }
     
     //audio url
    if (empty($_POST["audiola"])) {
       
     } else {
       $audiorul = test_input($_POST["audiola"]);
     }
     
     //background image and placement
     if (empty($_POST["backgroundimage1"])) {
       $backgroundimgurl1 = $blankurl;
     } else {
       $backgroundimgurl1 = test_input($_POST["backgroundimage1"]);
     }
     
    if (empty($_POST["background1placement"])) {
       
     } else {
       $background1place = test_input($_POST["background1placement"]);
     }
     
     //midimage2 image and placement
      if (empty($_POST["midimage2"])) {
       $midimgurl2 = $blankurl;
     } else {
       $midimgurl2 = test_input($_POST["midimage2"]);
     }
     
    if (empty($_POST["image2placement"])) {
       
     } else {
       $image2place = test_input($_POST["image2placement"]);
     }
     
     //midimage3 image and placement
      if (empty($_POST["midimage3"])) {
       $midimgurl3 = $blankurl;
     } else {
       $midimgurl3 = test_input($_POST["midimage3"]);
     }
     
    if (empty($_POST["image3placement"])) {
       
     } else {
       $image3place = test_input($_POST["image3placement"]);
     }
     
    //midimage4 image and placement
      if (empty($_POST["midimage4"])) {
       $midimgurl4 = $blankurl;
     } else {
       $midimgurl4 = test_input($_POST["midimage4"]);
     }
     
    if (empty($_POST["image4placement"])) {
       
     } else {
       $image4place = test_input($_POST["image4placement"]);
     }
     
     //midimage5 image and placement
      if (empty($_POST["midimage5"])) {
       $midimgurl5 = $blankurl;
     } else {
       $midimgurl5 = test_input($_POST["midimage5"]);
     }
     
    if (empty($_POST["image5placement"])) {
       
     } else {
       $image5place = test_input($_POST["image5placement"]);
     }
     
     //midimage6 image and placement
      if (empty($_POST["midimage6"])) {
       $midimgurl6 = $blankurl;
     } else {
       $midimgurl6 = test_input($_POST["midimage6"]);
     }
     
    if (empty($_POST["image6placement"])) {
       
     } else {
       $image6place = test_input($_POST["image6placement"]);
     }
     
     //midimage7 image and placement
      if (empty($_POST["midimage7"])) {
       $midimgurl7 = $blankurl;
     } else {
       $midimgurl7 = test_input($_POST["midimage7"]);
     }
     
    if (empty($_POST["image7placement"])) {
       
     } else {
       $image7place = test_input($_POST["image7placement"]);
     }
     
     //midimage8 image and placement
      if (empty($_POST["midimage8"])) {
       $midimgurl8 = $blankurl;
     } else {
       $midimgurl8 = test_input($_POST["midimage8"]);
     }
     
    if (empty($_POST["image8placement"])) {
       
     } else {
       $image8place= test_input($_POST["image8placement"]);
     }
     
     //foreground image and placement
      if (empty($_POST["forimage9"])) {
       $forimageurl = $blankurl;
     } else {
       $forimageurl = test_input($_POST["forimage9"]);
     }
     
    if (empty($_POST["forimage9placement"])) {
       
     } else {
       $forimageplace = test_input($_POST["forimage9placement"]);
     }
     
     //text line 1
    if (empty($_POST["tex1"])) {
       
     } else {
       $text1 = test_input($_POST["tex1"]);
     }
     
     //text line 2
    if (empty($_POST["tex2"])) {
       
     } else {
       $text2 = test_input($_POST["tex2"]);
     }
     
     //text line 3
    if (empty($_POST["tex3"])) {
       
     } else {
       $text3 = test_input($_POST["tex3"]);
     }
     
   }
   //this checks various inputs before moving into actually writing the file and such
   if(($nameCHECK == "") && ($filenameCHECK == "") && ($htmlErr == "")) {
   if (isset($_POST['field2'])) {
   
   $filenamez = "/var/www/html2/profile/$PAGE.html";
       if (!file_exists($filenamez)) {
   
   $hell2 = "<!DOCTYPE html>
   <html lang=\"en\">
   <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
      <title>sites for $fuck</title>
      <style>
         /* this just sets a basic background to the page */
         body { 
         background-color: #cf98dd;
         background-image: url(https://www.INSERTDOMAIN.com/character.png), url(https://www.INSERTDOMAIN.com/bg.png);
         background-position: right bottom, right center;
         background-repeat: no-repeat, repeat;
         background-attachment: fixed; 
         padding: 30px;
         height: 800px;
         }
         /* this is the site logo erea gives it slight padding so has colored box around it */
         .center2 {
         text-align: center;
         background-color:white;
         padding: 10px;
         } 
         /* this sets the site listings inner table rest top of erea as well have scroll bar once goes beyond max height of the erea */
         .center {
         height:500px;
         vertical-align: text-top;
         overflow: auto;
         } 
         /* this sets the link colors and mouse hover over color  */
         a:link {color: rgb(119, 30, 119);}a:visited{color: #FF69B4;}aa:hover{color:yellow;}a:active{color:rgb(209, 162, 209);}
         /* this sets the colors and options of the inner table of site listings  */
         table.inner2 {
         border:1px solid black;
         white-space: nowrap;
         table-layout: fixed;
         width: 900px;
         font: 1em Times New Roman;
         background: #f2f2f2;
         margin-left: auto;
         margin-right: auto;
         }
         /* makes so long site names doesnt overfollow on site listings */
         td.inner3 {
         padding: 5px;
         text-overflow: ellipsis;
         text-align: left;
         font-weight: bold;
         overflow: hidden;
         }
         /* this gives the table that stipe changing colors ever other row */
         tr.inner4:nth-child(even) { 
         background:white;
         }
         /* this is an invisable outer table holds other other tables in it (yeah, LOL)  */
         table.omg {
         width: 50%;
         margin-left: auto;
         margin-right: auto;
         }
         /* this the styling of the visable table  */
         td.normal {
         border: 1px solid black;
         border-collapse: collapse;
         background-color: white;
         padding: 15px;
         }
         table.table1 {
         width: 100%;
         margin-left: auto;
         margin-right: auto;
         border: 3px solid black;
         border-collapse: collapse;
         background-color: white;
         padding: 3px;
         }
         /* this for the buttons bottom page where makes so whole erea is clickable as if where a button  */
         td a.link1 {
         display:block;
         width:100%;
         }
         /* this styles the lower erea link \"buttons\" */
         .box {
         border: 1px solid black;
         border-collapse: collapse;
         text-align: center;
         font-weight: bold;
         background-color:white;
         padding: 15px;
         }
         #demoFont {
         font-family: Impact, Charcoal, sans-serif;
         font-size: 85px;
         letter-spacing: 2px;
         word-spacing: 2px;
         color: #ffffff;
         font-weight: normal;
         text-decoration: none;
         font-style: normal;
         font-variant: normal;
         text-transform: none;
         text-shadow: rgb(0, 0, 0) 2px 0px 0px, rgb(0, 0, 0) 1.75517px 0.958851px 0px, rgb(0, 0, 0) 1.0806px 1.68294px 0px, rgb(0, 0, 0) 0.141474px 1.99499px 0px, rgb(0, 0, 0) -0.832294px 1.81859px 0px, rgb(0, 0, 0) -1.60229px 1.19694px 0px, rgb(0, 0, 0) -1.97999px 0.28224px 0px, rgb(0, 0, 0) -1.87291px -0.701566px 0px, rgb(0, 0, 0) -1.30729px -1.51361px 0px, rgb(0, 0, 0) -0.421592px -1.95506px 0px, rgb(0, 0, 0) 0.567324px -1.91785px 0px, rgb(0, 0, 0) 1.41734px -1.41108px 0px, rgb(0, 0, 0) 1.92034px -0.558831px 0px;
         }
      </style>
   </head>
   <body>
      <table class=\"omg\">
         <tbody>
            <tr>
               <td>
                  <table class=\"table1\">
                     <tbody>
                        <tr>
                           <td class=\"center2\">
                              <a  href=\"../\" style=\"text-decoration: none\">
                                 <div id=\"demoFont\">$fuck</div>
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class=\"center\">
                                 <table class=\"inner2\">
                                    <!-- leave this line -->                         
                                    <!-- leave this line -->   
                                    <!-- leave this line, this needs to be line 125 because below is where the newest site is written too --> 
                                   
                                   
                                    </tbody>
                                 </table>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td>
                  <table class=\"table1\" style=\"table-layout: fixed;\">
                     <tbody>
                        <tr>
                          <td class=\"box\">
                              <a class=\"link1\" href=\"../login.php\" style=\"text-decoration: none\">Make Gif Audio Memes</a>
                           </td>
                           <td class=\"box\">
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </body>
   </html>";
   
   $ret = file_put_contents("/var/www/html2/profile/$PAGE.html", $hell2, FILE_APPEND | LOCK_EX);
       if($ret === false) {
           die('There was an error writing the site file');
       } else {
          
       }
   
    } 
   
   $hell = "<!DOCTYPE html>
   <html lang=\"en\">
   <head>
   <meta charset=\"UTF-8\">
   <title>$name</title>
   <style>
   /* this for the loader image */
   body {
   background: url(\"https://www.INSERTDOMAIN.com/loading.gif\") no-repeat center #191919;
   }
   /* this for setting document height to 100% which makes images actually take up full page such */
   html,
   body {
   height: 100%;
   }
   /* this centers the click to play box both vertically and horizontally */
   #clickdiv {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translateX(-50%) translateY(-50%);
   /* bellow controls click to play box size and colors */
   width: 560px;
   height:280px;
   border-style:none;
   background-color: black;
   }
   /* this centers the contents of the click to play box both vertically and hortinatlaly */
   #clickinnerdiv {
   position: relative;
   top: 50%;
   transform: translateY(-50%);
   }
   .clicktoplaybutton {
   font-size: 60px;
   background-color: #ff6699;
   } /* this is erea revealed by corner gif gets the transparent div it's due to the rgba value */
   table#t01 {
   width:100%;
   background:#7f7f7f;
   background:rgba(0,0,0,0.5);
   }
   /* this is the area revealed by the corner gif makes it stretch fully across the screen */
   #myDIV {
   width:100vw;
   margin:auto;
   position: absolute;
   max-height:100px;
   }
   /* this is used because the center tag is deprecated so you use css instead now */
   .center {
   text-align: center;
   }
   /* this makes that repeating shadow to the text */
   .texter {
   white-space: nowrap;
     font-family: Impact, Charcoal, sans-serif;
         font-size: 85px;
         letter-spacing: 2px;
         word-spacing: 2px;
         color: #ffffff;
         font-weight: normal;
         text-decoration: none;
         font-style: normal;
         font-variant: normal;
         text-transform: none;
         text-shadow: rgb(0, 0, 0) 2px 0px 0px, rgb(0, 0, 0) 1.75517px 0.958851px 0px, rgb(0, 0, 0) 1.0806px 1.68294px 0px, rgb(0, 0, 0) 0.141474px 1.99499px 0px, rgb(0, 0, 0) -0.832294px 1.81859px 0px, rgb(0, 0, 0) -1.60229px 1.19694px 0px, rgb(0, 0, 0) -1.97999px 0.28224px 0px, rgb(0, 0, 0) -1.87291px -0.701566px 0px, rgb(0, 0, 0) -1.30729px -1.51361px 0px, rgb(0, 0, 0) -0.421592px -1.95506px 0px, rgb(0, 0, 0) 0.567324px -1.91785px 0px, rgb(0, 0, 0) 1.41734px -1.41108px 0px, rgb(0, 0, 0) 1.92034px -0.558831px 0px;
   }
   .container { 
   width:100%;
   height: 100%;
   position: fixed;
   
   }
   
   .centery {
   margin: 0;
   position: absolute;
   top: 50%;
   left: 50%;
   -ms-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
   
   }
   #footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
   }
   /* this makes the text div width full width of page and centered on the page */
   #styleTEXT {
   width:100%;
   text-align: center;
   }
   /* this is a bandaid put on the corner gif makes sure stays in the corner when using the shadow site text :p */
   #F {
   top:0px;
   left:0px;
   }
   </style>
   </head>
   <!-- after the page is fully loaded which are the img tags that are set to hidden it actives the script function pageloaded -->
   <body onload=\"pageloaded()\">
   <!-- the below is triggered after the page is loaded -->
   <script>
   function pageloaded() {
   document.body.style.background = \"url('') repeat\";
   document.body.style.backgroundColor = \"black\";
   // this reveals the click to play button on page load:
   clickdiv.style.display = 'block';
   bigclickdiv.style.display = 'block';
   }
   </script>
   
   <!--the below is the area revealed by the corner gif once clicked -->
   <!-- z-index:1 was added to keep it above the theatre style site text if used -->
   <div id=\"F\" style=\"display:none;position:absolute;z-index:1;\">
   <div id=\"democlick\">
   <div id=\"poo\">
   <!-- this is outer inner corner gif -->
   <img src=\"https://www.INSERTDOMAIN.com/button.png\" alt=\"\">
   </div>
   </div>
   <div id=\"myDIV\" style=\"display:none;\">
   <table id=\"t01\">
   <tr>
   <td>
   <div id=\"democlick2\">
   <!-- this is the inner corner gif -->
   <img src=\"https://www.INSERTDOMAIN.com/inner.png\" alt=\"\">
   </div>
   </td>
   <td>
   <!-- this the audio tag plays the audio file -->
   <audio id=\"myAudio\" controls loop >
   <source src=\"$audiorul\" type=\"audio/mpeg\">
   </audio>
   </td>
   <td>
   <!-- this the site site description erea -->
   <div style=\"color:#1BFF00\">site description:</div>
   <br>
   <div style=\"height:50px;max-width:500px;overflow:auto;color:#1BFF00\">$sitedescriptiondata</div>
   </td>
   </tr>
   </table>
   </div>
   </div>
   
   
     
     <!-- this for the css style site text  -->
   <div id=\"wtfever\" class=\"container\" style=\"display:none\">
   <div id=\"styleTEXT\" class=\"texter\" >$text1</div>
   <div class=\"centery\">
    <p class=\"texter\">$text2</p>
   </div>
   <div id=\"footer\" class=\"texter\" >$text3</div>
   </div>
   
   <!-- this is div goes full page that is clickable on page fully loaded to click play start the site  -->
   <div id=\"bigclickdiv\" style=\"width:100%;height:100%;display:none;\" onclick=\"clickedtoplaybutton()\" ></div>
   
   <!--this div is hidden but after page is loaded reveals the button via the page body onload function,-->
   <div id=\"clickdiv\" style=\"z-index: -1;display:none\"> <!-- this is the click to play box and is centered on the page -->
   <div id=\"clickinnerdiv\"><!-- this exists to center the contents of the click to play box -->
   <div class=\"center\" style=\"color:#ff6699;font-size:32px;font-weight:bold;\"><!--this centers the site loaded text makes it bold changes it color -->
   Click Anywhere To Play<br>
   </div>
   </div>
   </div>
   <!-- the script below is activated once you click the button and functions are explained below in comments -->
   <script>
   function clickedtoplaybutton() {
   // this plays the audio:
   myAudio.play();
   // this hides the click to play button after it is clicked:
   clickdiv.style.display = 'none';
   bigclickdiv.style.display = 'none';
   // this reveals the corner gif:
   F.style.display = 'block';
   // this reveals text on the site if chosen:
   wtfever.style.display = 'block';
   // this sets the background images including there placement of fully loaded site after it is clicked:
   document.body.style.background = \"url($forimageurl) $forimageplace,url($midimgurl8) $image8place,url($midimgurl7) $image7place,url($midimgurl6) $image6place,url($midimgurl5) $image5place,url($midimgurl4) $image4place,url($midimgurl3) $image3place,url($midimgurl2) $image2place,url($backgroundimgurl1) $background1place\";
   //sets the background color of site
   document.body.style.backgroundColor = \"black\";
   // the bellow makes the corner gif appear exactly in the croner:
   document.body.style.height = '100%';
   document.body.style.margin = '0';
   }
   </script>
   
   <!-- these are urls of the images to be loaded in the background to 'preload' with the document -->
   <!-- the asset i.imgur.com/TjL1Epw.gif is a 1x1 pixel transparent gif being used as a blank src for images -->
   <img src=\"https://www.INSERTDOMAIN.com/button.png\" style=\"display:none\" alt=\"\"><!--this is the outer corner gif -->
   <img src=\"https://www.INSERTDOMAIN.com/inner.png\" style=\"display:none\" alt=\"\"><!--this is the inner corner gif -->
   <img src=\"$forimageurl\" style=\"display:none\" alt=\"\"><!--this is the foreground -->
   <img src=\"$backgroundimgurl1\" style=\"display:none\" alt=\"\"><!--this is the background -->
   <img src=\"$midimgurl2\" style=\"display:none\" alt=\"\"><!--this is the middle url layer 1 -->
   <img src=\"$midimgurl3\" style=\"display:none\" alt=\"\"><!--this is the middle url layer 2 -->
   <img src=\"$midimgurl4\" style=\"display:none\" alt=\"\"><!--this is the 3middle url layer -->
   <img src=\"$midimgurl5\" style=\"display:none\" alt=\"\"><!--this is the 4middle url layer -->
   <img src=\"$midimgurl6\" style=\"display:none\" alt=\"\"><!--this is the 5middle url layer -->
   <img src=\"$midimgurl7\" style=\"display:none\" alt=\"\"><!--this is the 6middle url layer -->
   <img src=\"$midimgurl8\" style=\"display:none\" alt=\"\"><!--this is the 7middle url layer -->
   
   <!-- this is script used by corner gif to reveal the large div that has audio controls and site description in it -->
   <script>
   document.getElementById(\"democlick\").onclick = function() {myFunction()};
   
   function myFunction() {
   var x = document.getElementById(\"myDIV\");
   var p = document.getElementById(\"poo\");
   if (x.style.display === \"none\") {
   x.style.display = \"block\";
   } else {
   x.style.display = \"none\";
   }
   if (p.style.display === \"none\") {
   p.style.display = \"block\";
   } else {
   p.style.display = \"none\";
   }
   }
   </script>
   <!-- this is the script used by the corner gif to hide the large div that has audio controls and site desicrition in it -->
   <script>
   document.getElementById(\"democlick2\").onclick = function() {myFunction()};
   
   function myFunction() {
   var x = document.getElementById(\"myDIV\");
   var p = document.getElementById(\"poo\");
   if (x.style.display === \"none\") {
   x.style.display = \"block\";
   } else {
   x.style.display = \"none\";
   }
   if (p.style.display === \"none\") {
   p.style.display = \"block\";
   } else {
   p.style.display = \"none\";
   }
   }
   </script>
   
   </body>
   </html>";
   
   //this writes the html file site
   $ret = file_put_contents("/var/www/html2/sites/$filename.html", $hell, FILE_APPEND | LOCK_EX);
       if($ret === false) {
           die('There was an error writing the site file');
       } else {
           echo " $ret bytes written to file <a href=\"\\\"> Click here to view sites</a>";
       }
   
       //this html escapes the site title apparnetly
       $sitetitle = htmlspecialchars($name); 
       
          //this for writting to the list.html
       $file = "/var/www/html2/index.html";
       $content = file($file); //Read the file into an array. Line number => line content
       foreach($content as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
       if($lineNumber == 116) { //Remember we start at line 0.
           $lineContent .= "<tr class=\"inner4\"><td class=\"inner3\"><a href=\"https://$filename.INSERTDOMAIN.com\" style=\"text-decoration: none\" target=\"_blank\">$sitetitle</a></td><td class=\"inner3\"><a href=\"profile/$PAGE.html\" style=\"text-decoration: none\">$fuck</a></td></tr>" . PHP_EOL; //Modify the line. (We're adding another line by using PHP_EOL)
           }
       }
       
       $allContent = implode("", $content); //Put the array back into one string
       file_put_contents($file, $allContent); //Overwrite the file with the new content
       
       $file = "/var/www/html2/profile/$PAGE.html";
       $content = file($file); //Read the file into an array. Line number => line content
       foreach($content as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
       if($lineNumber == 124) { //Remember we start at line 0.
           $lineContent .= "<tr class=\"inner4\"><td class=\"inner3\"><a href=\"https://$filename.INSERTDOMAIN.com\" style=\"text-decoration: none\" target=\"_blank\">$sitetitle</a></td><td class=\"inner3\">" . date("Y-m-d") . "</td></tr>" . PHP_EOL; //Modify the line. (We're adding another line by using PHP_EOL)
           }
       }
       
       $allContent = implode("", $content); //Put the array back into one string
       file_put_contents($file, $allContent); //Overwrite the file with the new content
      
   }
   }
   // this is the test_input($post) related it somehow escapes adjusts various things related to input
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Meme Theatre - Meme Maker Tool</title>
      <style>
         body {
         margin: 0;
         font-family: Arial, Helvetica, sans-serif;
         }
         .header {
         background: #555;
         color: #f1f1f1;
         position: fixed;
         width: 100%;
         }
         .content {
         padding: 50px;
         }
         .normbutton {
         cursor: pointer;
         }
         .buttoner {
         background-color: #555;
         border: none;
         color: white;
         cursor: pointer;
         }
         #ESCAPEDHTMLEREA {
         width: 100px;
         max-height:10px;
         overflow:auto;
         }
      </style>
   </head>
   <body>
      <div class="header" id="myHeader">
         <div style="text-align: center;"><span style="padding: 50px;"><button class="normbutton" onclick="myFunctionPREVIEW()" >PREVIEW SITE</button></span> <button class="buttoner" onclick="myFunctionSELECTTEXTBELOW()">Copy HTML</button>  <span style="padding: 50px;"><input type="button" class="normbutton" onclick="myFunctionCHECKER()" value="SUBMIT SITE"></span></div>
      </div>
      <!-- table2 is large invisible table divides page into 2 sections -->
      <div id="ESCAPEDHTMLEREA"> 
         &lt;!DOCTYPE html&gt;<br>
         &lt;html lang="en"&gt;<br>
         &lt;head&gt;<br>
         &lt;meta charset="UTF-8"&gt;<br>
         &lt;title&gt;<span id="sitetitle"></span>&lt;/title&gt;<br>
         &lt;style&gt;<br>
         /* this for the loader image */<br>
         body {<br>
         background:  url("loading.gif") no-repeat center #191919;<br>
         }<br>
         /* this for setting document height to 100% which makes images actually take up full page such */<br>
         html,<br>
         body {<br>
         height: 100%;<br>
         }<br>
         /* this centers the click to play box both vertically and horizontally */<br>
         #clickdiv {<br>
         position: absolute;<br>
         top: 50%;<br>
         left: 50%;<br>
         transform: translateX(-50%) translateY(-50%);<br>
         /* bellow controls click to play box size and colors */<br>
         width: 560px;<br>
         height:280px;<br>
         border-style:none;<br>
         background-color: black;<br>
         }<br>
         /* this centers the contents of the click to play box both vertically and hortinatlaly */<br>
         #clickinnerdiv {<br>
         position: relative;<br>
         top: 50%;<br>
         transform: translateY(-50%);<br>
         }<br>
         .clicktoplaybutton { <br>
         font-size: 60px;<br>
         background-color: #ff6699;<br>
         } 
         /* this is erea revealed by corner gif gets the transparent div it's due to the rgba value */<br>
         table#t01 {<br>
         width:100%;<br>
         background:#7f7f7f;<br>
         background:rgba(0,0,0,0.5);<br>
         }<br>
         /* this is the area revealed by the corner gif makes it stretch fully across the screen */<br>
         #myDIV {<br>
         width:100vw;<br>
         margin:auto;<br>
         position: absolute;<br>
         max-height:100px;<br>
         }<br>
         /* this is used because the center tag is deprecated so you use css instead now */<br>
         .center {<br>
         text-align: center;<br>
         }<br>
         /* this makes that repeating shadow to the text */
         .texter {
         white-space: nowrap;
         font-family: Impact, Charcoal, sans-serif;
         font-size: 85px;
         letter-spacing: 2px;
         word-spacing: 2px;
         color: #ffffff;
         font-weight: normal;
         text-decoration: none;
         font-style: normal;
         font-variant: normal;
         text-transform: none;
         text-shadow: rgb(0, 0, 0) 2px 0px 0px, rgb(0, 0, 0) 1.75517px 0.958851px 0px, rgb(0, 0, 0) 1.0806px 1.68294px 0px, rgb(0, 0, 0) 0.141474px 1.99499px 0px, rgb(0, 0, 0) -0.832294px 1.81859px 0px, rgb(0, 0, 0) -1.60229px 1.19694px 0px, rgb(0, 0, 0) -1.97999px 0.28224px 0px, rgb(0, 0, 0) -1.87291px -0.701566px 0px, rgb(0, 0, 0) -1.30729px -1.51361px 0px, rgb(0, 0, 0) -0.421592px -1.95506px 0px, rgb(0, 0, 0) 0.567324px -1.91785px 0px, rgb(0, 0, 0) 1.41734px -1.41108px 0px, rgb(0, 0, 0) 1.92034px -0.558831px 0px;
         }
         .container { 
         width:100%;
         height: 100%;
         position: fixed;
         }
         .centery {
         margin: 0;
         position: absolute;
         top: 50%;
         left: 50%;
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         }
         #footer {
         position: absolute;
         bottom: 0;
         width: 100%;
         text-align: center;
         }
         /* this makes the text div width full width of page and centered on the page */
         #styleTEXT {
         width:100%;
         text-align: center;
         }
         /* this is a bandaid put on the corner gif makes sure stays in the corner when using the shadow site text :p */<br>
         #F {<br>
         top:0px;<br>
         left:0px;<br>
         }<br>
         &lt;/style&gt;<br>
         &lt;/head&gt;<br>
         &lt;!-- after the page is fully loaded which are the img tags that are set to hidden it actives the script function pageloaded --&gt;<br>
         &lt;body onload="pageloaded()"&gt;<br>
         &lt;!-- the below is triggered after the page is loaded --&gt;<br>
         &lt;script&gt;<br>
         function pageloaded() {<br>
         document.body.style.background = "url('') repeat";<br>
         document.body.style.backgroundColor = "black";<br>
         // this reveals the click to play button on page load:<br>
         clickdiv.style.display = 'block';<br>
         bigclickdiv.style.display = 'block';<br>
         }<br>
         &lt;/script&gt;<br>
         <br>
         &lt;!--the below is the area revealed by the corner gif once clicked --&gt;<br>
         &lt;!-- z-index:1 was added to keep it above the theatre style site text
         if used --&gt;<br>
         &lt;div id="F" style="display:none;position:absolute;z-index:1;"&gt;<br>
         &lt;div id="democlick"&gt;<br>
         &lt;div id="poo"&gt;<br>
         &lt;!-- this is outer inner corner gif --&gt;<br>
         &lt;img src="https://www.INSERTDOMAIN.com/button.png" alt=""&gt;<br>
         &lt;/div&gt;<br>
         &lt;/div&gt;<br>
         &lt;div id="myDIV" style="display:none;"&gt;<br>
         &lt;table id="t01"&gt;<br>
         &lt;tr&gt;<br>
         &lt;td&gt;<br>
         &lt;div id="democlick2"&gt;<br>
         &lt;!-- this is the inner corner gif --&gt;<br>
         &lt;img src="https://www.INSERTDOMAIN.com/inner.png" alt=""&gt;<br>
         &lt;/div&gt;<br>
         &lt;/td&gt;<br>
         &lt;td&gt;<br>
         &lt;!-- this the audio tag plays the audio file --&gt;<br>
         &lt;audio id="myAudio" controls loop &gt;<br>
         &lt;source src="<span id="audioURL">https://www.INSERTDOMAIN.com/blankaudio.mp3</span>" type="audio/mpeg"&gt;<br>
         &lt;/audio&gt;<br>
         &lt;/td&gt;<br>
         &lt;td&gt;<br>
         &lt;!-- this the site site description erea --&gt;<br>
         &lt;div style="color:#1BFF00"&gt;site description:&lt;/div&gt;<br>
         &lt;br&gt;<br>
         &lt;div style="height:50px;max-width:500px;overflow:auto;color:#1BFF00"&gt;<span id="description"></span>&lt;/div&gt;<br>
         &lt;/td&gt;<br>
         &lt;/tr&gt;<br>
         &lt;/table&gt;<br>
         &lt;/div&gt;<br>
         &lt;/div&gt;<br>
         <br>
        
         &lt;div id="wtfever" class="container" style="display:none"&gt;<br>
         &lt;div id="styleTEXT" class="texter" &gt;<span id="texter1"></span>&lt;/div&gt;<br>
         &lt;div class="centery"&gt;<br>
         &lt;p class="texter"&gt;<span id="texter2"></span>&lt;/p&gt;<br>
         &lt;/div&gt;<br>
         &lt;div id="footer" class="texter" &gt;<span id="texter3"></span>&lt;/div&gt;<br>
         &lt;/div&gt;<br>
          &lt;div id="bigclickdiv" style="width:100%;height:100%;display:none;" onclick="clickedtoplaybutton()" &gt;&lt;/div&gt;<br>
         <br>
         <br>
         <span id="K" style="display:none">&lt;div id=KK style="position:absolute;z-index:1;"&gt;&lt;input class="clicktoplaybutton" type="button" value="Click to show site loaded page" onClick="pageloaded();KK.style.display='none';"&gt;&lt;/div&gt;</span> <br>
         &lt;!--this div is hidden but after page is loaded reveals the button via the page body onload function,--&gt;<br>
         &lt;div id="clickdiv" style="z-index: -1;display:none"&gt; &lt;!-- this is the click to play box and is centered on the page --&gt;<br>
         &lt;div id="clickinnerdiv"&gt;&lt;!-- this exists to center the contents of the click to play box --&gt;<br>
         &lt;div class="center" style="color:#ff6699;font-size:32px;font-weight:bold;"&gt;&lt;!--this centers the site loaded text makes it bold changes it color --&gt;<br>
         Click Anywhere To Play&lt;br&gt;<br>
         &lt;/div&gt;<br>
         &lt;/div&gt;<br>
         &lt;/div&gt;<br>
         &lt;!-- the script below is activated once you click the button and functions are explained below in comments --&gt;<br>
         &lt;script&gt;<br>
         function clickedtoplaybutton() {<br>
         // this plays the audio:<br>
         myAudio.play();<br>
         // this hides the click to play button after it is clicked:<br>
         clickdiv.style.display = 'none';<br>
         wtfever.style.display = 'block';<br>
         // this reveals the corner gif:<br>
         F.style.display = 'block';<br>
         // this reveals text on the site if chosen:<br>
         bigclickdiv.style.display = 'none';<br>
         // this sets the background images including there placement of fully loaded site after it is clicked:<br>
         document.body.style.background = "url(<span id="foreground1image">blankimage.gif</span>) <span id="foregroundpositionplacement">no-repeat center</span>,url(<span id="7middle1image">blankimage.gif</span>) <span id="7middlepositionplacement">no-repeat center</span>,url(<span id="6middle1image">blankimage.gif</span>) <span id="6middlepositionplacement">no-repeat center</span>,url(<span id="5middle1image">blankimage.gif</span>) <span id="5middlepositionplacement">no-repeat center</span>,url(<span id="4middle1image">blankimage.gif</span>) <span id="4middlepositionplacement">no-repeat center</span>,url(<span id="3middle1image">blankimage.gif</span>) <span id="3middlepositionplacement">no-repeat center</span>,url(<span id="2middle1image">blankimage.gif</span>) <span id="2middlepositionplacement">no-repeat center</span>,url(<span id="1middle1image">blankimage.gif</span>) <span id="1middlepositionplacement">no-repeat center</span>,url(<span id="background1image">blankimage.gif</span>) <span id="backgroundpositionplacement">repeat</span>";<br>
         //sets the background color of site<br>
         document.body.style.backgroundColor = "black";<br>
         // the bellow makes the corner gif appear exactly in the croner:<br>
         document.body.style.height = '100%';<br>
         document.body.style.margin = '0';<br>
         }<br>
         &lt;/script&gt;<br>
         <br>
         &lt;!-- these are urls of the images to be loaded in the background to 'preload' with the document --&gt;<br>
         &lt;!-- the asset i.imgur.com/TjL1Epw.gif is a 1x1 pixel transparent gif being used as a blank src for images --&gt;<br>
         &lt;img src="https://www.INSERTDOMAIN.com/button.png" style="display:none" alt=""&gt;&lt;!--this is the outer corner gif --&gt;<br>
         &lt;img src="https://www.INSERTDOMAIN.com/inner.png" style="display:none" alt=""&gt;&lt;!--this is the inner corner gif --&gt;<br>
         &lt;img src="<span id="foregroundforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the foreground --&gt;<br>
         &lt;img src="<span id="backgroundforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the background --&gt;<br>
         &lt;img src="<span id="1middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the middle url layer 1 --&gt;<br>
         &lt;img src="<span id="2middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the middle url layer 2 --&gt;<br>
         &lt;img src="<span id="3middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the 3middle url layer --&gt;<br>
         &lt;img src="<span id="4middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the 4middle url layer --&gt;<br>
         &lt;img src="<span id="5middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the 5middle url layer --&gt;<br>
         &lt;img src="<span id="6middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the 6middle url layer --&gt;<br>
         &lt;img src="<span id="7middleforLOADING">blankimage.gif</span>" style="display:none" alt=""&gt;&lt;!--this is the 7middle url layer --&gt;<br>
         <br>
         &lt;!-- this is script used by corner gif to reveal the large div that has audio controls and site description in it --&gt;<br>
         &lt;script&gt;<br>
         document.getElementById("democlick").onclick = function() {myFunction()};<br>
         <br>
         function myFunction() {<br>
         var x = document.getElementById("myDIV");<br>
         var p = document.getElementById("poo");<br>
         if (x.style.display === "none") {<br>
         x.style.display = "block";<br>
         } else {<br>
         x.style.display = "none";<br>
         }<br>
         if (p.style.display === "none") {<br>
         p.style.display = "block";<br>
         } else {<br>
         p.style.display = "none";<br>
         }<br>
         }<br>
         &lt;/script&gt;<br>
         &lt;!-- this is the script used by the corner gif to hide the large div that has audio controls and site desicrition in it --&gt;<br>
         &lt;script&gt;<br>
         document.getElementById("democlick2").onclick = function() {myFunction()};<br>
         <br>
         function myFunction() {<br>
         var x = document.getElementById("myDIV");<br>
         var p = document.getElementById("poo");<br>
         if (x.style.display === "none") {<br>
         x.style.display = "block";<br>
         } else {<br>
         x.style.display = "none";<br>
         }<br>
         if (p.style.display === "none") {<br>
         p.style.display = "block";<br>
         } else {<br>
         p.style.display = "none";<br>
         }<br>
         }<br>
         &lt;/script&gt;<br>
         <br>
         &lt;/body&gt;<br>
         &lt;/html&gt;<br>
      </div>
      <div class="content">
         <div style="text-align: center;">
            <h1><b>MEME THEATER </b></h1>
         </div>
         <form id="myForm7" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div style="text-align: center;">enter site title</div>
            <div style="text-align: center;"><input name="field2" id="titleinput" oninput="myFunctionTITLE()" >
               <span style="color:red"><?php echo $nameErr;?></span>
            </div>
            <textarea name="field1" id="textereahidden" style="display:none" rows="3" cols="30"></textarea>
            <span style="color:red"><?php echo $codeErr;?></span><br>
            <div style="text-align: center;"><input name="field4" id="retardrebel" type="text" oninput="myFunctionfilename()" />.INSERTDOMAIN.com <span id="w"></span>
               <span style="color:red"><?php echo $htmlfilenameErr;?></span> <span style="color:red"><?php echo $htmlfilenameErr2;?></span><span style="color:red"><?php echo $htmlErr;?></span>
            </div>
            <br>
            <div style="text-align: center;">description</div>
            <div style="text-align: center;"><textarea id="sitedescription" name="sitedescriptioner" oninput="myFunctionDESCRIPTION()" cols="30"></textarea></div>
            <div style="text-align: center;"><br>
            </div>
            <div style="text-align: center;">audio url</div>
            <div style="text-align: center;"><input id="audioinput" name="audioinput" oninput="myFunctionAUDIO()" type="text"><span id="audiowarn" style="color:red;"></span>
               <input name="audiola" id="audiolaid" type="hidden">
            </div>
            <div style="text-align: center;"><br>
            </div>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 1)
                        <div style="text-align: center;">
                           <input id="background1" name="backgroundimage1" oninput="myFunctionbackgroundIMAGE()" type="text">
                           <input name="background1placement" id="backgroundplacment" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="backgroundradio" value="repeat" type="radio">tiled</div>
                        <div style="text-align: center;"><input name="backgroundradio" value="no-repeat top left" type="radio"><input name="backgroundradio" value="no-repeat top center" type="radio"><input name="backgroundradio" value="no-repeat top right" type="radio"></div>
                        <div style="text-align: center;"><input name="backgroundradio" value="no-repeat center left" type="radio"><input name="backgroundradio" value="no-repeat center" type="radio"><input name="backgroundradio" value="no-repeat center right" type="radio"></div>
                        <div style="text-align: center;"><input name="backgroundradio" value="no-repeat bottom left"
                           type="radio"><input name="backgroundradio" value="no-repeat bottom center"
                           type="radio"><input name="backgroundradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 2)
                        <div style="text-align: center;">
                           <input id="1middle1" name="midimage2" oninput="myFunction1middle()" type="text">
                           <input name="image2placement" id="image2placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;">
                           <input name="1middleradio" value="repeat" type="radio">tiled
                        </div>
                        <div style="text-align: center;">
                           <input name="1middleradio" value="no-repeat top left"
                              type="radio"><input name="1middleradio" value="no-repeat top center" type="radio">
                           <input name="1middleradio" value="no-repeat top right" type="radio">
                        </div>
                        <div style="text-align: center;"><input name="1middleradio" value="no-repeat center left"
                           type="radio"><input name="1middleradio" value="no-repeat center"
                           type="radio"><input name="1middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="1middleradio" value="no-repeat bottom left"
                           type="radio"><input name="1middleradio" value="no-repeat bottom center"
                           type="radio"><input name="1middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 3)
                        <div style="text-align: center;">
                           <input id="2middle1" name="midimage3" oninput="myFunction2middle()" type="text">
                           <input name="image3placement" id="image3placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="2middleradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="2middleradio" value="no-repeat top left"
                           type="radio"><input name="2middleradio" value="no-repeat top center"
                           type="radio"><input name="2middleradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="2middleradio" value="no-repeat center left"
                           type="radio"><input name="2middleradio" value="no-repeat center"
                           type="radio"><input name="2middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="2middleradio" value="no-repeat bottom left"
                           type="radio"><input name="2middleradio" value="no-repeat bottom center"
                           type="radio"><input name="2middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 4)
                        <div style="text-align: center;"><input id="3middle1" name="midimage4" oninput="myFunction3middle()" type="text">
                           <input name="image4placement" id="image4placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="3middleradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="3middleradio" value="no-repeat top left"
                           type="radio"><input name="3middleradio" value="no-repeat top center"
                           type="radio"><input name="3middleradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="3middleradio" value="no-repeat center left"
                           type="radio"><input name="3middleradio" value="no-repeat center"
                           type="radio"><input name="3middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="3middleradio" value="no-repeat bottom left"
                           type="radio"><input name="3middleradio" value="no-repeat bottom center"
                           type="radio"><input name="3middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 5)
                        <div style="text-align: center;"><input id="4middle1" name="midimage5" oninput="myFunction4middle()" type="text">
                           <input name="image5placement" id="image5placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="4middleradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="4middleradio" value="no-repeat top left"
                           type="radio"><input name="4middleradio" value="no-repeat top center"
                           type="radio"><input name="4middleradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="4middleradio" value="no-repeat center left"
                           type="radio"><input name="4middleradio" value="no-repeat center"
                           type="radio"><input name="4middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="4middleradio" value="no-repeat bottom left"
                           type="radio"><input name="4middleradio" value="no-repeat bottom center"
                           type="radio"><input name="4middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 6)
                        <div style="text-align: center;">
                           <input id="5middle1" name="midimage6" oninput="myFunction5middle()" type="text">
                           <input name="image6placement" id="image6placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="5middleradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="5middleradio" value="no-repeat top left"
                           type="radio"><input name="5middleradio" value="no-repeat top center"
                           type="radio"><input name="5middleradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="5middleradio" value="no-repeat center left"
                           type="radio"><input name="5middleradio" value="no-repeat center"
                           type="radio"><input name="5middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="5middleradio" value="no-repeat bottom left"
                           type="radio"><input name="5middleradio" value="no-repeat bottom center"
                           type="radio"><input name="5middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 7)
                        <div style="text-align: center;">
                           <input id="6middle1" name="midimage7" oninput="myFunction6middle()" type="text">
                           <input name="image7placement" id="image7placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="6middleradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="6middleradio" value="no-repeat top left"
                           type="radio"><input name="6middleradio" value="no-repeat top center"
                           type="radio"><input name="6middleradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="6middleradio" value="no-repeat center left"
                           type="radio"><input name="6middleradio" value="no-repeat center"
                           type="radio"><input name="6middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="6middleradio" value="no-repeat bottom left"
                           type="radio"><input name="6middleradio" value="no-repeat bottom center"
                           type="radio"><input name="6middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 8)
                        <div style="text-align: center;">
                           <input id="7middle1" name="midimage8" oninput="myFunction7middle()" type="text">
                           <input name="image8placement" id="image8placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="7middleradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="7middleradio" value="no-repeat top left"
                           type="radio"><input name="7middleradio" value="no-repeat top center"
                           type="radio"><input name="7middleradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="7middleradio" value="no-repeat center left"
                           type="radio"><input name="7middleradio" value="no-repeat center"
                           type="radio"><input name="7middleradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="7middleradio" value="no-repeat bottom left"
                           type="radio"><input name="7middleradio" value="no-repeat bottom center"
                           type="radio"><input name="7middleradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <table style="margin-left:auto;margin-right:auto;">
               <tbody>
                  <tr>
                     <td>
                        Image url (layer 9)
                        <div style="text-align: center;">
                           <input id="foreground1" name="forimage9" oninput="myFunctionFOREGROUNDIMAGE()" type="text">
                           <input name="forimage9placement" id="fore9placmentid" type="hidden">
                        </div>
                     </td>
                     <td>
                        <div style="text-align: center;"><input name="foregroundradio" value="repeat"
                           type="radio">tiled</div>
                        <div style="text-align: center;"><input name="foregroundradio" value="no-repeat top left"
                           type="radio"><input name="foregroundradio" value="no-repeat top center"
                           type="radio"><input name="foregroundradio" value="no-repeat top right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="foregroundradio" value="no-repeat center left"
                           type="radio"><input name="foregroundradio" value="no-repeat center"
                           type="radio"><input name="foregroundradio" value="no-repeat center right"
                           type="radio"></div>
                        <div style="text-align: center;"><input name="foregroundradio" value="no-repeat bottom left"
                           type="radio"><input name="foregroundradio" value="no-repeat bottom center"
                           type="radio"><input name="foregroundradio" value="no-repeat bottom right"
                           type="radio"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div style="text-align: center;">optional site text</div>
            <div style="text-align: center;"><input id="text1" oninput="myFunctionSITETEXT1()" type="text"> LINE 1 <input name="tex1" id="tex1id" type="hidden"></div>
            <div style="text-align: center;"><input id="text2" oninput="myFunctionSITETEXT2()" type="text"> LINE 2  <input name="tex2" id="tex2id" type="hidden"></div>
            <div style="text-align: center;"><input id="text3" oninput="myFunctionSITETEXT3()" type="text"> LINE 3  <input name="tex3" id="tex3id" type="hidden"></div>
         </form>
      </div>
      <!-- scripts -->
      <script>
         (function (){
             var radios = document.getElementsByName('foregroundradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('foregroundpositionplacement').innerText = this.value;
                     document.getElementById('fore9placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunctionFOREGROUNDIMAGE() {
             var person = document.getElementById("foreground1").value;
             document.getElementById("foreground1image").innerHTML = person;
             document.getElementById("foregroundforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('backgroundradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('backgroundpositionplacement').innerText = this.value;
                     document.getElementById('backgroundplacment').value = this.value;
                     
                 }
             }
         })();
      </script>
      <script>
         function myFunction2middle() {
             var person = document.getElementById("2middle1").value;
             document.getElementById("2middle1image").innerHTML = person;
             document.getElementById("2middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('2middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('2middlepositionplacement').innerText = this.value;
                     document.getElementById('image3placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunction7middle() {
             var person = document.getElementById("7middle1").value;
             document.getElementById("7middle1image").innerHTML = person;
             document.getElementById("7middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('7middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('7middlepositionplacement').innerText = this.value;
                     document.getElementById('image8placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunctionbackgroundIMAGE() {
             var person = document.getElementById("background1").value;
             document.getElementById("background1image").innerHTML = person;
             document.getElementById("backgroundforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         function myFunction4middle() {
             var person = document.getElementById("4middle1").value;
             document.getElementById("4middle1image").innerHTML = person;
             document.getElementById("4middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('4middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('4middlepositionplacement').innerText = this.value;
                     document.getElementById('image5placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunction6middle() {
             var person = document.getElementById("6middle1").value;
             document.getElementById("6middle1image").innerHTML = person;
             document.getElementById("6middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('6middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('6middlepositionplacement').innerText = this.value;
                     document.getElementById('image7placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunction5middle() {
             var person = document.getElementById("5middle1").value;
             document.getElementById("5middle1image").innerHTML = person;
             document.getElementById("5middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('5middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('5middlepositionplacement').innerText = this.value;
                     document.getElementById('image6placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunctionbackgroundIMAGE() {
             var person = document.getElementById("background1").value;
             document.getElementById("background1image").innerHTML = person;
             document.getElementById("backgroundforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         function myFunction3middle() {
             var person = document.getElementById("3middle1").value;
             document.getElementById("3middle1image").innerHTML = person;
             document.getElementById("3middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('3middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('3middlepositionplacement').innerText = this.value;
                     document.getElementById('image4placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunctionAUDIO() {
             var person = document.getElementById("audioinput").value;
              if (person.includes("youtube") == true) {
            document.getElementById("audiowarn").innerHTML = " youtube links not supported, see FAQ";
            } else {
            document.getElementById("audioURL").innerHTML = person;
            document.getElementById("audiowarn").innerHTML = " ";
            document.getElementById("audiolaid").value = person;
            }
             }
      </script>
      <script>
         function myFunctionTITLE() {
             var person = document.getElementById("titleinput").value;
             document.getElementById("sitetitle").innerHTML = person;
             }
      </script>
      <script>
         function myFunctionDESCRIPTION() {
             var person = document.getElementById("sitedescription").value;
             document.getElementById("description").innerHTML = person;
             }
      </script>
      <script>
         function myFunction1middle() {
             var person = document.getElementById("1middle1").value;
             document.getElementById("1middle1image").innerHTML = person;
             document.getElementById("1middleforLOADING").innerHTML = person;
                 
         }
      </script>
      <script>
         (function (){
             var radios = document.getElementsByName('1middleradio');
             console.log(radios);
             for(var i = 0; i < radios.length; i++){
                 radios[i].onclick = function(){
                     document.getElementById('1middlepositionplacement').innerText = this.value;
                     document.getElementById('image2placmentid').value = this.value;
                 }
             }
         })();
      </script>
      <script>
         function myFunctionSITETEXT1() {
             var person = document.getElementById("text1").value;
             document.getElementById("texter1").innerHTML = person;
             document.getElementById("tex1id").value = person;
         }
      </script>
      <script>
         function myFunctionSITETEXT2() {
             var person = document.getElementById("text2").value;
             document.getElementById("texter2").innerHTML = person;
             document.getElementById("tex2id").value = person;
         }
      </script>
      <script>
         function myFunctionSITETEXT3() {
             var person = document.getElementById("text3").value;
             document.getElementById("texter3").innerHTML = person;
             document.getElementById("tex3id").value = person;
         }
      </script>
      <script>
         function myFunctionPREVIEW() {
             var x = document.getElementById("ESCAPEDHTMLEREA").textContent;
             var str = x
             // this is the magic mysterious string that removes all of the span tags from the random text form the id ESCAPEDHTMLEREA div:
             str = str.replace(/<\/?span[^>]*>/g,"");
             
             var win = window.open('','printwindow');
             win.document.write(str);
             // for some reason i can't crack css and JavaScript code doesn't like to run onload, yet putting this line reveals siteloaded button once pressed rest works: 
         } 
      </script>
      <script>
         function myFunctionCHECKER() {
             // this removes that preview button form the page for finished site
             document.getElementById("K").innerHTML = " ";
             
             var x = document.getElementById("ESCAPEDHTMLEREA").textContent;
                      var str = x
                      // this is the magic mysterious string that removes all of the span tags from the random text form the id ESCAPEDHTMLEREA div:
                      text = str.replace(/<\/?span[^>]*>/g,"");
                      document.getElementById("textereahidden").value = text;
         
         	//this gets the site title and writes to the php submit site vuale
         	var TT = document.forms["myForm7"]["field1"].value;
         	var CO = document.forms["myForm7"]["field2"].value;
         	var CA = document.forms["myForm7"]["field4"].value;
         	var AU = document.forms["myForm7"]["audiola"].value;
         	var A1 = document.forms["myForm7"]["backgroundimage1"].value;
            var A2 = document.forms["myForm7"]["midimage2"].value;
            var A3 = document.forms["myForm7"]["midimage3"].value;
            var A4 = document.forms["myForm7"]["midimage4"].value;
            var A5 = document.forms["myForm7"]["midimage5"].value;
            var A6 = document.forms["myForm7"]["midimage6"].value;
            var A7 = document.forms["myForm7"]["midimage7"].value;
            var A8 = document.forms["myForm7"]["midimage8"].value;
            var A9 = document.forms["myForm7"]["forimage9"].value;
         	var checkimage = "";
         
             if (A1 === "" & A2 === "" & A3 === "" & A5 === "" & A6 === "" & A7 === "" & A8 === "" & A9 === "") {
         
            } else {
             var checkimage = "ok";
            }
         
         	if (TT === "" || CO === "" || CA === "" || AU === "" || checkimage === "") {
         		alert("Make sure to input the Site Title, Domain name, Audio url(mp3,wav, ogg) and atleast one image url (jpg, png, gif, webp) before publishing your meme. Please preview your meme before publishing!");
         	} else {
         		var letters = /^[A-Za-z]+$/;
         		if (retardrebel.value.match(letters)) {
         			document.getElementById("myForm7").submit();
         		} else {
         			alert('Please input alphabet characters only in the html file name');
         			return false;
         		}
         
         	}
         	//this puts back the preview button
         	 document.getElementById("K").textContent = "<div id=KK style=\"position:absolute;z-index:1;\"><input class=\"clicktoplaybutton\" type=\"button\" value=\"Click to show site loaded page\" onClick=\"pageloaded();KK.style.display='none';\"></div>";
         }
      </script>
      <script>
         function myFunctionfilename() {
         fetch(`sites/${v=retardrebel.value=retardrebel.value.toLowerCase()}.html`,{method:"HEAD"}).then(r=>[w.innerHTML,w.style.color]=v?!/^\w{1,63}$/.test(v)|r.ok?["is unavailable","#fc0b38"]:["is available","#07a326"]:[""])
         }
      </script>
      <script>
         function myFunctionSELECTTEXTBELOW() {
           //this selects all text in the ESCAPEDHTMLEREA div
           window.getSelection().selectAllChildren( document.getElementById("ESCAPEDHTMLEREA" ) );
             
             //this gets the selected text and sets it to the variable text
             var text = "";
             if (window.getSelection) {
                 text = window.getSelection().toString();
             } else if (document.selection && document.selection.type != "Control") {
                 text = document.selection.createRange().text;
             }
             
         document.execCommand("copy");
         alert("Code copied!");
         }
      </script>
   </body>
</html>
