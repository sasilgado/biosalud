@extends('layouts.home')

@section('title', 'Servicios')


@section('content')

<div class="container">
    <div class="row">
      <div class="service">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <h2>Servicios</h2>
            <p>Somos una entidad prestadora de servicios de Salud a la comunidad en laboratorio clínico, imagenes diagnosticas, Seguridad y Salud en el trabajo. <br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Laboratorio Clínico</h4>
            <div class="icon">
              <i class="fas fa-vials fa-3x"></i>  
            </div>
            <p>Nuestro laboratorio cuenta con un amplio portafolio de exámenes en todo nivel de complejidad, procesados con la mejor tecnología.</p>
            <div class="ficon">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn" data-toggle="modal" data-target="#laboratorio">
                Leer más
              </button>
            </div>
          </div>
        </div>
                      <!-- Modal laboratorio -->
                      <div class="modal fade" id="laboratorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Laboratorio Clínico</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ... Equipo de ultima tecnologia
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Seguridad y Salud en el trabajo</h4>
            <div class="icon">
              <i class="fas fa-user-shield fa-3x"></i>
            </div>
            <p>Ofrecemos es amplio y comprende desde exámenes básicos hasta los de alta complejidad dependiendo de las necesidades de su empresa.</p>
            <div class="ficon">
              <button type="button" class="btn btn" data-toggle="modal" data-target="#seguysalud">
                Leer más
              </button>
            </div>
          </div>
        </div>
                          <!-- Modal seguridad y salud ocup -->
                      <div class="modal fade" id="seguysalud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Seguridad y Salud en el trabajo</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>


        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
            <h4>Imagenes Diagnosticas</h4>
            <div class="icon">
              <i class="fa fa-desktop fa-3x"></i>
            </div>
            <p>Ofrecemos servicio de imágenes diagnósticas, con procedimientos de rutina, contamos con médicos radiólogos especialistas.</p>
            <div class="ficon">
              <button type="button" class="btn btn" data-toggle="modal" data-target="#imagendiac">
                Leer más
              </button>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>
    <!-- Modal seguridad y salud ocup -->
                        <div class="modal fade" id="imagendiag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                ... diagn
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/set1.css" />
    <link href="/css/overwrite.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
@stop

@section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/js/fliplightbox.min.js"></script>
    <script src="/js/functions.js"></script>
    <script type="text/javascript">
      $('.portfolio').flipLightBox()
    </script>
@stop
