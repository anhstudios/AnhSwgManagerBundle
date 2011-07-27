DROP FUNCTION IF EXISTS `sf_CharacterNameCreate`;
CREATE FUNCTION `sf_CharacterNameCreate`(base_model_string CHAR(64)) RETURNS char(64) CHARSET utf8
BEGIN
	DECLARE shortSpecies CHAR(16);
	DECLARE gender INT(11);
	DECLARE gen_firstname CHAR(16);
	DECLARE gen_lastname CHAR(16);
	DECLARE gen_fullname CHAR(64);

	IF base_model_string like '%female%' then SET gender = 0;
		ELSE SET gender = 1;
	END IF;

    SELECT sf_SpeciesShort(base_model_string) INTO shortSpecies;

    SELECT sf_GenerateFirstName(shortSpecies, gender) INTO gen_firstname;
    SELECT sf_GenerateLastName(shortSpecies, gender) INTO gen_lastname;

    IF shortSpecies = 'wookiee' THEN SET gen_lastname = NULL;
    END IF;

	SELECT CONCAT_WS(' ',gen_firstname,gen_lastname) INTO gen_fullname;

	RETURN gen_fullname;
END;