DROP PROCEDURE IF EXISTS `sp_GetLoginCharacter`;
CREATE PROCEDURE `sp_GetLoginCharacter`(IN id BIGINT(20))
BEGIN
	SELECT A.entity_id, B.baseModel, B.gender, B.species, C.x, C.y, C.z,
    C.oX, C.oY, C.oZ, C.oW, D.terrainMap
	FROM characters A
	INNER JOIN appearance B ON (A.entity_id = B.entity_id)
    INNER JOIN transform C on (A.entity_id = C.entity_id)
    INNER JOIN planet D on (C.planet_id = D.planet_id)
    WHERE A.entity_id = id and A.archived = 0;
END;