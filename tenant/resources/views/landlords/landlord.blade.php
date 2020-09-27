<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap"
                  rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css"/>
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
        href="/notification">Notifications</a>
    </li>
    <li>
    <a  style="color:white;"
        class="btn btn-lg btn-primary"
        href="/change">Change Password</a>
    </li>
    <a style="color:white;" class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Sign Out
    </a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    </ul>
    </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
    <a style="position:fixed;
            left:0px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;
            width:440px;
            height:49px;"
        class="btn btn-lg btn-primary"
        href="#"
        role="button">
    </a>
    <a style="position:fixed;
            left:440px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;
            width:120px;"
        class="btn btn-lg btn-primary"
        href="/mt"
        role="button">
    My Tenants
    </a>
    <a style="position:fixed;
            left:560px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;
            width:150px;"
       class="btn btn-lg btn-primary"
       href="/properties"
       role="button">
    My Properties
    </a>
    <a style="position:fixed;
            left:670px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            padding-left:40px;
            text-decoration:none;
            width:140px;"
       class="btn btn-lg btn-primary"
       href="/statistic"
       role="button">
    Statistics
    </a>
    <a style="position:fixed;
            left:810px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            padding-right:30px;
            text-decoration:none;
            width:110px"
        class="btn btn-lg btn-primary"
        href="/messages"
        role="button">
    Messages
    </a>
    <a style="position:fixed;
            left:900px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            padding-left:40px;
            text-decoration:none;
            width:240px"
        class="btn btn-lg btn-primary"
        href="/report"
        role="button">
    Report
    </a>
    <div class="head">
        Landlord Dashboard
    </div>
    <div class="fas">
    <i class="fa fa-home" aria-hidden="true"></i>
    </div>
    <!-- /container -->
    <script src="style.js"></script>
</body>
</html>
