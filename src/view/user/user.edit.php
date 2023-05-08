<section class="home">
    <div class="title-text">Modifier un utilisateur</div>
    <div class="content-body">
        <form  method="post" class="formulaire">
            <ul>
                <li>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" required value="<?php echo strtoupper($vars['user']->getLastname()); ?>" />
                </li>
                <li>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" required  value="<?php echo $vars['user']->getFirstName(); ?>" />
                </li>
                <li>
                    <label for="mail">Email :</label>
                    <input type="email" name="mail" required value="<?php echo $vars['user']->getMail(); ?>"/>
                </li>
                <li>
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" name="username" required value="<?php echo $vars['user']->getUsername(); ?>"/>
                </li>

            </ul>

            <div class="toast">
                <div class="toast-content">
                    <i class="fas fa-solid fa-check check"></i>

                    <div class="message">
                        <span class="title">Succes</span>
                        <span class="text">Vos modifications ont été enregistrée avec succès</span>
                    </div>
                </div>
                <i class="fa-solid fa-xmark close"></i>

                <div class="progress"></div>
            </div>

            <button type="submit">Enregistrer</button>
        </form>
    </div>

    <script>
        const button = document.querySelector("button"),
            toast = document.querySelector(".toast")
        closeIcon = document.querySelector(".close"),
            progress = document.querySelector(".progress");

        let timer1, timer2;

        button.addEventListener("click", () => {
            toast.classList.add("active");
            progress.classList.add("active");

            timer1 = setTimeout(() => {
                toast.classList.remove("active");
            }, 5000); //1s = 1000 milliseconds

            timer2 = setTimeout(() => {
                progress.classList.remove("active");
            }, 5300);
        });

        closeIcon.addEventListener("click", () => {
            toast.classList.remove("active");

            setTimeout(() => {
                progress.classList.remove("active");
            }, 300);

            clearTimeout(timer1);
            clearTimeout(timer2);
        });
    </script>
</section><!-- Contenu principal -->