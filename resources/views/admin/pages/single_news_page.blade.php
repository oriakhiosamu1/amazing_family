<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single News Article</title>
    <style>

        /* Import Google font - Poppins */
        /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap'); */

        /* Reset some default styles */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            /* font-family: 'Poppins', sans-serif; */
            background-color: #363641;
            color: #333;
        }

        header {
            background-color: #292929;
            color: #D1B38D;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .article {
            margin-bottom: 30px;
        }

        .article h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #D1B38D;
            text-align: center;
            padding-top: 10px;
        }

        .article img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .article p {
            font-size: 18px;
            line-height: 1.6;
            color: #363641;
        }
    </style>
</head>
<body>
    <header>
        <h1>Breaking News Headline</h1>
    </header>
    <div class="container">
        <div class="article">
            <img src="{{ asset('storage/'.$list->photo) }}" alt="News Image">
            <h1>{{ $list->headline }}</h1>
            <p>
                {{ $list->intro }}
            </p>

            <br>

            <p>
                {{ $list->body }}
            </p>

            <br>

            <p>
                {{ $list->conclusion }}
            </p>
        </div>
    </div>
</body>
</html>
