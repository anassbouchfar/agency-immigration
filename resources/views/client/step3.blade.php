@extends('client.layouts.master')

@section('content')
    <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								AFTER SUBMISSION	
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">AFTER SUBMISSION
                            </a></p>
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
                                <div class="step-current">
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
					<h3 class="text-heading">AFTER SUBMISSION</h3>
					<p class="sample-text">
                        After you have successfully submitted your application at one of the Visa Application Centres, you may like to check the status of your application on the website personally.                    </p>
                    <p>
                        The second option is to dial our call-centre number. Please, be prepared to tell your receipt number and date of birth.

                    </p>
                    <p>
                        Having made sure that your passport is received by the Visa Application Centre, you can collect it in person or order a courier delivery to the selected address. The processed passport will not be handed over to any of the travel agent / representative.

                    </p>
                    <p>
                        “Only Applicant can collect the passport. He/she needs to carry a Photo Id of himself/herself, ”.
                    </p>
              
           

<div class="row">
    <div class="col-md-12">
    <a  href="{{route('step2')}}" style="" class=" genric-btn primary circle arrow small"><span style="margin-left: 0px;margin-right: 10px" class="lnr lnr-arrow-left"></span>  Previous</a>
    <a  href="" style="float:right" class=" genric-btn primary circle arrow small">Schedule<span class="lnr lnr-arrow-right"></span></a>
</div>
</div>
</div>
			</section>
			<!-- End Sample Area -->
@endsection


@section('stylesheets')
<style>
    .step-current{
       
           /* border: solid #f6214b;
            border-width: thin;
            padding: 3px;*/
          /*  box-shadow: 0 0 9px 1px black;*/
    
    }
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