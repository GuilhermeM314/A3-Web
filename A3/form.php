<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Formulário</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./src/css/index.css'>
    <script src="./src/js/jquery-3.5.1.min.js"></script>
</head>

<body>
    <section id="container">
        <h1>Preencha o formulário abaixo:</h1>

        <form name="form" id="form" action="./src/php/insert.php" method="POST">
            <label for="userName">Nome:</label>
            <input type="text" name="userName" id="userName" required>

            <label for="userCpf">CPF:</label>
            <input type="text" name="userCpf" id="userCpf" required
                minlength="11" maxlength="11">

            <label for="userGender">Sexo:</label>
            <select class="warning" name="userGender" id="userGender" required>
                <option value="" disabled selected>Clique para escolher</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>

            <label for="userPic">Imagem de perfil:</label>
            <input type="file" name="userPic" id="userPic" required>

            <label id="lblMilitary" for="userMilitary">Número de reservista:</label>
            <input type="text" name="userMilitary" id="userMilitary" value="0">

            <label for="userEmail">E-mail</label>
            <input type="email" name="userEmail" id="userEmail" required>

            <label for="userPass">Senha:</label>
            <input type="password" name="userPass" id="userPass" required
                placeholder="Digite uma senha de 8 a 20 dígitos"
                minlength="8" max-length="20" autocomplete="off">

            <input type="submit" value="Enviar">
        </form>
    </section>

    <script>
        $("#form > input, #userGender").blur(function () {
            if (!$(this).val()) {
                $(this).addClass("warning")
                $(this).attr("placeholder", "Campo obrigatório")
            }
        })

        $("#form > input, #userGender").change(function () {
            if ($(this).val()) {
                $(this).removeClass("warning")
            }
        })
    </script>
    
    <script src="./src/js/dynamicStyle.js"></script>
</body>

</html>