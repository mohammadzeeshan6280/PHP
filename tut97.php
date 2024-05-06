<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Layout</title>

    <style>
        *{
            margin: 0;
        }
        body{
            
            background: #3f35c7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    #wrapper{
            border: 1px solid rebeccapurple;
            width: 1000px;
            background: #ffff;
            margin: 0 auto;
           
        }
        #header{
            background: #ff24af;
            height: 100px;
            color: white
        }
        #header h2{
        padding: 40px 0 0 40px;
        }
       
        #menu{
            background: orangered;
            
        }
        #menu ul{
           margin: 0;
           padding: 0;
            
        }
        #menu li{
            display: inline-block;
        }
        #menu li a{
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            color: black;
        }

        #menu li a:hover{
            background: green;
        }
       
        #content{
           width: 800px;
           padding: 15px;
           float: left;
           box-sizing: border-box;
        }
        #sidebar{
            background: lightsalmon;
            width: 200px;
            height: 350px;
            float: right;
            padding: 25px 0px;
        }
        #sidebar a{
            text-decoration: none;
            color: black;
            margin-bottom: 20px;
        }
        #footer{
            background: orangered;
            clear: both;
            padding: 5px 10px;
            text-align: center;
        };
    </style>
</head>
<body>
    <div id="wrapper">
        
        <?php include 'header.php'; ?>
        <!-- <?php include 'headers.php'; ?> -->
        <!-- <?php require 'header.php'; ?> -->
   
        <div id="content">
            <h2>Basic Content</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ut explicabo? Cumque architecto et nisi quidem saepe dicta? Magnam, ab expedita? Accusamus saepe dicta sed distinctio aspernatur est laborum quos dolorum, cumque, ipsum amet eveniet consequatur mollitia fugit ut quas . Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam odio, saepe vel excepturi consequuntur delectus ad non quia aperiam aut alias earum voluptas similique quod assumenda nulla impedit aliquam quisquam pariatur nesciunt ab in animi ratione. Sit eos assumenda deleniti soluta blanditiis dolores sint nam perspiciatis, dolor ea in quae.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ut explicabo? Cumque architecto et nisi quidem saepe dicta? Magnam, ab expedita? Accusamus saepe dicta sed distinctio aspernatur est laborum quos dolorum, cumque, ipsum amet eveniet consequatur mollitia fugit ut quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quidem laborum molestias maiores, culpa quod quas cumque error iusto modi, neque labore? Ipsam laudantium beatae velit facilis eligendi deleniti accusantium praesentium quos culpa tempora consectetur iste quasi dolore incidunt, consequuntur nesciunt quidem reprehenderit maiores sed cum qui dicta esse. Aliquam.</p>
        </div>

        <?php include 'sidebar.php'; ?>
        <?php include 'footer.php'; ?>
        
    </div>
    </body>
    </html>
  
