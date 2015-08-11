<?php $this->load->view('blog/header');?>
<body>

	<!-- header top starts-->
	<?php $this->load->view('blog/menu_top');?>
	<!-- header top ends here -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear"><div id="content-wrapper">
	
		<!-- column-one -->
		<div id="content"><div class="col-one">
			
			<h2>Add New Category</h2>
			<?php echo form_open('add-new-category');?>
			
			<?php if(validation_errors()){echo validation_errors('<p class="error">','</p>');} ?>
            <?php if($this->session->flashdata('message')){echo '<p class="success">'.$this->session->flashdata('message').'</p>';}?>
			
			<p><label>Category Name</label>
			<input type="text" name="category_name" size="30" /></p>
			
			<p><label>Slug</label>
			<input type="text" name="category_slug" size="30" /></p>
			
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