CREATE IF NOT EXIST escola_joins;
USE escola_joins;

SELECT cidade, COUNT(*) AS quantidade
FROM alunos
GROUP BY cidade;