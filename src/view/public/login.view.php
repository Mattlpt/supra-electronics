<body>
<div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
        <header>Login</header>
        <form method="POST" action="connexion">
            <input type="text" placeholder="Enter your username" name="username">
            <input type="password" placeholder="Enter your password" name="password">
            <input type="submit" class="button" value="Login">
        </form>
    </div>
    <div class="link">
        <a href="/supraelectronic" class="link">< Back</a>
        <a href="/register" class="link">Dont have an account ? SignUp</a>

    </div>
</div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    @import url("assets/style/couleur.css");

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body{
        background-image: url("style/resources/547327.jpg");
        background-size: cover;
    }

    .container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        max-width: 430px;
        width: 100%;
        background: var(--body-color);
        border-radius: 7px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    }
    .container .registration{
        display: none;
    }
    #check:checked ~ .registration{
        display: block;
    }
    #check:checked ~ .login{
        display: none;
    }
    #check{
        display: none;
    }
    .container .form{
        padding: 2rem;
    }
    .form header{
        font-size: 2rem;
        font-weight: 500;
        text-align: center;
        margin-bottom: 1.5rem;
    }
    .form input{
        height: 60px;
        width: 100%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
    }
    .form input:focus{
        box-shadow: 0 1px 0 rgba(0,0,0,0.2);
    }
    .form a{
        font-size: 16px;
        color: var(--primary-color);
        text-decoration: none;
    }
    .form a:hover{
        text-decoration: underline;
    }
    .form input.button{
        color: #fff;
        background: var(--primary-color);
        font-size: 1.2rem;
        font-weight: 500;
        letter-spacing: 1px;
        margin-top: 1.7rem;
        cursor: pointer;
        transition: 0.4s;
    }
    .form input.button:hover{
        background: var(--primary-color);
    }
    .signup{
        font-size: 17px;
        text-align: center;
    }
    .signup label{
        color: var(--primary-color);
        cursor: pointer;
    }
    .signup label:hover{
        text-decoration: underline;
    }

    .link{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .link a{
        margin: 20px 20px;
        font-size: 16px;
        color: var(--primary-color);
        text-decoration: none;
    }

    .link a:hover{
        text-decoration: underline;
    }
</style>