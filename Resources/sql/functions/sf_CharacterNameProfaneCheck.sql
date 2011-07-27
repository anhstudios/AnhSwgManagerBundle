DROP FUNCTION IF EXISTS `sf_CharacterNameProfaneCheck`;
CREATE FUNCTION `sf_CharacterNameProfaneCheck`(start_firstname CHAR(32)) RETURNS char(32) CHARSET utf8
BEGIN
	DECLARE check_name char(32);
	DECLARE check_value INT(11);
	DECLARE error_code char(32);

	SELECT COUNT(*) from name_profane where name LIKE start_firstname INTO check_value;

	IF check_value > 0 THEN SET error_code = 'name_declined_profane';
	END IF;

	RETURN error_code;
END;