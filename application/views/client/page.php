


			
			<div class="nav_menu">
				<div class="tile_count">
					<div class="col-md-12">
						<div class="col-md-3">
							<h3>View Client List</h3>
						</div>
						<div class="col-lg-9 col-md-12">
						<?php //echo $this->session->userdata('level_name'); ?>
							<?php if($this->session->userdata('level_name') == 'HEADOFRETAIL'){?>
							<div id="copydiv" class="form-inline pull-right">
								<div id="hidden-btn" style="visibility: hidden"></div>
								<button id='export-excel' class="btn btn-blue-trim m-1 ml-2 pull-right">EXCEL</button>
								<div id="hidden-btn-cp"  style="visibility:hidden"></div>
								<button id='export-cp' class="btn btn-blue-trim m-1 ml-2 pull-right">COPY</button>
								<div id="hidden-btn-csv"  style="visibility:hidden"></div>
								<button id='export-csv' class="btn btn-blue-trim m-1 ml-2 pull-right">CSV</button>								
								<!--<button type="submit" class="btn btn-blue-trim m-1 ml-2 pull-right">COPY</button>
								<button type="submit" class="btn btn-blue-trim m-1 ml-2 pull-right">EXCEL</button>
								<button type="submit" class="btn btn-blue-trim m-1 ml-2 pull-right">CSV</button>-->
							</div> 

							<?php }else{ ?>
							
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="clearfix">&nbsp;</div>					
			</div>			

            <!-- page content -->
            <div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">								
								<div class="x_content">
                                    <br>
                                    <form id="form"  role="form" action="#" method="post" class="form-horizontal form-label-left">
                                    	<div class="form-group row">
                                    		<label class="control-label col-md-3 h6" for="first-name">Registration Step</label>
                                    		<div class="col-md-7 ">                                                
                                                <select id="step" name="step" class="form-control col-md-7" class="required">
													<option value="">Select One</option>
                                                    <option value="step-1">Step 1</option>
                                                    <option value="step-2">Step 2</option>
                                                    <option value="step-3">Step 3</option>
                                                    <option value="fail">Fail</option>
                                                    <option value="finish">Finish</option>
                                                </select>
                                    		</div>
                                    	</div>
                                    	<div class="form-group row">
                                    		<label class="control-label col-md-3 h6" for="last-name">Branch</label>
                                    		<div class="col-md-7">
                                    			<select id="branch" name="branch" class="form-control col-md-7">
                                                    <!--<option value="ALL">All</option>
                                                    <option value="AG">Artha Graha</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>-->
                                                </select>
                                    		</div>
                                    	</div>
                                        <div class="form-group row">
                                    		<label class="control-label col-md-3 h6" for="last-name">Sales</label>
                                    		<div class="col-md-7">
                                    			<select id="sales" name="sales" class="form-control col-md-7">
                                                    <!--<option value="ALL">All</option>
                                                    <option value="HSI">Hendry Sidarta</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>-->
                                                </select>
                                    		</div>
                                    	</div>
                                        <div class="form-group row">
                                    		<label class="control-label col-md-3 h6" for="last-name">Referral Code</label>
                                    		<div class="col-md-7">
                                    			<input id="referal_code" name="referal_code" type="text"  class="form-control col-md-7 ">
                                    		</div>
                                    	</div>
                                        <div class="form-group row">
                                    		<label class="control-label col-md-3 h6" for="last-name">Period</label>
                                    		<div class="col-md-7">
                                            	<div id="reportrange_right" class="form-control col-md-7" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">								
                                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                                </div>
                                    		</div>
                                    	</div>
                                        <div class="form-group row">
                                    		<label class="control-label col-md-3 h6" for="last-name">&nbsp;</label>
                                    		<div class="col-md-7">
                                    			<button type="button" id="submitsearch" name="submitsearch" class="btn btn-blue-trim">SUBMIT</button>
                                    		</div>
                                    	</div>
                                    </form>                                    
								</div>
                                <div class="x_content">                                	 
                                	<div class="x_title">
                                        <h2><strong>Table Client</strong></h2>
                                        <!--<ul class="nav navbar-right panel_toolbox">
                                            <li>
                                            	<form class="form-inline pull-right">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label"><h6 class="m-1">Search Client</h6></label> 
                                                        <input type="text" id="" name="" required class="form-control" placeholder="Nama, Email, No.HP, NIK">
                                                    </div>
                                                </form>    
                                            </li>
                                        </ul>-->
                                        <div class="clearfix"></div>
                                    </div>   
                                    <div class="row">                    			
                                        <div class="table-responsive mb-5">
                                            <table id="datatablefix" class="table table-striped jambo_table table-bordered dataTable no-footer">
                                                <thead>
                                                    <tr class="headings text-center">
                                                        <th class="column-title">No.</th>
                                                        <th class="column-title">Name</th>
                                                        <th class="column-title">NIK</th>  
                                                        <th class="column-title">No.HP</th>
                                                        <th class="column-title">Email</th>
                                                        <th class="column-title">Registration Step</th>
                                                        <th class="column-title">Registration Status</th>
                                                        <th class="column-title">Refferral Code</th>
                                                        <th class="column-title">CIF No.</th>
                                                        <th class="column-title">SID</th>
                                                        <th class="column-title">SRE</th>
                                                        <th class="column-title">IFUA</th>
                                                        <th class="column-title">Branch</th>
                                                        <th class="column-title">Sales Code</th>
                                                        <th class="column-title">Sales Name</th>
                                                        <th class="column-title">Source of Registration</th>
                                                        <th class="column-title">Create Date</th>
                                                        <th class="column-title">Error Reason</th>                      							
                                                    </tr>
                                                </thead>
                            
                                                <tbody class="h7">
                                                    <!--<tr class="even pointer">
                                                        <td>1</td>
                                                        <td>Nikky Yudianto</td>
                                                        <td>23563454545000</td>
                                                        <td>08111111111</td>
                                                        <td>nikky@gmail.com</td>
                                                        <td>Finish</td>
                                                        <td></td>
                                                        <td>Complete</td>
                                                        <td>0000123123</td>
                                                        <td>IDD01293123</td>
                                                        <td>LG8898763432</td>
                                                        <td></td>
                                                        <td>Virtual Branch</td>
                                                        <td>00017</td>
                                                        <td>Mirna</td>
                                                        <td></td>
                                                        <td>23/04/2020</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="odd pointer">
                                                        <td>2</td>
                                                        <td>Nikky Yudianto</td>
                                                        <td>23563454545000</td>
                                                        <td>08111111111</td>
                                                        <td>nikky@gmail.com</td>
                                                        <td>Finish</td>
                                                        <td></td>
                                                        <td>Complete</td>
                                                        <td>0000123123</td>
                                                        <td>IDD01293123</td>
                                                        <td>LG8898763432</td>
                                                        <td></td>
                                                        <td>Virtual Branch</td>
                                                        <td>00017</td>
                                                        <td>Mirna</td>
                                                        <td></td>
                                                        <td>23/04/2020</td>
                                                        <td></td>
                                                    </tr>-->
                                                    
                                                </tbody>
                                            </table>                                                                                                    
                                        </div>
                                    </div>											
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->