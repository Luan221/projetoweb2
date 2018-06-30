@extends('layouts.app')

@section('content')

<main>
    <!-- CAROUSEL -->


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner carousel-conteiner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/vestibular-facape.png" height="600px" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/curso_graduacao_computacao.jpg" height="600px" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/suporte1.png" height="600px" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <!-- CARDS -->

    <div class="card-container">
        <div class="c-title">
            <h2>Novidades</h2>
        </div>
        <div class="card-deck">

            <div class="card">
                <img class="card-img-top" src="img/card-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer btn" href="#">
                    <p>Saiba Mais</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/card-2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer btn" href="#">
                    <p>Saiba Mais</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/card-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer btn" href="#">
                    <p>Saiba Mais</p>
                </div>
            </div>
        </div>
        <br>

        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="img/card-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer btn" href="#">
                    <p>Saiba Mais</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/card-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer btn" href="#">
                    <p>Saiba Mais</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/card-2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer btn" href="#">
                    <p>Saiba Mais</p>
                </div>
            </div>
        </div>

    </div>

    <!-- MAP -->

    <div class="local-container espace" >
        <div class="c-title">
            <h2>Fale Conosco</h2>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.286597877553!2d-40.48111618521064!3d-9.396226093266613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x77370608d9f005f%3A0xccd0290482fcdd50!2sFACAPE!5e0!3m2!1spt-BR!2sbr!4v1530120529799" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="phone">
            <br><br><br>
            <h4>Telefone</h4>
            <h6>Central de Informações da Facape</h6>
            <p>99999-9999</p>
            <h6>Coordenação de Computação</h6>
            <p>99999-9999</p>
            <h4>E-mail</h4>
            <p>ex: coordenação.computação@facape.br</p>
        </div>
    </div>

</main>

<div class="footer">
    <div class="social">
        <h4 class="social-item">Encontre-nos em:</h4>
        <a href="http://www.facape.br" target="_blank" class="social-item"><img src="img/facape_logo.png" width="100" height="46" alt=""></a>
        <a href="#" class="social-item"><i class="fab fa-facebook-square"></i></a>
    </div>

    <p class="copyright">
        Copyright &copy; Ciência da Computação - Facape. Todos os direitos reservados.

</div>

@endsection
