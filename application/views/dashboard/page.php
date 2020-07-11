
			
		<div class="nav_menu">
			<!--<div class="tile_count">
				<div class="col-md-12">
					<div class="col-md-3">
						<h3>&nbsp;</h3>
					</div>
					<div class="col-lg-9 col-md-12">
						<form class="form-inline pull-right">
							<div class="form-group pull-right">
								<label for="ex3" class="col-form-label"><h6 class="m-1">Sort by</h6></label> 
								<select class="form-control" id="ex3" >
									<option selected>All</option>
									<option>Branch</option>
									<option>Sales</option>
									<option>Referal Code</option>
								</select>
							</div>
							<div class="form-group pull-right">
								<label for="ex3" class="col-form-label"><h6 class="m-1 ml-3">Number of Client Registraion Step</h6></label> 
								<select class="form-control" id="ex3" >
									<option>Today</option>
									<option selected>Last 1 Week</option>
									<option>Last 1 Month</option>
									<option>More Than 1 Month</option>
								</select>
							</div>
							<?php if($this->session->userdata('level_name') == 'HEADOFRETAIL'){?>
							<button type="submit" class="btn btn-blue-trim m-1 ml-2 pull-right">Download PDF</button>
							<?php }else{} ?>
						</form>                                
					</div>
				</div>
			</div>-->
			<div class="clearfix">&nbsp;</div>
			<div class="right_col">
				<div class="tile_count">
					<div class="col-md-12">
						<div class="row">
							<div class="col tile_stats_count">
								<a href="<?php echo site_url('Client/get_client_step_home/step-1'); ?>">
									<span class="count_top">STEP 1</span>
									<div class="count blue-trimegah" id="step1"></div>
									<span class="count_bottom"></span>
								</a>
							</div>
							<div class="col tile_stats_count">
								<a href="<?php echo site_url('Client/get_client_step_home/step-2'); ?>">
									<span class="count_top">STEP 2</span>
									<div class="count blue-trimegah" id="step2"></div>
									<span class="count_bottom"></span>
								</a>
							</div>
							<div class="col tile_stats_count">
								<a href="<?php echo site_url('Client/get_client_step_home/step-3'); ?>">
									<span class="count_top">STEP 3</span>
									<div class="count blue-trimegah" id="step3"></div>
									<span class="count_bottom"></span>
								</a>
							</div>
							<div class="col tile_stats_count">
								<a href="<?php echo site_url('Client/get_client_step_home/fail'); ?>">
									<span class="count_top">FAIL</span>
									<div class="count blue-trimegah" id="fail"></div>
									<span class="count_bottom"></span>
								</a>
							</div>
							<div class="col tile_stats_count">
								<a href="<?php echo site_url('Client/get_client_step_home/finish'); ?>">
									<span class="count_top">FINISH</span>
									<div class="count blue-trimegah" id="finish"></div>
									<span class="count_bottom"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			

            <!-- page content -->
            <div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12"> 
							<div class="row">               
								<div class="x_content">
									<div class="col-md-6 col-sm-6">
										<div class="x_panel">
											<div class="x_title">
												<h2><strong>Source of Registration</strong></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li>
                                                    	<select id="sourceregis" name="sourceregis" class="form-control">
															<option>no select</option>
                                                            <option value="step-1">Step 1</option>
                                                            <option value="step-2">Step 2</option>
                                                            <option value="step-3">Step 3</option>
                                                            <option value="fail">Fail</option>
                                                            <option value="finish">Finish</option>
                                                        </select>
                                                    </li>
                                                </ul>
												<div class="clearfix"></div>
											</div>
											<div class="x_content">											
                            <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Application</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" role="progressbar" id="appsbar" name="appsbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="appsbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Website</h6>
                                                	</div>
                                                	<div class="w_center w_55">
														<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning websitebar" role="progressbar" id="websitebar" name="websitebar" data-transitiongoal="0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=""></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="websitebartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Direct Sales Link</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" role="progressbar" id="directsalesbar" name="directsalesbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="directsalesbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Referal Link</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" id="referralbar" name="referralbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="referralbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Campaign</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" id="campaignbar" name="campaignbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="campaignbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Offline</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" id="offlinebar" name="offlinebar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="offlinebartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <hr>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>TOTAL</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning totalbar" id="totalbar" name="totalbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="totalbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
											</div>
										</div>
									</div>
                                    <div class="col-md-6 col-sm-6">
										<div class="x_panel">
											<div class="x_title">
												<h2><strong>Error Reason</strong></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li>
                                                    	<select id="errorreason" name="errorreason" class="form-control">
															<option>no select</option>
                                                            <option value="step-1">Step 1</option>
                                                            <option value="step-2">Step 2</option>
                                                            <option value="step-3">Step 3</option>
                                                            <!--<option value="fail">Fail</option>
                                                            <option value="finish">Finish</option>-->
                                                        </select>
                                                    </li>
                                                </ul>
												<div class="clearfix"></div>
											</div>
											<div class="x_content">											
                            <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Session Expired</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning sessionexpiredbar" id="sessionexpiredbar" name="sessionexpiredbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="sessionexpiredbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Connection Terminated</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" id="connectionterminatedbar" name="connectionterminatedbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="connectionterminatedbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Rejected by Complience</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning" id="rejectedbar" name="rejectedbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="rejectedbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>Invalid Client Data</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning invalidclientbar" id="invalidclientbar" name="invalidclientbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="invalidclientbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>
                                                <hr>
                                                <div class="widget_summary mt-3">
                                                	<div class="w_left w_25">
                                                		<h6>TOTAL</h6>
                                                	</div>
                                                	<div class="w_center w_55">
                                                		<div class="progress progress-striped active">
														  <div class="progress-bar progress-bar-warning totalerrorbar" id="totalerrorbar" name="totalerrorbar" role="progressbar" data-transitiongoal="0"></div>
														</div>
                                                	</div>
                                                	<div class="w_right w_20">
                                                		<h6 id="totalerrorbartotal">0</h6>
                                                	</div>
                                                	<div class="clearfix"></div>
                                                </div>                                              
											</div>
										</div>
									</div>                                    
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>