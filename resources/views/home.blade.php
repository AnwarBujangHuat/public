@include('layouts.master')
@extends('layouts.navbars.navs.guest')
@yield('content')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="card" style="
                       -ms-flex: 1 1 auto;
                      position: absolute;
                      align-items: center;
                      margin-right: 10%;
                      margin-left: 10%;
                      border-radius: 6px;
                      /*right: 50%;*/
                      bottom: 42%;
                      z-index: 20;
                      padding-top: 15px;
                      padding-left: 15px;
                      background: rgba(0,0,0,.30);">
                    <h5 class="card-title" style="font-size: 35px; color: #ffffff;  padding-right: 40px;">Public Bank Stock Price</h5>
                    <p class="card-text" style="font-size: 60px; color: #ffffff; font-weight: bold ;  padding-right: 40px;">RM 4.6451</p>
                    <p style="font-size: 14px; color: #ffffff;
                       position:absolute;
                       padding-top: 20px;
                       bottom:-5px;
                        max-width: 60%;
                       ">Stock Price as of 06 Aug 2022 5:00PM</p>

                    <button type="button" class="btn pull-right" style="font-size: 14px; color: #ffffff; background-color: #FF0000">
                        View Live Update <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                    {{--                         <button href="#" class="btn pull-right" style="font-size: 14px; background-color: #FF0000; color: #ffffff"> Go somewhere--}}
                    {{--                             <i class="fa fa-home pull-left"></i> Home--}}
                    {{--                             </button>--}}
                </div>
                <img src="https://www.publicbankgroup.com/CMSPages/GetFile.aspx?guid=c79d77f6-6779-4025-b83a-e937bce893f5" style="
                    filter: brightness(80%);
                    object-fit: cover; /* Do not scale the image */
                    object-position: top; /* Center the image within the element */
                    width:100%;
                    height: 95vh;
                    display: inline-block;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item" >
                <img src="https://www.publicbankgroup.com/CMSPages/GetFile.aspx?guid=85398e62-5c20-43f9-8f2c-6a2b42b9259a" style="
                    filter: brightness(100%);
                    object-fit: cover; /* Do not scale the image */
                    object-position: top; /* Center the image within the element */
                    width:100%;
                    height: 95vh;
                    display: inline-block;">

                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>

            <div class="item" >
                <img src="https://www.publicbankgroup.com/CMSPages/GetFile.aspx?guid=a3287894-0379-4783-9297-47fa18a5b8d7" style="
                    filter: brightness(100%);
                    object-fit: cover; /* Do not scale the image */
                    object-position: top; /* Center the image within the element */
                    width:100%;
                    height: 95vh;
                    display: inline-block;">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="about">
        <h2>Main Description</h2>
        <p>Roll on the floor purring your whiskers off intrigued by the shower burrow under covers, and play time, rub face on everything, intently sniff hand, or pelt around the house and up and down stairs chasing phantoms. Attack feet. Damn that dog shake treat bag under the bed drink water out of the faucet for lick butt love to play with owner's hair tie. Swat at dog give attitude.</p>
    </div>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // Initialize popover component
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
@endsection


