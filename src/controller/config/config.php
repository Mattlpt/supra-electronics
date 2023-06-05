<?php
//MODULE CONFIGURATION
//Fait par @Matthieu Laporte

$page = $GLOBALS['dispatcher']->getPage();
$conn = $GLOBALS['db'];

if($page !== null && $page !== '')
{

    if($page === 'installdb')
    {

        echo 'INITIATION DE LA DB';
        $conn->query('CREATE DATABASE IF NOT EXISTS supraelectronics;');
        $conn->query('USE supraelectronics;');
        $conn->query("CREATE TABLE `bracelet` (
  `id_bracelet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("CREATE TABLE `company` (
  `id_company` int NOT NULL,
  `name_company` varchar(45) NOT NULL,
  `factory` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("CREATE TABLE `factory` (
  `id_factory` int NOT NULL,
  `address_factory` varchar(45) NOT NULL,
  `city_factory` varchar(45) NOT NULL,
  `country_factory` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("CREATE TABLE `forum` (
  `id_forum` int NOT NULL,
  `topic_forum` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author_forum` int NOT NULL,
  `question_forum` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("INSERT INTO `forum` (`id_forum`, `topic_forum`, `author_forum`, `question_forum`) VALUES
(1, 'matthieu beau ?', 11, 'réponse evidente');");

        $conn->query("CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username_user` varchar(15) NOT NULL,
  `password_user` varchar(145) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname_user` varchar(15) NOT NULL,
  `firstname_user` varchar(15) NOT NULL,
  `email_user` varchar(45) NOT NULL,
  `status_user` int DEFAULT '0',
  `bracelet` int DEFAULT NULL,
  `company` int DEFAULT NULL,
  `factory` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `lastname_user`, `firstname_user`, `email_user`, `status_user`, `bracelet`, `company`, `factory`) VALUES
(5, 'jule', 'julien123', 'lecordier', 'julien', 'julienlecordier16@gmail.com', 0, NULL, NULL, NULL),
(8, 'b', '', 'GLBDY', 'hj', 'hbijn@gmail.com', 0, NULL, NULL, NULL),
(10, 'test', 'test', 'test', 'test', 'test', 0, NULL, NULL, NULL),
(11, 'admin', 'admin', 'tt', 'tt', 'tt@tt', 2, NULL, NULL, NULL),
(12, 'user', '$2y$10$5i8DgDBQaXNi0N5VtRKLS.zC64zSwNrekg3ZGoQQvHdhIqCvGm95.', 'user', 'user', 'user@user', 0, NULL, NULL, NULL);");

        $conn->query("ALTER TABLE `bracelet`
  ADD PRIMARY KEY (`id_bracelet`);");

        $conn->query("ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD KEY `factory_id_company_idx` (`factory`);");

        $conn->query("ALTER TABLE `factory`
  ADD PRIMARY KEY (`id_factory`);");

        $conn->query("ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `id_user` (`author_forum`) USING BTREE;");

        $conn->query("ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_bracelet_user_idx` (`bracelet`),
  ADD KEY `id_company_user_idx` (`company`),
  ADD KEY `id_factory_user_idx` (`factory`);");

        $conn->query("ALTER TABLE `bracelet`
  MODIFY `id_bracelet` int NOT NULL AUTO_INCREMENT;");


        $conn->query("ALTER TABLE `company`
  MODIFY `id_company` int NOT NULL AUTO_INCREMENT;");


        $conn->query("ALTER TABLE `factory`
  MODIFY `id_factory` int NOT NULL AUTO_INCREMENT;");


        $conn->query("ALTER TABLE `forum`
  MODIFY `id_forum` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;");

        $conn->query("ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;");

        $conn->query("ALTER TABLE `company`
  ADD CONSTRAINT `factory_id_company` FOREIGN KEY (`factory`) REFERENCES `factory` (`id_factory`);");

        $conn->query("ALTER TABLE `forum`
  ADD CONSTRAINT `id_suer` FOREIGN KEY (`author_forum`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;");

        $conn->query("ALTER TABLE `user`
  ADD CONSTRAINT `id_bracelet_user` FOREIGN KEY (`bracelet`) REFERENCES `bracelet` (`id_bracelet`),
  ADD CONSTRAINT `id_company_user` FOREIGN KEY (`company`) REFERENCES `company` (`id_company`),
  ADD CONSTRAINT `id_factory_user` FOREIGN KEY (`factory`) REFERENCES `factory` (`id_factory`);
COMMIT;");

    }else{
        //SWITCH SUR Variable $page, faire les traitement ou les appels de fonctions qui vont bien
        renderView('config/'.$page.'.view.php','Configuration');
    }





}else{
    renderView('config/configHome.view.php', 'Configuration');
}




