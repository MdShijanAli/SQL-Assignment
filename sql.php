<!-- Instructions:
Use the employees table to answer the following questions: -->


<!-- a. Write a query to select all columns and rows from the employees table. -->

SELECT * FROM employees;



<!-- b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000. -->

SELECT name, salary FROM employees WHERE salary > 50000;



<!-- c. Write a query to calculate the average salary of all employees. -->

SELECT AVG(salary) FROM employees;


<!-- d. Write a query to count the number of employees who work in the "Marketing" department. -->

SELECT COUNT(Marketing) FROM employees;


<!-- e. Write a query to update the salary column of the employee with an id of 1001 to 60000. -->

UPDATE employees
SET salary=50000
WHERE id BETWEEN 1001 to 60000;




<!-- f. Write a query to delete all employees whose salary is less than 30000. -->

DELETE FROM employees WHERE salary < 30000; <!-- Use the departments table to answer the following questions: -->


    <!-- a. Write a query to select all columns and rows from the departments table. -->

    SELECT * FROM departments;



    <!-- b. Write a query to select only the name and manager columns of the "Finance" department. -->

    SELECT name, manager FROM depertments WHERE depertment = "Finance";



    <!-- c. Write a query to calculate the total number of employees in each department. -->

    SELECT employees, COUNT(*)
    FROM depertments
    GROUP BY employees;



    <!-- d. Write a query to insert a new department called "Research" with a manager named "John Doe". -->

    INSERT INTO departments (department)
    VALUES ('Research');