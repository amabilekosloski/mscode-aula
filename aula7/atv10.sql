CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT 
    c.nome_curso AS Curso,
    c.professor AS Professor,
    COUNT(a.id) AS Quantidade_Alunos,
    GROUP_CONCAT(a.nome) AS Lista_Alunos
FROM cursos c
LEFT JOIN matriculas m ON c.id = m.curso_id
LEFT JOIN alunos a ON m.aluno_id = a.id
GROUP BY c.id, c.nome_curso, c.professor;
