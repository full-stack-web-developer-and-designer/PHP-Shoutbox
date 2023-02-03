<?php include 'database.php'; ?>
<?php
// Create Select Query
$query = 'SELECT * FROM shouts ORDER BY id DESC';
$shouts = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Wow! Welcome to my code. If you need a professional website don't hesitate to contact me: https://mirnesglamocic.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title="SHOUT IT"; ?>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- include google fonts -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap&amp;subset=latin-ext" rel="stylesheet">
    <!-- include fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!--jQuery validate plugin -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <h1><?php echo $title . "! Shoutbox";?></h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout"><span><?php echo date('h:iA', strtotime($row['date'])); ?></span><strong><?php echo ' - ' . ucwords($row['user']) ?></strong>: <?php echo ucfirst($row['message']); ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div id="input">
            <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error'] ?></div>
            <?php endif; ?>
            <form autocomplete="off" id='shoutbox' method='POST' action='process.php'>
                <input type="text" id="user" name="user" placeholder="Enter your name" required>
                <input type="text" id="message" name="message" placeholder="Enter a message" required>
                <br>
                <input class="shout-btn" type="submit" id="submit" name="submit" value="Shout It down">
            </form>
            <script src="validation.js"></script>
        </div>
    </div>
    <footer id="footer">
    <?php
    function copyright($startYear) {
        $currentYear = date('Y');
        if ($startYear < $currentYear) {
            $currentYear = date('y');
            return "<p><small>&copy Copyright $startYear &ndash; $currentYear" . " | Developed by <a class='footer_mobile' href='https://mirnesglamocic.com' target='_blank'>Mirnes Glamočić</a><span class='footer-social'><a href='https://www.linkedin.com/in/mirnesglamocic/' target='_blank'><i class='footer-icon fab fa-linkedin'></i></a>
            <a href='https://github.com/Full-Stack-Web-Developer-and-Designer/' target='_blank'><i class='footer-icon fab fa-github'></i></a></span></small></p>";
        } else {
            return "<p><small>&copy Copyright $startYear " . " | Developed by <a class='footer_mobile'href='https://mirnesglamocic.com' target='_blank'>Mirnes Glamočić</a>
            <span class='footer-social'>
            <a href='https://www.linkedin.com/in/mirnesglamocic/' target='_blank'>
            <i class='footer-icon fab fa-linkedin'></i></a>
            <a href='https://github.com/Full-Stack-Web-Developer-and-Designer/' target='_blank'><i class='footer-icon fab fa-github'></i></a></span></small></p>";
        }
    }
    echo copyright(2023);
    ?>
    </footer>
</body>
</html>