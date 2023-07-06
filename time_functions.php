// currentTime(); => current time in Y-m-d H:i:s format (obviously), currentTime('+','months',3); => 3 months in the future 
function currentTime($sign="+",$unit="months",$int=0,$timezone="America/New_York"){
    $current_timestamp = new DateTime("now", new DateTimeZone($timezone));
    $expiration_datetime = $current_timestamp->modify($sign . $int . ' ' . $unit);
    return $expiration_datetime->format('Y-m-d H:i:s');
}

// one timestamp gets compared to another (big - small) 
function format_time_difference($start_time, $end_time) {
    $diff = abs($end_time - $start_time);
    if ($diff >= 60 * 60 * 24) {
        $days = floor($diff / (60 * 60 * 24));
        if ($days >= 30) {
            $months = floor($days / 30);
            return $months . " month" . ($months > 1 ? "s" : "");
        } else {
            return $days . " day" . ($days > 1 ? "s" : "");
        }
    } else {
        $hours = floor($diff / (60 * 60));
        $minutes = floor(($diff - $hours * 60 * 60) / 60);
        if ($hours > 0) {
            return $hours . " hour" . ($hours > 1 ? "s" : "");
        } else {
            return $minutes . " minute" . ($minutes > 1 ? "s" : "");
        }
    }
}
