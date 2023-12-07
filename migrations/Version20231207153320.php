<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231207153320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modele_vehicule DROP FOREIGN KEY FK_41F7C11FF14984CF');
        $this->addSql('ALTER TABLE modele_vehicule ADD CONSTRAINT FK_41F7C11FF14984CF FOREIGN KEY (id_marque_vehicule_id) REFERENCES marque_vehicule (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modele_vehicule DROP FOREIGN KEY FK_41F7C11FF14984CF');
        $this->addSql('ALTER TABLE modele_vehicule ADD CONSTRAINT FK_41F7C11FF14984CF FOREIGN KEY (id_marque_vehicule_id) REFERENCES modele_vehicule (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
