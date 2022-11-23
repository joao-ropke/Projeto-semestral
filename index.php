<!doctype html>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- CSS only -->
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>ANBET</title>
</head>

<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo">
                <h1>ANBET</h1>
            </div>
            <ul class="navi d-flex align-items-center" style = "">
                <a>
                    <li>Home</li>
                </a>
                <a>
                    <li>Produtos</li>
                </a>
                <a>
                    <li>Sobre nós</li>
                </a>
                <li>
                    <!-- <li>Contatos</li> -->
                    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Produtos
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Produtos1</a></li>
    <li><a class="dropdown-item" href="#"> Produtos2</a></li>
    <li><a class="dropdown-item" href="#">Produtos3</a></li>
    <li><a class="dropdown-item" href="#">Produtos4</a></li>
  </ul>
</div>
</li>     
                <a href = "login">
                    <?php  
                    $nome = "";
                    if($nome != ""){?>
                        <li><?php echo "bem vindo  " . $nome?> </li>
                        <?php } else{ ?>
                    <li>
                        </li>
                    <?php } ?>
                </a>
            </ul>
        </div>
    </div>
    
    <!--inicio slider-->
    <div class="container">
        <div class="carousel">
            <div class="slider">
                <section><img src="https://i0.wp.com/www.portaldodog.com.br/cachorros/wp-content/uploads/2019/11/cao-pequeno-bonito-com-casaco-cinza-sentado-nas-folhas-amarelas-outono_139317-352.jpg?resize=626%2C417&ssl=1"></section>
                <section><img src="https://img.r7.com/images/12-cachorro-flamengo-09102019182931236"></section>
                <section><img src="https://petshopdopatinho.com.br/wp-content/uploads/2020/01/Fases-da-vida-de-um-cachorro.jpg"></section>
                <section><img src="https://www.florence.edu.br/wp-content/uploads/2022/08/Imagem-Materia_Dia-do-Cachorro.png"></section>
            </div>
            <div class="controls">
                <span class="arrow left">
                    <span class="material-symbols-outlined">
                        arrow_back_ios
                    </span>
                </span>
                <span class="arrow right">
                    <span class="material-symbols-outlined">
                        arrow_forward_ios
                    </span>
                </span>
            </div>
        </div>
    </div>
    <!--fim slider-->

    <!--inicio icons-->
    <div class="categorias">
        <div class="icones">
            <div class="categoria-icons" style = "display:flex;">
                <div>
                    <img src="img/materias de construção.webp" height="175px">
                    <h3 class="texto-imagem">materiais de <br>construção</h3>
                </div>
                <div>
                    <img src="img/ferramentas.webp" height="175px">
                    <h3 class="texto-imagem">ferramentas</h3>
                </div>
                <div>
                    <img src="img/cliamtização.webp" height="175px">
                    <h3 class="texto-imagem">climatização</h3>
                </div>
                <div>
                    <img src="img/pisos.webp" height="175px">
                    <h3 class="texto-imagem">pisos</h3>
                </div>
                <div>
                    <img src="img/portas.webp" height="175px">
                    <h3 class="texto-imagem">portas</h3>
                </div>
                <div>
                    <img src="img/torneiras.webp" height="175px">
                    <h3 class="texto-imagem">torneiras</h3>
                </div>
                <div>
                    <img src="img/jardinagem.webp" height="175px">
                    <h3 class="texto-imagem">jardinagem</h3>
                </div>              
            </div>
        </div>
    </div>
    <!--fim icons-->

    <!-- Ofertas -->
    <h4>Novas Ofertas</h4>

    <br>
    <section class="produtos">
        <section class="catalogo">
            <img src="img/porcelanato.webp">
            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
        <section class="catalogo">
            <img src="img/porcelanato.webp">
            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
        <section class="catalogo">
            <img src="img/porcelanato.webp">

            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
    </section>
    <br>
    <section class="produtos">
        <section class="catalogo">
            <img src="img/porcelanato.webp">
            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
        <section class="catalogo">
            <img src="img/porcelanato.webp">
            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
        <section class="catalogo">
            <img src="img/porcelanato.webp">

            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
    </section>
    <br>
    <section class="produtos">
        <section class="catalogo">
            <img src="img/porcelanato.webp">
            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
        <section class="catalogo">
            <img src="img/porcelanato.webp">
            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
        <section class="catalogo">
            <img src="img/porcelanato.webp">

            <div class="contentBx">
                <h3>porcelanato Filetado Branco</h3>
                <h2 class="preço">R$ 79.<small>99</small></h2>
                <a href="#" class="compra">Compre Agora</a>
            </div>
        </section>
    </section>
    <br>
    <!--fim ofertas-->

    <!--footer-->
    <footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <span class="logo_name">ANBET</span>
                </div>
                <div class="media-icons">
                    <a img src="#" href="  https://pt-br.facebook.com/ "><i class="fab fa-facebook-f"></i></a>
                    <a href="  https://www.instagram.com/ "><i class="fab fa-instagram"></i></a>
                    <a  href=" https://www.youtube.com/ "><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Empresa</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">produtos</a></li>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Contatos</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Conta</li>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Minha Conta</a></li>
                    <li><a href="#">Preferências</a></li>
                    <li><a href="#">Compras</a></li>
                </ul>
                <ul class="box input-box">
                    <li class="link_name">Criar sua conta</li>
                    <li><input type="text" placeholder="E-mail"></li>
                    <li><input type="button" value="Criar conta"></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright &#169; 2022 <a>ANBET</a>All rights reserved</span>
                <span class="policy_terms">
                    <a href="#">Privacy policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>