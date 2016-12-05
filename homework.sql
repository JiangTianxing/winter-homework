/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : homework

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-03-05 18:11:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `ad-id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '登录名',
  `password` varchar(100) NOT NULL COMMENT '用户密码',
  PRIMARY KEY (`ad-id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'jx3536', '5de909055631600b59cd1d289bce912e');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `jour_id` int(5) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('1', '20160305030009852.jpg', 'album');
INSERT INTO `image` VALUES ('77', '20160305051021470.jpg', 'album');
INSERT INTO `image` VALUES ('78', '20160305051034632.jpg', 'album');
INSERT INTO `image` VALUES ('79', '20160305060448784.jpg', 'album');
INSERT INTO `image` VALUES ('80', '20160305065952817.jpg', 'album');

-- ----------------------------
-- Table structure for journal
-- ----------------------------
DROP TABLE IF EXISTS `journal`;
CREATE TABLE `journal` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `jour_time` datetime NOT NULL,
  `jour_title` varchar(255) NOT NULL,
  `jour_content` text NOT NULL,
  `jour_tag` varchar(100) NOT NULL,
  `jour_love` int(5) unsigned NOT NULL,
  `comment` int(5) unsigned NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of journal
-- ----------------------------
INSERT INTO `journal` VALUES ('21', '2015-12-29 03:09:40', '心灵鸡汤', '<span style=\\\"font-family:KaiTi_GB2312;\\\"><span style=\\\"\\\\&quot;color:#252525;font-family:SimSun,\\\" 宋体;font-size:16px;line-height:33.6px;background-color:#ffffff;\\\\\\\"=\\\"\\\"><span style=\\\"font-size:30px;line-height:40px;font-family:KaiTi_GB2312;\\\"><span style=\\\"\\\\&quot;color:#252525;font-family:SimSun,\\\" 宋体;font-size:16px;line-height:33.6px;background-color:#ffffff;\\\\\\\"=\\\"\\\"><span style=\\\"font-family:KaiTi_GB2312;font-size:30px;line-height:40px;\\\">有时候我们之所以活得累，往往是因为放不下面子来做人。找上门的幸福不长久，可能它认错了门。真正长久的幸福，靠自己经营。经营在哪里，收获在哪里。经营理财身不穷，经营思想心不贫。持久的幸福感，要靠经营一颗宁静，稳重，忍耐</span></span></span><span style=\\\"font-family:华文行楷;font-size:30px;line-height:40px;\\\"></span></span></span>', '心灵鸡汤', '1', '0', '0');
INSERT INTO `journal` VALUES ('23', '2014-12-17 03:50:22', 'mvc', '&nbsp;&nbsp;&nbsp;&nbsp;视图是用户看到并与之交互的界面。对老式的Web应用程序来说，视图就是由HTML元素组成的界面，在新式的Web应用程序中，HTML依旧在视图中扮演着重要的角色，但一些新的技术已层出不穷，它们包括Adobe Flash和像XHTML，XML/XSL,WML等一些标识语言和Web services.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;MVC好处是它能为应用程序处理很多不同的视图。在视图中其实没有真正的处理发生，不管这些数据是联机存储的还是一个雇员列表，作为视图来讲，它只是作为一种输出数据并允许用户操纵的方式。[6] <br />\r\n模型<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;模型表示企业数据和业务规则。在MVC的三个部件中，模型拥有最多的处理任务。例如它可能用像EJBs和ColdFusion Components这样的构件对象来处理数据库，被模型返回的数据是中立的，就是说模型与数据格式无关，这样一个模型能为多个视图提供数据，由于应用于模型的代码只需写一次就可以被多个视图重用，所以减少了代码的重复性。[6] <br />\r\n控制器<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;控制器接受用户的输入并调用模型和视图去完成用户的需求，所以当单击Web页面中的超链接和发送HTML表单时，控制器本身不输出任何东西和做任何处理。它只是接收请求并决定调用哪个模型构件去处理请求，然后再确定用哪个视图来显示返回的数据。<br />\r\n<br />', 'php', '4', '0', '0');
INSERT INTO `journal` VALUES ('24', '2016-03-05 05:12:57', '计算机导论jkjskdjksd', '<span style=\\\"font-size:13.3333px;\\\"> &nbsp;&nbsp;&nbsp;&nbsp;目前的计算机处理的是二进制的“位”（bit），只有两种状态，0或1；而量子计算机则用“量子位”（qubit）来编码和计算。一个量子位，可以是1，也可以是0，还可以同时是1与0的某种叠加状态（由叠加权重的不同，这种叠加态理论上可以是无穷多的，但实际中很难调整权重，一般就是各占一半的权重或说比例）。</span><br />\r\n<span style=\\\"font-size:13.3333px;\\\">计算机性能的一个重要指标是它内部所使用的开关的数量，它决定了计算机的存储单元能有多少，基本上就是通常所说的内存有多少位。设想只<span style=\\\"font-family:KaiTi_GB2312;\\\"></span>有两位内存的最简计算机，它有4种可能的状态：00、01、10、11。如果这是传统的计算机，那么在任何一个确定的时刻，它只能处于上述4种状态中的一种状态里。然而如果它是量子计算机，那么两个量子位都可以处于态叠加的状态，因此它可以同时工作在上述所有的4种状态中！就像4台传统的计算机并行地联结在一起同时工作。</span><br />\r\n<span style=\\\"font-size:13.3333px;\\\"> &nbsp;&nbsp;&nbsp;&nbsp;<span style=\\\"font-family:KaiTi_GB2312;\\\"></span>一般来说，一台量子计算机能够同时具有的状态是2的以量子位为次数的乘幂。上段中，2个量子位，同时处于的状态数就是2的2次方，是4；若是3个量子位，则同时状态数是2^3=8……这是按指数规律爆增的数量！当一台量子计算机由联结在一起的10个量子位组成时，它的运算能力就相当于一台具有2^10=1024个开关（位）所构成的传统的计算机。如果一台量子计算机具有一个1000量子位的内存，那么它工作起来就像具有2^1000=10^301位内存的一台传统计算机。10^301，1后边301个0！这个数字比整个宇宙中全部粒子的数目还大得多！亦即，即使把宇宙中所有粒子都利用起来制成一台传统的计算机，也远远抵不上这样一台量子计算机！当然，要使1000量子位都处于彼此关联的可控的叠加态之中，要克服的困难实在还有太多！</span>', '计算机', '2', '0', '0');

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `id` int(5) unsigned NOT NULL,
  `reply` text,
  `jour_id` int(5) unsigned NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `comments` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reply
-- ----------------------------

-- ----------------------------
-- Table structure for user_information
-- ----------------------------
DROP TABLE IF EXISTS `user_information`;
CREATE TABLE `user_information` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(100) NOT NULL COMMENT '博客主题',
  `mylogo` varchar(255) NOT NULL COMMENT 'logo图片路径',
  `real_name` varchar(255) NOT NULL COMMENT '姓名',
  `qq` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_information
-- ----------------------------
INSERT INTO `user_information` VALUES ('1', 'my blog', 'zanwu', '蒋天星', '972786892', '18166564004');
