<?php
    if(isset($_POST['submit'])) {
        include('config.php');
        $habilidades = $_POST['habilidades'];
        $profissional = $_POST['profissional'];
        $numero = $_POST['numero'];
        $devweb = $_POST['devweb'];
        $cargo = $_POST['cargo'];
        $principal = $_POST['principal'];
        $tecnologia1 = $_POST['tecnologia1'];
        $tecnologia2 = $_POST['tecnologia2'];
        $tecnologia3 = $_POST['tecnologia3'];
        $tecnologia4 = $_POST['tecnologia4'];
        $tecnologia5 = $_POST['tecnologia5'];
        $tecnologia6 = $_POST['tecnologia6'];
        $tecnologia7 = $_POST['tecnologia7'];
        $tecnologia8 = $_POST['tecnologia8'];
        $tecnologia9 = $_POST['tecnologia9'];
        $tecnologia10 = $_POST['tecnologia10'];
        $tecnologia11 = $_POST['tecnologia11'];
        $tecnologia12 = $_POST['tecnologia12'];
        $tecnologia13 = $_POST['tecnologia13'];
        $tecnologia14 = $_POST['tecnologia14'];
        $tecnologia15 = $_POST['tecnologia15'];
        $tecnologia16 = $_POST['tecnologia16'];
        $tecnologia17 = $_POST['tecnologia17'];
        $tecnologia18 = $_POST['tecnologia18'];
        $senioridade = $_POST['senioridade'];    
        $linkedin = $_POST['linkedin'];
        $experiencia = $_POST['experiencia'];
        $sql = "INSERT INTO cadastro(habilidades,profissional,numero,devweb,cargo,principal,tecnologia1,tecnologia2,tecnologia3,tecnologia4,tecnologia5,tecnologia6,tecnologia7,tecnologia8,tecnologia9,tecnologia10,tecnologia11,tecnologia12,tecnologia13,tecnologia14,tecnologia15,tecnologia16,tecnologia17,tecnologia18,senioridade,linkedin,experiencia) VALUES ('$habilidades','$profissional','$numero','$devweb','$cargo','$prinipal','$tecnologia1','$tecnologia2','$tecnologia3','$tecnologia4','$tecnologia5','$tecnologia6','$tecnologia7','$tecnologia8','$tecnologia9','$tecnologia10','$tecnologia11','$tecnologia12','$tecnologia13','$tecnologia14','$tecnologia15','$tecnologia16','$tecnologia17','$tecnologia18','$senioridade','$linkedin','$experiencia')";
        $result = $conexao->query($sql) or die($mysqli->error);
        echo $sql;
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">

    <title>Habilidades</title>

</head>

<body>

    <form action="pagina.php" method="post">

        <fieldset class="titulo-principal">
            <div>
                <h1 id="titulo">Vamos conhecer suas habilidades técnicas 😊</h1>
            </div>
        </fieldset>

        <fieldset class="field-set-abaixo-titulo">
        
            <div class="div-titulo-campo">
                <div class="div-label">
                    <label>Você tem faculdade ou curso técnico nas áreas da tecnologia da informação?</label>
                </div>
                <br>
                <div class="div-label">
                    <label>
                        <input type="radio" name="habilidades" id="sim" value="sim"> Sim
                    </label>
                </div>
                <div class="div-label"> 
                    <label>
                        <input type="radio" name="habilidades" id="nao" value="nao"> Não
                    </label>
                </div>
            </div>
        </fieldset>
        <br>

        <fieldset class="fieldset">
            <div class="campo">
                <div  class="div-label">
                    <label>Você é profissional da área de:</label>
                </div>
                <br>
            
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="dados"> Dados
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="design"> Design
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="seguranca"> Segurança
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="engenharia"> Engenharia
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="desenvolvimento"> Deselvolvimento
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="infraestrutura"> Infraestrutura
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="manutencao e suporte"> Manutenção e Suporte
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="profissional" value="gestao de projetos"> Gestão de projetos
                    </label>
                </div>
            </div>
        </fieldset>
        <br>
      
        <fieldset>
            <div class="grupo">
                
                <div>
                    <label>Quantos anos de experência você tem na área?</label>
                </div>

                <div class="div-radio">
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="1"/> 1
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="2"/> 2
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="3"/> 3
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="4"> 4
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="5"> 5
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="6"> 6
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="7"> 7
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="8"> 8
                        </label> 
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="9"> 9
                        </label>
                    </div>
                    <div class="div-radio-2">
                        <label>
                            <input type="radio" name="numero" value="10"> 10
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <br>

        <fieldset>
            <div class="campo">
                <div class="div-titulo-campo">
                    Na área de desenvolvimento você é:
                </div>
                <br>
                <div class="div-label">
                    <label>
                        <input type="radio" name="devweb" value="frontend"> Frontend
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="devweb" value="backend"> Backend
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="devweb" value="fullstack"> Fullstack
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="devweb" value="design"> Design
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="devweb" value="requisitos"> Requisitos
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="devweb" value="testes"> Testes
                    </label>
                </div>
        </fieldset>
        <br>

        <fieldset>
            <div class="campo">
                <div class="div-titulo-campo">
                    <label>Na área de gestão de projetos você é:</label>
                </div>
                <br>
                <div class="div-label">
                    <label>
                        <input type="radio" name="cargo" value="team leader/tech lead"> Team Leader/Tech lead
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="cargo" value="po_product owner"> PO - Product owner
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="cargo" value="scrum master"> Scrum Master
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="cargo" value="it manager"> IT Manager
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="cargo" value="it project management"> IT Project Management
                    </label>
                </div>
            </div>
        </fieldset>
        <br>

        <fieldset>
            <div class="campo">
                <div class="div-titulo-campo">
                    <label>Qual a <strong>principal</strong> tecnologia que você desenvolve? (escolher apenas 1)</label>
                </div>
                <br>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="react"> React
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="vue.js"> Vue.Js
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="angular"> Angular
                    </label>
                </div>
                <div class="div-label"> 
                    <label>
                        <input type="radio" name="principal" value="python"> Python
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="java"> Java
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="javascript"> Javascript
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="typescript"> TypeScript
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="php"> PHP
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="ruby"> Ruby
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="rails"> Rails
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="c"> C
                    </label>
                </div>
                <div class="div-label">    
                    <label>
                        <input type="radio" name="principal" value="c#"> C#
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="c++"> C++
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="node.js"> Node.js
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value=".net"> .NET
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="reactjs"> ReactJS
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="react native"> React Native
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="principal" value="ui/ux design"> UI/UX design
                    </label>
                </div>
            </div>
        </fieldset>
        <br>

        <fieldset class="fieldset">
            <div id="check">
                <div class="div-titulo-campo">
                    <label>Quais tecnologias <strong>complementares</strong> você desenvolve? (marcar até 4 no máximo)</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia1" name="tecnologia1" value="React">
                    <label for="tecnologia1"> React</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia2" name="tecnologia2" value="Vue.Js">
                    <label for="tecnologia2"> Vue.Js</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia3" name="tecnologia3" value="Angular">
                    <label for="tecnologia3"> Angular</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia4" name="tecnologia4" value="Python">
                    <label for="tecnologia4"> Python</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia5" name="tecnologia5" value="Java">
                    <label for="tecnologia5"> Java</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia6" name="tecnologia6" value="Javascript">
                    <label for="tecnologia6"> Javascript</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="TypeScript">
                    <label for="tecnologia7"> TypeScript</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia8" name="tecnologia8" value="PHP">
                    <label for="tecnologia8">PHP</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia9" name="tecnologia9" value="Ruby">
                    <label for="tecnologia9">Ruby</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia10" name="tecnologia10" value="Rails">
                    <label for="tecnologia10">Rails</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia11" name="tecnologia11" value="C">
                    <label for="tecnologia11">C</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia12" name="tecnologia12" value="C#">
                    <label for="tecnologia12">C#</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia13" name="tecnologia13" value="C++">
                    <label for="tecnologia13">C++</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia14" name="tecnologia14" value="Node.js">
                    <label for="tecnologia14">Node.js</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia15" name="tecnologia15" value="NET">
                    <label for="tecnologia15">NET</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia16" name="tecnologia16" value="ReactJS">
                    <label for="tecnologia16">ReactJS</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia17" name="tecnologia17" value="React Native">
                    <label for="tecnologia17">React Native</label>
                </div>
                <div class="div-label">
                    <input type="checkbox" id="tecnologia18" name="tecnologia18" value="UI/UX design">
                    <label for="tecnologia18">UI/UX design</label> 
                </div>
            </div>
        </fieldset>
        <br>
    
        <fieldset class="fieldset">
            <div>
                <div class="div-titulo-campo">
                    <label>Qual seu nível de senioridade?</label>
                </div>
                <br>
                <div class="div-label">
                    <label>
                        <input type="radio" name="senioridade" value="junior (ate 4 anos)"> Júnior (até 4 anos)
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="senioridade" value="pleno (entre 4 a 7 anos)"> Pleno (entre 4 a 7 anos)
                    </label>
                </div>
                <div class="div-label">
                    <label>
                        <input type="radio" name="senioridade" value="senior (a partir de 7 anos)"> Sênior (a partir de 7 anos)
                    </label>
                </div>
            </div>
        </fieldset>
        <br>

        <fieldset>
            <div class="campo">
                <label for="link do seu linkedin">Coloque o link do seu currículo em PDF (link público do drive)</label>
                <div class="label-float">
                    <input type="text" name="linkedin" placeholder="Sua resposta"/>
                </div>
            </div>
        </fieldset>
        <br>  

        <div class="div-titulo-experiencia">
            <label for="experiencia"><strong>Conte me mais sobre suas experiências:</strong></label><br><br>
            <textarea rows="8" style="width: 31em" id="experiencia" name="experiencia"></textarea>
        </div>
        
        <button class="botao" type="button" onsubmit="voltar">Voltar</button> 
        <button name="submit" class="botao" type="submit" onsubmit="enviar">Enviar</button> 

    </form>
    <br>
    
    <span class="material-icons">feedback</span>
    
    <br>

    <footer>
        <p>Este formulário foi criado por 
            <strong>Mírian Santos</strong> &copy; 2022
        </p>
    </footer>
    
</body>

</html>