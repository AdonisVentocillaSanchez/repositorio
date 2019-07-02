--vista para proyecto
SELECT codigo,
	titulo, 
    i.institucion AS institucion, 
    tp.tipo AS tipo_proy, 
    td.documento AS tipo_doc, 
    lg.linea_g AS linea_general, 
    le.linea_e AS linea_especifica, 
    obj_gene, 
    avance_obj_gene, 
    fecha_registro, 
    fecha_inicio, 
    fecha_fin, 
    ep.estado AS estado_proy 
FROM proyecto 
INNER JOIN institucion AS i ON i.id = proyecto.institucion
INNER JOIN tipo_proyecto AS tp ON tp.id = proyecto.tipo_proy
INNER JOIN tipo_documento AS td ON td.id = proyecto.tipo_doc
INNER JOIN linea_general AS lg ON lg.id = proyecto.linea_gene
INNER JOIN linea_especifica AS le ON le.id = proyecto.linea_espe
INNER JOIN estado_proyecto AS ep ON ep.id = proyecto.estado_proy