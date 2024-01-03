-- UPDATE telefones SET numero = CONCAT(10, numero) WHERE numero LIKE "5%"; 

-- UPDATE amigos SET amigos.created_at = NOW()
-- WHERE amigos.created_at IS NULL;

DELETE FROM amigos; 

INSERT INTO amigos VALUES
(0, 'Marcia', NOW(), NOW(), NULL);

INSERT INTO telefones VALUES 
(0, 1,"2323", NOW(), NOW(), NULL);


SELECT * FROM amigos;
SELECT * FROM telefones;