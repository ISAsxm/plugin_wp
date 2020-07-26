# plugin_wp  

----------------  

## description :  
  
  
Divers plugins Wordpress proposant diverses fonctionnalités    
Version : 1.0.0    
Date : 2020-07-26   
Responsable : HI   
  
----------------  

## Mise en oeuvre :  

Clonez le plugin souhaité et insérez le dans le répertoire wp-content/plugins/ de votre Wordpress.  
Rendez-vous dans l'interface admin de Wordpress et activez le plugin.   
Suivez les instructions d'utilisation si nécéssaire.  
   
----------------  
  
## Utilisation :  

Certains plugins nécéssitent des installations complémentaires (se référer à la section requirement des commentaires du fichier .php de chaque plugin et/ou à la section Détails des plugins ci-dessous).  

----------------  
  
## Détails des plugins :  


* to-top-btn :

Plugin permettant l'ajout d'un bouton de retour vers le haut de la page. Les réglages pour faire apparaître le bouton et la vitesse de scroll sont dans le fichier to-top-btn/js/app.js, respectivement ligne 16 et 7. Vous pouvez modifier ces réglages pour les adapter à vos besoins.
Ce plugin utilise la font-family FontAwesome. Il est donc nécéssaire de vérifier que vous importez bien FontAwesome dans votre version de Wordpress. Vous pouvez modifier ceci ainsi que le style du bouton dans le fichier to-top-btn/css/style.css.  


* custom-title :  

Plugin offrant la possibilité d'ajouter un titre customisé avant chaque titre de page. Remplacer simplement ```Custom Title -``` à la ligne 25 du fichier custom-title/custom-title.php par le titre souhaité ... et voila !

```php
$title['title'] = 'Custom Title - '.$title['title'];  
```  


* bandeau-cookies :  

Modifiez à votre guise le message d'information ligne 32 du fichier bandeau-cookies/bandeau-cookies.php.  


* plugin-youtube :

Permet l'ajout d'une vidéo youtube grâce à un short-code. La source peut-être récupérée dans l'url des sites youtube ou dailymotion. 
Example youtube : 
 - vidéo souhaitée : https://www.youtube.com/watch?v=z8sbRVJ6uR0 on insère le shortcode avec la source : [video source=z8sbRVJ6uR0]
Example Dailymotion :
 - vidéo souhaitée : https://www.dailymotion.com/video/x7uoddr on insère le shortcode avec la source : [video source=x7uoddr]

Il est possible de paramétrer quelques réglages depuis le short-code : la taille, le player et/ou le contrôle. 
Le player est réglé sur youtube par défaut, si vous souhaitez utilisé Dailymotion, il faut obligatoirement préciser le player. 
La largeur par défaut est de 100px et la hauteur 315px, indiquez les dimensions souhaitées si vous voulez les modifier. 
Le contrôle est désactivé par défaut, indiquez controls=1 si vous souhaitez l'activer.

Example d'insertion du shortcode dans les pages wp :  
 - basique : [video source=z8sbRVJ6uR0]  
 - avec taille et contrôle : [video source=z8sbRVJ6uR0 width=30 height=150 controls=1]  
 - avec taille et player : [video source=x7uoddr width=30 height=150 player=dailymotion]

(pour rappel : la source est à récuperer à la fin de l'url des sites youtube ou dailymotion (sur youtube les caractères après https://www.youtube.com/watch?v= , sur dailymotion les caractères après https://www.dailymotion.com/video/ )  