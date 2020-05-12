<?PHP

# --- DATABASE RELATED INFORMATION --- #

define("DB_NAME","facebook");
define("HOST_NAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","hello");

# --- OTHER CONSTANTS --- #

define("PROFILE_PIC_LOCATION","assets/images/profile_pics/");
define('POSTS_LIMIT',1);
define('MESSAGES_LIMIT',1); //for notifications
define('NOTIFICATIONS_LIMIT',1);
define('TRENDS_LIMIT',9);

//words with higher chances of trending! (cases will be same when shown)
define('HOT_WORDS',preg_split("/[\s,]+/",
	"Adobe Angular AppStore Assam Adversal Amazon AmazonPay AmazonPrime Apple
	Blackberry Blogger Bitcoin Bluetooth
	Canada Chrome Chromecast CodePen cPanel CreativeCommons Cricket CuttleFish
	DailyMotion Discord Docker Dog Doll Drupal Evernote
	Facebook Firefox Football FreeBSD 
	Github Google Jammu Kashmir
	India Instagram Iran ISIS iTunes Java Jenkings Linux State
	Medium Messenger Microsoft Mozilla NodeJS
	PlayStore Pokemon Polygon Python Reddit RedHat Sass
	Ubisoft UnrealEngine Unity3D Xbox WiFi Wordpress YouTube YoungGuns"
));

//Words that can never be trending
define('STOP_WORDS',preg_split("/[\s,]+/",
	"a about above across after again against all almost alone along already
	also although always among am an and another any anybody anyone anything anywhere are 
	area areas around as ask asked asking asks at away b back backed backing backs be became
	because become becomes been before began behind being beings best better between big 
	both but buy bought by c came can cannot case cases certain certainly clear clearly come could
	d did differ different differently do does done down down downed downing downs during
	e each early either end ended ending ends enough even evenly ever every everybody
	everyone everything everywhere f face faces fact facts far felt few find finds first
	for four from full fully further furthered furthering furthers g gave general generally
	get gets give given gives go going good goods got great greater greatest group grouped
	grouping groups h had has have having he her here herself high high high higher
	highest him himself his how however i im if important in interest interested interesting
	interests into is it its itself j just k keep keeps kind knew know known knows
	large largely last later latest least less let lets like likely long longer
	longest m made make making man many may me member members men might more most
	mostly mr mrs much must my myself n near nearest necessary need needed needing needs never
	new new newer newest next no nobody non noone not nothing now nowhere number
	numbers o of off often old older oldest on once one only open opened opening
	opens or order ordered ordering orders other others our out over p part parted
	parting parts per perhaps place places point pointed pointing points possible
	present presented presenting presents problem problems put puts q quite r
	rather really right right room rooms s said same saw say says second seconds
	see seem seemed seeming seems sees several shall she should show showed
	showing shows side sides since small smaller smallest so some somebody
	someone something somewhere state states still still such sure t take
	taken than that the their them then there therefore these they thing
	things think thinks this those though thought thoughts three through
	thus to today together too took toward turn turned turning turns two
	u under until up upon us use used uses v very visiting w want wanted wanting
	wants was way ways we well wells went were what when where whether
	which while who whole whose why will with within without work
	worked working works would x y year years yet you young younger
	youngest your yours z lol haha omg hey ill iframe wonder else like 
	hate sleepy reason for some little yes bye choose"
));
?>