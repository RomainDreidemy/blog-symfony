<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427150300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tag_post');
        $this->addSql('ALTER TABLE post ALTER updated_at SET DEFAULT \'now()\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE tag_post (tag_id INT NOT NULL, post_id INT NOT NULL, PRIMARY KEY(tag_id, post_id))');
        $this->addSql('CREATE INDEX idx_b485d33b4b89032c ON tag_post (post_id)');
        $this->addSql('CREATE INDEX idx_b485d33bbad26311 ON tag_post (tag_id)');
        $this->addSql('ALTER TABLE tag_post ADD CONSTRAINT fk_b485d33bbad26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tag_post ADD CONSTRAINT fk_b485d33b4b89032c FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE post ALTER updated_at SET DEFAULT \'2022-04-27 14:46:15.052617\'');
    }
}
