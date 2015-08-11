<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
				
			
			<?php if( $posts ): foreach($posts as $post): ?>
			<h2><a href="<?php echo base_url().'post/'.$post->entry_id;?>"><?php echo ucwords($post->entry_name);?></a></h2>
			
			<p class="post-info">Posted by <a href="#"><?php $author = $this->ion_auth->user($post->author_id)->row(); echo ucfirst($author->username);?></a> | Filed under <?php $item = $this->blog_model->get_related_categories($post->entry_id); foreach($item as $category): ?><a href="<?php echo base_url().$category->slug;?>"><?php echo $category->category_name;?></a> <?php endforeach;?></p>
				
            <?php echo $post->entry_body;
?>
				
			<p class="postmeta">		
			<a href="<?php echo base_url().'post/'.$post->entry_id;?>" class="readmore">Read more</a> |
			<a href="<?php echo base_url().'post/'.$post->entry_id.'#comments';?>" class="comments">Comments (<?php echo $post->comment_count;?>)</a> |				
			<span class="date"><?php echo mdate('%n %M %Y %H:%i:%s',human_to_unix($post->entry_date));?></span>	
			</p>
			<?php endforeach; else: ?>
			<h2>No post yet!</h2>
			<?php endif;?>
			
		</div></div>
		
		<!-- column-two -->
		<?php $this->load->view('blog/menu_sidebar');?>
		
		<!-- column-three -->
		<?php $this->load->view('blog/sidebar');?>
	
	<!-- contents end here -->	
	</div></div>

	<!-- footer starts here -->	
	<?php $this->load->view('blog/footer');?>
	<!-- footer ends here -->

</body>
</html>