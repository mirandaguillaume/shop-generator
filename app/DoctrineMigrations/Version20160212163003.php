<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160212163003 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE spell (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, cost INT NOT NULL, target VARCHAR(255) DEFAULT NULL, reach VARCHAR(255) NOT NULL, effect LONGTEXT NOT NULL, level VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FBD8E0F85E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, class_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, effect VARCHAR(255) NOT NULL, used_stats VARCHAR(255) NOT NULL, target VARCHAR(255) NOT NULL, INDEX IDX_5E3DE477EA000B10 (class_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bonuses LONGTEXT NOT NULL, type VARCHAR(255) NOT NULL, season VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE magicType_Spells (spell_id INT NOT NULL, magicType_id INT NOT NULL, INDEX IDX_59780E49567007AE (magicType_id), INDEX IDX_59780E49479EC90D (spell_id), PRIMARY KEY(magicType_id, spell_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477EA000B10 FOREIGN KEY (class_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE magicType_Spells ADD CONSTRAINT FK_59780E49567007AE FOREIGN KEY (magicType_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE magicType_Spells ADD CONSTRAINT FK_59780E49479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE magicType_Spells DROP FOREIGN KEY FK_59780E49479EC90D');
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477EA000B10');
        $this->addSql('ALTER TABLE magicType_Spells DROP FOREIGN KEY FK_59780E49567007AE');
        $this->addSql('DROP TABLE spell');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE magicType_Spells');
    }
}
