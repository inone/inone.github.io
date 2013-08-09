include("DropboxUploader.php");
/*** ... ***/
$uploader = new DropboxUploader("qh@india.com", "aliyabaji786");
$uploader->upload("upload/".$file_on_your_server, "Public/dropBox_directory", null); 
