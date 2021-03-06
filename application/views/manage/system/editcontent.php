<div id="content">

			<!-- Content wrapper -->
		    <div class="wrapper">
             <div class="page-header">
			    	<div class="page-title">
				    	<h5><?php echo $title; ?></h5>
				    	<span>Post New Article</span>
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

				<form id="validate" class="form-horizontal" action="<?php echo base_url().'manage/contentInsert' ?>" enctype="multipart/form-data" method="POST">
	                <fieldset>

	                    <!-- Form validation -->
	                    <div class="widget">
	                        <div class="navbar"><div class="navbar-inner"><h6>Form validation</h6></div></div>
	                    	<div class="well row-fluid">

	                            <div class="control-group">
	                                <label class="control-label">Title: <span class="text-error">*</span></label>
	                                <div class="controls">
	                                    <input type="text" class="validate[required] span12" name="title" id="req" value="<?php echo $titlecon; ?>"/>
	                                </div>
	                            </div>
	                           
                               <div class="control-group">
	                                <label class="control-label">Categori: <span class="text-error">*</span></label>
	                                <div class="controls">
	                                    <select name="kategori" class="validate[required] styled" data-prompt-position="topLeft:-1,-5">
	                                        <?php
                                            foreach($kategori->result_array() as $a){
                                                echo '<option value="'.$a['id'].'">'.$a['title'].'</option>';  
                                            }
                                            ?>
	                                    </select>
	                                </div>
	                            </div>
                               
                               
                               <div class="control-group">
	                                <label class="control-label">Author: </label>
	                                <div class="controls">
	                                    <input type="text" class="input-medium" readonly id="req" name="author" value="<?php echo $author; ?>"/>
	                                </div>
	                            </div>
                                
                                <div class="control-group">
	                                <label class="control-label">Date : </label>
	                                <div class="controls">
	                                    <input type="text" class="input-small" readonly id="req" name="date" value="<?php echo $date; ?>"/>
	                                </div>
	                            </div>

	                            <div class="control-group">
	                                <label class="control-label">Source: </label>
	                                <div class="controls">
	                                    <textarea name="content" class="ckeditor"><?php echo $content; ?></textarea>
	                                </div>
	                            </div>
                               
                               <div class="control-group">
                                    <label class="control label">Image</label>
                                    <img src="<?php echo base_url().'media/content/thumbnail/'.$image; ?>" alt="" />
                               </div>
                               
                               <div class="control-group">
                                    <label class="control-label">Styled file uploader:</label>
                                    <div class="controls">
                                        <input type="file" class="styled" name="img" />
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