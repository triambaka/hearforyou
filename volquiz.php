<html>

<head>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=YLdohGAYIdrO__awarkHPvdHVBO72tx0zUEfbBTevTxsaIoRWGJ4B6aVycldDpS5HF1JeI_Si3cSW9TTe1Xmgb3tcRxyRWO04nPbNiBVb00xBLnkA14tzRkBLu5wrJJNjHQxvIN3GNUWcP8ieUeIUGAmYc1D8wwCV8qnfBItFzaopUqH3n-plcZI1cD7fTaUxW82BMe1jakrNch9jDwkW_IrISUzhA6A9StBiIdHtXvgFtvs0RNUwRjVD4UL7O7nQsjik0XOcn9i1zFwR7ntj6-fcrOU6T2AI6mnXZ-1d46ND1QjO5gPbnLXWliyMjiLui823CYyb-WVu8tvTcvcv47FW1PxrzQjwhsi6hbbPWTaHtCM77t2VulA6I5SZH2gBmq-iGx1Ap_YGOBRfRcTiTw7MnxLmTq21Hqg9dNtUwrzdJYZZiKpeoa4GXFpDepfdFhZwEp2mqJH6YUpT2AmdxeXj8-IIUME1gDMqfk3CNAcaFTmkUWHbqVDBoW1YBRDAglSw2tXUBmVlH4qDYC_XNtjfx5m58VwrP-J8I-_Euuyi3b9pmz1_zW83YTbJcuvxG_WsG0pDCX7kho1ZJhTRIrd3MwR1YGcurPPydvaf8QEOrlG-gKyspkyKtAQQ-aseU6-dXc7Ez4OX_5LGXFRhh5hMwn6dKOjUsHdIWdPAzgNz-17bcpm0-lrMHhrvy76zhtWgXxbbSdJ2AIa1UHgSbPq1EEFqLZ5cWQtAaQchtcTc7axHR3bEuw12zsqjT4BJbWW9DnOsoA6PXMaNUftC6UUNR-13UHoTiLnm8ImugNAgyhtovZkRhgIBbkYpYkCjtRnMDSRmEVUDwpF9OJsQWeak4hlXrNYhDFhPlhIZXR2C3I-qW0EbPJ7jtD6eVWEnSCQImzK__8fAjHI7hb01QhqgYyXihfcxZVYytFRwZwwj3tTZBYrFmQf7-19JlV1uTmygxDFWfCnfylO_cs5npa4vuhHNAghRFpImN37Z8Rok3FeAVYU4XutxL-bJtpoiOhNDZeAQqg6VWYz00RbeaYRfo086wjCLK2RU5Ef9GvxLptQ10WduUQlAEBgMl2qok6iv4Jh2MaYe32Qrmp7igcqOCU2eeWhViH7OtzAxCESKtGtT5gCilzdpjOKfaF8uLOXJveXRNb1iL8YzzkboJwt2AODTiLVOJjzVUAbi4Q"
        charset="UTF-8"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800);
        @import url('https://fonts.googleapis.com/css?family=Caudex&display=swap');
        .mainmenu {
            list-style: none;
            text-align: center;
            border-bottom-style: solid;
            border-bottom-color: #124a58;
        }
        
        a {
            text-decoration: none;
            color: black;
            display: inline-block;
            height: 50px;
            width: 85px;
            line-height: 48px;
            text-align: center;
            font-family: "open sans";
            padding: 0 20px 0 20px;
            border-radius: 4px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }
        
        a:hover {
            transition: background-color 0.1s linear, color 0.1s linear;
            background-color: #124a58;
            color: white;
            cursor: pointer;
        }
        
        a.current {
            background-color: #124a58;
            color: white;
        }
        
        a {
            text-decoration: none;
            align-content: center;
            padding: 8px 10px;
        }
        
        #yay1,
        #yay2,
        #yay3 {
            text-align: center;
        }
        
        #s1,
        #s2,
        #s3 {
            margin-top: 100px;
            margin-bottom: 100px;
            margin-right: 100px;
            margin-left: 100px;
        }
        
        #new,
        #new1,
        #new2 {
            border: #124a58;
            border-style: solid;
            border-width: 2px;
            background:rgb(0,0,0,0.5);
            color:white;
            text-align: center;
            width: 87%;
            font-family: 'Caudex', serif;
        }
        body{
            background-image:url("beach.jpg");
            font-family:'Caudex', serif;
            color:white;
            text-align:center;
        }
    </style>
</head>

<body>
    <header>
        <div class="mainmenu">
            <a href="Home.html">HOME</a>
            <a href="About.html">ABOUT</a>
            <a href="volquiz.php" class="current">QUIZ</a>
        </div>
    </header>
    <p>
        <h2><strong>Welcome to the Quiz for the Volunteers.We are glad that you are interested in helping out people!</strong></h2>
    </p>
    <form id="s1" method="POST" action="" align="center">
        <div id="new" class="boxed" style="display:inline-block" align="left"><br>
            <h1 style="text-align:center">DETAILS</h1><br><br>

            <label>NAME
                <input type="text" name="name" size="20" maxlength="20"/>
            </label><br><br><br>
            <label>AGE
                <input type="text" name="age" size="5" maxlength="2"/>
            </label><br><br><br>
            <label>MAIL
                <input type="email" name="mail"/>
            </label><br><br><br>
            <label><em>Have you been diagnosed with any mental disorder previously?</em>
                <input type="radio" name="choice" value="yes">YES</input>
                <input type="radio" name="choice" value="no">NO</input><br><br><br>
            </label>
            <div id="spare" style="align-self: auto;">
                <textarea name="answer" rows="3" cols="60" style="text-align: center" placeholder="If you answered yes for the previous question, do mention the disorder and the current status of it"></textarea><br><br><br>
            </div>
        </div>
    </form>
    <br>
    <p id="yay1">
        <a href="#" class="next" id="yay11" onclick="fun1()" style="display:inline-block;">Next &raquo;</a>
    </p>
    <form id="s2" method="POST" action="" ><!--align="center">-->
        <div id="new1" class="boxed" style="display:none" align="center"><br><br> 1. ON WHAT BASIS WOULD YOU CONCLUDE IF THE MEMBER HAS RECOVERED OR NOT?<br><br>
            <textarea name="a1" rows="10" cols="100" style="text-align: center;"></textarea><br> <br> 2. LET’S ASSUME THAT THERE IS A DIFFERENCE OF OPINION BETWEEN YOU AND YOUR MEMBER. HOW DO YOU PLAN TO HANDLE SUCH A SITUATION?[OR] CAN YOU GIVE AN EXAMPLE
            OF AN ETHICAL DILEMMA AND HOW YOU DEALT WITH IT?<br><br>
            <textarea name="a2" rows="10" cols="100" style="text-align:center;"></textarea><br><br>3. INDIA IS THE 6TH MOST DEPRESSED COUNTRY IN THE WORLD ACCORDING TO THE WHO REPORTS. KEEPING THIS IN MIND, WHAT IS YOUR UNDERSTANDING ABOUT DEPRESSION?
            (P.S: TECHNICAL TERMS ARE JUST AN ADD-ON. OUR MOTIVE IS TO TEST YOUR UNDERSTANDING IN THIS REGARD)<br><br>
            <textarea name="a3" rows="10" cols="100" style="text-align:center;"></textarea><br><br> 4. A LOT OF COUNSELLING WEBSITES OUT THERE EMPHASIS ON NOT GIVING “ADVICES”.ARE YOU IN FAVOUR OF IT? DO VALIDATE YOUR CHOICE.<br><br>
            <textarea name="a4" rows="10" cols="100" style="text-align:center;"></textarea><br><br> 5. YOUR MEMBER COMES TO YOU WITH A DISORDER THAT YOU ARE NOT REALLY FAMILIAR WITH (OR SOME UNCOMMON DISORDER). WRITE IN BRIEF ON WHAT WOULD YOUR STRATEGY
            BE IN HELPING HIM OUT?<br><br>
            <textarea name="a5" rows="10" cols="100" style="text-align:center;"></textarea><br><br><br>
        </div>
    </form>
    <br>
    <p id="yay2">
        <a href="#" class="previous" id="yay21" onclick="fun2()" style="display: none;">&laquo; Previous</a>
        <a href="#" class="next" id="yay22" onclick="fun3()" style="display: none;">Next &raquo;</a></p>
    <form id="s3" method="POST" action="" align="center">
        <div id="new2" class="boxed" style="display: none;" align="center"><br><br> 6. MOST OF THE PEOPLE FEEL THAT MENTAL HEALTH AND EMOTIONAL WELLNESS IS OVER-RATED. WHAT IS YOUR OPINION IN THIS REGARD?<br><br>
            <textarea name="a6" rows="10" cols="100" style="text-align:center;"></textarea><br><br> 7. IF YOU CAN SENSE THAT THE PERSON YOU’RE COUNSELLING IS NOT THAT DEPRESSED,UPSET OR JUST EXAGGERATING THEIR SITUATION,WHAT WOULD YOU TELL THEM?<br><br>
            <textarea name="a7" rows="10" cols="100" style="text-align:center;"></textarea><br><br> 8. LET’S SAY YOUR MEMBER IS ATTENDING AN INTERVIEW THE NEXT DAY AND IS HAVING A PANIC ATTACK. YOU REALISE THAT THE ONLY WAY TO CALM HIM DOWN IS BY SENDING
            A MOTIVATIONAL MESSAGE. WHAT WOULD YOUR MESSAGE CONTAIN? <br><br>
            <textarea name="a8" rows="10" cols="100" style="text-align:center;"></textarea><br><br> 9. WE REQUEST YOU TO SHARE THE MOST TRAUMATIC EXPERIENCE YOUR LIFE. (SHARE AN EXPERIENCE NO MATTER HOW TRIVIAL IT IS) THIS WOULD HELP US IN MAKING SURE
            THAT YOU DON’T GET A MEMBER WITH THE SAME TRAUMATIC EXPERIENCE AS IT MIGHT AFFECT YOU AS WELL. ALSO LET US KNOW YOUR PROGRESS IN THIS REGARD.<br><br>

            <textarea name="a9" rows="10" cols="100" style="text-align:center;"></textarea><br><br> 10. WE BELIEVE THAT NOT JUST THE MEMBERS, BUT THE VOLUNTEERS TOO SIGN UP WITH SOME EXPECTATIONS. MENTION WHAT DO YOU EXPECT FROM THIS JOURNEY OF COUNSELING.<br><br>

            <textarea name="a10" rows="10" cols="100" style="text-align:center;"></textarea><br><br><br>

        </div>
    </form>
    <p id="yay3">
        <a href="#" class="previous" id="yay31" onclick="fun4()" style="display: none;">&laquo; Previous</a>
        <a href="#" class="submit" id="yay32" onclick="fun5()" style="display: none;">Submit &sim; </a></p>
    <script>
        function fun1() {
        var form = document.querySelector('#s1');
    var data = new FormData(form);
    var req = new XMLHttpRequest();
    req.open("POST", "volquiz.php", true);
    req.send(data);
    console.log("..saved");
            document.getElementById("new").style.display = "none";
            document.getElementById("new1").style.display = "inline-block";
            document.getElementById("yay21").style.display = "inline-block";
            document.getElementById("yay22").style.display = "inline-block";
            document.getElementById("yay11").style.display = "none";
           


        }

        function fun2() {
            document.getElementById("new").style.display = "inline-block";
            document.getElementById("new1").style.display = "none";
            document.getElementById("yay21").style.display = "none";
            document.getElementById("yay22").style.display = "none";
            document.getElementById("yay11").style.display = "inline-block";

        }

        function fun3() {
          /* var form = document.querySelector('#s2');
    var data = new FormData(form);
    var req = new XMLHttpRequest();
   req.open("POST", "volquiz.php", true);
    req.send(data);
    console.log("..saved");*/

            document.getElementById("new1").style.display = "none";
            document.getElementById("new2").style.display = "inline-block";
            document.getElementById("yay31").style.display = "inline-block";
            document.getElementById("yay32").style.display = "inline-block";
            document.getElementById("yay21").style.display = "none";
            document.getElementById("yay22").style.display = "none";
            
        }

        function fun4() {
            document.getElementById("new1").style.display = "inline-block";
            document.getElementById("new2").style.display = "none";
            document.getElementById("yay31").style.display = "none";
            document.getElementById("yay32").style.display = "none";
            document.getElementById("yay21").style.display = "inline-block";
            document.getElementById("yay22").style.display = "inline-block";
            
        }

        function fun5() {
          
            confirm("Your answers will now be submitted");
            document.write("Your response has been submitted successfully. You will get to know about your results soon.")
                // alert("Your response has been submitted successfully. You will get to know about your results soon.")
            document.getElementById("yay31").style.display = "none";
            document.getElementById("yay32").style.display = "none";
            /*function save() {
    var form = document.querySelector('#s3');
    var data = new FormData(form);
    var req = new XMLHttpRequest();
    req.open("POST", "volquiz.php", true);
    req.send(data);
    console.log("..saved");
}*/
        }
            
    </script>
    <?php
$Name = $_POST['name'];
$Age=$_POST['age'];
$Mail = $_POST['mail'];
$Choice=$_POST['choice'];
$If=$_POST['answer'];
$output = "Name: {$Name}\n";
$output.= "Age: {$Age}\n";
$output.="Mail:{$Mail}\n";
$output.="Choice:{$Choice}\n";
$output.="Answer:{$If}\n";
file_put_contents("response.txt",$output);
?>
</body>

</html>