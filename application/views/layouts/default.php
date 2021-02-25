<!DOCTYPE html>
<html lang="en">
    <head>
        <title>iClub <?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="/public/styles/main.css" rel="stylesheet">
        <link href="/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/public/styles/media.css" rel="stylesheet">
        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/scripts.js"></script>

    </head>
    <body>
        <nav class="navbar fixed-top">
                <a class="navbar-brand" href="/">
                    <svg width="65" height="100" viewBox="0 0 32 32"><defs><style>.cls-1{fill:#ffcf42;}</style></defs><title>Business, currency, dollar, money, tree</title><g id="Layer_7" data-name="Layer 7"><path class="cls-1" d="M16.59,8.22c-.39-.15-.84-.34-.84-.48s.29-.22.47-.22a2.28,2.28,0,0,1,1,.24l.33.14L18,6.48l-.19-.09a3,3,0,0,0-1.06-.28V5.36H15.39V6.2A1.73,1.73,0,0,0,14,7.88c0,1.06.89,1.5,1.67,1.76s.71.4.71.48c0,.25-.46.27-.55.27a2.65,2.65,0,0,1-1.26-.34l-.28-.15-.38,1.47.17.09a3.28,3.28,0,0,0,1.28.37v.81h1.32v-.89A1.82,1.82,0,0,0,18.14,10C18.14,9.14,17.67,8.6,16.59,8.22Z"/><path class="cls-1" d="M16,16a7,7,0,1,1,7-7A7,7,0,0,1,16,16ZM16,4a5,5,0,1,0,5,5A5,5,0,0,0,16,4Z"/><path class="cls-1" d="M16,30a1,1,0,0,1-1-1V15a1,1,0,0,1,2,0V29A1,1,0,0,1,16,30Z"/><path class="cls-1" d="M18.66,23a5.64,5.64,0,0,1-3.21-1,1,1,0,0,1-.43-.91A5.61,5.61,0,0,1,23.82,17a1,1,0,0,1,.43.91A5.59,5.59,0,0,1,18.66,23Zm-1.55-2.34a3.61,3.61,0,0,0,5-2.38,3.61,3.61,0,0,0-5,2.38Z"/><path class="cls-1" d="M13,26.55a5.74,5.74,0,0,1-1.87-.32A5.65,5.65,0,0,1,7.47,22,1,1,0,0,1,7.81,21,5.62,5.62,0,0,1,17,24.26a1,1,0,0,1-.33.94A5.67,5.67,0,0,1,13,26.55ZM9.6,22.18a3.63,3.63,0,0,0,2.19,2.16h0a3.61,3.61,0,0,0,3.06-.3A3.61,3.61,0,0,0,9.6,22.18Z"/><path class="cls-1" d="M19,30H13a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"/></g></svg>
                    <div class="nav-name">
                        Invex Club
                        <span>Exchanger</span>
                    </div>
                </a>
                <ul class="navbar-list">
                        <?php if (isset($_SESSION['account']['id'])): ?>
                            <!--a class="nav-link" href="/dashboard/tariffs">Инвестиции</a-->
                            <a class="nav-link" href="/dashboard/referrals">Рефералы</a>
                            <a class="nav-link" href="/dashboard/history">История</a>
                            <a class="nav-link" href="/account/profile">Профиль</a>
                            <a class="nav-link" href="/account/logout">Выход</a>
                        <?php else: ?>
                            <a class="nav-link" href="/account/register">Регистрация</a>
                            <a class="nav-link" href="/account/login">Вход</a>
                        <?php endif; ?>
                </ul>
        </nav>
        <?php echo $content; ?>
    </body>
</html>