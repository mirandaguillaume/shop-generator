<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160322171222 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, artifacts LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', benedictions LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reveil (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, cost INT NOT NULL, effect LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE benediction (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, effect LONGTEXT NOT NULL, description LONGTEXT NOT NULL, cost INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ryuujin (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, race VARCHAR(255) NOT NULL, level INT NOT NULL, alternative_shape VARCHAR(255) NOT NULL, artifact VARCHAR(255) NOT NULL, artifact_inscription VARCHAR(255) NOT NULL, max_lp INT NOT NULL, lp INT NOT NULL, looks LONGTEXT NOT NULL, personality LONGTEXT NOT NULL, goal LONGTEXT NOT NULL, living_quarters VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE race');
        $this->addSql('DROP TABLE reveil');
        $this->addSql('DROP TABLE benediction');
        $this->addSql('DROP TABLE ryuujin');
    }
}
