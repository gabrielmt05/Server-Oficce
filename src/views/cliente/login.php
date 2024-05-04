<?php
session_start();

try{
    require_once __DIR__ . '/../../config/Helpers.php';
    $index = require_once __DIR__ . '/../../index.php';
}catch(Exception $e){
    die("Problemas com autoload" . $e->getMessage());
}

use App\views\auth\Login;

// Verifica se $_SERVER['HTTP_HOST'] está definido antes de tentar acessá-lo
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'default.example.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processamento do formulário aqui
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    if ($username && $password) {
        $login = new Login($username, $password);

        if ($login->authenticate()) {
            $_SESSION["username"] = $username; // Armazenar o username na sessão
            header("Location: $index"); // Redirecionar para a página do perfil
            exit();
        } else {
            $errorMessage = "Credenciais inválidas. Tente novamente.";
        }
    } else {
        $errorMessage = "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">   
    <link rel="stylesheet" href="../../css/login.css">   
    <title>Login</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Server Office</h1>
    </header>
    <main class="principal">
        <nav class="conteudo">
        <?php if (isset($errorMessage)) : ?>
            <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <div class="formulario">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div id="username">
                    <label for="username">Email</label><br>
                    <input type="text" name="username" required><br>
                </div>
                <div id="password">
                    <label for="password">Senha</label><br>
                    <input type="password" name="password" required><br><br>
                </div>
                <p id="resetPassword"><a>Esqueci a senha</a></p>
                <button type="submit">Entrar</button>
                <section><a href="register.php" id="register">Criar Conta</a></section>
            </form>
        </div>
        </nav>
    </main>
    <footer class="rodape">
    </footer>
</body>
</html>
