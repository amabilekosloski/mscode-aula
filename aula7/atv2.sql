CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT 
a.nome AS aluno,
c.nome_curso
FROM alunos a
LEFT JOIN matriculas m ON a.id = m.aluno_id
LEFT JOIN cursos c ON m.curso_id = c.id
WHERE c.id IS NULL;