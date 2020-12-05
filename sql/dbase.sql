-- --------------------------------------------------------
--
-- Database: `BeastWebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE table Users (
    ID int(11) not null PRIMARY KEY AUTO_INCREMENT,
    Email varchar(128) not null,
    Passwd varchar(128) not null
);

--
-- Dumping data for admin int `Users`
--
INSERT INTO `Users`(`Email`, `Passwd`) VALUES ("sphoetify.buzzness@gmail.com", "password");