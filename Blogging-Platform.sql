-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2013 at 12:51 AM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Blogging-Platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `crypto`
--

CREATE TABLE IF NOT EXISTS `crypto` (
  `hash` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `crypto`
--

INSERT INTO `crypto` (`hash`, `id`) VALUES
('$2a$08$WkUeilB2VUumwKxNMeV3gOLKbRR0HdbIg2d8aSRm8.ZYuOv7wgh2a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topics` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`title`, `text`, `date`, `topics`, `id`) VALUES
('PHP file upload security - Post 1', '<a href="http://www.acunetix.com/websitesecurity/upload-forms-threat.htm">This site</a> gives a fairly simple run through on the general gist of file upload security including:\r\n\r\n    Define a .htaccess file that will only allow access to files with allowed extensions.\r\n    Do not place the .htaccess file in the same directory where the uploaded files will be stored. It should be placed in the parent directory.\r\n    If possible, upload the files in a directory outside the server root.\r\n    Prevent overwriting of existing files (to prevent the .htaccess overwrite attack).\r\n    Create a list of accepted mime-types (map extensions from these mime types).\r\n    Generate a random file name and add the previously generated extension.\r\n    Donâ€™t rely on client-side validation only, since it is not enough. Ideally one should have both server-side and client-side validation implemented.\r\n', '2013-05-15 04:38:51', 'PHP,Programming', 17),
('PHP file upload security - Post 2', '<a href="http://www.mysql-apache-php.com/fileupload-security.htm">\r\nCovers similar ground to last website.</a>\r\n\r\n<a href="http://stackoverflow.com/questions/2751384/php-upload-file-enhance-security">\r\nStackoverflow: php upload file enhance security</a>\r\nThis includes a few other checks including: \r\n- Mod_Security\r\n- And code to check file extension\r\n\r\n<a href="http://stackoverflow.com/questions/3973421/php-file-upload-secure"\r\nStackoverflow: php file upload secure</a>\r\nmentions  mod_xsendfile, may be useful\r\n\r\n<a href="http://www.php.net/manual/en/features.file-upload.php">\r\nGood ol'' manual.</a> Doesn''t list ''best practices'' but more deals with actual implementation.', '0000-00-00 00:00:00', 'PHP,Programming', 18),
('Javascript file type checking', '<a href="http://stackoverflow.com/questions/7977084/check-file-type-when-form-submit">Stack Overflow Question 1</a>\r\n<a href="http://stackoverflow.com/questions/4234589/validation-of-file-extension-before-uploading-file">Moar Stack Overflow</a>\r\n\r\nBoth of these discuss file type checking with java and some appropriate plugins.', '0000-00-00 00:00:00', 'Javascript,Programming', 19),
('The words of Ghoul', '(20:11:13) amatsu: jonathan1: probably just run a client-side check on the uploaded     file, and a server-side check on the uploaded file.\r\n(20:21:00) Ghoul: Shouldn''t even matter\r\n(20:21:06) Ghoul: As long as you don''t open it\r\n(20:31:45) Ghoul: Make a php script that opens the file, reads it then exports it\r\n(20:31:52) tangrs: Heya\r\n(20:31:54) Ghoul: Store files in a directory that cannot be accessed from the web\r\n(20:31:59) Ghoul: ie: /var/upload/files', '0000-00-00 00:00:00', 'Security,Programming', 20),
('Sessions', 'So, it turns out that what I had implemented for logged in checks could be easily overrun, simply by the user writing their own forms. Obviously this is far less than ideal. The solution: Sessions. \r\n\r\n<a href="http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php">this SO question</a> contains a brief overview of sessions and "logged in status". <a href="http://www.homeandlearn.co.uk/php/php14p3.html">This</a> php tutorial could be handy, but only if backed up:\r\n\r\n<a href="http://www.php.net/manual/en/book.session.php">Good ol'' manual.</a> Has everything body needs, buried deep deep down inside. \r\n\r\nThis is especially urgent to fix. \r\n\r\nIn a side point: fixed html code not working. <b> Brace yourselves for some hectic EVERYTHING</b>\r\n\r\n', '2013-05-15 12:53:11', 'PHP,Programming', 21),
('Files outside the web root', '<a href="http://stackoverflow.com/questions/7701771/how-to-serve-documents-from-outside-the-web-root-using-php">This SO question details how to server documents from outside the web root</a>\r\n\r\n<a href="http://stackoverflow.com/questions/4382219/php-display-download-directory-files-outside-webserver-root-problem">This</a> SO question is somewhat useful, but speaks more in regard to a different setup to mine.\r\n\r\n<a href="http://httpd.apache.org/docs/2.2/howto/htaccess.html">Apache docs</a> have some info on htaccess and config.', '2013-05-15 12:54:02', 'Security,Programming,File Sharing', 22),
('Sexism', '<code>\r\n<?php\r\nclass women {\r\n\r\n    private $location = ''kitchen'';\r\n    public $dishes = ''dirty'';    \r\n\r\n    public function washdishes(){\r\n        if ($this->dishes == ''clean''){\r\n            echo ''dishes already clean'';\r\n        else{\r\n            echo ''dishes cleaned sir!'';\r\n        }\r\n    }\r\n\r\n    public function getlocation(){\r\n        return $this->location;\r\n    }\r\n \r\n    public function setlocation($newlocation){\r\n        $this->location = $newlocation;\r\n    }\r\n}\r\n?>\r\n</code>\r\n', '2013-05-15 12:54:29', 'Programming,Humour', 47),
('Dependancy injection', 'This is an interesting OOP design pattern, where all of the details are given to an Object. Eg: the db object doesn''t know what DB it will connect to, or what tables it will fetch from. Instead the constructor will tell the object these things. As a result of this, the code is very modular. \r\n\r\n> "In Hollywood a struggling actor does not call up a director and ask for a role in his next film.  No, the opposite happens.  The director calls up the actor and asks him to play the main character in his next movie.  Objects are struggling actors, they do  not get to pick the roles they play, the director needs to tell them what to do.  Objects do not get to pick the outside systems they interact with, instead, the outside systems are given to the objects.  Remember this as Inversion of Control."\r\n\r\nFrom <a href="http://www.potstuck.com/2009/01/08/php-dependency-injection/">this blog.</a>', '2013-05-15 12:55:01', 'Programming,OOP,Design Patterns', 27),
('Looping vs Recursion', 'Looping is like Inception.\r\n\r\nIf you have one nested loop, that is real life. If you have two nested loops, then the inner one is the dream. For every moment in real life there is multiple in the dream.\r\n\r\nHowever, Recursion is not like Inception. Recursion is like two mirrors. Each mirror reflects itself, which reflects itself, so on and so forth.\r\n\r\n### Update\r\n\r\nIn languages where looping is not supported or discouraged, recursion can do essentially the same thing. Consider this haskell code:\r\n<code>\r\nnumbersUnder :: Int -> [Int]\r\nnumbersUnder 1 = [1]\r\nnumbersUnder x = [x] ++ numbersUnder (x-1)\r\n</code>\r\nIt it is essentially a loop, even though it is recursion. It loops while x > 1 and decrements x at every iteration. Recursion, unlike mirrors, do not go forever. It is just another way of looking at iteration.\r\n', '2013-05-15 12:55:12', 'Programming', 38),
('Aquaponics', 'An Aquaponics system has plants and fish growing in a symbiotic relationship.\r\n\r\nGood plants are beans or tomatoes and good fish are gold fish or tilapia.\r\n\r\nTo keep the fish happy you need to control pH, Nitrates, Nitrites, Ammonia, Hardness, (Temperature) and (Food).\r\n\r\nCERES has an Aquaponics system and this guy runs a $200 aquaponics course at Ballarat uni every last weekend of the month. (info@alfconsaquaponics.com.au or www.alfconsaquaponics.com).\r\n\r\nThe grow bed should be at least 30cm deep with Clay balls or gravel.\r\n', '2013-05-15 12:55:22', 'Aquaponics', 37),
('Card Counting', 'A good starting strategy is the Hi-Lo strategy, where 2-6 is -1, 7-9 is 0 and 10-A is +1. The count resets every time the deck is shuffled.\r\n\r\nFrom the running count the true count needs to be derived. This is done by dividing by the decks remaining and flooring the result. The amount of decks remaining can be ascertained by inspecting the discarded cards.\r\n\r\nWhen the true count reaches something around two (varies from style to style), shift to a high bet (around 10x low bet). Alternative betting scales can be used. A bank roll of around 120 to 150 times the high bet is advisable to induce the law of averages.\r\n\r\nOther things that must be learnt include Basic Strategy, which is the mathematically perfect way of playing, and is different for every variation of Blackjack. The <a href="http://en.wikipedia.org/wiki/Kelly_criterion">Kelly Criterion</a> is also good to understand as it gives an accurate way to determine how big your bets should be.\r\n\r\nMost of this came from <a href="http://www.reddit.com/r/IAmA/comments/i3jkk/iama_blackjack_card_counter_ama/">this reddit AMA</a> and <a href="http://www.qfit.com/card-counting.htm">this random site.</a> \r\n\r\n<a href="http://www.blackjackinfo.com/">Blackjackinfo.com</a> looks like a good resource.\r\n\r\nMake sure you understand Blackjack and Basic Strategy before card counting, and make sure you are really good at counting before you start putting money on it.', '2013-05-15 12:55:36', 'Cards,Card Counting', 39),
('MHS singing', '### Year 9 (2010):\r\n\r\n- <a href="http://www.youtube.com/watch?v=4Ha-dtNXTM8">Powderfinger - Pick you up</a>\r\n- <a href="http://www.youtube.com/watch?v=0Az2BvTcshg">Gary Jules - Mad World</a>\r\n- <a href="http://www.youtube.com/watch?v=d8c2Tbj2haM">Mr. Bungle - Retrovertigo</a>\r\n- <a href="http://www.youtube.com/watch?v=vx2u5uUu3DE">Bon Jovi - It''s My Life</a>\r\n- <a href="http://www.youtube.com/watch?v=Vvr8AjT0aD0">Fiddler on the roof - Lechaim</a>\r\n\r\n### Year 10 (2011):\r\n\r\n- <a href="http://www.youtube.com/watch?v=PUm7fujdVng">Paul Jarman - Band of Brothers</a>\r\n- <a href="http://www.youtube.com/watch?v=eih67rlGNhU">Jay Gorney - Brother, Can You Spare a Dime</a>\r\n- <a href="http://www.youtube.com/watch?v=_-mvutiDRvQ&feature=fvst">Beethoven - Ode to Joy</a>\r\n- <a href="http://www.youtube.com/watch?v=8n_4t7KcJsQ">Robert Morse - Brotherhood of Man</a>\r\n- <a href="http://www.youtube.com/watch?v=UA78e27R_J4">Elton John - Daniel</a>\r\n- <a href="http://www.youtube.com/watch?v=MYxAiK6VnXw">OutKast - Ms. Jackson</a>. We sang the opera? version, but incorporated parts from OutKast''s version.\r\n- <a href="http://www.youtube.com/watch?v=IhwYaEGCpG4">Live - Lightning Crashes</a> \r\n\r\n### House Chorals:\r\n\r\n- <a href="http://www.youtube.com/watch?v=QbN0g8-zbdY">Time to Say Goodbye - Forrest free choice 2011</a>\r\n- <a href="http://www.youtube.com/watch?v=RpeAKqFjPz4">Effington - Forrest special choir 2010</a>\r\n- <a href="http://www.youtube.com/watch?v=2pMM4iwC-ag">Somebody To Love - Como free choice 2010</a>\r\n- <a href="http://www.youtube.com/watch?v=rgvB2pOF2-c">You Don''t Love Me Anymore - Waterloo special choir 2012</a>\r\n- <a href="http://www.youtube.com/watch?v=TkV-of_eN2w">Colors of the Wind - Como free choice 2012</a>\r\n', '2013-05-15 12:56:03', 'Melbourne High School,Massed singing', 41),
('MVC', 'From python Manual:\r\n\r\nThe *model.* This is the data that will be displayed and modified. In Python frameworks, this component is often represented by the classes used by an object-relational mapper.\r\n\r\nThe *view.* This componentâ€™s job is to display the data of the model to the user. Typically this component is implemented via templates.\r\n\r\nThe *controller.* This is the layer between the user and the model. The controller reacts to user actions (like opening some specific URL), tells the model to modify the data if necessary, and tells the view code what to display,\r\n\r\nWhile not all Python frameworks explicitly support MVC, it is often trivial to create a web site which uses the MVC pattern by separating the data logic (the model) from the user interaction logic (the controller) and the templates (the view). Thatâ€™s why it is important not to write unnecessary Python code in the templates â€“ it works against the MVC model and creates chaos in the code base, making it harder to understand and modify.', '2013-05-15 12:57:07', 'MVC,Python,Programming,Design patterns', 42),
('Pool Physics', 'So what happens when the cue ball hits a stationary ball? \r\n\r\nFirst let''s define some things:\r\nCue Ball Vector (CBV) is the velocity vector of the cue ball after being hit by the cue.\r\nResultant Cue Ball Vector (RCBV) is the velocity vector of the cue ball after the collision.\r\nResultant Ball Vector (RBV) is the velocity vector of the other ball after the collision.\r\nLine Of Collision (LOC) is the tangent to the contact point of the two balls.\r\nTheta is the angle between the LOC and the CBV.\r\n\r\nThe direction of the RCBV is parallel to the LOC and has a magnitude of CBV*cos(Theta).\r\n\r\nThe direction of the RBV is perpendicular to the LOC and has a magnitude of CBV*sin(Theta).\r\n\r\nIf two moving balls collide, their velocities simply are exchanged. (RCBV = BV and RBV = CBV)\r\n\r\nIf a ball collides with the wall it is reflected as light is in a plane mirror.', '2013-05-15 12:57:39', 'Physics,Kinematics,Pool', 44),
('Good Steam Punk Books', '<b>Mortal Engines series</b> - About a time where all towns can move and eat each other. Has immortal ''stalkers''. \r\nContains Mortal Engines, Predators Gold, Infernal Devices and A Darkling Plain.\r\n\r\n<b>The Fever Crumb series</b> is a prequel to Mortal Engines and contains Fever Crumb, Web of Air and Scriveners moon.\r\n\r\n<b>Airborne series</b> - set in a time where airships are the primary means of travel. Contains airborne, Skybreaker and StarClimber.\r\n\r\n<b>Leviathan series</b> - a rewrite of world war one, with Darwinists vs Clankers. \r\nContains Leviathan, Behemoth and Goliath', '2013-05-15 12:58:10', 'Books,Steam punk', 45),
('A fake quote', '*It is in the nature of poetry that the meaning that suits the reader best is one never intended by the Author*\r\n\r\n- Albus Einstein 2004', '2013-05-15 12:58:48', 'Humour,Books', 46);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
