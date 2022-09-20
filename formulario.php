<?php
    if(isset($_POST['submit'])) {
        include('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $whatsapp = $_POST['whatsapp'];
        $linkedin = $_POST['linkedin'];
        $result = $conexao->query("INSERT INTO usuarios(nome,email,telefone,whatsapp,linkedin) VALUES ('$nome','$email','$telefone','$whatsapp','$linkedin')");
        header('location: pagina.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <title>Cadastro</title>

    </head>

    <body>

        <form action="formulario.php" method="post"> 

            <fieldset class="field-set-titulo">
                <div>
                    <h1 id="titulo"> Cadastro do Candidato</h1>
                </div>
                <div>
                    <p id="subtitulo">Complete suas informações</p>
                </div>
            </fieldset>
            <br>
            <fieldset class="hover">
                <div class="campo">
                    <label for="nome completo">Nome Completo</label>
                    <div class="label-float">
                        <input type="text" name="nome" placeholder="Sua resposta"/>
                    </div>
                </div>   
            </fieldset>
            <br>

            <fieldset>
                <div class="campo">
                    <label for="e-mail">E-mail*</label>
                    <div class="label-float">
                        <input type="text" name="email" placeholder="Sua resposta" required/>
                    </div>    
                </div>
            </fieldset>
            <br>
            
            <fieldset>
                <div class="campo">
                    <label for="telefone">Telefone (DDD + telefone)</label>
                    <div class="label-float">
                        <input type="text" name="telefone" placeholder="Sua resposta"/>
                    </div>
                </div>
            </fieldset>
            <br>

            <fieldset>
                <div class="campo">
                    <label for="link do seu whatsapp">Link do seu whatsApp</label>
                    <div class="label-float">
                        <input type="text" name="whatsapp" placeholder="Sua resposta"/>
                    </div>         
                </div>  
            </fieldset>
            <br>

            <fieldset>
                <div class="campo">
                    <label for="link do seu linkedin">Link do seu Linkedin</label>
                    <div class="label-float">
                        <input type="text" name="linkedin" placeholder="Sua resposta"/>
                    </div>
                </div>
            </fieldset>
            <br>

            <button class="botao" type="submit" name="submit" onsubmit="">Próxima</button>

        </form>
        <br>

        <span class="material-icons">feedback</span></a>
        <br>

        <footer>
            <p>Este formulário foi criado por 
                <strong>Mírian Santos</strong> &copy; 2022
            </p>
        </footer>

       
    </body>

</html>