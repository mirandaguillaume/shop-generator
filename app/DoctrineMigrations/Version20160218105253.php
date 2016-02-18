<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160218105253 extends AbstractMigration implements ContainerAwareInterface
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    private $tmp_array;

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->entityManager = $container->get('doctrine.orm.entity_manager');
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spe ADD price_modifier VARCHAR(255) NOT NULL, ADD bonus_modifiers LONGTEXT COMMENT \'(DC2Type:array)\'');
    }

    public function postUp(Schema $schema){

        $all_spe_items = $this->entityManager->getRepository('ItemBundle:SpeItem')->findAll();

        $this->tmp_array = array();

        foreach($all_spe_items as $spe_item){
            $operation = '';
            switch($spe_item->getOperation()){
                case 'addition':
                    $operation = '+';
                    break;
                case 'multiply':
                    $operation = '*';
                    break;
            }
            $this->tmp_array[$spe_item->getId()] = $operation.$spe_item->getAmount();
        }

        $spe_item_repository = $this->entityManager->getRepository('ItemBundle:SpeItem');

        foreach($this->tmp_array as $key => $tmp_spe){
            $spe_item = $spe_item_repository->find($key);
            $spe_item->setPriceModifier($tmp_spe);
            $this->entityManager->persist($spe_item);
        }

        $this->entityManager->flush();
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spe DROP bonus_modifiers, DROP price_modifier');
    }
}
