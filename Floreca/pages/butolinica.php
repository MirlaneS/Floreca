<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Toxina Botulínica: Como funciona?</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="/pages/imagens/botunia-1.jpg" class="firt__photo" alt="mulher recebendo tratamento de injeção" >           
                <img src="/pages/imagens/botunia-2.jpg" class="second__photo" alt="homem recebendo tratamento de injeção" >           
                <img src="/pages/imagens/botunia-3.jpg" class="third__photo" alt="mulher recebendo tratamento de injeção" >   
            </div>

            <div class="col-md-6 col-sm botulinum__toxin">
                <h4>O que é toxina botulínica?</h4>
                    <p>A toxina botulínica é uma proteína produzida pela bactéria Clostridium botulinum. Quando aplicada a um músculo específico impede a passagem do impulso que orienta
                    suas fibras, causando o seu relaxamento. Sua ação de dá por meio do bloqueio da liberação de acetilcolina, substância responsável pela contração muscular e pela excreção
                    das glândulas salivar e sudoríparas. Sua introdução na clínica ocorreu ainda durante a década de 80. De lá para cá, suas indicações tornam-se cada vez mais amplas. </p>

                <h4>Como funciona</h4>
                    <p>O tratamento consiste na aplicação de pequenas doses da toxina botulínica através de injeções em pontos específicos do corpo, na maioria dos casos da face. 
                    A quantidade de proteína utilizada depende muito dos pontos escolhidos e dos objetivos do paciente, sempre em acordo com recomendações médicas. Os resultados devem ser os 
                    mais naturais possíveis, por isso é tão importante levar em conta o que recomenda o especialista. São realizadas aplicações superficiais por meio de uma agulha pequena e 
                    fina, gerando pouca ou nenhuma dor no indivíduo tratado. Geralmente não há necessidade de anestesia, nem repouso. A toxina botulínica age de maneira seletiva 
                    sobre o terminal nervoso colinérgico, impedindo a liberação de acetilcolina. Por outro lado, a proteína não ultrapassa a barreira cerebral, produzindo efeito exclusivamente
                    local. Além disso, não se liga às fibras nervosas da região pós-sináptica. Sua aplicação leva aproximadamente 30 minutos e os efeitos começam a aparecer 48 horas após
                    a aplicação e duram de 4 a 6 meses, sendo necessária uma nova sessão. </p>
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

    .botulinum__toxin {
       margin-top: 130px;
       margin-bottom: 130px;
     
    }

    .radio__frequency__content {
        float: right;
    }

</style>