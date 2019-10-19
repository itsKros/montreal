        <!-- footer section start -->
		<footer class="re-footer-section">
			<!-- footer-top area start -->
			<div class="footer-top section-padding-top">
				<div class="footer-dsc">
					<div class="container">
						<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="single-text res-text">
                                    <div class="footer-title">
                                        <h4>About Montreal Gentleman</h4>
                                        <hr class="dubble-border"/>
                                    </div>
                                    <div class="footer-text">
                                        {!! $footerinfo->aboutmg !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 hidden-sm col-md-3 margin-top">
                                <div class="single-text res-text">
                                    <div class="footer-title">
                                        <h4>Join us</h4>
                                        <hr class="dubble-border"/>
                                    </div>
                                    <div class="footer-text">
										{!! $footerinfo->joinus !!}
                                        <p>
											<a class="btn btn-primary" data-toggle="modal" data-target="#recruitmentForm" href="#">Recruitment</a>
										</p>


                                    </div>
                                </div>
                            </div>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>Contact us</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-text">
										<ul>
											<li class="femail">
												<i class="fa fa-envelope"></i>
												<div class="email">
													<p>{{$footerinfo->email}}</p>
												</div>
											</li>
											<li class="femail">
												<i class="fa fa-phone"></i>
												<div class="email">
												<p>{{$footerinfo->phone}}</p>
												</div>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							
							

						</div>
					</div>
					<hr class="dubble-border"/>
				</div>
				<div class="social-media">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="paypal social-icon">
									<ul>
										<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="social-icon">
									<ul class="floatright">
										<li class="res-mar"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top area end -->
			<!-- footer-bottom area start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<p>&copy; {{date("Y")}}  {{config('app.name')}}. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom area end -->
		</footer>
        <!-- footer section end -->

		<!-- Modal -->
		<div id="recruitmentForm" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Montreal Gents Recruitment</h4>
					</div>
					<div class="modal-body">
						<iframe name="lc_contact_form" frameborder="0" width="70%" height="600" src="https://548994.17hats.com/ruby/embed/lead/form/fdzzpfvktdgkpbwgbrcfgkrpsdsnpccx" id="iFrameResizer0" scrolling="no" style="overflow: hidden; height: 1153px;    width: 100%;"></iframe>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>