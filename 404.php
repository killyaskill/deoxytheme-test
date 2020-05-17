<?php get_header();?>

<section class="page-wrap">
<div class="container">
	


		<section class="row">

		
			<div class="col-lg-3">
				

						<?php if( is_active_sidebar('page-sidebar') ):?>
					
								<?php dynamic_sidebar('page-sidebar');?>

						<?php endif;?>


			</div>




			<div class="col-lg-9">


				<h1>404</h1>


				
				<h3>The requested page does not exist.</h3>
				

			</div>


	</section>



</div>
</section>


<?php get_footer();?>