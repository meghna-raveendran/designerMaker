<?php

/**
 * @file
 * Customize the navigation shown when editing or viewing submissions.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $mode: Either "form" or "display". May be other modes provided by other
 *          modules, such as "print" or "pdf".
 * - $submission: The Webform submission array.
 * - $submission_content: The contents of the webform submission.
 * - $submission_navigation: The previous submission ID.
 * - $submission_information: The next submission ID.
 */
?>

<?php 
/*
* Override Submission page template to customized view for DesignerMaker Profile
*/
if($submission->nid == 1 && (strpos(current_path(), "edit") == false)){
	$designer_name = $submission->data[1][0];
	$profile_pic = file_create_url(file_load($submission->data[4][0])->uri);
	$cover_photo = file_create_url(file_load($submission->data[5][0])->uri);
	$desc = $submission->data[3][0];
	$designer_products = webform_get_submissions(array('nid'=> 2, 'uid' => $submission->uid));
	?>
	<style type="text/css">
		
	.comment-box .media-heading {
	    background-color: #ef558c;
	    border: 1px solid #ddd;
	    padding: 7px 10px;
	    position: relative;
	    margin-bottom: -1px;
	    color:#fff;
	    font-weight: 600;
	}
	@media (min-width: 1200px)
	.container {
	    width: auto !important;
	}
	.image--cover {
	  width: 150px;
	  height: 150px;
	  border-radius: 50%;
	  margin: 20px;

	  object-fit: cover;
	  object-position: center right;
	}
	.top-pad{
		padding-top: 35px;
	}
	</style>
	<style type="text/css">
	body {
		background: #ebebeb;
		font-family: "Open Sans", sans-serif;
	}
	.col-center {
		margin: 0 auto;
		float: none !important;
	}
	.carousel {
		margin: 30px auto 60px;
		padding: 0 80px;
	}
	.carousel .item {
	    text-align: center;
		overflow: hidden;
	}
	.carousel .item h4 {
		font-family: 'Varela Round', sans-serif;
	}
	.carousel .item img {
		max-width: 100%;
		display: inline-block;
	}
	.carousel .item .btn {
		border-radius: 0;
		font-size: 12px;
		text-transform: uppercase;
		font-weight: bold;
		border: none;
		background: #ef558c;
		padding: 6px 15px;
		margin-top: 5px;
	}
	.carousel .item .btn:hover {
		background: #8c5bff;
	}
	.carousel .item .btn i {
		font-size: 14px;
	    font-weight: bold;
	    margin-left: 5px;
	}
	.carousel .thumb-wrapper {
		margin: 5px;
		text-align: left;
	    background: #fff;
	    box-shadow: 0px 2px 2px rgba(0,0,0,0.1);   
	}
	.carousel .thumb-content {
		padding: 15px;
		font-size: 13px;
	}
	.carousel .carousel-control {
		height: 44px;
		width: 44px;
		background: none;	
	    margin: auto 0;
	    border-radius: 50%;
	    border: 3px solid rgba(0, 0, 0, 0.8);
	}
	.carousel .carousel-control i {
	    font-size: 36px;
	    position: absolute;
	    top: 50%;
	    display: inline-block;
	    margin: -19px 0 0 0;
	    z-index: 5;
	    left: 0;
	    right: 0;
	    color: rgba(0, 0, 0, 0.8);
		text-shadow: none;
	    font-weight: bold;
	}
	.carousel .carousel-control.left i {
		margin-left: -3px;
	}
	.carousel .carousel-control.right i {
		margin-right: -3px;
	}
	.carousel .carousel-indicators {
		bottom: -50px;
	}
	.carousel-indicators li, .carousel-indicators li.active {
		width: 10px;
		height: 10px;
		border-radius: 50%;
		margin: 4px;
		border-color: transparent;
	}
	.carousel-indicators li {	
		background: #ababab;
	}
	.carousel-indicators li.active {	
		background: #555;
	}
	</style>
	<div class="row">
		<div class="col-lg-12"></div>
		<div class="col-lg-12">

			<div class='container' style="width:auto!important;">
				<div class="media comment-box">           
					<div class="media-body">
					    <h4 class="media-heading"><?=$designer_name;?></h4>
					    <div>		<img src="<?=$cover_photo?>"/></div>
					    <p>
					    	<div class="row">

					    		<div class="col-sm-3">
							    <div class="card">
							      <div class="card-body">						       
							        <img src="<?=$profile_pic?>" class="image--cover">
							      </div>
							    </div>
							  </div>

							  <div class="col-sm-6">
							    <div class="card top-pad">
							      <div class="card-body">
							        <h5 class="card-title">BIOGRAPHY</h5>
							        <p class="card-text"><?=$desc?></p>
							      </div>
							    </div>
							  </div>
							  <div class="col-sm-3">
							    <div class="card top-pad">
							      <div class="card-body">
							        <h5 class="card-title">CONNECT</h5>
							        <p class="card-text">
							        <a href="<?php echo $submission->data[13][0];?>"><i class="fa fa-globe"></i> Visit Website</p></a>
							    	</p>
							    	<p class="card-text">
							    	<a href="mailto:<?php echo $submission->data[12][0];?>"><i class="fa fa-envelope"></i> Contact this designer maker</a>
							    	</p>	
							      </div>
							    </div>
							  </div>
					    	</div>
					    </p>				  
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<div class="col-md-12 col-center m-auto">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<?php 
					$prod_count = 0;
					$cur_count= 0;
					foreach($designer_products as $designer_product) { 
						$class = ($cur_count==0)?'active':'';
						echo ($prod_count == 0)?('<div class="item carousel-item '. $class .'"><div class="row">'):'';?>

							<div class="col-sm-4">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="<?php echo file_create_url(file_load($designer_product->data[2][0])->uri);?>" alt="">
									</div>
									<div class="thumb-content">
										<h4><?php echo $designer_product->data[1][0];?></h4>
										<p><?php echo $designer_product->data[3][0];?></p>
									</div>						
								</div>
							</div>

					<?php 
						$prod_count++;
						$cur_count++; 
						if(($prod_count == 3) || (count($designer_products) == $cur_count)){
							echo "</div></div>"; $prod_count = 0;
						} 
					} ?>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			</div>


		</div>
	</div>

	<script type="text/javascript">
		$('#myCarousel').carousel({
		  interval: 3000,
		  cycle: true
		}); 
		$(".carousel-indicators").hide();
		$(".page-title").hide();
		$("aside").remove();
		$("section").attr("class", "col-md-12")
	</script>

	<div class="webform-submission">
	  <?php //print render($submission_content); ?>
	</div>

	<?php if ($mode == 'display' || $mode == 'form'): ?>
	  <div class="clearfix">
	    <?php //print $submission_navigation; ?>
	  </div>
	<?php endif; ?>


<?php }else{ ?>

	<?php 
	/*
	* Default View of other nodes and action :webform submission page
	*/    
	    if ($mode == 'display' || $mode == 'form'): ?>
	  <div class="clearfix">
	    <?php print $submission_actions; ?>
	    <?php print $submission_navigation; ?>
	  </div>
	<?php endif; ?>

	<?php print $submission_information; ?>

	<div class="webform-submission">
	  <?php print render($submission_content); ?>
	</div>

	<?php if ($mode == 'display' || $mode == 'form'): ?>
	  <div class="clearfix">
	    <?php print $submission_navigation; ?>
	  </div>
	<?php endif; ?>

<?php } ?>

