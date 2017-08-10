<?php

/**
 * 获取文件扩展名
 *
 * @param $file
 * @return string
 */
function file_ext($file){
    $pos = strrpos($file, ".");
    if($pos===false){
        return "";
    }
    return strtolower(substr($file, $pos));
}

/**
 * 验证是否是一个手机号码
 *
 * @param $phone
 * @return bool
 */
function is_phone($phone){
    if(preg_match('/^1[34578][0-9]{9}$/', $phone)){
        return true;
    }

    return false;
}

/**
 * 验证是否是一个Email地址
 *
 * @param $phone
 * @return bool
 */
function is_email($email){
    if(preg_match('/^[a-z0-9_.-]+@\w+\..{2,}$/i', $email)){
        return true;
    }

    return false;
}

/**
 * 验证是否是一个日期格式
 *
 * @param $phone
 * @return bool
 */
function is_date($date){
    if(preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-[0-9]{2}$/i', $date)){
        return true;
    }

    return false;
}

/**
 * 删除目录
 *
 * @param $dir
 * @return bool
 */
function removedir($dir){
    if(substr($dir, -1) != "/"){
        $dir .= "/";
    }

    if(!is_dir($dir)){
        return false;
    }

    $list = glob($dir."*");
    foreach($list as $v){
        is_dir($v) ? removedir($v) : unlink($v);
    }

    return @rmdir($dir);
}

/**
 * 返回合适的文件大小
 *
 * @param $size
 * @return string
 */
function fsize($size){

    if($size>=1073741824 ){
        return (intval($size/1073741824*100)/100)."GB";
    }else if($size>=1048576){
        return (intval($size/1048576*100)/100)."MB";
    }else if($size>=1024){
        return (intval($size/1024*100)/100)."KB";
    }else{
        return $size."字节";
    }
}

/**
 * 返回文件类型
 * @param $ext
 * @return string
 */
function ftype($ext){
    $arr = array(
        ".php" => "php文件",
        ".html" => "HTML文件",
        ".zip" => "压缩文件",
        ".txt" => "文本文件",
        ".jpg" => "jpg图片",
        ".png" => "png图片",
        ".gif" => "gif图片",
    );

    return isset($arr[$ext]) ? $arr[$ext] : "未知类型";
}
/**
 *  弹出框
 */
function alert($msg="", $url=""){
    echo '<script>';
    echo 'alert("'.$msg.'");';
    if(!empty($url)) {
        echo 'location.href="'.$url.'"';
    }else{
        echo 'history.go(-1);';
    }
    echo '</script>';
    exit;
}

/**
 *
 * 字符截取
 * @param string $string
 * @param int $start        //开始位置
 * @param int $length       //截取长度
 * @param string $charset
 * @param string $dot
 *
 * @return string
 */
function str_cut(&$string, $start, $length, $charset = "utf-8", $dot = '...') {
    if(function_exists('mb_substr')) {
        if(mb_strlen($string, $charset) > $length) {
            return mb_substr ($string, $start, $length, $charset) . $dot;
        }
        return mb_substr ($string, $start, $length, $charset);

    }else if(function_exists('iconv_substr')) {
        if(iconv_strlen($string, $charset) > $length) {
            return iconv_substr($string, $start, $length, $charset) . $dot;
        }
        return iconv_substr($string, $start, $length, $charset);
    }

    $charset = strtolower($charset);
    switch ($charset) {
        case "utf-8" :
            preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $ar);
            if(func_num_args() >= 3) {
                if (count($ar[0]) > $length) {
                    return join("", array_slice($ar[0], $start, $length)) . $dot;
                }
                return join("", array_slice($ar[0], $start, $length));
            } else {
                return join("", array_slice($ar[0], $start));
            }
            break;
        default:
            $start = $start * 2;
            $length   = $length * 2;
            $strlen = strlen($string);
            for ( $i = 0; $i < $strlen; $i++ ) {
                if ( $i >= $start && $i < ( $start + $length ) ) {
                    if ( ord(substr($string, $i, 1)) > 129 ) $tmpstr .= substr($string, $i, 2);
                    else $tmpstr .= substr($string, $i, 1);
                }
                if ( ord(substr($string, $i, 1)) > 129 ) $i++;
            }
            if ( strlen($tmpstr) < $strlen ) $tmpstr .= $dot;

            return $tmpstr;
    }
}


/**
 * 生成分页链接
 *
 * @param int $page_count
 * @param int $curr_page
 * @param string $url
 *
 * @return string
 */
function page_links($page_count, $curr_page, $url="") {

    if($url != ""){
        $url .= "&page=";
    }else{
        $url = "?page=";
    }

    $curr_class = "current";
    $output = '<div class="pages">';
    if ($curr_page != 1) {
        $output .= '<a class="first" href="' . $url . '1">首页</a>';
        $output .= '<a class="prev" href="' . $url . ($curr_page - 1) . '">上一页</a>';
    }

    if ($curr_page < 6 || $page_count < 10) {
        for($i = 1; $i < 10; $i ++) {
            if ($i != $curr_page) {
                $output .= "<a href=\"" . $url . $i . "\" class=\"";
                $output .= $curr_page == $i ? $curr_class : '';
                $output .= "\">{$i}</a>";
            } else {
                $output .= '<a class="'.$curr_class.'">' . $curr_page . '</a>';
            }
            if ($i >= $page_count)
                break;
        }
        if ($page_count > 10)
            $output .= "<a href='" . $url . "8'>...</a>";

    } elseif ($curr_page > 5 && $curr_page < $page_count - 4) {
        $output .= "<a href='" . $url . ($curr_page - 5) . "'>...</a>";
        for($i = $curr_page - 4; $i < $curr_page + 5; $i ++) {
            $output .= "<a href=\"" . $url . $i . "\" class=\"";
            $output .= $curr_page == $i ? $curr_class : '';
            $output .= "\">{$i}</a>";
            if ($i >= $page_count)
                break;
        }
        $output .= "<a href=\"" . $url . ($curr_page + 6) . "\">...</a>";

    } elseif ($curr_page + 5 > $page_count) {
        $output .= "<a href=\"" . $url . ($curr_page - 9) . "\">...</a>";
        for($i = $page_count - 8; $i < $page_count + 1; $i ++) {
            if ($i > 1) {
                $output .= "<a href=\"" . $url . $i . "\" class=\"";
                $output .= $curr_page == $i ? $curr_class : '';
                $output .= "\">{$i}</a>";
            }
        }
        if ($curr_page < $page_count - 6) {
            $output .= "<a href='" . $url . ($curr_page + 5) . "'>...</a>";
        }
    }

    if ($curr_page < $page_count) {
        $output .= '<a class="next" href="' . $url . ($curr_page + 1) . '">下一页</a>';
        $output .= '<a class="first" href="' . $url . $page_count . '">末页</a>';
    }

    $output .= '</div>';

    return $output;
}


/**
 * 生成后台分页链接
 *
 * @param int $page_count
 * @param int $curr_page
 * @param string $url
 *
 * @return string
 */
function cms_page_links($page_count, $curr_page, $url="") {

    if($url != ""){
        $url .= "&page=";
    }else{
        $url = "?page=";
    }

    $curr_class = "active";
    $output = '<ul id="paginator-example" class="pagination">';
    if ($curr_page != 1) {
        $output .= '<li><a class="first" href="' . $url . '1">首页</a></li>';
        $output .= '<li><a class="prev" href="' . $url . ($curr_page - 1) . '">上一页</a></li>';
    }

    if ($curr_page < 6 || $page_count < 10) {
        for($i = 1; $i < 10; $i ++) {
            if ($i != $curr_page) {
                $output .= "<li><a href=\"" . $url . $i . "\" class=\"";
                $output .= "\">{$i}</a></li>";
            } else {
                $output .= '<li><a class="'.$curr_class.'">' . $curr_page . '</a></li>';
            }
            if ($i >= $page_count)
                break;
        }
        if ($page_count > 10)
            $output .= "<a href='" . $url . "8'>...</a>";

    } elseif ($curr_page > 5 && $curr_page < $page_count - 4) {
        $output .= "<li><a href='" . $url . ($curr_page - 5) . "'>...</a></li>";
        for($i = $curr_page - 4; $i < $curr_page + 5; $i ++) {
            $output .= "<li><a href=\"" . $url . $i . "\" class=\"";
            $output .= $curr_page == $i ? $curr_class : '';
            $output .= "\">{$i}</a></li>";
            if ($i >= $page_count)
                break;
        }
        $output .= "<li><a href=\"" . $url . ($curr_page + 6) . "\">...</a></li>";

    } elseif ($curr_page + 5 > $page_count) {
        $output .= "<li><a href=\"" . $url . ($curr_page - 9) . "\">...</a></li>";
        for($i = $page_count - 8; $i < $page_count + 1; $i ++) {
            if ($i > 1) {
                $output .= "<li><a href=\"" . $url . $i . "\" class=\"";
                $output .= $curr_page == $i ? $curr_class : '';
                $output .= "\">{$i}</a></li>";
            }
        }
        if ($curr_page < $page_count - 6) {
            $output .= "<li><a href='" . $url . ($curr_page + 5) . "'>...</a></li>";
        }
    }

    if ($curr_page < $page_count) {
        $output .= '<li><a class="next" href="' . $url . ($curr_page + 1) . '">下一页</a></li>';
        $output .= '<li><a class="first" href="' . $url . $page_count . '">末页</a></li>';
    }

    $output .= '</ul>';

    return $output;
}


