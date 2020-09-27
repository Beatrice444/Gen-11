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
        <link href="dist/css/apply.css" rel="stylesheet">
    </head>
    <body>
    	<div class="head">
        Apply for Room
        </div>
        <div class="bar">
        <input id="full name" type="full name" name="full name" class="email" placeholder="Type Full Name"/>
        <br />
        <input id="telephone" type="telephone" name="telephone" class="email" placeholder="Type Telephone"/>
        <br/>
        <input id="email" type="email" name="email" class="email" placeholder="Type Email"/>
        <br/>
        <input id="room details" type="room details" name="room details" class="email" placeholder="Type Room Details"/>
        <br/>
        </div>
        <form action="{{route('save')}}" method="post">
            {{csrf_field()}}
        <div class="foo">
        <input type="button" class="submit" value="Submit"/>
        </form>
        </div>
    </body>
</html>    