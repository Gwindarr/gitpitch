<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php 
require_once ('wp-config.php');
require_once("wp-content/plugins/membermouse/includes/mm-constants.php");
require_once("wp-content/plugins/membermouse/includes/init.php"); 

	require_once('phpab.php');
	$subtitle_text = new phpab('subtitle_text');
	$subtitle_text->add_variation('best_course');
	$subtitle_text->set_ga_slot('7');
	
	if ($subtitle_text->get_user_segment()=='best_course') {
		$subtitle = 'The Best Thai Course on the Web';
	} else {
		$subtitle = 'The Fastest Way to Learn Thai, Guaranteed!';
	}

?>

  <html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
  <head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <script src="//cdn.optimizely.com/js/2446361790.js"></script>

  <title>Learn Thai From A White Guy</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="alternate" type="application/rss+xml" title="Learn Thai From A White Guy ? Feed" href="http://learnthaifromawhiteguy.com/feed/">
  <link rel="stylesheet" id="news-theme-css" href="/wp-content/themes/news/style.css?ver=2.0.0" type="text/css" media="all">
<style type="text/css"></style><script type="text/javascript" src="/wp-includes/js/jquery/jquery.js?ver=1.10.2">
</script><style type="text/css"></style><style type="text/css"></style>
  <script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1">
</script>
</script>

 
  
  <link rel="pingback" href="/xmlrpc.php">
  <meta name="google-site-verification" content="QfX2hYT5L3fjeu4iFdF1eBLDJ-KND7-axydYpjK4BYw">
  <meta property="fb:admins" content="689928716">
  <meta property="og:url" content="http://learnthaifromawhiteguy.com">
  <meta property="og:title" content="Learn Thai From A White Guy">
  <meta property="og:site_name" content="Learn Thai From A White Guy">
  <meta property="og:description" content="I've spent the last ten years learning Thai and developing this course so you won't have to make the same language-learning mistakes I did. I've taught hundreds of students with this method and I guarantee you will be able to read, write and prounounce everything correctly after 10 hours of studying.">
  <meta property="og:type" content="website">
  <meta property='og:image' content='http://learnthaifromawhiteguy.com/ogimg.png'/>
  <meta property="og:locale" content="en_us">
<?php include('tracking.php'); ?>

  <meta name="Description" content="The Best Thai Course on the web!">
  <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/google-tts.min.js">
</script>
</head>
<body class="home blog custom-header content-sidebar news frontpage">

<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

  <div id="wrap">


    <div id="header">
      <div class="wrap">
        <div id="title-area">
          <h2 id="title"><a href="/" title="Learn Thai from a White Guy"><img title="Learn Thai from a White Guy" src="/wp-content/themes/news/images/header.png"></a></h2>

          <div class="head-right">
            <div class="subtitle wrap">
							<h2><?php echo $subtitle; ?></h2>
						</div>
						<div class="login_link">
							<a href="/login">Login</a>
						</div>
          </div>
        </div>
      </div>
    </div>

    <div id="nav">
		 <?php wp_nav_menu( array('theme_location'  => 'primary' ) ); ?>  
		 </div>

   <div id="inner" class="nobg">
<div class="wrap">
        <div id="content-sidebar-wrap cf">
  
  
  
  <div class="front-secondblock cf">
  <div class="intro-copy leftblock cf">
	<h3>Speak and Read Thai in <span class="tenhr">10 Hours</span></h3>
  <a href="/about/"><img src="/wp-content/themes/news/images/whiteguy.png"></a>
	<p>Hi, I'm Brett the White Guy. Learning languages is my thing but I really struggled with Thai in the beginning.</p>
  <p><strong>Nobody understood me</strong> no matter how hard I tried to get the tones and pronunciation right.</p>
	
	<p>I developed a system to teach myself Thai and now I want to give it to you. If you spend ten hours on my course, I guarantee you'll be speaking and reading by the time you're done. It worked for me and it's worked for hundreds of my students, so I know it will work for you.</p>
	
  </div><div class="rightblock cf">
 <div class="tryfree block-inner cf">
  <h2><a title="Learn Thai from a White Guy Web Course" href="/free-thai-lesson">
		Try My Course Free</a><br></h2>
                      <a href="/free-thai-lesson"><img src="/wp-content/themes/news/images/optin-letters.png"></a>

                      

                      
  <p>Try the first lesson from my online course and you'll see why it works.</p>
  <p>No magic or ancient ninja tricks here, just a solid method.</p>

                      

                      

                      

                      <p class="morelink" style="
"><a href="/free-thai-lesson" onClick="mixpanel.track('click front page free lesson');">Try it Free!</a></p>
                    </div>
                    </div>
  
  </div>
	
</div>
				
				
					
						
				
				
          
            <div class="front-secondblock cf">

                
                    

                    <div class="block-left cf">
                    
<div class="webcourse-block cf">
                      

                      <h2><a title="Learn Thai from a White Guy Web Course" href="/learn-thai-online">My Web Course</a><br></h2>

                      <a href="/learn-thai-online"><img src="/wp-content/themes/news/images/productimage-easy.jpg" style="float: left;"></a>

                      

                      

                      <p>This course is the culmination of ten years learning, speaking and teaching Thai.</p>
<p>By the end of it, you will be able to pronounce everything correctly and Thai people will actually understand you.</p>
<p>You'll also be a master of the alphabet, which means you can read anything you encounter</p>

                      <p class="morelink"><a class="bluebutton" href="/learn-thai-online">Learn More</a></p>
                    </div>
</div>

                    <div class="block-right cf">
  <div class="block-inner blog-block">
                    

                      

                      <h2><a title="More About Me" href="/learn-thai-blog">My Thai Learning Blog</a></h2>

                      

                      
  <p>I have tons of content which you'll find useful whether you are just starting out or struggling to get more awesome at Thai or language learning in general.</p>

                      <p class="morelink"><a class="bluebutton" href="/learn-thai-blog/">Check Out the Blog</a></p>
                    </div>
</div>

            </div>
						
						<div class="front-thirdblock cf">
  <div class="block-left cf">
  <div class="studywithme block-inner cf">
                      <a href="/about-brett/"><img src="/wp-content/themes/news/images/whiteguy2.png"></a>

                      <h2><a title="Learn Thai from a White Guy Web Course" href="/hire-me/">Study with Me</a><br></h2>

                      
  <p>Need some help with your studying? I teach Thai over Skype and face-to-face in Chiang Mai.</p>
  <p>If you think you're tone-deaf or bad at languages, I can help.</p>

                      

                      

                      

                      <p class="morelink"><a href="/about-brett" class="bluebutton">Learn More</a></p>
                    </div>                  

</div>
<div class="fb-block">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FLearn-Thai-from-a-White-Guy%2F130631900343961&amp;width=260&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false&amp;appId=325792184119254" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:258px;" allowtransparency="true"></iframe>
</div>
					
			</div>
    </div>


<!-- KISSmetrics tracking snippet -->
<script type="text/javascript">var _kmq = _kmq || [];
var _kmk = _kmk || '1a8464a01b4e6c4079c09b38915de63e0ff6bf14';
function _kms(u){
  setTimeout(function(){
    var d = document, f = d.getElementsByTagName('script')[0],
    s = d.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = u;
    f.parentNode.insertBefore(s, f);
  }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
</script>


    <div id="footer" class="footer">
		<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1015124111;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1015124111/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
      <div class="wrap">
        <div class="gototop">
          <p><a href="#wrap" rel="nofollow">Return to top of page</a></p>
        </div>

        <div class="creds">
          <p>Copyright 2014 Learn Thai From A White Guy</p>
        </div>
      </div>
    </div>
  </div>
	
<!-- Drip Snippet-->
<script type="text/javascript">
  var _dcq = _dcq || [];
  var _dcs = _dcs || {}; 
  _dcs.account = '7167985';
  
  (function() {
    var dc = document.createElement('script');
    dc.type = 'text/javascript'; dc.async = true; 
    dc.src = '//tag.getdrip.com/7167985.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(dc, s);
  })();
</script>

<!-- Crazy Egg Tracking Script -->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0036/4943.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

</body></html>
		