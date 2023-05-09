<!DOCTYPE html>
<html lang="en" data-theme="">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?> - Supratronics</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/style/menudisplay.css" rel="stylesheet">
    <link href="/style/notification.css" rel="stylesheet">
    <link href="/style/WarningPopUp.css" rel="stylesheet">
</head>
<body>



<?php
include 'menu.php';
?>
<?php
include($page_include);
?>

<script>



    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click" , () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click" , () =>{
        sidebar.classList.remove("close");
    })


    modeSwitch.addEventListener("click" , () =>{
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
            modeText.innerText = "Light mode";
            localStorage.setItem('theme', "dark");
        }else{
            modeText.innerText = "Dark mode";
            localStorage.setItem('theme', "light");
        }
    })

    if(localStorage.getItem('theme') === "dark"){
        body.classList.add("dark");
    }else{
        body.classList.remove("dark");
    }


</script>

</body>

</html>

