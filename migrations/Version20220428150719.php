<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428150719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO \"user\" (id, email, password, roles) values (1, 'dreidemyromain@gmail.com', '$2y$13$5essdseoqPcWA1Oyoa9U2uuH6WHSyQwAs.dqH1OGmwoHItiCFH1Hu', '[]')");
    }

    public function down(Schema $schema): void
    {}
}
