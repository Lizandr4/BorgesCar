<?php
   if(isset($_POST['submit'])){


    include_once('conexao.php');

    $nome = $_POST('nome');
    $email = $_POST('email');
    $numero = $_POST('numero');
    $mensagem = $_POST('mensagem');

    $result = mysqli_query($conexao, "INSERT INTO cliente(nome,email,numero,mensagem) VALUES('$nome','$email','$numero','$mensagem')");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BorgesCar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header  -->
    <header class="header">
        <div id="menu-btn" class="fa-solid fa-bars"></div>
        <a href="#" class="logo"><img src="content/logo.png" alt="" width="200px" height="60px"></a>
        
        <!-- navbar -->
        <nav class="navbar">
            <a href="#home">Início</a>
            <a href="#featured">Veículos</a>
            <a href="#services">Serviços</a>
            <a href="#contact">Contato</a>
        </nav>
        
        <!-- botão login -->
        <div id="login-btn">
            <button type="button" class="btn">login</button>
            <i class="fa-regular fa-user"></i>
        </div>
    </header>
    
    <!-- login -->
    <div class="login-form-container">
        <span class="fa-solid fa-xmark" id="close-login-btn"></span>
        <form action="">
            <h3>login</h3>
            <input type="email" placeholder="email" class="box">
            <input type="senha" placeholder="senha" class="box">
            <p>Esqueceu sua senha? <a href="#">Clique aqui</a></p>
            <input type="submit" value="Entrar" class="btn">
            <p>ou entre com</p>
            <div class="buttons">
                <a href="#" class="btn">google</a>
                <a href="#" class="btn">facebook</a>
            </div>
            <p>não tem uma conta? <a href="#">crie</a></p>
        </form>
    </div>
    
    <!-- home -->
    <section class="home" id="home">
        <h1 class="home-parallax">Encontre seu
        <br>
        Carro ideal  <br><a href="#featured" class="btn home-parallax" >Explorar</a></h1>
        <img class="home-parallax" src="https://secure-developments.com/commonwealth/brasil/colorizer_onix/images/colorizer/onix-3-4-frente-vermelho-carmim.png" alt="">
    </section>
    
    <!-- carros populares-->
    <section class="vehical" id="vehicles">
        <h1 class="heading">Carros <span>populares</span></h1>
        <div class="slider">
            <div class="wrapper">
                <div class="fa-solid fa-angle-left preNext" id="preBtn"></div>
                <div class="wraper-box">
                    <div class="box active" id="car-img1">
                        <img src="https://secure-developments.com/commonwealth/brasil/Colorizer_Equinox/images/colorizer/equinox-branco-summit-3-4-frente.png" alt="">
                        <div class="content">
                            <h3>Equinox</h3>
                            <div class="price"><span>R$ 200.990,00</span></div>
                            <p>1.5 2023</p>
                            <a href="#contact" class="btn">tenho interesse</a>
                        </div>
                    </div>
                    <div class="box" id="car-img2">
                        <img src="https://media.toyota.com.ar/6f63054e-6600-41dd-aa77-b85199661ca4.png" alt="">
                        <div class="content">
                            <h3>Corolla</h3>
                            <div class="price"><span>R$ 148.290,00</span></div>
                            <p>2.0 GLi CVT 2023</p>
                            <a href="#contact" class="btn">tenho interesse</a>
                        </div>
                    </div>
                    <div class="box" id="car-img3">
                        <img src="https://secure-developments.com/commonwealth/brasil/colorizer_cruze/images/colorizer/frente-preto-ouro-negro.png" alt="">
                        <div class="content">
                            <h3>Cruze</h3>
                            <div class="price"><span>R$ 164.690,00</span></div>
                            <p>1.4 2023</p>
                            <a href="#contact" class="btn">tenho interesse</a>
                        </div>
                    </div>
                    <div class="box" id="car-img4">
                        <img src="https://media.toyota.com.ar/fb119cb4-f6e5-4dae-aa1b-9c2d70044f24.png" alt="">
                        <div class="content">
                            <h3>Yaris Sedan XL</h3>
                            <div class="price"><span>R$ 148.290,00</span></div>
                            <p>1.5 Automático 2023</p>
                            <a href="#contact" class="btn">tenho interesse</a>
                        </div>
                    </div>
                    </div>
                <div class="fa-solid fa-angle-right preNext " id="nextBtn"></div>
            </div>
            
            <div class="activeCircle">
                <div class="fa-regular fa-solid fa-circle" id="forCar-img1"></div>
                <div class="fa-regular fa-circle" id="forCar-img2"></div>
                <div class="fa-regular fa-circle" id="forCar-img3"></div>
                <div class="fa-regular fa-circle" id="forCar-img4"></div>
            </div>
        </div>
    </section>
    
    <!-- serviços -->
    <section class="services" id="services">
        <h1 class="heading">nossos <span>serviços</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fa-solid fa-car"></i>
                <h3>Venda</h3>
                <p>A BorgesCar trabalha com venda e atendimento seguro e de qualidade</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Peças e reparos</h3>
                <p>Vendemos peças e fazemos a manutenção que você precisa no seu carro.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-headset"></i>
                <h3>Suporte</h3>
                <p>Tem algum feedback ou reclamação? Nossa equipe está pronta para te atender.</p>
            </div>
        </div>
    </section>
    
    <!-- catalogo de carros -->
    <section class="featured" id="featured">
        <h1 class="heading"><span>Adquira</span> Já</h1>
        <div class="featured-slider">
            <div class="featured-wrapper">
                <div class="fa-solid fa-angle-left preNext" id="fPreBtn"></div>
                <div class="featured-wrapper2">
                    <div class="featured-wrapper-box">
                        <div class="box active">
                            <img src="https://secure-developments.com/commonwealth/brasil/colorizer_onix/images/colorizer/onix-3-4-frente-vermelho-carmim.png" alt="">
                            <h3>Onix</h3>
                            <div class="price">R$ 84.390,00</div>
                            <p>1.0 2024 Semi Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box">
                            <img src="https://secure-developments.com/commonwealth/brasil/gm_forms/assets/front/images/jellys/612556045dcb6.png" alt="">
                            <h3>S10</h3>
                            <div class="price">R$ 224.420,00</div>
                            <p>2.8 2023 Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box">
                            <img src="https://media.toyota.com.ar/b11eb215-22f9-4e64-a374-3860fa16e1bd.png" alt="">
                            <h3>Corolla Cross</h3>
                            <div class="price">R$ 161.910,00</div>
                            <p>2.0 2024 Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box">
                            <img src="https://media.toyota.com.ar/778b59c8-8b86-405c-8057-4be9bd454f7c.png" alt="">
                            <h3>SW4</h3>
                            <div class="price">R$ 374.690,00</div>
                            <p>2.8 2023 Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box">
                            <img src="https://media.toyota.com.ar/778b59c8-8b86-405c-8057-4be9bd454f7c.png" alt="">
                            <h3>Tracker</h3>
                            <div class="price">R$ 125.690,00</div>
                            <p>2.8 2023 Semi Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box active">
                            <img src="https://secure-developments.com/commonwealth/brasil/colorizer_spin/images/colorizer/azul-eclipse-3-4-frente.png" alt="">
                            <h3>Spin</h3>
                            <div class="price">R$ 100.990,00</div>
                            <p>1.8 2024 Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box">
                            <img src="https://secure-developments.com/commonwealth/brasil/gm_forms/assets/front/images/jellys/612556045dcb6.png" alt="">
                            <h3>Yaris Hatch</h3>
                            <div class="price">R$ 97.990,00</div>
                            <p>1.5 2024 Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                        <div class="box">
                            <img src="https://media.toyota.com.ar/6f63054e-6600-41dd-aa77-b85199661ca4.png" alt="">
                            <div class="content">
                                <h3>Corolla</h3>
                                <div class="price"><span>R$ 148.290,00</span></div>
                                <p>2.0 GLi CVT 2023 Semi Novo</p>
                                <a href="#contact" class="btn">Estou interessado</a>
                            </div>
                        </div>
                        <div class="box">
                            <img src="https://media.toyota.com.ar/778b59c8-8b86-405c-8057-4be9bd454f7c.png" alt="">
                            <h3>Hilux</h3>
                            <div class="price">R$ 240.590,00</div>
                            <p>2.8 Cabine Dupla 2023 Semi Novo</p>
                            <a href="#contact" class="btn">Estou interessado</a>
                        </div>
                    </div>
                </div>
                <div class="fa-solid fa-angle-right preNext" id="fNextBtn"></div>
            </div>

            <div class="fActCircle">
                <div class="fa-regular fa-solid fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
                <div class="fa-regular fa-circle"></div>
            </div>
        </div>
    </section>
    
    <!--contato -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contate</span>-nos</h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15905.45700420259!2d-40.572913663976884!3d-4.706629538809541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x795cc2ff5ae9709%3A0x42e8c7f821e38644!2sNova%20Russas%2C%20CE%2C%2062200-000!5e0!3m2!1spt-BR!2sbr!4v1684970382168!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="conexao.php" method="POST">
                <h3>fale conosco</h3>
                <input type="text" placeholder="nome" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="número" class="box">
                <textarea class="box" cols="30" rows="10" placeholder="mensagem"></textarea>
                <input type="submit" value="enviar" class="btn">
            </form>
        </div>
    </section>
    
    <!-- footer -->
    <section class="footer">
        <div class="footer-box-container">
             <div class="box">
                <h3>Formas de contato</h3>
                <a href="#"><i class="fa-solid fa-phone"></i>+55 88 8175-3012</a>
                <a href="#"><i class="fa-solid fa-envelope"></i> borgescar@gmail.com</a>
            </div>
            <div class="box">
                <h3>Redes sociais</h3>
                <a href="#"><i class="fa-brands fa-whatsapp"></i> whatsapp</a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
            </div>
        </div>
        <div class="copyright">copyright &copy; | Equipe Concessionária - Trabalho de Lab. Web</div>
    </section>
    <script src="https://kit.fontawesome.com/ca9a6c5a17.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
