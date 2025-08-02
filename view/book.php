<head>
<title><?php echo htmlentities($_GET["b"]);?> Handbook</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.8.1/github-markdown-dark.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace-autoloader.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css" />
</head>
<body class="bg-slate-800 text-slate-200" style="background-color:black">
<link rel="stylesheet" href="github-markdown.css">
<script>
MathJax = {
  loader: {load: ['input/asciimath', 'output/chtml', 'ui/menu']},
  asciimath: {delimiters: [['$','$']]}
};
</script>
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/startup.js">
</script>
<style>
	.markdown-body {
		box-sizing: border-box;
		min-width: 200px;
		max-width: 980px;
		margin: 0 auto;
		padding: 45px;
	}

	@media (max-width: 767px) {
		.markdown-body {
			padding: 15px;
		}
	}

    th {
        color: White;
    }
    td {
        color: White;
    }
</style>
<article id="md" class="markdown-body">
<?php
#access wall.
$allogins = file_get_contents("../data/codes.dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye idiot <script>window.location.replace('/')</script>";
}
$t = file_get_contents("../books/" . str_replace(".","NOBODY CARES",str_replace("/","nuhuhidiot",$_GET["b"])) . "/pl.dat");
$allogins = file_get_contents("../data/" . $t . ".dat");
$logins = explode("\n",$allogins);
if (in_array($_COOKIE['code'],$logins)) {} else {
    echo "bye idiot <script>window.location.replace('/')</script>";
}
# IGNORE THE UNSANITIZED INPUT! This is intended, as only we get to define this content. Also, its behind an access wall.
$e = file_get_contents("../books/" . str_replace(".","NOBODY CARES",str_replace("/","nuhuhidiot",$_GET["b"])) . "/data.md");
echo $e;
?>
</article>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    marked.setOptions({
        gfm: true,       // GitHub Flavored Markdown (enables tables, strikethrough, etc)
        tables: true,    // explicitly enable tables
    });
    document.getElementById("md").innerHTML = marked.parse(document.getElementById("md").innerHTML);
    MathJax.typeset();
</script>
</body>