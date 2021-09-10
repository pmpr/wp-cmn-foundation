<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Interfaces;


interface ConstantInterface
{
    
    const IP = 'ip';
    const ID = 'id';
    const _ID = '_' . self::ID;
    const CPT = 'cpt';
    
    const CTX = 'ctx';
    
    const URL = 'url';
    const ALL = 'all';
    const END = 'end';
    const KEY = 'key';
    const ICON = 'icon';
    const DATE = 'date';
    const ITEM = 'item';
    const LOGO = 'logo';
    const NAME = 'name';
    const SLUG = 'slug';
    const TYPE = 'type';
    const TEXT = 'text';
    const HTML = 'html';
    const ITEMS = 'items';
    const VALUE = 'value';
    const TABLE = 'table';
    const COLOR = 'color';
    const OWNER = 'owner';
    const IMAGE = 'image';
    const ADMIN = 'admin';
    const USER = 'user';
    const LOGIN = 'login';
    const LABEL = 'label';
    const LINK = 'link';
    const PAGES = 'pages';
    const TOTAL = 'total';
    const FRONT = 'front';
    const CODE = 'code';
    const DATA = 'data';
    const LIST = 'list';
    const START = 'start';
    const TITLE = 'title';
    const ATTRS = 'attrs';
    const LEVEL = 'level';
    const COUNT = 'count';
    const EMAIL = 'email';
    const OTHER = 'other';
    const PHONE = 'phone';
    const STYLE = 'style';
    const SUBMIT = 'submit';
    const TARGET = 'target';
    const SEARCH = 'search';
    const SCRIPT = 'script';
    const BUTTON = 'button';
    const ENABLE = 'enable';
    const LAYOUT = 'layout';
    const CUSTOM = 'custom';
    const ERRORS = 'errors';
    const EXPIRE = 'expire';
    const SCREEN = 'screen';
    const MESSAGE = 'message';
    const GENERAL = 'general';
    const DISABLE = 'disable';
    const DISPLAY = 'display';
    const CONTENT = 'content';
    const COLUMNS = 'columns';
    const ENABLED = 'enabled';
    const TARGETS = 'targets';
    const SETTING = 'setting';
    const INCLUDE = 'include';
    const EXCLUDE = 'exclude';
    const ARCHIVE = 'archive';
    const ARCHIVES = 'archives';
    const CALLBACK = 'callback';
    const DATETIME = 'datetime';
    const CONTAIN = 'contain';
    const TEMPLATE = 'template';
    const DEFAULT = 'default';
    const TERMINAL = 'terminal';
    const USERNAME = 'username';
    const PASSWORD = 'password';
    const ADVANCED = 'advanced';
    const LOCATION = 'location';
    const PRIORITY = 'priority';
    const REQUIRED = 'required';
    const TAXONOMY = 'taxonomy';
    const POST_TYPE = 'post_type';
    const META_KEY = 'meta_key';
    const META_VALUE = 'meta_value';
    const TIMESTAMP = 'timestamp';
    const PERMALINK = 'permalink';
    const CAPABILITY = 'capability';
    const DESCRIPTION = 'description';
    const INTERNAL_LINK = 'internal_link';
    const EXTERNAL_LINK = 'external_link';
    const SHOW_TEMPLATE = 'show_template';
    const _SESSION_DATA = '_session_data';
    const ORIGIN = 'origin';
    const CONTEXT = 'context';
    const METAKEY = 'metakey';
    const METAVALUE = 'metavalue';
    const INVERSABLE = 'inversible';
    const DESTINATION = 'destination';
    const ORIGIN_TITLE = self::ORIGIN . self::_TITLE;
    const DESTINATION_TITLE = self::DESTINATION . self::_TITLE;
    
    const AFTER_WIDGET = 'after_widget';
    const BEFORE_WIDGET = 'before_widget';
    const BEFORE_TITLE = 'before_title';
    const AFTER_TITLE = 'after_title';
    const _ENABLE = '_' . self::ENABLE;
    const _TITLE = '_' . self::TITLE;
    const _ITEMS = '_' . self::ITEMS;
    const _GENERAL = '_' . self::GENERAL;
    const _ADVANCED = '_' . self::ADVANCED;
    const _REQUIRED = '_' . self::REQUIRED;
    const _PRIORITY = '_' . self::PRIORITY;
    const DISABLE_ = self::DISABLE . '_';
    
    const WPINC = 'WP_INC';
    const ABSPATH = 'ABSPATH';
    const WP_CONTENT_PATH = 'WP_CONTENT_DIR';
    const __ROOT__PATH = '__ROOT__PATH';
    const PR__VAR__PATH = 'PR__VAR__PATH';
    const PR__LOG__PATH = 'PR__LOG__PATH';
    const PR__CACHE__PATH = 'PR__CACHE__PATH';
    const BASE__ROOT__PATH = 'BASE__ROOT__PATH';
    const PUBLIC_HTML__BUILD__URL = 'PUBLIC_HTML__BUILD__URL';
    const PUBLIC_HTML__STATIC__URL = 'PUBLIC_HTML__STATIC__URL';
    const PUBLIC_HTML__BUILD__PATH = 'PUBLIC_HTML__BUILD__PATH';
    const PUBLIC_HTML__STATIC__PATH = 'PUBLIC_HTML__STATIC__PATH';
    
    const AJAX_NONCE = 'foundation-ajax-nonce-string';
    const AJAX_NONCE_ID = 'foundation_nonce';
    const AJAX_NONCE_KEY = 'sec_nonce';
    const GUEST_ID_COOKIE = 'guest_id';
    
    const POSTS_PER_PAGE = 'posts_per_page';
    const POST__NOT_IN = 'post__not_in';
    const NUMBERPOSTS = 'numberposts';
    const POST__IN = 'post__in';
    const ORDERBY = 'orderby';
    const NUMBER = 'number';
    const ORDER = 'order';
    const LIMIT = 'limit';
    
    const GET = 'get';
    const PLUCK = 'pluck';
    const OR = 'or';
    const AND = 'and';
    const NOT = 'not';
    const ASC = 'ASC';
    const JOIN = 'join';
    const LIKE = 'like';
    const DESC = 'DESC';
    const INNER = 'inner';
    const WHERE = 'where';
    const CLAUSE = 'clause';
    const BOOLEAN = 'boolean';
    const OPERATOR = 'operator';
    const PER_PAGE = 'per_page';
    const ITEMS_PER_PAGE = 'items_per_page';
    
    const IDS = 'ids';
    const SLUGS = 'slugs';
    const NAMES = 'names';
    const LABELS = 'labels';
    const OBJECT = 'OBJECT';
    const OUTPUT = 'output';
    
    const CON_OR = 'OR';
    const CON_AND = 'AND';
    
    const TEMPLATE_PATH = '@pr__cmn__foundation';
    const INCLUDE_TEMPLATE_PATH = self::TEMPLATE_PATH . '/include';
    const SPINNER_TEMPLATE_PATH = self::TEMPLATE_PATH . '/spinner.html.twig';
    const MODAL_TEMPLATE_PATH = self::TEMPLATE_PATH . '/modal.html.twig';
    const DEFAULT_POST_TYPES = [self::POST => self::POST, self::PAGE => self::PAGE];
    
    const PHP = 'php';
    const TWIG = 'twig';
    
    const PR__ = 'pr__';
    const THM = 'thm';
    
    const CTM = 'ctm';
    
    const PKG = 'pkg';
    
    const CMN = 'cmn';
    
    
    const AT_SYMBOL = '@';
    const PIPE_SYMBOL = '|';
    const DASH_SYMBOL = '-';
    const COMMA_SYMBOL = ',';
    const SPACE_SYMBOL = ' ';
    const SLASH_SYMBOL = '/';
    const GE_SYMBOL = '>=';
    const LE_SYMBOL = '<=';
    const EQUAL_SYMBOL = '=';
    const GRATER_SYMBOL = '>';
    
    const INFO = 'info';
    const ERROR = 'error';
    const FAILED = 'failed';
    const DANGER = 'danger';
    const STATUS = 'status';
    const ACTIVE = 'active';
    const SUCCESS = 'success';
    const IGNORED = 'ignored';
    const WARNING = 'warning';
    const INACTIVE = 'inactive';
    const COMPLETED = 'completed';
    const CANCELLED = 'cancelled';
    const PROCESSING = 'processing';
    
    const POST = 'post';
    const PAGE = 'page';
    const PRODUCT = 'product';
    
    const CATEGORY = 'category';
    const POST_TAG = 'post_tag';
    const PRODUCT_CAT = 'product_cat';
    
    const SECOND = 'second';
    const MINUTE = 'minute';
    const HOUR = 'hour';
    const DAY = 'day';
    const WEEK = 'week';
    const MONTH = 'month';
    const YEAR = 'year';
    const DAILY = 'daily';
    const HOURLY = 'hourly';
    const TWICEDAILY = 'twicedaily';
    
    const X_API_KEY = 'x_api_key';
    const PMPR_API_BASE = 'http://wordpress-dev.local/wp-json/pmpr/v1';
    
    const NUMBERS_SEQUENCE = '0123456789';
}
