DROP PROCEDURE IF EXISTS `sp_GetPlayerFromSession`;
CREATE PROCEDURE `sp_GetPlayerFromSession`(IN player_id BIGINT(20))
BEGIN

    SELECT session_key from player where id = player_id;

END;