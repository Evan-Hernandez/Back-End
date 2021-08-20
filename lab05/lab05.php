<html>

<head>
    <title>PHP Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        //ALERT Welcome message
        function enter() {
            x = 0;
            while (x == 0) {
                x = x + 1;
                var enter = "Welcome to my page!";
                alert(enter);
            };
        };
        enter();
    </script>
</head>

<body>
    <h1>Using JavaScript and jQuery </h1>
    <!--heading-->
    <p>Evan Hernandez</p>
    <!--Name-->
    <br>
    <p>Quotes from my brother's discord server</p>
    <script>
        $(document).ready(function() {
            $("#prof").click(function() {
                $("#changingP").html('"Hi! Do you care if I use your assignment as a model for dummer students?"');
            });
        });
        $(document).ready(function() {
            $("#revert").click(function() {
                $("#changingP").html('"I hate everything you have done"<br>"This was a pure place"<br>"There was joy jere"<br>"And you killed it"<br>');
            });
        });
        $(document).ready(function() {
            $("#ghost").click(function() {
                $("#changingP").html('"Is it fair to assume the ghost is undead?');
            });
        });
    </script>
    <!--vvv Changing vvv-->
    <p id='changingP'>
        "I hate everything you have done<br>
        This was a pure place<br>
        There was joy jere<br>
        And you killed it"<br>
    </p>
    <!--^^^ Changing ^^^-->
    <br>
    <form>
        <!--Form-->
        <div>
            <!--Div tags-->
            <button id="prof" type="button">Prof.</button>
            <!--Button1-->
            <button id="ghost" type="button">Ghost</button>
            <!--Button2-->
            <button id="revert" type="button">Revert</button>
            <!--Button2-->

            <p class="script">
                <script>
                    // message counting buttons
                    var display = document.getElementsByTagName("button").length;
                    document.write("There are " + display + " buttons on this page.");
                </script>
            </p>
        </div>
    </form>
</body>

</html>