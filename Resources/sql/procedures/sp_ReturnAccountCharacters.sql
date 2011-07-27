DROP PROCEDURE IF EXISTS `sp_ReturnAccountCharacters`;
CREATE PROCEDURE `sp_ReturnAccountCharacters`(IN account_id INT)
BEGIN
    SELECT A.id, A.firstName, A.lastName, A.jediState, D.baseModel
    FROM characters A
    INNER JOIN player B ON (account_id = B.referenceId)
    INNER JOIN players_characters C ON (B.id = C.player_id)
    INNER JOIN appearance D ON (A.entity_id = D.entity_id)
    WHERE A.id = C.character_id and A.archived = 0;
END;