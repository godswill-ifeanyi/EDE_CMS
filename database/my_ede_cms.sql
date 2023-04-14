-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 05:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_ede_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `writeup` text NOT NULL,
  `posted_by` varchar(255) NOT NULL DEFAULT 'Posted by an admin',
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `picture`, `title`, `intro`, `writeup`, `posted_by`, `date`) VALUES
(2, 'b3.jpg', 'Django Web Framework', 'The introduction a framework for writing fast, more secure backend application using Python Django..', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias error aspernatur eligendi placeat iure eum, neque cum a quae minus ipsam non, doloremque aliquam excepturi commodi, labore officia ad dolorem!', 'Posted by an admin', '15/03/2013'),
(3, 'b2.jpg', 'PHP Hacks', 'Tips and tricks to progressively produce PHP codes as a beginner...', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias error aspernatur eligendi placeat iure eum, neque cum a quae minus ipsam non, doloremque aliquam excepturi commodi, labore officia ad dolorem!', 'Posted by an admin', '15/03/2013'),
(4, 'b1.jpg', 'Learn Web Development In The Easiest Way', 'The ability to produce clean, reusable and smart codes eficiently...', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias error aspernatur eligendi placeat iure eum, neque cum a quae minus ipsam non, doloremque aliquam excepturi commodi, labore officia ad dolorem!', 'Posted by an admin', '15/03/2013'),
(8, 'b4.png', 'Mobile App Development With React Native', 'The introduction a framework for writing fast, user friendly mobile application using React Native..', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias error aspernatur eligendi placeat iure eum, neque cum a quae minus ipsam non, doloremque aliquam excepturi commodi, labore officia ad dolorem!', 'Posted by an admin', '15/03/2013');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `course_overview` text DEFAULT NULL,
  `objective1` varchar(255) DEFAULT NULL,
  `objective2` varchar(255) DEFAULT NULL,
  `objective3` varchar(255) DEFAULT NULL,
  `objective4` varchar(255) DEFAULT NULL,
  `objective5` varchar(255) DEFAULT NULL,
  `benefit1` varchar(255) DEFAULT NULL,
  `benefit2` varchar(255) DEFAULT NULL,
  `benefit3` varchar(255) DEFAULT NULL,
  `benefit4` varchar(255) DEFAULT NULL,
  `benefit5` varchar(255) DEFAULT NULL,
  `registered_students` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `picture`, `title`, `intro`, `duration`, `price`, `course_overview`, `objective1`, `objective2`, `objective3`, `objective4`, `objective5`, `benefit1`, `benefit2`, `benefit3`, `benefit4`, `benefit5`, `registered_students`, `date`) VALUES
(1, 'uiux.jpg', 'Beginner to Advanced UI/UX Designer Course', 'User interface (UI) design refers to the aesthetic elements by which people interact with a product, such as buttons, icons, menu bars, typography, colors, and more. User experience (UX) design refers to the experience a user has when interacting with a product.', '3 Month(s)', '100,000', 'Introduction, Core concepts (Visual Arts, Page Layout, etc), Typography, Color theory, Planning Projects, Corel Draw, Adobe Photoshop and Final Project.\r\n\r\nThis course will equip the individual with the necessary skills and tool set to become a good graphics designer.\r\n\r\n', 'Information Architecture', 'User Experience Research', 'Interface Design', 'Prototyping', 'Usability Testing and Inspecting', 'Participant will become a UI/UX Guru', 'Opportunity to increase your earning after the training', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '12', '15/03/2013'),
(2, 'graphics.jpg', 'Creative Graphics Design Course', 'This training course is to introduce the individual into the creative world of graphics design – the art of visual communication through the use of text, images and symbols.', '2 Month(s)', '70,000', 'Introduction, Core concepts (Visual Arts, Page Layout, etc), Typography, Color theory, Planning Projects, Corel Draw, Adobe Photoshop and Final Project.\r\n\r\nThis course will equip the individual with the necessary skills and tool set to become a good graphics designer.', 'Colours and Forms', 'Representation Techniques', 'Image Design', 'Creative Thinking', 'Graphic Principles', 'Participant will become a Graphics Design Guru', 'Opportunity to increase your earning after the training', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '32', '15/03/2013'),
(3, 'excel.jpg', 'Advanced Excel MasterClass', 'The ability to produce graphs and tables, use spreadsheets efficiently, and perform calculations and automation to process large volumes of data.', '1 Month(s)', '70,000', 'Microsoft Excel is a spreadsheet program used to record and analyze numerical and statistical data. Microsoft Excel provides multiple features to perform various operations like calculations, pivot tables, graph tools, macro programming, etc.\r\n\r\nThis course is for: Accountants, Bankers, Economist,Fresh graduates, Business Owners (Entrepreneurs), Professional Workers, etc.', 'Perform Complex Calculations', 'Pivot Tables', 'Analyse Data', 'Graph Tools', 'Charts', 'Participant will become a Microsoft Excel Guru', 'Opportunity to increase your earning after the training', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '29', '15/03/2013'),
(4, 'office.png', 'Microsoft Office Suite', 'This course is designed to provide a one stop solution for anyone looking to learn all the important packages provided by Microsoft. You will learn how to work efficiently with these packages in no distance time.', '2 Month(s)', '50,000', 'This certificate course teaches every about these Microsoft Packages: MS WORD, MS EXCEL, MS PPT, MS ACCESS, MS OUTLOOK& MS PM.\r\n\r\nThis course is for:Fresh graduates, Business Owners (Entrepreneurs), High School Leavers, Professional Workers, etc.', 'MS WORD', 'MS EXCEL', 'MS PPT', 'MS OUTLOOK & MS PM.', 'MS ACCESS', 'Opportunity to increase your earning after the training', 'Participant will become a Microsoft Office Guru', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '25', '15/03/2013'),
(5, 'basic.jpg', 'Basic to Advanced Level Computer Operati', 'In today’s world it has become absolutely paramount for individuals of this day and age to acquire the basic IT skills to proficiently use a computer.', '3 Month(s)', '50,000', 'This certificate course is designed to identify, develop and certify individuals with requisite skills and knowledge to utilize a computer in the office, home and school environments. It provides people of all ages with the means to increase their IT skills, prove their expertise, improve their academic performance and advance their professional careers.\r\n\r\nNo knowledge of computer and/or IT is required to attend this program.\r\n\r\n', 'IT Basics & Keyboard Basics', 'Master Microsoft Windows', 'Microsoft Word, Microsoft Excel & Microsoft PowerPoint,', 'ICT Fundamentals', 'Internet,Social Media & lots more...', 'The participant will be ready to handle and easily learn any other advance Computer Package', 'Opportunity to get hired as a Computer Operator', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '54', '15/03/2013'),
(6, 'digital-marketing.jpg', 'The Digital Marketing Expert Course', 'This course is designed to provide a one stop solution for anyone looking to learn all the important concepts and techniques for digital marketing. You will learn the importance of SEO and will learn about the major techniques for selling on the internet. Master the social media and learn all about optimizing your online ads. You will learn to create website that are built to enable usability & sales, email marketing, analytics and social media marketing.', '3 Months', '70,000', 'Introduction to Digital Marketing, Digital Marketing Planning and Strategy, Content Marketing, Social Media Marketing, Pay Per Click (PPC) Management & Optimization, Google Ads – (Search Advertising & Display Advertising), Google Analytics, Search Engine Optimization (SEO), Email Marketing, Sales Funnel, Copy Writing, Video Marketing, Introduction To Affiliate Marketing and Specialization/Niches.\r\n\r\nThis course is for: Web Designers, Fresh graduates, Business Owners (Entrepreneurs), Web Developers, Online Marketers, Bloggers, Markers who are interested in Online Marketing, Working Professionals, Job Seekers, Students and anyone who wants to become a Digital Marketer.', 'Learn Social Media Marketing', 'Master Pay Per Click (PPC) Management & Optimization', 'Introduction To Affiliate Marketing and Specialization/Niches', 'Search Engine Optimization (SEO)', 'Copy Writing, Video Marketing $ lots more...', 'Free Mentorship on Digital Marketing.', 'Opportunity to increase your earning after the training', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '24', '15/03/2013'),
(7, 'mobiledev.jpg', 'The Ultimate Mobile App Development Course', 'Build a career in mobile application development. Learn how to build a mobile app that works across platforms such as Android and iOS.', '3 Month(s)', '200,000', 'React Native is among the most popular frameworks for building native mobile applications. It combines React and JavaScript technologies and allows developers to build applications across platforms paving the way for more seamless interaction between teams.\r\n\r\nOur comprehensive React Native classes have been designed to give you the maximum learning benefit. The React Native course is conducted by trainers who have years of industry experience.', 'How to build Mobile Apps with React Native', 'Master the React Native environment', 'Learn to make reusable components', 'Build attractive mobile apps', 'Publish your apps on Apple and Google Play Store', 'Opportunity to get hired by multinational companies', 'Opportunity to increase your earning after the training', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators\r\n\r\n', '14', '15/03/2013'),
(8, 'webdev.jpg', 'Full Stack Web Development', 'With the technology boom, companies are looking for developers that can fulfil more than one role, instead of having to hire multiple developers and increase their costs. So here’s a seat for you.', '6 Month(s)', '200,000', 'This Full-Stack web development training course covers the latest Web programming and Scripting languages. The course is designed to equip individuals with the knowledge and skills to develop rich Internet applications, portals, and any web application that requires database and programming.\r\n\r\nOur Full-Stack web development training enables participants to learn web programming (coding) from scratch (beginner to advanced) and build a portfolio of websites and web application using both frontend and backend web technologies. Training is delivered by highly experienced instructors and industrial experts at a very conducive learning environment.', 'Frontend and Backend Web Technologies', 'Master popular Web Application Frameworks', 'How to write reusable and smart Codes.', 'Build fast and secured Web Applications', 'Deploy your Web Applications', 'Complete web application development projects', 'Free PDF study manual with all the code samples written throughout the course', 'Certificate for every participant', 'Free Software Setup', 'Experienced and competent facilitators', '44', '15/03/2013'),
(9, 'python.jpg', 'Python Expert Course', 'Modern Python from the beginning - all the way up to Python Expert Level! The must-have Python resource in 2023.', '3 Month(s)', '100,000', 'Python is a general purpose programming language. It is very easy to learn and it\'s versatile. The core advantage of Python is typical how simple it is, how easy the syntax is to read and how fast development is with it.\r\n\r\nPython can be used on the backend of website with the aid of it\'s popular frameworks like DJANGO, FLASK. It can also be used for Machine Learning, Data Science, Artificial Intelligence, and Ethical Hacking.', 'Python A - Z', 'Master Third Party Libraries', 'How to write reusable Python Codes', 'Build fast and secured Applications', 'Deploy your Python Applications', 'Opportunity to get hired by a Multinational Tech Firm', 'Opportunity to increase your earning after the training', 'Certificate for every participant', '100% practical class', 'Experienced and competent facilitators', '37', '15/03/2013');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `message`) VALUES
(11, 'Jack Sim', 'kingsamuel@gmail.com', '09012090301', 'eeeef'),
(12, 'Jack Sim', 'kingsamuel@gmail.com', '09012090301', 'dsdssd'),
(13, 'Jack Sim', 'kingsamuel@gmail.com', '09012090301', 'ererere');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `picture`, `title`, `intro`, `category`, `date`) VALUES
(1, '14.jpg', 'Photography/Photo Studio', 'This section includes the Photography and Photo Studio Services we offer.', 'photography', '15/03/2013'),
(2, '11.jpg', 'Design/Printing Services', 'This section includes the Design and Printing Services we offer.', 'design-print', '15/03/2013'),
(3, '2.jpg', 'Online Web Services', 'This section includes all of the Online Web Services we offer.', 'online-web-services', '15/03/2013'),
(7, 'services.jpg', 'ICT Services', 'This section includes all of the ICT Services we offer.', 'ict-services', '15/03/2013'),
(8, 'training.jpg', 'ICT Training', 'This section includes all of the ICT Training Programs we offer.', 'ict-training', '15/03/2013');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$A2yXiJIExECoL0ZViLTLsumCKMAHrlgVHZEkRGqHC0f86TEtnjwrO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
