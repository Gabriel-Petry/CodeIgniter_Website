  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="/Lojinha/public/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Página Do Usuário</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Conta</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="/lojinha/index.php/Login/logar" method="POST" class="aa-login-form">
                  <label for="">Nome de usuário ou endereço de email<span>*</span></label>
                   <input type="text" placeholder="Nome de usuário ou email">
                   <label for="">Senha<span>*</span></label>
                    <input type="password" placeholder="Senha">
                    <button type="submit" class="aa-browse-btn">Login</button>
                    
                    <?php if($this->session->flashdata('loginInvalido') == true){ ?>
                    <p style="colo: red">Usuário e/ou senha inválido</p>
                    <?php } ?>
                    
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Lembrar meus dados </label>
                    <p class="aa-lost-password"><a href="#">Esqueceu sua senha?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Registrar</h4>
                 <form action="" class="aa-login-form">
                    <label for="">Nome de usuário ou endereço de email<span>*</span></label>
                    <input type="text" placeholder="Nome de usuário ou email">
                    <label for="">Senha<span>*</span></label>
                    <input type="password" placeholder="Senha">
                    <button type="submit" class="aa-browse-btn">Registrar</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->