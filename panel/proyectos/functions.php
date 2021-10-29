<?php

/*

    validateProject
    createProject
    editProject
    
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

function deleteImage($fileUrl) {

    global $upload_dir;
    $filePath = $upload_dir . $fileUrl;

    if(file_exists($filePath)){
        unlink($filePath);
    }

}

function manageImagesToEdit() {

    global $images;

    foreach ($images as $key => $image) {

        $field_name = $image['field'];
        $image_name = $image['name'];

        if(!empty($_FILES[$field_name]['tmp_name'])) {

            deleteImage($_POST[$field_name]);

            $images[$field_name]['fileUrl'] = uploadImage($field_name);

        } else {

            $images[$field_name]['fileUrl'] = $_POST[$field_name];

        }

    }

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

function editProject() {

    global $db;
    global $images;
    
    manageImagesToEdit();

    $statement = $db->prepare("
        UPDATE 
            projects 
        SET 
            title = :title, principal_img = :principal_img, year = :year, client = :client, 
            location = :location, surface = :surface, es_content = :es_content, en_content = :en_content,
            little_image_1 = :little_image_1, little_image_2 = :little_image_2, 
            vertical_image = :vertical_image, under_vertical_image = :under_vertical_image
        WHERE id = :projectId
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
        'under_vertical_image' => $images['under_vertical_image']['fileUrl'],
        'projectId' => $_POST['projectId']
    ));

    echo "<script>alert('Proyecto editado correctamente')</script>";
    echo "<script>location.href = './project.php?projectId=" . $_POST['projectId'] . "'</script>";

}

?>