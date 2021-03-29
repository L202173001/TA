@extends('layouts.frontend')

@section('title','Expert System')

@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Expert System</span></h1>
                            <p class="p-large"> Troubleshooting Car Damage Using Forward Chaining Method</p>
                            <a class="btn-solid-lg page-scroll" href="/troubleshoot">TROUBLESHOOT NOW</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('frontend')}}/images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->



    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>How To Find Out the Damage and Repair 
						<br>Solution for Your Car</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{asset('frontend')}}/images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Fill in Biodata</h4>
                            <p>Go to the troubleshoot menu then before doing troubleshooting, you need to fill in biodata in the form of name and cellphone number.<br><br></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{asset('frontend')}}/images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Filling Symptoms</h4>
                            <p>Fill in the symptoms experienced in your car by selecting the symptoms available in the form of radio buttons.<br><br><br></p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{asset('frontend')}}/images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Results and Solutions</h4>
                            <p>The results of the damage from the symptoms that have been entered will appear along with the solution for the damage<br>.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->
@endsection