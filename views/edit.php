<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        .body {
            align-items: center;
            background-color: #b2dbf4;
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .form {
            background-color: #15172b;
            border-radius: 20px;
            box-sizing: border-box;
            height: 670px;
            padding: 20px;
            width: 430px;
        }

        .titlew {
            color: #fff;
            font-family: sans-serif;
            font-size: 36px;
            font-weight: 600;
            margin-top: 30px;
        }

        .subtitle {
            color: grey;
            font-family: sans-serif;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }

        .input-container {
            height: 50px;
            position: relative;
            width: 100%;
        }

        .ic1 {
            margin-top: 40px;
        }

        .ic2 {
            margin-top: 30px;
        }

        .inputw {
            background-color: #b2dbf4;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #000000;
            font-size: 18px;
            height: 100%;
            outline: 0;
            padding: 4px 20px 0;
            width: 100%;
        }

        .cut {
            background-color: #15172b;
            border-radius: 10px;
            height: 20px;
            left: 20px;
            position: absolute;
            top: -20px;
            transform: translateY(0);
            transition: transform 200ms;
            width: 100px;
        }

        .cut-short {
            width: 50px;
        }

        .inputw:focus~.cut,
        .inputw:not(:placeholder-shown)~.cut {
            transform: translateY(8px);
        }

        .placeholder {
            color: #65657b;
            font-family: sans-serif;
            left: 20px;
            line-height: 14px;
            pointer-events: none;
            position: absolute;
            transform-origin: 0 50%;
            transition: transform 200ms, color 200ms;
            top: 20px;
        }

        .inputw:focus~.placeholder,
        .inputw:not(:placeholder-shown)~.placeholder {
            transform: translateY(-30px) translateX(10px) scale(0.75);
        }

        .inputw:not(:placeholder-shown)~.placeholder {
            color: #808097;
        }

        .inputw:focus~.placeholder {
            color: #dc2f55;
        }

        .submit {
            background-color: #08d;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            font-size: 18px;
            height: 50px;
            margin-top: 38px;
            text-align: center;
            width: 100%;
        }

        .submit:active {
            background-color: #06b;
        }
    </style>
</head>
<body>
    <?php
        $title = "";
        ob_start();
    ?>

    <div class="body">
        <div class="form">
            <form action="../editAction" method="post">
                <div class="titlew">Update Team</div>
                <div class="subtitle">Let's update the Team!</div>
                <div class="search">
                    <input type="hidden" class="inputw" name="id" value="<?= $user->id ?>">
                </div>
                <div class="input-container ic1">
                    <input type="text" class="inputw" name="nom" value="<?= $user->nom ?>">
                    <div class="cut"></div>
                    <label class="placeholder">Team Name</label>
                </div>
                <div class="input-container ic2">
                    <input type="text" class="inputw" name="prenom" value="<?= $user->prenom ?>">
                    <div class="cut"></div>
                    <label class="placeholder">Team League</label>
                </div>
                <div class="input-container ic2">
                    <input type="number" class="inputw" name="age" value="<?= $user->age ?>">
                    <div class="cut"></div>
                    <label class="placeholder">Team Titles</label>
                </div>
                <div class="input-container ic2">
                    <input type="text" class="inputw" name="login" value="<?= $user->email ?>">
                    <div class="cut"></div>
                    <label class="placeholder">Team E-mail</label>
                </div>
                <div class="input-container ic2">
                    <input type="password" class="inputw" name="password" value="<?= $user->password ?>">
                    <div class="cut"></div>
                    <label class="placeholder">Mot de passe</label>
                </div>
                <div class="input-container ic2">
                    <input type="submit" class="submit" value="Modifier" name="modifier">
                </div>
            </form>
        </div>
    </div>

    <?php $content = ob_get_clean(); ?>
    <?php include_once '../views/layout.php'; ?>
</body>
</html>
