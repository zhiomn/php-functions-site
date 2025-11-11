<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <a href="/" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a>
    <a href="/portfolio.php" class="<?php echo ($currentPage == 'portfolio.php') ? 'active' : ''; ?>">Portfólio</a>
    <a href="/sobre.php" class="<?php echo ($currentPage == 'sobre.php') ? 'active' : ''; ?>">Sobre Nós</a>
    <a href="/ferramentas.php" class="<?php echo ($currentPage == 'ferramentas.php') ? 'active' : ''; ?>">Ferramentas</a>
    <a href="/contato.php" class="<?php echo ($currentPage == 'contato.php') ? 'active' : ''; ?>">Contato</a>
</nav>
