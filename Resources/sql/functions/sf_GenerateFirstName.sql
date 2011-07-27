DROP FUNCTION IF EXISTS `sf_GenerateFirstName`;
CREATE FUNCTION `sf_GenerateFirstName`(start_species CHAR(16), start_gender INT(11)) RETURNS char(16) CHARSET utf8
BEGIN
    DECLARE gen_firstname CHAR(16);
    DECLARE raceId INT(8);
      
    SELECT id FROM species WHERE species_name = start_species INTO raceId;

    SELECT firstname FROM namegen_firstname WHERE species = raceId AND gender = start_gender ORDER BY RAND() LIMIT 1 INTO gen_firstname;

    RETURN gen_firstname;
END;