-- MySQL dump 10.13  Distrib 5.6.24, for osx10.10 (x86_64)
--
-- Host: localhost    Database: qujing
-- ------------------------------------------------------
-- Server version	5.6.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `baoming`
--

DROP TABLE IF EXISTS `baoming`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baoming` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `wechat` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `help_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baoming`
--

LOCK TABLES `baoming` WRITE;
/*!40000 ALTER TABLE `baoming` DISABLE KEYS */;
INSERT INTO `baoming` VALUES (5,'子矜','男','软件工程大三','13476179904','cmm020304','来一波赚钱教程！',2),(6,'','','','','','',2),(7,'','','','','','',2);
/*!40000 ALTER TABLE `baoming` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `helper`
--

DROP TABLE IF EXISTS `helper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `helper` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `skill_intro` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `skill_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_price` int(4) NOT NULL,
  `skill_time` int(2) NOT NULL,
  `avatar` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `see_num` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `helper`
--

LOCK TABLES `helper` WRITE;
/*!40000 ALTER TABLE `helper` DISABLE KEYS */;
INSERT INTO `helper` VALUES (1,'子矜','冰岩作坊团队负责人','web前端快速找到学习方向','<p class=\'detail-header\'>个人简介</p><p>软件工程大三，冰岩作坊前端组组长，大二暑假获得腾讯和豆瓣的offer，并在腾讯OMG部门实习。参与开发冰岩作坊15年春秋两季招新网站、匿匿、华科脱单、冰岩UED等项目，项目经验丰富，同对产品也有自己的理解。</p><p class=\'detail-header\'>主题简介</p><p>前端对于大部分人而言门槛较低，但知识点较杂，入门容易精通很难，尤其是学习方向找对很难，我会尽量在两小时之内帮你找到学习方向，并且会认真制作ppt。</p>',120,2,'/img/avatar/avatar1.png',3),(2,'掐断','新闻学院大三学生','炉石传说入门指南','<p class=\'detail-header\'>个人资料</p> <p>掐断（笔名），新闻学院传播学大三学生。前任冰岩作坊团队负责人，曾在腾讯实习，具有一定的互联网产品经验，做过的产品有：校园二手街、匿匿、华中大校园通等近十款。他还是微信公众号华科学习帝的创建者。可以与他交流的方向包括但不限于：互联网相关、民族弹拨乐、电子游戏、赚钱商机等。</p> <p class=\'detail-header\'>主题简介</p> <p>炉石传说新手入门指南：大家好，我是掐断。此次的主题主要是针对炉石传说的新手玩家，我会耐心地告诉你一些基本套路和思想，让你远离低级失误，提升对战胜率。同时还会根据你现有的卡帮你组牌。当然，我并非很厉害的玩家，能讲述的只是个人理解，天梯可以轻松打到15级之内的同学请慎重选择～约见时我会认真制作PPT的。</p>',50,1,'/img/avatar/avatar2.png',3),(3,'美君','冰岩作坊设计组组长','手绘板插画入门','<p class=\'detail-header\'>个人资料</p> <p>美君，建规学院数字媒体大三学生。冰岩设计组组长，参与多项互联网创新项目，有一定的产品经验，可以与她交流的方向包括但不限于：互联网设计相关，插画爱好交流，电子游戏（暴雪系or音游），宅腐ACG等。如何快速入门简单手绘插画</p> <p class=\'detail-header\'>主题简介</p> <p>大家好，我是美君，这次主题是针对想快速掌握基本手绘技巧的非艺术专业手绘插画爱好者，我会耐心去分享我手绘的心得，也会针对每个人不同风格做出相应的引导，让每个人都能在保持自己的特点上有一个小突破，切实的让大家的手绘运用到自己的生活中，男生学了好撩妹！女生学了能卖萌！热爱生活的人运气都不会太差哦~</p>',50,1,'/img/avatar/avatar3.png',3),(4,'yuki酱','电信大四学姐','零基础非设计专业如何入门交互设计','<p class=\'detail-header\'>个人资料</p> <p>Yuki酱，电子信息工程下架大四学姐，Opera China用户体验设计实习生，冰岩作坊产品组成员，华中大校园通负责人。参与冰岩多项产品开发，并获得不错成绩。可以与她交流的内容：UX设计，产品管理，五年前的动漫，日剧美剧英剧，如何乐观面对不幸。</p> <p class=\'detail-header\'>主题简介</p> <p>零基础非设计专业如何入门交互设计：我会给你讲我是如何从设计小白入门交互设计这个行业的，我会帮你理清产品设计的基本思路，告诉你交互设计师的工作内容，我会手把手带你走一遍交互设计流程，让你对交互有一个基础的认识。看起来很枯燥，其实不会哦，跟人打交道的交互设计是最有趣的呢！</p>',50,1,'/img/avatar/avatar4.png',2),(5,'小小哥','建筑学大四学生','街头涂鸦入门','<p class=\'detail-header\'>个人资料</p> <p>小小哥，建筑学大四学生，爱好玩，性格懒。涂鸦，冲浪，滑板，游泳，煮咖啡，做模型，做手工烟斗，你想怎么玩？聊书聊电影聊哲学聊人生（聊八卦也可以啦！）你想怎么聊？</p> <p class=\'detail-header\'>主题简介</p> <p>挑一个阳光明媚的下午，或者阳光不明媚，无所谓，心中有船可扬帆～让小小哥姐姐带你玩！带上喷漆带上手套（或者不带！）躲进繁华街道背后的小路………小小哥会指导你进行一些涂鸦入门训练，带你体验，分享给你我的经验！</p>',80,1,'/img/avatar/avatar5.png',2),(6,'何尼玛','大四广告狗','美式发音不单是京片子儿化音（全程英语交流）','<p class=\'detail-header\'>个人简介</p><p>杭州市中小学生射团体赛亚军，杭州外国语学校第一学期黑板报第四名，华科杯节奏大师锦标赛举办人，台湾机车零车祸纪录保持者，徒手剥螃蟹腿腿大赛冠军，朋友圈戛纳小视频节大奖得主，劝分不劝和感情大师。可以与她交流方向包括但不限于：平面设计，明星八卦，手机摄影，餐厅推荐，台湾交换，选购电动牙刷等等。</p><p class=\'detail-header\'>主题简介</p><p>美式发音不单是京片子儿化音（全程英语交流）：从教会你唱生活大爆炸主题曲学会连音的技巧，以及“问候你祖宗”的36种委婉表达。如何政治正确的与国外友人嬉笑怒骂开黄腔，以及帮你取个 英格历时 尼克内姆。但是托福雅思的口语考试我不真的不能包你满分过（真诚脸）。</p>',50,1,'/img/avatar/avatar6.png',2),(7,'蠢兰','新闻学院大二','一小时pr入门','<p class=\'detail-header\'>个人资料</p> <p>蠢兰 新闻学院大二学生，冰岩作坊运营组；华中科技大学新媒体中心影像组；华中大V-fun团队；2015年毕业电影摄像助理；2016年毕业电影宣传助理、执行助理，负责2016年毕业电影宣传组视频制作，有多次作业剪辑和外包剪辑经历。</p> <p class=\'detail-header\'>主题简介</p> <p>pr安装一年不会用？作业视频救急？会声会影太尴尬？视频教程太枯燥？一小时教会你premiere基本操作，以及简单的前后期技巧、MV综艺等主题视频制作技巧等。我会好好准备PPT和实例，并且当场演示的哦~</p>',50,1,'/img/avatar/avatar7.png',3),(8,'王馨怡','女神御用化妆师','半小时实际传授化妆技巧','<p class=\'detail-header\'>个人资料</p> <p>王馨怡，新闻学院播音与主持专业大二学生。性格开朗，爱唱歌，爱玩游戏，喜欢化妆，有丰富的化妆经验，是华科女神郑妙的御用化妆师哦。</p> <p class=\'detail-header\'>主题简介</p><p>半个小时实际传授化妆技巧，让毫无化妆经验的妹子从此可以轻松上手。在教会你日常妆的同时也会为你打造一个美美的妆容。（化妆品需自己准备）</p>',120,1,'/img/avatar/avatar8.png',3);
/*!40000 ALTER TABLE `helper` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-19 23:22:09
