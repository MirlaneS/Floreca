<?php
    require_once './head.php';
    require_once './menu.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center title__peeling">
                <h2>Peeling Corporal</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="/pages/imagens/peeling-1.jpg" class="firt__photo" alt="" >           
                <img src="/pages/imagens/peeling-2.png" class="second__photo" alt="" >           
                <img src="/pages/imagens/peeling-3.jpg" class="third__photo" alt="" >   
            </div>

            <div class="col-md-6 col-sm body__peeling">
                <h4>O que é?</h4>
                    <p>O peeling é um procedimento com foco na esfoliação da pele. Com isso, ele renova e ajuda a regenerar a pele das regiões tratadas. Geralmente, ele é feito no colo,
                    braços, mãos, costas, axilas e virilhas, dependendo das necessidades individuais de cada paciente. Sua realização é indicada para clarear manchas e áreas 
                    escurecidas da pele, reduzir a oleosidade corporal e suavizar a aparência de cicatrizes. Da mesma forma, ele também pode ser indicado para tratar estrias, 
                    melhorar a textura da pele e reduzir a aspereza.</p>

                <h4>Como funciona?</h4>
                    <p>O peeling é feito sempre após a avaliação inicial da dermatologista ou de um cirurgião plástico, sendo também realizado por esses profissionais. 
                    Além de conhecer melhor as particularidades da sua pele, o encontro inicial tem também o objetivo de entender o que você espera do procedimento. Afinal, as substâncias mais 
                    recomendadas podem variar de acordo com as suas expectativas. Portanto, é muito importante que você aproveite o encontro inicial para tirar todas as suas dúvidas.</p>
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

    .title__peeling{
        margin-top: 30px;
    }

    .firt__photo {
        margin-bottom: 200px;
    }

    .second__photo {
        margin-top: 300px;
    }

    .third__photo {
        margin-bottom: 200px;
    }

    .body__peeling {
       margin-top: 130px;
       margin-bottom: 100px;
       padding: 20px;
     
    }

</style>
