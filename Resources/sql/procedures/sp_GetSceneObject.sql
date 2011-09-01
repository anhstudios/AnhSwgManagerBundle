DROP PROCEDURE IF EXISTS `sp_GetSceneObject`;
CREATE PROCEDURE `sp_GetSceneObject` (
    IN object_id BIGINT(20)
)
BEGIN

    SELECT s.object_id, s.scene_id, s.template, s.stf_name_file,
           s.stf_name_string, s.custom_name, s.volume, s.x_position, 
           s.y_position, s.z_position, s.x_orientation, s.x_orientation, 
           s.x_orientation, s.x_orientation
           
    FROM scene_object s
    
    WHERE s.object_id = object_id;

END
