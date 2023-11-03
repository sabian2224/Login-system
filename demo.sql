
/*DB NAME :  demo  */


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `pwdRepeat` varchar(250) NOT NULL,
  PRIMARY KEY(id)
);

