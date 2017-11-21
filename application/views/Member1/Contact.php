<?php $this->load->view('templates/User/Header'); ?>
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h2>Contact</h2>
			</div>
			<div class="contact-bottom">
				<div class="col-md-9 contact-left">
					<form>
						<input type="text" placeholder="Name">
						<input type="text" class="email" placeholder="Email">
						<textarea  placeholder="Message" required=""></textarea>
						<input type="submit" value="Send">
					</form>
				</div>
				
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
  <div class="container">
	 <img src="<?php echo base_url();?>assets/image/denah.png" alt="">
 </div>
</div>

		<?php $this->load->view('templates/User/Footer'); ?>