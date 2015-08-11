<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
				
			
			<?php if( $query ): foreach($query as $post): ?>
			
			<h2><a href="<?php echo base_url().'post/'.$post->entry_id;?>"><?php echo ucwords($post->entry_name);?></a></h2>
			
			<p class="post-info">Posted by <a href="#"><?php $author = $this->ion_auth->user($post->author_id)->row(); echo ucfirst($author->username);?></a> | Filed under <?php $item = $this->blog_model->get_related_categories($post->entry_id); foreach($item as $category): ?><a href="<?php echo base_url().'category/'.$category->slug;?>"><?php echo $category->category_name;?></a> <?php endforeach;?></p>
				
            <?php echo $post->entry_body;
?>
				
			<p class="postmeta">		
			<a href="<?php echo base_url().'post/'.$post->entry_id;?>" class="comments">Comments (<?php echo $post->comment_count;?>)</a> |			
			Posted on 
			<span class="date"><?php echo mdate('%n %M %Y %H:%i:%s',human_to_unix($post->entry_date));?></span>	
			</p>
			<?php endforeach; ?>
			<?php endif;?>
			
			<?php $this->load->view('blog/comment');?>
			
			<a id="comments"></a>
			
			<?php if(validation_errors()){echo validation_errors('<p class="error">','</p>');} ?>
            <?php if($this->session->flashdata('message')){echo '<p class="success">'.$this->session->flashdata('message').'</p>';}?>

			<?php echo form_open('post/'.$post_id.'#comments');?>			
			<p>
			
			<?php if( ! $this->ion_auth->logged_in() ): ?>
			<label>Name</label>
			<input name="commentor" value="Your Name" type="text" size="30" />
			
			<label>Email</label>
			<input name="email" value="Your Email" type="text" size="30" />
			
			<?php else:?>
			
			<input type="hidden" name="commentor" value="<?php echo $user->username;?>" type="text" size="30" />
			
			<input type="hidden" name="email" value="<?php echo $user->email;?>" type="text" size="30" />
			
			<?php endif;?>
			
			<label>Your Comments</label>
			<textarea name="comment" rows="5" cols="5"></textarea>
			<br />	
			
			<input type="hidden" name="post_id" value="<?php echo $post_id;?>" />
			<input type="hidden" name="user_id" value="<?php echo ( isset($user) && $user ) ? $user->id : '';?>" />
			
			<input class="button" type="submit" value="Submit"/>
			<input class="button" type="reset" value="Reset"/>	
			</p>		
			</form>	
			
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