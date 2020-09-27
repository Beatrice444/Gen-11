<!-- Created by Beatrice-->
<!DOCTYPE html>
<html>
    <head>
        <title>File</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="dist/css/remove.css" rel="stylesheet">
    </head>
    <body>
    	<div class="head">
        Remove User
        </div>
        <div class="bar">
        <input href="#" id="full name" type="link" name="full name" class="email" placeholder="User's Full Name"/>
        </div>
        <br />
        <form action="{{route('remove.edit')}}}" method="GET">
        <div class="foo">
        <input type="submit" class="submit" value="Edit"/>
        </form>
        <br />
        <div class="remove">
        <input id="full name" type="link" name="full name" class="email" placeholder="User's Full Name"/>
        </div>
        <form action="{{route('remove.delete',)}}}" method="POST">
        <div class="lst">
        <input type="submit" class="submit" value="Remove"/>
        </div>
        </form>
    </body>
</html>    