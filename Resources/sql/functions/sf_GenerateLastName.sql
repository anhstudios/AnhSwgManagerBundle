DROP FUNCTION IF EXISTS `sf_GenerateLastName`;
CREATE FUNCTION `sf_GenerateLastName`(start_species CHAR(16), start_gender INT(11)) RETURNS char(16) CHARSET utf8
BEGIN
    DECLARE gen_lastname CHAR(16);
    DECLARE raceId INT(8);

    SELECT id FROM species WHERE species_name = start_species INTO raceId;


    SELECT lastname FROM namegen_lastname WHERE species = raceId AND gender = start_gender ORDER BY RAND() LIMIT 1 INTO gen_lastname;

    RETURN gen_lastname;
END;