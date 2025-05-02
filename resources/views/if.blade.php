<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>
<body>
    <h2>
        @unless($AdminFalse)
            kamu admin 
        @endunless
        @unless($AdminTrue)
            kamu admin (tidak muncul)
        @endunless

</body>
</html>