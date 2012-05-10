<?php
/**
 * Uploader Plugin Config
 *
 * A config class that holds all the settings and default mimetypes.
 *
 * @author      Miles Johnson - http://milesj.me
 * @copyright   Copyright 2006-2011, Miles Johnson, Inc.
 * @license     http://opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link        http://milesj.me/code/cakephp/uploader
 */

/**
 * Current version.
 */
$config['Uploader']['version'] = '3.5';

/**
 * The accepted file/mime types.
 */
$config['Uploader']['mimeTypes'] = array(
	'image' => array(
		'bmp'	=> 'image/bmp',
		'gif'	=> 'image/gif',
		'jpe'	=> 'image/jpeg',
		'jpg'	=> 'image/jpeg',
		'jpeg'	=> 'image/jpeg',
		'pjpeg'	=> 'image/pjpeg',
		'svg'	=> 'image/svg+xml',
		'svgz'	=> 'image/svg+xml',
		'tif'	=> 'image/tiff',
		'tiff'	=> 'image/tiff',
		'ico'	=> 'image/vnd.microsoft.icon',
		'png'	=> array('image/png', 'image/x-png'),
		'xpng'	=> 'image/x-png'
	),
	'text' => array(
		'txt' 	=> 'text/plain',
		'asc' 	=> 'text/plain',
		'css' 	=> 'text/css',
		'csv'	=> 'text/csv',
		'htm' 	=> 'text/html',
		'html' 	=> 'text/html',
		'stm' 	=> 'text/html',
		'rtf' 	=> 'text/rtf',
		'rtx' 	=> 'text/richtext',
		'sgm' 	=> 'text/sgml',
		'sgml' 	=> 'text/sgml',
		'tsv' 	=> 'text/tab-separated-values',
		'tpl' 	=> 'text/template',
		'xml' 	=> 'text/xml',
		'js'	=> 'text/javascript',
		'xhtml'	=> 'application/xhtml+xml',
		'xht'	=> 'application/xhtml+xml',
		'json'	=> 'application/json'
	),
	'archive' => array(
		'gz'	=> 'application/x-gzip',
		'gtar'	=> 'application/x-gtar',
		'z'		=> 'application/x-compress',
		'tgz'	=> 'application/x-compressed',
		'zip'	=> array('application/zip', 'application/x-zip-compressed'),
		'rar'	=> 'application/x-rar-compressed',
		'rev'	=> 'application/x-rar-compressed',
		'tar'	=> 'application/x-tar',
		'7z'	=> 'application/x-7z-compressed'
	),
	'audio' => array(
		'aif' 	=> 'audio/x-aiff',
		'aifc' 	=> 'audio/x-aiff',
		'aiff' 	=> 'audio/x-aiff',
		'au' 	=> 'audio/basic',
		'kar' 	=> 'audio/midi',
		'mid' 	=> 'audio/midi',
		'midi' 	=> 'audio/midi',
		'mp2' 	=> 'audio/mpeg',
		'mp3' 	=> array('audio/mpeg', 'audio/mp3'),
		'mpga' 	=> 'audio/mpeg',
		'ra' 	=> 'audio/x-realaudio',
		'ram' 	=> 'audio/x-pn-realaudio',
		'rm' 	=> 'audio/x-pn-realaudio',
		'rpm' 	=> 'audio/x-pn-realaudio-plugin',
		'snd' 	=> 'audio/basic',
		'tsi' 	=> 'audio/TSP-audio',
		'wav' 	=> 'audio/x-wav',
		'wma'	=> 'audio/x-ms-wma'
	),
	'video' => array(
		'flv' 	=> 'video/x-flv',
		'fli' 	=> 'video/x-fli',
		'avi' 	=> 'video/x-msvideo',
		'qt' 	=> 'video/quicktime',
		'mov' 	=> 'video/quicktime',
		'movie' => 'video/x-sgi-movie',
		'mp2' 	=> 'video/mpeg',
		'mpa' 	=> 'video/mpeg',
		'mpv2' 	=> 'video/mpeg',
		'mpe' 	=> 'video/mpeg',
		'mpeg' 	=> 'video/mpeg',
		'mpg' 	=> 'video/mpeg',
		'mp4'	=> 'video/mp4',
		'viv' 	=> 'video/vnd.vivo',
		'vivo' 	=> 'video/vnd.vivo',
		'wmv'	=> 'video/x-ms-wmv'
	),
	'application' => array(
		'js'	=> 'application/x-javascript',
		'xlc' 	=> 'application/vnd.ms-excel',
		'xll' 	=> 'application/vnd.ms-excel',
		'xlm' 	=> 'application/vnd.ms-excel',
		'xls' 	=> 'application/vnd.ms-excel',
		'xlw' 	=> 'application/vnd.ms-excel',
		'doc'	=> 'application/msword',
		'dot'	=> 'application/msword',
		'pdf' 	=> 'application/pdf',
		'psd' 	=> 'image/vnd.adobe.photoshop',
		'ai' 	=> 'application/postscript',
		'eps' 	=> 'application/postscript',
		'ps' 	=> 'application/postscript',
		'swf'	=> 'application/x-shockwave-flash'
	)
);

$config['Uploader']['exts'] = array(

		'image/bmp' => 'bmp',
		'image/gif' => 'gif',
		'image/jpeg' => 'jpg',
		'image/pjpeg' => 'pjpeg',
		'image/svg+xml' => 'svgz',
		'image/tiff' => 'tiff',
		'image/vnd.microsoft.icon' => 'ico',
		'image/png' => 'png',
		'image/x-png' => 'xpng',

		'text/plain' => 'txt',
		'text/css' => 'css',
		'text/csv' => 'csv',
		'text/html' => 'html',
		'text/rtf' => 'rtf',
		'text/richtext' => 'rtx',
		'text/sgml' => 'sgml',
		'text/tab-separated-values' => 'tsv',
		'text/template' => 'tpl',
		'text/xml' => 'xml',
		'text/javascript' => 'js',
		'application/xhtml+xml' => 'xht',
		'application/json' => 'json',

		'application/x-gzip' => 'gz',
		'application/x-gtar' => 'gtar',
		'application/x-compress' => 'z',
		'application/x-compressed' => 'tgz',
		'application/zip' => 'zip',
		'application/x-zip-compressed' => 'zip',
		'application/x-rar-compressed' => 'rev',
		'application/x-tar' => 'tar',
		'application/x-7z-compressed' => '7z',

		'audio/x-aiff' => 'aiff',
		'audio/basic' => 'snd',
		'audio/midi' => 'midi',
		'audio/mp3' => 'mp3',
		'audio/mpeg' => 'mpga',
		'audio/x-realaudio' => 'ra',
		'audio/x-pn-realaudio' => 'rm',
		'audio/x-pn-realaudio-plugin' => 'rpm',
		'audio/TSP-audio' => 'tsi',
		'audio/x-wav' => 'wav',
		'audio/x-ms-wma' => 'wma',

		'video/x-flv' => 'flv',
		'video/x-fli' => 'fli',
		'video/x-msvideo' => 'avi',
		'video/quicktime' => 'mov',
		'video/x-sgi-movie' => 'movie',
		'video/mpeg' => 'mpg',
		'video/mp4' => 'mp4',
		'video/vnd.vivo' => 'vivo',
		'video/x-ms-wmv' => 'wmv',

		'application/x-javascript' => 'js',
		'application/vnd.ms-excel' => 'xls',
		'application/msword' => 'doc',
		'application/pdf' => 'pdf',
		'image/vnd.adobe.photoshop' => 'psd',
		'application/postscript' => 'ps',
		'application/x-shockwave-flash' => 'swf',
);
