@extends('layout')
@section('title', 'Contacto')
@section('content')
    
<!-- breadcrumb start  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner d-flex justify-content-between">
                    <h2 class="page-title">CONTÁCTANOS</h2>
                    <ul class="page-list">
                        <li><a href="/Home">Home</a></li>
                        <li><a href="/Contacto">Contácto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end  -->

    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Santiago+Chile&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
    </div>

    <!-- contact area start  -->
    <div class="contact-info margin-top-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>PARA CUALQUIER DUDA O CONSULTA CONTÁCTANOS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-box">
                        <div class="icon">
                            <i class="icon-call-header"></i>
                        </div>
                        <a href="tel:+56987016735">+56 9 8701 6735</a><br>
                        <span>Móvil</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-box">
                        <div class="icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <a href="#">amartecrea@gmail.com</a><br>
                        <span>Email</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <span>
                            <a> Santiago, CHILE </a><br> Dirección
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end  -->

    <!-- contact form start  -->
    <div class="contact-form text-center padding-top-80 padding-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Nombre*">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="phone" placeholder="Teléfono*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email*">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="topic" placeholder="Tema">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" rows="8" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-contact">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form end  -->

    
    
    @endsection