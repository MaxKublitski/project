<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191127094703 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE seanse DROP FOREIGN KEY FK_95BFEF5F2EF90243');
        $this->addSql('ALTER TABLE seanse DROP FOREIGN KEY FK_95BFEF5F39AD0220');
        $this->addSql('ALTER TABLE seanse DROP FOREIGN KEY FK_95BFEF5FD6691C30');
        $this->addSql('DROP INDEX IDX_95BFEF5FD6691C30 ON seanse');
        $this->addSql('DROP INDEX IDX_95BFEF5F39AD0220 ON seanse');
        $this->addSql('DROP INDEX IDX_95BFEF5F2EF90243 ON seanse');
        $this->addSql('ALTER TABLE seanse ADD movie_id INT DEFAULT NULL, DROP movie_title_id, DROP movie_description_id, DROP movie_img_id');
        $this->addSql('ALTER TABLE seanse ADD CONSTRAINT FK_95BFEF5F8F93B6FC FOREIGN KEY (movie_id) REFERENCES movies (id)');
        $this->addSql('CREATE INDEX IDX_95BFEF5F8F93B6FC ON seanse (movie_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE movies CHANGE description description LONGTEXT DEFAULT NULL, CHANGE img img VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE movies CHANGE description description LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE img img LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE seanse DROP FOREIGN KEY FK_95BFEF5F8F93B6FC');
        $this->addSql('DROP INDEX IDX_95BFEF5F8F93B6FC ON seanse');
        $this->addSql('ALTER TABLE seanse ADD movie_title_id INT DEFAULT NULL, ADD movie_description_id INT DEFAULT NULL, ADD movie_img_id INT DEFAULT NULL, DROP movie_id');
        $this->addSql('ALTER TABLE seanse ADD CONSTRAINT FK_95BFEF5F2EF90243 FOREIGN KEY (movie_description_id) REFERENCES movies (id)');
        $this->addSql('ALTER TABLE seanse ADD CONSTRAINT FK_95BFEF5F39AD0220 FOREIGN KEY (movie_img_id) REFERENCES movies (id)');
        $this->addSql('ALTER TABLE seanse ADD CONSTRAINT FK_95BFEF5FD6691C30 FOREIGN KEY (movie_title_id) REFERENCES movies (id)');
        $this->addSql('CREATE INDEX IDX_95BFEF5FD6691C30 ON seanse (movie_title_id)');
        $this->addSql('CREATE INDEX IDX_95BFEF5F39AD0220 ON seanse (movie_img_id)');
        $this->addSql('CREATE INDEX IDX_95BFEF5F2EF90243 ON seanse (movie_description_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
    }
}
