# admin-local

Installation

Il s'agit de fichiers PHP à héberger sur votre serveur web, aucune base de données n'est nécessaire.

Conseils

Afin de vous aider dans l'adoption de cet outil, voici quelques conseils et remarques :

Site entier

Vous pouvez faire en sorte que la sidebar ne soit pas minimaliste en supprimant le mot "sidebar-collapse" de la balise body du fichier "pages/inc/header.php".

Vous pouvez mettre une icône sur les boutons (voir la liste ici) ou mettre un favicon récupéré sur le site en question (dans le répertoire inc/images).
Il est très simple de remplacer le moteur de recherche du formulaire, il suffit de modifier l'URL dans la page "pages/index.php".

Calendrier

Le fichier ics à afficher est à mettre dans le répertoire "plugins/ics-parser". Il est possible d'afficher plusieurs ics au sein du même calendrier, avec différentes couleurs, une simple boucle PHP est nécessaire.
