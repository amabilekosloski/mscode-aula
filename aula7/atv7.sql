CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT a.nome
FROM alunos a
JOIN matriculas m ON a.id = m.aluno_id
GROUP BY a.id
HAVING COUNT(m.curso_id) > 1;