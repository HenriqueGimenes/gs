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

        .box {
            text-align: left
        }

        .boxint {
            width: 600px;
            color: #727272;
            font-size: 23px;
            margin-top: 70px;
            align-items: left;
        }
        h1 i strong{
            color: black
        }
    </style>
    <section id="section">
        <div class="testtt">
            <div class="textt text-center">
                <h1>Sobre nós</h1>
                <h6>TUDO SOBRE A NOSSA EMPRESA</h6>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="box d-flex justify-content-center">
            <div class="boxint">
                Sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab. <br><br>
            Aqui é onde o seu texto começa. Basta clicar e começar a escrever. Molestias excepturi sint occaecati cupiditate
            non
            provident similique sunt in culpa qui officia deserunt mollitia. <br><br>
            Pariatur at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
            deleniti
            atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique sunt
            in
            culpa qui officia deserunt mollitia animi id est laborum et dolorum fuga et harum quidem.<br><br>
            Pariatur at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
            deleniti.
            <br><br>
            <h1><i><strong>GS111</strong></i></h1>
            </div>
        </div>
    </section>
@endsection
