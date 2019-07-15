<?php

namespace Mahmudz\BanglaSomoy;

class BanglaSomoy{


    public static $bn_numbers = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    public static $en_numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    public static $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    public static $en_short_months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    public static $bn_months = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    public static $en_days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    public static $en_short_days = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
    public static $bn_short_days = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র'];
    public static $bn_days = ['শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'];


    public static $en_periods = array('am', 'pm');
    public static $en_periods_uppercase = array('AM', 'PM');
    public static $bn_periods = array('পূর্বাহ্ন', 'অপরাহ্ন');


    /**
     * [toBangla converts english date/day/numbers to bangla]
     * @param  [string] $data [takes english inputs]
     * @return [string]       [returns bangla string]
     */
    public static function toBangla($data)
    {

        $data = strtolower($data);
        // Replacing numbers
        $data = str_replace(self::$en_numbers, self::$bn_numbers, $data);

        // Replacing periods
        $data = str_replace(self::$en_periods, self::$bn_periods, $data);

        // Replacing months
        $data = str_replace(self::$en_months, self::$bn_months, $data);
        // Replacing short months
        $data = str_replace(self::$en_short_months, self::$bn_months, $data);

        $data = title_case($data);
        // Replacing days
        $data = str_replace(self::$en_days, self::$bn_days, $data);
        // Replacing short days
        $data = str_replace(self::$en_short_days, self::$bn_short_days, $data);

        return $data;
    }

    /**
     * [toEnglishNumber Converts bangla date/day/numbers to english]
     * @param  [string] $data [takes bangla inputs]
     * @return [string]       [returns english string]
     */

    public static function toEnglish($data)
    {
        // Replacing numbers
        $data = str_replace(self::$bn_numbers, self::$en_numbers, $data);

        // Replacing periods
        $data = str_replace(self::$bn_periods, self::$en_periods, $data);


        // Replacing months
        $data = str_replace(self::$bn_months, self::$en_months, $data);
        // Replacing short months
        $data = str_replace(self::$bn_months, self::$en_short_months, $data);

        // Replacing days
        $data = str_replace(self::$bn_days, self::$en_days, $data);
        // Replacing short days
        $data = str_replace(self::$bn_short_days, self::$en_short_days, $data);


        return $data;
    }


}
