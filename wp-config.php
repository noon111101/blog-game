<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'gamebloger' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|<=u=Np@21%JJKOgPKbam}$.7B4cu`I9wR8{;8!oUpIo#F*D#Q]b}o~6UGp3 Y`_' );
define( 'SECURE_AUTH_KEY',  'vvh20):^{&K:Zz<[lX(pvGNyfHrBN2wq->NotoW6g>J~U;;$a>H!K(ih:j2nqxaJ' );
define( 'LOGGED_IN_KEY',    '9_3DmE:MCS[Y*ysALe6Ca@ZqUna<(0W98|`)LbG;:T5{>O^0+kK{26G=qM3xSzlH' );
define( 'NONCE_KEY',        '&p-5<-<pgceWAOtz;1yn%c$FBqDpizWR4zF;9E^|EEV<06]W/gv]67EZc30cM{He' );
define( 'AUTH_SALT',        'M|*mKNwxBFn1%aeM@)6n?uhqj1e^ITYI*R<m-a|uX9D,v?.8/2SCaP*D$U%[jj^%' );
define( 'SECURE_AUTH_SALT', 'lgHG},> oC_<|q.7e~d5*vNwOqQU1g,?OM,X.$MsAZi8GVc3}2p.=>[I=|({dk+%' );
define( 'LOGGED_IN_SALT',   '/jq?`DZmb5 |:]7%AId|uIshi-J+9@5%VodHM-$[a5}SU%?~MyJ&t5$C7L]R6^7g' );
define( 'NONCE_SALT',       'KCBg}T/)W`F r[Mt3jNQ;X*C8O<~[cxh|d/B!w/a@+s O]P!>]tv2g7XpvVgZGSI' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
