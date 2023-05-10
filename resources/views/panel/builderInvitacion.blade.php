@extends('layouts.builder')

@section('title', 'Build Invitation')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,200&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
		<script src="https://unpkg.com/grapesjs"></script>
		<script src="https://unpkg.com/grapesjs-component-countdown"></script>
		<script src="https://unpkg.com/grapesjs-blocks-basic"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script src="https://cdn.jsdelivr.net/npm/he/he.js"></script>

    <style>
            body,
            html {
                height: 100%;
                margin: 0;
            }
            .gjs-sm-sector .gjs-sm-gradient {
                width: 100%;
            }

            .grp-wrapper {
                margin: 15px 0;
            }

            .grp-handler-close {
                background-color: #444;
                color: #000000;
            }

            .grp-handler-cp-wrap {
                border-color: #444;
            }

            .grp-preview,
            .grp-wrapper {
                border-radius: 3px;
            }

            .gjs-editor {
                font-family: 'Montserrat Alternates';
                color:black;
                font-size: 12px;
            }

            .gjs-selected {
                outline: 7px solid #3b97e3 ;
                outline-offset: -2px;
                z-index: 9999999;
            }
            .gjs-badge{

                font-size: 16px !important;
            }
            .gjs-block{

                width: 100% !important;
            }

            .my-custom-button{

                margin-left: 187px;
                border: 1px solid;
                font-size:12px;

            }

            .gjs-cv-canvas{
                top:49px;
            }

           
    	</style>
@endsection

@section('content')
    @php

    require base_path('vendor/autoload.php');

    MercadoPago\SDK::setAccessToken("TEST-1698465907752913-071914-86ba19263a7114edf3852bec9e93fdf0-669368816");

    $preference = new MercadoPago\Preference();

    $item = new MercadoPago\Item();
    $item->id = "00001";
    $item->title = "item"; 
    $item->quantity = 1;
    $item->unit_price = $invitacion -> template -> price;

    $preference->back_urls = array(
        "success" => 'http://localhost:8000/panel/notificacion',
        "failure" => "http://www.tu-sitio/failure",
        "pending" => "http://www.tu-sitio/pending"
    );

    $preference->auto_return = "approved";

    $preference->external_reference = $invitacion -> id; 

    $preference->items = array($item);

    $preference->save(); # Save the preference and send the HTTP Request to create


    @endphp
  <div id="gjs" style="height:0px; overflow:hidden">
  
  </div>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#exampleModal" style="display:none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="{{$qrCode}}" alt="">
      </div>

    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script>
        var idInvitacion = '{{$invitacion->template -> id}}' ;

        var nombreTemplate = '{{$invitacion->template -> name}}' ;

        var slug = '{{$invitacion -> slug}}' ;

        var csrf = '{{ csrf_token() }}';

        var href = '{{$preference->sandbox_init_point}}' ;

        var invitacionStatus = '{{$invitacion -> status}}' ;

        var invitacionId = '{{$invitacion -> id}}' ;

        var html = `{{ $invitacion -> html }}` ;

        var css = `{{ $invitacion -> css }}`;

    </script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="{{ asset('builder2/grapesjs/json.js') }}"></script>
    <script src="{{ asset('builder2/grapesjs/templates.js') }}"></script>
  	<script src="{{ asset('builder2/grapesjs/script.js') }}"></script>
@endsection
