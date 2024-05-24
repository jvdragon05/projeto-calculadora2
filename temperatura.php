<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    <main>
        <div class="div-conteudo">
            <form action="logica/proc.php" method="POST">
                <label>Digite a Temperatura:</label>
                <input type="text" name="inputNum1" placeholder="Digite a Temperatura">
                <select name="selectOperacoes">
                    <option value="toFahrenheit">Celsius para Fahrenheit</option>
                    <option value="toCelsius">Fahrenheit para Celsius</option>
                </select>
                <input id="botao" type="submit" value="Calcular">
                <?php 
                    session_start(); 
                    if(isset($_SESSION["temperatura"])){
                        echo "<p>" . $_SESSION["temperatura"] . "</p>";
                    }else{
                        echo "<p> Sem Valor </p>";
                    }
                ?>
            </form>
            <img src="img/google-play.png">
        </div>
    </main>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>