
create database school_system;

create table students (

        id int primary key ,
	name varchar(50) not null ,
	email varchar(30),
	address varchar(50)
	);

create table instrutors (
   
    id int primary key ,
	name varchar(50) not null ,
	email varchar(30),
	address varchar(50),
	phone  varchar(20)

);
	
create table courses(

    id int primary key ,
	name varchar(50) not null ,
	content text,
	duration int,
	instructor_id int
	
	);

create table enrollement(
   
     id int primary key ,
     student_id int ,
     course_id,
     enrollement_date
);


insert into students(id , name, email,address )
values 
      (1,'aliaa', 'aliaa@gmail.com' , 'cairo'),
      (2,'khaled', 'khaled@gmail.com' , 'cairo'),
      (3, 'youssef','youssef@gmail.com' , 'cairo'),
      (4, 'dia', 'dia@gmail.com' , 'cairo'),
      (5,'yassin', 'yassin@gmail.com' ,'cairo')




insert into instructors (id,name,email , address, phone)
values 
     (1,'mahmoud','mahmoud@gmail.com','cairo','011144443333'),
     
      (2,'abeer','abeer@gmail.com','cairo','01000888819'),
      (3 , 'salma','salma@gmail.com','cairo','01555510105')


insert into courses (id, name,content, duration , instructor_id )
values 
    (1,'web','php,sql,oop,laravel',100,1),
    (2,'embedded','c,c++,avar,arm,os,rtos'200,2),
    (3,'security','network,security',300,3),
    (4,'AI','python,ml,dl',400,1)

insert into enrollement (id,student_id, course_id,enrollement_date)
values 
     (1,1,1,'2026-02-04'),
     (2,2,4,'2019-08-19')
     


