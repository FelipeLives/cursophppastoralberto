<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <title>CURSO PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulo 01</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=basico&file=ola">Ola php</a></li>
                    <li><a href="exercicio.php?dir=basico&file=html">Integracao HTML</a></li>
                    <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                    <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                    
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Modulo 02</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>                   
                    </ul>
                </div>
                
            </nav>
        </div>
    </main>
    <footer class="rodape">
        3B1 Novotec <?= date('Y') ?>
    </footer>
    <!-- <nav>teste</nav>
    <div>teste</div>
    <span>teste</span> -->
</body>
</html>