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
                    <a href="/user/delete?id=<?php echo $user->getId(); ?>" class="confirmationLink">Supprimer</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</section><!-- Contenu principal -->

<script>

    window.addEventListener('load', function() {
        var confirmationLinks = document.getElementsByClassName('confirmationLink');

        for (var i = 0; i < confirmationLinks.length; i++) {
            confirmationLinks[i].addEventListener('click', function(event) {
                event.preventDefault(); // Empêche le comportement par défaut du lien (redirection immédiate)

                var confirmRedirect = confirm("Êtes-vous sûr de vouloir supprimer l'utilisateur ?");

                if (confirmRedirect) {
                    var url = this.getAttribute('href');
                    window.location.href = url; // Redirige vers l'URL spécifiée
                } else {
                    console.log("L\'utilisateur n'a pas été supprimé. ");
                }
            });
        }
    });

</script>