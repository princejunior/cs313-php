\echo '*********************List all customer info*********************'
SELECT id, username, email, password FROM customer;
\echo '*********************List all trainer names*********************'
SELECT name FROM trainer;
\echo '****************List trainer names name, id, customer_id, profile_img_url****************'
SELECT name, id, customer_id, profile_img_url FROM trainer;
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
    
