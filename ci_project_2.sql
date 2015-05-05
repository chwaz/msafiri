-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2015 at 09:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE IF NOT EXISTS `about_page` (
  `about_pageid` int(11) NOT NULL,
  `content` text,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`about_pageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='About us page dynamic content...';

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL COMMENT 'Full Name of the user',
  `password` varchar(255) DEFAULT NULL,
  `superUser` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'To identify if the user has admin rights or is the super user (can also be used to separate the portal owners (administrators) from other users.',
  `block` tinyint(1) DEFAULT '0' COMMENT 'Block is set to true if the account is blocked or awaiting activation',
  `guest` tinyint(1) DEFAULT '1' COMMENT 'If the user is not logged in, this variable will be set to ''T''. The other variables will be unset or default values',
  `last_login` datetime NOT NULL COMMENT 'Date the account is created',
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date the object is updated (current time of update)',
  `premium` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='<double-click to overwrite multiple objects>' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`, `superUser`, `block`, `guest`, `last_login`, `last_update`, `premium`) VALUES
(1, 'admin', 'admin', 1, 0, 0, '2015-03-13 05:17:00', '2015-03-13 02:17:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `april_report`
--

CREATE TABLE IF NOT EXISTS `april_report` (
  `april_reportid` int(11) NOT NULL,
  `april_worksheetid04` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`april_reportid`),
  KEY `april_worksheetid_idx` (`april_worksheetid04`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of april worksheet log report... with the april_worksheet fk labeled 04...';

-- --------------------------------------------------------

--
-- Table structure for table `april_worksheet`
--

CREATE TABLE IF NOT EXISTS `april_worksheet` (
  `april_worksheetid` int(11) NOT NULL,
  `bus_operationsid04` int(11) DEFAULT NULL,
  `staff_operationsid04` int(11) DEFAULT NULL,
  `route_detailsid04` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`april_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid04`),
  KEY `route_detailsid_idx` (`route_detailsid04`),
  KEY `staff_operationsid_idx` (`staff_operationsid04`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='April has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 04, 04th Month';

-- --------------------------------------------------------

--
-- Table structure for table `august_report`
--

CREATE TABLE IF NOT EXISTS `august_report` (
  `august_reportid` int(11) NOT NULL,
  `august_worksheetid08` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`august_reportid`),
  KEY `august_worksheetid_idx` (`august_worksheetid08`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='month of august worksheet log report... with the august_worksheet fk labeled 08...';

-- --------------------------------------------------------

--
-- Table structure for table `august_worksheet`
--

CREATE TABLE IF NOT EXISTS `august_worksheet` (
  `august_worksheetid` int(11) NOT NULL,
  `bus_operationsid08` int(11) DEFAULT NULL,
  `staff_operationsid08` int(11) DEFAULT NULL,
  `route_detailsid08` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`august_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid08`),
  KEY `route_detailsid_idx` (`route_detailsid08`),
  KEY `staff_operationsid_idx` (`staff_operationsid08`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='August has fk from bus_operations, route_details and staff_operations labeled 08 for 08th month';

-- --------------------------------------------------------

--
-- Table structure for table `body_builder`
--

CREATE TABLE IF NOT EXISTS `body_builder` (
  `body_builderid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneno` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`body_builderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Register local and international body building companies and fabricators.';

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE IF NOT EXISTS `bus_details` (
  `bus_detailsid` int(11) NOT NULL,
  `owner_detailsid` int(11) DEFAULT NULL,
  `body_builderid` int(11) DEFAULT NULL,
  `bus_reg` varchar(45) DEFAULT NULL,
  `bus_make` varchar(45) DEFAULT NULL,
  `bus_model` varchar(45) DEFAULT NULL,
  `no_of_seats` int(11) DEFAULT NULL,
  `bus_chasisno` varchar(45) DEFAULT NULL,
  `bus_engineno` varchar(45) DEFAULT NULL,
  `year_of_manufacture` varchar(45) DEFAULT NULL,
  `date_of_purchase` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bus_detailsid`),
  UNIQUE KEY `bus_reg_UNIQUE` (`bus_reg`),
  KEY `body_builderid_idx` (`body_builderid`),
  KEY `owner_detailsid_idx` (`owner_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Details of the vehicles registered under the bus_company';

-- --------------------------------------------------------

--
-- Table structure for table `bus_maintenance`
--

CREATE TABLE IF NOT EXISTS `bus_maintenance` (
  `bus_maintenanceid` int(11) NOT NULL,
  `routes_detailsid2` int(11) DEFAULT NULL,
  `bus_detailsid2` int(11) DEFAULT NULL,
  `tlb_detailsid2` int(11) DEFAULT NULL,
  `inspection_detailsid2` int(11) DEFAULT NULL,
  `insurance_detailsid2` int(11) DEFAULT NULL,
  `parking_detailsid2` int(11) DEFAULT NULL,
  `mcsk_detailsid2` int(11) DEFAULT NULL,
  `speedgov_detailsid2` int(11) DEFAULT NULL,
  `psv_detailsid2` int(11) DEFAULT NULL,
  PRIMARY KEY (`bus_maintenanceid`),
  KEY `insurance_detailsid_idx` (`insurance_detailsid2`),
  KEY `tlb_detailsid_idx` (`tlb_detailsid2`),
  KEY `mcsk_detailsid_idx` (`mcsk_detailsid2`),
  KEY `bus_detailsid_idx` (`bus_detailsid2`),
  KEY `route_detailsid_idx` (`routes_detailsid2`),
  KEY `parking_detailsid_idx` (`parking_detailsid2`),
  KEY `speedgov_detailsid_idx` (`speedgov_detailsid2`),
  KEY `inspection_detailsid_idx` (`inspection_detailsid2`),
  KEY `psv_detailsid_idx` (`psv_detailsid2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Maintenance table showing the details of the license, certificates and the physical condition of the vehicles... The resoective fk''s are registered with 2 at the end.';

-- --------------------------------------------------------

--
-- Table structure for table `bus_operations`
--

CREATE TABLE IF NOT EXISTS `bus_operations` (
  `bus_operationsid` int(11) NOT NULL,
  `route_detailsid1` int(11) DEFAULT NULL,
  `bus_detailsid1` int(11) DEFAULT NULL,
  `staff_operationsid1` int(11) DEFAULT NULL,
  `bus_statusid1` int(11) DEFAULT NULL,
  PRIMARY KEY (`bus_operationsid`),
  KEY `route_detailsid_idx` (`route_detailsid1`),
  KEY `bus_detailsid_idx` (`bus_detailsid1`),
  KEY `staff_operationsid_idx` (`staff_operationsid1`),
  KEY `bus_statusid_idx` (`bus_statusid1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Assigning of the vehicles to a route and staff to the vehicles... The resoective fk''s are registered with 1 at the end. This is where the report for the Roster will be collected...';

-- --------------------------------------------------------

--
-- Table structure for table `bus_status`
--

CREATE TABLE IF NOT EXISTS `bus_status` (
  `bus_statusid` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bus_statusid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Status of the bus, either Operational, Hire or Maintenance mode status...';

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_detailsid` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `idno` int(11) DEFAULT NULL,
  `phoneno` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`customer_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Customer details, refer to a table registering the customer detials for verification purposes and security measure during the transaction or hiring process...';

-- --------------------------------------------------------

--
-- Table structure for table `december_report`
--

CREATE TABLE IF NOT EXISTS `december_report` (
  `december_reportid` int(11) NOT NULL,
  `december_worksheetid012` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`december_reportid`),
  KEY `december_worksheetid_idx` (`december_worksheetid012`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of decemberl worksheet log report... with the december_worksheet fk labeled 012...';

-- --------------------------------------------------------

--
-- Table structure for table `december_worksheet`
--

CREATE TABLE IF NOT EXISTS `december_worksheet` (
  `december_worksheetid` int(11) NOT NULL,
  `bus_operationsid012` int(11) DEFAULT NULL,
  `staff_operationsid012` int(11) DEFAULT NULL,
  `route_detailsid012` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`december_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid012`),
  KEY `route_detailsid_idx` (`route_detailsid012`),
  KEY `staff_operationsid_idx` (`staff_operationsid012`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='December has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 012, 012th Month';

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE IF NOT EXISTS `event_details` (
  `event_detailsid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `purpose` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `date_of_event` datetime DEFAULT NULL,
  `timestamp_of_request` datetime DEFAULT NULL,
  `duration_of_hire` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`event_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Event details filled by the customer concerning the type of event the vehicles are required...';

-- --------------------------------------------------------

--
-- Table structure for table `february_report`
--

CREATE TABLE IF NOT EXISTS `february_report` (
  `february_reportid` int(11) NOT NULL,
  `february_worksheetid02` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`february_reportid`),
  KEY `february_worksheetid_idx` (`february_worksheetid02`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of February worksheet log report... with the february_worksheet fk labeled 02...';

-- --------------------------------------------------------

--
-- Table structure for table `february_worksheet`
--

CREATE TABLE IF NOT EXISTS `february_worksheet` (
  `february_worksheetid` int(11) NOT NULL,
  `bus_operationsid02` int(11) DEFAULT NULL,
  `staff_operationsid02` int(11) DEFAULT NULL,
  `route_detailsid02` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`february_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid02`),
  KEY `route_detailsid_idx` (`route_detailsid02`),
  KEY `staff_operationsid_idx` (`staff_operationsid02`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='february has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 02, 02th Month';

-- --------------------------------------------------------

--
-- Table structure for table `index_page`
--

CREATE TABLE IF NOT EXISTS `index_page` (
  `index_pageid` int(11) NOT NULL,
  `content` text,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`index_pageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Index or Home page dynamic content...';

-- --------------------------------------------------------

--
-- Table structure for table `inspection_details`
--

CREATE TABLE IF NOT EXISTS `inspection_details` (
  `inspection_detailsid` int(11) NOT NULL,
  `inspector_fname` varchar(45) DEFAULT NULL,
  `inspector_lname` varchar(45) DEFAULT NULL,
  `last_check` varchar(45) DEFAULT NULL,
  `next_check` varchar(45) DEFAULT NULL,
  `license_copy` blob,
  PRIMARY KEY (`inspection_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Inspection detials of the busses every year by the inspection body (tlb) for road worthiness...';

-- --------------------------------------------------------

--
-- Table structure for table `insurance_details`
--

CREATE TABLE IF NOT EXISTS `insurance_details` (
  `insurance_detailsid` int(11) NOT NULL,
  `insurance_name` varchar(45) DEFAULT NULL,
  `insurance_phoneno` varchar(45) DEFAULT NULL,
  `insurance_email` varchar(45) DEFAULT NULL,
  `insurance_website` varchar(45) DEFAULT NULL,
  `insurance_location` varchar(45) DEFAULT NULL,
  `insurance_address` varchar(45) DEFAULT NULL,
  `last_renewal` varchar(45) DEFAULT NULL,
  `next_renewal` varchar(45) DEFAULT NULL,
  `insurance_copy` blob,
  PRIMARY KEY (`insurance_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Insurance details of the vehicles...';

-- --------------------------------------------------------

--
-- Table structure for table `january_report`
--

CREATE TABLE IF NOT EXISTS `january_report` (
  `january_reportid` int(11) NOT NULL,
  `january_worksheetid01` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`january_reportid`),
  KEY `january_worksheetid01_idx` (`january_worksheetid01`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of january worksheet log report... with the january_worksheet fk labeled 01...';

-- --------------------------------------------------------

--
-- Table structure for table `january_worksheet`
--

CREATE TABLE IF NOT EXISTS `january_worksheet` (
  `january_worksheetid` int(11) NOT NULL,
  `bus_operationsid01` int(11) DEFAULT NULL,
  `staff_operationsid01` int(11) DEFAULT NULL,
  `route_detailsid01` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`january_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid01`),
  KEY `route_detailsid_idx` (`route_detailsid01`),
  KEY `staff_operationsid_idx` (`staff_operationsid01`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='January has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 01, 01th Month';

-- --------------------------------------------------------

--
-- Table structure for table `july_report`
--

CREATE TABLE IF NOT EXISTS `july_report` (
  `july_reportid` int(11) NOT NULL,
  `july_worksheetid07` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`july_reportid`),
  KEY `july_worksheetid_idx` (`july_worksheetid07`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of july worksheet log report... with the july_worksheet fk labeled 07...';

-- --------------------------------------------------------

--
-- Table structure for table `july_worksheet`
--

CREATE TABLE IF NOT EXISTS `july_worksheet` (
  `july_worksheetid` int(11) NOT NULL,
  `bus_operationsid07` int(11) DEFAULT NULL,
  `staff_operationsid07` int(11) DEFAULT NULL,
  `route_detailsid07` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`july_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid07`),
  KEY `route_detailsid_idx` (`route_detailsid07`),
  KEY `staff_operationsid_idx` (`staff_operationsid07`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='July has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 07, 07th Month';

-- --------------------------------------------------------

--
-- Table structure for table `june_report`
--

CREATE TABLE IF NOT EXISTS `june_report` (
  `june_reportid` int(11) NOT NULL,
  `june_worksheetid` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`june_reportid`),
  KEY `june_worksheetid_idx` (`june_worksheetid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of june worksheet log report... with the june_worksheet fk labeled 06...';

-- --------------------------------------------------------

--
-- Table structure for table `june_worksheet`
--

CREATE TABLE IF NOT EXISTS `june_worksheet` (
  `june_worksheetid` int(11) NOT NULL,
  `bus_operationsid06` int(11) DEFAULT NULL,
  `staff_operationsid06` int(11) DEFAULT NULL,
  `route_detailsid06` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`june_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid06`),
  KEY `route_detailsid_idx` (`route_detailsid06`),
  KEY `staff_operationsid_idx` (`staff_operationsid06`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='June has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 06, 06th Month';

-- --------------------------------------------------------

--
-- Table structure for table `march_report`
--

CREATE TABLE IF NOT EXISTS `march_report` (
  `march_reportid` int(11) NOT NULL,
  `march_worksheetid03` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`march_reportid`),
  KEY `march_worksheetid_idx` (`march_worksheetid03`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of march worksheet log report... with the march_worksheet fk labeled 03...';

-- --------------------------------------------------------

--
-- Table structure for table `march_worksheet`
--

CREATE TABLE IF NOT EXISTS `march_worksheet` (
  `march_worksheetid` int(11) NOT NULL,
  `bus_operationsid03` int(11) DEFAULT NULL,
  `staff_operationsid03` int(11) DEFAULT NULL,
  `route_detailsid03` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`march_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid03`),
  KEY `route_detailsid_idx` (`route_detailsid03`),
  KEY `staff_operationsid_idx` (`staff_operationsid03`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='March has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 03, 03th Month';

-- --------------------------------------------------------

--
-- Table structure for table `may_report`
--

CREATE TABLE IF NOT EXISTS `may_report` (
  `may_reportid` int(11) NOT NULL,
  `may_worksheetid05` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`may_reportid`),
  KEY `may_worksheetid_idx` (`may_worksheetid05`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of may worksheet log report... with the may_worksheet fk labeled 05...';

-- --------------------------------------------------------

--
-- Table structure for table `may_worksheet`
--

CREATE TABLE IF NOT EXISTS `may_worksheet` (
  `may_worksheetid` int(11) NOT NULL,
  `bus_operationsid05` int(11) DEFAULT NULL,
  `staff_operationsid05` int(11) DEFAULT NULL,
  `route_detailsid05` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`may_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid05`),
  KEY `route_detailsid_idx` (`route_detailsid05`),
  KEY `staff_operationsid_idx` (`staff_operationsid05`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='May has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 05, 05th Month';

-- --------------------------------------------------------

--
-- Table structure for table `mcsk_details`
--

CREATE TABLE IF NOT EXISTS `mcsk_details` (
  `mcsk_detailsid` int(11) NOT NULL,
  `last_renewal` varchar(45) DEFAULT NULL,
  `next_renewal` varchar(45) DEFAULT NULL,
  `license_copy` blob,
  PRIMARY KEY (`mcsk_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Music Coorperative Society of Kenya license details';

-- --------------------------------------------------------

--
-- Table structure for table `november_report`
--

CREATE TABLE IF NOT EXISTS `november_report` (
  `november_reportid` int(11) NOT NULL,
  `november_worksheetid011` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`november_reportid`),
  KEY `november_worksheetid_idx` (`november_worksheetid011`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of november worksheet log report... with the november_worksheet fk labeled 011...';

-- --------------------------------------------------------

--
-- Table structure for table `november_worksheet`
--

CREATE TABLE IF NOT EXISTS `november_worksheet` (
  `november_worksheetid` int(11) NOT NULL,
  `bus_operationsid011` int(11) DEFAULT NULL,
  `staff_operationsid011` int(11) DEFAULT NULL,
  `route_detailsid011` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`november_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid011`),
  KEY `route_detailsid_idx` (`route_detailsid011`),
  KEY `staff_operationsid_idx` (`staff_operationsid011`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='November has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 011, 011th Month';

-- --------------------------------------------------------

--
-- Table structure for table `october_report`
--

CREATE TABLE IF NOT EXISTS `october_report` (
  `october_reportid` int(11) NOT NULL,
  `october_worksheetid010` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`october_reportid`),
  KEY `october_worksheetid_idx` (`october_worksheetid010`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of october worksheet log report... with the october_worksheet fk labeled 010...';

-- --------------------------------------------------------

--
-- Table structure for table `october_worksheet`
--

CREATE TABLE IF NOT EXISTS `october_worksheet` (
  `october_worksheetid` int(11) NOT NULL,
  `bus_operationsid010` int(11) DEFAULT NULL,
  `staff_operationsid010` int(11) DEFAULT NULL,
  `route_detailsid010` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`october_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid010`),
  KEY `route_detailsid_idx` (`route_detailsid010`),
  KEY `staff_operationsid_idx` (`staff_operationsid010`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='October has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 010, 010th Month';

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE IF NOT EXISTS `owner_details` (
  `owner_detailsid` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `idno` int(11) DEFAULT NULL,
  `owner_type` varchar(45) DEFAULT NULL,
  `joint_type` varchar(255) NOT NULL,
  `owner_address` varchar(45) DEFAULT NULL,
  `owner_email` varchar(45) DEFAULT NULL,
  `owner_phoneno` varchar(45) DEFAULT NULL,
  `place_ofresidence` varchar(45) DEFAULT NULL,
  `log_bookcopy` blob,
  `receipt_ofpurchasecopy` blob,
  PRIMARY KEY (`owner_detailsid`),
  UNIQUE KEY `idno_UNIQUE` (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Detials of the respective owners of the vehocles registered to the company...';

-- --------------------------------------------------------

--
-- Table structure for table `parking_details`
--

CREATE TABLE IF NOT EXISTS `parking_details` (
  `parking_detailsid` int(11) NOT NULL,
  `county_name` varchar(45) DEFAULT NULL,
  `last_renewal` varchar(45) DEFAULT NULL,
  `next_renewal` varchar(45) DEFAULT NULL,
  `license_copy` blob,
  PRIMARY KEY (`parking_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='County parking tickets to be paid as seasonal licenses or tickets... from the respective counties.... example; Nairobi and Kajiado counties respectively.';

-- --------------------------------------------------------

--
-- Table structure for table `psv_details`
--

CREATE TABLE IF NOT EXISTS `psv_details` (
  `psv_detailsid` int(11) NOT NULL,
  `application_copy` blob,
  `badge_copy` blob,
  `date_ofacquisition` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`psv_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='PSV badges and licenses to authorize the vehicle to operate at a public service level.';

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE IF NOT EXISTS `route_details` (
  `route_detailsid` int(11) NOT NULL,
  `route_name` varchar(45) DEFAULT NULL,
  `route_county` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`route_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Routes Details it covers the specific routes covered by  the vehicles in providing a means of tranport to the public';

-- --------------------------------------------------------

--
-- Table structure for table `september_report`
--

CREATE TABLE IF NOT EXISTS `september_report` (
  `september_reportid` int(11) NOT NULL,
  `september_worksheetid09` int(11) DEFAULT NULL,
  `gross_earnings` varchar(45) DEFAULT NULL,
  `expenses` varchar(45) DEFAULT NULL,
  `net_earnings` varchar(45) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`september_reportid`),
  KEY `september_worksheetid_idx` (`september_worksheetid09`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Month of september worksheet log report... with the september_worksheet fk labeled 09...';

-- --------------------------------------------------------

--
-- Table structure for table `september_worksheet`
--

CREATE TABLE IF NOT EXISTS `september_worksheet` (
  `september_worksheetid` int(11) NOT NULL,
  `bus_operationsid09` int(11) DEFAULT NULL,
  `staff_operationsid09` int(11) DEFAULT NULL,
  `route_detailsid09` int(11) DEFAULT NULL,
  `no_oftrips` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `fuel_liters` varchar(45) DEFAULT NULL,
  `fuel_cost` varchar(45) DEFAULT NULL,
  `car_wash` varchar(45) DEFAULT NULL,
  `miscelleanous` varchar(45) DEFAULT NULL,
  `no_ofkms` varchar(45) DEFAULT NULL,
  `timestamp_ofentry` datetime DEFAULT NULL,
  PRIMARY KEY (`september_worksheetid`),
  KEY `bus_operationsid_idx` (`bus_operationsid09`),
  KEY `route_detailsid_idx` (`route_detailsid09`),
  KEY `staff_operationsid_idx` (`staff_operationsid09`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='September has fk from bus_operations, route_details and staff_operations, with the fk''s regeistered as 09, 09th Month';

-- --------------------------------------------------------

--
-- Table structure for table `services_page`
--

CREATE TABLE IF NOT EXISTS `services_page` (
  `services_pageid` int(11) NOT NULL,
  `content` text,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`services_pageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Services page for dynamic content of the service offered by the company.';

-- --------------------------------------------------------

--
-- Table structure for table `service_&_repair`
--

CREATE TABLE IF NOT EXISTS `service_&_repair` (
  `service_&_repairid` int(11) NOT NULL,
  `bus_detailsid_sr` int(11) DEFAULT NULL,
  `nature` varchar(45) DEFAULT NULL,
  `description` text,
  `total_cost` varchar(45) DEFAULT NULL,
  `date_of_previous` varchar(45) DEFAULT NULL,
  `date_of_next` varchar(45) DEFAULT NULL,
  `receipt_copy` blob,
  PRIMARY KEY (`service_&_repairid`),
  KEY `bus_detailsid_idx` (`bus_detailsid_sr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Service and Repiars done over time to the vehicles to ensure maximum operational capacity of the vehicles...';

-- --------------------------------------------------------

--
-- Table structure for table `speedgov_details`
--

CREATE TABLE IF NOT EXISTS `speedgov_details` (
  `speedgov_detailsid` int(11) NOT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `company_address` varchar(45) DEFAULT NULL,
  `company_email` varchar(45) DEFAULT NULL,
  `company_phoneno` varchar(45) DEFAULT NULL,
  `company_website` varchar(45) DEFAULT NULL,
  `fitted_by` varchar(45) DEFAULT NULL,
  `date_fitted` varchar(45) DEFAULT NULL,
  `certificate_copy` blob,
  PRIMARY KEY (`speedgov_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Speed Governor details of the respective speed govenor agencies that the company or the owner has purchased the gadget from...';

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `staff_detailsid` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `idno` int(11) DEFAULT NULL,
  `phoneno` varchar(45) DEFAULT NULL,
  `place_ofresidence` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kra_pinno` varchar(45) DEFAULT NULL,
  `health_insuranceno` varchar(45) DEFAULT NULL,
  `kin_firstname` varchar(45) DEFAULT NULL,
  `kin_lastname` varchar(45) DEFAULT NULL,
  `kin_middlename` varchar(45) DEFAULT NULL,
  `kin_typeofrelation` varchar(45) DEFAULT NULL,
  `kin_idno` int(11) DEFAULT NULL,
  `kin_phoneno` varchar(45) DEFAULT NULL,
  `kin_residence` varchar(45) DEFAULT NULL,
  `kin_location` varchar(45) DEFAULT NULL,
  `kin_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staff_detailsid`),
  UNIQUE KEY `idno_UNIQUE` (`idno`),
  UNIQUE KEY `kin_idno_UNIQUE` (`kin_idno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Staff details of the staff allied to the company';

-- --------------------------------------------------------

--
-- Table structure for table `staff_operations`
--

CREATE TABLE IF NOT EXISTS `staff_operations` (
  `staff_operationsid` int(11) NOT NULL,
  `staff_detailsid3` int(11) DEFAULT NULL,
  `staff_positionid3` int(11) DEFAULT NULL,
  `route_detailsid3` int(11) DEFAULT NULL,
  `bus_operationsid3` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_operationsid`),
  KEY `staff_detailsid_idx` (`staff_detailsid3`),
  KEY `bus_operationsid_idx` (`bus_operationsid3`),
  KEY `route_detailsid_idx` (`route_detailsid3`),
  KEY `staff_positionid_idx` (`staff_positionid3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Staff whom are assigned routes and buses... with their respective fk''s registered with 3';

-- --------------------------------------------------------

--
-- Table structure for table `staff_position`
--

CREATE TABLE IF NOT EXISTS `staff_position` (
  `staff_positionid` int(11) NOT NULL,
  `position_title` varchar(45) DEFAULT NULL,
  `position_description` varchar(45) DEFAULT NULL,
  `position_salaryclass` varchar(45) DEFAULT NULL COMMENT 'position_salaryclass: CLASS A, B, C, D etc...',
  PRIMARY KEY (`staff_positionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The occupation of the staff in the company.';

-- --------------------------------------------------------

--
-- Table structure for table `tlb_details`
--

CREATE TABLE IF NOT EXISTS `tlb_details` (
  `tlb_detailsid` int(11) NOT NULL,
  `route_name` varchar(45) DEFAULT NULL,
  `last_renewal` varchar(45) DEFAULT NULL,
  `next_renewal` varchar(45) DEFAULT NULL,
  `application_copy` blob,
  PRIMARY KEY (`tlb_detailsid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The transport and licensing board authorization to operate along certain specific routes';

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE IF NOT EXISTS `transaction_details` (
  `transaction_detailsid` int(11) NOT NULL,
  `customer_detailsid4` int(11) DEFAULT NULL,
  `event_detailsid4` int(11) DEFAULT NULL,
  `staff_operationsid4` int(11) DEFAULT NULL,
  `bus_operationsid4` int(11) DEFAULT NULL,
  PRIMARY KEY (`transaction_detailsid`),
  KEY `customer_detailsid_idx` (`customer_detailsid4`),
  KEY `event_detailsid_idx` (`event_detailsid4`),
  KEY `staff_operationsid_idx` (`staff_operationsid4`),
  KEY `bus_operationsid_idx` (`bus_operationsid4`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Keeping tabs on the event that a vehicle was used as well as log information... fk''s labelled 4';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `april_report`
--
ALTER TABLE `april_report`
  ADD CONSTRAINT `april_worksheetid1` FOREIGN KEY (`april_worksheetid04`) REFERENCES `april_worksheet` (`april_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `april_worksheet`
--
ALTER TABLE `april_worksheet`
  ADD CONSTRAINT `bus_operationsid04` FOREIGN KEY (`bus_operationsid04`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid04` FOREIGN KEY (`route_detailsid04`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid04` FOREIGN KEY (`staff_operationsid04`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `august_report`
--
ALTER TABLE `august_report`
  ADD CONSTRAINT `august_worksheetid08` FOREIGN KEY (`august_worksheetid08`) REFERENCES `august_worksheet` (`august_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `august_worksheet`
--
ALTER TABLE `august_worksheet`
  ADD CONSTRAINT `bus_operationsid08` FOREIGN KEY (`bus_operationsid08`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid08` FOREIGN KEY (`route_detailsid08`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid08` FOREIGN KEY (`staff_operationsid08`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD CONSTRAINT `body_builderid` FOREIGN KEY (`body_builderid`) REFERENCES `body_builder` (`body_builderid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `owner_detailsid` FOREIGN KEY (`owner_detailsid`) REFERENCES `owner_details` (`owner_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bus_maintenance`
--
ALTER TABLE `bus_maintenance`
  ADD CONSTRAINT `bus_detailsid2` FOREIGN KEY (`bus_detailsid2`) REFERENCES `bus_details` (`bus_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inspection_detailsid2` FOREIGN KEY (`inspection_detailsid2`) REFERENCES `inspection_details` (`inspection_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `insurance_detailsid2` FOREIGN KEY (`insurance_detailsid2`) REFERENCES `insurance_details` (`insurance_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mcsk_detailsid2` FOREIGN KEY (`mcsk_detailsid2`) REFERENCES `mcsk_details` (`mcsk_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `parking_detailsid2` FOREIGN KEY (`parking_detailsid2`) REFERENCES `parking_details` (`parking_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `psv_detailsid2` FOREIGN KEY (`psv_detailsid2`) REFERENCES `psv_details` (`psv_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid2` FOREIGN KEY (`routes_detailsid2`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `speedgov_detailsid2` FOREIGN KEY (`speedgov_detailsid2`) REFERENCES `speedgov_details` (`speedgov_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tlb_detailsid2` FOREIGN KEY (`tlb_detailsid2`) REFERENCES `tlb_details` (`tlb_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bus_operations`
--
ALTER TABLE `bus_operations`
  ADD CONSTRAINT `bus_detailsid1` FOREIGN KEY (`bus_detailsid1`) REFERENCES `bus_details` (`bus_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bus_statusid1` FOREIGN KEY (`bus_statusid1`) REFERENCES `bus_status` (`bus_statusid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid1` FOREIGN KEY (`route_detailsid1`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid1` FOREIGN KEY (`staff_operationsid1`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `december_report`
--
ALTER TABLE `december_report`
  ADD CONSTRAINT `december_worksheetid012` FOREIGN KEY (`december_worksheetid012`) REFERENCES `december_worksheet` (`december_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `december_worksheet`
--
ALTER TABLE `december_worksheet`
  ADD CONSTRAINT `bus_operationsid012` FOREIGN KEY (`bus_operationsid012`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid012` FOREIGN KEY (`route_detailsid012`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid012` FOREIGN KEY (`staff_operationsid012`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `february_report`
--
ALTER TABLE `february_report`
  ADD CONSTRAINT `february_worksheetid02` FOREIGN KEY (`february_worksheetid02`) REFERENCES `february_worksheet` (`february_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `february_worksheet`
--
ALTER TABLE `february_worksheet`
  ADD CONSTRAINT `bus_operationsid02` FOREIGN KEY (`bus_operationsid02`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid02` FOREIGN KEY (`route_detailsid02`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid02` FOREIGN KEY (`staff_operationsid02`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `january_report`
--
ALTER TABLE `january_report`
  ADD CONSTRAINT `january_worksheetid01` FOREIGN KEY (`january_worksheetid01`) REFERENCES `january_worksheet` (`january_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `january_worksheet`
--
ALTER TABLE `january_worksheet`
  ADD CONSTRAINT `bus_operationsid01` FOREIGN KEY (`bus_operationsid01`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid01` FOREIGN KEY (`route_detailsid01`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid01` FOREIGN KEY (`staff_operationsid01`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `july_report`
--
ALTER TABLE `july_report`
  ADD CONSTRAINT `july_worksheetid07` FOREIGN KEY (`july_worksheetid07`) REFERENCES `july_worksheet` (`july_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `july_worksheet`
--
ALTER TABLE `july_worksheet`
  ADD CONSTRAINT `bus_operationsid07` FOREIGN KEY (`bus_operationsid07`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid07` FOREIGN KEY (`route_detailsid07`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid07` FOREIGN KEY (`staff_operationsid07`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `june_report`
--
ALTER TABLE `june_report`
  ADD CONSTRAINT `june_worksheetid` FOREIGN KEY (`june_worksheetid`) REFERENCES `june_worksheet` (`june_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `june_worksheet`
--
ALTER TABLE `june_worksheet`
  ADD CONSTRAINT `bus_operationsid06` FOREIGN KEY (`bus_operationsid06`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid06` FOREIGN KEY (`route_detailsid06`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid06` FOREIGN KEY (`staff_operationsid06`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `march_report`
--
ALTER TABLE `march_report`
  ADD CONSTRAINT `march_worksheetid03` FOREIGN KEY (`march_worksheetid03`) REFERENCES `march_worksheet` (`march_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `march_worksheet`
--
ALTER TABLE `march_worksheet`
  ADD CONSTRAINT `bus_operationsid03` FOREIGN KEY (`bus_operationsid03`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid03` FOREIGN KEY (`route_detailsid03`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid03` FOREIGN KEY (`staff_operationsid03`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `may_report`
--
ALTER TABLE `may_report`
  ADD CONSTRAINT `may_worksheetid05` FOREIGN KEY (`may_worksheetid05`) REFERENCES `may_worksheet` (`may_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `may_worksheet`
--
ALTER TABLE `may_worksheet`
  ADD CONSTRAINT `bus_operationsid05` FOREIGN KEY (`bus_operationsid05`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid05` FOREIGN KEY (`route_detailsid05`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid05` FOREIGN KEY (`staff_operationsid05`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `november_report`
--
ALTER TABLE `november_report`
  ADD CONSTRAINT `november_worksheetid011` FOREIGN KEY (`november_worksheetid011`) REFERENCES `november_worksheet` (`november_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `november_worksheet`
--
ALTER TABLE `november_worksheet`
  ADD CONSTRAINT `bus_operationsid011` FOREIGN KEY (`bus_operationsid011`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid011` FOREIGN KEY (`route_detailsid011`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid011` FOREIGN KEY (`staff_operationsid011`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `october_report`
--
ALTER TABLE `october_report`
  ADD CONSTRAINT `october_worksheetid010` FOREIGN KEY (`october_worksheetid010`) REFERENCES `october_worksheet` (`october_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `october_worksheet`
--
ALTER TABLE `october_worksheet`
  ADD CONSTRAINT `bus_operationsid010` FOREIGN KEY (`bus_operationsid010`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid010` FOREIGN KEY (`route_detailsid010`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid010` FOREIGN KEY (`staff_operationsid010`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `september_report`
--
ALTER TABLE `september_report`
  ADD CONSTRAINT `september_worksheetid09` FOREIGN KEY (`september_worksheetid09`) REFERENCES `september_worksheet` (`september_worksheetid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `september_worksheet`
--
ALTER TABLE `september_worksheet`
  ADD CONSTRAINT `bus_operationsid09` FOREIGN KEY (`bus_operationsid09`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid09` FOREIGN KEY (`route_detailsid09`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid09` FOREIGN KEY (`staff_operationsid09`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_&_repair`
--
ALTER TABLE `service_&_repair`
  ADD CONSTRAINT `bus_detailsid_sr` FOREIGN KEY (`bus_detailsid_sr`) REFERENCES `bus_details` (`bus_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff_operations`
--
ALTER TABLE `staff_operations`
  ADD CONSTRAINT `bus_operationsid3` FOREIGN KEY (`bus_operationsid3`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `route_detailsid3` FOREIGN KEY (`route_detailsid3`) REFERENCES `route_details` (`route_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_detailsid3` FOREIGN KEY (`staff_detailsid3`) REFERENCES `staff_details` (`staff_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_positionid3` FOREIGN KEY (`staff_positionid3`) REFERENCES `staff_position` (`staff_positionid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `bus_operationsid4` FOREIGN KEY (`bus_operationsid4`) REFERENCES `bus_operations` (`bus_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_detailsid4` FOREIGN KEY (`customer_detailsid4`) REFERENCES `customer_details` (`customer_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `event_detailsid4` FOREIGN KEY (`event_detailsid4`) REFERENCES `event_details` (`event_detailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_operationsid4` FOREIGN KEY (`staff_operationsid4`) REFERENCES `staff_operations` (`staff_operationsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
