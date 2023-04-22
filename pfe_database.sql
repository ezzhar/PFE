-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 avr. 2023 à 03:07
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NOM_COMPLET` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `MOT_DE_PASSE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NOM_COMPLET`, `EMAIL`, `MOT_DE_PASSE`) VALUES
(1, 'ZAKARIA', 'zakariaezzhar0@gmail.com', 'ezzdrawer');

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `ID_ASSOCIATION` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `ASS_ID_ASSOCIATION` int(11) NOT NULL,
  `NOM_ASSOCIATION` varchar(100) DEFAULT NULL,
  `ADRESSE_ASSOCIATION` varchar(100) DEFAULT NULL,
  `NUM_TEL_MEMBRE` int(11) DEFAULT NULL,
  `EMAIL_ASSOCIATION` varchar(100) DEFAULT NULL,
  `DEFINITION_ASSOCIATION` longtext DEFAULT NULL,
  `IMAGE_ASSOCIATION` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`ID_ASSOCIATION`, `ID_ADMIN`, `ASS_ID_ASSOCIATION`, `NOM_ASSOCIATION`, `ADRESSE_ASSOCIATION`, `NUM_TEL_MEMBRE`, `EMAIL_ASSOCIATION`, `DEFINITION_ASSOCIATION`, `IMAGE_ASSOCIATION`) VALUES
(1, 1, 0, 'الجمعية الخيرية  الإسلامية بأسفي', 'Safi, Morocco, 46000', 524668508, 'as.mus.bienfaisancesafi@gmail.com', ' الجمعية الخيرية الإسلامية باسفي (JCI Asfi) هي منظمة خيرية وإنسانية مغربية تأسست عام 1992 في أسفي, تعمل الجمعية بشكل مستقل تماماً وبدون أهداف ربحية, منذ إنشائها، تلتزم الجمعية بمساعدة الأشخاص الذين يواجهون صعوبات في منطقة أسفي، من خلال توفير المساعدات المالية والمادية والتعليمية والاجتماعية والصحية والثقافية والدينية.\r\nبرامج ومشاريع الجمعية الخيرية الإسلامية في آسفي متنوعة ومتعددة, توزع الجمعية الأغذية والملابس والمستلزمات الطبية وتوفر الخدمات التعليمية والتدريبية والمساعدة في تطوير المجتمع والمساعدة الاجتماعية وتوفير المساكن للأشخاص الفقراء والمحتاجين والمساعدة في حالات الكوارث الطبيعية, وتنظم الجمعية أيضًا فعاليات ثقافية ودينية لأعضاء المجتمع.\r\nتُدار جمعية JCI أسفي بواسطة فريق من المتطوعين المكرسين لمساعدة الأشخاص الذين يحتاجون إلى المساعدة, يتكون هذا الفريق من أعضاء نشطين وأعضاء شرفيين ومتبرعين وشركاء وداعمين ومحسنين، الذين يتحدون من أجل نفس القضية, يعمل أعضاء الجمعية النشطين على تطوير وتنفيذ مشاريع الجمعية، في حين يقدم أعضاء الشرف دعمهم المالي وخبرتهم المهنية.\r\nتمويل الجمعية الخيرية الاسلامية باسفي (JCI Asfi) يأتي من التبرعات والمساهمات من الأفراد والشركات والمؤسسات والحكومات المحلية والدولية, وهي لا تتلقى أي تمويل حكومي، مما يسمح لها بالبقاء مستقلة وتحقيق أهدافها دون أي تأثير سياسي.\r\nأنشأت الجمعية معايير صارمة لضمان استخدام التمويل والتبرعات بطريقة فعالة وشفافة، تضمن إدارة مالية صحية وشفافة ، وحسابات يتم تدقيقها بانتظام من قبل ممثل حسابات، تخضع جمعية JCI Asfi أيضًا لرقابة منتظمة من السلطات المختصة.\r\nالجمعية الدولية للشباب في أسفي هي عضو في الغرفة الدولية للشباب، وهي منظمة غير حكومية موجودة في أكثر من 100 دولة حول العالم، كعضو في الغرفة الدولية للشباب، تستفيد الجمعية الدولية للشباب في أسفي من الخبرة والدعم المقدم من المنظمة الدولية لتحقيق مشاريعها.\r\nالجمعية حصلت على العديد من الجوائز والتكريمات لأنشطتها الإنسانية والخيرية، وخاصة للتزامها بالأشخاص الذين يعانون في منطقة آسفي، ومن بين الجوائز التي حصلت عليها، يمكن ذكر جائزة رائد ريادة الأعمال الاجتماعية للعام التي منحتها لها الجمعية الدولية للشباب عام 2015.', NULL),
(2, 1, 0, 'دار الاطفال باسفي', 'Safi, Morocco, 46000', 566666666, 'DAR.ALATFAL.ID2@gmail.com', 'دار الأطفال باسفي هي مؤسسة خيرية مغربية تأسست عام 1981 في مدينة أسفي، تهدف المؤسسة إلى توفير الرعاية والحماية للأطفال الذين يعانون من ظروف صعبة، وتسعى إلى تحسين أوضاعهم المادية والمعنوية والتربوية.\r\n\r\nتتبنى دار الأطفال باسفي نهجاً شاملاً يشمل جميع جوانب الرعاية للأطفال الذين يعانون من الفقر والتشرد والإهمال والعنف والتعرض للمخاطر، وتوفر المؤسسة للأطفال الذين يقيمون فيها الرعاية الأساسية، والتغذية السليمة، والرعاية الصحية اللازمة، والتعليم الأساسي، والتدريب المهني.\r\n\r\nوتقوم دار الأطفال باسفي بالتعاون مع العديد من المنظمات والهيئات الدولية والمحلية، وتحظى بدعم من الجمعيات المحلية والشركات الخاصة والمتبرعين الأفراد، كما تتلقى المؤسسة دعماً من الحكومة المغربية لتمكينها من تحقيق أهدافها الإنسانية والخيرية.\r\n\r\nتعد دار الأطفال باسفي مثالاً يحتذى به في توفير الرعاية اللازمة للأطفال الأشد حاجة في المجتمع، وتعمل بجهود كبيرة ومتواصلة لتحسين حياتهم وتمكينهم من الحصول على فرص أفضل في المستقبل.', NULL),
(3, 1, 0, 'دار المسنين باسفي', 'Safi, Morocco, 46000', 533333333, 'DAR.ALMOSININ.ID3@gmail.com', 'دار المسنين باسفي هي مؤسسة خيرية تقع في مدينة أسفي بالمغرب، تم إنشاؤها لتقديم الرعاية والدعم لكبار السن الذين يعيشون بمفردهم أو يعانون من صعوبات في العيش، تضم المؤسسة غرف إقامة مجهزة بالكامل للمسنين، بالإضافة إلى مرافق لتوفير الرعاية الطبية والصحية والنفسية، ومرافق للترفيه والنشاطات الاجتماعية.\r\n\r\nتعمل دار المسنين باسفي بجهود متطوعين وموظفين مدربين على تقديم الخدمات اللازمة لكبار السن، من خلال توفير الرعاية اليومية والدعم النفسي والاجتماعي، كما تعمل المؤسسة على تقديم خدمات تعليمية وتدريبية للمسنين، وتشجعهم على المشاركة في النشاطات الاجتماعية والرياضية لتحسين جودة حياتهم.\r\n\r\nتتلقى دار المسنين باسفي تمويلًا من الأفراد والشركات والمنظمات غير الحكومية، ويتم استخدام هذه التبرعات لتمويل الخدمات التي تقدمها المؤسسة، كما تعتمد المؤسسة على المتطوعين لتقديم الدعم والخدمات اللازمة لكبار السن في المؤسسة.\r\n\r\nتهدف دار المسنين باسفي إلى توفير بيئة آمنة ومريحة لكبار السن، وتحسين جودة حياتهم وتقديم الدعم اللازم لهم، تعد المؤسسة من الهيئات الرائدة في مجال رعاية المسنين في المنطقة، وتسعى باستمرار إلى تحسين خدماتها وتوسيع نطاق عملها لتصل إلى المزيد من المحتاجين.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `ID_ASSOCIATION` int(11) NOT NULL,
  `ID_OBJECTIF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `collaboraeurs`
--

CREATE TABLE `collaboraeurs` (
  `ID_COLLAB` int(11) NOT NULL,
  `NOM_COLLAB` varchar(100) DEFAULT NULL,
  `ADRESSE_COLLAB` varchar(100) DEFAULT NULL,
  `EMAIL_COLLAB` varchar(100) DEFAULT NULL,
  `CONTACT_COLLAB` varchar(100) DEFAULT NULL,
  `DEFINITION_COLLAB` varchar(1000) DEFAULT NULL,
  `IMAGE_COLLAB` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `collaboraeurs`
--

INSERT INTO `collaboraeurs` (`ID_COLLAB`, `NOM_COLLAB`, `ADRESSE_COLLAB`, `EMAIL_COLLAB`, `CONTACT_COLLAB`, `DEFINITION_COLLAB`, `IMAGE_COLLAB`) VALUES
(1, 'المساهم 1', 'XXXXXXXXXXXXXXXXXX', 'YYYYYYYYYYYYYYYYYYY', '00000000000000000', 'المساهم المساهم المساهم المساهم المساهمالمساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم', NULL),
(2, 'المساهم 2', 'XXXXXXXXXXXXXXXXXX', 'YYYYYYYYYYYYYYYYYYY', '00000000000000000', 'المساهم المساهم المساهم المساهم المساهمالمساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم', NULL),
(3, 'المساهم 3', 'XXXXXXXXXXXXXXXXXX', 'YYYYYYYYYYYYYYYYYYY', '00000000000000000', 'المساهم المساهم المساهم المساهم المساهمالمساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم', NULL),
(4, 'المساهم 4', 'XXXXXXXXXXXXXXXXXX', 'YYYYYYYYYYYYYYYYYYY', '00000000000000000', 'المساهم المساهم المساهم المساهم المساهمالمساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم', NULL),
(5, 'المساهم 5', 'XXXXXXXXXXXXXXXXXX', 'YYYYYYYYYYYYYYYYYYY', '00000000000000000', 'المساهم المساهم المساهم المساهم المساهمالمساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم', NULL),
(6, 'المساهم 6', 'XXXXXXXXXXXXXXXXXX', 'YYYYYYYYYYYYYYYYYYY', '00000000000000000', 'المساهم المساهم المساهم المساهم المساهمالمساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم المساهم', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `collabore`
--

CREATE TABLE `collabore` (
  `ID_COLLAB` int(11) NOT NULL,
  `ID_ASSOCIATION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comission_d_acceuil`
--

CREATE TABLE `comission_d_acceuil` (
  `CIN_MEMBRE` char(100) NOT NULL,
  `ID_ASSOCIATION` int(11) NOT NULL,
  `NOM_MEMBRE` varchar(100) DEFAULT NULL,
  `PRENOM_MEMBRE` varchar(100) DEFAULT NULL,
  `NUM_TEL_MEMBRE` int(11) DEFAULT NULL,
  `ROLE_MEMBRE` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `ID_ASSOCIATION` int(11) NOT NULL,
  `ID_INSTALLATION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `ID_DEMANDE` int(11) NOT NULL,
  `ID_ASSOCIATION` int(11) NOT NULL,
  `NOM_BENEFICIAIRE` varchar(100) DEFAULT NULL,
  `NOM_ETABLISSEMENT` varchar(100) DEFAULT NULL,
  `RAISON` varchar(100) DEFAULT NULL,
  `DATE_DEMANDE` date DEFAULT NULL,
  `LIEU_DEMANDE` varchar(100) DEFAULT NULL,
  `IMAGE_DEMANDE` char(100) DEFAULT NULL,
  `PRENOM_BENEFICIAIRE` varchar(100) DEFAULT NULL,
  `DATE_NAISSANCE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `finance`
--

CREATE TABLE `finance` (
  `ID_ASSOCIATION` int(11) NOT NULL,
  `ID_SPONSOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournit`
--

CREATE TABLE `fournit` (
  `ID_ASSOCIATION` int(11) NOT NULL,
  `ID_SERVICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `installations`
--

CREATE TABLE `installations` (
  `ID_INSTALLATION` int(11) NOT NULL,
  `NOM_INSTALLATION` varchar(100) DEFAULT NULL,
  `ADRESSE_INSTALLATION` varchar(100) DEFAULT NULL,
  `DEFINITION_INSTALLATION` varchar(100) DEFAULT NULL,
  `IMAGE_INSTALLATION` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `objectifs`
--

CREATE TABLE `objectifs` (
  `ID_OBJECTIF` int(11) NOT NULL,
  `DEFINITION_OBJECTIF` varchar(1000) DEFAULT NULL,
  `IMAGE_OBJECTIF` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `ID_SERVICE` int(11) NOT NULL,
  `NOM_SERVICE` varchar(1000) NOT NULL,
  `DEFINITION_SERVICE` longtext DEFAULT NULL,
  `IMAGE_SERVICE` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`ID_SERVICE`, `NOM_SERVICE`, `DEFINITION_SERVICE`, `IMAGE_SERVICE`) VALUES
(1, 'النشاط 1', 'النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   ', NULL),
(2, 'النشاط 2', 'النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   ', NULL),
(3, 'النشاط 3', 'النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   ', NULL),
(4, 'النشاط 4', 'النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   ', NULL),
(5, 'النشاط 5', 'النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   ', NULL),
(6, 'النشاط 6', 'النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاط النشاطالنشاط النشاط النشاط النشاط النشاط النشاط   ', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `ID_SPONSOR` int(11) NOT NULL,
  `NOM_SPONSOR` varchar(100) DEFAULT NULL,
  `ADRESSE_SPONSOR` varchar(100) DEFAULT NULL,
  `CONTACT_SPONSOR` int(11) DEFAULT NULL,
  `EMAIL_SPONSOR` varchar(100) DEFAULT NULL,
  `DEFINITION_SPONSOR` mediumtext DEFAULT NULL,
  `IMAGE_SPONSOR` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`ID_SPONSOR`, `NOM_SPONSOR`, `ADRESSE_SPONSOR`, `CONTACT_SPONSOR`, `EMAIL_SPONSOR`, `DEFINITION_SPONSOR`, `IMAGE_SPONSOR`) VALUES
(1, 'الشريك 1', 'DDDDDDDDDDDDDDD', 88888888, 'AAAAAAAAAAAAAA', 'الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك ', NULL),
(2, 'الشريك 2', 'DDDDDDDDDDDDDDD', 88888888, 'AAAAAAAAAAAAAA', 'الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك ', NULL),
(3, 'الشريك 3', 'DDDDDDDDDDDDDDD', 88888888, 'AAAAAAAAAAAAAA', 'الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك ', NULL),
(4, 'الشريك 4', 'DDDDDDDDDDDDDDD', 88888888, 'AAAAAAAAAAAAAA', 'الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك ', NULL),
(5, 'الشريك 5', 'DDDDDDDDDDDDDDD', 88888888, 'AAAAAAAAAAAAAA', 'الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك ', NULL),
(6, 'الشريك 6', 'DDDDDDDDDDDDDDD', 88888888, 'AAAAAAAAAAAAAA', 'الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك الشريك الشريك الشريك الشريك الشريكالشريكالشريك ', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`ID_ASSOCIATION`),
  ADD KEY `CONTROLE_FK` (`ID_ADMIN`),
  ADD KEY `INCLU_FK` (`ASS_ID_ASSOCIATION`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`ID_ASSOCIATION`,`ID_OBJECTIF`),
  ADD KEY `AVOIR_FK` (`ID_ASSOCIATION`),
  ADD KEY `AVOIR2_FK` (`ID_OBJECTIF`);

--
-- Index pour la table `collaboraeurs`
--
ALTER TABLE `collaboraeurs`
  ADD PRIMARY KEY (`ID_COLLAB`);

--
-- Index pour la table `collabore`
--
ALTER TABLE `collabore`
  ADD PRIMARY KEY (`ID_COLLAB`,`ID_ASSOCIATION`),
  ADD KEY `COLLABORE_FK` (`ID_COLLAB`),
  ADD KEY `COLLABORE2_FK` (`ID_ASSOCIATION`);

--
-- Index pour la table `comission_d_acceuil`
--
ALTER TABLE `comission_d_acceuil`
  ADD PRIMARY KEY (`CIN_MEMBRE`),
  ADD KEY `TRAVAILLE_FK` (`ID_ASSOCIATION`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`ID_ASSOCIATION`,`ID_INSTALLATION`),
  ADD KEY `CONTIENT_FK` (`ID_ASSOCIATION`),
  ADD KEY `CONTIENT2_FK` (`ID_INSTALLATION`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`ID_DEMANDE`),
  ADD KEY `INSCRIRE_FK` (`ID_ASSOCIATION`);

--
-- Index pour la table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`ID_ASSOCIATION`,`ID_SPONSOR`),
  ADD KEY `FINANCE_FK` (`ID_ASSOCIATION`),
  ADD KEY `FINANCE2_FK` (`ID_SPONSOR`);

--
-- Index pour la table `fournit`
--
ALTER TABLE `fournit`
  ADD PRIMARY KEY (`ID_ASSOCIATION`,`ID_SERVICE`),
  ADD KEY `FOURNIT_FK` (`ID_ASSOCIATION`),
  ADD KEY `FOURNIT2_FK` (`ID_SERVICE`);

--
-- Index pour la table `installations`
--
ALTER TABLE `installations`
  ADD PRIMARY KEY (`ID_INSTALLATION`);

--
-- Index pour la table `objectifs`
--
ALTER TABLE `objectifs`
  ADD PRIMARY KEY (`ID_OBJECTIF`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID_SERVICE`);

--
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`ID_SPONSOR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `ID_ASSOCIATION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `collaboraeurs`
--
ALTER TABLE `collaboraeurs`
  MODIFY `ID_COLLAB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `ID_DEMANDE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `objectifs`
--
ALTER TABLE `objectifs`
  MODIFY `ID_OBJECTIF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `ID_SERVICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `ID_SPONSOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `FK_ASSOCIAT_CONTROLE_ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
