@extends('client.layouts.master')

@section('content')
    <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								KNOW YOUR VISA TYPE			
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> KNOW YOUR VISA TYPE
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
                                <div class="step-current">
									<h4 style="text-align: center" class="mb-15">STEP 1</h4>
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
                                    <h4 style="text-align: center" class="mb-15">STEP 2</h4>
                                    <a href="{{route('step2')}}"> 
                                    <div class="row">
                                        <div style="margin:auto" class="col-md-9">
                                            <img style="" src="{{asset('client/img/Know-your-visa-type-active.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </a>
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
					<h3 class="text-heading">KNOW YOUR VISA TYPE                    </h3>
					<p class="sample-text">
                        Before applying for Polish visa, applicants should decide the visa subclass under which they wish to lodge their visa application.
                    </p>
                    <p>
                        Please make sure you familiarize yourself with the information on the visa subclass you are applying for.

                    </p>
                    <p>
                        The different categories that are catered to are –
                    </p>
                  
                   <p>
                    Schengen Visa
                    <ul class="unordered-list">
                        <li>Tourist Visa</li>
                        <li>Business Visa</li>
                        <li>Others</li>
                    </ul>
                   </p>
                   <p>A Schengen visa (C Visa) allows you to travel to the following countries:
                                       </p>
                     <table class="table">
                        <tbody>
                            <tr>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                            </tr>
                            <tr>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                            </tr>
                            <tr>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                            </tr>
                            <tr>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                            </tr>
                            <tr>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                            </tr>
                            <tr>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                                <td>French</td>
                            </tr>    
                        </tbody>     
                    </table>      
                    <p>
                        Please apply for your visa at the Consulate or Embassy of the country of your main destination. If there is no main destination, the application must be submitted to the Embassy or Consulate General of the country where you will be staying for the longest period of time.
                    </p><p>
If no longest stay can be ascertained then you may apply at the country of the first port of entry.</p>            
<p><h5 >National Visa</h5>  </p>      
<p>If you intend to spend more than 90 days (at least 91 days) on Polish territory (either continuously or in intervals) in the half-a-year period since the date of first arrival, you must apply for the country visa D. The country visa (D) permits for: being in Polish territory for the duration of your stay and/or for the duration period the visa was issued for; as well as being able to travel in the other Schengen countries for up to three months during the specified half-a-year period.
<ul class="unordered-list">
    <li>Employment</li>
    <li>Others</li>
    <li>Studies</li>
</ul>
</p>        
<p>Once you know the visa type you need to apply for, please read all relevant information to that category which includes its Visa Fees, Service Charges, Documents Required, Photo Specifications and Processing Time along with the Visa Application Form within that category.
</p>
<p>Applicants should read all instructions carefully and then fill in the Visa Application Form. Applicants can also get the visa application form by visiting the nearest Visa Application Centre of the Republic of Poland or by downloading the forms (Schengen Visa Application Form or National Visa Application Form) from the website “Download Form”.

</p>
<p>Once all requirements corresponding to the visa subclass under which they wish to lodge their application are fulfilled, you are ready to apply for your visa applications.

</p>
<div class="row">
    <div class="col-md-12">
    <a  href="{{route('step2')}}" style="float:right" class=" genric-btn primary circle arrow small">Next<span class="lnr lnr-arrow-right"></span></a>
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