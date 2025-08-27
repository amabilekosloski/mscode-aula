CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT a.nome
FROM alunos a
INNER JOIN matriculas m ON a.id = m.aluno_id
INNER JOIN cursos c ON m.curso_id = c.id
WHERE c.professor = 'Prof. Silva';