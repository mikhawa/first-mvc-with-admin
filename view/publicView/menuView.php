<ul class="navbar-nav">
    <?php
    // var_dump($recupSection);
    foreach ($recupSection as $section) :
    ?>
        <li class="nav-item">
            <a class="nav-link" href="?idsection=<?= $section['idthesection'] ?>"><?= $section['thesectionTitle'] ?></a>
        </li>
    <?php
    endforeach;
    ?>

    <li class="nav-item">
        <a class="nav-link" href="?connect">Connexion</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?disconnect">Déconnexion</a>
    </li>
</ul>