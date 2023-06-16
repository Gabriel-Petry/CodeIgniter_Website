  <!-- / menu -->
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="/Lojinha/public/img/fashion/1.png" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Página do Carrinho</h2>
        <ol class="breadcrumb">
          <li><a href="/lojinha/index.php/Inicial/index">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Produto</th>
                        <th>Quantity</th>
                        <th></th>
                        <th>Price</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->cart->contents() as $items) { ?>
                          <form action="<?php echo base_url(); ?>index.php/Carrinho/atualizar" method="post">
                            <input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
                              <tr>
                              <td><a class="remove" href="<?php echo base_url(); ?>index.php/Carrinho/excluir/<?php echo $items['rowid']; ?>"><fa class="fa fa-close"></fa></a></td>
                              <td><a href="#"><img src="/lojinha/public/img/produtos/<?php echo $items['id'] ?>-1.png" alt="polo shirt img"></a></td>
                              <td><a class="aa-cart-title" href="#"><?php echo $items['name']; ?></a></td>
                              <td><input type="text" name="qty" value="<?php echo $items['qty']; ?>"></td>
                              <td><input type="submit" value="Atualizar"></td>
                              <td><?php echo $items['price']; ?></td>
                              <td><?php echo $items['subtotal']; ?></td>
                              </tr>
                          </form>
                        <?php } ?>
                      </tbody>
                  </table>
                </div>
             
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Total do Carrinho</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Total</th>
                     <td><?php echo $this->cart->total(); ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="#" class="aa-cart-view-btn">Finalizar a compra</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>