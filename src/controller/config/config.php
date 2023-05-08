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
        $conn->query("CREATE TABLE IF NOT EXISTS `bracelet` (
  `id_bracelet` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_bracelet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
");
        $conn->query("CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int NOT NULL AUTO_INCREMENT,
  `name_company` varchar(45) NOT NULL,
  `factory` int DEFAULT NULL,
  PRIMARY KEY (`id_company`),
  KEY `factory_id_company_idx` (`factory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("CREATE TABLE IF NOT EXISTS `factory` (
  `id_factory` int NOT NULL AUTO_INCREMENT,
  `address_factory` varchar(45) NOT NULL,
  `city_factory` varchar(45) NOT NULL,
  `country_factory` varchar(45) NOT NULL,
  PRIMARY KEY (`id_factory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

        $conn->query("CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username_user` varchar(15) NOT NULL,
  `password_user` varchar(45) NOT NULL,
  `lastname_user` varchar(15) NOT NULL,
  `firstname_user` varchar(15) NOT NULL,
  `email_user` varchar(45) NOT NULL,
  `status_user` int DEFAULT '0',
  `bracelet` int DEFAULT NULL,
  `company` int DEFAULT NULL,
  `factory` int DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_bracelet_user_idx` (`bracelet`),
  KEY `id_company_user_idx` (`company`),
  KEY `id_factory_user_idx` (`factory`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");
        $conn->query("INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `lastname_user`, `firstname_user`, `email_user`, `status_user`, `bracelet`, `company`, `factory`) VALUES
(1, 'username', 'test', 'lecordier', 'julien', 'juli', 0, NULL, NULL, NULL),
(11, 'jule', 'test', 'lecordier', 'julien', 'julienlecordier16@gmail.com', 2, NULL, NULL, NULL),
(12, 'finaltest acc', 'password', 'bobo', 'baba', 'bubu', 0, NULL, NULL, NULL);");

        $conn->query("ALTER TABLE `company`
  ADD CONSTRAINT `factory_id_company` FOREIGN KEY (`factory`) REFERENCES `factory` (`id_factory`);");

        $conn->query("
ALTER TABLE `user`
  ADD CONSTRAINT `id_bracelet_user` FOREIGN KEY (`bracelet`) REFERENCES `bracelet` (`id_bracelet`),
  ADD CONSTRAINT `id_company_user` FOREIGN KEY (`company`) REFERENCES `company` (`id_company`),
  ADD CONSTRAINT `id_factory_user` FOREIGN KEY (`factory`) REFERENCES `factory` (`id_factory`);");

    }else{
        //SWITCH SUR Variable $page, faire les traitement ou les appels de fonctions qui vont bien
        renderView('config/'.$page.'.view.php','Configuration');
    }





}else{
    renderView('config/configHome.view.php', 'Configuration');
}




