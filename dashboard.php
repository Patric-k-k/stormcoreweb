<?php session_start();
$allogins = file_get_contents("./data/codes.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye idiot <script>window.location.replace('/')</script>";
}
?>
<!DOCTYPE html>
<head>
    <title>Log in</title>
    <meta charset="UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace-autoloader.js"></script>
    <style>
:not(:defined) {
  visibility: hidden;
}
    </style>
</head>
<body class="bg-slate-900 sl-theme-dark text-slate-200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css" />
    <div id="topbar" class="w-screen h-20 bg-slate-800">
    <sl-dropdown>
        <sl-icon-button name="list" class="text-6xl" slot="trigger"></sl-icon-button>
        <sl-menu>
            <sl-menu-item id="dashboard_button">Dashboard</sl-menu-item>
            <sl-menu-item id="login_button">Login</sl-menu-item>
        </sl-menu>
    </sl-dropdown>
    </div>
    <!--stuff-->
    <div class="rounded-2xl w-[100%] h-[100%] bg-slate-800/20">


    </div>



    <script>
        $( document ).ready(function() {
        $("#dashboard_button").bind("sl-select", function() {
            alert("hello")
        })
    })
    </script>
</body>