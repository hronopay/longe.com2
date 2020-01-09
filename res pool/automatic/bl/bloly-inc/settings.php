<?php

//
// Error reporting. Setup it to 1 in order to see detailed
// information about errors.
//
define('ERROR_LEVEL', '1');

//
// MySQL settings **
//

define('DB_NAME', 'adress');	// the name of the database
define('DB_USER', 'root');		// MySQL username
define('DB_PASSWORD', '');	// MySQL password
define('DB_HOST', 'localhost');		// host:port
define('PREFIX', 'bloly_');		// MySQL table trefix

//
// Locale and charset
//

define('DB_ENCODING', 'ISO-8859-1');	// database and RSS encoding
define('DB_LANG', 'en-us');		// database and RSS language

//
// Blog configuration
//
define('BLOG_TITLE', 'Интех');	// Blog Title
define('BLOG_SLOGAN', 'Инновационные Технологии');	// Blog slogan
define('BLOG_MAX_MSG', '20');		// how many messages to print on single page
define('BLOG_MAX_COMM', '50');		// how many comments to print on single page
define('USER_LEVEL', '3');		// new users may only post comments (=1)
					// or they may create new articles (=2)
					// USER_LEVEL==3 -- main administrator
define('RSS_MAX_ITEMS', '50');		// how many items to print in RSS
define('EMAIL_BCC', '');		// specify email address where all copies of emails will be sent


//
// tags, allowed in message header, body and user info
//

define('ALLOWED_TAGS_HEADER', 'B I U STRIKE');
define('ALLOWED_TAGS_TEXT', 'A B I U BR STRIKE IMG BLOCKQUOTE OL UL LI CODE TABLE TR TD');
define('ALLOWED_TAGS_INFO', 'A B I U BR STRIKE IMG BLOCKQUOTE OL UL LI CODE TABLE TR TD');

//
// Calendar settings
//

define('FIRST_SUNDAY', '1');  // possible values are: 1 and 0

?>