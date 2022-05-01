<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220501184315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_interior_list (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE type_interior_list');
        $this->addSql('ALTER TABLE analitic_data CHANGE type_target_rent_list type_target_rent_list VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_rent_length_list type_rent_length_list VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE status_rent status_rent VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE box_type_list box_type_list VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE road_type_list road_type_list VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE interior_material interior_material VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE gas gas VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE by_100 by_100 VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ower ower VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE automobile_marks CHANGE mark_name mark_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE automobiles CHANGE model_name model_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_link photo_link VARCHAR(2500) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE target_list CHANGE target_name target_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE type_road_list CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE types_boxes CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE types_length_rent CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE types_status_rent CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
