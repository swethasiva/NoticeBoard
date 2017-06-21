# NoticeBoard

# Already a admin has been created.
## username = "admin"
## password = "admin"

CREATE TABLE IF NOT EXISTS `student` (
  `uname` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `pwd1` varchar(10) DEFAULT NULL,
  `cr` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(40) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');



CREATE TABLE IF NOT EXISTS `note` (
  `title` varchar(50) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `dop` date DEFAULT NULL,
  `dos` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
