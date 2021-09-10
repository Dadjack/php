<header>   
    <nav>
        <div class="subnav">
            <img src="./image/menu.svg"  class="burgerButton" width="40px">
            <div>
                <h1>Project Task</h1> 
            </div>
        </div>
        <ul>
<?php
    /*-----------------------------------------------------
                        Menu dynamique :
        -----------------------------------------------------*/
    //si l'utilisateur est connecté (connexion, ajouter categorie, ajouter tâche, deconnexion)
    if(isset($_SESSION['connected']))
    {
        echo '
            <a href="./index.php"><li>Connexion</li></a>          
            <a href="./add_cat.php"><li>Ajouter une categorie</li></a>
            <a href="./add_task.php"><li>Ajouter une tâche</li></a>
            <a href="./show_task.php"><li>Afficher les tâches</li></a>
            <a href="./deconnected.php"><li>Deconnexion</li></a>';
    }
    //si l'utilisateur n'est pas connecté (connexion, ajouter compte, deconnexion)  
    else
    {
        echo '
            <a href="./index.php"><li>Connexion</li></a>
            <a href="./add_user.php"><li>Ajouter compte</li></a>
            <a href="./deconnected.php"><li>Deconnexion</li></a>';  
    }
?>            
        </ul>            
    </nav>
</header>