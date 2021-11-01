<?php
    require('../config.php');

    function getData($term, $table) {

        global $db;

        $statement = $db->prepare("
            SELECT * FROM 
                $table
            WHERE
                title LIKE '%$term%'
            ORDER BY
                popularity DESC
            LIMIT 5
        ");

        $statement->execute();
        $projects = $statement->fetchAll();

        return $projects;

    }

    function comparator($objectOne, $objectTwo) {
        return $objectOne['popularity'] < $objectTwo['popularity'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['term'])) {
        $term = $_POST['term'];
       
        $projects = getData($term, 'projects');

        $posts = getData($term, 'posts');

        $results = array_merge($projects, $posts);

        usort($results, 'comparator');

        print_r(json_encode(array(
            'ok' => true,
            'results' => $results
        )));

    }

?>