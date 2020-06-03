@extends('client.layouts.master')

@section('content')
    @include('client.layouts.threeSteps',["title"=>$title])
    @yield('subContent')
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