<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Exercicios </title>
    <link rel="stylesheet" href="/assets/exercicios.css">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body class="exercicio">
   <header class="cabeçalho">
        <h1>Curso PHP</h1>
        <h2>Vizualição do Exercicios</h2>
   </header>
     <nav class="navegacao">
                <a href="#" class="verde">Sem formatação</a>
                <a href="index.php" class="vermelho">Voltar</a>
     </nav>
   <main class="principal">
        <div class="conteudo">
        <?php
          include("{$_GET['dir']}/{$_GET['file']}.php");
          ?>
              
        </div>
   </main>
   
   <footer class="rodape">
        COD3R & ALUNOS <?= date('Y');?>
   </footer>
</body>
</html>