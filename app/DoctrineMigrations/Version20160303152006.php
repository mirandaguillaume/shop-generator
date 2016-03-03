<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160303152006 extends AbstractMigration
{

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, level INT NOT NULL, max_hp INT NOT NULL, hp INT NOT NULL, max_mp INT NOT NULL, mp INT NOT NULL, str INT NOT NULL, dex VARCHAR(255) NOT NULL, intelligence INT NOT NULL, spi INT NOT NULL, actor_condition INT DEFAULT NULL, initiative INT DEFAULT NULL, name_slug VARCHAR(128) NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT NOT NULL, user_id INT DEFAULT NULL, first_class_id INT DEFAULT NULL, secondary_class_id INT DEFAULT NULL, first_type_id INT DEFAULT NULL, secondary_type_id INT DEFAULT NULL, weapon_id INT DEFAULT NULL, xp INT NOT NULL, gender VARCHAR(1) NOT NULL, age INT NOT NULL, personal_item VARCHAR(255) NOT NULL, appearance LONGTEXT DEFAULT NULL, hometown LONGTEXT DEFAULT NULL, notes LONGTEXT DEFAULT NULL, fumble_points INT NOT NULL, INDEX IDX_34DCD176A76ED395 (user_id), INDEX IDX_34DCD1765E18394B (first_class_id), INDEX IDX_34DCD17671A1D756 (secondary_class_id), INDEX IDX_34DCD176D6C0E06F (first_type_id), INDEX IDX_34DCD176527A53 (secondary_type_id), INDEX IDX_34DCD17695B82273 (weapon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE foe (id INT NOT NULL, habitat VARCHAR(255) NOT NULL, season VARCHAR(255) DEFAULT NULL, loot LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', dragonica_number INT DEFAULT NULL, description LONGTEXT NOT NULL, spe_ability LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD1765E18394B FOREIGN KEY (first_class_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD17671A1D756 FOREIGN KEY (secondary_class_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176D6C0E06F FOREIGN KEY (first_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176527A53 FOREIGN KEY (secondary_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD17695B82273 FOREIGN KEY (weapon_id) REFERENCES weapon (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176BF396750 FOREIGN KEY (id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE foe ADD CONSTRAINT FK_6CA68C3FBF396750 FOREIGN KEY (id) REFERENCES actor (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176BF396750');
        $this->addSql('ALTER TABLE foe DROP FOREIGN KEY FK_6CA68C3FBF396750');
        $this->addSql('DROP TABLE actor');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE foe');
    }
}
