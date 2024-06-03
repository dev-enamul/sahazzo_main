<?php 
if (!function_exists('getSlug')) {
    function getSlug($model, $title, $column = 'slug', $separator = '-') {
        $slug         = Str::slug($title);
        $originalSlug = $slug;
        $count        = 1;

        while ($model::where($column, $slug)->exists()) {
            $slug = $originalSlug . $separator . $count;
            $count++;
        }

        return $slug;
    }
}

if (!function_exists('get_date')) {
    function get_date($inputDate, $format = 'M j, Y', $timezone = 'Asia/Dhaka') {
        try {
            $date = new DateTime($inputDate);
            $date->setTimezone(new DateTimeZone($timezone));
            return $date->format($format);
        } catch (Exception $e) {
            return '-';
        }
    }
}
