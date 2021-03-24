<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210324044606 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, enseigne VARCHAR(255) NOT NULL, raison_sociale VARCHAR(255) NOT NULL, ridet VARCHAR(255) NOT NULL, num_cafat VARCHAR(255) NOT NULL, code_naf VARCHAR(255) NOT NULL, adresse_exec VARCHAR(255) NOT NULL, cp_exec VARCHAR(255) NOT NULL, commune_exec VARCHAR(255) NOT NULL, adresse_siege VARCHAR(255) NOT NULL, cp_siege VARCHAR(255) NOT NULL, commune_siege VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, convention_collective VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, nb_salaries INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, age INT NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date_naiss DATE NOT NULL, lieu_naiss VARCHAR(255) NOT NULL, nationalite VARCHAR(255) NOT NULL, num_cafat VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, bp VARCHAR(255) NOT NULL, cp INT NOT NULL, commune VARCHAR(255) NOT NULL, annee_prec VARCHAR(255) NOT NULL, dernier_emploi VARCHAR(255) DEFAULT NULL, etablissement VARCHAR(255) NOT NULL, dernier_diplome VARCHAR(255) NOT NULL, annee_dernier_diplome INT NOT NULL, diplome_en_cours VARCHAR(255) DEFAULT NULL, handicap TINYINT(1) NOT NULL, droit_img TINYINT(1) NOT NULL, type_formation VARCHAR(255) NOT NULL, licence VARCHAR(255) NOT NULL, decua_rempli TINYINT(1) DEFAULT NULL, admissibilite TINYINT(1) DEFAULT NULL, confirm_entretien VARCHAR(255) DEFAULT NULL, admis_list_comp VARCHAR(255) DEFAULT NULL, presence_info_cfa TINYINT(1) NOT NULL, presence_atelier TINYINT(1) NOT NULL, presence_job_dating TINYINT(1) NOT NULL, inscription VARCHAR(255) NOT NULL, observations VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant_entreprise (etudiant_id INT NOT NULL, entreprise_id INT NOT NULL, INDEX IDX_C3B6951ADDEAB1A3 (etudiant_id), INDEX IDX_C3B6951AA4AEAFEA (entreprise_id), PRIMARY KEY(etudiant_id, entreprise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, fonction_occupe VARCHAR(255) NOT NULL, annee_experience INT NOT NULL, diplome_obtenu VARCHAR(255) NOT NULL, diplome_max VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date_habilitation DATE DEFAULT NULL, date_diplome DATE NOT NULL, date_envoi_email_tutorat DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur_entreprise (tuteur_id INT NOT NULL, entreprise_id INT NOT NULL, INDEX IDX_954D438D86EC68D8 (tuteur_id), INDEX IDX_954D438DA4AEAFEA (entreprise_id), PRIMARY KEY(tuteur_id, entreprise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur_etudiant (tuteur_id INT NOT NULL, etudiant_id INT NOT NULL, INDEX IDX_3BFDB43386EC68D8 (tuteur_id), INDEX IDX_3BFDB433DDEAB1A3 (etudiant_id), PRIMARY KEY(tuteur_id, etudiant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etudiant_entreprise ADD CONSTRAINT FK_C3B6951ADDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etudiant_entreprise ADD CONSTRAINT FK_C3B6951AA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_entreprise ADD CONSTRAINT FK_954D438D86EC68D8 FOREIGN KEY (tuteur_id) REFERENCES tuteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_entreprise ADD CONSTRAINT FK_954D438DA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_etudiant ADD CONSTRAINT FK_3BFDB43386EC68D8 FOREIGN KEY (tuteur_id) REFERENCES tuteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_etudiant ADD CONSTRAINT FK_3BFDB433DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant_entreprise DROP FOREIGN KEY FK_C3B6951AA4AEAFEA');
        $this->addSql('ALTER TABLE tuteur_entreprise DROP FOREIGN KEY FK_954D438DA4AEAFEA');
        $this->addSql('ALTER TABLE etudiant_entreprise DROP FOREIGN KEY FK_C3B6951ADDEAB1A3');
        $this->addSql('ALTER TABLE tuteur_etudiant DROP FOREIGN KEY FK_3BFDB433DDEAB1A3');
        $this->addSql('ALTER TABLE tuteur_entreprise DROP FOREIGN KEY FK_954D438D86EC68D8');
        $this->addSql('ALTER TABLE tuteur_etudiant DROP FOREIGN KEY FK_3BFDB43386EC68D8');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE etudiant_entreprise');
        $this->addSql('DROP TABLE tuteur');
        $this->addSql('DROP TABLE tuteur_entreprise');
        $this->addSql('DROP TABLE tuteur_etudiant');
        $this->addSql('DROP TABLE user');
    }
}
