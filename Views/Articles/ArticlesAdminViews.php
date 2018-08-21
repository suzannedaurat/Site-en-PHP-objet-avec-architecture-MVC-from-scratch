<?php 
{
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="/PHP_Rush_MVC_TEST/Webroot/Css/style.css"/>
    </head>
    <body>
        <div id="global">
        
        <h1 id="titreBlog">DAT BLOG BITCH - ADMIN MODE</h1>

    <form id=text method ="post" action="./index.php">
    Login : <input type=text name="Login"></input>
    Password : <input type=password name="Password"></input>
    <button type=submit name ="Submit">Submit</button>
    </form>

        <p></html><?php if(Session::read('username') !== null) echo "Welcome " . Session::read('username') . ", ready for a glory admin day !"?><html></p><br></html>
        
        <?php 
        $x=0;
        foreach($data as $count)
        {
            $x++;
        }
        for($i=0; $i<$x; $i++)
        {
        ?>
            <html><h2 id=contenu><?php echo $data[$i]['title'];?></h2>
            <p id=text>Written by : <?php echo $data[$i]['author'];?></p>
            <p id=text2><?php echo $data[$i]['content'];?></p>
            <p><?php echo $data[$i]['edition_date'];?></p>
            <br>
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