<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200928031812 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tuteur_entreprise (tuteur_id INT NOT NULL, entreprise_id INT NOT NULL, INDEX IDX_954D438D86EC68D8 (tuteur_id), INDEX IDX_954D438DA4AEAFEA (entreprise_id), PRIMARY KEY(tuteur_id, entreprise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur_etudiant (tuteur_id INT NOT NULL, etudiant_id INT NOT NULL, INDEX IDX_3BFDB43386EC68D8 (tuteur_id), INDEX IDX_3BFDB433DDEAB1A3 (etudiant_id), PRIMARY KEY(tuteur_id, etudiant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tuteur_entreprise ADD CONSTRAINT FK_954D438D86EC68D8 FOREIGN KEY (tuteur_id) REFERENCES tuteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_entreprise ADD CONSTRAINT FK_954D438DA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_etudiant ADD CONSTRAINT FK_3BFDB43386EC68D8 FOREIGN KEY (tuteur_id) REFERENCES tuteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tuteur_etudiant ADD CONSTRAINT FK_3BFDB433DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tuteur_entreprise');
        $this->addSql('DROP TABLE tuteur_etudiant');
    }
}
