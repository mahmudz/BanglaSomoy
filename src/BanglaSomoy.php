<?php

namespace Mahmudz\BanglaSomoy;

class BanglaSomoy{

    /**
     * [$bn_numbers All Bangla Numbers]
     * @var [array]
     */
    public static $bn_numbers = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    public static $en_numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    public static $en_short_months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    public static $bn_months = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static $en_days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    public static $en_short_days = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
    public static $bn_short_days = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র'];
    public static $bn_days = ['শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'];

    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static $en_times = array('am', 'pm');
    public static $en_times_uppercase = array('AM', 'PM');
    public static $bn_times = array('পূর্বাহ্ন', 'অপরাহ্ন');



    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static function toBanglaNumber($number)
    {
        return str_replace(self::$en_numbers, self::$bn_numbers, $number);
    }


    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static function toEnglishNumber($number)
    {
        return str_replace(self::$bn_numbers, self::$en_numbers, $number);
    }


    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static function toBanglaDate($date)
    {

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date = str_replace(self::$en_numbers, self::$bn_numbers, $date);

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date = str_replace(self::$en_months, self::$bn_months, $date);
        $date = str_replace(self::$en_short_months, self::$bn_months, $date);

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date = str_replace(self::$en_days, self::$bn_days, $date);
        $date = str_replace(self::$en_short_days, self::$bn_short_days, $date);
        $date = str_replace(self::$en_days, self::$bn_days, $date);
        return $date;
    }


    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static function toBanglaTime($time)
    {

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $time = str_replace(self::$en_numbers, self::$bn_numbers, $time);

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $time = str_replace(self::$en_times, self::$bn_times, $time);
        $time = str_replace(self::$en_times_uppercase, self::$bn_times, $time);
        return $time;
    }


    /**
     * [$bn_numbers description]
     * @var [type]
     */
    public static function toBanglaDateTime($date_time)
    {

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date_time = str_replace(self::$en_numbers, self::$bn_numbers, $date_time);

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date_time = str_replace(self::$en_months, self::$bn_months, $date_time);
        $date_time = str_replace(self::$en_short_months, self::$bn_months, $date_time);

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date_time = str_replace(self::$en_days, self::$bn_days, $date_time);
        $date_time = str_replace(self::$en_short_days, self::$bn_short_days, $date_time);
        $date_time = str_replace(self::$en_days, self::$bn_days, $date_time);

        /**
         * [$bn_numbers description]
         * @var [type]
         */
        $date_time = str_replace(self::$en_times, self::$bn_times, $date_time);
        $date_time = str_replace(self::$en_times_uppercase, self::$bn_times, $date_time);
        return $date_time;
    }
}
