DROP PROCEDURE IF EXISTS `sp_ReturnAccountCharacters`;
CREATE PROCEDURE `sp_ReturnAccountCharacters`(IN account_id INT)
BEGIN
    SELECT A.object_id, E.custom_name, A.jediState, E.template
    FROM player_character A
    INNER JOIN player B ON (B.id = account_id)
    INNER JOIN players_player_characters C ON (B.id = C.player_id)
    INNER JOIN appearance D ON (A.object_id = D.object_id)
    INNER JOIN scene_object E ON (A.object_id = E.object_id)
    WHERE A.object_id = C.player_character_id and A.archived = 0;
END;