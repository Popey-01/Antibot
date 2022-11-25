# Antibot pour scama
![fakepage](https://imgs.search.brave.com/Esluvxc5Y_97Smzg0wVyzNrl6FlV6K_fQm2AKf1H-wk/rs:fit:1000:500:1/g:ce/aHR0cHM6Ly93d3cu/dGlwc2Zvcm1vYmls/ZS5jb20vd3AtY29u/dGVudC91cGxvYWRz/LzIwMjEvMDcvYm90/LmpwZw)

## Description
Un antibot pour scama française basé sur un principe de whiteliste, cela le rend donc bien plus puissant que n'importe quel antibot basé sur un principe de blacklist. Spécifiant les personnes qui doivent rentrer et non l'inverse, cet antibot n'a pas besoin d'être mis à jour. Avec cet antibot, vous pouvez définitivement dire aurevoir aux red screen. Attention cependant à ne pas lancer de spam à l'internationnale avec cet antibot, il sert uniquement pour les scama française.


## Utilisation de l'antibot
Pour sécuriser votre site avec cet antibot il suffit de mettre le fichier "antibot.php" à la racine de votre site (au même endroit que le index) et de mettre la ligne de code ci-dessous au début du code de chaque fichier/page web fréquenté par l'utilisateur: 
```php
<?php include('antibot.php'); ?>
```
Attention cependant à bien veiller que le chemin qui inclus le fichier ne soit pas faux, si vous cherchez à sécuriser un fichier dans un sous dossier et que le fichier "antibot.php" se situ à la racine et non dans le sous dossier en question il vous faudra utiliser cette ligne de code pour appeller le fichier "antibot.php":
```php
<?php include('../antibot.php'); ?>
```
Si vous connaissez un minimum le php l'installation de l'antibot ne devrait pas être un problème.
#### * les pages du style "config.php" ou autre sur vos scama n'ont pas nécéssairement besoin de protection


```
authorized operators
=========================================
[+] Free        [+] Bouygues
[+] SFR         [+] La poste
[+] Orange      [+] Tiscali

authorized country >>> france
check              >>> country,asn,isp
```
