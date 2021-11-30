-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30-Nov-2021 às 19:49
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `swweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `answers`
--

CREATE TABLE `answers` (
  `id_answer` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id_answer`, `id_question`, `id_user`, `text`) VALUES
(1, 1, 8, '<p>&nbsp;Acabou de sair do forno. Fica bem gostoso. Mas achei meio complicadinho a forma da descri&ccedil;&atilde;o de como fazer a receita. Enfim, no final deu certo! :)</p>\r\n<p>Fiz a torta, acrescentei lingui&ccedil;a picadinha, abobrinha, chuchu, cenoura ralada, ficou uma del&iacute;cia, a massa bem leve parecia um sufl&ecirc;, ficou divino!!!</p>'),
(2, 1, 9, 'N&atilde;o gostei, sabor de e-gril com um toque muito azedo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questions`
--

CREATE TABLE `questions` (
  `id_question` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`id_question`, `title`, `theme`, `id_user`, `text`) VALUES
(1, 'BAKE SOME WOOKIEE COOKIE BROWNIES FOR A DELICIOUS LIFE DAY DESSERT', 'Geral', 1, '<p><a href=\"https://www.starwars.com/news/what-is-life-day\">Life Day</a>&nbsp;is among the&nbsp;<em>Star Wars&nbsp;</em>galaxy&rsquo;s most beloved holidays, and one that&nbsp;<em>Star Wars&nbsp;</em>fans honor every November 17. If you&rsquo;re looking to whip, whip, stir something up to mark the occasion, look no further.</p>\r\n<p>Life Day began as a Wookiee holiday centered around the Kashyyyk Tree of Life.&nbsp;These Wookiee Cookie Brownies, an ideal Life Day dessert, are frosted to resemble the Kashyyyk natives and have a secret sweet center that will have you saying, &ldquo;Rrraahh, aaarrgg,&rdquo; in the Wookiee language of Shyriiwook that means, &ldquo;More, please.&rdquo;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://starwarsblog.starwars.com/wp-content/uploads/2018/06/chewbacca-solo-tall.jpg\" alt=\"\" width=\"400\" height=\"225\" /></p>\r\n<p><strong>Wookiee Cookie Brownies</strong></p>\r\n<p><em>Brownie ingredients:</em></p>\r\n<ul>\r\n<li>2/3 cup cocoa powder</li>\r\n<li>1/2 cup brown sugar</li>\r\n<li>1/2 cup granulated sugar</li>\r\n<li>1/3 cup all purpose flour</li>\r\n<li>1/2 teaspoon baking soda</li>\r\n<li>1/2 teaspoon salt</li>\r\n<li>1/2 cup (1 stick) unsalted butter, melted</li>\r\n<li>2 eggs, lightly beaten</li>\r\n<li>1/2 teaspoon vanilla</li>\r\n<li>9 chocolate sandwich cookies</li>\r\n</ul>\r\n<p><em>Frosting ingredients:</em></p>\r\n<ul>\r\n<li>6 tablespoons unsalted butter, softened</li>\r\n<li>2 cups powdered sugar</li>\r\n<li>1/3 cup cocoa powder</li>\r\n<li>1 teaspoon vanilla</li>\r\n<li>1/4 teaspoon cinnamon</li>\r\n<li>1/4 teaspoon salt</li>\r\n<li>1/4 cup whole milk, as needed</li>\r\n<li>Black icing, for decorating</li>\r\n<li>White icing, for decorating</li>\r\n</ul>\r\n<p><strong>Step 1:</strong>&nbsp;Preheat the oven to 350 degrees. Prep a muffin pan with 9 liners.</p>\r\n<p><strong>Step 2:</strong>&nbsp;In a bowl, whisk together cocoa powder, brown sugar, granulated sugar, flour, baking soda, and salt.</p>\r\n<p><strong>Step 3:</strong>&nbsp;Make a well in the center of the dry ingredients and stir in butter, eggs, and vanilla, until just combined.</p>\r\n<p><strong>Step 4:</strong>&nbsp;Pour a tablespoonful batter into the prepped liners. Place a cookie on top, then cover with more batter, covering the cookie completely.</p>\r\n<p><strong>Step 5:</strong>&nbsp;Bake for 18 minutes. Let cool on a wire rack.</p>\r\n<p><strong>Step 6:</strong>&nbsp;In a bowl, use a handheld mixer to cream the butter and powdered sugar.</p>\r\n<p><strong>Step 7:</strong>&nbsp;Add the cocoa powder, vanilla, cinnamon, and salt.</p>\r\n<p><strong>Step 8:</strong>&nbsp;Add the milk until you get a thick but pipeable consistency.<br /><br /><strong>Step 9:</strong>&nbsp;Spoon the frosting into a piping bag. With a large star piping tip, start at the top and pull upwards to form the forehead. Then pipe from the middle out all around the brownie to complete the rest of the fur.<br /><br /><strong>Step 10:</strong>&nbsp;Use the black and white icings to create the face details.<br /><br /></p>\r\n<p><strong>Step 11:</strong>&nbsp;Once the icing is dry the brownies are ready to serve.</p>\r\n<p>Let out a Wookiee roar and enjoy this treat on Life Day!</p>\r\n<p><em>\\</em></p>\r\n<br />\r\n<p>&nbsp;</p>'),
(5, 'GET READY FOR THE PREMIERE OF THE BOOK OF BOBA FETT WITH NEW CHARACTER POSTERS!', 'Series', 2, '<p>The first character posters for&nbsp;<a href=\"https://www.starwars.com/series/the-book-of-boba-fett\"><em>The Book of Boba Fett</em></a>&nbsp;have been revealed.</p>\r\n<p>In preparation for&nbsp;the debut of&nbsp;the new&nbsp;<em>Star Wars</em>&nbsp;live-action&nbsp;Original Series,&nbsp;today Lucasfilm announced that the series will have seven weekly episodes&nbsp;streaming exclusively on&nbsp;<a href=\"https://disneyplus.com/?cid=DTCI-Synergy-StarWars-Site-Awareness-StarWars-US-DisneyPlus-StarWarscom-EN-ArticleLink\" target=\"_blank\" rel=\"noopener\">Disney+</a>&nbsp;starting&nbsp;<a href=\"https://www.starwars.com/news/the-book-of-boba-fett-premiere\">December 29</a>,</p>\r\n<p>To celebrate,&nbsp;Disney+ released character posters of Boba Fett and Fennec Shand as well as an enticing TV spot with some of the first footage from the forthcoming series. Take a closer look at the poster art and watch the latest clip below!</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://starwarsblog.starwars.com/wp-content/uploads/2021/11/the-Book-of-Boba-Fett-Boba-Fett-Character-Poster-Art-32kapoj65.jpg\" alt=\"\" width=\"534\" height=\"800\" /><br /><em>The Book of Boba Fett,&nbsp;</em>a thrilling&nbsp;<em>Star Wars</em>&nbsp;adventure teased in a surprise end-credit sequence following the Season 2 finale of&nbsp;<em>The Mandalorian</em>, finds legendary bounty hunter Boba Fett and mercenary Fennec Shand navigating the galaxy&rsquo;s underworld when they return to the sands of Tatooine to stake their claim on the territory once ruled by Jabba the Hutt and his crime syndicate.<br /><br />The series stars Temuera Morrison and Ming-Na Wen. Jon Favreau, Dave Filoni, Robert Rodriguez, Kathleen Kennedy and Colin Wilson are the executive producers. Karen Gilchrist and Carrie Beck serve as co-executive producers, with John Bartnicki producing and John Hampian as co-producer.</p>'),
(6, 'Star Wars: Episode IX The Rise of Skywalke', 'Filmes', 3, '<p><strong><em>Star Wars</em>: Episode IX&nbsp;<em>The Rise of Skywalker</em></strong>, marketed as&nbsp;<em><strong>Star Wars: The Rise of Skywalker</strong></em>, is a&nbsp;<a title=\"2019\" href=\"https://starwars.fandom.com/wiki/2019\">2019</a>&nbsp;film directed by&nbsp;<a title=\"J.J. Abrams\" href=\"https://starwars.fandom.com/wiki/J.J._Abrams\">J.J. Abrams</a>&nbsp;from a script by Abrams and&nbsp;<a title=\"Chris Terrio\" href=\"https://starwars.fandom.com/wiki/Chris_Terrio\">Chris Terrio</a>. It is the third and final installment of the&nbsp;<em><a title=\"Star Wars\" href=\"https://starwars.fandom.com/wiki/Star_Wars\">Star Wars</a></em>&nbsp;<a title=\"Sequel trilogy\" href=\"https://starwars.fandom.com/wiki/Sequel_trilogy\">sequel trilogy</a>. The film, produced by&nbsp;<a title=\"Lucasfilm Ltd.\" href=\"https://starwars.fandom.com/wiki/Lucasfilm_Ltd.\">Lucasfilm</a>&nbsp;president&nbsp;<a title=\"Kathleen Kennedy\" href=\"https://starwars.fandom.com/wiki/Kathleen_Kennedy\">Kathleen Kennedy</a>, is a continuation of&nbsp;<a title=\"2015\" href=\"https://starwars.fandom.com/wiki/2015\">2015</a>\'s&nbsp;<a title=\"Star Wars: Episode VII The Force Awakens\" href=\"https://starwars.fandom.com/wiki/Star_Wars:_Episode_VII_The_Force_Awakens\"><em>The Force Awakens</em></a>, which Abrams also directed and co-wrote, and&nbsp;<a title=\"2017\" href=\"https://starwars.fandom.com/wiki/2017\">2017</a>\'s&nbsp;<a title=\"Star Wars: Episode VIII The Last Jedi\" href=\"https://starwars.fandom.com/wiki/Star_Wars:_Episode_VIII_The_Last_Jedi\"><em>The Last Jedi</em></a>. Lucasfilm has referred to&nbsp;<em>The Rise of Skywalker</em>&nbsp;as the eleventh and final installment of the&nbsp;<a title=\"Star Wars saga\" href=\"https://starwars.fandom.com/wiki/Star_Wars_saga\">Skywalker saga</a>.</p>\r\n<p>The film stars&nbsp;<a title=\"Carrie Fisher\" href=\"https://starwars.fandom.com/wiki/Carrie_Fisher\">Carrie Fisher</a>,&nbsp;<a title=\"Mark Hamill\" href=\"https://starwars.fandom.com/wiki/Mark_Hamill\">Mark Hamill</a>,&nbsp;<a title=\"Adam Driver\" href=\"https://starwars.fandom.com/wiki/Adam_Driver\">Adam Driver</a>,&nbsp;<a title=\"Daisy Ridley\" href=\"https://starwars.fandom.com/wiki/Daisy_Ridley\">Daisy Ridley</a>,&nbsp;<a title=\"John Boyega\" href=\"https://starwars.fandom.com/wiki/John_Boyega\">John Boyega</a>,&nbsp;<a title=\"Oscar Isaac\" href=\"https://starwars.fandom.com/wiki/Oscar_Isaac\">Oscar Isaac</a>,&nbsp;<a title=\"Anthony Daniels\" href=\"https://starwars.fandom.com/wiki/Anthony_Daniels\">Anthony Daniels</a>,&nbsp;<a title=\"Naomi Ackie\" href=\"https://starwars.fandom.com/wiki/Naomi_Ackie\">Naomi Ackie</a>,&nbsp;<a title=\"Domhnall Gleeson\" href=\"https://starwars.fandom.com/wiki/Domhnall_Gleeson\">Domhnall Gleeson</a>,&nbsp;<a title=\"Richard E. Grant\" href=\"https://starwars.fandom.com/wiki/Richard_E._Grant\">Richard E. Grant</a>,&nbsp;<a title=\"Lupita Nyong\'o\" href=\"https://starwars.fandom.com/wiki/Lupita_Nyong%27o\">Lupita Nyong\'o</a>,&nbsp;<a title=\"Keri Russell\" href=\"https://starwars.fandom.com/wiki/Keri_Russell\">Keri Russell</a>,&nbsp;<a title=\"Joonas Suotamo\" href=\"https://starwars.fandom.com/wiki/Joonas_Suotamo\">Joonas Suotamo</a>,&nbsp;<a title=\"Kelly Marie Tran\" href=\"https://starwars.fandom.com/wiki/Kelly_Marie_Tran\">Kelly Marie Tran</a>, with&nbsp;<a title=\"Ian McDiarmid\" href=\"https://starwars.fandom.com/wiki/Ian_McDiarmid\">Ian McDiarmid</a>&nbsp;and&nbsp;<a title=\"Billy Dee Williams\" href=\"https://starwars.fandom.com/wiki/Billy_Dee_Williams\">Billy Dee Williams</a>. Fisher, who passed away in&nbsp;<a title=\"2016\" href=\"https://starwars.fandom.com/wiki/2016\">2016</a>&nbsp;prior to the film\'s production, appeared via unused footage from&nbsp;<em>The Force Awakens</em>. The film was first announced after&nbsp;<a title=\"The Walt Disney Company\" href=\"https://starwars.fandom.com/wiki/The_Walt_Disney_Company\">The Walt Disney Company</a>&nbsp;acquired&nbsp;<a title=\"Lucasfilm Ltd.\" href=\"https://starwars.fandom.com/wiki/Lucasfilm_Ltd.\">Lucasfilm Ltd.</a>&nbsp;in&nbsp;<a title=\"2012\" href=\"https://starwars.fandom.com/wiki/2012\">2012</a>.&nbsp;<a title=\"Colin Trevorrow\" href=\"https://starwars.fandom.com/wiki/Colin_Trevorrow\">Colin Trevorrow</a>&nbsp;was initially announced as the director and writer of the film, but he and Lucasfilm parted ways in&nbsp;<a title=\"September\" href=\"https://starwars.fandom.com/wiki/September\">September</a>&nbsp;2017, with Lucasfilm citing \"creative differences\" over the project. On September 12, 2017, Abrams and Terrio were announced as the new director and writers.</p>\r\n<p>Principal photography began in&nbsp;<a title=\"2018\" href=\"https://starwars.fandom.com/wiki/2018\">2018</a>, and filming wrapped in 2019. Footage from&nbsp;<em>The Rise of Skywalker&nbsp;</em>was first made public on&nbsp;<a title=\"April 12\" href=\"https://starwars.fandom.com/wiki/April_12\">April 12</a>, 2019 at&nbsp;<a title=\"Celebration Chicago\" href=\"https://starwars.fandom.com/wiki/Celebration_Chicago\">Celebration Chicago</a>. The film was released on&nbsp;<a title=\"December 20\" href=\"https://starwars.fandom.com/wiki/December_20\">December 20</a>, 2019. It received mixed reviews from critics.&nbsp;<em>The Rise of Skywalker</em>&nbsp;received three nominations at the&nbsp;<a class=\"extiw\" title=\"wikipedia:92nd Academy Awards\" href=\"http://en.wikipedia.org/wiki/92nd_Academy_Awards\">92nd Academy Awards</a>:&nbsp;<a class=\"extiw\" title=\"wikipedia:Academy Award for Best Original Score\" href=\"http://en.wikipedia.org/wiki/Academy_Award_for_Best_Original_Score\">Best Original Score</a>,&nbsp;<a class=\"extiw\" title=\"wikipedia:Academy Award for Best Visual Effects\" href=\"http://en.wikipedia.org/wiki/Academy_Award_for_Best_Visual_Effects\">Best Visual Effects</a>, and&nbsp;<a class=\"extiw\" title=\"wikipedia:Academy Award for Best Sound Editing\" href=\"http://en.wikipedia.org/wiki/Academy_Award_for_Best_Sound_Editing\">Best Sound Editing</a>. It has grossed over $1 billion worldwide, making it the forty-sixth highest-grossing film of all time.</p>'),
(7, 'STAR WARS INSIDE INTEL: DARTH VADER’S SUIT', 'Personagens', 4, '<p>Star Wars&nbsp;<em>Inside Intel is a StarWars.com feature where Lucasfilm Story Group member Emily Shkoukani, whose job is to know as much about a galaxy far, far away as possible, explores obscure facts about&nbsp;</em>Star Wars<em>&nbsp;lore and continuity. In this installment, Emily gets into the tech keeping everyone&rsquo;s favorite Dark Lord alive.</em></p>\r\n<p>Since the&nbsp;<em>release</em>&nbsp;of&nbsp;<em>Star Wars: A New Hope</em>&nbsp;in 1977, moviegoers have wondered about the villain in the suit and what lies beneath. It wasn&rsquo;t until the prequel trilogy began in 1999 that we would begin to get answers.<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://starwarsblog.starwars.com/wp-content/uploads/2021/04/anakin-revenge-of-the-sith-darth-vader0suit.jpg\" alt=\"\" width=\"720\" height=\"307\" /></p>\r\n<p>After suffering mortal wounds on Mustafar following a duel with his former master, Obi-Wan Kenobi, in 2005&rsquo;s&nbsp;<em>Star Wars: Revenge of the Sith</em>, the fallen Jedi Anakin Skywalker was rescued by the newly instated Emperor. In the duel, Anakin lost both of his legs, his one remaining organic arm, and suffered (possibly up to) fourth-degree burns across what was left of his body that were severe enough to damage his internal organs. These injuries would have been fatal had it not been for the medical treatment Anakin received, which transformed him into the mechanized&nbsp;<a href=\"https://www.starwars.com/databank/darth-vader\">Darth Vader</a>&nbsp;fans first witnessed over 40 years ago.</p>\r\n<p>It&rsquo;s obvious that Vader requires his suit to survive, but what functions does the suit have, and in what ways does it keep him alive?</p>\r\n<p><br /><br /></p>'),
(8, 'TIE INTERCEPTOR', 'Veículos', 5, 'TIE interceptors were developed to provide the&nbsp;<a href=\"http://www.starwars.com/databank/galactic-empire\">Empire</a>&nbsp;with a faster fighter than the original&nbsp;<a href=\"http://www.starwars.com/databank/tie-fighter\">TIE model</a>, and one that could easily overwhelm enemy craft. They were first deployed 16 years after the fall of the&nbsp;<a href=\"http://www.starwars.com/databank/galactic-republic\">Republic</a>, and proved to be a deadly combination of speed and firepower, able to outmaneuver the rebellions&rsquo; vaunted&nbsp;<a href=\"http://www.starwars.com/databank/a-wing-fighter\">A-wings</a>&nbsp;and disable slower ships.\r\n<div><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://lumiere-a.akamaihd.net/v1/images/tie-interceptor-1_a7bfdd62.jpeg?region=0%2C0%2C800%2C450\" alt=\"\" width=\"600\" height=\"338\" /></div>'),
(9, 'MEET THE HUMANS FROM THE MOS EISLEY CANTINA', 'Especies', 6, '<p>This place can be a little rough.</p>\r\n<p>The Mos Eisley Cantina is one of the all-time classic scenes from the&nbsp;<em>Star Wars</em>&nbsp;saga. Not only was it the first time that we saw a large assemblage of weird aliens going on with their everyday lives, it was also the&nbsp;<em>Star Wars</em>&nbsp;equivalent to the Wild West saloons: music playing in the background, bartenders diving below the counter, and plenty of alcohol going around. The cantina sequence was filmed in two locations, one in the UK and one in Los Angeles. George Lucas thought that the cantina residents from the UK shoot were too human-like, so he planned pick-up shots with more alien-looking characters constructed by Rick Baker.</p>\r\n<p>A lot of these aliens have become fan favorites such as &ldquo;Hammerhead&rdquo; Momaw Nadon, the cuddly Muftak, or the enigmatic Bith musicians. In this article, however, we will introduce you to some lesser known visitors of the Mos Eisley cantina. Next to the alien clientele, there were also a lot of human patrons. At first sight, they may not have four arms, a pair of horns or snaggleteeth, but their backstories are worth checking out.</p>\r\n<p>Many actors who played the humans in the UK were members of the Ugly Agency, a rather derogatory name for an agency that specialized in odd-looking people. The names of these actors have been parenthesized. Be certain to check out the&nbsp;<a href=\"https://www.starwars.com/news/swca-secrets-of-the-mos-eisley-cantina-panel-liveblog\">live blog</a>&nbsp;from the &ldquo;Secrets of the Mos Eisley Cantina&rdquo; panel that was held during Celebration Anaheim by Pablo Hidalgo and Tom Spina for more information about these actors.</p>\r\n<p><strong>Barflies</strong></p>\r\n<p>The gruff bartender&nbsp;<strong>Wuher</strong>&nbsp;(Ted Burnett) took care of the cantina during his shifts. He never allowed droids or blasters inside, but he was the first to wisely take cover whenever something nasty occured. The late bartender shift was usually manned&nbsp;by&nbsp;<strong>Ackmena&nbsp;</strong>(Bea Arthur), an elderly lady who loved to sing.</p>\r\n<p><strong>BoShek</strong>&nbsp;was a Corellian smuggler who played a small but important part in the history of the galaxy. When Obi-Wan Kenobi was looking for a pilot in the cantina, BoShek advised&nbsp;him&nbsp;to have a chat with Chewbacca, the Wookiee first mate of Han Solo. The consequences of that conversation are well known.<br /><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://starwarsblog.starwars.com/wp-content/uploads/2015/08/Cantina1.jpg\" width=\"803\" height=\"603\" /></p>'),
(10, 'NABOO FALL OF THE REPUBLIC', 'Planetas', 7, '<p>The peaceful planet of Naboo was thrust into the galactic spotlight a decade before the Clone Wars, blockaded by<a href=\"http://www.starwars.com/databank/trade-federation\">&nbsp;Trade Federation</a>&nbsp;battleships as part of a trade dispute with the planet and the&nbsp;<a href=\"http://www.starwars.com/databank/galactic-republic\">Republic</a>&nbsp;<a href=\"http://www.starwars.com/databank/galactic-senate\">Senate</a>. An invasion soon followed, with the planet&rsquo;s citizens interned in detention camps.</p>\r\n<p>Naboo&rsquo;s queen,<a href=\"http://www.starwars.com/databank/padme-amidala\">&nbsp;Padm&eacute; Amidala</a>, escaped with the help of two Jedi Knights and made her way to&nbsp;<a href=\"http://www.starwars.com/databank/coruscant\">Coruscant</a>, where she and Senator&nbsp;<a href=\"http://www.starwars.com/databank/emperor-palpatine-darth-sidious\">Palpatine</a>&nbsp;sought justice for their planet. Finding the Senate hobbled by bureaucratic infighting, a frustrated Amidala called for a no-confidence vote in&nbsp;<a href=\"http://www.starwars.com/databank/supreme-chancellor-valorum\">Valorum</a>. Palpatine would succeed him as Chancellor, beginning his rise to power.&nbsp;</p>\r\n<p>The Trade Federation invasion was thwarted by an alliance between Naboo&rsquo;s human colonists and the native&nbsp;<a href=\"http://www.starwars.com/databank/gungan\">Gungans</a>. But during the Clone Wars, Naboo&rsquo;s association with Palpatine and Padm&eacute; made the planet a Separatist target once again.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'Receiteira', 'receitas@boas.com', '123'),
(2, 'Seriador', 'serie@sw.com', '123'),
(3, 'Filmeiro', 'filme@filme.com', '123'),
(4, 'personalite', 'personal@sw.com', '123'),
(5, 'swPedro', 'poloso@email.com', '123'),
(6, 'specieiro', 'specie@email.com', '123'),
(7, 'Planeteira', 'planet@email.com', '123'),
(8, 'Respondedor', 'resposta@email.com', '123'),
(9, 'Falador', 'email@email.com', '123'),
(10, 'admin', 'admin@admin.com', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`);

--
-- Índices para tabela `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
