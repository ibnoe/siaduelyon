<?php
/* Links */
define('RLNK',ROOTLNK.'manajemen/');
define('IMGR',ROOTLNK.'shared/images/');

/* Database */
define('DBNAME','josh');

/* System Directory */
define('ROTDIR',ROOTDIR.'manajemen/');
define('SYSDIR',ROTDIR.'system/');

/* Apps Directory */
define('APPDIR',SYSDIR.'apps/');

/* Libraries Directory */
define('LIBDIR',SHAREDLIB);
define('MODDIR',LIBDIR.'modules/');

/* Views Directory */
define('VWDIR',SYSDIR.'views/');

/* Resources Directory */
define('IMGDIR',ROTDIR.'images/');
define('FILEDIR',ROTDIR.'upload/');
define('FOTODIR',ROTDIR.'photo/');

/* Load App libraries */
require_once(DBFILE);
require_once(LIBDIR.'common.php');
require_once(MODDIR.'date.php');
require_once(MODDIR.'apps/psb.php');

define('APID','man');
define('ASID',APID.'_');

$APP_TITLE='Manajemen Sistem';
$APP_HOMETITLE='Home';
$APP_PLUGIN="flot|tinymce";
$APP_PAGES=Array(
	0=>Array(
		'tileset'=>Array('key'=>'home','title'=>'Home','slide'=>1,'pos'=>'0px','tipe'=>2),
		'pages'=>Array(
			app_page('user','Manajemen User','Mengelola pengguna dan administrator.',$APP_COLOR_THEME1[0],'userg.png')
			/*app_page('kelompok','Kelompok Pendaftaran','Pengelompokan calon siswa atau gelombang penerimaan.',$APP_COLOR_THEME1[1],'userg.png'),
			app_page('pendataan','Pendataan Calon Siswa','Pendataan calon siswa yang mendaftar.',$APP_COLOR_THEME1[2],'userp.png'),
			//app_page('penempatan','Penempatan Siswa Baru','Menempatkan calon siswa yang diterima sebagai siswa pada kelas.',$APP_COLOR_THEME1[3],''),
			app_page('penerimaan','Penerimaan Siswa Baru','Penerimaan calon siswa sebagai siswa aktif.',$APP_COLOR_THEME1[3],'usercek.png'),
			app_page('cari','Cari Calon Siswa Baru','',$APP_COLOR_THEME1[4],'search.png',3,'PCBCODE=1;std'),
			app_page('statistik','Statistik Penerimaan','',$APP_COLOR_THEME1[5],'stats.png',3,'PCBCODE=2;std')*/
		)
	)
	/*,
	1=>Array(
		'tileset'=>Array('key'=>'referensi','title'=>'Referensi','slide'=>2,'pos'=>'980px','tipe'=>1),
		'pages'=>Array(
			app_page('kriteria','Kriteria Calon Siswa','',$APP_COLOR_THEME2[0],''),
			app_page('golongan','Golongan Calon Siswa','',$APP_COLOR_THEME2[1],''),
			app_page('biaya','Set Biaya Calon Siswa','',$APP_COLOR_THEME2[2],''),
			app_page('angsuran','Set Angsuran','',$APP_COLOR_THEME2[3],''),
			app_page('discount','Set Diskon','',$APP_COLOR_THEME2[4],''),
			app_page('syarat','Persyaratan Calon Siswa','',$APP_COLOR_THEME2[5],'')
		)
	)*/
);
$APP_CSLIDE=1;
$APP_TILE_FADE=count($APP_PAGES[0]['pages'])+count($APP_PAGES[1]['pages']);
$APP_PANEL_POS=Array(1=>'20px',2=>'-960px');
$APP_CSS='#pendataan_dps .xlabel{width:140px;float:left}';
?>