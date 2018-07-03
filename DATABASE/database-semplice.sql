-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Lug 03, 2018 alle 07:53
-- Versione del server: 5.7.22-0ubuntu18.04.1
-- Versione PHP: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Struttura della tabella `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comefrom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrivale` datetime DEFAULT NULL,
  `departure` datetime DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deposit` double DEFAULT NULL,
  `created` datetime NOT NULL,
  `usertype` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `booking`
--

INSERT INTO `booking` (`id`, `event`, `name`, `phone`, `email`, `comefrom`, `arrivale`, `departure`, `note`, `deposit`, `created`, `usertype`, `admin`) VALUES
(1, 1, 'Ciccio Pasticcio', '0123456789', '', NULL, NULL, NULL, NULL, NULL, '2007-08-29 14:42:17', 1, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `place` int(11) NOT NULL,
  `topic` int(11) NOT NULL,
  `coursetype` int(11) NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`id`, `date`, `title`, `teacher`, `start`, `end`, `place`, `topic`, `coursetype`, `body`, `active`) VALUES
(1, '2015-04-11 09:30:00', 'Corso Drupal 8 Base - Creare e gestire un Sito Web', 1, '2018-09-08 09:30:00', '2018-09-09 20:00:00', 1, 1, 3, 'Corso pratico per realizzare e gestire il proprio sito Web con Drupal, in maniera professionale e in totale autonomia.\r\n\r\n16 ore di didattica teorico-pratica nell’arco di un week end\r\nper un gruppo massimo di 10 persone\r\n\r\nOrganizzare e gestire grandi quantità e varietà di contenuti in un sito web, in maniera semplice e veloce ed efficace.\r\n\r\nCos\'è un gestore di contenuti (CMS)? Cosa differenzia Drupal 7 rispetto Wordpress e Joomla? Posso realizzare blog, community, siti personali, aziendali, vetrina, ecommmerce, multi lingua con Drupal ? Qual\'è il livello di robustezza, sicurezza e flessibilità ?\r\n\r\nIl Corso\r\nA chi si rivolge\r\n\r\nIl corso è rivolto a tutti coloro che desiderano imparare a realizzare e gestire il proprio sito web. Drupal è un software Open Source gratuito a costo 0€. È installato direttamente su un server Web ed è quindi utilizzabile da qualsiasi computer Windows, Mac o Linux.\r\n\r\nContenuti\r\n\r\nCome utilizzare Drupal 7 per realizzare un semplice sito. Dal progetto fino alla pubblicazione su Internet. Alcune tecniche di ottimizzazione (Search Engine Optimization o SEO) per rendere maggiormente visibile il sito dai motori di ricerca.\r\n\r\nDue giorni per conoscere Drupal, Un CMS Open Source robusto, sicuro e flessibile utilizzato a livello mondiale\r\n\r\nProgramma dettagliato\r\nSABATO\r\n\r\n    Progettazione del proprio sito. Come organizzare i contenuti\r\n    Avvio di Drupal. Prime impostazioni: data, ora, nome del sito\r\n    Introduzione a Drupal\r\n    I concetti base: i blocchi e i menù\r\n    La sequenza di lavoro. Blocchi, menù, creazione dei contenuti\r\n    La differenza fra i vari tipi di contenuto: le pagine, e gli articoli\r\n    Impostazione delle regole\r\n    Dove trovare tutti i contenuti inseriti\r\n    La grafica: scelta di un tema e caricamento, impostazione dei blocchi e delle informazioni del contenuto\r\n    Caricare il logo e l\'icona personalizzata\r\n    Gli Utenti: creazione e definizione delle regole e dei livelli di accesso\r\n    La gestione dei testi con CKeditor e delle immagini con IMCE\r\n\r\nDOMENICA\r\n\r\n    Creare e gestire i link verso pagine interne, siti esterni ed email\r\n    Caricare un immagine nel testo e ridimensionarla\r\n    Come gestire l\'anteprima di un contenuto (teaser)\r\n    Il blog e commenti\r\n    I menù: il menù principale e la creazione di nuovi menù\r\n    L\'utilità degli alias per migliorare la visibilità del sito\r\n    Visualizzazione dei blocchi in base alle regole\r\n    Creazione e gestione degli stili per le immagini\r\n    Utilizzo degli stili per i vari contenuti\r\n    Come installare un nuovo modulo\r\n    Caricamento di un file all\'interno di un contenuto\r\n    Le statistiche: Attivare le statistiche con Google Analytics. Le visite più recenti. Pagine più viste. Visitatori più presenti. Analisi degli errori\r\n    Le ricerche nel sito: Utilizzo del modulo search\r\n\r\nVerrà rilasciato un attestato finale di partecipazione.\r\n\r\nPrerequisiti\r\nFamiliarità con l\'uso del computer e di Internet\r\n\r\nProgrammi utilizzati\r\nDrupal scaricabile gratuitamente dal sito www.drupal.org\r\n\r\nIl docente\r\nDott. Silvio Crispiatico', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `place`
--

INSERT INTO `place` (`id`, `address`, `city`, `country`, `name`, `active`) VALUES
(1, 'via Porcozzone, 17', 'Trecastelli', 'AN', 'La Città della Luce', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `active`) VALUES
(1, 'Silvio Crispiatico', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `gallery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `topic`
--

INSERT INTO `topic` (`id`, `name`, `active`, `gallery`, `weight`) VALUES
(1, 'Informatica Consapevole', 1, 'informatica.png', 25);

-- --------------------------------------------------------

--
-- Struttura della tabella `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `coursetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `type`
--

INSERT INTO `type` (`id`, `coursetype`, `active`) VALUES
(1, 'Conferenza - Workshop', 1),
(2, 'Consulti e Trattamenti', 1),
(3, 'Corso - Seminario', 1),
(4, 'Evento', 1),
(5, 'Ritiro', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `roles` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `recoverpasswordlink` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_active`, `roles`, `recoverpasswordlink`) VALUES
(1, 'test', 'test', 'crispiatico@gmail.com', 1, 'ROLE_ADMIN', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `usertype` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `usertype`
--

INSERT INTO `usertype` (`id`, `usertype`) VALUES
(1, 'Esterno'),
(2, 'Scuola Olistica'),
(3, 'Interno');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649337C9155` (`recoverpasswordlink`);

--
-- Indici per le tabelle `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14293;

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4531;

--
-- AUTO_INCREMENT per la tabella `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT per la tabella `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT per la tabella `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT per la tabella `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT per la tabella `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
