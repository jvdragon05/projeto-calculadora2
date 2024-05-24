<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
    <script src="js/select.js"></script>
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
            <form action="logica/proc.php" method="GET">
                <label id="textoAlteravel">Digite a Medida em Centímetros:</label>
                <input type="text" name="inputNum3" placeholder="Digite a Medida">
                <select name="selectOperacoes" id="meuSelect" onchange="alterarTexto()">
                    <option value="toMT">Centímetros para Metros</option>
                    <option value="toCM">Metros para Centímetros</option>
                    <option value="toKM">Metros para Quilometros</option>
                    <option value="KM_toMT">Quilometros para Metros</option>
                </select>
                <input id="botao" type="submit" value="Calcular">
                <?php
                    session_start(); 
                    if(isset($_SESSION["medida"])){
                        echo "<p>" . $_SESSION["medida"] . "</p>";
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