DROP PROCEDURE IF EXISTS `sp_GetPlayerCharacter`;
CREATE PROCEDURE `sp_GetPlayerCharacter` (
    IN object_id BIGINT(20)
)
BEGIN

    SELECT p.object_id, p.player_id, p.archived
           
    FROM player_character p
    
    WHERE p.object_id = object_id;

END
