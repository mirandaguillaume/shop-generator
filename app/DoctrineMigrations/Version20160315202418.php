<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160315202418 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE spe_ability (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, effect LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE foe_speAbilities (foe_id INT NOT NULL, speAbility_id INT NOT NULL, INDEX IDX_F0A1FF22E1F5B66B (foe_id), INDEX IDX_F0A1FF2221425E52 (speAbility_id), PRIMARY KEY(foe_id, speAbility_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE foe_speAbilities ADD CONSTRAINT FK_F0A1FF22E1F5B66B FOREIGN KEY (foe_id) REFERENCES foe (id)');
        $this->addSql('ALTER TABLE foe_speAbilities ADD CONSTRAINT FK_F0A1FF2221425E52 FOREIGN KEY (speAbility_id) REFERENCES spe_ability (id)');
        $this->addSql('ALTER TABLE foe DROP spe_ability, CHANGE armor armor INT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE foe_speAbilities DROP FOREIGN KEY FK_F0A1FF2221425E52');
        $this->addSql('DROP TABLE spe_ability');
        $this->addSql('DROP TABLE foe_speAbilities');
        $this->addSql('ALTER TABLE foe ADD spe_ability LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE armor armor INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD1765E18394B');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD17671A1D756');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176BF396750');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD1765E18394B');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD17671A1D756');
        $this->addSql('DROP INDEX idx_34dcd1765e18394b ON person');
        $this->addSql('CREATE INDEX IDX_34DCD17673533547 ON person (first_class_id)');
        $this->addSql('DROP INDEX idx_34dcd17671a1d756 ON person');
        $this->addSql('CREATE INDEX IDX_34DCD176107AE070 ON person (secondary_class_id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD1765E18394B FOREIGN KEY (first_class_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD17671A1D756 FOREIGN KEY (secondary_class_id) REFERENCES job (id)');
    }
}
