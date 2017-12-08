<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    New Project
                </div>
				<h2>Comanda automàtica (executa per codi les manuals)</h2>
				<div class="links">
					<strong>STEP Unique: Project Inizialitation</strong><br> php artisan init<br><br>
				</div>
				<h2>Comandes manuals</h2>
                <div class="links">
                    <strong>STEP 1: General Migrations BackPack</strong><br> php artisan migrate<br><br>
                    <strong>STEP 2: General Publish BackPack</strong><br> php artisan vendor:publish<br><br>
                    <strong>STEP 3: Settings Seeders</strong><br> php artisan db:seed<br><br>
                    <strong>STEP 4: LangManager Migrations</strong><br> php artisan migrate --path=vendor/backpack/langfilemanager/src/database/migrations<br><br>
                    <strong>STEP 5: LangManager Seeders</strong><br> php artisan db:seed --class="Backpack\LangFileManager\database\seeds\LanguageTableSeeder"<br><br>
                    <strong>STEP 6: LangManager Publish Config</strong><br> php artisan vendor:publish --provider="Backpack\LangFileManager\LangFileManagerServiceProvider" --tag="config"<br><br>
                    <strong>STEP 7: LangManager Publish Files</strong><br> php artisan vendor:publish --provider="Backpack\LangFileManager\LangFileManagerServiceProvider" --tag="lang" #publish the lang files<br><br>
                </div>
            </div>
        </div>
    </body>
</html>
