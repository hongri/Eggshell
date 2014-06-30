-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 06 月 01 日 15:53
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `itweb_en`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'eggshell123');

-- --------------------------------------------------------

--
-- 表的结构 `assessment`
--

CREATE TABLE IF NOT EXISTS `assessment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `result` text,
  `time` datetime DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `score` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `assessment`
--

INSERT INTO `assessment` (`id`, `name`, `email`, `result`, `time`, `company`, `score`) VALUES
(3, 'dsadas', 'hongri1987@gmail.com', '1:sometimes,2:never,3:sometimes,4:always,5:sometimes,6:always,7:sometimes,8:never,9:sometimes,10:always', '2012-11-21 11:52:15', 'dsad', 14),
(4, 'test', 'test@test.test', '1:never,2:never,3:never,4:never,5:never,6:sometimes,7:sometimes,8:sometimes,9:always,10:always', '2013-10-18 07:18:00', 'test', 9),
(5, NULL, NULL, NULL, '2013-10-18 08:06:54', NULL, 0),
(6, 'valerie', 'vj0228@gmail.com', '1:sometimes,2:sometimes,3:sometimes,4:sometimes,5:sometimes,6:sometimes,7:sometimes,8:sometimes,9:sometimes,10:sometimes', '2013-10-24 03:42:45', 'V-Trading', 10);

-- --------------------------------------------------------

--
-- 表的结构 `brand_assessment`
--

CREATE TABLE IF NOT EXISTS `brand_assessment` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `content` text,
  `never` int(10) DEFAULT '0',
  `sometimes` int(10) DEFAULT '0',
  `always` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `brand_assessment`
--

INSERT INTO `brand_assessment` (`id`, `content`, `never`, `sometimes`, `always`) VALUES
(1, 'Employees and customers know the one word that your brand occupies in consumers'' minds.', 12, 5, 5),
(2, 'Employees and customers think you have a distinctive visual image.', 8, 10, 4),
(3, 'Employees can clearly articulate your brand statement.', 9, 11, 2),
(4, 'Customers always say you have a good service to support your products.', 7, 10, 5),
(5, 'Your employees and customers can articulate what that difference is between you and your competitors’ brands.', 7, 11, 4),
(6, 'Your employees are trained on a on going basis to know your brand image, message, product information.', 0, 14, 3),
(7, 'Your employee understand how to portray that message and promise as brand ambassadors.', 4, 13, 0),
(8, 'Your marketing campaign delivers a consistent brand image and message.', 3, 9, 5),
(9, 'Your company has a efficient operating system.', 1, 12, 4),
(10, 'Your company employs branding experts or staff who are responsible for maintaining the consistency and integrity of your brand.', 2, 11, 4);

-- --------------------------------------------------------

--
-- 表的结构 `brand_shop`
--

CREATE TABLE IF NOT EXISTS `brand_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `subtitle` varchar(30) DEFAULT NULL,
  `content` text,
  `style` varchar(100) DEFAULT NULL,
  `photos` varchar(100) DEFAULT NULL,
  `buy` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `brand_shop`
--


-- --------------------------------------------------------

--
-- 表的结构 `case`
--

CREATE TABLE IF NOT EXISTS `case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `video` varchar(30) DEFAULT NULL,
  `type` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `case`
--

INSERT INTO `case` (`id`, `detail`, `image`, `name`, `video`, `type`) VALUES
(1, '<b>Challenge</b><br>\r\nMaxim group known as the expert in catering as it owns numerous restaurants both in Chinese and Western food. Eggshell was delegated to bring all the message under an umbrella of this subsidiary brand, Maxim Wedding as it would reflect their strength as a multi-disciplinary company among the wedding service provider. The single icon designed shall also be able to portray the essence of these tailoring services under the same company name. \r\n<b>Solution</b><br>\r\nEggshell focused on key visual elements of Maxim group, the heart, to create a wedding bouquet. Each flower of the bouquet consists of five-heart pedals and they represent the five subdivisions of the Maxim Wedding group. A guideline of the usage of the logo has been constructed for easy management.', '2012111210444944.jpg', 'Maxims', 'Client Project', 'Identity'),
(2, '<b>Challenge</b><br>\r\nPlay is a new branded shop selling furniture, kitchenware and construction materials which is revamped from a conservative furniture company in Hong Kong. By located the shop in a unconventional street of Hong Kong,', '2012122804150337.jpg', 'Play Ltd.', 'Client Project', 'Audit,Identity,Experience,Strategic'),
(3, '<b>Challenge</b><br>\r\n\r\nBird and Basket is a non-traditional and newly-revamped dim-sum restaurant targeting modern and young families as basic customers. Eggshell''s task is to create a brand strategy that projects a unique, comfortable, and family-friendly new style Dim Sum image towards their customers. \r\n</br>\r\n\r\n<b>Solution</b><br>\r\nEggshell has re-positioned', '2012111210544836.jpg', 'Birds &amp; Baskets', 'Client Project', 'Audit,Identity,Experience,Strategic'),
(4, '<b>Changllenge</b><br>\r\nEggshell has been invited by MSF to design the “40 Years of Independent Humanitarian Action” photo exhibition. As an exhibitor, it requires the skills to design a complete exhibiting flow and a memorable experience. Since this exhibition will be held at Harbour City, IFC, Central Pier Station, Poly University and China Hong Kong City at different times, it is necessary to consider the adaptiveness of venues.</br>\r\n<b>Solution</b><br>\r\nThe exhibition has used MSF’s “independent” characteristic: for example, the theme board has used multiple individual grey dots to construct the number “40”, representing different NGO, whereas the red logo on the lower-left corner represents MSF; its 4 characteristics are written on four exhibition area’s frames, which are independent medical practice, impartiality, finance independent, independent voice . The 4 frames has used red for attraction, its simple structure is suitable for different venues, and theme colors of red, white, black originate from MSG’s logo, which is very recognizable. It is also worth mentioning that the designer has stressed the message “40” on different touch-points, such as using it on a light box instead of a common backdrop as the starting point of the exhibition. Other media like invitation cards and promotional posters have also used “40” as the major feature.</br>\r\nMoreover, Eggshell has made this photo exhibition into a clear timeline, which features stillness and motion together by using LCD frames. The black lines and slim letters in the time line creates a simple but stern visual effect. This exhibition is a great successful, attracting numerous participants which shows our attentive design flow.', '2012111210561249.jpg', 'MSF', 'Client Project', 'Experience'),
(7, '<b>Challenge</b><br>\r\nEggshell has cooperated with Elements and Asia Miles for the first time on this promotion campaign. Elements aims to spread the message that they are the first mall in HK to partner with Asia Miles, and to emphasize that customers can easily earn miles while shopping in a joyful environment.</br>\r\n\r\n<b>Solution</b><br>\r\nEggshell proposes the concept of a “shoplane mall”, which echoes with the two core values in this campaign: shopping and traveling. The campaign is set with a tone of being a little bit surrealistic, featuring with a grand key visual that is an escalator in the golden mall presenting the gateway to the airport. An grand impression is delivered which is consistent with Element’s image. The visual also brings out an concept in the very first time that shopping fulfills your dream of traveling.', '2012123109181427.jpg', 'Elements', 'Client Project', 'Experience'),
(8, '<b>Challenge</b><br>\r\nMabushi is a B2B LED lighting manufacturer whose mother company owns several brands in Hong Kong and China. They wish to avoid a confusing brand concept, and create a clear and unique one instead, ensuring its marketing positioning and expanding its operation scale.</br>\r\n<b>Solution</b><br>\r\nEggshell has firstly conducted an audit report, it includes market overview, service and product, operational system audit etc. Basing on the results, a marketing strategy and operation model is designed, which includes promotional activities and a long-term product development plan.\r\nBesides, Mabushi needs an unique identity. We convey the trade-mark Iceberg concept that 9/10 of the iceberg is under sea level, meaning that Mabushi has a great potential for expansion and for the 1/10 that appears above sea level is the product and services that are available for customers. To strengthen the concept of the brand, we use perseverance, courage, and practicality as their attributes. \r\nThis project also includes the naming of their Chinese name,', '2012111303423773.jpg', 'Mabushi', 'Client Project', 'Audit,Identity,Experience,Strategic,Management'),
(9, '<b>Challenge</b><br> \r\nEggshell has been invited by HKFYG to design a brand concept and visual identity system for its subsidiary brand, Cafe21. It also involve to solve the problem of stationing adjacent to an entrance of a popular Quarry Bay MTR station, but have not been able to gained much attention. </br>\r\n<b>Solution</b><br>\r\nThe logo of Cafe21 infuses a modern interpretation: the brown and burgundy corporate colors as well as the coffee ring logo distinguish itself from other coffee brands. The concept of this project is also conveyed through the design of uniform, menu, signage, and name card. And the tag-line,', '2012111303431771.jpg', 'Cafe21', 'Client Project', 'Audit,Identity,Experience,Strategic'),
(10, '<b>Challenge</b><br>\r\nEggshell has taken on the theme strategy design for Emperor’s Jewelry exhibition, of which the task includes: choosing the signature piece of jewelry from each collection, designing a cohesive theme display, connecting all series with one main theme and matching the overall style with Emperor’s luxurious style. </br>\r\n<b>Solution</b><br>\r\nEggshell has used “a classic combination of deluxe and creativity” as the main direction in their few jewelry exhibitions. An importance falls on “classical and art”. As the featured piece of jewelry resembles the neck collar worn by 16th century English upperclassmen, Eggshell has chosen a pristine and regal portrait of Elizabeth I as the theme display, associating the success of Emperor with the golden period led under the Queen, luring people to desire jewelry. This themed exhibition is a great success, not long has it expanded the market, but has also attracted some celebrities to visit. Eggshell has successful promoted the “Elizabeth” jewelry collection.\r\nThe 2nd exhibition goes with the direction of “East meets West” with the theme “joyful feast”. The slogan is “喜形於飾”, meaning “joy comes from jewelry”, the main display is a beau in a qipao seen in old-fashion advertisements, the invitation card is a traditional hand-held mirror, the mirror is embroidered with the jewelry pieces exhibiting. When guests receive their invitation, it appears like they are looking into a mirror, and heading to a “joy feast”. The design of this invitation card is very delicate, the cardboard is laser-cut, it feels like and looks like wooden-made. This special feature makes a perfect collection item for guests.', '2012111303433112.jpg', 'Emperor Jewlery', 'Client Project', 'Experience'),
(11, '<b>Challenge</b><br>\r\nBesides owning the up-market brand which targets genuine leather couches from Europe: Ulferts, it also owns brands with different products and market positioning like @HOME, Ulfenbo, U.Design, Dormire etc. For the last 10 years, Ulferts has been the market leader for European furniture in Hong Kong with good rapport and a list of loyal customers. Recently, the group wishes to expand its market as well seeking a sustainable strategy for their long term expansion. Eggshell was invited to proceed the audit of its five sub-brands to prepare for a brand strategy to expand other markets in soonest future.</br>\r\n<b>Solution</b><br>\r\nThe audit mainly includes reviewing brand architecture, internal compliance, operation management of local shops and inventory, customer experience and visual identity’s alignment. The study includes interviews, surveys, field observation. Secondary examination are also used to investigate the current benefits and disadvantages of Ulfert’s brands, which shows its operation, leading to a proposal of refined solutions. \r\nMoreover, with the retaining consultation of Eggshell''s consultants, different brand knowledges have been passed to the colleagues of different levels and units, which increase their brand recognition, and also helps the auditing process to go smoothly.', '2012123103473744.jpg', 'Ulferts Group', 'Client Project', 'Audit,Strategic,Management'),
(12, '<b>Challenge</b><br> \r\nThe former Dao Heng Insurance is acquired by Hong Leong Group, a leading conglomerate based in Singapore, in 2005. Since the acquisition, it plans to rename its brand to Hong Leong Insurance in January 2009. Coincidentally, the global financial crisis has caused a number of insurance companies to close down. Therefore, it is crucial to emphasize on Hong Leong''s prestige and credibility in the campaign.Eggshell Creative was invited to construct and design their advertising campaign as well as to hold a press conference.\r\n </br>\r\n<b>Solution</b><br>\r\nThree patterns of advertisements are placed on different mediums throughout Hong Kong. Natural sources of energy generated through technology into electricity are used as an analogy for Hong Leong''s strength. Wind, hydraulic, and solar energy, along with three different slogans, each represents particular advantages of Hong Leong – Wind, symbolizing a extraordinary customer service; Water, representing the abundance of financial resources and experience; and Sunshine, illustrating the glory of numerous awards and achievements. The red-and-blue bar framing the advertisements are derived from the original Hong Leong logo, establishing its distinctive corporate colors.', '2012123106071681.jpg', 'Hong Long', 'Client Project', 'Experience,Strategic'),
(13, '<b>Challenge</b><br>\r\nThis local courier service company which mainly targets Hong Kong customers has been established for over 30 years. They hope to expand its market and appeal to younger customers, therefore have employed Eggshell to design a new brand visual system, and conduct a brand strategy to upgrade their corporate image.</br>\r\n<b>Solution</b><br>\r\nIt first starts with a new brand positioning: changing from a traditional courier service to a caring “personal assistant”. The company identity is revamped with a new logo. The bright yellow background connotes energy and sincerity, and it contrasts nicely with the dark blue lettering. The letter “M” is designed to look like two people shaking hands to add a humanistic value to the logo''s design; new slogan “morning express courier” refers to the company''s emphasis on serving their customers well and tailoring their service to fit each individual''s needs.', '2012122815421557.jpg', 'Morning Express Courier', 'Client Project', 'Audit,Identity,Experience,Strategic'),
(14, '<b>Challenge</b><br>\r\nThe Task for Eggshell is to rebrand a toy figurines OEM. This manufacturer sells girls’ accessories as its main product, client seeks for a wow selling point for such product, and help it stand out in a hugely competitive toy market in Mainland China. </br>\r\n<b>Solution</b><br>\r\nEggshell’s marketing strategy starts from the stand-point of caring parents, creating the brand name “My Only Princess” and the slogan “The best I give”. The word “only princess” echoes the one-child policy in China, and the entailed implication of a pampered child in a caring family. ”The best I give” set up a tone of indulging and caring as if it is a statement proudly declared by parents. The strategy overall raises the image of the doll from a toy to a symbol of a parent-and-child bonding, differentiating it from other girly-products competitors. Also, Eggshell has conducted a comprehensive product strategy, instead of making single-product sales, 6 collections with themes are put together from existing products. The package is designed uniquely in the shape of trapezium and transformed as a handbag which is a selling trick that either young ladies or their parents can say no to. The store is also specially designed as an European princess bedroom which clearly distinguishes it from its competitors. The video game in the middle also increases bonding between parents and children.', '2012123106131785.jpg', 'My Only Princess', 'Client Project', 'Audit,Identity,Experience,Strategic'),
(15, '<b>Challenge</b><br>\r\nThe Social Enterprise Business Centre is formed by HKCSS, HSBC and the HK Government with the purpose of providing professional opinion and consulting services to motivate the development of social enterprises. Eggshell’s task is to design a logo which can signify the triparte partnership between the government, commercial sector, and social sector.</br>\r\n<b>Solution</b><br>\r\nA triangular "wheel" is formed to represent the Social Enterprise Business Center, a tri-party partnership of the three key sectors in Hong Kong: the commercial sector (HSBC-red), social welfare sector (HKCSS - green) and the government ( grey/neutral color). The triangular "wheel"is at the same time comprised of three "i" to echo the three unique characteristics advocated in the slogan: "innovate", "incubate", and "invest".', '2013102512142089.jpg', 'HKCSS-HSBC Social Enterprise Business Centre', 'Client Project', 'Identity'),
(16, '<b>Challenge</b><br>\r\nThe Leisure and Cultural Services Department of the Hong Kong government has invited university students from four major universities in the city to create art pieces that will be installed in Hong Kong Park, Sha Tin Park, Kowloon Park, and Tuen Mun Park. They want to convey the message that art is not just meant to be admired in a museum or gallery and can be anywhere. So they started the ArtAlive campaign, assisted by art students from Hong Kong University, the Chinese University of Hong Kong, Hong Kong Polytechnic, and the Baptist University of Hong Kong. As it''s a long term campaign, Eggshell''s task was to create a campaign logo as well as the visual identity system which appealing to the public. \r\n</br>   \r\n<b>Solution</b><br>\r\nThe logo was created using hand written fonts and illustration to reflect the integration of the three essence of the campaign, city, art and greenery. The setting of several bright colors are to give public a fresh and youthful image. The visual systems include education kits, e-learning program, DVD package, web site, site indicators and promotion items, invitation card, gifts. etc...', '2012123103440359.jpg', 'artALIVE', 'Client Project', 'Identity,Experience,Strategic'),
(17, '<b>Challenge</b><br>\r\nThis Japanese-Korean fusion restaurant, Cookingmama360, is under the company Cafe de Coral. The brand name originates from a Japanese video game. Eggshell’s task is to design a trademark and application system that can be developed from this name.  \r\n</br> \r\n<b>Solution</b><br>\r\nConsidering the origin of the brand name, Eggshell has chosen  to shape two “M” letters with smoke raising from hot dishes in a digital style, and also with contracting colors of red and green which looks young and modern. Eggshell has also suggested using 3 playful and exciting digital toys as mascots, which are noodle soup, rice in stone pot, and pizza. Also, to emphasize on the dining experience and the concept of “fusion cooking”, specially designed utensils are suggested to cater to diner’s creativity and style.', '2012123109193248.jpg', 'Cooking Mama', 'Client Project', 'Identity,Experience,Strategic'),
(18, '<b>Product concept</b><br>\r\nEggshell Creative''s subsidiary brands', '2013010208382020.jpg', 'eg.G / wishing tree', 'Experimental Project', 'Experience,Strategic'),
(19, '<b>Challenge</b><br>\r\nChronosport brand originates in Italy, and it has developed as an importer, retailer and wholesalers of watches and jewelry since 1998. Chronosport seeks to rebrand itself with unique positioning in the luxury market, and Eggshell was invited to fulfill this project.   Solution  Our re-branding project for Chronosport starts with re-interpreting its brand essence, injecting extraordinary dynamics of metropolitan into the brand image. We also establish a visual identity system including brand logo, website, etc., to echo and enhance the updated brand concept. The color of orange is applied to evoke the uprising energy, and the logo is designed into a triangle halberd to reflect the brand story of a brave Greek god. As for Chronosport’s website, we utilized multimedia technique to enrich its variety, and to better present the brand essence of cosmopolitan. Eggshell was also in charge of Chronosport’s booth design at Hong Kong Watch & Clock Fair. The block-structured booth design was an interaction of different forms that emphasized on modernity and elegance, helping Chronosport gain more attention and exposure at the exhibition.', '2014011510080536.jpg', 'Chronosport', 'Client Project', 'Audit,Identity,Experience,Strategic,Management,Retain'),
(20, '<b>Challenge</b><br>\r\nThis is the second time for Eggshell to cooperate with Elements. To celebrate Chinese New Year, Elements launched a special cross-over installation with Liberty art fabric, and Eggshell’s task is to design for the promotional campaign. Solution Eggshell designs a key visual that incorporated fabric and floral prints. The tag line', '201401151003051.jpg', 'Elements', 'Client Project', 'Experience'),
(21, '<b>Challenge</b><br>\r\nMOON n HONEY is a subsidiary of Hong Kong famous brand, “Honeymoon Dessert Group”. Located in Mong Kok East Station, It aims to offer a new dining experience by providing small-size dessert of high quality and great flavor. Eggshell is designated to design a brand visual system for MOON n HONEY. Solution Considering the core DNA of the brand, fullness and satisfaction (滿), Eggshell has designed several motif for the concept of overflowing milk and honey, emphasizing Honeymoon’s corporate color－vivid orange. Eggshell develops these meaningful features into the brand logo with milk and honey dripping out of the letters M and O. These eye-catching and meaningful motifs are also used for multiple products from interior decoration, staff uniforms, to shop cards, food packages. They not only unify the visual elements, but also reflect the taste of richness and overflowing happiness during customersʼ eating experience.', '2014011510235736.jpg', 'Honeymoon dessert', 'Client Project', 'Audit,Identity,Experience,Strategic'),
(22, '<b>Challenge</b><br>\r\nIn the September of 2013, Elements celebrates its 6th\r\nanniversary since its opening in Hong Kong by launching\r\na large-scale floral art exhibition. Eggshell was invited to\r\ndesign for the promotional campaign of this special event.\r\n<br>Solution<br>\r\nIn this special exhibition, delicate floral art is presented\r\non plates on a long table. One of the highlights is a giant\r\nchair decorated with colorful fresh flowers. Capturing the\r\nessence of a flower feast, Eggshell designed a key visual\r\nof a giant silver chair full with flowers set in a vibrant\r\nEden Garden, emphasizing again the joyful celebration of\r\nthis memorable moments. Moreover, Eggshell designed a\r\nThank You card with more than static floral patterns. We\r\nuse die-cut technique to create a two-layered collage with\r\na sense of motion. It serves not only as a reminder of the\r\nbeautiful installation, and itself also a wonderful art piece.', '2014010809260580.jpg', 'Elements', 'Client Project', 'Experience');

-- --------------------------------------------------------

--
-- 表的结构 `case_client`
--

CREATE TABLE IF NOT EXISTS `case_client` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `images` varchar(30) DEFAULT NULL,
  `filed` varchar(10) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `case_client`
--

INSERT INTO `case_client` (`id`, `images`, `filed`, `description`) VALUES
(1, '2013010910260224.jpg', 'Clients', 'Client 1'),
(2, '2012123110283747.jpg', 'Cases', 'Case 1'),
(3, '2013010910261170.jpg', 'Clients', 'Client 2'),
(4, '2012103009372260.gif', 'Cases', 'Case 2'),
(5, '2012103009375290.gif', 'Cases', 'Case 3'),
(6, '2012123110263028.jpg', 'Cases', ''),
(7, '2012123110264560.jpg', 'Cases', ''),
(8, '2012123110285156.jpg', 'Cases', ''),
(9, '2012123110270317.jpg', 'Cases', ''),
(10, '2012123110271357.jpg', 'Cases', ''),
(11, '2012123110272167.jpg', 'Cases', ''),
(12, '2012123110272950.jpg', 'Cases', ''),
(13, '2012123110273785.jpg', 'Cases', ''),
(16, '2012123110291074.jpg', 'Cases', ''),
(18, '2012123110292766.jpg', 'Cases', ''),
(19, '2012123110293492.jpg', 'Cases', ''),
(20, '2013010910262498.jpg', 'Clients', '');

-- --------------------------------------------------------

--
-- 表的结构 `case_picture`
--

CREATE TABLE IF NOT EXISTS `case_picture` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `case_id` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- 转存表中的数据 `case_picture`
--

INSERT INTO `case_picture` (`id`, `image`, `description`, `case_id`) VALUES
(1, '2012122804045932.jpg', '', 1),
(5, '2013010210312979.jpg', '', 6),
(6, '2012122804153250.jpg', '', 2),
(7, '2012122804153851.jpg', '', 2),
(8, '2012122804154637.jpg', '', 2),
(10, '2012122804191754.jpg', '', 2),
(11, '2012122804201298.jpg', '', 2),
(12, '201212280430438.jpg', '', 3),
(13, '2012122804305918.jpg', '', 3),
(14, '2012122804311020.jpg', '', 3),
(15, '2012122804311785.jpg', '', 3),
(16, '2012122804312925.jpg', '', 3),
(17, '2012122804413220.jpg', '', 4),
(18, '2012122804460156.jpg', '', 4),
(19, '201212280446086.jpg', '', 4),
(20, '2012122804461894.jpg', '', 4),
(21, '2012122804462927.jpg', '', 4),
(23, '2012122812104287.jpg', '', 8),
(24, '2012122812105218.jpg', '', 8),
(25, '2012122812130422.JPG', '', 8),
(26, '2012122812113452.jpg', '', 8),
(27, '2012122812114373.jpg', '', 8),
(29, '2013102512233763.jpg', '', 15),
(34, '2012123104190579.jpg', '', 10),
(35, '2012123104192367.jpg', '', 10),
(36, '2012123104193539.jpg', '', 10),
(37, '2012123104290239.jpg', '', 10),
(38, '2012123104551656.jpg', '', 10),
(39, '2012123104462473.jpg', '', 10),
(40, '2012123104550140.jpg', '', 10),
(41, '2012123104483946.jpg', '', 11),
(42, '2012123104514453.jpg', '', 9),
(43, '2012123105034918.jpg', '', 9),
(44, '2012123105025753.jpg', '', 9),
(45, '2012123105031175.jpg', '', 9),
(46, '2012123105104935.jpg', '', 13),
(47, '2012123105133268.jpg', '', 13),
(48, '2012123105185565.jpg', '', 2),
(49, '2012123105461957.jpg', '', 2),
(50, '2012123105485895.jpg', '', 2),
(51, '2012123105583358.jpg', '', 16),
(52, '201212310558479.jpg', '', 16),
(53, '2012123106013113.jpg', '', 16),
(54, '2012123106014793.jpg', '', 16),
(55, '2012123106134612.jpg', '', 14),
(56, '201212310614077.jpg', '', 14),
(57, '2012123107580350.jpg', '', 7),
(58, '2012123107592258.jpg', '', 7),
(59, '2012123108063778.jpg', '', 7),
(60, '201212310839521.jpg', '', 1),
(61, '2012123108525880.jpg', '', 13),
(62, '2012123108535420.jpg', '', 13),
(63, '2012123109121989.jpg', '', 7),
(64, '2012123109234143.jpg', '', 17),
(65, '2012123109235553.jpg', '', 17),
(66, '2012123109243071.jpg', '', 17),
(67, '2012123109263544.JPG', '', 12),
(68, '2012123109265047.jpg', '', 12),
(69, '2012123109270532.jpg', '', 12),
(70, '2012123109275163.jpg', '', 12),
(71, '2013010208374133.jpg', '', 18),
(72, '2013010208432790.jpg', '', 18),
(73, '2013010208433422.jpg', '', 18),
(74, '2013010208502346.jpg', '', 18),
(75, '2013010208492474.jpg', '', 18),
(76, '2013010208555315.jpg', '', 18),
(77, '201301020855591.jpg', '', 18),
(78, '2013010210584817.jpg', '', 3),
(79, '2013010211024213.jpg', '', 6),
(80, '2013011107533670.jpg', '', 14),
(81, '2013011109021327.jpg', '', 17),
(82, '201301170349214.png', '', 8),
(83, '2013011703493133.jpg', '', 8),
(84, '2013012804224836.png', '', 4),
(85, '2013012804230680.jpg', '', 4),
(86, '2013012804231633.png', '', 4),
(87, '2013012804374656.jpg', '', 4),
(88, '2013012804375625.jpg', '', 4),
(89, '2014010808330427.jpg', '', 19),
(90, '2014010808331842.jpg', '', 19),
(91, '2014010808332946.jpg', '', 19),
(92, '2014010808333979.jpg', '', 19),
(93, '2014010808335144.jpg', '', 19),
(94, '2014010808344028.jpg', '', 19),
(95, '2014010808344659.jpg', '', 19),
(96, '2014010809155111.jpg', '', 20),
(97, '2014010809160283.jpg', '', 20),
(98, '2014010809161767.jpg', '', 20),
(99, '2014010809162628.jpg', '', 20),
(100, '2014010809163491.jpg', '', 20),
(101, '2014010809164017.jpg', '', 20),
(102, '2014010809195589.jpg', '', 21),
(103, '2014010809200243.jpg', '', 21),
(104, '2014010809200919.jpg', '', 21),
(105, '2014010809201594.jpg', '', 21),
(106, '2014010809202512.jpg', '', 21),
(107, '2014010809203417.jpg', '', 21),
(109, '2014010809210045.jpg', '', 21),
(110, '201401080921072.jpg', '', 21),
(111, '2014010809261862.jpg', '', 22),
(112, '20140108092643100.jpg', '', 22),
(113, '2014010809265033.jpg', '', 22),
(114, '2014010809265954.jpg', '', 22);

-- --------------------------------------------------------

--
-- 表的结构 `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `client`
--

INSERT INTO `client` (`id`, `image`, `content`, `description`) VALUES
(1, '20121017180400.gif', 'http://www.eggshell.com.hk', '<i>From <b>Play Ltd.:</b></i></br> "I really like about Eggshell''s service is that they use the angle of a friend in analyzing different ideas'),
(3, '20121017180713.gif', 'http://www.eggshell.com.hk', 'Emperor'),
(4, '20121017180726.gif', 'http://www.eggshell.com.hk', 'client 3'),
(5, '20121017180739.gif', 'http://www.eggshell.com.hk', 'and situations. Working with Eggshell is also like working with friends.'),
(6, '20121017180755.gif', 'http://www.eggshell.com.hk', 'Overall, cooperating and working together with Eggshell has been a very pleasant and enjoyable experience.'),
(7, '20121017180927.gif', 'http://www.eggshell.com.hk', '2'),
(8, '20121017180814.gif', 'http://www.eggshell.com.hk', 'Eggshell has been a very pleasant and enjoyable experience."'),
(9, '20121017180823.gif', 'http://www.eggshell.com.hk', '--<i><b>Sam Lo</b></i> /Managing Director of Play Ltd.'),
(10, '20121017180831.gif', 'http://www.eggshell.com.hk', '<i>From <b>Mabushi Ltd.</b></i></br>: \r\n"I appreciate it very much that eggshell can offer profesional suggestion on both visual design and business strategy." '),
(11, '20121017180838.gif', 'http://www.eggshell.com.hk', '<i>From <b>Mabushi Ltd.:</b></i></br>\r\n"I appreciate ir very much that Eggshell has been offered professional suggestions both on desin and business strategy '),
(12, '20121017180938.gif', 'http://www.eggshell.com.hk', ''),
(13, '20121017180945.gif', 'http://www.eggshell.com.hk', ''),
(14, '20121017180951.gif', 'http://www.eggshell.com.hk', 'business strategy. The strategy they suggested also meets us where we headed for. We''d like to maintain the long partnership between Eggshell as well."'),
(15, '20121017180958.gif', 'http://www.eggshell.com.hk', 'dasdas'),
(16, '20121017181004.gif', 'http://www.eggshell.com.hk', 'czxcxzc'),
(17, '20121017181027.gif', 'http://www.eggshell.com.hk', '--<i><b>Steven Shiu</b></i> Branding manger of Mabushi LED'),
(18, '20121017181034.gif', 'http://www.eggshell.com.hk', ''),
(19, '20121017181040.gif', 'http://www.eggshell.com.hk', ''),
(20, '20121017181046.gif', 'http://www.eggshell.com.hk', ''),
(21, '20121017181053.gif', 'http://www.eggshell.com.hk', ''),
(22, '20121017181059.gif', 'http://www.eggshell.com.hk', ''),
(23, '20121017181104.gif', 'http://www.eggshell.com.hk', ''),
(24, '20121017181112.gif', 'http://www.eggshell.com.hk', ''),
(25, '20121017181203.gif', 'http://www.eggshell.com.hk', ''),
(26, '20121017181215.gif', 'http://www.eggshell.com.hk', 'dasdthfhgfhg'),
(27, '20121017181150.gif', 'http://www.eggshell.com.hk', 'xfgxf'),
(28, '20121017181230.gif', 'http://www.eggshell.com.hk', 'hcvhfg'),
(29, '20121017181237.gif', 'http://www.eggshell.com.hk', 'gdzdfxd'),
(30, '20121017181247.gif', 'http://www.eggshell.com.hk', 'sdfgsdf'),
(31, '20121017181253.gif', 'http://www.eggshell.com.hk', 'hfghs'),
(32, '20121017181305.gif', 'http://www.eggshell.com.hk', ''),
(33, '20121017181312.gif', 'http://www.eggshell.com.hk', ''),
(34, '201401140853097.png', '', '新世紀'),
(35, '2014011408532057.png', '', '時富金融\r\n'),
(36, '2014011408534474.png', '', '滿記甜品'),
(37, '2014011408535618.png', '', ''),
(38, '2014011408542686.jpg', '', 'Telford\r\n'),
(39, '2014011408562972.png', '', '私隱專員公署'),
(40, '2014050506203991.jpg', '', 'Chronosport');

-- --------------------------------------------------------

--
-- 表的结构 `common_text`
--

CREATE TABLE IF NOT EXISTS `common_text` (
  `id` varchar(20) DEFAULT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `common_text`
--

INSERT INTO `common_text` (`id`, `value`) VALUES
('footer', '<p><strong>Disclaimer</strong>: All content on our website is assembled and\n tested carefully. A liability or guarantee of accuracy, completeness \nand timeliness will be declined. This also applies for all other \nhyperlinked sites. We are not responsible for the content of \nhyperlinked websites. We preserve the right to update, change or add \ninformation or data. <strong><br></strong></p><p><strong>Copyright</strong>: The structure and all \ncontent of this website is copyrighted by Eggshell Creative Consultancy.\n Reproduction of information or data, especially the use of text, \npictures or programming code in external documents or websites requires \nour affirmation. The name, logo and slogan for Eggshell Creative are registered trademark of Eggshell Creative Consultancy.<br></p>'),
('company_background', '<span style="font-weight: bold;">About Eggshell, Origin of Possibility</span><br><br>Eggshell Creative is a strategic Branding and Advertising Consultancy established in Hong Kong, 2005. We are equipped with business strategy development forces, a research team, and multi-media designers in various lifestyle branding business ranging from Food and Beverage, Appeal and Jewelry, Property and Living to Shopping mall. Eggshell brings you inspiring business solutions that add up over time. &nbsp;<br><br>Eggshell creates meaningful relationship between lifestyle brands and its customers by our own developed methodology based on reliable and cutting edge rationale evolved years of practice. Expertise in designing a holistic and compelling customer experience, we connect various touch-points seamlessly through product strategy service model, brand message, visual communication, brick and mortar, and other digital interaction etc. Not only focusing on tailoring distinctive image and brand message for our clients, but to look into their business model, to assess whether their backstage system is efficient enough to support the brand new experience in the front stage.&nbsp; Eggshell has advanced client''s brands with strategic approaches and continuous follow-up services, to keep clients optimistic, turning challenges into beneficial opportunities. <br><br>Here in Eggshell Creative, you can experience infinite possibilities is tailoring for you.<br><br><span style="font-weight: bold;">Our Aspiration</span><br><br>Eggshell believes that every member in the team has unique originality, life philosophy and a different ideal towards design and creation. By developing successful brands and strategies, we aim at nurture the public on multi-culture in a delightful way. Containing interesting and meaningful culture codes, Eggshell''s design provides customers a wider view and inspiration that uplift their spirit on rejuvenate the attitudes towards our world. Meanwhile, having an unconventional design both fulfills the needs for functioning and aesthetic requirement, Eggshell echos the mission of being “origin of possibilities ”<br><br><span style="font-weight: bold;">About “Eggsheller"</span><div><b><br></b>Eggshellers come from different design expertise and professional who are/have been working or has very close relationship with Eggshell family. Those include our existing and former colleagues, interns, advisers and strategic partners. For years we have been sparking up with creativeness by embracing the attitude of seeing extraordinary in every ordinary pieces.&nbsp; Eggshell also leverages design thinking to explore the possibilities of people and things. We hope it''s not only for Eggshellers, but the business partners and friends who can be all inspired by the passion of us in seeking infinite possibilities. <br>\n</div>'),
('vision', '"Firstly, Eggshell has provided excellent service even to a small/ medium business such as ours. Staffs at Eggshell have also been very patient in listening to our needs. Their follow-ups and replies have always been very quick. Ideas and suggestions have also been very professional. One thing I really like about Eggshell''s service is that they use a friend''s perspective to analyze different ideas and situations. Working with Eggshell is like working with friends.<br>Overall, cooperating and working together with Eggshell has been a very pleasant and enjoyable experience."<br><br><p><b>Sam Lo / Managing Director of Play Ltd. <br></b></p><p><br></p>“We appreciate it very much that Eggshell Creative has been offered professional suggestions both in visual design and marketing strategy design. These suggestions also go very well with our brand aspiration. Weʼd like to keep a long-term relationship with Eggshell”<br><br><p><b>Steven Shiu / Brand Manager of Mabushi LED<br></b></p><p><br></p>"Eggshell Creative is a design company which serves with a heart and a listening ear. Besides creativity, the company is willing to share my insights and then try their best to help me accomplish my every task. After all, it is the mutual trusting and respectful relationships that finally brought us extraordinary designs."<br><br><p><b>Elaine Yeung / Former Editor of United Christian College (Kowloon East)</b></p><p><b><br></b></p><p>"My brief work term at Eggshell Creative has allowed me to meet many new people, learn several new programs, and improve my design skills. Overall, it has been an amazing experience and it has taught me that I may want to go into an occupation related to design in the future."</p><p><br></p><p><strong>Helen Mak / Student Intern on 2011/ Architectural studies, Careleton University, Canada</strong></p>');

-- --------------------------------------------------------

--
-- 表的结构 `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comments` text,
  `time` datetime DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `contact_us`
--

INSERT INTO `contact_us` (`name`, `company`, `email`, `phone`, `comments`, `time`, `id`) VALUES
('hongri', 'test', 'test@test.com', '15900686646', 'good!', '2012-10-30 07:30:35', 58),
('Wun Entory', 'ABC Co.', 'entory@rednick.org', '1325486145', 'I am dkk lllll', '2012-11-13 12:02:35', 59),
('Mr. Law', 'Twiggy Liu Law Office', 'lawtcr@gmail.com', '21550288', 'We are a legal firm based in Hong Kong and would like to revamp our website.  We would like to see if you would take on the project.', '2013-10-08 10:53:40', 60),
('Hans Lam', 'iSmart Technology Limited', 'hans.lam@ismartech.com', '60557856', 'Dear Sir / Madam,\n\nGood day. This is Hans from iSmart.\nWe provide card printer / consumables and software to our clients.\n\nWould you consider to provide your member/ staff with smart card?\n\nWe could also provide pre-printed card service.\nJust in case you are interested, please feel free to contact me and I would share you with our experience serving like ERB / Nike / University of Macau, etc.\n\nThank you.', '2013-12-03 07:21:00', 61),
('Mr. Lai', 'Poly U', 'pasunine@icloud.com', '66848395', '畢業生簡歷書\n\n報價下列費用例明細側：\nA設計  \nB印刷製作 1,000 pcs ／ 2,000 pcs\n\n。 總共大約106頁（待定）\n。 周圍77頁的簡歷（待定）\n。 部分頁面（待定）\n。 包括照片的使用\n。 折疊尺寸： 210mmW x 297mmH\n。 封面4PP +文字100pp\n。 封面 - 260克啞粉卡，彩+全彩\n。 文字 - 128克啞粉紙， 4C +4 C\n \n急切', '2014-05-19 11:18:47', 62);

-- --------------------------------------------------------

--
-- 表的结构 `ecards`
--

CREATE TABLE IF NOT EXISTS `ecards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `filed` varchar(30) NOT NULL,
  `href` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `ecards`
--

INSERT INTO `ecards` (`id`, `image`, `content`, `filed`, `href`) VALUES
(1, '2012112007322214.png', '2007 Lunar New Year', 'E-cards', 'http://www.eggshell.com.hk/ecard/cny07.html'),
(2, '201211200732473.jpg', '2007 Ester', 'E-cards', 'http://www.eggshell.com.hk/ecard/easter07.html'),
(3, '2012112007330832.png', '2008 Lunar New Year ', 'E-cards', 'http://www.eggshell.com.hk/ecard/cny08.html'),
(4, '2012112007333935.png', '2008 Mid-Autumn ', 'E-cards', 'http://eggshell.com.hk/ecard/08/midautumn_ecard.html'),
(5, '201211200734026.png', '2008 Christmas ', 'E-cards', 'http://www.eggshell.com.hk/ecard/2008_xmas.html'),
(6, '2012112007343148.png', '2009 Lunar New Year', 'E-cards', 'http://eggshell.com.hk//ecard/2009_lny/2009_lny.html'),
(7, '2012112007372278.png', '2009 Labour Day', 'E-cards', 'http://www.eggshell.com.hk/ecard/2009_working.html'),
(8, '2012112007353790.jpg', '2009 Christmas', 'E-cards', 'dsadsada'),
(9, '2012112007351917.png', '2010 Lunar New Year', 'E-cards', 'http://ecard.eggshell.com.hk/'),
(10, '2012112007375779.png', '2010 Christmas ', 'E-cards', 'http://www.eggshell.com.hk/ecard/ecard%202010%20xmas.html'),
(11, '201211200738303.jpg', '2011 Lunar New Year', 'E-cards', ''),
(12, '2012112007385973.jpg', '2011 Easter ', 'E-cards', 'http://www.eggshell.com.hk/ecard/easter2011.html'),
(13, '201211200739294.png', '2011 Mid-Autumn Festival', 'E-cards', 'http://www.eggshell.com.hk/ecard/midAutumn2011.html'),
(14, '2012112007400686.png', '2011 Christmas ', 'E-cards', 'http://www.eggshell.com.hk/ecard/xmas2011.html'),
(15, '2012112007405291.png', '2012 CNY Red roll', 'Experiemental Product', 'http://www.popcoinz.com/ecard/newyear2012/printa.pdf'),
(16, '2012112007424789.jpg', '2012 Mid-Autumn Festival', 'E-cards', 'http://www.eggshell.com.hk/2012_moonfestival.html'),
(17, '2013010910483767.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_bulb2.jpg'),
(18, '2013010910492252.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_crown.jpg'),
(19, '2013010910502358.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_eyewear_007.jpg'),
(20, '2013010910504115.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_lip.jpg'),
(21, '201301091051045.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_mouse.jpg'),
(22, '2013010910512645.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_pack3.jpg'),
(23, '2013010910515986.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_salt_b.jpg'),
(24, '2013010910521323.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/egg_stand.jpg'),
(25, '2013010910524937.jpg', '', 'Download', 'http://www.eggshell.com.hk/download/helicopter_egg.jpg'),
(26, '201301091110389.jpg', '2012 Christmas', 'E-cards', 'http://www.eggshell.com.hk/NewXmas.html'),
(27, '2013020612021419.png', '2013 Lunar New Year', 'E-cards', 'http://www.eggshell.com.hk/NewyearE4.html'),
(28, '2013091806012064.png', '2013 Mid-Autumn Festival', 'E-cards', 'http://www.eggshell.com.hk/moon2013_V8.html'),
(29, '2013122403111152.jpg', '2013 Christmas', 'E-cards', 'http://www.eggshell.com.hk/2013_xmas.html');

-- --------------------------------------------------------

--
-- 表的结构 `eggsheller`
--

CREATE TABLE IF NOT EXISTS `eggsheller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `pinterest` varchar(100) DEFAULT NULL,
  `content` text,
  `email` varchar(40) DEFAULT NULL,
  `filed` varchar(20) DEFAULT NULL,
  `interview` text,
  `photo` varchar(30) DEFAULT NULL,
  `detail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- 转存表中的数据 `eggsheller`
--

INSERT INTO `eggsheller` (`id`, `name`, `image`, `pinterest`, `content`, `email`, `filed`, `interview`, `photo`, `detail`) VALUES
(1, 'Viola PAK', '2013010713130044.jpg', 'http://www.pinterest.com/violapak', '-Commercial strategic planning<br>\r\n-Designing brand image for different industries<br>\r\n-Innovative and in-depth design<br>\r\n-Involved in the design process with a focus on client experience<br>', 'Creative & Branding Director', 'Strategic', '-HKPU / Bachelor of Arts Degree<br>\r\n-HKPU/ Master of Design (Design Strategy) degree<br>\r\n-Full Member of Hong Kong Designer Association<br> \r\n-Part Time Lecturer of Hong Kong Productivity Council<br>\r\n-Design award winner<br>\r\n-Honored as “Youth Entrepreneur” by HKFYG<br>', '2013010713130052.jpg', '<span>Named as "one of Hong Kong''s fast-trending designer in recent years" and "Hong Kong branding new star", Viola is g</span>rowing\n up and being well-equipped as a strategic designer in a large - scaled \nmulti-disciplinary cultural organization for nearly 10 years. Her dream \ncompany was started in 2005. She&nbsp;is now driving her strategic vision and\n leading the growth of Eggshell substantively by ensuring her team to \ndeliver prestige branding strategy and exceptional client experience on \nevery single project. Her formula is: Creative + Possibility + Context =\n High-level branding strategy. This brings creditability to maintain her\n clients'' relationships. Her greatest satisfaction, other than \nmanipulating her creative mind, is on delivering great employee \nexperience by digging out the possibilities of them.&nbsp;Viola\n has achieved the Hong Kong Polytechnic University’s Bachelor of Arts \ndegree (Graphic Design) and Master of Design (Design Strategy) degree. \nShe is also a full member of The Hong Kong Designers Association and the\n part time lecturer of Hong Kong Productivity Council. Recently, to keep\n up with the rising professional standards in the industry, she has \nexpanded her scope of design expertise by obtaining a Diploma in \nArchitecture and Interior Design, also a certificate in Fashion and \naccessory design in Milan.<p></p><p><br></p><p></p><b><br></b>\n<p></p>\n<p></p>'),
(19, 'Viola PAK', '2013010906085028.jpg', '', 'Cat, Marketer, Designer, Administrator', 'Creative and Branding Director', 'Designer', '"When life gives you lemons, make lemonade"  ', '2013010708253796.jpg', '<p>&nbsp;</p>'),
(20, 'Entory WUN', '2013010906044877.jpg', '', 'Dog, Marketer, Copywriter, Administrator, Advisor', 'Marketing & Sales Advisor', 'Designer', '"I do the best, God do the rest."', '2013010709522363.jpg', NULL),
(22, 'Juliana CHENG', '2013010712044815.jpg', '', 'Designer, Photographer, Cat', 'Chief Designer', 'Designer', '"Things always seem impossible until they are done"', '2013010906164461.jpg', '<br>'),
(23, 'Linus DONG', '2013010712135257.jpg', '', 'New Media, Cat, Marketer, Designer, Copywriter', '', 'Designer', '"Fear is a liar"', '2013010712135279.jpg', NULL),
(24, 'Winnie FUNG', '2013010712213244.jpg', '', 'Cat, Marketer, Copywriter, Administrator', '', 'Designer', '"Always aim high."', '2013010712213245.jpg', '<p>&nbsp;</p>'),
(25, 'CK Chung', '2013010712231993.jpg', '', 'Designer', '', 'Designer', '"WHY NOT?"', '2013010712231996.png', NULL),
(26, 'Mini YUENG', '2013010712243580.jpg', '', 'Designer', '', 'Designer', '"Learn form yesterday; Live for today; Hope for tomorrow!"', '2013010712243544.png', NULL),
(27, 'Helen MAK', '2013010712282781.jpg', '', 'Designer', '', 'Designer', '"Actions speak louder than words."', '2013010712264071.png', NULL),
(28, 'Veronica Yim', '2013010712274599.jpg', '', 'Copywriter, Administrator', '', 'Designer', 'Fall seven times get up eight.', '2013010712274574.png', NULL),
(29, 'Joan Joan', '2013010712405989.jpg', '', 'IT, Administrator', '', 'Designer', 'Eggshellism - Inifinite creativity to design a better world.', '2013010712405948.jpg', NULL),
(30, 'TYM TANG', '2013010712441826.jpg', '', 'Designer, Photographer, New Media', '', 'Designer', 'Be proud of what you''re doing.', '2013010712441865.jpg', NULL),
(31, 'Samule NG', '2013010712463462.jpg', '', 'Designer', '', 'Designer', 'Good design is as little design as possible. Less, but better.', '2013010906304563.jpg', NULL),
(32, 'Alvin CHUNG', '2013010712505193.jpg', '', 'IT, Designer, New Media, Administrator, Cat', '', 'Designer', '"Fight for your life!"', '20130107125051100.jpg', NULL),
(33, 'Josilyn TAN', '2013010712540970.jpg', '', 'Copywriter, Administrator', '', 'Designer', 'To be creative is to dwell in endless possibility.', '2013010712540990.jpg', NULL),
(34, 'James WANG', '2013010712594330.jpg', '', 'Designer', '', 'Designer', 'Great design is when there is nothing left to take away.', '2013010712594383.jpg', NULL),
(35, 'Janet LOK', '2013010713030535.jpg', '', 'Dog, Marketer, Copywriter, Administrator', '', 'Designer', 'Origin of Possibilities', '2013010713030553.jpg', NULL),
(36, 'Derek MAK', '2013010713055895.jpg', '', 'Designer', '', 'Designer', 'Even it is difficult, but still try to do the best. This is what I see, and what I need to learn.', '2013010713055884.png', NULL),
(37, 'Kira CHOU', '2013010713091180.jpg', '', 'Designer', '', 'Designer', 'Origin of Possibilities', '2013010713091167.jpg', NULL),
(38, 'Jamie YIP', '2013010804252219.jpg', '', 'Administrator', '', 'Designer', 'Original of Possibilities', '2013010804252244.jpg', NULL),
(39, 'Gabriela ZHANG', '2013010804295555.jpg', '', 'Marketer, Copywriter, Administrator', '', 'Designer', 'Open Eggshell, creativity flows out.', '2013010804295584.jpg', NULL),
(40, 'Rainbow LAI', '2013010804342425.jpg', '', 'Designer, Cat', '', 'Designer', 'The ''design process'' is a ''problem-solving process'' which works by consultation and consensus.', '2013010804342437.jpg', NULL),
(41, 'Ryan LI', '2013010804443724.jpg', '', 'Dog, Marketer, Administrator', '', 'Designer', 'Eggshell is indeed an extraordinary fertilizer.', '2013010804443750.jpg', NULL),
(42, 'Benny YAU', '2013010804490775.jpg', '', 'Designer', '', 'Designer', 'Think sharp, stay aware.', '2013010804490777.jpg', NULL),
(43, 'Gavin LEUNG', '2013010804525776.jpg', '', 'Photographer, Dog, Designer', '', 'Designer', 'Life is full of regret, make them as little as you can.', '2013010804525741.jpg', NULL),
(44, 'Kazaam CHAN', '2013010804591963.jpg', '', 'Designer, Dog, New Media', '', 'Designer', 'Original of Possibilites', '2013010804591978.jpg', NULL),
(45, 'Alice CHAN', '2013010805031595.jpg', '', 'Designer', '', 'Designer', 'Keep trying, hold on, and always, always, always believe in yourself, because if you don''t, then who will?', '2013010805031596.jpg', NULL),
(46, 'Jeffrey LEUNG', '2013010805245149.jpg', '', 'Designer, Administrator', '', 'Designer', 'Original of Possibilites', '2013010805245151.jpg', NULL),
(47, 'Cindy CHEONG', '2013010805304417.jpg', '', 'Designer', '', 'Designer', 'Original of Possibilites', '201301080530447.jpg', NULL),
(48, 'Timothy LAI', '201301080538582.jpg', '', 'Dog, Copywriter, Administrator', '', 'Designer', 'Original of Possibilites', '2013010805385866.jpg', NULL),
(50, 'Candy FONG', '2013010906141867.jpg', 'http://www.pinterest.com/candy0704', '-Experienced in managing marketing promotional projects in both Mainland and HK<br>\r\n-Experienced in Production control like printing and packaging<br> \r\n-Have solid network of quality printers in HK<br>\r\n-Sophisticated in customer service', 'Account & Production Manager', 'Strategic', '-Graduated from Hong Kong Baptist University with major in Marketing<br>\r\n-Managed design department  of Che San Group<br>', '201301090614189.jpg', '<p>Candy was shaped as a sophisticated marketer in the years of her career, starting from the head of a Design &amp; Production Development Division under a large famous paper trading company where she was responsible for in-house cohesive promotion and production projects. She also played another role of being the business development and marketing manager. Due to her passion towards her work, she equipped herself with strong promotional senses from organizing various exhibitions, to contributing to seminars and site visits in Hong Kong, Shenzhen, Guangzhou and Shanghai. She enriched her knowledge in the printing business and broadened her network of quality printers and manufacturers through the cooperation with directors of various printers associations. Now in the team of Eggshell Creative Consultancy, Candy wears the same hat and is always ready to break her limitation, with her mind open to meet clients’ needs, aiming to purse total satisfaction for her clients. In order to transform possibilities into reality, she tries her very best in supervising and monitoring the quality of final delivery to offer our clients tailor-made and innovative printing and media solutions, helping their brands to sprint past keen competition.<br>\n</p>\n<p></p>'),
(51, 'Candy FONG', '2013010906214253.jpg', '', 'Marketer, Administrator', 'Project manager and Production Consultan', 'Designer', 'Be a warrior, not a worrier', '2013010906214246.jpg', NULL),
(52, 'Lok CHAN', '2013010906270112.jpg', '', 'Designer', '', 'Designer', 'Original of Possibilites', '2013010906270167.jpg', NULL),
(53, 'Fion LEUNG', '2013010906274174.jpg', '', 'Dog, Marketer, Copywriter, Administrator', '', 'Designer', '"You''re awake? Start dreaming!" ', '2013010906274198.jpg', NULL),
(54, 'Snowman LEUNG', '2013011003024399.jpg', '', 'Designer, Cat', '', 'Designer', 'Design is what nobody knows', '2013011003024394.JPG', NULL),
(56, 'Bernard SUEN', '2013052304192811.jpg', '', '-Business Operation<br>\r\n-New media<br>\r\n-Creative Entrepreneurship<br>', 'New Media Advisor', 'Designer', '-Provides consulting services on management in US<br>\r\n-Information and Technology Director in HK media industry<br>\r\n-Project Director of CUHK Centre for Entrepreneurship<br>\r\n-Provides training for government and private corporations<br>', '2013052304192888.jpg', NULL),
(57, 'Eric LUK', '201305230425519.jpg', '', 'Photographer, Designer, Cat', '', 'Designer', '"It''s not that we need new ideas, but we need to stop having old ideas." <br>Edwin Land, the inventor of polaroid camera', '2013052304255147.jpg', NULL),
(58, 'Leo PAK', '2013052304282153.jpg', '', 'IT, Photographer, Designer, Cat', '', 'Designer', 'Origin of Possibilities', '2013052304282171.jpg', NULL),
(60, 'Mo CHAN', '2013052304293655.jpg', '', 'Designer, New Media, Cat', '', 'Designer', 'Origin of Possibilities', '2013052304293613.jpg', NULL),
(62, 'Anita KWOK', '2013052405555640.jpg', '', '', '', 'Designer', 'Life is what thoughts make it', '2013052405555650.jpg', NULL),
(64, 'Edith WONG', '2013052405585797.jpg', '', '', '', 'Designer', 'Sometimes I think, sometimes I don''t, because I only live once', '2013052405585737.jpg', NULL),
(66, 'Hoi WONG', '2013052405595430.jpg', '', '', '', 'Designer', 'Origin of Possibilities', '2013052405595469.jpg', NULL),
(67, 'Ming LIU', '2013052406001483.jpg', '', '', '', 'Designer', 'Origin of Possibilities', '2013052406001453.jpg', NULL),
(68, 'Nelson Tsui', '2013052406063568.jpg', '', '', '', 'Designer', 'What''s important won''t rest', '2013052406063596.jpg', NULL),
(69, 'Spanda HO', '2013052406065941.jpg', '', 'Dog', '', 'Designer', 'Origin of Possibilities', '201305240606598.jpg', NULL),
(70, 'Tiffany Lee', '2013052406072039.jpg', '', '', '', 'Designer', '"What doesn''t kill you only makes you stronger"', '2013052406072075.jpg', NULL),
(71, 'Zwing YOUNG', '2013052406074179.jpg', '', '', '', 'Designer', '"Be true to who you are."', '2013052406074165.jpg', NULL),
(72, 'Apple TAI', '2013052708220233.jpg', '', '', '', 'Designer', 'Origin of Possibilities', '2013052708220284.jpg', NULL),
(73, 'Samatha CHAN', '2013052708233373.jpg', '', 'Dog, Marketer, Administrator', '', 'Designer', 'Origin of Possibilities', '2013052708233345.jpg', NULL),
(74, 'Haven LAU', '2013081513370780.png', '', 'Cat, Dog, Administrator', '', 'Designer', 'Do what you like the most', '201308151337071.png', NULL),
(77, 'George WOO', '2013082312175993.jpg', '', 'Dog, Advisor', 'Environmental Advisor', 'Designer', '"Be Kind to our Kids, go green and go healthy"', '2013082312175971.jpg', NULL),
(78, 'Psyche LAM', '2013082312482467.jpg', '', 'Designer, Cat, Dog', '', 'Designer', 'Definitely indefinite', '2013082312482470.jpg', NULL),
(79, 'Dr. Hilton CHAN', '2013082312505994.jpg', '', 'IT, Business, Advisor', 'Business & IT Advisor', 'Designer', 'Innovation in every possibility.', '2013082312505959.jpg', NULL),
(81, 'George WOO', '2013082313372467.jpg', '', '', 'Environmental Advisor', 'Advisors', '', '2013082313372481.jpg', NULL),
(82, 'Spencer CHOW', '2013082314255542.jpg', '', 'Photographer, Designer, Cat, Dog', '', 'Designer', 'Blast till last!', '2013082314255537.jpg', NULL),
(83, 'Entory WUN', '2013083009035970.jpg', '', '-Strategic Plan<br>\r\n-Logic & Business Thinking<br>\r\n-Sophisticated in project and event management<br>\r\n-Sophisticated in retail marketing<br>', 'Marketing & Retail Advisor', 'Advisors', '-Former Associate Marketing and Sales Director of Eggshell Creative<br>\r\n-Event management<br>\r\n-Retail management, merchandising and supply chain development<br> \r\n-Lecturer of London City & Guilds Sales Professional program and Vocational Training Council<br>', '2013083009035973.jpg', NULL),
(85, 'Keira ZHAO', '2014010302553418.jpg', '', 'Cat, Mainland', '', 'Designer', 'Stay ALIVE!', '2014010302553467.jpg', NULL),
(86, 'Johnny CHUNG', '2014012211175751.jpg', '', 'HK, Dog', '', 'Designer', 'Life is either a daring adventure or nothing at all.', '2014012211175780.jpg', NULL),
(88, 'Polly Kwan', '2014012308563043.jpg', '', '', 'Marketing and Research Assistant', 'Designer', 'Even the longest journey begins with a single step .', '2014012308563065.jpg', NULL),
(89, 'Bernard Suen', '2014041106325522.jpg', '', 'Advisor, New Media, Business', 'New Media & Business Advisor', 'Designer', 'Origin of Possibility', '2014041106325516.jpg', NULL),
(90, 'Zoa Ng', '2014042209215347.jpg', '', '', '', 'Designer', 'Life begins at the end of your comfort zone.', '2014042209215374.jpg', NULL),
(91, 'Kenneth Li', '201404220927384.jpg', '', '', '', 'Designer', 'Seriously unserious.', '2014042209273833.jpg', NULL),
(92, 'Juliana Cheng', '2014052209040443.jpg', '', '', 'Senior Designer', 'Strategic', '', '2014052209040432.jpg', '<p>Our senior Designer Juliana is known for her persuasive and artistic style of graphic\rcommunication. Graduated with Multimedia Design and Technology High Diploma from Hong\rKong Polytechnic University and Bachelor Degree of graphic Design in Nottingham Trent\rUniversity in England, Juliana is now very experienced in branding, advertisement design,\rmultimedia design, package design and 3D design,etc. Juliana was interested in design since she\rwas very young and has determined to become an outstanding designer at her early childhood.\rJuliana has gained years of experience in working for different brands, she thinks it is very\rchallenging in cooperating with various brands. However, it is very rewarding as they taught her to\rbe more sensitive to brand values while contributing in building up the brand. Juliana does not only\rpay attention to every client’s opinions, but is also a good team player when collaborating with\rother colleagues. They work together to make every works perfect.\r</p><p>Juliana has a very clear vision in doing design which is bringing fun and happiness to other people\rthrough her works.Although it is difficult, just as every challenges she met in every visual designs,\rshe is willing to pay more efforts to achieve this goal."Things always seem impossible until they are\rdone" is her motto.From it, we can see her determination to become an excellent designer in the\rnear future.<br></p>'),
(93, 'Dr. Hilton Chan', '2014052209173775.jpg', '', '', '', 'Advisors', 'Dr. Hilton Chan, PhD (HKUST)\r\nBusiness & IT Advisor\r\nWith many experiences in various business and IT industries, outstanding academic\r\nachievements in applying technology and active participations in IT-related international\r\nevents, Dr. Hilton Chan is a professional business and IT advisor.\r\nDr. Chan has worked in executive coaching, IT-business consultancy and project\r\nmanagement. In today’s E-business world, IT systems are very important in business\r\nsuccess.He developed business strategies and IT info-structure architecture design,like\r\nfinance and trading system, corporate database and intelligence systems, to steer\r\ninnovations and corporate changes.Moreover, Dr. Chan established the digital\r\ninvestigation, computer forensics and cyber intelligence capabilities for the Hong Kong\r\nPolice and also developed accredited training for the police, ICAC, Customs and Excise\r\nDepartment, Immigration Department and the Department of Justice together with some\r\nlocal universities.\r\nGraduated with a BSc from the University of Toronto and a PhD from the Hong Kong\r\nUniversity of Science and Technology (HKUST),Dr. Chan works as an adjunct professor in\r\nHKUST since 2000.Nevertheless, as a Business and IT Expert, Dr. Chan actively\r\nparticipates in the local and international IT-related events as the keynote speaker or\r\npanelist since 1999. He has made great contributions to the IT industry.', '2014052209173723.jpg', NULL),
(94, 'Dr. Hilton Chan, PhD', '2014052209182243.jpg', '', '', 'Business & IT Advisor', 'Advisors', 'Dr. Hilton Chan, PhD (HKUST)\r\nBusiness & IT Advisor\r\nWith many experiences in various business and IT industries, outstanding academic\r\nachievements in applying technology and active participations in IT-related international\r\nevents, Dr. Hilton Chan is a professional business and IT advisor.\r\nDr. Chan has worked in executive coaching, IT-business consultancy and project\r\nmanagement. In today’s E-business world, IT systems are very important in business\r\nsuccess.He developed business strategies and IT info-structure architecture design,like\r\nfinance and trading system, corporate database and intelligence systems, to steer\r\ninnovations and corporate changes.Moreover, Dr. Chan established the digital\r\ninvestigation, computer forensics and cyber intelligence capabilities for the Hong Kong\r\nPolice and also developed accredited training for the police, ICAC, Customs and Excise\r\nDepartment, Immigration Department and the Department of Justice together with some\r\nlocal universities.\r\nGraduated with a BSc from the University of Toronto and a PhD from the Hong Kong\r\nUniversity of Science and Technology (HKUST),Dr. Chan works as an adjunct professor in\r\nHKUST since 2000.Nevertheless, as a Business and IT Expert, Dr. Chan actively\r\nparticipates in the local and international IT-related events as the keynote speaker or\r\npanelist since 1999. He has made great contributions to the IT industry.', '2014052209182279.jpg', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `answer` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(3, 'Why should I choose Eggshell?', 'Eggshell is not only the expert in design and creativity but also an experienced marketing consultant. Our strategic team has a strong business background and professional knowledge in research; which gives our client the best advice on brand strategy in an innovative and pragmatic way.'),
(4, 'What is the scope of services that your company offers?', 'Eggshell offers a total branding solution for clients who either look for new brand establishments or brand-and-business re-positioning. We call it “lifestyle branding” - starting from an existing brand audit, marketing research, strategic plan, brand image and identity design, marketing campaign and brand image retaining. We provide user-centre design and strategic branding service.'),
(5, 'What are some examples of your successful cases?', 'We have successfully created many new brand identities for clients such as Maxim’s, Hong Kong Honeymoon Dessert Group, Elements etc. We also have experience in brand building on catering and lifestyle product. For details, please refer to “How We Work” at our website.'),
(6, 'What is branding and what are the procedures?', '“Branding” is the process of creating or redefining the value of a brand, through various perspectives such as design, marketing activities, customer service experience; and to establish the emotional benefit to customers. Eggshell Creative has developed a branding procedure and a solution to differentiate a brand from its competitors. For details, please refer to “How We Work” at our website.'),
(9, 'Why do I need branding? How do I know if I need branding/ re-branding?', 'While the value of a brand may not change, the way to communicate it to its target customers does. Most of the world corporations start the branding process by not only changing their brand images, but also enhancing their products, services, and sometimes even operation flow to meet with the new image or position of the target customers. If you find it difficult communicating your brand message to target customers, you should consider re-branding.'),
(10, 'Must I go through the whole branding procedures?', 'Not necessarily. Our consultants will meet you to identify the need of your company and propose a branding procedure.'),
(11, 'How long does it take to complete a branding project?', 'The branding concept is an on-going process, which takes numerous re-evaluation and re-adjustment along the way. From our experience, it can be from 3 months to a year, it all depends on the scope of work required. Normally, we will discuss with the clients when defining the scope of a branding project.dasdsadasdsad'),
(17, 'What is a brand manual?', 'A brand manual involves the content of brand value, brand story and brand image. It is a visual guideline with the use of brand identity and giving examples on various applications of logos. It will be updated if a new design or variation of the logo is needed.'),
(18, 'How to start a branding project?', 'Call our consultants, they will be happy to meet with you and identify your needs in developing the brand.'),
(19, 'What is your common price level?', 'Price depends on the project scope. All projects are tailor-made: from a single design of brand identity to a restructure of a new business model to fit in the new brand position. You are welcome to contact our consultants for more details.'),
(20, 'How do you help my company if you do not have experience in my industry?', 'Sometimes judgement get clouded when one is too involved in its own business, and a objective view is needed to intervene. Together with our knowledge of your company and your industry, we will plan a creative strategy in the perspective of our clients, leaving a impressive brand identity.'),
(21, 'Marketing, design, branding - what are the relationships and differences?', 'Marketing and design are the tools and means of branding. By designing the brand image and visual elements, the value of a brand is expressed; and through marketing and media plan, the brand message and brand promise are conveyed to customers.'),
(22, 'How can we cooperate if we are based in different countries/ cities?', 'Feel free to contact our consultants via marketing@eggshell.com.hk for details.');

-- --------------------------------------------------------

--
-- 表的结构 `howwedo`
--

CREATE TABLE IF NOT EXISTS `howwedo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `filed` varchar(20) DEFAULT NULL,
  `video` text,
  `description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `howwedo`
--

INSERT INTO `howwedo` (`id`, `image`, `filed`, `video`, `description`) VALUES
(1, '2012121412252294.jpg', 'Audit', '<iframe width="640" height=320" src="http://www.youtube.com/embed/sXMYu10kQ_M?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', 'Start a brand audit'),
(2, '2012123109463896.jpg', 'Strategic', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/ViCmzT-ViEg?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', 'Brand Experience'),
(10, '2012123109472552.jpg', 'Identity', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/ctE4hkcGdYs?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', 'Bramd Identity'),
(11, '2012123109520846.jpg', 'Management', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/gjn4udub550?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', 'Brand Management'),
(12, '20121231095247100.jpg', 'Experience', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/ViCmzT-ViEg?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', 'Brand Experience'),
(13, '2012123109532223.jpg', 'Retain', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/7bIAAvKswP0?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', 'Brand Retaining'),
(15, '2013010204385355.jpg', 'Experience', '', ''),
(16, '2013010204435183.jpg', 'Experience', '', ''),
(17, '2013010210471986.jpg', 'Experience', '', ''),
(18, '2013010210484965.jpg', 'Retain', '', ''),
(19, '2013010211061884.jpg', 'Audit', '', ''),
(20, '2013010211121492.jpg', 'Audit', '', ''),
(21, '2013010211131272.jpg', 'Experience', '', ''),
(22, '2013010211463229.jpg', 'Audit', '', ''),
(23, '2013010211470669.jpg', 'Management', '', ''),
(24, '2013010211472693.jpg', 'Strategic', '', ''),
(25, '2013010211474469.jpg', 'Audit', '', ''),
(26, '2013010211475822.jpg', 'Strategic', '', ''),
(27, '2013010212005849.jpg', 'Retain', '', ''),
(28, '2013010212011091.jpg', 'Strategic', '', ''),
(29, '2013010212012991.jpg', 'Identity', '', ''),
(30, '2013010212040669.jpg', 'Identity', '', ''),
(31, '2013010212070111.jpg', 'Strategic', '', ''),
(32, '2013010212150721.jpg', 'Identity', '', ''),
(33, '2013010212194799.jpg', 'Identity', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `key_value`
--

CREATE TABLE IF NOT EXISTS `key_value` (
  `id` int(2) DEFAULT NULL,
  `value` text,
  `description` varchar(50) DEFAULT NULL,
  `page_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `key_value`
--

INSERT INTO `key_value` (`id`, `value`, `description`, `page_name`) VALUES
(1, 'HOME', '导航第一个名称', 'nav'),
(2, 'ABOUT US', '导航第二个名称', 'nav'),
(3, 'HOW WE WORK', '导航第三个名称', 'nav'),
(4, 'CASE', '导航第四个名称', 'nav'),
(5, 'CLIENT', '导航第五个名称', 'nav'),
(6, 'EXPOSURE', '导航第六个名称', 'nav'),
(7, 'BRAND SHOP', '导航第七个名称', 'nav'),
(8, 'CONTACT US', '导航第八个名称', 'nav'),
(9, 'CLICK & UPDATE', '向下滑动点击按钮', 'nav'),
(1, '1 min tour', '1分钟浏览', 'home'),
(2, 'Free Brand Assessment', 'Free Brand Assessment', 'home'),
(3, 'Free Art', 'Free Download', 'home'),
(4, 'We combine art and business to create<br> infinite possibilities for you~', 'Sub title', 'home'),
(5, 'founded in Hong Kong 2005', 'Sub sub title', 'home'),
(6, 'Manage your project~', '登陆1', 'home'),
(7, 'Check your estimate~', '登陆2', 'home'),
(8, 'Upload and download files~', '登陆3', 'home'),
(9, 'Express your opinion~', '登陆4', 'home'),
(1, 'About Eggshell', 'About Us sub nav 1', 'aboutus'),
(2, 'Our rapport', 'About Us sub nav 2', 'aboutus'),
(3, 'Serve the world', 'About Us sub nav 3', 'aboutus'),
(4, 'Meet Eggshellers', 'About Us sub nav 4', 'aboutus'),
(1, 'Brand Audit', 'How We Do sub nav 1', 'howwedo'),
(2, 'Brand Strategy', 'How We Do sub nav 2', 'howwedo'),
(3, 'Brand Identity', 'How We Do sub nav 3', 'howwedo'),
(4, 'Brand Management', 'How We Do sub nav 4', 'howwedo'),
(5, 'Brand Experience', 'How We Do sub nav 5', 'howwedo'),
(6, 'Brand Retaining', 'How We Do sub nav 6', 'howwedo'),
(1, 'Video', 'Press sub nav 1', 'press'),
(2, 'Press', 'Press sub nav 2', 'press'),
(3, 'Events', 'Press sub nav 3', 'press'),
(1, 'E-cards', 'Possibility sub nav 1', 'possibility'),
(2, 'Download', 'Possibility sub nav 2', 'possibility'),
(3, 'Experimental Gift', 'Possibility sub nav 3', 'possibility'),
(4, 'Video', 'Possibility sub nav 4', 'possibility'),
(5, '"Eggsheller" is the family of our existing and former colleagues, interns, advisers and strategic partners.', '格言', 'aboutus'),
(6, 'Our management team', 'Social Responsibility sub title 1', 'aboutus'),
(7, 'All Eggshellers', 'Social Responsibility sub title 2', 'aboutus'),
(8, '', 'Social Responsibility sub title 3', 'aboutus'),
(1, 'Please leave us your message and your related information, we shall contact you shortly.', 'contact us intro', 'contactus'),
(2, 'Name', 'contact us name', 'contactus'),
(3, 'Company', 'contact us company', 'contactus'),
(4, 'E-mail Address', 'contact us email', 'contactus'),
(5, 'Phone Number', 'contact us phone', 'contactus'),
(6, 'Enquiry / Comments', 'contact us comments', 'contactus'),
(7, 'Submit', 'contact us submit', 'contactus'),
(8, 'Cancel', 'contact us cancel', 'contactus'),
(9, 'T: 2699-8612', 'company phone 1', 'contactus'),
(10, 'F: 2699-3772', 'company phone 2', 'contactus'),
(11, 'A: Unit 313A, InnoCenter, <br>72 Tat Chee Avenue, <br>Kowloon Tong, HongKong', 'company address', 'contactus'),
(12, 'marketing@eggshell.com.hk', 'company email', 'contactus'),
(13, 'eggsheller', 'company facebook', 'contactus'),
(14, 'Send full resume to creative@eggshell.com.hk; <br>For design applicants: 5 pieces of relevant portfolio are required~', 'recruitment intro', 'contactus'),
(10, 'Share', 'Share', 'home'),
(11, 'FAQ', 'FAQ', 'home'),
(12, 'News-<br>letter', 'Newsletter', 'home'),
(13, 'Newsletter Subscription', 'newsletter text1', 'home'),
(14, 'Please enter your e-mail address to subscribe the newsletter:', 'newsletter text2', 'home'),
(15, 'Previous newsletter', 'newsletter text3', 'home'),
(16, 'more', 'newsletter text4', 'home'),
(1, 'Brands of Eggshell Creative is available for immediate business opportunities', 'subtitle1', 'shop'),
(2, 'For more details, please contact +852 2699 8612', 'subtitle2', 'shop'),
(1, 'ASSESS YOUR OWN BRAND', 'title', 'assessment'),
(2, 'Assess your brand health here by finishing the following 10 question.', 'subtitle1', 'assessment'),
(3, 'Feel free to contact us for further consultancy: 852 - 26998912 ', 'subtitle2', 'assessment'),
(4, 'Respond to the 10 statements below using a tiered scale:', 'subtitle3', 'assessment'),
(5, 'Never', 'choose1', 'assessment'),
(6, 'Sometimes', 'choose2', 'assessment'),
(7, ' Always ', 'choose3', 'assessment'),
(8, 'Congratulation~ Your assessment is finished.', 'sucess title 1', 'assessment'),
(9, 'Now just take few seconds to get score and initial diagnoises for your brand.', 'sucess title 2', 'assessment'),
(10, 'Please Submit your E-mail Address to get the result. ', 'submit title', 'assessment'),
(11, 'your name', 'name', 'assessment'),
(12, 'company name', 'company', 'assessment'),
(13, 'email address', 'email', 'assessment'),
(14, 'get score now', 'submit button text', 'assessment'),
(3, 'style', 'content nav 1', 'shop'),
(4, 'photos', 'content nav 2', 'shop'),
(5, 'buy', 'content nav 3', 'shop'),
(5, 'With the spirit of our creative team, the origin of Possibilities, we happily share all of our great and small explorations on conceptual, cultural and design methodology. We wish these can be an initiative and inspirative energy to motivate your work and life!', 'sentence', 'possibility'),
(5, 'We are delighted to share our years of milestone. <br> By viewing these exposure in history,<br> you''ll get a better idea of our statement and achivement.', 'sentence', 'press'),
(6, 'Events', 'title 1', 'press'),
(7, 'Date', 'title 2', 'press'),
(8, 'Description', 'title 3', 'press'),
(1, 'View the cases, and contact us if you are interested: 852 26998912', 'title', 'case'),
(2, 'Audit', 'type1', 'case'),
(3, 'Identity', 'type2', 'case'),
(4, 'Experience', 'type3', 'case'),
(5, 'Strategic', 'type4', 'case'),
(6, 'Management', 'type5', 'case'),
(7, 'Retain', 'type6', 'case'),
(7, 'Branding Blue Print', 'title', 'howwedo'),
(8, 'Deliverable', 'Deliverable', 'howwedo'),
(9, 'click to know more', 'click to know more', 'howwedo'),
(10, 'click to close', 'click to close', 'howwedo'),
(11, 'Company Background', 'Brand Audit  text1', 'howwedo'),
(12, 'Core Value & Aspiration', 'Brand Audit  text2', 'howwedo'),
(13, 'Internal Brand Awareness Audit', 'Brand Audit  text3', 'howwedo'),
(14, 'Touch Points Audit', 'Brand Audit  text4', 'howwedo'),
(15, 'System & Operation Audit', 'Brand Audit  text5', 'howwedo'),
(16, 'Current Business Model Audit', 'Brand Audit  text6', 'howwedo'),
(17, 'Audit Report', 'Brand Audit  text7', 'howwedo'),
(18, 'Scope of Future Project', 'Brand Audit  text8', 'howwedo'),
(21, 'Marketing Research', 'Brand Strategy text1', 'howwedo'),
(22, 'Brand Message', 'Brand Strategy text2', 'howwedo'),
(23, 'Brand Positioning', 'Brand Strategy text3', 'howwedo'),
(24, 'Brand Architecture', 'Brand Strategy text4', 'howwedo'),
(25, 'Research & Strategic Report', 'Brand Strategy text5', 'howwedo'),
(28, 'Brand Personality & Brand Story', 'Brand Identity text1', 'howwedo'),
(29, 'Brand Naming & Brand Line', 'Brand Identity text2', 'howwedo'),
(30, 'Brand Signature', 'Brand Identity text3', 'howwedo'),
(31, 'Brand Visual System', 'Brand Identity text4', 'howwedo'),
(32, 'Brand Manual', 'Brand Identity text5', 'howwedo'),
(33, 'Ready-to-use Electronic Files', 'Brand Identity text6', 'howwedo'),
(34, 'Future Business Model', 'Brand Management text1', 'howwedo'),
(35, 'Internal Brand Compliance', 'Brand Management text2', 'howwedo'),
(36, 'Brand Management Plan', 'Brand Management text3', 'howwedo'),
(37, 'Internal Service Guideline', 'Brand Management text4', 'howwedo'),
(38, 'Training Proposal', 'Brand Management text5', 'howwedo'),
(39, 'Service Design', 'Brand Experience text1', 'howwedo'),
(40, 'Product Strategy & Design', 'Brand Experience text2', 'howwedo'),
(41, 'Sales & Promotion Strategy', 'Brand Experience text3', 'howwedo'),
(42, 'Media Plan', 'Brand Experience text4', 'howwedo'),
(43, 'Visual design & Production', 'Brand Experience text5', 'howwedo'),
(44, 'Sales & Promotion Proposal', 'Brand Experience text6', 'howwedo'),
(45, 'Brand Audit Update', 'Brand Retaining text1', 'howwedo'),
(46, 'Review of Collateral Materials', 'Brand Retaining text2', 'howwedo'),
(47, 'Customer Resonance Research', 'Brand Retaining text3', 'howwedo'),
(48, 'Brand Consultation', 'Brand Retaining text4', 'howwedo'),
(49, 'Brand Assessment Report', 'Brand Retaining text5', 'howwedo'),
(50, 'Brand Manual Update', 'Brand Retaining text6', 'howwedo'),
(53, 'watch video and pictures behind scene', 'popup nav1', 'howwedo'),
(54, 'RELATED WORKS', 'popup nav2', 'howwedo'),
(19, 'Before any solution is applied, it is fundamental to assess your brand’s health first. \nQuestions are asked: do your product or service excite customers?  Is your operation system efficient ? Are staff and managers on the same boat with you to achieve the brand aspiration?</br>Tools such as primary research and secondary research will be used to do the doctor’s work. A clear picture from our audit report will be presented to you, and let you know how to steer the wheel in the next steps, keeping ahead or changing direction. ', 'Brand Audit description', 'howwedo'),
(20, 'Based on the diagnose, we will start to set up strategies to truly differentiate you from the other sharks in the pond by better clarifying the market climate and your marketplace, targeting customers on the business side; creating authentic relationship between you and your brands on the creative sides. \n\n</br>Tools such as Complete Market Research Framework will be used to offer basis for strategy making. Our Research & Strategic Report will help you avoid a "brand chaos" from conflicting goals and personal beliefs. It will provide a vital input to align creative and management processes as well.', 'Brand Strategy description', 'howwedo'),
(51, 'Under the framework of a clear brand strategy, an ideal identity will be designed for your brand. It delivers the right message to customer and expresses through visual (logo and other visual system) and story (brand name, tag-line, brand story).\nThe team is equipped with creative heads both in visual and writing, and with listening ears to get to know where you are headed to.\n<br>Our brand manual offers your brand consistency and uniqueness, so it will be remembered and recognized in the crowded market place.  It will also be developed for specific sub-organizations, products, services and program. ', 'Brand Identity description', 'howwedo'),
(52, 'Two souls are contained in this step: alignment and creativity.  \nYour business model should be creative, like offering products and services that excite your customers, or choose strategic platforms and channels to maximize revenue out of the limited source. Meanwhile, this business model should also be in alignment with your brand meaning. So that what you say and what you do will not be disconnected. \nLeveraging tools like business model canvas and design thinking, we will help you to revamp the business model to achieve your strategic goals. \n\n</br>Internal Brand Compliance here also helps you avoid disconnection,  between internal management and your brand vision. It creates sustainable system that enables long-term management, and may include training providing, templates, brand guidelines. ', 'Brand Management descritpion', 'howwedo'),
(55, 'Creating a compelling mix of seamless touch points is essential in this step. Touch points such as brick and mortar, your sales and CR staff, product package, social media, websites, and other digital interaction, composing a road map based on customers’ everyday routine life. It helps to create a meaningful relationship between brand and its customers, fostering preference, love and loyalty.', 'Brand Experience description', 'howwedo'),
(56, 'Just like doctors will recommend a regular health check, we will also offer you a re-check on overall internal management and customer response. It examines the effectiveness of our prescription and will perform as a handover ritual so you have all the tools to steer the boat without your consultants.', 'Brand Retaining description', 'howwedo'),
(57, 'view the case', 'view the case', 'howwedo'),
(1, 'Founder', 'nav Founder', 'oneminute'),
(2, 'Cases', 'nav Cases', 'oneminute'),
(3, 'Movie / Videos', 'nav Movie', 'oneminute'),
(4, 'How we work', 'nav How we work', 'oneminute'),
(5, 'About Eggshell', 'nav About Eggshell', 'oneminute'),
(6, 'Brand Shop', 'nav Brand Shop', 'oneminute'),
(7, 'Strategic Team', 'nav Strategic Team', 'oneminute'),
(8, 'Advisor', 'nav Advisor', 'oneminute'),
(9, 'contact us for more information', 'contact more', 'oneminute'),
(10, 'ACTIVE & PASSIONATE <br>ENTREPRENEUR', 'Founder title', 'oneminute'),
(11, 'in HK''s creative industry.', 'Founder subtitle', 'oneminute'),
(12, 'Commercial strategic planning', 'Founder text 1', 'oneminute'),
(13, 'Designing brand image for different industries', 'Founder text 2', 'oneminute'),
(14, 'STRATEGIC <br>BRANDING CONSULTANCY', 'About Eggshell title', 'oneminute'),
(15, 'since 2005. ', 'About Eggshell subtitle', 'oneminute'),
(16, 'Eggshell has provided both B2B and B2C clients with commercial and brand strategies in the past.<br>\n- Elevate corporate brand management and redesign brand image.', 'About Eggshell text 1', 'oneminute'),
(17, 'Marketing campaign and product features with a customer and user center.', 'About Eggshell text 2', 'oneminute'),
(18, 'Strategic team has different expertise and experience.', 'About Eggshell text 3', 'oneminute'),
(20, 'Innovative and in-depth design', 'Found text 3', 'oneminute'),
(21, 'Involved in the design process with a focus on client experience', 'Found text 4', 'oneminute'),
(22, 'Nurturing many brands in HK and mainland China', 'Found text 5', 'oneminute'),
(17, 'Eggshell Creative © 2013 All Rights Reserved.', 'footer版权', 'home'),
(10, 'Share', 'footer版权', 'home'),
(15, 'Eggshell Creative Consultancy', 'Eggshell Creative Ltd.', 'contactus'),
(18, 'Sitemap', 'site map', 'home'),
(19, 'Client testimonial', 'Client testimonial title', 'oneminute'),
(23, 'Consultancy', 'Strength', 'oneminute'),
(24, 'Experience', 'Experience', 'oneminute'),
(9, 'Date', 'Socoal Posibility Date', 'aboutus'),
(10, 'See my interview', 'See my interview', 'aboutus'),
(11, 'contact me', 'contact me', 'aboutus'),
(8, 'Client Project', 'filed1', 'case'),
(9, 'Experimental Project', 'filed2', 'case'),
(10, 'Search Projects here', 'search text', 'case'),
(19, 'eg.G', 'eg.G', 'home'),
(25, 'Details in About Us > Meet Eggshellers', 'Found text 6', 'oneminute'),
(10, 'SITEMAP', '网站地图', 'nav'),
(26, '<i><b>--Sam Lo </b></i><b>(Managing director of play ltd)</b><br>\n"One thing I really like about Eggshell''s service is that they use the angle of a friend in analyzing different ideas and situations. Overall, cooperating and working together with Eggshell has been a very pleasant and enjoyable experience." <br>', 'client text 1', 'oneminute'),
(27, '<i><b>--Steven Shiu </b></i><b>（Branding manager of Mabushi LED)</b><br>\n"We appreciate it very much that Eggshell Creative has been offered professional suggestions both in visual design and marketing strategy design. We’d like to keep a long-term relationship with Eggshell”', 'client text 2', 'oneminute'),
(28, '<i><b>--Elaine Yeung</b></i><br>\n<b>Former Editor of United Christian College (Kowloon East)</b><br>\n"Eggshell Creative is a design company which serves with a heart and a listening ear. After all, it is the mutual trusting and respectful relationships that finally brought us extraordinary designs."<br>', 'client text 3', 'oneminute'),
(29, '', 'client text 4', 'oneminute'),
(30, '', 'client text 5', 'oneminute'),
(20, 'CAAF3g35rx2QBAHBKAOknOiiNZALd65DjPlZCyh9bemqOJGnhIiTMZA91No3E9nb1WLhLllLQeCNEidwqXxD6HaJrISUTN1SJgZATLHTKzHhSXERYCDJFKGO82hVtAQOlZA1ZCAnuV1KvXdPS71iFI7oVufFoZBKwQ7ZCF813W3Swwj7nDSIXM8ixGuj6Gyh1OecZD&expires=5184000', 'accessToken', 'home');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news` varchar(100) DEFAULT NULL,
  `content` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `news`, `content`, `time`) VALUES
(19, 'Inno Design Expo 2013', 'http://www.eggshell.com.hk/enewsletter1204/1204_ENG_front.html', '2013-12-20 09:14:39');

-- --------------------------------------------------------

--
-- 表的结构 `press`
--

CREATE TABLE IF NOT EXISTS `press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filed` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `photo` varchar(30) NOT NULL,
  `events` text,
  `date` varchar(20) DEFAULT NULL,
  `description` text,
  `video` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `press`
--

INSERT INTO `press` (`id`, `filed`, `image`, `photo`, `events`, `date`, `description`, `video`) VALUES
(2, 'Video', '2012112105080228.jpg', '2012112814463156.gif', 'HKTDC Interview Eggshell Creative:Perseverance is Key', '2011-06-14', 'Viola believes creative will bring infinite possibilities to life. She established Eggshell, a one-stop Branding and\r\nAdvertising consultancy in 2005. Since then, Viola has joined various trade fairs and worldwide promotional events of HKTDC, including Hong Kong International Licensing Show, Inno and Design Tech Expo, and workshop of "Creativity in Business" seminar series on the Chinese mainland, to market their services and meet new business partners.', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/Gxj3pdh_eoE?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>'),
(3, 'Video', '2012112105123128.jpg', '2012112106001720.jpg', 'CUHKCFE interviews Viola Pak, Eggshell Creative Director ', '2011-05-19', 'Viola Pak shares her experience as a young designer and the founder of Eggshell Creative Consultancy with CUHK Center for Entrepreneurship.', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/tKlq4C3YrXo?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>'),
(4, 'Events', '2012112905350834.jpg', '2012112905350864.jpg', '14th Hong Kong Eyewear Competition', '2012-09-13', 'Show of Eggshell''s concept eyewear: Houyi', ''),
(8, 'Press', '2012112903263011.jpg', '2012112903263080.jpg', 'Imp-Exp Executive: An Interview with Viola Pak', '2009 9#', '', ''),
(9, 'Events', '2012112905380538.jpg', '2012112905380530.jpg', '14th Hong Kong Eyewear Competition', '2012-09-13', 'Show of Eggshell''s champion concept eyewear: Chang''er', ''),
(10, 'Press', '2012112903315615.jpg', '2012112903315628.jpg', 'East Week: the Entrepreneurial Experience of Eggshell', '2010-02-03 336#', '', ''),
(13, 'Press', '2012110618513649.jpg', '2012112903480939.jpg', 'MingPao: Eggshell, a Growing Enterprise', '2011-07-28', '', ''),
(14, 'Press', '201211290517013.jpg', '2012112903484099.jpg', 'Hong Kong Economic Daily: Eggshell as a Local Branding Representative', '2010-07-20', '', ''),
(15, 'Press', '2012112905103099.jpg', '2012112903485788.jpg', 'U Magazine: Eggshell''s Progress in Mainland Market', '2010-1-10 218#', '', ''),
(16, 'Events', '2012112905384839.jpg', '2012112905384845.jpg', '14th Hong Kong Eyewear Competition', '2012-09', 'Display of two concept eyewear: Houyi and Chang''e ', ''),
(17, 'Events', '2012112908270919.jpg', '2012112908270968.jpg', 'Hangzhou SmartHK EXPO', '2012- 09', 'Setup of Eggshell''s booth.', ''),
(18, 'Events', '2012112106070291.jpg', '2012112908321428.jpg', 'Design Ed-mart Market', '2011-04-01', 'Sharing opinions on design.', ''),
(19, 'Events', '2012112908312445.jpg', '2012112908312450.jpg', 'IDT EXPO', '2011-12', 'Eggshell''s booth', ''),
(23, 'Press', '2012112905073862.jpg', '2012112903491738.jpg', 'Hong Kong Economic Daily: Eggshell as a Local Branding Representative', '2010-7-20', '', ''),
(24, 'Press', '2012112905013758.jpg', '2012112905013791.jpg', 'Takugpao: An Interview with Viola Pak', '2010-11-21', '', ''),
(25, 'Press', '2012112905022341.jpg', '2012112905022318.jpg', 'Taikungpao: An Interview with Viola Pak', '2010-11-21', '', ''),
(26, 'Events', '2012112908331811.jpg', '2012112908331814.jpg', 'IDT EXPO', '2012-12', 'Communicating with potential client.', ''),
(27, 'Events', '2012112908344513.jpg', '2012112908354835.jpg', 'Interview by HKTDC', '2011-05', 'Interview by HKTDC', ''),
(28, 'Events', '2012112908564218.jpg', '2012112908564295.jpg', 'TDC Education Expo', '2011-05-17', 'Interviewed by TDC staff after the speech~', ''),
(29, 'Events', '2012112908580221.jpg', '2012112908580287.jpg', 'HKTDC Entreprenuer Day Seminar', '2012', 'Viola shared her branding strategy methods and experience.', ''),
(30, 'Events', '2012112908591634.jpg', '2012112908591672.jpg', 'YBI Visits', '2008', '', ''),
(31, 'Video', '', '', 'Chang''er, won the champion of 14th Hong Kong Eyewear Competition', '2012-11-06', 'With the theme of Timelessness, the 14th Hong Kong Eyewear Design Competition encourages local designers to use their creativity and promote Hong Kong design on an international stage. Viola Pak''s design, Chang''e, inspired by a traditional Chinese legend, has won the open group champion.(00:37-1:27)', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/op7L9ZeKr6s?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>'),
(32, 'Video', '', '', 'HKTDC Interview of Entrepreneurs with Successful Brand Strategy before Entrepreneur Day', '2010-05-18', 'HKTDC interviews Eggshell and another creative brand to share with viewers the secret of entreprenuer success: creativity, multi-media interaction and customer-centered services.', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/wHoWc-tPvY0?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>'),
(33, 'Press', '2014010711063548.jpg', '2014010711063598.jpg', 'Hong Kong Commercial Daily', '2012-4-10', 'The Secret of Eggshell''s Success', ''),
(34, 'Events', '201401071108318.jpg', '2014010711083179.jpg', 'Silmo 2013 in Paris', '2013-11', 'Eggshell''s prize winning eyewear design exhibited in Paris.', ''),
(35, 'Events', '201401071111066.jpg', '2014010711110663.jpg', 'Seminar on Design Entrepreneurship', '2010', 'Creative Director Viola shares her experiences on the seminar in CUHK', ''),
(36, 'Events', '2014010711192371.jpg', '2014010711140967.jpg', 'Paper artcraft exhibition at IDT expo', '2012-12', 'Wishing Tree designed by Eggshell, combining Western and Chinese traditions.', ''),
(37, 'Events', '2014010711201059.jpg', '201401071120105.jpg', 'Hong Kong Design Entrepreneurship Press Conference', '2011-11', 'Viola, representing Creative Entrepreneur born in the 70''s, shared her roadmap of establishing Eggshell Creative in the press conference.', ''),
(38, 'Events', '2014010711194372.jpg', '2014010711194357.jpg', 'HKDI Designe Incubation Program Graduation Ceremony', '2010', '', ''),
(39, 'Events', '2014010711190012.jpg', '2014010711190057.jpg', 'Awards Ceremony', '2012', 'Champion of the 14the Hong Kong Eyewear Design Competition', ''),
(40, 'Events', '2014010711213117.jpg', '2014010711213186.jpg', 'Interview with Prof. Suen from CUHK', '2010', 'Prof. Suen who specializes in creative entrepreneurship, exchange ideas with our Creative Director, Viola.', ''),
(41, 'Press', '2014010711294618.jpg', '2014010711294677.jpg', 'Eggshell''s story covered in Design Entrepreneurship in Hong Kong', '', '', ''),
(42, 'Press', '2014010711362353.jpg', '2014010711362312.jpg', 'Eggshell''s entrepreneurship covered in book published by HKFYG', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `recruitment`
--

CREATE TABLE IF NOT EXISTS `recruitment` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `recruitment`
--

INSERT INTO `recruitment` (`id`, `name`, `type`, `content`) VALUES
(9, 'Designer / Junior Designer', 'Full Time', 'Requirements:<br>\n0-3 years in branding, graphic design and print experience;<br>\nProficient in Indesign, Photoshop, Illustrator ;<br>\nKnowledge in web and mobile apps design ;<br>\nSkills in 3D software is a plus'),
(10, 'Marketing and Sales Trainee', 'Part time', 'Preferred discipline:<br>\nComputer Science / Internet and Multimedia Technology, please specify; <br>\nBusiness Management & Marketing, please specify; <br>\nRequirements:<br>\nExcellent communication skills and interpersonal skills; <br>\nDetermined to succeed, eager to face challenge and make a breakthrough on your self-limit <br>');

-- --------------------------------------------------------

--
-- 表的结构 `social_posibility`
--

CREATE TABLE IF NOT EXISTS `social_posibility` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `social_posibility`
--

INSERT INTO `social_posibility` (`id`, `image`, `date`, `description`) VALUES
(1, '20121031095053100.jpg', '2011-08-01', 'Discover Design, host by HKDC, the students visit Eggshell''s office,<br />\r\nget to know how a creative company runs.'),
(2, '2012123110020060.jpg', '2011-05-27', 'Deliver speech in TDC EDUCATION EXPO.'),
(3, '2012123110022742.jpg', '2006-08-13', 'Child sunday school'),
(4, '2012123110023978.jpg', '2009-07-23', 'Design ed-mart student visited'),
(5, '2012123110024779.jpg', '2011-07-28', 'Students visited to know more about a day of being a designer.'),
(6, '2012123110025616.jpg', '2009-07-23', 'Design ed-mart students visited us to have a better understanding of how to run a creative agency'),
(7, '2014010806231897.jpg', '2012-07-22', 'Group photo of Interns Helen Mak, Veronica Ngan and our Account Manager Candy Fong. Eggshell has dedicated to cultivating students with design talents and passion.'),
(8, '2014010905514896.jpg', '2012-03-24', 'In sponsorship of Hong Kong Design Year 2012, Eggshell designed a banner for Hong Kong InnoCenter'),
(10, '2014010811103485.jpg', '2010-11-09', 'Eggshell supported WiseGiving by helping it in MTR and multiple media advertising campaigns.'),
(11, '2014010905520246.jpg', '2012-06-12', 'Eggshell partly sponsored for designing the 4-sheet advertisement on MTR stations and magazine advertisement'),
(12, '2014010811244881.jpg', '0000-00-00', 'Eggshell partly sponsors MSF Orienteering Competition, helping it design advertising campaigns.'),
(13, '2014010905592428.jpg', '2010-08-10', 'Students visit Eggshell on Design Discovery tour. Viola Pak joined them through Skype.');

-- --------------------------------------------------------

--
-- 表的结构 `user_email`
--

CREATE TABLE IF NOT EXISTS `user_email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `user_email`
--

INSERT INTO `user_email` (`id`, `email`, `time`) VALUES
(1, 'hongri1987@gmail.com', '2012-10-16 10:16:35'),
(2, 'hongri1988@gmail.com', '2012-10-16 10:11:29'),
(3, 'hongri1989@gmail.com', '2012-10-16 10:11:29'),
(4, 'hongri1990@gmail.com', '2012-10-16 10:11:29'),
(5, 'hongri1@gmail.com', '2012-10-16 10:11:29'),
(6, 'hongri2@gmail.com', '2012-10-16 10:11:29'),
(7, 'hongri3@gmail.com', '2012-10-16 10:11:29'),
(8, 'hongri4@gmail.com', '2012-10-16 10:11:29'),
(9, 'hongri5@gmail.com', '2012-10-16 10:11:29'),
(10, 'hongri6@gmail.com', '2012-10-16 10:11:29'),
(11, 'hongri7@gmail.com', '2012-10-16 10:11:29'),
(12, 'hongri8@gmail.com', '2012-10-16 10:11:29'),
(13, 'hongri9@gmail.com', '2012-10-16 10:11:29'),
(22, 'hongri0615@yahoo.com.cn', '2012-10-16 10:16:18'),
(23, 'hongri198@gmail.com', '2012-10-18 18:12:56'),
(24, 'heiman1028@hotmail.com', '2013-09-07 16:27:05'),
(25, 'johnny@popcoinz.com', '2013-12-20 10:38:54');

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `video`
--

INSERT INTO `video` (`id`, `image`, `content`, `description`) VALUES
(11, NULL, '鼠标hover可以看到视频代码', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/Gxj3pdh_eoE?feature=player_embedded" frameborder="0" allowfullscreen></iframe>'),
(12, NULL, '鼠标hover可以看到视频代码', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/op7L9ZeKr6s?feature=player_embedded" frameborder="0" allowfullscreen></iframe>'),
(13, NULL, '鼠标hover可以看到视频代码', '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/tKlq4C3YrXo?feature=player_embedded" frameborder="0" allowfullscreen></iframe>');
