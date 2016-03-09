<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160309125038 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE species (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE foe ADD species_id INT DEFAULT NULL, ADD armor INT DEFAULT 0 NOT NULL, ADD damage VARCHAR(255) NOT NULL, CHANGE species accuracy VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE foe ADD CONSTRAINT FK_6CA68C3FB2A1D860 FOREIGN KEY (species_id) REFERENCES species (id)');
        $this->addSql('CREATE INDEX IDX_6CA68C3FB2A1D860 ON foe (species_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE foe DROP FOREIGN KEY FK_6CA68C3FB2A1D860');
        $this->addSql('DROP TABLE species');
        $this->addSql('DROP INDEX IDX_6CA68C3FB2A1D860 ON foe');
        $this->addSql('ALTER TABLE foe ADD species VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP species_id, DROP armor, DROP accuracy, DROP damage');
    }
}
