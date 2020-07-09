function fun1(){
    document.getElementById("new").style.display="none";
    document.getElementById("but1").style.display="none";
    document.getElementById("new1").style.display="block";
    document.getElementById("but2").style.display="inline-block";
    document.getElementById("but3").style.display="inline-block";
    document.getElementById("but").style.textAlign="center";
}


function fun2(){
    document.getElementById("new").style.display="block";
    document.getElementById("but1").style.display="inline-block";
    document.getElementById("new1").style.display="none";
    document.getElementById("but2").style.display="none";
    document.getElementById("but3").style.display="none";
    document.getElementById("but").style.textAlign="center";
}
    
function myFunction() {
    document.getElementById("load").style.display = "block";
    myVar = setTimeout(showPage, 700);
  }
  
  function showPage() {
    document.getElementById("load").style.display = "none";
    document.getElementById("cont").style.display = "block";
  }
    function f1()
{   

    var form = document.getElementById("test");
    var form1=document.getElementById("test1");
    
    var a=parseInt(form.elements["dep1"].value)+parseInt(form.elements["dep2"].value)+parseInt(form.elements["dep3"].value)+parseInt(form1.elements["dep4"].value)+parseInt(form1.elements["dep5"].value);
    var b=parseInt(form.elements["anx1"].value)+parseInt(form1.elements["anx2"].value)+parseInt(form1.elements["anx3"].value);
    var c=parseInt(form.elements["ptsd1"].value)+parseInt(form.elements["ptsd2"].value)+parseInt(form1.elements["ptsd3"].value)+parseInt(form1.elements["ptsd4"].value);
    var d=parseInt(form.elements["sa1"].value)+parseInt(form.elements["sa2"].value)+parseInt(form1.elements["sa3"].value)+parseInt(form1.elements["sa4"].value);
    if(isNaN(a) || isNaN(b) || isNaN(c)|| isNaN(d)){
        alert("Please answer all the questions");}
       
    else{
        document.getElementById('load').style.display="block";
        //document.getElementById("new1").style.display="none";
        document.getElementById("but2").disabled=true;
        document.getElementById("but3").disabled=true;
        myFunction();
    if(a>=160){
        var h=document.createElement('p');
        h.innerHTML="You might require professional help with respect to depression. You could also reach out to our volunteers on our website here.<br>"
        document.getElementById("new2").appendChild(h);
    }
    else if(a>=120 && a<160){
        
        var h=document.createElement('p');
        h.innerHTML="You have several signs of depression. However, with professional help you can feel much better. Our website also provides a platform where you can talk to a volunteer about it.<br>"
        document.getElementById("new2").appendChild(h);
        
       //document.write("You have several signs of depression. However, with professional help you can feel much better. Our website also provides a platform where you can talk to a volunteer about it.")
    }
    else if(a>=40){
        
        var h=document.createElement('p');
        h.innerHTML="Although you do have some signs of depression, it is nothing to worry about. If you do feel like talking to someone about it, we have volunteers on our website who would be glad to help you out.<br>"
        document.getElementById("new2").appendChild(h);
        
       //document.write("Although you do have some signs of depression, it is nothing to worry about. If you do feel like talking to someone about it, we have volunteers on our website who would be glad to help you out.<br>")
    }
    else{
        
        var h=document.createElement('p');
        h.innerHTML="Great news! You do not have depression. You are mentally healthy in this aspect.<br>"
        document.getElementById("new2").appendChild(h);
        
      // document.write("Great news! You do not have depression. You are mentally healthy in this aspect.<br>")
    }

    
    if(b>=90){
        var h=document.createElement('p');
        h.innerHTML="You do show several signs of anxiety. Don't worry though as it will get better with counselling.Although not equivalent to the therapeutical help, we do have volunteers at standby who would love to help. <br> "
        document.getElementById("new2").appendChild(h);
    }
    else if(b>=50){
        var h=document.createElement('p');
        h.innerHTML="You show some signs of anxiety. However, this will reduce with some help. You could go to a counsellor.  You could also try talking to our volunteers out here who would love to help you out.<br>"
        document.getElementById("new2").appendChild(h);
    }
    else{
        var h=document.createElement('p');
        h.innerHTML="You do not suffer from anxiety. Awesome!<br>"
        document.getElementById("new2").appendChild(h);
    }
    if(c==40){
        var h=document.createElement('p');
        h.innerHTML="You suffer from PTSD due to some tragedy that took place in your life. We would recommend you to talk to someone about it. We have people who could also listen to you in case you want to talk about it.<br>"
        document.getElementById("new2").appendChild(h);
    }
    else if(c>=10){
        var h=document.createElement('p');
        h.innerHTML="Although some signs of PTSD are seen, you do not suffer from PTSD due to some recent tragedy. However we do have volunteers here if you wish to talk about it to someone<br>"
        document.getElementById("new2").appendChild(h);
    }
    else{
        var h=document.createElement('p');
        h.innerHTML="You do not suffer from PTSD!<br>"
        document.getElementById("new2").appendChild(h);
    }
    if(d>=30){
        var h=document.createElement('p');
        h.innerHTML="We think you suffer from social anxiety.We understand it must be really bad for you. But do not worry,it will get better with some help. You could talk to our counsellors here <br>"
        document.getElementById("new2").appendChild(h);
    }
    else if(d>=10 && d<30){
        var h=document.createElement('p');
        h.innerHTML="Although some signs of social anxiety are seen, you do not need to worry as you do not have social anxiety. However if you wish to talk about it to someone, our volunteers out here would love to listen to you <br>"
        document.getElementById("new2").appendChild(h);
    }
    else{
        var h=document.createElement('p');
        h.innerHTML="You do not suffer from social anxiety <br>"
        document.getElementById("new2").appendChild(h);
    }
}
}

