			


		   <!-- page content -->
            <div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12"> 
							<div class="row">                             	              
								<div class="x_content">
                                	<div class="col-md-12">
                                        <a href="<?php echo base_url('client'); ?>" class="h6"><i class="fa fa-arrow-left sm"></i> Back Recent Client Data</a>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
									<div class="col-md-12 col-sm-12">
										<div class="x_panel">											
											<div class="x_content">
                                            	<ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                            		<li class="nav-item">
                                            			<a class="nav-link active" id="Detail-tab" data-toggle="tab" href="#Detail" role="tab" aria-controls="Detail" aria-selected="true">Detail Client</a>
                                            		</li>
                                            		<li class="nav-item">
                                            			<a class="nav-link" id="Process-tab" data-toggle="tab" href="#Process" role="tab" aria-controls="Process" aria-selected="false">Process Log</a>
                                            		</li>
                                            	</ul>
                                            	<div class="tab-content" id="myTabContent">
                                            		<div class="tab-pane fade show active" id="Detail" role="tabpanel" aria-labelledby="Detail-tab">
                                                    	<div class="x_content">
                                                            <div class="col-lg-7 col-md-12">
                                                                <div class="title_left">
                                                                	<h3>Detail Client Data</h3>
                                                                    <div class="clearfix">&nbsp;</div>
                                                                </div>
                                                                <div class="form-horizontal form-label-left">
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Name</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $nama_lengkap; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">NIK</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $nik; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">SID</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $sid; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">SRE</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $sre; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">IFUA</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $ifua; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">No. Handphone</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $no_hp; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Email</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $email; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Tempat Lahir</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $tempat_lahir; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Tanggal Lahir</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $tanggal_lahir; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Alamat Tinggal</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $alamat_tinggal; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Alamat Domisili</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $alamat_domisili; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Alamat Korespondensi</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $alamat_korespondensi; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Agama</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $agama; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Pendidikan</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $pendidikan; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Sumber Pendanaan</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $sumber_pendanaan; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Pekerjaan</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $pekerjaan; ?></div>
                                                                    </div>
                                                                    <!--
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Bidang Pekerjaan</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $bidang_pekerjaan; ?></div>
                                                                    </div>
                                                                    -->
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Nama Perusahaan</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $nama_perusahaan; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Alamat Tempat Bekerja</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $alamat_tempat_bekerja; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Jabatan</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6">
                                                                            <?php if ($pekerjaan == "Karyawan Swasta") { ?>
                                                                                <?php echo $posisi_lainnya; ?>
                                                                            <?php } else { ?>
                                                                                <?php echo $posisi; ?>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Bidang Usaha</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6">
                                                                            <?php if ($pekerjaan == "Karyawan Swasta") { ?>
                                                                                <?php echo $bidang_usaha_lainnya; ?>
                                                                            <?php } else { ?>
                                                                                <?php echo $bidang_usaha; ?>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                    <!--
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Lama Bekerja</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $lama_bekerja; ?></div>
                                                                    </div>
                                                                    -->
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Penghasilan Pertahun</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $penghasilan_pertahun; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Tujuan Investasi</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $tujuan_investasi; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Nama Bank</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $nama_bank; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Cabang Bank</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $cabang_bank; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">No. Rekening</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $no_rekening; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Nama Pemilik Rekening</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $nama_pemilik_rekening; ?></div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3 h6">Mata Uang</div>
                                                                        <div class="col-lg-1 h6 text-right">:</div>
                                                                        <div class="col-md-7 h6"><?php echo $mata_uang; ?></div>
                                                                    </div>
                                                                </div>   
                                                            </div>
                                                            <div class="col-lg-5 col-md-12 mail_view">
                                                            	<div class="inbox-body">
                                                                    <div class="title_left">
                                                                        <h3>File Upload</h3>
                                                                    </div>
                                                                    <div class="attachment">
																		<input type="hidden" id="emailphoto" name="emailphoto" value="<?php echo $email; ?>"/>
																		<input type="hidden" id="namaphoto" name="namaphoto" value="<?php echo $nama_lengkap; ?>"/>
                                                                        <ul>
                                                                            <li>
                                                                            	<h6><strong>KTP image</strong></h6>
                                                                            	<div class="atch-thumb">
                                                                            		<img src="<?php echo $image_ktp; ?>" alt="img">
                                                                            	</div>
                                                                            	<div class="links h7 font-weight-bold">
                                                                            		<a href="<?php echo $image_ktp; ?>" target="_blank" class="blue-trimegah">Download</a> |
                                                                            		<a href="#" id="retakektp" name="retakektp" class="blue-trimegah">Retake</a>
                                                                            	</div>
                                                                            </li>
                                                                        	<li class="clearfix">&nbsp;</li>
                                                                        	<li>
                                                                            	<h6><strong>Selfie KTP image</strong></h6>
                                                                            	<div class="atch-thumb">
                                                                            		<img src="<?php echo $image_selfie; ?>" alt="img">
                                                                            	</div>
                                                                            	<div class="links h7 font-weight-bold">
                                                                            		<a href="<?php echo $image_selfie; ?>" target="_blank" class="blue-trimegah">Download</a> |
                                                                            		<a href="#" id="retakeselfie" name="retakeselfie" class="blue-trimegah">Retake</a>
                                                                            	</div>
                                                                            </li>
                                                                            <li class="clearfix">&nbsp;</li>
                                                                        	<li>
                                                                            	<h6><strong>NPWP image</strong></h6>
                                                                            	<div class="atch-thumb">
                                                                            		<img src="<?php echo $image_npwp; ?>" alt="img">
                                                                            	</div>
                                                                            	<div class="links h7 font-weight-bold">
                                                                            		<a href="<?php echo $image_npwp; ?>" target="_blank" class="blue-trimegah">Download</a> |
                                                                            		<a href="#" id="retakenpwp" name="retakenpwp" class="blue-trimegah">Retake</a>
                                                                            	</div>
                                                                            </li>
                                                                            <li class="clearfix">&nbsp;</li>
                                                                        	<li>
                                                                            	<h6><strong>Kartu Keluarga image</strong></h6>
                                                                            	<div class="atch-thumb">
                                                                            		<img src="<?php echo $image_kk; ?>" alt="img">
                                                                            	</div>
                                                                            	<div class="links h7 font-weight-bold">
                                                                            		<a href="<?php echo $image_kk; ?>" target="_blank" class="blue-trimegah">Download</a> |
                                                                            		<a href="#" id="retakekk" name="retakekk" class="blue-trimegah">Retake</a>
                                                                            	</div>
                                                                            </li>
                                                                        </ul>
                                                                	</div>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                            		</div>
                                            		<div class="tab-pane fade" id="Process" role="tabpanel" aria-labelledby="Process-tab">
                                                    	<div class="x_content pb-5">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="title_left">
                                                                	<h3>Historical Registration</h3>
                                                                    <div class="clearfix">&nbsp;</div>
                                                                </div>
                                                                <div class="col-sm-10">
																	<?php for($i=0;$i<count($logdataprocessing);$i++) { ?>
																		<div class="row">
																			<div class="mail_list pb-3">
																				<div class="left">
																					<?php if($logdataprocessing[$i]['status'] == "") { ?>
																						<i class="fa fa-circle red-trimegah mt-2"></i>
																					<?php }else{ ?>
																						<i class="fa fa-circle blue-trimegah mt-2"></i>
																					<?php } ?>
																				</div>
																				<div class="right">
																					<h5 class="mr-1"><?= $logdataprocessing[$i]['status']; ?></h5>
																					<h6><span class="glyphicon glyphicon-time pull-left mt-0 mr-2" aria-hidden="true"></span><?= $logdataprocessing[$i]['created_on']; ?></h6>
																					<h6><span class="glyphicon glyphicon-off pull-left mt-0 mr-2" aria-hidden="true"></span>Diff  : <?= $logdataprocessing[$i]['diff']; ?></h6>
																					<h6><span class="glyphicon glyphicon-edit"></span> Notes : <?= $logdataprocessing[$i]['notes']; ?></h6>
																				</div>																				
																			</div>
																		</div> 
																	<?php }?>
                                                                	
                                                                    <div class="row">
                                                                    	<div class="pt-3 pb-3">
                                                                            <button type="button" id="buttonresend" name="buttonresend" class="btn btn-yellow-trim">RESEND LINK</button>
                                                                        </div>
                                                                    </div>                                                             
                                                                </div>                                                                
															</div>
                                                            <div class="col-lg-6 col-md-12 mail_view">
                                                            	<div class="title_left">
                                                                	<h3>Comment/ Notes</h3>
                                                                    <div class="clearfix">&nbsp;</div>
                                                                </div>
                                                                <div class="col-sm-10">
																	<form id="formcomment" name="formcomment" action="#" method="post">
																		<input type="hidden" id="nik" name="nik" value= "<?php echo $nik; ?>"/>
																		<input type="hidden" id="status" name="status" value="open"/>
																		<input type="hidden" id="created_by" name="crated_by" value="<?php echo $this->session->userdata('email'); ?>"/>
																		<div class="row">
																			<textarea id="notes" name="notes" class="form-control" rows="5" placeholder=""></textarea>
																		</div>
																		<div class="row">
																			<div class="pt-3 pb-3">
																				<button type="submit" id="subbutton" name="subbutton" class="btn btn-blue-trim">SUBMIT</button>
																			</div>
																		</div>
																	</form>
                                                                    <div class="clearfix">&nbsp;</div>
                                                                    <div class="comment-process">
																		
																		<ul>
																		<?php for($i=0;$i<count($commentary);$i++) { ?>
																			<li>
                                                                            	<div class="comment_no"><?= $commentary[$i]['id']; ?></div>
                                                                        		<div class="h6"> Time : <?= $commentary[$i]['created_on']; ?> - oleh <?= $commentary[$i]['created_by']; ?></div>
                                                                                <div class="isi-comment"><?= $commentary[$i]['notes']; ?></div>
                                                                            </li>
																		<?php } ?>
																		</ul>
                                                                 	
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
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- /page content -->
