CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT a.nome AS aluno, 
c.nome_curso AS curso, 
m.data_matricula
FROM matriculas m
JOIN alunos a ON m.aluno_id = a.id
JOIN cursos c ON m.curso_id = c.id
WHERE m.data_matricula BETWEEN '2024-01-01' AND '2024-01-31';