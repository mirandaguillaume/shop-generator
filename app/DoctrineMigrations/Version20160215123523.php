<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160215123523 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477EA000B10');
        $this->addSql('DROP INDEX IDX_5E3DE477EA000B10 ON skill');
        $this->addSql('ALTER TABLE skill CHANGE class_id job_id INT NOT NULL');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('CREATE INDEX IDX_5E3DE477BE04EA9 ON skill (job_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477BE04EA9');
        $this->addSql('DROP INDEX IDX_5E3DE477BE04EA9 ON skill');
        $this->addSql('ALTER TABLE skill CHANGE job_id class_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477EA000B10 FOREIGN KEY (class_id) REFERENCES job (id)');
        $this->addSql('CREATE INDEX IDX_5E3DE477EA000B10 ON skill (class_id)');
    }
}
