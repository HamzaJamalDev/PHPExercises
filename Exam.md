# Examen en langage de script

# EMSI Casablanca

Nom : .........................................................................

Groupe : .........................................................................

1. Lequel des énoncés suivants est correct à propos de PHP?
    - [ ]  PHP est un acronyme récursif pour « PHP: Hypertext Preprocessor ».
    - [ ]  PHP est un langage de script côté serveur intégré dans HTML.
    - [ ]  Il est utilisé pour gérer le contenu dynamique, les bases de données, le suivi de session, voire même pour construire des sites de e-commerce entiers.
    - [x]  Tout les réponses sont vrais
2. PHP est-il sensible à la casse?
    - [x]  Vrai
    - [ ]  Faux
3. Je veux créer une page Web contenant le titre suivant : "Ma Page Web". Aurai-je besoin du PHP ?
    - [x]  Non, le HTML est suffisant.
    - [ ]  Oui, il faudrait utiliser une fonction PHP permettant d'afficher une chaîne de caractères.
    - [ ]  Oui, puisque PHP permet de construire une page Web
    - [ ]  Non, parce que PHP est pour créer des sites Web statiques.
4. Quel est l'usage le plus courant du PHP ?
    - [ ]  Créer le design des pages Web
    - [x]  Générer le contenu des pages Web mis à jour systématiquement.
    - [x]  Créer des sites Web dynamiques
    - [ ]  Créer des sites Web statiques
5. J'ai créé un script PHP que j'ai nommé monPHPScript.php à l'aide de l’éditeur de code “PhpStorm”. J'ai ouvert le fichier à partir de mon navigateur pour voir le résultat. Mais, il m'a ré-affiché le code PHP que j'ai écrit. Où réside l'erreur ?
    - [x]  Le script PHP est appelé au niveau du navigateur
    - [x]  PHP s'exécute au niveau du serveur Web.
    - [ ]  L'erreur est plutot syntaxique.
    - [ ]  Il faut utiliser Visual Studio Code.
6. À quel endroit s’exécute un script PHP ?
    - [x]  Sur le serveur web
    - [ ]  Dans le navigateur du client
    - [ ]  Aucune des propositions précédentes est vraie
7. Peut-on mélanger des balises HTML et du code PHP dans un script .php ?
    - [ ]  Oui, mais il faut utiliser une fonction PHP permettant d'afficher les balises HTML.
    - [x]  Oui, sans passer par une fonction PHP permettant d'afficher les balises HTML.
    - [ ]  Non, ce n'est pas possible.
8. Peut-on écrire du code PHP dans un document .html ?
    - [ ]  Oui, mais il faut utiliser une balise HTML permettant d'écrire le code PHP.
    - [ ]  Oui, sans passer par une balise HTML permettant d'écrire le code PHP.
    - [x]  Non
9. Un script PHP peut commencer par:
    - [ ]  \<php
    - [x]  \<?=
    - [x]  \<?php
    - [ ]  \<script
10. Que pouvons-nous utiliser pour commenter une seule ligne en PHP?
    - [ ]  /?
    - [x]  //
    - [ ]  /!
    - [ ]  /* \*/
11. Quelle est la sortie de ce code?
    
    ```php
    <?php
        $nbr1= 2;
        $nbr2 = 2;
        echo $nbr1."+".$nbr2;
    ?>
    ```
    
    - [ ]  Erreur
    - [ ]  4
    - [x]  2+2
    - [ ]  2 + 2
    - [ ]  2
12. Laquelle des variables suivantes peut-on lui attribuer une valeur?
    - [ ]  $5var
    - [x]  $\_var
    - [x]  $var
    - [ ]  $var-5
    - [ ]  Tout les réponses sont vrais
13. Quelle sera la sortie du code PHP suivant?
    
    ```php
    <?php
        $total = "15 personne";
        $autre = 5;
        $total = $total + $autre;
        echo "$total";
    ?>
    ```
    
    - [ ]  Erreur
    - [ ]  20 personne
    - [x]  20
    - [ ]  15 personne
    - [ ]  $total
14. Quelle sera la sortie du code PHP suivant?
    
    ```php
    <?php
        $a = 4;
        $b = 4;
        echo ($a == $b);
    ?>
    ```
    
    - [ ]  4 == 4
    - [ ]  $a == $b
    - [x]  1
    - [ ]  False
15. Lequel des éléments suivants est utilisé pour déclarer une constante?
    - [ ]  const
    - [ ]  constant
    - [x]  define
    - [ ]  #pragma
    - [ ]  def
16. Qu’est-ce qui est affiché?
    
    ```php
    <?php
        $var = 'false';
        if ($var) {
            echo 'true';
        } else {
            echo 'false';
        }
    ?>
    ```
    
    - [x]  true
    - [ ]  false
17. Que fait l’extrait de code suivant?
    
    ```php
        $a =30;
        while($a<10)
        {
            $a--;
        }
        echo "$a";
    ```
    
    - [x]  30
    - [ ]  10
    - [ ]  0
    - [ ]  $a
    - [ ]  Le script va lancer un message d’erreur.
18. Quelle est la sortie du code suivant?
    
    ```php
    <?php
        $x = 20;
        $y = 10;
        $x>$y ? echo '$x' : echo '$y';
    ?>
    ```
    
    - [ ]  10
    - [ ]  20
    - [x]  $x
    - [ ]  $y
    - [ ]  Le script va lancer une erreur.
19. Que permet de faire la commande foreach en PHP ?
    - [ ]  Cette commande n’existe pas en PHP
    - [x]  Un moyen simple itérer sur un tableau
    - [ ]  Exécuter une fonction pour chaque élément d’un tableau
    - [ ]  Récupérer une liste des clés du tableau
20. Dans un tableau en PHP, il est
    - [x]  Possible d’y stocker des valeurs de n’importe quel type PHP
    - [x]  Possible qu’une clé soit un entier, soit une chaîne de caractères
    - [ ]  Aucune des deux propositions précédentes n’est vraie
21. Laquelle des fonctions suivantes vérifie si une valeur spécifique existe dans un tableau?
    - [ ]  krsort()
    - [ ]  key()
    - [x]  in_array()
    - [ ]  extract()
    - [ ]  Tout les réponses sont faux
22. Laquelle des fonctions suivantes crée un tableau?
    - [x]  array()
    - [ ]  new array()
    - [ ]  array[]
    - [ ]  $array()
23. Comment accédons-nous à la valeur ‘d’?
    
    ```php
    <?php
        $tab = array(
            'a',
            "key1" => 'b',
            "key2" => 'c',
            'd'
        );
    ?>
    ```
    
    - [ ]  $tab[”last_element”]
    - [ ]  $tab[0]
    - [x]  $tab[1]
    - [ ]  $tab[4]
    - [ ]  $tab[3]
    - [ ]  $tab[count($tab)-1]
24. Quelles propositions sont justes ?
    
    ```php
    <?php
        $liste = array("fruit" => "banane", "legume" => "radis", "boisson" => "eau");
        echo $liste[1];
    ?>
    ```
    
    - [ ]  Renvoie "legume"
    - [ ]  Renvoie "radis"
    - [ ]  Renvoie "banane"
    - [x]  Renvoie une erreur d’indice
25. Quelle est la valeur de $a et $b après l’appel de fonction?
    
    ```php
    <?php
        function increment(&$arg) {
            $return = $arg;
            $arg += 1;
            return $return;
        }
        $a = 5;
        $b = increment($a);
    ?>
    ```
    
    - [ ]  a est 5 et b est 6
    - [x]  a est 6 et b est 5
    - [ ]  Les deux sont 5
    - [ ]  Les deux sont 6
26. Quelle sera la sortie du code PHP suivant?
    
    ```php
    <?php
        function check($prix, $tax=0)
        {
            $totale = $prix + ($prix*$tax);
            echo "$totale";
        }
        check(5);
    ?>
    ```
    
    - [ ]  50
    - [ ]  0
    - [x]  5
    - [ ]  $totale
27. Laquelle des méthodes suivantes renvoie une chaîne formatée représentant une date?
    - [ ]  time()
    - [ ]  get_date()
    - [x]  date()
    - [ ]  Aucune de ces réponses n’est vraie.
28. Quelle est la différence entre les méthodes GET et POST?
    - [x]  GET affiche les valeurs entrées dans un formulaire dans l’URL, contrairement à POST.
    - [ ]  POST affiche les valeurs saisies dans un formulaire dans l’URL, contrairement à GET.
    - [x]  POST n’a pas de restriction sur la taille des données à envoyer, contrairement à GET.
    - [ ]  Il n’y a pas de différence.
29. Comment préciser quel script sera lancé par le bouton submit d'un formulaire?
    - [ ]  \<form type="page.php"
    - [x]  \<form action="page.php"
    - [ ]  \<form script="page.php"
    - [ ]  \<form submit="page.php"
30. Parmi les propositions suivantes, laquelles correspondent à l’expression régulière /m[ao]{2,4}l/ en PHP?
    - [ ]  mol
    - [x]  mool
    - [x]  moaool
    - [x]  maaal
31. Dans la déclaration suivante, que signifie le symbole « + »?
    
    ```php
    <?php
         preg_match('/^[0-9]+$/', $var)
    ?>
    ```
    
    - [ ]  N’importe quel caractère
    - [ ]  Un caractère entre 0 et 9
    - [x]  Un ou plusieurs caractères compris entre 0 et 9
    - [ ]  Zéro ou plusieurs caractères entre 0 et 9
    - [ ]  Tout caractère compris entre 0 et 9 suivi d’un $
32. Qu’est-ce qui correspondrait à l’expression régulière dans l’énoncé suivant?
    
    ```php
    <?php
         preg_match('/^[0-9]{3}-[0-9]{2,4}$/', $var)
    ?>
    ```
    
    - [ ]  5-88
    - [ ]  1-2345
    - [ ]  416
    - [x]  213-99
    - [ ]  87090
33. Quelle sera la sortie du code PHP suivant?
    
    ```php
    <?php
        echo preg_match("#[a-z]#", "s");
    ?>
    ```
    
    - [ ]  0
    - [x]  1
    - [ ]  False
    - [ ]  True
34. Observez le code suivant. Quel(s) est (sont) le(s) risque(s) de cette approche ?
    
    ```php
    <?php
        $name = $_POST['name'];
        echo $name;
    ?>
    ```
    
    - [x]  Un hacker pourrait introduire du code javascript
    - [x]  Un hacker pourrait introduire du code HTML et donc corrompre la mise en page.
    - [ ]  Un hacker pourrait gagner contrôle sur l’ordinateur du visiteur.
    - [ ]  Un hacker pourrait gagner contrôle sur le serveur.
35. Comment est récupérée dans le script param.php la variable var1 passée par l’URL ?
    - [ ]  $\_GET[$var1]
    - [x]  $\_GET['var1']
    - [ ]  $\_GET('var1')
    - [ ]  $\_POST[’var1’]
36. Lequel des éléments suivants est un tableau associatif contenant des variables de session disponibles pour un script ?
    - [ ]  $GLOBALS
    - [ ]  $\_SERVER
    - [ ]  $SESSION
    - [x]  $\_SESSION
37. Lequel des éléments suivants est utilisé pour supprimer un cookie?
    - [x]  La fonction setcookie()
    - [ ]  La variable $\_COOKIE
    - [ ]  La fonction isset()
    - [ ]  Aucune de ces réponses n’est vraie.
38. Comment créer une session qui permettra d'utiliser des variables de session?
    - [ ]  session()
    - [ ]  init_session()
    - [ ]  var_session()
    - [x]  session_start()
39. Quelle fonction crée un cookie ?
    - [ ]  cookie()
    - [ ]  set()
    - [ ]  set_cookie()
    - [x]  setcookie()
40. Comment instancie-t-on un objet p de la classe Personne ?
    - [ ]  $Personne = new p;
    - [ ]  new $p = Personne;
    - [x]  $p = new Personne;
    - [ ]  Personne $p;
