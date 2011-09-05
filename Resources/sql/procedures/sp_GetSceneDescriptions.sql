DROP PROCEDURE IF EXISTS `sp_GetSceneDescriptions`;
CREATE PROCEDURE `sp_GetSceneDescriptions` ()
BEGIN

    SELECT s.id, s.name, s.label, s.description, s.terrain
           
    FROM scene s;

END
