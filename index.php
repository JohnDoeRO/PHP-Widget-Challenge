<?php
$packsizes = [1000, 250, 500, 2000, 5000];
$widgets_ordered  = [1, 251, 501, 1001, 12001];
$answer = [];

foreach ($widgets_ordered as $row) array_push($answer, calculatePacks($packsizes, $row));
header('Content-Type: application/json; charset=utf-8');
echo json_encode(array_combine($widgets_ordered, $answer));

function calculatePacks($packsizes, $no)
    {
        rsort($packsizes);
        $no = exceptions($no);
        $results = array_fill_keys($packsizes, 0);
        while ($no > 0) {
            foreach ($packsizes as $size) {
                if ($size <= $no) break;
            }
            ++$results[$size];
            $no -= $size;
        }
        return $results;
    }


 function exceptions($no)
    {
        ($no > 250 && $no < 500) ? $no = 500 : $no;
        return $no;
    }