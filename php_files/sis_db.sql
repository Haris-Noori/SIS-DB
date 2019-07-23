-- DATABASE NAME: SIS-DB

DROP DATABASE IF EXISTS sis_db;
CREATE DATABASE sis_db;
USE sis_db;

--TABLES
-- TABLE CLUBS
CREATE table admin(
    admin_id INT(4) PRIMARY KEY

);

-- Create a new table called 'TableName' in schema 'SchemaName'
-- Drop the table if it already exists
IF OBJECT_ID('SchemaName.TableName', 'U') IS NOT NULL
DROP TABLE SchemaName.TableName
GO
-- Create the table in the specified schema
CREATE TABLE SchemaName.TableName
(
    TableNameId INT NOT NULL PRIMARY KEY, -- primary key column
    Column1 [NVARCHAR](50) NOT NULL,
    Column2 [NVARCHAR](50) NOT NULL
    -- specify more columns here
);
GO




-- TABLE MANAGERS