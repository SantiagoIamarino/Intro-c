<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*

    validateProject
    editProject
    createProject
    
*/

$images = [
    'principal_img' => array('field' => 'principal_img', 'name' => 'Imagen principal', 'fileUrl' => ''),
    'little_image_1' => array('field' => 'little_image_1', 'name' => 'Imagen pequeña 1', 'fileUrl' => ''),
    'little_image_2' => array('field' => 'little_image_2', 'name' => 'Imagen pequeña 2', 'fileUrl' => ''),
    'vertical_image' => array('field' => 'vertical_image', 'name' => 'Imagen vertical', 'fileUrl' => ''),
    'under_vertical_image' => array('field' => 'under_vertical_image', 'name' => 'Imagen debajo vertical', 'fileUrl' => '')
];


function validateProject($project) {
    if(!isset($project['title']) || empty($project['title'])) {
        echo '<script>alert("Debes indicar un título para el proyecto")</script>';

        return false;
    }


    return true;
}

function editProject() {

    global $db;

    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
        $image = basename($_FILES['image']['name']);

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $image)) {
            echo '<script>alert("No se ha podido subir la imagen")</script>';
        }
    } else {
        $image = $_POST['imageUrl'];
    }
    

    $statement = $db->prepare("UPDATE posts SET title = :title, category = :category, slug = :slug, metaDescription = :metaDescription, content = :content, imageUrl = :imageUrl
            WHERE id = :projectId");

    $statement->execute(array(
        'title' => $_POST['title'], 
        'category' => $_POST['category'],
        'slug' => $_POST['slug'], 
        'metaDescription' => $_POST['metaDescription'], 
        'content' => $_POST['content'], 
        'imageUrl' => $image,
        'projectId' => $_POST['projectId']
    ));

    header('Location: post.php?projectId=' . $_POST['projectId']);

}

function uploadImage($image_field) {
    global $upload_dir;

    $tmp_name = $_FILES[$image_field]['tmp_name'];
    $file_name = $_FILES[$image_field]['name'];
    $file_cmps = explode(".", $file_name);
    $file_extension = strtolower(end($file_cmps));
    
    $final_file_name = md5(time() . $file_name) . '.' . $file_extension;

    $path = $upload_dir . $final_file_name;

    if (move_uploaded_file($tmp_name, $path)) {
        
        return $final_file_name;

    } else {

        return '';

    }
}

function validateImages() {

    global $images;
    $error = '';

    foreach ($images as $key => $image) {

        $field_name = $image['field'];
        $image_name = $image['name'];

        if(empty($_FILES[$field_name]['tmp_name'])) {

            $error = "Debes especificar una " . $image_name;
            break;

        }

    }

    if(!empty($error)) {
        echo "<script>alert('$error')</script>";
        return false;
    }

    return true;
    
}

function createProject() {

    global $db;
    global $images;

    if(!validateImages()) {
        return;
    }

    foreach ($images as $key => $image) {
        
        $images[$key]['fileUrl'] = uploadImage($image['field']);

    }

    $statement = $db->prepare("
        INSERT INTO 
            projects(
                title, principal_img, year, client, location, surface, es_content,  
                en_content, little_image_1, little_image_2, vertical_image, under_vertical_image
            ) 
        VALUES 
            (
                :title, :principal_img, :year, :client, :location, :surface, :es_content, 
                :en_content, :little_image_1, :little_image_2, :vertical_image, :under_vertical_image
            ) 
    ");

    $statement->execute(array(
        'title' => $_POST['title'], 
        'principal_img' => $images['principal_img']['fileUrl'],
        'year' => $_POST['year'], 
        'client' => $_POST['client'], 
        'location' => $_POST['location'], 
        'surface' => $_POST['surface'], 
        'es_content' => $_POST['es_content'], 
        'en_content' => $_POST['en_content'], 
        'little_image_1' => $images['little_image_1']['fileUrl'],
        'little_image_2' => $images['little_image_2']['fileUrl'],
        'vertical_image' => $images['vertical_image']['fileUrl'],
        'under_vertical_image' => $images['under_vertical_image']['fileUrl']
    ));

    echo "<script>alert('Proyecto cargado correctamente)'</script>";
    echo "<script>location.href = './'</script>";

}

?>