@extends('client.layouts.master')

@section('content')
    <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								SCHEDULE AN APPOINTMENT				
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> SCHEDULE AN APPOINTMENT </a></p>
                        </div>	
                       									
                    </div>
				</div>
			</section>
            <!-- End banner Area -->
            
            <div class="whole-wrap">
				<div class="container">
                   
                
                    
                    <div class="section-top-border">
						<div class="row">
                      
                            <div class="col-md-4">
								<div class="single-defination">
                                <div class="step">
									<h4 style="text-align: center" class="mb-15">STEP 1</h4>
                                    <a href="{{route('step1')}}"> 
                                    <div class="row">
                                        <div style="margin:auto" class="col-md-9">
                                            <img style="" src="{{asset('client/img/Know-your-visa-type-active.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </a>
                                </div>
                                </div>
                            </div>
                      
                            <div class="col-md-4">
								<div class="single-defination">
                                <div class="step">
									<h4 style="text-align: center" class="mb-15">STEP 2</h4>
                                    <a href="{{route('step2')}}"> 
                                    <div class="row">
                                        <div style="margin:auto" class="col-md-9">
                                            <img style="" src="{{asset('client/img/Know-your-visa-type-active.png')}}" alt="" class="img-fluid">
                                        </div>
                                        
                                    </div>
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
								<div class="single-defination">
                                <div class="step">
									<h4 style="text-align: center" class="mb-15">STEP 3</h4>
                                    <div class="row">
                                        <div style="margin:auto" class="col-md-9">
                                            <img style="" src="{{asset('client/img/Know-your-visa-type-active.png')}}" alt="" class="img-fluid">
                                        </div>
                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                          
						</div>
                    
                    
                    </div>
                    
				</div>
            </div>
            
            
            		<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading">SCHEDULE AN APPOINTMENT</h3>
					<p class="sample-text">
                        All applicants are required book an appointment online to submit their visa application at the Joint Schengen visa application center.
                    </p>
                    <p>
                        Applicants applying for a Schengen Visa (Short stay category) could also book appointments by calling the helpline no 022 67866078 or by sending an email to <b>info.polandin@vfshelpline.com</b> till further notice. The contact center can assist in booking appointments for Mumbai., Ahmedabad, Bangalore, Chennai and Hyderabad visa application centers only.
                    </p>
                    <p>
                        <strong>
                        Note: - All applicants are informed that there is No Prime Time Services available in Poland irrespective of any Visa category applied.
                    </strong>
                    </p>
                    <p>
                        <a href="#" class="genric-btn primary circle arrow">SCHEDULE AN APPOINTMENT<span class="lnr lnr-arrow-right"></span></a>
                    </p>
                    <p>
                        Important: As part of the visa application procedure, from 2 November 2015 applicants will need to provide Biometric fingerprint data along with a digital photograph. If you have temporary injuries on your fingers, applicants are advised to wait until the injuries have healed before you book your appointment. Henna on fingertips may also mean we are unable to get a clear scanned image and should be removed or allowed to fade before your appointment date.
                    </p>
				</div>
			</section>
			<!-- End Sample Area -->
@endsection

@section('stylesheets')
<style>
    .step{
       
        /*    border: solid #f6214b;
            border-width: thin;
            padding: 3px;
            box-shadow: 0 0 9px 1px black;*/
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
    
    }
    .step:hover{
       
       /*    border: solid #f6214b;
           border-width: thin;
           padding: 3px;
           box-shadow: 0 0 9px 1px black;*/
           -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
            filter: grayscale(0%);
   
   }

</style>
@endsection