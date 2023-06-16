  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="/Lojinha/public/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Fashion</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">Women</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                <?php foreach($produtos as $produto){ ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="/lojinha/public/img/produtos/<?php echo $produto['idProduto'] ?>-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="/lojinha/index.php/carrinho/adicionar/<?php echo $produto['idProduto']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
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
                        <?php } ?>            
              </ul>
            </div>
		</div>
	  </div>
    </div>
	</div>
  </section>
  <!-- / product category -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->