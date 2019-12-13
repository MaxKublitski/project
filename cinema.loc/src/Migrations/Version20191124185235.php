<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191124185235 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE movies ADD title_id INT DEFAULT NULL, ADD description_id INT DEFAULT NULL, ADD img_id INT DEFAULT NULL, DROP title, DROP description, DROP img');
        $this->addSql('ALTER TABLE movies ADD CONSTRAINT FK_C61EED30A9F87BD FOREIGN KEY (title_id) REFERENCES `seanse` (id)');
        $this->addSql('ALTER TABLE movies ADD CONSTRAINT FK_C61EED30D9F966B FOREIGN KEY (description_id) REFERENCES `seanse` (id)');
        $this->addSql('ALTER TABLE movies ADD CONSTRAINT FK_C61EED30C06A9F55 FOREIGN KEY (img_id) REFERENCES `seanse` (id)');
        $this->addSql('CREATE INDEX IDX_C61EED30A9F87BD ON movies (title_id)');
        $this->addSql('CREATE INDEX IDX_C61EED30D9F966B ON movies (description_id)');
        $this->addSql('CREATE INDEX IDX_C61EED30C06A9F55 ON movies (img_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE movies DROP FOREIGN KEY FK_C61EED30A9F87BD');
        $this->addSql('ALTER TABLE movies DROP FOREIGN KEY FK_C61EED30D9F966B');
        $this->addSql('ALTER TABLE movies DROP FOREIGN KEY FK_C61EED30C06A9F55');
        $this->addSql('DROP INDEX IDX_C61EED30A9F87BD ON movies');
        $this->addSql('DROP INDEX IDX_C61EED30D9F966B ON movies');
        $this->addSql('DROP INDEX IDX_C61EED30C06A9F55 ON movies');
        $this->addSql('ALTER TABLE movies ADD title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD img VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP title_id, DROP description_id, DROP img_id');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
    }
}
