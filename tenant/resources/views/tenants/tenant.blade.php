<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                File
            </title>
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
    <li>
    <a  style="color:white;"
        class="btn btn-lg btn-primary"
        href="/messages">Messages</a>
    </li>
    <li>
    <a  style="color:white;"
        class="btn btn-lg btn-primary"
        href="/report">Report</a>
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
            padding:15px;
            width:160px;
            height:49px;"
        class="btn btn-lg btn-primary"
        href="#"
        role="button">
    </a>
    <a style="position:fixed;
            left:160px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
        class="btn btn-lg btn-primary"
        href="/vacant"
        role="button">
    Vacant Rooms
    </a>
    <a style="position:fixed;
            left:275px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
       class="btn btn-lg btn-primary"
       href="/rqs"
       role="button">
    Requested Rooms
    </a>
    <a style="position:fixed;
            left:415px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
       class="btn btn-lg btn-primary"
       href="/inspect"
       role="button">
    Inspected Rooms
    </a>
    <a style="position:fixed;
            left:548px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
       class="btn btn-lg btn-primary"
       href="/apply"
       role="button">
    Apply For A Room
    </a>
    <a style="position:fixed;
            left:688px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
       class="btn btn-lg btn-primary"
       href="/booked"
       role="button">
    Booked Rooms
    </a>
    <a style="position:fixed;
            left:803px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
       class="btn btn-lg btn-primary"
       href="/document"
       role="button">
    Documents
    </a>
    <a style="position:fixed;
            left:905px;
            bottom:0px;
            background-color:black;
            color:white;
            padding:15px;
            text-decoration:none;"
    class="btn btn-lg btn-primary"
    href="/term"
    role="button">
    Term Lease
    </a>
    <a style="position:fixed;
            left:1010px;
            bottom:0px;
            background-color:black;
            color:white;
            text-decoration:none;
            padding:15px;
            width:130px"
       class="btn btn-lg btn-primary"
       href="/service"
       role="button">
    Room Services
    </a>
    <div class="head">
        Tenant Dashboard
    </div>
    <div class="fas">
    <i class="fa fa-home" aria-hidden="true"></i>
    </div>
    <script src="style.js"></script>
    </body>
</html>