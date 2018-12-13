<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181213140234 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE eureka_user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP TABLE eureka_messagechat');
        $this->addSql('DROP TABLE eureka_signaler');
        $this->addSql('DROP TABLE eureka_motcensure');
        $this->addSql('DROP TABLE eureka_soussujet');
        $this->addSql('DROP TABLE eureka_droit');
        $this->addSql('DROP TABLE eureka_sujet');
        $this->addSql('DROP TABLE eureka_professeur');
        $this->addSql('DROP TABLE eureka_eleve');
        $this->addSql('DROP TABLE eureka_favoris');
        $this->addSql('DROP TABLE eureka_groupe');
        $this->addSql('DROP TABLE eureka_matiere');
        $this->addSql('DROP TABLE eureka_message');
        $this->addSql('DROP TABLE eureka_rubrique');
        $this->addSql('ALTER TABLE eureka_user ADD mail_upec VARCHAR(150) NOT NULL');
        $this->addSql('ALTER TABLE eureka_user ADD roles JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE eureka_user DROP mailupec');
        $this->addSql('ALTER TABLE eureka_user DROP photoprofil');
        $this->addSql('ALTER TABLE eureka_user DROP mailvalider');
        $this->addSql('ALTER TABLE eureka_user ALTER mdp SET NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_40B71569481EDB8B ON eureka_user (mail_upec)');
        $this->addSql('ALTER INDEX mail_unique RENAME TO UNIQ_40B715695126AC48');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE eureka_user_id_seq CASCADE');
        $this->addSql('CREATE TABLE eureka_messagechat (numeromessage INT NOT NULL, texte VARCHAR(255) NOT NULL, groupe VARCHAR(100) NOT NULL, createur VARCHAR(150) DEFAULT NULL, PRIMARY KEY(numeromessage))');
        $this->addSql('CREATE TABLE eureka_signaler (mail VARCHAR(150) NOT NULL, numeromessage INT NOT NULL, PRIMARY KEY(mail, numeromessage))');
        $this->addSql('CREATE TABLE eureka_motcensure (mot VARCHAR(150) NOT NULL, PRIMARY KEY(mot))');
        $this->addSql('CREATE TABLE eureka_soussujet (nom VARCHAR(255) NOT NULL, sujet VARCHAR(100) NOT NULL, PRIMARY KEY(nom))');
        $this->addSql('CREATE TABLE eureka_droit (mail VARCHAR(150) NOT NULL, forum INT NOT NULL, chat INT NOT NULL, compte INT NOT NULL, PRIMARY KEY(mail))');
        $this->addSql('CREATE TABLE eureka_sujet (nom VARCHAR(100) NOT NULL, rubrique VARCHAR(100) NOT NULL, PRIMARY KEY(nom))');
        $this->addSql('CREATE TABLE eureka_professeur (mail VARCHAR(150) NOT NULL, nommatiere VARCHAR(100) NOT NULL, PRIMARY KEY(mail, nommatiere))');
        $this->addSql('CREATE TABLE eureka_eleve (mail VARCHAR(150) NOT NULL, filiere VARCHAR(50) NOT NULL, promo INT NOT NULL, PRIMARY KEY(mail))');
        $this->addSql('CREATE TABLE eureka_favoris (mail VARCHAR(150) NOT NULL, nomsoussujet VARCHAR(255) NOT NULL, notification INT NOT NULL, PRIMARY KEY(mail, nomsoussujet))');
        $this->addSql('CREATE TABLE eureka_groupe (nom VARCHAR(100) NOT NULL, PRIMARY KEY(nom))');
        $this->addSql('CREATE TABLE eureka_matiere (nom VARCHAR(100) NOT NULL, PRIMARY KEY(nom))');
        $this->addSql('CREATE TABLE eureka_message (idmessage INT NOT NULL, nom VARCHAR(255) NOT NULL, datecrea DATE NOT NULL, texte VARCHAR(15000) NOT NULL, soussujet VARCHAR(255) NOT NULL, createur VARCHAR(150) DEFAULT NULL, PRIMARY KEY(idmessage))');
        $this->addSql('CREATE TABLE eureka_rubrique (nom VARCHAR(100) NOT NULL, PRIMARY KEY(nom))');
        $this->addSql('DROP INDEX UNIQ_40B71569481EDB8B');
        $this->addSql('ALTER TABLE eureka_user ADD mailupec VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE eureka_user ADD photoprofil VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE eureka_user ADD mailvalider INT NOT NULL');
        $this->addSql('ALTER TABLE eureka_user DROP mail_upec');
        $this->addSql('ALTER TABLE eureka_user DROP roles');
        $this->addSql('ALTER TABLE eureka_user ALTER mdp DROP NOT NULL');
        $this->addSql('ALTER INDEX uniq_40b715695126ac48 RENAME TO mail_unique');
    }
}
