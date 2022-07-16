<html>
    <head>
        <style>
        div.version{
            padding: 0.5%;
            border: 1px solid #d8d8d8;
            border-radius:2px;
            width: 200;

        }
        span.version{
            background: yellow;
            color: black;
            padding: 2%;
            width: 90px;
            display: inline-block;
            text-align: center;
            border-radius: 54px;
            border: 1px solid #b6b4b4;
        }
        </style>
    </head>
    <body>

        <div class="version">
            PHP Version : <span class="version"><?php echo phpversion(); ?></span>
        </div>
 
    </body>

    
</html>