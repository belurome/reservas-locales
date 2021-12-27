<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>¿Dónde comemos?</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">¿Dónde comemos?</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Restaurantes">Elegí un restaurante</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Nosotros">Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Agregar">Sumá tu restaurante</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class= "masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/preview.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Hacé tu reserva</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Elegí, reservá y disfrutá</p>
            </div>
        </header>
        <!-- Restaurantes Section-->
        <section class="page-section restaurants" id="Restaurantes">
            <div class="container">
                <!-- Restaurantes Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Restaurantes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Restaurantes Grid Items-->
                <div class="row justify-content-center">
        {{-- VER PORFAVOR
        <!-- Filter Section-->
                    <div class="container">
                        <br/>
                        <div class="row">
                           <div class="col-sm-6 mb-3">
                              <input type="text" id="filtroCards" class="form-control" onkeyup="aplicaFiltroCards()" placeholder="Filtro...">
                           </div>
                       <br/>            
        --}}                   
                   
                    @foreach ($restos as $resto)
                                       <!-- Restaurantes Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('storage').'/'.$resto-> foto }}" alt=... />
                            <h5 class="portfolio-item-title">{{ $resto-> nombre_restaurante }}</h5>
                            <a href="#" class="btn btn-primary">Más info</a>
                            <a class="btn btn-primary" href="{{$resto->id}}"> Reservar </a>
                        </div>
                    </div>
                    @endforeach 
        <!-- Nosotros Section-->
        <section class="page-section bg-primary text-white mb-0" id="Nosotros">
            <div class="container">
                <!-- Nosotros Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Nosotros Section Content-->
                <div class="row">
                    <div class="text-center ms-auto"><p class="lead">Queremos que llegues a tu restaurante favorito sin tener que hacer filas o tener la incertidumbre de llegar y no conseguir lugar</p></div>
                   
                </div>
                <!-- Nosotros Section Button ERA UN BOTON QUE DESCARGABA ALGO
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </div>
            </div>-->

        </section>
        <!-- Agregar restaurante Section-->
        <section class="page-section" id="Agregar">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sumá tu restaurante</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <a class="btn btn-primary" href="{{url('/create')}}"> Ingresá tus datos </a>       
        </section>       
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Contactanos</h4>
                        <p class="lead mb-0">
                          <a href= "Dondecomemos@gmail.com">dondecomemos@gmail.com</a>
                           
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Seguinos en las redes</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer Nosotros Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Integrantes de ¿Dónde comemos</h4>
                        <p class="lead mb-0">
                            Belén
                            Sofía
                            Santiago
                            Guido
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>

        @foreach ($restos as $resto)
        <!-- Restaurantes Modals-->
        
        <!-- Restaurante Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">  {{ $resto-> nombre_restaurante }}  </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src=" "/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">{{ $resto-> comida }}</p>
                                    <button class="btn btn-primary" href="#restaurantes" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                 @endforeach 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

{{--

@extends('mainlayout')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
@endsection


@section('contenido')
        <table class="table table-striped table-hover" id="tablaPrincipal" style="width: 100%">
            <thead>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Zona</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($restos as $resto)
                    <tr>
                        <td>
                            <img src="{{ asset('storage').'/'.$resto-> foto }}" alt="" width="125px">
                        </td>
                        <td>{{ $resto-> nombre_restaurante }}</td>
                        <td>{{ $resto-> comida }}</td>
                        <td>{{ $resto-> zona }}</td>
                        <td><a class="btn btn-primary" href="{{$resto->id}}"> Reservar </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <br><br>
        <div class="col text-center">

    <a href="{{url('/autorizar')}}" class="btn btn-warning btn-lg col text-center"> Chequear autorizados </a>

        </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tablaPrincipal').DataTable({
                "lengthMenu": [[10,25,-1], [10,25, "All"]],
                responsive: "true",
                dom: 'Bfrtilp',       
                buttons:[ 
			        {
			            extend:    'excelHtml5',
			    	    text:      '<i class="fas fa-file-excel">Exportar Excel</i> ',
			    	    titleAttr: 'Exportar a Excel',
			    	    className: 'btn btn-success'
			        },
			        {
			    	    extend:    'pdfHtml5',
			    	    text:      '<i class="fas fa-file-pdf">Exportar PDF</i> ',
			    	    titleAttr: 'Exportar a PDF',
			    	    className: 'btn btn-danger'
			        },
			        {
			    	    extend:    'print',
			    	    text:      '<i class="fa fa-print">Imprimir</i> ',
			    	    titleAttr: 'Imprimir',
			    	    className: 'btn btn-info'
			        },
		        ]
            });
            } );


    </script>
@endsection
--}} 