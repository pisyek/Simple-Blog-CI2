<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
			
			<h2>Add New Entry</h2>
			<?php echo form_open('add-new-entry');?>
			
			<?php if(validation_errors()){echo validation_errors('<p class="error">','</p>');} ?>
            <?php if($this->session->flashdata('message')){echo '<p class="success">'.$this->session->flashdata('message').'</p>';}?>
			
			<p><label>Title</label>
			<input type="text" name="entry_name" size="30" /></p>
			
			<h3>Category</h3>
			<p><?php if( isset($categories) && $categories): foreach($categories as $category): ?>
				<label><input class="checkbox" type="checkbox" name="entry_category[]" value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></label>
				<?php endforeach; else:?>
				Please add your category first!
				<?php endif; ?>
			</p>
			<p><label>Your Entry: (in html)</label>
			<textarea rows="16" cols="80%" name="entry_body" style="resize:none;"></textarea></p>
			
			<br />	
			
			<input class="button" type="submit" value="Submit"/>
			<input class="button" type="reset" value="Reset"/>	
			
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