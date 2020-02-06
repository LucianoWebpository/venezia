<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200204111108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bestelregel (id INT AUTO_INCREMENT NOT NULL, aantal INT NOT NULL, afleverdatum DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ijsmaker (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, wachtwoord VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ijsrecept (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, ingredientenlijst VARCHAR(255) NOT NULL, kosten DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ijswinkel (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telefoon VARCHAR(255) NOT NULL, wachtwoord VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bestelregel');
        $this->addSql('DROP TABLE ijsmaker');
        $this->addSql('DROP TABLE ijsrecept');
        $this->addSql('DROP TABLE ijswinkel');
    }
}
