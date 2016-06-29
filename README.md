# symfony_crud
IMIE TP Composants 

How to install

Part I: Getting the project/dependencies and setting DB conf.

    Clone project or download and unzip it.

    Go to the project's root and use the "composer install" command in order to install dependencies

    If you want to use your own database credentials, modify parameters.yml. The defaults are root with no password.
  
Part II: use following Doctrine commands at the project's root to create and populate the db.

    Create the Database: php bin/console doctrine:database:create

    Create the tables: php bin/console doctrine:scheam:create

    Load tests data: php bin/console doctrine:fixtures:load

    lancer la commande 'php bin/console server:run' pour lancer le serveur, accessible à l'adresse http://127.0.0.1:8000/ par défault.

Part III: Running the app

    Launch the server: php bin/console server:run

    Access the page with your browser at (default value): http://127.0.0.1:8000/


  
  


