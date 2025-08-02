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
    <title>code creator thingy</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace-autoloader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-900 text-slate-100 sl-theme-dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css" />
    <div class="w-6/8 mx-auto bg-slate-800/20 h-9/10 mt-[2%] p-4 rounded-2xl">
        <sl-textarea resize="auto" type="text" id="contentarea" value="<?php echo str_replace('"',"''",file_get_contents("../books/" . $_GET["b"] . "/data.md"));?>"></sl-textarea><br><br>
        <sl-button id="c" variant="success">Submit Edit</sl-button>
        <p id="r" style="display:none;">Responce Status</p><br><br><br><br><br>
        <sl-button id="gotoexec" variant="primary" outline>[exec menu]</sl-button>
    <script>
$("#c").click(function() {
    $.ajax({
        method: "POST",
        url: "internal/applyedit.php",
        data: {
            code: "<?php echo htmlspecialchars($_COOKIE["code"]); ?>",
            page: "<?php echo htmlspecialchars($_GET["b"]); ?>",
            content: document.getElementById("contentarea").value
        }
    }).done(function( html ) {
        console.log(html);
        $("#r").html(html);
        $("#r").fadeIn( "slow", function() {
            $("#r").fadeOut( "slow", function() {
                // Animation complete
            });
        });
        
    });
});
$("#gotoexec").click(function() {
    window.location.replace("/owner/menu.php")
})
    </script><br><br>
    <sl-alert variant="warning" open>
        <sl-icon slot="icon" name="exclamation-triangle"></sl-icon>
        A way to create new pages and edit page permissions is not currently implemented. You must contact a Web Admin to do so (somebody with access to hoster's file system).
    </sl-alert>
    </div>
</body>