@extends('index')
@include('layouts.header')
@section('content')
			<section class="bg-hero1 space-lg">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-md-6 col-lg-5 section-intro text-white">
                            <h1 class="display-3 title">Kontak support</h1>
                            <span class="lead ">
								Jika anda membutuhkan bantuan, silahkan hubungi kami di kontak support yang tersedia.
							</span>
							<div class="d-flex flex-column flex-md-row lead mb-3 mt-3">
								<a href="#" class=" btn btn-lg btn-outline-light  mb-3 mb-md-0 mr-md-3">Support@bhhh2trailrun.com</a>
								<a href="/docs/4.0/getting-started/download/" class="btn btn-lg btn-outline-light" onclick="ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 4.0.0');" target="_top"><i class="uk-icon" uk-icon="icon:whatsapp"></i> WhatsApp</a>
								</div>
                        </div>
                        <!--end of col-->
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="card content">
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('contact.store') }}">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="exampleInputUsername">Nama </label>
                                            <input class="form-control form-control-lg" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Nama Lengkap" type="text" name="name" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email </label>
                                            <input class="form-control form-control-lg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Alamat Email" type="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword">Pesan</label>
                                            <textarea class="form-control form-control-lg" name="message" id="exampleInputPassword" placeholder="Tulis Pesan"  name="" required></textarea>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" value="agree" name="agree-terms" id="check-agree" type="checkbox" required autofoqus>
                                                <label class="custom-control-label text-small" for="check-agree"> Saya Bukan Robot !</a>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-success btn-block">Submit Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
@stop