DROP PROCEDURE IF EXISTS `sp_SaveSceneObject`;
CREATE PROCEDURE `sp_SaveSceneObject` (
    IN object_id BIGINT(20), IN scene_id BIGINT(20),
    IN template VARCHAR(255), IN stf_name_file VARCHAR(255), 
    IN stf_name_string VARCHAR(255), IN custom_name VARCHAR(255), 
    IN volume INT(4), IN x_position DOUBLE(), IN y_position DOUBLE(), 
    IN z_position DOUBLE(), IN x_orientation DOUBLE(), 
    IN y_orientation DOUBLE(), IN z_orientation DOUBLE(), 
    IN w_orientation DOUBLE()
)
BEGIN

    UPDATE scene_object s
    
    SET s.scene_id = scene_id, s.template = template, 
        s.stf_name_file = stf_name_file, s.stf_name_string = stf_name_string,
        s.custom_name = custom_name, s.volume = volume, 
        s.x_position = x_position, s.y_position = y_position, 
        s.z_position = z_position, s.x_orientation = x_orientation,
        s.y_orientation = y_orientation, s.z_orientation = z_orientation,
        s.w_orientation = w_orientation
    
    WHERE s.object_id = object_id;

END
