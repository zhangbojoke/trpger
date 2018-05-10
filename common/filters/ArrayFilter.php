<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/9
 * Time: 18:04
 */

namespace common\filters;


class ArrayFilter
{
    public static function arrayFilter($params){
        return array_filter($params, function ($var) {
            return ($var !== NULL && $var !== FALSE && $var !== '');
        });
    }

    public static function sensitive($name){
        $array = ['64','89','911','1989','8964','198964','18禁','1989年','活埋','攻台作战计划','集团军','3D轮盘','3退','4风','4事件','5毛','5月35日','610办公室','628事件','64惨案','64大屠杀','64时期','64事件','64学潮','64学运','64运动','6合','6合彩','6四','70天大事记','75事件','军区','7周年','8.18事件','8023部队','8341部队','89风波','89民运','89年','89年春夏之交','89事件','89学潮','89学潮大屠杀','89学潮血腥屠杀','89学运','89运动','89之','8x8','8的平方事件','9.12事件','93.1政策','95式自动步枪','99bb','9ping','9风','9评','9坪','9学','a4u','a4y','adrenaline','adult','aiww','anal','androst','a扁','a片','bajiu','baodong','baoluan','baozha','bao炸','ba课','bbc中文网','BB弹','BB枪','benzodiazepines','bjork','BLOOD','boycott','炸弹','炸药','cannabis','cao','cao你','CCAV','CCP','chinesedemocracy','CLY','cocain','communistparty','culture revolution','dajiyuan','dalai','da案','democracy','diacetylmorphine','diamorphine','DIY原子弹','dizhi','di制','dl喇嘛','dpp大法','duli','erythropoietin','fa lun','fakesheji','falu','FaLun','falundafa','falungong','fangong','fanhua','fa轮','Fa轮功','fenlie','Flg','FL大法','FL功','fq','free Tibet','fuck','gay片','GCD','gc党','gfw','rights','gongchandang','GONG党','gong和','googleblogger','g产','g点','g匪','g片','h1n1','hardcore','hbv','heroin','heroine','hmtd','http://','huzhuxi','h动画','h动漫','h漫','h图','incest','Jasmine','jiangzemin','jieyan','jie严','jing坐','jiuping','JMZ','K 粉','kao','KC短信','KC嘉年华','KC提示','KC网站','ketamine','K粉','lama','lasa','la萨','LHZ','lichangchun','lihongzhi','liuhecai','liusi','liu四','mayingjiu','mdma','minghui','min主','morphine','m功学','naive','narcotic','ONS','porn','Power to the Falun Gong','px','px项目','qingzhen','Red Corner','renquan','sb','secom','Seven Years in Tibet','sexinsex','shangfang','shit','simple','SIM卡复制器','sm','sm女王','SM用品','square','strychnine','suicide','taidu','taiwan','TAM','tamoxifen','testosterone','tiananmen','tiananmen square','tibet','Tibet free','titor','TNT','TNT炸弹','tnt炸药','tokyohot','too simple sometimes naive','tuidang','twdl','txt下载','UP8新势力','UP新势力','VOA采访热比娅','wengan','weng安','wenjiabao','wikipedia','WK','wubangguo','wukan','www.','www.cipfg.org','xiao77','xiaoping','xijinping','xing伴侣','xizang','xi藏','xuechao','XX功','x藏','x民党','yangjia','yang佳','yin荡','youtube','youxing','you行','yuce','y佳','zangdu','zang人','ZF','zf大楼','zhadan','zhayao','zha弹','zha药','zhengfu','ZHU所生！','zifen','zi杀','阿巴斯','阿坝','阿扁','阿扁推翻','阿宾','阿賓','阿波罗网','阿凡提机','阿芙蓉','阿共','阿拉伯','阿曼哈吉','阿旺晋美','埃及','艾ww','艾瓜子','艾虎','艾虎子','艾汇款','艾借款','艾捐款','艾末末','艾胖子','艾神','艾婶','艾未','艾未未','艾晓明','艾债主','爱国运动正名','爱国者同盟','爱国者同盟网站','爱他死','爱未来','爱液','爱液横流','安非他命','安魂网','安街逆','安局办公楼','安局豪华','安拉','安门事','安眠酮','安眠藥','按摩','按摩棒','按照马雅历法','案的准确','暗访包','凹晕','奥你妈的运','奥晕','奥孕','懊孕','懊运','八宝山','八大','八大类社会组织','八级地震','八九','八九六四','八九民','八九民运','八九年','八九学','八九学潮','八九学运','八九运动','八九政治','八玖','捌九','捌玖','把病人整','把邓小平','把学生整','罢ke','罢参','罢餐','罢吃','罢饭','罢工','罢工门','罢教','罢考','罢课','罢课潮','罢食','罢市','罢学','罢运','霸工','霸课','霸占土地','白痴','白黄牙签','白嫩','白皮书','白色恐怖','百家乐','百乐二呓','败培训','班子','斑蝥','办理','办本科','办理本科','办理各种','办理票据','办理文凭','办理真实','办理证件','办理证书','办理资格','办文凭','办怔','办证','半刺刀','辦毕业','辦證','邦国','帮派','帮人怀孕','帮招人','谤罪获刑','磅解码器','磅遥控器','包二奶','包过','包青天机','包养','薄督','薄瓜瓜','薄熙来','宝在甘肃','保钓','军委公开信','保钓组织','保过','保过答案','保护性拆除','临时性强奸','报复执法','报禁','报码','报码聊天','暴动','暴干','暴行','暴奸','暴菊','暴力拆迁','暴力袭警','暴力执法','暴露','暴乱','暴乳','暴淫','暴政','爆zha','爆草','爆发骚','爆菊','爆你菊','爆破','爆乳','爆炸','爆炸物','北大校园BBS','北戴河会议','北高联','北京帮','当局','独立','北京风波','北京黑幕','战区','市委黑幕','北政','政坛名人','巡回讲法','北省委门','被操','被插','被打死','被干','被删除','被指抄袭','被中共','本公司担','本拉登','本期开奖','本无码','苯巴比妥','苯丙胺','崩盘','屄','逼奸','毕业證','避孕膜','边少斌','编成与基地','鞭满','变牌绝','辩词与梦','婊子','婊子养的','别梦成灰','别他吗','冰 毒','冰毒','冰火毒','冰火佳','冰火九重','冰火漫','冰淫传','冰在火上','兵力部署','波推龙','剥夺政治权利','剥夺政治权利终身','博彩娱','博会暂停','博讯','博讯新闻网','博园区伪','不爱党','不办人事','不查都','不查全','不厚','不思四化','布卖淫女','步qiang','部忙组阁','部是这样','擦你妈','财力物力','财众科技','采花堂','彩宝','彩票','彩票选号机','彩票预测','踩江','踩踏事','踩踏事故','蔡名照','蔡武','参拜','参谋本部','参政传奇','惨案','惨奥','仓井空','苍山兰','苍蝇水','藏du','藏m','藏暴乱','藏春阁','藏毒','藏独','藏独立','藏獨','藏妇会','藏民','藏青会','藏人','藏西','藏字石','操逼','操黑','操烂','操了嫂','操你','操你大爷','操你妈','操你娘','操你全家','操你祖宗','操女人穴','操嫂子','操死','操他妈','操我','曹刚川','艹你','草场地','草你吗','草你丫','肏你','肏死','厕奴','策没有不','曾道人','曾培炎','曾庆红','插b','插暴','插逼','插比','插进','插你','插屁屁','插我','插阴','查克明','察象蚂','刹笔','拆迁','拆迁灭','柴玲','柴王群','禅密功','蟾蜍迁徙','产党共','常委','常委汪兆钧','常征贵州','超越红墙','兵变','政变','潮吹','潮喷','车臣','车库','车仑','车仑大法','车仑工力','车牌隐','车用电子狗','撤销职务','撤职。','陈s扁','陈炳德','陈光诚','陈良宇','陈少勇','陈绍基','陈水扁','陈水文','陈随便','陈同海','陈维席安徽','陈希同','陈相贵','陈一文','陈一咨','陈至立','陈忠','成本价','成都军区','成都美领馆','成佛做主','成克杰','成人dv','成人电','成人电影','成人卡通','成人聊','成人论坛','成人片','成人色情','成人视','成人图','成人网站','成人文','成人文学','成人小','成人小说','成人游戏','诚信通手机商城','城管暴力执法','城管灭','程维高','惩公安','惩贪难','吃精','吃人','迟浩田','持不同政见','赤匪','赤裸','冲凉死','冲突','涉毒','充气娃','抽插','抽一插','抽着大中','抽着芙蓉','仇共','联系','出售','出售答案','出售弹药 ','出售发票','出售假币','出售军','出售雷管','出售雷管炸药自制炸弹','出售器官','出售枪支','出售QQ','出售枪支 联系','出售肾','出售手枪','出售手枪 电话','出售手枪 手机','出售电话','出售炸药 联系','出现暴动','处男','川b26931','穿透仪器','传单','传九促三','传九退三','传送答案','春宫图','春水横溢','春药','纯度白','纯度黄','慈悲功','次通过考','刺激','丛福奎','促红细胞生成素','促性腺激素','猝死','催眠水','催情粉','催情药','催情藥','挫仑','哒赖','达毕业证','达杜拉','达赖','达赖喇嘛','达米宣教会','答an','答案包','答案提供','答案卫星接收机','答复口径','鞑子','打标语','打错门','打倒','打倒共产党','打倒共产主义','打倒共铲党','打倒共党','打倒胡锦涛','打倒江泽民','打倒江主席','打倒李鹏','打倒罗干','打倒温家宝','打倒中共','打倒中国','打倒中国共产党','打倒朱镕','打飞机专','打死经过','打死人','打台湾','打砸办公','打砸抢','打针','大sb','大波','大法','大法弟子','大法修炼者','大湖帮','大鸡巴','大雞巴','大纪元','大妓院','大揭露','大力抽送','大陆官方','大麻','大麻树脂','大麻油','大奶子','大批贪官','大肉棒','大乳','大赦国际','大师','大选','大学暴动','大预言','大圆满法','大昭寺','大嘴歌','代办','代办各','代办文','代办学','代办员','代办制','代辦','代表烦','代开','代開','代考','代理发票','代理票据','代您考','代生孩子','代讨债','代写毕','代写论','代写','代血浆','毒品','代孕','代孕妈妈','代追债','带考','带路党','贷办','贷借款','贷开','待考','戴海静','戴相龙','丹增嘉措','单春','单平','旦科','弹夹','弹药配方','弹种','当代八乱','当代七整','当官靠后台','当官要精','当官在于','当局严密封锁','党','党保平安','党产共','党的官','党的喉舌','党风日下','党棍','党国','党后萎','党禁','党魁','党内权力','党内权争','党内危机','党内言事潮','党前干劲','党委书记','安插','党校','党章','荡妇','荡女','刀架保安','导爆索','导的情人','导叫失','导人的最','导人最','导小商','倒扁','倒台','到花心','到市政府','盗撮','盗号','盗窃','盗取qq','盗取密码','得财兼','德国之声','德江','灯草和','登陆台湾','等级證','等屁民','等人老百','等人是老','等人手术','邓矮子','邓不群','邓狗','邓朴方','邓小平','邓爷爷转','邓颖超日记','邓玉娇','低价出售','低俗屠夫','低制','抵zhi','抵制','抵制奥运','抵制北京奥运','抵制变电站','抵制共产党','抵制共产主义','抵制胡锦涛','抵制江泽民','抵制江主席','抵制李鹏','抵制罗干','抵制温家宝','抵制中共','抵制朱镕基','底制','地磅解码器','地磅遥控器','地产之歌','地奈德','地塞米松','地西泮','地下教会','地下钱庄','地下先烈','地震','地震哥','地震来得更猛烈','地震预测','弟弟睡了','帝国之梦','递进民主','递纸死','第21集团军','第二十三条','第二首都','第三次世界大战','第五代红人','接班梯队','第一书记','点金商务','点数优惠','电狗','电话定位器','电话监','电话交友','电话拦截器','电话窃听','电话追杀系统','电击枪','电鸡','电警棒','电脑传讯','电子狗','甸果敢','屌','钓鱼岛','钓鱼台','蝶舞按','丁关根','丁磊','丁书苗','丁香社','丁鑫发','丁子霖','顶花心','顶帖器','顶贴机','东北独立','东方闪电','东复活','东京热','新闻网','东森','东尸骨村','东师古','东突','解放','解放组织','突厥','东解','革命阵线','民族革命','东突联盟','伊斯兰革命','东土耳其','东伊','東京熱','董光峰','董元辰','动乱','动态网','冻尸骨村','洞小口紧','都当警','都当小姐','都进中央','豆腐渣','毒豺','毒蛇钻','独裁','独夫民贼','独立台湾','独立西藏','独立中文笔会','独派','赌博机','赌具','赌球网','杜导正','杜冷丁','杜世成','杜宪','短信答案','短信广告','短信截','短信猫','短信群发','短信群发器','短信商务广告','短信投票业务','段桂清','段录定','段义和','清算','对日强硬','对峙','死难者','对中共的姑息就是对死难者的残忍','多党竞争','多美康','多人轮','多维','多维新闻网','夺权','躲猫猫','屙民','俄罗斯轮盘','俄羅斯','恶党','恶搞公安部领导','恶搞人民币','恶警','恶势力操','恶势力插','恩氟烷','儿园惨','儿园砍','儿园杀','儿园凶','二\敏感词','二二八事件','二奶大','二十四事件','贰拾年','贰拾周年','发浪','发抡','发抡功','发仑','发仑da发','发伦','发伦工','发伦功','发囵','发沦','发纶','发轮','发轮功','发轮功陈果','发论','发论工','发论公','发论功','发牌绝','发瞟','发票出','发票代','发票代开','发票销','发情','发生暴动','发生关系','发贴工具','发贴机','发正念','發票','乏抡','乏仑','乏伦','乏囵','乏沦','乏纶','乏轮','乏论','伐抡','伐仑','伐伦','伐囵','伐沦','伐轮','伐论','罚款黑幕','罚抡','罚仑','罚伦','罚囵','罚沦','罚纶','垡抡','垡仑','垡伦','垡囵','垡沦','垡纶','垡轮','垡论','阀抡','阀仑','阀伦','阀囵','阀沦','阀纶','阀论','筏抡','筏仑','筏伦','筏囵','筏沦','筏纶','筏轮','筏论','法灬轮灬功','法丶轮丶功','法0功','法L','法lg','法lun','法lun功','法L功','法O功','法X功','法车仑','法功','法会','法拉盛','法拉盛缅街','法愣','法力像佛','法抡','法抡功','法仑','法仑功','法伦','法伦功','法囵','法沦','法纶','法轮','法轮大法','法轮佛','法轮佛法','法轮工','法轮公','法轮功','法轮义','法輪','法论','法论功','法某功','法能功','法十轮十功','法维权','法西藏主义','法西斯','法一轮','法一轮一功','法院','法院给废','法谪','法谪功','法正','法正乾','砝抡','砝仑','砝伦','砝囵','砝沦','砝纶','砝轮','砝论','珐学','珐.輪功','珐抡','珐仑','珐伦','珐囵','珐沦','珐纶','珐轮','珐论','翻墙','反G','反party','反奥','反测速雷','反党','反对','反社会','反对磁悬浮','反对党','反对共产党','反对共产主义','日本介入','反分裂','反腐总攻','反攻大陆','反共','反共传单','反共言论','反华势力','反雷达测','反雷达测速','反屏蔽','反社会主义','反右运动','反中共黑色暴力','泛蓝','泛绿','范广举','范燕琼','方滨兴','方励之','方迷香','方寿伟','智悟气功','防电子眼','防区和任务','防身枪','防身药水','房贷给废','仿真枪','仿真手枪','仿真证','访民','放尿','非暴力不合作','非法拆毁','非法征用','非正常死亡','肥逼','诽谤罪','费私服','费孝通','中国国旗','焚烧','焚国旗','粉嫩','粉碎四人帮','粉穴','粪青','愤青','风骚','风山陆军','风月大陆','封从德','封面女郎','封锁','封锁消','封锁消息','冯锦华','冯正虎','逢8必灾','逢9必乱','逢八必灾','逢九必乱','佛怀煽仇录','佛同修','夫妻交换','呋塞米','福尔马林','福香巴','福音会','府包庇','府集中领','腐败','腐败中国','付晓光','负面信息删除','妇销魂','附送枪','赴港生子','复印件生','复印件制','复员','复员军官','复员军官代表','复员军官诉求书','副主席','富姐','富锦失地','富民穷','富婆','富婆给废','甘孜','感扑克','干你','干你妈','干你娘','干你全家','干死','干死你','干穴','冈本真','冈山空军','肛交','肛门','肛门是邻','岡本真','钢针狗','钢珠枪','港澳博球','港馬會','港鑫華','港支联会','高层权力之争','高潮','高干子弟','高干名单','高干子女','高官','高官互调','高官挥霍公款','高官名单','高官子女','高行健','高就在政','高考黑','高丽棒子','高利贷','高勤荣','高清在线','高息贷款','高薪养廉','国家电力','高莺莺','高瑛','高志晟','高智成','高智晟','高自联','搞媛交','告全国同胞书','告洋状','告长期','格证考试','个邪的党','各个银行全称','各类考试','各类文凭','各种发票','根达亚文明','根浴','跟帖器','跟踪器','工产党','工程吞得','工蜂六型','工力人','工人党','工业炸药配方设计','公安','公安错打','公安网监','公产党','公开小姐','公开信','公民社会','公头','公投','功法','功学员','功友','攻官小姐','攻占台湾','恭喜你的号码','恭喜您的号码','拱铲','共chan党','共c党','共X党','共残裆','共残党','共残','共残主义','共惨','共惨党','共产','共邪','共产党','共产党的报应','共产党的末日','共产党腐败','共产党下台','共产党专制','共产觉','共产王朝','共产主义','共产主义的幽灵','共产主义黑皮书','共产专制','共铲','共铲党','共党','共独','共匪','共狗','共和','共和国2049','共青背景','共青团派','共青团中央','共贪党','共王储','共一产一党','共贼','共字玄机','贡挡','供产','供铲裆','供铲党','供铲谠','供应发票','勾结奸商','狗操','狗草','狗产蛋','狗粮','狗娘养','狗娘养的','狗屁专家','狗日的','狗友','狗杂种','古方迷香','古兰经','股市圈钱','鼓动一些','乖乖粉','关闭所有论坛','关塔摩','观音法门','官逼民反','官场日志','官匪','官匪一家','官僚主义','官商勾','官商勾结','官也不容','官因发帖','贯通两极法','光复民国','光学真题','光祖','广安','广安事件','广场','广场上的热血','广场上的血','广场事件','广告代理','广州军区','龟头','规模冲突','跪真相','滚圆大乳','郭伯雄','郭春平','郭伙佳','郭金龙','郭泉','国wu院','国办发','国产av','国防部','国际特赦','国际投注','国家大事','国家副主席','国家妓','国家软弱','国家吞得','国库折','国民大会','国民党','国母','国台办','国统纲领','国统会','国务院副总理','国新办','国一九五七','国语运动','国政通','国之利刃','國內美','裹本','哈狗帮','哈药直销','蛤蟆','蛤蟆转世','还会吹萧','还看锦涛','海luo因','海访民','海军部署','海洛因','海外民运','韩福才','韩桂芝','韩国狗','韩正','汉维','汉芯造假','行长王益','行政院','航空母舰','航空售票','豪圈钱','豪乳','好嫩','号码百事通','号屏蔽器','喝血社会','喝一送一','合彩','合法财产','何洪达','何清涟','何新','和狗交','和狗性','和狗做','和弦','和谐','和谐社会','河蟹社会','核蛋','贺国强','贺立旗','贺卫方','黑逼','黑车','黑恶势力保护伞','黑火药的','黑监狱','黑手党','黑庄','弘志','红病历','红床','红客联盟','红色贵族','红色恐怖','红外透视','红志','闳志','宏法','宏志','泓志','荭志','虹志','洪传','洪清源','洪吟','洪哲胜','洪志','紅色恐','鸿志','侯德健','侯伍杰','后庭','后穴','胡+温','胡X紧','胡X涛','胡X掏','胡X套','胡曾合作','胡曾江恶斗','胡曾联手','胡的接班人','胡哥','胡公子','胡海峰','胡海青','胡海清','胡佳','胡江','胡江曾','胡江风云','胡江关系','胡江内斗','胡江争斗','胡金滔','胡紧X','胡紧掏','胡紧套','胡锦','胡锦X','胡锦涛','胡锦涛接班人','胡錦濤','胡进涛','胡派','胡派军委','胡派人马','胡平','胡启立','胡适眼','胡书记','胡涛','胡掏X','胡套X','胡温','胡温暴政','胡温核心','胡温接班人','胡温新政','胡温政体','胡温政治','胡瘟','胡系','胡系人马','胡下台','胡星斗','胡耀邦','胡长清','胡主席','胡总','胡总书记','血案','偷情','湖淫娘','湖州抗税','虎骑','虎头猎','互联网审查','信息办公室','护法','护卫团','花花公子','划老公','华藏功','华东医院','华国锋','华建敏','华门开','中国革命党','华盛顿邮报','华闻','化工厂爆炸','化学扫盲','肉身显现','环球证件','换届','换妻','换妻俱乐部','换肾','皇冠投注','皇家轮盘','黄冰','黄纪诚北京','黄菊','黄菊遗孀','黄丽满','黄莉新','黄片','黄浦江','黄奇帆','黄雀行动','黄色','黄色电影','黄色小电影','黄松有','黄瑶','黄玉斌','回复可见','回汉冲突','回汉纠纷','回教','回良玉','回民','回民暴动','回民猪','回忆六四','回族','惠澤社群','慧聪','昏药','浑圆','浑圆豪乳','混蛋','活不起','活埋名单','活体取肾','活摘器官','火车也疯','火凤凰','火药配方','火乍','机定位器','机号定','机号卫','机卡密','机屏蔽器','机要费','鸡巴','鸡吧','鸡奸','积克馆','姬胜德','总参','基本靠吼','基地','基地组织','ISIS','伊斯兰国','灵恩布道团','基国','激光气','激光汽','激流中国','激情','激情电','激情电话','激情电影','激情短','激情交友','激情妹','激情炮','激情视频','激情小电影','吉林士兵','吉林战士','级办理','级答案','急需嫖','疾病业债说','集合','集会','集体打砸','集体腐','集体抗议','集体签名','集体淫','集体自杀','几吧','挤乳汁','擠乳汁','记号扑克','记签','记者无疆界','喇嘛流亡','记者赵子法','纪念达赖','纪念文革','妓女','妓女的口号','济南军区','济世灵文','寂寞男','寂寞女','寂寞少妇','加盟连锁','加油机干扰器','佳静安定','佳静安定片','家le福','家l福','家宝','家属被打','家一样饱','甲虫跳','甲睾酮','甲基安非他明','甲流了','贾甲','贾庆','贾庆林','假币出售','假发票','假庆淋','假文凭','假证件','驾崩','驾鹤','奸成瘾','奸情','奸杀','监察院','监听器','监听王','监狱管理局','监狱里的斗争','兼职','兼职上门','简易DIY','简易炸','炸药制作','炸弹教程','简易C4','贱b','贱比','贱货','贱人','江亲信','江core','江z民','江北','江边','江丑闻','江嫡系','江东','江毒','江独裁','江端仪','江鬼','江蛤蟆','江核心','江黑心','江胡','江胡内斗','江淮汽车','江祸心','江家','江家帮','江姐','江铠同','江铃汽车','江罗','江驴','江美琪','江绵恒','江民','江南','江派','江派和胡派','江派人马','江青','江泉集团','江人马','江若琳','江三表','江三条腿','江上青','江氏','江氏常委','江氏集团','江氏家族','江氏政治局','江氏政治委员','江梳头','江宋','江苏','江太上','江西','江戏子','江系','江系人','江系人马','江心公园','江讯','江爷爷','江映蓉','江语晨','江宰民','江泽慧','江泽民','江泽明','江贼','江贼民','江浙','江中健胃消食片','江中药业','江猪','江主席','茳澤民','姜殿武','姜维平','疆独','疆獨','讲法','讲法传功','蒋公','蒋公纪念歌','蒋捷连','蒋彦永','焦国标','脚交','叫床','叫自慰','教徒','揭贪难','截访','姐包夜','姐服务','姐兼职','姐上门','解放tw','解放军','解放军总医院','解放台湾','解决台湾','解密软件','解体的命运','解体中共','戒yan','戒严','借第二代身份证攻击我党和政府','借腹生子','金德琴','金盾工程','金黄色葡萄球菌','金鳞岂是池中物','金麟岂是池中物','金歪日','金扎金','金钟气','津大地震','津地震','津人治津','锦涛','进攻台湾','进来的罪','近平','禁网禁片','京地震','京夫子','京华','京华时报','京要地震','经典谎言','经济犯罪','荆福生','精神药品','精液','精子','精子射在','景涛','警察不作为','警察被','警察的幌','警察开枪','警察滥用职权','警察殴打','警察说保','警察特权','警察知法犯法','警车雷达','警方包庇','警匪','警匪一家','警徽','警民冲突','警卫局','警用品','径步枪','敬请忍','靖国','静zuo','静坐','境外媒体','纠纷','究生答案','九ping','九常委','九风','九龙论坛','九抨','九评','九评传 保平安','九评共','九评共产党','九凭','九十三运动','九学','九长老','酒瓶门','酒象喝汤','酒像喝汤','救度众生说','救市','就爱插','就去日','就要色','就业歧视','菊暴','菊爆','菊花洞','菊门','菊穴','举国体','巨屌','巨额财产','巨奶','巨乳','据说全民','聚集','绝食','绝食声','军刺','军队国家化','军阀','军品特','军事社','军委','军用QQ','军用手','军长发威','军转','咖啡因','卡辛纳大道和三福大道交界处','开苞','开除党籍','开邓选','开放杂志','开枪','开锁工具','开天目','開碼','開票','凯他敏','冚家产','砍杀幼','砍伤儿','看JJ','看中国','康没有不','康日新','康生丹','康跳楼','亢议','抗议','抗议磁悬浮','抗议中共当局','考答案','考后付款','考机构','考考邓','考联盟','考前答','考前答案','考前发放','考前付','考前密卷','考前预测','考设备','卖答案','考作弊','考试包过','考试保','考试答案','考试机构','考试联盟','考试枪','考试院','考试作弊','考试作弊器','考题','考研考中','考中答案','嗑药','磕彰','克分析','克拉玛依','克千术','克强','克透视','刻章','刻章办','客户端非法字符','空和雅典','空军部署','空椅子','空中民主墙','孔丹','孔摄像','恐怖','恐怖分子','恐怖傻瓜手册','分子DIY','恐怖必备','箱炸弹','分子傻瓜手册','恐怖份子','恐怖袭击','恐怖主义','恐共','控诉世博','控制媒','口爆','口活','口交','口射','口手枪','口淫','骷髅死','裤衩党','裤袜','垮台','快感','快速办','款到发货','狂操','狂插','邝锦文','矿难不公','葵花籽','神功','拉sa','拉帮游说','拉登说','拉开水晶','拉票贿选','拉萨','拉萨僧人','拉线飞机','啦撒','啦萨','啦沙','喇嘛','辣妹子辣','来福猎','来俊臣','来源不明罪','赖昌星','赖达','癩蛤蟆','兰州军区','拦截器','蓝田造假案','蓝营','澜沧江','滥用职权','狼全部跪','狼友','浪逼','浪妇','浪叫','浪女','浪穴','老艾','老共','老胡','老虎机','老虎庙','老江','老妈蹄花','老人集团','乐透码','了件渔袍','雷管','雷人女官','类准确答','涉黑','黎庆洪','黎阳平','李宝金','李滨','李达昌','李大轮子','神华','李大强','李登辉','李恩潮','李国谅','李红痔','李宏志','李洪X','李洪志','李鸿忠','李纪周','李嘉廷','李克强','李鹏病重','李启红','李群','李锐','李瑞环','李世辉','李树菲','李思思男友','李四光预测','李堂堂','李天羽','李伟信','李现原','李晓英','李效时','李鑫鑫','李义强','李咏曰','李源潮','李长春','李肇星','理各种证','理是影帝','理证件','理做帐报','力骗中央','力月西','历史的伤口','厉以宁','立法委员','立法院','立委','丽媛离','利他林','连发手','连锁加盟','连战','联4通','联合后','联合签名','联盟党','联名上书','联通贵宾卡','联总','联总这声传单','联总之声传单','聯繫電','练功群众','炼大法','炼功','良心犯','梁春禄','梁光烈','梁湘','两岸才子','两岸战争','两会代','两会又三','两江论坛','辽宁帮','聊视频','聊性','聊斋艳','廖伯年','廖锡龙','劣等民族','劣等人','猎好帮手','猎枪','猎枪销','猎槍','獵槍','林孔兴','林鹏汉','林文漪','临震预报','铃木麻','凌辱','零八奥运艰','零八宪章','号召','领导层','领导忽悠','领导人','领导新星','领跑第五代','领土拿','令狐计划','令计划','刘宾雁','刘荻','刘方仁','刘广智','刘华清','刘金宝','刘克田','刘连昆','刘林智','刘明康','刘奇葆','刘淇','刘四','刘维明','刘先生','刘晓波','刘晓武','刘晓原','刘晓竹','刘信达','刘亚洲','刘延东','刘艳萍','刘云山','刘长贵','刘知炳','刘志华','刘志军','留党察看','留四进三','流亡藏人','流血冲突','流血事','流血事件','流淫','六4','六HE彩','六百度四','六代接班人','六氟化铀','六合','六合采','六合彩','六合彩美女图库','六合彩券','六合菜','六和采','六和谐四','六河蟹四','六级','六死','六四','六四内部日记','六四事','六四事件','六四受难者家属证辞','六四信息','六四学潮','六四学运','六四运动','六四资料馆','六肆','六星合彩','六星合彩公司','六月联盟','龙虎斗','龙湾事件','龙小霞','龙应台','隆手指','漏乳','漏题','卢俊卿','卢星宇','鲁家善','陆独','陆丰','陆封锁','陆军部署','陆士绅','陆四','陆肆','陆同修','路青','露b','露点','露丝','卵子','乱奸','乱交','乱伦','乱伦类','乱伦小','亂倫','抡功','伦功','伦理大','伦理电影','伦理毛','伦理片','轮暴','轮操','轮大','轮法功','轮功','轮奸','轮手枪','轮子功','轮子小报','论文代','罗干','罗斯小姐','罗云光','裸聊','裸聊网','裸露','裸陪','裸体写真','裸舞视','裸照','洛阳性奴','落马','落霞缀','驴B','吕德彬','吕加平','吕秀莲','旅游新报','绿营','氯胺酮','氯噻嗪','妈逼','妈的','妈了个逼','麻痹的','麻古','麻果配','麻果丸','麻黄草','麻将透','麻醉弹','麻醉狗','麻醉枪','麻醉槍','麻醉药','麻醉藥','麻醉乙醚','蟆叫专家','马报','马继深','马凯','马克思','马勒','马列党','马烈孙','马英九','马营','马志鹏','玛雅网','码报','码中特','骂四川','吗啡','买别墅','买春','买断','买断工龄','买断职工','买官卖官','买枪','买肾','买手枪','买小车','买真枪','麦崇楷','麦当劳被砸','卖QQ号码','卖地财政','卖发票','卖枪','卖身','卖肾','卖血','卖银行卡','卖自考','满狗','满洲第三帝国','漫步丝','忙爱国','盲人律师','氓培训','猫眼工具','毛厕东','毛厕洞','毛党','毛腊肉','毛时代大饥荒揭秘','毛小平','毛一鲜','毛泽东','毛泽东复活','毛泽东侄子','毛泽民','毛贼','毛贼东','毛主席','毛主席的嫡孙','茅厕洞','没收个人财产','没收个人全部财产','没有共铲党','媒体封锁','美逼','美分党','美国广播公司','美国之音','美领馆','美女裸体','美女上门','美女写真','美乳','美沙酮','美少妇','美腿','美穴','美艳少妇','美幼','妹按摩','妹上门','媚外','门安天','门按摩','门保健','门徒会','門服務','蒙古分裂分子','蒙古回归','蒙汗药','蒙汗药粉','猛男','孟建柱','孟庆平','孟学农','私服','梦网洪志','咪咪','迷幻型','迷幻药','迷幻藥','迷昏口','迷昏药','迷昏藥','迷魂香','迷魂药','迷魂藥','迷奸','迷奸粉','迷奸药','迷情粉','迷情水','迷情药','迷失北京','迷药','迷藥','谜奸药','米凤君吉林','秘唇','密穴','蜜穴','蜜液','免电灯','免费电影','免费订购热线','免费二级域名','免费使用','免费索取','灭共','灭绝罪','灭亡中国','灭中共','民储害','民进党','民九亿商','民抗议','民权','民殇','民一主','民运','民运人士','民珠','民猪','民竹','民主','民主不能等待','民主党','民主还专政','民主女神','民主中国','民族冲突','民族问题','闵维方','抿主','敏感','敏感词','敏感瓷','敏主','明hui','明慧','明慧网','明慧周报','明镜出版社','铭记印尼','摸nai门','摸奶','摸胸','摩门教','摩小姐','魔难论','抹黑','抹红','末世劫难','末世论','茉莉花','茉莉花革','莫达非尼','漠视生命','政权','默罕默德','牟新生','母奸','母乳家','母子乱伦','木仓','木齐针','牧函','幕没有不','幕前戲','慕绥新','穆罕默德','穆罕穆德','穆斯林','穆斯林兄弟会','奶子','奈美','男公关','男奴','南充针','南街村','南京军区','脑死亡','闹独立','内斗','内裤','内射','内争人权','嫩逼','嫩女','嫩穴','嫩阴','尼可刹米','泥马之歌','倪献策','拟涛哥','你办事我放心','你的西域','你老母','你妈B','你妈闭','你妈的','你麻痹','你吗b','你他妈','年的事','年事件','娘两腿之间','娘西皮','鸟巢最少死','捏弄','聂树斌','妞上门','牛埔帮','纽崔莱七折','纽扣摄像机','纽约时报','浓精','怒的志愿','诺查丹玛斯','女被人家搞','女激情','女技师','女警执行死刑','女奴','女人和狗','女任职名','女上门','女神教','女士服务','女伟哥','女优','女優','欧阳德 广东','欧阳夏丹','鸥之歌','拍肩神','拍肩神药','拍肩型','牌分析','牌技网','派系','派系斗争','潘广田山东','潘长江','盘古','盘古乐队','判处死刑','叛逃美国','跑官要官','泡友','炮的小蜜','炮友','砲友','陪考枪','陪聊','配方','配有消','喷精','喷尿','朋党参政','彭博社','彭湖','彭丽媛','皮黔生','皮箱炸弹','皮箱炸弹构造','屁股','屁眼','嫖俄罗','嫖鸡','品香堂','平惨案','平反','平反六四','平叫到床','平西王','平义杰','苹果日报','泼尼松','迫害','仆不怕饮','普京是你爹','普萘洛尔','普提功','普通嘌','普选','七大军区','七个军区','七贤帮','七周年','七宗罪','期货配','齐鲁石化','奇迹的黄','奇淫散','骑单车出','企业军转干部','企转组[2006]1号文件','启蒙派','起诉','气狗','气枪','汽车炸弹','汽车走表器','汽狗','汽枪','氣槍','器官贩卖','千禧弘法','铅弹','前领导人','前凸后翘','前主席','钱三字经','钱小芊','欠干','枪付款','枪出售','枪的参','枪的分','枪的结','枪的制','枪货到','枪决女犯','枪决现场','枪模','枪声','枪手','枪手队','枪手网','枪销售','枪械制','枪支','枪子弹','强jian','强暴','强拆当地居民房','强奸','强奸处女','强烈抗议中共当局','强权政府','强效失忆药','强硬发言','强制拆除','强制捐款','抢其火炬','乔石','切腹','切听器','窃听器','钦点接班人','侵犯国外专利','侵害业主','亲共','亲共分子','亲共媒体','秦昌典 重庆','秦刚','秦逊辉','禽流感了','勤捞致','勤司领部','沁园春血','青帮误国','青海无上师','青天白日','轻松过','轻松制作原子弹','氢弹手','清zhen','清仓','清场内幕','清除负面','清純壆','清官团','清海师父','清海无上师','清华帮','清真','情聊天室','情妹妹','情趣用品','情色','情杀','情视频','情自拍','请点击进入','请集会','请命','请示威','请愿','请愿书','庆林','琼花问','丘广钟','邱进','邱晓华','求肾','区的雷人','娶韩国','去国声明','去中央','权斗','权贵集团','权力布局','权力分配','全1球通','全范围教会','全集在线','全家不得好死','全家死光','全家死绝','全裸','全球人文纪元','全真证','拳交','犬交','裙中性运动','群发广告机','群发软件','群奸暴','群交','群起抗暴','群体灭绝','群体事件','群体性事','群体性事件','群众冲击','冉匪','绕过封锁','惹的国','惹火身材','热比娅','人quan','人弹','人类灭亡进程表','人类罪恶论','人马','人民报','人民币恶搞','人民真实报','人木又','人妻','人权','人权保护','人权奖','人权律','人权圣火','人权圣火 停止迫害','人拳','人肉炸弹','人兽','人体','人体艺','人体炸弹','人游行','人宇特能功','人在云上','人渣','人真钱','仁吉旺姆','认牌绝','任于斯国','日本万岁','日逼','日烂','日你妈','日月气功','容弹量','柔胸粉','揉乳','肉棒','肉逼','肉唇','肉洞','肉缝','肉棍','肉茎','肉具','肉穴','肉欲','如6意通','如厕死','原子弹','乳爆','乳房','乳沟','乳交','乳头','入耳关','入联','软弱的国','软弱外交','瑞安事件','萨哈卜','萨斯病','赛后骚','赛克网','三班仆人派','三表','三表哥','三挫','三二二攻台作战','三二二攻台作战计划','三个呆婊','三个代表','三股势力','三级电影','三级片','三江县','三秒倒','三民主义','三区革命','三去车仑','三三九乘元功','三水法轮','三退','三脱','三网友','三硝基甲苯','三唑','三唑仑','氵去','氵去车仑','氵去车仑工力','散步','散散步','桑德茲','骚逼','骚比','骚妇','骚货','骚浪','骚女','骚水','骚穴','骚嘴','扫了爷爷','色b','色逼','色电影','色界','色猫','色妹妹','色盟','色情表演','色情电影','色情服务','色情片','色情图片','色情网站','色情小说','色情影片','色区','色色','色视频','色小说','色诱','色欲','僧人自焚','杀b','杀毙','杀害学生','杀警','杀手','杀指南','沙比','沙皇李长春','傻b','傻逼','傻比','煞逼','煞笔','山涉黑','删除负面信息','颠覆','国家政权','煽动','汕尾','上访','上访 军转干部单春','上海帮','上海独立','上门激','上中央','尚福林','烧公安局','烧瓶的','韶关斗','韶关玩','韶关旭','少妇','少妇自拍','少年阿宾','少修正','邵松高','社HUI主义','社会混','社会主义灭亡','射精','射爽','射网枪','射颜','涉台政局','涉嫌抄袭','身份证生成器','呻吟','深喉冰','神的教会','神七假','神通加持法','神韵艺术','神州忏悔录','沈昌功','沈昌人体科技','沈国放','沈彤','沈图','沈阳军区','肾源','升达毕业证','生被砍','生踩踏','没屁眼','生命树的分叉','生肖中特','生意宝','圣殿教','圣火护卫','圣灵重建教会','圣战','圣战不息','圣战组织','盛光祖','盛行在舞','剩火','尸博','失身水','失意药','师涛','狮子旗','十7大','十八大','十八大接班人','十八等','十大独裁','十大谎','十大禁','十二个春秋','十二煞星帮','十个预言','十九年前','十类人不','十七大','十七大幕','十七大权力争霸战','十七大人事安排','十七届+中央','十七位老部长','十三兄弟帮','十字军','石肖','石兆彬','实毕业证','实际神','实体娃','实学历文','食精','食堂涨价','史久武','士的年','士的宁','士康事件','示wei','G2','G3','G4','G5','G6','G7','G8','G9','G10','G11','G12','G13','G14','G15','G16','G17','G18','G19','G20','示威','世界基督教统一','神灵协会','世界日报','世界十大独裁者','世界维吾尔代表大会','世界以利亚福音宣教会','世界之门','世维会','式粉推','视解密','视频来源','是躲猫','释清海','释欲','收复台湾','收受股票','手变牌','手答案','手段极为老辣','手狗','手机复制','手机跟','手机跟踪定位器','手机监','手机监听','手机监听器','手机卡复制器','手机铃声','手机魔卡','手机窃','手机窃听器','手机追','手拉鸡','手榴弹','手木仓','手枪','手槍','手淫','守所死法','受贿罪','联系电话','售步枪','售纯度','售单管','售弹簧刀','售防身','售狗子','售虎头','售火药','售假币','售健卫','售军用','售猎枪','售氯胺','售麻醉','售冒名','售枪支','售热武','售三棱','售肾','售手枪','售五四','售信用','售一元硬','售子弹','售左轮','兽奸','兽交','兽性','兽欲','书办理','舒兰','熟妇','熟母','熟女','属灵教','术牌具','树亲民形象不如推动政改','双管立','双管平','双规','双桨飞机','双开','双十节','双桶','双筒','双臀','爽片','爽死我了','谁是胡的接班人','谁是新中国','谁为腐败晚餐买单','水阎王','税务总局致歉','司法黑','司法院','司考答案','司马璐','司马璐回忆录','司长期有','丝护士','丝情侣','丝袜','丝袜保','丝袜恋','丝袜美','丝袜妹','丝袜网','丝诱','丝足按','私房写真','私家侦探','私家侦探服务','私人侦探','思潮','死逼','死法分布','死全家','死刑','死刑缓期','死刑现场','死要见毛','四博会','四川军队','四川事件','四川大地震异象揭密','四川广安','上访者','四川朱昱','四大扯个','四大舰队','四二六社论','四风','四海帮','四六级答案','四事件','四小码','饲养基地','松岛枫','松花江','宋晨光','宋平','宋平顺','宋勇辽宁','宋祖英','送qb','苏家屯','苏家屯集','苏晓康','苏贞昌','酥痒','诉讼集团','素女心','速代办','速取证','酸羟亚胺','孙鹤龄','孙晋美','孙善武','孙小虹','孙瑜','缩阴','他妈','塔利班','蹋纳税','胎盘','台du','台wan','台百度湾','台北','台毒','台独','台独党','台独党纲','台海大战','台海局势','台海统一','台海危机','台海问题','台海战争','台军','台南','台商','台弯','台湾版假币','台湾独立','台湾共和国','台湾国','台湾间谍','台湾问题','台湾应该独立','台湾有权独立','台完','台中','太垃JI','太上皇','太王四神','太王四神记','太子党','泰兴幼','泰兴镇中','泰州幼','贪20亿','贪财物','贪腐财富','贪官也辛','贪污','贪污腐败','谭作人','坦克','坦克人','坦克压大学生','炭疽病毒','探测狗','汤加丽','唐家璇','老伤兵','涛哥','涛共产','涛一样胡','陶驷驹','讨伐中宣部','讨回工资','讨说法','讨厌中国','套弄','套牌车','特别党费','特工资','特共','特贡','特供','特码','特上门','特务机构','腾讯客服电话','滕彪','扌由插','提供答案','提前预测','体奸','体透视镜','体位','替考','替考试','替人体','天安门','天安门母亲','天安门母亲运动','天安门情人','天安门事件','天按门','天朝特','天鹅绒革命','天鹅之旅','亡国','清亡','天皇','天剑二型飞弹','天剑一型飞弹','天灭中','天灭中共','天怒','天推广歌','天网电子报','天网人权事务','天线宝宝','天要灭','天要灭中','天要灭中 共','天要亡','天音功','天葬','田罢工','田凤岐','田凤山','田田桑','田停工','舔脚','舔yin','舔阴','调查婚外情','铁血师','铁英 北京','铁鹰帮竹林联盟','庭保养','庭审直播','挺胡','通钢总经','同胞书','同盟党','同修交流','正法修炼','童增','统独光谱','统一股市','统一教','统一台湾','统治','统治术','偷電器','偷欢','偷拍','偷肃贪','偷听器','偷偷贪','头双管','投毒杀人','投公','透视功能','透视镜','透视扑','透视器','透视眼睛','透视眼镜','透视药','透视仪','秃鹰汽','突厥革命','突破封锁','突破网封索的软件','突破网路','长城防火墙','网络防火墙','屠杀','杀学生','土g','土共','土炮','土枪','土制C4','制造C4','团派','团派人马','团派政治明星','团中央','推bei图','推背图','推翻','推翻共产党','推翻共党','推翻中共','推翻中国共产党','推翻专制独裁的共产党','推油','推油按','退党保平安','退dang','退h集会','退共','退出共党','退共产','退出共产','退党','退共党','退伍军人','托乎提沙比尔','脱光','脱裤门','脱内裤','脱衣艳','瓦斯手','袜按摩','外蒙','外蒙回归','外透视镜','外围赌球','湾版假','湾台','完全自杀手册','玩忽职守','玩女人','万法归一功','万里大造林','万能钥匙','万人大签名','骚动','万润南','汪洋','汪兆钧','上书','致胡温','亡党','亡党亡国','亡共者胡','王安顺','王宝森','王炳章','王超华','王晨','王丹','王凤友','王奉友','王刚','王厚宏海南','王华元','王怀忠','王建琪','王锦思','王乐泉','王乐毅','王力利','王立军','王立军+公开信','王荔蕻','王岐山','王千源','王青雷','王庆录广西','王式惠重庆','王守业','王维林','王武龙江苏','王小丫老公','王雪冰','王益','王益案','王有杰河南','王昭耀','王兆国','王政','王志刚','王钟麓','网关','网管办','网监','网络封锁','网络管理办公室','网络警察','网络评论员','网络删帖','网络推广扩散器','网民案','网民党','网民获刑','网民诬','网评','网评员','网特','网易sb','网站推广软件','威胁论','微博实名','微型摄像','韦泽芳 海南','为党不为国','违反购房合同','违纪','围攻','围攻警','围攻上海','唯色','维汉','维汉员','维基','维权','维权基','维权人','维权人士 杨春林','维权谈','维稳','维吾','伪大','伪火','伪基百科','伪政府','委坐船','卫星电视','卫星高频头','卫星广播器材','畏罪自杀。','谓的和谐','尉建行','尉健行','喂奶门','魏京生','温宝宝','温夫人','温公子','温加','温加饱','温佳宝','温家X','温家宝','温家堡','温夹包','温假饱','温假报','温切斯特','温下台','温休曾退','温爷爷','温影帝','温云松','温总','温总理','溫家寶','瘟加饱','瘟家','瘟家宝','瘟家保','瘟家鸨','瘟假饱','瘟假鸨','瘟假报','瘟疫爆发','文达学','文革','文化大革命','文凭证','文强','文字狱','文做','纹了毛','闻被控制','闻封锁','翁安','瓮安','瓮安事件','我操','我草','我的西域','我干','我搞台独','我就色','我日','我虽死去','我在美国当市长助理','卧槽','卧艹','乌尔','乌坎','乌鲁木齐','乌鸦 坎坷','乌蝇水','乌云其木格','无帮国','无耻','无耻语录','无抵押贷款','无官正','无界浏览','无界浏览器','无界网络','无码','无码专','无期徒刑','无人性的政权','无网界','无网界浏览','无锡招商城','无修正','吾尔','吾尔开西','吾尔开希','吾尔凯西','吾爾開希','吾吉买买提','吴邦国','吴官正','吴文英 纺织','吴向忠','吴仪','吴振汉','五不','五不争鸣论坛','五出三进','五棵松','五毛','五毛蛋','五毛党','五毛们','五套功','五套功法','五月天','午夜电','午夜极','武侯祠','武警暴','武警殴','武警已增','武力镇压','武装镇压','舞女','务员答案','务员考试','雾型迷','西z','西安爆炸','西北帮','西布曲明','西藏','西藏独立','西藏国家民主党','西藏局势','西藏人民大起义运动','西藏限','西藏自由','西藏作家组织','西朝鲜','西独','西尔艾力','西服进去','西去','西脏','西臧','西奘','西葬','吸精','希藏','希脏','希葬','硒藏','稀藏','习进平','习近平','习晋平','习太子','习王储','席复活','席临终前','席指着护','袭击','袭警','洗脑','洗牌','洗澡死','喜贪赃','下法轮','下贱','下台 ','下体','下载速度','夏川纯','夏勇','先帝','天朝','大清','先皇','先烈纷纷','县长','现大地震','现金投注','现在的党','现在的公安','现在的共产党','现在的警察','现在的社会','现在的政府','限量','限制言','线透视镜','宪','宪兵司令部','宪法35条','宪法法院','宪章','宪政','宪政民主','陷害案','陷害罪','霰弹','相奸','相自首','港独','香港6合彩','香港6合彩公司','香港白小姐','香港彩','香港彩宝必中六肖','香港彩票','香港曾道人','香港独立','香港黄大仙','香港惠泽社群','香港六合彩','香港六合彩公司','香港六星合彩','香港论坛','香港马会','香港赛马会','香港生子','香港一类','香港总彩','香功','香江','湘江','详情请进入','向巴平措','肖怀枢','消防灭火枪','消防枪','消灭共产党','消声器','消业之说','萧瀚','硝化甘','销售 军用手枪 ','销售热线','小6灵通','小xue','小逼','小电影','小额贷款','小活佛','小口径','小穴','小阳','小泽一郎','小组','晓波','校鸡','校级复员军官','校骚乱','校园改造工程','协晃悠','邪党','邪教','携枪出逃','写两会','写真','泄漏的内','泄题','谢长廷','蟹农场','心肌梗塞','辛灏年','辛灝年','辛业江 海南','辛子陵','新八荣八耻','新疆暴乱','新疆独立','新疆叛','新疆骚乱','新疆限','金瓶梅','阿里','淘bao','笑笑生','taobao','淘宝','新金瓶','新京报','新抗联','新三才','新世纪新闻网','神韵晚会','新唐','新唐人','新唐人电视台','新搪人','新天地','新闻办','新闻封锁','新闻联播','新闻自由','新闻总署态度蛮横','新型毒品','新右派','新中华战记','新左派','信访','信访专班','信接收器','信用卡套现','信用卡提现','星岛日报','星上门','形式主义','形透视镜','型手枪','兴奋剂','兴华论谈','兴中心幼','幸福大街','幸运码','xing爱','xing爱日','xing服务','xing福情','xing感少','xing感妖娆','xing感诱惑','xing虎','xing伙伴','xing饥渴','xing技巧','xing交','xing交视频','xing交图片','xing浪','xing奴','xing奴集中营','xing虐','xing推广歌','xing息','xing欲','性爱','性爱日','性伴侣','性服务','性福情','性感少','性感妖娆','性感诱惑','性虎','性伙伴','性饥渴','性技巧','性交','性交视频','性交图片','性浪','性奴','性奴集中营','性虐','性推广歌','性息','性欲','姓忽悠','姓江的','胸推','胸主席','雄烯二醇','徐炳松','徐才厚','徐发黑龙江','徐国健','徐鹏航','徐文库','徐衍东','徐玉元','许运鸿','许宗衡','紧急声明','叙利亚','选主席','选总理','选国家','选举','薛飞','薛健婉','薛锦波','穴口','穴图','学chao','学百度潮','学潮','学联','骚乱','学骚','学生领袖','学生妹','学位證','学运','學生妹','雪山狮子旗','血溅人民天堂','血染的风采','血色京机','血色京畿','血书','血洗','血洗京城','血腥清场','寻找林昭的灵魂','循环轮回论','徇私舞弊','丫与王益','鸦片','鸭绿江','雅鲁藏布江','亚情','亚砷（酸）酐','亚砷酸钾','亚砷酸钠','亚硒酸','亚硒酸二钠','亚硒酸镁','亚硒酸钠','亚硒酸氢钠','亚硝酸乙酯','亚硝酰乙氧','亚洲时报','亚洲周刊','烟感器','烟碱','阉割','延安日记','严家其','严禁词?','严晓玲','严重违纪','言被劳教','言禁','言论自由','言论罪','盐酸曲','阎明复','颜色革命','颜射','眼角膜','艳情小说','燕玲论坛','殃视','扬州','扬州中学','扬子江','阳光时务','阳具','阳痿','杨j','杨帆','杨汇泉','杨佳','杨尚昆','杨树宽','杨思敏','氧化二丁基锡','氧化汞','氧化铊','氧化亚铊','氧氯化磷','恙虫病','摇头丸','遥控信号拦截器','要人权','要射精了','要射了','要泄了','要有诚','要有光','耀邦','圣灵全备','福音布道团','耶稣基督血水','业力回报','业力轮','业主维权','叶选平','夜半加税','夜激情','夜勤病栋','液体炸','一ye情','一般炸药制作','一本道','一党独裁','一党私利','一党执政','一党专政','一党专制','一个身份、两个待遇','一虎八奶','一九八九年','一九八四','一军两策','一卡多号','一氯丙酮','一氯乙醛','一码','一丝不挂','一通功','一通健康法','一肖','一小撮别','一氧化二氟','一氧化汞','一夜欢','一夜激情','一夜情','一中一台','一字解特码','伊拉克伊斯兰国','伊力哈木','伊皮恩','伊斯兰','伊斯兰教','伊斯兰解放组织','伊斯兰军','伊斯兰马格里布基地组织','伊斯兰团','伊斯兰运动','医院聘民警当副院长防医闹','胰岛素样生长因子','遗留问题','遗情书','乙撑氯醇','乙撑亚胺','乙醇腈','乙肝NGO工作者','乙肝检测','乙肝歧视','乙肝筛选','乙肝维权','乙肝携带者','乙肝战友','乙硼烷','乙酸汞','乙酸甲氧基乙基汞','乙酸三甲基锡','乙酸三乙基锡','乙酸铊','乙酸亚铊','乙烯甲醇','乙酰替硫脲','乙酰亚砷酸铜','以权谋私','蚁力神','异见人士','异硫氰酸烯丙酯','异氰酸苯酯','异氰酸甲酯','异议人士','易达网络卡','益关注组','益受贿','因毒磷','因毒硫磷','自由人权','曰你妈','艹你妈','ri你妈','cao你妈','因言获罪','阴b','阴部','阴唇','阴唇被插','阴道','阴蒂','阴阜','阴核','阴户','阴间来电','阴茎','阴茎增大','阴茎助勃','阴精','阴毛','陰唇','陰道','陰戶','银行卡复制设备','银氰化钾','淫','yin虫','yin荡美女','yin荡视频','yin荡照片','yin电影','yin妇','yin河','yin贱','yin叫','yin教师','yin浪','yin乱','yin媚','yin糜','yin靡','yin魔','yin魔舞','yin母','yin虐','yin女','yin妻','yin情','yin情女','yin肉','yin騷妹','yin色','yin声浪语','yin兽','yin兽学','yin兽学园','yin书','yin术炼金士','yin水','yin娃','yin威','yin亵','yin穴','yin样','yin液','yin照','尹方明','引爆','退党大潮','引咎辞职','引起暴动','隐蔽式摄像机','隐瞒地震','隐形耳','隐形耳机','隐形喷剂','隐形摄像机','印尼事件','辱华','烧国旗','侵华','屠华','印尼屠华','英国金融时报','婴儿命','婴儿汤','罂粟壳','罂粟籽','蝇毒','瀛海镇','影帝温','影子政府','应召','应子弹','雍战胜','永垂不朽','永伏虫','咏妓','用刀横向切腹','用手枪','优化官员','幽谷三','油行','游xing','游行','游精佑','游戏机破解','有偿服务','有偿捐献','有偿肾','有码','有奶不一','有期徒刑','右派','右转是政','幼齿类','幼交','幼男','幼女','诱奸','于飞 广东','于幼军','余传琮 温家','余慧文','余杰','余秋雨','俞正声','娱乐透视','愚民同','愚民政','与狗性','宇宙大法','宇宙毁灭','宇宙主佛','语音传送','玉女心经','玉蒲团','玉乳','玉穴','育部女官','预测答案','预测领导人','欲火','欲女','欲仙欲死','鸳鸯洗','冤民大','渊盖苏文','元极功','元老','元一夜','园惨案','园发生砍','园砍杀','园凶杀','园血案','袁腾飞','袁伟民','袁依凡','袁鹰','原湖北黄石民警吴幼明','原教旨主义','原藜芦碱A','原砷酸','原味内衣','原一九五七','原音铃声','原装弹','原子弹的DIY制作','原子弹的理论 恐怖分子','原子弹方法','原子弹清单','援藏','援藏网','援交','援助交际','韵徐娘','在家里做原子弹的方法','在线播放','昝爱宗','脏毒','脏独','臧独','臧人','葬独','遭便衣','遭到警','遭警察','遭武警','早泄','造反','择油录','泽民','扎瓦赫里','炸dan','炸yao','炸弹教','炸弹配方','炸弹遥控','炸弹怎么做','炸弹制造','炸弹制作','炸掉证监会','炸北京','炸成都','炸大连','炸福州','炸广州','炸哈尔滨','炸海口','炸杭州','炸呼和浩特','炸吉林','炸济南','炸金融街','炸昆明','炸拉萨','炸兰州','炸南昌','炸南京','炸南宁','炸青岛','炸上海','炸深圳','炸沈阳','炸石家庄','炸台湾','炸太原','炸天津','炸王府井','炸温州','炸乌鲁木齐','炸武汉','炸西安','炸西宁','炸银川','炸长春','炸长沙','炸郑州','炸中国','炸中南海','炸重庆','炸了证监会','炸立交','炸药的制','炸药配','炸药配方','炸药配方 ','炸药制','炸药制作方法','债务公司','粘氯酸','占凡体','占领北京','占领成都','占领大连','占领福州','占领广州','占领哈尔滨','占领海口','占领杭州','占领呼和浩特','占领吉林','占领济南','占领金融街','占领昆明','占领拉萨','占领兰州','占领南昌','占领南京','占领南宁','占领青岛','占领上海','占领深圳','占领沈阳','占领石家庄','占领台湾','占领太原','占领天津','占领王府井','占领温州','占领乌鲁木齐','占领武汉','占领西安','占领西宁','占领银川','占领长春','占领长沙','占领郑州','占领中国','占领中南海','占领重庆','张春江','张春桥','张丹红','张德江','张恩照','张高丽','张国光','张宏宝','张宏堡','张宏良','张家盟浙江','张凯广东','张澜澜','张立昌','张培莉','张秋阳','张曙','张文中','张筱雨','张辛泰','张新岩','张阳德','张志新','张宗海','招ji','招鸡','招妓','招收','找个爸爸','找个妈妈','找工总行','找建总行','找男','找农总行','找女','找枪手','找援交','找政法委副','赵启正','赵紫阳','赵总理','这不是天灾','浙江','着护士的胸','着涛哥','针刺','针刺案','针刺伤','针刺事','针刺死','针孔摄象','针孔摄像机','侦探设备','真理部','真理教','真钱斗地','真钱投注','真善美','真善忍','真实文凭','真实资格','真他妈','真主','真主党','震惊一个民','震其国土','镇压','镇压图片','争鸣','争鸣杂志','征兵计划','征集业主意见','整肃官场','正府','正见网','正无','证到付款','证监会','证件','证件办','证件公司','证件集团','证生成器','证书办','证一次性','郑存柱','郑恩宠','郑光迪','郑文','郑筱萸','郑雁雄','政f','政zhi','政府操','大膜王','白膜蛤','暴力膜','膜蛤','习蛤','习习蛤蛤','政府无能','政俯','政腐','政付','政论区','政治庇护','政治犯','政治风波','政治局','政治局十七','政治局委员增加一倍','政治老人','政治人祸的源头','政治体制改革','症腐','證件','支持zd','支持台湾','支持台湾独立','支那','支那猪','知道64','织里','植物冰','殖器护','指纹考勤','指纹膜','指纹套','至国家高','志不愿跟','志洪李','志愿兵','制服诱','制手枪','制证定金','制作工艺','制作原子弹','制作炸弹首先要制作炸药','制作炸药','制作证件','质押贷款','治疗红斑狼疮','治疗性病','治疗乙肝','治疗肿瘤','致信胡温','智晟','中gong','中办发','中朝翻脸','班禅','中的班禅','中功','中珙','中共','中共帮凶','中共保命','中共暴政','中共裁','中共党文化','中共的腐败与残暴','中共的血旗','中共的罪恶','中共帝国','中共第六代','中共第五代','中共独裁','中共独裁暴政','中共封锁','中共封网','中共腐败','中共黑','中共黑帮','中共解体','中共近期权力斗争','中共恐惧','中共权力斗争','中共任用','中共三大势力谁来执政','中共退党','中共伪政权','中共洗脑','中共下台','中共邪党','中共邪毒素','国军','中共政治游戏','中国zf','中国不强','中国的陷阱','中国复兴党','中国高层权力斗争','中国共和党','中国官场情杀案','中国过渡政府','中国海外腐败兵团','中国教徒','中国没有自由','中国民间保钓联合会','中国民主党','中国人民党','中国人权','中国时报','中国实行血腥教育','中国贪官在海外','中国网络审查','中国新民党','中国舆论监督网周洪','中国正义党','中国政F','中国政府封锁消息','中国之春','中国支配下的朝鲜经济','中国猪','中国自由党','中华帝国','中华局域网','支那人','中华抗日同盟','女神功','中华昆仑女神功','中华联邦','中华人民共和国','益智功','中华养生益智功','益智气','中联办','中南海','中南海的权力游戏','中南海斗争','中南海恩仇录','中南海黑幕','中南海权力斗争','中年美妇','中石油国家电网倒数','中特','中宣部','中央','中央黑幕','中印边界谈判结果','中越自卫反击战','中正纪念歌','中组部前部长直言','忠党国','公务员','学历证','众像羔','重大新闻','重亚硒酸钠','重阳兵变','州惨案','州大批贪','州三箭','周名军','周文吉','周小川','周旭洲','周永康','周正毅','宙最高法','昼将近','朱川','朱镕基','朱瑟里诺','朱小华','朱志刚','朱作勇','诸世纪','猪哥6','竹联帮','主权','主神教','主席忏','助考','助考网','住英国房','抓胸','专业办理','专业代','专业代理','专业代写','专业助','专政','专制','专制政权','转法轮','转法论','转是政府','赚钱资料','庄烈宏','装弹甲','装枪套','装消音','追查国际','追债公司','涿州','姿不对死','资格證','资金短缺','资金周转','资料泄','子宫','子女任职名','梓健特药','紫阳','自fen','自sha','自动辞','自动群发','自焚','自己找枪','自救会','色情自拍','自杀','自杀式爆炸','自杀手册','自杀指南','自烧','自wei','自慰','自慰用','自由光诚','自由门','自由民主','自由圣','自由圣火','自由时报','自由西藏','自由西藏学生运动','自由亚','自由亚洲','自由亚洲电台','自制原子弹','自主择业军官','自主择业人员','字牌汽','宗教+迫害','宗教迫害','宗教极端','宗教极端主义','总会美女','总书记','总统府','邹家华','走私','走私车','足交','zu交','足球投注','足球玩法','组织集体','祖国母亲','最快报码室','最牛公安','最淫官员','醉钢枪','醉迷药','醉乙醚','尊爵粉','左不赔','左棍','左派','左翼联盟','左营海军军官学校','左转是政','作爱','作弊器','作各种证','作硝化甘','唑仑','做爱','做爱小','做台','做原子弹','做原子弹 方法','做炸弹','做证件','做ai','作ai','zuo爱'];
        $filterName = str_replace($array,'??',$name);
        if($name != $filterName){
            return false;
        }
        return true;
    }
}