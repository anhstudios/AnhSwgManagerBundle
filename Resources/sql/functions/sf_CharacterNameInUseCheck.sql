DROP FUNCTION IF EXISTS `sf_CharacterNameInUseCheck`;
CREATE FUNCTION `sf_CharacterNameInUseCheck`(start_firstname CHAR(32)) RETURNS int(11)
BEGIN
	DECLARE check_name char(32);
	DECLARE check_value INT(11);
	DECLARE error_code INT(11);

    SET error_code = 666;
	SELECT COUNT(*) from scene_object where LOWER(custom_name) LIKE LOWER(start_firstname) INTO check_value;

	IF check_value > 0 THEN SET error_code = 3;
	END IF;

	RETURN error_code;
END;