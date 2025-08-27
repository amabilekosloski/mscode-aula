# Atividade 1
-- Liste todos os alunos matriculados em qualquer curso
-- Mostre: nome do aluno, curso e professor
R: 

   SELECT 
    a.nome AS Aluno,
    c.nome_curso AS Curso,
    c.professor AS Professor
    FROM matriculas m
    INNER JOIN alunos a ON m.aluno_id = a.id
    INNER JOIN cursos c ON m.curso_id = c.id;

# Atividade 2
-- Encontre todos os alunos que NÃO estão matriculados em nenhum curso
R: 
a

# Atividade 3
-- Descubra quais cursos não têm nenhum aluno matriculado
R: 

SELECT c.nome_curso
FROM cursos c
LEFT JOIN matriculas m ON c.id = m.curso_id
WHERE m.id IS NULL;

# Atividade 4
-- Liste todos os alunos do "Prof. Silva"
R: 

SELECT a.nome
FROM alunos a
INNER JOIN matriculas m ON a.id = m.aluno_id
INNER JOIN cursos c ON m.curso_id = c.id
WHERE c.professor = 'Prof. Silva';

# Atividade 5
-- Mostre todos os alunos de São Paulo que estão matriculados em cursos
R:

SELECT a.nome
FROM alunos a
INNER JOIN matriculas m ON a.id = m.aluno_id
INNER JOIN cursos c ON m.curso_id = c.id
WHERE a.cidade = 'São Paulo';

# Atividade 6
-- Liste as matrículas de Janeiro de 2024 com nome do aluno e curso
R: 

SELECT a.nome AS aluno, 
c.nome_curso AS curso, 
m.data_matricula
FROM matriculas m
JOIN alunos a ON m.aluno_id = a.id
JOIN cursos c ON m.curso_id = c.id
WHERE m.data_matricula BETWEEN '2024-01-01' AND '2024-01-31';

# Atividade 7
-- Encontre alunos matriculados em mais de um curso
R: 

SELECT a.nome
FROM alunos a
JOIN matriculas m ON a.id = m.aluno_id
GROUP BY a.id
HAVING COUNT(m.curso_id) > 1;

# Atividade 8
-- Mostre a quantidade de alunos por cidade (incluindo os NULL)
R:

SELECT cidade, COUNT(*) AS quantidade
FROM alunos
GROUP BY cidade;

# Atividade 9
-- Crie uma lista de TODAS as combinações possíveis entre alunos e cursos
R:

SELECT a.nome AS aluno, c.nome_curso AS curso
FROM alunos a
CROSS JOIN cursos c;

# Atividade 10
-- Crie um relatório mostrando:
-- Curso, Professor, Quantidade de Alunos, Lista de Alunos
-- Para todos os cursos, mesmo os vazios
R:

SELECT 
    c.nome_curso AS Curso,
    c.professor AS Professor,
    COUNT(a.id) AS Quantidade_Alunos,
    GROUP_CONCAT(a.nome) AS Lista_Alunos
FROM cursos c
LEFT JOIN matriculas m ON c.id = m.curso_id
LEFT JOIN alunos a ON m.aluno_id = a.id
GROUP BY c.id, c.nome_curso, c.professor;

