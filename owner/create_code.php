<?php
$allogins = file_get_contents("../data/codes.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye idiot <script>window.location.replace('/?ref=owner/create_code.php')</script>";
};
$allogins = file_get_contents("../data/exec.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye stupid-it <script>window.location.replace('/?ref=owner/create_code.php')</script>";
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
        <sl-input id="cd" placeholder="Code"></sl-input><br><br>
        <sl-checkbox id="d">Dev</sl-checkbox><br><br>
        <sl-checkbox id="di">Driving Instructer</sl-checkbox><br><br>
        <sl-checkbox id="e">Exec</sl-checkbox><br><br>
        <sl-checkbox id="h">HR</sl-checkbox><br><br>
        <sl-checkbox id="si">Staff Instructer</sl-checkbox><br><br>
        <sl-checkbox id="s">Staff</sl-checkbox><br><br>
        <sl-checkbox id="sv">Superviser</sl-checkbox><br><br><br>
        <sl-button id="c" variant="success">Create Code</sl-button>
        <p id="r">Responce Status</p>
    <script>
$("#c").click(function() {
    $.ajax({
        method: "POST",
        url: "internal/create.php",
        data: {
            code: "<?php echo htmlspecialchars($_COOKIE["code"]); ?>",
            cd: $("#cd").val(),
            dev: $("#d").prop("checked"), 
            di: $("#di").prop("checked"),
            exec: $("#e").prop("checked"),
            hr: $("#h").prop("checked"),
            si: $("#si").prop("checked"),
            staff: $("#s").prop("checked"),
            superviser: $("#sv").prop("checked")
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
    </script>
    </div>
</body>