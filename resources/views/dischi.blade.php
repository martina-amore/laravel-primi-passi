<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Esercizio Vue dischi</title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="root" class="flex">
            <div class="cds-container container">
                @foreach ($db['response'] as $disco)
                <div class="cd">
                    <img src="{{ $disco['poster'] }}" alt="Poster disco">
                    <h3>{{ $disco['title'] }}</h3>
                    <span class="author">{{ $disco['author'] }}</span>
                    <span class="year">{{ $disco['year'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
