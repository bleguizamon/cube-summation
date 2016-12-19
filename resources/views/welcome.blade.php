<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            header {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 20vh;
                margin: 0;;
                column-span: 10
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
                text-align: center !important;
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
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 60%;
                align-content: center;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: justify;
                padding: 8px;
            }


        </style>
    </head>
    <body style="text-align:center">
      <header>
        <div class="title  content">
            Cube Summation
        </div>
      </header>


      <div class="flex-center" style="height:400px;">
      @yield("content")
      </div>


      <footer class="content">build by bleguizamon</footer>

    </body>
</html>
