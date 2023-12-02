-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 09:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_achievements`
--

CREATE TABLE `academic_achievements` (
  `EMAIL_ID` varchar(50) DEFAULT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `EVENT_NAME` varchar(50) DEFAULT NULL,
  `LEVEL` varchar(50) DEFAULT NULL,
  `PRESENTATION_TYPE` varchar(50) DEFAULT NULL,
  `PRIZE_WON` varchar(500) DEFAULT NULL,
  `CERTIFICATE` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_achievements`
--

INSERT INTO `academic_achievements` (`EMAIL_ID`, `ID`, `EVENT_NAME`, `LEVEL`, `PRESENTATION_TYPE`, `PRIZE_WON`, `CERTIFICATE`) VALUES
('dypatil@gmail.com', 'DY000062', 'Dance', 'state', 'cultural', '../MEDICAL/DY000062/DY000062_Dance_PRIZE_272021082529.jpg', '../MEDICAL/DY000062/DY000062_Dance_CERTI_272021082529.jpg'),
('dypatil@gmail.com', 'DY000062', 'sports', 'state', 'cultural', '../MEDICAL/DY000062/DY000062_sports_PRIZE_272021082545.jpg', '../MEDICAL/DY000062/DY000062_sports_CERTI_272021082545.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bds_document`
--

CREATE TABLE `bds_document` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(50) DEFAULT NULL,
  `ADMIT_CARD` varchar(50) DEFAULT NULL,
  `RANK_LETTER` varchar(50) DEFAULT NULL,
  `ALT_LETTER` varchar(50) DEFAULT NULL,
  `ADM_LETTER` varchar(50) DEFAULT NULL,
  `TENTH_MKS` varchar(50) DEFAULT NULL,
  `TENTH_PASS_CERTI` varchar(50) DEFAULT NULL,
  `TWELTH_MKS` varchar(50) DEFAULT NULL,
  `TWELTH_PASS_CERTI` varchar(50) DEFAULT NULL,
  `CLG_LEAVE_CERTI` varchar(50) DEFAULT NULL,
  `MIGRATION_CERTI` varchar(50) DEFAULT NULL,
  `DISABILITY_CERTI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bds_document`
--

INSERT INTO `bds_document` (`EMAIL_ID`, `ID`, `ADMIT_CARD`, `RANK_LETTER`, `ALT_LETTER`, `ADM_LETTER`, `TENTH_MKS`, `TENTH_PASS_CERTI`, `TWELTH_MKS`, `TWELTH_PASS_CERTI`, `CLG_LEAVE_CERTI`, `MIGRATION_CERTI`, `DISABILITY_CERTI`) VALUES
('dypatil@gmail.com', 'DY000062', '../MEDICAL/DY000062/DY000062_ADMIT_CARD.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `college_bds`
--

CREATE TABLE `college_bds` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(255) DEFAULT NULL,
  `NAME_COLLEGE_10` varchar(255) DEFAULT NULL,
  `NAME_BOARD_10` varchar(255) DEFAULT NULL,
  `YEAR_10` int(4) DEFAULT NULL,
  `NAME_COLLEGE_12` varchar(255) DEFAULT NULL,
  `NAME_BOARD_12` varchar(255) DEFAULT NULL,
  `YEAR_12` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_bds`
--

INSERT INTO `college_bds` (`EMAIL_ID`, `ID`, `NAME_COLLEGE_10`, `NAME_BOARD_10`, `YEAR_10`, `NAME_COLLEGE_12`, `NAME_BOARD_12`, `YEAR_12`) VALUES
('dypatil@gmail.com', 'DY000062', 'Holy Cross Convent High School, Thane', 'SSC', 2000, 'M H Collge', 'HSC', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `college_fellowship`
--

CREATE TABLE `college_fellowship` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(255) DEFAULT NULL,
  `NAME_COLLEGE_10` varchar(255) DEFAULT NULL,
  `NAME_BOARD_10` varchar(255) DEFAULT NULL,
  `YEAR_10` int(4) DEFAULT NULL,
  `NAME_COLLEGE_12` varchar(255) DEFAULT NULL,
  `NAME_BOARD_12` varchar(255) DEFAULT NULL,
  `YEAR_12` int(4) DEFAULT NULL,
  `NAME_COLLEGE_BDS` varchar(255) DEFAULT NULL,
  `NAME_BOARD_BDS` varchar(255) DEFAULT NULL,
  `YEAR_BDS` int(4) DEFAULT NULL,
  `NAME_COLLEGE_MDS` varchar(255) DEFAULT NULL,
  `NAME_BOARD_MDS` varchar(255) DEFAULT NULL,
  `YEAR_MDS` int(4) DEFAULT NULL,
  `NAME_COLLEGE_OTHER` varchar(255) DEFAULT NULL,
  `NAME_BOARD_OTHER` varchar(255) DEFAULT NULL,
  `YEAR_OTHER` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_fellowship`
--

INSERT INTO `college_fellowship` (`EMAIL_ID`, `ID`, `NAME_COLLEGE_10`, `NAME_BOARD_10`, `YEAR_10`, `NAME_COLLEGE_12`, `NAME_BOARD_12`, `YEAR_12`, `NAME_COLLEGE_BDS`, `NAME_BOARD_BDS`, `YEAR_BDS`, `NAME_COLLEGE_MDS`, `NAME_BOARD_MDS`, `YEAR_MDS`, `NAME_COLLEGE_OTHER`, `NAME_BOARD_OTHER`, `YEAR_OTHER`) VALUES
('dypatil@gmail.com', 'DY000062', 'Holy Cross Convent High School, Thane', 'SSC', 2000, 'M H Collge', 'HSC', 2000, 'D Y Patil', 'MU', 2000, 'RAIT', 'MU', 2000, 'hbfk', 'kjb', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `college_mds`
--

CREATE TABLE `college_mds` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(255) DEFAULT NULL,
  `NAME_COLLEGE_10` varchar(255) DEFAULT NULL,
  `NAME_BOARD_10` varchar(255) DEFAULT NULL,
  `YEAR_10` int(4) DEFAULT NULL,
  `NAME_COLLEGE_12` varchar(255) DEFAULT NULL,
  `NAME_BOARD_12` varchar(255) DEFAULT NULL,
  `YEAR_12` int(4) DEFAULT NULL,
  `NAME_COLLEGE_BDS` varchar(255) DEFAULT NULL,
  `NAME_BOARD_BDS` varchar(255) DEFAULT NULL,
  `YEAR_BDS` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_mds`
--

INSERT INTO `college_mds` (`EMAIL_ID`, `ID`, `NAME_COLLEGE_10`, `NAME_BOARD_10`, `YEAR_10`, `NAME_COLLEGE_12`, `NAME_BOARD_12`, `YEAR_12`, `NAME_COLLEGE_BDS`, `NAME_BOARD_BDS`, `YEAR_BDS`) VALUES
('dypatil@gmail.com', 'DY000062', 'Holy Cross Convent High School, Thane', 'SSC', 2000, 'M H Collge', 'HSC', 2000, 'D Y Patil', 'MU', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `college_phd`
--

CREATE TABLE `college_phd` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(255) DEFAULT NULL,
  `NAME_COLLEGE_10` varchar(255) DEFAULT NULL,
  `NAME_BOARD_10` varchar(255) DEFAULT NULL,
  `YEAR_10` int(4) DEFAULT NULL,
  `NAME_COLLEGE_12` varchar(255) DEFAULT NULL,
  `NAME_BOARD_12` varchar(255) DEFAULT NULL,
  `YEAR_12` int(4) DEFAULT NULL,
  `NAME_COLLEGE_BDS` varchar(255) DEFAULT NULL,
  `NAME_BOARD_BDS` varchar(255) DEFAULT NULL,
  `YEAR_BDS` int(4) DEFAULT NULL,
  `NAME_COLLEGE_MDS` varchar(255) DEFAULT NULL,
  `NAME_BOARD_MDS` varchar(255) DEFAULT NULL,
  `YEAR_MDS` int(4) DEFAULT NULL,
  `NAME_COLLEGE_OTHER` varchar(255) DEFAULT NULL,
  `NAME_BOARD_OTHER` varchar(255) DEFAULT NULL,
  `YEAR_OTHER` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_phd`
--

INSERT INTO `college_phd` (`EMAIL_ID`, `ID`, `NAME_COLLEGE_10`, `NAME_BOARD_10`, `YEAR_10`, `NAME_COLLEGE_12`, `NAME_BOARD_12`, `YEAR_12`, `NAME_COLLEGE_BDS`, `NAME_BOARD_BDS`, `YEAR_BDS`, `NAME_COLLEGE_MDS`, `NAME_BOARD_MDS`, `YEAR_MDS`, `NAME_COLLEGE_OTHER`, `NAME_BOARD_OTHER`, `YEAR_OTHER`) VALUES
('dypatil@gmail.com', 'DY000062', 'Holy Cross Convent High School, Thane', 'SSC', 2000, 'M H Collge', 'HSC', 2000, 'D Y Patil', 'MU', 2000, 'RAIT', 'MU', 2000, 'hbfk', 'kjb', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(256) NOT NULL,
  `PER_ADDRESS` varchar(512) DEFAULT NULL,
  `DOM_STATE` varchar(256) DEFAULT NULL,
  `CURRENT_ADD` varchar(512) DEFAULT NULL,
  `STUDENTNUMBER` varchar(256) DEFAULT NULL,
  `STUDENTEMAIL` varchar(256) DEFAULT NULL,
  `FATHERNUMBER` varchar(256) DEFAULT NULL,
  `FATHEREMAIL` varchar(256) DEFAULT NULL,
  `MOTHERNUMBER` varchar(256) DEFAULT NULL,
  `MOTHEREMAIL` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`EMAIL_ID`, `ID`, `PER_ADDRESS`, `DOM_STATE`, `CURRENT_ADD`, `STUDENTNUMBER`, `STUDENTEMAIL`, `FATHERNUMBER`, `FATHEREMAIL`, `MOTHERNUMBER`, `MOTHEREMAIL`) VALUES
('dypatil@gmail.com', 'DY000062', 'Shreerang society', ' Andaman and Nicobar Islands', 'Shreerang society', '9869151647', 'sans.tikone@gmail.com', '9869036951', 'sanjaytikone@gmail.com', '9869452606', 'sukeshini.tikone@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular`
--

CREATE TABLE `extracurricular` (
  `EMAIL_ID` varchar(50) DEFAULT NULL,
  `ID` varchar(50) DEFAULT NULL,
  `EVENT_NAME` varchar(50) DEFAULT NULL,
  `LEVEL` varchar(25) DEFAULT NULL,
  `EVENT_TYPE` varchar(25) DEFAULT NULL,
  `PRIZE_WON` varchar(500) DEFAULT NULL,
  `CERTIFICATE` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extracurricular`
--

INSERT INTO `extracurricular` (`EMAIL_ID`, `ID`, `EVENT_NAME`, `LEVEL`, `EVENT_TYPE`, `PRIZE_WON`, `CERTIFICATE`) VALUES
('dypatil@gmail.com', 'DY000062', 'Dance', 'district', 'cultural', '../MEDICAL/DY000062/DY000062_Dance_PRIZE_272021082617.jpg', '../MEDICAL/DY000062/DY000062_Dance_CERTI_272021082617.jpg'),
('dypatil@gmail.com', 'DY000062', 'sports ', 'state', 'sports', '../MEDICAL/DY000062/DY000062_sports _PRIZE_272021082645.jpg', '../MEDICAL/DY000062/DY000062_sports _CERTI_272021082645.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mds_document`
--

CREATE TABLE `mds_document` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(50) DEFAULT NULL,
  `ADMIT_CARD` varchar(50) DEFAULT NULL,
  `RANK_LETTER` varchar(50) DEFAULT NULL,
  `ALT_LETTER` varchar(50) DEFAULT NULL,
  `ADM_LETTER` varchar(50) DEFAULT NULL,
  `TENTH_MKS` varchar(50) DEFAULT NULL,
  `TENTH_PASS_CERTI` varchar(50) DEFAULT NULL,
  `TWELTH_MKS` varchar(50) DEFAULT NULL,
  `TWELTH_PASS_CERTI` varchar(50) DEFAULT NULL,
  `FIRST_BDS_MARKSHEET` varchar(50) DEFAULT NULL,
  `SECOND_BDS_MARKSHEET` varchar(50) DEFAULT NULL,
  `THIRD_BDS_MARKSHEET` varchar(50) DEFAULT NULL,
  `FOURTH_BDS_MARKSHEET` varchar(50) DEFAULT NULL,
  `PROVISION_CERTI` varchar(50) DEFAULT NULL,
  `ATTEMPT_CERTI` varchar(50) DEFAULT NULL,
  `BDS_DEG_CERTI` varchar(50) DEFAULT NULL,
  `CLG_INTERN_CERTI` varchar(50) DEFAULT NULL,
  `DCI_RECOG_CERTI` varchar(50) DEFAULT NULL,
  `DCI_REG_CERTI` varchar(50) DEFAULT NULL,
  `CLG_LEAVE_CERTI` varchar(50) DEFAULT NULL,
  `MIGRATION_CERTI` varchar(50) DEFAULT NULL,
  `DISABILITY_CERTI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mds_document`
--

INSERT INTO `mds_document` (`EMAIL_ID`, `ID`, `ADMIT_CARD`, `RANK_LETTER`, `ALT_LETTER`, `ADM_LETTER`, `TENTH_MKS`, `TENTH_PASS_CERTI`, `TWELTH_MKS`, `TWELTH_PASS_CERTI`, `FIRST_BDS_MARKSHEET`, `SECOND_BDS_MARKSHEET`, `THIRD_BDS_MARKSHEET`, `FOURTH_BDS_MARKSHEET`, `PROVISION_CERTI`, `ATTEMPT_CERTI`, `BDS_DEG_CERTI`, `CLG_INTERN_CERTI`, `DCI_RECOG_CERTI`, `DCI_REG_CERTI`, `CLG_LEAVE_CERTI`, `MIGRATION_CERTI`, `DISABILITY_CERTI`) VALUES
('dypatil@gmail.com', 'DY000062', '../MEDICAL/DY000062/DY000062_ADMIT_CARD.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `progress_student`
--

CREATE TABLE `progress_student` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `YEAR` varchar(10) DEFAULT NULL,
  `MARKS_OBTAINED` varchar(10) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `REVALUATION` varchar(10) DEFAULT NULL,
  `NO_ATTEMPTS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress_student`
--

INSERT INTO `progress_student` (`EMAIL_ID`, `ID`, `YEAR`, `MARKS_OBTAINED`, `STATUS`, `REVALUATION`, `NO_ATTEMPTS`) VALUES
('dypatil@gmail.com', 'DY000062', '1', '0', 'Pass', '00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(255) DEFAULT NULL,
  `SCHOLARSHIP` varchar(255) DEFAULT NULL,
  `AGENCY_NAME` varchar(255) DEFAULT NULL,
  `SCHOLARSHIP_AMT` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`EMAIL_ID`, `ID`, `SCHOLARSHIP`, `AGENCY_NAME`, `SCHOLARSHIP_AMT`) VALUES
('dypatil@gmail.com', 'DY000062', '2', 'None', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `EMAIL_ID` varchar(50) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `F_NAME` varchar(30) DEFAULT NULL,
  `M_NAME` varchar(30) DEFAULT NULL,
  `L_NAME` varchar(30) DEFAULT NULL,
  `FATHER_NAME` varchar(50) DEFAULT NULL,
  `MOTHER_NAME` varchar(50) DEFAULT NULL,
  `REG_NO` varchar(20) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `BIRTH_PLACE` varchar(30) DEFAULT NULL,
  `BLOOD_GRP` varchar(10) DEFAULT NULL,
  `PANCARD` varchar(20) DEFAULT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `PASSPORT` varchar(20) DEFAULT NULL,
  `PARENT_PANCARD` varchar(20) DEFAULT NULL,
  `RELIGION` varchar(20) DEFAULT NULL,
  `CASTE` varchar(20) DEFAULT NULL,
  `RESERVATION` varchar(30) DEFAULT NULL,
  `CATEGORY` varchar(20) DEFAULT NULL,
  `BROWSE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`EMAIL_ID`, `ID`, `F_NAME`, `M_NAME`, `L_NAME`, `FATHER_NAME`, `MOTHER_NAME`, `REG_NO`, `GENDER`, `DOB`, `BIRTH_PLACE`, `BLOOD_GRP`, `PANCARD`, `AADHAR`, `PASSPORT`, `PARENT_PANCARD`, `RELIGION`, `CASTE`, `RESERVATION`, `CATEGORY`, `BROWSE`) VALUES
('dypatil@gmail.com', 'DY000062', 'Sanskruti', 'Sanjay', 'Tikone', 'Sanjay', 'Sukeshini', '18CE1100', 'Female', '2021-12-31	', 'Pune', 'O+', 'AAAAA9999A', '299988887777', 'A0000000', 'BBBBB1111B', 'Hindu', 'HINDU', 'Open', 'OPEN', '../MEDICAL/DY000062/DY000062_Photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `submit_status`
--

CREATE TABLE `submit_status` (
  `APPLICATION_ID` varchar(20) NOT NULL DEFAULT '0',
  `ALL_FORM` int(5) NOT NULL DEFAULT 0,
  `F_NAME` varchar(20) DEFAULT NULL,
  `L_NAME` varchar(20) DEFAULT NULL,
  `STUDENT_DETAILS` int(5) DEFAULT NULL,
  `PERSONAL_QUERYBOX` varchar(1000) DEFAULT NULL,
  `CONTACT_DETAILS` int(5) DEFAULT NULL,
  `CONTACT_QUERYBOX` varchar(1000) DEFAULT NULL,
  `COLLEGE_BDS` int(5) DEFAULT NULL,
  `CLGBDS_QUERYBOX` varchar(1000) DEFAULT NULL,
  `COLLEGE_MDS` int(5) DEFAULT NULL,
  `CLGMDS_QUERYBOX` varchar(1000) DEFAULT NULL,
  `COLLEGE_PHD` int(5) DEFAULT NULL,
  `CLGPHD_QUERYBOX` varchar(1000) DEFAULT NULL,
  `COLLEGE_FELLOWSHIP` int(5) DEFAULT NULL,
  `CLGFELL_QUERYBOX` varchar(1000) DEFAULT NULL,
  `SCHOLARSHIP` int(5) DEFAULT NULL,
  `SCHOLARSHIP_QUERYBOX` varchar(1000) DEFAULT NULL,
  `BDS_DOCUMENTS` int(5) DEFAULT NULL,
  `BDSDOC_QUERYBOX` varchar(1000) DEFAULT NULL,
  `MDS_DOCUMENTS` int(5) DEFAULT NULL,
  `MDSDOC_QUERYBOX` varchar(1000) DEFAULT NULL,
  `PROGRESS_STUDENT` int(5) DEFAULT NULL,
  `PROGRESS_QUERYBOX` varchar(1000) DEFAULT NULL,
  `ACADEMIC` int(5) DEFAULT NULL,
  `ACADEMIC_QUERYBOX` varchar(1000) DEFAULT NULL,
  `EXTRACURRICULAR` int(5) DEFAULT NULL,
  `EXTRACURRICULAR_QUERYBOX` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_status`
--

INSERT INTO `submit_status` (`APPLICATION_ID`, `ALL_FORM`, `F_NAME`, `L_NAME`, `STUDENT_DETAILS`, `PERSONAL_QUERYBOX`, `CONTACT_DETAILS`, `CONTACT_QUERYBOX`, `COLLEGE_BDS`, `CLGBDS_QUERYBOX`, `COLLEGE_MDS`, `CLGMDS_QUERYBOX`, `COLLEGE_PHD`, `CLGPHD_QUERYBOX`, `COLLEGE_FELLOWSHIP`, `CLGFELL_QUERYBOX`, `SCHOLARSHIP`, `SCHOLARSHIP_QUERYBOX`, `BDS_DOCUMENTS`, `BDSDOC_QUERYBOX`, `MDS_DOCUMENTS`, `MDSDOC_QUERYBOX`, `PROGRESS_STUDENT`, `PROGRESS_QUERYBOX`, `ACADEMIC`, `ACADEMIC_QUERYBOX`, `EXTRACURRICULAR`, `EXTRACURRICULAR_QUERYBOX`) VALUES
('DY000062', 0, 'Sanskruti', 'Tikone', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SR_NO` int(50) NOT NULL,
  `ID` varchar(50) DEFAULT NULL,
  `EMAIL_ID` varchar(100) NOT NULL DEFAULT 'none',
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SR_NO`, `ID`, `EMAIL_ID`, `Password`) VALUES
(62, 'DY000062', 'dypatil@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `SR_NO` varchar(25) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`SR_NO`, `PASSWORD`) VALUES
('verifier01', '123'),
('verifier02', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bds_document`
--
ALTER TABLE `bds_document`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `college_bds`
--
ALTER TABLE `college_bds`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `college_fellowship`
--
ALTER TABLE `college_fellowship`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `college_mds`
--
ALTER TABLE `college_mds`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `college_phd`
--
ALTER TABLE `college_phd`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `mds_document`
--
ALTER TABLE `mds_document`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `progress_student`
--
ALTER TABLE `progress_student`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`EMAIL_ID`),
  ADD UNIQUE KEY `SR_NO` (`SR_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SR_NO` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
