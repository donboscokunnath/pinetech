<?php include "init.php"; ?>
<?php if(!isset($_SESSION['id'])): ?>
    <?php header("location:login"); ?>
    <?php endif; ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Profile</title>
     <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body>
     <div class="contain">
         <?php if(isset($_SESSION['login_success'])): ?>
            <div class="success">
                <?php echo $_SESSION['login_success']; ?>
            </div>
         <?php endif; ?>
         <?php unset($_SESSION['login_success']); ?>
         <h2>Welcome to the dashboard</h2><hr>
         <a href="logout">logout</a>
     </div>
 </body>
 </html>