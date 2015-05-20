<div id="content">

			<!-- Content wrapper -->
		    <div class="wrapper">
             <div class="page-header">
			    	<div class="page-title">
				    	<h5><?php echo $title; ?></h5>
				    	<span>Menu Routing Pages</span>
			    	</div>

			    	<ul class="page-stats">
			    		<li>
			    			<div class="showcase">
			    				<span>New visits</span>
			    				<h2>22.504</h2>
			    			</div>
			    			<div id="total-visits" class="chart">10,14,8,45,23,41,22,31,19,12, 28, 21, 24, 20</div>
			    		</li>
			    	</ul>
			    </div>
                 <!-- Action tabs -->
			    <div class="actions-wrapper">
				    <div class="actions">

				    	<div id="user-stats">
					        <ul class="round-buttons">
					            <li><div class="depth"><a href="<?php echo base_url().'manage/menuAdd'; ?>" title="Add new menu" class="tip"><i class="icon-plus"></i></a></div></li>
					        </ul>
				    	</div>
				    	<ul class="action-tabs">
				    		<li><a href="#user-stats" title="">New Menu</a></li>
				    	</ul>
				    </div>
				</div>
			    <!-- /action tabs -->
<!-- Default datatable -->
                <div class="widget">
                	<div class="navbar"><div class="navbar-inner"><h6><?php echo $title; ?></h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <!--
<th>Content</th>
-->
                                    <th>link</th>
                                    <th>Parents</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($menuAll->result_array() as $b){
                                    echo '<tr>
                                    <td>'.$b['id'].'</td>
                                    <td>'.$b['name'].'</td>
                                    <td>'.$b['link'].'</td>
                                    <td>'.$b['child'].'</td>
                                    <td>'.$b['type'].'</td>
                                    <td>'.$b['status'].'</td>
                                    <td>
                                        <ul class="navbar-icons">
                                            <li><a href="'.base_url().'manage/menuEdit/'.$b['id'].'/'.url_title($b['name']).'.do" class="tip" title="Edit Content"><i class="fam-pencil"></i></a> </li>
                                            <li><a href="'.base_url().'manage/menuRemove/'.$b['id'].'/'.url_title($b['name']).'.do" class="tip" title="Remove Content"><i class="fam-cross"></i></a> </li>
                                        </ul>
                                    </td>
                                </tr>';
                                }
                            
                            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /default datatable -->
    </div>
</div>