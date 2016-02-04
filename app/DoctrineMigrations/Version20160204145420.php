<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160204145420 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE spe_item (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spe_animal (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spe (id INT AUTO_INCREMENT NOT NULL, feature VARCHAR(255) NOT NULL, amount DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, operation VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BB11E33A1FD77566 (feature), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE spe_item ADD CONSTRAINT FK_77B0A5C0BF396750 FOREIGN KEY (id) REFERENCES spe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spe_animal ADD CONSTRAINT FK_98A82005BF396750 FOREIGN KEY (id) REFERENCES spe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE carrier CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE carrier ADD CONSTRAINT FK_4739F11CBF396750 FOREIGN KEY (id) REFERENCES animal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE armor CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE armor ADD CONSTRAINT FK_BF27FEFCBF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE weapon CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE weapon ADD CONSTRAINT FK_6933A7E6BF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipment DROP type, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D583BF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE container CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE container ADD CONSTRAINT FK_C7A2EC1BBF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pet CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE pet ADD CONSTRAINT FK_E4529B85BF396750 FOREIGN KEY (id) REFERENCES animal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shield CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE shield ADD CONSTRAINT FK_1E93D2E8BF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE herb CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE herb ADD CONSTRAINT FK_2F7F123BBF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE clothing CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE clothing ADD CONSTRAINT FK_139C38B1BF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE common CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE common ADD CONSTRAINT FK_E5EC7051BF396750 FOREIGN KEY (id) REFERENCES item (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mount CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE mount ADD CONSTRAINT FK_3AE9FA03BF396750 FOREIGN KEY (id) REFERENCES animal (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spe_item DROP FOREIGN KEY FK_77B0A5C0BF396750');
        $this->addSql('ALTER TABLE spe_animal DROP FOREIGN KEY FK_98A82005BF396750');
        $this->addSql('DROP TABLE spe_item');
        $this->addSql('DROP TABLE spe_animal');
        $this->addSql('DROP TABLE spe');
        $this->addSql('ALTER TABLE armor DROP FOREIGN KEY FK_BF27FEFCBF396750');
        $this->addSql('ALTER TABLE armor CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE carrier DROP FOREIGN KEY FK_4739F11CBF396750');
        $this->addSql('ALTER TABLE carrier CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE clothing DROP FOREIGN KEY FK_139C38B1BF396750');
        $this->addSql('ALTER TABLE clothing CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE common DROP FOREIGN KEY FK_E5EC7051BF396750');
        $this->addSql('ALTER TABLE common CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE container DROP FOREIGN KEY FK_C7A2EC1BBF396750');
        $this->addSql('ALTER TABLE container CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D583BF396750');
        $this->addSql('ALTER TABLE equipment ADD type VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE herb DROP FOREIGN KEY FK_2F7F123BBF396750');
        $this->addSql('ALTER TABLE herb CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE mount DROP FOREIGN KEY FK_3AE9FA03BF396750');
        $this->addSql('ALTER TABLE mount CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE pet DROP FOREIGN KEY FK_E4529B85BF396750');
        $this->addSql('ALTER TABLE pet CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE shield DROP FOREIGN KEY FK_1E93D2E8BF396750');
        $this->addSql('ALTER TABLE shield CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE weapon DROP FOREIGN KEY FK_6933A7E6BF396750');
        $this->addSql('ALTER TABLE weapon CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}
