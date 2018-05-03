<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Agung Senjaya" />
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="BHHH2 Trail Run 2018 adalah kompetisi lari lintas alam dimana lokasi atau medan yang menjadi tempat berlangsungnya kompetisi adalah alam terbuka dengan kontur jalan yang tidak rata serta memiliki rintangan alam yang menantang." />
    <meta name="keywords" content="lomba lari, bhhh2, trailrun, run, event, perlombaan, hadiah, lari, olahraga" />
    <meta name="robots" content="noindex,nofollow">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/css/uikit.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">        
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{{ asset('img/bhhh2.png') }}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>BHHH2 TRAIL RUN 2018</title>
   <!-- <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5aa9e6333697000013c0fca0&product=sticky-share-buttons' async='async'></script>  -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<!-- Facebook -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '977680782397175');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=977680782397175&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook -->
</head>
<body>
   

   <!-- @include('layouts.header') -->
   
        @yield('content')
   @include('layouts.footer')
            

    
<!-- UIkit JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit-icons.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@include('sweetalert::alert')
<script>


        window.onload=function(){
            $('#date').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                var a= $('#umur').val(age);
                console.log(age);
                //var a=$('#tes').prop("selected",a > 45 ? true : false);
                if (age < 45)
                {
                var b=$('#tes').val( 1 );  
                }
                else{
                    var b=$('#tes').val( 2 )
                }
                console.log(b); 
                        
            });
        }



        $(document).ready(function(){
          var a=parseInt($("#kodeunik").html());
          //console.log(a.toString().length);
          var b=a.toString().length;
    switch(b) {
    case 1:
        aa="000"
        break;
    case 2:
        aa="00";
        break;
    case 3:
        aa="0";
        break;
    default:
        aa="0000";
} 
$("#kode").append(aa + a.toString());
//console.log();
                                                          });

    </script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      });
    </script>
</body>
</html>