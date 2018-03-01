<div class="main"> 
		<div id="content">
<?php
			if($this->session->flashdata('message'))
			{
				echo $this->session->flashdata('message');
			}
?>
			<form method="post" action="<?php echo base_url(); ?>language/add">
			<div id="form_input">
				<h2><?php echo $this->lang->line('title'); ?></h2>
				<?php echo $this->lang->line('select_lang'); ?> :
				<select name="ne_lang" onchange="javascript:window.location.href='<?php echo base_url(); ?>language/select_lang/'+this.value;">
					<option value="">--Select item---</option>
					<option value="fr" <?php if($this->session->userdata('site_lang') == 'fr') echo "selected = 'selected'" ?>>French</option>
					<option value="en" <?php if($this->session->userdata('site_lang') == 'en') echo "selected = 'selected'" ?>>English</option>
					<option value="gj" <?php if($this->session->userdata('site_lang') == 'gj') echo "selected = 'selected'" ?>>Gujarati</option>
				</select><br><br>
				<?php echo $this->lang->line('name'); ?>

			<input type="text" name="ne_name" class="input_box" placeholder="<?php echo $this->lang->line('name_placeholder_value'); ?>" required>
			<div id="textarea_input"><br>
				<?php echo $this->lang->line('message'); ?>
				<textarea cols="30" rows="10" name="ne_msg" placeholder="	<?php echo $this->lang->line('message_placeholder_value'); ?>" required>
				
				</textarea>
			</div>
			<br>
			<button class="form_button" name="send" type="submit"><?php echo $this->lang->line('send'); ?></button>
			</div>
		</form>
	</div>
</div>
