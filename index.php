<?php
    
?>
<html>
    <head>
        <title>Web Store Get</title>
    </head>
    <body>
        <br><br><br><br><br><br>
        <center>
            <h3>Web Store Get</h3>
            <form action="get.php" method="get" target="_blank">
                <input type="text" name="id" style="width: 300px;" placeholder="Extension ID"><br>
                <input type="text" name="version" placeholder="Chrome Version"><br>
                <input type="submit" value="Download CRX">
            </form>
            <p>Alternatively, you can make a GET request manually:<br>
            <span style="color: blue;">https://webstoreget.herokuapp.com/get.php?extension=<i>[extension id]</i>&version=<i>[version number]</i></span></p>
            <br>
            <p><b>Brief Instructions</b><br>
            1. Find the ID of the extension on the Web Store (those letters at the end of the URL)<br>
            2. Find your Chrome version at <span style="color: blue;">chrome://about</span><br>
            3. Download the CRX file<br>
            4. Open <span style="color: blue;">chrome://extensions</span> at drag in the CRX</p>
            <br>
            <p><i>Note: this tool is not intended to archive or otherwise store Web Store files long-term.</i></p>
        </center>
    </body>
</html>