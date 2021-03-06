<?php

/**

 * Common configuration

 */



/*============================ Server Config ====================================*/

// authencation of database

define('servername', "localhost"); 

define('username', "root");

define('password', "");

define('dbname', "quanlibanhang");



define('BASE_URL',"https://www.dungn.tk/");

define('PROJECT_PATH',dirname(__FILE__).'/');



define('ADMIN_MAIL', "dung1111061@gmail.com");

define('ADMIN_MAIL_APP_PASSWORD', "vmmgkcazjkaiymls");



define('isPHPmailer', true);

if( !isset($_SESSION) ) session_start();



/*============================ Error Config ====================================*/

error_reporting(E_ALL);

// error_reporting(E_ALL & !E_NOTICE);

// error_reporting(E_ERROR | E_PARSE);



/*============================ Application Config ====================================*/



// Time Zone

define('TIME_ZONE',"Asia/Ho_Chi_Minh");



// File type supported as image

define('supported_image_types', array("image/png","image/jpeg"));





/*============================ Structure of directory ====================================*/

define('ADMIN_PATH',PROJECT_PATH."admin/");

define('ADMIN_URL',BASE_URL."admin/");



//

define('USER_URL',BASE_URL);

define('USER_PATH',PROJECT_PATH);



define('COMPONENT_URL',BASE_URL."components/");

define('IMAGE_URL',BASE_URL."images/");

define('PRODUCT_IMAGE_URL',IMAGE_URL."product/");

define('PRODUCT_DETAILS_IMAGE_URL',PRODUCT_IMAGE_URL."details/");

define('MANUFACTURER_IMAGE_URL',IMAGE_URL."manufacturer/");

define('AVATAR_IMAGE_URL',IMAGE_URL."avatar/");

define('NEW_IMAGE_URL',IMAGE_URL."new/");



define('COMPONENT_PATH',PROJECT_PATH."components/");

define('IMAGE_PATH',PROJECT_PATH."images/");

define('PRODUCT_IMAGE_PATH',IMAGE_PATH."product/");

define('PRODUCT_DETAILS_IMAGE_PATH',PRODUCT_IMAGE_PATH."details/");

define('MANUFACTURER_IMAGE_PATH',IMAGE_PATH."manufacturer/");

define('NEW_IMAGE_PATH',IMAGE_PATH."new/");



/*============================ Defined Exception ====================================*/

/**

 * Application designed exception for 

 * Exception designed for mySQL query error

 */

class MySQLQueryException extends Exception

{

    

}



/**

 * Application designed exception for 

 * Exception designed for route is not matched

 */

class RouteException extends Exception

{

    

}

/*============================ Constants ====================================*/

// privilege level

abstract class ORDER_STATUS

{

	const processing = 1; 

	const shipping = 2; 

    const paused = 3; 

    const cancel = 4; 

    const done = 5; 

}



// timestamp columns

define('db_created_at', "created_at");

define('db_updated_at', "updated_at");



// field in "admin" table in database

define('db_admin_email', "email");

define('db_admin_username', "username");

define('db_admin_firstname', "first_name");

define('db_admin_realname', "real_name");

define('db_admin_password', "password");

define('db_admin_privilege', "privilege");

define('db_admin_avatar', "avatar");



// field in "product" table in database

define('db_product_discount', "percentage_discount");

define('db_product_new', "new_flag");

define('db_product_id', "product_id");

define('db_product_model', "model");

define('db_product_name', "product_name");

define('db_product_price', "price");

define('db_product_quantity', "quantity");

define('db_product_available_date', "date_available");

define('db_product_image', "image");

define('db_product_imageLibraries', "imglibraries");

define('db_product_manufacturer',"manufacturer_id");

define('db_product_description',"description");

define('db_product_category',"category_id");

define('db_product_rank',"rank");

define('db_product_top_selling',"top_selling_flag");

define('db_product_weight',"weight");

define('db_product_height',"height");

define('db_product_length',"length");

define('db_product_width',"width");

define('db_product_hot_deal',"hot_deal");



// field in "manufacturer" table in database

define('db_manufacturer_name',"name");

define('db_manufacturer_id',"manufacturer_id");

define('db_manufacturer_image',"image");



// field in "conversation" table in database

define('db_conversation_id', "id");

define('db_conversation_username', "user");

define('db_conversation_bodymsg', "bodymsg");

define('db_conversation_time', "time");



// field in "description" table in database

define('db_description_id', "id");



// field in "category" table in database

define('db_category_name', "name");

define('db_category_id', "id");

define('db_category_parent_id', "parent_id");



// field in "relatedproduct" table in database

define('db_relatedproduct_product_id', "product_id");

define('db_relatedproduct_related_id', "related_id");



// field in "review" table in database

define('db_review_id', "review_id");

define('db_review_name', "name");

define('db_review_email', "email");

define('db_review_description', "description");

define('db_review_product', "product_id");

define('db_review_status', "status");

define('db_review_rank', "rating");



//

define('db_customer_id', "customer_id");

define('db_customer_email', "email");

define('db_customer_firstName', "firstname");

define('db_customer_lastName', "lastname");

define('db_customer_password', "password");

define('db_customer_wishlist', "wishlist");

define('db_customer_telephone', "telephone");

define('db_customer_subcriber', "subcriber");



//

define('db_cart_customer', "customer");

define('db_cart_product', "product");

define('db_cart_quantity', "quantity");



//

define('db_order_id', "order_id");

define('db_order_status', "order_status");

define('db_order_customer', "customer_id");

define('db_order_customerName', "customerName");

define('db_order_payment_firstName', "payment_firstname");

define('db_order_payment_lastName', "payment_lastname");

define('db_order_payment_email', "payment_email");

define('db_order_payment_address', "payment_address");

define('db_order_payment_city', "payment_city");

define('db_order_payment_country', "payment_country");

define('db_order_payment_postcode', "payment_postcode");

define('db_order_payment_telephone', "payment_telephone");

define('db_order_shipping_firstName', "shipping_firstname");

define('db_order_shipping_lastName', "shipping_lastname");

define('db_order_shipping_email', "shipping_email");

define('db_order_shipping_address', "shipping_address");

define('db_order_shipping_city', "shipping_city");

define('db_order_shipping_postcode', "shipping_postcode");

define('db_order_shipping_country', "shipping_country");

define('db_order_shipping_telephone', "shipping_telephone");

define('db_order_note', "note");

define('db_order_totalPrice', "totalPrice");



//

define('db_orderProduct_id', "order_product_id");

define('db_orderProduct_order', "order_id");

define('db_orderProduct_product', "product_id");

define('db_orderProduct_quantity', "quantity");



//

define('db_orderStatus_id', "id");

define('db_orderStatus_order', "order_id");

define('db_orderStatus_status', "status");

define('db_orderStatus_flag', "	currentFlag");

define('db_orderStatus_comment', "comment");





//

define('db_new_id', "id");

define('db_new_title', "title");

define('db_new_image', "image");

define('db_new_summary', "summary");

define('db_new_author', "author");

define('db_new_content', "content");

define('db_new_category', "category");

define('db_new_hot', "hot_flag");











