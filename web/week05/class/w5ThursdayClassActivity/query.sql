\echo '2a. How many events are there?'
---------------- Your code here ----------------
SELECT count(id) FROM w5_event;
\echo '2b. How many participants are there?'
---------------- Your code here ----------------
SELECT count(id) FROM w5_participant;
\echo '3a. What is the third event when sorted alphabetically (by name)? '
---------------- Your code here ----------------
-- SKIP THE FIRST 2 ROWS AND SELECT THE FIRST ROW
SELECT name FROM w5_event ORDER BY name LIMIT 1 OFFSET 2; 
\echo '3b. What is the third event when sorted by ID? '
---------------- Your code here ----------------
SELECT id FROM w5_event ORDER BY name LIMIT 1 OFFSET 2; 
\echo '4a. List the names alphabetically of all the participants in the ''Toughman Utah'' competition'
---------------- Your code here ----------------
select p.name 
FROM w5_participant AS p
inner join w5_event_participant as ep ON ep.participant_id = p.id
inner JOIN w5_event AS e ON ep.event_id = e.id
WHERE e.name = 'Toughman Utah'
ORDER BY p.name;
-- SELECT id from w5_event_participant
-- left join w5_event
-- on w5_event_participant.event_id = w5_event.id
-- right join w5_participant
-- on w5_event_participant.participant_id = w5_participant.id;

\echo '4b. List the names (sorted by id) of all the participants in the ''Kauai Marathon'' competition'
---------------- Your code here ----------------
select p.name 
FROM w5_participant AS p
inner join w5_event_participant as ep ON ep.participant_id = p.id
inner JOIN w5_event AS e ON ep.event_id = e.id
WHERE e.name = 'Kauai Marathon'
ORDER BY p.id;
-- \echo '5a. How many competitions has ''Black Panther'' competed in?'
---------------- Your code here ----------------
SELECT count(*)
from (SELECT 
        FROM w5_participant AS p
        inner join w5_event_participant AS ep ON ep.participant_id = p.id
        inner join w5_event AS e ON ep.event_id = e.id
        WHERE p.name = 'Black Panther') AS ep_events;
\echo '5b. How can you verify that your count is correct?'  
---------------- Your code here ----------------
SELECT e.name AS event_name, p.name as participant_id
FROM w5_participant AS p
        inner join w5_event_participant AS ep ON ep.participant_id = p.id
        inner join w5_event AS e ON ep.event_id = e.id
        WHERE p.name = 'Black Panther';
\echo '5c. Who has competed in the most competitions? How many have they competed in?'
---------------- Your code here ----------------

-- \echo '5d. Who has competed in the least competitions? How many have they competed in?'
---------------- Your code here ----------------

-- \echo '5d. people who have competed in 1 or more'
---------------- Your code here ----------------

-- \echo '5d. - people that didn''t compete in any'
---------------- Your code here ----------------

-- \echo '6a. Is there anyone who has competed in the same competition twice? '
---------------- Your code here ----------------

-- \echo '6b. Which event had the most competitors? '
---------------- Your code here ----------------

-- \echo '6c. Which event had the least competitors? '
---------------- Your code here ----------------

-- \echo '6d. List all competitors that competed in the same event at least once '
---------------- Your code here ----------------
