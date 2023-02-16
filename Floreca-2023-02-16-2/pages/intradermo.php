<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Intradermoterapia</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="/pages/imagens/intra-1.jpg" class="firt__photo" alt="" >           
                <img src="/pages/imagens/intra-2.jpg" class="second__photo" alt="" >           
                <img src="/pages/imagens/intra-3.jpg" class="third__photo" alt="" >   
            </div>

            <div class="col-md-6 col-sm intradermotherapy">
                <h4>intradermoterapia</h4>
                    <p>A intradermoterapia é uma técnica pouco invasiva que consiste na utilização de injeções com medicamentos e vitaminas em locais do corpo a serem tratados. 
                É o biomédico esteta que escolhe o que vai utilizar como medicamento, mas tudo vai depender do objetivo de cada tratamento.</p>

                <h4>Para que a intradermoterapia é utilizada?</h4>
                    <p> É uma técnica utilizada para reduzir a gordura localizada (abdômen, coxas, braços, quadris etc.), diminuir a celulite, amenizar rugas e linhas de expressão e 
                    diminuir a flacidez. </p>

                <h4>Existem contraindicações da intradermoterapia?</h4>
                    <p>Ela é contraindicada para pessoas que têm alergias às substâncias utilizadas ou doenças de pele no local onde será aplicada a técnica; para gestantes, 
                    lactantes, cardíacos e pessoas com doenças crônicas.</p>
            </div>
        </div>
    </div>

    


<?php
    require_once './footer.php';
?>

<style>
    img {
        width: 200px;
        height: 200px;
        margin: 40px;
        /* margin-bottom: 300px; */
        border-radius: 50%;
        border: 2px solid #fff;
    }

    .firt__photo {
        margin-bottom:300px;
    }

    .second__photo {
        margin-top:200px;
    }

    .third__photo {
        margin-bottom:300px;
    }

    .intradermotherapy {
       margin-top: 130px;
       margin-bottom: 130px;
     
    }

</style>
