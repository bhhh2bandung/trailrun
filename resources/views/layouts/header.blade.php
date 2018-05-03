<nav class="uk-navbar-container">
            <div class="container">
                <div uk-navbar>

									<div class="uk-navbar-left">
											<a href="/" class="uk-navbar-item uk-logo mt-2 mb-2"><img src="{{ asset('img/logoa.png')}}" width="100" alt=""></a>
									</div>
								 <div class="uk-navbar-right">
									<ul class="uk-navbar-nav uk-visible@m">
													<li><a href="/">home</a></li>
													<li><a href="/register">pendaftaran</a></li>
													<li><a href="/details">info lomba</a></li>
													<li><a href="/peserta">peserta lomba</a></li>
													<li><a href="/syarat">peraturan</a></li>
													<li><a href="/gallery">gallery</a></li>
													<li><a href="#">result</a></li>
													<li><a href="/contact">kontak</a></li>
													@if (Auth::guest())
													<li><a href="/login">login <i class="material-icons uk-margin-small-left">launch</i></a></li>
													@else
													<li><a href="/home" title="" class="white">Profil</a></li>
																
																<li>
																<a href="/logout" class=" white" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">LOGOUT <i class="material-icons uk-margin-small-left">power_settings_new</i></a>
																		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
																@endif</li>
											</ul>
											<div class="uk-hidden@m">
											<a href="#" class="text-white"> <i class="material-icons uk-margin-small-left" uk-toggle="target: #menu">reorder</i></a>
											<div id="menu" uk-offcanvas="flip: true; overlay: true;">
												<div class="uk-offcanvas-bar bg-default">
												<button class="uk-offcanvas-close" type="button" uk-close></button>
												<div class="uk-card-body">
													<ul class="uk-list uk-list-divider upper bold mobile">
														<li><a href="/" title="" class="white">home</a></li>
														<li><a href="/register" title="" class="white">pendaftaran</a></li>
														<li><a href="/details" title="" class="white">info lomba</a></li>
														<li><a href="/peserta" title="" class="white">peserta lomba</a></li>
														<li><a href="/syarat" title="" class="white">peraturan</a></li>
														<li><a href="/contact" title="" class="white">contact</a></li>
														@if (Auth::guest())
														<li> 
																<a class="white   " href="/login">Login <i class="material-icons uk-margin-small-left">launch</i></a>
																</li>
																@else
																<li>
																	
																<a href="/home" title="" class="white uk-margin-small-right">Profil</a>
																</li>
																<li>
																<a href="/logout" class=" white" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">LOGOUT  <i class="material-icons uk-margin-small-left">power_settings_new</i></a>
																		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
																
																@endif
																</li>
															
													</ul>
												</div>
												</div>
												</div>

											</div>
								 </div>

                </div>
            </div>
        </nav>