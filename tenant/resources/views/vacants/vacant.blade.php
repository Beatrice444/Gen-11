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
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="dist/css/vacant.css" rel="stylesheet">
    </head>
    <body>
    	<div class="head">
        Vacant Rooms
        </div>
        <form action="{{route('save')}}" method="post">
            {{csrf_field()}}
        <div id="searchbox">
            <input type="text" id="search" placeholder="search vacant rooms here">
            <button type='submit'>Search</button>
        </div>
        </form> 
    </body>
</html>