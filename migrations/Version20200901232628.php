<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200901232628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, collaborateur_id INT DEFAULT NULL, order_number INT NOT NULL, deviation_type VARCHAR(255) NOT NULL, reason_code VARCHAR(255) NOT NULL, creation_date DATETIME DEFAULT NULL, modification_date DATETIME DEFAULT NULL, deviation_date DATETIME DEFAULT NULL, store INT NOT NULL, country VARCHAR(255) NOT NULL, user_id VARCHAR(255) NOT NULL, order_type VARCHAR(255) NOT NULL, traitement TINYINT(1) NOT NULL, debut_traitement DATETIME DEFAULT NULL, fin_traitement DATETIME DEFAULT NULL, INDEX IDX_F5299398A848E3B1 (collaborateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A848E3B1 FOREIGN KEY (collaborateur_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `order`');
    }
}
