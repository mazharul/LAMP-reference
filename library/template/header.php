<!DOCTYPE html>
<head>
<title>LAMP references</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../library/js/shjs.js"></script>
<script type="text/javascript" src="../library/js/shell.js"></script>
<script type="text/javascript" src="../library/js/colorbox.min.js"></script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<link type="text/css" rel="stylesheet" href="../library/css/shcss.css">
<link type="text/css" rel="stylesheet" href="../library/css/main.css">
<link type="text/css" rel="stylesheet" href="../library/css/colorbox.css">
<script type="text/javascript">
$(document).ready(function(){
	// colorbox
	$('a#logIn').click(function(){
		$('#logIn').colorbox({width:"50%", inline:true, href:"#logInForm"});
	});

	//saving ajax
	$("#addyourIn").click(function(){

		var code = $("#addCode").val(),
			desc = $("#codeTitle").val();

			if((code === "") || (desc === "")){
				$("#spanError").html("<p>Error[fill in the empty fields]</p>");
			}else{
				console.log("Before"+code+" and "+desc);
				$.post("../library/processors/saveIt.php",{codeA: code, descA: desc } , function(data){
					$("#divToAppend").html(data);
				});
				console.log(code+" and "+desc);
			}
	});

});

</script>
</head>
    <body onload="sh_highlightDocument();">
    <header>
		<div id="headbar"><span class="breadcrumbs">overview</span>
		    <div id="socialButton">
		        <!--<div id="tweetButton"><span id="googleIt"><g:plusone size="medium" href="http://developer.protishobdo.com/lamp/"></g:plusone></span><span id="tweetIt" style="padding-top:5px;"><a href="http://twitter.com/share" class="twitter-share-button" data-text="#protishobdo LAMP references." data-count="horizontal" data-via="mazharul_anwar">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><span><span id="likeIt"><fb:like href="http://developer.protishobdo.com/lamp/" layout="button_count" show_faces="true" width="100" font="verdana"></fb:like></span>
		        </div> -->
		        <a href="#" id="logIn">add yours!</a>
		   </div>

		</div> <!-- eof header -->

		<div style="display:none"> <!-- wrapper for inline colorbox div -->
			<div id="logInForm">
			<div id="spanError"></div>
				Code: <input type="text" name="addCode" id="addCode"/> <br/>
				Descripton/Title: <textarea name="codeTitle" id="codeTitle" placeholder="Write a title"></textarea> <br/>

				<a href="#" id="addyourIn">Save It!</a>
			</div>
		</div> <!--eof colorbox wrapper  -->

</header>


