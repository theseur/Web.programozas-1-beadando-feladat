CREATE DATABASE `beadando-maltai`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `beadando-maltai`;

--
-- Adatbázis: `beadando-maltai`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `felhasznalok`
--

CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(11) NOT NULL auto_increment,
  `csaladi_nev` varchar(45) collate utf8_hungarian_ci NOT NULL,
  `uto_nev` varchar(45) collate utf8_hungarian_ci NOT NULL,
  `bejelentkezes` varchar(45) collate utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(45) collate utf8_hungarian_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=20 ;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
(1, 'Családi_1', 'Utónév_1', 'Login1', 'd4b90f2dfafc736205a98bf3ae6541431bc77d8e'),
(2, 'Családi_2', 'Utónév_2', 'Login2', '6cf8efacae19431476020c1e2ebd2d8acca8f5c0'),
(3, 'Családi_3', 'Utónév_3', 'Login3', 'df4d8ad070f0d1585e172a2150038df5cc6c891a'),
(4, 'Családi_4', 'Utónév_4', 'Login4', 'b020c308c155d6bbd7eb7d27bd30c0573acbba5b'),
(5, 'Családi_5', 'Utónév_5', 'Login5', '9ab1a4743b30b5e9c037e6a645f0cfee80fb41d4'),
(6, 'Családi_6', 'Utónév_6', 'Login6', '7ca01f28594b1a06239b1d96fc716477d198470b'),
(7, 'Családi_7', 'Utónév_7', 'Login7', '41ad7e5406d8f1af2deef2ade4753009976328f8'),
(8, 'Családi_8', 'Utónév_8', 'Login8', '3a340fe3599746234ef89591e372d4dd8b590053'),
(9, 'Családi_9', 'Utónév_9', 'Login9', 'c0298f7d314ecbc5651da5679a0a240833a88238'),
(10, 'Családi_10', 'Utónév_10', 'Login10', 'a477427c183664b57f977661ac3167b64823f366'),
(11, 'Családi_11', 'Utónév_11', 'Login11', '6c7e2151d33968a02198f7e2073b1d7b9ee65ed9'),
(12, 'Családi_12', 'Utónév_12', 'Login12', '0722b3651be10eeb8df39cced958b74a98d18ce3'),

-- --------------------------------------------------------

--
-- Tábla szerkezet: `uzenet`
--

CREATE TABLE IF NOT EXISTS `uzenet` (
  `id` int(11) NOT NULL auto_increment,
  `nev` varchar(45) character set utf8 collate utf8_hungarian_ci NOT NULL default 'Vendég',
  `email` varchar(100) character set utf8 collate utf8_hungarian_ci NOT NULL,
  `uzenet` text character set utf8 collate utf8_hungarian_ci NOT NULL,
  `datum` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- A tábla adatainak kiíratása `uzenet`
--

INSERT INTO `uzenet` (`id`, `nev`, `email`, `uzenet`, `datum`) VALUES
(1, 'Vendég', 'mano@mano.hu', 'afsddfsa', '2022-04-23 19:53:21'),
(2, 'Vendég', 'mano@mano.hu', 'afsddfsa', '2022-04-23 19:54:05'),
(3, 'Vendég', 'hekale@freemail.hu', 'fffff', '2022-04-23 19:54:23'),
(4, 'Vendég', 'tredet@gtr.hu', 'hhhh', '2022-04-23 20:11:31'),
(5, 'Családi_1 Utónév_1', 'jztr@freemail.hu', 'ffffff', '2022-04-23 20:14:27');
