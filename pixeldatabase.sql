
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`name`, `password`) VALUES
('pixel', 'pixel'),
('pixel', '123');

CREATE TABLE IF NOT EXISTS `book` (
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Event Place` varchar(50) NOT NULL,
  `Event Name` varchar(50) NOT NULL,
  `Event Date` date NOT NULL,
  `media1` varchar(1) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `book` (`Name`, `Address`, `Contact`, `Event Place`, `Event Name`, `Event Date`, `media1`, `Email`) VALUES
('om', 'mangalore', 8877669087, 'bangalore', 'bdy', '2018-11-29', 'B', 'om@gmail.com'),
('om', 'bangalore', 9898767654, 'london', 'bdy', '2018-11-30', 'B', 'om@gmail.com'),
('jack', 'mangalore', 8877669080, 'surathkal', 'wedding', '2018-12-31', 'P', 'shetty1@gmail.com'),
('shibhani', 'mangalore', 8877669080, 'mangalore', 'wedding', '2018-12-19', 'B', 'shetty11@gmail.com');

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('reshma', 'shettyshibhani@gmail.com', 'gooood'),
('om', 'om@gmail.com', 'Awsom..........:)'),
('Rithesh', 'rithesh@gmail.com', 'thnk you'),
('om', 'om', 'hshshshsh');

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `register` (
  `name` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `conformpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `register` (`name`, `password`, `conformpass`) VALUES
('qwe', 'aaa', 'aaa'),
('reshma', '123', '123'),
('shibani', '12345', '12345'),
('john', '123', '123'),
('jack', 'zzz', 'zzz'),
('asif', 'girls', 'girls'),
('reshma', '321', '321'),
('shibani', '9876', '9876'),
('qqq', 'qqq', 'qqq'),
('rs', '123', '123'),
('john', '111', '111');
