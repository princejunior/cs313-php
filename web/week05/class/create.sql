DROP TABLE IF EXISTS  w5_family_members;
DROP TABLE IF EXISTS   w5_relationships;


CREATE TABLE w5_relationships
(id     SERIAL  NOT NULL    PRIMARY KEY
,description VARCHAR(100) NOT NULL);

CREATE TABLE w5_family_members
(id     SERIAL  NOT NULL    PRIMARY KEY
, first_name   VARCHAR(100) NOT NULL
, last_name VARCHAR(100) NOT NULL
, relationships_id INT NOT NULL REFERENCES w5_relationships(id));

INSERT INTO w5_relationships (description)VALUES ('Mother');
INSERT INTO w5_relationships (description)VALUES ('father');
INSERT INTO w5_relationships (description)VALUES ('wife');
INSERT INTO w5_relationships (description)VALUES ('Husband');
INSERT INTO w5_relationships (description)VALUES ('Daughter');
INSERT INTO w5_relationships (description)VALUES ('son');

INSERT INTO w5_family_members (first_name
                            , last_name
                            , relationships_id)
                            VALUES ('sara'
                            ,'birch'
                            , 3);
INSERT INTO w5_family_members (first_name
                            , last_name
                            , relationships_id)
                            VALUES ('Teresa'
                            ,'birch'
                            , 1);
INSERT INTO w5_family_members (first_name
                            , last_name
                            , relationships_id)
                            VALUES ('hannah'
                            ,'birch'
                            , 5);
