-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2018 at 04:13 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_for_sell`
--

CREATE TABLE `book_for_sell` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `numpage` int(13) NOT NULL,
  `language` varchar(50) NOT NULL,
  `quantity` int(13) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `imagepath` varchar(150) NOT NULL,
  `upload_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_for_sell`
--

INSERT INTO `book_for_sell` (`book_id`, `title`, `author`, `type`, `edition`, `numpage`, `language`, `quantity`, `price`, `status`, `description`, `imagepath`, `upload_date`) VALUES
(16, 'Ma', 'Anisul Haque', 'Novel', '1st,2017', 231, 'Bangla', 21, 'Donate', 'good', 'Maa by Anisul Haque is popular novel. Anisul Haque is famous for this novel. This story is true about our Liberation War. For this Anisul Haque is familiar to everyone. Maa was published February 2003 by Somoy Prokashon. My cell phone doesnâ€™t have any Bengali keyboard now, otherwise, I would write this with Bengali. Amazing plot, and I read it quite late but Anisul Haq probably ruined bit with putting fiction on it then again it increased the thieves to know more about our liberation War of 1971. Today I have downloaded all the part of Muktijhuddher Golpo by Muntasir Mamun and in the coming year, my target would be read every single pit of pieces by all writers who wrote on 71, in context of learning the right history what I have heard from my dad, mom, and grandfather. After reading this book I feel the strong urge to know every single martyr and all those brave souls who fought, won and gave us freedom from Bloody Pakistanis. Salute to Safia Begum, Jahanara Imam and all those mothers who sacrificed their children in the verge of getting a free land which is our only beautiful country, â€œBangladeshâ€. Thanks for reading Maa by Anisul Haque book review. To read this book please download now and itâ€™s fully free. If you like our site please bookmark it now to find next time any book easily. So stay with us for reading new books.', '/var/www/html/add_book/uploads/2018.04.28.06.28.57à¦®à¦¾.jpeg', '2018-05-03'),
(17, 'Bisad sindhu', 'Mir Mosharaf hossain', 'Novel', '2nd,2018', 235, 'Bangla', 233, 'Exchange', '', 'Bishad Shindhu (Bengali: à¦¬à¦¿à¦·à¦¾à¦¦-à¦¸à¦¿à¦¨à§à¦§à§) is a poetic novel about the history of Muhammad\'s grandson Hasan, especially Husayn\'s assassination, and the war for the position of Khalifa of Muslims. It was written by Mir Mosarraf Hussain, one of the first modern Bengali Muslim writers.\r\n\r\nBishad Shindhu was written over the period of 1885-1891.[1][2] It is one of the best known works of Bengali literature. However, it is not considered an authentic source for the history of Karbala, the location of Husayn\'s war front, or the place of his death.\r\n\r\nBishad Shindhu is written in an epic style. It contains much poetic language, and many dramatic scenes. At the time of its composition, there were few published novels in the Bengali language, and Mosharraf Hussain was part of a community of writers working to pioneer a new tradition of novels in Bengali. The novel was written in Shadhubhasha, a Sanskritised form of Bengali', '/var/www/html/add_book/uploads/2018.04.28.06.39.53images.jpeg', '2018-05-03'),
(18, 'Sheser kobita', 'Robidranath Tagore', 'Novel', '1st,1998', 2311, 'Bangla', 11, '123', 'Like_new', 'Shesher Kabita (Bengali: à¦¶à§‡à¦·à§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾) is a novel by Rabindranath Tagore, widely considered a landmark in Bengali literature. The novel was serialised in 1928, from Bhadro to Choitro in the magazine Probashi, and was published in book form the following year. It has been translated into English as The Last Poem (translator Anandita Mukhopadhyay) and Farewell song (translator Radha Chakravarty)', '/var/www/html/add_book/uploads/2018.04.28.06.49.23Shesher_Kabita_front_cover.jpg', '2018-05-03'),
(19, 'Himu', 'Humayun Ahmed', 'Novel', '2nd,2014', 400, 'Bangla', 6, '280', 'Like_new', 'The real name of the character is Himalay, a name given by his father. He follows a lifestyle that was instructed by his psychopathic father who wanted him to be a great man.[2]\r\n\r\nHimu wears a yellow panjabi that does not have a pocket and lives like a vagabond or a gypsy.[3] He walks barefoot on the streets of Dhaka without certain destination. He does not have job and, therefore, no source of income. He prefers the life of a beggar than that of a hard worker, often praising begging. However, Himu walks endlessly â€“ never using any forms of transportation.[4] The charterer is decidedly eccentric and unorthodox in outlook.[5]\r\n\r\nHe can make fans for his spiritual power of predicting future events including police officer, beggar, neighbor, relatives and tea stall proprietor. Most of the time he indifferently speaks unpleasant truth about the person with whom he talks.[2]', '/var/www/html/add_book/uploads/2018.05.05.01.52.48himu.jpg', '2018-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `donate_book`
--

CREATE TABLE `donate_book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `numpage` int(13) NOT NULL,
  `language` varchar(50) NOT NULL,
  `quantity` int(13) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `upload_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate_book`
--

INSERT INTO `donate_book` (`book_id`, `title`, `author`, `type`, `edition`, `numpage`, `language`, `quantity`, `status`, `description`, `imagepath`, `upload_date`) VALUES
(16, 'Ma', 'Anisul Haque', 'Novel', '1st,2017', 231, 'Bangla', 21, 'good', 'Maa by Anisul Haque is popular novel. Anisul Haque is famous for this novel. This story is true about our Liberation War. For this Anisul Haque is familiar to everyone. Maa was published February 2003 by Somoy Prokashon. My cell phone doesnâ€™t have any Bengali keyboard now, otherwise, I would write this with Bengali. Amazing plot, and I read it quite late but Anisul Haq probably ruined bit with putting fiction on it then again it increased the thieves to know more about our liberation War of 1971. Today I have downloaded all the part of Muktijhuddher Golpo by Muntasir Mamun and in the coming year, my target would be read every single pit of pieces by all writers who wrote on 71, in context of learning the right history what I have heard from my dad, mom, and grandfather. After reading this book I feel the strong urge to know every single martyr and all those brave souls who fought, won and gave us freedom from Bloody Pakistanis. Salute to Safia Begum, Jahanara Imam and all those mothers who sacrificed their children in the verge of getting a free land which is our only beautiful country, â€œBangladeshâ€. Thanks for reading Maa by Anisul Haque book review. To read this book please download now and itâ€™s fully free. If you like our site please bookmark it now to find next time any book easily. So stay with us for reading new books.', '/var/www/html/add_book/uploads/2018.04.28.06.28.57à¦®à¦¾.jpeg', '2018-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_book`
--

CREATE TABLE `exchange_book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `numpage` int(13) NOT NULL,
  `language` varchar(50) NOT NULL,
  `quantity` int(13) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `upload_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange_book`
--

INSERT INTO `exchange_book` (`book_id`, `title`, `author`, `type`, `edition`, `numpage`, `language`, `quantity`, `status`, `description`, `imagepath`, `upload_date`) VALUES
(17, 'Bisad sindhu', 'Mir Mosharaf hossain', 'Novel', '2nd,2018', 235, 'Bangla', 233, '', 'Bishad Shindhu (Bengali: à¦¬à¦¿à¦·à¦¾à¦¦-à¦¸à¦¿à¦¨à§à¦§à§) is a poetic novel about the history of Muhammad\'s grandson Hasan, especially Husayn\'s assassination, and the war for the position of Khalifa of Muslims. It was written by Mir Mosarraf Hussain, one of the first modern Bengali Muslim writers.\r\n\r\nBishad Shindhu was written over the period of 1885-1891.[1][2] It is one of the best known works of Bengali literature. However, it is not considered an authentic source for the history of Karbala, the location of Husayn\'s war front, or the place of his death.\r\n\r\nBishad Shindhu is written in an epic style. It contains much poetic language, and many dramatic scenes. At the time of its composition, there were few published novels in the Bengali language, and Mosharraf Hussain was part of a community of writers working to pioneer a new tradition of novels in Bengali. The novel was written in Shadhubhasha, a Sanskritised form of Bengali', '/var/www/html/add_book/uploads/2018.04.28.06.39.53images.jpeg', '2018-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `sell_book`
--

CREATE TABLE `sell_book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `numpage` int(13) NOT NULL,
  `language` varchar(50) NOT NULL,
  `quantity` int(13) NOT NULL,
  `price` int(13) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `upload_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_book`
--

INSERT INTO `sell_book` (`book_id`, `title`, `author`, `type`, `edition`, `numpage`, `language`, `quantity`, `price`, `status`, `description`, `imagepath`, `upload_date`) VALUES
(18, 'Sheser kobita', 'Robidranath Tagore', 'Novel', '1st,1998', 2311, 'Bangla', 11, 123, 'Like_new', 'Shesher Kabita (Bengali: à¦¶à§‡à¦·à§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾) is a novel by Rabindranath Tagore, widely considered a landmark in Bengali literature. The novel was serialised in 1928, from Bhadro to Choitro in the magazine Probashi, and was published in book form the following year. It has been translated into English as The Last Poem (translator Anandita Mukhopadhyay) and Farewell song (translator Radha Chakravarty)', '/var/www/html/add_book/uploads/2018.04.28.06.49.23Shesher_Kabita_front_cover.jpg', '2018-05-03'),
(19, 'Himu', 'Humayun Ahmed', 'Novel', '2nd,2014', 400, 'Bangla', 6, 280, 'Like_new', 'The real name of the character is Himalay, a name given by his father. He follows a lifestyle that was instructed by his psychopathic father who wanted him to be a great man.[2]\r\n\r\nHimu wears a yellow panjabi that does not have a pocket and lives like a vagabond or a gypsy.[3] He walks barefoot on the streets of Dhaka without certain destination. He does not have job and, therefore, no source of income. He prefers the life of a beggar than that of a hard worker, often praising begging. However, Himu walks endlessly â€“ never using any forms of transportation.[4] The charterer is decidedly eccentric and unorthodox in outlook.[5]\r\n\r\nHe can make fans for his spiritual power of predicting future events including police officer, beggar, neighbor, relatives and tea stall proprietor. Most of the time he indifferently speaks unpleasant truth about the person with whom he talks.[2]', '/var/www/html/add_book/uploads/2018.05.05.01.52.48himu.jpg', '2018-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `thana` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `cell`, `password`, `institution`, `district`, `thana`, `village`) VALUES
('Inzamam Toha', 'inzamam.csedu@gmail.com', '01743103899', 'w', 'University of Dhaka', 'Dhaka', 'Mirpur', 'Shewrapara'),
('toha', 'tohasaran@gmail.com', '01743103899', '1234', 'Dhaka University', 'Dhaka', 'Tejgaon', '89,Monipuripara'),
('toukir', 'toukirahmed@gmail.com', '0171112345678', '1234', 'Dhaka University', 'Dhaka', 'Shahbag', 'Sahidullah Hall'),
('w', 'w', '01643104543', 'w', 'Dhaka University', 'Dhaka', 'Gulshan', 'Notun bazar');

-- --------------------------------------------------------

--
-- Table structure for table `user_book`
--

CREATE TABLE `user_book` (
  `book_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `change_style` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_book`
--

INSERT INTO `user_book` (`book_id`, `email`, `change_style`) VALUES
(16, 'tohasaran@gmail.com', 'Donate'),
(17, 'tohasaran@gmail.com', 'Exchange'),
(18, 'tohasaran@gmail.com', 'Sell'),
(19, 'tohasaran@gmail.com', 'Sell'),
(20, 'inzamam.csedu@gmail.com', 'Exchange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_for_sell`
--
ALTER TABLE `book_for_sell`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `donate_book`
--
ALTER TABLE `donate_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `exchange_book`
--
ALTER TABLE `exchange_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `sell_book`
--
ALTER TABLE `sell_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_book`
--
ALTER TABLE `user_book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_for_sell`
--
ALTER TABLE `book_for_sell`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
