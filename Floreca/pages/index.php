<?php
    require_once 'head.php';
    require_once 'menu.php';

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./imagens/carrossel-1.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./imagens/carrossel-2.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./imagens/carrossel-3.jpg" alt="Terceiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./imagens/carrossel-4.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

    <!-- CONTEÚDO -->

      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12 ">
            <h2>Conhece o Floreça?</h2>
            <h6>algum subtitulo aqui!!</h6>
          </div>
        </div>
      </div>

<!-- *************** SEGUNDO CONTEÚDO ***************** -->

      <div class="container">
        <div class="row carousel">
            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/dog.webp" alt="imagem de um cachorrinho">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolorem repellat libero molestiae ab laudantium cupiditate voluptates dicta consequuntur. Perferendis quis omnis libero nemo mollitia. Recusandae quia cumque quisquam cupiditate!</p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/dog.webp" alt="imagem de um cachorrinho">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolorem repellat libero molestiae ab laudantium cupiditate voluptates dicta consequuntur. Perferendis quis omnis libero nemo mollitia. Recusandae quia cumque quisquam cupiditate!</p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/dog.webp" alt="imagem de um cachorrinho">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolorem repellat libero molestiae ab laudantium cupiditate voluptates dicta consequuntur. Perferendis quis omnis libero nemo mollitia. Recusandae quia cumque quisquam cupiditate!</p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/dog.webp" alt="imagem de um cachorrinho">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolorem repellat libero molestiae ab laudantium cupiditate voluptates dicta consequuntur. Perferendis quis omnis libero nemo mollitia. Recusandae quia cumque quisquam cupiditate!</p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

        </div>
      </div>

<!-- **************************** MENSAGEM DE AGENDAMENTO *******************************-->
  
    <form class="scheduling__form">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1 class="appointment__form__title">AGENDE SUA VISITA</h1>
            </div>
          </div>
        </div>

            <div class="container  ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="form-group">
                    <label for="nome">Nome e sobrenome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Seu nome e sobrenome">    
                  </div>
                </div> 
              </div>
              
              <div class="row">
                <div class="col-md-7 ">
                    <div class="form-group">
                        <label for="telefone">WhatsApp</label>
                        <input type="number" class="form-control" name="telefone" onkeypress="$(this).mask('(00)00000-0000')">
                    </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="nome@email.com">                   
                  </div>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-7 ">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Assunto</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
              </div>
           

              <div class="col-md-12 text-center">
                <button type="button" class="button__message">AGENDAR VISITA</button>
              </div>
          </div>
    </form>

<?php
    require_once 'footer.php';
?>