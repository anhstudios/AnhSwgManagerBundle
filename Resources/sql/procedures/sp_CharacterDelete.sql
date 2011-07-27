DROP PROCEDURE IF EXISTS `sp_CharacterDelete`;
CREATE PROCEDURE `sp_CharacterDelete`(IN character_id BIGINT)
BEGIN
	--
	-- Declare Vars
	--

	DECLARE check_value INT(11);

	DECLARE error_code INT(11);

	--
	-- Mark the character as archived & set the deletion date to be 90days out
	--

	SET error_code = 0;

	UPDATE characters SET archived = 1 WHERE id = character_id;

	UPDATE characters SET deletedAt = (NOW()) WHERE id = character_id;

	--
	-- Check to see if we maked the character for deletion and return proper exit code
	--

	SELECT COUNT(*) from characters WHERE id = character_id AND archived = 1 INTO check_value;

	IF check_value > 0 THEN SET error_code = 1;
	END IF;

	SELECT error_code;
END;