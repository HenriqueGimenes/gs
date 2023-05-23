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
            font-size: 60px;
        }

        .col-6{
            padding-top: 50px;
        }
    </style>
    <section id="section">
        <div class="testtt">
            <div class="textt text-center">
                <h1>GS111</h1>
                <h6>ALWAYS INSIDE YOUR COMPANY</h6>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <ion-icon name="navigate-outline"></ion-icon>
                            </div>
                            <div class="col-10">
                                <div class="title-card-gs">
                                    <h3>Primeiro Serviço</h3>
                                </div>
                                <div class="subtitle-card-gs">
                                    <h5>TOTAM REM APERIAM</h5>
                                </div>
                                <div class="content-card-gs">
                                    <p>Aqui é onde o seu texto começa. Basta clicar e começar a escrever. Porro quisquam est
                                        qui dolorem ipsum quia dolor sit amet consectetur adipisci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <ion-icon name="share-social-outline"></ion-icon>
                            </div>
                            <div class="col-10">
                                <div class="title-card-gs">
                                    <h3>Segundo Serviço</h3>
                                </div>
                                <div class="subtitle-card-gs">
                                    <h5>ILLUM QUI DOLOREM</h5>
                                </div>
                                <div class="content-card-gs">
                                    <p>Aqui é onde o seu texto começa. Basta clicar e começar a escrever. Porro quisquam est
                                        qui dolorem ipsum quia dolor sit amet consectetur adipisci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                            <div class="col-10">
                                <div class="title-card-gs">
                                    <h3>Terceiro Serviço</h3>
                                </div>
                                <div class="subtitle-card-gs">
                                    <h5>LAUDANTIUM TOTAM REM</h5>
                                </div>
                                <div class="content-card-gs">
                                    <p>Aqui é onde o seu texto começa. Basta clicar e começar a escrever. Porro quisquam est
                                        qui dolorem ipsum quia dolor sit amet consectetur adipisci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <ion-icon name="layers-outline"></ion-icon>
                            </div>
                            <div class="col-10">
                                <div class="title-card-gs">
                                    <h3>Quarto Serviço</h3>
                                </div>
                                <div class="subtitle-card-gs">
                                    <h5>INVENTORE VERITATIS ET QUASI</h5>
                                </div>
                                <div class="content-card-gs">
                                    <p>Aqui é onde o seu texto começa. Basta clicar e começar a escrever. Porro quisquam est
                                        qui dolorem ipsum quia dolor sit amet consectetur adipisci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
