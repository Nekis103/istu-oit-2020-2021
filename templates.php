<!DOCTYPE html>
<html lang="rus">
  <head>
    <meta charset="utf-8">
    <title>Поэты</title>	
    <link href="style.css" type="text/css" rel="stylesheet">
  </head>

  <body>
    <input type="checkbox" id="nav-toggle" hidden>
    <div class="foon">
    <header>
      <div class="blockheader">
        <div class="logotip">
           
           <a class="logo" href=""><img src="logo1.png" alt="logo1.png" width="160px" height="160px"></a>         
        </div>
          <div class="number">
            <div class="hidemobile">
              8-800-555-35-35
            </div>
          </div>
      </div>
    </header>
    </div>  
<nav class = "menu">
	<ul>
            <?php foreach($pages as $page): ?>

            <?php echo sprintf('<li><a class="site-menu-item" href="%s">%s</a></li>', 'index.php?page=' . $page['id_articles'], $page['title_articles']); ?>

            <?php endforeach; ?>
	</ul>
</nav>

    <section>
	
	<div class="soderzh">
		<h1 align="center"><?php echo $data['title_articles'];?></h1>
		
		<div class="fotoL">
		
          <?php if(($data['id_articles'])!=4): ?>
		<img alt="foto"  src="<?php echo $data['img_articles'];?>" width="160px" height="160px" class="rightimg"  ><?php endif; ?>	
           
        </div>
		<?php echo $data['text_articles'];?>
		<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="frm_feedback">
			
		</form>
	</div>	
		
    </section>
    <div class="podval">
      <footer class="foot">
        <h2 align="center">Copyright 2020</h2>
      </footer>
    </div>
	<button class ="btn-top" title	= "Go to top"> Наверх </button>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="scrollUp.js"></script>
	  	 <script>
            function checkForm(form) {
                var name = form.name.value;
                var n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
                if (!n) {
                    alert("Имя введено неверно, пожалуйста исправьте ошибку");
                    return false;
                }
                var phone = form.phone.value;
                var p = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
                if (!p) {
                    alert("Телефон введен неверно");
                    return false;
                }
                var mail = form.mail.value;
                var m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*[A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
                if (!m) {
                    alert("E-mail введен неверно, пожалуйста исправьте ошибку");
                    return false;
                }
                return true;
            }
        </script>
  </body>
</html>
