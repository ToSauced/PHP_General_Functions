// Converts # of units to bytes (integer) i.e., convertToBytes(1,'kb'); => 1024 
function convertToBytes($size, $unit): int {
    $size = floatval($size);
    $unit = strtolower($unit);

    switch ($unit){
        case 'b':
            return $size;
        case 'kb':
            return $size * 1024;
        case 'mb':
            return $size * 1024 * 1024;
        case 'gb':
            return $size * 1024 * 1024 * 1024;
        case 'tb':
            // terabyte
            return $size * 1024 * 1024 * 1024 * 1024;
        case 'pb':
            // petabyte
            return $size * 1024 * 1024 * 1024 * 1024 * 1024;
        case 'eb':
            // exabyte
            return $size * 1024 * 1024 * 1024 * 1024 * 1024 * 1024;
        case 'zb':
            // zettabyte
            return $size * 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024;
        case 'yb':
            // yottabyte
            return $size * 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024 * 1024;
        default:
            // invalid option
            return 0;
    }
}

// Converts bytes (integer) to readable units like 'kb' i.e., convertFromBytes(1024); => 1kb
function convertFromBytes($bytes){
    if ($bytes <= 1023){
        return $bytes . "b";
    } elseif ($bytes <= 1048575){
        return $bytes/1024 . 'kb';
    } elseif ($bytes <= 1073741823){
        return $bytes/1024/1024 . 'mb';
    } elseif ($bytes <= 1099511627775){
        return $bytes/1024/1024/1024 . 'gb';
    }
    // anything bigger should be shot, if you want to add-on just google tb size then minus 1 and make it another elseif statement
}
