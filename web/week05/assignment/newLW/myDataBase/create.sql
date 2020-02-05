-- customer -- 
CREATE TABLE customer
( id         SERIAL       NOT NULL PRIMARY KEY
, username   VARCHAR(50)  NOT NULL
, email      VARCHAR(50)  NOT NULL
, password   VARCHAR(50)  NOT NULL
);

-- trainer -- 
CREATE TABLE trainer
( id                SERIAL       NOT NULL PRIMARY KEY
, customer_id       INT          NOT NULL REFERENCES customer(id)
, name              VARCHAR(100) NOT NULL
, profile_img_url   VARCHAR(100) NOT NULL
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