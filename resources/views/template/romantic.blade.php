@extends('layouts.invitacion')


@section('css')

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/build/assets/template/romantic/romantic.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

@stop

 
<div>

<!--Editor-->
<div class="styler-editor" style="display:none">
    <label>POSICION TITULO</label>
    <select name="posicion" id="posicion">
      <option value="1">ARRIBA</option>
      <option value="2">CENTRO</option>
      <option value="3">ABAJO</option>
    </select>
  </div>
<!--end Editor-->



<!--Portada-->
<div id="guille" class="container-fluid portada" style="background-image: url({{ asset(($imgPortadaDesktop) ? $imgPortadaDesktop -> temporaryUrl() : 'https://eventdate.es/wp-content/uploads/2022/09/chic-desktop.png' ) }});">
  <div class="row vh-100">
    <div class="overlay"></div>
    <div class="col-1">
    </div>
    <div class="col-10 pt-5 pb-5">
      <div id="titulos" class="d-flex justify-content-center align-items-center h-100">
        <div class="text-center">
          <h2 class="text-light tituloPortada" style="width:100% !important">Martin & Laura</h2>
          
          <span class="text-light textoPortada">Nos Casamos!</span>
        </div>
      </div>
    </div>
    <div class="col-1">
    </div>
  </div>
</div>

<div class="view-divider"></div>



<!--end Portada-->

<!--Eventos-->

<section id="eventos">
  <div class="container">
    <div class="row text-xs-center">
      <div class="col-md-12 text-center m-0 p-0">
        <div class="carousel-wrap"  wire:ignore>
          <div class="owl-carousel eventos" wire:ignore>

          @foreach ($events as $e)

          <div class="card p-4">
              <img class="card-img-top" src="{{asset($e -> image)}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$e->title}}</h5>
                <div class="divhorario">
                  <span>30/12/2023 19:00hs</span>
                </div>
                <h5 class="card-lugar">{{$e->place_name}}</h5>
                <span class="card-text">Blvr. Chacabuco 737, Córdoba</span>
                <br>
                <br>
                <a href="#" class="botonhashtag">VER UBICACION</a>
              </div>
            </div>

					@endforeach
          

          </div>
        </div>
    </div>
  </div>
  </section>

<!-- End Eventos-->

<!-- Contador -->
<div id="contador" style="background-image: url({{ asset(($imgPortadaDesktop) ? $imgPortadaDesktop -> temporaryUrl() : 'https://eventdate.es/wp-content/uploads/2022/09/chic-desktop.png') }});">
  <div class="container-fluid p-0">
    <div class="row">
      <!--Editor count-->

      <div class="styler-editor-count" style="display:none;">
        <label>FECHA DE LA BODA</label>
        <input wire:model.defer="time" id="fechaboda" type="date" value="{{$time}}">
        </select>
        <button wire:click="changeTime" class="botonfecha" >Guardar</button>
      </div>
    <!--End Editor count-->
      <div class="col-12 text-center">

        <div class="divcontador" wire:ignore>
          <div id="countdown">
            <ul class="m-0 p-0">
              <li><span id="days" class="contador"></span><span class="dias">Dias</span></li>
              <li><span id="hours" class="contador"></span><span class="dias">Hrs</span></li>
              <li><span id="minutes" class="contador"></span><span class="dias">Min</span></li>
              <li><span id="seconds" class="contador"></span><span class="dias">Seg</span></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end Contador -->

<!-- Historia -->
<section id="historia">
<div class="container">
  <div class="row text-xs-center">
    <div class="col-md-12 text-center">
      <br>
      <h2 class="tituloHistoria">Nuestra Historia</h2> 
       
      <br>
      <div style="background-color: #e7e7e7;" wire:ignore>
	  <p class="textoHistoria text-dark">Una propuesta, un Sí y una decisión que tomamos juntos. Nuestro amor ha crecido en nosotros, ha madurado y florecido, a veces sencillo, otras caótico pero siempre maravilloso.<br>

		Así comienza una nueva etapa en nuestras vidas. Somos aventureros, dedicados, fuertes de carácter; los desafíos que hemos enfrentado nos han ayudado a crecer y madurar; debemos agradecer a esos retos porque con ellos nos hemos dado cuenta que juntos podemos lograr lo que nos proponemos.<br>

		Tan sólo podemos decir que nuestra vida en estos momentos se encuentra completa y estamos listos para compartir el resto de nuestros días juntos.</p>
      </div>
      
  </div>
</div>
</section>
<!-- end Historia -->

<!--Galeria-->
<section id="galeria">
    <div class="container">
      <div class="row text-xs-center">
        <div class="col-md-12 text-center m-0 p-0">
          <div class="carousel-wrap" wire:ignore>
            <div class="owl-carousel galeria" wire:ignore>

              @foreach ($fotos as $f)
                <div class="item"><img class="img" src="{{asset($f -> image)}}"></div>
              @endforeach
            </div>
          </div>
      </div>
    </div>
    </section>

  <!--End Galeria-->


<!-- Hashtag -->

<section id="hashtag">
  <div class="container">
    <div class="row text-xs-center p-t-1 p-b-4">
      <div class="col-md-12 text-center">
        <br>
        <h3 class="titulohashtag">Durante nuestra boda utiliza el hashtag</h3>
        <br>
        <br>
        <h5 class="hashtag">#BODAMARTIN&LAURA</h5>
        <br>
        <br>
        <a href="" class="botonhashtag">VER MURAL</a>
    </div>
  </div>
  </section>

  <!-- end Hashtag -->


  

  <!-- Vestimenta -->

<section id="vestimenta">
  <div class="container">
    <div class="row text-xs-center p-t-1 p-b-4">
      <div class="col-md-12 text-center">
        <br>
        <h3 class="titulohashtag text-dark">Codigo de Vestimenta</h3>
        <br>
        <br>
		@php

        $vestimenta = [
            1 => 'Casual chic',
            2 => 'Formal',
            3 => 'Sport',
            4 => 'Elegante'
        ];

        $type = $vestimenta[$card-> dresscode_type]


        @endphp
        
        <h5 class="hashtag">{{$type}}</h5>
        <br>
        <br>
        <button class="botonhashtag" data-bs-toggle="modal" data-bs-target="#modaldress">VER EJEMPLO</button>
    </div>
  </div>
  </section>

  <!-- end Vestimenta -->

  

    <!-- <section id="recomendado">
      <div class="container">
        <div class="row text-xs-center p-t-1 p-b-4">
          <div class="col-md-12 text-center">
            <br>
            <h3 class="titulovestimenta">Recomendados</h3>
            <br>

            <div style="text-align: start;">
              <div class="accordion_container">

                <div class="accordion_head align-self-start">HOSPEDAJE<span class="plusminus">+</span></div>
                <div class="accordion_body" style="display: none;">
                  <p style="color:black">Second Accordian Body, it will have description</p>
                </div>
                <br>
                <div class="accordion_head">TRANSPORTE<span class="plusminus">+</span></div>
                <div class="accordion_body" style="display: none;">
                  <p style="color:black">Second Accordian Body, it will have description</p>
                </div>
              </div>
            </div>
            
        </div>
      </div>
      </section>-->

      <section id="canciones">
        <div class="container-fluid">
          <div class="row text-xs-center p-t-1 p-b-4">
            <div class="col-2"></div>
            <div class="col-sm-12 col-md-8 text-center">
              <br>
              <h3 class="tituloCancion">¿Qué canciones no pueden faltar?</h3>
              
              <br>
              <span class="textocanciones">¡Ayúdanos sugiriendo las canciones que pensás que no pueden faltaren nuestra boda!</span>
              
              <br>
              <div class="row mt-4 p-4">
                <div class="col-sm-12 col-md-4 p-1" style="text-align: start;">

                  <label class="labelform p-1" for="inputEmail4">Nombre de la Cancion*</label>
                  <input wire:model.defer="arraymusica.name" type="text" class="form-control" id="inputEmail4" placeholder="">

                </div>
                <div class="col-sm-12 col-md-4 p-1" style="text-align: start;">

                  <label class="labelform p-1" for="inputEmail4">Author*</label>
                  <input wire:model.defer="arraymusica.author" type="text" class="form-control" id="inputEmail4" placeholder="">

                </div>
                <div class="col-sm-12 col-md-4 p-1" style="text-align: start;">

                  <label class="labelform p-1" for="inputEmail4">Link de Spotify, Youtube, etc*</label>
                  <input wire:model.defer="arraymusica.link" type="text" class="form-control" id="inputEmail4" placeholder="">

                </div>

                <div class="col-12 mt-5">

                  <button  wire:click="create_music" class="botonhashtag" type="submit">ENVIAR</button>

                </div>

              </div>
            </div>
            <div class="col-2"></div>
        </div>
        </section>

        @if($pa -> count())

          @php
              $types_padrino = [];

              $types_testigo = [];

              foreach ($pa as $pt) {

                  if($pt -> type == 0){
                    $types_padrino[] = $pt;
                  }

                  if($pt -> type == 1){
                    $types_testigo[] = $pt;
                  }

              }

          @endphp

        @endif

        @if(! empty($types_testigo))

        <section id="vestimenta">
          <div class="container-fluid">
            <div class="row text-xs-center">
              <div class="col-12 text-center">
                <input  type="text" class="titulopadrinos transparente text-light" value="Testigos" style="width: 100%;">

                <div class="carousel-wrap"  wire:ignore>
                      <div class="owl-carousel padrinos" wire:ignore>

                      @foreach ($types_testigo as $p)
                      
                        <div class="text-center">
                          <img class="card-img-padrinos" src="{{asset($p -> photo)}}" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-name-padrino text-light">{{$p -> name}}</h5>
                            <span class="card-relacion text-light">{{$p -> relationship}}</span>
                            <br>
                          </div>
                        </div>
                        
                      @endforeach 
                  
                      </div>
                </div>

              </div>
            </div>
          </div>
        </section>
              
        @endif

        <div class="view-divider"></div>

        <section id="regalos">
          <div class="container">
            <div class="row text-xs-center p-t-1 p-b-3">
              <div class="col-md-12 text-center">
                <br>
                
                <h3 class="tituloregalo">Mesa de Regalo</h3>
                <br>
                <br>
                <div class="divtexto" wire:ignore>
                  
                  <span class="textoregalo text-dark">Tu presencia es nuestro mejor regalo, pero si quieres bendecirnos con algún bien material, aquí te dejamos una lista de regalos que nos gustaría recibir, o bien, también puedes colaborar con nuestra Luna de Miel.</span>
                </div>
                
                <br>
                <div class="switcher mt-5 mb-5">
                  <input type="radio" name="balance" value="yin" id="yin" class="switcher__input switcher__input--yin" checked="">
                  <label for="yin" class="switcher__label">VER DATOS</label>
                  
                  <input type="radio" name="balance" value="yang" id="yang" class="switcher__input switcher__input--yang">
                  <label for="yang" class="switcher__label">VER LISTA</label>
                  
                  <span class="switcher__toggle"></span>
                </div>
                <br>
                <!--<span class="datosbancarios">
                  TITULAR: MATIAS NICOLAS SANCHEZ
                  CBU: 1430001713011714940016
                  ALIAS: TUERCA.TRUCO.MANIJA
                  Nº DE CUENTA: 1301171494001
                  CUIT: 23-36988681-9</span>-->
                  <div wire:ignore>
                    <textarea wire:model.defer="ArrayInvitacion.gift_bank" class="datosbancarios transparente" name="" id="" cols="90" onkeyup="textAreaAdjust(this)" style="overflow:hidden"> TITULAR: MATIAS NICOLAS SANCHEZ CBU: 1430001713011714940016 ALIAS: TUERCA.TRUCO.MANIJA Nº DE CUENTA: 1301171494001 CUIT: 23-36988681-9</textarea>
                  </div>
                  
                  <br>
                  <div class="carousel-wrap" style="display:none;" wire:ignore>
                    <div class="owl-carousel regalos" wire:ignore>

                    @foreach ($regalos as $r)
      
                      <div class="card p-4">
                        <img class="card-img-top" src="{{asset($r -> image)}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$r -> title}}</h5>
                          <span class="card-text">{{$r -> description}}</span>
                          <h5 class="cardprecio mt-3">${{$r -> precio}}</h5>
                          <br>
                          <a href="#" class="botonhashtag">REGALAR</a>
                        </div>
                      </div>
                      
                    @endforeach 
                      
        
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>

        <div id="main-bg" style="background-image: url({{ asset(($imgPortadaDesktop) ? $imgPortadaDesktop -> temporaryUrl() : 'https://eventdate.es/wp-content/uploads/2022/09/chic-desktop.png' ) }});">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center pt-5">
                <div class="divdedicatoria">
                  
                  <h4 class="textodedicatoria">Vayan poniendose sus mejores trajes que estos novios se casan</h4>
                </div>
              </div>
            </div>
          </div>
        </div>


        @if(! empty($types_padrino))

        <section id="testigos">
          <div class="container-fluid">
            <div class="row text-xs-center">
              <div class="col-12">
                <input  type="text" class="titulopadrinos transparente" value="Padrinos" style="width: 100%;">

                <div class="carousel-wrap"  wire:ignore>
                      <div class="owl-carousel padrinos" wire:ignore>

                      @foreach ($types_padrino as $p)
                      
                        <div class="text-center">
                          <img class="card-img-padrinos" src="{{asset($p -> photo)}}" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-name-padrino">{{$p -> name}}</h5>
                            <span class="card-relacion">{{$p -> relationship}}</span>
                            <br>
                          </div>
                        </div>
                        
                      @endforeach 
                  
                      </div>
                </div>

              </div>
            </div>
          </div>
        </section>
              
        @endif

        <section id="canciones">
          <div class="container-fluid">
            <div class="row text-xs-center p-t-1 p-b-4">
              <div class="col-2"></div>
              <div class="col-sm-12 col-md-8 text-center">
                <br>
                <h3 class="tituloCancion">Transporte Privado</h3>
            
                <br>
                <br>
                <span class="textocanciones">Para facilitarte el traslado al lugar del evento contamos con un transporte privado.Para este servicio es necesario que confirmes para reservar tu lugar.</span>
                

                <div class="divtransporte">
                    <div class="form-group text-left">
                      <label class="labelform" for="inputEmail4">Nombre Completo**</label>
                      <input wire:model.defer="arraytransfer.fullname" type="text" class="form-control" id="inputEmail4" aria-describedby="emailHelp" placeholder="">
                      
                    </div>
                    <div class="form-group text-left">
                      <label class="labelform" for="inputEmail4">Cantidad de lugares*</label>
                      <input wire:model.defer="arraytransfer.numberOfplaces" type="text" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                    <br>
                    <button wire:click="create_transfer" class="botonhashtag" >CONFIRMACION</button>
                </div>
              </div>
              <div class="col-2"></div>
          </div>
          </section>

      


      <section id="confirmacion">
        <div class="container-fuild">
          <div class="row ">
            <div class="col-sm-12 col-md-6 text-center text-light">
              <div class="divconfirmacion text-sm-center text-md-left">
                
                <h1 class="tituloconfirmacion">Confirmacion</h1>

                <p class="textoconfirmacion ">Para poder participar de todo esto, es necesario que confirmes tu asistencia cuanto antes.
                  La fecha límite es el 20 de Marzo del 2023.
                  Completa el siguiente formulario para confirmar tu asistencia.</p>
                  
              </div>
            </div>

            <div class="col-sm-12 col-md-6 text-center text-light ">
              <div class="divformconfirmacion">
                  <div class="form-group text-left">
                    <div class="form-check form-check-inline">
                      <input wire:model.defer="arrayconfirmation.assitence"  class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="si">
                      <label class="form-check-label" for="inlineRadio1">Si puedo</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input wire:model.defer="arrayconfirmation.assitence" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no">
                      <label class="form-check-label" for="inlineRadio2">No puedo</label>
                    </div>
                    
                  </div>
                  <div class="form-group text-left">
                    <input wire:model.defer="arrayconfirmation.fullname" type="text" class="form-control" id="inputEmail5" aria-describedby="emailHelp" placeholder="nombre completo">
                    
                  </div>
                  <div class="form-group text-left">
                    <input wire:model.defer="arrayconfirmation.date" type="text" class="form-control" id="inputEmail5" placeholder="ingrese algun dato importante">
                  </div>
                  <br>
                  <button wire:click="create_confirmation" class="botonhashtag" type="submit">CONFIRMACION</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Editor musica-->

      <div class="styler-editor-musica" wire:ignore style="display:none">
        <label>MUSICA EN LA INVITACION</label>
        <div class="text-center pb-2 divmusica">
          <img src="https://img.icons8.com/ios11/600/FFFFFF/musical-notes.png" alt="" height="20px" width="20px">
        </div>
        <marquee id="fileName"></marquee>
        <input id="musicainput" wire:model.defer="music" type="file" onchange=" setSongManually(this.files[0]);" style="display:none;">
        <button  wire:click="musica_invitation" class="botonmusica">Guardar</button>
      </div>

      <div class="audio">
        <audio id="audio" onloaded="songLoaded(this);" >
          <source  src="{{asset($card -> music_invitation)}}" />
        </audio>
          <div id="contenedor-play">
          <div id="player-container">
          <div id="play-pause" class="play">Play</div>
          </div>
          </div>
	    </div>


      </div>

      <div class="modal fade" id="modaldress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dress Code</h5>
      </div>
      <div class="modal-body-dress text-center">
        <img src="https://media.revistagq.com/photos/5ca5fc2033e7510376153a8b/master/w_1600%2Cc_limit/dress_code_casual_chic_gq_4834.jpg" alt="" width="300px">
      </div>
    </div>
  </div>
</div>
      

</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js"></script>
  <script src="{{asset('/build/assets/template/western/western.js')}}"></script>

  <script>
    var imagenes = [
    'https://media.revistagq.com/photos/5ca5fc2033e7510376153a8b/master/w_1600%2Cc_limit/dress_code_casual_chic_gq_4834.jpg',
    'https://i.pinimg.com/originals/e0/b5/35/e0b5357976b55f1c0d13c0dec8798317.jpg',
    'https://www.somosmamas.com.ar/wp-content/uploads/2020/08/Dress-code-elegante-sport-para-hombres.jpg',
    'https://sites.google.com/site/ropadehombreymujer3/_/rsrc/1467894069827/home/ropa-elegante/ro.jpg'
  ]

  var final = imagenes[{{$card ->dresscode_type }} - 1];

  console.log(final);

  var imagen3 = '<img src="'+final+'" alt="" width="400px"  height="300px"/>'


  $(".modal-body-dress").empty().append(imagen3);
  </script>

</div>
