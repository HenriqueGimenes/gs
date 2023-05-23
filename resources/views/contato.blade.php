@extends('home.master')
@section('content')
    <style>
        #section {
            background-image: url("{{ asset('images/oficial2.png') }}");
            background-position: center;
            background-size: cover;
            height: 400px;
            width: 100vw;
            color: white;
        }

        .textt h1 {
            padding-top: 150px;
            font-size: 70px;
            font-family: 'Times New Roman', Times, serif, Cochin, Georgia, Times, 'Times New Roman', serif, 'Times New Roman', Times, serif, Helvetica, sans-serif;
            font-weight: bold;
        }

        .textt h6 {
            font-size: 21px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif, Tahoma, Geneva, Verdana, sans-serif, 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        ion-icon {
            font-size: 35px;
            margin-right: 20px;
        }

        .col{
            margin-top: 25px;
        }

        section .container {
            padding-top: 50px;
        }

        iframe {
            width: 97%;
            height: 300px;
        }
    </style>
    <section id="section">
        <div class="testtt">
            <div class="textt text-center">
                <h1>Contate-nos</h1>
                <h6>LOCALIZAÇÃO E CONTATO</h6>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="map" style="float: center;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.9629695587864!2d-43.167320984504876!3d-22.951590845242574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99803f9a6f313f%3A0x6519cd96aa3a490f!2sAv.%20Pasteur%2C%20520%20-%20Urca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022290-255!5e0!3m2!1spt-BR!2sbr!4v1680190281175!5m2!1spt-BR!2sbr"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="col-12">
                            <div class="col" style="padding-top:0; margin-top: 0;">
                                <div class="row">
                                    <div class="loc-map">
                                        <ion-icon name="location-outline"></ion-icon>
                                    </div>
                                    <div class="loc-content">
                                        <div class="loc-title">
                                            <h4>GS111</h4>
                                        </div>
                                        <div class="loc-desc">
                                            Avenida Pasteur 520, Rio de Janeiro
                                            04719-001
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="loc-map">
                                        <ion-icon name="information-circle-outline"></ion-icon>
                                    </div>
                                    <div class="loc-content">
                                        <div class="loc-title">
                                            <h4>Horário de Trabalho</h4>
                                        </div>
                                        <div class="loc-desc">
                                            Segunda à Sexta: 09h - 18h
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="loc-map">
                                        <ion-icon name="call-outline"></ion-icon>
                                    </div>
                                    <div class="loc-content">
                                        <div class="loc -title">
                                            <h4>11 3456 7890</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="loc-map">
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </div>
                                    <div class="loc-content">
                                        <div class="loc-title">
                                            <h4>example@email.com</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
