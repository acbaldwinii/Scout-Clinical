<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221112222511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create the Bicycle table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bicycle ADD seat VARCHAR(255) NOT NULL, ADD frame VARCHAR(20) NOT NULL, ADD brakes VARCHAR(30) NOT NULL, ADD color VARCHAR(20) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bicycle DROP seat, DROP frame, DROP brakes, DROP color');
    }
}
