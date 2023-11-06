<?php
session_start();

if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true) {
    $autenticado = "true";
} else {
    $autenticado = "false";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="notlogged" style="display: none;">
        <header class="margem">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
            </div>
            <div class="header-links">
                <a href="register.php">Registrar</a>
                <a href="login.php">Login</a>
            </div>
        </header>
    </div>
    <div id="logged" style="display: none;">
        <header class="margem">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
            </div>
            <div class="header-links">
                <a href="user.php"><?php echo $_SESSION['username'] ?></a>
                <a href="logout.php">Sair</a>
            </div>
        </header>
    </div>
    <hr class="margem">
    <div class="header-secundario">
        <div class="margem">
            <div class="modalidades">
                <a href="verificar_login.php?destino=desenvolvedor.php">
                    <img src="img/modalidade1.png" alt="DEV">
                    <h3>Desenvolvedor</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=servico_casa.php">
                    <img src="img/modalidade2.png" alt="marido de aluguel">
                    <h3>Serviços <br> para a Casa</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=assistencia.php">
                    <img src="img/modalidade3.png" alt="assistencia">
                    <h3>Assistencia <br> Tecnica</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=autps.php">
                    <img src="img/modalidade4.png" alt="autos">
                    <h3>Autos</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=Reformas.php">
                    <img src="img/modalidade5.png" alt="reforma">
                    <h3>Reformas e <br> Montagem de Moveis</h3>
                </a>
            </div>
        </div>
    </div>
    </div>
    <hr class="margem">
    <div class="conteudo conteudo-centralizado">
        <h2>Diga suas Experiencias</h2>
        <p>Aqui você poderá colocar suas qualificaçoes. <br> Assim acharemos serviços especialmente para você</p>

        <form method="post" id="languageForm" onsubmit="return validateForm()">
            <label for="workers_experience">Sua Experiencia</label>
            <select name="workers_experience">
                <option value="Iniciante">Iniciante</option>
                <option value="Mediano">Mediano</option>
                <option value="Profissional">Profissional</option>
            </select><br>

            <label for="workers_caracteristicas">Quais Serviços Você realiza ?</label>
            <br>
            <input type="checkbox" name="languages[]" id="JavaScript" value="Babá">
            <label for="JavaScript">Babá</label>
            <br>
            <input type="checkbox" name="languages[]" id="Python" value="Cozinheira">
            <label for="Python">Cozinheira</label>
            <br>
            <input type="checkbox" name="languages[]" id="C#" value="Diarista">
            <label for="C#">Diarista</label>
            <br>
            <input type="checkbox" name="languages[]" id="Java" value="Entregador">
            <label for="Java">Entregador</label>
            <br>
            <input type="checkbox" name="languages[]" id="PHP" value="Lavadeira">
            <label for="PHP">Lavadeira</label>
            <br>
            <input type="checkbox" name="languages[]" id="Ruby" value="Lavagem de Cortinas, Persianas e Tapetes">
            <label for="Ruby">Lavagem de Cortinas, Persianas e Tapetes</label>
            <br>
            <input type="checkbox" name="languages[]" id="Swift" value="Limpeza de Piscina">
            <label for="Swift">Limpeza de Piscina</label>
            <br>
            <input type="checkbox" name="languages[]" id="C++" value="Passadeira">
            <label for="C++">Passadeira</label>
            <br>
            <input type="checkbox" name="languages[]" id="TypeScript" value="Passeador de Cães">
            <label for="TypeScript">Passeador de Cães</label>
            <br>
            <input type="checkbox" name="languages[]" id="SQL" value="Pet Care">
            <label for="SQL">Pet Care</label>
            <br>

            <label for="trabalhos_passados">Seus Trabalhos Passados</label>
            <input type="text" name="works" required><br>

            <input type="submit" value="Registrar">
        </form>
    </div>
    <footer class="rodape">
        <div class="margem">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
            </div>
            <div class="footer-links">
                <a href="about_us.php">Sobre Nós</a>
                <a href="use_terms.php">Termos de Uso</a>
            </div>
            <div class="recrutamento">
                <h3>Você é um prestador <br> de serviço ?</h3>
                <a href="register.php">Cadastre-se</a>
            </div>
        </div>
    </footer>
    <div class="footer-secundario">
        <p>Criado em 2023, Equipe Home Helpers | CST Análise e Desemvolvimento de Sistemas</p>
    </div>
</body>

</html>

<script>
    // Inicie a sessão (pode ser PHP para verificar a autenticação)
    var usuarioLogado = <?php echo $autenticado; ?>; // Suponha que o usuário não está logado

    if (usuarioLogado == null) {
        var usuarioLogado = false;
    }
    // Verifique o estado de autenticação (pode ser PHP)
    // Defina a variável 'usuarioLogado' como verdadeira se o usuário estiver logado

    if (usuarioLogado) {
        document.getElementById('logged').style.display = 'block';
    } else {
        document.getElementById('notlogged').style.display = 'block';
    }

    function validateForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"][name="languages[]"]');
        var checked = false;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                checked = true;
                break;
            }
        }

        if (!checked) {
            alert("Selecione pelo menos uma linguagem de programação.");
            return false;
        }

        return true;
    }
</script>

<?php
// Verifica se o formulário foi enviado
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $workers_key = $_SESSION['username'];
    $experience = $_POST["workers_experience"];
    $languages = isset($_POST["languages"]) ? implode(", ", $_POST["languages"]) : "Nenhuma linguagem selecionada";
    $type = "ServiçoCasa";
    $works = $_POST["works"];



    // Prepara a consulta SQL para inserir os dados no banco
    $sql = "INSERT INTO workers_atributes (workers_key, experiencia, tipo_trabalho, caracteristicas, trabalhos_passado) VALUES (?, ?, ?, ?, ?)";

    // Prepara a declaração
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $workers_key, $experience, $languages, $type, $works);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso no banco de dados.";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>