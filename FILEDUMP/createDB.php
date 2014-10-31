<?php
include 'connectDB.php';

$query = 'CREATE TABLE IF NOT EXISTS `account_table` (
  Account_username varchar(20) NOT NULL,
  Account_password varchar(100) DEFAULT NULL,
  Account_type varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Account_username`)
)';


mysqli_query($db, $query) or die (mysqli_error($db));

$query = 'CREATE TABLE IF NOT EXISTS `family_member` (
  `SC_IDNO` int(10) DEFAULT NULL,
  `SC_DEPNAME` varchar(50) DEFAULT NULL,
  `SC_DEPOCCUPATION` varchar(50) DEFAULT NULL,
  KEY `SC_IDNO` (`SC_IDNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1';


mysqli_query($db, $query) or die (mysqli_error($db));

$query = 'CREATE TABLE IF NOT EXISTS `LOGS` (
  `DATE` datetime NOT NULL,
  `ACTION` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `LOG_INFO` varchar(100) NOT NULL,
  PRIMARY KEY (`DATE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1';


mysqli_query($db, $query) or die (mysqli_error($db));

$query = 'CREATE TABLE IF NOT EXISTS `sr_citizen_table` (
  `APP_TYPE` varchar(10) DEFAULT NULL,
  `SC_TELNUM` varchar(15) DEFAULT NULL,
  `SC_YRSOFRES` int(11) DEFAULT NULL,
  `SC_GENDER` varchar(10) DEFAULT NULL,
  `SC_CIVILSTATUS` varchar(15) DEFAULT NULL,
  `SC_EDUCATTAIN` varchar(30) DEFAULT NULL,
  `SC_LNAME` varchar(60) DEFAULT NULL,
  `SC_FNAME` varchar(60) DEFAULT NULL,
  `SC_MNAME` varchar(60) DEFAULT NULL,
  `SC_STREET` varchar(60) DEFAULT NULL,
  `SC_BARANGAY` varchar(60) DEFAULT NULL,
  `SC_CITY` varchar(60) DEFAULT NULL,
  `SC_BDAY` date DEFAULT NULL,
  `SC_BPLACE` varchar(60) DEFAULT NULL,
  `SC_NAMESPOUSE` varchar(60) DEFAULT NULL,
  `SC_AGESPOUSE` int(150) DEFAULT NULL,
  `SC_AGE` int(150) DEFAULT NULL,
  `SC_EMPLOYMENT` varchar(60) DEFAULT NULL,
  `SC_POSITION` varchar(60) DEFAULT NULL,
  `SC_WORKADDR` varchar(60) DEFAULT NULL,
  `SC_OTHERINCOME` varchar(60) DEFAULT NULL,
  `SC_SALARY` float DEFAULT NULL,
  `SC_EMPLOYER` varchar(60) DEFAULT NULL,
  `SC_WORKTEL` varchar(60) DEFAULT NULL,
  `SC_OTHERINCOMEAMT` float DEFAULT NULL,
  `SC_PHILHEALTHMEM` varchar(10) DEFAULT NULL,
  `SC_PHILHEALTHNO` int(20) DEFAULT NULL,
  `SC_PHILHEALTHDEP` varchar(10) DEFAULT NULL,
  `SC_PHILHEALTHDEPNO` int(20) DEFAULT NULL,
  `SC_IDNO` int(11) NOT NULL,
  PRIMARY KEY (`SC_IDNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1';


mysqli_query($db, $query) or die (mysqli_error($db));

$query = 'INSERT INTO `sr_citizen_table` (`APP_TYPE`, `SC_TELNUM`, `SC_YRSOFRES`, `SC_GENDER`, `SC_CIVILSTATUS`, `SC_EDUCATTAIN`, `SC_LNAME`, `SC_FNAME`, `SC_MNAME`, `SC_STREET`, `SC_BARANGAY`, `SC_CITY`, `SC_BDAY`, `SC_BPLACE`, `SC_NAMESPOUSE`, `SC_AGESPOUSE`, `SC_AGE`, `SC_EMPLOYMENT`, `SC_POSITION`, `SC_WORKADDR`, `SC_OTHERINCOME`, `SC_SALARY`, `SC_EMPLOYER`, `SC_WORKTEL`, `SC_OTHERINCOMEAMT`, `SC_PHILHEALTHMEM`, `SC_PHILHEALTHNO`, `SC_PHILHEALTHDEP`, `SC_PHILHEALTHDEPNO`, `SC_IDNO`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 201200000)';
mysqli_query($db, $query) or die (mysqli_error($db));

echo"You can now start the program!";
header("Location: index.php");
?>
