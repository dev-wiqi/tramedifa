<div id="content">

			<!-- Content wrapper -->
		    <div class="wrapper">
             <div class="page-header">
			    	<div class="page-title">
				    	<h5><?php echo $title; ?></h5>
				    	<span>Add New Menu</span>
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
<!-- Form validation -->
	            <h5 class="widget-name"><i class="icon-ok"></i><?php echo $title; ?></h5>

				<form id="validate" class="form-horizontal" action="<?php echo base_url().'manage/menuInsert' ?>" enctype="multipart/form-data" method="POST">
	                <fieldset>

	                    <!-- Form validation -->
	                    <div class="widget">
	                        <div class="navbar"><div class="navbar-inner"><h6>Form validation</h6></div></div>
	                    	<div class="well row-fluid">

	                            <div class="control-group">
	                                <label class="control-label">Name : <span class="text-error">*</span></label>
	                                <div class="controls">
	                                    <input type="text" class="validate[required] span4" name="name" id="req"/>
	                                </div>
	                            </div>
	                           
                               <div class="control-group">
	                                <label class="control-label">Parent : <span class="text-error"></span></label>
	                                <div class="controls">
	                                    <select name="parent" class="styled" data-prompt-position="topLeft:-1,-5">
                                            <option value="0">-- No Parent --</option>
                                            <?php
                                            foreach($parent->result_array() as $a){
                                                echo '<option value="'.$a['id'].'">'.$a['name'].'</option>';  
                                            }
                                            ?>
	                                    </select>
	                                </div>
	                            </div>
                               
                               <div class="control-group">
	                                <label class="control-label">Content : <span class="text-error"></span></label>
	                                <div class="controls">
	                                    <select name="link" class="styled" data-prompt-position="topLeft:-1,-5">
	                                        <option value="">-- No Article --</option>
                                            <?php
                                                foreach($content->result_array() as $b){
                                                    echo '<option value="'.$b['id'].'">'.$b['title'].'</option>';
                                                }
                                                
                                            ?>
	                                    </select>
	                                </div>
	                            </div>
                                
                                <div class="control-group">
	                                <label class="control-label">Url : <span class="text-error">(For Advance Only)</span></label>
	                                <div class="controls">
	                                    <input type="text" class="span4" name="url" id="req"/>
	                                </div>
	                            </div>
                                
                               <div class="control-group">
	                                <label class="control-label">Type : <span class="text-error">*</span></label>
	                                <div class="controls">
	                                    <select name="type" class="validate[required] styled" data-prompt-position="topLeft:-1,-5">
	                                        <option value="page">Page</option>
                                            <option value="blog">Blog</option>
	                                    </select>
	                                </div>
	                            </div>
                             

	                            <div class="form-actions align-right">
	                                <button type="submit" class="btn btn-info">Submit</button>
	                                <button type="reset" class="btn">Reset</button>
	                            </div>

	                        </div>

	                    </div>
	                    <!-- /form validation -->

	                </fieldset>
				</form>
				<!-- /form validation -->
        </div>
    </div>