<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160215112204 extends AbstractMigration implements ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("UPDATE equipment SET location='location.one_hand' WHERE location='1 hand'");
        $this->addSql("UPDATE equipment SET location='location.two_hands' WHERE location='2 hands'");
        $this->addSql("UPDATE equipment SET location='location.chest' WHERE location='Chest'");
        $this->addSql("UPDATE equipment SET location='location.shoes' WHERE location='Shoes'");
        $this->addSql("UPDATE equipment SET location='location.staff' WHERE location='Staff'");
        $this->addSql("UPDATE equipment SET location='location.hats' WHERE location='Hats'");
        $this->addSql("UPDATE equipment SET location='location.accessories' WHERE location='Accessories'");
        $this->addSql("UPDATE equipment SET location='location.capes' WHERE location='Capes'");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
