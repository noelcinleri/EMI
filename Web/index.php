<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>
<section style="margin-top: 10%;
"><h1 style="text-align:center;font-family: Century Gothic;font-size: -webkit-xxx-large;">Hızlı Kurulum</h1></section>
<section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link active" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="true"><i class="la la-cogs"></i>Paket Seçimi</a>
								    <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-line-chart"></i>Paket İşlemleri</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
							  	<div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Size En Uygun Paketler</h3>
							  			<div class="profile-bx-details">
							  				<div class="row">
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<div class="bx-info">
                                                              <h3>A Paketi</h3>
							  									<h3>100₺</h3>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Açıklama</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<div class="bx-info">
                                                                  <h3>B Paketi</h3>
                                                                  <h3>745₺</h3>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Açıklama</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<div class="bx-info">
							  									<h3>C Paketi</h3>
							  									<h3>145₺</h3>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Açıklama</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<div class="bx-info">
                                                              <h3>D Paketi</h3>
							  									<h3>130₺</h3>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Açıklama</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  				</div>
							  			</div><!--profile-bx-details end-->
							  			<div class="pro-work-status">
							  				<!-- <h4>Work Status  -  Last Months Working Status</h4> -->
							  			</div><!--pro-work-status end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
							  		<div class="acc-setting">
                                        <h3>Paket Adı</h3>
                                        <!-- Alttaki Form Seçilen Pakete  Göre Değişecektir ! -->
										<form>
											<div class="cp-field">
												<h5>Email</h5>
												<div class="cpp-fiel">
													<input type="text" name="email" placeholder="Email">
													<i class="fa fa-envelope"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Password</h5>
												<div class="cpp-fiel">
													<input type="password" name="password" placeholder="Password">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Please Explain Further</h5>
												<textarea></textarea>
											</div>
											<div class="cp-field">
												<div class="fgt-sec">
													<input type="checkbox" name="cc" id="c4">
													<label for="c4">
														<span></span>
													</label>
													<small>Email option out</small>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id,</p>
											</div>
											<div class="save-stngs pd3">
												<ul>
													<li><button type="submit">Yayınla</button></li>
													<li><button type="submit">Ayarları Sıfırla</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
							</div>
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>

<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>
