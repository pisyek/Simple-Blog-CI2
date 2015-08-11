<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
				
			<h2><a href="index.html">About Me</a></h2>
			
			<p class="post-info">What do you want to know about me?</p>
			
			<p><strong>My website</strong>:<br /><a href="http://www.pisyek.com/">http://www.pisyek.com/</a></p>
                <p><strong>Like my Facebook</strong>:<br /><a href="http://www.facebook.com/pisyekdotcom">http://www.facebook.com/pisyekdotcom</a></p>
                <p><strong>Twitter</strong>:<br /><a href="http://twitter.com/pisyek">http://twitter.com/pisyek</a>
				
				<p>
					<a href="https://twitter.com/pisyek" class="twitter-follow-button" data-show-count="true">Follow @pisyek</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</p>
            <p>Thanks for viewing my tutorial! Happy coding!</p>
			
		</div></div>
		
		<!-- column-two -->
		<?php $this->load->view('blog/menu_sidebar');?>
		
		<!-- column-three -->
		<div class="col-three">
			
			<h3>Wise Words</h3>
			<p>&quot;If we know who we are, we will not try to become someone else in order to have
			value and meaning in our lives. If we don't know who we are, we will try to 
			become someone who someone else wants us to be.&quot; </p>
			
			<p class="align-right"> - Robert McGee</p>
					
			<h3>Support Styleshout</h3>
			<p>If you are interested in supporting my work and would like to contribute, you are
			welcome to make a small donation through the 
			<a href="http://www.styleshout.com/">donate link</a> on my website - it will 
			be a great help and will surely be appreciated.</p>	
			
			<h3>Lorem Ipsum</h3>
			
			<p>
			Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
			pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
			Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
			Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
			a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue. 
			Praesent sed nibh. Vestibulum bibendum enim ut nisi fringilla accumsan. 
			Nullam dapibus fermentum nulla. Phasellus in orci vel justo facilisis iaculis. 
			Quisque facilisis ornare felis. Curabitur nunc libero, dapibus vel, commodo nec, 
			semper a, massa. Suspendisse potenti. Morbi a nisl. Nunc euismod elit non lectus. 				
			</p>
			
			<h3>Search Box</h3>	
			<form action="#" class="searchform">
				<p>
				<input name="search_query" class="textbox" type="text" />
  				<input name="search" class="button" value="Search" type="submit" />
				</p>			
			</form>							
			
		</div>	
	
	<!-- contents end here -->	
	</div></div>

	<!-- footer starts here -->	
	<?php $this->load->view('blog/footer');?>
	<!-- footer ends here -->

</body>
</html>