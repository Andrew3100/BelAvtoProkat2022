<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413064646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analitic_data (id INT AUTO_INCREMENT NOT NULL, type_target_rent_list VARCHAR(255) NOT NULL, type_rent_length_list VARCHAR(255) NOT NULL, status_rent VARCHAR(255) NOT NULL, count_people INT NOT NULL, trunk_capacity INT NOT NULL, soundbar INT NOT NULL, box_type_list VARCHAR(255) NOT NULL, road_type_list VARCHAR(255) NOT NULL, interior_material VARCHAR(255) NOT NULL, gas VARCHAR(255) NOT NULL, by_100 VARCHAR(255) NOT NULL, ower VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE analitic_data');
        $this->addSql('ALTER TABLE automobile_marks CHANGE mark_name mark_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE automobiles CHANGE model_name model_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_link photo_link VARCHAR(2500) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE target_list CHANGE target_name target_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
