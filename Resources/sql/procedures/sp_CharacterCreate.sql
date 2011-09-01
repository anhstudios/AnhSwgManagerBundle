DROP PROCEDURE IF EXISTS `sp_CharacterCreate`;

CREATE PROCEDURE `sp_CharacterCreate`(
	IN start_account_id INT, IN start_galaxy_id INT, IN start_firstname char(32),
	IN start_lastname char(32),	IN start_custom_name char(65), 
	IN start_profession char(64), IN start_city char(32),
	IN start_scale FLOAT, IN start_biography TEXT(2048), 
	IN start_appearance_customization TINYBLOB,
	IN start_hair_model CHAR(64), IN hair_customization TEXT(200), 
	IN base_model_string CHAR(64))
charCreate:BEGIN

    --
    -- Declare Vars
    --

    DECLARE oX FLOAT;DECLARE oY FLOAT;DECLARE oZ FLOAT;DECLARE oW FLOAT;
    DECLARE race_id INT;
	DECLARE object_id BIGINT(20);
    DECLARE player_id BIGINT(20);
    DECLARE character_id BIGINT(20);
    DECLARE character_parent_id BIGINT(20);
    DECLARE planet_name char(32);
	DECLARE profession_id INT;
	DECLARE start_planet INT;
	DECLARE start_x FLOAT;DECLARE start_y FLOAT;DECLARE start_z FLOAT;
	DECLARE shortSpecies CHAR(32);
    DECLARE shared_model_string CHAR(64);
    DECLARE model_position INT;
	DECLARE gender INT(3);
    DECLARE base_skill_id INT;
    DECLARE nameCheck INT;

    --
    -- Transactional Support
    --

    DECLARE EXIT HANDLER FOR NOT FOUND
    BEGIN
        SET object_id = 4;
        ROLLBACK;
        SELECT object_id;
    END;

    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        SET object_id = 4;
        ROLLBACK;
        SELECT object_id;
    END;
--
--    DECLARE EXIT HANDLER FOR SQLWARNING
--      BEGIN
--      SET object_id = 4;
--      ROLLBACK;
--      SELECT object_id;
--    END;

    --
    -- Check the new character name for validity
    --

    SELECT sf_CharacterNameDeveloperCheck(start_firstname) INTO nameCheck;
    IF nameCheck <> 666 THEN
      SELECT(nameCheck);
      LEAVE charCreate;
    END IF;

    SELECT sf_CharacterNameFictionalCheck(start_firstname) INTO nameCheck;
    IF nameCheck <> 666 THEN
      SELECT(nameCheck);
      LEAVE charCreate;
    END IF;

    SELECT sf_CharacterNameInUseCheck(start_firstname) INTO nameCheck;
    IF nameCheck <> 666 THEN
      SELECT(nameCheck);
      LEAVE charCreate;
    END IF;

    --
    -- Set the gender
    --

    IF base_model_string like '%female%' THEN
      SET gender = 0;
    ELSE
      SET gender = 1;
    END IF;

    --
    -- Set defaults (battle fatigue, world orientation)
    --

    SET character_parent_id = NULL;
    SET oX = 0;
    SET oY = 1;
    SET oZ = 0;
    SET oW = 0;

	--
	-- Transaction Start
	--

    START TRANSACTION;

    SELECT MAX(id) + 10 FROM object INTO object_id FOR UPDATE;

    IF object_id IS NULL THEN
      SET object_id = 8589934593;
    END IF;

    SELECT scene_id, x, y, z FROM starting_location WHERE location LIKE start_city INTO start_planet, start_x, start_y, start_z;

    SELECT sf_SpeciesShort(base_model_string) INTO shortSpecies;

    INSERT INTO object VALUES (object_id);
    
    INSERT INTO scene_object(object_id, scene_id, parent_id, template, stf_name_file, stf_name_string, custom_name, volume, x_position, y_position, z_position, x_orientation, y_orientation, z_orientation, w_orientation) values(object_id, start_planet, character_parent_id, base_model_string, '', '', start_custom_name, 1, start_x, start_y, start_z, oX, oY, oZ, oW);
    
    SELECT id from player where id = start_account_id INTO player_id;
    INSERT INTO player_character(object_id, player_id, createdAt, updatedAt, jediState, birthDate, archived) VALUES(object_id, player_id, NOW(), NOW(), 0, NOW(), 0);
    
    INSERT INTO players_player_characters values (player_id, object_id);
        
    INSERT INTO appearance(object_id, scale, gender, species, customization_data) VALUES (object_id, start_scale, gender, shortSpecies, start_appearance_customization);
    
    --
	-- Commit Transaction
	--

    COMMIT;

	--
	-- Return new character ID
	--

    SELECT(object_id);
END;