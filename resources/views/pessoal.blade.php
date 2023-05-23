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

        section .container {
            padding-top: 50px;
        }

        .content h2 {
            margin: 0;
            padding: 0;
            color: rgb(34, 34, 34);
        }

        .content h3 {
            margin: 0;
            padding: 0;
            margin-top: 2px;
            font-size: 17px;
            color: #68686852;
        }

        .content p {
            margin: 0;
            padding: 0;
            margin-top: 15px;
            color: #727272;
            font-size: 20px;
        }

        .col-12 .col-12 {
            padding-top: 50px;
        }

        img {
            width: 100%;
            max-width: 500px;
            height: 100%;
            max-height: 500px;
        }

        
    </style>
    <section id="section">
        <div class="testtt">
            <div class="textt text-center">
                <h1>GS111</h1>
                <h6>TODO PESSOAL QUE REPRESENTA A EMPRESA</h6>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="container">
            <div class="col-12">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content" style="float: right;">
                                <img src=" {{ asset('images/pessoa1.png') }} " alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content" style="float: left; width: 70%;">
                                <h2>Henrique Gimenes</h2>
                                <h3>Sócio Desenvolvedor</h3>
                                <p>Paulo é responsável pelas decisões importantes e administra a equipe. Ea voluptate velit
                                    esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo voluptas
                                    nulla pariatur at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                                    sint occaecati cupiditate non.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content meio" style=" float: right; width: 70%;">
                                <h2>Luiz Eduardo</h2>
                                <h3>Sócio Desenvolvedor</h3>
                                <p>José é o fundador da empresa. Porro quisquam est qui dolorem ipsum quia dolor sit amet
                                    consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et
                                    dolore magnam aliquam quaerat voluptatem ut enim ad minima veniam quis nostrum
                                    exercitationem ullam corporis suscipit laboriosam nisi ut aliquid ex.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content" style="float: left;">
                                <img src=" {{ asset('images/pessoa2.png') }} " alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content" style="float: right;">
                                <img src=" {{ asset('images/pessoa3.png') }} " alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content" style="float: left; width: 70%;">
                                <h2>Gabriel Ferreira</h2>
                                <h3>CEO</h3>
                                <p>Maria começou a trabalhar na empresa há 5 anos. Aperiam eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi nesciunt neque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
