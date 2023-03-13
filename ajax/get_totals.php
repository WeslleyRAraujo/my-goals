<?php

include_once __DIR__ . '/../bootstrap.php';

$totals = [];

$goals = $database->from('goals')->sum('id')??0;
$spending = $database->from('transactions')->where('type')->notIn(['C'])->sum('value')??0;
$balance = $database->from('transactions')->where('type')->is('C')->sum('value')??0;

$totals['goals'] = $goals;
$totals['spending'] = 'R$ ' . number_format($spending, 2, ',', '.');
$totals['balance'] = 'R$ ' . number_format($balance, 2, ',', '.');

json($totals);