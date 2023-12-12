<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231208111120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modele_test ADD create_by_id INT NOT NULL, ADD update_by_id INT NOT NULL');
        $this->addSql('ALTER TABLE modele_test ADD CONSTRAINT FK_1EF80A2B9E085865 FOREIGN KEY (create_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modele_test ADD CONSTRAINT FK_1EF80A2BCA83C286 FOREIGN KEY (update_by_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1EF80A2B9E085865 ON modele_test (create_by_id)');
        $this->addSql('CREATE INDEX IDX_1EF80A2BCA83C286 ON modele_test (update_by_id)');
        $this->addSql('ALTER TABLE mon_type_t ADD create_by_id INT NOT NULL, ADD update_by_id INT NOT NULL');
        $this->addSql('ALTER TABLE mon_type_t ADD CONSTRAINT FK_7FAC12949E085865 FOREIGN KEY (create_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE mon_type_t ADD CONSTRAINT FK_7FAC1294CA83C286 FOREIGN KEY (update_by_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7FAC12949E085865 ON mon_type_t (create_by_id)');
        $this->addSql('CREATE INDEX IDX_7FAC1294CA83C286 ON mon_type_t (update_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modele_test DROP FOREIGN KEY FK_1EF80A2B9E085865');
        $this->addSql('ALTER TABLE modele_test DROP FOREIGN KEY FK_1EF80A2BCA83C286');
        $this->addSql('ALTER TABLE mon_type_t DROP FOREIGN KEY FK_7FAC12949E085865');
        $this->addSql('ALTER TABLE mon_type_t DROP FOREIGN KEY FK_7FAC1294CA83C286');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_7FAC12949E085865 ON mon_type_t');
        $this->addSql('DROP INDEX IDX_7FAC1294CA83C286 ON mon_type_t');
        $this->addSql('ALTER TABLE mon_type_t DROP create_by_id, DROP update_by_id');
        $this->addSql('DROP INDEX IDX_1EF80A2B9E085865 ON modele_test');
        $this->addSql('DROP INDEX IDX_1EF80A2BCA83C286 ON modele_test');
        $this->addSql('ALTER TABLE modele_test DROP create_by_id, DROP update_by_id');
    }
}
