DROP PROCEDURE IF EXISTS `sp_GetPlayerCharacter`;
CREATE PROCEDURE `sp_GetPlayerCharacter` (
    IN object_id BIGINT(20), IN player_id BIGINT(20), IN archived TINYINT(1)
)
BEGIN

    UPDATE player_character p
    
    SET p.player_id = player_id, p.archived = archived
    
    WHERE p.object_id = object_id;

END
