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
        <h1>Review Name</h1>
        <form action="/reviews" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="review[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="review[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="store">
        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>