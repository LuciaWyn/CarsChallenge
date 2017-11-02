<!doctype html>
<html lang="en">
<?php require_once( 'partials/head.php' ); ?>
<body class="<?php echo ( isset($bodyclass) ? $bodyclass : ''); ?>">
<div class="wrapper">
	<div class="page">
		<header class="header">
			<?php require_once( 'partials/page_header.php' ); ?>
		</header>
		<div class="main-container">
			<!-- Page Content -->
			<h1 class="page-header">Screenpages Candidate Assessment</h1>
			<article id="welcome">
				<header>
					<h2 class="page-article-header">The Challenge</h2>
				</header>
				<h3>Introduction</h3>

				<p>
					Hello, Thank you for taking the time to attempt and submit this exercise as part of your application
					for a position with Screen Pages.<br/>
					The purpose of this task is for us to assess your understanding of some the technologies that Screen
					Pages use daily along with your ability to work
					in the manner that we are accustomed to.
					<br/>
					<br/>
					The mini application provided for this challenge uses a micro MVC<i>(ish)</i> framework called <a href="http://www.slimframework.com/">Slim</a>.
					<br/>Classes within the model directory will be autoloaded.
					<br/> JQuery is also present in all pages.<br/>
				</p>
				<br/>

				<h3>Task</h3>

				<p>The developers at Screen Pages are required to work from a non-technical description of our clients
					requirements that we call a &quot;Change Request&quot;.
					<br/>Within the files of this package is an example of this that details the changes we would like
					you to make to this example code. <br/>
					<a href="/assets/specification/cr.pdf">Click here to view the change request</a><br/>
					<br/>The Changes will relate to the challenge page, found here: <a href="/challenge">Challenge
						Page</a>

				</p>
				<br/>

				<h3>Assests</h3>

				<p>All of the files that you will need to achieve this task have been included in the
					<code>assets</code>
					folder of this package.</p>
				<br/>

				<h3>Rules</h3>

				<p>
				<ul>
					<li>You may change any code within this package</li>
					<li>You may add additional and include libraries and extensions of your own to this package</li>
					<li>You may improve the code in this package</li>
					<li>You may <b>NOT</b> change the base css file- <code>styles.css</code> - Please make all styling
						changes within <code>mystyles.css</code></li>
					<li>
						Feel free to add any additional enhancements of your own to the challenge.
					</li>
				</ul>
				</p>
				<br/>

				<h3>Once Complete</h3>

				<p>
					Once you are happy with your changes, please zip the entire package and submit it to me <a
						href="mailto:david.farthing@screenpages.com">david.farthing@screenpages.com</a><br/>
					Please include some feedback about how you found the exercise and how long it took you to complete.
				</p>

				<br/>

				<h3>Useful References</h3>

				<p>
				<ul>
					<li>
						<a href="http://docs.slimframework.com/">Slim Framework</a>
					</li>
					<li>
						<a href="https://api.jquery.com/">jQuery API</a>
					</li>
				</ul>
				</p>
				<h3>Thanks and Good Luck!</h3>
			</article>
		</div>
		<div class="footer-container">
			<?php require_once( 'partials/page_footer.php' ); ?>
		</div>
	</div>
</div>
</body>
</html>