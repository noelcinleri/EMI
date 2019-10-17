<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EMI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="EMI - EARN MONEY INSTAGRAM" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../../../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../../../assets/lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/custom/custom.css">

</head>
<body>
	

<div class="wrapper">
		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="../../../assets/images/cm-logo.png" alt="">
									<p>İnstagram'da harcadığınız boş vakitler paraya dönüşsün ister misiniz? O zaman <b>StorySell</b> tam size göre.</p>
								</div><!--cm-logo end-->	
								<img src="../../../assets/images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Giriş Yap</a></li>				
									<li data-tab="tab-2"><a href="#" title="">Kayıt Ol</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Giriş Yap</h3>
									<form id="login" onsubmit="LoginCheck()">
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="email" id="txtLoginEmail" name="email" placeholder="Email">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" id="txtLoginPwd" name="password" placeholder="Şifre">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Beni Hatırla</small>
													</div><!--fgt-sec end-->
													<a href="#" title="">Şifremi Unuttum</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Giriş Yap</button>
											</div>
										</div>
									</form>
									<div class="login-resources">
										<h4>Sosyal Hesaplar</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Facebook ile Giriş Yap</a></li>
										</ul>
									</div><!--login-resources end-->
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">Çalışan</a></li>
											<li data-tab="tab-4"><a href="#" title="">Reklam Veren</a></li>
										</ul>
									</div><!--signup-tab end-->	
									<div class="dff-tab current" id="tab-3">
										<form id="register" onsubmit="registerCheck()">
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Ad Soyad">
														<i class="la la-user"></i>
													</div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" placeholder="Email">
														<i class="la la-envelope"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Ülke">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Şifre">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Şifre Tekrar">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>Evet, çalışma koşullarını Şartlar ve Koşulları anlıyor ve kabul ediyorum.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Şimdi Başlayın</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Ad Soyad veya Şirket Adı">
														<i class="la la-building"></i>
													</div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="email" name="email" placeholder="Email">
														<i class="la la-envelope"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Ülke">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Şifre">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Şifre Tekrar">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Evet, çalışma koşullarını Şartlar ve Koşulları anlıyor ve kabul ediyorum.</small>
														</div>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Şimdi Başlayın</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
		</div><!--sign-in-page end-->

<?php require 'inc/frontend/views/footer_start.php'; ?>
<script>
    var element = document.getElementsByTagName("body")[0];
  element.classList.add("sign-in");
    </script>
<?php require 'inc/frontend/views/footer_end.php'; ?>