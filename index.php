<?php
include 'include/config.php';
/* 
 * 
 */
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>KCC Know Your Score Facebook App</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script>
  (function(d) {
    var config = {
      kitId: 'stk3tph',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body>

<div class="app-container">
	<header id="header">
		<a href="http://www.kent.gov.uk/social-care-and-health/health/healthy-living/alcohol" target="_blank">
			<img src="img/header.png" alt="Kent County Council">
		</a>
	</header>
	<div class="app-content landing-page">
		<img src="img/know-your-score-logo.png" alt="Know Your Score" class="know-your-score-logo">
		<h1>Many people don't know how much they drink and how it might be affecting their health, work and relationships. Do you?</h1>
		<button class="quiz button large mauve-fill arrow-right-large">Take the quiz</button>
	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$('.quiz').on('click',function(){
			window.location = 'start.php';
		});
	});
	
</script>
</body>
</html>


