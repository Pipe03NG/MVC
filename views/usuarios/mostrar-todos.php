<h1>listado de usuarios </h1>

<?php while ($usuario=$todos_los_usuarios->fetch_object()):?>

    <?= $usuario->nombre ?>
    <?php endwhile;?>