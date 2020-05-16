<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive NavBar</title>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<style>
  
    nav{
        margin-left: 900px;
        opacity:75%;
    }
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<background-image>  <img src="unnamed.jpg" alt=""></background-image>
<header>
<nav class="nav npc">
    <a href="intro.php" target="Frame2" class="nav-item" active-color="orange">Introduction</a>
    <a href="Vpatientdetails.php" target="Frame2" class="nav-item" active-color="green">Patient Profile</a>
    <a href="login.php" target="Frame2" class="nav-item" active-color="blue">Doctor Login</a>
    <a href="register.php" target="Frame2" class="nav-item" active-color="red">Register</a>
    
    <span class="nav-indicator"></span>
  </nav>

  <!-- mobile -->
  <header class="cd-header">
    <div class="header-wrapper">
        <div class="logo-wrap">
            <a href="#" class="hover-target"><span>div</span>dev</a>
        </div>
        <div class="nav-but-wrap">
            <div class="menu-icon hover-target">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>					
        </div>					
    </div>				
</header>
      <div class="nav-overlay"></div>
  <div class="nav nmb">
    <div class="nav__content">
        <ul class="nav__list">
            <li class="nav__list-item"><a href="intro.php" target="Frame2" class="hover-target">Introduction</a></li>
            <li class="nav__list-item"><a href="Vpatientdetails.php" target="Frame2" class="hover-target">Patient Profile</a></li>
            <li class="nav__list-item"><a href="login.php" target="Frame2" class="hover-target">Doctor Login</a></li>
            <li class="nav__list-item"><a href="register.php" target="Frame2" class="hover-target">Register</a></li>
          
        </ul>
    </div>
    
</div>	
</header>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
