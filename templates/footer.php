</main>

<footer>
  <p>&copy; 2025 Estúdio Ékkentros. Todos os direitos reservados.</p>
  <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
    <p><a href="/admin/editor.php" style="color: #888;">Painel de Edição</a></p>
  <?php endif; ?>
</footer>
<?php include 'templates/detail-modal.view.php'; ?>

<script type="module" src="/js/main.js"></script>
</body>
</html>
