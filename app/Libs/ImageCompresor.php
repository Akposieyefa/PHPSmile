<?php 

namespace App\Libs;

class ImageCompresor
{
       public function compressImage($source, $destination, $quality) 
       { 
              $imgInfo = getimagesize($source); 
              $mime = $imgInfo['mime']; 

              switch($mime){ 
                     case 'image/jpeg': 
                            $image = imagecreatefromjpeg($source); 
                            imagejpeg($image, $destination, $quality);
                            break; 
                     case 'image/png': 
                            $image = imagecreatefrompng($source); 
                            imagepng($image, $destination, $quality);
                            break; 
                     case 'image/gif': 
                            $image = imagecreatefromgif($source); 
                            imagegif($image, $destination, $quality);
                            break; 
                     default: 
                            $image = imagecreatefromjpeg($source); 
                            imagejpeg($image, $destination, $quality);
              } 
              return $destination; 
       }

       public function simpleImage($uploadPath,$allowTypes,$image,$quality)
       {
               
              $uploadPath = "uploads/"; 
              $status = $statusMsg = ''; 
              $status = 'error'; 
              if(!empty($_FILES["$image"]["name"])) { 
                     // File info 
                     $fileName = basename($_FILES["$image"]["name"]); 
                     $imageUploadPath = $uploadPath . $fileName; 
                     $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
                     
                     // Allow certain file formats 
                     // $allowTypes = array('jpg','png','jpeg','gif'); 
                     if(in_array($fileType, $allowTypes)){ 
                            // Image temp source 
                            $imageTemp = $_FILES["$image"]["tmp_name"]; 
                            
                            // Compress size and upload image 
                            $compressedImage = compressImage($imageTemp, $imageUploadPath, $quality); 
                            
                            if($compressedImage) { 
                                   $status = 'success'; 
                                   $statusMsg = "Image compressed successfully."; 
                                  // move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                            }else{ 
                                   $statusMsg = "Image compress failed!"; 
                            } 
                     }else{ 
                            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
                     } 
              }else{ 
                     $statusMsg = 'Please select an image file to upload.'; 
              } 
              return $statusMsg; 
       }
}