@extends('index')
@include('layouts.header')
@section('content')
    <main>
    <div class="container space-m">
        <div class="mb-5 text-center">
            <h1 class=" default title text-center ">Gallery Lomba</h1>
            <span class="lead"><i>* Dokumentasi foto dan video akan di tampilkan <br> setelah acara perlombaan selesai.</i></span>
    </div>
    <div class="uk-child-width-1-4@m uk-grid-small" uk-grid uk-lightbox="animation: slide" uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; delay: 200; repeat: false">
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default ">
            <div class="uk-card-media-top">
                <a class="uk-inline" href="http://via.placeholder.com/400x400" caption="Caption 1">
                <img src="http://via.placeholder.com/400x400" alt="">
                </a>
            </div>
            
        </div>
    </div>
    
</div>
</div>
    </main>
    <img src="{{ asset('img/bay.svg') }}" alt="" width="100%">
    <main class="bg-smoke">
        <div class="container space-m">
        <div class="mb-5 text-center">
                <h1 class=" default title">Video lomba</h1>
                <span class="lead"><i>* Dokumentasi foto dan video akan di tampilkan <br> setelah acara perlombaan selesai.</i></span>
        </div>
            <div class="uk-child-width-1-2@m uk-grid-small" uk-grid uk-lightbox>
                <div class="uk-inline">
                    <img src="http://via.placeholder.com/800x400" alt="">
                    <a class="uk-position-absolute uk-transform-center default" style="left: 50%; top: 50%" href="#" ><i class="font-i material-icons uk-margin-small-right">play_circle_filled</i></a>
                </div>
                <div class="uk-inline">
                    <img src="http://via.placeholder.com/800x400" alt="">
                    <a class="uk-position-absolute uk-transform-center default" style="left: 50%; top: 50%" href="#" ><i class="font-i material-icons uk-margin-small-right">play_circle_filled</i></a>
                </div>
            </div>
        </div>
    </main>
@endsection