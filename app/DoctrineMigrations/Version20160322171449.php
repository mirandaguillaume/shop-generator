<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160322171449 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ryuujin ADD race_id INT DEFAULT NULL, DROP race');
        $this->addSql('ALTER TABLE ryuujin ADD CONSTRAINT FK_FC10AF236E59D40D FOREIGN KEY (race_id) REFERENCES race (id)');
        $this->addSql('CREATE INDEX IDX_FC10AF236E59D40D ON ryuujin (race_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ryuujin DROP FOREIGN KEY FK_FC10AF236E59D40D');
        $this->addSql('DROP INDEX IDX_FC10AF236E59D40D ON ryuujin');
        $this->addSql('ALTER TABLE ryuujin ADD race VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP race_id');
    }
}
