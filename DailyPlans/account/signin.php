<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DailyPlans - Přihlášení</title>

    <link rel="stylesheet" href="../css/formpage.css">
</head>
<body>
    <form action="" class="form">
        <h1 class="form__title">Vítej zpět</h1>
        <h3 class="form__subtitle">Pojď se znovu příhlásit!</h3>
        
        <div class="input-container">
            <input type="text" name="username" class="input" placeholder=" ">
            <div class="label-box"></div>
            <label for="username" class="input__label">Přihlašovací jméno</label>
        </div>

        <div class="input-container">
            <input type="password" name="password" class="input" placeholder=" ">
            <div class="label-box lb-short"></div>
            <label for="password" class="input__label">Heslo</label>
        </div>
        
        <button type="submit">Přihlásit</button>
    </form>
</body>
</html>