
---------PHF -> Male Vs Female ----------

SELECT * FROM mariaDB.malandem.dbms_projects.students_male;
UNION
SELECT * FROM students_female;

---------DHF -> Students Grade A Vs Students below A
SELECT * FROM students_grade_A;
UNION
SELECT * FROM students_below_A;


---------VF -> Students ID Vs Student Details
SELECT * FROM student_details;
INNER JOIN 
SELECT * FROM OPENQUERY ('student_ids', MYSQL);