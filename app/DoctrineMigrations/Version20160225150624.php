<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160225150624 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, level INT NOT NULL, max_hp INT NOT NULL, hp INT NOT NULL, max_mp INT NOT NULL, mp INT NOT NULL, str INT NOT NULL, dex VARCHAR(255) NOT NULL, intelligence INT NOT NULL, spi INT NOT NULL, actor_condition INT NOT NULL, initiative INT NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person DROP name, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176BF396750 FOREIGN KEY (id) REFERENCES actor (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176BF396750');
        $this->addSql('DROP TABLE actor');
        $this->addSql('ALTER TABLE person ADD name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}
