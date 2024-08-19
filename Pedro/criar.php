<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/criar.css">
    <link rel="stylesheet" href="../MyCrowdfunding/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fim font -->
    <title>Criar</title>
</head>
<body>
    
<header>

<h1><a href="../MyCrowdfunding/index.html">GOFUNDING</a></h1>

<ul>
    <li><a href="">Apoiar</a></li>
    <li><a href="">Criar Campanha</a></li>
    <li><a href="">Como funciona</a></li>
    <li><a href="">Registar /</a><a href=""> Entrar</a></li>

</ul>

<div class="sidebar">
    <ul>
        <li><a href=""><img src="base-icon-xc-search-16.png" alt=""></a></li>
        <li><a href=""><img src="sidebar-4-16.png" alt=""></a></li>
    </ul>
</div>
</header>
 
  <main>
    <section class="pai">
        <div class="img" >
            <span>Criar campanha</span>
        </div>
    </section>

    <section class="founds">
        <h1>Angariar fundos para:</h1>
            <div class="itens">
                <div class="item1" id="item1">
                    <h2>Um projeto</h2>
                    <p class="subtitle">
                        Escolhe esta opção se tens um projeto que queres financiar.
                    </p>
                    <hr>
                    <p class="txt">
                        Se atingires (ou ultrapassares) o objetivo dentro do prazo, transferimos-te os apoios angariados.
                    </p>
                    <p class="txt">
                        Se não atingires o objetivo dentro do prazo devolvemos os apoios aos teus apoiantes, livre de custos.
                    </p>
                </div>
                <div class="item2" id="item2" >
                    <h2>Uma causa</h2>
                    <p class="subtitle">
                        Escolhe esta opção se queres angariar fundos para uma causa solidária ou sem fins lucrativos.
                    </p>
                    <hr>
                    <p class="txt">
                        Cada apoiante escolhe se o seu apoio é condicional ou incondicional.
                    </p>
                    <p class="txt">
                        Se atingires (ou ultrapassares) o objetivo dentro do prazo, transferimos-te os apoios angariados.
                    </p>
                    <p class="txt">
                        Se não atingires o objetivo dentro do prazo, transferimos-te os apoios incondicionais. Os apoios condicionais são devolvidos, livre de custos.
    
    
                    </p>
                </div>
            </div>
    
    </section>

     <section class="aboutYou">
        <div class="container">
            <legend>Sobre ti</legend>

            <!-- <style>
                .content{
                    display:flex;
                    justify-content:space-between;
                }
            </style> -->
            <div class="content label">
                <div class="form-group">
                    <p class="lab">Nome:</p>
                    <div class="form-group">
                        <!-- <span >Nome:</span> -->
                    <input style="width:300px; padding:0 10px 0 10px;" type="text" name="nome">
                    <p class="help">Primeiro e último nome</p>
                   </div>

                </div>
                <div class="form-group">
                    <p class="lab1">E-mail:</p>
                    <div class="form-group">
                        <!-- <span >E-mail:</span> -->
                        <input style="width:300px; padding:0 10px 0 10px;" type="email" name="email" id="email">
                        <p class="help">Endereço de email para associar à campanha
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <p class="lab2">Telefone:</p>
                    <div class="form-group">
                        <!-- <span >Telefone:</span> -->
                        <input  style="width:300px;padding:0 10px 0 10px;" type="tel" name="telefone" id="">
                        <p class="help">Exclusivamente para a nossa equipa. Não será divulgado.</p>
                        
                    </div>
                </div>
            </div>




            <style>
                .btn:hover{
                    background-color:#fff;
                }
            </style>

           
        </div>
    </section>
    
    <style>
        .botoes{
            left:40px;
            position: relative;
        }

        .botoes button{
            background-color:blue;
            padding:10px 30px;
            color:#fff;
            border-radius:20px;
            border:1px solid blue;
            transition:.3s ease-in-out;
            cursor:pointer;
            &:hover{
                background-color:#fff;
                color:blue;
            }
        }
    </style>

    <div class="botoes">

        <button class="about_bn">
            Vamos Começar!
        </button>

    </div>
     
    
  </main>

    <div class="main_footer">
        <div class="footer-basic">
            <footer>
                <div class="social">

                    <a href=""><img width="50" height="50" src="https://img.icons8.com/ios/50/0000ff/linkedin.png" alt="linkedin"/></a>
                    <a href=""><img width="50" height="50" src="https://img.icons8.com/ios/50/0000ff/gmail-new.png" alt="gmail-new"/></a>
                    <a href=""><img width="50" height="50" src="https://img.icons8.com/ios/50/0000ff/instagram-new--v1.png" alt="instagram-new--v1"/></a>
                    <a href=""><img width="50" height="50" src="https://img.icons8.com/ios/50/0000ff/whatsapp--v1.png" alt="whatsapp--v1"/></a>               </div>
                
                    <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Apoiar</a></li>
                    <li class="list-inline-item"><a href="#">|Criar campanha </a></li>
                    <li class="list-inline-item"><a href="#">|Como funciona</a></li>
                    
                </ul>
                <p class="copyright">MUNDO DAS TECNLOGIAS © 2024</p>
            </footer>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>