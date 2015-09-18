<!Doctype html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style_menu_liste_deroulante.css"/>
    </head>


<body>
<nav>
   <form method="post" id="salut" action="">
       
    <p id="menu_liste">
   <select name="menu" onChange="location.href=''+this.options[this.selectedIndex].value+'.php';">
            <option selected></option>
        <optgroup label="Fiction">
            <option value="index" class="opt">Cinéma</option>
            <option value="#" class="opt">Séries</option>
            <option value="#" class="opt">Publicités</option>       
       </optgroup>
       <option value="#" class="opt">TV</option>
       <option value="#" class="opt">Art et Culture</option>
       <option value="#" class="opt">Institutionnel</option>
       <option value="#" class="opt">Curriculum Vitae</option>
    </select> 
    </p>  
    </form>
    
    
    
    <!--<ul class="nav">
    <li class="nav-item"><a href="fiction.php">Fiction</a>
        <ul class="nav sub-nav">
            <li class="sub-nav-item"><a href="cinema.php">Cinéma</a></li>
            <li class="sub-nav-item"><a href="serie.php">Séries</a></li>
            <li class="sub-nav-item"><a href="publicites.php">Publicités</a></li>        
        </ul>
    </li>
    <li class="nav-item"><a href="tv.php">TV</a></li>
    <li class="nav-item"><a href="art.php">Art et Culture</a></li>
    <li class="nav-item"><a href="insti">Institutionnel</a></li>
    <li class="nav-item"><a href="cv">Curriculum Vitae</a></li>
</ul> -->
    </nav>
</body>
</html>