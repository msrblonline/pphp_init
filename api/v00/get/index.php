<?php
// ALLOWING SERVICE TO BE CALLED BY a specific IP
if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') {
    header('HTTP/1.0 403 Forbidden');
    echo '
    <div style="display:flex;z-index: 999;position: fixed;left: 0;top:0; width:100%;height:100%;overflow: auto;background-color: rgba(254,0,0,0.2);align-items: center;justify-content: center;">
    <div style="width:5em;height:5em;padding-right:2em">
    <img style="width:100%;height:100%;" src="./fa6/svg/triangle-exclamation.svg" />
    </div>
    <div>
    <h1>Fehler 403</h1>
    <p style="margin-left:0;">Forbidden</p>
    </div>
    </div>
    ';
} else {
    main_function();
}

function main_function()
{
    // SQL CREDS
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    // SET HTTP HEADERS TO ALLOW CORS
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');
    }

    // POST METHOD TO ADD NEW ENTRY
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    }
}
