CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT c.nome_curso
FROM cursos c
LEFT JOIN matriculas m ON c.id = m.curso_id
WHERE m.id IS NULL;