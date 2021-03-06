<?php


namespace App\Inside;

class Constants
{
    //DataBase
    const NEWSLETTER_DB = 'newsletter';
    const CONTACT_US_DB = 'contact_us';
    const USERS_DB = 'users';
    const USERS_LOGIN_TOKEN_DB = 'users_login_token';
    const USERS_LOGIN_TOKEN_LOG_DB = 'users_login_token_log';
    const COUNTRY_DB = 'country';
    const TYPE_DB = 'type';
    const PLACE_DB = 'place';
    const PLACE_PROPERTY_DB = 'place_property';
    const PLACE_SERVICES_DB = 'place_services';
    const PLACE_GALLERY_DB = 'place_gallery';

    //Login Arguments
    Const LOGIN_TYPE_SMS = "login_with_sms";
    Const LOGIN_TYPE_CALL = "login_with_call";

    //Language
    const LANGUAGE_EN = "en";
    const LANGUAGE_FA = "fa";

//    Const LOGIN_TYPE_EMAIL = "login_with_email";
//    Const LOGIN_TYPE_GMAIL = "login_with_gmail";

//    Const AGENT_IOS = "ios";
//    Const AGENT_ANDROID = "android";
//    Const AGENT_WEB = "web";
//
//    const JWT_KEY = "arioo_xephJlDV";
//    const TYPE_APP_ARIOO = "stars";
//    const TYPE_APP_ARIOO_INT = 1000;
//
//    const PROFILE_PIC_PATH = "/profile/";
//
//    const FILES_PATH = "files/";
//    const MEDIA_PATH = "media";
//    const MEDIA_THUMB_IMG = "/thumb/img/";
//    const MEDIA_THUMB_VIDEO = "/thumb/video/";
//    const MEDIA_COLLECTION_ID = 0;
//    const MEMBER_ACCESS_LEVEL_CREATOR = "creator";
//    const MEMBER_ACCESS_LEVEL_ADMIN = "admin";
//    const MEMBER_ACCESS_LEVEL_MEMBER = "member";
//    const MEMBER_STATUS_JOIN = "joined";
//    const MEMBER_STATUS_KICK = "kicked";
//    const MEMBER_STATUS_ADD = "added";
//    const MEMBER_STATUS_LEFT = "left";
//    const GROUP_CHANNEL_MESSAGES_QUEUE = "group_channel_messages";
//    const GROUP_CHANNEL_MESSAGES_QUEUE_BACKUP = "group_channel_messages_backup";
//    const MEMBER_EXPIRE_AT_LIFETIME = 0;
//    const MAIN_DEFAULT_WALLET_TITLE = "main_default";
//    const MAIN_DEFAULT_WALLET_VALUE = 1;
//    const MAIN_DEFAULT_WALLET_PRICE = 0;
//    const PROFILE_TYPE_SUPERUSER = 1;
//    const PROFILE_TYPE_SUPERUSER_PRICE = 9000;
//
//    Const CHANNEL_PAYMENT_VAS_PERIOD = 1;
//    Const CHANNEL_PAYMENT_VAS_PRICE = 9000;
//
//    const NULL_VALUE = null;
//
//    const PHOTO_TYPE = ["image/gif", "image/jpeg", "image/jpg", "image/png", "image/PNG", "image/GIF", 'image/*'];
//    const VIDEO_TYPE = ["video/x-flv", "video/mp4", "application/x-mpegURL", "video/MP2T", "video/3gpp", "video/quicktime",
//        "video/x-msvideo", "video/x-ms-wmv", "avi", "swf", "flv", "wmv",
//        "video/quicktime", "video/MP2T", "video/3gpp", "video/x-msvideo", "video/x-ms-wmv", "video/x-ms-wmv",
//        "video/x-matroska", "video/mpeg", "application/x-shockwave-flash", "video/webm", "video/mov", 'video/*',
//        'application/octet-stream'];
//
//    const AUDIO_TYPE = ["audio/mpeg", "audio/x-wav", "audio/ogg", "audio/mp4", "audio/midi", "audio/basic", "audio/adpcm", "audio/s3m", "audio/mp3",
//        "audio/silk", "audio/webm", "audio/m4a"];
//

//

//
//
//    Const STATUS_TYPE_PENDING = 0;
//    Const STATUS_TYPE_FRIEND = 1;
//    Const STATUS_TYPE_UNFRIEND = -1;
//    Const STATUS_TYPE_BLOCK = -2;
//
//    Const FF_MPEG = '/usr/bin/ffmpeg';
//    Const FF_PROBE = '/usr/bin/ffprobe';
//
//
//    const USERS_APPS_DB = 'user_apps';
//    const USERS_STICKER_PACK_DB = 'user_sticker_pack';
//    const USERS_SETTING_DB = 'user_setting';
//    const SESSION_DB = 'sessions';
//    const USER_TOKEN_NOTIFICATION_DB = 'user_token_notification';
//    const RELATION_DB = 'relations';
//    const MOMENT_DB = 'moments';
//    const MOMENT_COMMENT_DB = 'moment_comments';
//    const MOMENT_LIKE_DB = 'moment_likes';
//    const MEDIA_DB = 'media';
//    const MOMENT_MEDIA_DB = 'moment_media';
//    const MOMENT_TAGS_DB = 'moment_tags';
//    const TAGS_DB = 'tags';

//    const STICKER_DB = 'sticker';
//    const STICKER_PACK_DB = 'sticker_pack';
//    const STICKER_EMOJI_DB = 'sticker_emoji';
//    const USER_MEDIA_DB = 'user_media';
//    const CONTACT_DB = 'contacts';
//    const MOMENT_FOLLOW_DB = 'moment_follows';
//    const REPORT_DB = 'report';
//    const CONVERSATIONS_DB = 'conversations';
//    const CONVERSATIONS_FAVOURITE_DB = 'conversations_favourite';
//    const CONVERSATIONS_SETTING_DB = 'conversations_setting';
//    const CHANNEL_DB = 'channel';
//    const GROUP_DB = 'groups';
//    const CHANNEL_MEDIA_DB = 'channel_media';
//    const CHANNEL_PAYMENT_METHOD = 'channel_payment_method';
//    const GROUP_PAYMENT_METHOD = 'group_payment_method';
//    const GROUP_MEDIA_DB = 'group_media';
//    const CHANNEL_SUBSCRIPTION_DB = 'channel_subscription';
//    const GROUP_SUBSCRIPTION_DB = 'group_subscription';
//    const WALLETS = 'wallet';
//    const USERS_GOOGLE = 'users_google';
//    const USERS_BLOCK_DB = 'users_block';
//    const USERS_REFER_DB = 'users_refer';
//    const USERS_POINTS_HISTORY_DB = 'users_points_history';
//    const TASKS_DB = 'tasks';

//
//
//    //mongo db constant
//    const MESSAGES_COLLECTION = 'messages';
//    const INVOICES_WALLET = 'invoices_wallet';
//    const INVOICES_MARKET = 'invoices_market';
//    const INVOICE_WALLET_TYPE_GROUP = 'group';
//    const INVOICE_WALLET_TYPE_CHANNEL = 'channel';
//    const INVOICE_WALLET_TYPE_SHOP = 'shop';
//    const INVOICE_WALLET_TYPE_TRANSFER = 'transfer';
//    const INVOICE_WALLET_TYPE_PURCHASE = 'purchase';
//    const INVOICE_WALLET_TYPE_SUPERUSER = 'superuser';
//    const INVOICE_WALLET_TYPE_PRICE_INCREASES = 'increases';
//    const INVOICE_WALLET_TYPE_PRICE_DECREASES = 'decreases';
//    const INVOICE_WALLET_STATUS_PENDING = 'pending';
//    const INVOICE_WALLET_STATUS_SUCCESS = 'success';
//    const INVOICE_WALLET_STATUS_FAILED = 'failed';
//    const INVOICE_WALLET_MARKET_ZARINPAL = 'zarinpal';
//
//    Const CG = "cg.";

}
