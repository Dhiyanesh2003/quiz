-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 11:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `username` varchar(50) NOT NULL,
  `hackid` varchar(50) NOT NULL,
  `mark` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`username`, `hackid`, `mark`) VALUES
('rajin', '1234', 6);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `setno` int(30) NOT NULL,
  `qno` int(10) NOT NULL,
  `quest` varchar(1000) NOT NULL,
  `a` varchar(1000) NOT NULL,
  `b` varchar(1000) NOT NULL,
  `c` varchar(1000) NOT NULL,
  `d` varchar(1000) NOT NULL,
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`setno`, `qno`, `quest`, `a`, `b`, `c`, `d`, `answer`) VALUES
(1, 1, 'Which of these is not an attribute of Cursor?', '%FOUND', '%ISOPEN', '%ISFOUND', '%ROWCOUNT', 'c'),
(1, 2, 'Which of these is the Single Line Comments symbol?', '–(Single Hyphen)', '—(Double Hyphen)', '—-(Triple Hyphen)', '/(forward slash)', 'b'),
(1, 3, 'Which of these is not a DML command?', 'TRUNCATE', 'INSERT', 'UPDATE', 'DELETE', 'a'),
(1, 4, 'This function returns a segment of a string from a given start point to a given endpoint.', 'LENGTH', 'TRIM', 'SUBSTR', 'SLICE', 'b'),
(1, 5, 'Which of the following are types of Unicode character string types in SQL?', 'nstring', 'nchar', 'nval', 'nval', 'a'),
(1, 6, 'Why we need to create an index if the primary key is already present in a table?', 'Index improves the speed of data retrieval operations on a table.', 'Indexes are special lookup tables that will be used by the database search engine.', 'Indexes are synonyms of a column in a table.', 'All of the above', 'a'),
(1, 7, 'Shared locks are applied while performing', 'Read operations', 'Write operations', 'A & B both', 'None of the above', 'a'),
(1, 8, 'What is the advantage of the clustered index?', 'It is fast to update the records.', 'It does not need extra work for SQL queries.', 'It minimizes the page transfer and maximizes the cache hits.', 'None of the above is correct.', 'a'),
(1, 9, 'All aggregate functions except _____ ignore null values in their input collection.', 'Count(attribute)', 'Count(*)', 'Avg', 'Sum', 'b'),
(1, 10, 'What will be the result of the query below?\r\n<br>\r\nSELECT * FROM runners WHERE id NOT IN (SELECT winner_id FROM races)', '|  1 | John Doe     |', '|  3 | Alice Jones  |', '|  5 | Lisa Romero  |', 'none', 'd'),
(2, 1, 'This Query can be replaced by which one of the following?\r\n   SELECT name, course_id\r\n   FROM instructor, teaches\r\n   WHERE instructor_ID= teaches_ID;\r\n', 'Select name,course_id from teaches,instructor where instructor_id=course_id;', 'Select name, course_id from instructor natural join teaches;', 'Select name, course_id from instructor;', 'Select course_id from instructor join teaches;', 'b'),
(2, 2, 'Which of the following should be used to find all the courses taught in the Fall 2009       semester but not in the Spring 2010 semester .', 'SELECT DISTINCT course id FROM SECTION WHERE semester = ’Fall’ AND YEAR= 2009 AND course id NOT IN (SELECT course id FROM SECTION WHERE semester = ’Spring’ AND YEAR= 2010);', 'SELECT DISTINCT course_id FROM instructor WHERE name NOT IN (’Fall’, ’Spring’);', '(SELECT course id FROM SECTION WHERE semester = ’Spring’ AND YEAR= 2010)', 'SELECT COUNT (DISTINCT ID) FROM takes WHERE (course id, sec id, semester, YEAR) IN (SELECT course id, sec id, semester, YEAR FROM teaches WHERE teaches.ID= 10101);', 'a'),
(2, 3, 'WITH max_budget (VALUE) AS\r\n(SELECT MAX(budget) FROM department) SELECT budget FROM department, max_budget WHERE department.budget = MAX budget.value;\r\nIn the query given above which one of the following is a temporary relation?\r\n', 'Budget', 'Department', 'value', 'Max_budget', 'd'),
(2, 4, 'Create procedure dept_count proc(in dept name varchar(20), out d count integer)\r\nbegin\r\nselect count(*) into d count\r\nfrom instructor\r\nwhere instructor.dept name= dept count proc.dept name\r\nend\r\nWhich of the following is used to call the procedure given above ?\r\n', '\r\nDeclare d_count integer;', 'Declare d_count integer;\r\n   call dept_count proc(’Physics’, d_count);\r\n', 'Declare d_count integer;\r\n   call dept_count proc(’Physics’);\r\n', 'Declare d_count; \r\n   call dept_count proc(’Physics’, d_count);\r\n', 'b'),
(2, 5, 'What is the range of integers that can be held in the MEDIUMINT datatype of SQL?', 'Signed numbers in the range of -8388608 to 8388607.', 'Unsigned numbers in the range of 0 to 16777215.', 'Both A and B.', 'None of the above.', 'a'),
(2, 6, 'A Boolean data type that can take values true, false, and________', '1', '0', 'Null', 'Unknown', 'd'),
(2, 7, 'Subqueries cannot:', 'Use group by or group functions', 'Retrieve data from a table different from the one in the outer query', 'Join tables', 'Appear in select, update, delete, insert statements.', 'c'),
(2, 8, 'Create procedure dept_count proc(in dept name varchar(20),\r\nout d count integer)\r\nbegin\r\nselect count(*) into d count\r\nfrom instructor\r\nwhere instructor.dept name= dept count proc.dept name\r\nend\r\nWhich of the following is used to call the procedure given above ?\r\n', 'Declare d_count integer;', 'Declare d_count integer;\r\ncall dept_count proc(’Physics’, d_count);\r\n', 'Declare d_count integer;\r\n   call dept_count proc(’Physics’);\r\n', 'Declare d_count; \r\n   call dept_count proc(’Physics’, d_count);\r\n', 'b'),
(2, 9, 'The following SQL is which type of join: SELECT CUSTOMER_T. CUSTOMER_ID, ORDER_T. CUSTOMER_ID, NAME, ORDER_ID FROM CUSTOMER_T,ORDER_T WHERE CUSTOMER_T. CUSTOMER_ID = ORDER_T. CUSTOMER_ID?', 'Equi-join', 'Natural join', 'Outer join', 'Cartesian join', 'a'),
(2, 10, 'List the number of customers in each country, ordered by the country with the most customers first.', 'SELECT (CustomerID), Country FROM Customers GROUP BY Country DESC;', 'SELECT (CustomerID), Country FROM Customers ORDER BY Country DESC;', 'SELECT (CustomerID), Country FROM Customers GROUP BY Country ORDER BY COUNT(Customer ID) DESC;', 'SELECT (CustomerID), Country FROM Customers GROUP BY Country ORDER BY Customer ID DESC;', 'c'),
(3, 1, 'Which of the following joins are SQL server default?', 'inner join', 'equi join', 'outer join', 'none of the above', 'a'),
(3, 2, 'Which of the following is not a class of constraint in SQL Server?', 'UNIQUE', 'NOT NULL', 'CHECK', 'NULL', 'd'),
(3, 3, 'Which of the following is not a class of constraint in SQL Server?', 'Order is inherent in your data', 'Your data is sparse or you do not know the structure of the data', 'our data represents containment hierarchy', 'All of the Mentioned', 'd'),
(3, 4, 'What is the hybrid model in SQL Server?', 'Using XML with views', 'Using XML with triggers', 'Combination of relational and XML data type columns', 'Combination of relational and non relational data type columns', 'c'),
(3, 5, 'Which of the following feature of SQL Server was used before XML technology for semi structured data?', 'In memory database', ' Stored Procedure', 'Dynamic management views', 'None of the mentioned', 'b'),
(3, 6, ' Which of the following language is used for procedural flow in SQL Server?', 'Control-of-flow language', 'Flow language', 'Control language', 'None of the mentioned', 'a'),
(3, 7, 'Exception handling is possible in SQL Server using _____________', 'FINAL', 'FINALLY', 'THROW', 'ALL OF THE MENTIONED', 'c'),
(3, 8, 'Which of the following stored procedure is already defined in SQL Server?', 'System defined Procedure', 'CLR Stored Procedure', 'Extended Procedure', 'User Defined Stored Procedure', 'a'),
(3, 9, 'DML triggers in SQL Server is applicable to _____________', 'Update', 'Delete', 'insert', 'all of the mentioned', 'd'),
(3, 10, 'User defined function in SQL Server can return ____________', 'Result Set', 'Scalar value', 'Set of Values', 'All of the mentioned', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`hackid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
