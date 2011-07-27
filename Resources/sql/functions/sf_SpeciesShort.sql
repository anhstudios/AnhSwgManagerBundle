DROP FUNCTION IF EXISTS `sf_SpeciesShort`;
CREATE FUNCTION `sf_SpeciesShort`(species CHAR(128)) RETURNS char(128) CHARSET utf8
BEGIN
   	DECLARE SpeciesShort CHAR(128);

    	SET species = REPLACE(species,'object/creature/player/shared_','object/creature/player/');

		SELECT SUBSTRING_INDEX(TRIM(LEADING 'object/creature/player/' FROM species),'_',1) INTO SpeciesShort;
		RETURN speciesShort;
END;