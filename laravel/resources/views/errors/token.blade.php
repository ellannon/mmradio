<!DOCTYPE html>
<html>
    <head>
        <title>The session has timed out.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
			a{
				text-decoration: none;
				color: #B0BEC5 !important;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">The session has timed out!</br>Please do again your login</br>
					<a href="{!! route('home') !!}" class="o-btn"><i class="fa fa-angle-left"></i> Push Here to go Back</a>
				</div>
            </div>
        </div>
    </body>
</html>
