<div class="project-section" id="portfolio">
		<div class="container">
			<div class="project-section-head text-center">
				<h3>Galeri</h3>
			</div>
	    <ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logos web">Semua</span></li>
						<li><span class="filter" data-filter="app">Kategori 1</span></li>
						<li><span class="filter" data-filter="card">Kategori 2</span></li>
						<li><span class="filter" data-filter="icon">Kategori 3</span></li>
						</ul>
					<div id="portfoliolist">
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-1.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-1.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>				
					<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-2.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-2.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>					
					<div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-3.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-3.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>

					</div>
					
					<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-4.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-4.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>			
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-5.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-5.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>	
					<div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-6.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-6.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>	
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-7.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-7.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>

					</div>
					<div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-8.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-8.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
						</div>
						<div class="portfolio card mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>assets/img/timnas-9.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/img/timnas-9.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

		                </div>
					</div>
					
				<div class="clearfix"></div>					
				</div>
				
		  <div class="clearfix"></div>
		  </div>
            </div>
	  <!-- Script for gallery Here -->
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>