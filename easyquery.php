<?php

function easyQuery($db, $fetch, $select, $from, $where, $limit, $orderby, $objectReturn) {

    // Mandatory Parameters check

    if (!is_string($fetch)) {
        echo "FETCH value is not a string";
        die();
    } // If FETCH is not a string

    if (!is_string($select)) {
        echo "SELECT value is not a string";
        die();
    } // If SELECT is not a string

    if (!is_string($from)) {
        echo "FROM value is not a string";
        die();
    } // If FROM is not a string


    // Basic query

    $query = 'SELECT '.$select.' FROM `'.$from.'`';

    // Query options

    if ($where != false) {
        $query = $query.' WHERE '.$where;
    }
    if ($limit != false) {
        $query = $query.' LIMIT '.$limit;
    }
    if ($orderby != false) {
        $query = $query.' ORDER BY '.$orderby;
    }

    // Query send & execute

    $queryTable = $db->prepare($query);
    $queryTable->execute();

    // Fetch type

    if ($fetch == "all") {
        $tableResult = $queryTable->fetchAll();
    } elseif ($fetch == "one") {
        $tableResult = $queryTable->fetch();
    }

    // Result object convert

    if ($objectReturn == true) {
        $tableResult = (object)$tableResult;
    }

    // Result return

    return $tableResult;

}








?>