CREATE IF NOT EXIST escola_joins;
USE escola_joins;

   SELECT 
    a.nome AS Aluno,
    c.nome_curso AS Curso,
    c.professor AS Professor
    FROM matriculas m
    INNER JOIN alunos a ON m.aluno_id = a.id
    INNER JOIN cursos c ON m.curso_id = c.id;