create table candidate(
   


)
 CREATE TABLE candidate(
    c_id int primary key,
    c_name varchar(50),
    p_id int,
     CONSTRAINT FK_S FOREIGN KEY(p_id) REFERENCES position(p_id);
     );

