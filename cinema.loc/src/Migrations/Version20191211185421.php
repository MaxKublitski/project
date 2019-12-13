<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191211185421 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE hall_orders (order_id INT NOT NULL, hall_id INT NOT NULL, INDEX IDX_3D6AB888D9F6D38 (order_id), INDEX IDX_3D6AB8852AFCFD6 (hall_id), PRIMARY KEY(order_id, hall_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hall_orders ADD CONSTRAINT FK_3D6AB888D9F6D38 FOREIGN KEY (order_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE hall_orders ADD CONSTRAINT FK_3D6AB8852AFCFD6 FOREIGN KEY (hall_id) REFERENCES hall (id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE movies CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE orders ADD seanses_id INT DEFAULT NULL, DROP hall_id, DROP seanse_id, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE13269199 FOREIGN KEY (seanses_id) REFERENCES seanse (id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEEA76ED395 ON orders (user_id)');
        $this->addSql('CREATE INDEX IDX_E52FFDEE13269199 ON orders (seanses_id)');
        $this->addSql('ALTER TABLE seanse CHANGE movie_id movie_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE hall_orders');
        $this->addSql('ALTER TABLE movies CHANGE img img VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEA76ED395');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE13269199');
        $this->addSql('DROP INDEX IDX_E52FFDEEA76ED395 ON orders');
        $this->addSql('DROP INDEX IDX_E52FFDEE13269199 ON orders');
        $this->addSql('ALTER TABLE orders ADD hall_id INT NOT NULL, ADD seanse_id INT NOT NULL, DROP seanses_id, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE seanse CHANGE movie_id movie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
    }
}
