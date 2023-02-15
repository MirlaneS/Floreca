<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Preenchimento Facial: Como funciona?</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="/pages/imagens/facial-1.jpg" class="firt__photo" alt="" >           
                <img src="/pages/imagens/facial-2.jpg" class="second__photo" alt="" >           
                <img src="/pages/imagens/facial-3.jpg" class="third__photo" alt="" >   
            </div>

            <div class="col-md-6 col-sm facial__filler">
                <h4>Pra que servem os preenchedores faciais?</h4>
                    <p>O preenchimento facial é um procedimento para embelezamento e reestruturação da pele envelhecida. O ácido hialurônico é uma das substâncias mais utilizadas e mais seguras
                    para esta finalidade. Ele preenche rugas e sulcos, melhora o contorno facial, pode também ser utilizado para aumentar o volume dos lábios. Este procedimento não tem 
                    finalidade somente ESTÉTICA e sim corretora funcional devido a perda de sustentação  devido às alterações relacionadas ao envelhecimento. </p>

                <h4>Quais os resultados que devo esperar?</h4>
                    <p>Os resultados são associados à devolução de volumes faciais perdidos, correção do contorno de face, mandíbula, queixo e têmporas, redução ou eliminação de sulcos
                    de expressão e marcas associadas ao envelhecimento ou mesmo para o embelezamento e hidratação dos lábios</p>
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

    .facial__filler {
       margin-top: 130px;
       margin-bottom: 130px;
     
    }

</style>

