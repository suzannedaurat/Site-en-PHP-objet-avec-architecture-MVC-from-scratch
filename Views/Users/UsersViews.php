<?php 
{
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="/PHP_Rush_MVC_TEST/Webroot/Css/style.css"/>
    </head>
    <body>    
        <div id="global">
        <h1 id="titreBlog">LIST OF USERS</h1>
        </html>
        <?php 

        $x=0;
        foreach($data as $count)
        {
            $x++;
        }
        for($i=0; $i<$x; $i++)
        {
        ?>
            <html><div id="contenu"><h2><?php echo $data[$i]['username'];?> infos</h2>
            <table>
                <tr>
                    <th id=text>Email</th>
                    <th id=text>Status</th>
                    <th id=text>Group</th>
                    <th id=text>Has join the blog the</th>
                </tr>
                <tr>
                    <th id=text2><?php echo $data[$i]['email'];?></th>
                    <th id=text2><?php if(($data[$i]['status']) == "1") echo "BANNED"; else echo "ACTIVE";?></th>
                    <th id=text2><?php if(($data[$i]['usergroup']) == "2") echo "ADMINISTRATOR"; if(($data[$i]['usergroup']) == "1") echo "WRITER"; else echo "REGULAR USER";?></th>
                    <th id=text2><?php echo $data[$i]['creation_date'];?></th> 
                </tr>
                <br>
            </table>
            </div>
            </html>
        <?php
        }
        ?>
    <html>
        <footer id="piedBlog">
            Blog réalisé par PiouPiou et B12.
        </footer>
    </div>
    </body>
</html>
<?php
}