<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160225171056 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX FK_34DCD1768F5EA509 ON person');
        $this->addSql('DROP INDEX FK_34DCD176C54C8C93 ON person');
        $this->addSql('ALTER TABLE person ADD first_class_id INT DEFAULT NULL, ADD secondary_class_id INT DEFAULT NULL, ADD first_type_id INT DEFAULT NULL, ADD secondary_type_id INT DEFAULT NULL, DROP classe_id, DROP type_id');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD17673533547 FOREIGN KEY (first_class_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176107AE070 FOREIGN KEY (secondary_class_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176D6C0E06F FOREIGN KEY (first_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176527A53 FOREIGN KEY (secondary_type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_34DCD17673533547 ON person (first_class_id)');
        $this->addSql('CREATE INDEX IDX_34DCD176107AE070 ON person (secondary_class_id)');
        $this->addSql('CREATE INDEX IDX_34DCD176D6C0E06F ON person (first_type_id)');
        $this->addSql('CREATE INDEX IDX_34DCD176527A53 ON person (secondary_type_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD17673533547');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176107AE070');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176D6C0E06F');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176527A53');
        $this->addSql('DROP INDEX IDX_34DCD17673533547 ON person');
        $this->addSql('DROP INDEX IDX_34DCD176107AE070 ON person');
        $this->addSql('DROP INDEX IDX_34DCD176D6C0E06F ON person');
        $this->addSql('DROP INDEX IDX_34DCD176527A53 ON person');
        $this->addSql('ALTER TABLE person ADD classe_id INT DEFAULT NULL, ADD type_id INT DEFAULT NULL, DROP first_class_id, DROP secondary_class_id, DROP first_type_id, DROP secondary_type_id');
        $this->addSql('CREATE INDEX FK_34DCD1768F5EA509 ON person (classe_id)');
        $this->addSql('CREATE INDEX FK_34DCD176C54C8C93 ON person (type_id)');
    }
}
