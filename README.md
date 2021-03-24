
==========installation librairies|dépendances:=============

- npm install
- composer install


Configurer le fichier ".env" à votre convenance. (ligne 32)

DATABASE_URL=mysql://[identifiant]:[motdepasse]@127.0.0.1:[port]/cfa?serverVersion=mariadb-[version]


==================créer la base de donnée====================

- php bin/console doctrine:database:create



==================executer les migrations====================

- php bin/console doctrine:migrations:migrate



==========générer le compte utilisateur + Fake_data==========

- php bin/console doctrine:fixtures:load