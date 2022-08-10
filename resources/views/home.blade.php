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
                    <img src="https://www.publicbankgroup.com/CMSPages/GetFile.aspx?guid=c79d77f6-6779-4025-b83a-e937bce893f5" style="
                    filter: brightness(90%);
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
                    filter: brightness(90%);
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
                    filter: brightness(90%);
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

    <div class="container-fluid"><div class="row">

    <div class="about">
        <h2>Main Description</h2>
        <p>Roll on the floor purring your whiskers off intrigued by the shower burrow under covers, and play time, rub face on everything, intently sniff hand, or pelt around the house and up and down stairs chasing phantoms. Attack feet. Damn that dog shake treat bag under the bed drink water out of the faucet for lick butt love to play with owner's hair tie. Swat at dog give attitude.</p>
    </div>

        </div>
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


