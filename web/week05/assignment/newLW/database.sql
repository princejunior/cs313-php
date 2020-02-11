DROP TABLE client_order_content_items;
DROP TABLE client_order;
DROP TABLE content_items;
DROP TABLE content;
DROP TABLE trainer_client;
DROP TABLE trainer;
DROP TABLE client;
DROP TABLE customer;

-- customer -- 
CREATE TABLE customer
( id         SERIAL       NOT NULL PRIMARY KEY
, username   VARCHAR(50)  NOT NULL UNI
, email      VARCHAR(50)  NOT NULL UNIQUE
, password   VARCHAR(50)  NOT NULL
);

-- trainer -- 
CREATE TABLE trainer
( id                SERIAL       NOT NULL PRIMARY KEY
, customer_id       INT          NOT NULL REFERENCES customer(id)
, name              VARCHAR(100) NOT NULL
, profile_img_url   VARCHAR(100) NOT NULL
, speciality        VARCHAR(50)  NOT NULL 
);

-- client -- 
CREATE TABLE client
( id                SERIAL       NOT NULL PRIMARY KEY
, customer_id       INT          NOT NULL REFERENCES customer(id)
, name              VARCHAR(100) NOT NULL
, profile_img_url   VARCHAR(100) NOT NULL

);
-- content --
CREATE TABLE content 
( id                 SERIAL NOT NULL PRIMARY KEY
, trainer_id         INT    NOT NULL REFERENCES trainer(id)
, post_img_url       VARCHAR(100) NOT NULL
, post_description   VARCHAR(100) NOT NULL
, post_price         FLOAT        NOT NULL
, difficulty         VARCHAR(50)  NOT NULL
, tittle             VARCHAR(50)  NOT NULL  
);

-- trainer_client --
CREATE TABLE trainer_client 
( trainer_id    INT NOT NULL REFERENCES trainer(id)
, client_id     INT NOT NULL REFERENCES client(id)
);

-- order --
CREATE TABLE client_order
( id           SERIAL NOT NULL PRIMARY KEY
, client_id    INT    NOT NULL REFERENCES client(id)
);

-- content_items --
CREATE TABLE content_items
( id           SERIAL NOT NULL PRIMARY KEY
, trainer_id   INT    NOT NULL REFERENCES trainer(id)
, content_id   INT    NOT NULL REFERENCES content(id)
);

-- order_content_items --
CREATE TABLE client_order_content_items
( client_order_id     INT NOT NULL REFERENCES client_order(id)
, content_item_id     INT NOT NULL REFERENCES content_items(id)
);

-- ----------------------------------------------- --
-- -------- POPULATE THE  MENU_ITEM TABLE -------- --
-- ----------------------------------------------- --  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 1
                         , 'fitness01'
                         , '1@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 2
                         , 'fitness02'
                         , '2@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 3
                         , 'fitnness03'
                         , '3@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 4
                         , 'client01'
                         , '4@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 5
                         , 'client02'
                         , '5@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 6
                         , 'client03'
                         , '5@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 7
                         , 'trainer04'
                         , '6@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 8
                         , 'trainer05'
                         , '6@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 9
                         , 'trainer06'
                         , '7@gmail.com'
                         , '1234567');  
INSERT INTO customer (id
                         , username
                         , email
                         , password) 
                  VALUES ( 10
                         , 'trainer07'
                         , '8@gmail.com'
                         , '1234567');  

-- ----------------------------------------------- --
-- --------- POPULATE THE TRAINER TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url
                        ,speciality) 
                 VALUES (1
                        ,1 
                        ,'Spencer Serranilla'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        ,'Cardio'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url
                        ,speciality) 
                 VALUES (2
                        ,2 
                        ,'Elijah Elliott'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwPose.jpg'
                        , 'Power Lifter'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url,
                        speciality) 
                 VALUES (3
                        ,3 
                        ,'Meghan Hutson'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        , 'Yoga');
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url
                        ,speciality) 
                 VALUES (4
                        ,7 
                        ,'Elon Musk'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        , 'Power Lifter');
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url
                        ,speciality) 
                 VALUES (5
                        ,8 
                        ,'Bill Gates'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        , 'Crossfit');
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url
                        ,speciality) 
                 VALUES (6
                        ,9 
                        ,'Pete the Pilot'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        , 'Hypertrophey'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url
                        ,speciality) 
                 VALUES (7
                        ,10 
                        ,'Jeff Bezos'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        , 'Pilates')
                        ;


-- ----------------------------------------------- --
-- -------- POPULATE THE RESTAURANT TABLE -------- --
-- ----------------------------------------------- -- 
INSERT INTO client ( id
                        , customer_id
                        ,name
                        , profile_img_url) 
                   VALUES (1
                          ,4
                          ,'Rick'
                          , 'nkn'
                          );  
INSERT INTO client ( id
                        , customer_id
                        ,name
                        , profile_img_url) 
                   VALUES (2
                          ,5
                          ,'Morty'
                          , 'nnn'
                          ); 
INSERT INTO client ( id
                        , customer_id
                        ,name
                        , profile_img_url) 
                   VALUES (3
                          ,6
                          ,'Bob'
                          , 'jnkjn'
                          );  

-- ----------------------------------------------- --
-- ---------- POPULATE THE  Content ---------- --
-- ----------------------------------------------- -- 
INSERT INTO content ( trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price
                     ,difficulty
                     ,title 
                     ) 
                  VALUES (1
                         , ''
                         , 'gjhgjhgjhgj'
                         , 20.00
                         , 'Beginner'
                         , '3 Month leg Workout');  
INSERT INTO content (trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price
                     , difficulty 
                     , title  
                     ) 
                  VALUES (1
                         , ''
                         , 'gjhgjhgjhgj'
                         , 20.00
                         , 'Beginner'
                         , '3 Month Hypertrophey Workout');  
INSERT INTO content (trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price
                     , difficulty 
                     , title  
                     ) 
                  VALUES (1
                         , ''
                         , 'gjhgjhgjhgj'
                         , 20.00
                         , 'Beginner'
                         , '3 Month Power Lifting Workout');  
INSERT INTO content (trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price
                     , difficulty 
                     , title  
                     ) 
                  VALUES (1
                         , ''
                         , 'gjhgjhgjhgj'
                         , 20.00
                         , 'Beginner'
                         , '3 Month Abs Workout');  
INSERT INTO content (trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price
                     , difficulty 
                     , title  
                     ) 
                  VALUES (1
                         , ''
                         , 'gjhgjhgjhgj'
                         , 20.00
                         , 'Beginner'
                         , '3 Month Yoga Workout');  
INSERT INTO content (trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price
                     , difficulty 
                     , title  
                     ) 
                  VALUES (1
                         , ''
                         , 'gjhgjhgjhgj'
                         , 20.00
                         , 'Beginner'
                         , '3 Month Cardio Workout');  

-- ----------------------------------------------- --
-- ----- POPULATE THE client_order TABLE ----- --
-- ----------------------------------------------- --
INSERT INTO content_items (id
                                , trainer_id
                                , content_id) 
                         VALUES ( 1
                                , 1
                                , 1);

-- ----------------------------------------------- --
-- ----- POPULATE THE client_order TABLE ----- --
-- ----------------------------------------------- --  
INSERT INTO client_order (id
                                , client_id) 
                         VALUES ( 1
                                , 1);
INSERT INTO client_order (id
                                , client_id) 
                         VALUES ( 2
                                , 2);
INSERT INTO client_order (id
                                , client_id) 
                         VALUES ( 3
                                , 3);  
                                  

-- ----------------------------------------------- --
-- ----- POPULATE THE content_items TABLE ----- --
-- ----------------------------------------------- --    
INSERT INTO client_order_content_items (client_order_id
                                , content_item_id) 
                         VALUES ( 1
                                , 1);    
\echo '*********************List all customer info*********************'
SELECT id, username, email, password FROM customer;
\echo '*********************List all trainer names*********************'
SELECT name FROM trainer;
\echo '****************List trainer names name, id, customer_id, profile_img_url****************'
SELECT * FROM trainer;
\echo '************************List  all clients************************'
SELECT * FROM client;
\echo '************************List  all clients orders************************'
SELECT * FROM client_order;
\echo '************************List  all trainers items************************'
SELECT * FROM content_items;
\echo '************************List  all clients orders of trainer items************************'
SELECT * FROM client_order_content_items;
\echo '************************view customer info of trainer************************'
SELECT c.id     AS "Customer ID"
     , username  AS "Username"
     , email      AS "eamil"
     , password     AS "Password"
     , t.name           AS "Trainer's Name"
     , t.profile_img_url AS "Picture URL"
   FROM       customer      c 
   right JOIN trainer        t ON c.id  = t.customer_id;
\echo '************************view customer info of clients************************'
   SELECT c.id     AS "Customer ID"
     , username  AS "Username"
     , email      AS "eamil"
     , password     AS "Password"
     , cl.name      AS "Client's Name"
     , cl.profile_img_url AS "Picture URL"
   FROM       customer      c 
   right JOIN client        cl ON c.id  = cl.customer_id;   

   SELECT co.id     AS "Content ID"
     , post_img_url  AS "post_img_url"
     , post_description      AS "Description"
     , post_price     AS "Price"
     , t.name      AS "Trainer's Name"     
   FROM       content      co 
   LEFT JOIN trainer        t ON co.trainer_id  = t.id;  
    
