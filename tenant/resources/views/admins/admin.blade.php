<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/admin.css"/>
    <style>
        .fa{
            font-size:30em;
            left:100px; 
            }
    </style>
</head>

<body>
    <input id="check" type="checkbox">
    <label for="check" class="label">
    <div class="menu-icon">
    <div class="bar bar-1"></div>
    <div class="bar bar-2"></div>
    <div class="bar bar-3"></div>
    </div>
    </label>
    <nav class="navbar">
    <ul class="menu-list">
    <li>
    <a  style="color:white;"
        class="btn btn-lg btn-primary"
        href="/change">Change Password</a>
    </li>
    <li>
    <a style="color:white;"
        class="btn btn-lg btn-primary"
        href="/remove">Remove User</a>
    </li>
    <li>
    <a style="color:white;"
       class="btn btn-lg btn-primary"
       href="/notify">Notifications</a>
    </li>
    <li>
    <a style="color:white;" class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Sign Out
    </a>
    </li>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    </ul>
    </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
    <div class="head">
        Admin Dashboard
    </div>
    <div class="fas">
    <i class="fa fa-home" aria-hidden="true"></i>
    </div>
    <script src="style.js"></script>
    </body>
    <!-- /container -->
    <script src="style.js"></script>
</body>

</html>
