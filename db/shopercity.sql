-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2025 at 02:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopercity`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent` int(5) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` text DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL,
  `arrange` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`, `description`, `image`, `created_by`, `modified_by`, `arrange`) VALUES
(9, 'RESTAURANTS & CAFÉS', 0, 'RESTAURANTS & CAFÉS', 'Shopercity-1711867765.hot-chocolate-5828239_1280.jpg', '2024-03-31', '2025-03-31', NULL),
(11, 'ENTERTAINMENT & FUN PARKS', 0, 'ENTERTAINMENT & FUN PARKS', 'Shopercity-1711867852.fun-649463_1280.jpg', '2024-03-31', '2025-03-31', NULL),
(12, 'TRAVEL & TOURISM', 0, 'TRAVEL & TOURISM', 'Shopercity-1757525207.IMG-20250910-WA0019.jpg', '2024-03-31', '2025-09-10', NULL),
(14, 'FITNESS & LEARNING', 0, 'FITNESS & LEARNING', 'Shopercity-1757525226.IMG-20250910-WA0023.jpg', '2024-03-31', '2025-09-10', NULL),
(17, 'HOME DECOR & KITCHEN', 0, 'HOME DECOR & KITCHEN', 'Shopercity-1757525239.IMG-20250910-WA0018.jpg', '2024-03-31', '2025-09-10', NULL),
(21, 'MOBILE & LAPTOP', 0, 'MOBILE & LAPTOP', 'Shopercity-1757525376.IMG-20250910-WA0025.jpg', '2025-03-31', '2025-09-10', NULL),
(22, 'GROCERY & COSMETICS ', 0, 'GROCERY & COSMETICS', 'Shopercity-1757525390.IMG-20250910-WA0017.jpg', '2025-03-31', '2025-09-10', NULL),
(23, 'FASHION & LIFESTYLE', 0, 'FASHION & LIFESTYLE', 'Shopercity-1757525403.IMG-20250910-WA0021.jpg', '2025-03-31', '2025-09-10', NULL),
(24, 'BEAUTY & SPA', 0, 'BEAUTY & SPA', 'Shopercity-1757525598.IMG-20250910-WA0026.jpg', '2025-03-31', '2025-09-10', NULL),
(25, 'HOTELS & RESORTS', 0, 'HOTELS & RESORTS', 'Shopercity-1757525444.IMG-20250910-WA0020.jpg', '2025-03-31', '2025-09-10', NULL),
(26, 'OTHER SERVICES', 0, 'OTHER SERVICES', 'Shopercity-1757525457.IMG-20250910-WA0024.jpg', '2025-05-26', '2025-09-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `state_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country_id`, `state_id`, `name`, `created_by`, `modified_by`) VALUES
(1, 1, 1, 'Somnath, Veraval', '2024-03-31', '2024-07-24'),
(2, 1, 1, 'Veraval', '2024-07-24', '2024-07-24'),
(3, 1, 1, 'Junagadh', '2024-07-24', '2024-07-24'),
(4, 1, 1, 'Rajkot', '2024-07-24', NULL),
(5, 1, 1, 'Ahmedabad ', '2024-07-24', NULL),
(6, 1, 1, 'Bhavnagar ', '2024-07-24', NULL),
(7, 1, 1, 'Jamnagar', '2024-11-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `bissness_name` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `bissness_name`, `mobile`, `city`, `email`, `note`, `created_at`) VALUES
(1, 'gillies.inez@gmail.com', '', 'Adelanto', 'inez.gillies2@hotmail.com', 'Reach out to 100M contact forms now.\r\n\r\n++ Visit https://bit.ly/submitbulkforms now\r\n\r\nAs you read this, millions of others will be receiving your message.\r\n\r\nAdvanced Targeted outreach at scale at affordable rates.\r\n\r\n- Send your message to businesses in bulk  \r\n- Generate sales, leads, business deals  \r\n- Get your message delivered to millions for as low as $22  \r\n\r\nSkyrocket your business now!  \r\n++ Visit https://bit.ly/submitbulkforms now\r\n\r\n\r\n\r\n\r\n\r\nIf you choose to opt-out of future messages from me, kindly follow the following link: bit. ly/plsremovefrom\r\nPraca Rita De Cassia 1288, Salvador, CA, USA, 41213-450', '2025-04-03 16:45:18'),
(2, 'roberta.stoneman@gmail.com', '', 'Castelmola', 'roberta.stoneman@gmail.com', ' The advertising game has changed forever—stop paying for outdated directories!  \r\n\r\nYelp, Angi, & BBB charge **way too much** for what little they offer.  \r\nVetted is the **100% FREE FOREVER** alternative that builds trust, boosts sales, and improves your SEO **at no cost.**  \r\n\r\nGet listed for FREE now! https://vettedprobusiness.my/  \r\n\r\n  \r\n', '2025-04-16 05:39:43'),
(3, 'GeorgeRof', '', 'City', 'xiceruxuk02@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2025-05-02 01:49:59'),
(4, 'lawless.martina@hotmail.com', '', 'Selfoss', 'lawless.martina98@yahoo.com', 'Build Funnels In 60 Seconds. Auto-Write Emails. Sell Courses. Run Webinars.\r\n\r\n Tag Leads. Book Clients. Automate EVERYTHING. All Without Leaving One Tab.\r\n\r\nNo Frankenstein Hacks. No Plugin Failures. No API Glitches.\r\n\r\nTRY IT NOW! hamsterkombat.expert/OriginSuite', '2025-05-05 06:34:33'),
(5, 'DjohnRof', '', 'City', 'aferinohis056@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-05-08 03:54:07'),
(6, 'LeeRof', '', 'Leo', 'zekisuquc419@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2025-05-12 23:44:29'),
(7, 'CharlieRof', '', 'Mtskheta', 'yawiviseya67@gmail.com', 'Hi, ego volo scire vestri pretium.', '2025-05-13 12:40:25'),
(8, 'hgr4ls@gezaxe.com', '', 'Burnham', 'q2l4ds@t4bgbg.com', '\r\nYour website needs visitors. We’ll send them for free — offer closes soon. https://freewebsitetrafficforever.top\r\n', '2025-05-16 06:29:21'),
(9, 'rebell.chanda@hotmail.com', '', 'Dals Langed', 'rebell.chanda34@gmail.com', 'One Platform, Every Top AI Model—No Monthly Fees, No Hassle!\r\n\r\nAccess ChatGPT, Claude, Gemini Pro , Kling AI, LLaMA, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\n\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\n\r\nAutomatically switch between AI models based on task requirements.\r\n\r\nAnd much more ... https://hamsterkombat.expert/AIIntelliKit', '2025-05-16 19:59:37'),
(10, 'MichaelNok', '', 'Stirling', 'floodservice.bot@gmail.com', 'Hello Support! Hi, how are you?', '2025-05-20 15:42:04'),
(11, 'fouriejohan254@gmail.com', '', 'Kobenhavn V', 'fouriejohan254@gmail.com', 'Hey!\r\n\r\nAre you in need of custom B2B Data? \r\n\r\nAll the Engineering companies in New York, all the doctors in Australia, all the restaurants in South Africa..\r\n\r\nCome get a free sample from us! We just finished scraping the entire Google Maps with emails!\r\n\r\nRequest any sample here: https://dataleadsfinder.support\r\n\r\nOr\r\n\r\nHave a look at the data: https://marketingaaa.ventures\r\n\r\nRegards,\r\nData Lovers', '2025-05-22 19:11:02'),
(12, 'luster.tisha@msn.com', '', 'Sevran', 'tisha.luster@yahoo.com', 'This is an open job position to be a website chat assistant. We currently have lots of different businesses hiring for these positions in all countries right now. Website chat assistants are the people who answer the customer’s live chat support or sales questions on a business’s website. The work is done online, normally from home. Read the full details here to complete your application if you are interested.  \r\n\r\n-----> https://bit.ly/3GI4OZ0', '2025-05-29 00:41:27'),
(13, 'hollie.crews@outlook.com', '', 'Palmori', 'crews.hollie@gmail.com', 'Hi Shopercity,\r\n\r\nEver had an idea for a video game?\r\n\r\nSomething fun… addictive… maybe even as cool as Fortnite, GTA5, or Call of Duty?\r\n\r\nWhat if you could turn that idea into a real, ultra-realistic video game…\r\n\r\nAnd better yet — get paid every time someone plays it?\r\n\r\nSound too good to be true?\r\n\r\n������ Not anymore. Introducing: Ai GameBuilder\r\n\r\n=>>> https://ai-game-builder.blogspot.com\r\n\r\nThe world’s first AI-powered game creator that turns any idea into a blockbuster-quality game in just 2 clicks…\r\n\r\n✅ No coding required\r\n✅ No game design skills needed\r\n✅ No software to install\r\n✅ 100% beginner-friendly\r\n✅ Works in minutes\r\n\r\nBut here’s where it gets really exciting…\r\n\r\n������ Best part? You get paid every time someone downloads or plays your game.\r\n\r\nThat means once you launch your game with Ai GameBuilder, you can sit back and let the earnings roll in on autopilot.\r\n\r\nIt even publishes directly to major platforms like:\r\n\r\n������ PlayStation 5\r\n������ Xbox\r\n������ Epic Games\r\n������ Steam\r\n������ PC & Mobile\r\n\r\nSo your game is instantly available to millions of active players worldwide.\r\n\r\nWhy This Is a Game-Changer:\r\n\r\n������ Tap into the $347 Billion gaming industry\r\n������ Create console-style games in just minutes\r\n������ No monthly fees, no complicated tools, no team needed\r\n������ You own 100% of the profits\r\n\r\nWhether you’re a gamer, a digital entrepreneur, or just someone looking to create passive income…\r\n\r\n������ This is your golden ticket into the world of high-end game creation — without the learning curve.\r\n\r\nBut here’s the thing…\r\n\r\n������ Ai GameBuilder is a limited-time release.\r\nOnce the launch window closes, it may never open again.\r\n\r\n������ Ready to turn your idea into a game that pays you on autopilot?\r\n\r\n������ Click here to grab Ai GameBuilder now before it’s gone\r\n\r\n=>>> https://ai-game-builder.blogspot.com\r\n\r\nTo your viral success,\r\n[Hollie Crews]\r\n\r\nEmpowering Your Digital Marketing Success\r\n', '2025-06-02 16:03:52'),
(14, 'franziska.larocca@outlook.com', '', 'Mains Of Balhall', 'larocca.franziska41@googlemail.com', 'Want to improve your search rankings? 25 FREE citation submissions are offered to help get found online.\r\n\r\nGet your free boost here ----------> https://www.localcitation.online/freecitationoffer', '2025-06-05 20:55:32'),
(15, 'GeorgeRof', '', 'Leo', 'yawiviseya67@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-06-10 00:58:01'),
(16, 'SimonRof', '', 'Mtskheta', 'yawiviseya67@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2025-06-14 10:44:21'),
(17, 'SimonRof', '', 'Mtskheta', 'yawiviseya67@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2025-06-16 02:38:28'),
(18, 'LeeRof', '', 'Tro', 'dinanikolskaya99@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2025-06-20 23:58:34'),
(19, 'GeorgeRof', '', 'Tro', 'yawiviseya67@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-06-24 20:26:51'),
(20, 'sani.pansy@gmail.com', '', 'Johannessiedlung', 'sani.pansy@gmail.com', 'Tired of switching between ChatGPT, Claude, Gemini? \r\n\r\nGet  lifetime  access to  all the top AI models  — from a single, unified dashboard.\r\n\r\n    [✓ | » | ➤] No subscriptions, no monthly fees — pay once, use forever\r\n\r\n    [✓ | » | ➤] Auto-switch between models — let the system choose the best AI for each task\r\n\r\n    [✓ | » | ➤]  Built for creators, pros, and AI power users\r\n\r\n*[! | ] Limited lifetime access — only available for the first  few users\r\n\r\n >> Get started before it’s gone → http://www.novaai.expert/AI-IntelliKit\r\n\r\n', '2025-06-25 18:28:41'),
(21, 'lilian.tunstall@gmail.com', '', 'Lannaholm', 'lilian.tunstall@gmail.com', 'The Futuristic All-In-One AI Voice Platform Clones Any Voice, Translates It Into 20+ Global Languages, & Creates Human-Like Voices In 60 Seconds Flat - With Real Emotions, Voice Modulations, Global  Accents & Multilingual Fluency.\r\n\r\nPowered By Revolutionary Vocal DNA Technology, That Turns Any Text, Audio, & Video Into A Human-Like Voice - That Sounds So REAL, As If A Human Is Talking…\r\n\r\nAnd much more ... http://www.novaai.expert/ToneCraftAI', '2025-06-26 04:15:41'),
(22, 'ahmed.dunham@msn.com', '', 'Giacciano Con Baruchella', 'dunham.ahmed@gmail.com', '30-Second Trick Turns My Phone Into a $500/Day Cash Machine”\r\nJust Tap The \"Secret Button\" To Cash In From This $385 Billion WiFi Profit Loophole!\r\n\r\nAnd much more ... https://www.novaai.expert/PassiveIncome', '2025-06-29 22:58:47'),
(23, 'April777', '', '', 'ssnyder@mibanc.com', 'Time to take action! Get accurate business contacts for just $30 and watch your outreach expand. https://telegra.ph/Personalized-Contact-Data-Extraction-from-Google-Maps-10-03 (or telegram: @chamerion)', '2025-06-30 10:20:15'),
(24, 'ursula.enos@outlook.com', '', 'Lone', 'enos.ursula38@yahoo.com', 'Bleeding cash on tokens and APIs?\r\n\r\nIt ends here.\r\n\r\nIntroducing a disruptive AI hub that gives you instant access to over 350+ top-tier tools — with no API fees, no monthly charges, no hidden costs.\r\n\r\nUse Copy.ai from a single portal.\r\nNo dev skills. No setup. No waiting.\r\n\r\nCreate visuals instantly.\r\nEverything you need. Nothing you don’t.\r\n\r\nWhy pay when you can access it today for a one-time cost?\r\n\r\nGrab your access now  https://arfactory.site/5568467', '2025-07-03 01:20:20'),
(25, 'rickman.ona@gmail.com', '', 'Rennersdorf', 'ona.rickman@yahoo.com', 'The Futuristic All-In-One AI Voice Platform Clones Any Voice, Translates It Into 20+ Global Languages, & Creates Human-Like Voices In 60 Seconds Flat - With Real Emotions, Voice Modulations, Global  Accents & Multilingual Fluency.\r\n\r\nPowered By Revolutionary Vocal DNA Technology, That Turns Any Text, Audio, & Video Into A Human-Like Voice - That Sounds So REAL, As If A Human Is Talking…\r\n\r\nAnd much more ... http://www.novaai.expert/ToneCraftAI', '2025-07-06 11:39:57'),
(26, 'freeling.junior@gmail.com', '', 'Riegenroth', 'freeling.junior8@googlemail.com', 'Create High-Quality Ebooks up to 180 Pages in Minutes Without Writing a Single Word Yourself…\r\n\r\nThe Ebook Gold Rush Isn’t Over…\r\nIt’s Just Getting Smarter\r\n\r\nmore ... https://www.novaai.expert/eBookWriterAI', '2025-07-10 05:32:14'),
(27, 'muscio.ilene@googlemail.com', '', 'Saumur', 'ilene.muscio@yahoo.com', 'Turns Any Adult Face Into Adorable, Talking Baby Videos Using Face Swap, Voice Cloning & Lip-Sync To Create Viral Content For Reels, Gifts, Social Media & More From One Simple Dashboard!\r\n\r\nGame-Changer: Forget Costly Video Editors, Studios & Complicated Tools This AI Baby Podcast Platform Does It All Without Monthly Fees\r\n\r\n\r\nTurn Anything Into a Viral Baby Video in Under 60 Seconds — Without Editing or Being on Camera.\r\n\r\nmore ... https://www.novaai.expert/AIBabyPodcast', '2025-07-10 05:52:16'),
(28, 'kimpton.ralph@yahoo.com', '', 'Parshall', 'ralph.kimpton@gmail.com', '- With 1-Click Generate “Virtual Human” Videos \r\n- All Of Our Views Turns Into Huge Paydays ($500+)\r\n- Our Videos Dominate ANY Platform No Matter Which (TikTok, IG, FB, YT,...) \r\n... more https://www.novaai.expert/Humanify\r\n- Generate Videos In Over 50 Languages And Dozens Of Accents… \r\n- No Recording Or Editing Required Whatsoever  \r\n- ZERO Manual Work With Humanify. Never Write Scripts, And Never Record \r\n- We Get Over 100,000 Views Daily On Our Videos… \r\n- Works In Any Niche No Matter What\r\n- No Complicated Setup - Get Up And Running In 2 Minutes\r\n- Our Clients Generate Hundreds Of Dollars Working Less Than 2 Min\r\n- ZERO Upfront Cost - Get Up And Running Immediately\r\n- 30 Days Money-Back Guarantee\r\n... more https://www.novaai.expert/Humanify', '2025-07-11 11:15:30'),
(29, 'LeeRof', '', 'Leo', 'zekisuquc419@gmail.com', 'Hai, saya ingin tahu harga Anda.', '2025-07-12 17:45:45'),
(30, 'vinhgrowth@gmail.com', '', 'Heimdal', 'vinhgrowth@gmail.com', 'Hi. We run a YouTube growth service, which increases your number of subscribers both safety and practically.\r\n\r\n- We guarantee to gain you new 700+ subscribers per month\r\n- People subscribe because they are interested in your videos/channel, increasing video likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any bots.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately. If you are interested and would like to see some of our previous work, let me know and we can discuss further.\r\n\r\nKind Regards,\r\n\r\nTo Unsubscribe, reply with the word unsubscribe in the subject.', '2025-07-17 04:41:41'),
(31, 'steele.modesta@hotmail.com', '', 'Olivet', 'modesta.steele@gmail.com', 'DONE FOR YOU System that Gives You Everything you Need to drive high converting, FREE traffic\r\n\r\nSet & Forget System. Simply set this up one time and it brings in traffic automatically\r\n\r\n​No Tech Skills Needed, 100% newbie friendly\r\n\r\n​This method is something FRESH and NEW that You’ve Never Seen Before\r\n\r\nSee it in action: https://goldsolutions.pro/SmartTraffic\r\n', '2025-07-17 07:12:46'),
(32, 'niki.littler@msn.com', '', 'Kerkrade', 'littler.niki51@gmail.com', 'Hello,\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nInstantly Create Stunning Kids Videos, beautifully\r\nIllustrated colouring books, pages –\r\nall in hot niches superheroes, Fairytales & Fantasy Adventures,\r\nEducational Videos and so many more..\r\nWithout any writing, hiring freelancers or paying monthly tools!\r\n\r\nSee it in action: https://www.novaai.expert/KidstudioAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to unsubscribe:\r\nhttps://www.novaai.expert/unsubscribe', '2025-07-18 20:55:07'),
(33, 'littlefield.gus@hotmail.com', '', 'Rio De Janeiro', 'gus.littlefield@gmail.com', 'Magically Turn Any Keyword into a Talking Story Book That Leaves a Lasting Impact on Kids and Young Minds — Packed with Stunning Visuals, Engaging Videos, AI Voices, Clickable CTAs, QR Codes & more\r\n\r\nSee it in action:  https://www.novaai.expert/AIStoryBooks', '2025-07-19 08:43:50'),
(34, 'holly.royal@yahoo.com', '', 'Riemst', 'holly.royal@yahoo.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nBACKLINK IGNITOR creates powerful backlinks in seconds.\r\nNo coding, no manual work – just click and rank!\r\n\r\nMore backlinks. More traffic. More sales.\r\nAll thanks to BACKLINK IGNITOR!\r\n\r\nSee it in action: https://goldsolutions.pro/BacklinkIgnitor\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-20 13:30:10'),
(35, 'faye.quong@gmail.com', '', 'Porsgrunn', 'faye.quong@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nIf You Want FREE, Targeted Traffic \r\nFrom The TOP 3 Free Traffic Sources, \r\nThen Pay Close Attention...\r\nSee it in action: https://goldsolutions.pro/TrafficSniper\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-20 22:11:09'),
(36, 'leland.halligan@gmail.com', '', 'Schwarzhausern', 'leland.halligan@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWHAT IS THE TREND FLOW FORMULA?\r\nIf I could show you a proven way that you could generate 5k, 10k, or 20k+ a month…\r\n\r\n… The EXACT system that allowed me to retire at 45 in paradise …\r\n\r\n… In only 30 minutes a day before I finished my morning coffee…\r\n\r\n… Without products, selling, funnels, traffic, customers, or any of the BS or hassles of “Other” online business models…\r\n\r\n… Something that is RESCESSION AND PRESIDENT PROOF in the face of the coming economic collapse to build REAL wealth without worry, create security, comfort and peace of mind…\r\n\r\nAll with just ONE skill, that when mastered, means you’ll never have to worry about money again…\r\n\r\nWould you be interested?\r\n\r\nSee it in action: https://goldsolutions.pro/AITrendFlowFormula\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-21 18:02:36'),
(37, 'muscio.monroe58@gmail.com', '', 'Bridge Of Bogendreip', 'muscio.monroe@gmail.com', 'Create an automatic income stream that pays you on a regular basis like clockwork.\r\n\r\nThis is ideal for everyone. All you need is a device and access to the internet.\r\n\r\nWe have limited spaces for new members in your Country. Secure your spot today.\r\n\r\n------->>>>> https://bit.ly/3TLwsaN', '2025-07-22 14:35:00'),
(38, 'lilia.sherman@outlook.com', '', 'Yealmpton', 'sherman.lilia@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nBrand New AI App Instantly\r\nCreates Self-Updating News Brodcasting Sites\r\nin ANY Niche... IN Any Language In Just 60 Seconds\r\nAuto Updating Hot News | No Writing | No Filming | No Upfront Cost\r\nThen Drives Thousands of Clicks Instantly... Turning It into Our Cash Generating Machine…\r\nLet AI Create Profitable News Channel Across 1000s of Niches - Sports, Travel, Gaming,\r\nAffiliate Marketing, and More- Ready to Flip for an Instant $997 Payment! \r\n\r\nSee it in action: https://www.novaai.expert/BroadcasterAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-24 06:09:11'),
(39, 'lynwood.pease@outlook.com', '', 'Wendelsheim', 'lynwood.pease@outlook.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nHere’s the Breakthrough Changing How Affiliates Make Money!\r\nThe Revolutionary AI Tool & Complete Business System That Builds, Writes & Ranks Websites...\r\n\r\nYES - Writes the Content For You\r\nYES - Structures it for SEO rankings\r\nYES - Publishes it directly to your site\r\nYES - Brings in organic traffic on autopilot\r\nYES - Helps generate commissions\r\n\r\nSee it in action: https://www.novaai.expert/AIContentSniper\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-24 11:13:44'),
(40, 'doty.sybil9@gmail.com', '', 'Muhlholz', 'sybil.doty@hotmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n“60-Second Trick Turns My Phone Into\r\na $100/Day EMAIL Cash Machine”\r\n 5 MINUTES PER DAY - NO Experience Required | NO HARD WORK | INSTANT PAYMENTS \r\n \r\n The Best Part is,\r\nI Don’t Have To Create Anything…\r\nYup, I don’t have to create my own digital or physical products.\r\n\r\nSee it in action: https://goldsolutions.pro/EmailCashMachine\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-25 16:26:06'),
(41, 'brewington.cornell@hotmail.com', '', 'Salem', 'brewington.cornell@hotmail.com', 'Hello Marketers,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nIf you’ve been looking for a smart, scalable, and highly profitable way to enter the booming digital content space — without burning out or hiring a big team...\r\n\r\nLet me show you something that’s working incredibly well right now:\r\n\r\nFor years, we’ve been in the business of digital creation — launching courses, software, and helping entrepreneurs like you build profitable info-based businesses.\r\n\r\nBut there was one niche we kept seeing explode repeatedly:\r\n\r\nThe Prompts Profit Market\r\n\r\nCash In on the Exploding Prompts Profit Market — Turn Simple AI Text Into Daily Income!\r\n\r\n\r\nSee it in action: https://www.novaai.expert/PrompterIQ\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-26 02:02:35'),
(42, 'hager.sam@googlemail.com', '', 'Wroclaw', 'hager.sam78@msn.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhat if one tool could turn any image into a ready to sell mosaic style Color By Number page without design skills?\r\nWith Color By Number Profit Machine, get the tool, the training, and the templates to launch a beautiful mosaic style color by number page faster than ever.\r\n\r\nSee it in action: https://goldsolutions.pro/ColorByNumber\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-28 05:19:14'),
(43, 'prowse.tarah93@gmail.com', '', 'Schipluiden', 'prowse.tarah@outlook.com', 'Hi,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nTired of chasing clients manually? Let AI do the selling for you! Watch this video and discover how to automate your leads and skyrocket your sales today! \r\nhttps://www.youtube.com/watch?v=YfP2d-a4FLo\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://topcasworld.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Jordan Matthews', '2025-07-29 20:46:50'),
(44, 'mccreary.coy@outlook.com', '', 'Allerona Stazione', 'mccreary.coy@outlook.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWorld’s First AI App That Scans 10,000+ Viral Videos Daily, \r\nAnd Auto-Generates Viral-Ready Videos Then Auto-Post Them For You…\r\n\r\nAllowing You To DOMINATE TikTok On Complete Autopilot…\r\n\r\nSee it in action: https://www.novaai.expert/TokAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-30 20:20:28'),
(45, 'ashli.osby@gmail.com', '', 'Fuchshub', 'ashli.osby22@googlemail.com', 'How You Can RANK ON THE 1st PAGE Of Google\r\nAnd Get INSTANT TARGETED VISITORS\r\nwithout knowing SEO, without building backlinks or writing any content!\r\n\r\n----> http://bit.ly/44PkaEF', '2025-07-30 20:20:42'),
(46, 'Sean Hicks', '', 'Thousand Oaks', 'sean-hicks@dominate-keywords.com', 'I am not offering to you SEO, nor Pay Per Click Advertising.\r\nThis is something completely different.\r\nLet me show to you how it works and you will be pleasantly surprised by the results.\r\nJust send us keywords of your interest and your website banner instantly appears number one on Google and Bing search results without Pay Per Click charges.\r\n ', '2025-07-31 05:27:10'),
(47, 'hai.yuranigh@gmail.com', '', 'Schwarzenbach', 'hai.yuranigh@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nRevolutionary AI Tech Turns Any Viral\r\nInstagram Reel, YouTube Short, or TikTok Video Into Scroll-Stopping, Lead-Pulling Funnels\r\nAll In Under 2 Minutes\r\n\r\nSee it in action: https://goldsolutions.pro/Reels2Leads\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-07-31 23:02:21'),
(48, 'broughton.delilah@msn.com', '', 'Grimsey', 'delilah.broughton@gmail.com', 'We’re hiring Website Chat Assistants!\r\n\r\n✅ No experience needed\r\n\r\n✅ Work from home\r\n\r\n✅ $25–$35/hour\r\n\r\nApply now ������  https://bit.ly/3GI4OZ0', '2025-08-02 07:24:25'),
(49, 'judson.schardt@hotmail.com', '', 'Spjald', 'judson.schardt@hotmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nThe AI Rental Machine No One’s Talking About - 3 AI Tools You Can Use, Resell or Rent Out — No Inventory, No Coding, No Complex Setup Required\r\nFully built and ready to deploy — designed for digital creators, consultants, and service providers.\r\n\r\nGet 3 Pre-Built GPTs Ready to Launch and Deploy\r\nThese aren’t some toy chatbots. These are fully structured, pre-built AI micro tools that solve one real-world, painful problem each in under 60 seconds.\r\n\r\nLet’s break them down.\r\n\r\nSee it in action: https://www.novaai.expert/AIRentalMachine\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker\r\n', '2025-08-03 03:48:30'),
(50, 'GeorgeRof', '', 'Mtskheta', 'irinademenkova86@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2025-08-06 07:19:20'),
(51, 'info@chatgptpromptpacks.net', '', 'Drumoak', 'info@chatgptpromptpacks.net', 'Hi,\r\n\r\nWe’re reaching out from ChatGPTPromptPacks.net, where we help professionals and teams get better results with AI by using curated, ready-to-use prompt packs built for real work.\r\n\r\nAs a bonus, every first purchase comes with our Mastering ChatGPT course, normally $99, completely free.\r\n\r\nWant a few free examples to see how it could help in your workflow?\r\n\r\n\r\nIf you’d prefer not to receive any future messages, we fully respect your choice. You can opt out here: contactwebsites.net/chatgptpromptpacks\r\n\r\n\r\nThanks for your time,  \r\nThe ChatGPTPromptPacks.net Team', '2025-08-06 09:13:28'),
(52, 'mariana.jaeger@gmail.com', '', 'Dinxperlo', 'mariana.jaeger1@gmail.com', 'Hi,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nFirst To Market AI App That Creates Mind Blowing\r\n\r\nNo API Key Cost    |    No Designing Skills     |    No Monthly Fees Required\r\n\r\nOnly 3 EASY Clicks- Instantly Create & Sell Jaw-Dropping AI Images, AI Videos, Graphics, Visuals, Arts Etc To Hordes Of Hungry Audience for Top Dollar \r\n\r\nAll From One Single Dashboard, For A Low One-Time Fee\r\n\r\n\r\nLearn more: https://www.youtube.com/watch?v=8_3AOJj8lTg\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://topcasworld.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Jordan Matthews', '2025-08-07 21:41:00'),
(53, 'woodrow.lindsley@gmail.com', '', 'Meteren', 'woodrow.lindsley@gmail.com', '\r\nWe have a promotional offer for your website shopercity.com.\r\nIn 30 Seconds Or Less…\r\nSending Us A Surge Of 1,478 Clicks A Day 100% FREE\r\n(Sneak Any URL You Want, Even Affiliate Links, We Send Traffic To Affiliate Links Directly, And Make $285.78 A Day Doing That )\r\n(You Don’t Need A Website, Hosting, A Domain, Or Even To Write A Single word…)\r\nNo Technical Skills - No Experience - No Coding - No Setup - No Waiting\r\nWatch How We Generate 342 Clicks Per Hour In 27 Seconds Flat…\r\n\r\nSee it in action: https://www.novaai.expert/SneakAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker\r\n', '2025-08-08 14:18:57'),
(54, 'allen.stowe@gmail.com', '', 'Roveleto Landi', 'stowe.allen@hotmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n“30-Second Trick Turns My Phone Into\r\na $1,000/Day WiFI CASH BOT”\r\nJust Tap The \"Secret Button\" To Cash In From This $385 Billion A.I WiFi Cash Loophole!\r\n\r\nSee it in action: https://goldsolutions.pro/WiFiCashBot\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker\r\n', '2025-08-10 13:05:49'),
(55, 'Hi qmu5kpl\r\n >>> https://1q6t2q82ya.com/?5gr0fnb  #Lolllukazzzur333\r\n <<< 58664104', '', 'РњРѕСЃРєРІР°', 'fut3@kirzzioh.ru\r\n', '', '2025-08-10 19:20:54'),
(56, 'tracee.agee@googlemail.com', '', 'Carragrich', 'agee.tracee@gmail.com', 'Hi Shopercity Com,\r\n\r\nRight now, TikTok is printing millionaires left and right…\r\n\r\nBut 96% of creators, marketers & business owners are FAILING to cash in.\r\n\r\nWhy? Because they don’t know the secret to going viral & turning views into money.\r\n\r\n������ What if I told you that you don’t even need to create videos… or show your face… or run paid ads… and STILL make $100–$1,000 per day from TikTok?\r\n\r\n=>>> https://tokai-agent.blogspot.com\r\n\r\nSounds crazy, right?\r\n\r\nBut that’s EXACTLY what’s happening with TokAI – the world’s first TikTok AI Sales Assistant!\r\n������ This AI does 100% of the work for you while YOU collect the profits.\r\n������ Here’s What TokAI Will Do for You Instantly:\r\n✅ Creates & Posts VIRAL TikToks on Auto-Pilot – Even While You Sleep!\r\n✅ Hijacks Trending Videos & Adds YOUR Links for Instant Commissions\r\n✅ Drives Thousands of FREE Buyers to ANY Offer (No Followers Needed!)\r\n✅ Turns Any Video into a High-Converting TikTok Ad – In Seconds\r\n✅ Works in ANY Niche… ANY Country… with NO Experience Required!\r\n������ The Fastest, Easiest Way to Make $100–$500/Day… Hands-Free!\r\n\r\nBig brands and influencers are making millions from TikTok…\r\n\r\n=>>> https://tokai-agent.blogspot.com\r\n\r\nBut with TokAI, you don’t need:\r\n������ Followers\r\n������ Paid Ads\r\n������ Expensive Video Editors\r\n������ ANY TikTok Experience\r\n\r\nJust press a button, and AI drives unlimited traffic & sales FOR YOU!\r\n\r\n������ But here’s the brutal truth…\r\nIf you don’t grab this NOW, your competition will – and they will CRUSH YOU.\r\n⏳ This exclusive launch deal is about to expire… and the price will SKYROCKET to $97/month.\r\n\r\n������ LAUNCH BONUS: First 100 Buyers Get a FREE Commercial License!\r\n(That means you can sell AI-generated TikToks to businesses & charge them $500–$1,000 per video!)\r\n������ Click Here to Grab TokAI for the Lowest One-Time Price (Before It’s Gone!)\r\n=>>> https://tokai-agent.blogspot.com\r\n\r\n\r\nTo your viral success,\r\n[Tracee Agee]\r\n\r\nEmpowering Your Digital Marketing Success\r\n', '2025-08-11 11:50:26'),
(57, 'corey.branson59@yahoo.com', '', 'Travagliato', 'branson.corey@outlook.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWorld’s First Super Intelligent AI Chat That Unlocks ALL-ACCESS PASS To Every Premium AI Tool On Earth... With A Single Command\r\n\r\n(Imagine what you could create with ALL of them working together seamlessly.)\r\n\r\nUnlock the Entire Universe of AI Instantly.. Simply type or speak your request and watch as it intelligently routes your task to the PERFECT AI engine)\r\n\r\nSee it in action: https://www.novaai.expert/AISuperBOT\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-12 08:53:10'),
(58, 'Barrypak', '', 'Piran', 'no-reply.76@gmail.com', 'Hello, \r\n \r\n* FTP MP3 server and direct download of everything: https://www.0daymusic.org/premium.php \r\n* Resellers: PayPal, VISA, Bank Transfer, Bitcoin, Mastercard, Amazon Pay, WebMoney... \r\n* FTPtxt-16 software: https://www.0daymusic.org/FTPtxt for text search. \r\n* Server capacity: 440 TB MP3, FLAC, labels, music videos. \r\n* Supports: FTP, FTPS (File Transfer Protocol Secure), SFTP, and HTTP, HTTPS. \r\n* Daily updates: 30-100 GB, 300-2000 albums, web, promo, CDM, CDR, CDS, EP, LP, vinyl... \r\n* Unlimited download speed. \r\n* Files available anytime. \r\n* Over 17 years of archive. \r\n* Total server speed: 1 Gbps. \r\n* User-friendly. Most genres are sorted by day. \r\n \r\n0-DAY TEAM', '2025-08-12 10:23:20'),
(59, 'grant.rowland@gmail.com', '', 'Klein-Gelmen', 'grant.rowland@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nCREATE 100s of STUDIO QUALITY SCROLL-STOPPING SHORT VIDEO — From a Keyword, Auto-Prompt or Image\r\nHOOK VIEWERS IN SECONDS — With Visually Stunning, Cinematic Shorts\r\nBUILD A VIRAL BRAND — Gain Followers, Fame & Passive Income.\r\nBECOME A SHORTS CREATOR POWERHOUSE — No Camera, No Talking, No Editing Needed\r\n100% YouTube Monetization Friendly – Easily Customize Script, Voice or Branding to Avoid “AI-Only” Restrictions\r\nPOST & GO VIRAL ON YouTube, TikTok, Instagram, Facebook & More — In 1 Click\r\n\r\nSee it in action: https://www.novaai.expert/ShortBeastAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-12 11:13:16'),
(60, 'haire.charla@hotmail.com', '', 'Obermillstatt', 'haire.charla4@msn.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nAccess DeepSeek AI, ChatGPT, Google Veo3, Luma AI, Claude, Gemini Pro , Kling AI, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\nAutomatically switch between AI models based on task requirements.... AND MUCH MORE\r\n\r\nSee it in action: https://www.novaai.expert/AIModelSuite\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-12 12:10:58'),
(61, 'valorie.ciantar76@yahoo.com', '', 'Harstad', 'ciantar.valorie@yahoo.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n“30-Second Trick Turns My Phone Into\r\na $1,000/Day WiFI CASH BOT”\r\nJust Tap The \"Secret Button\" To Cash In From This $385 Billion A.I WiFi Cash Loophole!\r\n\r\nSee it in action: https://goldsolutions.pro/WiFiCashBot\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker\r\n', '2025-08-13 15:44:39'),
(62, 'vandiver.lieselotte@outlook.com', '', 'Los', 'vandiver.lieselotte@outlook.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n“The Underground Method That Creates Invisible Pages Google Can’t Resist… And Sends You Free Traffic on Demand”\r\nBrand New & Never Seen Before – Turn secret Ghost Pages into traffic‑pumping machines without anyone knowing what you’re doing.\r\nNo Website Needed – Ghost Pages become your site… instantly.\r\nZero Tech Skills Required – If you can click a mouse, you can do this.\r\nWorks Anywhere – Run this from anywhere in the world.\r\nPerfect for Beginners & Pros – Affiliate marketers, small biz owners, coaches… anyone who wants free buyer traffic fast.\r\nStay Totally Anonymous – Competitors can’t figure out your source, but they’ll see you everywhere.\r\nFast Setup – Be live and ready in under 30 minutes\r\n\r\nSee it in action: https://goldsolutions.pro/GhostPages\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-13 22:09:33'),
(63, 'shepard.dean@gmail.com', '', 'Unterhaag', 'dean.shepard@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n DAILY TRAFFIC TO ANY URL FROM 10 X HIGH PERFORMING TRAFFIC SOURCES\r\nNO EXPERIENCE, EMAIL LIST OR TECH SKILLS REQUIRED\r\n\r\nSee it in action: https://goldsolutions.pro/TrafficManiac\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-14 16:07:58'),
(64, 'arndell.chet59@hotmail.com', '', 'Araguari', 'chet.arndell70@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nStop giving away boring PDFs!\r\nTurn any coloring page into an interactive lead magnet your audience will actually love.\r\n\r\nSee it in action: https://goldsolutions.pro/ColorMyLeads\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-14 17:30:45'),
(65, 'maier.joanne@hotmail.com', '', 'Lea Marston', 'joanne.maier@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n\r\n No Product. No Skills. No Work. No Talking. No Selling…\r\n\r\nWorld’s First AI App That Lets You Launch A Fully-Automated Freelancing Business Without Doing Any Of The Freelancing Yourself & Without Hiring Anyone\r\nJust Pick Your Built-In AI Worker (Copywriter, Designer, Developer, Assistant, & More)...\r\nLet Them Deliver Jobs For You… While You Sit Back & Get Paid…\r\nNo Experience - No Skills - No Upfront Cost - No Waiting - Instant Results\r\n\r\nSee it in action: https://www.novaai.expert/TaskManAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-15 13:16:06'),
(66, 'puente.daniele27@gmail.com', '', 'Marmaverken', 'daniele.puente@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nBACKLINK IGNITOR creates powerful backlinks in seconds.\r\nNo coding, no manual work – just click and rank!\r\n\r\nMore backlinks. More traffic. More sales.\r\nAll thanks to BACKLINK IGNITOR!\r\n\r\nSee it in action: https://goldsolutions.pro/BacklinkIgnitor\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-17 08:48:11'),
(67, 'ouida.arndt@outlook.com', '', 'Beckley', 'arndt.ouida@hotmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nAI has made it easier than ever to build a reliable business, powered by an email list that grows itself…and be managed in under 30 minutes per day.\r\nThis isn’t theory. It’s not hype.\r\nIt’s the exact system we used to generate $94,113 in just 11 weeks ... while building it live, from scratch, in front of a small test group.\r\n\r\nSee it in action: https://www.novaai.expert/AIScaleStack\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-17 21:36:56'),
(68, 'veta.doak@yahoo.com', '', 'Bunker Hill', 'doak.veta@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\n 500 Side Hustles with ChatGPT: Split across 5 powerful sections (Writing, Marketing, Freelancing, Tools, Passive Income)\r\n 1000+ ChatGPT Prompts: Every idea comes with ready-to-use prompts to get results instantly\r\n Customizable Word Format: Change branding, colors, or text to match your business\r\n Expert Startup & Monetization Tips: We guide you with real examples and modern strategies\r\n Use It However You Want: Sell it, give it away, convert to video, publish to KDP – no limits\r\n Comes with Unrestricted PLR Rights: rebrand, repurpose, profit\r\n\r\nSee it in action: https://www.novaai.expert/500SideHustles\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-18 02:09:34'),
(69, 'darden.delia@gmail.com', '', 'Goshen', 'darden.delia@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nDo you want to build a profitable online business without spending countless hours and thousands of dollars creating content from scratch?\r\nAre you looking for a done-for-you product that you can sell as your own and keep ALL of the profits for yourself?\r\nAre you looking for high-quality content that you can take and turn into anything you want? A lead magnet, articles for your blog, social media content, etc?\r\nOr even sell private label rights to the entire thing as if you’d created it yourself?\r\nIf you answered “YES!” to any of these questions, the Essential Copywriting Toolkit PLR Package is the shortcut you’ve been looking for!\r\n\r\nSee it in action: https://goldsolutions.pro/EssentialCopywritingToolkit\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-18 11:15:02'),
(70, 'trent.jannette@msn.com', '', 'Bones', 'trent.jannette@msn.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWorld’s First AI App That Rank Any Link We Want #1 In Google For Any Keyword We Want... In 30 Seconds Or Less…\r\nSending Us A Surge Of 1,478 Clicks A Day 100% FREE\r\nNo Technical Skills - No Experience - No Coding - No Setup - No Waiting\r\nWatch How We Generate 342 Clicks Per Hour In 27 Seconds Flat…\r\n\r\nSee it in action: https://goldsolutions.pro/SneakAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-18 11:33:33'),
(71, 'shattuck.jerrod@yahoo.com', '', 'Paris', 'jerrod.shattuck@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nAI Search Ranker is the only custom software that can rank any webpage at the top of Google AI Mode.\r\n\r\nIn just one click, this software leapfrogs any website, landing page, blog, or business to the top of AI Mode results all with:\r\n\r\nNO coding...\r\nNO content changes...\r\nNO backlinks...\r\n\r\nSee it in action: https://goldsolutions.pro/AISearchRanker\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-18 14:40:22'),
(72, 'glen.saywell@hotmail.com', '', 'Bydgoszcz', 'saywell.glen@googlemail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy Pay Hundreds Of Dollars For Multiple AI Subscriptions When AI ModelSuite Gives You Everything In One Powerful Package? \r\nAI ModelSuite is an all-in-one AI powerhouse that replaces chatbots, image generators, content creations, video generators, and more – all for a one-time payment of just $17!\r\nTotal Cost Without AI ModelSuite? $2500+ per Year! \r\nWhy spend $200+ per month when you can get it all for just $17 One Time?\r\nStop Overpaying – Get AI ModelSuite for Just $17 (One-Time!) \r\n\r\nNo Monthly Fees | Unlimited AI Power | One Toolkit for Everything \r\n\r\nSee it in action: https://goldsolutions.pro/AIModelSuite\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-19 13:53:16'),
(73, 'proby.vickie@yahoo.com', '', 'Albino', 'vickie.proby@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nForget spending weeks writing — Ebook Writer AI lets you create a polished eBook in just 10–15 minutes. Simply enter your topic, and the tool will generate chapters, format the text, add images, and even include affiliate links.\r\n\r\nWhy choose Ebook Writer AI?\r\n\r\nFast: a complete eBook in minutes.\r\n\r\nProfessional design, no skills required.\r\n\r\nBuilt-in monetization.\r\n\r\nPerfect for bloggers, coaches, marketers, and anyone who wants to sell knowledge through eBooks.\r\n\r\nTry it today > https://www.novaai.expert/eBookWriterAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-21 11:09:35');
INSERT INTO `contact_us` (`id`, `bissness_name`, `mobile`, `city`, `email`, `note`, `created_at`) VALUES
(74, 'ian.leist@googlemail.com', '', 'Mogi-Guacu', 'leist.ian@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhat if you could use the best AI models in the world without limits or extra costs?\r\nNow you can. With our brand-new AI-powered app, you’ll have ChatGPT, Gemini Pro, Stable Diffusion, Cohere AI, Leonardo AI Pro, and more — all under one roof.\r\n\r\nNo monthly subscriptions\r\n\r\nNo API key expenses\r\n\r\nNo experience required\r\n\r\nJust one dashboard, one payment, and endless possibilities.\r\n\r\nSee it in action: https://www.novaai.expert/AIModelSuite\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-21 20:33:48'),
(75, 'misty.marcello@googlemail.com', '', 'Metz', 'misty.marcello35@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nhese Ready-to-Use Prompts Turn Free AI Tools Like ChatGPT into a Personal Deal Hunter That Finds You Cheaper Alternatives, Travel Hacks, Cashback Opportunities, and Budget Wins in Seconds -\r\nAll Without Changing a Thing About Your Routine\r\nNo Coupons | No Extensions | No Guesswork | 100% Real Savings | 100% Resell Rights\r\n\r\nSee it in action: https://goldsolutions.pro/money-saving-prompts\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-22 17:14:41'),
(76, 'kirk.anna75@gmail.com', '', 'Lower Moor', 'kirk.anna89@googlemail.com', 'We have a promotional offer for your website shopercity.com.\r\n\r\nA 100% Done-For-You Faceless YouTube Channel Build\r\nThe goal is to reach 100,000 subscribers and achieve a fully monetized channel that generates monthly income, paid by Google on the 21st. \r\nOver a 12-month period, 3 videos per week are created and uploaded with professional voiceovers and permission-based footage. \r\nNo camera or editing is required — every step is handled completely from start to finish.\r\n\r\nSee it in action: https://goldsolutions.pro/100KSubsYouTube\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-22 21:34:49'),
(77, 'savannah.london@gmail.com', '', 'Aurillac', 'london.savannah@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nSell Without Limits. Rebrand Like a Pro. Cash In on Every Sale!\r\nLaunch Your Own Training Video Empire\r\nThe Ultimate Learning Library with Unrestricted PLR\r\nOver 1,600 premium training videos\r\nin red-hot niches ready for instant monetization!\r\n\r\nSee it in action: https://goldsolutions.pro/TheUltimateLearningLibrary\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-23 11:55:24'),
(78, 'diego.pemberton@gmail.com', '', 'Frederiksberg C', 'pemberton.diego@hotmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nImagine having an assistant who works around the clock, handling all the routine tasks, attracting clients, and generating profit even while you sleep. Grab AI SuperBot isn’t just another tool — it’s a complete solution that helps you work faster, smarter, and earn more without extra effort.\r\n\r\nWhy does this matter to you? Because time is your most valuable resource. With this bot, you’ll free up hours usually wasted on repetitive tasks and invest them into growing your business or personal projects. It’s your chance to reach a new level of efficiency and income.\r\n\r\nSee it in action: https://www.novaai.expert/AISuperBOT\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-25 14:31:36'),
(79, 'vanover.tangela59@googlemail.com', '', 'Hobkirk', 'vanover.tangela@outlook.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy do you need this? Because UGC videos sell better than any banner or text ad — and brands pay $300–$500 per clip. With UGCfluencer, you can create these viral videos in just 5 seconds — no studio, no skills, no expenses. Simply type your text, and AI generates ultra-realistic influencer-style content that converts. Whether you want to monetize traffic or start a new income stream, this is your fast ticket into the UGC revolution.\r\n\r\nSee it in action: https://www.novaai.expert/UGCfluencer\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker\r\n', '2025-08-26 08:05:35'),
(80, 'barbour.sherlene@gmail.com', '', 'Horst', 'barbour.sherlene@gmail.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nYou’ve invested in your website — now it’s time to make it work at full power. The new AI Scale Stack helps you turn visitors into paying customers: it shows where you’re losing leads and gives you the exact steps to keep their attention, boost conversions, and grow sales. Imagine your site not just as a showcase, but as a real business engine. Discover how it works — and start earning more today.\r\n\r\nSee it in action: https://www.novaai.expert/AIScaleStack\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-26 13:23:55'),
(81, 'horvath.sabrina@yahoo.com', '', 'Ponte Barizzo', 'sabrina.horvath@outlook.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy do you need this? To access the best AI tools—text, images, voice, code, video—without juggling dozens of subscriptions or paying monthly. Multiverse AI brings everything into one cloud dashboard, giving lifetime access to all current and future AI models with zero recurring fees. You get freedom, speed, and savings—all under your control. Discover how easy it is to create and scale content—Multiverse AI makes it possible.\r\n\r\nSee it in action: https://goldsolutions.pro/MultiverseAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-26 15:27:42'),
(82, 'aja.isenberg@hotmail.com', '', 'Zwingen', 'isenberg.aja@msn.com', 'Hello,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWorld’s First AI App That Instantly Builds Your Own “Udemy-Like” eLearning Platform - Preloaded With 100+ Ready-To-Sell, Red-Hot Online Courses\r\nIn One Single Dashboard, For A Low One-Time Fee!\r\nOnly 3 EASY Clicks - Create & Sell Stunning Online Courses on Your Own Udemy™-Style Platform to Hungry Buyers for Top Dollar.\r\n\r\nNo Reserach | No Course Creation | No Tech  Skills | No Monthly Fees Required\r\n\r\nSee it in action: https://www.novaai.expert/CourseBeastAI\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321\r\nLooking out for you, Ethan Parker', '2025-08-26 20:35:09'),
(83, 'marquez.martha@gmail.com', '', 'Stillwater', 'marquez.martha@gmail.com', 'Hi,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy should you care? Because Book In A Day lets you turn your ideas into a polished, professional book in just hours—not months. No writing skills, no expensive editors, no formatting headaches. Simply follow the AI-driven, step-by-step system and you’re done! Publish your book, build authority, and start earning—effortlessly, swiftly, and stress-free.\r\n\r\nSee it in action: http://smartexperts.pro/BookInADay\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=shopercity.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-28 12:11:44'),
(84, 'gallo.teodoro@gmail.com', '', 'Zambrow', 'gallo.teodoro69@googlemail.com', 'Hi,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy this matters to you? Because you’re done fiddling with websites, SEO, or endless content. With Auto Lead Machine, you plug in your autoresponder, craft a simple ad — and in 10–15 minutes, you start seeing real, targeted leads pour in automatically. Just write a quick title, choose a photo, hit “Go,” and watch leads deliver directly to your email list like clockwork. \r\n\r\nIt’s like having a lead-dispensing machine — precise, eager, and hassle-free. No website, no social posting, no ad headaches—just leads. All for less than a cup of coffee, with a refund guarantee if it doesn’t deliver.\r\n\r\nSee it in action: https://smartexperts.pro/AutoLeadMachine\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=shopercity.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-29 14:19:30'),
(85, 'delatte.ashley@outlook.com', '', 'Palmas', 'ashley.delatte@gmail.com', 'Hi,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy you need this: to have every campaign, affiliate offer, or project start delivering traffic and income today — without spending a dime on ads or tech headaches. Ghost Pages turns you into a stealth engine that Google absolutely trusts: you build invisible pages using a secret Google asset, and they quietly start delivering targeted visitors — while your competition is nowhere the wiser.\r\n\r\nIt’s easy, it’s fast, it’s genius: no domains, hosting, social media, or technical skills required — if you can click and copy, you can do this. Plus, it really works and scales: launch one Ghost Page and BAM — traffic flows wherever you want: affiliate links, e‑com, leads — you choose. Ready to start in minutes? Discover how and get results that might blow your mind.\r\n\r\nSee it in action: http://smartexperts.pro/GhostPages\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=shopercity.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-29 15:10:35'),
(86, 'palacios.lashawnda@yahoo.com', '', 'Noville', 'lashawnda.palacios46@outlook.com', 'Hi,\r\n\r\nWe have a promotional offer for your website shopercity.com.\r\n\r\nWhy do you need this? Picture waking up anywhere — Bali, a café in Paris, or your couch — checking your phone and seeing a steady stream of buyer-ready clicks rolling in… without ads, outreach, or a website. That’s exactly what Rapid Traffic Flow delivers: a super-simple, plug-and-play system that gets traffic and sales flowing in minutes.\r\n\r\nWith Rapid Traffic Flow, you get a clear 3-step blueprint, AI‑powered boosters to automate the process, a “Hidden Hub” you can tap at will, and a solid refund guarantee if your traffic spike doesn’t happen — all for less than the cost of your next takeout order. Ready to stop chasing traffic and start capturing it? Dive in now and dominate the affiliate game today!\r\n\r\nSee it in action: https://smartexperts.pro/RapidTrafficFlow\r\n\r\nYou are receiving this message because we believe our offer may be relevant to you. \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsub?domain=shopercity.com \r\nAddress: Address: 1464 Lewis Street Roselle, IL 60177\r\nLooking out for you, Michael Turner.', '2025-08-30 10:24:48'),
(87, 'Hi! I have a monetary bonus for you. Add me on Telegram @moneymake29_bot to get it!', '', '', 'badoramataur@gmail.com', 'Dear User, Your cash bonus is ready for pickup. Add me on Telegram @moneymake29_bot to initiate the transfer.', '2025-08-31 16:21:26'),
(88, 'warren.mcevoy@gmail.com', '', 'Mantscha', 'warren.mcevoy@gmail.com', 'Greetings,\r\n\r\nWe’ve put together a customized update designed for shopercity.com.\r\n\r\nWhy it can help: If you’re a site owner or focused on scaling traffic, and you’d like fresh clicks — with no site setup, no articles needed, and no complicated steps — then **Social Safe List** is a quick path.  \r\n\r\nAccess members-only communities filled with real users. Add your reference, post, and watch activity begin. Quick onboarding, starter resources, battle-tested ideas — done deal.\r\n\r\nInterested how you can pull visits from actual users in under 15 minutes?\r\n\r\nPreview here: https://smartexperts.pro/SocialSafeList?shopercity.com\r\n\r\nYou are receiving this update because we thought it might be relevant.  \r\nIf you do not wish to get further letters, please click here to remove:  \r\nhttps://smartexperts.pro/unsub?domain=shopercity.com  \r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you,  \r\nMichael Turner.\r\n', '2025-09-01 12:02:47'),
(89, 'hermann.hannah@msn.com', '', 'Kil', 'hermann.hannah27@gmail.com', 'Greetings,\r\n\r\nWe have an exclusive note for your website shopercity.com.\r\n\r\nWhy could this matter to you? Because you no longer have to pay for campaigns or struggle with SEO — Traffic Tsunami (FTT) does the heavy lifting.  \r\n\r\nThis smart platform can position your content inside content generated by Grok — and those placements stay active, sending steady visitors.  \r\n\r\nFor digital entrepreneurs ready to move first, this is your chance. Find out how with just a few steps you can gain visibility in the AI landscape — before most notice.\r\n\r\nHave a look here: https://smartexperts.pro/TrafficTsunami?shopercity.com\r\n\r\nYou are receiving this letter because we consider our content may be relevant to you.  \r\nIf you no longer want to receive future messages from us, please click here to leave:  \r\nhttps://smartexperts.pro/unsub?domain=shopercity.com\r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nSincerely,  \r\nMichael Turner\r\n', '2025-09-02 12:26:40'),
(90, 'held.jovita@googlemail.com', '', 'Red Deer', 'jovita.held20@gmail.com', 'Hello,\r\n\r\nHere’s something new designed for your business shopercity.com.\r\n\r\nWhy this matters to you? You no longer need to bother messing around with sites, search rankings, or daily text creation.  \r\n\r\nWith Auto Lead Machine, you just sync your autoresponder, create a short ad — and in 10–15 minutes, you begin to get authentic contacts arrive hands-free.  \r\n\r\nJust add a short headline, pick a photo, hit “Go”, and see contacts land straight to your inbox consistently.  \r\n\r\nIt’s like owning a contact machine — accurate, eager, and hassle-free. No website, no social posting, no complicated campaigns — just prospects. All for less than a cup of coffee, with a simple return option if it fails to deliver.  \r\n\r\nCheck the system: https://smartexperts.pro/AutoLeadMachinee?shopercity.com  \r\n\r\nYou are receiving this message because we believe this may be relevant to you.  \r\nIf you do not wish to receive any more messages from us, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=shopercity.com  \r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you, Michael Turner.  \r\n', '2025-09-02 14:23:59'),
(91, 'sulman.lesley@yahoo.com', '', 'Oss', 'lesley.sulman@msn.com', 'Greetings,\r\n\r\nWe have a resource for your website shopercity.com.\r\nhttps://topcasworld.pro/MultiverseAI?shopercity.com\r\n\r\nWhy do you need this?  \r\nTo use the best AI tools—text, images, voice, programming, video—without dealing with recurring plans.  \r\nMultiverse AI brings all tools into one place, giving permanent entry to all present and next-generation AI models with no extra costs.  \r\nYou get freedom, speed, and savings—all under your management.  \r\nFind out how easy it is to build and expand content—Multiverse AI makes it possible.\r\n\r\nCheck the details: https://topcasworld.pro/MultiverseAI?shopercity.com\r\n\r\nYou are receiving this message because we assume our option may be interesting to you.  \r\nIf you do not wish to see future notes, please click here to UNSUBSCRIBE:  \r\nhttps://topcasworld.pro/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nKind regards,  \r\nEthan Parker\r\n', '2025-09-05 11:19:53'),
(92, 'wannemaker.jovita@outlook.com', '', 'Schaufling', 'jovita.wannemaker22@hotmail.com', 'Hello, \r\n\r\nWe’ve put together a solution that may suit shopercity.com shopercity.com.  https://goldsolutions.pro/MMM?shopercity.com\r\n \r\nThe reason it could help: think of a system that adds stability without extra effort — and without building your own product.  \r\n\r\nWith Monthly Money Masterclass, you select the path that matches your preference: give partners the option to self-serve with QR codes, or deliver it as a complete service.  \r\n\r\nYou’ll receive recurring $5–$20 from each client, or $200+ each month with just 5–10 clients — clear and quick.\r\n \r\nBenefit from the roadmap. You obtain a clear guide designed by people who tested it live. This is not theory — a plan that simply runs. \r\n \r\nWant to explore further?  \r\n \r\nView the process: https://goldsolutions.pro/MMM?shopercity.com \r\n \r\nWe’re sharing this because it may connect to your work.  \r\nIf you’d prefer not to get more from us, press here to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\n \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nKind regards,  \r\nEthan Parker\r\n', '2025-09-06 01:08:24'),
(93, 'charlie.tengan@googlemail.com', '', 'Knob Noster', 'charlie.tengan@googlemail.com', 'Hello,\r\n\r\nHere’s a platform tailored for your website shopercity.com.\r\n\r\nWhy should you care? You avoid wasting optimization grind and ads budget — all in a single step.  \r\n\r\nAPEX AI, powered by ChatGPT-5, immediately produces and places your content in prime search spots — no domains, no learning, without budget drain.  \r\n\r\nJust type your topic, press start, and see specific activity roll in within hours.  \r\n\r\nIt’s your shortcut to dominating the search results while others are still caught in endless tasks.  \r\n\r\nDiscover it here: https://smartexperts.pro/ApexAI?shopercity.com\r\n\r\nYou are receiving this message because this may help your business.  \r\nIf you do not wish to receive additional information, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=shopercity.com  \r\n\r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you, Mike Turner.', '2025-09-06 12:11:49'),
(94, 'jay.cowles@gmail.com', '', 'Berkau', 'jay.cowles@gmail.com', 'Greetings,\r\n\r\nWe have a special proposal for your website shopercity.com.\r\n\r\nWhy you need this: to have every initiative, partner program, or venture start delivering visitors and revenue today — without investing a dime on ads or tech headaches. Ghost Pages turns you into a invisible powerhouse that Google absolutely relies on: you build quiet pages using a unique Google asset, and they quietly start driving engaged people — while your competition is completely unaware.\r\n\r\nIt’s simple, it’s fast, it’s genius: no domains, hosting, social media, or technical skills required — if you can copy and paste, you can do this. Plus, it really delivers and expands: launch one Ghost Page and BAM — visitors comes wherever you want: partner programs, e-com, leads — you choose. Get going right away? Discover how and get results that might blow your mind.\r\n\r\nCheck it live: https://smartexperts.pro/GhostPages?shopercity.com\r\n\r\nYou are receiving this update because we believe our solution may be valuable to you.  \r\nIf you do not wish to receive further communications from us, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=shopercity.com  \r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\nLooking out for you, Michael Turner.\r\n', '2025-09-08 13:27:40'),
(95, 'ines.vandorn@gmail.com', '', 'Portland', 'ines.vandorn@gmail.com', 'Hey,\r\n\r\nWe have prepared some details for your website shopercity.com : https://goldsolutions.pro/TitanEdge?shopercity.com\r\n\r\nDone with unnecessary steps, expensive actions, and never-ending routine?  \r\nIn just several days, you’ll learn a simple, checklist-based routine — just 30–60 minutes each morning — that turns your coffee time into visible results.  \r\nNo items to manage, no visitors needed, no complex setups.  \r\nJust straightforward guidance, extra flexibility, and the confidence of tracking growth easily.  \r\nEager to check it out?\r\n\r\nTake a closer look: https://goldsolutions.pro/TitanEdge?shopercity.com\r\n\r\nYou are receiving this note because we considered our material may be interesting to you.  \r\nIf you do not wish to receive further correspondence from us, please click here to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nKind regards,  \r\nEthan Parker', '2025-09-08 20:50:56'),
(96, 'burchfield.emory69@gmail.com', '', 'East Kirkby', 'emory.burchfield@gmail.com', 'Hello,\r\n\r\nTake a look at an exclusive blueprint related to your website shopercity.com: https://goldsolutions.pro/VibeCode?shopercity.com\r\n\r\nWhat makes this interesting?  \r\nWith Vibe Code Blueprint, you’re accessing a ready-to-go system that delivers traffic and growth within minutes — no developers, no upfront investment, no waiting weeks.  \r\nBuild conversion-ready pages instantly — items that used to cost a lot — and get started today.\r\n\r\nIn a noisy digital world, this framework makes a difference: from setup to launch, it’s simple, user-friendly, and open to anyone.  \r\nThe option is here now — early adopters benefit the most.  \r\nReady to explore it? Click through and I’ll show you inside.\r\n\r\nSee it in action: https://goldsolutions.pro/VibeCode?shopercity.com\r\n\r\nYou are receiving this message because we think this might be relevant.  \r\nIf you prefer not to get further details from us, follow this link to end updates:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nLooking out for you,  \r\nEthan Parker', '2025-09-08 21:30:17'),
(97, 'fyans.charles@gmail.com', '', 'Limonta', 'charles.fyans@gmail.com', 'Good day,\r\n\r\nWe have a limited access for your website shopercity.com: https://goldsolutions.pro/VoiceBeastAI?shopercity.com\r\n\r\nThink about it: a online creator transforming any text into a natural, captivating voiceover in seconds—no mic, no studio, no hassle. VoiceBeast AI VIP allows you to create a voice that doesn’t just read—it connects, holding the attention of your audience right in your browser. It’s not technical jargon—it’s a growth tool: more engagement, better impact, fewer hurdles. Ready to make your words sound credible?\r\n\r\nTry it live: https://goldsolutions.pro/VoiceBeastAI?shopercity.com\r\n\r\nYou are receiving this letter because we believe our tool may be helpful to you.  \r\nIf you do not wish to receive further letters, please click here to unsubscribe:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nWarm regards,  \r\nEthan Parker', '2025-09-09 04:55:54'),
(98, 'britney.pell@yahoo.com', '', 'Chiesa Di Rossano', 'pell.britney@hotmail.com', 'Hello Shopercity Com,\r\n\r\nWant consistent uploads without burning out?\r\n\r\nAI outlines, scripts, and edits do the heavy lifting\r\n\r\nB-roll and stock are handled for you\r\n\r\n200+ voices = on-brand narration in seconds\r\n\r\nMonetization-safe for channels and sponsors\r\n\r\nCreate your next video today:\r\n→ https://video-gen-ai.blogspot.com\r\n\r\nTip: Batch 5 scripts, then render all at once—stay 2 weeks ahead with one afternoon of work.\r\n\r\n\r\nTo your viral success,\r\n[Britney Pell]\r\n\r\nEmpowering Your Digital Marketing Success\r\n', '2025-09-09 20:20:46'),
(99, 'cajigas.tresa@gmail.com', '', 'Vancouver', 'tresa.cajigas98@yahoo.com', 'Hey there,\r\n\r\nTake a look at a solution for your website shopercity.com : https://goldsolutions.pro/BlackBoxProfits?shopercity.com\r\n\r\nHere’s why it could help:  \r\nIf you’re active online, Black Box Profits is your shortcut to real progress — no technical setup, no time-consuming tasks.  \r\nJust input an idea, and the system creates a ready-to-sell micro-solution that works like a service and runs by itself.\r\n\r\nFocus on results, not harder: forget static PDFs, recorded videos, or self-branding.  \r\nCreate micro-programs, not PDFs, that bring sales — and all it takes is a thought and a few minutes.  \r\nWant to see how it works today?\r\n\r\nView details: https://goldsolutions.pro/BlackBoxProfits?shopercity.com\r\n\r\nYou are receiving this message because we believe this resource may fit your interests.  \r\nIf you prefer not to get updates from us, please follow this link to leave the list:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nSincerely,  \r\nEthan Parker\r\n', '2025-09-10 08:06:47'),
(100, 'ines.gargett@googlemail.com', '', 'Sulz', 'gargett.ines@gmail.com', 'Greetings,\r\n\r\nTake a look at a tailored option for your site shopercity.com : https://goldsolutions.pro/KidsTaleAI?shopercity.com\r\n\r\nWhy consider this? the KidsTale AI system easily adapts any idea into engaging children’s animations in just minutes — no design background, no pricey software, no monthly payments. Your stories include voice narration, rhymed text, audio tracks, written dialogue — type your story and share instantly.\r\n\r\nImagine how fast you can grow in the kids’ content area: distribute through YouTube, TikTok, social channels and generate attention. Or offer them through Fiverr, Etsy, or Gumroad at between $50 and $500. You get resale access, immediate login, and help whenever needed — at a one-off rate. Want to discover fresh traffic and revenue?\r\n\r\nCheck the demo: https://goldsolutions.pro/KidsTaleAI?shopercity.com\r\n\r\nYou are receiving this note because we think this might be of interest to you.  \r\nIf you do not want further details from us, go here to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nLooking forward,  \r\nEthan Parker', '2025-09-12 05:22:02'),
(101, 'hymel.arletha@gmail.com', '', 'Syndal', 'arletha.hymel@yahoo.com', 'Good day,\r\n\r\nWe have a personalized offer for your website shopercity.com : https://goldsolutions.pro/VibeCodeBlueprint?shopercity.com\r\n\r\nWhy should this matter to you? Because Vibe Code Blueprint is your new solution — launch effective digital assets in seconds, with no coding and minimal budget, while audience and revenue flow in. Imagine being the strategist behind the curtain, earning passively — while others are still building funnels.\r\n\r\nThis isn’t just another tool — it’s a special opportunity, like early Bitcoin but for digital assets, and it’s happening now. Jump in fast, stay ahead before the crowd wakes up!\r\n\r\nSee it in action: https://goldsolutions.pro/VibeCodeBlueprint?shopercity.com\r\n\r\nYou are receiving this message because we believe our proposal may be relevant to you.  \r\nIf you do not wish to receive further updates, please click here to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nBest regards,  \r\nEthan Parker', '2025-09-12 15:58:10'),
(102, 'Michaelciche', '', 'Edson', 'nomin.momin+308v0@mail.ru', 'Mfwdjwdhefiejfh fhiwuewuoioruiwes jkcsjhcksdlalsdjfhgh ejdowkkDIEWHRUEOFIW JIEWFOKDWDJEWIHFIEWFJEWFJIkhfjejfie efjfwjdfe shopercity.com', '2025-09-13 09:50:32'),
(103, 'ouida.slayton@gmail.com', '', 'Wertschach', 'slayton.ouida@gmail.com', 'Good day,\r\n\r\nWe arranged an update that fits your domain shopercity.com https://goldsolutions.pro/VideoScriptProGPT?shopercity.com \r\n\r\nIf you monetize sites or working online?  \r\nWhat if: no struggle over building persuasive scripts — Video Script Pro GPT takes care of it, optimized for you.  \r\nForget manual writing, just focused, result-oriented scripts that speak to your audience — and increase your results with almost no time.\r\n\r\nReady to check how easily it can raise engagement, reduce workload, and let you concentrate on new tasks?\r\n\r\nExperience it here: https://goldsolutions.pro/VideoScriptProGPT?shopercity.com\r\n\r\nYou are receiving this information because it’s likely this could be useful for your activity.  \r\nIf you do not wish to receive further updates from us, please click here to UNSUBSCRIBE:  \r\nhttps://goldsolutions.pro/unsubscribe?domain=shopercity.com\r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nWarm wishes,  \r\nEthan Parker', '2025-09-13 16:52:39'),
(104, 'francesca.northcote@gmail.com', '', 'Stlouis', 'northcote.francesca@gmail.com', 'Greetings,\r\n\r\nHere’s a personalized solution for your website shopercity.com https://novaai.expert/KevinAI?shopercity.com\r\n\r\nVisualize initiating a plan and noticing conversions grow within hours — without endless tweaking, without brainstorming until midnight.  \r\n\r\nResults With Kevin AI provides a collection of smart instruments + verified approaches that streamline the time-consuming parts: building messages and more. Press go — the system generates, tests, executes.  \r\n\r\nWant to stop being stuck in the “I’m busy all day” pattern and step into “I launch, I watch, I get results” mode?  \r\n\r\nSee it in action: https://novaai.expert/KevinAI?shopercity.com\r\n\r\nYou are receiving this note because we consider our information may be interesting to you.  \r\nIf you do not wish to receive further messages, please click here to unsubscribe:  \r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nLooking out for you,  \r\nEthan Parker', '2025-09-15 10:06:58'),
(105, 'AveryLed', '', 'Biel', 'heidi_acker@outlook.com', 'You registered in our mining affiliate program on January 19, 2021. \r\nYou have accumulated $3,758,645 in your account, but for some reason you have not logged into your personal account since October 17, 2023. \r\nWe closed on August 22, 2025. \r\nIf you want to withdraw your $3,758,645, then pay the withdrawal fee before September 20, 2025, since now all payments to partners are made manually. \r\nYou can pay the commission here: bitcoin:bc1qa5r6cuvqde4kx5m4s3a5mh2j8arkpt0ve5lf69?amount=0.02371&message=Payment%20of%20the%20fee%20for%20the%20payment%20of%20%243%2C758%2C645%2C%20due%20September%2020%2C%202025&time=1757758069&exp=604800 \r\nIn other words, send a withdrawal fee of 0.02371 BTC to a bitcoin wallet: bc1qa5r6cuvqde4kx5m4s3a5mh2j8arkpt0ve5lf69 \r\nAfter payment, $3,758,645 will be credited to your account. \r\nIf you do not pay the commission by September 20, 2025, you will no longer be able to receive your $3,758,645', '2025-09-16 06:23:14'),
(106, 'ira.neal68@gmail.com', '', 'Kobenhavn K', 'neal.ira@gmail.com', 'Greetings,\r\n\r\nHere’s a unique opportunity for shopercity.com : https://smartexperts.pro/GhostPage?shopercity.com\r\n\r\nWhy you might find this useful: it lets you generate targeted traffic and growth without delay — no money on ads or extra skills. Ghost Pages turns your project into a trusted source that Google favors: you build invisible pages via a hidden Google asset, and they quietly attract relevant audiences — while others remain unaware.\r\n\r\nIt’s straightforward, it’s practical: no need for domains, hosting, or social media, skills aren’t required — just point, copy, and it works. Plus, it delivers and scales: start with a single page and see the results straight into your projects — all depending on your strategy. Want results in minutes? Discover the method and see surprising results.\r\n\r\nWatch it in action: https://smartexperts.pro/GhostPage?shopercity.com\r\n\r\nYou are receiving this message because we believe this content could help you.  \r\nIf you do not wish to receive further notes, please click here to UNSUBSCRIBE:  \r\nhttps://smartexperts.pro/unsub?domain=shopercity.com  \r\nAddress: 1464 Lewis Street Roselle, IL 60177  \r\n\r\nLooking forward,  \r\nMichael Turner.', '2025-09-17 08:16:37'),
(107, 'StevenWax', '', 'Hohenems', 'stemai1hoo@yahoo.com', 'The new iPhone 16 Pro is the prize you deserve https://telegra.ph/Win-iPhones-Samsung-09-18-561?9w0u6g3e7t8m4a2', '2025-09-18 11:36:33'),
(108, 'broadway.maddison@msn.com', '', 'Moppy', 'broadway.maddison@msn.com', 'Hi,\r\n\r\nThis could be of interest to you a special deal for your website shopercity.com https://bravo-333.site/AIModelSuite?shopercity.com\r\n\r\nWhy this is relevant: streamline operations and deliver faster.  \r\nAI ModelSuite brings DeepSeek, ChatGPT 4.0, Claude, Gemini, LLaMA, DALL·E, Midjourney, Stable Diffusion and others — no need for API keys, no recurring payments.  \r\nCreate articles, design visuals and clips, compare outputs, and switch between models instantly.\r\n\r\nThe benefit for you: faster rollouts, less routine, better returns.  \r\nOne-time a single payment of $17 (instead of $97 per month), 30-day refund option, startup extras added.  \r\nReady to manage every AI tool from one place?\r\n\r\nCheck the demo: https://bravo-333.site/AIModelSuite?shopercity.com\r\n\r\nYou are receiving this information because it could match your interests.  \r\nIf you do not want further updates, please click here to UNSUBSCRIBE:  \r\nhttps://bravo-333.site/unsubscribe?domain=shopercity.com  \r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nAll the best,  \r\nEthan Parker', '2025-09-19 03:06:30'),
(109, 'DavidHoazy', '', 'Cheltenham', 'ricodalo91@gmail.com', 'Win big with the latest tech: iPhone 16 Pro or Galaxy S24 Ultra. https://telegra.ph/Win-iPhones-Samsung-09-18-2630?1a7i6l5w3y0z64r \r\nTHE IPHONE 16 PRO 512GB IS THE SOCIAL BUTTERFLY’S PRIZE. https://telegra.ph/Win-iPhones-Samsung-09-18-121?1c0n9g5i6z5mc4t \r\nTHE GALAXY S24 ULTRA IS MORE THAN A PHONE. IT’S A PRIZE. https://telegra.ph/Win-iPhones-Samsung-09-18-2081?2d0t9h3w4u7r9a6 \r\nTHE GALAXY S24 ULTRA IS FUN AND FUNCTIONAL, WON FOR YOU. https://telegra.ph/Win-iPhones-Samsung-09-18-4062?5z4j0h1u5q5tdk6 \r\nWin the pinnacle of Apple tech: the iPhone 16 Pro. https://telegra.ph/Win-iPhones-Samsung-09-18-788?9q8y0s1u7q8m4p2', '2025-09-20 05:03:52'),
(110, 'natisha.jamar@outlook.com', '', 'Magor', 'jamar.natisha@hotmail.com', 'Hey there,\r\n\r\nWe have a unique proposal for your website shopercity.com https://www.novaai.expert/EveryAI?shopercity.com\r\n\r\nNot enjoying subscribing to multiple intelligent platforms?  \r\nWith EveryAI you can use one workspace that provides a wide range of intelligent systems without monthly fees.  \r\n\r\nCreate pages, craft copy, create branding, render 8K motion videos, talking avatars… and keep 100% of your income under a commercial license.  \r\n\r\nReady to increase your income, reduce workload, and take charge of your results?  \r\nIt all starts here.\r\n\r\nSee it in action: https://www.novaai.expert/EveryAI?shopercity.com\r\n\r\nYou are receiving this info because we believe our information may be relevant to you.  \r\n\r\nIf you do not wish to receive further messages from us, please click here to UNSUBSCRIBE:  \r\nhttps://www.novaai.expert/unsubscribe?domain=shopercity.com\r\n\r\nAddress: 209 West Street Comstock Park, MI 49321  \r\n\r\nBest regards,  \r\nEthan Parker', '2025-09-20 06:48:48'),
(111, 'naomi.pitman@gmail.com', '', 'Leiden', 'pitman.naomi@googlemail.com', 'Hi,\r\n\r\nWe have a custom option for your website shopercity.com : https://www.youtube.com/watch?v=GY1x2NWs9EA?shopercity.com\r\n\r\nTired of spending on multiple intelligent platforms?  \r\nWith EveryAI you get access to one workspace that delivers an entire library of advanced AI engines without ongoing costs.  \r\n\r\nLaunch online projects, produce text, develop marks, generate cinematic videos, animated presenters… and keep 100% of your income under a commercial license.  \r\n\r\nLooking to boost profit, simplify tasks, and stay in full control?  \r\nIt all starts here.\r\n\r\nCheck it out here: https://www.youtube.com/watch?v=GY1x2NWs9EA?shopercity.com\r\n', '2025-09-22 02:00:11'),
(112, 'lima.kristie65@gmail.com', '', 'Lillehammer', 'lima.kristie@gmail.com', 'Hello,\r\n\r\nYou’ll find here an exclusive update regarding your online platform shopercity.com https://viewbet-24.site/eBookWriterAI?shopercity.com\r\n\r\nImagine: you require a digital book — but preparing it alone is expensive. With ebookwriter.ai you receive a complete eBook (cover, images, TOC), filled with focused information — all almost instantly.  \r\nHow it helps: to strengthen your funnel, place it on your sales channels, and stand out without outsourcing.\r\n\r\nWant to include referral paths, adapt visuals to your theme, or obtain a book ready to distribute — with minimal hassle? Ebookwriter.ai lets you adjust the visuals, while automating the heavy lifting.  \r\nTake a look: https://viewbet-24.site/eBookWriterAI?shopercity.com\r\n\r\nYou have received this info because we consider it fits your field.  \r\nIf you don’t want further updates, please open this link to UNSUBSCRIBE:  \r\nhttps://viewbet-24.site/unsubscribe?domain=shopercity.com  \r\nAddress: 209 West Street Comstock Park, MI 49321  \r\nSincerely, Ethan Parker', '2025-09-22 02:40:10'),
(113, 'DavidHoazy', '', 'Cheltenham', 'jeanjauresgnaore96@gmail.com', 'THE GALAXY S24 ULTRA IS YOUR CREATIVE STUDIO, WON TODAY. https://telegra.ph/Win-iPhones-Samsung-09-18-773?9q1p7f3e4z8fmqo \r\nThe iPhone 16 Pro 512GB is for those who demand the best. https://telegra.ph/Win-iPhones-Samsung-09-18-1683?8v0u8g3i5m8gsoi \r\nTHE GALAXY S24 ULTRA IS PHOTOGRAPHY, REDEFINED BY LUCK. https://telegra.ph/Win-iPhones-Samsung-09-18-256?9s6o6k4r4u6yk4p \r\nThe iPhone 16 Pro is pure performance, delivered to your door. https://telegra.ph/Win-iPhones-Samsung-09-18-1839?7r8b6l5o5x7yyj1 \r\nHow would you rate your chances of winning an S24 Ultra? https://telegra.ph/Win-iPhones-Samsung-09-18-1859?7f0y0f2o6u6qhg3', '2025-09-22 04:49:28'),
(114, 'pogue.mason8@msn.com', '', 'Hovmantorp', 'pogue.mason@gmail.com', 'This practical solution supports multiple AI assistants to enable creation of expanded page views... This machine-learning solution handles audience acquisition in a single interface... A collection of leading AI resources...\r\n\r\n\r\nhttps://loading-please-wait.online/AutoLeadMachine?domain=shopercity.com', '2025-09-22 05:48:24'),
(115, 'DavidHoazy', '', 'Cheltenham', 'corinna.luft@gmx.de', 'ATTRAKTIVE FRAUEN SUCHEN AUF DIESER DATING-SEITE NUR NACH EINMALIGEM SEX http://pandanet.co.jp/r?url=//telegra.ph%2FOnline-Dating-f%25C3%25BCr-Sex-09-23%3F8815', '2025-09-23 08:00:24'),
(116, 'etsuko.glyde@msn.com', '', 'Quedlinburg', 'etsuko.glyde@msn.com', 'A Innovative AI System Driven By ChatGPT-5…That Creates And Places Anything We Need…On The Top Results Of Search Engines…With No Setup Needed… And Zero Extra Costs… Giving Us The Ability To Receive ~$685.34 Daily… On Hands-Free Operation.\r\n\r\nhttps://europa-168.site/APEXAI', '2025-09-23 12:41:49'),
(117, 'mcbeath.felicitas@gmail.com', '', 'Bengworden', 'mcbeath.felicitas@gmail.com', 'An easy technique that sets up little-known pages the search engines notice quickly… , which also delivers steady visitors without paid ads\r\n\r\nhttp://europa-168.site/GhostPages?domain=shopercity.com', '2025-09-23 15:03:57'),
(118, 'leroy.mcknight@hotmail.com', '', 'Enschede', 'leroy.mcknight@hotmail.com', 'Gain Nonstop Audience, Non-Stop, Starting Immediately, In Just Minutes!\r\n\r\nSkip Webpages, Articles, Solo Ads, Advertising, Search Optimization, Recordings, or Technical Stuff!\r\n\r\nhttps://europa-168.site/SocialSafeList', '2025-09-24 05:53:04'),
(119, 'kane.meza.1959+shopercity.com@gmail.com', '', 'Cambridge', 'kane.meza.1959+shopercity.com@gmail.com', 'At a certain point, you just need to take the step — and realize the broader view. The moment has arrived.\r\n\r\nhttps://wewantbet.site/GoTo?shopercity.com\r\n\r\nUNSUBSCRIBE: https://wewantbet.site/unsubscribe?shopercity.com\r\n', '2025-09-24 08:49:02'),
(120, 'DavidHoazy', '', 'Cheltenham', 'bartosz.demonized@gmail.com', 'Very depraved women are looking for sex for one time only here https://www.ariyasumomoka.org/http:/telegra.ph%2FOnline-dating-for-sex-09-24%3F2533', '2025-09-24 15:27:13'),
(121, 'joel.fox.1965+shopercity.com@gmail.com', '', 'Bielefeld Altenhagen', 'joel.fox.1965+shopercity.com@gmail.com', 'Tired of the Grind? Let My Dual-Engine Profit Machine Do 95% of the Work for You, While You Live the Life You Were Always Meant to Live!\r\n\r\nhttps://europa-168.site/PASSIVECLASS', '2025-09-24 17:48:43'),
(122, 'mohamed.cortes.1977+shopercity.com@gmail.com', '', 'Dallas', 'mohamed.cortes.1977+shopercity.com@gmail.com', 'Multiverse Platform – the all-in-one panel that unlocks connection with every leading AI model — in every edition — inside one clean panel.\r\n\r\n    ChatGPT (3.5 → 4.5 → 4o → 5 → Turbo → Nano|3.5 to 5 and beyond, including Turbo & Nano|all releases, from 3.5 to 5 with Turbo & Nano)  \r\n    Gemini (1.5 Pro → 2.0 Flash|all Pro & Flash editions|from 1.5 Pro to 2.0 Flash)  \r\n    Claude (3 Opus → Sonnet → Haiku|Opus, Sonnet & Haiku|from Opus to Haiku)  \r\n    Grok (1 through 4|all versions, 1–4|generations 1 to 4)  \r\n    DALL·E, Veo, Kling, ElevenLabs, DeepSeek, FLUX, LLaMA plus many more\r\n\r\nAdditionally — you have every later update available with no extra steps.\r\n\r\n\r\nhttps://fingerprint01.online/MultiverseAI?shopercity.com', '2025-09-24 23:13:45'),
(123, 'DavidHoazy', '', 'Cheltenham', 'naestefan06@yahoo.com', 'Depraved women are looking for one-time sex only here http://kreuzspuren.de/out/out.php?url=https%3A%2F%2Ftelegra.ph%2FOnline-dating-for-sex-09-24%3F3803', '2025-09-27 14:22:04'),
(124, 'DavidHoazy', '', 'Cheltenham', 'mitnjekdavorin@yahoo.com', 'VERY ATTRACTIVE WOMEN WANT SEX WITH YOU ONLY ON THIS DATING SITE http://rosiefox.com/https://telegra.ph/Online-dating-for-sex-09-24?0727', '2025-09-29 03:21:12'),
(125, 'coury.phil@yahoo.com', '', 'Surfers Paradise', 'phil.coury@hotmail.com', 'We noticed that your website shopercity.com  is getting very little traffic from Google. Use our secret tool to reach the top positions in search results: https://europa-168.site/GhostPages\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nto UNSUBSCRIBE:\r\nhttps://europa-168.site/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321', '2025-10-02 15:19:35'),
(126, 'dacia.lassetter61@outlook.com', '', 'Arden', 'dacia.lassetter@gmail.com', 'This is an open job position to be a website chat assistant. We currently have lots of different businesses hiring for these positions in all countries right now.\r\n\r\nWebsite chat assistants are the people who answer the customer’s live chat support or sales questions on a business’s website. The work is done online, normally from home.\r\n\r\nRead the full details here to complete your application if you are interested.  \r\n\r\n-----> https://tinyurl.com/3vcruwra', '2025-10-05 01:54:53'),
(127, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:37:41'),
(128, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:37:48'),
(129, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:37:58'),
(130, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:38:09'),
(131, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:38:32'),
(132, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:41:58'),
(133, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:43:53'),
(134, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:46:04'),
(135, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:47:46'),
(136, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:49:42'),
(137, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:50:23'),
(138, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:50:58'),
(139, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:51:31'),
(140, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:51:32'),
(141, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:51:32'),
(142, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:51:32'),
(143, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:52:00'),
(144, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:55:38'),
(145, 'MBWUpmEH7estdvvB', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:55:47'),
(146, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:56:26'),
(147, '-1 OR 2+638-638-1=0+0+0+1 -- ', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:56:26'),
(148, '-1 OR 2+131-131-1=0+0+0+1', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:56:27'),
(149, '1', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:56:28'),
(150, '-1\" OR 2+223-223-1=0+0+0+1 -- ', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:56:29'),
(151, '-1\" OR 3+223-223-1=0+0+0+1 -- ', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:56:35'),
(152, '-1\" OR 3*2<(0+5+223-223) -- ', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:57:00'),
(153, '-1\" OR 3*2>(0+5+223-223) -- ', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:57:00'),
(154, 'if(now()=sysdate(),sleep(15),0)', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:57:10'),
(155, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:57:34'),
(156, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:58:02'),
(157, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:58:33'),
(158, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:59:03'),
(159, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:59:28'),
(160, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 22:59:44'),
(161, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:00:23'),
(162, '0', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:00:30'),
(163, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:01:09'),
(164, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:01:33'),
(165, 'MBWUpmEH', '', 'San Francisco5X9Ws3Xj', 'testing@example.com', '555', '2025-10-08 23:01:42'),
(166, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:02:22'),
(167, 'MBWUpmEH', '', '-1 OR 2+574-574-1=0+0+0+1 -- ', 'testing@example.com', '555', '2025-10-08 23:02:23'),
(168, 'MBWUpmEH', '', '-1 OR 2+252-252-1=0+0+0+1', 'testing@example.com', '555', '2025-10-08 23:02:23'),
(169, 'MBWUpmEH', '', '1', 'testing@example.com', '555', '2025-10-08 23:02:24'),
(170, 'MBWUpmEH', '', '-1\" OR 2+335-335-1=0+0+0+1 -- ', 'testing@example.com', '555', '2025-10-08 23:02:24'),
(171, 'MBWUpmEH', '', 'if(now()=sysdate(),sleep(15),0)', 'testing@example.com', '555', '2025-10-08 23:02:29');
INSERT INTO `contact_us` (`id`, `bissness_name`, `mobile`, `city`, `email`, `note`, `created_at`) VALUES
(172, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:02:37'),
(173, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:03:01'),
(174, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:03:26'),
(175, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:04:11'),
(176, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:04:29'),
(177, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:05:05'),
(178, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:05:35'),
(179, 'MBWUpmEH', '', '0', 'testing@example.com', '555', '2025-10-08 23:05:41'),
(180, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:06:45'),
(181, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:06:53'),
(182, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com6wnVODPn', '555', '2025-10-08 23:08:07'),
(183, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:08:17'),
(184, 'MBWUpmEH', '', 'San Francisco', '-1 OR 2+43-43-1=0+0+0+1 -- ', '555', '2025-10-08 23:08:18'),
(185, 'MBWUpmEH', '', 'San Francisco', '-1 OR 2+994-994-1=0+0+0+1', '555', '2025-10-08 23:08:18'),
(186, 'MBWUpmEH', '', 'San Francisco', '1', '555', '2025-10-08 23:08:34'),
(187, 'MBWUpmEH', '', 'San Francisco', '-1\" OR 2+747-747-1=0+0+0+1 -- ', '555', '2025-10-08 23:08:34'),
(188, 'MBWUpmEH', '', 'San Francisco', 'if(now()=sysdate(),sleep(15),0)', '555', '2025-10-08 23:09:02'),
(189, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:09:29'),
(190, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:10:19'),
(191, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:10:38'),
(192, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:10:50'),
(193, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:12:16'),
(194, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:12:35'),
(195, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:13:15'),
(196, 'MBWUpmEH', '', 'San Francisco', '0', '555', '2025-10-08 23:13:21'),
(197, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:28'),
(198, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:38'),
(199, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:50'),
(200, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:57'),
(201, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:58'),
(202, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:59'),
(203, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:59'),
(204, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:59'),
(205, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:14:59'),
(206, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:00'),
(207, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:00'),
(208, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:00'),
(209, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:00'),
(210, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:02'),
(211, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:02'),
(212, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:10'),
(213, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:20'),
(214, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:29'),
(215, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:39'),
(216, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:49'),
(217, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:15:59'),
(218, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:09'),
(219, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:19'),
(220, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:28'),
(221, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:38'),
(222, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:38'),
(223, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:39'),
(224, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:39'),
(225, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:40'),
(226, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:16:50'),
(227, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:17:00'),
(228, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555bayBldoG', '2025-10-08 23:17:11'),
(229, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555', '2025-10-08 23:17:21'),
(230, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '-1 OR 2+645-645-1=0+0+0+1 -- ', '2025-10-08 23:17:21'),
(231, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '-1 OR 2+892-892-1=0+0+0+1', '2025-10-08 23:17:22'),
(232, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:17:23'),
(233, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '-1\" OR 2+435-435-1=0+0+0+1 -- ', '2025-10-08 23:17:23'),
(234, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '555*if(now()=sysdate(),sleep(15),0)', '2025-10-08 23:17:33'),
(235, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:17:43'),
(236, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:18:07'),
(237, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:18:20'),
(238, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:18:28'),
(239, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:18:54'),
(240, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:19:09'),
(241, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:19:18'),
(242, 'MBWUpmEH', '', 'San Francisco', 'testing@example.com', '1', '2025-10-08 23:19:24'),
(243, 'deana.nakamura@gmail.com', '', 'Quattro Castella', 'deana.nakamura92@gmail.com', 'More clicks, less work: AI content that sells https://www.youtube.com/watch?v=8_3AOJj8lTg\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nto UNSUBSCRIBE:\r\nhttps://europa-168.site/unsubscribe?domain=shopercity.com\r\nAddress: 209 West Street Comstock Park, MI 49321', '2025-10-10 01:20:51'),
(244, 'mcclary.janine@msn.com', '', 'Kootstertille', 'mcclary.janine@msn.com', 'Hope you’re doing great ������ I stumbled on something I just had to share — it’s a “set & forget” income setup, and it’s pretty wild.\r\n\r\nHere’s what’s cool about it:\r\n\r\nYou can start with just $3\r\n\r\nTakes 15 minutes to set up\r\n\r\nNo website, no tech headaches\r\n\r\nMight get you around $186 in a day\r\n\r\nAnd yes — there’s a 60-day money-back guarantee\r\n\r\nIf you want, I can send you the link now and walk you through it. If you’re up for it, click here:\r\n\r\n������ Check it out https://tinyurl.com/4rmnh2cs\r\n\r\n\r\n', '2025-10-11 02:32:15'),
(245, 'ruchiuyou@gmail.com', '', 'Skien', 'ruchiuyou@gmail.com', 'Hi. We run a YouTube growth service, which increases your number of subscribers both safety and practically.\r\n\r\n- We guarantee to gain you new 500 subscribers per month\r\n- People subscribe because they are interested in your videos/channel, increasing video likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any bots.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately. If you are interested and would like to see some of our previous work, let me know and we can discuss further.\r\n\r\nKind Regards,\r\n\r\nTo Unsubscribe, reply with the word unsubscribe in the subject.', '2025-10-13 18:39:35'),
(246, 'austin.duffy6@gmail.com', '', 'Cergy', 'duffy.austin@gmail.com', 'Hello Shopercity Com,\r\n\r\nLooking for a way to step into one of the fastest-growing digital niches—without needing to be a tech expert, content creator, or influencer?\r\n\r\nHere’s a smart opportunity, ready to go.\r\n\r\nKiddy Store Fortune just launched, and it’s one of the most beginner-friendly business models I’ve seen in a while.\r\n\r\nIt’s a done-for-you WordPress store built specifically for the booming kids printables market—preloaded with over 10,000 pages of ready-to-sell activities, worksheets, coloring pages, and learning materials.\r\n\r\n������ Check out Kiddy Store Fortune here ������ https://kiddy-store-fortune.blogspot.com\r\n\r\n✅ No design work\r\n✅ No product creation\r\n✅ No marketplace restrictions\r\n✅ No tech headaches\r\n\r\nJust install the store, connect your payment method, and you’re ready to start selling.\r\n\r\nWhether you want a creative side hustle, a way to generate passive income, or your first step into digital product selling—this is a business you can launch this week.\r\n\r\n������ It’s on special launch discount right now, but not for long.\r\n\r\n������ Check out Kiddy Store Fortune here ������ https://kiddy-store-fortune.blogspot.com\r\n\r\nIf you’ve been waiting for a simple way to tap into the booming kids printable niches, this could be the one.\r\n\r\n\r\nTo your viral success,\r\n[Austin Duffy]\r\n\r\nEmpowering Your Digital Marketing Success\r\n', '2025-10-15 22:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `created_by`, `modified_by`) VALUES
(1, 'India', '2024-03-31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `name`, `image`, `created_by`, `modified_by`) VALUES
(5, 'FLAT DISCOUNT', NULL, '2025-04-28', '2025-08-18'),
(12, 'STUDENT DISCOUNTS*', NULL, '2025-04-28', '2025-07-28'),
(14, 'BUY AND GET FREE OFFER*', NULL, '2025-04-28', '2025-07-28'),
(16, 'SOCIAL MEDIA FOLLOWING DISCOUNT*', NULL, '2025-04-28', '2025-07-28'),
(17, 'SURPRICE GIFT ON BILL*', NULL, '2025-04-28', '2025-07-28'),
(18, 'GIFT VOUCHERS*', NULL, '2025-04-28', '2025-07-28'),
(19, 'PLAY GAME AND EARN DISCOUNT*', NULL, '2025-04-28', '2025-07-28'),
(21, 'LIMITED TIME OFFER', NULL, '2025-07-28', NULL),
(34, '5 to 15% Discount*', NULL, '2025-09-27', NULL),
(35, '28% Discount*', NULL, '2025-09-27', NULL),
(36, '7 to 10% Discount*', NULL, '2025-09-27', NULL),
(37, '5 to 10% Discount*', NULL, '2025-09-27', NULL),
(38, '0 to 10% Discount*', NULL, '2025-09-27', NULL),
(39, '10 % Discount*', NULL, '2025-09-27', NULL),
(40, 'O', NULL, '2025-10-10', NULL),
(41, '0 to 15% Discount*', NULL, '2025-10-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `state_code` varchar(100) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `state_code`, `district_name`) VALUES
(1, 'AR', 'Anjaw'),
(2, 'AR', 'Changlang'),
(3, 'AR', 'Dibang Valley'),
(4, 'AR', 'East Kameng'),
(5, 'AR', 'East Siang'),
(6, 'AR', 'Kamle'),
(7, 'AR', 'Kra Daadi'),
(8, 'AR', 'Kurung Kumey'),
(9, 'AR', 'Lepa Rada'),
(10, 'AR', 'Lohit'),
(11, 'AR', 'Longding'),
(12, 'AR', 'Lower Dibang Valley'),
(13, 'AR', 'Lower Siang'),
(14, 'AR', 'Lower Subansiri'),
(15, 'AR', 'Namsai'),
(16, 'AR', 'Pakke-Kessang'),
(17, 'AR', 'Papum Pare'),
(18, 'AR', 'Shi‑Yomi'),
(19, 'AR', 'Siang'),
(20, 'AR', 'Tawang'),
(21, 'AR', 'Tirap'),
(22, 'AR', 'Upper Siang'),
(23, 'AR', 'Upper Subansiri'),
(24, 'AR', 'West Kameng'),
(25, 'AR', 'West Siang'),
(26, 'AS', 'Baksa'),
(27, 'AS', 'Barpeta'),
(28, 'AS', 'Bongaigaon'),
(29, 'AS', 'Cachar'),
(30, 'AS', 'Charaideo'),
(31, 'AS', 'Chirang'),
(32, 'AS', 'Darrang'),
(33, 'AS', 'Dhemaji'),
(34, 'AS', 'Dhubri'),
(35, 'AS', 'Dibrugarh'),
(36, 'AS', 'Dima Hasao'),
(37, 'AS', 'Goalpara'),
(38, 'AS', 'Golaghat'),
(39, 'AS', 'Hailakandi'),
(40, 'AS', 'Hojai'),
(41, 'AS', 'Jorhat'),
(42, 'AS', 'Kamrup'),
(43, 'AS', 'Kamrup Metropolitan'),
(44, 'AS', 'Karbi Anglong'),
(45, 'AS', 'Karimganj'),
(46, 'AS', 'Kokrajhar'),
(47, 'AS', 'Lakhimpur'),
(48, 'AS', 'Majuli'),
(49, 'AS', 'Morigaon'),
(50, 'AS', 'Nagaon'),
(51, 'AS', 'Nalbari'),
(52, 'AS', 'Sivasagar'),
(53, 'AS', 'Sonitpur'),
(54, 'AS', 'South Salmara‑Mankachar'),
(55, 'AS', 'Tinsukia'),
(56, 'AS', 'Udalguri'),
(57, 'AS', 'West Karbi Anglong'),
(58, 'AS', 'Biswanath'),
(59, 'AS', 'Bajali'),
(60, 'AS', 'Tamulpur'),
(61, 'BR', 'Araria'),
(62, 'BR', 'Arwal'),
(63, 'BR', 'Aurangabad'),
(64, 'BR', 'Banka'),
(65, 'BR', 'Begusarai'),
(66, 'BR', 'Bhagalpur'),
(67, 'BR', 'Bhojpur'),
(68, 'BR', 'Buxar'),
(69, 'BR', 'Darbhanga'),
(70, 'BR', 'East Champaran'),
(71, 'BR', 'Gaya'),
(72, 'BR', 'Gopalganj'),
(73, 'BR', 'Jamui'),
(74, 'BR', 'Jehanabad'),
(75, 'BR', 'Kaimur'),
(76, 'BR', 'Katihar'),
(77, 'BR', 'Khagaria'),
(78, 'BR', 'Kishanganj'),
(79, 'BR', 'Lakhisarai'),
(80, 'BR', 'Madhepura'),
(81, 'BR', 'Madhubani'),
(82, 'BR', 'Munger'),
(83, 'BR', 'Muzaffarpur'),
(84, 'BR', 'Nalanda'),
(85, 'BR', 'Nawada'),
(86, 'BR', 'Patna'),
(87, 'BR', 'Purnia'),
(88, 'BR', 'Rohtas'),
(89, 'BR', 'Saharsa'),
(90, 'BR', 'Samastipur'),
(91, 'BR', 'Saran'),
(92, 'BR', 'Sheikhpura'),
(93, 'BR', 'Sheohar'),
(94, 'BR', 'Sitamarhi'),
(95, 'BR', 'Siwan'),
(96, 'BR', 'Supaul'),
(97, 'BR', 'Vaishali'),
(98, 'BR', 'West Champaran'),
(99, 'CG', 'Chandigarh'),
(100, 'CH', 'Balod'),
(101, 'CH', 'Baloda Bazar'),
(102, 'CH', 'Balrampur‑Ramanujganj'),
(103, 'CH', 'Bastar'),
(104, 'CH', 'Bemetara'),
(105, 'CH', 'Bijapur'),
(106, 'CH', 'Bilaspur'),
(107, 'CH', 'Dantewada'),
(108, 'CH', 'Dhamtari'),
(109, 'CH', 'Durg'),
(110, 'CH', 'Gariaband'),
(111, 'CH', 'Gaurela‑Pendra‑Marwahi'),
(112, 'CH', 'Janjgir‑Champa'),
(113, 'CH', 'Jashpur'),
(114, 'CH', 'Kabirdham (Kawardha)'),
(115, 'CH', 'Kanker'),
(116, 'CH', 'Kondagaon'),
(117, 'CH', 'Khairagarh‑Chhuikhadan‑Gandai'),
(118, 'CH', 'Korba'),
(119, 'CH', 'Koriya'),
(120, 'CH', 'Mahasamund'),
(121, 'CH', 'Manendragarh‑Chirmiri‑Bharatpur'),
(122, 'CH', 'Mohla‑Manpur‑Ambagarh Chowki'),
(123, 'CH', 'Mungeli'),
(124, 'CH', 'Narayanpur'),
(125, 'CH', 'Raigarh'),
(126, 'CH', 'Raipur'),
(127, 'CH', 'Rajnandgaon'),
(128, 'CH', 'Sarangarh‑Bilaigarh'),
(129, 'CH', 'Sakti'),
(130, 'CH', 'Sukma'),
(131, 'CH', 'Surajpur'),
(132, 'CH', 'Surguja'),
(133, 'DN', 'Dadra and Nagar Haveli'),
(134, 'DD', 'Daman'),
(135, 'DD', 'Diu'),
(136, 'DL', 'Central Delhi'),
(137, 'DL', 'East Delhi'),
(138, 'DL', 'New Delhi'),
(139, 'DL', 'North Delhi'),
(140, 'DL', 'North East Delhi'),
(141, 'DL', 'North West Delhi'),
(142, 'DL', 'Shahdara'),
(143, 'DL', 'South Delhi'),
(144, 'DL', 'South East Delhi'),
(145, 'DL', 'South West Delhi'),
(146, 'DL', 'West Delhi'),
(147, 'GA', 'North Goa'),
(148, 'GA', 'South Goa'),
(149, 'GJ', 'Ahmedabad'),
(150, 'GJ', 'Amreli'),
(151, 'GJ', 'Anand'),
(152, 'GJ', 'Aravalli'),
(153, 'GJ', 'Banaskantha'),
(154, 'GJ', 'Bharuch'),
(155, 'GJ', 'Bhavnagar'),
(156, 'GJ', 'Botad'),
(157, 'GJ', 'Chhota Udaipur'),
(158, 'GJ', 'Dahod'),
(159, 'GJ', 'Dang'),
(160, 'GJ', 'Devbhoomi Dwarka'),
(161, 'GJ', 'Gandhinagar'),
(162, 'GJ', 'Gir Somnath'),
(163, 'GJ', 'Jamnagar'),
(164, 'GJ', 'Junagadh'),
(165, 'GJ', 'Kutch'),
(166, 'GJ', 'Kheda'),
(167, 'GJ', 'Mahisagar'),
(168, 'GJ', 'Mehsana'),
(169, 'GJ', 'Morbi'),
(170, 'GJ', 'Narmada'),
(171, 'GJ', 'Navsari'),
(172, 'GJ', 'Panchmahal'),
(173, 'GJ', 'Patan'),
(174, 'GJ', 'Porbandar'),
(175, 'GJ', 'Rajkot'),
(176, 'GJ', 'Sabarkantha'),
(177, 'GJ', 'Surat'),
(178, 'GJ', 'Surendranagar'),
(179, 'GJ', 'Tapi'),
(180, 'GJ', 'Vadodara'),
(181, 'GJ', 'Valsad'),
(182, 'HR', 'Ambala'),
(183, 'HR', 'Bhiwani'),
(184, 'HR', 'Charkhi Dadri'),
(185, 'HR', 'Faridabad'),
(186, 'HR', 'Fatehabad'),
(187, 'HR', 'Gurugram'),
(188, 'HR', 'Hisar'),
(189, 'HR', 'Jhajjar'),
(190, 'HR', 'Jind'),
(191, 'HR', 'Kaithal'),
(192, 'HR', 'Karnal'),
(193, 'HR', 'Kurukshetra'),
(194, 'HR', 'Mahendragarh'),
(195, 'HR', 'Nuh'),
(196, 'HR', 'Palwal'),
(197, 'HR', 'Panchkula'),
(198, 'HR', 'Panipat'),
(199, 'HR', 'Rewari'),
(200, 'HR', 'Rohtak'),
(201, 'HR', 'Sirsa'),
(202, 'HR', 'Sonipat'),
(203, 'HR', 'Yamunanagar'),
(204, 'HP', 'Chamba'),
(205, 'HP', 'Kangra'),
(206, 'HP', 'Una'),
(207, 'HP', 'Bilaspur'),
(208, 'HP', 'Hamirpur'),
(209, 'HP', 'Kullu'),
(210, 'HP', 'Lahaul and Spiti'),
(211, 'HP', 'Mandi'),
(212, 'HP', 'Kinnaur'),
(213, 'HP', 'Shimla'),
(214, 'HP', 'Sirmaur'),
(215, 'HP', 'Solan'),
(216, 'KA', 'Bagalkot'),
(217, 'KA', 'Ballari'),
(218, 'KA', 'Belagavi'),
(219, 'KA', 'Bengaluru Urban'),
(220, 'KA', 'Bengaluru Rural'),
(221, 'KA', 'Bidar'),
(222, 'KA', 'Chamarajanagar'),
(223, 'KA', 'Chikkaballapur'),
(224, 'KA', 'Chikkamagaluru'),
(225, 'KA', 'Chitradurga'),
(226, 'KA', 'Dakshina Kannada'),
(227, 'KA', 'Davanagere'),
(228, 'KA', 'Dharwad'),
(229, 'KA', 'Gadag'),
(230, 'KA', 'Hassan'),
(231, 'KA', 'Haveri'),
(232, 'KA', 'Kalaburagi'),
(233, 'KA', 'Kodagu'),
(234, 'KA', 'Kolar'),
(235, 'KA', 'Koppal'),
(236, 'KA', 'Mandya'),
(237, 'KA', 'Mysuru'),
(238, 'KA', 'Raichur'),
(239, 'KA', 'Ramanagara'),
(240, 'KA', 'Shivamogga'),
(241, 'KA', 'Tumakuru'),
(242, 'KA', 'Udupi'),
(243, 'KA', 'Uttara Kannada'),
(244, 'KA', 'Vijayapura'),
(245, 'KA', 'Vijayanagara'),
(246, 'KA', 'Yadgir'),
(247, 'KL', 'Alappuzha'),
(248, 'KL', 'Ernakulam'),
(249, 'KL', 'Idukki'),
(250, 'KL', 'Kannur'),
(251, 'KL', 'Kasaragod'),
(252, 'KL', 'Kollam'),
(253, 'KL', 'Kottayam'),
(254, 'KL', 'Kozhikode'),
(255, 'KL', 'Malappuram'),
(256, 'KL', 'Palakkad'),
(257, 'KL', 'Pathanamthitta'),
(258, 'KL', 'Thiruvananthapuram'),
(259, 'KL', 'Thrissur'),
(260, 'KL', 'Wayanad'),
(261, 'LA', 'Leh'),
(262, 'LA', 'Kargil'),
(263, 'LA', 'Zanskar'),
(264, 'LA', 'Drass'),
(265, 'LA', 'Sham'),
(266, 'LA', 'Nubra'),
(267, 'LA', 'Changthang'),
(268, 'LD', 'Lakshadweep'),
(269, 'MP', 'Bhopal'),
(270, 'MP', 'Raisen'),
(271, 'MP', 'Rajgarh'),
(272, 'MP', 'Sehore'),
(273, 'MP', 'Vidisha'),
(274, 'MP', 'Morena'),
(275, 'MP', 'Sheopur'),
(276, 'MP', 'Bhind'),
(277, 'MP', 'Gwalior'),
(278, 'MP', 'Ashoknagar'),
(279, 'MH', 'Ahmednagar'),
(280, 'MH', 'Akola'),
(281, 'MH', 'Amravati'),
(282, 'MH', 'Aurangabad'),
(283, 'MH', 'Beed'),
(284, 'MH', 'Bhandara'),
(285, 'MH', 'Buldhana'),
(286, 'MH', 'Chandrapur'),
(287, 'MH', 'Dhule'),
(288, 'MH', 'Gadchiroli'),
(289, 'ML', 'East Garo Hills'),
(290, 'ML', 'North Garo Hills'),
(291, 'ML', 'South Garo Hills'),
(292, 'ML', 'West Garo Hills'),
(293, 'ML', 'South West Garo Hills'),
(294, 'ML', 'East Khasi Hills'),
(295, 'ML', 'West Jaintia Hills'),
(296, 'ML', 'East Jaintia Hills'),
(297, 'ML', 'South West Khasi Hills'),
(298, 'ML', 'West Khasi Hills'),
(299, 'ML', 'Eastern West Khasi Hills'),
(300, 'ML', 'Ri‑Bhoi'),
(301, 'MZ', 'Aizawl'),
(302, 'MZ', 'Lunglei'),
(303, 'MZ', 'Champhai'),
(304, 'MZ', 'Lawngtlai'),
(305, 'MZ', 'Mamit'),
(306, 'MZ', 'Kolasib'),
(307, 'MZ', 'Serchhip'),
(308, 'MZ', 'Saiha'),
(309, 'NL', 'Chümoukedima'),
(310, 'NL', 'Dimapur'),
(311, 'NL', 'Kiphire'),
(312, 'NL', 'Kohima'),
(313, 'NL', 'Longleng'),
(314, 'NL', 'Meluri'),
(315, 'NL', 'Mokokchung'),
(316, 'NL', 'Mon'),
(317, 'NL', 'Niuland'),
(318, 'NL', 'Noklak'),
(319, 'NL', 'Peren'),
(320, 'NL', 'Phek'),
(321, 'NL', 'Shamator'),
(322, 'NL', 'Tseminyü'),
(323, 'NL', 'Tuensang'),
(324, 'NL', 'Wokha'),
(325, 'NL', 'Zünheboto'),
(326, 'OR', 'Angul'),
(327, 'OR', 'Boudh'),
(328, 'OR', 'Balangir'),
(329, 'OR', 'Bargarh'),
(330, 'OR', 'Balasore'),
(331, 'OR', 'Bhadrak'),
(332, 'OR', 'Cuttack'),
(333, 'OR', 'Deogarh'),
(334, 'OR', 'Dhenkanal'),
(335, 'OR', 'Ganjam'),
(336, 'OR', 'Gajapati'),
(337, 'OR', 'Jharsuguda'),
(338, 'OR', 'Jajpur'),
(339, 'OR', 'Jagatsinghapur'),
(340, 'OR', 'Khordha'),
(341, 'OR', 'Keonjhar'),
(342, 'OR', 'Kalahandi'),
(343, 'OR', 'Kandhamal'),
(344, 'OR', 'Koraput'),
(345, 'OR', 'Kendrapara'),
(346, 'OR', 'Malkangiri'),
(347, 'OR', 'Mayurbhanj'),
(348, 'OR', 'Nabarangpur'),
(349, 'OR', 'Nuapada'),
(350, 'OR', 'Nayagarh'),
(351, 'OR', 'Puri'),
(352, 'OR', 'Rayagada'),
(353, 'OR', 'Sambalpur'),
(354, 'OR', 'Subarnapur'),
(355, 'OR', 'Sundargarh'),
(356, 'PY', 'Puducherry'),
(357, 'PY', 'Karaikal'),
(358, 'PY', 'Yanam'),
(359, 'PY', 'Mahe'),
(360, 'PB', 'Amritsar'),
(361, 'PB', 'Barnala'),
(362, 'PB', 'Bathinda'),
(363, 'PB', 'Faridkot'),
(364, 'PB', 'Fatehgarh Sahib'),
(365, 'PB', 'Firozpur'),
(366, 'PB', 'Fazilka'),
(367, 'PB', 'Gurdaspur'),
(368, 'PB', 'Hoshiarpur'),
(369, 'PB', 'Jalandhar'),
(370, 'PB', 'Kapurthala'),
(371, 'PB', 'Ludhiana'),
(372, 'PB', 'Mansa'),
(373, 'PB', 'Moga'),
(374, 'PB', 'Sri Muktsar Sahib'),
(375, 'PB', 'Pathankot'),
(376, 'PB', 'Patiala'),
(377, 'PB', 'Rupnagar'),
(378, 'PB', 'Sahibzada Ajit Singh Nagar'),
(379, 'PB', 'Sangrur'),
(380, 'PB', 'Shahid Bhagat Singh Nagar'),
(381, 'PB', 'Tarn Taran'),
(382, 'RJ', 'Ajmer'),
(383, 'RJ', 'Alwar'),
(384, 'RJ', 'Banswara'),
(385, 'RJ', 'Baran'),
(386, 'RJ', 'Barmer'),
(387, 'RJ', 'Bharatpur'),
(388, 'RJ', 'Bhilwara'),
(389, 'RJ', 'Bikaner'),
(390, 'RJ', 'Bundi'),
(391, 'RJ', 'Chittorgarh'),
(392, 'RJ', 'Churu'),
(393, 'RJ', 'Dausa'),
(394, 'RJ', 'Dholpur'),
(395, 'RJ', 'Dungarpur'),
(396, 'RJ', 'Hanumangarh'),
(397, 'RJ', 'Jaipur'),
(398, 'RJ', 'Jaisalmer'),
(399, 'RJ', 'Jalore'),
(400, 'RJ', 'Jhalawar'),
(401, 'RJ', 'Jhunjhunu'),
(402, 'RJ', 'Jodhpur'),
(403, 'RJ', 'Karauli'),
(404, 'RJ', 'Kota'),
(405, 'RJ', 'Nagaur'),
(406, 'RJ', 'Pali'),
(407, 'RJ', 'Pratapgarh'),
(408, 'RJ', 'Rajsamand'),
(409, 'RJ', 'Sawai Madhopur'),
(410, 'RJ', 'Sikar'),
(411, 'RJ', 'Sirohi'),
(412, 'RJ', 'Sri Ganganagar'),
(413, 'RJ', 'Tonk'),
(414, 'RJ', 'Udaipur'),
(415, 'RJ', 'Jodhpur Gramin'),
(416, 'SK', 'East Sikkim'),
(417, 'SK', 'North Sikkim'),
(418, 'SK', 'South Sikkim'),
(419, 'SK', 'West Sikkim'),
(420, 'SK', 'Pakyong'),
(421, 'SK', 'Soreng'),
(422, 'TN', 'Ariyalur'),
(423, 'TN', 'Chengalpattu'),
(424, 'TN', 'Chennai'),
(425, 'TN', 'Coimbatore'),
(426, 'TN', 'Cuddalore'),
(427, 'TN', 'Dharmapuri'),
(428, 'TN', 'Dindigul'),
(429, 'TN', 'Erode'),
(430, 'TN', 'Kallakurichi'),
(431, 'TN', 'Kanchipuram'),
(432, 'TN', 'Kanyakumari'),
(433, 'TN', 'Karur'),
(434, 'TN', 'Krishnagiri'),
(435, 'TN', 'Madurai'),
(436, 'TN', 'Nagapattinam'),
(437, 'TN', 'Namakkal'),
(438, 'TN', 'Nilgiris'),
(439, 'TN', 'Perambalur'),
(440, 'TN', 'Pudukkottai'),
(441, 'TN', 'Ramanathapuram'),
(442, 'TN', 'Ranipet'),
(443, 'TN', 'Salem'),
(444, 'TN', 'Sivaganga'),
(445, 'TN', 'Tenkasi'),
(446, 'TN', 'Thanjavur'),
(447, 'TN', 'Theni'),
(448, 'TN', 'Thoothukudi'),
(449, 'TN', 'Tiruchirappalli'),
(450, 'TN', 'Tirunelveli'),
(451, 'TN', 'Tiruppur'),
(452, 'TN', 'Tiruvallur'),
(453, 'TN', 'Tiruvarur'),
(454, 'TN', 'Vellore'),
(455, 'TN', 'Viluppuram'),
(456, 'TN', 'Virudhunagar'),
(457, 'TN', 'Chengalpattu'),
(458, 'TN', 'Kallakurichi'),
(459, 'TS', 'Adilabad'),
(460, 'TS', 'Bhadradri Kothagudem'),
(461, 'TS', 'Hyderabad'),
(462, 'TS', 'Jagitial'),
(463, 'TS', 'Jangaon'),
(464, 'TS', 'Jayashankar Bhupalapally'),
(465, 'TS', 'Jogulamba Gadwal'),
(466, 'TS', 'Kamareddy'),
(467, 'TS', 'Karimnagar'),
(468, 'TS', 'Khammam'),
(469, 'TS', 'Komaram Bheem'),
(470, 'TS', 'Mahabubabad'),
(471, 'TS', 'Mahbubnagar'),
(472, 'TS', 'Mancherial'),
(473, 'TS', 'Medak'),
(474, 'TS', 'Medchal-Malkajgiri'),
(475, 'TS', 'Mulugu'),
(476, 'TS', 'Nagarkurnool'),
(477, 'TS', 'Nalgonda'),
(478, 'TS', 'Narayanpet'),
(479, 'TS', 'Nirmal'),
(480, 'TS', 'Nizamabad'),
(481, 'TS', 'Peddapalli'),
(482, 'TS', 'Rajanna Sircilla'),
(483, 'TS', 'Rangareddy'),
(484, 'TS', 'Sangareddy'),
(485, 'TS', 'Siddipet'),
(486, 'TS', 'Suryapet'),
(487, 'TS', 'Vikarabad'),
(488, 'TS', 'Wanaparthy'),
(489, 'TS', 'Warangal Rural'),
(490, 'TS', 'Warangal Urban'),
(491, 'TS', 'Yadadri Bhuvanagiri'),
(492, 'TR', 'Dhalai'),
(493, 'TR', 'Gomati'),
(494, 'TR', 'Khowai'),
(495, 'TR', 'North Tripura'),
(496, 'TR', 'Sepahijala'),
(497, 'TR', 'South Tripura'),
(498, 'TR', 'Unakoti'),
(499, 'TR', 'West Tripura'),
(500, 'UP', 'Agra'),
(501, 'UP', 'Aligarh'),
(502, 'UP', 'Allahabad'),
(503, 'UP', 'Ambedkar Nagar'),
(504, 'UP', 'Amethi'),
(505, 'UP', 'Amroha'),
(506, 'UP', 'Auraiya'),
(507, 'UP', 'Azamgarh'),
(508, 'UP', 'Baghpat'),
(509, 'UP', 'Bahraich'),
(510, 'UP', 'Ballia'),
(511, 'UP', 'Balrampur'),
(512, 'UP', 'Banda'),
(513, 'UP', 'Barabanki'),
(514, 'UP', 'Bareilly'),
(515, 'UP', 'Basti'),
(516, 'UP', 'Bhadohi'),
(517, 'UP', 'Bijnor'),
(518, 'UP', 'Budaun'),
(519, 'UP', 'Bulandshahr'),
(520, 'UK', 'Almora'),
(521, 'UK', 'Bageshwar'),
(522, 'UK', 'Chamoli'),
(523, 'UK', 'Champawat'),
(524, 'UK', 'Dehradun'),
(525, 'UK', 'Haridwar'),
(526, 'UK', 'Nainital'),
(527, 'UK', 'Pauri Garhwal'),
(528, 'UK', 'Pithoragarh'),
(529, 'UK', 'Rudraprayag'),
(530, 'UK', 'Tehri Garhwal'),
(531, 'UK', 'Udham Singh Nagar'),
(532, 'UK', 'Uttarkashi'),
(533, 'WB', 'Alipurduar'),
(534, 'WB', 'Bankura'),
(535, 'WB', 'Birbhum'),
(536, 'WB', 'Cooch Behar'),
(537, 'WB', 'Dakshin Dinajpur'),
(538, 'WB', 'Darjeeling'),
(539, 'WB', 'Hooghly'),
(540, 'WB', 'Howrah'),
(541, 'WB', 'Jalpaiguri'),
(542, 'WB', 'Jhargram'),
(543, 'WB', 'Kalimpong'),
(544, 'WB', 'Kolkata'),
(545, 'WB', 'Malda'),
(546, 'WB', 'Murshidabad'),
(547, 'WB', 'Nadia'),
(548, 'WB', 'North 24 Parganas'),
(549, 'WB', 'Paschim Bardhaman'),
(550, 'WB', 'Paschim Medinipur'),
(551, 'WB', 'Purba Bardhaman'),
(552, 'WB', 'Purba Medinipur'),
(553, 'WB', 'Purulia'),
(554, 'WB', 'South 24 Parganas'),
(555, 'WB', 'Uttar Dinajpur'),
(556, 'AN', 'Nicobar'),
(557, 'AN', 'North and Middle Andaman'),
(558, 'AN', 'South Andaman'),
(559, 'AP', 'Anantapur'),
(560, 'AP', 'Chittoor'),
(561, 'AP', 'East Godavari'),
(562, 'AP', 'Guntur'),
(563, 'AP', 'Kadapa'),
(564, 'AP', 'Krishna'),
(565, 'AP', 'Kurnool'),
(566, 'AP', 'Nellore'),
(567, 'AP', 'Prakasam'),
(568, 'AP', 'Srikakulam'),
(569, 'AP', 'Visakhapatnam'),
(570, 'AP', 'Vizianagaram'),
(571, 'AP', 'West Godavari'),
(572, 'AP', 'Kakinada'),
(573, 'AP', 'Nandyal'),
(574, 'AP', 'Palnadu'),
(575, 'AP', 'Annamayya'),
(576, 'AP', 'Alluri Sitharama Raju'),
(577, 'AP', 'Bapatla'),
(578, 'AP', 'NTR'),
(579, 'AP', 'Eluru'),
(580, 'AP', 'Sri Sathya Sai'),
(581, 'AP', 'Konaseema'),
(582, 'AP', 'Parvathipuram Manyam'),
(583, 'AP', 'Anakapalli'),
(584, 'AP', 'Kovvuru');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_transaction`
--

CREATE TABLE `pay_transaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0=pending\r\n1=approve\r\n3=reject',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pay_transaction`
--

INSERT INTO `pay_transaction` (`id`, `user_id`, `transaction_id`, `status`, `created_at`) VALUES
(1, 14, 'MT-900233635331722775478', 1, '2024-08-04 12:44:38'),
(2, 13, 'MT-700467384031722775961', 1, '2024-08-04 12:52:41'),
(3, 12, 'MT-686901874681722776244', 1, '2024-08-04 12:57:24'),
(4, 1, 'MT-828974053511722776635', 0, '2024-08-04 13:03:55'),
(5, 1, 'MT-228929388161722776635', 1, '2024-08-04 13:03:55'),
(6, 2, 'MT-910745339501722777038', 1, '2024-08-04 13:10:38'),
(7, 2, 'MT-872519450371722778039', 1, '2024-08-04 13:27:19'),
(8, 3, 'MT-727755948261722778267', 0, '2024-08-04 13:31:07'),
(9, 4, 'MT-146572197001722779185', 0, '2024-08-04 13:46:25'),
(10, 4, 'MT-83392206661722779233', 0, '2024-08-04 13:47:13'),
(11, 4, 'MT-971247900741722779319', 0, '2024-08-04 13:48:39'),
(12, 6, 'MT-89553759091722782428', 1, '2024-08-04 14:40:28'),
(13, 5, 'MT-492555760731722783495', 0, '2024-08-04 14:58:15'),
(14, 5, 'MT-620499082121722783520', 1, '2024-08-04 14:58:40'),
(15, 6, 'MT-219695789291722783539', 0, '2024-08-04 14:58:59'),
(16, 6, 'MT-170734331331722783614', 0, '2024-08-04 15:00:14'),
(17, 5, 'MT-189006180291722783691', 1, '2024-08-04 15:01:31'),
(18, 5, 'MT-699420520521722784556', 0, '2024-08-04 15:15:56'),
(19, 5, 'MT-416648964571722784592', 0, '2024-08-04 15:16:32'),
(20, 5, 'MT-306328477431722841775', 0, '2024-08-05 07:09:35'),
(21, 7, 'MT-28247176491722851419', 0, '2024-08-05 09:50:19'),
(22, 1, 'MT-814968514011726893997', 0, '2024-09-21 04:46:37'),
(23, 12, 'MT-589166292691727353961', 0, '2024-09-26 12:32:41'),
(24, 11, 'MT-53852807921729087885', 0, '2024-10-16 14:11:25'),
(25, 13, 'MT-374470140261729532177', 0, '2024-10-21 17:36:17'),
(26, 13, 'MT-959884036121729532608', 0, '2024-10-21 17:43:28'),
(27, 13, 'MT-77767550201729533823', 0, '2024-10-21 18:03:43'),
(28, 13, 'MT-288499866811730828593', 0, '2024-11-05 17:43:13'),
(29, 14, 'MT-19178299661732512010', 0, '2024-11-25 05:20:10'),
(30, 0, 'MT-402541092611739187052', 0, '2025-02-10 11:30:52'),
(31, 13, 'MT-987274558151741369148', 0, '2025-03-07 17:39:08'),
(32, 13, 'MT-507531270921741369153', 0, '2025-03-07 17:39:14'),
(33, 13, 'MT-770535268601741369188', 0, '2025-03-07 17:39:48'),
(34, 13, 'MT-204791358251741369203', 0, '2025-03-07 17:40:03'),
(35, 13, 'MT-175389413211741369217', 0, '2025-03-07 17:40:17'),
(36, 13, 'MT-923130478751741369498', 0, '2025-03-07 17:44:58'),
(37, 13, 'MT-959560690331741369797', 0, '2025-03-07 17:49:57'),
(38, 13, 'MT-643070571941741600374', 0, '2025-03-10 09:52:54'),
(39, 13, 'MT-346409793031741600387', 0, '2025-03-10 09:53:07'),
(40, 15, 'MT-944069996841741777647', 0, '2025-03-12 11:07:27'),
(41, 15, 'MT-93955641031741777658', 0, '2025-03-12 11:07:38'),
(42, 16, 'MT-755925814691742361502', 0, '2025-03-19 05:18:22'),
(43, 17, 'MT-918425965831742710638', 0, '2025-03-23 06:17:18'),
(44, 0, 'MT-485990436861744485782', 0, '2025-04-12 19:23:02'),
(45, 3, 'MT-369484272161744614431', 0, '2025-04-14 07:07:11'),
(46, 3, 'MT-124336318111744614434', 0, '2025-04-14 07:07:14'),
(47, 2, 'MT-38965366911744712058', 0, '2025-04-15 10:14:18'),
(48, 0, 'MT-686770075551746858012', 0, '2025-05-10 06:20:12'),
(49, 2, 'MT-51812835231746890609', 0, '2025-05-10 15:23:29'),
(50, 2, 'MT-597389355771747461751', 0, '2025-05-17 06:02:31'),
(51, 2, 'MT-177364859701748100854', 0, '2025-05-24 15:34:14'),
(52, 7, 'MT-682047711941748452433', 0, '2025-05-28 17:13:53'),
(53, 0, 'MT-982504579951749205458', 0, '2025-06-06 10:24:18'),
(54, 2, 'MT-732934251121750666783', 0, '2025-06-23 08:19:43'),
(55, 2, 'MT-763788126171751040069', 0, '2025-06-27 16:01:09'),
(56, 2, 'MT-472333433491751374447', 0, '2025-07-01 12:54:07'),
(57, 2, 'MT-732565888781751374450', 0, '2025-07-01 12:54:10'),
(58, 2, 'MT-321595566301751374460', 0, '2025-07-01 12:54:20'),
(59, 2, 'MT-956338998651751655994', 0, '2025-07-04 19:06:34'),
(60, 13, 'MT-613683464301751991974', 0, '2025-07-08 16:26:14'),
(61, 14, 'MT-862790870041753712277', 0, '2025-07-28 14:17:57'),
(62, 14, 'MT-453169960841753712413', 0, '2025-07-28 14:20:13'),
(63, 14, 'MT-70037964931753712448', 0, '2025-07-28 14:20:48'),
(64, 15, 'MT-667134868681753808376', 0, '2025-07-29 16:59:36'),
(65, 16, 'MT-717601264641754030291', 0, '2025-08-01 06:38:11'),
(66, 16, 'MT-981189850691754030301', 0, '2025-08-01 06:38:21'),
(67, 16, 'MT-341026470791754030326', 0, '2025-08-01 06:38:46'),
(68, 16, 'MT-362596912591754374742', 0, '2025-08-05 06:19:04'),
(69, 13, 'MT-576340427271754404800', 0, '2025-08-05 14:40:02'),
(70, 0, 'MT-842324577051754698008', 0, '2025-08-09 00:06:48'),
(71, 17, 'MT-46575493711755080363', 0, '2025-08-13 10:19:23'),
(72, 16, 'MT-684161230701755088423', 0, '2025-08-13 12:33:43'),
(73, 13, 'MT-198422036581755092425', 0, '2025-08-13 13:40:25'),
(74, 16, 'MT-218684269511755098101', 0, '2025-08-13 15:15:01'),
(75, 13, 'MT-194816572081755536423', 0, '2025-08-18 17:00:23'),
(76, 13, 'MT-491521977301755537931', 0, '2025-08-18 17:25:31'),
(77, 1, 'MT-995923356901755538049', 0, '2025-08-18 17:27:29'),
(78, 1, 'MT-566531118791755538074', 0, '2025-08-18 17:27:54'),
(79, 1, 'MT-912570758791755538262', 0, '2025-08-18 17:31:02'),
(80, 1, 'MT-126704182821755538339', 0, '2025-08-18 17:32:19'),
(81, 1, 'MT-25653483001755538418', 0, '2025-08-18 17:33:38'),
(82, 1, 'MT-879925526081755538594', 0, '2025-08-18 17:36:34'),
(83, 1, 'MT-913684791131755539360', 0, '2025-08-18 17:49:20'),
(84, 1, 'MT-934431219781755540399', 0, '2025-08-18 18:06:39'),
(85, 1, 'MT-193275729511756144092', 0, '2025-08-25 17:48:13'),
(86, 1, 'MT-681832783551756144328', 0, '2025-08-25 17:52:08'),
(87, 1, 'MT-206829266101756144359', 0, '2025-08-25 17:52:39'),
(88, 1, 'MT-748629922241756144399', 0, '2025-08-25 17:53:19'),
(89, 1, 'MT-786502991061756144872', 0, '2025-08-25 18:01:12'),
(90, 1, 'MT-146844312051756656324', 0, '2025-08-31 16:05:24'),
(91, 1, 'MT-444808229211756656377', 0, '2025-08-31 16:06:17'),
(92, 1, 'MT-759295923281756656403', 0, '2025-08-31 16:06:43'),
(93, 1, 'MT-409885307911756661741', 0, '2025-08-31 17:35:41'),
(94, 1, 'MT-175848424211756662559', 0, '2025-08-31 17:49:19'),
(95, 2, 'MT-376678600771756984806', 0, '2025-09-04 11:20:06'),
(96, 2, 'MT-181934145421756984915', 0, '2025-09-04 11:21:55'),
(97, 1, 'MT-988772513561757003458', 0, '2025-09-04 16:30:58'),
(98, 3, 'MT-910197476781757003769', 1, '2025-09-04 16:36:09'),
(99, 4, 'MT-93586144081757005543', 0, '2025-09-04 17:05:43'),
(100, 4, 'MT-473535296441757005583', 1, '2025-09-04 17:06:23'),
(101, 6, 'MT-720871685631757006612', 0, '2025-09-04 17:23:32'),
(102, 6, 'MT-560593949931757006664', 1, '2025-09-04 17:24:24'),
(103, 7, 'MT-470179451591757006830', 1, '2025-09-04 17:27:10'),
(104, 9, 'MT-193654299911757007320', 1, '2025-09-04 17:35:20'),
(105, 0, 'MT-394239404121757007325', 0, '2025-09-04 17:35:25'),
(106, 13, 'MT-871059609431757946088', 0, '2025-09-15 14:21:28'),
(107, 10, 'MT-47176082241758698715', 0, '2025-09-24 07:25:15'),
(108, 10, 'MT-221788959121758698819', 0, '2025-09-24 07:26:59'),
(109, 10, 'MT-250700184811758698820', 0, '2025-09-24 07:27:00'),
(110, 10, 'MT-838578561891758698823', 0, '2025-09-24 07:27:03'),
(111, 10, 'MT-103529353991758698948', 0, '2025-09-24 07:29:08'),
(112, 14, 'MT-664916397511758864411', 0, '2025-09-26 05:26:51'),
(113, 0, 'MT-777296741921759488641', 0, '2025-10-03 10:50:41'),
(114, 17, 'MT-196182291601759662266', 1, '2025-10-05 11:04:26'),
(115, 17, 'MT-844963629001759663813', 0, '2025-10-05 11:30:13'),
(116, 14, 'MT-985192877201759730605', 1, '2025-10-06 06:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `category_id` varchar(200) NOT NULL,
  `city_id` int(3) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` float(10,2) NOT NULL,
  `sale_price` float(10,2) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `discount_id` int(5) NOT NULL,
  `description` text NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `vendor_id` int(10) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `youtube_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GBhlZDZk6RcUipIgIYRVIyi1KKgFtEQ9s9j7U21B', NULL, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazVnZjNtczVTbXh2cUlUTmVjMm10QThKeUZTSVRhYTBGRXBWSXV3QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Qvc2hvcGVyY2l0eS1hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1760870617),
('XtCYOzfwlbCyWbyIRJ5CkOjss7AKC6Nx3Lz4HEr9', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkZUNVRRSk83MHR3SEs4Z1picTI4SGliZ0dESzlZdDRZSGl3UVZSQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1760871183);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(5) NOT NULL,
  `state_code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_code`, `name`) VALUES
(2, 'AN', 'Andaman and Nicobar Islands'),
(3, 'AP', 'Andhra Pradesh'),
(4, 'AR', 'Arunachal Pradesh'),
(5, 'AS', 'Assam'),
(6, 'BR', 'Bihar'),
(7, 'CG', 'Chandigarh'),
(8, 'CH', 'Chhattisgarh'),
(9, 'DN', 'Dadra and Nagar Haveli'),
(10, 'DD', 'Daman and Diu'),
(11, 'DL', 'Delhi'),
(12, 'GA', 'Goa'),
(13, 'GJ', 'Gujarat'),
(14, 'HR', 'Haryana'),
(15, 'HP', 'Himachal Pradesh'),
(16, 'JK', 'Jammu and Kashmir'),
(17, 'JH', 'Jharkhand'),
(18, 'KA', 'Karnataka'),
(19, 'KL', 'Kerala'),
(20, 'LA', 'Ladakh'),
(21, 'LD', 'Lakshadweep'),
(22, 'MP', 'Madhya Pradesh'),
(23, 'MH', 'Maharashtra'),
(24, 'MN', 'Manipur'),
(25, 'ML', 'Meghalaya'),
(26, 'MZ', 'Mizoram'),
(27, 'NL', 'Nagaland'),
(28, 'OR', 'Odisha'),
(29, 'PY', 'Puducherry'),
(30, 'PB', 'Punjab'),
(31, 'RJ', 'Rajasthan'),
(32, 'SK', 'Sikkim'),
(33, 'TN', 'Tamil Nadu'),
(34, 'TS', 'Telangana'),
(35, 'TR', 'Tripura'),
(36, 'UP', 'Uttar Pradesh'),
(37, 'UK', 'Uttarakhand'),
(38, 'WB', 'West Bengal'),
(2, 'AN', 'Andaman and Nicobar Islands'),
(3, 'AP', 'Andhra Pradesh'),
(4, 'AR', 'Arunachal Pradesh'),
(5, 'AS', 'Assam'),
(6, 'BR', 'Bihar'),
(7, 'CG', 'Chandigarh'),
(8, 'CH', 'Chhattisgarh'),
(9, 'DN', 'Dadra and Nagar Haveli'),
(10, 'DD', 'Daman and Diu'),
(11, 'DL', 'Delhi'),
(12, 'GA', 'Goa'),
(13, 'GJ', 'Gujarat'),
(14, 'HR', 'Haryana'),
(15, 'HP', 'Himachal Pradesh'),
(16, 'JK', 'Jammu and Kashmir'),
(17, 'JH', 'Jharkhand'),
(18, 'KA', 'Karnataka'),
(19, 'KL', 'Kerala'),
(20, 'LA', 'Ladakh'),
(21, 'LD', 'Lakshadweep'),
(22, 'MP', 'Madhya Pradesh'),
(23, 'MH', 'Maharashtra'),
(24, 'MN', 'Manipur'),
(25, 'ML', 'Meghalaya'),
(26, 'MZ', 'Mizoram'),
(27, 'NL', 'Nagaland'),
(28, 'OR', 'Odisha'),
(29, 'PY', 'Puducherry'),
(30, 'PB', 'Punjab'),
(31, 'RJ', 'Rajasthan'),
(32, 'SK', 'Sikkim'),
(33, 'TN', 'Tamil Nadu'),
(34, 'TS', 'Telangana'),
(35, 'TR', 'Tripura'),
(36, 'UP', 'Uttar Pradesh'),
(37, 'UK', 'Uttarakhand'),
(38, 'WB', 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `month` int(4) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending\r\n1=confirm\r\n2=reject',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `order_id`, `user_id`, `balance`, `transaction_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'MT-560593949931757006664', 6, '2000', NULL, 0, '2025-09-04 17:24:49', '2025-09-04 17:24:49'),
(4, 'MT-560593949931757006664', 1, '500', NULL, 0, '2025-09-04 17:24:49', '2025-09-04 17:24:49'),
(5, 'MT-470179451591757006830', 7, '2000', NULL, 0, '2025-09-04 17:28:18', '2025-09-04 17:28:18'),
(6, 'MT-470179451591757006830', 6, '500', NULL, 0, '2025-09-04 17:28:18', '2025-09-04 17:28:18'),
(7, 'MT-470179451591757006830', 1, '200', NULL, 0, '2025-09-04 17:28:18', '2025-09-04 17:28:18'),
(8, 'MT-193654299911757007320', 9, '2000', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(9, 'MT-193654299911757007320', 7, '500', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(10, 'MT-193654299911757007320', 6, '200', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(11, 'MT-193654299911757007320', 1, '200', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(12, 'MT-196182291601759662266', 17, '2000', NULL, 0, '2025-10-05 11:05:41', '2025-10-05 11:05:41'),
(13, 'MT-196182291601759662266', 6, '500', NULL, 0, '2025-10-05 11:05:41', '2025-10-05 11:05:41'),
(14, 'MT-196182291601759662266', 1, '200', NULL, 0, '2025-10-05 11:05:41', '2025-10-05 11:05:41'),
(15, 'MT-985192877201759730605', 14, '2000', NULL, 0, '2025-10-06 06:04:18', '2025-10-06 06:04:18'),
(16, 'MT-985192877201759730605', 6, '500', NULL, 0, '2025-10-06 06:04:18', '2025-10-06 06:04:18'),
(17, 'MT-985192877201759730605', 1, '200', NULL, 0, '2025-10-06 06:04:18', '2025-10-06 06:04:18'),
(3, 'MT-560593949931757006664', 6, '2000', NULL, 0, '2025-09-04 17:24:49', '2025-09-04 17:24:49'),
(4, 'MT-560593949931757006664', 1, '500', NULL, 0, '2025-09-04 17:24:49', '2025-09-04 17:24:49'),
(5, 'MT-470179451591757006830', 7, '2000', NULL, 0, '2025-09-04 17:28:18', '2025-09-04 17:28:18'),
(6, 'MT-470179451591757006830', 6, '500', NULL, 0, '2025-09-04 17:28:18', '2025-09-04 17:28:18'),
(7, 'MT-470179451591757006830', 1, '200', NULL, 0, '2025-09-04 17:28:18', '2025-09-04 17:28:18'),
(8, 'MT-193654299911757007320', 9, '2000', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(9, 'MT-193654299911757007320', 7, '500', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(10, 'MT-193654299911757007320', 6, '200', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(11, 'MT-193654299911757007320', 1, '200', NULL, 0, '2025-09-04 17:35:49', '2025-09-04 17:35:49'),
(12, 'MT-196182291601759662266', 17, '2000', NULL, 0, '2025-10-05 11:05:41', '2025-10-05 11:05:41'),
(13, 'MT-196182291601759662266', 6, '500', NULL, 0, '2025-10-05 11:05:41', '2025-10-05 11:05:41'),
(14, 'MT-196182291601759662266', 1, '200', NULL, 0, '2025-10-05 11:05:41', '2025-10-05 11:05:41'),
(15, 'MT-985192877201759730605', 14, '2000', NULL, 0, '2025-10-06 06:04:18', '2025-10-06 06:04:18'),
(16, 'MT-985192877201759730605', 6, '500', NULL, 0, '2025-10-06 06:04:18', '2025-10-06 06:04:18'),
(17, 'MT-985192877201759730605', 1, '200', NULL, 0, '2025-10-06 06:04:18', '2025-10-06 06:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `status`, `created_by`, `modified_by`) VALUES
(1, 'Admin', 'chintan@shopercity.com', '123', 1, 1, '2020-12-10', NULL),
(2, 'Admin', 'marketing@shopercity.com', '123', 1, 1, '2020-12-10', NULL),
(1, 'Admin', 'chintan@shopercity.com', '123', 1, 1, '2020-12-10', NULL),
(2, 'Admin', 'marketing@shopercity.com', '123', 1, 1, '2020-12-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `referral_id` int(11) DEFAULT NULL,
  `upline_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `aadhar_number` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=active, 1=banned',
  `balance` bigint(20) NOT NULL DEFAULT 0,
  `withdraw_total` bigint(20) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `otp` varchar(6) DEFAULT NULL,
  `otp_expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(5) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `store_name` varchar(200) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city_id` varchar(255) DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `state_id` int(5) DEFAULT NULL,
  `country_id` int(5) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `lat` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `plan_id` int(5) DEFAULT NULL,
  `desc_1` text DEFAULT NULL,
  `desc_2` text DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `delivery_status` int(11) NOT NULL DEFAULT 0,
  `created_by` date DEFAULT NULL,
  `modified_by` date DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT 0 COMMENT '0=pending\r\n1=reject\r\n2=approve\r\n3=delete',
  `reason` text DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `starting_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `user_id`, `category_id`, `name`, `store_name`, `contact`, `email`, `username`, `password`, `street`, `city_id`, `district`, `state_id`, `country_id`, `zipcode`, `lat`, `longitude`, `plan_id`, `desc_1`, `desc_2`, `discount_id`, `delivery_status`, `created_by`, `modified_by`, `image`, `banner`, `status`, `reason`, `youtube_link`, `starting_date`, `end_date`) VALUES
(2, 6, 22, 'Bhavin bhai Khambhala', 'Gir Honey', '9714762576', 'girhoney123@gmail.com', NULL, NULL, ' Veraval railway station platform number 1 one station one product shop', 'Veraval', 'Gir Somnath', 13, 1, '362265', NULL, NULL, 0, '<p>FLAT 28% OFF ON PURE & NATURAL HONEY</p><p><span style=\"font-size: 1rem;\">No conditions – offer valid on all honey packs.</span></p><p>100% Pure • Healthy • Delicious</p><p>Limited Time Offer – Don’t Miss Out!</p><p><br></p>', '<p>WE ARE PROUD MANUFACTURERS OF PURE AND NATURAL RAW HONEY</p><p>Directly sourced from the lush forests of the Gir region.</p><p>Our honey is unprocessed, chemical-free, and rich in natural nutrients, ensuring you enjoy the authentic taste and health benefits of nature.</p><p>WHY CHOOSE OUR RAW HONEY</p><p>Harvested from the Gir forest region, known for its rich biodiversity.</p><p>100% Pure & Natural – No added sugar, no preservatives, no artificial flavor.</p><p>Packed with enzymes, antioxidants, and minerals that boost immunity and overall wellness.</p><p>Sustainably collected to support bee health and maintain ecological balance.</p><p>Thick, aromatic, and naturally sweet – perfect for daily consumption, skincare, and home remedies.</p>', 35, 1, '2025-09-10', '2025-09-27', 'Shopercity-1757794717.jpg', 'Shopercity-1757794717.jpg', 2, 'Ok', NULL, '2025-09-10', '2026-09-10'),
(3, 6, 12, 'Vijay R. Bhagnani', 'Sitaram Taxi Service', '9426169501', 'sitaramtaxiservice@gmail.com', NULL, NULL, ' Jay Siyaram, Dwarkadhish Residency, Block No. 16, Behind Sai Baba Temple,', 'Veraval', '', 13, 1, '362265', NULL, NULL, 0, '<p>DISCOUNT OFFERS</p><p>5% Discount – One Day Trip</p><p>10% Discount – More than 2 Day Trip</p><p>10% Discount – Booking via App/Reference</p><p>BOOKING RULE</p><p>First car deposit, then booking confirmation</p><p>SPECIAL DISCOUNT</p><p>Available during festival dates (Gir Somnath region)</p>', '<p>SITARAM TAXI SERVICE</p><p>We provide reliable and comfortable taxi services for local, outstation and all India trips. Our cars are well maintained, equipped with modern facilities and driven by experienced drivers who also guide you throughout your journey.</p><p>SERVICE LOCATIONS</p><p>Somnath</p><p>Dwarka</p><p>Diu</p><p>Gir Forest</p><p>Junagadh</p><p>All India Trips</p><p>ADDITIONAL SERVICES</p><p>Airport Pick Up And Drop</p><p>Driver With Guide</p><p>Wi Fi Available In All Cars</p><p>TOUR OPTIONS</p><p>Tirth Yatra</p><p>Family Tour</p><p>Pilgrimage Tour</p><p>Vacation Tours</p><p>AVAILABLE CARS</p><p>Swift Dzire</p><p>Innova</p><p>Ertiga</p><p>Etios</p><p>Tempo Traveller</p><p>SPECIAL FESTIVAL OFFER SHRAVAN MAAS ONLY</p><p>Veraval To Somnath Drop</p><p>Four Seater 500</p><p>Six Seater 700</p><p>Seven Seater 1000</p><p>CONTACT FOR BOOKING AND INQUIRY</p><p>Name Vijay R Bhagnani</p><p>Business Name Sitaram Taxi Service</p><p>Mobile 91 </p><p>94261 69501   91 90331 47265</p><p>Email sitaramtaxiservice@gmail.com</p>', 37, 1, '2025-09-10', '2025-09-27', 'Shopercity-1758466885.jpg', 'Shopercity-1758466885.jpg', 2, 'Ok', NULL, '2025-09-10', '2026-09-10'),
(4, 6, 9, 'Karan Bhai Solanki', 'Hotel Imperial Wood (Bapu Ni Khichdi)', '8758725025', 'Impirialwood@gmail.com', NULL, NULL, 'Veraval Somnath Highway, At. Bhalpara', 'Veraval', 'Gir Somnath', 13, 1, '362268', NULL, NULL, 0, '<p>DISCOUNT SLABS</p><p><font color=\"#21104a\">• Bill up to 1000 – Get 5% Discount</font></p><p><font color=\"#21104a\">• Bill up to 2000 – Get 10% Discount</font></p><p><font color=\"#21104a\">• Bill up to 3000 – Get 15% Discount</font></p><p>TERMS & CONDITIONS:</p><p>• Discounts applicable on total bill value</p><p>• Offer valid for 1 year from the date of purchase</p><p>• Cannot be combined with other promotional offers</p>', '<p>OUR SPECIALTIES</p><p>At our restaurant, we serve a wide range of authentic dishes prepared with love, tradition, and fresh ingredients. Explore our specialties:</p><p>KATHIYAVADI DELIGHTS</p><p>Experience the true taste of Saurashtra & Kathiyawad with spicy, flavorful, and wholesome dishes. From traditional curries to rustic breads, every plate reflects the vibrant culture of Gujarat.</p><p>PUNJABI FLAVORS</p><p>Indulge in the richness of North Indian cuisine – creamy gravies, buttery breads, smoky tandoori, and the perfect balance of spices that make Punjabi food a timeless favorite.</p><p>CHINESE TREATS</p><p>Enjoy our Indo-Chinese fusion with sizzling noodles, crispy starters, and aromatic gravies. Perfect for those who love tangy, spicy, and savory flavors in every bite.</p><p>21 TYPES OF KHICHDI</p><p>Yes, you read that right! A unique collection of 21 different varieties of Khichdi, from traditional Gujarati to innovative fusions – light, healthy, and soul-satisfying. A must-try specialty of our kitchen!</p><p>SOUTH INDIAN TASTE</p><p>Relish authentic South Indian cuisine with soft idlis, crispy dosas, fluffy uttapams, and flavorful sambhar. Perfectly spiced and served with fresh chutneys for a wholesome experience.</p>', 34, 1, '2025-09-10', '2025-09-27', 'Shopercity-1758045300.jpg', 'Shopercity-1758045300.jpg', 2, 'Ok', NULL, '2025-09-10', '2026-09-10'),
(5, 6, 17, 'Lakshman Chandanani', 'Krishna Handloom', '9428188022', 'kishnahendloom@gmail.com', NULL, NULL, 'Satta Bazar, Perot Bhajiya Wala delama,', 'Veraval', 'Gir Somnath', 13, 1, '362268', NULL, NULL, 0, '<p>0% to 10% on different products.</p><p>Unique Discounts & Offers</p><p>Discounts are applied per product and vary between 0% and 10% depending on the item and current promotions.</p><p>Discount availability depends on stock and season.</p><p>Discounts cannot be combined with any other special promotions unless explicitly stated.</p><p>For bulk or custom orders, please contact us for a tailored quotation and possible additional discounts.</p>', '<p>WELCOME TO KRISHNA HANDLOOM</p><p>Krishna Handloom is a family-run handloom store owned by Lakshman Chandanani, proudly serving Veraval and nearby communities. We specialise in premium upholstery and home textiles made with care — traditional craftsmanship combined with durable, stylish fabrics for every home.</p><p>At Krishna Handloom we believe quality and comfort go hand in hand. With years of experience in handloom fabrics, our family focuses on creating and sourcing fabrics that bring life to living rooms and bedrooms. From heavy-duty sofa material to elegant wedding bedsheets and soft towel sets, our selection is made for practical use and lasting beauty.</p><p>OUR SPECIALTIES</p><p>Padada And Sofa Fabrics Specialist</p><p>We specialise in strong, attractive fabrics for padadas and sofas — materials chosen for durability, resistance to wear, and attractive textures and patterns suitable for both traditional and modern interiors.</p><p>SOFA COVERS</p><p>Custom and ready-made sofa covers in a variety of sizes and styles to refresh and protect your furniture.</p><p>TOWEL SETS</p><p>Soft, absorbent towel sets ideal for daily use or as thoughtful gifts.</p><p>BEDSHEETS FOR MARRIAGE</p><p>Elegant bedlinen and bedsheet sets tailored for wedding trousseaus — premium fabrics and decorative weaves that make special occasions more memorable.</p><p>PRODUCT DETAILS</p><p>Sofa & Padada Fabrics: Heavy-duty woven and blended fabrics available in multiple patterns, weaves, and color palettes. Ideal for families and commercial spaces seeking long-lasting upholstery.</p><p>SOFA COVERS: Options for single-seaters, two-seaters, three-seaters and sectional sofas. Available in plain, patterned, and jacquard designs. Custom stitching available on request.</p><p>TOWEL SETS: Variety of sizes (hand towel, bath towel, face cloth) in soft cotton and cotton-blend constructions with good absorbency and colorfastness.</p><p>BEDSHEETS & MARRIAGE SETS: Premium cotton and blended bedsheet sets with matching pillow covers and decorative borders — available in both classic and contemporary designs.</p><p>EXPERTISE: Decades of experience in handloom textiles and upholstery fabrics.</p><p>QUALITY MATERIALS: Carefully selected fabrics that balance aesthetics and durability.</p><p>PERSONAL SERVICE: Owner-managed business with attention to detail and customer needs.</p><p>CUSTOMIZATION: Options for custom sizes and stitching for sofa covers and bedsheets.</p>', 38, 1, '2025-09-12', '2025-09-27', 'Shopercity-1757669516.jpg', 'Shopercity-1757669516.jpg', 2, 'Ok', NULL, '2025-09-12', '2026-09-12'),
(6, 6, 17, 'Raj Parmar', 'Krishna Interiors', '9275172317', 'krishnainterior111@gmail.com', NULL, NULL, 'Opp GEB Office, Prakash Complex,', 'Veraval', 'Gir Somnath', 13, 1, '362268', NULL, NULL, 0, '<p>MATTRESSES</p><p>10 to 15 percent off on MRP</p><p>SOFA SETS</p><p>Minimum 15 percent off</p><p>PILLOWS AND COMFORTERS</p><p>5 percent off</p><p><br></p><p>Special Offers: Buy One Get One and Surprise Gifts available on selected occasions</p><p>Discounts are valid only on MRP products</p><p>Offers may vary depending on stock availability</p><p>Discounts are available for a limited period only</p>', '<p>Premium Sofa Sets designed for comfort and style</p><p>Kurlon and Sleepwell branded mattresses with assured quality</p><p>Cushions and pillows in multiple varieties</p><p>Mattress protectors for long-lasting durability</p><p>Comforters and related accessories for complete home furnishing solutions</p>', 34, 1, '2025-09-13', '2025-09-27', 'Shopercity-1757792257.jpg', 'Shopercity-1757792257.jpg', 2, 'Ok', NULL, '2025-09-14', '2026-09-14'),
(7, 6, 9, 'Kasyap Bhai', 'Sagar Pure Veg Multicuisine Restaurant', '9023030617', 'kashu279@gmail.com', NULL, NULL, 'Riddhi Siddhi Complex, S.T. Road,', 'Veraval', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>Get 7% discount on a bill of Rs. 4000</p><p>Get 10% discount on a bill of Rs. 5000 and above</p><p>TERMS</p><p>Applicable only for one bill at a time.</p>', '<p>PUNJABI FOOD</p><p>We bring the authentic taste of Punjab to your plate with a wide variety of rich and flavourful dishes. From creamy gravies and buttery breads to spicy curries and traditional favourites, our Punjabi food is prepared using fresh ingredients and traditional recipes that capture the true essence of North Indian cuisine. Each dish is crafted to deliver comfort, warmth, and unforgettable taste.</p><p>CHINESE FOOD</p><p>Our Chinese menu offers a perfect balance of flavours with a mix of popular and authentic dishes. From crispy starters and noodles to saucy gravies and rice combinations, every item is prepared with care to bring you the best of oriental flavours. Whether you prefer mild or spicy, our Chinese food is designed to satisfy every palate.</p><p>SPECIAL SIZZLERS</p><p>Our sizzlers are a signature specialty designed to give you a unique dining experience. Served hot and fresh, they combine a variety of flavours, vegetables, sauces, and spices on a sizzling platter. Each sizzler is prepared to perfection, offering a blend of aroma, taste, and presentation that leaves a lasting impression.</p>', 36, 1, '2025-09-15', '2025-09-27', 'Shopercity-1758045532.jpg', 'Shopercity-1758045532.jpg', 2, 'Ok', NULL, '2025-09-15', '2026-09-15'),
(8, 6, 24, 'Javed Parmar', 'Unique Massage Parlour', '8469671537', 'javedparmar@123.gmail.com', NULL, NULL, 'B-205, 2nd Floor, Rudraksh Complex, Near Tower Chowk,', 'Veraval', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>We are providing a 10% discount on the full package.</p><p>This discount is available only on the complete package and not on other services.</p>', '<p>AVAILABLE MASSAGE SERVICES</p><p>LEG MASSAGE</p><p>Relax your tired legs with our professional leg massage that improves blood circulation, reduces stiffness, and brings complete comfort.</p><p>BACK MASSAGE</p><p>Experience relief from stress and back pain with our soothing back massage designed to release tension and promote relaxation.</p><p>HEAD MASSAGE</p><p>Calm your mind and rejuvenate your senses with our refreshing head massage that helps reduce stress, anxiety, and headaches.</p><p>ALL TYPES OF MASSAGE</p><p>We provide a variety of massage therapies tailored to your needs, ensuring complete relaxation and wellness.</p>', 39, 1, '2025-09-16', '2025-09-27', 'Shopercity-1758044852.jpg', 'Shopercity-1758044852.jpg', 2, 'Ok', NULL, '2025-09-16', '2026-09-16'),
(9, 10, 9, 'Vasu bhai', 'INARA Multicuisine Restaurant', '9033117722', 'Inararestorent.229@gmail.com', NULL, NULL, '2nd Floor, Above Raymond Showroom, Tower Chowk,', 'Veraval ', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>Regular Discount Offer</p><p>Enjoy special savings on your food bill at Inara Multicuisine Restaurant</p><p>Up to 1000 – Get 5 percent discount</p><p>Up to 2000 – Get 10 percent discount</p><p>Up to 3000 – Get 15 percent discount</p><p>This offer is valid Monday to Friday only</p><p>Offer not valid on Saturday and Sunday</p>', '<p>At Inara Multicuisine Restaurant, we bring together a wide range of flavors from across India and around the world. Our menu is thoughtfully designed to suit every taste and preference. Guests can enjoy the rich and spicy flavors of Punjabi food, the unique taste of authentic Chinese dishes, and the traditional delicacies of South Indian cuisine. We also offer a fine selection of Continental recipes, aromatic and flavorful Thai specialties, as well as wholesome Gujarati dishes that bring a touch of local tradition to your dining experience.</p><p>Whether you are looking for comfort food or an international dining experience, Inara Multicuisine Restaurant has something special for everyone.</p>', 34, 1, '2025-09-27', '2025-09-27', 'Shopercity-1758975097.jpg', 'Shopercity-1758975097.jpg', 2, 'Ok', NULL, '2025-09-27', '2026-09-27'),
(10, 10, 17, 'Pradip bhai Mavdhiya', 'Shivam Enterprises ', '8401734280', 'Shivamenterprises@Gmail.com', NULL, NULL, '11 Prakash Complex , Rajmahal Road ', 'Veraval ', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>Celebrate this festive season with unbeatable deals. Enjoy discounts ranging from 0 percent to 15 percent on a wide range of home appliances. Registered customers can unlock exclusive offers. We have also made it easier to bring home your favorite products with convenient EMI options available through Bajaj Finance and HDB Financial Services.</p><p>These offers are valid for a limited period only.</p><div><br></div>', '<p>Top Appliance Brands:</p><p>Panasonic – Reliable electronics with advanced technology</p><p>IFB – Known for high-performance washing machines and kitchen appliances</p><p>Boss – Trusted provider of home and kitchen solutions</p><p>O General – Premium air conditioning systems</p><p>Ganganam – Quality electronics at competitive prices</p><p>Amstrad – Modern appliances with smart features</p><p>Hisense – Global brand offering value and performance</p><p>Croma (a Tata product) – Wide range of electronics from a trusted Indian brand</p><p><br></p><p>*Available Products:</p><p>LED Televisions – High-definition smart TVs</p><p>Washing Machines – Fully automatic and semi-automatic models</p><p>Refrigerators – Single door, double door, and smart cooling options</p><p>Air Conditioners – Split, window, and inverter models</p><p>Ovens – Microwave and convection ovens for modern kitchens</p><p><br></p>', 41, 1, '2025-10-09', '2025-10-10', 'Shopercity-1760090897.jpg', 'Shopercity-1760090897.jpg', 2, 'Ok', NULL, '2025-10-09', '2026-10-09'),
(2, 6, 22, 'Bhavin bhai Khambhala', 'Gir Honey', '9714762576', 'girhoney123@gmail.com', NULL, NULL, ' Veraval railway station platform number 1 one station one product shop', 'Veraval', 'Gir Somnath', 13, 1, '362265', NULL, NULL, 0, '<p>FLAT 28% OFF ON PURE & NATURAL HONEY</p><p><span style=\"font-size: 1rem;\">No conditions – offer valid on all honey packs.</span></p><p>100% Pure • Healthy • Delicious</p><p>Limited Time Offer – Don’t Miss Out!</p><p><br></p>', '<p>WE ARE PROUD MANUFACTURERS OF PURE AND NATURAL RAW HONEY</p><p>Directly sourced from the lush forests of the Gir region.</p><p>Our honey is unprocessed, chemical-free, and rich in natural nutrients, ensuring you enjoy the authentic taste and health benefits of nature.</p><p>WHY CHOOSE OUR RAW HONEY</p><p>Harvested from the Gir forest region, known for its rich biodiversity.</p><p>100% Pure & Natural – No added sugar, no preservatives, no artificial flavor.</p><p>Packed with enzymes, antioxidants, and minerals that boost immunity and overall wellness.</p><p>Sustainably collected to support bee health and maintain ecological balance.</p><p>Thick, aromatic, and naturally sweet – perfect for daily consumption, skincare, and home remedies.</p>', 35, 1, '2025-09-10', '2025-09-27', 'Shopercity-1757794717.jpg', 'Shopercity-1757794717.jpg', 2, 'Ok', NULL, '2025-09-10', '2026-09-10'),
(3, 6, 12, 'Vijay R. Bhagnani', 'Sitaram Taxi Service', '9426169501', 'sitaramtaxiservice@gmail.com', NULL, NULL, ' Jay Siyaram, Dwarkadhish Residency, Block No. 16, Behind Sai Baba Temple,', 'Veraval', '', 13, 1, '362265', NULL, NULL, 0, '<p>DISCOUNT OFFERS</p><p>5% Discount – One Day Trip</p><p>10% Discount – More than 2 Day Trip</p><p>10% Discount – Booking via App/Reference</p><p>BOOKING RULE</p><p>First car deposit, then booking confirmation</p><p>SPECIAL DISCOUNT</p><p>Available during festival dates (Gir Somnath region)</p>', '<p>SITARAM TAXI SERVICE</p><p>We provide reliable and comfortable taxi services for local, outstation and all India trips. Our cars are well maintained, equipped with modern facilities and driven by experienced drivers who also guide you throughout your journey.</p><p>SERVICE LOCATIONS</p><p>Somnath</p><p>Dwarka</p><p>Diu</p><p>Gir Forest</p><p>Junagadh</p><p>All India Trips</p><p>ADDITIONAL SERVICES</p><p>Airport Pick Up And Drop</p><p>Driver With Guide</p><p>Wi Fi Available In All Cars</p><p>TOUR OPTIONS</p><p>Tirth Yatra</p><p>Family Tour</p><p>Pilgrimage Tour</p><p>Vacation Tours</p><p>AVAILABLE CARS</p><p>Swift Dzire</p><p>Innova</p><p>Ertiga</p><p>Etios</p><p>Tempo Traveller</p><p>SPECIAL FESTIVAL OFFER SHRAVAN MAAS ONLY</p><p>Veraval To Somnath Drop</p><p>Four Seater 500</p><p>Six Seater 700</p><p>Seven Seater 1000</p><p>CONTACT FOR BOOKING AND INQUIRY</p><p>Name Vijay R Bhagnani</p><p>Business Name Sitaram Taxi Service</p><p>Mobile 91 </p><p>94261 69501   91 90331 47265</p><p>Email sitaramtaxiservice@gmail.com</p>', 37, 1, '2025-09-10', '2025-09-27', 'Shopercity-1758466885.jpg', 'Shopercity-1758466885.jpg', 2, 'Ok', NULL, '2025-09-10', '2026-09-10'),
(4, 6, 9, 'Karan Bhai Solanki', 'Hotel Imperial Wood (Bapu Ni Khichdi)', '8758725025', 'Impirialwood@gmail.com', NULL, NULL, 'Veraval Somnath Highway, At. Bhalpara', 'Veraval', 'Gir Somnath', 13, 1, '362268', NULL, NULL, 0, '<p>DISCOUNT SLABS</p><p><font color=\"#21104a\">• Bill up to 1000 – Get 5% Discount</font></p><p><font color=\"#21104a\">• Bill up to 2000 – Get 10% Discount</font></p><p><font color=\"#21104a\">• Bill up to 3000 – Get 15% Discount</font></p><p>TERMS & CONDITIONS:</p><p>• Discounts applicable on total bill value</p><p>• Offer valid for 1 year from the date of purchase</p><p>• Cannot be combined with other promotional offers</p>', '<p>OUR SPECIALTIES</p><p>At our restaurant, we serve a wide range of authentic dishes prepared with love, tradition, and fresh ingredients. Explore our specialties:</p><p>KATHIYAVADI DELIGHTS</p><p>Experience the true taste of Saurashtra & Kathiyawad with spicy, flavorful, and wholesome dishes. From traditional curries to rustic breads, every plate reflects the vibrant culture of Gujarat.</p><p>PUNJABI FLAVORS</p><p>Indulge in the richness of North Indian cuisine – creamy gravies, buttery breads, smoky tandoori, and the perfect balance of spices that make Punjabi food a timeless favorite.</p><p>CHINESE TREATS</p><p>Enjoy our Indo-Chinese fusion with sizzling noodles, crispy starters, and aromatic gravies. Perfect for those who love tangy, spicy, and savory flavors in every bite.</p><p>21 TYPES OF KHICHDI</p><p>Yes, you read that right! A unique collection of 21 different varieties of Khichdi, from traditional Gujarati to innovative fusions – light, healthy, and soul-satisfying. A must-try specialty of our kitchen!</p><p>SOUTH INDIAN TASTE</p><p>Relish authentic South Indian cuisine with soft idlis, crispy dosas, fluffy uttapams, and flavorful sambhar. Perfectly spiced and served with fresh chutneys for a wholesome experience.</p>', 34, 1, '2025-09-10', '2025-09-27', 'Shopercity-1758045300.jpg', 'Shopercity-1758045300.jpg', 2, 'Ok', NULL, '2025-09-10', '2026-09-10'),
(5, 6, 17, 'Lakshman Chandanani', 'Krishna Handloom', '9428188022', 'kishnahendloom@gmail.com', NULL, NULL, 'Satta Bazar, Perot Bhajiya Wala delama,', 'Veraval', 'Gir Somnath', 13, 1, '362268', NULL, NULL, 0, '<p>0% to 10% on different products.</p><p>Unique Discounts & Offers</p><p>Discounts are applied per product and vary between 0% and 10% depending on the item and current promotions.</p><p>Discount availability depends on stock and season.</p><p>Discounts cannot be combined with any other special promotions unless explicitly stated.</p><p>For bulk or custom orders, please contact us for a tailored quotation and possible additional discounts.</p>', '<p>WELCOME TO KRISHNA HANDLOOM</p><p>Krishna Handloom is a family-run handloom store owned by Lakshman Chandanani, proudly serving Veraval and nearby communities. We specialise in premium upholstery and home textiles made with care — traditional craftsmanship combined with durable, stylish fabrics for every home.</p><p>At Krishna Handloom we believe quality and comfort go hand in hand. With years of experience in handloom fabrics, our family focuses on creating and sourcing fabrics that bring life to living rooms and bedrooms. From heavy-duty sofa material to elegant wedding bedsheets and soft towel sets, our selection is made for practical use and lasting beauty.</p><p>OUR SPECIALTIES</p><p>Padada And Sofa Fabrics Specialist</p><p>We specialise in strong, attractive fabrics for padadas and sofas — materials chosen for durability, resistance to wear, and attractive textures and patterns suitable for both traditional and modern interiors.</p><p>SOFA COVERS</p><p>Custom and ready-made sofa covers in a variety of sizes and styles to refresh and protect your furniture.</p><p>TOWEL SETS</p><p>Soft, absorbent towel sets ideal for daily use or as thoughtful gifts.</p><p>BEDSHEETS FOR MARRIAGE</p><p>Elegant bedlinen and bedsheet sets tailored for wedding trousseaus — premium fabrics and decorative weaves that make special occasions more memorable.</p><p>PRODUCT DETAILS</p><p>Sofa & Padada Fabrics: Heavy-duty woven and blended fabrics available in multiple patterns, weaves, and color palettes. Ideal for families and commercial spaces seeking long-lasting upholstery.</p><p>SOFA COVERS: Options for single-seaters, two-seaters, three-seaters and sectional sofas. Available in plain, patterned, and jacquard designs. Custom stitching available on request.</p><p>TOWEL SETS: Variety of sizes (hand towel, bath towel, face cloth) in soft cotton and cotton-blend constructions with good absorbency and colorfastness.</p><p>BEDSHEETS & MARRIAGE SETS: Premium cotton and blended bedsheet sets with matching pillow covers and decorative borders — available in both classic and contemporary designs.</p><p>EXPERTISE: Decades of experience in handloom textiles and upholstery fabrics.</p><p>QUALITY MATERIALS: Carefully selected fabrics that balance aesthetics and durability.</p><p>PERSONAL SERVICE: Owner-managed business with attention to detail and customer needs.</p><p>CUSTOMIZATION: Options for custom sizes and stitching for sofa covers and bedsheets.</p>', 38, 1, '2025-09-12', '2025-09-27', 'Shopercity-1757669516.jpg', 'Shopercity-1757669516.jpg', 2, 'Ok', NULL, '2025-09-12', '2026-09-12'),
(6, 6, 17, 'Raj Parmar', 'Krishna Interiors', '9275172317', 'krishnainterior111@gmail.com', NULL, NULL, 'Opp GEB Office, Prakash Complex,', 'Veraval', 'Gir Somnath', 13, 1, '362268', NULL, NULL, 0, '<p>MATTRESSES</p><p>10 to 15 percent off on MRP</p><p>SOFA SETS</p><p>Minimum 15 percent off</p><p>PILLOWS AND COMFORTERS</p><p>5 percent off</p><p><br></p><p>Special Offers: Buy One Get One and Surprise Gifts available on selected occasions</p><p>Discounts are valid only on MRP products</p><p>Offers may vary depending on stock availability</p><p>Discounts are available for a limited period only</p>', '<p>Premium Sofa Sets designed for comfort and style</p><p>Kurlon and Sleepwell branded mattresses with assured quality</p><p>Cushions and pillows in multiple varieties</p><p>Mattress protectors for long-lasting durability</p><p>Comforters and related accessories for complete home furnishing solutions</p>', 34, 1, '2025-09-13', '2025-09-27', 'Shopercity-1757792257.jpg', 'Shopercity-1757792257.jpg', 2, 'Ok', NULL, '2025-09-14', '2026-09-14'),
(7, 6, 9, 'Kasyap Bhai', 'Sagar Pure Veg Multicuisine Restaurant', '9023030617', 'kashu279@gmail.com', NULL, NULL, 'Riddhi Siddhi Complex, S.T. Road,', 'Veraval', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>Get 7% discount on a bill of Rs. 4000</p><p>Get 10% discount on a bill of Rs. 5000 and above</p><p>TERMS</p><p>Applicable only for one bill at a time.</p>', '<p>PUNJABI FOOD</p><p>We bring the authentic taste of Punjab to your plate with a wide variety of rich and flavourful dishes. From creamy gravies and buttery breads to spicy curries and traditional favourites, our Punjabi food is prepared using fresh ingredients and traditional recipes that capture the true essence of North Indian cuisine. Each dish is crafted to deliver comfort, warmth, and unforgettable taste.</p><p>CHINESE FOOD</p><p>Our Chinese menu offers a perfect balance of flavours with a mix of popular and authentic dishes. From crispy starters and noodles to saucy gravies and rice combinations, every item is prepared with care to bring you the best of oriental flavours. Whether you prefer mild or spicy, our Chinese food is designed to satisfy every palate.</p><p>SPECIAL SIZZLERS</p><p>Our sizzlers are a signature specialty designed to give you a unique dining experience. Served hot and fresh, they combine a variety of flavours, vegetables, sauces, and spices on a sizzling platter. Each sizzler is prepared to perfection, offering a blend of aroma, taste, and presentation that leaves a lasting impression.</p>', 36, 1, '2025-09-15', '2025-09-27', 'Shopercity-1758045532.jpg', 'Shopercity-1758045532.jpg', 2, 'Ok', NULL, '2025-09-15', '2026-09-15'),
(8, 6, 24, 'Javed Parmar', 'Unique Massage Parlour', '8469671537', 'javedparmar@123.gmail.com', NULL, NULL, 'B-205, 2nd Floor, Rudraksh Complex, Near Tower Chowk,', 'Veraval', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>We are providing a 10% discount on the full package.</p><p>This discount is available only on the complete package and not on other services.</p>', '<p>AVAILABLE MASSAGE SERVICES</p><p>LEG MASSAGE</p><p>Relax your tired legs with our professional leg massage that improves blood circulation, reduces stiffness, and brings complete comfort.</p><p>BACK MASSAGE</p><p>Experience relief from stress and back pain with our soothing back massage designed to release tension and promote relaxation.</p><p>HEAD MASSAGE</p><p>Calm your mind and rejuvenate your senses with our refreshing head massage that helps reduce stress, anxiety, and headaches.</p><p>ALL TYPES OF MASSAGE</p><p>We provide a variety of massage therapies tailored to your needs, ensuring complete relaxation and wellness.</p>', 39, 1, '2025-09-16', '2025-09-27', 'Shopercity-1758044852.jpg', 'Shopercity-1758044852.jpg', 2, 'Ok', NULL, '2025-09-16', '2026-09-16'),
(9, 10, 9, 'Vasu bhai', 'INARA Multicuisine Restaurant', '9033117722', 'Inararestorent.229@gmail.com', NULL, NULL, '2nd Floor, Above Raymond Showroom, Tower Chowk,', 'Veraval ', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>Regular Discount Offer</p><p>Enjoy special savings on your food bill at Inara Multicuisine Restaurant</p><p>Up to 1000 – Get 5 percent discount</p><p>Up to 2000 – Get 10 percent discount</p><p>Up to 3000 – Get 15 percent discount</p><p>This offer is valid Monday to Friday only</p><p>Offer not valid on Saturday and Sunday</p>', '<p>At Inara Multicuisine Restaurant, we bring together a wide range of flavors from across India and around the world. Our menu is thoughtfully designed to suit every taste and preference. Guests can enjoy the rich and spicy flavors of Punjabi food, the unique taste of authentic Chinese dishes, and the traditional delicacies of South Indian cuisine. We also offer a fine selection of Continental recipes, aromatic and flavorful Thai specialties, as well as wholesome Gujarati dishes that bring a touch of local tradition to your dining experience.</p><p>Whether you are looking for comfort food or an international dining experience, Inara Multicuisine Restaurant has something special for everyone.</p>', 34, 1, '2025-09-27', '2025-09-27', 'Shopercity-1758975097.jpg', 'Shopercity-1758975097.jpg', 2, 'Ok', NULL, '2025-09-27', '2026-09-27'),
(10, 10, 17, 'Pradip bhai Mavdhiya', 'Shivam Enterprises ', '8401734280', 'Shivamenterprises@Gmail.com', NULL, NULL, '11 Prakash Complex , Rajmahal Road ', 'Veraval ', 'Gir Somnath', 13, 1, '362266', NULL, NULL, 0, '<p>Celebrate this festive season with unbeatable deals. Enjoy discounts ranging from 0 percent to 15 percent on a wide range of home appliances. Registered customers can unlock exclusive offers. We have also made it easier to bring home your favorite products with convenient EMI options available through Bajaj Finance and HDB Financial Services.</p><p>These offers are valid for a limited period only.</p><div><br></div>', '<p>Top Appliance Brands:</p><p>Panasonic – Reliable electronics with advanced technology</p><p>IFB – Known for high-performance washing machines and kitchen appliances</p><p>Boss – Trusted provider of home and kitchen solutions</p><p>O General – Premium air conditioning systems</p><p>Ganganam – Quality electronics at competitive prices</p><p>Amstrad – Modern appliances with smart features</p><p>Hisense – Global brand offering value and performance</p><p>Croma (a Tata product) – Wide range of electronics from a trusted Indian brand</p><p><br></p><p>*Available Products:</p><p>LED Televisions – High-definition smart TVs</p><p>Washing Machines – Fully automatic and semi-automatic models</p><p>Refrigerators – Single door, double door, and smart cooling options</p><p>Air Conditioners – Split, window, and inverter models</p><p>Ovens – Microwave and convection ovens for modern kitchens</p><p><br></p>', 41, 1, '2025-10-09', '2025-10-10', 'Shopercity-1760090897.jpg', 'Shopercity-1760090897.jpg', 2, 'Ok', NULL, '2025-10-09', '2026-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_subscribe`
--

CREATE TABLE `vendor_subscribe` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendor_subscribe`
--

INSERT INTO `vendor_subscribe` (`id`, `user_id`, `plan_id`, `start_date`, `end_date`) VALUES
(1, 1, 0, '2025-06-02', '1970-01-01'),
(2, 1, 0, '2025-06-02', '1970-01-01'),
(3, 2, 0, '2025-09-27', '1970-01-01'),
(4, 3, 0, '2025-09-27', '1970-01-01'),
(5, 4, 0, '2025-09-27', '1970-01-01'),
(6, 5, 0, '2025-09-27', '1970-01-01'),
(7, 6, 0, '2025-09-27', '1970-01-01'),
(8, 7, 0, '2025-09-27', '1970-01-01'),
(9, 8, 0, '2025-09-27', '1970-01-01'),
(10, 9, 0, '2025-09-27', '1970-01-01'),
(11, 10, 0, '2025-10-10', '1970-01-01'),
(12, 11, 0, '2024-07-26', '1970-01-01'),
(13, 12, 0, '2024-08-05', '1970-01-01'),
(14, 13, 0, '2024-09-21', '1970-01-01'),
(15, 14, 0, '2025-07-07', '1970-01-01'),
(16, 15, 0, '2025-08-17', '1970-01-01'),
(1, 1, 0, '2025-06-02', '1970-01-01'),
(2, 1, 0, '2025-06-02', '1970-01-01'),
(3, 2, 0, '2025-09-27', '1970-01-01'),
(4, 3, 0, '2025-09-27', '1970-01-01'),
(5, 4, 0, '2025-09-27', '1970-01-01'),
(6, 5, 0, '2025-09-27', '1970-01-01'),
(7, 6, 0, '2025-09-27', '1970-01-01'),
(8, 7, 0, '2025-09-27', '1970-01-01'),
(9, 8, 0, '2025-09-27', '1970-01-01'),
(10, 9, 0, '2025-09-27', '1970-01-01'),
(11, 10, 0, '2025-10-10', '1970-01-01'),
(12, 11, 0, '2024-07-26', '1970-01-01'),
(13, 12, 0, '2024-08-05', '1970-01-01'),
(14, 13, 0, '2024-09-21', '1970-01-01'),
(15, 14, 0, '2025-07-07', '1970-01-01'),
(16, 15, 0, '2025-08-17', '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1, 8, 4, '2024-04-07 14:04:46', '2024-04-07 14:04:46'),
(1, 8, 4, '2024-04-07 14:04:46', '2024-04-07 14:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upi` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=processing, 1=complated, 2=rejected',
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pay_transaction`
--
ALTER TABLE `pay_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
