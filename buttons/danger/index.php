<!DOCTYPE html>
<?php include("../../reacts.php") ?>
<html lang="it">
<head>


<?php react_dependencies() ?>

<?php register_react_element("Button"); ?>
<?php print_react_elements() ?>
<link rel="stylesheet" href="https://italia.github.io/design-web-toolkit/build/build.css"></link>
</head>
<body>
<ul>
<li class="u-padding-all-s" id="button"></li>
<li class="u-padding-all-s" id="button-pressed"></li>
<li class="u-padding-all-s" id="button-disabled"></li>
<li  class="u-padding-all-s" id="button-round"></li>
<li  class="u-padding-all-s" id="button-round-shadow"></li>
<li  class="u-padding-all-s" id="link-shadow-round"></li>
</ul>
<script type="text/babel">

ReactDOM.render(
<Button style="danger" text="Button default"/>,
document.getElementById("button")
);
ReactDOM.render(
<Button style="danger" text="Button default pressed" pressed={true}/>,
document.getElementById("button-pressed")
);
ReactDOM.render(
<Button style="danger" text="Button default disabled" disabled={true}/>,
document.getElementById("button-disabled")
);
ReactDOM.render(
<Button style="danger" text="Button default round" round={true}/>,
document.getElementById("button-round")
);
ReactDOM.render(
<Button style="danger" text="Button default round shadow" round={true} shadow={true}/>,
document.getElementById("button-round-shadow")
);
ReactDOM.render(
<Button style="danger" text="Link button default round shadow" shadow={true} round={true} link="#"/>,
document.getElementById("link-shadow-round")
);
</script>

</body>
</html>
