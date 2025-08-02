<?php session_start(); ?>
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
<body class="bg-slate-900 text-slate-200 sl-theme-dark transition-all duration-500 ease-out">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css" />
    <div id="topbar" class="w-screen h-20 bg-slate-800">
    <sl-dropdown>
        <sl-icon-button name="list" class="text-6xl" slot="trigger"></sl-icon-button>
        <sl-menu class="mv z-100">
            <sl-menu-item value="/dashboard.php">Dashboard</sl-menu-item>
            <sl-menu-item value="/index.php">Login</sl-menu-item>
        </sl-menu>
    </sl-dropdown>
    <script>
    document.querySelector(".mv").addEventListener('sl-select', event => {
        console.log(event.detail.item.value);
        window.location.replace(event.detail.item.value);
    })
    </script>
    </div>
    <div class="position-absolute w-screen h-screen -z-100 border-x border-x-(--pattern-fg) bg-[image:repeating-linear-gradient(60deg,_var(--pattern-fg)_0,_var(--pattern-fg)_1px,_transparent_0,_transparent_50%)] bg-[size:10px_10px] bg-fixed [--pattern-fg:var(--color-slate-800)]/10 ">
    <div class="h-20"></div>
    <div class="mx-auto w-2/3 text-center bg-slate-800 h-[50%] rounded-2xl shadow-2xl shadow-cyan-600 p-4 border-x border-x-(--pattern-fg) bg-[image:repeating-linear-gradient(5000000deg,_var(--pattern-fg)_0,_var(--pattern-fg)_1px,_transparent_0,_transparent_50%)] bg-[size:10px_10px] bg-fixed [--pattern-fg:var(--color-slate-900)]/10 transition-all transition-descrete duration-500 ease-out hover:shadow-lg">
    <p class="text-3xl mb-8 transition-all transition-descrete duration-500 ease-out hover:text-4xl">Please log in.</p>
    <input placeholder="logincode" class="w-1/2 rounded-2xl bg-slate-900 text-center transition-all transition-discrete duration-500 ease-out" id="logincode"></input> <br><br>
    <button id="li" class="w-1/2 rounded-xl bg-lime-400 text-zinc-900 hover:text-zinc-800 transition-all transition-discrete duration-500 ease-out">Log in</button>
    </div>
    <script>
$("#li").click(function() {
    $.ajax({
        method: "POST",
        url: "internal/login.php",
        data: {code: $("#logincode").val()}
    }).done(function( html ) {
        console.log(html);
        if (html == "1") {
            <?php
                if (array_key_exists("ref",$_GET)) {
                    echo 'window.location.replace("' . $_GET["ref"] . '")';
                } else {
                    echo 'window.location.replace("dashboard.php")';
                }
            ?>
            
        }
    });
});

    </script>
    </div>
</body>