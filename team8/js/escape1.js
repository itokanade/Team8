

wood_flug = sessionStorage.getItem('woodcount');
bell_flug = sessionStorage.getItem('bellcount');
ikd_flug = sessionStorage.getItem('ikdflg');

function onoclick()
{
    var ono_flug = sessionStorage;
    ono_flug.setItem('woodcount',1);
    
    document.getElementById("message").innerHTML = "斧を手に入れた！";
    document.getElementById("ono").style.visibility ="hidden";

    
};
function bellclick()
{
    var bell_flug = sessionStorage;
    bell_flug.setItem('bellcount',1);
    
    document.getElementById("message").innerHTML ="クマよけの鈴を手に入れた！";
    document.getElementById("bell").style.visibility = "hidden";
    
};
function bearclick(){
    
    var bell = sessionStorage;
    var val = bell.getItem('bellcount');
    if(bell_flug == 1){
        document.getElementById("message").innerHTML ="クマは逃げて行った！"
        document.getElementById("kuma").style.visibility = "hidden";
        document.getElementById("wood").style.visibility = "visible";
    }
    else{
        location.replace("gameover.html");
    }
};

    

function buttonclick1()
{
    location.replace("gacha.html");
    var vol = sessionStorage;
    vol.clear();
}
function woodclick()
{
    var woodc = sessionStorage;
    var val = woodc.getItem('woodcount');
   
    if(wood_flug == 1)
    {
        document.getElementById("message").innerHTML = "木を切っていかだを作った！"
        document.getElementById("wood").style.visibility = "hidden";
        var ikd_flug = sessionStorage;
        ikd_flug.setItem('ikdflg',1);
        
    }
    //if(wood_flug == 1)
    //{
       // document.getElementById("ikada").style.visibility ="visible";
    //}
    
}
function ikadaclick()
{
    location.replace("gameclear.html");
}
function buttonclick2()
{
    var ikd = sessionStorage;
    var i = ikd.getItem('ikdflg');
    if(ikd_flug == 1)
    {
        document.getElementById("ikada").style.visibility = "visible";
    }
    else
    {
        document.getElementById("message").innerHTML = "いかだがない";
    }
}