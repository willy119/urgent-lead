<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <script src="https://kit.fontawesome.com/a076d05399.js">
        </script>
        <script src="script.js" defer></script>
        <title>Login</title>
    </head>

    <body>
        <div class="container">


            <div class="tab-body" data-id="connexion">
                <form action="validation.php" method="post" >

                    <div class="row">
                        <i class="far fa-user"></i>
                        <input type="text" class="input" name ="username" placeholder="Adresse Mail / Nom d'utilisateur">
                    </div>

                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input placeholder="Mot de Passe" name = "password" type="password" class="input">
                    </div>
                    <button class="btn" type="submit">Connexion</button>
                </form>
            </div>

            <div class="tab-footer">
                <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
            </div>
        </div>
    </body>

    </html>