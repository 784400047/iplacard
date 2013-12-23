<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 文件大小去格式化
 * @param string 形如 2M 的字符串
 * @return int 字节数
 */
function byte_deformat($val)
{
	$val = trim($val);
	
	$last = strtolower($val[strlen($val)-1]);
	
	switch($last) {
		case 'g':
			$val *= 1024;
		case 'm':
			$val *= 1024;
		case 'k':
			$val *= 1024;
	}

	return $val;
}

/* End of file IP_number_helper.php */
/* Location: ./application/helpers/IP_number_helper.php */