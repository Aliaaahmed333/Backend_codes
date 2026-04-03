//إدخال بيانات تجريبية في جدول Students.1


insert into students (id,name,email,address)
values (6,'omar','omar@gmail.com' , 'cairo');

//إدخال بيانات تجريبية في جدول Instructors.2

insert into instructors (id , name, email, address,phone)
values (4,'eslam','eslam@gmail.com','cairo','01111555553') ;

// تحديث البريد الإلكتروني لأحد الطلاب .3

update students 
set email = 'aliaaahmed33@gmail.com' 
where id = 1;

// إدخال بيانات تجريبية في جدول Courses.4
insert into cources (id , name , content , duration , instructor_id)
values  (5 , 'Data_Analysis' , 'excel,sql,power pi' , 200, 4);

// تسجيل طالب في كورس (إدخال سجل في جدول Enrollments).5
insert into enrollement (id , student_id , cource_id , enrollement_date)
values (3 , 6,5,'2026-04-03');

// حذف عملية تسجيل (حذف سجل من Enrollments).6
delete from enrollement 
where student_id = 6;

delete from students 
where student_id = 6; 

// جلب عدد الطلاب الكلي في قاعدة البيانات.7
select count(* ) number_students
from students ;

// عرض كل الطلاب المسجلين في كورس Introduction to MySQL.8

select count(student_id)
from enrollement 
where cource_id = 1;

// عرض كل الكورسات مع اسم المدرس المسؤول (باستخدام Subquery فقط).9
// using joins
select c.name ,ins.name 
from cources c join instructors ins 
on c.instructor_id = ins.id;

// using Subquery
select name ,
   (select  name from instructors ins
    where ins.id = cources.instructor_id) as instructor_name
from cources

//حساب عدد الطلاب المسجلين في كل كورس (باستخدام GROUP BY أو Subquery).10

select c.name , count(en.student_id) num_student 
from enrollement en  join cources c 
on en.cource_id = c.id
group by c.name

//عرض قائمة الكورسات التي سجل فيها طالب محدد (بناءً على اسمه).11

select s.name student_name  ,c.name  course_name
from  students s join enrollement en
on s.id = en.student_id  join cources c 
on en.cource_id = c.id 
where  s.name = 'aliaa';


//عرض كل المدرسين الذين يدرّسون أكثر من كورس واحد.12

select ins.name , count(c.id) num_cources 
from cources c join enrollement en 
on en.cource_id = c.id join instructors ins 
on c.instructor_id = ins.id 
group by ins.name
having num_cources > 1;

// عرض الطلاب الذين لم يسجلوا في أي كورس.13

select s.name 
from students s  left join  enrollement en 
on en.student_id = s.id
where en.student_id is null;

// حساب عدد الكورسات التي يدرّسها كل مدرس .14 

select ins.name , count(c.id) as num_cources 
from cources c join instructors ins 
on c.instructor_id = ins.id 
group by ins.name; 


// حساب متوسط عدد الطلاب في الكورس الواحد.15
select course_name, AVG(num_students) AS avg_students
FROM (
    SELECT c.name AS course_name, COUNT(en.student_id) AS num_students
    FROM enrollement en 
    JOIN cources c
    ON en.cource_id = c.id 
    GROUP BY c.name
) AS new
GROUP BY course_name;













