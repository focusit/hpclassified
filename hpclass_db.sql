-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2012 at 01:41 AM
-- Server version: 5.0.96
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hpclass_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `idAdvertisements` int(11) NOT NULL,
  `business_detail_Business_id` int(11) NOT NULL,
  `Type` varchar(45) collate latin1_german1_ci default NULL,
  `Source_URL` varchar(99) collate latin1_german1_ci default NULL,
  `Target_URL` varchar(99) collate latin1_german1_ci default NULL,
  `PublicationDate` date default NULL,
  `ExpiryDate` date default NULL,
  `Impressions` bigint(20) default NULL,
  PRIMARY KEY  (`idAdvertisements`),
  KEY `fk_Advertisements_business_detail1` (`business_detail_Business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_txn`
--

CREATE TABLE IF NOT EXISTS `ad_txn` (
  `idTxn` int(11) NOT NULL,
  `Advertisements_idAdvertisements` int(11) NOT NULL,
  `Page_URL` varchar(99) collate latin1_german1_ci default NULL,
  `Time_Stamp` date default NULL,
  `Clients_IP` varchar(16) collate latin1_german1_ci default NULL,
  `ViewerID` varchar(45) collate latin1_german1_ci default NULL,
  `Impressions` int(11) default NULL,
  PRIMARY KEY  (`idTxn`),
  KEY `fk_Ad_Txn_Advertisements1` (`Advertisements_idAdvertisements`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_detail`
--

CREATE TABLE IF NOT EXISTS `business_detail` (
  `Profile_id` int(11) NOT NULL auto_increment,
  `Owner` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Category` text NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Distt` varchar(20) NOT NULL,
  `Map` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY  (`Profile_id`),
  KEY `owner` (`Owner`),
  KEY `business_detail_ibfk_1` (`Owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=265 ;

--
-- Dumping data for table `business_detail`
--

INSERT INTO `business_detail` (`Profile_id`, `Owner`, `Title`, `Category`, `Email_id`, `Contact_No`, `Address`, `State`, `Distt`, `Map`, `Description`) VALUES
(65, 8, 'Why Tacmps', 'Art Classes;', 'yashwantt47911@gmail.com', '9459022104', 'Thodo Ground', 'HP', 'Solan', '', ' fghjkl'),
(66, 8, 'Solan Classified', 'Art Classes;', 'yashwantt47911@gmail.com', '9459022104', 'Near Thodo Ground', 'HP', 'Solan', '', ' All data at once'),
(67, 8, 'On Line Business Machine', 'Printing Machinery;Hardware Supplies;Computers;', 'raxit_kumar@yahoo.com', '94180-21659', 'Opp. Sahni Complex', 'HP', 'Solan', '', 'sale $ services of all types of laptops, desktop, printers, AMC, networking & Repairs...'),
(68, 1, 'Om Sai Business', 'Printers;Phone, FAX , EPABX;Passport Agents;Tour Packages, Vacation Deals;Transportation, Freight Forwarders;', 'omsaibaddi@gmail.com', '98162-06275', 'Gole Market, Sai Road, Baddi (H.P)', 'HP', 'Solan', '', ' A Complete Business Solutions Shop & Other services under one roof.'),
(69, 1, 'Spice World', 'Restaurants;', 'vipinjassal@gmail.com', '94786-66077,', 'Opp. Sindicate Bank, Rajgarh Road, Solan (H.P.)', 'HP', 'Solan', '', 'Spl. In:- Indian, Chinese & Continental\nContact for :- Home Delivery, B. Party, Marriage & Kitty Party.'),
(70, 1, 'E power Computer Solutions', 'Computers;', 'vipinjassal@gmail.com', '098161-71555', 'Byepass Road , Kather, Nr. Sabji Mandi, Solan (H.P', 'HP', 'Solan', '', ' Deals in : AMC, Computer services, Mantenance, Networking & Web Designing.'),
(71, 1, 'Dream Properties ', '', 'vipinjassel@gmail.com', '9816-072994', 'Bharat Apartments , Phase II, Rajgarh Road Solan (', 'HP', 'Solan', '', ' Deals in : Properties'),
(72, 1, 'Accelerate', 'Computers;Hardware Supplies;', 'manoj1983hp@hotmail.com', '94590-28838', 'Chowk Bazaar Solan (HP)', 'HP', 'Solan', '', ' Deals in : Hardware and Software Solutions\n Reliable - Dedicated Professional On-site service support'),
(73, 1, 'Konark Holiday Home', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '09418061882,', 'Brewery, Solan - 173214(HP)', 'HP', 'Solan', '', ' Deals in : Hotel and Restaurant\n '),
(74, 1, 'Bhardwaj Dental Clinic ', 'Doctors;', 'vipinjassal@gmail.com', '98160-23479 ', '"The Sun Beam ", Near M.C.Office Rajgarh Road, Sol', 'HP', 'Solan', '', ' Deals in : diagnosis, prevention, and treatment of diseases and conditions of the oral cavity. \n '),
(75, 1, 'Sai Sanjivni Of Medical Sciences', 'Nurses;', 'vipinjassal@gmail.com', '94180-87597 ', 'Opp. Courts, The Mall , Solan (H.P.)', 'HP', 'Solan', '', ' Deals in : Medical'),
(76, 1, 'Palace View', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '94180-47775 ', 'Bus Stand , Arki, Distt. Solan (H.P)', 'HP', 'Solan', '', ' Deals in : Hotel & Restaurant'),
(77, 1, 'Bhardwaj Dnsd Memorial Medical Centre', 'Doctors;', 'vipinjassal@gmail.com', '92185-21510', 'Near Zonal Hospital , solan (H.P.)', 'HP', 'Solan', '', ' Bhardwaj DNSD Memorial Medical Centre'),
(78, 1, 'SAP Computers', 'Computers;Hardware Supplies;', 'saphimachal@yahoo.co.in', '94180-03625 ', 'The Mall , Solan -173212(H.P)', 'HP', 'Solan', '', ' Deals in : Software Development , Hardware Maintenance & Sales, Data Processing'),
(79, 1, 'Korinns Hotel', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '01792-238806', 'Barog, Distt. Solan -173212(H.P.)', 'HP', 'Solan', '', ' Deals in : Hotels '),
(80, 1, 'Gupta Group(Reginal Distributor)', 'Computers;Mobile Services;', 'rohit.g@guptagroup.net', '98165-75000', '4-8, M.C. Complex, Nr. Mohan park, Solan ', 'HP', 'Solan', '', ' Deals in : Computer/Mobile Phones '),
(81, 1, 'HOTEL AASHRAY', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '01792-224528', 'The Mall, Solan(shimla Hills)-173212', 'HP', 'Solan', '', ' Deals in : Hotels'),
(82, 1, 'IPSUM', 'Computers;Career Events & Seminars;Career Counseling;', 'ipsumindia@gmail.com', '94181-60060', '26/1 Middle Bazar Shimla ', 'HP', 'Shimla', '', ' market company in Himachal Pradesh.....'),
(83, 1, 'Architect Amit Sood', 'Architects;', 'architectamitsood@gmail.com', '01792-222875', 'Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Planning interiors valuations'),
(84, 1, 'V Collection', 'Other Accessories;Luggage, Bags & Wallets;Footwear;Fashion Accessories;Garments & Clothing;', 'vipinjassal@gmail.com', '92185-85851,', 'Chowk Bazar ,Solan(H.P.)', 'HP', 'Solan', '', ' Deals in: Garments & Clothing, Fashion Accessories ,Footwear, Bags & Other Accessories '),
(85, 1, 'AwazIndia', 'Media & Entertainment;', 'sandeep@awazindia.com', '09736322349', 'Shanti Cottege Power House, Saproon, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Media & Entertainment'),
(86, 1, 'Mayur Hotel Bar & Restaurant', 'Hotel/Restaurant;', 'mayur@123himachal.com', '098160-55055', 'The Mall Solan- 173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Hotel/Restaurant'),
(87, 1, 'Computer & Laptops', 'Computers;Hardware Supplies;', 'mayur@123himachal.com', '9418032659', 'Shop No.105, First Floor, Anand Cinema Complex, Th', 'HP', 'Solan', '', ' Deals in: Hard Disks,Ram, Tv Tuner Cards , Modems, Networking cables, UPS 600VA,TFt, CRT Monitors, Sound cards, Printers, Mouse etc. '),
(88, 1, 'Him Medicare Centre', 'Doctors;', 'vipinjassal@gmail.com', '98160-24168,', 'Near District Court , Solan-173212', 'HP', 'Solan', '', ' Deals in : CT-SCAN, ULTRASOUND, X-RAY'),
(89, 1, 'Advance Dental Clinic', 'Doctors;', 'vipinjassal@gmail.com', '98168-61770,', 'Bhasin Building , Near NCC Office, Rajgarh Road,So', 'HP', 'Solan', '', ' Dentist'),
(90, 1, 'Tally Arena', 'Hardware Supplies;', 'pouravarora@gmail.com', '094180-83555', '1st Floor , Sahni Complex, Near hari mandir, Rajga', 'HP', 'Solan', '', ' Deals in :Hardware, Education & Software services group '),
(91, 1, 'Thakur Studio', 'Printing Machinery;', 'vipinjassal@gmail.com', '94180-16391', 'Opp.Girls School, The Mall , Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Commercial and corporate photography, electronic pre-press and stock photography.'),
(92, 1, 'GURUKUL International School', 'Schools;', 'mathurpreet2007@yahoo.com', '94188-28018', 'By Pass Road Solan(H.P.)', 'HP', 'Solan', '', 'GURUKUL International School (Affl. to CBSE, Delhi)'),
(93, 1, 'Vishvkarma Furniture Industry', 'Furniture Repair Centers;', 'vipinjassal@gmail.com', '94180-24382,', 'Rajgarh Road , Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Wooden & Steel Furniture, Wooden Doors, Mattresses of sleep well kurlon, Rcron Fiber & Pillows '),
(94, 1, 'Wonderland Himachal', 'Train Ticket Agents;Airline Tickets;', 'rajiv.wonderlandhimachal@gmail', '94180-77750,', 'NH-22, Chambaghat, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Air Tickets, Bus Tickets, Car Rental, International tour Packages & Hotel Bookings'),
(95, 1, 'MASCOT', 'Career Events & Seminars;Coaching Classes;', 'mascotthementor@gmail.com', '9882158188, ', '2nd Floor , The mall Solan-173212', 'HP', 'Solan', '', ' Deals in: Memory Enhancement, Spoken English, Competition Exams & Spoken English'),
(96, 1, 'Shiva Property Consultant', 'Consultants;', 'vipinjassal@gmail.com', '01792-223533', 'Rajgarh Road , Nr.Municipal Office, Solan (H.P.)', 'HP', 'Solan', '', ' Deals in: Commercial, Residential Plot, Flats, Build up Houses, agricultural Land ,Orchards and To-Let Service'),
(97, 1, 'i-SofTech', 'IT, Computer Services;IT/ Telecom - Software;', 'isthakur@i-softech.net', '94184-56807', 'Village Mowri, PO Barog, Distt Solan(H.P.) 173211', 'HP', 'Solan', '', 'Deals in : Web Hosting, Web Development, Infrastructure Deployment, Software development, IT Consultancy & IT Service Outsourcing '),
(98, 1, 'LibraMattres', 'Home Furniture;Furniture Repair Centers;', 'vipinjassal@gmail.com', '98160-21582', 'Rajgarh Road Solan- 173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Coir, Truefoam, Combo Mattress, Yogomat, Pillow, Cushion & Adhesive'),
(99, 1, 'Dhir Enterprises', 'Service Engineers;', 'vipinjassal@gmail.com', '97360-53097,', 'Circular  Road, Solan-173212', 'HP', 'Solan', '', ' Deals in: Assembling Trading Wholesale Servicing'),
(100, 1, 'Kashish Technology', 'Computers;', 'vipinjassal@gmail.com', '94181-76248,', 'kirti Complex, Chowk Bazar, Solan,(H.P.)', 'HP', 'Solan', '', ' deals in :computers & Computer languages'),
(101, 1, 'CHARLIE FURNITURE HOUSE', 'Home Furniture;Office Furniture & Fittings;', 'vipinjassal@gmail.com', '98160-83667', 'Kather, Bye Pass Road ,Solan(H.P.)', 'HP', 'Solan', '', ' Deals in :A complete House Of Office & Home Furniture'),
(102, 1, 'DISHA EDUCATION CENTRE', 'Career Counseling;Coaching Classes;', 'dishaeducationcentre@rediffmai', '94181-17467,', 'Near Bank Of Baroda, The Mall, Solan(H.P.)', 'HP', 'Solan', '', 'Coaching for : AIEEE/PMT/MBA/MAT/MCA/HM/PAT'),
(103, 1, 'DISHA EDUCATION CENTRE', 'Career Counseling;Coaching Classes;', 'dishaeducationcentre@rediffmai', '94181-17467,', 'Near Bank Of Baroda, The Mall, Solan(H.P.)', 'HP', 'Solan', '', 'Coaching for : AIEEE/PMT/MBA/MAT/MCA/HM/PAT'),
(104, 1, 'SOLAN RADIO SERVICES', 'Media & Entertainment;', 'vipinjassal@gmail.com', '01792-220078', 'The Mall, Solan- 173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Philips, Sansui, Videocon, Hyundai, Onida, Usha, Ahuja, Titan & Timex'),
(105, 1, 'SOLAN RADIO SERVICES', 'Media & Entertainment;', 'vipinjassal@gmail.com', '01792-220078', 'The Mall, Solan- 173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Philips, Sansui, Videocon, Hyundai, Onida, Usha, Ahuja, Titan & Timex'),
(106, 1, 'MEHUL ENTERPRISES', 'Home Furniture;', 'vipinjassal@gmail.com', '98160-77794,', 'The Mall, Solan(H.P.)', 'HP', 'Solan', '', 'Deals in: Playwood,Sunmica,Baliyan,Timber & Flooring'),
(107, 1, 'BLESSING Tailor', 'Tailors;', 'vipinjassal@gmail.com', '01792-223726', 'Chowk Bazar, Solan(H.P.)', 'HP', 'Solan', '', ' Specialist in :Ladies & Gents'),
(108, 1, 'Hotel Oak Wood', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '01792-248315', 'Mihani, Chail, Distt.Solan-173217(H.P.)', 'HP', 'Solan', '', ' Deals in : Hotel/Restaurant'),
(109, 1, 'DUTTA GRAPHICS & OFFSET PRINTERS', 'Designers;', 'duttagraphics@yahoo.com', '09816312929', 'Chambaghat, Solan Himachal Pardesh-173213', 'HP', 'Solan', '', ' Deals in : Graphics'),
(110, 1, 'Kiran Tour & Travels', 'Airline Tickets;', 'vipinjassal@gmail.com', '92185-00352', 'The mall, Solan-173212', 'HP', 'Solan', '', ' Deals in : Air ticket,Rail ticket,Foreign Exchange,Visa, Hotel Booking etc'),
(111, 1, 'HIMALAYAN GROUP OF INDUSTRIES', 'Industrial Equipment;', 'sharma_gaurav01@yahoo.com', '9816500065, ', 'Saproon, Solan-173211', 'HP', 'Solan', '', ' Deals in : Himalayan Pipe industries, Himalayan PlasticsLTD, Kulja industries LTD., solan (H.P.)'),
(112, 1, 'HIMANI  RESORTS', 'Hotels & Resorts;', 'vipinjassal@gmail.com', '01792-225470', 'The mall , Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in : Hotels/Resorts'),
(113, 1, 'THE LEGEND ', 'Designers;', 'vipinjassal@gmail.com', '9816033910', 'The mall , Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Printing, Designing & Advertiseing\nSpecialist: creative Wedding cards, Mundan/Birthday cards, Jagran Cards, Visiting Cards, Magazine, Colour Printout,Photostat,Lamination & Spiral Binding'),
(114, 1, 'Hotel Tip Top', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '9418139442', 'Red Cross Road,Sunny Side  , Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in :Hotels'),
(115, 1, 'MITHOOS', 'Accessories;Garments & Clothing;', 'vipinjassal@gmail.com', '01792-222277', 'The Ganj , Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in : Clothing & Garments'),
(116, 1, 'Gfive', 'Mobile Phones;', 'vipinjassal@gmail.com', '98166-68872,', 'The mall , Solan Opp. Murari market-173212(H.P.)', 'HP', 'Solan', '', ' deals in : Mobile Phones'),
(117, 1, 'Sai World Travel Services', 'Travel Agents & Tour Operators;', 'saiworldtravel@gmail.com', '941851877, 0', 'Opp.Himani Resort, The Mall,Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Tarvel Services'),
(118, 1, 'Sharma Digital System', 'Computers;', 'sharma.digital11@gmail.com', '98171-67721,', 'Viyas Complex , Kotla Nala, Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in: old & New computers,Laptops & Printers \nAlso Contact For : AMC & Networking'),
(119, 1, 'HOTEL UTSAV', 'Hotel/Restaurant;', 'vipinjassal@gamail.com', '94180-20777', 'The Mall Solan ,(H.P.)', 'HP', 'Solan', '', ' Deals in : Pure vegetarian'),
(120, 1, 'Nutrition 4 Health', 'Health Care Products;', 'vipinjassal@gamail.com', '9882431000, ', 'Near Mathura Radio The Mall Solan ,(H.P.)', 'HP', 'Solan', '', ' Deals in : Health Care Products'),
(121, 1, 'SAHNI BOOT HOUSE ', 'Footwear;', 'vipinjassal@gamail.com', '9218760007, ', 'Nr.Mathura Radio, The Mall, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Footware'),
(122, 1, 'International Institute  of Design & Animation', 'Designers;', 'vipinjassal@gmail.com', '98169-98288', 'Near Thodo Ground, Rajgarh Road Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in : Design & Animation'),
(123, 1, 'NEELAM GUEST HOUSE ', 'Guest Houses, Service Apartments;', 'vipinjassal@gmail.com', '094180-13543', 'Barog bye pass, Bara,Distt.Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Guest House'),
(124, 1, 'VIDYA INFRASTRUCTUR & DEVELOPERS', 'Engg./ Site Engg./ Civil Engg.;Consultants;Architects;', 'vipinjassal@gmail.com', '9816450000', 'Near Mohan Park Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Engineers, Consultants , Architects & Project Management'),
(125, 1, 'PURAANI DILLI ', 'Dhabas & Other joints;', 'vipinjassal@gmail.com', '9857678357, ', 'Near Himani Resorts, Opp.Petrol Pump, Saproon Mall', 'HP', 'Solan', '', ' Deals in : Veg. & Non Veg., Breakfast, Lunch & Dinner'),
(126, 1, 'HOTEL PARK SUN PLAZA', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '9857678357, ', 'Near Summar Hall, Kalka-Shimla, Highway,Chambaghat', 'HP', 'Solan', '', ' Deals in: Hotels'),
(127, 1, 'Simran Coach', 'Transportation, Freight Forwarders;', 'simrancoach@yahoo.com', '9816055755,0', 'Above hotel Premjees, Old Bus Stand,Solan(H.P.)', 'HP', 'Solan', '', ' Deals In : Transportation'),
(128, 1, 'CHANAKYA EATING POINT', 'Hotel/Restaurant;', 'rajan_chanakya@yahoo.com', '98160-26232,', 'The Mall Solan-173212(H.P.)', 'HP', 'Solan', '', ' Deals in: Eating'),
(129, 1, 'SHIVAM Book Sellers & Stationers', 'Book Shops;', 'vipinjassal@gmail.com', '98173-41556,', 'Old Bus Stand, The Mall Solan(H.P)', 'HP', 'Solan', '', ' Deals in : Book Sellers & Stationers '),
(130, 1, 'NAVJEEVAN NURSING HOME', 'Hospitals, Clinics, Nursing Homes;', 'vipinjassal@gmail.com', '094180-22212', 'Rajgarh Road , Solan(H.P.)', 'HP', 'Solan', '', 'Hospitals,Clinics & Nursing Homes'),
(131, 1, 'IDBI BANK LTD.', 'Banks;', 'cr.dogra@idbi.co.in', '9459017853, ', 'The Mall,Solan (H.P.)-173212', 'HP', 'Solan', '', 'IDBI Bank ATM in Solan, Himachal Pradesh. List of IDBI Bank ATMs near Solan with address. ATMs of IDBI Bank in Solan district.'),
(132, 1, 'J.J.JEWELLERS', 'Jewellery;', 'vipinjassal@gmail.com', '8988056737', 'Opp. Sai Communication, Near Thodo Ground, Rajgarh', 'HP', 'Solan', '', ' Deals in: Mfrs. of Gold & Silver Jewellery 1005 Returning Gurrantee & Lucky Stone Also Available'),
(133, 1, 'SACHDEVA COLLEGE', 'Coaching Classes;', 'parvesh.chauhan@hotmail.com', '098570-07007', '1st Floor, Prashar Complex, Near D.C. Office, Rajg', 'HP', 'Solan', '', 'Coaching classes for full time and correspondence courses for Medical, IIT-JEe and other Engineering  '),
(134, 1, 'SHIV BAKERS', 'Bakeries & Confectionery;', 'vipinjassal@gmail.com', '98160-22376,', 'Near Murari Market, The mall, Solan (H.P.)', 'HP', 'Solan', '', ' Our Speciality :Birthday (Designers) Cake Latest design of your choice\nVISIT for fresh & delicious : Patties, Pastries, Biscuits, Burger, Pizzas, Muffines & Snacks'),
(135, 1, 'LIC (Life Insurance Corporation Ltd.)', 'Insurance;', 'vipinjassal@gmail.com', '9218698616', '1st Floor , Sahni Complex , Opp. Govt. Girls Schoo', 'HP', 'Solan', '', ' Comprehensive life insurance policy with stress to the rural areas and to the socially and economically backward classes.'),
(136, 1, 'SHOOLINI UNIVERSITY', 'Universities;', 'kcrojhe@hotmail.com', '098820-44749', 'Shoolini University of Biotechnology and Managemen', 'HP', 'Solan', '', ' Shoolini University Of Biotechnology and Management Sciences'),
(137, 1, 'DURGA SHIKSHA NIKETAN', 'Coaching Classes;', 'dsnsolan@gmail.com', '98572-51035,', 'Opp.Zonal Hospital, Above Durga Medicos, Solan (H.', 'HP', 'Solan', '', ' Coaching For : IIT-JEE, AIEEE, PMT'),
(138, 1, 'KRITIKA ENTERPRISES', 'Production/Maintenance/ Packaging;', 'kritikaenterprisessolan@yahoo.', '98579-19043,', 'Dev Kunj , Upper Surya Vihar, Rajgarh Road , Solan', 'HP', 'Solan', '', ' Deals in :International Packaging Products '),
(139, 1, 'COLOURS', 'Cosmetics, Toiletries;', 'info.colours@gmail.com', '01792-222711', 'Upper Bazar , Solan- 173212', 'HP', 'Solan', '', ' Deals in : Cosmetics, Gifts, Toys, Bangles, Wedding Accessories ,Art Jewelry, DisposablePlates and Glassees And Maniari\nSEASONAL WHOLESALE FOR : Rakhi, Candles, Art Flowers, Paper Decoration & Diwali items  '),
(140, 1, 'ICE SPICE', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '01792-224935', 'Opp.Children Park, The Mall, Solan-173212 ', 'HP', 'Solan', '', ' Hotels'),
(141, 1, 'SIP N SNAX Bar & Restaurant', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '94184-60046,', 'Opp.M.C.Office,Nr.NCC Office, Rajgarh Road , Solan', 'HP', 'Solan', '', ' BAR & Restaurant'),
(142, 1, 'PARAM Infotech', 'Printers;Computers;', 'infotecparam@mailcity.com', '9816199557', 'Shop No.12,Anand Cinema Complex, The Mall Solan(H.', 'HP', 'Solan', '', ' Deals in : Computer System, Peripherals, Printers, U.P.S. Cartridges Refilling etc.'),
(143, 1, 'ANCHOR', 'Sales/Business Development;', 'jitender.kapoor85@gmail.com', '01792-232565', 'Commercial complex, Sec.1A, National Highway, Near', 'HP', 'Solan', '', ' Sales/Business Development'),
(144, 1, 'ISHA PRINTING SHOPPE', 'Computers;Paintings & Collectibles;', 'arvindkalra@ymail.com', '9418091019, ', '1st Floor,MC complex, Circular Road, Solan-173212', 'HP', 'Solan', '', ' Deals in : Multicolour Offset, Printing, Screen Printing, Computer Designing, Wedding Cards'),
(145, 1, 'VICKY ENTERPRISES', 'Gifts & Flower Delivery;Kitchen Appliances;', 'vipinjassal@gmail.com', '98161-18472,', 'Maya Niwas,Nr. Dalda Colony, Chowk Bazar, Solan(H.', 'HP', 'Solan', '', ' Deals in : Plastic Ware, Kitchen Ware, Glass Ware, House Hold, Melamine, Gift Items, Soft Toys & Play Toys'),
(146, 1, 'JIT Aluminium Kraft', 'Home Furnishings;Furniture Repair Centers;', 'vipinjassal@gmail.com', '98170-86962,', 'Opp. M.C. Office , Rajgarh Road Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Aluminium Door, Windows & Partitions, P.V.C False Ceiling , P.V.C Wall Penalling And all type of Coloured, Stain & Fusion Glass. '),
(147, 1, 'MICROCOM COMPUTERS', 'Computers;', 'microcom_solan@yahoo.com', '9876102427, ', 'Shop No. 1, The City Centre Plazza The Mall,Solan,', 'HP', 'Solan', '', ' Deals in : Computers'),
(148, 1, 'HOTEL PARAGON PALACE', 'Hotel & Restaurant Supplies;Hotel/Restaurant;', 'booking@hotelparagonpalace.com', '01792-226666', 'The Mall Solan (H.P.) ', 'HP', 'Solan', '', ' Deals in : Hotels/Restaurant'),
(149, 1, 'HOTEL CEDAAR', 'Hotel/Restaurant;Hotel & Restaurant Supplies;', 'info@hotelcedaar.com', '01792-248549', 'Chail,Distt. Solan (H.P.) -173217', 'HP', 'Solan', '', ' Hotels/Restaurant'),
(150, 1, 'HOTEL EKANT', 'Hotel/Restaurant;Hotel & Restaurant Supplies;', 'hotelekant@yahoo.co.in', '094180-48378', 'Chail,Shimla Hills (H.P.) -173217', 'HP', 'Solan', '', ' Hotels/Restaurant'),
(151, 1, 'HOTEL EKANT', 'Hotel/Restaurant;Hotel & Restaurant Supplies;', 'hotelekant@yahoo.co.in', '094180-48378', 'Chail,Shimla Hills (H.P.) -173217', 'HP', 'Solan', '', ' Hotels/Restaurant'),
(152, 1, 'TATA   AGRICO', 'Sales/Business Development;Steel Plant;', 'harishbros@rediffmail.com', '092185-20772', 'The Ganj, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in :Sales/Business Development'),
(153, 1, 'BHAGYODYA JYOTISH KENDRA', 'Astrology;', 'vipinjassal@gmail.com', '9418022394, ', 'The Mall, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in: Astrological Consultations, Predictions, Computer Horoscopes, Varshphal, Matchmaking, Muhurla & Prasan Phal, Accuprssure Health Systems & Lucky Gem Stones'),
(154, 1, 'BHAGYODYA JYOTISH KENDRA', 'Astrology;', 'vipinjassal@gmail.com', '9418022394, ', 'The Mall, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in: Astrological Consultations, Predictions, Computer Horoscopes, Varshphal, Matchmaking, Muhurla & Prasan Phal, Accuprssure Health Systems & Lucky Gem Stones'),
(155, 1, 'STC', 'Paintings & Collectibles;Music Systems & Car Stereos;Electronics;', 'vipinjassal@gmail.com', '098163-37046', 'The Mall, Solan(H.P.)-173212', 'HP', 'Solan', '', ' Deals in : Electronics Electrical, Computer Peripherals, Chemicals, Pharnaceutical, Printing solutions, Interior Decorator,& All kind of job work & General Order Supplier etc..'),
(156, 1, 'SHREE SAI PAPER PRODUCTS', 'Paintings & Collectibles;', 'vipinjassal@gmail.com', '09816033910,', 'Chambaghat,Tehsil & Distt.Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Wedding Cards, Invitation Cards, Visiting Cards, Carry Bags, Boxes, Envelops Of Different Sizes, Office File/folder & different kinds of packaging materials.'),
(157, 1, 'AAIT INSTITUTE', 'Coaching Classes;', 'solan@aait.co.in', '9882561128', 'Sahni Complex,Rajgarh Road, Kotla Nala,.Solan(H.P.', 'HP', 'Solan', '', ' Deals in : Coaching For all Subjects'),
(158, 1, 'SHOOLINI BINDING WORKS', 'Paintings & Collectibles;', 'vipinjassal@gmail.com', '98163-61361', 'Shop No. 211,M.C. Complex, circular Road, Solan', 'HP', 'Solan', '', ' Deals in : All types of Book Binding, Thesis, Spiral & Other Binding Jobs'),
(159, 1, 'ARORA POLYMERS', 'Home Furnishings;', 'vipinjassal@gmail.com', '94180-44296,', 'Industrial area, Baddi, 173205,Distt.Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : LDPE SHEETS, POLYTHENE BAGS FOR INDUSTRIAL USE ONLY'),
(160, 1, 'HIMACHAL SECURITY SERVICE', 'Security Services, Guards;', 'vipinjassal@gmail.com', '086792-62522', 'Cabin-6,IInd Floor, Old Income Tax Building. Opp. ', 'HP', 'Solan', '', ' Contact For Worker'),
(161, 1, 'PINE HILLS ECO CAMP', 'Health & Pharma;Health Care Products;', 'harwantkrishan@gmail.com', '9218666625, ', 'Chewa(Barog),PO: Kumharhatti, Solan(HP)-173229', 'HP', 'Solan', '', ' Pine Hilss Eco Camp'),
(162, 1, 'PINE HILLS ECO CAMP', 'Health & Pharma;Health Care Products;', 'harwantkrishan@gmail.com', '9218666625, ', 'Chewa(Barog),PO: Kumharhatti, Solan(HP)-173229', 'HP', 'Solan', '', ' Pine Hills Eco Camp'),
(163, 1, 'BABA INTERNATIONAL ', 'Paintings & Collectibles;', 'babainternational01@gmail.com', '094594-95222', 'Vill.Juddi Kalan Baddi, Near Primary School Teh.Ba', 'HP', 'Solan', '', 'Deals in: Manufacturers & Supplier of : High Quality Paper Corrugated(Plain & Printed) Boxes Sheets & Rolls'),
(164, 1, 'BABA INTERNATIONAL ', 'Paintings & Collectibles;', 'babainternational01@yahoo.com', '094594-95222', 'Vill.Juddi Kalan Baddi, Near Primary School Teh.Ba', 'HP', 'Solan', '', 'Deals in: Manufacturers & Supplier of : High Quality Paper Corrugated(Plain & Printed) Boxes Sheets & Rolls'),
(165, 1, 'CONTRACTORS & DEVELOPERS', 'Contractors;', 'dangsumit@gmail.com', '92187-00012,', 'Opp.Baghat Bank, Rajgarh Road,Solan', 'HP', 'Solan', '', ' Deals in : contract/Developers '),
(166, 1, 'COLOR PRINT HUB', 'Computers;', 'vipinjassal@gmail.com', '9805654455', 'First Floor Bhagnal Complex Near Tehsil, Kotlanala', 'HP', 'Solan', '', ' Deals in: color print Hub'),
(167, 1, 'HAPPY HOUSE', 'Garments & Clothing;Fashion, Garments;', 'vipinjassal@gmail.com', '9318992929,9', 'Circular Road, Solan', 'HP', 'Solan', '', ' Deals in : Wholesale & Retail cloth Merxhant'),
(168, 1, 'SIFT Solan Centre', 'Fashion Accessories;', 'vipinjassal@gmail.com', '9318843102,9', 'Rajgarh Road,Kotlanala, Solan', 'HP', 'Solan', '', 'Shokinda institute of fashion technology'),
(169, 1, 'AMBA  Angle & Channel', 'Eye Care Products;Direct to Home (DTH) Connection;', 'vipinjassal@gmail.com', '01792-220372', 'Bye Pass Solan,(H.P.)', 'HP', 'Solan', '', ' Channel'),
(170, 1, 'HOTEL FALCON CREST', 'Hotels & Resorts;Hotel/Restaurant;', 'hotelfalconcrest@gmail.com', '94180-56242,', 'Kalka-Shimla Highway Kandaghat, Distt.Solan(H.P.)', 'HP', 'Solan', '', '  Deals in : hotels'),
(171, 1, 'SATYA JEWELLERS', 'Jewellery;', 'vipinjassal@gmail.com', '01792-220495', 'The Mall , Solan (H.P.)', 'HP', 'Solan', '', ' Deals in : Jewellry'),
(172, 1, 'GIGO BYTES', 'Computers;', 'sam@gigobytes.com', '9816022999,1', 'Nr.Distt.Court,The Mall, Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Computer/Laptops'),
(173, 1, 'L.R.Group Of Institutes', 'Pharma, Bio Tech/ R&D/ Scientist;', 'lrsolan@gmail.com', '094189-07700', 'Rajgarh Road, Solan-173223(HP)', 'HP', 'Solan', '', 'COURSES OFFERED : B.Tech. , B.Pharma, Polytechnic, LLB, BBA, MBA, BA, B.ED, BCA, MCA'),
(174, 1, 'CHANGAR STONE CRUSHER', 'Media & Entertainment;', 'vipinjassal@gmail.com', '98160-38133,', 'Village.Plasra Gharhwa, P.O. Nangal, Teh.Nalagarh,', 'HP', 'Solan', '', ' Deals in: Media & Entertainment'),
(175, 1, 'KAMAL ELECTRICALS', 'Electronics;', 'kamalelectricals.baddi@gmail.c', '094184-86395', 'Opp.Abhishek Hotel, Near Bus Stand, VPO Baddi,Teh.', 'HP', 'Solan', '', ' Specialist in: Installation Industry Units, HT/LT Works, Sub-Station, DG Set & All Types Of Electrical Works'),
(176, 1, 'MD INDUSTRIAL TRAINING CENTRE', 'Industrial Equipment;', 'mdvtc_st@rediffmail.com', '094181-47147', 'Via. Rajgarh Sirmour-173104', 'HP', 'Sirmour', '', ' Industrial Training '),
(177, 1, 'AXIS BANK ', 'Banks;', 'sachin.verma@axisbank.com', '94180-13534', 'Durga Cottage, SDA Complex, Kasumpti, Shimla-17100', 'HP', 'Shimla', '', ' Bank'),
(178, 1, 'HIMALAYA ENTERPRISES', 'Photocopiers;', 'himalaya.baddi@gmail.com', '98160-66700', 'Baddi(H.P.) 173205', 'HP', 'Solan', '', ' Deals in : Colour Photostat upto A3 Size, Lamination, Binding,H.P. Industrial Directory, Policy & Indl.Stationery'),
(179, 1, 'NATRAJ DIGITAL STUDEO', 'Video Cameras, Handycams;', 'vipinjassal@gmail.com', '09418455208', 'Near Hindu Ashram, Nahan, Distt. Sirmour(H.P.)', 'HP', 'Sirmour', '', ' Specialist in : Steel Photo Video Coverage Marrige & Birthday Party, School & College Functions'),
(180, 1, 'GURU SURBHI', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '98056-86708,', 'Near y-Point , NH-72,Ward No.-6, Paonta sahib, Dis', 'HP', 'Sirmour', '', ' Deals in :Hotel/Restaurant'),
(181, 1, 'DARLA SERVICE STATION', 'Operations/ Customer Service;', 'vipinjassal@gmail.com', '98162-48748', 'N.H.88, Shimla,-Manali Highway Darlaghat, Distt. s', 'HP', 'Solan', '', ' dealer: Indian Oil Corporation Ltd.'),
(182, 1, 'DEV BHUMI TMT', 'Steel Plant;', 'nalagarh_steel@yahoo.in', '092165-03217', 'Village Dadi Kaniya, Nalagarh, Distt.Solan(H.P.)', 'HP', 'Solan', '', ' Deals in: TMT BARS/ANGLES/FLATS/WIRES'),
(183, 1, 'SHIVA HOSPITAL', 'Hospitals, Clinics, Nursing Homes;', 'vipinjassal@gmail.com', '94183-24069,', 'Opp.Jandev Complex, Rajgarh Road, Solan', 'HP', 'Solan', '', ' Facilities Available: * All Types of Ear, Nose, Throat Voice Box Surgery \n                       * Endoscopic Surgery & Cosmetic Surgery of Nose & Faces all types\n                       * Hearing AID & Speech Therapy Centre'),
(184, 1, 'SHIVA HOSPITAL', 'Hospitals, Clinics, Nursing Homes;', 'vipinjassal@gmail.com', '94183-24069,', 'Opp.Jandev Complex, Rajgarh Road, Solan', 'HP', 'Solan', '', ' Facilities Available: * All Types of Ear, Nose, Throat Voice Box Surgery \n                       * Endoscopic Surgery & Cosmetic Surgery of Nose & Faces all types\n                       * Hearing AID & Speech Therapy Centre'),
(185, 1, 'THE BAGHAL LAND LOOSERS TRANSPORT CO-OP. SOCIETY L', 'Transportation, Freight Forwarders;', 'vipinjassal@gmail.com', '01796-246490', 'Teh.Arki, Distt. Solan(H.P.)-171102', 'HP', 'Solan', '', 'Deals in : Tarnsports'),
(186, 1, 'NAINA HILL RESORT', 'Hotel/Restaurant;', 'nainahillresort@yahoo.co.in', '94598-65546,', 'Vill.Mashobra, Kasauli-173204(H.P.)', 'HP', 'Solan', '', ' Deals in: Hotels / Restaurant'),
(187, 1, 'GAB', 'Accessories;', 'vipinjassal@gmail.com', '01792-226595', 'Solan (H.P.)', 'HP', 'Solan', '', ' Deals in : BAGS, PURSES, TROLLY, WALLETS & DUFFLE'),
(188, 1, 'MONTE CARLO', 'Garments & Clothing;', 'mccustomer@owmnahar.com', '0179-2220141', 'Opp. Hotel Paragon, The Mall, ', 'HP', 'Solan', '', ' Deals in : Pullovers, Cardigans, Formal Suits, Jackets, Sweat Shirts, Tracksuits, Shirts, Trousers, Denims, Shawls, Thermals, Accessories For Men & Women'),
(189, 1, 'JAYPEE CEMENT', 'Cement Plants;', 'vipinjassal@gmail.com', '01796-223299', 'Jhcgbu, Bagga Distt. Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : Cement(In the most general sense of the word, a cement is a binder, a substance that sets and hardens independently, and can bind other materials together.)'),
(190, 1, 'ISHA COMPONENTS', 'Electronics;', 'vipinjassal@gmail.com', '01792-233033', '16, Sector 1,Near State Bank Of Patiala, Parwanoo ', 'HP', 'Solan', '', ' Deals in : Solder, Flux, I.P.A., DIODs, Capacitors, CFR, MFR, MOR, WWR and Electronics Components'),
(191, 1, 'INTERNATIONAL COMPONENTS', 'Electronics;', 'vipinjassal@gmail.com', '01792-233033', 'Kasauli Road, Sector-5, Prwanoo 173220, Distt. Sol', 'HP', 'Solan', '', 'Manufactures Of : Wire Wound Resistors'),
(192, 1, 'GROVER EYE & E.N.T. HOSPITAL', 'Hospitals, Clinics, Nursing Homes;', 'drgrover909@hotmail.com', '01792-222970', 'The Mall, Solan, H.P.(Near children Park Parking, ', 'HP', 'Solan', '', ' Deals in : A-Scan Ultrsound/Zoom Operating Microscope, Yag Lazer for After Catarct(jhili) & Glaucome(Kala Motia), Computerised Eye Testing With Latest Nikon Autorefractor and  Cyber Charts Exercise for Squint & Lazy Eyes., Conatct Lenses & Artificial Eyes'),
(193, 1, 'DASHMESH TRANSPORT COMPANY', 'Transportation, Freight Forwarders;', 'dashmesh95@gmail.com', '09805100095,', 'Near Shitla Mata Mandir, Sector-2 Parwanoo-173220(', 'HP', 'Solan', '', ' Deals in: Transportation'),
(194, 1, 'CIPLA LTD.', 'Health Care Products;', 'vipinjassal@gmail.com', '01795-246051', 'Vill. Malpur, Baddi Nalagarh Distt.Solan', 'HP', 'Solan', '', ' Deals in : Medicins'),
(195, 1, 'LAKSHAY EDUCATION SOCIETY', 'Coaching Classes;', 'vipinjassal@gmail.com', '94180-32906', 'Arki, Distt. Solan (H.P.)', 'HP', 'Solan', '', ' Deals in: Coaching All classes'),
(196, 1, 'VERMA SONS JEWELLERS', 'Jewellery;', 'vipinjassal@gmail.com', '01792-220955', 'Chowk Bazar, Solan', 'HP', 'Solan', '', ' Deals in: Gold, Diamond, Silver Jewellery'),
(197, 1, 'LUXMI ASSOCIATES', 'Fitness & Activity;', 'vipinjassal@gmail.com', '94180-23128', 'Rajmahal Bye Pass, Saproon-173211 Solan', 'HP', 'Solan', '', ' Deals in : Fitness & Activity'),
(198, 1, 'BCC FUBA INDIA LIMITED', 'Electronics;', 'ssangwan@bccfuba.com', '9218423157,0', '4th km Swarghat Road, Nalagarh-174101 Distt. Solan', 'HP', 'Solan', '', ' Manufacturers Of: Printed Circuit Boards, SINGLE SIDED, DOUBLE SIDED and MULTILAYERED(Upto 8 layers)'),
(199, 1, 'B.L. CENTRAL PUBLIC Sr. Sec. School', 'Schools;', 'blprincipalkunihar@yahoo.com', '01796-260031', 'Kunihar , Distt. Solan', 'HP', 'Solan', '', ' Salient Features:> Well Qualified, Experienced and dedicated staff with EPF facilities.\n                  > School provides facilities of Water cooler,Purification, Plant, Fan, Tubes in \n                    each rooms\n                  > 100% result of board classes every year and obtained  Merit position in Distt\n                    and state.\n                     '),
(200, 1, 'GOYAL TRADING CO.', 'Direct to Home (DTH) Connection;Washing Machines;Televisions (TVs);Refrigerators;Electronics;', 'goyaltc@yahoo.co.in', '01792-234370', 'H.O.: Shop No. 15, MAYUR COMPLEX,SEC.-1, Parwanoo ', 'HP', 'Solan', '', ' Deals in : CTV, W/MACHINE, Refrigerator, AC & DTH\nDistributors for : Videocon, LG, Weston , SVL, Reliance DTH (BIG TV), IGO CTV'),
(201, 1, 'St. LUKES SENIR SECONDARY SCHOOL, SOLAN', 'Schools;', 'stlukesolan@gmail.com', '01792-220420', 'SOLAN', 'HP', 'Solan', '', ' SCHOOL'),
(202, 1, 'ALPINE PUBLIC SCHOOL ', 'Schools;', 'vipinjassal@gmail.com', '01795-222997', 'Chowkiwala Nalagarh, Solan(H.P.)', 'HP', 'Solan', '', ' School'),
(203, 1, 'S.V.N. PUBLIC SR. SEC.SCHOOL,KUNIHAR', 'Schools;', 'vipinjassal@gmail.com', '01796-260175', 'Bhind Govt. Hospital ,Kunihar, Teh.Arki, Distt.Sol', 'HP', 'Solan', '', ' School'),
(204, 1, 'JOGINDRA CENTRAL  COOPERATIVE BANK LTD.', 'Banks;', 'vipinjassal@gmail.com', '01792-220305', 'Rajgarh Road, Solan H.P.', 'HP', 'Solan', '', ' SALIENT FEATURES OF THE BANK :  Fully computerized, All usual banking services through 20 branches, pay offices, one extensions counter and Lockers facilities available\n\nDeposits : High interest rates on deposits, Deposits are secured and covered under Deposits Insurance and credit Guarantee corporation.\n\nAdvances: Loan to PACS, Farmers, Salary Erner Societies, Transport, Industrial Purposesand Personal loan to Govt.Employee and individuals'),
(205, 1, 'KARNATAKA STATE OPEN UNIVERSITY      EIILM UNIVERS', 'Short Term Courses;Teaching/Education;Teaching, Academics & Counselling;Coaching Classes;', 'info@dolphinedutech.com', '92184-02326,', 'Sahni Complex , Rajgarh Road Solan(H.P.) 173212', 'HP', 'Solan', '', 'We Provide Training : Certificate in Computer Basis , Certificate in Software Tecnology, Certificate in Web Development, Certificate in DTP, Professional Accounting , Professional  Accounting, Certificate in Software Technology Certificate in Computer Basis for School Students\n\nShort Term Courses: C, C++, JAVA, Advance JAVA, VISUAL BASICS, PHP HTML/DHTML, PHOTOSHOP,TALLY, INTERNET,PAGEMAKER'),
(206, 1, 'DEE DEE AUTOS', 'Electronics;', 'vipinjassal@gmail.com', '98166-30466,', 'Kamlesh Lodge, Chambaghat, Solan(H.P.) 173213', 'HP', 'Solan', '', ' Deals in : All Types of Diesel & Petrol Vehicals & General Order Suppliers'),
(207, 1, 'HIMACHAL THIS WEEK ', 'Media & Entertainment;', 'vipinjassal@gmail.com', '01792-225679', 'SOLAN', 'HP', 'Solan', '', 'Himachal Leading English Weekly Magazine'),
(208, 1, 'HIMACHAL DRUG', 'Health Care Products;', 'vipinjassal@gmail.com', '01795-271104', '35,EPIP-I, Ind. Area , Jharmajri, Teh. Baddi, Dist', 'HP', 'Solan', '', ' MEDICIN'),
(209, 1, 'TIMCO TMT SARIYA', 'Steel Plant;', 'timcosteels@yahoo.in', '01795-221378', 'Bharatgarh Road, V.P.O. Bhatian, Teh. Nalagarh, Di', 'HP', 'Solan', '', ' Dea;s in : Sariya'),
(210, 1, 'THAKUR RUHANI STONE CRUSHER', 'Materials/Logistics/Supply Chain Mgmt;', 'vipinjassal@gmail.com', '98160-38133,', 'Villlage Navagraon, P.O. Jhajra, Teh.Nlagarh & Dis', 'HP', 'Solan', '', ' Contact For : Gol Bajri, Jiri, Gutki & Washing Sand'),
(211, 1, 'VIDYA INFRASTRUCTURE  & DEVELOPERS', 'Sales/Business Development;', 'vipinjassal@gmail.com', '94187-50000,', '8MC Complex Near Mohan Park Solan(H.P.)', 'HP', 'Solan', '', ' Booking Open For : 2Bed Rooms & 3 Bed Rooms , Flat At : Basal Road'),
(212, 1, 'DEVASHISH FOOD', 'Fast Food Joints;Food Processing Machines;', 'dfpbaddi@gmail.com', '93188-66520-', 'Village Ghansoat, Nalagarh, Distt. Solan(H.P.)', 'HP', 'Solan', '', ' Mfrs. Of : All Kinds Of Corrugated Packing  Boxes , Roll & Sheet, E Flute Boxes'),
(213, 1, 'KAVACH  STEEL', 'Steel Plant;', 'kavachsteel@gmail.com', '09805015876', 'Near Chintamani School, Vill. Bated, Barotiwala Te', 'HP', 'Solan', '', 'Deals in : Channels, Rounds, Flats, Angles Steels'),
(214, 1, 'LORD MAHAVIRA ASHIRWAD HOSPITAL AND CT SCAN CENTRE', 'Hospitals, Clinics, Nursing Homes;', 'vipinjassal@gmail.com', '01795-223269', 'Swarghat Road Dattowal Nalagarh Distt. Solan(H.P.)', 'HP', 'Solan', '', ' Deals in : CT SCAN , TMT, USG, ECG, EEG, SPIROMETRY AUDIOGRAM & LAB TEST\n\n                            24 HOURS OPEN'),
(215, 1, 'RIDDHI PACKAGES PVT. LTD.', 'Pet Related Services;Packaging Machines;', 'mjain_riddhi@yahoo.com', '01795-245262', 'Village: Katha, Baddi, Distt. Solan (H.P.)', 'HP', 'Solan', '', ' MANUFACTURER OF Corrugated Boxes, Pet Jar, Pet Bottle and Cap'),
(216, 1, 'LAL MOTORS Maruti Authorised Service Station ', 'Motorcycles & Scooters;', 'lajmotors@yahoo.com', '98160-39189,', 'NH-105 , Near Bus Stand  Baddi ', 'HP', 'Solan', '', ' Deals in : Computerized Wheel Balancing, Wheel Alignment, Service, Washing, Denting& Painting , MGP spare parts'),
(217, 1, 'NAVJYOTI  SR.SEC. SCHOOL ', 'Coaching Classes;Schools;', 'njssschool.93@gmail.com', '98164-59303,', 'Kharuni, P.O. Manpura, Teh. Baddi, Distt. Solan (H', 'HP', 'Solan', '', ' Deals in : School & Special Coaching for CBSE PMT/State PMT, AIEEe, Jee, IIT'),
(218, 1, 'UNITED BIOTECH PVT. LTD.', 'Pharma, Bio Tech/ R&D/ Scientist;Teaching, Education;', 'vipinjassal@gmail.com', '01795-236904', 'Bagbania Nalagarh Distt. Solan', 'HP', 'Solan', '', ' Deals in : Teaching/Education & Pharma/BioTech'),
(219, 1, 'KASAULI RESIDENCY', 'Hotels & Resorts;Hotel/Restaurant;', 'info@kasauliresidency.com', '94180-73707,', 'Old Kasauli Road, Village Mashobra, Kasauli(H.P.)', 'HP', 'Solan', '', ' Deals in : Hotel/ Restaurant'),
(220, 1, 'SHIVALIK SOLID WASTE MANAGEMENT LTD', 'Management & Consulting;', 'vipinjassal@gmail.com', '09816015381,', 'Village Majra, PO Dabhota, Teh. Nalagarh, Distt. S', 'HP', 'Solan', '', 'Services:> Treatment, Storage & Disposal Facility\n         > Multi Effect  Evaporator\n         > Process Waste\n         > Enviormental Consultancy\n         > Waste oil / Used oil , Paint sludge and E-Waste'),
(221, 1, 'CADILA HEALTH CARE LIMITED', 'Health Care Products;', 'vipinjassal@gmail.com', '01795-246841', 'NH-21 Near Bus Stand Baddi Distt. Solan', 'HP', 'Solan', '', ' Deals in : Health Care Products'),
(222, 1, 'BIRLA TEXTILE MILLS', 'Textile Machinery;', 'btm@birlatextile.com', '01795-244653', 'Bhatauli Khurd, Sai Road, Baddi, Distt. Solan(H.P.', 'HP', 'Solan', '', 'Textile Mills'),
(223, 1, 'CHANAKYA', 'Hotel/Restaurant;', 'vipinjassal@gmail.com', '98160-26232,', 'The mall Solan', 'HP', 'Solan', '', ' The place where you can enjoy  PAV BHAJI, BURGER, SANDWICHES, PIZZA, MILK SHAKES, CHINESE FOOD, COLD DRINKS, ICE CREAM SHAKES, ICE CREAM CUPS, FRESH JUICE & SEASONAL FRUIT JUICE'),
(224, 1, 'THAKUR MUSHROOM PVT. LTD.', 'Others;', 'vipinjassal@gmail.com', '98168-00008,', 'CHAMBAGHAT, SOLAN (H.P.)', 'HP', 'Solan', '', 'Deals in : Fresh Mushroom & Compost'),
(225, 1, 'GALPHA  LABORATORIES LTD.', 'Health Care;', 'hrbaddi@galpha.com', '01795-276005', 'Vill. Thana (Baddi) , Teh. Nalagarh, Distt. Solan ', 'HP', 'Solan', '', ' Laboratories'),
(226, 1, 'MG PHARMACEUTICALS', 'Pharma, Bio Tech/ R&D/ Scientist;', 'mgpharmaceuticals@yahoo.com', '98160-22930', 'Vill. Kumarhatti, Solan (H.P.)-173229', 'HP', 'Solan', '', 'RANGE AVAILABLE : Tablets, Capsules, Liquid Orals, Drys, Qintment, & Dry Powder Injection'),
(227, 1, 'INDAG RUBBER LIMITED', 'Materials/Logistics/Supply Chain Mgmt;', 'vipinjassal@gmail.com', '93187-57174,', 'Swarghat Road , Jhiriwala Nalagarh Solan H.P.', 'HP', 'Solan', '', 'Deals in :Rubber'),
(228, 1, 'B.L. CENTRAL PUBLIC  SR. SEC. SCHOOL ', 'Schools;', 'blcpsss@yahoo.in', '01792-229593', 'SHAMTI , SOLAN', 'HP', 'Solan', '', ' Education : Well stocked , highly qualified  & experienced staff, well ventilated classrooms with cctv cameras\nHealth : Pollution Free Enviorment, GYM and Badminton hall\n\nFacilities : A Well equipped computer lab, Large bus fleet, Play ground , Indoor Games stadium\n \n'),
(229, 1, 'TVS  MOTOR COMPANY  LIMITED', 'Motorcycles & Scooters;', 'vipinjassal@gmail.com', '01795-228000', 'Village Bhatian, Tehsil Nalagarh Distt. Solan, HP-', 'HP', 'Solan', '', ' Deals in : Motorcycles & Scooters'),
(230, 1, 'RAVINDER NATH TAGORE', 'Industrial Equipment;', 'rntmitc@gmail.com', '01792-233758', 'Him auto building , 3rd Floor , kamli road , secto', 'HP', 'Solan', '', ' Industrial  Training Centre'),
(231, 1, 'PRASHAR NURSING HOME', 'Hospitals, Clinics, Nursing Homes;', 'vipinjassal@gmail.com', '222605, 2236', 'Rajgarh Road , Solan-173212', 'HP', 'Solan', '', ' Deals in : Altrasound scaning, x-ray, E.C.G., Indoor Patient,'),
(232, 1, 'SAI  PACKAGING', 'Production/Maintenance/ Packaging;', 'suresh0052@gmail.com', '098160-33436', 'Vill. Tiron, P.O. Masulkhana, Teh. Kasauli, Distt.', 'HP', 'Solan', '', 'Mfg. Of : Export quality plain printed cartons, Duplex corrugated Boxes, Hassain & Laminated Boxes etc.'),
(233, 1, 'HOTEL R.MAIDENS ', 'Hotel/Restaurant;Restaurants;', 'piyushsingla@gmail.com', '01792-272128', 'The Lower Mall , Kasauli', 'HP', 'Solan', '', 'RESTAURANT : Indian, Chinese & Continental\nROOMS      : Well Furnished with Telephone and cable TV\nCONFERENCE HALL : Wedding, Kitty & Birthday Parties, ICE cream parlour & pastry shop'),
(234, 1, 'POOJA  INDUSTRIES ', 'Industrial Equipment;', 'vipinjassal@gmail.com', '01792-234518', 'Plot No. 75, Sector-1, Distt. Solan (H.P.)', 'HP', 'Solan', '', 'Manufacturing of :Himachal No. 1 Brand Aatta, Maida & Suji'),
(235, 1, 'SIMRAN  COACH', 'Tour Packages, Vacation Deals;Transportation, Freight Forwarders;', 'vipinjassal@gmail.com', '98160-55755,', 'Above Hotel Premjees, Old Bus Stand Solan (H.P.)', 'HP', 'Solan', '', ' Deals in : Tour Packages/Transportation'),
(236, 1, 'SIMRAN  COACH', 'Tour Packages, Vacation Deals;Transportation, Freight Forwarders;', 'vipinjassal@gmail.com', '98160-55755,', 'Above Hotel Premjees, Old Bus Stand Solan (H.P.)', 'HP', 'Solan', '', ' Deals in : Tour Packages/Transportation'),
(237, 1, 'YOGTEERTH THE HEALTH PILGRIMAGE', 'Health Care;Health & Pharma;Health Care Products;', 'vipinjassal@gmail.com', '98163-39555,', 'Sahani Complex , Rajgarh Road , Solan', 'HP', 'Solan', '', ' A Unique Center For YOGA, Ayurveda, Panchkarma, Naturopathy, Kerala massage & Kayakalpa'),
(238, 1, 'HOTEL R MAIDENS', 'Hotels & Resorts;Hotel/Restaurant;', 'rmaidenkasauli@gmail.com', '01792-272128', 'The Lower Mall Kasauli', 'HP', 'Solan', '', ' SERVICES : Running hot & Cold Water, Colour T.V. with multi Channels , Restaurant & Conference Hall, Assistance in local sightseeing, S.T.D & ISD facility, Laundry Service, Ample Parking Space. Arrangements for kitty Parties Marrige Parties and Get- Togethers'),
(239, 1, 'HOTEL  SHIVALIK', 'Hotels & Resorts;Hotel/Restaurant;', 'shivalik_kasauli@rediffmail.co', '01792-261280', 'Kasauli Road, Dharampur H.P.', 'HP', 'Solan', '', ' FACILITIES : Conference Hall, Bar & Restaurant, Terrace cafe for Parties, Functions. Green Lawns , Running Hot,& Cold Water round the clock . Laundry services & Doctor on call. Surrounded by more than 10,000 bighas og reserved forest all around. '),
(240, 1, 'S.D.S.J. GROUP OF INSTITUTIONS', 'Hotel/Restaurant;', 'sdsj_society@yahoo.com', '01792-227632', 'Poonam Hotel Complex , Barog Hills (Nagali) Old Ka', 'HP', 'Solan', '', ' COURSES OF STUDY : ELECTRICIAN, ELECTRICAL TECHNICIAN, MECHANIC ELECTRONICS, TV & RADIO MECHANIC, MECHANIC INDUSTRIAL ELECTRONICS , MECHANICAL DRAUGHTSMAN, FILTER & ENGINEERING DIPLOMA IN ELECTRICAL/ ELECTRONICS & COMM./ MECHANICAL TRADES'),
(241, 1, 'S.D.S.J. GROUP OF INSTITUTIONS', 'Hotel/Restaurant;', 'sdsj_society@yahoo.com', '01792-227632', 'Poonam Hotel Complex , Barog Hills (Nagali) Old Ka', 'HP', 'Solan', '', ' COURSES OF STUDY : ELECTRICIAN, ELECTRICAL TECHNICIAN, MECHANIC ELECTRONICS, TV & RADIO MECHANIC, MECHANIC INDUSTRIAL ELECTRONICS , MECHANICAL DRAUGHTSMAN, FILTER & ENGINEERING DIPLOMA IN ELECTRICAL/ ELECTRONICS & COMM./ MECHANICAL TRADES'),
(242, 1, 'M/S NARAYAN  ELECTRICALS', 'Electronics;', 'vipinjassal@gmail.com', '98173-16346', 'Rajgarh Road, Distt. Solan (H.P.)', 'HP', 'Solan', '', ' Deals in : Installation of Industrial Works & all types of Repairing work House wiring, Home Appliances, Fancy Light, Jhummer , Electronics Tube & Bulbs, Ceiling Fan, Table Fan , Madhani, & Motor winding .'),
(243, 1, 'HITKRISH ASSOCIATES', 'Consultants;', 'hr@hitkrish.com', '9218600450, ', 'Amar Complex The mall ,Solan -173212', 'HP', 'Solan', '', ' JOB PALACEMENT ADVISORS'),
(244, 1, 'SUDHI MOTOR DRIVING TRAINING SCHOOL', 'Schools;', 'vipinjassal@gmail.com', '98161-33132,', 'N.H. Kumarhatti Bye Pass, Rabon Solan(H.P.)', 'HP', 'Solan', '', ' DRIVING SCHOOL'),
(245, 1, 'HIMCOM TECHNOLOGY', 'Repairs & Maintenance, AMCs;Mobile Phones;', 'vipinjassal@gmail.com', '94181-10356,', 'JAIN BHAWAN, HOSPITAL ROAD, SOLAN -173212(H.P.)', 'HP', 'Solan', '', ' DEALS IN : Mobile Repair Certified Course, Trouble Shooting Courses, Repairs & sale/Purchase of old/ New Mobile of All Model'),
(246, 1, 'ASSI GENERAL STORE', 'Musical Instruments;', 'vipinjassal@gmail.com', '98162-08681', 'The Mall , Solan', 'HP', 'Solan', '', ' DEALS IN : Sports Goods , Musical Instruments, Pry-Education Toy, Shields, Mementoes, All types of Maps & Charts'),
(247, 1, 'HYDRAULIC  ENGINEERING CO.', 'Electronics;', 'vipinjassal@gmail.com', '01792-220480', 'Hospital Road , Solan- 173212(H.P.)', 'HP', 'Solan', '', ' Deals In : K.B.S. PUMPS LTD., CROMPTON GREAVES LTD. HAVELLS INDIA LTD. & STANDARD ELECTRICAL CO.'),
(248, 1, 'KAMAL  UNIFORMS(KAMAL READYMADE WORKS)', 'Dresses & Uniforms;', 'kamaluniforms@gmail.com', '94186-89346,', 'Old Court Road, Near Chowk Bazar, Solan (H.P.)', 'HP', 'Solan', '', ' Mfrs. & Suppliers: Quality school Uniforms for Govt. & Private schools Educational Institution etc.'),
(249, 1, 'BATTA PROPERTIES ', 'Consultants;', 'vipinjassal@gmail.com', '094180-23313', 'Opp. D.C. Office , The Mall , Solan(H.P.)', 'HP', 'Solan', '', ' DEALS IN : Properties'),
(250, 1, 'PIONEER  INFOTECH ', 'Career Events & Seminars;Coaching Classes;', 'vipinjassal@gmail.com', '9418080321,2', 'Chauhan Building, Near Degree College, Rajgarh Roa', 'HP', 'Solan', '', ' PIONEER INFOTECH'),
(251, 1, 'ZURICH  RESORTS', 'Hotels & Resorts;Hotel/Restaurant;', 'zurichresort@gmail.com', '01792-257054', 'Kalka- Shimla Highway, Near Kandaghat, Shimla (H.P', 'HP', 'Solan', '', ' Deals in : Banquet Hall, Conference Hall, Multicuisine Restaurant, Special arrangement For College DJ Party'),
(252, 1, 'R.S. ENTERPRISES', 'Electronics;', 'vipinjassal@gmail.com', '98822-43431,', 'B-2, Green Valley, Dev Bhoomi Apartments, Deonghat', 'HP', 'Solan', '', ' Deals in : All types of Solar equipments : Water Heating Systems, Street Lights, Home Lights Cookers, Lanterns etc. '),
(253, 1, 'DELL EXCLUSIVE STORE', 'Computers;Home Delivery, Take Away Eateries;', 'vipinjassal@gmail.com', '9418001100, ', 'Gateway Computers, Lakkar Bazar, Solan', 'HP', 'Solan', '', ' Deals in : Home Service and Complete Accidental Protection & Online Booking Facility Also Available'),
(254, 1, 'MULTI  BRANDED  PHONE  SHOWROOM', 'Mobile Phones;', 'magnumsales9@gmail.com', '98165-20001,', 'M.C. Complex , Near Mohan Park, Solan (H.P.)', 'HP', 'Solan', '', ' Deals In : Multi Branded Phones'),
(256, 1, 'Colours', 'Toys & Sports Items;Antiques;Cosmetics, Toiletries;Other Accessories;Luggage, Bags & Wallets;Fashion Accessories;Decorators;', 'contact.colours@gmail.com', '09816191117', 'Colours Departmental Store Address (Office) M/s Mo', 'HP', 'Solan', '', 'Colors, a great new gift shopping resource for locating specialty gift shops,  personalized gifts, primitive & country home decor accents, unique gift ideas, handcrafted gifts, & much more for all your gift giving occasions. If you are looking for a unique gift or gift idea........'),
(257, 1, 'Pioneer Infotech', 'IT - Hardware, Software;Teaching/Education;IT, Computer Services;', 'sunil.thaili@gmail.com', '094590-34671', 'Pioneer Infotech Rampur Bushar Shimla', 'HP', 'Shimla', '', 'Our mission is to be the consulting firm of choice for senior IT managers of financial services & banking firms.'),
(259, 1, 'Kanwar Enterprises', 'Computers;', 'kanwar.mahesh@gmail.com', '0177-2629271', 'SCO-20, Block No.-20, SDA Complex, Kasumpti, Shiml', 'HP', 'Shimla', '', 'Deal in Desktop, Laptop, Computer Accessories [HP, Compaq, Acer, Dell, Lenovo etc, Softwares etc'),
(260, 1, 'Narinder Computers & Printers', 'Photocopiers;Printers;Computer Hardware;', 'narinderlaptops@gmail.com', '09418032659', 'Shop No. 105, first floor, anand complex, tha mall', 'HP', 'Solan', '', ' Buy Computer Parts, Desktop Computers (Branded and Assembled computer), Laptops, Monitors, Printers, and peripherals from Cybersites India and get original and authentic equipment from Intel, Microsoft, AMD, Samsung, Seagate, LG and  hard disks, ram, tv tuner card, modems, networking cables, TFT, CRT monitors, sound cards, all in printers, mouse, mouse pads, keyboards, game pads, dust covers.'),
(261, 1, 'Athena Public School', 'Academic;Admissions;Schools;', 'himachalclassified@gmail.com', '01792223767,', 'Near D.C. Office Dhobighat Road Solan', 'HP', 'Solan', '', 'For the first time in Himachal Pradesh, interoduces bagless system of education for young children.\nNo home work for small children. All work is done in school.\nThe school is registered with Himachal Govt. and will go upto senior secondary level. '),
(262, 1, 'Anand Enterprises', 'Cinema Hall;', 'hpclassified@gmail.com', '01792 - 2219', 'Anand Cinema, Anand Hotel, Anand Toyota, Anand Bha', 'HP', '', '', 'Anand Cinema has always been one of the most popular forms of entertainment in Solan city. Therefore, movie theaters are major entertainment venues. Anand Cinema has long been prominent venue in the city. '),
(263, 1, 'Platinum Furnishers', 'Interior Decorators;Office Furniture;Home Furniture;Home Furnishings;Home Decoratives;Furniture Repair Centers;', 'himachalclassified@gmail.com', '9218433088', 'The Platinam Mall, Near Gurudwara, by Pass, Solan', 'HP', 'Solan', '', ' Biggest showroom of furniture in Himachal Pradesh. Exclusive range of Indian and important furniture for chic homes and smart offices at most competitive prices. Furniture that spells luxury, tell style........'),
(264, 1, 'ECG Education Institute', 'Career Counseling;Consultants;Computer Institutes;Computer Hardware;', 'chandan9494@gmail.com', '01792-645365', 'Below Vijaya Bank, Kotlanala Chowk, Rajgarh Road, ', 'HP', 'Solan', '', 'Basic Computers, Tally, Coral Draw, Photoshop, Front Page, HTML, C, C++, Visual Basic, Java.\nDistance Education with Karnataka State Open University & M.S University.\n');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_id` int(11) NOT NULL auto_increment,
  `Category_name` varchar(70) NOT NULL,
  PRIMARY KEY  (`Category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=304 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Category_name`) VALUES
(1, 'Advertising Agencies'),
(2, 'Antiques'),
(3, 'Art Classes'),
(4, 'Art Stationery'),
(5, 'Auto Dealers'),
(6, 'Auto Parts'),
(7, 'Auto Repair Centres'),
(8, 'Academic'),
(9, 'Admissions'),
(10, 'Accessories'),
(11, 'Air Conditioners'),
(12, 'Air Coolers'),
(13, 'Alternative Treatments'),
(14, 'Aggregates'),
(15, 'Agriculture Equipment'),
(16, 'Accounts'),
(17, 'Admin Support'),
(18, 'Apartments'),
(19, 'Accounting'),
(20, 'Administration'),
(21, 'Architects'),
(22, 'Astrology'),
(23, 'Airline Tickets'),
(24, 'Amusement Parks'),
(25, 'Bus Services'),
(26, 'Biography'),
(27, 'Book Publishers'),
(28, 'Book Shops'),
(29, 'Business Reading'),
(30, 'Boutiques'),
(31, 'Bakeries'),
(32, 'Banquet Halls'),
(33, 'Bathroom Fittings'),
(34, 'Brides seek Grooms'),
(35, 'Builders'),
(36, 'Banks'),
(37, 'Business Opportunities'),
(38, 'Cars'),
(39, ' Confectionery'),
(40, 'Children Books'),
(41, 'Career Counseling'),
(42, 'Coaching Classes'),
(43, 'Correspondence'),
(44, 'Cameras'),
(45, 'Cassettes'),
(46, 'Computer Hardware'),
(47, 'Computer Institutes'),
(48, 'Fast Food Joints'),
(49, 'Caterers'),
(50, 'Coffee Shops'),
(51, 'Chemists'),
(52, 'Cinema Hall'),
(53, 'Cosmetics'),
(54, 'Carriages'),
(55, 'Cement Plants'),
(56, 'Chemical Plants'),
(57, 'Construction Machine'),
(58, 'Cooling Towers'),
(59, 'Property for Rent'),
(60, 'Property for Sale'),
(61, 'Construction Material'),
(62, 'Consultants'),
(63, 'Courier Service'),
(64, 'Cleaning Supplies'),
(65, 'Dresses  Uniforms'),
(66, 'DTH Connection'),
(67, 'Dhabas'),
(68, 'Drilling Machines'),
(69, 'Designers'),
(70, 'Doctors'),
(71, 'Eye Care Products'),
(72, 'Engineering Goods'),
(73, 'Engines'),
(74, 'Elevators'),
(75, 'Engineering'),
(76, 'Events'),
(77, 'Electronics'),
(78, 'Civil Engineers'),
(79, 'Merchandising'),
(80, 'Embassies'),
(81, 'Exhibitions'),
(82, 'Galleries'),
(83, 'Musical Instruments Store'),
(84, 'Paintings Shope'),
(85, 'Sculptures Shope'),
(86, 'Music Systems Store'),
(87, 'Other Vehicles'),
(88, 'Maps'),
(89, 'Fashion Accessories'),
(90, 'Footwear'),
(91, 'Garments ,Clothing'),
(92, 'Jewellery'),
(93, 'Luggage'),
(94, 'Other Accessories'),
(95, 'Tailors'),
(96, 'Hardware Store'),
(97, 'Watches'),
(98, 'Men for Women'),
(99, 'Women for Men'),
(100, 'Hobby Classes'),
(101, 'Online Tutors'),
(102, 'Play Schools'),
(103, 'Private Tutors'),
(104, 'Professional Studies'),
(105, 'Schools'),
(106, 'Short Term Courses'),
(107, 'Teaching'),
(108, 'Universities'),
(109, 'Gaming'),
(110, 'Water Heaters'),
(111, 'Internet Connection'),
(112, 'Invertors'),
(113, 'Kitchen Appliances'),
(114, 'Landline Phones'),
(115, 'Mobile Phones'),
(116, 'MP3 players'),
(117, 'MP4 Players'),
(118, 'Printers'),
(119, 'Photocopiers'),
(120, 'Refrigerators'),
(121, 'Room Heaters'),
(122, 'Security Cameras'),
(123, 'Televisions (TVs)'),
(124, 'Vacuum Cleaners'),
(125, 'Video Cameras'),
(126, 'Video Players - DVD'),
(127, 'Washing Machines'),
(128, 'Water Purifiers'),
(129, 'Fruits ,Vegetable Shops'),
(130, 'Grocery Stores'),
(131, 'Home Delivery'),
(132, 'Ice Cream Parlours'),
(133, 'Juice Centres'),
(134, 'Meat ,Poultry Shops'),
(135, 'Sweet Shops'),
(136, 'Nightlife'),
(137, 'Paan house'),
(138, 'Party Lawns ,Gardens'),
(139, 'Restaurants'),
(140, 'Snacks'),
(141, 'Wine'),
(142, 'Furniture Repair Centers'),
(143, 'Hardware Supplies'),
(144, 'Home Decoratives'),
(145, 'Home Furnishings'),
(146, 'Home Furniture'),
(147, 'Hotel Supplies'),
(148, 'Restaurant Supplies'),
(149, 'Interior Decorators'),
(150, 'Office Furniture'),
(151, 'Outdoor Items'),
(152, 'Garden Items'),
(153, 'Fitness Club'),
(154, 'Health Care Products'),
(155, 'Hospitals'),
(156, ' Nursing Homes'),
(157, 'Parlours'),
(158, 'Food Processing Machines'),
(159, 'Gas Plants'),
(160, 'Hydraulic Machines'),
(161, 'Industrial Equipment'),
(162, 'Metal Casting Machines'),
(163, 'Milling Machines'),
(164, 'Grinding Machines'),
(165, 'Other Machines'),
(166, 'Printing Press'),
(167, 'Packaging Machines'),
(168, 'Power Transmission Tools'),
(169, 'Printing Machinery'),
(170, 'Special Machines'),
(171, 'Steel Plant'),
(172, 'Testing Equipment '),
(173, 'Testing Machines'),
(174, 'Textile Machinery'),
(175, 'Turnkey Projects'),
(176, 'Government Job'),
(177, 'Health Companies'),
(178, 'Pharma Companies'),
(179, 'Hotel Jobs'),
(180, 'Human Resource Jobs'),
(181, 'Management'),
(182, 'Media Agency'),
(183, 'Placement Consultants'),
(184, 'Sales Jobs'),
(185, 'Semi Government Job'),
(186, 'Teaching'),
(187, 'Telecalling'),
(188, 'Grooms seek Brides'),
(189, 'Marriage Bureau Consultants'),
(190, 'Matrimonial by Caste'),
(191, 'Wedding Planners'),
(192, 'Public Announcements'),
(193, 'Pet Adoption Service'),
(194, 'Pet Care Products'),
(195, 'Pet Foods'),
(196, 'Pet Related Services'),
(197, 'Pets'),
(198, 'Pets Training Centers'),
(199, 'Veterinary Clinics'),
(200, 'Veterinary  Doctors'),
(201, 'Hostel for Boys'),
(202, 'Hostel for Girls'),
(203, 'Houses For Rent'),
(204, 'Houses For Sale'),
(205, 'Properties For Lease'),
(206, 'Housing Projects'),
(207, 'Real Estate Agents'),
(208, 'Fashion Store'),
(209, 'Finance Services'),
(210, 'Freelancers'),
(211, 'Restaurant'),
(212, 'IT-Support'),
(213, 'Telecom  Hardware'),
(214, 'Telecom  Software'),
(215, 'Legal Law'),
(216, 'Marketing Media Planning'),
(217, 'Production House'),
(218, 'Business Development'),
(219, 'Security Services'),
(220, 'Service Engineers'),
(221, 'Site Engineers'),
(222, 'Flower Shope'),
(223, 'Gift Shope'),
(224, 'Security Services'),
(225, 'Mobile Services'),
(226, 'NGOs'),
(227, 'NPOs'),
(228, 'Packers'),
(229, 'Movers'),
(230, 'Transportation'),
(231, 'Food Items'),
(232, 'Gardening Supplies'),
(233, 'Office Supplies'),
(234, 'Sports Items'),
(235, 'Toys Shope'),
(236, 'Hotels'),
(237, 'Guest Houses'),
(238, 'Resorts'),
(239, 'Immigration Services'),
(240, 'Language Translators'),
(241, 'Museums'),
(242, 'Passport Agents'),
(243, 'Taxi Services'),
(244, 'Tour Packages'),
(245, 'Tourist Guides'),
(246, 'Tourist Information Bureau'),
(247, 'Ticket Agents'),
(248, 'Travel Agents'),
(249, 'Vacation Rentals'),
(250, 'Other Travel Services'),
(251, 'Water Parks'),
(252, 'Text Books'),
(253, 'Tax'),
(254, 'Finance'),
(255, 'Law'),
(256, 'Interior Designer'),
(257, 'Vaastu Consultancy'),
(258, 'Theme Parks'),
(259, 'Theaters'),
(260, 'Autobiography'),
(261, 'Contractors'),
(262, 'Insurance'),
(263, 'Financial Services'),
(264, 'Franchise'),
(265, 'Distance Learning'),
(266, 'Decorators'),
(267, 'Nurses'),
(268, 'Health Care'),
(290, ''),
(291, ''),
(292, 'Departmental Stores'),
(293, 'PG Accomodation'),
(294, 'Web Designing'),
(295, 'Hobby Classes'),
(296, 'Day Care Centers'),
(297, 'Jobs'),
(298, 'Agriculture'),
(299, 'News Papers'),
(300, 'News Agencies'),
(301, 'Graphic Design'),
(302, 'Content Writer'),
(303, 'Parks');

-- --------------------------------------------------------

--
-- Table structure for table `distt`
--

CREATE TABLE IF NOT EXISTS `distt` (
  `Sr.` int(11) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Distt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distt`
--

INSERT INTO `distt` (`Sr.`, `State`, `Distt`) VALUES
(1, 'HP', 'Solan'),
(2, 'HP', 'Sirmour'),
(3, 'HP', 'Chamba'),
(4, 'HP', 'Kullu'),
(5, 'HP', 'Billaspur'),
(6, 'HP', 'Shimla'),
(7, 'HP', 'Una'),
(8, 'HP', 'Hamirpur'),
(9, 'HP', 'Kinnur'),
(10, 'HP', 'Mandi'),
(11, 'HP', 'Kangra'),
(12, 'HP', 'Lahul & Spiti');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL auto_increment,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `Profile_id` int(11) NOT NULL auto_increment,
  `Product_name` varchar(50) NOT NULL,
  `Product_description` varchar(255) NOT NULL,
  `Product_image` varchar(50) NOT NULL,
  `Product_video` varchar(50) NOT NULL,
  PRIMARY KEY  (`Profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE IF NOT EXISTS `userroles` (
  `Access_level` int(1) NOT NULL,
  `Role` varchar(15) collate latin1_german1_ci NOT NULL,
  `Description` varchar(45) collate latin1_german1_ci default NULL,
  PRIMARY KEY  (`Access_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`Access_level`, `Role`, `Description`) VALUES
(0, 'Super User', 'Administrator or Super User'),
(1, 'Admin', 'Other Administrators'),
(2, 'Staff', 'Personals authorized by admin for data entry'),
(9, 'Visitor', 'Free Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `Profile_id` int(11) NOT NULL auto_increment,
  `UserRoles_Access_level` int(1) NOT NULL default '9',
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Contact_No` varchar(12) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Distt` varchar(20) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `DateOfBirth` date default NULL,
  `Anniversary` date default NULL,
  PRIMARY KEY  (`Profile_id`),
  UNIQUE KEY `Email_id` (`Email_id`),
  KEY `fk_user_profile_UserRoles` (`UserRoles_Access_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`Profile_id`, `UserRoles_Access_level`, `Name`, `Gender`, `Contact_No`, `Address`, `State`, `Distt`, `Email_id`, `Password`, `DateOfBirth`, `Anniversary`) VALUES
(1, 0, 'Administrator', 'M', '9418840255', 'Above Neeraj Cotton Ind, Rajgarh Road', '', 'Solan', 'info@focus-itech.com', 'Another10$', '2010-06-02', '2010-06-02'),
(8, 9, 'priti', 'F', '123456789', 'focus itechl', 'HP', 'Solan', 'p@gmail.com', '123', '2012-01-06', '2012-01-07'),
(9, 9, 'ankit', 'M', '544676577', 'shimla', 'HP', 'Solan', 'g@gmail.com', 'assssssf', '2012-01-05', '2012-01-13');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `business_detail`
--
ALTER TABLE `business_detail`
  ADD CONSTRAINT `business_detail_ibfk_1` FOREIGN KEY (`Owner`) REFERENCES `user_profile` (`Profile_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
