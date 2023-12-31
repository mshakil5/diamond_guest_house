@extends('layouts.master')

@section('content')

<style>
    #riskfloater {
      background-color: green;
      left: 10px;
      position: fixed;
      padding: 8px 16px;
      background: green;
      color: #ffffff;
      cursor: pointer;
      bottom: 10px;
      z-index: 2;
      // -moz-border-radius: 3px;
      // -webkit-border-radius: 3px;
      // border-radius: 3px;
  }

  #cookiebar {
      position: fixed;
      bottom: 0;
      left: 5px;
      right: 5px;
      display: none;
      z-index: 200;
  }

      a{
          color: white;
          text-decoration: none;
      }



  #cookiebarBox {
      position: fixed;
      bottom: 0;
      left: 5px;
      right: 5px;
      // display: none;
      z-index: 200;
  }
  .containerrr {
      border-radius: 3px;
      background-color: white;
      color: #626262;
      margin-bottom: 10px;
      padding: 10px;
      overflow: hidden;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      position: fixed;
      padding: 20px;
      background-color: #fff;
      bottom: -10px;
      width: 100%;
      -webkit-box-shadow: 2px 2px 19px 6px #00000029;
      box-shadow: 2px 2px 19px 6px #00000029;
      border-top: 1px solid #356ffd1c;
  }



  .cookieok {
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      background-color: #e8f0f3;
      color: #186782 !important;
      font-weight: 600;
      // float: right;
      line-height: 2.5em;
      height: 2.5em;
      display: block;
      padding-left: 30px;
      padding-right: 30px;
      border-bottom-width: 0 !important;
      cursor: pointer;
      max-width: 200px;
      margin: 0 auto;

  }
  </style>

<section class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/frontend/images/1a.jpg')}}" class="d-block" alt="slider photo missing">
                <div class="carousel-text container">

                    <h1 class="main-title mb-1 text-light1.png">Book Direct <br> <span class="">Get 10% Discount</span></h1>
                    
                        <a href="" class="text-white text-decoration-none" title="Call Now"><h5 class="my-2 text-white"> 07778529048 | 07717941122</h5></a>
                 
                    

                    <h5 class="my-2 text-white">  </h5>
                    <div class="mt-4 d-flex flex-wrap align-items-center justify-content-center-sm">
                        <a href="https://via.eviivo.com/DiamondsYO31" target="_blank" class="btn-theme">
                            Book now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
</section>



<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto text-justify">
                

                <div class="about-right ">

                    <p><b>Diamonds guest house</b> is an elegant Victorian town house built in the 1890’s.    
                        <br>

                        The guest house presents itself as an ideal base for you to explore the historical city of York. 
                        <br>
                        We are situated on one of York’s famous roads, Bishopthorpe road. <br><br>

                        This captivating little corner of York is also referred to by those who know and love it as Bishy road. Bishopthorpe road (Bishy road) has excellent shops, restaurants and business, which provides top quality goods and services. <b>Diamonds guest house</b> is also situated in an area of York, which is close to all of York's attractions such as The Jorvik Viking Centre, National Railway Museum, York Minister, Knavesmire Racecourse, The Shambles, York Dungeons and many more. 
                        <br><br>

                        The perfect destination for a luxurious escape to the beautiful city of York, for a business trip in style or just to have a comfortable and relaxing mini-break. Choose from our cosy double en-suite, triple en-suite, or for a little extra space you can choose a family deluxe en-suite. Whichever you choose, your stay will be made complete with a comfy bed and spacious en-suite. 
                        <br><br>

                        As a guest you'll also enjoy free Wi-Fi, flat screen TV and complimentary refreshments, so that you can rest easy during your stay.
                        <br><br>
                        
                        Our team at <b>Diamonds guest house</b> will be more than happy to guide you at any of the famous destinations in the historical City of York. We will also strive to maintain a courteous and friendly atmosphere during your stay.
                    </p>
                    <br>
                </div>




            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="blog-slider">
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/doublestandard.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Double-Standard-Ensuite
                        </a>doublestandard.jpg
                        <p>
                            All double en-suites have a comfortable double bed, flat screen TV, towels, toiletries and tea and coffee making facilities. The modern en-suites have shower facilities. Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/DoubleEnsuite.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="fs-4 link-title d-block my-3">
                            Double-Ensuite
                        </a>
                        <p>
                           All double en-suites have a comfortable double bed, flat screen TV, towels, toiletries and tea and coffee making facilities. The modern en-suites have shower facilities. Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/TripleEnsuiteDelux.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Triple-Ensuite Deluxe
                        </a>
                        <p>
                            Triple room en-suites have 3 comfortable single beds, flat screen TV, towels, toiletries and tea and coffee making facilities. The modern en-suites have shower facilities. Ground floor rooms are available.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/FamilyDeluxEnsuite.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Family-Deluxe-Ensuite
                        </a>
                        <p>
                            Our deluxe en-suite room has 1 comfortable double bed and 5 comfortable single beds, flat screen TV, towels, toiletries and tea and coffee making facilities. The modern en-suite have both bath and shower facilities. Ground floor room.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
                <div class="blog p-3">
                    <div class="photo mb-3">
                        <a href="https://via.eviivo.com/DiamondsGuestHseYO23">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/frontend/images/Quad-Superior-Ensuite.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <a href="" class="fs-4 link-title d-block my-3">
                            Quad-Superior-Ensuite
                        </a>
                        <p>
                            The Quad room en-suite has a comfortable king size bed and a double bed, flat screen TV, towels, toiletries and tea and coffee making facilities. The modern en-suite have shower facilities. The room is a very large room also facilitating a table and chairs to relax.
                        </p>
                        <div class="d-flex mt-3 justify-content-between align-items-center">
                            <a href="https://via.eviivo.com/DiamondsGuestHseYO23" class="btn-theme d-block w-100 text-center">Book rooms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="galery spacer">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 mx-auto ">
                <h2 class="title-global text-center">
                    Photo <span class="txt-primary">Gallery </span>
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="popup-gallery">
                        <a href="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                       <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/4.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                            <a href="{{ asset('assets/frontend/images/gallery/1.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/5.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        <a href="{{ asset('assets/frontend/images/gallery/2.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/6.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                        {{-- <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/7.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a>
                       <a href="{{ asset('assets/frontend/images/gallery/3.jpeg')}}" class="image" title="Some Text for the image">
                            <img src="{{ asset('assets/frontend/images/gallery/8.jpeg')}}" alt="Alt text" class="img-fluid" />
                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section py-5 bg-light" id="contact">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 mx-auto ">
                <h2 class="title-global text-center">
                    Contact & Location
                </h2>
                
                <p><b>From Train Station (0.9 miles)</b></p>
                <p>Head south-west on Station Rd/A1036 towards Blossom St Continue to follow A1036 0.5 mi Slight right onto Price's Ln 95 ft Turn right onto Bishopthorpe Rd/A1036 161 ft Continue straight onto Bishopthorpe Rd Destination will be on the left. number 114</p>
            </div>
        </div>
       <div class="row">

            <div class="col-md-6">

                @if ($message = Session::get('message'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

               <form action="{{route('contact.submit')}}" method="post" class="form-custom p-4 border mb-3">
                @csrf
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="text"  name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="email"  name="email"
                            placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control fw-bold" type="text" name="subject"
                            placeholder="Subject" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control fw-bold" rows="3" name="message"
                            placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn-theme text-center border-0">Send</button>
                    </div>
                </form>
            </div>
            
            
            <div class="col-md-6">
                
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d18779.309958535578!2d-1.0981116614802002!3d53.95992012716769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdiamond%20guest%20house%20york!5e0!3m2!1sen!2suk!4v1687720942239!5m2!1sen!2suk" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

{{-- <div id="cookiebarBox" class="cookieBox bg-primary py-4  text-white position-fixed bottom-0 left-0 right-0">
    <div class="container text-center">
        Like most websites, this site uses cookies to assist with navigation and your ability to provide feedback, analyse your use of products and services so that we can improve them, assist with our personal promotional and marketing efforts and provide consent from third parties.
        <br>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
            <a id="cookieBoxok" class="btn btn-sm btn-primary my-3 px-4 text-center" data-cookie="risk">Accept</a>
        </div>
    </div>
</div> --}}

<div id="cookiebarBox" class="os-animation" data-os-animation="fadeIn" >
    <div class="containerrr risk-dismiss " style="display: flex;" >
          <div class="container">
            <div class="row">
                <div class="col-md-9">
                <p class="text-left">
               <h1 class="d-inline text-primary"><span class="iconify" data-icon="iconoir:half-cookie"></span> </h1>
               Like most websites, this site uses cookies to assist with navigation and your ability to provide feedback, analyse your use of products and services so that we can improve them, assist with our personal promotional and marketing efforts and provide consent from third parties.
            </p>

                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a id="cookieBoxok" class="btn btn-sm btn-primary my-3 px-4 text-center" data-cookie="risk">Accept</a>
                </div>
            </div>
          </div>
    </div>
</div>

@endsection

@section('script')

<script>
    // if you want to see a cookie, delete 'seen-cookiePopup' from cookies first.
    
    jQuery(document).ready(function($) {
       // Get CookieBox
      var cookieBox = document.getElementById('cookiebarBox');
        // Get the <span> element that closes the cookiebox
      var closeCookieBox = document.getElementById("cookieBoxok");
        closeCookieBox.onclick = function() {
            cookieBox.style.display = "none";
        };
    });
    
    (function () {
    
        /**
         * Set cookie
         *
         * @param string name
         * @param string value
         * @param int days
         * @param string path
         * @see http://www.quirksmode.org/js/cookies.html
         */
        function createCookie(name, value, days, path) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else expires = "";
            document.cookie = name + "=" + value + expires + "; path=" + path;
        }
    
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    
        // Set/update cookie
        var cookieExpiry = 30;
        var cookiePath = "/";
    
        document.getElementById("cookieBoxok").addEventListener('click', function () {
            createCookie('seen-cookiePopup', 'yes', cookieExpiry, cookiePath);
        });
    
        var cookiePopup = readCookie('seen-cookiePopup');
        if (cookiePopup != null && cookiePopup == 'yes') {
            cookiebarBox.style.display = 'none';
        } else {
            cookiebarBox.style.display = 'block';
        }
    })();
    
    </script>

@endsection