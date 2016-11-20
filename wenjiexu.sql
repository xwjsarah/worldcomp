-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 09:54 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wenjiexu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookareas`
--

CREATE TABLE IF NOT EXISTS `bookareas` (
`areaID` int(11) NOT NULL,
  `areaName` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bookareas`
--

INSERT INTO `bookareas` (`areaID`, `areaName`) VALUES
(1, 'Artificial Intelligent'),
(2, 'Parallel processing'),
(3, 'Cloud computing'),
(4, 'Computer Visualization'),
(5, 'Human Computer Interface');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`bookID` int(11) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `areaID` int(11) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookName`, `areaID`, `price`, `description`) VALUES
(1, 'A mordern approach', 1, 19.99, 'Artificial Intelligence: A Modern Approach, 3e offers the most comprehensive, up-to-date introduction to the theory and practice of artificial intelligence. Number one in its field, this textbook is ideal for one or two-semester, undergraduate or graduate-level courses in Artificial Intelligence. Dr. Peter Norvig, contributing Artificial Intelligence author and Professor Sebastian Thrun, a Pearson author are offering a free online course at Stanford University on artificial intelligence. According to an article in The New York Times , the course on artificial intelligence is “one of three being offered experimentally by the Stanford computer science department to extend technology knowledge and skills beyond this elite campus to the entire world.” One of the other two courses, an introduction to database software, is being taught by Pearson author Dr. Jennifer Widom. '),
(2, 'An introducation to parallel programming', 2, 78.99, 'Author Peter Pacheco uses a tutorial approach to show students how to develop effective parallel programs with MPI, Pthreads, and OpenMP. The first undergraduate text to directly address compiling and running parallel programs on the new multi-core and cluster architecture, An Introduction to Parallel Programming explains how to design, debug, and evaluate the performance of distributed and shared-memory programs. User-friendly exercises teach students how to compile, run and modify example programs.'),
(3, 'Cloud computing', 3, 16.69, 'Most of the information available on cloud computing is either highly technical, with details that are irrelevant to non-technologists, or pure marketing hype, in which the cloud is simply a selling point. This book, however, explains the cloud from the user''s viewpoint -- the business user''s in particular. Nayan Ruparelia explains what the cloud is, when to use it (and when not to), how to select a cloud service, how to integrate it with other technologies, and what the best practices are for using cloud computing. Cutting through the hype, Ruparelia cites the simple and basic definition of cloud computing from the National Institute of Science and Technology: a model enabling ubiquitous, convenient, on-demand network access to a shared pool of configurable computing resources. Thus with cloud computing, businesses can harness information technology resources usually available only to large enterprises. And this, Ruparelia demonstrates, represents a paradigm shift for business. It will ease funding for startups, alter business plans, and allow big businesses greater agility. Ruparelia discusses the key issues for any organization considering cloud computing: service level agreements, business service delivery and consumption, finance, legal jurisdiction, security, and social responsibility. He introduces novel concepts made possible by cloud computing: cloud cells, or specialist clouds for specific uses; the personal cloud; the cloud of things; and cloud service exchanges. He examines use case patterns in terms of infrastructure and platform, software information, and business process; and he explains how to transition to a cloud service. Current and future users will find this book an indispensable guide to the cloud.'),
(4, 'Simulation for data science with R', 4, 45.89, 'Data Science with R aims to teach you how to begin performing data science tasks by taking advantage of Rs powerful ecosystem of packages. R being the most widely used programming language when used with data science can be a powerful combination to solve complexities involved with varied data sets in the real world. The book will provide a computational and methodological framework for statistical simulation to the users. Through this book, you will get in grips with the software environment R. After getting to know the background of popular methods in the area of computational statistics, you will see some applications in R to better understand the methods as well as gaining experience of working with real-world data and real-world problems. This book helps uncover the large-scale patterns in complex systems where interdependencies and variation are critical. An effective simulation is driven by data generating processes that accurately reflect real physical populations. You will learn how to plan and structure a simulation project to aid in the decision-making process as well as the presentation of results. By the end of this book, you reader will get in touch with the software environment R. After getting background on popular methods in the area, you will see applications in R to better understand the methods as well as to gain experience when working on real-world data and real-world problems.'),
(5, 'The art of human computer interface design', 5, 79.9, 'When the concept of the interface first began to emerge, it was commonly understood as the hardware and software through which a human and a computer could communicate. As it has evolved, the concept has come to include the cognitive and emotional aspects of the user''s experience as well...The noun, interface is taken to be a discrete and tangible thing that we can map, draw, design, implement, and attach to an existing bundle of functionality. One of the goals of this book is to explode that notion and replace it with one that can guide our work in the right direction." - From the Introduction The Art of Human-Computer Interface Design is an extraordinary work in the field of human-computer interaction. With never-before-published pieces by more than fifty of the major thinkers and explorers in the field, this book provides an intriguing look at some of the most exciting developments in interface design. Readers will discover the newest technologies such as cyberspace, animation, multimedia, and speech recognition and will explore the philosophical and psychological background to creating effective interfaces.The first section of The Art of Human-Computer Interface Design, "Creativity and Design," offers insight into general interface issues. The "Users and Contexts" section details the experiences of a variety of users and designers, providing invaluable input for interface designers. The "Sermons" sections is a collection of thought-provoking pieces by some of the people whose work and points of view have deeply influenced human-computer interaction--Donald Norman, Nicholas Negroponte, Ted Nelson, Alan Kay, Jean-Louis Gassee, Timothy Leary, and Ben Shneiderman. The fourth section, "New Directions," looks at some of the ideas and theories that are on the frontiers of human-computer interface design. A treasury of ideas and opinions from leading thinkers in the computer industry, The Art of Human-Computer Interface Design delves into the strategies, reasoning, and future direction of human-computer interaction and the overall relationship between computers and people. '),
(6, 'Artificial Intelligence Simplified_Understanding Basic Concepts', 1, 12.98, 'A small book that introduces key Artificial Intelligence (AI) concepts in an easy-to-read format with examples and illustrations. Someone with basic knowledge in Computer Science can have a quick overview of AI (heuristic searches, genetic algorithms, expert systems, game trees, fuzzy expert systems, natural language processing, super intelligence, etc.) with everyday examples. If you are taking a basic AI course or want to learn AI and find the traditional AI textbooks difficult to read, you may choose this book. Check for Kindle MatchBook deals with this edition. Published by CSTrends LLP.'),
(7, 'How to Create a Mind', 1, 10.5, 'Ray Kurzweil is arguably today’s most influential—and often controversial—futurist. In How to Create a Mind, Kurzweil presents a provocative exploration of the most important project in human-machine civilization—reverse engineering the brain to understand precisely how it works and using that knowledge to create even more intelligent machines. Kurzweil discusses how the brain functions, how the mind emerges from the brain, and the implications of vastly increasing the powers of our intelligence in addressing the world’s problems. He thoughtfully examines emotional and moral intelligence and the origins of consciousness and envisions the radical possibilities of our merging with the intelligent technology we are creating.'),
(8, 'Python Machine Learning', 1, 12.99, 'Machine learning and predictive analytics are transforming the way businesses and other organizations operate. Being able to understand trends and patterns in complex data is critical to success, becoming one of the key strategies for unlocking growth in a challenging contemporary marketplace. Python can help you deliver key insights into your data – its unique capabilities as a language let you build sophisticated algorithms and statistical models that can reveal new perspectives and answer key questions that are vital for success. Python Machine Learning gives you access to the world of predictive analytics and demonstrates why Python is one of the world''s leading data science languages. If you want to ask better questions of data, or need to improve and extend the capabilities of your machine learning systems, this practical data science book is invaluable. Covering a wide range of powerful Python libraries, including scikit-learn, Theano, and Pylearn2, and featuring guidance and tips on everything from sentiment analysis to neural networks, you''ll soon be able to answer some of the most important questions facing you and your '),
(9, 'A Guide to Wealth and Work in the Age of Artificial Intelligence', 1, 17, 'After billions of dollars and fifty years of effort, researchers are finally cracking the code on artificial intelligence. As society stands on the cusp of unprecedented change, Jerry Kaplan unpacks the latest advances in robotics, machine learning, and perception powering systems that rival or exceed human capabilities. Driverless cars, robotic helpers, and intelligent agents that promote our interests have the potential to usher in a new age of affluence and leisure — but as Kaplan warns, the transition may be protracted and brutal unless we address the two great scourges of the modern developed world: volatile labor markets and income inequality. He proposes innovative, free-market adjustments to our economic system and social policies to avoid an extended period of social turmoil. His timely and accessible analysis of the promise and perils of artificial intelligence is a must-read for business leaders and policy makers on both sides of the aisle.'),
(10, 'Distributed Algorithms', 2, 19.98, 'This book offers students and researchers a guide to distributed algorithms that emphasizes examples and exercises rather than the intricacies of mathematical models. It avoids mathematical argumentation, often a stumbling block for students, teaching algorithmic thought rather than proofs and logic. This approach allows the student to learn a large number of algorithms within a relatively short span of time. Algorithms are explained through brief, informal descriptions, illuminating examples, and practical exercises. The examples and exercises allow readers to understand algorithms intuitively and from different perspectives. Proof sketches, arguing the correctness of an algorithm or explaining the idea behind fundamental results, are also included. An appendix offers pseudocode descriptions of many algorithms.'),
(11, 'Explorations in the Microstructure of Cognition', 2, 22.56, 'Volume 2 applies it to a number of specific issues in cognitive science and neuroscience, with chapters describing models of aspects of perception, memory, language, and thought.'),
(12, 'Introduction to Parallel Processing', 2, 122.98, 'THE CONTEXT OF PARALLEL PROCESSING The field of digital computer architecture has grown explosively in the past two decades. Through a steady stream of experimental research, tool-building efforts, and theoretical studies, the design of an instruction-set architecture, once considered an art, has been transformed into one of the most quantitative branches of computer technology. At the same time, better understanding of various forms of concurrency, from standard pipelining to massive parallelism, and invention of architectural structures to support a reasonably efficient and user-friendly programming model for such systems, has allowed hardware performance to continue its exponential growth. This trend is expected to continue in the near future. This explosive growth, linked with the expectation that performance will continue its exponential rise with each new generation of hardware and that (in stark contrast to software) computer hardware will function correctly as soon as it comes off the assembly line, has its down side. It has led to unprecedented hardware complexity and almost intolerable dev- opment costs. The challenge facing current and future computer designers is to institute simplicity where we now have complexity; to use fundamental theories being developed in this area to gain performance and ease-of-use benefits from simpler circuits; to understand the interplay between technological capabilities and limitations, on the one hand, and design decisions based on user and application requirements on the other.'),
(13, 'An Introduction to High-Performance Parallel Computing', 2, 34.99, 'CUDA for Engineers gives you direct, hands-on engagement with personal, high-performance parallel computing, enabling you to do computations on a gaming-level PC that would have required a supercomputer just a few years ago. The authors introduce the essentials of CUDA C programming clearly and concisely, quickly guiding you from running sample programs to building your own code. Throughout, you’ll learn from complete examples you can build, run, and modify, complemented by additional projects that deepen your understanding. All projects are fully developed, with detailed building instructions for all major platforms.'),
(14, 'Best Practices for Transforming Legacy IT ', 3, 29.99, 'Despite the buzz surrounding the cloud computing, only a small percentage of organizations have actually deployed this new style of IT--so far. If you''re planning your long-term cloud strategy, this practical book provides insider knowledge and actionable real-world lessons regarding planning, design, operations, security, and application transformation. This book teaches business and technology managers how to transition their organization''s traditional IT to cloud computing. Rather than yet another book trying to sell or convince readers on the benefits of clouds, this book provides guidance, lessons learned, and best practices on how to design, deploy, operate, and secure an enterprise cloud based on real-world experience.\r\n'),
(15, 'Cloud Computing For Dummies', 3, 13.66, 'Cloud computing can be difficult to understand at first, but the cost-saving possibilities are great and many companies are getting on board. If you''ve been put in charge of implementing cloud computing, this straightforward, plain-English guide clears up the confusion and helps you get your plan in place. You''ll learn how cloud computing enables you to run a more green IT infrastructure, and access technology-enabled services from the Internet ("in the cloud") without having to understand, manage, or invest in the technology infrastructure that supports them. You''ll also find out what you need to consider when implementing a plan, how to handle security issues, and more.'),
(16, 'Design Decisions for Cloud Computing Service Models', 3, 42.89, 'Cloud computing is all the rage, allowing for the delivery of computing and storage capacity to a diverse community of end-recipients. However, before you can decide on a cloud model, you need to determine what the ideal cloud service model is for your business. Helping you cut through all the haze, Architecting the Cloud is vendor neutral and guides you in making one of the most critical technology decisions that you will face: selecting the right cloud service model(s) based on a combination of both business and technology requirements.'),
(17, 'Getting Started with AWS', 3, 12.9, 'Getting Started with AWS provides an introduction to Amazon Web Services, examples of what you can do with AWS, basic information that you need to know to get started, and links to resources and documentation that will help you learn more no matter what your use case is. This documentation is offered for free here as a Kindle book, or you can read it online or in PDF format at http://docs.aws.amazon.com/gettingstarted/latest/awsgsg-intro/.'),
(18, 'How New Technology Will Transform Our Understanding of the Past', 4, 26.99, 'For hundreds of years historians have used prose and narrative to convey history. This is about to change, thanks to new technology, digital scholarship, and computerized "visualization." Text itself has inherent limitations: The very use of words - their meaning and the connections among them - shapes and restricts how historians think and communicate ideas. The rise of the computer is radically altering how human beings receive and process information. Digital environments and virtual reality are adding a third dimension to communication and creating a new visual language. This visionary and thoroughly accessible book examines this entire revolutionary phenomenon and how historians will utilize the new medium of computers and the new language of visualization to transform our understanding of history. Drawing on familiar graphic models - maps, flow charts, museum displays, and films - the author shows how images can often convey ideas and information more efficiently and accurately than words. With emerging digital technology, these images will become more sophisticated, manipulable, and multidimensional, and provide historians with new tools and environments to construct historical narratives. Just as the transition from prehistoric cave paintings to the spread of literacy changed how people think and process information, so has - and will - the computer. Moving beyond the traditional book based on linear narrative, digital scholarship based on visualization and hypertext will offer multiple perspectives, dimensions, and experiences that will transform how historians work and how people imagine and learn about history.'),
(19, 'An Integrated Approach for Interior Design and Architecture', 4, 24.55, 'In this much-needed guide, authors Dong and Gibson show that computer-aided design can do more than simply assist in production tasks. They reveal that digital graphics, by enabling the user to create a virtual, three-dimensional world, is actually a marvelous tool for creating and manipulating designs. With superb illustrations and clear explanations, the authors open the reader''s eyes to the magic of computer graphics. Architects and designers of all levels will discover digital graphics'' powerful capabilities, learning how to: -- Simulate the changes of daylight in an interior-- Create virtual environments to "walk" through-- "Inhabit" the built environment as the client would experience it-- See in advance how a design will look in realityDigital Graphics for Architectural and Interior Visualization covers theoretical concepts, technical information, and creative case studies using a variety of software packages, including AutoCAD, 3D Studio, Form Z, Animator Pro, Photoshop, CorelDraw with an emphasis on AutoDesk products throughout.'),
(20, 'Applying Color Theory to Digital Media and Visualization', 4, 10.55, 'This book provides an overview of the application of color theory concepts to digital media and visualization. It highlights specific color concepts like color harmony and shows how to apply the concept with case study examples and usage of actual online and mobile color tools. Color deficiencies are reviewed and discussed are color tools for examining how a specific color map design will look to someone with the deficiency. Other books on color examine artists'' use of color, color management, or color science. This book applies fundamental color concepts to digital media and visualization solutions. It is intended for digital media and visualization content creators and developers.'),
(21, 'Visualization Analysis and Design', 4, 79.45, 'Visualization Analysis and Design provides a systematic, comprehensive framework for thinking about visualization in terms of principles and design choices. The book features a unified approach encompassing information visualization techniques for abstract data, scientific visualization techniques for spatial data, and visual analytics techniques for interweaving data transformation and analysis with interactive visual exploration. It emphasizes the careful validation of effectiveness and the consideration of function before form.'),
(22, 'An Empirical Research Perspective', 5, 13.99, 'Human-Computer Interaction: An Empirical Research Perspective is the definitive guide to empirical research in HCI. The book begins with foundational topics including historical context, the human factor, interaction elements, and the fundamentals of science and research. From there, you''ll progress to learning about the methods for conducting an experiment to evaluate a new computer interface or interaction technique. There are detailed discussions and how-to analyses on models of interaction, focusing on descriptive models and predictive models. Writing and publishing a research paper is explored with helpful tips for success. Throughout the book, you''ll find hands-on exercises, checklists, and real-world examples. This is your must-have, comprehensive guide to empirical and experimental research in HCI?an essential addition to your HCI library.'),
(23, 'Human-Computer Interaction', 5, 10.99, 'The second edition of Human-Computer Interaction established itself as one of the classic textbooks in the area, with its broad coverage and rigorous approach, this new edition builds on the existing strengths of the book, but giving the text a more student-friendly slant and improving the coverage in certain areas. The revised structure, separating out the introductory and more advanced material will make it easier to use the book on a variety of courses. This new edition now includes chapters on Interaction Design, Universal Access and Rich Interaction, as well as covering the latest developments in ubiquitous computing and Web technologies, making it the ideal text to provide a grounding in HCI theory and practice.'),
(24, 'The Fundamentals Made Easy', 5, 9.98, 'Is Human Computer Interactions what you want to learn? Always wondered how one understand Computers proficiently? Does it interest you how HCI works?\r\nPurchase HCI to discover everything you need to know about it.\r\nStep by step to increase your Computer skill set. Learn how to operate computer systems socially. All your basic knowledge in one purchase!\r\nYou need to get it now to know whats inside as it cant be shared here!\r\nPurchase Human Computer Interactions TODAY!'),
(25, 'Beyond Human-Computer Interaction', 5, 12.35, 'Hugely popular with students and professionals alike, Interaction Design is an ideal resource for learning the interdisciplinary skills needed for interaction design, human–computer interaction, information design, web design and ubiquitous computing. This text offers a cross-disciplinary, practical and process-oriented introduction to the field, showing not just what principles ought to apply to interaction design, but crucially how they can be applied. An accompanying website contains extensive additional teaching and learning material including slides for each chapter, comments on chapter activities and a number of in-depth case studies written by researchers and designers.');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE IF NOT EXISTS `papers` (
`paperID` int(10) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `area` int(11) NOT NULL,
  `subarea` varchar(100) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paperID`, `FirstName`, `LastName`, `emailAddress`, `title`, `area`, `subarea`, `filename`) VALUES
(1, 'Alice ', 'Koo', 'Alice.koo@gmail.com', 'Functional_architecture_of_basal_ganglia', 2, 'Scientific Parallel Systems', 'Functional_architecture_of_basal_ganglia.pdf'),
(2, 'Judy ', 'Grey', 'Judy.Grey@gmail.com', 'Identifying Significant Features for Network Forensic Analysis Using Artificial Intelligent Techniques', 1, 'Natural Language Processing', 'Identifying Significant Features for Network Forensic Analysis Using Artificial Intelligent Techniques.pdf'),
(3, 'Mira', 'Sissiy ', 'mira@gmail.com', 'Recommendations of the National Institute of Standards and Technology', 3, 'Algorithm', 'Recommendations of the National Institute of Standards and Technology.pdf'),
(4, 'Paul', 'Kay', 'paul@gmail.com', 'Improving your humancomputer interface_a practical technique ', 5, 'HCI', 'Improving your humancomputer interface_a practical technique .pdf'),
(5, 'Owen ', 'Ugin', 'owen@gmail.com', 'Computer Visualization of Long Genomic Sequences ', 4, 'Graphics and Visualization', 'Computer Visualization of Long Genomic Sequences .pdf'),
(6, 'Will ', 'Koo', 'Koo21@gmail.com', 'The application of artificial intelligent tools to the transmission expansion problem', 1, 'AI ', 'The application of artificial intelligent tools to the transmission expansion problem.pdf'),
(7, 'Jill', 'Lee', 'Jill@gmail.com', 'A view of cloud computing', 3, 'Distributed System', 'A view of cloud computing.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
`GuestID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `ZipCode` int(11) NOT NULL,
  `Phone` int(12) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `Occupation` varchar(16) NOT NULL,
  `BillAddress` varchar(255) NOT NULL,
  `cardType` int(11) NOT NULL,
  `cardNumber` char(16) NOT NULL,
  `cardExpires` char(10) NOT NULL,
  `confirmation` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`GuestID`, `FirstName`, `LastName`, `Company`, `Title`, `Address`, `City`, `State`, `ZipCode`, `Phone`, `emailAddress`, `Occupation`, `BillAddress`, `cardType`, `cardNumber`, `cardExpires`, `confirmation`) VALUES
(1, 'Wenjie ', 'Xu', 'MSU', 'worker ', '1604 Village drive ', 'Montclair', 'NJ', 7003, 2147483647, 'xuw8@montclair.edu', 'Student', '1604 village drive ', 1, '1234567890101333', '09/15/2018', ''),
(2, 'Will', 'Xu', 'MSU', 'manager', '1604 Village Drive', 'Avenel', 'New Jersey (NJ)', 7001, 2147483647, 'wenjie.xuecho@gmail.com', 'Presenter', '30A Elizabeth St', 2, '6666666666666666', '2016-10-26', ''),
(3, 'Will', 'Xu', 'MSU', '', '1604 Village Drive', 'Avenel', 'New Jersey (NJ)', 7001, 2147483647, 'will.xuecho@gmail.com', 'Presenter', '215 W church Road', 3, '9090990000099999', '2018-09-01', ''),
(4, 'Wenjie', 'Xu', 'MSU', '', '1604 Village Drive', 'Avenel', 'New Jersey (NJ)', 7001, 2147483647, 'liu.xuecho@gmail.com', 'Other', '1604 Village Drive', 4, '9999999999999999', '2020-06-12', ''),
(5, 'sisi', 'liu', 'Syracuse University', '', '30A Elizabeth St', 'Jersey City', 'NJ', 7306, 2147483647, 'sis.xuecho@gmail.com', 'Other', '215 W church Road', 3, '8956894804384444', '2016-10-30', ''),
(6, 'uiuh', 'fdsf', 'dfsdf', 'fdfsdfsdf', '215 W church Road', 'King of Prussia', 'PA', 19046, 2147483647, 'wxu@rtenv.com', 'Student', '215 W church Road', 3, '5454545454545678', '2016-10-26', ''),
(7, 'oiye', 'fdfg', 'uierd', 'dsfdsf', '215 W church Road', 'King of Prussia', 'PA', 19046, 2147483647, 'wxu11@rtenv.com', 'Presenter', '1604 Village Drive', 4, '9999999999999999', '2018-09-08', ''),
(8, 'Wenjie', 'Xu', 'MSU', '', '1604 Village Drive', 'Avenel', 'New Jersey (NJ)', 7001, 2147483647, 'wenjie.oo@gmail.com', 'Student', '1604 Village Drive', 2, '9999999999999999', '2016-10-31', ''),
(9, 'po', 'ui', 'hui', 'gdfgfdg', 'fgdgg', 'dgrt', 'ny', 7003, 2147483647, 'oiu@gmail.com', 'Other', '1604 Village Drive', 1, '0000000000000000', '2016-10-26', '2602181603'),
(10, 'Wenjie', 'Xu', 'MSU', '', '1604 Village Drive', 'Avenel', 'New Jersey (NJ)', 7001, 2147483647, 'sss@gmail.com', 'Presenter', '215 W church Road', 1, '2222222222222222', '2016-11-01', '5232178720'),
(11, 'fdsfdsf', 'dfdsf', 'dsfsdfsdf', 'sfsdfsd', 'fdsf', 'dsfdsf', 'dfsd', 56778, 1212121212, 'yy@oil.com', 'Presenter', 'ddddadad', 1, '7878787878787878', '2016-10-31', '0005182726'),
(12, 'Kris ', 'Green ', 'Syracuse University', 'Professor ', 'US', 'Syracuse', 'NY', 13244, 2147483647, 'gao@maxwell.syr.edu', 'Presenter', '199 Madison Ave', 1, '3333390345902345', '2020-09-21', '7256313207');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE IF NOT EXISTS `reviewer` (
`reviewerID` int(12) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`reviewerID`, `emailAddress`, `password`) VALUES
(1, 'try@gmail.com', '$2y$10$Nr5ytMKlWyokah8Q4J5DV.TLgwk0rULO3nLhccCNkdGfAp2.B9RUW'),
(2, 'wenjie.xuecho@gmail.com', '$2y$10$LJXWIiAkVcHSiPZ0NTlOdOciGViI8Mgbytd5QxtX8lIPV1npvJhEy'),
(3, 'wen@gmail.com', '$2y$10$nPx1CS0mhqY0mP5Iu0qd1.HpQwvWcqNPVbxvv2oGPBhxA1O6f3haK'),
(4, 'will.xuecho@gmail.com', '$2y$10$YgE/kUocJWqTRrzOGV5J4.eHsgRcMvju4gbD6VIMgT9qpCcyykQTW'),
(5, 'xuw8@montclair.edu', '$2y$10$3azzRkiQrc3KYYyQ3jno5OgHye/f/lfD76DpSQWcZ.Zl6XpZ5g9LS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookareas`
--
ALTER TABLE `bookareas`
 ADD PRIMARY KEY (`areaID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
 ADD PRIMARY KEY (`paperID`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
 ADD PRIMARY KEY (`GuestID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
 ADD PRIMARY KEY (`reviewerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookareas`
--
ALTER TABLE `bookareas`
MODIFY `areaID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
MODIFY `paperID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
MODIFY `GuestID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
MODIFY `reviewerID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
