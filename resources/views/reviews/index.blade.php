<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>口コミ</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <h1>ChelseaReview</h1>
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <p class='body'>{{ $review->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>