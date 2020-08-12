-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2020 at 09:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_right`
--

CREATE TABLE `access_right` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prevelage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_right`
--

INSERT INTO `access_right` (`id`, `user_id`, `prevelage_id`) VALUES
(1, 1, 6),
(2, 2, 5),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `id` int(11) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`id`, `msg_id`, `date`) VALUES
(1, 9, '2020-08-11 13:27:14'),
(2, 9, '2020-08-11 13:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `bulk_msg`
--

CREATE TABLE `bulk_msg` (
  `id` int(11) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `bulk_receiver` longtext NOT NULL,
  `created_by` int(11) NOT NULL,
  `approved_by` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approved_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulk_msg`
--

INSERT INTO `bulk_msg` (`id`, `msg_id`, `bulk_receiver`, `created_by`, `approved_by`, `status`, `created_date`, `approved_date`) VALUES
(24, 9, '0 398', 2, 2, 1, '2020-08-06 12:46:47', '0000-00-00 00:00:00'),
(25, 9, '0 397 396 395 394 393 392 391 390 389 388 387 386 385 384 383 382 381 380 379 378 377 376 375 374 373 372 371 370 369 368 367 366 365 364 363 362 361 360 359 358 357 356 355 354 353 352 351 350 349 348 347 346 345 344 343 342 341 340 339 338 337 336 335 334 333 332 331 330 329 328 327 326 325 324 323 322 321 320 319 318 317 316 315 314 313 312 311 310 309 308 307 306 305 304 303 302 301 300 299 298 297 296 295 294 293 292 291 290 289 288 287 286 285 284 283 282 281 280 279 278 277 276 275 274 273 272 271 270 269 268 267 266 265 264 263 262 261 260 259 258 257 256 255 254 253 252 251 250 249 248 247 246 245 244 243 242 241 240 239 238 237 236 235 234 233 232 231 230 229 228 227 226 225 224 223 222 221 220 219 218 217 216 215 214 213 212 211 210 209 208 207 206 205 204 203 202 201 200 199 198 197 196 195 194 193 192 191 190 189 188 187 186 185 184 183 182 181 180 179 178 177 176 175 174 173 172 171 170 169 168 167 166 165 164 163 162 161 160 159 158 157 156 155 154 153 152 151 150 149 148 147 146 145 144 143 142 141 140 139 138 137 136 135 134 133 132 131 130 129 128 127 126 125 124 123 122 121 120 119 118 117 116 115 114 113 112 111 110 109 108 107 106 105 104 103 102 101 100 99 98 97 96 95 94 93 92 91 90 89 88 87 86 85 84 83 82 81 80 79 78 77 76 75 74 73 72 71 70 69 68 67 66 65 64 63 62 61 60 59 58 57 56 55 54 53 52 51 50 49 48 47 46 45 44 43 42 41 40 39 38 37 36 35 34 33 32 31 30 29 28 27 26 25 24 23 22 21 20 19 18 17 16 15 14 13 12 11 10 9 8 7 6 5 4 3 2 1', 2, 2, 1, '2020-08-06 12:48:38', '0000-00-00 00:00:00'),
(26, 9, '0 398', 2, 2, 1, '2020-08-07 08:51:25', '0000-00-00 00:00:00'),
(27, 9, '0 398', 2, 2, 1, '2020-08-07 08:52:01', '0000-00-00 00:00:00'),
(28, 9, '0 398', 2, 2, 1, '2020-08-07 09:05:25', '0000-00-00 00:00:00'),
(29, 9, '0 398 397 396 395 394 393 392 391 390 389 388 387 386 385 384 383 382 381 380 379 378 377 376 375 374 373 372 371 370 369 368 367 366 365 364 363 362 361 360 359 358 357 356 355 354 353 352 351 350 349 348 347 346 345 344 343 342 341 340 339 338 337 336 335 334 333 332 331 330 329 328 327 326 325 324 323 322 321 320 319 318 317 316 315 314 313 312 311 310 309 308 307 306 305 304 303 302 301 300 299 298 297 296 295 294 293 292 291 290 289 288 287 286 285 284 283 282 281 280 279 278 277 276 275 274 273 272 271 270 269 268 267 266 265 264 263 262 261 260 259 258 257 256 255 254 253 252 251 250 249 248 247 246 245 244 243 242 241 240 239 238 237 236 235 234 233 232 231 230 229 228 227 226 225 224 223 222 221 220 219 218 217 216 215 214 213 212 211 210 209 208 207 206 205 204 203 202 201 200 199 198 197 196 195 194 193 192 191 190 189 188 187 186 185 184 183 182 181 180 179 178 177 176 175 174 173 172 171 170 169 168 167 166 165 164 163 162 161 160 159 158 157 156 155 154 153 152 151 150 149 148 147 146 145 144 143 142 141 140 139 138 137 136 135 134 133 132 131 130 129 128 127 126 125 124 123 122 121 120 119 118 117 116 115 114 113 112 111 110 109 108 107 106 105 104 103 102 101 100 99 98 97 96 95 94 93 92 91 90 89 88 87 86 85 84 83 82 81 80 79 78 77 76 75 74 73 72 71 70 69 68 67 66 65 64 63 62 61 60 59 58 57 56 55 54 53 52 51 50 49 48 47 46 45 44 43 42 41 40 39 38 37 36 35 34 33 32 31 30 29 28 27 26 25 24 23 22 21 20 19 18 17 16 15 14 13 12 11 10 9 8 7 6 5 4 3 2 1', 2, 2, 1, '2020-08-07 13:44:13', '0000-00-00 00:00:00'),
(30, 9, '0 398', 2, 2, 1, '2020-08-08 06:50:53', '0000-00-00 00:00:00'),
(31, 9, '0 398 397 396 395 394 393 392 391 390 389 388 387 386 385 384 383 382 381 380 379 378 377 376 375 374 373 372 371 370 369 368 367 366 365 364 363 362 361 360 359 358 357 356 355 354 353 352 351 350 349 348 347 346 345 344 343 342 341 340 339 338 337 336 335 334 333 332 331 330 329 328 327 326 325 324 323 322 321 320 319 318 317 316 315 314 313 312 311 310 309 308 307 306 305 304 303 302 301 300 299 298 297 296 295 294 293 292 291 290 289 288 287 286 285 284 283 282 281 280 279 278 277 276 275 274 273 272 271 270 269 268 267 266 265 264 263 262 261 260 259 258 257 256 255 254 253 252 251 250 249 248 247 246 245 244 243 242 241 240 239 238 237 236 235 234 233 232 231 230 229 228 227 226 225 224 223 222 221 220 219 218 217 216 215 214 213 212 211 210 209 208 207 206 205 204 203 202 201 200 199 198 197 196 195 194 193 192 191 190 189 188 187 186 185 184 183 182 181 180 179 178 177 176 175 174 173 172 171 170 169 168 167 166 165 164 163 162 161 160 159 158 157 156 155 154 153 152 151 150 149 148 147 146 145 144 143 142 141 140 139 138 137 136 135 134 133 132 131 130 129 128 127 126 125 124 123 122 121 120 119 118 117 116 115 114 113 112 111 110 109 108 107 106 105 104 103 102 101 100 99 98 97 96 95 94 93 92 91 90 89 88 87 86 85 84 83 82 81 80 79 78 77 76 75 74 73 72 71 70 69 68 67 66 65 64 63 62 61 60 59 58 57 56 55 54 53 52 51 50 49 48 47 46 45 44 43 42 41 40 39 38 37 36 35 34 33 32 31 30 29 28 27 26 25 24 23 22 21 20 19 18 17 16 15 14 13 12 11 10 9 8 7 6 5 4 3 2 1', 2, 0, 0, '2020-08-08 09:59:23', '0000-00-00 00:00:00'),
(32, 9, '0 398', 3, 0, 0, '2020-08-10 07:18:08', '0000-00-00 00:00:00'),
(33, 9, '0 398', 1, 0, 0, '2020-08-10 09:27:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'male',
  `address` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `full_name`, `phone`, `email`, `gender`, `address`, `active`, `date`) VALUES
(1, 'Kidist Begashaw', '0903187532', 'henok@gmail.com', 'male', 'Addis Ababa', 1, '2020-08-05 09:31:17'),
(2, 'Hailu Gebretsadike', '0926741790', 'hailu.cs@yahoo.com', 'male', 'Akaki Kality,woreda 09', 1, '2020-08-11 13:29:20'),
(3, 'Biruk Mammo', '0910561147', 'admin75@admin.com', 'female', 'Arbaminch.', 1, '2020-08-04 14:27:32'),
(4, 'Kibrom Moges Tsehaye', '251996991096', '', 'male', '', 1, '2020-08-10 06:22:58'),
(5, 'Abreham G/medhin G/meskel', '251996990701', '', 'male', '', 1, '2020-08-10 06:22:58'),
(6, 'Melaku Hailu Telila', '251996990477', '', 'male', '', 1, '2020-08-10 06:22:58'),
(7, 'Yodit Gebeyehu Tesema', '251996990095', '', 'male', '', 1, '2020-08-10 06:22:58'),
(8, 'Ephram Sirak Tedla', '251996989146', '', 'male', '', 1, '2020-08-10 06:22:58'),
(9, 'Shemsu Heru Abdshekur', '251996986104', '', 'male', '', 1, '2020-08-10 06:22:58'),
(10, 'Tewodros Mekuriya Abite', '251996985525', '', 'male', '', 1, '2020-08-10 06:22:58'),
(11, 'Alemayehu H/mariam T/birhan', '251996985240', '', 'male', '', 1, '2020-08-10 06:22:58'),
(12, 'Dagim Asegid Basa', '251996983120', '', 'male', '', 1, '2020-08-10 06:22:58'),
(13, 'Abel Girma Bulbula', '251996982662', '', 'male', '', 1, '2020-08-10 06:22:59'),
(14, 'Abnet Befkadu Banteayehu', '251996982297', '', 'male', '', 1, '2020-08-10 06:22:59'),
(15, 'Binyam Geachew Sori', '251996982120', '', 'male', '', 1, '2020-08-10 06:22:59'),
(16, 'Yonatan Habtamu Wubshet', '251996982088', '', 'male', '', 1, '2020-08-10 06:22:59'),
(17, 'Tegegn Aleleign Adane', '251996981623', '', 'male', '', 1, '2020-08-10 06:22:59'),
(18, 'Alula Abreham Sahle', '251996981388', '', 'male', '', 1, '2020-08-10 06:22:59'),
(19, 'Tewodros Tariku W/michael', '251996976474', '', 'male', '', 1, '2020-08-10 06:22:59'),
(20, 'Yonas Engedashet Gorfie', '251996975686', '', 'male', '', 1, '2020-08-10 06:22:59'),
(21, 'Daniel Kiyar Tesfaye', '251996975493', '', 'male', '', 1, '2020-08-10 06:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'male',
  `email` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `full_name`, `phone`, `gender`, `email`, `active`, `cdate`) VALUES
(1, 'Kibrom Moges Tsehaye', '251996991096', 'male', NULL, 1, '2020-08-06 09:47:20'),
(2, 'Abreham G/medhin G/meskel', '251996990701', 'male', NULL, 1, '2020-08-06 09:47:20'),
(3, 'Melaku Hailu Telila', '251996990477', 'male', NULL, 1, '2020-08-06 09:47:20'),
(4, 'Yodit Gebeyehu Tesema', '251996990095', 'male', NULL, 1, '2020-08-06 09:47:20'),
(5, 'Ephram Sirak Tedla', '251996989146', 'male', NULL, 1, '2020-08-06 09:47:20'),
(6, 'Shemsu Heru Abdshekur', '251996986104', 'male', NULL, 1, '2020-08-06 09:47:20'),
(7, 'Tewodros Mekuriya Abite', '251996985525', 'male', NULL, 1, '2020-08-06 09:47:20'),
(8, 'Alemayehu H/mariam T/birhan', '251996985240', 'male', NULL, 1, '2020-08-06 09:47:21'),
(9, 'Dagim Asegid Basa', '251996983120', 'male', NULL, 1, '2020-08-06 09:47:21'),
(10, 'Abel Girma Bulbula', '251996982662', 'male', NULL, 1, '2020-08-06 09:47:21'),
(11, 'Abnet Befkadu Banteayehu', '251996982297', 'male', NULL, 1, '2020-08-06 09:47:21'),
(12, 'Binyam Geachew Sori', '251996982120', 'male', NULL, 1, '2020-08-06 09:47:21'),
(13, 'Yonatan Habtamu Wubshet', '251996982088', 'male', NULL, 1, '2020-08-06 09:47:21'),
(14, 'Tegegn Aleleign Adane', '251996981623', 'male', NULL, 1, '2020-08-06 09:47:21'),
(15, 'Alula Abreham Sahle', '251996981388', 'male', NULL, 1, '2020-08-06 09:47:21'),
(16, 'Tewodros Tariku W/michael', '251996976474', 'male', NULL, 1, '2020-08-06 09:47:21'),
(17, 'Yonas Engedashet Gorfie', '251996975686', 'male', NULL, 1, '2020-08-06 09:47:21'),
(18, 'Daniel Kiyar Tesfaye', '251996975493', 'male', NULL, 1, '2020-08-06 09:47:21'),
(19, 'Dereje Habtamu Benti', '251996974949', 'male', NULL, 1, '2020-08-06 09:47:21'),
(20, 'Jemal Mohammed Ali', '251996912449', 'male', NULL, 1, '2020-08-06 09:47:21'),
(21, 'Hamza Kasim Mohammed', '251996892932', 'male', NULL, 1, '2020-08-06 09:47:21'),
(22, 'Tigistu W/Mariyam Mankissa', '251996892868', 'male', NULL, 1, '2020-08-06 09:47:21'),
(23, 'Amare Birhanu Anesa', '251996892366', 'male', NULL, 1, '2020-08-06 09:47:21'),
(24, 'Jafer Meki Awel', '251996892257', 'male', NULL, 1, '2020-08-06 09:47:21'),
(25, 'Million Girmay Estifanos', '251996892236', 'male', NULL, 1, '2020-08-06 09:47:21'),
(26, 'Zelalem Mekonnen H/mariam', '251996892230', 'male', NULL, 1, '2020-08-06 09:47:21'),
(27, 'Habtamu Getie Wondemagegne', '251996891909', 'male', NULL, 1, '2020-08-06 09:47:21'),
(28, 'Nahom Misganaw Werede', '251996891541', 'male', NULL, 1, '2020-08-06 09:47:21'),
(29, 'Nahom Wolde Lakew', '251996891202', 'male', NULL, 1, '2020-08-06 09:47:22'),
(30, 'Mussa Ali Ledi', '251996891045', 'male', NULL, 1, '2020-08-06 09:47:22'),
(31, 'Abdurazak Musa Ahmed', '251996890242', 'male', NULL, 1, '2020-08-06 09:47:22'),
(32, 'Tadios Getachew G/amanuel', '251996889677', 'male', NULL, 1, '2020-08-06 09:47:22'),
(33, 'Berihun Mengistu G/medhin', '251996889095', 'male', NULL, 1, '2020-08-06 09:47:22'),
(34, 'Natnael Alemu Nigusie', '251996866685', 'male', NULL, 1, '2020-08-06 09:47:22'),
(35, 'Tewodros Yibeltal Asnake', '251996866446', 'male', NULL, 1, '2020-08-06 09:47:22'),
(36, 'Solomon Tigabe Chane', '251996865870', 'male', NULL, 1, '2020-08-06 09:47:22'),
(37, 'Rahel Dugassa Jelcha', '251996865476', 'male', NULL, 1, '2020-08-06 09:47:22'),
(38, 'Kumneger Asnake Abebe', '251996864720', 'male', NULL, 1, '2020-08-06 09:47:22'),
(39, 'Solomon Ayele W/Tsadik', '251996864592', 'male', NULL, 1, '2020-08-06 09:47:22'),
(40, 'Yohannes G/Michael Skuar', '251996864399', 'male', NULL, 1, '2020-08-06 09:47:22'),
(41, 'Zelalem Hailu Abebe', '251996864161', 'male', NULL, 1, '2020-08-06 09:47:22'),
(42, 'Solomon Alemu Dubale', '251996863992', 'male', NULL, 1, '2020-08-06 09:47:22'),
(43, 'Yeshiwas Sisay Nega', '251996863884', 'male', NULL, 1, '2020-08-06 09:47:22'),
(44, 'Awol Birgu Mohammed', '251996863810', 'male', NULL, 1, '2020-08-06 09:47:22'),
(45, 'Yoseph Leulseged Kebede', '251996863116', 'male', NULL, 1, '2020-08-06 09:47:22'),
(46, 'Tamerat Jefar Regasa', '251996861371', 'male', NULL, 1, '2020-08-06 09:47:22'),
(47, 'Million Takele Awoke', '251996861041', 'male', NULL, 1, '2020-08-06 09:47:22'),
(48, 'Mekit Tsegaye Kassahun', '251996860717', 'male', NULL, 1, '2020-08-06 09:47:23'),
(49, 'Mikiyas Seleshi Kenea', '251996860601', 'male', NULL, 1, '2020-08-06 09:47:23'),
(50, 'Dagem Teshome Negash', '251996860290', 'male', NULL, 1, '2020-08-06 09:47:23'),
(51, 'Nebyu Samuel Wondemu', '251996860222', 'male', NULL, 1, '2020-08-06 09:47:23'),
(52, 'Hermela Asnake Zegeye', '251996860195', 'male', NULL, 1, '2020-08-06 09:47:23'),
(53, 'Gezahegne Mekonnen Tesema', '251996859977', 'male', NULL, 1, '2020-08-06 09:47:23'),
(54, 'Henok Gizachew Gebre', '251996859970', 'male', NULL, 1, '2020-08-06 09:47:23'),
(55, 'Temesgen Heyi Rega', '251996859898', 'male', NULL, 1, '2020-08-06 09:47:23'),
(56, 'Bisrat Workneh Girum', '251996859759', 'male', NULL, 1, '2020-08-06 09:47:23'),
(57, 'Alemayehu Tintagu Sahele', '251996859721', 'male', NULL, 1, '2020-08-06 09:47:23'),
(58, 'Kalid Mohammed Adem', '251996859699', 'male', NULL, 1, '2020-08-06 09:47:23'),
(59, 'Bisrat Ashagre Admase', '251996859158', 'male', NULL, 1, '2020-08-06 09:47:23'),
(60, 'Daniel Mola Tessema', '251996858854', 'male', NULL, 1, '2020-08-06 09:47:23'),
(61, 'Bisrat Araya Sirak', '251996858484', 'male', NULL, 1, '2020-08-06 09:47:23'),
(62, 'Kalkidan Getachew Zewde', '251996858439', 'male', NULL, 1, '2020-08-06 09:47:23'),
(63, 'Firaol Tesfaye Mengesha', '251996857818', 'male', NULL, 1, '2020-08-06 09:47:23'),
(64, 'Mickiyas Gebeyehu Abera', '251996857228', 'male', NULL, 1, '2020-08-06 09:47:23'),
(65, 'Bereket Alemu Dubale', '251996855859', 'male', NULL, 1, '2020-08-06 09:47:23'),
(66, 'Biniyam Fantahun Baraki', '251996855000', 'male', NULL, 1, '2020-08-06 09:47:23'),
(67, 'Habtesielase Bekele Gutema', '251996854501', 'male', NULL, 1, '2020-08-06 09:47:23'),
(68, 'Kidus Yohanes Genetu', '251996854353', 'male', NULL, 1, '2020-08-06 09:47:23'),
(69, 'Yidnekachew Ayele Tadesse', '251996852424', 'male', NULL, 1, '2020-08-06 09:47:23'),
(70, 'Fekade Abiy Abdissa', '251996852280', 'male', NULL, 1, '2020-08-06 09:47:23'),
(71, 'Yitbarek Amsalu Banti', '251996851993', 'male', NULL, 1, '2020-08-06 09:47:23'),
(72, 'Degesew Chewe Guda', '251996851991', 'male', NULL, 1, '2020-08-06 09:47:23'),
(73, 'Daniel Abebe G/georgis', '251996851978', 'male', NULL, 1, '2020-08-06 09:47:23'),
(74, 'Yohannes Ameha Assefa', '251996851917', 'male', NULL, 1, '2020-08-06 09:47:23'),
(75, 'Asged Taye Legesse', '251996851887', 'male', NULL, 1, '2020-08-06 09:47:23'),
(76, 'Habitamu Zemedehun Bizuwork', '251996851781', 'male', NULL, 1, '2020-08-06 09:47:23'),
(77, 'Tewodros Birhanu Tsegaw', '251996851733', 'male', NULL, 1, '2020-08-06 09:47:23'),
(78, 'Yosef Habte G/hawariyat', '251996851567', 'male', NULL, 1, '2020-08-06 09:47:23'),
(79, 'Tesfaye Worku Gizaw', '251996851549', 'male', NULL, 1, '2020-08-06 09:47:24'),
(80, 'Girum Kassa Afesa', '251996851515', 'male', NULL, 1, '2020-08-06 09:47:24'),
(81, 'Dagnachew H/Mariam Aseres', '251996851012', 'male', NULL, 1, '2020-08-06 09:47:24'),
(82, 'Nigusu Asnake Kassahun', '251996850139', 'male', NULL, 1, '2020-08-06 09:47:24'),
(83, 'Desalegne Tefera Biset', '251996849671', 'male', NULL, 1, '2020-08-06 09:47:24'),
(84, 'Binyam Kifle W/Mariyam', '251996849166', 'male', NULL, 1, '2020-08-06 09:47:24'),
(85, 'Betemariam Moges Neway', '251996848580', 'male', NULL, 1, '2020-08-06 09:47:24'),
(86, 'Worku Mekonnen Nigussie', '251996848171', 'male', NULL, 1, '2020-08-06 09:47:24'),
(87, 'Biniyam Kebede Yimer', '251996847787', 'male', NULL, 1, '2020-08-06 09:47:24'),
(88, 'Nur Hussen Abdurahman', '251996775583', 'male', NULL, 1, '2020-08-06 09:47:24'),
(89, 'Nigat Teklewold Altaye', '251996699193', 'male', NULL, 1, '2020-08-06 09:47:24'),
(90, 'Saron Aman W/semayat', '251996035357', 'male', NULL, 1, '2020-08-06 09:47:24'),
(91, 'Edome Betseha Kassahun', '251996032627', 'male', NULL, 1, '2020-08-06 09:47:24'),
(92, 'Adisu G/hiwot Semere', '251996021214', 'male', NULL, 1, '2020-08-06 09:47:24'),
(93, 'Esayas Zeleke Yimer', '251996016517', 'male', NULL, 1, '2020-08-06 09:47:24'),
(94, 'Mohammed Yesuf Ali', '251996004895', 'male', NULL, 1, '2020-08-06 09:47:24'),
(95, 'Kumlachew Tesfaye W/aregay', '251996002302', 'male', NULL, 1, '2020-08-06 09:47:24'),
(96, 'Yared Argaw Tilahun', '251996002121', 'male', NULL, 1, '2020-08-06 09:47:24'),
(97, 'Sisay Fantahun Gobeza', '251995998484', 'male', NULL, 1, '2020-08-06 09:47:24'),
(98, 'Habtamu Hunde W/giorgis', '251995997884', 'male', NULL, 1, '2020-08-06 09:47:24'),
(99, 'Abdlhamid Alemu Nema', '251995985958', 'male', NULL, 1, '2020-08-06 09:47:24'),
(100, 'Abenezer Kebede Alemu', '251995500450', 'male', NULL, 1, '2020-08-06 09:47:24'),
(101, 'Yonatan Kebede Yimam', '251995498717', 'male', NULL, 1, '2020-08-06 09:47:24'),
(102, 'Natnael Andarge Lakew', '251995498080', 'male', NULL, 1, '2020-08-06 09:47:24'),
(103, 'Yitayal Fenta Mekonnen', '251995494176', 'male', NULL, 1, '2020-08-06 09:47:24'),
(104, 'Fasil worku Zegeye', '251995492821', 'male', NULL, 1, '2020-08-06 09:47:24'),
(105, 'Abel Nigusse Belete', '251995492729', 'male', NULL, 1, '2020-08-06 09:47:24'),
(106, 'Bezabeh Fisseha Abebe', '251995492668', 'male', NULL, 1, '2020-08-06 09:47:24'),
(107, 'Birhanu Atlabachew Mamo', '251995492649', 'male', NULL, 1, '2020-08-06 09:47:25'),
(108, 'Nebiyu Awaye Awegechew', '251995492646', 'male', NULL, 1, '2020-08-06 09:47:25'),
(109, 'Fasika Anteneh Menber', '251995481515', 'male', NULL, 1, '2020-08-06 09:47:25'),
(110, 'Yohannes Shewarega Kifle', '251995479747', 'male', NULL, 1, '2020-08-06 09:47:25'),
(111, 'Tamiru Seyoum Tefera', '251995478019', 'male', NULL, 1, '2020-08-06 09:47:25'),
(112, 'Dawit Atsbiha Germay', '251995451617', 'male', NULL, 1, '2020-08-06 09:47:25'),
(113, 'Mulat Abera Bulbula', '251995451546', 'male', NULL, 1, '2020-08-06 09:47:25'),
(114, 'Ermiyas Haile Abetew', '251995434999', 'male', NULL, 1, '2020-08-06 09:47:25'),
(115, 'Eliltaw Desalegn Birhanu', '251995434636', 'male', NULL, 1, '2020-08-06 09:47:25'),
(116, 'Honelegn Tekaw Addisu', '251995434342', 'male', NULL, 1, '2020-08-06 09:47:25'),
(117, 'Samson Yohannes Kiya', '251995429697', 'male', NULL, 1, '2020-08-06 09:47:25'),
(118, 'Sisay Addisu Legesse', '251995056180', 'male', NULL, 1, '2020-08-06 09:47:25'),
(119, 'Solomon Abadi Gugsa', '251995034926', 'male', NULL, 1, '2020-08-06 09:47:25'),
(120, 'Mikiyas Tilahun Abebe', '251995033003', 'male', NULL, 1, '2020-08-06 09:47:25'),
(121, 'Tomas Subetinalexander Vacilevich', '251995013575', 'male', NULL, 1, '2020-08-06 09:47:25'),
(122, 'Bemnet Tadesse Kassegn', '251995013411', 'male', NULL, 1, '2020-08-06 09:47:25'),
(123, 'Solomon Agezew Adimasu', '251995006767', 'male', NULL, 1, '2020-08-06 09:47:25'),
(124, 'Rediet Zelalem Wudineh', '251995006045', 'male', NULL, 1, '2020-08-06 09:47:25'),
(125, 'Ketemaw H/wold Hussen', '251995005583', 'male', NULL, 1, '2020-08-06 09:47:25'),
(126, 'Yonatan Alemseged Ayenalem', '251995005505', 'male', NULL, 1, '2020-08-06 09:47:25'),
(127, 'Aseged H/Michael Tadesse', '251994985050', 'male', NULL, 1, '2020-08-06 09:47:25'),
(128, 'Seyfu Tesfaye Lakew', '251994973611', 'male', NULL, 1, '2020-08-06 09:47:25'),
(129, 'Daniel Teka Shirbeza', '251994968555', 'male', NULL, 1, '2020-08-06 09:47:25'),
(130, 'Million Tassew Gedle', '251994942020', 'male', NULL, 1, '2020-08-06 09:47:25'),
(131, 'Endris Ahmed Agesh', '251994939401', 'male', NULL, 1, '2020-08-06 09:47:25'),
(132, 'Dawit Hadera Hagos', '251994898313', 'male', NULL, 1, '2020-08-06 09:47:25'),
(133, 'Mengesha Mamo Kebtimer', '251994897788', 'male', NULL, 1, '2020-08-06 09:47:25'),
(134, 'Ayenew Asnake Kasew', '251994895000', 'male', NULL, 1, '2020-08-06 09:47:25'),
(135, 'Hussein Wabella Shikur', '251994894898', 'male', NULL, 1, '2020-08-06 09:47:25'),
(136, 'Mezene Worku Gebre', '251994894469', 'male', NULL, 1, '2020-08-06 09:47:26'),
(137, 'Turab Mohammed Aydahis', '251994894004', 'male', NULL, 1, '2020-08-06 09:47:26'),
(138, 'Andenet Mesele Abegaz', '251994893929', 'male', NULL, 1, '2020-08-06 09:47:26'),
(139, 'Habtamu Tesfaye Eshete', '251994892535', 'male', NULL, 1, '2020-08-06 09:47:26'),
(140, 'Melese Feyisa Banjaw', '251994891818', 'male', NULL, 1, '2020-08-06 09:47:26'),
(141, 'Tsegaye Girma Kitaw', '251994891212', 'male', NULL, 1, '2020-08-06 09:47:26'),
(142, 'Tesfaye Weldesenbet Legesse', '251994855609', 'male', NULL, 1, '2020-08-06 09:47:26'),
(143, 'Yeabsera Getahun G/mariam', '251994854487', 'male', NULL, 1, '2020-08-06 09:47:26'),
(144, 'Tesfagzi Petros Tizazu', '251994852436', 'male', NULL, 1, '2020-08-06 09:47:26'),
(145, 'Birhan Shumete Balemi', '251994852221', 'male', NULL, 1, '2020-08-06 09:47:26'),
(146, 'Daniel Nigatu T/haymanot', '251994852100', 'male', NULL, 1, '2020-08-06 09:47:26'),
(147, 'Anteneh Chanyalew Tsegaye', '251994852043', 'male', NULL, 1, '2020-08-06 09:47:26'),
(148, 'Deslegn Tesfaye Hika', '251994850947', 'male', NULL, 1, '2020-08-06 09:47:26'),
(149, 'Habte Lakew Feleke', '251994850378', 'male', NULL, 1, '2020-08-06 09:47:26'),
(150, 'Ahmed Edris Mohammed', '251994850349', 'male', NULL, 1, '2020-08-06 09:47:26'),
(151, 'Abreham kibreab Tesfaye', '251994847061', 'male', NULL, 1, '2020-08-06 09:47:26'),
(152, 'Yosef Daniel Kefeni', '251994846030', 'male', NULL, 1, '2020-08-06 09:47:26'),
(153, 'Mekbib Engedawork Assefa', '251994841434', 'male', NULL, 1, '2020-08-06 09:47:26'),
(154, 'Esmael Abebe Mohammed', '251994840209', 'male', NULL, 1, '2020-08-06 09:47:26'),
(155, 'Azaria Solomon Abate', '251994839696', 'male', NULL, 1, '2020-08-06 09:47:26'),
(156, 'Nesredin Yasin Surur', '251994838585', 'male', NULL, 1, '2020-08-06 09:47:26'),
(157, 'Daniel Kebede Degefa', '251994838331', 'male', NULL, 1, '2020-08-06 09:47:26'),
(158, 'Ali Nurhusen Hagos', '251994838327', 'male', NULL, 1, '2020-08-06 09:47:26'),
(159, 'Wasihun Addisu Mekuriya', '251994795899', 'male', NULL, 1, '2020-08-06 09:47:26'),
(160, 'Helen Demissie', '251994679444', 'male', NULL, 1, '2020-08-06 09:47:26'),
(161, 'Asfaw Dendena Robi', '251994663088', 'male', NULL, 1, '2020-08-06 09:47:26'),
(162, 'Esmael Sherefa Mohammed', '251994662828', 'male', NULL, 1, '2020-08-06 09:47:26'),
(163, 'Amanuel Fekadu Geleta', '251994662242', 'male', NULL, 1, '2020-08-06 09:47:26'),
(164, 'Mesele Tamene Birhanu', '251994661999', 'male', NULL, 1, '2020-08-06 09:47:26'),
(165, 'Tesfaye Kefyalw Tegegn', '251994638714', 'male', NULL, 1, '2020-08-06 09:47:26'),
(166, 'Adam Kebede Getachew', '251994638106', 'male', NULL, 1, '2020-08-06 09:47:26'),
(167, 'Nati Manaye Desta', '251994636936', 'male', NULL, 1, '2020-08-06 09:47:26'),
(168, 'Eyob Ashagre Akalu', '251994636835', 'male', NULL, 1, '2020-08-06 09:47:26'),
(169, 'Gezu Moti Akuma', '251994636818', 'male', NULL, 1, '2020-08-06 09:47:26'),
(170, 'Sintayehu Wossen Tesfaye', '251994636800', 'male', NULL, 1, '2020-08-06 09:47:26'),
(171, 'Esayas Shiferaw Wolde', '251994636744', 'male', NULL, 1, '2020-08-06 09:47:27'),
(172, 'Dagmawi Kinfe W/mariam', '251994636705', 'male', NULL, 1, '2020-08-06 09:47:27'),
(173, 'Yonas Alemayehu Edosa', '251994636676', 'male', NULL, 1, '2020-08-06 09:47:27'),
(174, 'Getahun Tilahun Jenbere', '251994636491', 'male', NULL, 1, '2020-08-06 09:47:27'),
(175, 'Tewodros Ashagre Akalu', '251994636476', 'male', NULL, 1, '2020-08-06 09:47:27'),
(176, 'Aster Mekonnen Gete', '251994636460', 'male', NULL, 1, '2020-08-06 09:47:27'),
(177, 'Azaria Daniel Abebe', '251994636398', 'male', NULL, 1, '2020-08-06 09:47:27'),
(178, 'Tariku Yirga Zebre', '251994636336', 'male', NULL, 1, '2020-08-06 09:47:27'),
(179, 'Teferi W/giorgis W/yohannes', '251994636330', 'male', NULL, 1, '2020-08-06 09:47:27'),
(180, 'Abdelfeta Kedir Beshir', '251994636305', 'male', NULL, 1, '2020-08-06 09:47:27'),
(181, 'Million Abreham Tsgaye', '251994636262', 'male', NULL, 1, '2020-08-06 09:47:27'),
(182, 'Senay Beyene Desalegn', '251994636252', 'male', NULL, 1, '2020-08-06 09:47:27'),
(183, 'Henok Bekele G/silase', '251994636139', 'male', NULL, 1, '2020-08-06 09:47:27'),
(184, 'Seyefu Melaku Taye', '251994636018', 'male', NULL, 1, '2020-08-06 09:47:27'),
(185, 'Haymanot Ayele Tefera', '251994635952', 'male', NULL, 1, '2020-08-06 09:47:27'),
(186, 'Biniyam Zenebe Teka', '251994635720', 'male', NULL, 1, '2020-08-06 09:47:27'),
(187, 'Tefera Teferi Mekonnen', '251994635587', 'male', NULL, 1, '2020-08-06 09:47:27'),
(188, 'Fekadu Mulugeta Alemnew', '251994635470', 'male', NULL, 1, '2020-08-06 09:47:27'),
(189, 'Wendesen Dimtsekal Reta', '251994635432', 'male', NULL, 1, '2020-08-06 09:47:27'),
(190, 'Getachew Aragaw Ali', '251994635427', 'male', NULL, 1, '2020-08-06 09:47:27'),
(191, 'Fasika Hailu Shiferaw', '251994635318', 'male', NULL, 1, '2020-08-06 09:47:27'),
(192, 'Lelise Melkamu Kebede', '251994635174', 'male', NULL, 1, '2020-08-06 09:47:27'),
(193, 'Biruk Kebede Gurja', '251994635060', 'male', NULL, 1, '2020-08-06 09:47:28'),
(194, 'Nahom Aregawi Gebre', '251994634286', 'male', NULL, 1, '2020-08-06 09:47:28'),
(195, 'Dereje Mekonnen Molla', '251994632402', 'male', NULL, 1, '2020-08-06 09:47:28'),
(196, 'Biruk Gemechu Teka', '251994632400', 'male', NULL, 1, '2020-08-06 09:47:28'),
(197, 'Aychew Shibeshi Tesema', '251994632020', 'male', NULL, 1, '2020-08-06 09:47:28'),
(198, 'Henok Lemma Bedada', '251994620869', 'male', NULL, 1, '2020-08-06 09:47:28'),
(199, 'Abel Alemayehu Yewnetu', '251994617374', 'male', NULL, 1, '2020-08-06 09:47:28'),
(200, 'Tadios Wolde Fitawek', '251993939190', 'male', NULL, 1, '2020-08-06 09:47:28'),
(201, 'Meksud Temam Kemal', '251993938733', 'male', NULL, 1, '2020-08-06 09:47:28'),
(202, 'Bamlaku Getaneh Sheferaw', '251993938055', 'male', NULL, 1, '2020-08-06 09:47:28'),
(203, 'Eyerusalem Hagos G/silassie', '251993937871', 'male', NULL, 1, '2020-08-06 09:47:28'),
(204, 'Berhanu Areda Borga', '251993937858', 'male', NULL, 1, '2020-08-06 09:47:28'),
(205, 'Sirak Meaza Zelele', '251993937794', 'male', NULL, 1, '2020-08-06 09:47:28'),
(206, 'Tewodros Kebede Demessie', '251993937643', 'male', NULL, 1, '2020-08-06 09:47:28'),
(207, 'Yonas Kifle Berta', '251993937530', 'male', NULL, 1, '2020-08-06 09:47:28'),
(208, 'Endriase Abader Hajidenge', '251993937391', 'male', NULL, 1, '2020-08-06 09:47:28'),
(209, 'Yohannes Zeleke Getahun', '251993937303', 'male', NULL, 1, '2020-08-06 09:47:28'),
(210, 'Robel Tesfaye Umma', '251993936993', 'male', NULL, 1, '2020-08-06 09:47:28'),
(211, 'Kediste Mulugeta Asfaw', '251993936965', 'male', NULL, 1, '2020-08-06 09:47:28'),
(212, 'Behailu Tesgera Yadeta', '251993936944', 'male', NULL, 1, '2020-08-06 09:47:29'),
(213, 'Henok Mesfin Tesfaye', '251993936538', 'male', NULL, 1, '2020-08-06 09:47:29'),
(214, 'Alazar Tekeste G/meskel', '251993936535', 'male', NULL, 1, '2020-08-06 09:47:29'),
(215, 'Sirak Wendimu Legesse', '251993936457', 'male', NULL, 1, '2020-08-06 09:47:29'),
(216, 'Mengesha Mekonen Tadege', '251993935226', 'male', NULL, 1, '2020-08-06 09:47:29'),
(217, 'Dawit G/michael Haile', '251993935042', 'male', NULL, 1, '2020-08-06 09:47:29'),
(218, 'Firdyawkal Demissie Yizaw', '251993934599', 'male', NULL, 1, '2020-08-06 09:47:29'),
(219, 'Biniyam Hailu Abebe', '251993934485', 'male', NULL, 1, '2020-08-06 09:47:29'),
(220, 'Abenezer Assefa Diriba', '251993934338', 'male', NULL, 1, '2020-08-06 09:47:29'),
(221, 'Biniyam Teshager Tiruneh', '251993933928', 'male', NULL, 1, '2020-08-06 09:47:29'),
(222, 'Yihalem Lulseged Kebede', '251993933585', 'male', NULL, 1, '2020-08-06 09:47:29'),
(223, 'Girma Akeber Haile', '251993933299', 'male', NULL, 1, '2020-08-06 09:47:29'),
(224, 'Tewodros Teshome Tadesse', '251993933131', 'male', NULL, 1, '2020-08-06 09:47:29'),
(225, 'Zerihun Kifle Godana', '251993933020', 'male', NULL, 1, '2020-08-06 09:47:29'),
(226, 'Mikiyas Yilma Andargachew', '251993932424', 'male', NULL, 1, '2020-08-06 09:47:29'),
(227, 'Biruk Gizaw Damte', '251993932282', 'male', NULL, 1, '2020-08-06 09:47:29'),
(228, 'Teame G/Silase T/michael', '251993932154', 'male', NULL, 1, '2020-08-06 09:47:29'),
(229, 'Maereg Mulugeta Bekele', '251993932133', 'male', NULL, 1, '2020-08-06 09:47:29'),
(230, 'Bemnet Abebe Habte', '251993932002', 'male', NULL, 1, '2020-08-06 09:47:30'),
(231, 'Nathan Embiale Chekol', '251993932001', 'male', NULL, 1, '2020-08-06 09:47:30'),
(232, 'Zelalem Abebe Tolessa', '251993931636', 'male', NULL, 1, '2020-08-06 09:47:30'),
(233, 'Worku Assefa Abate', '251993931137', 'male', NULL, 1, '2020-08-06 09:47:30'),
(234, 'Surafel Fikadu W/mariam', '251993930948', 'male', NULL, 1, '2020-08-06 09:47:30'),
(235, 'Lemlem G/hiwot Haile', '251993930864', 'male', NULL, 1, '2020-08-06 09:47:30'),
(236, 'Tadios Tekel Adnew', '251993930708', 'male', NULL, 1, '2020-08-06 09:47:30'),
(237, 'Abreham Alehegn Mihiretu', '251993930630', 'male', NULL, 1, '2020-08-06 09:47:30'),
(238, 'Eba Ayana Deresa', '251993930576', 'male', NULL, 1, '2020-08-06 09:47:30'),
(239, 'Sisay Girma Teka', '251993930571', 'male', NULL, 1, '2020-08-06 09:47:30'),
(240, 'Esrael Alemu Gebre', '251993930467', 'male', NULL, 1, '2020-08-06 09:47:30'),
(241, 'Mikiyas Birhanu Ketema', '251993930440', 'male', NULL, 1, '2020-08-06 09:47:30'),
(242, 'Samson Hailu W/gebreal', '251993929943', 'male', NULL, 1, '2020-08-06 09:47:30'),
(243, 'Sintayehu Eshetu Negewu', '251993929924', 'male', NULL, 1, '2020-08-06 09:47:30'),
(244, 'Eyob Habtamu Gizaw', '251993929860', 'male', NULL, 1, '2020-08-06 09:47:30'),
(245, 'Fasika Abere Wendifraw', '251993929809', 'male', NULL, 1, '2020-08-06 09:47:30'),
(246, 'Biniyam Abera Yemer', '251993929806', 'male', NULL, 1, '2020-08-06 09:47:31'),
(247, 'Hussien Mohammednur Beshir', '251993929779', 'male', NULL, 1, '2020-08-06 09:47:31'),
(248, 'Bekele Tadesse Tekalign', '251993929723', 'male', NULL, 1, '2020-08-06 09:47:31'),
(249, 'Alex Moges Kebede', '251993929715', 'male', NULL, 1, '2020-08-06 09:47:31'),
(250, 'Bereketeab Abebe Kebede', '251993929589', 'male', NULL, 1, '2020-08-06 09:47:31'),
(251, 'Tewachew Mengiste Chekol', '251993929581', 'male', NULL, 1, '2020-08-06 09:47:31'),
(252, 'Matebu Molla Nigate', '251993929523', 'male', NULL, 1, '2020-08-06 09:47:31'),
(253, 'Yonas Degu Bekele', '251993929491', 'male', NULL, 1, '2020-08-06 09:47:31'),
(254, 'Ephrem Tesfaye Mebratu', '251993929483', 'male', NULL, 1, '2020-08-06 09:47:31'),
(255, 'Ashenafi Abebe Ayele', '251993929451', 'male', NULL, 1, '2020-08-06 09:47:31'),
(256, 'Melaku Adugna Hundie', '251993929440', 'male', NULL, 1, '2020-08-06 09:47:31'),
(257, 'Natnael Afework Bezabeh', '251993929294', 'male', NULL, 1, '2020-08-06 09:47:31'),
(258, 'Adane Tarekegn Tekalegn', '251993929233', 'male', NULL, 1, '2020-08-06 09:47:31'),
(259, 'Abel Alazar Eyasu', '251993929102', 'male', NULL, 1, '2020-08-06 09:47:31'),
(260, 'Yohannes Admasu Molla', '251993928894', 'male', NULL, 1, '2020-08-06 09:47:31'),
(261, 'Mahder Arage Ahmed', '251993928881', 'male', NULL, 1, '2020-08-06 09:47:31'),
(262, 'H/Seilase G/Egzianher G/Meskel', '251993928844', 'male', NULL, 1, '2020-08-06 09:47:31'),
(263, 'Addis Getahun Mandefro', '251993928708', 'male', NULL, 1, '2020-08-06 09:47:32'),
(264, 'Abey Solomon Belte', '251993928535', 'male', NULL, 1, '2020-08-06 09:47:32'),
(265, 'Biruk Bafa Baza', '251993928482', 'male', NULL, 1, '2020-08-06 09:47:32'),
(266, 'Sisay Tadesse Ayele', '251993874721', 'male', NULL, 1, '2020-08-06 09:47:32'),
(267, 'Kendie Bezuneh Gedion', '251993824154', 'male', NULL, 1, '2020-08-06 09:47:32'),
(268, 'Kassahun Tgegn Kassa', '251993824040', 'male', NULL, 1, '2020-08-06 09:47:32'),
(269, 'Sisay T/michael G/kidan', '251993823999', 'male', NULL, 1, '2020-08-06 09:47:32'),
(270, 'Dagnachew  Shimelis Woldegeorgies', '251993823995', 'male', NULL, 1, '2020-08-06 09:47:32'),
(271, 'Girma Tikuye Muche', '251993823992', 'male', NULL, 1, '2020-08-06 09:47:32'),
(272, 'Nursefa Awel Adem', '251993823882', 'male', NULL, 1, '2020-08-06 09:47:32'),
(273, 'Zerihun Deriba Jote', '251993823812', 'male', NULL, 1, '2020-08-06 09:47:32'),
(274, 'Selamawit Getachew Tesfaye', '251993822760', 'male', NULL, 1, '2020-08-06 09:47:32'),
(275, 'Amanuel Wabe Tuke', '251993821074', 'male', NULL, 1, '2020-08-06 09:47:32'),
(276, 'Zerihun Feyssa Wolde', '251993821070', 'male', NULL, 1, '2020-08-06 09:47:32'),
(277, 'Henok Kenafrekirstos Admasu', '251993820902', 'male', NULL, 1, '2020-08-06 09:47:32'),
(278, 'Nigusayehu Kume Melka', '251993820889', 'male', NULL, 1, '2020-08-06 09:47:32'),
(279, 'Nebyou Teshome Negash', '251993820857', 'male', NULL, 1, '2020-08-06 09:47:32'),
(280, 'Kirubel Mesfin T/Tsadik', '251993820828', 'male', NULL, 1, '2020-08-06 09:47:32'),
(281, 'Henok Tesfaye G/Medhin', '251993820678', 'male', NULL, 1, '2020-08-06 09:47:32'),
(282, 'Hailu Fersha Nuri', '251993820456', 'male', NULL, 1, '2020-08-06 09:47:32'),
(283, 'Temesgen Assefa Bore', '251993820390', 'male', NULL, 1, '2020-08-06 09:47:32'),
(284, 'Bereket Tsgaye Melaku', '251993820320', 'male', NULL, 1, '2020-08-06 09:47:32'),
(285, 'Abdulaziz Mohammed Nuru', '251993820304', 'male', NULL, 1, '2020-08-06 09:47:32'),
(286, 'Yitbarek Bayeh Worku', '251993820221', 'male', NULL, 1, '2020-08-06 09:47:32'),
(287, 'Abdulaziz Mohammed Omer', '251993820184', 'male', NULL, 1, '2020-08-06 09:47:32'),
(288, 'Abel Teshome Desta', '251993820174', 'male', NULL, 1, '2020-08-06 09:47:32'),
(289, 'Andargachew Mulualem Zelek', '251993820171', 'male', NULL, 1, '2020-08-06 09:47:32'),
(290, 'Samson Tilahun H/mariam', '251993820162', 'male', NULL, 1, '2020-08-06 09:47:33'),
(291, 'Yohannes Eyasu Alula', '251993819009', 'male', NULL, 1, '2020-08-06 09:47:33'),
(292, 'Nebiyou Asrat woldetsadik', '251993819006', 'male', NULL, 1, '2020-08-06 09:47:33'),
(293, 'Daniel Getachew Lemma', '251993819001', 'male', NULL, 1, '2020-08-06 09:47:33'),
(294, 'Demessew Adeferes Belachew', '251993818844', 'male', NULL, 1, '2020-08-06 09:47:33'),
(295, 'Mesud Ahmed Shekur', '251993818787', 'male', NULL, 1, '2020-08-06 09:47:33'),
(296, 'Eyob Daniel Tefera', '251993818766', 'male', NULL, 1, '2020-08-06 09:47:33'),
(297, 'Bedelu G/Hiwot W/Kidan', '251993818707', 'male', NULL, 1, '2020-08-06 09:47:33'),
(298, 'Girma Tefera Mekuria', '251993818703', 'male', NULL, 1, '2020-08-06 09:47:33'),
(299, 'Endegena Sisay H/mariam', '251994616690', 'male', NULL, 1, '2020-08-06 09:47:33'),
(300, 'Sisay H/Gebriel Mogesse', '251994616572', 'male', NULL, 1, '2020-08-06 09:47:33'),
(301, 'Teshome Ayechew Workneh', '251994498372', 'male', NULL, 1, '2020-08-06 09:47:33'),
(302, 'Abdulkadir Delil Sherif', '251994498267', 'male', NULL, 1, '2020-08-06 09:47:33'),
(303, 'Abreham Mersha Gebre', '251994496878', 'male', NULL, 1, '2020-08-06 09:47:33'),
(304, 'Yoseph  Tadesse Habete', '251994455967', 'male', NULL, 1, '2020-08-06 09:47:33'),
(305, 'Bizuayehu Leta Biru', '251994451870', 'male', NULL, 1, '2020-08-06 09:47:33'),
(306, 'Michael Wubshet Mekuria', '251994447478', 'male', NULL, 1, '2020-08-06 09:47:33'),
(307, 'Tesfahunegn Girma Admassu', '251994447420', 'male', NULL, 1, '2020-08-06 09:47:33'),
(308, 'Abreham H/michael W/hawariyat', '251994447379', 'male', NULL, 1, '2020-08-06 09:47:33'),
(309, 'Habtamu Regassa Mergia', '251994447010', 'male', NULL, 1, '2020-08-06 09:47:33'),
(310, 'Temesgen Tsegaye Etana', '251994446906', 'male', NULL, 1, '2020-08-06 09:47:33'),
(311, 'Daniel Teklu Akalu', '251994443774', 'male', NULL, 1, '2020-08-06 09:47:33'),
(312, 'Mesay Tsegaye Zewde', '251994440928', 'male', NULL, 1, '2020-08-06 09:47:33'),
(313, 'Robel Godafay Redi', '251994440057', 'male', NULL, 1, '2020-08-06 09:47:33'),
(314, 'Berhanu Demissew Mekwanent', '251994439444', 'male', NULL, 1, '2020-08-06 09:47:33'),
(315, 'Endalekachew Behailu Esubalew', '251994436364', 'male', NULL, 1, '2020-08-06 09:47:33'),
(316, 'Tamene Gelaw Godana', '251994436323', 'male', NULL, 1, '2020-08-06 09:47:33'),
(317, 'Tewodros Alebachew Bayu', '251994434079', 'male', NULL, 1, '2020-08-06 09:47:33'),
(318, 'Masresha Wondwosen Aligaz', '251994434067', 'male', NULL, 1, '2020-08-06 09:47:33'),
(319, 'Taffes Gutu Geletu', '251994433929', 'male', NULL, 1, '2020-08-06 09:47:33'),
(320, 'Tewodros Yalew Molla', '251994433583', 'male', NULL, 1, '2020-08-06 09:47:34'),
(321, 'Fasil Birara Shumye', '251994433445', 'male', NULL, 1, '2020-08-06 09:47:34'),
(322, 'Eyob G/mariam Abshe', '251994433392', 'male', NULL, 1, '2020-08-06 09:47:34'),
(323, 'Andualem Aragaw Teshale', '251994430808', 'male', NULL, 1, '2020-08-06 09:47:34'),
(324, 'Hanan Teka Ahmed', '251994416179', 'male', NULL, 1, '2020-08-06 09:47:34'),
(325, 'Anteneh Abebe Suriw', '251994416006', 'male', NULL, 1, '2020-08-06 09:47:34'),
(326, 'Elizabeth Teshome Asefaw', '251994415855', 'male', NULL, 1, '2020-08-06 09:47:34'),
(327, 'Natnael Tesfaye Hareru', '251994415777', 'male', NULL, 1, '2020-08-06 09:47:34'),
(328, 'Habtamu Dessalegn Ambaw', '251994408288', 'male', NULL, 1, '2020-08-06 09:47:34'),
(329, 'Belhu Moges Yemane', '251994408062', 'male', NULL, 1, '2020-08-06 09:47:34'),
(330, 'Betsegaw Mosisa Bodana', '251994407697', 'male', NULL, 1, '2020-08-06 09:47:34'),
(331, 'Seid Abduljelil Abdulkadir', '251994407575', 'male', NULL, 1, '2020-08-06 09:47:34'),
(332, 'Biniyam Takele Tadeg', '251994402030', 'male', NULL, 1, '2020-08-06 09:47:34'),
(333, 'Yared Abreha Adal', '251994401772', 'male', NULL, 1, '2020-08-06 09:47:34'),
(334, 'Yishak Ero Sheno', '251994401313', 'male', NULL, 1, '2020-08-06 09:47:34'),
(335, 'Zewdie Belachew Meshesha', '251994400621', 'male', NULL, 1, '2020-08-06 09:47:34'),
(336, 'Matyos Beyene Mergiya', '251994399131', 'male', NULL, 1, '2020-08-06 09:47:34'),
(337, 'Addisu W/gebreal G/medhin', '251994396423', 'male', NULL, 1, '2020-08-06 09:47:34'),
(338, 'Addis Feleke Shibiru', '251994286935', 'male', NULL, 1, '2020-08-06 09:47:34'),
(339, 'Shambel Dessale Wudu', '251994114679', 'male', NULL, 1, '2020-08-06 09:47:34'),
(340, 'Biniyam Jirata Degu', '251994022430', 'male', NULL, 1, '2020-08-06 09:47:34'),
(341, 'Gutema Regassa Tura', '251993997892', 'male', NULL, 1, '2020-08-06 09:47:34'),
(342, 'Samuel Wubshet Bekele', '251993950615', 'male', NULL, 1, '2020-08-06 09:47:34'),
(343, 'Anteneh Nadew Shiferaw', '251993950395', 'male', NULL, 1, '2020-08-06 09:47:34'),
(344, 'Ermias Bekele Semu', '251993949188', 'male', NULL, 1, '2020-08-06 09:47:34'),
(345, 'Shiferaw Tesfyae Dingede', '251993948994', 'male', NULL, 1, '2020-08-06 09:47:34'),
(346, 'Yonathan Mulugeta Zeleke', '251993948909', 'male', NULL, 1, '2020-08-06 09:47:34'),
(347, 'Nehemeya Dereje Worku', '251993948814', 'male', NULL, 1, '2020-08-06 09:47:34'),
(348, 'Tewodros W/tsadik W/yohannes', '251993947017', 'male', NULL, 1, '2020-08-06 09:47:34'),
(349, 'Zewdneh Mosse Gela', '251993947004', 'male', NULL, 1, '2020-08-06 09:47:34'),
(350, 'Abel Abebe Enseti', '251993946994', 'male', NULL, 1, '2020-08-06 09:47:34'),
(351, 'Alemayehu Kassahun Getahun', '251993946949', 'male', NULL, 1, '2020-08-06 09:47:34'),
(352, 'Hailu G/Amlak Gasha', '251993946868', 'male', NULL, 1, '2020-08-06 09:47:34'),
(353, 'Abreham Yehualaw Merkebe', '251993946832', 'male', NULL, 1, '2020-08-06 09:47:34'),
(354, 'Kumneger Shimels Assefa', '251993946828', 'male', NULL, 1, '2020-08-06 09:47:34'),
(355, 'Mulugeta Bulti Bongase', '251993946782', 'male', NULL, 1, '2020-08-06 09:47:35'),
(356, 'Azemach Wubetu Worku', '251993946760', 'male', NULL, 1, '2020-08-06 09:47:35'),
(357, 'Minchil Derebew  Gebeyehu', '251993946757', 'male', NULL, 1, '2020-08-06 09:47:35'),
(358, 'Tewodros Habte G/Eyesus', '251993946729', 'male', NULL, 1, '2020-08-06 09:47:35'),
(359, 'Ermiyas K/yohanes Tamene', '251993946509', 'male', NULL, 1, '2020-08-06 09:47:35'),
(360, 'Ashenafi Alemu Gebre', '251993946479', 'male', NULL, 1, '2020-08-06 09:47:35'),
(361, 'Biniyam Welde Tasew', '251993944841', 'male', NULL, 1, '2020-08-06 09:47:35'),
(362, 'Michael Abate Gizaw', '251993944722', 'male', NULL, 1, '2020-08-06 09:47:35'),
(363, 'Aychew Kinde Siraye', '251993944453', 'male', NULL, 1, '2020-08-06 09:47:35'),
(364, 'Dawit Degefe Darota', '251993943514', 'male', NULL, 1, '2020-08-06 09:47:35'),
(365, 'Eyob Million Debebe', '251993943506', 'male', NULL, 1, '2020-08-06 09:47:35'),
(366, 'Leul Negash Tefera', '251993943461', 'male', NULL, 1, '2020-08-06 09:47:35'),
(367, 'Eskinder Lesanework Abira', '251993943446', 'male', NULL, 1, '2020-08-06 09:47:35'),
(368, 'Zeamanuel Derib Hassen', '251993943429', 'male', NULL, 1, '2020-08-06 09:47:35'),
(369, 'Daniel Fisseha Alemayehu', '251993943409', 'male', NULL, 1, '2020-08-06 09:47:35'),
(370, 'Hasen Kitata Hussein', '251993943393', 'male', NULL, 1, '2020-08-06 09:47:35'),
(371, 'Yilma Tadesse Mekonnen', '251993943135', 'male', NULL, 1, '2020-08-06 09:47:35'),
(372, 'Elizabeth Mekru Tesema', '251993943020', 'male', NULL, 1, '2020-08-06 09:47:35'),
(373, 'Biniyam Mekonnen kidane', '251993942970', 'male', NULL, 1, '2020-08-06 09:47:35'),
(374, 'Yohannes Areaya Mulugeta', '251993942917', 'male', NULL, 1, '2020-08-06 09:47:35'),
(375, 'Yedenekachew Desalegn Zewde', '251993942704', 'male', NULL, 1, '2020-08-06 09:47:35'),
(376, 'Melese Worku Abegaz', '251993942674', 'male', NULL, 1, '2020-08-06 09:47:35'),
(377, 'Tomas Shimeles Bedane', '251993942287', 'male', NULL, 1, '2020-08-06 09:47:35'),
(378, 'Yonas Ewnetie  Zelelew', '251993942178', 'male', NULL, 1, '2020-08-06 09:47:35'),
(379, 'Surafel Kidane Abebe', '251993942150', 'male', NULL, 1, '2020-08-06 09:47:35'),
(380, 'Ephrem Beyene Bayu', '251993942093', 'male', NULL, 1, '2020-08-06 09:47:35'),
(381, 'Getahun G/eyesus  W/stadike', '251993942038', 'male', NULL, 1, '2020-08-06 09:47:36'),
(382, 'Biruk Getachew Mekonnen', '251993941983', 'male', NULL, 1, '2020-08-06 09:47:36'),
(383, 'Amsalu Derbew Mengist', '251993941954', 'male', NULL, 1, '2020-08-06 09:47:36'),
(384, 'Natnael Teferi Yecheneku', '251993941894', 'male', NULL, 1, '2020-08-06 09:47:36'),
(385, 'Samuel Adelo Ore', '251993941873', 'male', NULL, 1, '2020-08-06 09:47:36'),
(386, 'Senay Nesru Kemal', '251993941861', 'male', NULL, 1, '2020-08-06 09:47:36'),
(387, 'Woldemicael Demese Beyesa', '251993941677', 'male', NULL, 1, '2020-08-06 09:47:36'),
(388, 'Hidri Hibur G/kidan', '251993941657', 'male', NULL, 1, '2020-08-06 09:47:36'),
(389, 'Bekele Bazezew Muche', '251993941649', 'male', NULL, 1, '2020-08-06 09:47:36'),
(390, 'Sintayehu Gelta Wakigera', '251993940659', 'male', NULL, 1, '2020-08-06 09:47:36'),
(391, 'Birhanu Menegsha Zinabu', '251993940357', 'male', NULL, 1, '2020-08-06 09:47:36'),
(392, 'Hirut Debay Beyene', '251993940350', 'male', NULL, 1, '2020-08-06 09:47:36'),
(393, 'Michael Mario Silato', '251993940342', 'male', NULL, 1, '2020-08-06 09:47:36'),
(394, 'Endalkachew Birhanu Kibret', '251993939445', 'male', NULL, 1, '2020-08-06 09:47:36'),
(395, 'Esayas Teka Erdaw', '251993939414', 'male', NULL, 1, '2020-08-06 09:47:36'),
(396, 'Kirubel Taye Getachew', '251993939345', 'male', NULL, 1, '2020-08-06 09:47:36'),
(397, 'Mahir Ishak Yousuf', '251993939317', 'male', NULL, 1, '2020-08-06 09:47:36'),
(398, 'Hailu Gebretsadik', '0926741790', 'male', NULL, 1, '2020-08-06 11:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL DEFAULT '7000',
  `receiver` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `td` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `receiver`, `text`, `td`) VALUES
(63, '7000', '0926741790', 'á‹¨á‹•áˆˆá‰µ+á‰°á‹•áˆˆá‰µ+áŒˆá‰¢á‹ŽáŠ•+áˆ›áˆ³á‹°áŒ+á‹­áˆáˆáŒ‹áˆ‰?+á‹¨áŠ á‹²áŠ«+á‰¤á‰°áˆ°á‰¥áŠ•+á‰ áˆ˜á‰€áˆ‹á‰€áˆ+á‹ˆá‹°á‰°áˆ»áˆˆ+áŠáŒˆ+áŠ á‰¥áˆ¨á‹áŠ•+á‹­áˆ«áˆ˜á‹±á¡á¡+áŠ á‹²áŠ«+á‰ áŠ¢á‰µá‹®áŒ²á‹«+á‹¨áˆ˜áŒ€áˆ˜áˆªá‹«á‹+áˆœá‰µáˆ­+á‰³áŠ­áˆ²+á‹µáˆ­áŒ…', '2020-08-06 11:36:31'),
(64, '7000', '0926741790', 'á‹¨á‹•áˆˆá‰µ+á‰°á‹•áˆˆá‰µ+áŒˆá‰¢á‹ŽáŠ•+áˆ›áˆ³á‹°áŒ+á‹­áˆáˆáŒ‹áˆ‰?+á‹¨áŠ á‹²áŠ«+á‰¤á‰°áˆ°á‰¥áŠ•+á‰ áˆ˜á‰€áˆ‹á‰€áˆ+á‹ˆá‹°á‰°áˆ»áˆˆ+áŠáŒˆ+áŠ á‰¥áˆ¨á‹áŠ•+á‹­áˆ«áˆ˜á‹±á¡á¡+áŠ á‹²áŠ«+á‰ áŠ¢á‰µá‹®áŒ²á‹«+á‹¨áˆ˜áŒ€áˆ˜áˆªá‹«á‹+áˆœá‰µáˆ­+á‰³áŠ­áˆ²+á‹µáˆ­áŒ…', '2020-08-06 11:37:56'),
(65, '7000', '0926741790', 'áˆƒá‹­áˆ‰', '2020-08-10 06:12:48'),
(66, '7000', '0926741790', 'cheking+sms+sending', '2020-08-10 09:04:46'),
(67, '7000', '0926741790', 'some+text', '2020-08-10 12:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `text`, `date_added`) VALUES
(9, 'á‹¨á‹•áˆˆá‰µ á‰°á‹•áˆˆá‰µ áŒˆá‰¢á‹ŽáŠ• áˆ›áˆ³á‹°áŒ á‹­áˆáˆáŒ‹áˆ‰? á‹¨áŠ á‹²áŠ« á‰¤á‰°áˆ°á‰¥áŠ• á‰ áˆ˜á‰€áˆ‹á‰€áˆ á‹ˆá‹°á‰°áˆ»áˆˆ áŠáŒˆ áŠ á‰¥áˆ¨á‹áŠ• á‹­áˆ«áˆ˜á‹±á¡á¡ áŠ á‹²áŠ« á‰ áŠ¢á‰µá‹®áŒ²á‹« á‹¨áˆ˜áŒ€áˆ˜áˆªá‹«á‹ áˆœá‰µáˆ­ á‰³áŠ­áˆ² á‹µáˆ­áŒ…á‰µ á‰ á‰°áˆ»áˆ»áˆˆ áˆ˜áŠ•áŒˆá‹µ á‹¨á‰°áˆˆá‹«á‹© áŠ áŒˆáˆáŒáˆŽá‰¶á‰½áŠ• á‹­á‹ž á‰¥á‰… á‰¥áˆáˆá¡á¡ áŠ¨áŠáˆƒáˆ´ áŒ€áˆáˆ® á‹¨áˆ˜áŠªáŠ–á‰½ áˆá‹áŒˆá‰£ á‹¨áˆáŠ•áŒ€áˆáˆ­ áˆ˜áˆ†áŠ‘áŠ• áŠ¥áŠ“áˆ³á‹á‰ƒáˆˆáŠ•á¤ á‹¨áˆáŠ•á‰†áˆ­áŒ á‹ áŠ®áˆšáˆ½áŠ• 10% áŠ¥áŠ“ á‹²á–á‹šá‰µ 600 á‰¥áˆ­ á‰¥á‰» áˆ²áˆ†áŠ•áˆˆáˆá‹áŒˆá‰£ áˆáŠ•áˆ áŠ á‹­áŠá‰µ áŠ­áá‹« á‹¨áˆ›áŠ•áŒ á‹­á‰… áˆ˜áˆ†áŠ‘áŠ• á‰ á‹°áˆµá‰³ áŠ¥áŠ“áˆ³á‹‰á‰ƒáˆˆáŠ•á¡á¡ á‹¶áŠ­áˆ˜áŠ•á‰¶á‰»á‰½áˆáŠ• á‰ á‰´áˆŒáŒáˆ«áˆ @adikaregister áˆŠáŠ•áŠ­ áˆ‹á‹­ áˆ˜áˆ‹áŠ­ á‹¨áˆá‰µá‰½áˆ‰ áˆ²áˆ†áŠ• áŠ¦áˆ­áŒ…áŠ“áˆ á‹¶áŠ­áˆ˜áŠ•á‰±áŠ• á‰ áˆšáˆ‹áŠ­áˆ‹á‰½áˆ á‰€áŠ•áŠ“ áˆ á‹“á‰µ áŠ«á‹›áŠ•á‰½áˆµ/á‰¥áˆ‰áˆ á‰³á‹ˆáˆ­ 4á‰°áŠ› áŽá‰… á‰ áˆšáŒˆáŠ˜á‹ á‰¢áˆ®áŠ á‰½áŠ• á‰ áŠ áŠ«áˆ á‰ áˆ˜áŒˆáŠ˜á‰µ áˆá‹áŒˆá‰£á‰½áˆáŠ• áŠ¥áŠ•á‹µá‰³áŒ áŠ“á‰…á‰ áˆµáŠ•áˆ á‰ áŠ áŠ­á‰¥áˆ®á‰µ áŠ¥áŠ•áŒ á‹­á‰ƒáˆˆáŠ•á¡á¡', '2020-08-06 11:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `code` varchar(4) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'app',
  `submited_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `phone`, `code`, `type`, `submited_date`) VALUES
(1, '0926741790', '1212', 'app', '2020-07-19 13:06:39'),
(2, '947939593', '8912', 'app', '2020-07-19 13:08:02'),
(3, '0926741790', '4916', 'app', '2020-08-05 11:58:26'),
(6, '0926741790', '2410', 'app', '2020-08-05 12:00:01'),
(7, '0911510004', '1808', 'app', '2020-08-05 12:00:38'),
(8, '0926741790', '2719', 'app', '2020-08-05 12:54:51'),
(9, '0912663176', '8090', 'app', '2020-08-05 13:35:47'),
(10, '0926741790', '7697', 'app', '2020-08-05 13:37:45'),
(11, '0926741790', '1851', 'app', '2020-08-05 13:39:05'),
(12, '0926741790', '8396', 'app', '2020-08-05 13:41:52'),
(13, '0926741790', '5609', 'app', '2020-08-05 13:43:58'),
(14, '0910561147', '8934', 'app', '2020-08-06 08:28:46'),
(15, '0926741790', '1038', 'app', '2020-08-06 08:30:52'),
(17, '0926741790', '1867', 'app', '2020-08-06 08:33:42'),
(18, '0926741790', '7013', 'app', '2020-08-10 08:22:25'),
(19, '0926741790', '9214', 'app', '2020-08-10 08:23:32'),
(20, '0926741790', '1760', 'app', '2020-08-10 09:13:58'),
(21, '0926741790', '2751', 'app', '2020-08-10 11:37:36'),
(22, '0926741790', '6035', 'app', '2020-08-10 13:13:07'),
(23, '0926741790', '1747', 'app', '2020-08-10 13:16:38'),
(24, '0926741790', '4306', 'app', '2020-08-11 08:42:05'),
(25, '0926741790', '5445', 'app', '2020-08-11 08:54:06'),
(26, '0926741790', '3134', 'app', '2020-08-11 09:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `prevelage`
--

CREATE TABLE `prevelage` (
  `id` int(11) NOT NULL,
  `access_right` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prevelage`
--

INSERT INTO `prevelage` (`id`, `access_right`) VALUES
(1, 'READ'),
(2, 'WRITE'),
(3, 'SEND'),
(4, 'BROADCAST'),
(5, 'APPROVE'),
(6, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `received_msg`
--

CREATE TABLE `received_msg` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `received_msg`
--

INSERT INTO `received_msg` (`id`, `number`, `message`, `received_date`) VALUES
(87, '+251945995883', '', '2020-08-05 17:32:38'),
(88, '+251992489517', '', '2020-08-05 18:11:23'),
(89, '0926741790', 'áˆƒá‹­áˆ‰', '2020-08-08 05:42:45'),
(90, '+251926741790', 'P', '2020-08-08 06:18:41'),
(91, '0926741790', 'áˆƒ', '2020-08-08 09:56:53'),
(92, '0926741790', 'áˆƒ', '2020-08-10 08:57:57'),
(93, '0926741790', '12', '2020-08-10 09:15:13'),
(94, '0926741790', '21', '2020-08-10 09:15:13'),
(95, '0926741790', '12', '2020-08-10 09:15:28'),
(96, '0926741790', '21', '2020-08-10 09:15:28'),
(97, '0926741790', '22', '2020-08-10 09:15:53'),
(98, '0926741790', '123', '2020-08-10 09:15:53'),
(99, '0926741790', '22', '2020-08-10 09:15:58'),
(100, '0926741790', '123', '2020-08-10 09:15:58'),
(101, '0926741790', 'áˆƒ', '2020-08-10 11:46:14'),
(102, '0926741790', 'áˆƒ', '2020-08-10 12:18:44'),
(103, '0926741790', 'áˆƒ', '2020-08-10 12:20:04'),
(104, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 12:37:12'),
(105, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 12:38:20'),
(106, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 12:47:31'),
(107, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 12:48:27'),
(108, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 12:51:44'),
(109, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 12:54:17'),
(110, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-10 13:00:22'),
(111, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-11 05:30:13'),
(112, '+251991733325', '\0J\0k\0l\0m€í	', '2020-08-11 05:34:17'),
(113, '0926741790', 'received msg', '2020-08-11 08:41:52'),
(114, '+251978164879', ' Ép8 ', '2020-08-11 14:26:31'),
(115, '+251975306006', '', '2020-08-11 16:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `smsadminuser`
--

CREATE TABLE `smsadminuser` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsadminuser`
--

INSERT INTO `smsadminuser` (`id`, `full_name`, `phone`, `email`, `password`) VALUES
(1, 'Hailu Geretsadik', '+251926741790', 'hailu@adika.com', 'XZSiNFyioyXPo'),
(2, 'Nitsuh Adika', '+251947939593', 'nitsuh@adika.com', 'XZSiNFyioyXPo'),
(3, 'Kidist Begashaw', '+251947939593', 'kidist@adika.com', 'XZSiNFyioyXPo');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `td` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `number`, `message`, `td`) VALUES
(1, 'hailu', 'hihi', '2020-07-25 12:05:04'),
(2, 'hailu', 'hihi', '2020-07-25 12:07:53'),
(3, 'hailu', 'hihi', '2020-07-25 12:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_right`
--
ALTER TABLE `access_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulk_msg`
--
ALTER TABLE `bulk_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prevelage`
--
ALTER TABLE `prevelage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `received_msg`
--
ALTER TABLE `received_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smsadminuser`
--
ALTER TABLE `smsadminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_right`
--
ALTER TABLE `access_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bulk_msg`
--
ALTER TABLE `bulk_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prevelage`
--
ALTER TABLE `prevelage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `received_msg`
--
ALTER TABLE `received_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `smsadminuser`
--
ALTER TABLE `smsadminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
