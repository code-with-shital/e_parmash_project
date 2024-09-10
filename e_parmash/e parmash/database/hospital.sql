

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fromm` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `too` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `fromm`, `phone`, `message`, `too`, `cTime`) VALUES
(1, 'Misha Rani', '4066', '0725667841', 'I want to see you tomorrow', '1234', '1554916571'),
(2, 'dr Riya', '1234', '0725895256', 'OKay no problem I will be available', '4066', '1554917369');



--
-- Table structure for table `hiv`
--

CREATE TABLE IF NOT EXISTS `hiv` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `moc` varchar(255) NOT NULL,
  `dComments` text NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiv`
--

INSERT INTO `hiv` (`id`, `name`, `age`, `location`, `moc`, `dComments`, `cTime`, `token`) VALUES
(1, 'Ramesh', '30', 'Boaring road', 'Blood Transfusion', 'This what it happened', '1554814784', 'e5f5f3afdfab4b6a11a3aed3932eee20');

-- --------------------------------------------------------

--
-- Table structure for table `outbreaks`
--

CREATE TABLE IF NOT EXISTS `outbreaks` (
`id` int(11) NOT NULL,
  `outBreak` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `measures` text NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbreaks`
--

INSERT INTO `outbreaks` (`id`, `outBreak`, `comments`, `location`, `cTime`, `measures`, `token`) VALUES
(1, 'Covid', 'There is a serious problem', 'Gandhi maidan', '1554913667', 'testing', 'f946c63a3187a5059ac6eed1fc82c1e4');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `emaiid` varchar(40) NOT NULL,
  `dateOfBirth` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `diagnosis` text NOT NULL,
  `prescription` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `pcondition` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `location`, `age`, `gender`, `emailid`, `dateOfBirth`, `cTime`, `diagnosis`, `prescription`, `token`, `doctor`, `password`, `pcondition`) VALUES
(2, 'Misha Rani', 'patna', '22', 'Female', 'prashansar8@gmail.com', '04 - 04 - 2000', '1554756586', 'Headache\r<br />Vomiting\r<br />Neusea', 'Crocine/h4 x3', '12cx', '1234', 'Jio@23', NULL),
(3, 'Jeet', 'Patna', '40', 'Male', '0713345678', '01 - 01 - 1979', '1554817535', 'Vomiting\r<br />Coughing\r<br />Others', 'i9\r<br />op09jk\r<br />kjdkfa', 'dudb', '1234', '4578', NULL),
(4, 'soumya', 'patna', '12', 'Male', '0725667841', '04 - 01 - 2010', '1554903224', 'stomach pain', 'pantop', 'aada', '1234', '4066', 'Outpatient');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `email`, `password`, `token`, `status`, `phone`, `profile`, `gender`, `role`) VALUES
(1, 'Paramarsh', 'Healthcare', 'admin0808@gmail.com', 'hospital', '1236548lpoik58965', 1, '0712345678', NULL, 'Male', NULL),
(2, 'Riya', 'singh', 'drriya0808@gmail.com', 'hospital', '1234', 2, '0712345672', NULL, 'Female', 'physician'),
(4, 'Anmol', 'kumaar', 'dranmol08gmail.com', 'hospital', '5678', 2, '0725667841', NULL, 'Male', 'surgeon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiv`
--
ALTER TABLE `hiv`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbreaks`
--
ALTER TABLE `outbreaks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hiv`
--
ALTER TABLE `hiv`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `outbreaks`
--
ALTER TABLE `outbreaks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
