DROP PROCEDURE IF EXISTS `sp_CharacterDelete`;
CREATE PROCEDURE `sp_CharacterDelete`(IN character_id BIGINT, IN account_id BIGINT)
BEGIN
	--
	-- Declare Vars
	--

	DECLARE check_value INT(11);
    DECLARE deleted_code INT(11);
    DECLARE acc_id BIGINT;

	--
	-- Mark the character as archived & set the deletion date to be 90days out
	--

	SET deleted_code = 0;
    SELECT C.referenceId from characters A
    INNER JOIN players_characters B on (A.id = B.character_id)
    INNER JOIN player C on (B.player_id = C.id) 
    WHERE A.entity_id = character_id INTO acc_id;
    
    IF account_id = acc_id THEN

        UPDATE characters SET archived = 1 WHERE entity_id = character_id;

        UPDATE characters SET deletedAt = (NOW()) WHERE entity_id = character_id;
    
    END IF;
	--
	-- Check to see if we maked the character for deletion and return proper exit code
	--

	SELECT COUNT(*) from characters WHERE entity_id = character_id AND archived = 1 INTO check_value;

	IF check_value > 0 THEN SET deleted_code = 1;
	END IF;

	SELECT deleted_code;
END;