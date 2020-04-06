-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2020 at 01:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_sportchek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'NEW ARRIVALS'),
(2, 'MEN'),
(3, 'WOMEN'),
(4, 'KIDS'),
(5, 'SHOES'),
(6, 'OUTDOOR GEAR'),
(7, 'ELECTRONICS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(175) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_img`, `product_price`, `product_description`) VALUES
(1, 'Nike Men\'s Air Force 1 Shoes', '1.png', '120', 'Hoops in the park, Sunday BBQs and sunshine. The radiance lives on in the Nike Air Force 1 ’07, the b-ball OG that puts a fresh spin on what you know best: crisp leather in an all-black colorway for a statement look on and off the court.'),
(2, 'Vans Men\'s Authentic Shoes', '2.png', '64.99', 'The Era, the Vans classic low top skate shoe, features sturdy canvas uppers with metal eyelets, padded collars for support and flexibility, and signature rubber waffle outsoles.'),
(3, 'Nike Boys\' Pro AOP Fitted Short Sleeve Top', '3.png', '26.25', 'The Nike Pro Top features stretchy, sweat-wicking fabric to help keep you dry and comfortable. Wear it as a base layer or your only layer to tackle your next challenge.\r\n'),
(4, 'Under Armour Boys\' Split Logo Tech T Shirt', '4.png', '20.99', 'UA Tech™ is Under Armour’s original go-to training gear: loose, light & it keeps you cool. It’s everything you need.'),
(5, 'Nike Women\'s Air Max 90 Shoes', '5.png', '120', 'Clean lines, versatile and timeless, the people’s shoe returns with the Nike Air Max 90. Featuring the same iconic Waffle sole, stitched overlays and classic TPU accents you’ve come to love, it lets you walk among the pantheon of Air.'),
(6, 'Nike Men\'s Epic React 2 Flyknit Running Shoes - Black/Volt', '6.png', '146.24', 'The Nike Men’s Epic React 2 Flyknit Running Shoes takes smooth, lightweight performance to the next level. A Flyknit upper conforms to your foot with a minimal, supportive design. Underfoot, durable Nike React technology defies odds by being both soft and responsive.'),
(7, 'Nike Men\'s Logofetti Breaker 7\" Volley Shorts', '7.png', '51', 'Nike Swim Men’s Logofetti Lap 7\" Volley Short is a comfortable choice for everything from swimming laps at the pool to a relaxing day at the beach. The men’s swim shorts have a durable water repellent finish for faster drying, while a built-in mesh brief and a stretch waistband provide a supportive fit. Mesh pockets on the inside and outside store your essentials, and printed logos are scattered across the surface of the fabric like confetti for a cheerful look.'),
(8, 'Nike Sportswear Men\'s Colour Block Pullover Hoodie', '8.png', '60', 'Made from soft fleece, the Nike Sportswear Pullover Hoodie is a closet staple with soft comfort you can count on. With a hood and a kangaroo pocket, it’s the perfect layer on cool days.\r\n'),
(9, 'Nike Pro Men\'s Slim T Shirt\r\n', '9.png', '24', 'Perfect for wear on its own or as a layer, the Nike Pro Top is made with stretchy, sweat-wicking fabric that helps keep you dry and comfortable through your workout.\r\n'),
(10, 'Woods Men\'s Adrian Down Vest', '10.png', '150', 'The Adrian Insulated Vest was designed to provide extra warmth in cool conditions. Insulated with 700 Fill Power Allied Feather & Down® Duck Down to keep your core warm, the vest features a Canatite® Active membrane for an added layer of weather protection. The quilted design and streamlined pockets provide functionality and style.\r\n'),
(11, 'Nike Women\'s Revolution 5 Running Shoes', '11.png', '165.99', 'The Nike Women’s Revolution 5 Running Shoe cushions your stride with soft foam to keep you running in comfort. Lightweight knit material wraps your foot in breathable support, while a minimalist design fits in anywhere your day takes you.\r\n'),
(12, 'ASICS Women\'s GEL Excite 7 Trail Running Shoes', '12.png', '109.99', 'Designed with a technical mesh upper, the GEL-EXCITE™ 7 running shoe delivers excellent airflow throughout the interior to keep feet cool during a run. This style implements an ORTHOLITE™ sockliner in the footbed to maintain a lightweight feel that also helps keep feet dry and comfortable.'),
(13, 'McKINLEY Women\'s Tarella Hooded Insulated Jacket', '13.png', '149.99', 'Combining style and comfort, the Tarella Down Insulator Jacket provides strong insulation, with a down 90/10 ratio meant to keep you warm and comfortable. Boasting a 600 CU IN down rating, the Tarella Jacket is made to withstand the elements and allow you to traverse the outdoors your way.'),
(14, 'Nike Sportswear Women\'s Heritage 1/2 Zip Hoodie', '14.png', '60', 'The perfect mix of a hoodie and a 1/2-zip, the Nike Sportswear Heritage Top is made with soft knit fabric and chevron design lines for easygoing comfort and old-school style.\r\n'),
(15, 'Champion Women\'s Mid Weight Jersey Pullover Hoodie', '15.png', '44.99', 'Women’s Champion middle weight jersey pullover hoodie is great for transitioning from your heavyweight winter hoodie to lightweight spring.'),
(16, 'Jordan Boys\' Vert Mesh Logo Shorts', '16.png', '22.50', 'The Jordan ’Vert Mesh’ Shorts deliver cooling comfort with soft mesh fabric for everyday wear.'),
(17, 'Fox Boys\' Flame Head Long Sleeve T Shirt', '17.png', '31.99', 'The Youth Flame Head Long Sleeve Tee is constructed 100% cotton making it a comfortable laying piece. The extra length takes the bite off chilly nights and early starts.\r\n'),
(18, 'The North Face Glacier 1/4 Snap - Tin Grey', '18.png', '59.99', 'Durable, lightweight ¼ snap fleece for keeping up with his adventures.'),
(19, 'Under Armour Girls\' Surge RN Prism AC Pre-School Running Shoes - Blue/Purple', '19.png', '48.74', 'The Under Armour Girls’ Surge RN Prism AC Pre-School Running Shoes have enhanced cushioning around the ankle collar for superior comfort. These shoes are lightweight, have a breathable mesh upper that delivers increased ventilation.\r\n'),
(20, 'Under Armour Girls’ Splashback Rain Jacket - Pink', '20.png', '75.99', 'Easy to match, easy to wear in the Under Armour Girls’ Splashback Rain Jacket! Raincoat in a water-resistant and breathable nylon fabrication.'),
(21, 'Nike Women\'s Downshifter 9 Running Shoes - Black/White', '21.png', '60.99', 'The Nike Women’s Downshifter 9 Running Shoes features a lightweight mesh upper that provides breathable comfort. Closed mesh on the heel and midfoot gives structured support for sprints. The sole features flex grooves that bend with you while full-length foam softly cushions every step.'),
(22, 'New Balance Women\'s FuelCell Echolucent Running Shoes', '22.png', '89.95', 'Lead the pack in New Balance Women’s FuelCell Echolucent Running Shoes. This sneaker sits atop a new and improved responsive FuelCell midsole cushioning to help offer superior comfort. It features an upper made of translucent textile and mesh fabric, delivering a look that helps you stand out as the leading tastemaker in your crew.'),
(23, 'ASICS Women\'s Gel Cumulus 21 Running Shoes - Brown/Black', '23.png', '119.95', 'The ASICS Women’s Gel Cumulus 21 Running Shoes will help runners go further even in tough weather conditions. FLYTEFOAM™ Propel technology provides increased bounce and a springy feeling underfoot, while rear and forefoot GEL™ technology gives an extra layer of cushioning and shock absorption at high-impact areas. Support comes from our I.G.S™ (Impact Guidance System) and GUIDANCE LINE™ technology, which hold the foot in position and increase gait efficiency. With a moulded snow rubber outsole and reflective detailing to boost visibility at lower light levels, this shoe allows dedicated runners to hit the road in any weather.'),
(24, 'ASICS Women\'s Gel Nimbus 21 Running Shoes - White/Coral', '24.png', '119.97', 'The ASICS Women’s Gel Nimbus 21 Running Shoes running shoe by ASICS is designed to help women run further thanks to energised cushioning from the GEL™ technology, plus FLYTEFOAM™ Propel technology in the midsole and a SpEVA™ insole for further bounce. Now in a vibrant new colourway, the upper is made from Jacquard mesh to help airflow, while I.G.S™ (Impact Guidance System) technology in the construction helps runners maintain their natural gait. There’s also an AHARPLUS™ heel plug to help the sole withstand wear and tear, and reflectivity for visibility.'),
(25, 'ASICS Men\'s GT 2000 7 Running Shoes - Blue/Black', '25.png', '99.98', 'Push yourself to your limits with the ASICS Men\'s GT 2000 7 Running Shoes, these stylish running shoe for men are engineered to give maximum support and protection with every step. Energised cushioning on the sole helps you run further while SpEVA foam reduces impact and helps minimise the strain on your body, as well as giving you extra bounce with each stride.'),
(26, 'Dakine Syncline 12L Hydration Pack - Slate Blue', '26.png', '154.99', 'The men’s Syncline bike hydration pack is sized for everyday riding. The 12-liter pack has just the right amount of storage space for essential tools, snacks and layers plus a lumbar reservoir that keeps the load low and stable. Our proven Air Flow backpanel and shoulder strap designs deliver breathable comfort.'),
(27, 'Gregory Women\'s Sula 24L Day Pack - Night Shade Grey', '27.png', '89.97', 'The Sula 24 combines daypack volume with low-profile, fully ventilated VaporSpan internal frame suspension. The spacious main compartment features a divider for easy organization of bulkier items.'),
(28, 'McKINLEY Spantik 32L Day Pack - Anthracite/Brown', '28.png', '99.99', 'The retro-inspired Spantik VT 32 pays homage to the traditional hiking backpack while respecting modern day needs. It features an integrated rain cover, trekking pole fixation, and a vented back to ensure maximum comfort and temperature regulation.'),
(29, 'Nakamura Meyou 20 Junior Mountain Bike 2020', '29.png', '149.98', 'The 20 inch wheeled Nakamura Meyou is an excellent choice for your everyday junior mountain bike. The hardtail design, quality components and 6-speed drivetrain provides the rider with a versatile bike that is great for riding around the neighborhood while also performing well on recreational trails.'),
(30, 'Nakamura Royal 700c Men\'s Hybrid Bike 2020', '30.png', '199.98', 'The Nakamura Royal Hybrid bike is well suited for everyday riding. The lightweight aluminum frame, quality components, and 18-speed drivetrain provide an efficient ride that is great for navigating urban terrain.\r\n'),
(31, 'GoPro HERO8 Black Action Camera', '31.png', '529.99', 'This is HERO8 Black—the most versatile, unshakable HERO camera ever. A streamlined design makes it more pocketable than ever, and swapping mounts takes just seconds, thanks to built-in folding fingers. And with the optional Media Mod, you get ultimate expandability to add more lighting, pro audio and even another screen. There’s also game-changing HyperSmooth 2.0 stabilization with jaw-dropping slo-mo.\r\n'),
(32, 'GoPro Wi-Fi Remote 2.0', '32.png', '114.99', 'Control your GoPro remotely from distances of up to 600’ (180m) with this wearable, waterproof remote. Perfect for gear-mounted shots, you can power the camera on/off, adjust settings, start/stop recording and capture photos. When used with HERO4 cameras, you can also access the Settings/Tag button to quickly change settings, or use HiLight Tag to mark key moments while recording for easy playback, editing and sharing. Smart Remote enables control of up to 50 cameras at a time, and features 40% increased battery capacity compared to the original Wi-Fi Remote. Mountable and waterproof to 33’ (10m). Includes a key ring and wrist strap for wearing the remote or attaching it to yourself.'),
(33, 'Beats Solo Pro Wireless Noise-Cancelling Headphones', '33.png', '379.99', 'Get inspired with Solo Pro wireless headphones. To deliver sound how you want it, Solo Pro features two listening modes: Active Noise Cancelling (ANC) and Transparency. Beats Pure ANC gives you the space to create with fully immersive sound, while Transparency helps you stay aware of your surroundings. Every detail of Solo Pro has been carefully considered, right down to the intuitive way the headphones turn on and off via folding. The ergonomic design delivers exceptional comfort for extended wear and sleek style. And with up to 22 hours of battery life, you can keep the music going no matter where your day takes you.'),
(34, 'Apple Watch Series 5 GPS 40MM - Space Grey/Black Sport', '34.png', '529.99', 'Apple Watch Series 5, with an Always-On Retina display. You’ve never seen a watch like this. Apple Watch Series 5 has a display that’s always on, showing the time and important information—no need to raise your wrist. It helps you navigate with the built-in compass. Lets you check on your heart with the ECG app.1 Tracks your workouts and activity. And makes it easy to connect with the people and information you care about, right from your wrist.'),
(35, 'JBL Flip 5 Speaker - Black', '35.png', '119.98', 'Bring your speakers anywhere. Pool party? Perfect. Sudden cloudburst? Covered. Bash on the beach? Flip 5 is IPX7 waterproof up to three-feet deep for fearless outdoor entertainment.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_category`
--

CREATE TABLE `tbl_products_category` (
  `product_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products_category`
--

INSERT INTO `tbl_products_category` (`product_category_id`, `product_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 5),
(22, 22, 5),
(23, 23, 5),
(24, 24, 5),
(25, 25, 5),
(26, 26, 6),
(27, 27, 6),
(28, 28, 6),
(29, 29, 6),
(30, 30, 6),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_name` varchar(75) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(1, 'ryan', 'rrr', '111', '', '2020-04-05 23:19:21', ''),
(2, 'yasmina', 'yyy', '111', '', '2020-04-05 23:19:21', ''),
(3, 'guest', '123', '123', '', '2020-04-05 23:19:21', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
