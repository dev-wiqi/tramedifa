<div id="content">

			<!-- Content wrapper -->
		    <div class="wrapper">
             <div class="page-header">
			    	<div class="page-title">
				    	<h5><?php echo $title; ?></h5>
				    	<span>Conten Management</span>
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
					            <li><div class="depth"><a href="<?php echo base_url().'manage/contentAdd'; ?>" title="Add new content" class="tip"><i class="icon-plus"></i></a></div></li>
					        </ul>
				    	</div>
				    	<ul class="action-tabs">
				    		<li><a href="#user-stats" title="">New Content</a></li>
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
                                    <th>Publish</th>
                                    <th>Categori</th>
                                    <th>Author</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($contentAll->result_array() as $b){
                                    echo '<tr>
                                    <td>'.$b['id'].'</td>
                                    <td>'.$b['title'].'</td>
                                    <td>'.$b['date'].'</td>
                                    <td>'.$b['location'].'</td>
                                    <td>'.$b['author'].'</td>
                                    <td>
                                        <ul class="navbar-icons">
                                            <li><a href="'.base_url().'manage/contentEdit/'.$b['id'].'/'.url_title($b['title']).'.do" class="tip" title="Edit Content"><i class="fam-pencil"></i></a> </li>
                                            <li><a href="'.base_url().'manage/contentRemove/'.$b['id'].'/'.url_title($b['title']).'.do" class="tip" title="Remove Content"><i class="fam-cross"></i></a> </li>
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