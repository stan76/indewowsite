var global_nav_lang, opt;

function buildtopnav(){

global_nav_lang = (global_nav_lang) ? global_nav_lang.toLowerCase() : "";

linkarray = new Array(); 
outstring = "";
link1 = new Object();
link2 = new Object();
link3 = new Object();
link4 = new Object();
switch(global_nav_lang){
 default: 
	link2.text = "l'Armurerie"
	link3.text = "Forums"
	link4.text = "Boutique"
 break;
}
link1.text = site_name;

link1.href = site_link;
link2.href = "../armory/index.php";
link3.href = forum_link;
link4.href = "../mangosweb/index.php?n=community&sub=vote";

//
linkarray.push(link1)
linkarray.push(link2)
linkarray.push(link3)
linkarray.push(link4)

for(i=0; i<linkarray.length; i++)
{ div = (i<linkarray.length-1) ? "<img src='templates/wotlk/images/topnav/topnav_div.gif'/>":""
  outstring += "<a href='"+linkarray[i].href+ "'>"+ linkarray[i].text +"</a>"+div; }

	topnavguts = "";
	topnavguts += "<div class='topnav'><div class='tn_interior'>";
	topnavguts += outstring;
	topnavguts += "</div></div><div class='tn_push'></div>";
	
	if(document.location.href) hrefString = document.location.href; else hrefString = document.location;
	
	divclass = (hrefString.indexOf("forums")>=0)?"tn_forums":(hrefString.indexOf("armory")>=0)?"tn_armory":"tn_wow";

	targ = document.getElementById("shared_topnav");
    if(targ != null) {
    	targ.innerHTML = topnavguts;
    	if(!targ.className || targ.className == ""){targ.className = divclass;}
    	if(targ.className.indexOf("tn_armory")>=0){ if (!is_opera) {document.body.style.backgroundPosition = "50% 26px"; }}
    	if(targ.className.indexOf("tn_forums")>=0){ document.body.style.backgroundPosition = "100% 26px"; } 

    }
}

buildtopnav();