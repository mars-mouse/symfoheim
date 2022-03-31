<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220331170010 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE armour_effect (armour_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_29B2678839A39C84 (armour_id), INDEX IDX_29B26788F5E9B83B (effect_id), PRIMARY KEY(armour_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE close_combat_weapon_effect (close_combat_weapon_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_8E9EEEAB1510CC6A (close_combat_weapon_id), INDEX IDX_8E9EEEABF5E9B83B (effect_id), PRIMARY KEY(close_combat_weapon_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE misc_equipment_effect (misc_equipment_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_FA51660EAF43510A (misc_equipment_id), INDEX IDX_FA51660EF5E9B83B (effect_id), PRIMARY KEY(misc_equipment_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE missile_weapon_effect (missile_weapon_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_ADC5A16573B280EE (missile_weapon_id), INDEX IDX_ADC5A165F5E9B83B (effect_id), PRIMARY KEY(missile_weapon_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE monster_status (monster_id INT NOT NULL, status_id INT NOT NULL, INDEX IDX_7DC0283FC5FF1223 (monster_id), INDEX IDX_7DC0283F6BF700BD (status_id), PRIMARY KEY(monster_id, status_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE monster_type (id INT AUTO_INCREMENT NOT NULL, rarity_id INT NOT NULL, statline_id INT NOT NULL, name VARCHAR(255) NOT NULL, price INT DEFAULT NULL, INDEX IDX_A8A38269F3747573 (rarity_id), UNIQUE INDEX UNIQ_A8A3826940F0004D (statline_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE monster_type_effect (monster_type_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_BD5D1E38672D3DAC (monster_type_id), INDEX IDX_BD5D1E38F5E9B83B (effect_id), PRIMARY KEY(monster_type_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mount_effect (mount_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_70E0EBF8538228B8 (mount_id), INDEX IDX_70E0EBF8F5E9B83B (effect_id), PRIMARY KEY(mount_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race_mount (race_id INT NOT NULL, mount_id INT NOT NULL, INDEX IDX_DCD7DB126E59D40D (race_id), INDEX IDX_DCD7DB12538228B8 (mount_id), PRIMARY KEY(race_id, mount_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_effect (skill_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_992AC5E65585C142 (skill_id), INDEX IDX_992AC5E6F5E9B83B (effect_id), PRIMARY KEY(skill_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spell_effect (spell_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_EC166E7479EC90D (spell_id), INDEX IDX_EC166E7F5E9B83B (effect_id), PRIMARY KEY(spell_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spell_augmented_effect (spell_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_7570EEE6479EC90D (spell_id), INDEX IDX_7570EEE6F5E9B83B (effect_id), PRIMARY KEY(spell_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE status_effect (status_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_B2A39BF6BF700BD (status_id), INDEX IDX_B2A39BFF5E9B83B (effect_id), PRIMARY KEY(status_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warband_misc_equipment (warband_id INT NOT NULL, misc_equipment_id INT NOT NULL, INDEX IDX_98A589BC86B5C1F4 (warband_id), INDEX IDX_98A589BCAF43510A (misc_equipment_id), PRIMARY KEY(warband_id, misc_equipment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warrior_skill (warrior_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_C8CD4F0C452AFEA4 (warrior_id), INDEX IDX_C8CD4F0C5585C142 (skill_id), PRIMARY KEY(warrior_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warrior_close_combat_weapon (warrior_id INT NOT NULL, close_combat_weapon_id INT NOT NULL, INDEX IDX_4769D074452AFEA4 (warrior_id), INDEX IDX_4769D0741510CC6A (close_combat_weapon_id), PRIMARY KEY(warrior_id, close_combat_weapon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warrior_spell (warrior_id INT NOT NULL, spell_id INT NOT NULL, INDEX IDX_46CF66F6452AFEA4 (warrior_id), INDEX IDX_46CF66F6479EC90D (spell_id), PRIMARY KEY(warrior_id, spell_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warrior_status (warrior_id INT NOT NULL, status_id INT NOT NULL, INDEX IDX_BC413D03452AFEA4 (warrior_id), INDEX IDX_BC413D036BF700BD (status_id), PRIMARY KEY(warrior_id, status_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warrior_type_skill_type (warrior_type_id INT NOT NULL, skill_type_id INT NOT NULL, INDEX IDX_CDB728AC4883C03E (warrior_type_id), INDEX IDX_CDB728ACDFB912BA (skill_type_id), PRIMARY KEY(warrior_type_id, skill_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE warrior_type_effect (warrior_type_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_8C5D7BAA4883C03E (warrior_type_id), INDEX IDX_8C5D7BAAF5E9B83B (effect_id), PRIMARY KEY(warrior_type_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE armour_effect ADD CONSTRAINT FK_29B2678839A39C84 FOREIGN KEY (armour_id) REFERENCES armour (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE armour_effect ADD CONSTRAINT FK_29B26788F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE close_combat_weapon_effect ADD CONSTRAINT FK_8E9EEEAB1510CC6A FOREIGN KEY (close_combat_weapon_id) REFERENCES close_combat_weapon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE close_combat_weapon_effect ADD CONSTRAINT FK_8E9EEEABF5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE misc_equipment_effect ADD CONSTRAINT FK_FA51660EAF43510A FOREIGN KEY (misc_equipment_id) REFERENCES misc_equipment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE misc_equipment_effect ADD CONSTRAINT FK_FA51660EF5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE missile_weapon_effect ADD CONSTRAINT FK_ADC5A16573B280EE FOREIGN KEY (missile_weapon_id) REFERENCES missile_weapon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE missile_weapon_effect ADD CONSTRAINT FK_ADC5A165F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monster_status ADD CONSTRAINT FK_7DC0283FC5FF1223 FOREIGN KEY (monster_id) REFERENCES monster (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monster_status ADD CONSTRAINT FK_7DC0283F6BF700BD FOREIGN KEY (status_id) REFERENCES status (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monster_type ADD CONSTRAINT FK_A8A38269F3747573 FOREIGN KEY (rarity_id) REFERENCES rarity (id)');
        $this->addSql('ALTER TABLE monster_type ADD CONSTRAINT FK_A8A3826940F0004D FOREIGN KEY (statline_id) REFERENCES statline (id)');
        $this->addSql('ALTER TABLE monster_type_effect ADD CONSTRAINT FK_BD5D1E38672D3DAC FOREIGN KEY (monster_type_id) REFERENCES monster_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE monster_type_effect ADD CONSTRAINT FK_BD5D1E38F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mount_effect ADD CONSTRAINT FK_70E0EBF8538228B8 FOREIGN KEY (mount_id) REFERENCES mount (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mount_effect ADD CONSTRAINT FK_70E0EBF8F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE race_mount ADD CONSTRAINT FK_DCD7DB126E59D40D FOREIGN KEY (race_id) REFERENCES race (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE race_mount ADD CONSTRAINT FK_DCD7DB12538228B8 FOREIGN KEY (mount_id) REFERENCES mount (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_effect ADD CONSTRAINT FK_992AC5E65585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE skill_effect ADD CONSTRAINT FK_992AC5E6F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spell_effect ADD CONSTRAINT FK_EC166E7479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spell_effect ADD CONSTRAINT FK_EC166E7F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spell_augmented_effect ADD CONSTRAINT FK_7570EEE6479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spell_augmented_effect ADD CONSTRAINT FK_7570EEE6F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE status_effect ADD CONSTRAINT FK_B2A39BF6BF700BD FOREIGN KEY (status_id) REFERENCES status (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE status_effect ADD CONSTRAINT FK_B2A39BFF5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warband_misc_equipment ADD CONSTRAINT FK_98A589BC86B5C1F4 FOREIGN KEY (warband_id) REFERENCES warband (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warband_misc_equipment ADD CONSTRAINT FK_98A589BCAF43510A FOREIGN KEY (misc_equipment_id) REFERENCES misc_equipment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_skill ADD CONSTRAINT FK_C8CD4F0C452AFEA4 FOREIGN KEY (warrior_id) REFERENCES warrior (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_skill ADD CONSTRAINT FK_C8CD4F0C5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_close_combat_weapon ADD CONSTRAINT FK_4769D074452AFEA4 FOREIGN KEY (warrior_id) REFERENCES warrior (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_close_combat_weapon ADD CONSTRAINT FK_4769D0741510CC6A FOREIGN KEY (close_combat_weapon_id) REFERENCES close_combat_weapon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_spell ADD CONSTRAINT FK_46CF66F6452AFEA4 FOREIGN KEY (warrior_id) REFERENCES warrior (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_spell ADD CONSTRAINT FK_46CF66F6479EC90D FOREIGN KEY (spell_id) REFERENCES spell (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_status ADD CONSTRAINT FK_BC413D03452AFEA4 FOREIGN KEY (warrior_id) REFERENCES warrior (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_status ADD CONSTRAINT FK_BC413D036BF700BD FOREIGN KEY (status_id) REFERENCES status (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_type_skill_type ADD CONSTRAINT FK_CDB728AC4883C03E FOREIGN KEY (warrior_type_id) REFERENCES warrior_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_type_skill_type ADD CONSTRAINT FK_CDB728ACDFB912BA FOREIGN KEY (skill_type_id) REFERENCES skill_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_type_effect ADD CONSTRAINT FK_8C5D7BAA4883C03E FOREIGN KEY (warrior_type_id) REFERENCES warrior_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE warrior_type_effect ADD CONSTRAINT FK_8C5D7BAAF5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE armour ADD rarity_id INT NOT NULL');
        $this->addSql('ALTER TABLE armour ADD CONSTRAINT FK_97FCF093F3747573 FOREIGN KEY (rarity_id) REFERENCES rarity (id)');
        $this->addSql('CREATE INDEX IDX_97FCF093F3747573 ON armour (rarity_id)');
        $this->addSql('ALTER TABLE campaign ADD warband_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE campaign ADD CONSTRAINT FK_1F1512DD86B5C1F4 FOREIGN KEY (warband_id) REFERENCES warband (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1F1512DD86B5C1F4 ON campaign (warband_id)');
        $this->addSql('ALTER TABLE close_combat_weapon ADD rarity_id INT NOT NULL');
        $this->addSql('ALTER TABLE close_combat_weapon ADD CONSTRAINT FK_63CC5C9EF3747573 FOREIGN KEY (rarity_id) REFERENCES rarity (id)');
        $this->addSql('CREATE INDEX IDX_63CC5C9EF3747573 ON close_combat_weapon (rarity_id)');
        $this->addSql('ALTER TABLE misc_equipment ADD rarity_id INT NOT NULL');
        $this->addSql('ALTER TABLE misc_equipment ADD CONSTRAINT FK_8436E9D6F3747573 FOREIGN KEY (rarity_id) REFERENCES rarity (id)');
        $this->addSql('CREATE INDEX IDX_8436E9D6F3747573 ON misc_equipment (rarity_id)');
        $this->addSql('ALTER TABLE missile_weapon ADD rarity_id INT NOT NULL');
        $this->addSql('ALTER TABLE missile_weapon ADD CONSTRAINT FK_552C5D3BF3747573 FOREIGN KEY (rarity_id) REFERENCES rarity (id)');
        $this->addSql('CREATE INDEX IDX_552C5D3BF3747573 ON missile_weapon (rarity_id)');
        $this->addSql('ALTER TABLE monster ADD warband_id INT NOT NULL, ADD monster_type_id INT NOT NULL, ADD wounds INT DEFAULT 1 NOT NULL, DROP price');
        $this->addSql('ALTER TABLE monster ADD CONSTRAINT FK_245EC6F486B5C1F4 FOREIGN KEY (warband_id) REFERENCES warband (id)');
        $this->addSql('ALTER TABLE monster ADD CONSTRAINT FK_245EC6F4672D3DAC FOREIGN KEY (monster_type_id) REFERENCES monster_type (id)');
        $this->addSql('CREATE INDEX IDX_245EC6F486B5C1F4 ON monster (warband_id)');
        $this->addSql('CREATE INDEX IDX_245EC6F4672D3DAC ON monster (monster_type_id)');
        $this->addSql('ALTER TABLE mount ADD rarity_id INT NOT NULL, ADD m INT DEFAULT 10 NOT NULL');
        $this->addSql('ALTER TABLE mount ADD CONSTRAINT FK_3AE9FA03F3747573 FOREIGN KEY (rarity_id) REFERENCES rarity (id)');
        $this->addSql('CREATE INDEX IDX_3AE9FA03F3747573 ON mount (rarity_id)');
        $this->addSql('ALTER TABLE race ADD max_stats_id INT NOT NULL');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAF18F4251 FOREIGN KEY (max_stats_id) REFERENCES statline (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DA6FBBAF18F4251 ON race (max_stats_id)');
        $this->addSql('ALTER TABLE skill ADD skill_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477DFB912BA FOREIGN KEY (skill_type_id) REFERENCES skill_type (id)');
        $this->addSql('CREATE INDEX IDX_5E3DE477DFB912BA ON skill (skill_type_id)');
        $this->addSql('ALTER TABLE spell ADD magic_school_id INT NOT NULL');
        $this->addSql('ALTER TABLE spell ADD CONSTRAINT FK_D03FCD8D1A40AE74 FOREIGN KEY (magic_school_id) REFERENCES magic_school (id)');
        $this->addSql('CREATE INDEX IDX_D03FCD8D1A40AE74 ON spell (magic_school_id)');
        $this->addSql('ALTER TABLE warband ADD warband_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE warband ADD CONSTRAINT FK_9D82237CCE409C42 FOREIGN KEY (warband_type_id) REFERENCES warband_type (id)');
        $this->addSql('CREATE INDEX IDX_9D82237CCE409C42 ON warband (warband_type_id)');
        $this->addSql('ALTER TABLE warrior ADD warband_id INT NOT NULL, ADD warrior_type_id INT NOT NULL, ADD race_id INT NOT NULL, ADD statline_id INT NOT NULL, ADD missile_weapon_id INT DEFAULT NULL, ADD armour_id INT DEFAULT NULL, ADD mount_id INT DEFAULT NULL, ADD wounds INT DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B86B5C1F4 FOREIGN KEY (warband_id) REFERENCES warband (id)');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B4883C03E FOREIGN KEY (warrior_type_id) REFERENCES warrior_type (id)');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B6E59D40D FOREIGN KEY (race_id) REFERENCES race (id)');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B40F0004D FOREIGN KEY (statline_id) REFERENCES statline (id)');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B73B280EE FOREIGN KEY (missile_weapon_id) REFERENCES missile_weapon (id)');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B39A39C84 FOREIGN KEY (armour_id) REFERENCES armour (id)');
        $this->addSql('ALTER TABLE warrior ADD CONSTRAINT FK_2E47A14B538228B8 FOREIGN KEY (mount_id) REFERENCES mount (id)');
        $this->addSql('CREATE INDEX IDX_2E47A14B86B5C1F4 ON warrior (warband_id)');
        $this->addSql('CREATE INDEX IDX_2E47A14B4883C03E ON warrior (warrior_type_id)');
        $this->addSql('CREATE INDEX IDX_2E47A14B6E59D40D ON warrior (race_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2E47A14B40F0004D ON warrior (statline_id)');
        $this->addSql('CREATE INDEX IDX_2E47A14B73B280EE ON warrior (missile_weapon_id)');
        $this->addSql('CREATE INDEX IDX_2E47A14B39A39C84 ON warrior (armour_id)');
        $this->addSql('CREATE INDEX IDX_2E47A14B538228B8 ON warrior (mount_id)');
        $this->addSql('ALTER TABLE warrior_type ADD base_stats_id INT NOT NULL, ADD warrior_rank_id INT NOT NULL, ADD magic_school_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE warrior_type ADD CONSTRAINT FK_75DDA2633A41977A FOREIGN KEY (base_stats_id) REFERENCES statline (id)');
        $this->addSql('ALTER TABLE warrior_type ADD CONSTRAINT FK_75DDA263FBD92B22 FOREIGN KEY (warrior_rank_id) REFERENCES warrior_rank (id)');
        $this->addSql('ALTER TABLE warrior_type ADD CONSTRAINT FK_75DDA2631A40AE74 FOREIGN KEY (magic_school_id) REFERENCES magic_school (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_75DDA2633A41977A ON warrior_type (base_stats_id)');
        $this->addSql('CREATE INDEX IDX_75DDA263FBD92B22 ON warrior_type (warrior_rank_id)');
        $this->addSql('CREATE INDEX IDX_75DDA2631A40AE74 ON warrior_type (magic_school_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE monster DROP FOREIGN KEY FK_245EC6F4672D3DAC');
        $this->addSql('ALTER TABLE monster_type_effect DROP FOREIGN KEY FK_BD5D1E38672D3DAC');
        $this->addSql('DROP TABLE armour_effect');
        $this->addSql('DROP TABLE close_combat_weapon_effect');
        $this->addSql('DROP TABLE misc_equipment_effect');
        $this->addSql('DROP TABLE missile_weapon_effect');
        $this->addSql('DROP TABLE monster_status');
        $this->addSql('DROP TABLE monster_type');
        $this->addSql('DROP TABLE monster_type_effect');
        $this->addSql('DROP TABLE mount_effect');
        $this->addSql('DROP TABLE race_mount');
        $this->addSql('DROP TABLE skill_effect');
        $this->addSql('DROP TABLE spell_effect');
        $this->addSql('DROP TABLE spell_augmented_effect');
        $this->addSql('DROP TABLE status_effect');
        $this->addSql('DROP TABLE warband_misc_equipment');
        $this->addSql('DROP TABLE warrior_skill');
        $this->addSql('DROP TABLE warrior_close_combat_weapon');
        $this->addSql('DROP TABLE warrior_spell');
        $this->addSql('DROP TABLE warrior_status');
        $this->addSql('DROP TABLE warrior_type_skill_type');
        $this->addSql('DROP TABLE warrior_type_effect');
        $this->addSql('ALTER TABLE armour DROP FOREIGN KEY FK_97FCF093F3747573');
        $this->addSql('DROP INDEX IDX_97FCF093F3747573 ON armour');
        $this->addSql('ALTER TABLE armour DROP rarity_id');
        $this->addSql('ALTER TABLE campaign DROP FOREIGN KEY FK_1F1512DD86B5C1F4');
        $this->addSql('DROP INDEX UNIQ_1F1512DD86B5C1F4 ON campaign');
        $this->addSql('ALTER TABLE campaign DROP warband_id');
        $this->addSql('ALTER TABLE close_combat_weapon DROP FOREIGN KEY FK_63CC5C9EF3747573');
        $this->addSql('DROP INDEX IDX_63CC5C9EF3747573 ON close_combat_weapon');
        $this->addSql('ALTER TABLE close_combat_weapon DROP rarity_id');
        $this->addSql('ALTER TABLE misc_equipment DROP FOREIGN KEY FK_8436E9D6F3747573');
        $this->addSql('DROP INDEX IDX_8436E9D6F3747573 ON misc_equipment');
        $this->addSql('ALTER TABLE misc_equipment DROP rarity_id');
        $this->addSql('ALTER TABLE missile_weapon DROP FOREIGN KEY FK_552C5D3BF3747573');
        $this->addSql('DROP INDEX IDX_552C5D3BF3747573 ON missile_weapon');
        $this->addSql('ALTER TABLE missile_weapon DROP rarity_id');
        $this->addSql('ALTER TABLE monster DROP FOREIGN KEY FK_245EC6F486B5C1F4');
        $this->addSql('DROP INDEX IDX_245EC6F486B5C1F4 ON monster');
        $this->addSql('DROP INDEX IDX_245EC6F4672D3DAC ON monster');
        $this->addSql('ALTER TABLE monster ADD price INT DEFAULT NULL, DROP warband_id, DROP monster_type_id, DROP wounds');
        $this->addSql('ALTER TABLE mount DROP FOREIGN KEY FK_3AE9FA03F3747573');
        $this->addSql('DROP INDEX IDX_3AE9FA03F3747573 ON mount');
        $this->addSql('ALTER TABLE mount DROP rarity_id, DROP m');
        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAF18F4251');
        $this->addSql('DROP INDEX UNIQ_DA6FBBAF18F4251 ON race');
        $this->addSql('ALTER TABLE race DROP max_stats_id');
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477DFB912BA');
        $this->addSql('DROP INDEX IDX_5E3DE477DFB912BA ON skill');
        $this->addSql('ALTER TABLE skill DROP skill_type_id');
        $this->addSql('ALTER TABLE spell DROP FOREIGN KEY FK_D03FCD8D1A40AE74');
        $this->addSql('DROP INDEX IDX_D03FCD8D1A40AE74 ON spell');
        $this->addSql('ALTER TABLE spell DROP magic_school_id');
        $this->addSql('ALTER TABLE warband DROP FOREIGN KEY FK_9D82237CCE409C42');
        $this->addSql('DROP INDEX IDX_9D82237CCE409C42 ON warband');
        $this->addSql('ALTER TABLE warband DROP warband_type_id');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B86B5C1F4');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B4883C03E');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B6E59D40D');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B40F0004D');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B73B280EE');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B39A39C84');
        $this->addSql('ALTER TABLE warrior DROP FOREIGN KEY FK_2E47A14B538228B8');
        $this->addSql('DROP INDEX IDX_2E47A14B86B5C1F4 ON warrior');
        $this->addSql('DROP INDEX IDX_2E47A14B4883C03E ON warrior');
        $this->addSql('DROP INDEX IDX_2E47A14B6E59D40D ON warrior');
        $this->addSql('DROP INDEX UNIQ_2E47A14B40F0004D ON warrior');
        $this->addSql('DROP INDEX IDX_2E47A14B73B280EE ON warrior');
        $this->addSql('DROP INDEX IDX_2E47A14B39A39C84 ON warrior');
        $this->addSql('DROP INDEX IDX_2E47A14B538228B8 ON warrior');
        $this->addSql('ALTER TABLE warrior DROP warband_id, DROP warrior_type_id, DROP race_id, DROP statline_id, DROP missile_weapon_id, DROP armour_id, DROP mount_id, DROP wounds');
        $this->addSql('ALTER TABLE warrior_type DROP FOREIGN KEY FK_75DDA2633A41977A');
        $this->addSql('ALTER TABLE warrior_type DROP FOREIGN KEY FK_75DDA263FBD92B22');
        $this->addSql('ALTER TABLE warrior_type DROP FOREIGN KEY FK_75DDA2631A40AE74');
        $this->addSql('DROP INDEX UNIQ_75DDA2633A41977A ON warrior_type');
        $this->addSql('DROP INDEX IDX_75DDA263FBD92B22 ON warrior_type');
        $this->addSql('DROP INDEX IDX_75DDA2631A40AE74 ON warrior_type');
        $this->addSql('ALTER TABLE warrior_type DROP base_stats_id, DROP warrior_rank_id, DROP magic_school_id');
    }
}
