<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sermon Page</title>
    <style>
        /* Reset some default styles */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #363641;
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

        .sermon-content {
            margin-bottom: 30px;
        }

        .sermon-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #D1B38D;
            text-align: center;
        }

        .bible-verse {
            font-size: 14px;
            font-style: italic;
            margin-bottom: 10px;
            color: #292929;
        }

        .sermon-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .sermon-text {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Style for additional content */
        .additional-content {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sermons</h1>
    </header>
    <div class="container">
        <div class="sermon-content">
            <h2 class="sermon-title">{{ $sermons->title }}</h2>
            <p class="bible-verse">Bible Verse: {{ $sermons->text }}</p>
            <p class="bible-verse">Speaker: {{ $sermons->speaker }}</p>
            <p class="bible-verse">Date: {{ $sermons->date}}</p>
            <img src="{{ asset('storage/'.$sermons->photo) }}" alt="Sermon Image" class="sermon-image">
            <p class="sermon-text">
                {{ $sermons->intro }}
            </p>
        </div>

        <!-- Additional content -->
        <div class="sermon-text">
            <p>
                {{ $sermons->body }}
            </p>
        </div>

        <div class="additional-content">
            <h2>Conclusion</h2>
            <p>
                {{ $sermons->conclusion }}
            </p>
        </div>
    </div>
</body>
</html>
