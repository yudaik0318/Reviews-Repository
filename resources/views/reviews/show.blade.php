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
        <h1 class='title'>
            {{ $review->title }}
        </h1>
        <div class='content'>
            <div class='content_review'>
                <h3>本文</h3>
                <p class='body'>{{ $review->body }}</p>
            </div>
            <div>
                <img src="{{ $review->image_path }}" alt="画像が読み込めません。">
            </div>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>