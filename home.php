<?php

echo $_SESSION['x'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/home.css">
    <title>Help Desk App</title>
</head>
<body>
    <header>
        <h1>Help Desk App</h1>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Soluções</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <h2>Bem-vindo ao Help Desk App</h2>
        <p>Resolva seus problemas de suporte de forma eficaz.</p>
        <a href="#" class="cta-button">Crie um Ticket</a>
    </section>
    
    <section class="features">
        <div class="feature">
            <h3>Atendimento Rápido</h3>
            <p>Nossa equipe está pronta para atender suas solicitações com rapidez e eficiência.</p>
        </div>
        <div class="feature">
            <h3>Base de Conhecimento</h3>
            <p>Explore nossa extensa base de conhecimento para encontrar respostas para suas perguntas comuns.</p>
        </div>
        <div class="feature">
            <h3>Suporte 24/7</h3>
            <p>Estamos disponíveis 24 horas por dia, 7 dias por semana, para atender às suas necessidades de suporte.</p>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2023 Help Desk App. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
