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
	<div class="app-content question-page">
		<img src="img/know-your-score-logo.png" alt="Know Your Score" class="know-your-score-logo">
		<h1>How often do you have a drink containing alcohol?</h1>
		<div class="app-questions-container">
			<ul class="app-questions no-style-list">
				<li>
					<button class="button small mauve-fill uppercase left-button">A</button>
					<button class="button small grey-fill right-button">Never</button>
				</li>
				<li>
					<button class="button small mauve-fill uppercase left-button">B</button>
					<button class="button small grey-fill right-button">Monthly or less</button>
				</li>
				<li>
					<button class="button small mauve-fill uppercase left-button">C</button>
					<button class="button small grey-fill right-button">2-4 times per month</button>
				</li>
				<li>
					<button class="button small mauve-fill uppercase left-button">D</button>
					<button class="button small grey-fill right-button">2-3 times per week</button>
				</li>
				<li>
					<button class="button small mauve-fill uppercase left-button">E</button>
					<button class="button small grey-fill right-button">4+ times per week</button>
				</li>
			</ul>
			<button class="button small mauve-fill arrow-right-small">Go to next question</button>
		</div>
		<p><strong>Guide to units</strong></p>
		<p><strong>1 unit:</strong> single measure of spirits</p>
		<p><strong>2 units:</strong> a standard glass of wine or pint of regular (3.6%) beer or cider</p>
		<p><strong>3 units:</strong> a large glass of wine or pint of strong (5.2%) beer or cider</p>
	</div>
</div>

</body>
</html>
