
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
         <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="/lojinha/public/img/slider/1.png" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq>Algumas promoções</span>                
                <h2 data-seq>Computadores</h2>                
                <p data-seq>Os melhores computadores pelo melhor preço.</p>
                <a data-seq href="/lojinha/index.php/Inicial/categoria/computadores" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AGORA</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="/lojinha/public/img/slider/2.png" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Algumas promoções</span>                
                <h2 data-seq>Celulares</h2>                
                <p data-seq>Celulares de ótima qualidade e baterias duradouras.</p>
                <a data-seq href="/lojinha/index.php/Inicial/categoria/celulares" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AGORA</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="/lojinha/public/img/slider/3.png" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Salve até 50%</span>                
                <h2 data-seq>Fones de Ouvido</h2>                
                <p data-seq>Fones originais com o melhor preço do mercado.</p>
                <a data-seq href="/lojinha/index.php/Inicial/categoria/fones" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AGORA</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="/lojinha/public/img/slider/4.png" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <h2 data-seq>Camêras Exclusivas</h2>                
                <p data-seq>Camêras usadas para filmagens e fotos com a melhor qualidade.</p>
                <a data-seq href="/lojinha/index.php/Inicial/categoria/cameras" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AGORA</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="/lojinha/public/img/slider/5.png" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Salve até 25%</span>                
                <h2 data-seq>Melhor coleção de relógios</h2>                
                <p data-seq>Relógios modernos e de últimas gerações.</p>
                <a data-seq href="/lojinha/index.php/Inicial/categoria/relogios" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AGORA</a>
              </div>
            </li>                   
          </ul>
        <!-- slider navigation btn -->
		<!--
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
		-->
      </div>
    </div>
  </section>
  <!-- / slider -->
  
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
				  <br /><br />
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <?php foreach($produtos as $produto){ ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="/lojinha/index.php/produto/detalhe/<?php echo $produto['idProduto'];?>"><img src="/lojinha/public/img/produtos/<?php echo $produto['idProduto'] ?>-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="/lojinha/index.php/carrinho/adicionar/<?php echo $produto['idProduto']; ?>"><span class="fa fa-shopping-cart"></span>Adicionar ao carrinho</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo $produto['nome'] ?></a></h4>
                              <?php if($produto['preco_promo'] != null) { ?>
                              <span class="aa-product-price"><?php echo $produto['preco_promo']; ?></span>
                              <span class="aa-product-price"><del><?php echo $produto['preco']; ?></del></span>
                              <?php } else{ ?>
                                <span class="aa-product-price"><?php echo $produto['preco'] ?></span>
                                <?php } ?>
                            </figcaption>
                          </figure>                        
                        </li> 
                        <?php }  ?>         
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->

  
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>Frete Grátis</h4>
                <P>Entregamos de graça para todo o Brasil.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>Garantia de 30 dias</h4>
                <P>Caso aconteça algo com seu produto, use sua garantia.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>Suporte 24/7</h4>
                <P>Estamos disponíveis em qualquer momento, buscando manter nossos clientes felizes.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Subscribe section -->