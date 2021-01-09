SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Stuti', 'Anika', 1000),
('Ekansh', 'Shefali', 2000),
('Shubham', 'Ashesh', 500),
('Anika', 'Medha', 1500),
('Shefali', 'Stuti', 1000),
('Anika', 'Shubham', 500),
('Ekansh', 'Stuti', 2000),
('Nikhil', 'Kartikey', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Anika', 'anika@gmail.com', 5000),
('Medha', 'medha@gmail.com', 3500),
('Stuti', 'stuti@gmail.com', 1000),
('Ekansh', 'ekansh@gmail.com', 950),
('Shefali', 'shefali@gmail.com', 2000),
('Shubham', 'shubham@gmail.com', 1500),
('Nikhil', 'nikhil@gmail.com', 1000),
('Kartikey', 'kartikey@gmail.com', 1050),
('Kumail', 'kumail@gmail.com', 800),
('ashesh', 'ashesh@gmail.com', 1800);
COMMIT;
