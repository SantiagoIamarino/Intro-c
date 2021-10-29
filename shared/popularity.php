<?php

    $table = '';

    $data = [
        'id' => '',
        'popularity' => ''
    ];

    if(isset($post)) {
        $table = 'posts';
        $data['id'] = $postId;
        $data['popularity'] = $post['popularity'];
    }

    if(isset($project)) {
        $table = 'projects';
        $data['id'] = $projectId;
        $data['popularity'] = $project['popularity'];
    }

    if(!empty($table)) {

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $newPopularity = ((int)$data['popularity']) + 1;

        $statement = $db->prepare("
            UPDATE
                $table
            SET
                popularity = :newPopularity
            WHERE 
                id = :id
        ");

        $statement->execute(array(
            'newPopularity' => $newPopularity,
            'id' => $data['id']
        ));

    }

?>