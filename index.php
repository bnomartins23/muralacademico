<?php
    include('dao/connect.php');
?>
    <!doctype html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device width, initial scale=1">
        <title>Mural do Acadêmico</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <style>
            .container {
                margin:10px auto;
                border-radius: 10px;
                border: 1px solid gray;
                background-image: url('img/mural.jpg');
                background-repeat: repeat;
            
            }

            .card-deck {
                column-count: 3;
                
            }

            .header-title {
                margin: 30px;
                padding: 20px;
                text-shadow: 0.15em 0.15em 0.15em black;
            }

            .header-filter {
                margin:auto;
            }

            .filtro {
              margin: 10px;
            }

            .main {
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .card {
                margin-top: 10px;
            }

       

            
        </style>

      </head>
      <body>


        <div class="container">
            <div class="row header-title">
                <h1 style="text-align: center;font-weight: bold"><span style="color: gold; text-shadow: 1px black;">Mural do</span>
                  <span style="color: silver; text-shadow: 1px black"> Acadêmico  </span>
                  <span style="color: gold; text-shadow: 1px black"> UNIASSELVI</span></h1>
                <h3 style="text-align: center; font-weight: bold;color: white;text-shadow: 1px black" id="subtitulo"></h3>
            </div>

            <div class="row header-filter">
                <div class="col-md-8">

                </div>
                <div class="col-md-4">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cadastrar
                  </button>                  
                  
                  <button type="button" class="btn btn-warning btn-sm btn-filtro">
                    Filtros
                  </button>

                  <div class="filtro">
                      <label class="form-group-text text-white">Curso: </label>
                      <input type="text" name="curso" id="curso" list="datacurso" class="form-control" placeholder="Qual curso?"/>
                      <datalist id="datacurso">
                          <option value="administracao">Administração</option>
                          <option value="administracao publica">Administração Pública</option>
                          <option value="agrocomputacao">Agrocomputação</option>
                          <option value="agronomia">Agronomia</option>
                          <option value="analise e desenvolvimento de sistemas">Análise e Desenvolvimento de Sistemas</option>
                          <option value="andragogia">Andragogia</option>
                          <option value="antropologia">Antropologia</option>
                          <option value="arquitetura e urbanismo">Arquitetura e Urbanismo</option>
                          <option value="arquivologia">Arquivologia</option>
                          <option value="artes visuais">Artes Visuais</option>
                          <option value="biblioteconomia">Biblioteconomia</option>
                          <option value="big data e inteligencia analitica">Big Data e Inteligência Analítica</option>
                          <option value="biomedicina">Biomedicina</option>
                          <option value="ciencia politica">Ciência Política</option>
                          <option value="ciencias biologicas">Ciências Biológicas</option>
                          <option value="ciencias contabeis">Ciências Contábeis</option>
                          <option value="ciencias da religiao">Ciências da Religião</option>
                          <option value="ciencias economicas">Ciências Econômicas</option>
                          <option value="comercio exterior">Comércio Exterior</option>
                          <option value="comunicacao institucional">Comunicação Institucional</option>
                          <option value="construcao de edificios">Construção de Edifícios</option>
                          <option value="controle de obras">Controle de Obras</option><option value="danca">Dança</option>
                          <option value="defesa medica hospitalar">Defesa Médica Hospitalar</option>
                          <option value="design de interiores">Design de Interiores</option>
                          <option value="design de moda">Design de Moda</option>
                          <option value="design de produto">Design de Produto</option>
                          <option value="despachante documentalista">Despachante Documentalista</option>
                          <option value="educacao especial">Educação Especial</option>
                          <option value="educacao fisica bachar">Educação Física Bachar.</option>
                          <option value="educacao fisica licenc">Educação Física Licenc.</option>
                          <option value="educador social">Educador Social</option>
                          <option value="enfermagem">Enfermagem</option>
                          <option value="engenharia ambiental e sanitaria">Engenharia Ambiental e Sanitária</option>
                          <option value="engenharia civil">Engenharia Civil</option>
                          <option value="engenharia da producao">Engenharia da Produção</option>
                          <option value="engenharia de software">Engenharia de Software</option>
                          <option value="engenharia eletrica">Engenharia Elétrica</option>
                          <option value="engenharia mecanica">Engenharia Mecânica</option>
                          <option value="estetica e imagem pessoal">Estética e Imagem Pessoal</option><option value="eventos">Eventos</option>
                          <option value="farmacia">Farmácia</option>
                          <option value="filosofia">Filosofia</option>
                          <option value="fisica">Física</option>
                          <option value="fisioterapia">Fisioterapia</option>
                          <option value="formacao pedagogica em artes visuais">Formação Pedagógica em Artes Visuais</option>
                          <option value="formacao pedagogica em ciencias biologicas">Formação Pedagógica em Ciências Biológicas</option>
                          <option value="formacao pedagogica em educacao especial">Formação Pedagógica em Educação Especial</option>
                          <option value="formacao pedagogica em educacao fisica">Formação Pedagógica em Educação Física</option>
                          <option value="formacao pedagogica em filosofia">Formação Pedagógica em Filosofia</option>
                          <option value="formacao pedagogica em fisica">Formação Pedagógica em Física</option>
                          <option value="formacao pedagogica em geografia">Formação Pedagógica em Geografia</option>
                          <option value="formacao pedagogica em historia">Formação Pedagógica em História</option>
                          <option value="formacao pedagogica em informatica">Formação Pedagógica em Informática</option>
                          <option value="formacao pedagogica em letras espanhol">Formação Pedagógica em Letras   Espanhol</option>
                          <option value="formacao pedagogica em letras ingles">Formação Pedagógica em Letras   Inglês</option>
                          <option value="formacao pedagogica em letras libras">Formação Pedagógica em Letras Libras</option>
                          <option value="formacao pedagogica em letrasportugues">Formação Pedagógica em Letras Português</option>
                          <option value="formacao pedagogica em matematica">Formação Pedagógica em Matemática</option>
                          <option value="formacao pedagogica em pedagogia">Formação Pedagógica em Pedagogia</option>
                          <option value="formacao pedagogica em quimica">Formação Pedagógica em Química</option>
                          <option value="formacao pedagogica em sociologia">Formação Pedagógica em Sociologia</option>
                          <option value="gastronomia">Gastronomia</option>
                          <option value="geografia">Geografia</option><option value="geoprocessamento">Geoprocessamento</option>
                          <option value="gerontologia">Gerontologia</option>
                          <option value="gestao ambiental">Gestão Ambiental</option>
                          <option value="gestao comercial">Gestão Comercial</option>
                          <option value="gestao da inovacao">Gestão da Inovação</option>
                          <option value="gestao da qualidade">Gestão da Qualidade</option>
                          <option value="gestao das relacoes eletronicas ">Gestão das Relações Eletrônicas </option>
                          <option value="gestao da tecnologia da informacao">Gestão da Tecnologia da Informação</option>
                          <option value="gestao da tecnologia educacional">Gestão da Tecnologia Educacional</option>
                          <option value="gestao de cidades inteligentes e sustentaveis">Gestão de Cidades Inteligentes e Sustentáveis</option>
                          <option value="gestao de inventario extrajudicial">Gestão de Inventário Extrajudicial</option>
                          <option value="gestao de negocios">Gestão de Negócios</option>
                          <option value="gestao de processos educacionais">Gestão de Processos Educacionais</option>
                          <option value="gestao de producao industrial">Gestão de Produção Industrial</option>
                          <option value="gestao de recursos humanos">Gestão de Recursos Humanos</option>
                          <option value="gestao de residuos de saude">Gestão de Resíduos de Saúde</option>
                          <option value="gestao de saude publica">Gestão de Saúde Pública</option>
                          <option value="gestao de seguranca privada">Gestão de Segurança Privada</option>
                          <option value="gestao de servicos juridicos">Gestão de Serviços Jurídicos</option>
                          <option value="gestao de servicos juridicos notariais e de registro">Gestão de Serviços Jurídicos, Notariais e de Registro</option>
                          <option value="gestao de startups">Gestão de Startups</option>
                          <option value="gestao de turismo">Gestão de Turismo</option>
                          <option value="gestao do agronegocio">Gestão do Agronegócio</option>
                          <option value="gestao e empreendedorismo">Gestão e Empreendedorismo</option>
                          <option value="gestao financeira">Gestão Financeira</option>
                          <option value="gestao hospitalar">Gestão Hospitalar</option>
                          <option value="gestao portuaria">Gestão Portuária</option>
                          <option value="gestao publica">Gestão Pública</option>
                          <option value="historia">História</option>
                          <option value="hotelaria">Hotelaria</option>
                          <option value="informatica">Informática</option>
                          <option value="investigacao forense e pericia criminal">Investigação Forense e Perícia Criminal</option>
                          <option value="jogos digitais">Jogos Digitais</option>
                          <option value="jornalismo digital">Jornalismo Digital</option>
                          <option value="letras alemao">Letras   Alemão</option>
                          <option value="letras espanhol">Letras   Espanhol</option><option value="letras ingles">Letras   Inglês</option>
                          <option value="letras libras bacharelado">Letras   Libras (Bacharelado)</option>
                          <option value="letras libras licenciatura">Letras   Libras (Licenciatura)</option>
                          <option value="letras portugues">Letras   Português</option>
                          <option value="logistica">Logística</option>
                          <option value="marketing">Marketing</option>
                          <option value="marketing digital">Marketing Digital</option>
                          <option value="matematica">Matemática</option>
                          <option value="mediacao">Mediação</option>
                          <option value="midias digitais">Mídias Digitais</option>
                          <option value="museologia">Museologia</option>
                          <option value="musica">Música</option>
                          <option value="negocios digitais">Negócios Digitais</option><option value="negocios imobiliarios">Negócios Imobiliários</option>
                          <option value="nutricao">Nutrição</option>
                          <option value="pedagogia">Pedagogia</option>
                          <option value="podologia">Podologia</option>
                          <option value="processos gerenciais">Processos Gerenciais</option>
                          <option value="producao cultural">Produção Cultural</option>
                          <option value="producao de cerveja">Produção de Cerveja</option>
                          <option value="psicomotricidade">Psicomotricidade</option>
                          <option value="psicopedagogia">Psicopedagogia</option>
                          <option value="publicidade e propaganda">Publicidade e Propaganda</option>
                          <option value="qualidade de vida na contemporaneidade">Qualidade de Vida na Contemporaneidade</option>
                          <option value="quimica">Química</option>
                          <option value="radiologia">Radiologia</option>
                          <option value="relacoes internacionais">Relações Internacionais</option>
                          <option value="relacoes publicas">Relações Públicas</option>
                          <option value="saneamento ambiental">Saneamento Ambiental</option>
                          <option value="secretariado">Secretariado</option>
                          <option value="segunda licenciatura em artes visuais">Segunda Licenciatura em Artes Visuais</option>
                          <option value="segunda licenciatura em ciencias biologicas">Segunda Licenciatura em Ciências Biológicas</option>
                          <option value="segunda licenciatura em educacao especial">Segunda Licenciatura em Educação Especial</option>
                          <option value="segunda licenciatura em educacao fisica">Segunda Licenciatura em Educação Física</option>
                          <option value="segunda licenciatura em filosofia">Segunda Licenciatura em Filosofia</option>
                          <option value="segunda licenciatura em fisica">Segunda Licenciatura em Física</option>
                          <option value="segunda licenciatura em geografia">Segunda Licenciatura em Geografia</option>
                          <option value="segunda licenciatura em historia">Segunda Licenciatura em História</option>
                          <option value="segunda licenciatura em informatica">Segunda Licenciatura em Informática</option>
                          <option value="segunda licenciatura em letras espanhol">Segunda Licenciatura em Letras   Espanhol</option>
                          <option value="segunda licenciatura em letras ingles">Segunda Licenciatura em Letras   Inglês</option>
                          <option value="segunda licenciatura em letras libras">Segunda Licenciatura em Letras Libras</option>
                          <option value="segunda licenciatura em letrasportugues">Segunda Licenciatura em Letras Português</option>
                          <option value="segunda licenciatura em matematica">Segunda Licenciatura em Matemática</option>
                          <option value="segunda licenciatura em pedagogia">Segunda Licenciatura em Pedagogia</option>
                          <option value="segunda licenciatura em quimica">Segunda Licenciatura em Química</option>
                          <option value="segunda licenciatura em sociologia">Segunda Licenciatura em Sociologia</option>
                          <option value="seguranca da informacao">Segurança da Informação</option><option value="seguranca no trabalho">Segurança no Trabalho</option>
                          <option value="seguranca publica">Segurança Pública</option><option value="servico social">Serviço Social</option>
                          <option value="servicos penais">Serviços Penais</option><option value="servicos previdenciarios">Serviços Previdenciários</option>
                          <option value="sistemas da informacao">Sistemas da Informação</option><option value="sistemas para internet">Sistemas para Internet</option>
                          <option value="sociologia">Sociologia</option><option value="teatro">Teatro</option>
                          <option value="tecnicas de acompanhamento terapeutico">Técnicas de Acompanhamento Terapêutico</option>
                          <option value="tecnicas de telemedicina">Técnicas de Telemedicina</option>
                          <option value="tecnologia em energias renovaveis">Tecnologia em Energias Renováveis</option>
                          <option value="tecnologia em instrumentacao cirurgica">Tecnologia em Instrumentação Cirúrgica</option>
                          <option value="teologia">Teologia</option>
                          <option value="terapia ocupacional">Terapia Ocupacional</option>
                          <option value="terapias integrativas e complementares">Terapias Integrativas e Complementares</option>
                          <option value="traducao">Tradução</option>
                          <option value="varejo digital">Varejo Digital</option>
                      </datalist>
                      
                    </br>

                      <input type="submit" name="descricao" id="descricao" class="form-control btn btn-primary btn-sm" value="Filtrar"/>

                    </div>


                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Mural do Acadêmico - UNIASSELVI</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="dao/add.php">
                        <div class="modal-body">
                            <div class="form-group"> 
                              <label class="form-group-text">Iframe: </label>
                              <textarea name="video" class="form-control" rows="4" required="true"></textarea>
                              
                              <div class="row">
                                <div class="col-md-6">
                                  <label class="form-group-text">Titulo: </label>
                                  <input type="text" name="titulo" class="form-control" pattern="[a-z]+" required="true"/>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-group-text">Categoria: </label>
                                  <input type="text" name="categoria" class="form-control" required="true"/>
                                </div>
                              </div>

                              <label class="form-group-text">Acadêmico(s): </label>
                              <input type="text" name="academico" class="form-control" required="true"/>

                              <div class="row">
                                <div class="col-md-6">
                                  <label class="form-group-text">Curso: </label>
                                  <input type="text" name="curso" list="datacurso" class="form-control" required="true"/>
                                </div>
                                <div class="col-md-6">
                                  <label class="form-group-text">Período: </label>
                                  <input type="text" name="periodo" class="form-control" required="true"/>
                                </div>
                              </div>

                              
                              
                              <label class="form-group-text">Descrição: </label>
                              <input type="text" name="descricao" class="form-control" required="true"/>
                              
                              
                              
                              
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>



                </div>
                
            </div>

            <div class="main">
                <div class="aside">

                    <?php 
                        if(isset($_GET['msg'])){
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-info text-strong">
                                     <?= $_GET['msg'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    
                    
                    <?php
                        
                        $apresentacoes = mysqli_query($query, "SELECT * FROM mural order by data desc");
                        $cont = 0;
                        foreach($apresentacoes as $apresentacao){
                            
                            if($cont == 0){
                                ?>
                                    <div class="card-group">
                                <?php
                            }
                            ?>
                            <div class="card" style="max-width: 20rem;">
                                <?= $apresentacao['video'] ?>
                                <div class="card-body">
                                <span style="float:right">
                                
                                

                                
                                <button class="btn btn-sm btn-outline-primary btn_gostei" data-id1="<?= $apresentacao['id'] ?>" id="btn_gostei_<?= $apresentacao['id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                    </svg>   

                                    <i class="bi bi-emoji-smile"><?= $apresentacao['gostei'] ?></i>
                                    
                                </button>
                            </span>

                                <h5 class="card-title"><?= $apresentacao['titulo'] ?></h5>
                                <p class="card-text"><?= $apresentacao['categoria'] ?></p>
                                <p class="card-text"><?= $apresentacao['descricao'] ?></p>
                                <p class="card-text">
                                    <small class="text-muted">Acadêmico: <?= $apresentacao['academico'] ?> </br> <?= $apresentacao['curso'] ?> (<?php echo date('d-m-Y h:i:s', strtotime($apresentacao['data'])) ?>) </small></p>
                              </div>
                            </div>
                            
                            <?php
                            $cont++;
                            if($cont > 3){
                                $cont = 0;
                                ?>
                                </div>
                                
                                <?php
                            }
                        }

                        ?>


                      </div>

                </div>
                <div class="search"></div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384 u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


        <script>
          $('.filtro').toggle()
          $(".btn-filtro").click(()=>{
            $(".filtro").toggle()
          })

          $("#curso").blur(()=>{
            const curso = $("#curso").val()
            curso && $("#subtitulo").html(`CURSO: ${curso.toUpperCase()}`)
          })

          $(document).on("click", ".btn_gostei", function(){
            let id = $(this).data("id1")
            $.post("dao/like.php", {id: id, gostei: 'upd'}, function(data, status){
                if(status == 'success'){
                    $("#btn_gostei_"+id).html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                    </svg> <i class="bi bi-emoji-smile">${data}</i>`);
                }
            });
        })
        </script>
      </body>
    </html>
    
    
