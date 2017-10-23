-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 12:05 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_education_table`
--

CREATE TABLE `applicant_education_table` (
  `ID` int(11) NOT NULL,
  `ApplicantID` int(11) NOT NULL,
  `SchoolName` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `SchoolType` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Degree` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `GraduateYear` year(4) NOT NULL,
  `GPA` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_education_table`
--

INSERT INTO `applicant_education_table` (`ID`, `ApplicantID`, `SchoolName`, `SchoolType`, `Degree`, `GraduateYear`, `GPA`) VALUES
(5, 4, 'Malibu', '', 'Swim Diploma', 0000, '0.00000'),
(6, 4, 'Santa Fe', '', 'High', 0000, '0.00000'),
(7, 15, 'VGA', '', 'SVA', 0000, '0.00000'),
(8, 16, 'Jer', '', '', 0000, '0.00000'),
(9, 17, 'Martib', '', '', 0000, '0.00000'),
(10, 18, 'Haraa', '', '233', 0000, '0.00000'),
(11, 20, 'sva', '', 'dg', 0000, '0.00000'),
(16, 24, 'st', '', '', 0000, '0.00000'),
(17, 25, 'we', '', 'abc', 0000, '0.00000'),
(18, 25, 'wa', '', 'dec', 0000, '0.00000'),
(21, 29, 'sdfff', '', 'ee', 0000, '0.00000'),
(22, 30, 'Jeremy High', 'HIGH SCHOOL', 'Diploma', 1999, '1.33200'),
(23, 30, 'MIT', 'COLLEGE', 'PhD', 2001, '2.45000'),
(24, 30, 'Harvard', 'LAW SCHOOL', 'Justice League', 2005, '3.30000'),
(25, 34, 'abc', '', 'fundegree', 0000, '0.00000'),
(26, 45, 'ewrqwr', '', '', 0000, '0.00000'),
(27, 45, 'g3', '', '', 0000, '0.00000');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile_table`
--

CREATE TABLE `applicant_profile_table` (
  `ApplicantID` int(11) NOT NULL,
  `Department` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `DeptFullTempType` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ApplyDate` date NOT NULL,
  `FirstName` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `LastName` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Address` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `City` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `HomePhone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `CellPhone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `WorkPhone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `State` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `ZIP` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `MinSalary` decimal(12,2) NOT NULL,
  `MinHourlyRate` decimal(12,2) NOT NULL,
  `RecentBaseSalary` decimal(12,2) NOT NULL,
  `RecentHourlyRate` decimal(12,2) NOT NULL,
  `W2or1099` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `DOB` date NOT NULL,
  `SSN` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `PermittedToWork` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Employed` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Car` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Travel` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `MetroAreas` text CHARACTER SET utf8mb4 NOT NULL,
  `BarStanding` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ForeignLanguages` text CHARACTER SET utf8mb4 NOT NULL,
  `BarDiscipline` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `BarDisciplineNote` text CHARACTER SET utf8mb4 NOT NULL,
  `SoftwareExperience` text CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceName1` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceTitle1` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceCompany1` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceContact1` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceRelationship1` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceAcquaintedYears1` tinyint(4) NOT NULL,
  `ReferenceName2` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceTitle2` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceCompany2` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceContact2` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceRelationship2` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceAcquaintedYears2` tinyint(4) NOT NULL,
  `ReferenceName3` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceTitle3` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceCompany3` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceContact3` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceRelationship3` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ReferenceAcquaintedYears3` tinyint(4) NOT NULL,
  `IdealCompany1` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompanyNote1` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompany2` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompanyNote2` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompany3` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompanyNote3` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompany4` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `IdealCompanyNote4` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `EmergencyName` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `EmergencyRelationship` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `EmergencyPhone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ComputerSkills` text CHARACTER SET utf8mb4 NOT NULL,
  `SkillSets` text CHARACTER SET utf8mb4 NOT NULL,
  `SignaturePath` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `SignDate` date NOT NULL,
  `InternalNotes` mediumtext CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_profile_table`
--

INSERT INTO `applicant_profile_table` (`ApplicantID`, `Department`, `DeptFullTempType`, `ApplyDate`, `FirstName`, `LastName`, `Address`, `Email`, `City`, `HomePhone`, `CellPhone`, `WorkPhone`, `State`, `ZIP`, `MinSalary`, `MinHourlyRate`, `RecentBaseSalary`, `RecentHourlyRate`, `W2or1099`, `DOB`, `SSN`, `PermittedToWork`, `Employed`, `Car`, `Travel`, `MetroAreas`, `BarStanding`, `ForeignLanguages`, `BarDiscipline`, `BarDisciplineNote`, `SoftwareExperience`, `ReferenceName1`, `ReferenceTitle1`, `ReferenceCompany1`, `ReferenceContact1`, `ReferenceRelationship1`, `ReferenceAcquaintedYears1`, `ReferenceName2`, `ReferenceTitle2`, `ReferenceCompany2`, `ReferenceContact2`, `ReferenceRelationship2`, `ReferenceAcquaintedYears2`, `ReferenceName3`, `ReferenceTitle3`, `ReferenceCompany3`, `ReferenceContact3`, `ReferenceRelationship3`, `ReferenceAcquaintedYears3`, `IdealCompany1`, `IdealCompanyNote1`, `IdealCompany2`, `IdealCompanyNote2`, `IdealCompany3`, `IdealCompanyNote3`, `IdealCompany4`, `IdealCompanyNote4`, `EmergencyName`, `EmergencyRelationship`, `EmergencyPhone`, `ComputerSkills`, `SkillSets`, `SignaturePath`, `SignDate`, `InternalNotes`) VALUES
(3, 'UX', 'Freelance', '2017-08-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'a:21:{i:0;s:23:\"Agile/Scrum Environment\";i:1;s:26:\"Complex Interaction Models\";i:2;s:6:\"Design\";i:3;s:8:\"HTML/CSS\";i:4;s:17:\"iOS Mobile Skills\";i:5;s:21:\"Android Mobile Skills\";i:6;s:11:\"Prototyping\";i:7;s:33:\"Quantitative/Qualitative Research\";i:8;s:17:\"Responsive Design\";i:9;s:12:\"Style Guides\";i:10;s:18:\"User/Process Flows\";i:11;s:19:\"Competitor Analysis\";i:12;s:15:\"Content Mapping\";i:13;s:15:\"Design Research\";i:14;s:18:\"Interaction Design\";i:15;s:18:\"Product Management\";i:16;s:17:\"Quality Assurance\";i:17;s:9:\"Site Maps\";i:18;s:11:\"Storyboards\";i:19;s:17:\"Usability Testing\";i:20;s:10:\"Wireframes\";}', 'signatures/signature.3.png', '2017-08-29', ''),
(4, 'UX', 'Fulltime', '2017-08-28', 'Mariah', 'Carey', '111 Jojo Hama', 'mc@hammer.com', 'Bronx', '(212) 332-3453', '(323) 049-5689', '(222) 111-3333 ext. 4', 'NY', '32132', '0.00', '0.00', '35555.00', '1.23', '', '0000-00-00', '', 'NO', '', '', '', '', '', '', '', '', '', 'Auntie May', 'Film', 'Parker Industry', '223-493-3344', '', 10, '', '', '', '', '', 0, '', '', '', '', '', 0, 'First', 'Fun', '', '', '', '', '', '', '', '', '', 'Skillshare', 'a:3:{i:0;s:23:\"Agile/Scrum Environment\";i:1;s:11:\"Prototyping\";i:2;s:15:\"Design Research\";}', 'signatures/signature.4.png', '2017-08-28', 'def'),
(5, 'UX', 'Fulltime', '2017-08-28', 'abcf', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.5.png', '2017-08-28', ''),
(6, 'UX', 'Fulltime', '2017-08-28', 'wef', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.6.png', '2017-08-28', ''),
(7, 'UX', 'Fulltime', '2017-08-28', 'abcdeee', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.7.png', '2017-08-28', ''),
(8, 'UX', 'Fulltime', '2017-08-28', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.8.png', '2017-08-28', ''),
(9, 'UX', 'Fulltime', '2017-08-28', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.9.png', '2017-08-28', ''),
(10, 'UX', 'Fulltime', '2017-08-28', 'abcw', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.10.png', '2017-08-28', ''),
(11, 'UX', 'Fulltime', '2017-08-28', 'abcwq', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.11.png', '2017-08-28', ''),
(12, 'UX', 'Fulltime', '2017-08-28', 'abcqq', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.12.png', '2017-08-28', ''),
(13, 'UX', 'Fulltime', '2017-08-28', 'abcabe', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.13.png', '2017-08-28', ''),
(14, 'UX', 'Fulltime', '2017-08-28', 'abcabe', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.14.png', '2017-08-28', ''),
(15, 'UX', 'Freelance', '2017-08-28', 'UXTimTemp', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'sars', '', 'signatures/signature.15.png', '2017-08-28', ''),
(16, 'Admin and Support', 'Temp', '2017-08-28', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '3000.00', '20.44', '', '0000-00-00', '', 'NO', 'YES', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.16.png', '2017-08-28', ''),
(17, 'Creative and Marketing', 'Fulltime', '2017-08-28', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '123.87', '0.00', '11.99', '0.00', '', '0000-00-00', '', 'YES', 'YES', 'YES', '', '', '', '', '', '', '', 'sokol', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.17.png', '2017-08-28', ''),
(18, 'Creative and Marketing', 'Temp', '2017-08-28', 'abcCreative Temp', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '23432.23', '0.00', '3000.00', '0.00', '1099', '0000-00-00', '', 'YES', 'YES', 'YES', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.18.png', '2017-08-28', ''),
(19, 'Creative and Marketing', 'Temp', '2017-08-28', 'abcCreativeTemp2', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '3000.00', '20.44', '1099', '0000-00-00', '', 'NO', 'YES', 'NO', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.19.png', '2017-08-28', ''),
(20, 'UX', 'Fulltime', '2017-08-28', 'abcUXFull', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '3000.00', '20.44', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 'Marinba', 'a:2:{i:0;s:23:\"Agile/Scrum Environment\";i:1;s:17:\"iOS Mobile Skills\";}', 'signatures/signature.20.png', '2017-08-28', ''),
(22, 'UX', 'Fulltime', '2017-08-29', 'abcUXFull', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', 'NO', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, 'First', 'berwe', 'test', 'fe', '', '', '', '', '', '', '', '', 'a:6:{i:0;s:17:\"iOS Mobile Skills\";i:1;s:33:\"Quantitative/Qualitative Research\";i:2;s:17:\"Responsive Design\";i:3;s:12:\"Style Guides\";i:4;s:15:\"Design Research\";i:5;s:10:\"Wireframes\";}', 'signatures/signature.22.png', '2017-08-29', ''),
(24, 'UX', 'Freelance', '2017-08-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'a:21:{i:0;s:23:\"Agile/Scrum Environment\";i:1;s:26:\"Complex Interaction Models\";i:2;s:6:\"Design\";i:3;s:8:\"HTML/CSS\";i:4;s:17:\"iOS Mobile Skills\";i:5;s:21:\"Android Mobile Skills\";i:6;s:11:\"Prototyping\";i:7;s:33:\"Quantitative/Qualitative Research\";i:8;s:17:\"Responsive Design\";i:9;s:12:\"Style Guides\";i:10;s:18:\"User/Process Flows\";i:11;s:19:\"Competitor Analysis\";i:12;s:15:\"Content Mapping\";i:13;s:15:\"Design Research\";i:14;s:18:\"Interaction Design\";i:15;s:18:\"Product Management\";i:16;s:17:\"Quality Assurance\";i:17;s:9:\"Site Maps\";i:18;s:11:\"Storyboards\";i:19;s:17:\"Usability Testing\";i:20;s:10:\"Wireframes\";}', 'signatures/signature.24.png', '2017-08-29', ''),
(25, 'UX', 'Freelance', '2017-08-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'a:21:{i:0;s:23:\"Agile/Scrum Environment\";i:1;s:26:\"Complex Interaction Models\";i:2;s:6:\"Design\";i:3;s:8:\"HTML/CSS\";i:4;s:17:\"iOS Mobile Skills\";i:5;s:21:\"Android Mobile Skills\";i:6;s:11:\"Prototyping\";i:7;s:33:\"Quantitative/Qualitative Research\";i:8;s:17:\"Responsive Design\";i:9;s:12:\"Style Guides\";i:10;s:18:\"User/Process Flows\";i:11;s:19:\"Competitor Analysis\";i:12;s:15:\"Content Mapping\";i:13;s:15:\"Design Research\";i:14;s:18:\"Interaction Design\";i:15;s:18:\"Product Management\";i:16;s:17:\"Quality Assurance\";i:17;s:9:\"Site Maps\";i:18;s:11:\"Storyboards\";i:19;s:17:\"Usability Testing\";i:20;s:10:\"Wireframes\";}', 'signatures/signature.25.png', '2017-08-29', ''),
(26, 'UX', 'Freelance', '2017-08-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'a:21:{i:0;s:23:\"Agile/Scrum Environment\";i:1;s:26:\"Complex Interaction Models\";i:2;s:6:\"Design\";i:3;s:8:\"HTML/CSS\";i:4;s:17:\"iOS Mobile Skills\";i:5;s:21:\"Android Mobile Skills\";i:6;s:11:\"Prototyping\";i:7;s:33:\"Quantitative/Qualitative Research\";i:8;s:17:\"Responsive Design\";i:9;s:12:\"Style Guides\";i:10;s:18:\"User/Process Flows\";i:11;s:19:\"Competitor Analysis\";i:12;s:15:\"Content Mapping\";i:13;s:15:\"Design Research\";i:14;s:18:\"Interaction Design\";i:15;s:18:\"Product Management\";i:16;s:17:\"Quality Assurance\";i:17;s:9:\"Site Maps\";i:18;s:11:\"Storyboards\";i:19;s:17:\"Usability Testing\";i:20;s:10:\"Wireframes\";}', 'signatures/signature.26.png', '2017-08-29', ''),
(27, 'Fashion and Beauty', 'Freelance', '2017-09-11', 'abcJokowi', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '123-12-4123', 'YES', 'YES', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.27.png', '2017-09-11', ''),
(28, 'Fashion and Beauty', 'Freelance', '2017-09-11', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '342333.00', '', '0000-00-00', '', 'YES', 'YES', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.28.png', '2017-09-11', ''),
(29, 'Hospitality', 'Temp', '2017-09-11', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '330.10', '12.50', '', '0000-00-00', '', 'YES', 'YES', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.29.png', '2017-09-11', ''),
(30, 'Legal Services', 'Fulltime', '2017-09-13', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '122.45', '5.55', '0.00', '0.00', '', '0000-00-00', '', 'YES', '', '', 'YES', 'Sistine Chapel, Mountana', 'YES', 'Hebrew, Italian', 'YES', 'yea', 'Excel, Window', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.30.png', '2017-09-13', ''),
(31, 'Legal Services', 'Temp', '2017-09-13', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', '', '', 'YES', '', 'YES', '', 'YES', 'wewe', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.31.png', '2017-09-13', ''),
(32, 'Scientific and Engineering', 'Fulltime', '2017-09-13', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.32.png', '2017-09-13', ''),
(33, 'Scientific and Engineering', 'Temp', '2017-09-13', 'abcscieng temp', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'NO', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.33.png', '2017-09-13', ''),
(34, 'Accounting and Finance', 'Fulltime', '2017-09-13', 'acctfinfull', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '23.80', '0.00', '330.10', '0.00', '', '0000-00-00', '324-23-4234', 'YES', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.34.png', '2017-09-13', ''),
(35, 'Accounting and Finance', 'Temp', '2017-09-13', 'acctfintemp', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '234-23-4255', 'NO', 'YES', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.35.png', '2017-09-13', ''),
(36, 'Admin and Support', 'Fulltime', '2017-09-14', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.36.png', '2017-09-14', ''),
(37, 'Accounting and Finance', 'Fulltime', '2017-09-20', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'NO', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.37.png', '2017-09-22', ''),
(38, 'Accounting and Finance', 'Fulltime', '2017-09-20', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.38.png', '2017-09-20', ''),
(39, 'Accounting and Finance', 'Fulltime', '2017-09-20', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.39.png', '2017-09-20', ''),
(40, 'Accounting and Finance', 'Temp', '2017-09-20', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.40.png', '2017-09-20', ''),
(41, 'Creative and Marketing', 'Fulltime', '2017-09-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'NO', 'YES', 'NO', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.41.png', '2017-09-29', ''),
(42, 'UX', 'Freelance', '2017-09-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', '(234) 234-2342 ext. 34', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', '', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'a:1:{i:0;s:8:\"HTML/CSS\";}', 'signatures/signature.42.png', '2017-09-29', ''),
(43, 'Fashion and Beauty', 'Freelance', '2017-09-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.43.png', '2017-09-29', ''),
(44, 'Hospitality', 'Temp', '2017-09-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', 'abc rre', '', '', '234234234234', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'signatures/signature.44.png', '2017-09-29', ''),
(45, 'Accounting and Finance', 'Fulltime', '2017-09-29', 'abc', 'rre', '156 Neptune Ave  APT. 2', 'ss@ss.com', 'Brooklyn', '(234) 234-2342', '(234) 234-2342', '(234) 234-2342', 'DE', '11235-5317', '0.00', '0.00', '0.00', '0.00', '', '0000-00-00', '', 'YES', 'NO', '', '', '', '', '', '', '', '', 'wer', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', 'test', '', '', '', '', 'signatures/signature.45.png', '2017-09-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_recentinterviews_table`
--

CREATE TABLE `applicant_recentinterviews_table` (
  `ID` int(11) NOT NULL,
  `ApplicantID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Company` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Position` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_recentinterviews_table`
--

INSERT INTO `applicant_recentinterviews_table` (`ID`, `ApplicantID`, `Date`, `Company`, `Position`) VALUES
(1, 4, '2017-08-08', 'Verizon', 'Screener'),
(7, 25, '0000-00-00', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_workhistory_table`
--

CREATE TABLE `applicant_workhistory_table` (
  `ID` int(11) NOT NULL,
  `ApplicantID` int(11) NOT NULL,
  `Company` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Location` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `WorkDates` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Title` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Supervisor` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `ReasonLeft` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `BasePay` decimal(12,2) NOT NULL,
  `HourlyPay` decimal(12,2) NOT NULL,
  `BonusPay` decimal(12,2) NOT NULL,
  `OTPay` decimal(12,2) NOT NULL,
  `OfficeUse` varchar(500) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_workhistory_table`
--

INSERT INTO `applicant_workhistory_table` (`ID`, `ApplicantID`, `Company`, `Location`, `WorkDates`, `Title`, `Supervisor`, `ReasonLeft`, `BasePay`, `HourlyPay`, `BonusPay`, `OTPay`, `OfficeUse`) VALUES
(4, 6, 'sar', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', ''),
(5, 12, 'Starsky', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', ''),
(14, 4, 'rware', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', ''),
(15, 42, 'nae', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', ''),
(16, 42, 'he', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', ''),
(17, 45, 'be', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `credentials_table`
--

CREATE TABLE `credentials_table` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `hash` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials_table`
--

INSERT INTO `credentials_table` (`ID`, `username`, `hash`, `level`, `date`) VALUES
(1, 'admin', 'soCD2qtsHwnPU', '5', '2017-08-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_education_table`
--
ALTER TABLE `applicant_education_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicant_profile_table`
--
ALTER TABLE `applicant_profile_table`
  ADD PRIMARY KEY (`ApplicantID`) USING BTREE;

--
-- Indexes for table `applicant_recentinterviews_table`
--
ALTER TABLE `applicant_recentinterviews_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicant_workhistory_table`
--
ALTER TABLE `applicant_workhistory_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `credentials_table`
--
ALTER TABLE `credentials_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_education_table`
--
ALTER TABLE `applicant_education_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `applicant_profile_table`
--
ALTER TABLE `applicant_profile_table`
  MODIFY `ApplicantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `applicant_recentinterviews_table`
--
ALTER TABLE `applicant_recentinterviews_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `applicant_workhistory_table`
--
ALTER TABLE `applicant_workhistory_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `credentials_table`
--
ALTER TABLE `credentials_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
