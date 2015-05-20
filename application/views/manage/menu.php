<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->
		<div id="sidebar">

			<div class="sidebar-tabs">
		        <ul class="tabs-nav two-items">
		            <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
		            <li><a href="#stuff" title=""><i class="icon-cogs"></i></a></li>
		        </ul>

		        <div id="general">

			        <!-- Sidebar user -->
			        <div class="sidebar-user widget">
						<div class="navbar"><div class="navbar-inner"><h6>Wazzup, <?php echo $usr; ?>!</h6></div></div>
			            <a href="#" title="" class="user"><img src="<?php echo base_url()."media/user/".$image; ?>" alt="" /></a>
			            <ul class="user-links">
			            	<li><a href="" title="">Registered users<strong><?php echo $count_user; ?></strong></a></li>
			            	<!--
<li><a href="" title="">New orders<strong>+156</strong></a></li>
			            	<li><a href="" title="">New messages<strong>+45</strong></a></li>
-->
			            </ul>
			        </div>
			        <!-- /sidebar user -->
<!--

			        <div class="general-stats widget">
				        <ul class="head">
				        	<li><span>Users</span></li>
				        	<li><span>Orders</span></li>
				        	<li><span>Visits</span></li>
				        </ul>
				        <ul class="body">
				        	<li><strong>116k+</strong></li>
				        	<li><strong>1290</strong></li>
				        	<li><strong>554</strong></li>
				        </ul>
				    </div>
-->

				    <!-- Main navigation -->
			        <ul class="navigation widget">
                        <li><a href="<?php echo base_url(); ?>manage"><i class="icon-home"></i>Dashboard</a></li>
                        <?php
                        
                            foreach ($menu->result_array() as $m){
                                echo '<li><a href="'.$this->config->item('base_url').'manage/'.$m['link'].'" title=""><i class="'.$m['icon'].'"></i>'.$m['name'].'</a></li>';
                            }
                        ?>
			            
			        </ul>
			        <!-- /main navigation -->

		        </div>

		        <div id="stuff">

			        <!-- Social stats -->
			        <div class="widget">
			        	<h6 class="widget-name"><i class="icon-twitter"></i>Social statistics</h6>
			        	<ul class="social-stats">
			        		<li>
			        			<a href="" title="" class="orange-square"><i class="icon-rss"></i></a>
			        			<div>
				        			<h4>1,286</h4>
				        			<span>total feed subscribers</span>
				        		</div>
			        		</li>
			        		<li>
			        			<a href="" title="" class="blue-square"><i class="icon-twitter"></i></a>
			        			<div>
				        			<h4>12,683</h4>
				        			<span>total twitter followers</span>
				        		</div>
			        		</li>
			        		<li>
			        			<a href="" title="" class="dark-blue-square"><i class="icon-facebook"></i></a>
			        			<div>
				        			<h4>530,893</h4>
				        			<span>total facebook likes</span>
				        		</div>
			        		</li>
			        	</ul>
			        </div>
			        <!-- /social stats -->


                    <!-- Datepicker -->
		        	<div class="widget">
		        		<h6 class="widget-name"><i class="icon-calendar"></i>Datepicker</h6>
		                <div class="inlinepicker datepicker-liquid"></div>
		            </div>
		            <!-- /datepicker -->


		            <!-- Dates range -->
                    <!--
<ul class="widget dates-range">
                        <li><input type="text" id="fromDate" name="from" placeholder="From" /></li>
                        <li class="sep">-</li>
                        <li><input type="text" id="toDate" name="to" placeholder="To" /></li>
                    </ul>
-->
                    <!-- /dates range -->


                    <!-- Time picker range -->
                    <!--
<ul class="widget dates-range">
                        <li><input id="timeformatExample1" type="text" placeholder="Start" /></li>
                        <li class="sep">-</li>
                        <li><input id="timeformatExample2" type="text" placeholder="End" /></li>
                    </ul>
-->
                    <!-- /time picker range -->


				    <!-- Gallery thumbs -->
				    <!--
<div class="widget">
				    	<h6 class="widget-name"><i class="icon-picture"></i>Gallery thumbs</h6>
				    	<div class="row-fluid thumbs">
					    	<div class="span6">
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    	</div>
					    	<div class="span6">
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    		<a href="img/demo/big.jpg" class="lightbox"><img src="http://placehold.it/580x380" alt="" /></a>
					    	</div>
					    </div>
				    </div>
-->
				    <!-- /gallery thumbs -->

		        	<!-- Action buttons -->
	                <!--
<div class="widget">
	                	<h6 class="widget-name"><i class="icon-search"></i>Action buttons</h6>
	                	<button class="btn btn-block btn-danger">Action button</button>
	                	<button class="btn btn-block btn-info">Action button</button>
	                	<button class="btn btn-block btn-success">Action button</button>
	                </div>
-->
	                <!-- /action buttons -->

			        <!-- Tags input -->
					<!--
<div class="widget">
						<h6 class="widget-name"><i class="icon-search"></i>Tags input</h6>
						<input type="text" id="tags1" class="tags" value="these,are,sample,tags" />
					</div>
-->
					<!-- /tags input -->

		        </div>

		    </div>
		</div>
		<!-- /sidebar -->
