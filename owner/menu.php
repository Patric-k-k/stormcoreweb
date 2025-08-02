<?php
$allogins = file_get_contents("../data/codes.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye idiot <script>window.location.replace('/?ref=owner/create_code.php')</script>";
};
$allogins = file_get_contents("../data/exec.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye stupid-it <script>window.location.replace('/dashboard.php')</script>";
}
?>
<head>
    <title>〘exec menu〙</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace-autoloader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-900 text-slate-100 sl-theme-dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css" />
    <div id="topbar" class="w-screen h-20 bg-slate-800 flex">
    <sl-dropdown>
        <sl-icon-button name="list" class="text-6xl" slot="trigger"></sl-icon-button>
        <sl-menu class="mv">
            <sl-menu-item value="/dashboard.php">Dashboard</sl-menu-item>
            <sl-menu-item value="/index.php">Login</sl-menu-item>
            <?php
$allogins = file_get_contents("./data/exec.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {
    echo "<sl-menu-item value=\"/owner/create_code.php\">[exec menu]</sl-menu-item>";
}
            ?>
            
        </sl-menu>
    </sl-dropdown>
    <script>
    document.querySelector(".mv").addEventListener('sl-select', event => {
        console.log(event.detail.item.value);
        window.location.replace(event.detail.item.value)
    })
    </script>
    <p class="mx-auto py-6 text-red-700 text-2xl"><b>[exec menu]</b></p>
    </div>
    <div class="w-7/8 mx-auto bg-slate-800/20 h-8/10 mt-[2%] p-4 rounded-2xl">
        <sl-button id="cc">Create Codes</sl-button>
    </div>
    <script>
        $("#cc").click(function() {
            window.location.replace("/owner/create_code.php")
        })
    </script>
</body>