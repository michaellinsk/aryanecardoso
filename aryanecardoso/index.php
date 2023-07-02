<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- FONTES DOS TEXTOS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Icons Font -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <link rel="shortcut icon" href="img/MODULOS/APLIC BESE.png" type="image/x-icon">

    <title>Arianne Cardoso</title>

  </head>
  <!--parte principal do pagina. formulário para cadastro-->
  <body>
    <div id="site">

    <header id="inicial">
      <div id="formulario"></div>
      <div id="inscricao">
        <p>CURSO DE MAQUIAGEM BÁSICA</p>
        <p class="destaque">Aryane Cardoso</p>
        <p>INSCREVA-SE JÁ</p>
        <form action="cadastro.php" method="post" id="form-cadastro" >
          <div class="form-grupo">
            <label for="name">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" />
          </div>
          <div class="form-grupo">
            <label for="phone">Telefone</label>
            <input type="text" name="celular" placeholder="Número de Whatsapp" />
          </div>
          <div class="form-grupo">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu melhor e-mail" />
          </div>
          <input type="submit" class="btn" value="Quero me inscrever" />
        </form>
        <div id="msg-cadastro-index"></div>
      </div>
    </header>
<!--parte do sumário da pagina-->
    <div class="sumario">
      <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#principais-beneficios">BENEFÍCIOS</a></li>
          <li><a href="#pai-modulos">MODULOS</a></li>
          <li><a href="#info-cursos">PARA QUEM?</a></li>
          <li><a href="#videos">MODELOS</a></li>
          <li><a href="#location">LOCALIZAÇÃO</a></li>
          <li><a href="#valores-principal">VALOR</a> </li>
          <li><a href="#principal-sobre">SOBRE</a></li>
          <li><a href="#perguntas">PERGUNTAS</a></li>
          <li><a href="#inicial" class="ativo">INSCREVA-SE</a></li>
      </ul>
      <div class="csmq">Curso de Maquiagem</div>
      <i class="bi bi-list abrir" id="bt-menu"></i>
      <i class="bi bi-x-lg fechar" id="bt-menu-fechar"></i>
  </div>
<!--parte do que vai aprender no curso-->
    <section id="principais-beneficios">
        <h2>O QUE VOCÊ VAI APRENDER:</h2>
        <div class="filho-beneficios">
            <div class="beneficios">
              <div class="beneficio">
                <div id="beneficio-1" class="beneficio-img"></div>
                <p>
                  Maquiagens marcantes e criativas para ousar com técnicas simples para usar em festas, baladas ou onde você se sentir bem.          </p>
              </div>
              <div class="beneficio">
                <div id="beneficio-2" class="beneficio-img"></div>
                <p>
                  Maquiagens leves e naturais com técnicas simples e de fácil aprendizado idela para você que é básica ou usar em ambiantes de trabalho.          </p>
              </div>
              <div class="beneficio">
                <div id="beneficio-3" class="beneficio-img"></div>
                <p>
                  Maquiagens neutras com técnicas fáceis que irão realçar a sua beleza, ideal para você que gosta de se maquiar mas não quer algo tão marcado, ideal para casamentos e festas durante o dia.          </p>
              </div>
            </div>
        </div>
    </section>
<!--modulos do curso -->
      <section id="pai-modulos">
        <div id="principal-modulos">
            <div class="mod-titulo">MÓDULOS DO CURSO</div>
            <div class="modulos">
                <div class="modulo">
                   <img src="img/MODULOS/LIMP.png" alt=""> 
                   <p>Limpeza e pré pele</p>
                </div>
                <div class="modulo">
                    <img src="img/MODULOS/APLIC BESE.png" alt=""> 
                    <p>Aplicação de base correção de lanchas e olheiras, iluminação e contorno.</p>
                 </div>
                 <div class="modulo">
                    <img src="img/MODULOS/OLHOS NEUT.png" alt="">
                    <p>Olhos neutros e delineado</p> 
                 </div>
                 <div class="modulo">
                    <img src="img/MODULOS/DEGRADE.png" alt="">
                    <p> Esfumado degradê perfeito </p> 
                 </div>
                 <div class="modulo">
                    <img src="img/MODULOS/PREENCH.png" alt=""> 
                    <p>Preenchimento de sobrancelha e olhos marcantes.</p>
                 </div>
                 <div class="modulo">
                    <img src="img/MODULOS/MATIF.png" alt="">
                    <p>Matificação e finalização da pele</p> 
                 </div>
            </div>
        </div>
      </section>
<!--para quem é esse curso-->
    <section class="inf-curso" id="info-cursos">
        <div class="cursos">
            <article class="inf-1">
                <p>PARA QUEM É O <br><span>CURSO DE MAQUIAGEM ?</span></p>
            </article> 
            <aside class="inf-2" > 
                <ul>
                <li>Para pessoas que querem realçar a beleza natural</li>
                <li>Para o apredizados de tecnicas para melhorar a auto maquiagem.</li>
                <li>Para quem não sabe se auto maquiar mas tem o desejo de aprender</li>
                <li>Para quem ama e sonha aprender técnicas de maquiagem </li>
                </ul> 
            </aside>
        </div>
    </section>
    
    <!--parte dos videos -->    
    <section class="geral" id="videos">
        <div class="text-video">CONFIRA NOSSOS MODELOS</div>
        <div class="principal-videos">
            <div class="videos">
                <div class="video"><video src="VIDEOS/vitoria (1).mp4" controls></video></div>
                <div class="video"><video src="VIDEOS/luiz.mp4" controls></video></div>
                <div class="video"><video src="VIDEOS/helo (1).mp4" controls></video></div>
            </div>
        </div>
    </section>

    <!--local do curso -->
    <section id="location">
        <div class="local">
            <div id="address">
              <i class="bi bi-geo-alt-fill"></i>
              <div id="address-details">
                <p>Rua do evento, 1333</p>
                <p>Bairro</p>
                <p>Abertura: 14h</p>
              </div>
            </div>
            <div id="about-location">
              <h3>Local de destaque</h3>
              <p>
                O evento será realizado em um local prestigiado pelos amantes de
                Design de Interiores, onde teremos exemplos de vários ambientes, tanto
                internos como externos.
              </p>
            </div>
        </div>
    </section>

    <!--valores-->
    <section id="valores-principal">
        <div class="valores">
        
            <h2>OFERTA POR <span>TEMPO LIMITADO</span></h2>

            <div class="principal-valores">
                <h2> 2x de R$25,00</h2>
                <p>No cartão de credito ou R$ 50,00 a vista</p>
                <br><br>
                
            </div>
        
        </div>
        <div class="principal-certificados" >
          <div class="certificados">
            <div class="certificado" >
              <img src="img/CERTIFICADOS/1.png" alt="">
            </div>
            <div class="certificado" >
              <img src="img/CERTIFICADOS/2.png" alt="">
            </div>
            <div class="certificado" >
              <img src="img/CERTIFICADOS/3.png" alt="">
            </div>
          </div>
        </div>
    </section>
  
    <section id="principal-sobre">
        <div class="text-sobre"> 
            <h2> Quem é Aryane Cardoso ?</h2>
            <p>
            Olá, me chamo Aryane Cardoso, sou formada em Arquitetura desde 2019, mas apaixonada por maquiagem uma vida toda. 
            Deixei Arquitetura de lado, não por não gostar, mas a vida é muito curta pra gente não viver de forma mais intensa, a maquiagem tem o poder de me fazer , todas as vezes que entro em contato com ela, mais energizada, é como se eu recebesse uma dose de adrenalina.
            </p>
            <p>
            Foi um lugar no mundo onde me encontrei, onde achei meu mundinho sabe.
            Uma ferramenta que levanta minha auto estima, por dentro primeiro e depois por fora. 
            E hoje a minha missão, é levar esse sentimento para o máximo de pessoas possíveis, porque sei que a maquiagem pode transformar vidas.
            </p>
        </div>
   </section>


    <section class="perguntas-principal" id="perguntas">
        <div class="oportunidade">
            <h3>NÃO PERCA ESSA OPORTUNIDADE INSCREVA-SE JÁ :</h3>
            <a href="#inicial" class="btn">Solicitar Inscrição</a>
        </div>
        <div class="perguntas-frequentes">
            <h2>PERGUNTAS FREQUENTES</h2>
            <ul class="accordion-list">
                <li>
                    <h3>Quantas horas de curso ?</h3>
                    <div class="answer"> O curso tem a duranção de duas horas.</div>
                </li>
                <li>
                    <h3>Os produtos serão forcecidos pela maquiadora  ?</h3>
                    <div class="answer">Sim! Os produtos já estão inclusos no pacote do curso!</div>
                </li>
                <li>
                    <h3>como pode ser a forma de pagamento ?</h3>
                    <div class="answer">Pode ser em Dinheiro em espécie, pix, cartão de crédito e Débito!</div>
                </li>
                <li>
                    <h3>O curso é presencial ou Online ?</h3>
                    <div class="answer">O curso é presencial, as aulas acontecem no studio dentro de sua residência!</div>
                </li>
            </ul>
        </div>
    </section>
    <footer id="footer">
      <h3>ARYANE CARDOSO</h3>
      <p> CURSO DE MAQUIAGEM BÁSICA</p>
      <p>Entre em contato: <a href="mailto:contato@ade10.com.br">ADE10.COM.BR</a></p>
      <p>Ou pelo telefone: <a href="tel:+5581999909999">(81) 99990-9999</a></p>
      <p><a href="adm/painel.php" target="_blank" class="adm">Área do Administrador</a></p>
    </footer>

  </div>
  </body>

  <script src="jquery.js"></script>

  <script src="script.js"></script>

</html>