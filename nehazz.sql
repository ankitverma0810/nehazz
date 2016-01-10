-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2016 at 05:00 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nehazz`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `filename`, `url`, `created`, `modified`) VALUES
(2, 'slide1.png', '#', '2015-01-26 11:45:37', '2015-01-26 11:45:37'),
(3, 'slide2.png', 'http://google.com', '2015-01-26 11:45:45', '2015-01-26 11:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `status_id` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `filename`, `status_id`, `created`, `modified`) VALUES
(1, 'Bridal Makeup', '1422601431_1422552477_Bridal_makeup4.jpg', 1, '2015-01-24 17:34:39', '2015-01-30 01:03:51'),
(2, 'Before & After', 'Bridal_makeup11.jpg', 1, '2015-01-26 16:55:30', '2015-01-30 01:06:51'),
(3, 'Engagement / Sagan', 'Ring_Ceremony6.jpg', 1, '2015-01-26 16:55:48', '2015-01-31 15:19:09'),
(4, 'Reception', '14.jpg', 1, '2015-01-26 16:56:03', '2015-01-26 16:56:03'),
(5, 'Party Makeup', '15.jpg', 1, '2015-01-26 16:56:21', '2015-01-29 08:32:35'),
(6, 'Modeling Makeup', 'Modeling_Makeup.jpg', 1, '2015-01-26 16:56:39', '2015-01-31 15:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `host` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `port` int(11) NOT NULL,
  `powered_by` varchar(500) NOT NULL,
  `copyright` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `email`, `address`, `host`, `username`, `password`, `port`, `powered_by`, `copyright`, `created`, `modified`) VALUES
(1, 'info@nehazzbeautyworld.com', '<p>\r\n	&nbsp;</p>\r\n<div class="skype_c2c_menu_container notranslate" data-fp="{1AA1BD5A-D201-4990-A101-48102234F932}" data-murl="https://pipe.skype.com/Client/2.0/" data-uiid="0" id="skype_c2c_menu_container" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" style="display: none;">\r\n	<div class="skype_c2c_menu_click2call">\r\n		<a class="skype_c2c_menu_click2call_action" id="skype_c2c_menu_click2call_action" target="_self">Call</a></div>\r\n	<div class="skype_c2c_menu_click2sms">\r\n		<a class="skype_c2c_menu_click2sms_action" id="skype_c2c_menu_click2sms_action" target="_self">Send SMS</a></div>\r\n	<div class="skype_c2c_menu_add2skype">\r\n		<a class="skype_c2c_menu_add2skype_text" id="skype_c2c_menu_add2skype_text" target="_self">Add to Skype</a></div>\r\n	<div class="skype_c2c_menu_toll_info">\r\n		<span class="skype_c2c_menu_toll_callcredit">You&#39;ll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div>\r\n</div>\r\n', 'www.nehazzbeautyworld.com', 'mail@nehazzbeautyworld.com', 'smile@123', 25, '', 'Copyright Â© 2014 . All rights reserved to NEHAZZ BEAUTY WORLD', '2014-09-14 00:00:00', '2015-02-01 09:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `category_id`, `thumbnail`, `filename`, `created`, `modified`) VALUES
(4, 2, '', '5.jpg', '2015-01-26 16:58:36', '2015-01-26 16:58:36'),
(5, 2, '', '6.jpg', '2015-01-26 16:58:46', '2015-01-26 16:58:46'),
(6, 3, '', '8.jpg', '2015-01-26 16:58:58', '2015-01-26 16:58:58'),
(25, 1, '', 'Bridal.jpg', '2015-01-29 11:52:47', '2015-01-29 11:52:47'),
(26, 1, '', 'Bridal_makeup.jpg', '2015-01-29 11:54:23', '2015-01-29 11:54:23'),
(27, 1, '', 'Bridal_makeup1.jpg', '2015-01-29 11:57:23', '2015-01-29 11:57:23'),
(28, 1, '', 'Bridal_makeup2.jpg', '2015-01-29 12:00:39', '2015-01-29 12:00:39'),
(29, 1, '', 'Bridal_makeup3.jpg', '2015-01-29 12:00:53', '2015-01-29 12:00:53'),
(30, 1, '', 'Bridal_makeup8.jpg', '2015-01-29 12:02:46', '2015-01-29 12:02:46'),
(31, 1, '', 'Bridal_makeup6.jpg', '2015-01-29 12:03:05', '2015-01-29 12:03:05'),
(32, 1, '', 'Bridal_makeup7.jpg', '2015-01-29 12:03:29', '2015-01-29 12:03:29'),
(33, 1, '', 'Bridal_makeup4.jpg', '2015-01-29 12:03:30', '2015-01-29 12:03:30'),
(34, 1, '', 'Bridal_makeup9.jpg', '2015-01-29 12:03:37', '2015-01-29 12:03:37'),
(35, 1, '', 'Bridal_makeup11.jpg', '2015-01-29 12:03:38', '2015-01-29 12:03:38'),
(36, 1, '', 'Bridal_makeup10.jpg', '2015-01-29 12:03:40', '2015-01-29 12:03:40'),
(37, 1, '', 'Bridal_makeup5.jpg', '2015-01-29 12:03:43', '2015-01-29 12:03:43'),
(38, 1, '', 'Bridal_makeup12.jpg', '2015-01-31 13:33:52', '2015-01-31 13:33:52'),
(39, 1, '', 'Bridal_makeup13.jpg', '2015-01-31 13:34:08', '2015-01-31 13:34:08'),
(40, 1, '', 'Bridal_makeup15.jpg', '2015-01-31 13:34:58', '2015-01-31 13:34:58'),
(41, 1, '', 'Bridal_makeup14.jpg', '2015-01-31 13:35:04', '2015-01-31 13:35:04'),
(42, 3, '', 'Ring_Ceremony.jpg', '2015-01-31 13:35:14', '2015-01-31 13:35:14'),
(43, 2, '', 'before_and_after_makeup.jpg', '2015-01-31 13:37:55', '2015-01-31 13:37:55'),
(45, 2, '', 'before_and_after_makeup1.jpg', '2015-01-31 15:00:04', '2015-01-31 15:00:04'),
(46, 2, '', 'before_and_after_makeup2.jpg', '2015-01-31 15:00:12', '2015-01-31 15:00:12'),
(47, 2, '', 'before_and_after_makeup3.jpg', '2015-01-31 15:00:30', '2015-01-31 15:00:30'),
(48, 2, '', 'before_and_after_makeup4.jpg', '2015-01-31 15:00:36', '2015-01-31 15:00:36'),
(49, 2, '', 'before_and_after_makeup5.jpg', '2015-01-31 15:00:44', '2015-01-31 15:00:44'),
(50, 2, '', 'before_and_after_makeup6.jpg', '2015-01-31 15:00:54', '2015-01-31 15:00:54'),
(51, 2, '', 'before_and_after_makeup7.jpg', '2015-01-31 15:01:31', '2015-01-31 15:01:31'),
(52, 2, '', 'before_and_after_makeup8.jpg', '2015-01-31 15:02:11', '2015-01-31 15:02:11'),
(53, 2, '', 'before_and_after_makeup9.jpg', '2015-01-31 15:02:31', '2015-01-31 15:02:31'),
(54, 2, '', 'before_and_after_makeup10.jpg', '2015-01-31 15:03:02', '2015-01-31 15:03:02'),
(55, 2, '', 'before_and_after_makeup11.jpg', '2015-01-31 15:03:18', '2015-01-31 15:03:18'),
(56, 2, '', 'before_and_after_makeup12.jpg', '2015-01-31 15:03:31', '2015-01-31 15:03:31'),
(57, 2, '', 'before_and_after_makeup13.jpg', '2015-01-31 15:03:46', '2015-01-31 15:03:46'),
(58, 2, '', 'before_and_after_makeup14.jpg', '2015-01-31 15:03:54', '2015-01-31 15:03:54'),
(59, 2, '', 'before_and_after_makeup15.jpg', '2015-01-31 15:04:28', '2015-01-31 15:04:28'),
(61, 2, '', 'before_and_after_makeup16.jpg', '2015-01-31 15:05:34', '2015-01-31 15:05:34'),
(62, 1, '', 'Bridal_makeup16.jpg', '2015-01-31 15:06:01', '2015-01-31 15:06:01'),
(63, 1, '', 'Bridal_makeup17.jpg', '2015-01-31 15:06:16', '2015-01-31 15:06:16'),
(64, 1, '', 'Bridal_makeup18.jpg', '2015-01-31 15:11:08', '2015-01-31 15:11:08'),
(65, 1, '', 'Bridal_makeup19.jpg', '2015-01-31 15:11:30', '2015-01-31 15:11:30'),
(66, 6, '', 'Modeling_Makeup.jpg', '2015-01-31 15:11:48', '2015-01-31 15:11:48'),
(67, 6, '', 'Modeling_Makeup1.jpg', '2015-01-31 15:12:00', '2015-01-31 15:12:00'),
(68, 5, '', 'party_makeup.jpg', '2015-01-31 15:12:17', '2015-01-31 15:12:17'),
(69, 5, '', 'party_makeup1.jpg', '2015-01-31 15:12:34', '2015-01-31 15:12:34'),
(70, 5, '', 'party_makeup2.jpg', '2015-01-31 15:12:55', '2015-01-31 15:12:55'),
(71, 3, '', 'Ring_Ceremony2.jpg', '2015-01-31 15:14:51', '2015-01-31 15:14:51'),
(72, 3, '', 'Ring_Ceremony3.jpg', '2015-01-31 15:15:22', '2015-01-31 15:15:22'),
(73, 3, '', 'Ring_Ceremony3.png', '2015-01-31 15:15:23', '2015-01-31 15:15:23'),
(74, 3, '', 'Ring_Ceremony4.jpg', '2015-01-31 15:15:44', '2015-01-31 15:15:44'),
(75, 3, '', '1422738968_Ring_Ceremony4.jpg', '2015-01-31 15:16:08', '2015-01-31 15:16:08'),
(76, 3, '', 'Ring_Ceremony5.jpg', '2015-01-31 15:16:30', '2015-01-31 15:16:30'),
(77, 3, '', 'Ring_Ceremony6.jpg', '2015-01-31 15:16:45', '2015-01-31 15:16:45'),
(78, 3, '', 'Ring_Ceremony7.jpg', '2015-01-31 15:16:54', '2015-01-31 15:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(250) NOT NULL,
  `controller` varchar(250) NOT NULL,
  `action` varchar(250) NOT NULL,
  `status_id` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `controller`, `action`, `status_id`, `created`, `modified`) VALUES
(1, NULL, 'Home', 'pages', 'index', 1, '2015-01-24 09:50:57', '2015-01-26 09:15:11'),
(2, NULL, 'About us', 'pages', 'about-us', 1, '2015-01-24 09:51:13', '2015-01-26 09:23:48'),
(3, NULL, 'What we have', 'specialities', 'index', 1, '2015-01-24 09:51:27', '2015-01-26 09:23:57'),
(4, NULL, 'Gallery', 'gallery', 'index', 1, '2015-01-24 09:51:35', '2015-01-26 09:24:07'),
(5, NULL, 'Contact us', 'pages', 'contact-us', 1, '2015-01-24 09:51:54', '2015-01-26 09:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `page_title` varchar(500) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `filename`, `description`, `page_title`, `meta_keywords`, `meta_description`, `created`, `modified`) VALUES
(1, 'Home', 'home', '', '<h2 class="page-title">\r\n	Welocme to Nehazz Beauty World</h2>\r\n<p>\r\n	<img src="img/img1.png" style="float:left;" />Nehazz Beauty World is the Creative innovation of Mrs. Neha. She started her beauty business from a small beauty Salon in Ludhiana to two big branches in the posh loca lities of Ludhiana. Now, Nehazz is one of the most powerful brands for makeup and beauty care in the city. Every bride dreams of her wedding day and wants to be at her best appearance that day. Bridal makeup is an important part of bridal dressing. We at Nehazz ensure that you look the most outstanding in any type of lighting, from ind oors to outdoors. Each makeover includes cleansing, moisturizing, foundation to pow der; blush, eyes, and lips.</p>\r\n<p>\r\n	We keep ourselves updated every minute and use the state-of-the-art techniques available in the industry. Obviously to look beauti ful, one needs to be in perfect shape; but one more thing contributing to that perfection is the right make-up. An average looking face can be made pretty by using correct make-up and that is what our professionals work for you.</p>\r\n<p>\r\n	<br />\r\n	&nbsp;</p>\r\n', 'Nehazz Beauty World - Ludhiana Best Beauty Parlour for Bridal Wedding Makeup - Sagan Reception Makeup', 'beauty parlour, salon in ludhiana, best parlour in ludhiana, bridal parlor in ludhiana, wedding makeup', 'Nehazz Beauty World is the Best Parlour in Ludhiana Located in Model Town and in Field Ganj. We deal in Silicon HD Makeup, Air Brush Makeup, Bridal Makeup, Cardiac Treatment, Silk Therapy, and Skin Treatment.', '2015-01-26 08:23:56', '2015-01-31 13:44:55'),
(2, 'About us', 'about-us', '1422290584_slide-2.png', '<h2>\r\n	About Nehazz Beauty World</h2>\r\n<p>\r\n	<img src="../img/img2.png" style="float:left;" />Nehazz Beauty World is the Creative innovation of Mrs. Neha. She started her beauty business from a small beauty Salon in Ludhiana to three big branches in the posh localities of Ludhiana. Now, Nehazz is one of the most powerful brands for makeup and beauty care in the city. Nehazz is not only for the makeup or beauty care of the women but it is the best makeup academy also. Nehazz beauty world constantly strives to educate and train their stylists, therapists, and artists about the latest trends and techniques and also the products available in the market.</p>\r\n<p>\r\n	Nehazz was established 15 years back and has consistently shown growth over the years on year. The spirit of excellence in all the three branches is maintained by a strong unbreakable management. Our dreams are unlimited but our determination to protect and cherish the brand name and its values are the core of our existence.</p>\r\n<p>\r\n	Besides being training of our staff, our focus is to use the natural and the best quality products. Mrs. Neha is the qualified makeup artist and is always working on getting the perfect texture, colors and feel of our product which actucally complement the Indian skin tone. We at Nehazz understand every one&rsquo;s beauty aspirations. Whether young or old, man or woman, everyone wants to look the best. You may use best foundation, but the best foundation is the skin itself. So, every effort is made to nourish the skin at Nehazz.</p>\r\n<p>\r\n	Nehazz has been delivering flawless beauty for years, the reason being the use of best quality products. Every skin is an individual in its own rights,and our practitioners know it. Personalized attention is given to our each customer. Walk in as you are, and walk out as beautiful you want to be.</p>\r\n<p>\r\n	<br />\r\n	&nbsp;</p>\r\n', 'Nehazz About us - Best Bridal Wedding Makup in Ludhiana', 'wedding makeup, bridal makeup, party makeup, best parlour in ludhiana, best beauty salon in ludhiana', 'Nehazz is one of the most powerful brands for makeup and beauty care in the ludhiana city.  The reason being the use of best quality products. Every skin is an individual in its own rights,and our practitioners know it.', '2015-01-26 16:20:33', '2015-01-31 02:45:03'),
(3, 'Specialities', 'specialities', '1422290691_slide-2.png', '<h3>\r\n	Our Beauty Services:</h3>\r\n<ul>\r\n	<li>\r\n		Reception makeup (MAC PROFESSIONAL)</li>\r\n	<li>\r\n		Bridal manual makeup (Air Brush Water base)</li>\r\n	<li>\r\n		Silicone air brush makeup</li>\r\n	<li>\r\n		Hair Spa</li>\r\n	<li>\r\n		Facial</li>\r\n	<li>\r\n		Bleach</li>\r\n	<li>\r\n		Manicure</li>\r\n	<li>\r\n		Body Bleach</li>\r\n	<li>\r\n		Body Wax</li>\r\n	<li>\r\n		Body Spa</li>\r\n	<li>\r\n		Body Polishing</li>\r\n	<li>\r\n		Massage</li>\r\n</ul>\r\n', 'Nehazz Specialities in Bridal Makeup , Hair styles,  Hair Spa', 'bridal makeup, beauty parlour, hair styles, wedding makeups', 'Nehazz Welcome you ladies , we believe in giving you a perfect start for your new life by making you look the most beautiful which you have only dreamed off .', '2015-01-26 16:35:42', '2015-01-31 14:09:23'),
(4, 'Gallery', 'gallery', '1422291674_slide-2.png', '', 'Bridal Makeup Ludhiana - Engagement - Sagan - Reception Makeup ', 'Bridal Makeup Ludhiana, Engagement, Sagan, Reception Makeup', 'Nehazz Special pampering for the bride- especially for the pre or post wedding functions. ', '2015-01-26 17:01:14', '2015-01-31 03:52:33'),
(5, 'Contact us', 'contact-us', '1422293798_slide-2.png', '<h2>\r\n	Our <span>Branches</span></h2>\r\n<p>\r\n	<strong>Nehazz beauty world &amp; makeup studio</strong><br />\r\n	3761, Bindra Complex,<br />\r\n	Model Town Extn.<br />\r\n	Ludhiana.<br />\r\n	Mobile: <span class="skype_c2c_print_container notranslate">9888848312</span>, <span class="skype_c2c_container notranslate" data-isfreecall="false" data-ismobile="false" data-isrtl="false" data-numbertocall="+919814440312" dir="ltr" id="skype_c2c_container" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" tabindex="-1"><span class="skype_c2c_highlighting_inactive_common" dir="ltr" skypeaction="skype_dropdown"><span class="skype_c2c_textarea_span" id="non_free_num_ui"><span class="skype_c2c_text_span">9814440312</span></span></span></span><br />\r\n	Email: <a href="mailto:info@nehazzbeautyworld.com">info@nehazzbeautyworld.com</a></p>\r\n<p>\r\n	<strong>Nehazz Beauty Clinic</strong></p>\r\n<p>\r\n	Shah Pur Road<br />\r\n	Field Ganj, Near Kumar Ice Cream, Ludhiana<br />\r\n	Mobile: <span class="skype_c2c_print_container notranslate">9780308348</span><br />\r\n	Email: <a href="mailto:info@nehazzbeautyworld.com">info@nehazzbeautyworld.com</a></p>\r\n<div class="skype_c2c_menu_container notranslate" data-fp="{1AA1BD5A-D201-4990-A101-48102234F932}" data-murl="https://pipe.skype.com/Client/2.0/" data-uiid="0" id="skype_c2c_menu_container" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" style="display: none;">\r\n	<div class="skype_c2c_menu_click2call">\r\n		<a class="skype_c2c_menu_click2call_action" id="skype_c2c_menu_click2call_action" target="_self">Call</a></div>\r\n	<div class="skype_c2c_menu_click2sms">\r\n		<a class="skype_c2c_menu_click2sms_action" id="skype_c2c_menu_click2sms_action" target="_self">Send SMS</a></div>\r\n	<div class="skype_c2c_menu_add2skype">\r\n		<a class="skype_c2c_menu_add2skype_text" id="skype_c2c_menu_add2skype_text" target="_self">Add to Skype</a></div>\r\n	<div class="skype_c2c_menu_toll_info">\r\n		<span class="skype_c2c_menu_toll_callcredit">You&#39;ll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div>\r\n</div>\r\n', 'Nehazz Contact us', '', '', '2015-01-26 17:36:38', '2015-01-29 08:40:02'),
(6, 'Test', 'test', '1422421180_1422290584_slide-2.png', '<p>\r\n	sdcmlsa;dw</p>\r\n', '', '', '', '2015-01-27 22:57:51', '2015-01-27 22:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE IF NOT EXISTS `specialities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(500) NOT NULL,
  `status_id` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `title`, `filename`, `description`, `url`, `status_id`, `created`, `modified`) VALUES
(1, 'We Deliver Princesses', 'item-1.jpg', 'Nehazz welcomes you with its majestic and beautifully done interiors and a string of excellent grooming services to make you feel good, relaxed and pampered.', '/pages/about-us', 1, '2015-01-25 17:43:04', '2015-02-01 09:26:18'),
(2, 'Pre-Bridal Package', 'item-2.jpg', 'Pamper yourself before your wedding. Allow the experts to groom you into a princess, a month or a day before your D-day.                         ', '', 1, '2015-01-26 11:51:59', '2015-01-26 11:51:59'),
(3, 'Engagement / Sagan Package', 'item-3.jpg', 'Special pampering for the bride- especially for the pre or post wedding functions.', '', 1, '2015-01-26 11:52:37', '2015-01-29 08:55:04'),
(4, 'Makeup  Acedemy', 'item-4.jpg', 'Neha''zz beauty world is solution for all types of Parlor work, for learning the beauty techniques,bridal makeup, hair style to hair cut etc.', '', 1, '2015-01-26 11:53:16', '2015-01-26 11:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `title`) VALUES
(1, 'Active'),
(2, 'Not Active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(500) NOT NULL,
  `status_id` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `filename`, `description`, `author`, `status_id`, `created`, `modified`) VALUES
(1, '213.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Shilpa Mittal', 1, '2015-01-25 17:51:52', '2015-01-26 11:57:41'),
(2, '222.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Swati Sharma', 1, '2015-01-26 11:58:01', '2015-01-26 11:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status_id`, `created`, `modified`) VALUES
(2, 'ankitverma_0810@yahoo.co.in', 'a6c41dc9f54d469e2a0a4ba54e178dd1ded85550', 1, '2015-01-24 08:32:47', '2015-02-01 17:58:23'),
(3, 'prince_9_lonely@yahoo.com', '9451514b4e473bd9fbc5d496b4f33efa422cc7b3', 1, '2015-01-31 15:30:22', '2015-01-31 15:30:22');
