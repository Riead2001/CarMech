SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(65) NOT NULL,
  `modifiedAt` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `admin` (`name`, `email`, `password`, `modifiedAt`) VALUES
('admin', 'admin@email.com', 'abcd1234..', '4-9-2023');



CREATE TABLE `appointment` (
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `vehicleType` varchar(12) NOT NULL,
  `vehicleNumber` varchar(18) NOT NULL,
  `vehicleModel` varchar(24) NOT NULL,
  `vehicleYear` varchar(4) NOT NULL,
  `appointmentDate` varchar(12) NOT NULL,
  `mechanic` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `appointment` (`firstName`, `lastName`, `email`, `phoneNumber`, `vehicleType`, `vehicleNumber`, `vehicleModel`, `vehicleYear`, `appointmentDate`, `mechanic`) VALUES
('alpine', 'fischer', 'customer@test.com', '8657456754', 'coupe', '', 'mazda mx-3', '2004', '2023-04-06', 'mechanic3');


CREATE TABLE `users` (
  `firstName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`firstName`, `lastName`, `email`, `phoneNumber`, `password`) VALUES
('John', 'Doe', 'customer@test.com', '032194812', 'abcd1234..');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

