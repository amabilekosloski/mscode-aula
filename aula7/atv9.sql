CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT a.nome AS aluno, c.nome_curso AS curso
FROM alunos a
CROSS JOIN cursos c;