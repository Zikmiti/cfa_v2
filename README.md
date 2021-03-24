# CFA

## installation
```bash
npm install
```
```bash
composer install
```

### 1. Configuration du fichier ".env" (ligne 32)
```bash
DATABASE_URL=mysql://[identifiant]:[motdepasse]@127.0.0.1:[port]/cfa?serverVersion=mariadb-[version]
```

### 2. Créer la base de donnée
```bash
php bin/console doctrine:database:create
```
### 3. Executer les migrations
```bash
php bin/console doctrine:migrations:migrate
```
### 4. Générer le compte utilisateur + Fake_data (fixtures)
```bash
php bin/console doctrine:fixtures:load
```

## Démarrer l'application
```bash
symfony local:server:start
```
identifiant & mot de passe :

- admin
- root12345