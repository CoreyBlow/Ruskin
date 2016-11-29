<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional// EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
<link href="witness_styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" 
	type="image/png" 
	href="../images/ruskin_icon.png">
<title>Now Showcasing: "On the Rainbow: In Blank Verse" (MS I)</title>

<script src="jquery-3.1.1.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$.fn.popover.Constructor.DEFAULTS.placement = 'top';
(function($){
 
    $(document).ready(function(){
            $('[data-toggle="popover"]').popover(); 
            container: '.popover'
    });

})(jQuery);
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

// Optimize for Tablets //
$(document).ready(function(){
	var width = $(window).width();
	if(/Android|BlackBerry|CriOS|IEMobile|iPad|iPhone|iPod|Opera Mini|Opera Mobi|Mobile|Tablet|Touch/i.test(navigator.userAgent)){
		$("#navbar").css("height", "30px");
		$("[src*='images/navbar']").css({"height":"30px", "width":"39px"});
		$("[src='images/navbar/navbar.jpg']").css({"width":"600", "height":"44"});
		$(".navbar-facsimile-text, .navbar-magnify-text, .navbar-enlarge-text, .navbar-hand-text, .shortcut").css({"font-size":"10pt", "line-height":"20px"});
		$("#navbar-tab").css({"height":"18px", "width":"36px"});
		$("#toggle-navbar").css({"height":"15px", "width":"30px"});
		$("#first_button").css("margin-left", "68px");
		$(".navbar-navigation").css({"height":"30px", "width":"165px"});
		$(".navbar-location").css({"font-size":"12pt", "height":"21px", "margin-top":"4px", "margin-left":"12px", "margin-right":"12px", "width":"60px"});
		$("#navbar-facsimile").css({"left":"162px", "top":"30px", "width":"150px"});
		$("#navbar-facs").css({"left":"296px", "top":"30px"});
		$("#toggle-view").css("margin-left", "30px");
		$("#navbar-magnify").css({"left":"390px", "top":"30px"});
		$("#navbar-enlarge").css({"left":"429px", "top":"30px"});
		$("#toggle-transcription").css("margin-left", "30px");
		$("#navbar-hand").css({"left":"524px", "top":"30px"});
	}
});
// Preload First Facsimile //
$(document).ready(function(){
	$("#facs").load(function(){
		$("#facs_preview").hide();
		$("#facs").show();
	});
});
// Toggle NavBar //
$(document).ready(function(){
    $("#navbar-tab").toggle(function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab.jpg");
		$("#navbar").slideUp("fast");
		$("#content").css("padding-bottom", "0px");
		},function(){
		$("#toggle-navbar").attr("src", "images/navbar/tab_ro.jpg");
		$("#navbar").slideDown("fast");
		$("#content").css("padding-bottom", "21px");
	});
});
// Toggle facsimile Drop-down //
$(document).ready(function(){
    $(".navbar-location").click(function(){
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-facsimile").toggle();
    });
});
// Select Facsimile 1 //			
$(document).ready(function(){			
	$("#first_button, #navbar-facsimile-1, #previous-2").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-facsimile-1").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-1").show();	
		$("#facs_preview").attr("src", "../images/_previews/msi/1229147_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "../images/facsimiles/msi/1229147.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 1 //			
$(document).ready(function(){			
	$("#navbar-facsimile-1").hover(function(){		
		$("#navbar-facs").show();	
		$("#navbar-facs_preview").attr("src", "../images/_previews/msi/1229147_preview.jpg");	
		$("#navbar-facs_preview").show();	
		},function(){	
		$("#navbar-facs").hide();	
		$("#navbar-facs_preview").attr("src", "../images/_previews/blank.jpg");	
	});		
});			
// Select Facsimile 2 //			
$(document).ready(function(){			
	$("#next-1, #navbar-facsimile-2, #last_button").click(function(){		
		$(".shortcut").css("color", "#FFF");	
		$("#navbar-facsimile-2").css("color", "#09C");	
		$(".navbar-navigation").hide();	
		$("#navbar-navigation-2").show();	
		$("#facs_preview").attr("src", "../images/_previews/msi/1229148_preview.jpg");	
		$("#facs_preview").show();	
		$("#facs").attr("src", "../images/facsimiles/msi/1229148.jpg");	
		$("#facs").load(function(){	
			$("#facs_preview").hide();
			$("#facs").show();
		});	
	});		
});			
// Preview Facsimile 2 //			
$(document).ready(function(){			
	$("#navbar-facsimile-2").hover(function(){		
		$("#navbar-facs").show();	
		$("#navbar-facs_preview").attr("src", "../images/_previews/msi/1229148_preview.jpg");	
		$("#navbar-facs_preview").show();	
		},function(){	
		$("#navbar-facs").hide();	
		$("#navbar-facs_preview").attr("src", "../images/_previews/blank.jpg");	
	});		
});
// Toggle View //
$(document).ready(function(){
	$("#toggle-view").toggle(function(){ //Facsimile View//
		$("#toggle-view").attr("src", "images/navbar/facsimile_ro.jpg");
		$("#content-right").css("width", "0");
		$("#content-right").css("height", "0");
		$("#content-left").css("width", "100%");
		$("#content-left").css("height", "100%");},
		function(){ //Transcription View//
		$("#toggle-view").attr("src", "images/navbar/transcription_ro.jpg");
		$("#content-left").css("width", "0");
		$("#content-left").css("height", "0");
		$("#content-right").css("width", "100%");
		$("#content-right").css("height", "100%");
		$("#copyright").css("display", "none");},
		function(){ //Facsimile-Transcription View//
		$("#toggle-view").attr("src", "images/navbar/facsimile-transcription_ro.jpg");
		$("#content-right").css("width", "40%");
		$("#content-right").css("height", "100%");
		$("#content-left").css("width", "60%");
		$("#content-left").css("height", "100%");
		$("#copyright").css("display", "");}
	);
});
// Toggle Magnification Drop-down //
$(document).ready(function(){
    $("#toggle-magnify").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-magnify").toggle();
    });
});
// Reset Image Magnification to One Times (Default) //
$(document).ready(function(){
	$("#x1").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x1").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "100%");
	});
});
// Magnify Image Two Times //
$(document).ready(function(){
	$("#x2").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x2").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "200%");
	});
});
// Magnify Image Four Times //
$(document).ready(function(){
	$("#x4").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x8").css("color", "#FFF");
		$("#x4").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "400%");
	});
});
// Magnify Image Eight Times //
$(document).ready(function(){
	$("#x8").click(function(){
		$("#toggle-magnify").attr("src", "images/navbar/magnify_ro.jpg");
		$("#x0").css("color", "#FFF");
		$("#x1").css("color", "#FFF");
		$("#x2").css("color", "#FFF");
		$("#x4").css("color", "#FFF");
		$("#x8").css("color", "#09C");
		$("#facs_preview, #facs").attr("width", "800%");
	});
});
// Toggle Point Size Drop-down //
$(document).ready(function(){
    $("#toggle-enlarge").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-enlarge").toggle();
    });
});
// Reset Text to 12pt (Default) //
$(document).ready(function(){
	$("#12pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#12pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "12pt");
		$(".smallcaps").css("font-size", "8pt");
	});
});
// Enlarge Text to 16pt //
$(document).ready(function(){
	$("#16pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#16pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "16pt");
		$(".smallcaps").css("font-size", "10.7pt");
	});
});
// Enlarge Text to 20pt //
$(document).ready(function(){
	$("#20pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#24pt").css("color", "#FFF");
		$("#20pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "20pt");
		$(".smallcaps").css("font-size", "13.3pt");
	});
});
// Enlarge Text to 24pt //
$(document).ready(function(){
	$("#24pt").click(function(){
		$("#toggle-enlarge").attr("src", "images/navbar/enlarge_ro.jpg");
		$("#8pt").css("color", "#FFF");
		$("#12pt").css("color", "#FFF");
		$("#16pt").css("color", "#FFF");
		$("#20pt").css("color", "#FFF");
		$("#24pt").css("color", "#09C");
		$(".witness").css("line-height", "1.5em");
		$(".witness").css("font-size", "24pt");
		$(".smallcaps").css("font-size", "16pt");
	});
});
// Toggle Transcriptions //
$(document).ready(function(){
	$("#toggle-transcription").toggle(function(){ // Display Original Text //
		$("#toggle-transcription").attr("src", "images/navbar/text-original.jpg");
		$("[class*='add-overwriting']").hide();
		$("[class*='subst-add']").hide();
		$("[class*='subst-del']").css("position","relative");
		$(".del-erasure").css("position","relative");},
		function(){ // Display Revised Text //
		$("#toggle-transcription").attr("src", "images/navbar/text-revised.jpg");
		$("[class*='del']").hide();
		$("[class*='add-overwriting']").show();
		$("[class*='subst-add']").show();},
		function(){ // Display Composite Text (Default) //
		$("#toggle-transcription").attr("src", "images/navbar/text-composite.jpg");
		$(".del-erasure").css("position","absolute");		
		$("[class*='subst-del']").css("position","absolute");			
		$("[class*='del']").show();}
	);
});
// Toggle Hand Drop-down //
$(document).ready(function(){
    $("#toggle-hand").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
		$("#navbar-hand").toggle();
	});
});
// Toggle Librarian (Example) //
$(document).ready(function(){
	$("#toggle-LIBRARIAN").toggle(function(){
		$("#toggle-LIBRARIAN").css("color", "#FFF");
		$(".add-LIBRARIAN").hide();
		$(".add-bottom-LIBRARIAN").hide();},
		function(){
		$("#toggle-LIBRARIAN").css("color", "#09C");
		$(".add-LIBRARIAN").show();
		$(".add-bottom-LIBRARIAN").show();}
	);
});
// Close Drop-downs //
$(document).ready(function(){
	$("#content, #first_button, .previous_button, .next_button, #last_button, #toggle-view, #toggle-marginalia, #toggle-expansion").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#navbar-info").hide();
		$("#toggle-info_ro").hide();
		$("#toggle-info").show();
	});
});
// Toggle Info Panel //
$(document).ready(function(){
	$("#toggle-info, #toggle-info_ro").click(function(){
		$("#navbar-facsimile").hide();
		$("#navbar-magnify").hide();
		$("#navbar-enlarge").hide();
		$("#navbar-hand").hide();
		$("#toggle-info_ro").toggle();
		$("#toggle-info").toggle();
		$("#navbar-info").toggle();
	});
});


</script>
</head>
<body>
        
<div id="main">
  <div id="navbar-tab">
	<img id="toggle-navbar" src="images/navbar/tab_ro.jpg" alt="Show/Hide NavBar Button" title="Show/Hide the Navbar" width="20" height="10" />
  </div>
  <div id="navbar">
	<img id="first_button" src="images/navbar/first.jpg" alt="First Facsimile Button" title="Go to the First Facsimile" width="26" height="20" />
	<div id="navbar-navigation-1" class="navbar-navigation">	
	<img id="previous-1" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Facsmilie Button" title="Go to the Previous Facsimile" width="26" height="20"/><div class="navbar-location" title="Select a Facsimile">f1</div><img id="next-1" class="next_button" src="images/navbar/next.jpg" alt="Next Facsimile Button" title="Go to the Next Facsimile" width="26" height="20"/>
	</div>	
	<div id="navbar-navigation-2" class="navbar-navigation" style="display:none">	
	<img id="previous-2" class="previous_button" src="images/navbar/previous.jpg" alt="Previous Facsmilie Button" title="Go to the Previous Facsimile" width="26" height="20"/><div class="navbar-location" title="Select a Facsimile">f2</div><img id="next-2" class="next_button" src="images/navbar/next.jpg" alt="Next Facsimile Button" title="Go to the Next Facsimile" width="26" height="20"/>
	</div>
<img id="last_button" src="images/navbar/last.jpg" alt="Last Facsimile Button" title="Go to the Last Facsimile" width="26" height="20" /><img id="toggle-view" src="images/navbar/facsimile-transcription_ro.jpg" alt="Toggle Views Button" title="Toggle Views" width="26" height="20" /><img id="toggle-magnify" src="images/navbar/magnify_ro.jpg" alt="Magnification Button" title="Increase the Magnification of the Facsimile" width="26" height="20" /><img id="toggle-enlarge" src="images/navbar/enlarge_ro.jpg" alt="Point Size Button" title="Increase the Point Size of the Transcription" width="26" height="20" /><img id="toggle-transcription" src="images/navbar/text-composite.jpg" alt="Transcription Button" title="Toggle Transcriptions" width="26" height="20" /><img id="toggle-hand" src="images/navbar/scribe_ro.jpg" alt="Hands Button" title="Toggle Hands On/Off" width="26" height="20" /><img id="toggle-info" src="images/navbar/info.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="float:right" /><img id="toggle-info_ro" src="images/navbar/info_ro.jpg" alt="Info Button" title="Learn about Showcase" width="26" height="20" style="display:none; float:right" />
	<div id="navbar-facsimile" title="Select a Facsimile">
    	<span class="navbar-facsimile-text">Facsimile:
            <br/>
            <br/><div id="navbar-facsimile-1" class="shortcut" style="color:#09C">f1</div>
            <br/>
            <br/><div id="navbar-facsimile-2" class="shortcut">f2</div>
            <br/>
			<br/>
            <br/>
        </span>
	</div>
    <div id="navbar-facs" style="display:none">
    	<img id="navbar-facs_preview" src="images/_previews_wynkyn/blank.jpg" width="100%" />
    </div>    
	<div id="navbar-magnify" title="Increase the Magnification of the Facsimile">
		<span class="navbar-magnify-text">Facsimile Magnification:
            <span id="vss-magnify" style="display:none">
            	<br/>
            	<br/><span id="x0" class="navbar-magnify-text">Default</span>
            </span>
            <br/>
            <br/><span id="x1" class="navbar-magnify-text" style="color:#09C">100%</span>
            <br/>
            <br/><span id="x2" class="navbar-magnify-text">200%</span>
            <br/>
            <br/><span id="x4" class="navbar-magnify-text">400%</span>
            <br/>
            <br/><span id="x8" class="navbar-magnify-text">800%</span>
            <br/>
            <br/>
		</span>
	</div>
    <div id="navbar-enlarge" title="Increase the Point Size of the Transcription">
		<span class="navbar-enlarge-text">Transcription Point Size:
            <br/>
            <br/><span id="12pt" class="navbar-enlarge-text" style="color:#09C">12pt</span>
            <br/>
            <br/><span id="16pt" class="navbar-enlarge-text">16pt</span>
            <br/>
            <br/><span id="20pt" class="navbar-enlarge-text">20pt</span>
            <br/>
            <br/><span id="24pt" class="navbar-enlarge-text">24pt</span>
            <br/>
            <br/>
        </span>
	</div>
<div id="navbar-hand" title="Toggle Hands On/Off">
		<span class="navbar-hand-text">
        	<span style="color:#FFF">Hands:</span>
            <br/>
            <br/><span id="toggle-X" class="navbar-hand-text" style="color:#CCC"><span style="background-color:#CCC">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;To Come</span>
            <br/>
            <br/>
        </span>
	</div>
  </div>
  <div id="navbar-info">
  		<span class="navbar-info-text">
            <div style="color:#999; font-size:48pt; font-weight:normal; left:106px; position:absolute; top:19px">2</div>
            <p class="heading_1">Showcase</p>
            <br/>
            <hr/>
            <span class="heading_1">Using</span> <span class="heading_2">Showcase</span>
            <hr/>
            <p>Everything in Showcase starts with the Navbar, the svelte toolbar at the top of this browser window. From left to right, the controls in the Navbar perform the following functions (when active, these controls appear <span style="color:#09F">blue</span>):</p>
            <br/>
            <div style="text-align:center"><img src="images/navbar/navbar.jpg" alt="Image of the Navbar" width="600" height="44" /></div>
            <br/>
            <p><span class="heading_3">1&#x2012;Show/Hide the Navbar</span><br/>Clicking or tapping this control reduces the Navbar to a small tab in the top left corner of the browser window. Clicking or tapping this tab restores the Navbar.</p>
            <br/>
            <p><span class="heading_3">2&#x2012;Go to the First Facsimile</span><br/>Clicking or tapping this control takes the user to the first facimile of the witness.</p>
            <br/>
            <p><span class="heading_3">3&#x2012;Go to the Previous Facsimile</span><br/>Clicking or tapping this control takes the user one facimile backward in the witness.</p>
            <br/>
            <p><span class="heading_3">4&#x2012;Select a Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual facsmiles may be previewed and "jumped" to directly. The control also displays the ID of the current facsmile.</p>
            <br/>
            <p><span class="heading_3">5&#x2012;Go to the Next Facsimile</span><br/>Clicking or tapping this control takes the user one facsimile forward in the witness.</p>
            <br/>
            <p><span class="heading_3">6&#x2012;Go to the Last Facsimile</span><br/>Clicking or tapping this control takes the user to the last facsimile of the witness.</p>
            <br/>
            <p><span class="heading_3">7&#x2012;Toggle Views</span><br/>Clicking or tapping this control enables the following views: Facsimile-Transcription (default), Facsimile-only, and Transcription-only.</p>
            <br/>
            <p><span class="heading_3">8&#x2012;Increase the Magnification of the Facsimile</span><br/>Clicking or tapping this control opens a drop-down menu, from which the magnification level of the facsimile can be adjusted between 100% (default) and 800%.</p>
            <br/>
            <p><span class="heading_3">9&#x2012;Increase the Point Size of the Transcription</span><br/>Clicking or tapping this control opens a drop-down menu, from which the the font size of the transcription can be adjusted between 12 pt. (default) and 24 pt.</p>
            <br/>
			<p><span class="heading_3">10&#x2012;Toggle Transcriptions</span><br/>Clicking or tapping this control enables the transcription to be viewed as: Original Text, Revised Text, or Composite Text (default).</p>
			<br/>
            <p><span class="heading_3">10&#x2012;Toggle Hands On/Off</span><br/>Clicking or tapping this control opens a drop-down menu, from which individual hands may be toggled on (default) or off.</p>
			<br/>
            <p><span class="heading_3">13&#x2012;Learn about Showcase</span><br/>Clicking or tapping this control shows or hides this window.</p>
            <br/>
            <hr/>
            <span class="heading_1">Copyright Notice</span> <span class="heading_2">&#x0026; Conditions of Use</span>
            <hr/>
            <p>This edition of Showcase was created exclusively for <i>The Early Ruskin Manuscripts, 1826&#x2013;1842</i>, a Digital Humanities project of Southeastern Louisiana University's Department of English. Showcase remains the intellectual property of and is &#x00A9; by its author, <a href="mailto:charles.borchers@selu.edu">Charles W. Borchers, IV</a>, and may not be modified or copied without his express permission. Your use of this software constitutes acknowledgement of this copyright and of the software's conditions of use.</p>
            <!--<p>All images from Cambridge University Library Sel.5.27, "Here begynneth a shorte treatyse of contemplacyon taught by our lorde Ihesu cryste / or taken out of the boke of Margerie kempe of lynn." are &#x00A9; Cambridge University Library.</p>-->
            <p>Andron Scriptor Web 3.1, the webfont developed for and used by Showcase, is a special edition of <a href="http://www.signographie.de/cms/front_content.php?idart=69&changelang=2" target="_blank">Andron&#x2122;</a>, financed by the Norwegian Research Council and the University of Bergen. <a href="http://www.mufi.info/fonts/#Andron" target="_blank">Andron Scriptor Web</a> exists to support scholarly editing in medieval philological studies and is provided free of charge by its creator and provider, Andreas St&#x00F6;tzner and the <a href="http://www.mufi.info" target="_blank">Medieval Unicode Font Initiative (MUFI)</a>. Both must be credited in any work which utilizes the font. Any alteration of the font, including, but not limited to, any alteration of its content, glyphs, or name, is a violation of international copyright law. If enhancements or improvements to the font are desired, these should be forwarded to MUFI for consideration in future releases of the font. Andron&#x2122; is a trademark of Andreas St&#x00F6;tzner; its design is &#x00A9; by Andreas St&#x00F6;tzner all rights reserved.</p>
		</span>
	</div>
  	<div id="content-left">
        <img id="facs_preview" src="../images/_previews/msi/1229147_preview.jpg" width="100%"/>
        <img id="facs" src="../images/facsimiles/msi/1229147.jpg" width="100%" style="display:none"/>
		<!--<div id="copyright"><img src="..." alt="..." title="Manuscript images &#x00A9;...." width="30" height="60" /></div>-->
	</div>
  	<div id="content-right">
		<div class="witness">
			<div class="title" style="text-align:center"><span class="del-scratchout">poem V</span><br/><span class="space" style="padding-left:4.4em">Â?</span><span class="del-scratchout">on the ra</span><div id="1229147r" class="pb"></div>poem VI<br/>on the rainbow<br/>in blank verse<div class="g-justification" style="width:4.0em">Â?</div>
   </div>
   <div class="pageNum-top-right">105</div><br/> 
   <span class="lg-stanza">
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span><span class="caps">T</span><span class="smallcaps">he</span> rainbows beauties<div class="runover" style="left:1.6em">are my joy.</div></span><br/>
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span>in rains where rainbows are the be<span class="g-insertion">/</span><div class="add-above" style="left:14.0em">,</div><span class="glosses"><a href="#" data-toggle="popover" title="Line 2&#x2014;end" rel="popover" data-placement="top" data-content="An insertion glyph points to a comma above the line; 
                    see <a href='../notes/editorial_rationale_note.php#DELETIONANDADDITION' target='_blank'>Editorial and Encoding Rationale and Methodology: Deletion and Addition</a>." data-html="sssss" data-trigger="focus"><sup>1</sup></a></span></span><br/>
      <span class="l">and shoot <span class="subst-del"><span class="gap" style="padding-left:0.4em">Â?</span></span><span class="subst-add-overwriting">t</span>hose rays of light to me<span class="g-insertion">/</span><div class="add-above" style="left:14.0em">,</div><span class="glosses"><a href="#" data-toggle="popover" title="Line 3&#x2014;end" rel="popover" data-placement="top" data-content="An insertion glyph points to a comma above the line; 
                    see <a href='../notes/editorial_rationale_note.php#DELETIONANDADDITION2' target='_blank'>Editorial and Encoding Rationale and Methodology: Deletion and Addition</a>." data-html="sssss" data-trigger="focus"><sup>2</sup></a></span></span><br/>
      <span class="l">whe<span class="subst-del">n<span class="space" style="padding-left:0.4em">Â?</span></span><span class="subst-add-overwriting">re</span>all the beauties of them are,</span><br/>
      <span class="l">and those that see them all<span class="subst-del">r</span><span class="subst-add-overwriting"><span class="space" style="padding-left:0.4em">Â?</span>r</span>eflect.<span class="glosses"><a href="#" data-toggle="popover" title="&#x201C;all reflect&#x201D;" rel="popover" data-placement="top" data-content="Because <span class='persName-JR'>Ruskin</span> wrote the <i>r</i> too close to the preceding word, 
                    he erased it by printing a second <i>r</i> with heavier strokes, as if in boldface; 
                    see <a href='../notes/editorial_rationale_note.php#DELETIONANDADDITION' target='_blank'>Editorial and Encoding Rationale and Methodology: Deletion and Addition</a>." data-html="sssss" data-trigger="focus"><sup>3</sup></a></span><span class="glosses"><a href="#" data-toggle="popover" title="Line 5&#x2014;end" rel="popover" data-placement="top" data-content="Since <span class='persName-JR'>Ruskin</span> is so definite about placing commas at the ends of line close to the preceding word, 
                    he erased it by printing a second <i>r</i> with heavier strokes, as if in boldface; 
                    see <a href='../notes/editorial_rationale_note.php#DELETIONANDADDITION' target='_blank'>Editorial and Encoding Rationale and Methodology: Deletion and Additions 2&#x2013;4, 
                    he presumably does not intend the punctuation closing line 5 as a pause&#x2010;period but as a terminal period, despite the lack of an independent clause in lines 2&#x2013;4; 
                    see <a href='../notes/editorial_rationale_note.php#COMMA' target='_blank'>Editorial and Encoding Rationale and Methodology: Commas, Periods, and Other Punctuation</a>. 
                    Note the decided use of terminal periods in lines 1 and 8" data-html="sssss" data-trigger="focus"><sup>4</sup></a></span></span><br/>
      <span class="l">and those that have the colours best<span class="unclear-faded-CWB">,</span></span><br/>
      <span class="l">show <span class="overwriting">m</span>e those rays of light that <div class="runover" style="left:2.8em">all</div></span><br/>
      <span class="l">reflect upon. <span class="caps-doubleletter">A</span>nd<span class="glosses"><a href="#" data-toggle="popover" title="&#x201C;And&#x201D;&#x2014;" rel="popover" data-placement="top" data-content="Double-letter capital; see <a href='../notes/editorial_rationale_note.php#HAND' target='_blank'>Editorial and Encoding Rationale and Methodology: Handwriting and Special Characters</a>." data-html="sssss" data-trigger="focus"><sup>5</sup></a></span> all that know</span><br/>
      <span class="l">about the rainbow will reflect<div class="runover" style="left:3.2em">those rays</div></span><br/>
      <span class="l">of light that come towards them<div class="runover" style="left:4.4em">always are</div></span><br/>
      <span class="l">The ornament of all the sky</span><br/>
      <span class="l">but those that do<span class="subst-del">n</span><span class="subst-add-overwriting"><span class="space" style="padding-left:0.4em">Â?</span>n</span>ot<span class="glosses"><a href="#" data-toggle="popover" title="<i>Line 12</i>" rel="popover" data-placement="top" data-content="Because <span class='persName-JR'>Ruskin</span> wrote the <i>n</i> too close to the preceding word, 
                    he erased it by printing a second <i>n</i> with heavier strokes, as if in boldface; 
                    see <a href='../notes/editorial_rationale_note.php#DELETIONANDADDITION' target='_blank'>Editorial and Encoding Rationale and Methodology: Deletion and Addition</a>." data-html="sssss" data-trigger="focus"><sup>6</sup></a></span> know about that ligh<span class="unclear-runoff-TJI">t</span></span><br/>
      <div id="1229148v" class="pb"></div>
      <div class="pageNum-top"><span class="space" style="padding-left:13.2em">Â?</span>106</div><br/>
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span>reflect not on it. and in all that ligh<span class="unclear-gutter-TJI">t</span></span><br/>
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span>not one of<div class="add-above" style="left:3.6em">all</div><span class="glosses"><a href="#" data-toggle="popover" title="Line 14" rel="popover" data-placement="top" data-content="While the word <i>all</i> has the appearance of a runover, it is positioned very close above line 14, and written unusually small; 
                    and since the word makes clearer semantic sense as part of the prepositional phrase in line 14 than as part of the prepositional phrase in line 13, 
                    we interpret it as an addition to line 14." data-html="sssss" data-trigger="focus"><sup>7</sup></a></a></span> the colours do they know</span><br/>
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span>but all that see it justly think upon</span><br/>
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span>The maker of it<span class="space" style="padding-left:0.8em">Â?</span><span class="glosses"><a href="#" data-toggle="popover" title="Line 16" rel="popover" data-placement="top" data-content="The extra space following <i>it</i> appears to function as terminal punctuation; 
                    see <a href='../notes/editorial_rationale_note.php#COMMA' target='_blank'>Editorial and Encoding Rationale and Methodology: Commas, Periods, and Other Punctuation</a>." data-html="sssss" data-trigger="focus"><sup>8</sup></a></span>justly is not he</span><br/>
      <span class="l"><span class="space" style="padding-left:0.4em">Â?</span>best of the rainbows<span class="subst-del"><span class="space" style="padding-left:0.4em">Â?</span><span class="unclear-TJI">b</span></span><span class="subst-add-overwriting">.B</span>ut what light<div class="runover" style="left:4.8em">is that</div></span><br/>
      <span class="l"><span class="space" style="padding-left:0.8em">Â?</span>which to us from that god does flo<span class="unclear-gutter-TJI">w.</span></span><br/>
      <span class="l"><span class="space" style="padding-left:0.8em">Â?</span>all <span class="overwriting">o</span>f the men that from that god<div class="runover" style="left:3.6em">see light</div></span><br/>
      <span class="l"><span class="space" style="padding-left:1.2em">Â?</span>Will say. what light is this</span><br/>
      <span class="l"><span class="space" style="padding-left:1.2em">Â?</span>br<span class="overwriting">o</span>wn is the <span class="overwriting">r</span>ainbow when<div class="runover" style="left:1.2em"><span class="overwriting">c</span>ompared with this</div></span><br/>
      <span class="l"><span class="space" style="padding-left:1.2em">Â?</span>and all the men that see it all <div class="runover" style="left:4.8em">re<span class="overwriting">f</span>lect</div></span><br/>
      <span class="l"><span class="del"><span class="space" style="padding-left:1.6em">Â?</span></span><span class="add">upon</span> The<span class="space" style="padding-left:1.2em">Â?</span><span class="glosses"><a href="#" data-toggle="popover" title="Line 23" rel="popover" data-placement="top" data-content="The extra space following <i>The</i>, along with the appearance of <i>upon</i> 
                    as an addition to the front of the line, suggests that Ruskin was playing with the sense of <i>reflect</i> in line 22 as both a transitive and intransitive verb." data-html="sssss" data-trigger="focus"><sup>9</sup></a></span>beauties of the rainbow</span><br/>
      </span>
  </div>
</div>
</body>
</html>
