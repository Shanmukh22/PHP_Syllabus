<?php
    $uname = $_SESSION['username'];
?>
<head>
    <title>Group 2 Team Project</title>
    <link rel='stylesheet' href='css/main.css'>
</head>
    <header>
        <H1> Group 2 Team Project </H1>
    </header>
<body>
<nav>
    <ul>
        <li><a href='index.php'>Home</a></li>
        <li><a href='search.php'>Search for Syllabus</a></li>
        <li><a href='form.php'>Enter Syllabus</a></li>
        <li><a href='analytics.php'>Analytics</a></li>
        <?php if(isset($uname)){
            echo '<li>Welcome '.$uname.'</li>';
            echo '<li><a href="signout.php">Sign Out</a></li>';
                }else{
                    echo '<li><a href="login.php">Sign In</a></li>';
                        }
            ?>
</ul>
</nav>
