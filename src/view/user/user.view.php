<section class="home">
    <div class="title-text">Liste des utilisateurs</div>
    <div class="content-body">
        <a href="/user/add">Ajouter un utilisateur</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nom d'utilisateur</th>
                <th>Prénom</th>
                <th>Nom de famille</th>
                <th>Mail</th>
            </tr>
            <tbody>
            <?php foreach($vars['usersListe'] as $user){ ?>
            <tr>
               <td><?php echo $user->getId() ?></td>
               <td><?php echo $user->getUsername(); ?></td>
                <td><?php echo $user->getFirstName(); ?></td>
                <td><?php echo strtoupper($user->getLastname()); ?></td>
                <td><?php echo $user->getMail(); ?> </td>
                <td><a class="button button-warning" href="/user/update?id=<?php echo $user->getId(); ?>">
                        <i class='bx bxs-edit'></i>
                    </a>
                    <a class="show-warning-modal" href="/user/delete?id=<?php echo $user->getId(); ?>">Supp.</a>
                    <div class="buttons">
                        <a class="close-warning-btn">Annuler</a>
                    </div>
                    <span class="show-warning-modal">Se risquer</span>

                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</section><!-- Contenu principal -->