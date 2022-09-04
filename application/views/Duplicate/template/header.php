<html>
    <head>
        <title>Duplikasi Web Page</title>
        <style type="text/css">
        .container { border: 1px solid white; }
        .wrapper {
            border: 1px solid white;
            background-image: linear-gradient(cyan, green);
            height: 750;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .isi {
            font-family: "comic Sans MS", arial;
            color: white;
            position: relative;
            top: 10%;
            left: 1%;
        }

        .tabel { 
            width: 100%;
            height: 425px;
        }
        .blog{
            background-color: white;
            height: 300px;
            width: 200px;
            border: 2px solid gray;
            float: left;
            margin: 20;
            position: relative;
            left: 20%;
            top: 30;
            color: #494949;
            padding: 4;
        }
        .blog a {
            color: #494949;
            font-weight: bold;
            font-size: 16;
            position: relative;
            width: 80;
            right: 10;
            top: 70;
        }

        .blog p{
            position: relative;
            top: 70;
            font-size : 12;
            text-align: center;
        }

        .menu {
            font-family: "times new roman", Georgia;
            background-color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: right;
            height: 70;
        }

        .menu ul li {
            display: inline-table;
            margin: 0 10 0 10;
        }

        .menu ul li a {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            color: #000000;
            position: relative;
            top: 20;
            right: 80;
            width:100%;
            height:100%;
        }
        .menu ul li a:hover { background-color: #cecece;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="Menu">
                <ul>
                    <img src= "<?php echo base_url(); ?>./Vendor/duplicate/images/palette.png" 
                    style="width: 50px; height: 50px; position: absolute; top: 15; left: 120;"/>
                    <li>
                        <a href="<?= site_url('web/view/nav');?>">Red</a>
                    </li>
                    <li>
                        <a href="<?= site_url('web/view/nav');?>">Blue</a>
                    </li>
                    <li>
                        <a href="<?= site_url('web/view/nav');?>">Green</a>
                    </li>
                    <li>
                        <a href="<?= site_url('web/view/nav');?>">Yellow</a>
                    </li>
                    <li>
                        <a href="<?= site_url('web/view/nav');?>">Pink</a>
                    </li>
                    <li>
                        <a href="<?= site_url('web/view/nav');?>">Purple</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper">