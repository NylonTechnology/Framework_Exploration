-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 31, 2016 at 02:07 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nt-frameworks`
--
CREATE DATABASE IF NOT EXISTS `nt-frameworks` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nt-frameworks`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
`id` int(11) NOT NULL,
  `internalUserID` varchar(50) DEFAULT NULL,
  `pepper_history` text,
  `name` varchar(255) DEFAULT NULL,
  `organizations` text,
  `prior_employment` text,
  `reference_keys` text,
  `gender` char(1) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `business_address_1` varchar(80) DEFAULT NULL,
  `business_address_2` varchar(80) DEFAULT NULL,
  `business_city` varchar(50) DEFAULT NULL,
  `business_state` varchar(50) DEFAULT NULL,
  `business_zip` varchar(20) DEFAULT NULL,
  `business_country` varchar(50) DEFAULT NULL,
  `business_address_notes` text,
  `business_phone_1` varchar(30) DEFAULT NULL,
  `business_phone_1_ext` varchar(10) DEFAULT NULL,
  `business_phone_2` varchar(30) DEFAULT NULL,
  `business_notes` text,
  `home_address_1` varchar(80) DEFAULT NULL,
  `home_address_2` varchar(80) DEFAULT NULL,
  `home_city` varchar(50) DEFAULT NULL,
  `home_state` varchar(50) DEFAULT NULL,
  `home_zip` varchar(20) DEFAULT NULL,
  `home_country` varchar(50) DEFAULT NULL,
  `home_address_notes` text,
  `home_phone_1` varchar(30) DEFAULT NULL,
  `home_phone_2` varchar(30) DEFAULT NULL,
  `is_summer_associate` tinyint(1) DEFAULT NULL,
  `is_on_holiday_list` tinyint(1) DEFAULT NULL,
  `is_retired` tinyint(1) DEFAULT NULL,
  `is_deceased` tinyint(1) DEFAULT NULL,
  `is_on_dnc_list` tinyint(1) DEFAULT NULL,
  `dnc_notes` text,
  `primary_practice_id` int(11) DEFAULT NULL,
  `contact_internal_department_id` int(11) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `internalUserID`, `pepper_history`, `name`, `organizations`, `prior_employment`, `reference_keys`, `gender`, `company_name`, `job_title`, `business_address_1`, `business_address_2`, `business_city`, `business_state`, `business_zip`, `business_country`, `business_address_notes`, `business_phone_1`, `business_phone_1_ext`, `business_phone_2`, `business_notes`, `home_address_1`, `home_address_2`, `home_city`, `home_state`, `home_zip`, `home_country`, `home_address_notes`, `home_phone_1`, `home_phone_2`, `is_summer_associate`, `is_on_holiday_list`, `is_retired`, `is_deceased`, `is_on_dnc_list`, `dnc_notes`, `primary_practice_id`, `contact_internal_department_id`, `date_updated`, `date_created`) VALUES
(1, '212512', '', 'Jane Doe', NULL, NULL, NULL, 'F', NULL, 'President', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2122553800', '223', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2016-05-26 00:00:00', '2016-05-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_office_jn`
--

CREATE TABLE `contact_office_jn` (
`id` int(11) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `sort` int(4) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact_office_jn`
--

INSERT INTO `contact_office_jn` (`id`, `phone`, `fax`, `mobile`, `sort`, `date_updated`, `date_created`, `office_id`, `contact_id`) VALUES
(1, NULL, NULL, NULL, NULL, '2016-05-26 00:00:00', '2016-05-26 00:00:00', 1, 1),
(2, NULL, NULL, NULL, NULL, '2016-05-26 00:00:00', '2016-05-26 00:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `value_statement` varchar(500) DEFAULT NULL,
  `description_intro` text,
  `description` text,
  `building` varchar(100) DEFAULT NULL,
  `address_1` varchar(80) DEFAULT NULL,
  `address_2` varchar(80) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `delivery_notes` text,
  `delivery_address_1` varchar(80) DEFAULT NULL,
  `delivery_address_2` varchar(80) DEFAULT NULL,
  `delivery_city` varchar(50) DEFAULT NULL,
  `delivery_state` varchar(50) DEFAULT NULL,
  `delivery_province` varchar(50) DEFAULT NULL,
  `delivery_zip` varchar(20) DEFAULT NULL,
  `delivery_country` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `directions` text,
  `directions_url` varchar(500) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `notes` text,
  `display_status_id` int(2) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `migrated_OfficeID` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `value_statement`, `description_intro`, `description`, `building`, `address_1`, `address_2`, `city`, `state`, `province`, `zip`, `country`, `delivery_notes`, `delivery_address_1`, `delivery_address_2`, `delivery_city`, `delivery_state`, `delivery_province`, `delivery_zip`, `delivery_country`, `phone`, `fax`, `email`, `directions`, `directions_url`, `sort`, `notes`, `display_status_id`, `date_updated`, `date_created`, `migrated_OfficeID`) VALUES
(1, 'Chelsea', NULL, 'Our Chelsea office opened in 2005.', 'Our Chelsea office opened in 2005. It is 100,000 square feet of fun.', NULL, '350 7th Ave', '10th Fl', 'New York', 'NY', NULL, '10010', 'USA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212-332-4533', NULL, NULL, NULL, NULL, 2, NULL, NULL, '2016-05-26 00:00:00', '2016-05-26 00:00:00', NULL),
(2, 'Hoboken Office', NULL, 'This is our New Jersey HQ.', 'We pay cheaper rent on our New Jersey outpost. ', NULL, '332 Water St', 'Floor 8', 'Hoboken', 'NJ', NULL, '20104', 'USA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '646 552 5255', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2016-05-26 00:00:00', '2016-05-26 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_office_jn`
--
ALTER TABLE `contact_office_jn`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_office_jn`
--
ALTER TABLE `contact_office_jn`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;