-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Jan 04, 2023 at 02:58 PM
-- Server version: 10.10.2-MariaDB-1:10.10.2+maria~ubu2204
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ospotemou`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$BzoHP5.ZdxF9s68CquaeV.0JW2fLKw0CF8/8Vn6robap17oUv0EQO');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `release_date` year(4) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `artist_id`, `genre_id`, `name`, `release_date`, `image_path`) VALUES
(7, 7, 10, '1989', 2014, 'https://static.wikia.nocookie.net/taylor-swift/images/3/3a/Possible1989tvcover.jpg'),
(8, 7, 10, 'Midnights', 2022, 'https://upload.wikimedia.org/wikipedia/en/9/9f/Midnights_-_Taylor_Swift.png'),
(9, 8, 10, 'Justified', 2002, 'https://upload.wikimedia.org/wikipedia/en/e/ed/Justified_-_Justin_Timberlake.png'),
(11, 9, 10, 'The Fame Monster', 2009, 'https://upload.wikimedia.org/wikipedia/en/4/45/The_Fame_Monster.png'),
(13, 11, 10, 'Thriller ', 1982, 'https://upload.wikimedia.org/wikipedia/en/5/55/Michael_Jackson_-_Thriller.png'),
(15, 10, 10, 'Arrival ', 1976, 'https://upload.wikimedia.org/wikipedia/en/7/71/ABBA_-_Arrival.png'),
(16, 12, 11, 'Blurryface', 2015, 'https://upload.wikimedia.org/wikipedia/en/7/7d/Blurryface_by_Twenty_One_Pilots.png'),
(17, 12, 12, 'Trench', 2018, 'https://upload.wikimedia.org/wikipedia/en/f/f3/Trench_Twenty_One_Pilots.png'),
(18, 12, 10, 'Scaled and Icy', 2021, 'https://upload.wikimedia.org/wikipedia/en/5/52/Twenty_One_Pilots_-_Scaled_and_Icy.png'),
(19, 12, 23, 'Regional at Best', 2011, 'https://static.wikia.nocookie.net/twenty-one-pilots/images/3/3d/Regional_at_Best.png/revision/latest/scale-to-width-down/700?cb=20160427084359'),
(20, 12, 23, 'Self Titled ', 2009, 'https://upload.wikimedia.org/wikipedia/en/a/af/Twenty_One_Pilots_album_cover.png'),
(22, 14, 11, 'The Eminem Show', 2002, 'https://upload.wikimedia.org/wikipedia/en/3/35/The_Eminem_Show.jpg'),
(25, 15, 11, 'Graduation', 2007, 'https://upload.wikimedia.org/wikipedia/en/7/70/Graduation_%28album%29.jpg'),
(27, 17, 23, 'Faces', 2014, 'https://upload.wikimedia.org/wikipedia/en/7/77/MacMillerFaces.jpg'),
(48, 18, 12, 'Highway to Hell', 1979, 'https://upload.wikimedia.org/wikipedia/en/a/ac/Acdc_Highway_to_Hell.JPG'),
(49, 18, 12, 'Back in Black', 1980, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/ACDC_Back_in_Black_cover.svg/330px-ACDC_Back_in_Black_cover.svg.png'),
(50, 19, 23, 'OK Computer', 1997, 'https://upload.wikimedia.org/wikipedia/en/b/ba/Radioheadokcomputer.png'),
(51, 20, 12, 'Born to Run', 1975, 'https://upload.wikimedia.org/wikipedia/en/7/7a/Born_to_Run_%28Front_Cover%29.jpg'),
(52, 21, 12, 'Exile on Main St.', 1972, 'https://upload.wikimedia.org/wikipedia/en/c/ca/ExileMainSt.jpg'),
(53, 22, 12, 'Wish You Were Here', 1975, 'https://upload.wikimedia.org/wikipedia/en/a/a4/Pink_Floyd%2C_Wish_You_Were_Here_%281975%29.png'),
(54, 23, 23, 'A Night at the Opera', 1975, 'https://upload.wikimedia.org/wikipedia/en/4/4d/Queen_A_Night_At_The_Opera.png'),
(56, 25, 23, 'Rage Against the Machine', 1992, 'https://upload.wikimedia.org/wikipedia/en/1/1a/RageAgainsttheMachineRageAgainsttheMachine.jpg'),
(58, 26, 13, 'Master Of Puppets', 1986, 'https://metalstorm.net/images/albums/1/1221.jpg'),
(69, 27, 13, 'Paranoid', 1970, 'https://metalstorm.net/images/albums/2/269.jpg'),
(70, 28, 23, 'Rust in Peace', 1990, 'https://metalstorm.net/images/albums/1/1118.jpg'),
(72, 29, 23, 'See You on the Other Side', 2005, 'https://upload.wikimedia.org/wikipedia/en/5/57/Korn_-_See_You_on_the_Other_Side.jpg'),
(74, 30, 23, 'All Hope is Gone', 2008, 'https://upload.wikimedia.org/wikipedia/en/a/a9/All_Hope_is_Gone_%28original%29.jpg'),
(76, 33, 23, 'The Pale Emperor', 2015, 'https://upload.wikimedia.org/wikipedia/en/5/5b/Marilyn_Manson_-_The_Pale_Emperor_%28album_cover%29.png'),
(78, 32, 23, 'Hybrid Theory', 2000, 'https://upload.wikimedia.org/wikipedia/en/2/2a/Linkin_Park_Hybrid_Theory_Album_Cover.jpg'),
(80, 19, 23, 'Hail to the Thief', 2003, 'https://upload.wikimedia.org/wikipedia/en/6/61/Radioheadhailtothethief.png'),
(82, 36, 23, 'A Fever You Can\'t Sweat Out', 2005, 'https://upload.wikimedia.org/wikipedia/en/e/e2/PanicAtTheDisco-FeverCover.jpg'),
(85, 35, 23, 'The Black Parade', 2006, 'https://upload.wikimedia.org/wikipedia/en/e/ea/Blackparadecover.jpg'),
(86, 34, 23, 'Showbiz', 1999, 'https://upload.wikimedia.org/wikipedia/en/9/9d/Museshowbizalbumcover.jpg'),
(87, 34, 23, 'Drones', 2015, 'https://upload.wikimedia.org/wikipedia/en/4/44/MuseDronesCover.jpg'),
(88, 34, 23, 'Will of the People', 2022, 'https://upload.wikimedia.org/wikipedia/en/1/12/Muse_-_Will_of_the_People.png'),
(89, 34, 23, 'Absolution', 2003, 'https://upload.wikimedia.org/wikipedia/en/b/b4/Muse_-_Absolution_Cover_UK.jpg'),
(90, 34, 23, 'Origin of Symmetry', 2001, 'https://upload.wikimedia.org/wikipedia/en/3/35/Muse_-_Origin_of_Symmetry_cover_art.png'),
(91, 34, 23, 'Black Holes and Revelations', 2006, 'https://upload.wikimedia.org/wikipedia/en/c/c5/BlackHolesCover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('female','male','group') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `gender`) VALUES
(7, 'Taylor Swift', 'female'),
(8, 'Justin Timberlake', 'male'),
(9, 'Lady Gaga', 'female'),
(10, 'ABBA', 'group'),
(11, 'Michael Jackson', 'male'),
(12, 'Twenty One Pilots', 'group'),
(13, 'Chance the Rapper', 'male'),
(14, 'Eminem', 'male'),
(15, 'Kanye West', 'male'),
(16, 'Dr. Dre', 'male'),
(17, 'Mac Miller', 'male'),
(18, 'AC/DC', 'group'),
(19, 'Radiohead', 'group'),
(20, 'Bruce Springsteen', 'male'),
(21, 'Rolling Stones', 'group'),
(22, 'Pink Floyd', 'group'),
(23, 'Queen', 'group'),
(24, 'Guns and Roses', 'group'),
(25, 'Rage Against the Machine', 'group'),
(26, 'Metallica', 'group'),
(27, 'Black Sabbath', 'group'),
(28, 'Megadeth', 'group'),
(29, 'Korn', 'group'),
(30, 'Slipknot', 'group'),
(31, 'Pantera', 'group'),
(32, 'Linkin Park', 'group'),
(33, 'Marilyn Manson', 'group'),
(34, 'Muse', 'group'),
(35, 'My Chemical Romance', 'group'),
(36, 'Panic at the Disco', 'group'),
(37, 'Weezer', 'group');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(10, 'pop'),
(11, 'rap'),
(12, 'rock'),
(13, 'metal'),
(14, 'alternative'),
(17, 'polish-rock'),
(23, 'GodLike');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `youtube_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `album_id`, `name`, `duration`, `position`, `youtube_id`) VALUES
(1, 7, 'Welcome to New York', 212, 1, 'w1HU24bNbX8'),
(2, 7, 'Blank Space', 231, 2, 'e-ORhEE9VVg'),
(3, 7, 'Style', 231, 3, '-CmadmM5cOk'),
(4, 7, 'Out of the Woods', 235, 4, 'JLf9q36UsBk'),
(5, 7, 'All You Had to Do Was Stay', 193, 5, 'jZ3VMl-uvFE'),
(6, 7, 'Shake It Off', 219, 6, 'nfWlot6h_JM'),
(7, 7, 'I Wish You Would', 207, 7, '2GzTA_v84NM'),
(8, 7, 'Bad Blood', 211, 8, '663K25hyYG0'),
(9, 7, 'Wildest Dreams', 220, 9, 'IdneKLhsWOQ'),
(10, 7, 'How You Get the Girl', 247, 10, 'DB7VaXbE5sM'),
(11, 7, 'This Love', 250, 11, 'fn3xDFK2w9k'),
(12, 7, 'I Know Places', 195, 12, 'itIn63ZKUsk'),
(13, 7, 'Clean', 270, 13, 'xkXerW7kLXk'),
(27, 8, 'Lavender Haze', 202, 1, 'mkR_Qwix4Ho'),
(28, 8, 'Maroon', 218, 2, 'IHMySdortig'),
(29, 8, 'Anti-Hero', 200, 3, 'b1kbLwvqugk'),
(30, 8, 'Snow on the Beach (featuring Lana Del Rey)', 256, 4, 'ycE7bUq3-2k'),
(31, 8, 'You\'re on Your Own, Kid', 194, 5, '7Gbg6Z70J7E'),
(32, 8, 'Midnight Rain', 173, 6, 'Odh9ddPUkEY'),
(33, 8, 'Question...?', 210, 7, 'xxrf_QBD5DE'),
(34, 8, 'Vigilante Shit', 164, 8, 'Uoey4W_3bos'),
(35, 8, 'Bejeweled', 194, 9, 'b7QlX3yR2xs'),
(36, 8, 'Labyrinth', 247, 10, 'PCiVzWLxDSk'),
(37, 8, 'Karma', 205, 11, 'pzVYSfzNQ5Y'),
(38, 8, 'Sweet Nothing', 199, 12, 'rn0brgg2BpI'),
(39, 8, 'Mastermind', 191, 13, 'Tmz1lz0zcLQ'),
(40, 9, 'Señorita', 294, 1, 'nJHYDkvRB2Y'),
(41, 9, 'Like I Love You (featuring Clipse)', 283, 2, 'FQ3slUz7Jo8'),
(42, 9, '(Oh No) What You Got', 271, 3, '9UclXKDSLA0'),
(43, 9, 'Take It from Here', 374, 4, 'RS7AjOdBDLk'),
(44, 9, 'Cry Me a River', 288, 5, 'DksSPZTZES0'),
(45, 9, 'Rock Your Body', 267, 6, 'TSVHoHyErBQ'),
(46, 9, 'Nothin\' Else', 298, 7, 'BuRwHyiidVM'),
(47, 9, 'Last Night', 287, 8, 'H6FCeSMs3YQ'),
(48, 9, 'Still on My Brain', 275, 9, '2d7MuiC97Uw'),
(49, 9, '(And She Said) Take Me Now', 331, 10, 'nHbmGl4vX6A'),
(50, 9, 'Right for Me (featuring Bubba Sparxxx)', 269, 11, 'h37ukbkn0vk'),
(51, 9, 'Let\'s Take a Ride', 284, 12, 'BTviHOEtv38'),
(52, 9, 'Never Again', 274, 13, 'F3vaSto7bDk'),
(53, 11, 'Bad Romance', 295, 1, 'qrO4YZeyl0I'),
(54, 11, 'Alejandro', 277, 2, 'niqrrmev4mA'),
(55, 11, 'Monster', 249, 3, 'dDvEY8LT4x0'),
(56, 11, 'Speechless', 270, 4, 'hIesMX_3BgQ'),
(57, 11, 'Dance in the Dark', 288, 5, '_Ry3wbHai08'),
(58, 11, 'Telephone (feat. Beyoncé)', 220, 6, 'KfSVnUvKyZ0'),
(59, 11, 'So Happy I Could Die', 235, 7, 'Jhc_SshF-IM'),
(60, 11, 'Teeth', 220, 8, 'fsh-tBXWYP8'),
(61, 11, 'Bad Romance (Starsmith Remix)', 220, 9, 'ya4cxhrsylg'),
(62, 13, 'Wanna Be Startin\' Somethin', 363, 1, 'DsJlttdkybk'),
(63, 13, 'Baby Be Mine', 261, 2, 'O3tnOVideSo'),
(64, 13, 'The Girl Is Mine (with Paul McCartney) ', 222, 3, '8GB9BULxZ8c'),
(65, 13, 'Thriller', 358, 4, 'sOnqjkJTMaA'),
(66, 13, 'Beat It', 258, 5, 'oRdxUFDoQe0'),
(67, 13, 'Billie Jean', 294, 6, 'Zi_XLOBDo_Y'),
(68, 13, 'Human Nature', 246, 7, 'ElN_4vUvTPs'),
(69, 13, 'P.Y.T. (Pretty Young Thing)', 239, 8, '1ZZQuj6htF4'),
(70, 13, 'The Lady In My Life', 300, 9, 'cJLH5yXoqi8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
