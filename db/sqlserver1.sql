CREATE TABLE tb_usuarios(
idusuario INT NOT NULL  IDENTITY PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
);

SELECT * FROM tb_usuarios order by idusuario;

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('Diorygon', '123456');

DROP TABLE tb_usuarios;


