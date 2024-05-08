create table user(
	username varchar(20) not null,
    password varchar(255) not null,
    
    constraint user_pk PRIMARY KEY (username)
);

create table task(
	taskId int AUTO_INCREMENT not null,
    taskName varchar(255) not null,
    username varchar(255) not null,
    taskDate date not null, 
    
    CONSTRAINT task_pk PRIMARY KEY (taskId),
    CONSTRAINT task_fk FOREIGN KEY (username) REFERENCES user(username)
);