
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
                        , profile_img_url) 
                 VALUES (1
                        ,1 
                        ,'Spencer Serranilla'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url) 
                 VALUES (2
                        ,2 
                        ,'Elijah Elliott'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url) 
                 VALUES (3
                        ,3 
                        ,'Meghan Hutson'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url) 
                 VALUES (4
                        ,7 
                        ,'Elon Musk'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url) 
                 VALUES (5
                        ,8 
                        ,'Bill Gates'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url) 
                 VALUES (6
                        ,9 
                        ,'Spencer Serranilla'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );
INSERT INTO trainer ( id
                        ,customer_id
                        ,name
                        , profile_img_url) 
                 VALUES (7
                        ,10 
                        ,'Spencer Serranilla'
                        , 'https://polar-waters-71288.herokuapp.com/week03/assignment/photos_LW/lwrussiantwist.jpg'
                        );


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
INSERT INTO content ( id         
                     , trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price  ) 
                  VALUES ( 1
                         ,1
                         , '3 Month Ab Workout'
                         , 'gjhgjhgjhgj'
                         , 20.00);  
INSERT INTO content ( id         
                     , trainer_id  
                     , post_img_url       
                     , post_description   
                     , post_price  ) 
                  VALUES ( 2
                         ,1
                         , '3 Month Hypertrophey Workout'
                         , 'gjhgjhgjhgj'
                         , 20.00);  

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
