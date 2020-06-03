@extends('client.layouts.master')

@section('content')
    <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								HOW TO APPLY		
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">HOW TO APPLY                            </a></p>
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
                                <div class="step-current">
									<h4 style="text-align: center" class="mb-15">STEP 2</h4>
                                    <div class="row">
                                        <div style="margin:auto" class="col-md-9">
                                            <img style="" src="{{asset('client/img/Know-your-visa-type-active.png')}}" alt="" class="img-fluid">
                                        </div>
                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
								<div class="single-defination">
                                <div class="step">
                                    <h4 style="text-align: center" class="mb-15">STEP 3</h4>
                                    <a href="{{route('step3')}}"> 

                                    <div class="row">
                                        <div style="margin:auto" class="col-md-9">
                                            <img style="" src="{{asset('client/img/Know-your-visa-type-active.png')}}" alt="" class="img-fluid">
                                        </div>
                                        
                                    </div>
                                    </a>
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
					<h3 class="text-heading">HOW TO APPLY</h3>
					<p class="sample-text">
                        The visa applications can be submitted at the below mentioned Polish Visa Application Centers in India with a prior appointment. All applications will be assessed by the Embassy of the Republic of Poland in New Delhi or Consulate General of the Republic of Poland in Mumbai.
                    </p>
                    <p>
                        Applications lodged at given visa centers will be processed at Consular Section of the Embassy of the Republic of Poland in New Delhi: New Delhi, Kolkata, Chandigarh, Jaipur and Bhopal.
                    </p>
                    <p>
                        Applications lodged at given visa centers will be processed at Consulate General of the Republic of Poland in Mumbai: Bangalore, Chennai, Hyderabad, Mumbai and Ahmedabad.
                    </p>
                  
                   <p>
                    <ul class="unordered-list">
                        <li>STEP 1</li>
                        <p>Prepare your application and supporting documents:
                            <br><br>
                            Go to “Schengen Visa” or “National Visa” link on this website to understand details of different visa types. There you can find information on the photo specifications, documents required, processing times and more.</p>
                        <li>STEP 2</li>
                        Book an appointment to visit the Visa Application Centre:
<br><br>
To visit the Visa Application center you should schedule the appointment. You can book the appointment online or by calling our Helpline.
<br>
Please read the security regulation notice before visiting the Centre.
                        <li>STEP 3</li>
                        <p>Submit your visa application:
                        </p>
                        <p>Visit the Visa Application Centre and submit your completed Schengen Visa Application Form or National Visa Application Form along with required supporting documents. Please see the Contact Us page for the location of the centre. In order to avoid a second trip to the Visa Application center after your application has been processed, you may opt for a commercial courier delivery service of your passport for an additional fee.
                        </p>
                        <p>Please ensure that you furnish the required document, you may download document checklist from this website. Incomplete applications may not be accepted.
                        </p>
                        <p>Please note: in exceptional cases the consul has the right to request the provision of other documents as well or invite you for an interview at the Consulate.

                        </p>
                        <li>STEP 4</li>
                        Pay application fee: <br> 

Visa fee is paid at the submission counter in cash in Indian rupees. Receipt will be provided for all payments made at the center.
                        <li>STEP 5</li>
                      
                            Collect your ready passport:
<br><br>
Track the progress of your application and come accordingly to pick up your passport. If you have opted for a commercial courier delivery service your passport will be delivered to your chosen address.
<br><br>
Applicants are requested to collect their passports from the Visa Application Centre within 30 days. If passports are not collected within this period, they will be handed over to the Embassy. Passports which are handed over to courier for delivery will be called off and returned back to the Embassy if delivery fails for more than 30 days. In both cases, applicants will have to collect their passport directly from the Embassy.
<br><br>
Please pay attention that in accordance with Art. 21 (8) of the Visa Code, during the examination of the visa application form, the consul in exceptional cases has the right to invite the applicant for an interview and also ask him for additional documents. The provision of additional documents does not guarantee a visa.
<br></br>
Please kindly be informed it is still possible to apply for a visa at the Embassy of the Republic  of Poland, please register a visa application and book an appointment at Click here, but the number of spots in Embassy is limited.
                        

                    </ul>
                   </p>

<div class="row">
    <div class="col-md-12">
    <a  href="{{route('step1')}}" style="" class=" genric-btn primary circle arrow small"><span style="margin-left: 0px;margin-right: 10px" class="lnr lnr-arrow-left"></span>  Previous</a>
    <a  href="{{route('step3')}}" style="float:right" class=" genric-btn primary circle arrow small">Next<span class="lnr lnr-arrow-right"></span></a>
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