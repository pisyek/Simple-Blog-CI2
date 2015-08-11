	<div id="header-wrap">			
				
		<div id="header-photo">
		<img alt="header photo" src="<?php echo base_url();?>assets/img/header-photo.jpg" width="890" height="290" />
		</div>
		
		<h1 id="logo-text"><a href="<?php echo base_url();?>" title="">CodeIgniter Blog</a></h1>		
		<p id="intro"><a href="#">Click here to download the sourcecode</a></p>		
		
		<div id="nav">
			<ul>
				<li <?php echo ( isset($current) && $current === 'HOME' ) ? 'id="current"' : ''?>><a href="<?php echo base_url();?>">Home</a></li>
				<li <?php echo ( isset($current) && $current === 'ABOUT' ) ? 'id="current"' : ''?>><a href="<?php echo base_url();?>about">About</a></li>
				<li><a href="http://blog.pisyek.com/create-a-simple-blog-using-codeigniter-2-part-1/" target="_blank" rel="follow">Tutorial Part 1</a></li>
				<li><a href="http://blog.pisyek.com/create-a-simple-blog-using-codeigniter-2-part-2/" target="_blank" rel="follow">Tutorial Part 2</a></li>
				<li><a href="http://blog.pisyek.com/create-a-simple-blog-using-codeigniter-2-part-1/" target="_blank" rel="follow">Tutorial Part 3</a></li>
				<li><a href="http://pisyek.com/contact" target="_blank" rel="follow">Contact Me</a></li>	
			</ul>		
		</div>
		
		<form id="quick-search" action="index.html" method="get" >
			<p>
			<label for="qsearch">Search:</label>
			<input class="tbox" id="qsearch" type="text" name="qsearch" value="Search this site..." title="Start typing and hit ENTER" />
			<input class="btn" type="submit" value="Submit" />
			</p>
		</form>				
	</div>