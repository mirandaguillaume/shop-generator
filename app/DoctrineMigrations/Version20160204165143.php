<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160204165143 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE shop (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shop_items (shop_id INT NOT NULL, item_id INT NOT NULL, INDEX IDX_2608B31F4D16C4DD (shop_id), INDEX IDX_2608B31F126F525E (item_id), PRIMARY KEY(shop_id, item_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specified_item (id INT AUTO_INCREMENT NOT NULL, item_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_875E98EE126F525E (item_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instance_features (instance_id INT NOT NULL, feature_id INT NOT NULL, INDEX IDX_BD6ADBD43A51721D (instance_id), INDEX IDX_BD6ADBD460E4B879 (feature_id), PRIMARY KEY(instance_id, feature_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE shop_items ADD CONSTRAINT FK_2608B31F4D16C4DD FOREIGN KEY (shop_id) REFERENCES shop (id)');
        $this->addSql('ALTER TABLE shop_items ADD CONSTRAINT FK_2608B31F126F525E FOREIGN KEY (item_id) REFERENCES specified_item (id)');
        $this->addSql('ALTER TABLE specified_item ADD CONSTRAINT FK_875E98EE126F525E FOREIGN KEY (item_id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE instance_features ADD CONSTRAINT FK_BD6ADBD43A51721D FOREIGN KEY (instance_id) REFERENCES specified_item (id)');
        $this->addSql('ALTER TABLE instance_features ADD CONSTRAINT FK_BD6ADBD460E4B879 FOREIGN KEY (feature_id) REFERENCES spe (id)');
        $this->addSql('DROP INDEX UNIQ_BB11E33A1FD77566 ON spe');
        $this->addSql('DROP INDEX UNIQ_1F1B251E5E237E06 ON item');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE shop_items DROP FOREIGN KEY FK_2608B31F4D16C4DD');
        $this->addSql('ALTER TABLE shop_items DROP FOREIGN KEY FK_2608B31F126F525E');
        $this->addSql('ALTER TABLE instance_features DROP FOREIGN KEY FK_BD6ADBD43A51721D');
        $this->addSql('DROP TABLE shop');
        $this->addSql('DROP TABLE shop_items');
        $this->addSql('DROP TABLE specified_item');
        $this->addSql('DROP TABLE instance_features');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F1B251E5E237E06 ON item (name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BB11E33A1FD77566 ON spe (feature)');
    }
}
