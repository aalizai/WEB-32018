<?php 
include '../data/class.post_curd.php';
$obj = new post_curd();
$posts =$obj->list_posts();
$data = array(
'Ahmad','Mohamdi','89797979797','mohamadi@gmial.com'
);

function write_csv($file,$da){
	$h = fopen($file, 'w');
	fputcsv($h, $da);
}

//write_csv('test1.csv', $data);

function write_csv_fromdb($d){
	/*
	header("Content-Type:text/csv ");
	header('Content-Disposition:attachment; filename=test2.csv ');
	$file= 'php://output';
	 * 
	 */
	$file = 'posts.csv';
	$f = fopen($file, 'w');
	foreach ($d as $post) {
		fputcsv($f, $post);
	}
	fclose($f);
	$fil ='./test.zip';
    $zip = new ZipArchive();
       $zip->open($fil,ZipArchive::CREATE);
    //$zip->addFromString('test.txt',"this is new text");
	$zip->addFile($file);
    $zip->close();
	
}
 write_csv_fromdb( $posts);
?>