<!DOCTYPE html>
<html>
<head>
  <title>ithought.org - PHP/MySQL website hosting for Atlanta small business, and photography</title>
  <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="keywords" content="Atlanta web hosting, Atlanta PHP hosting, small business web hosting, photography" />
	<link rel="stylesheet" type="text/css" href="/inc/style.css" />
	<script type="text/javascript" src="/inc/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="/inc/tools.js"></script>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<meta name="google-site-verification" content="JIvnX3kor2v3od8pS7XDvf6mlPbrFC8mv2mYY0d-X10" />
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-66854-10']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>
  <div id="main">
    <div id="header">
  	   <a href="/"><img alt="ithought logo" src="/img/logo.jpg" /></a>
  	   <div>
  	      <h3>Premium services, affordable prices</h3>
  	      <p>Host your business or personal website in cloud, or document something important to you with photography.</p>
  	   </div>
    </div>
    <div id="menubar">
      <ul id="menu">
        <li>Hosting<ul>
            <li><a href="/hosting/services.html">services</a></li>
  	        <li><a href="/hosting/platform.html">platform</a></li>
            <li><a href="/hosting/clients.html">clients</a></li>
            <li><a href="/hosting/testimonials.html">testimonials</a></li>
  	        <li><a href="/hosting/support.html">support</a></li>
            <li><a href="/hosting/signup.html">signup</a></li>
        </ul></li>
        <li>Photography<ul>
            <li><a href="/photography/services.html">services</a></li>
            <li><a href="/photography/portfolio.html">portfolio</a></li>
        </ul></li>
      </ul>
    </div>
    <div id="content">
      <div id="left">
        <?php
        if (preg_match('/[a-z\/]+/',$_GET['p'])) {
        	include('content/'.$_GET['p'].'.html');
        } else {
        	include('content/front.html');
        }
        ?>
  	    <br style="clear: both;" />
  	  </div>
  	  <div id="right">
        <?php
        if (preg_match('/hosting/',$_GET['p'])) {
        ?>
    	    <div class="box">
    		    <h3>SYSTEM STATUS</h3>
    		    <p id="status"></p>
    		    <div><a href="http://status.ithought.org/">status.ithought.org</a></div>
    	    </div>
    	    <div class="box">
    		    <h3>TESTIMONIALS</h3>
    		    <p id="tt"></p>
    		    <div><img alt="previous" id="la" src="/img/arrow_left.gif"><span id="wt">1/12</span><img alt="next" id="ra" src="/img/arrow_right.gif" /></div>
    	    </div>
    	    <div class="box">
    		    <h3>PRICING</h3>
    		    <p>
    		      <b>hosting plans start at</b>
    		      <em>$200/year</em>
              <a href="/hosting/signup.html">Signup now!</a>
    		    </p>
    	    </div>
        <?php } else { ?>
        <?php } ?>
  	  </div>
    </div>
  </div>
  <div id="footer">
    &copy; 1999-2016 <a href="http://ckdake.com/">Chris Kelly</a>
  </div>
</body>
</html>
