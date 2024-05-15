<?php
    include "./inc/header.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="/style/index.css">
    <link rel="stylesheet" href="/style/index2.css">
    
</head>
<body>
<main class="main">
<section class="page">
<?php
    if(isset($_GET['message'])){
        echo "<div class='message'>
        {$_GET['message']}
        </div>";
    }
?>
    <div class="registr">
        <h1 class="text233">Регистрация</h1>
            <form action="/admin/controllers/registration1234.php" method="post" 
            class="validation" validate>
            <div class="mb-3">
                <label for="surname" class="form-label fs-5">Фамилия<br></label>
                <input type="text" class="vvod" id="surname" name="surname" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label fs-5">Имя<br></label>
                <input type="text" class="vvod" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="otchestvo" class="form-label fs-5">Отчество<br></label>
                <input type="text" class="vvod" id="otchestvo" name="otchestvo" required>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label fs-5">Логин<br></label>
                <input type="text" class="vvod" id="login" name="login" required>
            </div>
            <div class="mb-3">
                <label for="email" class="">Адрес электронной почты<br></label>
                <input type="email" class="vvod" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label fs-5">Телефон<br></label>
                <input type="tel" class="vvod" id="phone" name="phone" minlength="17" maxlength="17" pattern="/+?[0-9/(/)/-]+" placeholder="+7(XXX)-XXX-XX-XX" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fs-5">Пароль<br></label>
                <input type="password" class="vvod" id="password" name="password" minlength="6" required>
            </div>
            <div class="mb-3">
                <label for="password-repeat" class="">Повторите пароль<br></label>
                <input type="password" class="vvod" id="password-repeat" name="password-repeat" minlength="6" required>
            </div>
            <input type="submit" class="card-button button23" value="Зарегистрироваться">
        </form>
    </div>

</section>
</main>

<style>
            .message{
        width:500px;
        padding: 25px;
        font-size:15px;
        color: white;
        text-align:center;
        margin-top:15px;
        margin-left:auto;
        margin-right:auto;
        background-color: #900;
        border-radius: 0 0 5px 5px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        box-sizing: border-box;
        }
            input:invalid:required {
        background-image: linear-gradient(to right, pink, lightgreen);
        }
        input:invalid{
        border-color: #900;
        background-color: #FDD;
      }
        input:valid{
            border:2px solid black;
        }
        .error {
        width  : 100%;
        padding: 0;

        font-size: 80%;
        color: white;
        background-color: #900;
        border-radius: 0 0 5px 5px;

        box-sizing: border-box;
      }

      .error.active {
        padding: 0.3em;
      }
        .vvod{
            width:400px;
        height: 25px;
        margin-bottom: 15px;
        }
        .text233{
            margin-top:0px;
        }
        .registr{
            text-align:center;
        border: 5px solid lime;
        width: 500px;
        height: auto;
        padding: 50px;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        background-color:#00AB76;
        margin-bottom:100px;
        }
        body{
            background: url(/images/fon.jpg);
            width: 100%;
            height: 1000px;
            margin-top: 0px;
            padding-top:0px;
            
        }
    </style>
</body>
<?php
    include "./inc/footer.php"
?>
</html>