<?php

/* ==============================
 *          ПЕРЕМЕННЫЕ
 * ==============================
 */

// ============= ИГРОК 1 =============
// гора
$heap_p1 = $_POST['heap_player_1'];
// пуля
$pool_p1 = $_POST['pool_player_1'];
// висты
$p1Wp2 = $_POST['plr_1_whists_on_plr_2'];
$p1Wp3 = $_POST['plr_1_whists_on_plr_3'];
$p1Wp4 = $_POST['plr_1_whists_on_plr_4'];


// ============= Игрок 2 =============
// гора
$heap_p2 = $_POST['heap_player_2'];
// пуля
$pool_p2 = $_POST['pool_player_2'];
// висты
$p2Wp1 = $_POST['plr_2_whists_on_plr_1'];
$p2Wp3 = $_POST['plr_2_whists_on_plr_3'];
$p2Wp4 = $_POST['plr_2_whists_on_plr_4'];


// ============= Игрок 3 =============
// гора
$heap_p3 = $_POST['heap_player_3'];
// пуля
$pool_p3 = $_POST['pool_player_3'];
// висты
$p3Wp1 = $_POST['plr_3_whists_on_plr_1'];
$p3Wp2 = $_POST['plr_3_whists_on_plr_2'];
$p3Wp4 = $_POST['plr_3_whists_on_plr_4'];


// ============= Игрок 4 =============
// гора
$heap_p4 = $_POST['heap_player_4'];
// пуля
$pool_p4 = $_POST['pool_player_4'];
// висты
$p4Wp1 = $_POST['plr_3_whists_on_plr_1'];
$p4Wp2 = $_POST['plr_3_whists_on_plr_2'];
$p4Wp3 = $_POST['plr_3_whists_on_plr_3'];


/* ==============================
 *           ЛОГИКА
 * ==============================
 */

// помещаем горы в массив
$heapArr = array(
    "Игрок-1"=>$heap_p1,
    "Игрок-2"=>$heap_p2,
    "Игрок-3"=>$heap_p3,
    "Игрок-4"=>$heap_p4
);

// определяем амнистёра
$amnesty = min($heapArr);


// узнаём кто это
foreach ($heapArr as $player => $heapVal) {
    if ($heapVal == $amnesty) {
        $amnister = $player;
    }
}

// уравниваем (амнистируем) гору у игроков
$heapMeanArr = array();
foreach ($heapArr as $heapValue){
    if ($amnesty == $heapValue) {
        array_push($heapMeanArr, $heapValue);
    }
    else {
        $heapMean = $heapValue - $amnesty;
        array_push($heapMeanArr, $heapMean);
    }
}

// рассчитаем висты на игроков с их горы
$whistValueArr = array();
foreach ($heapMeanArr as $heapValue ) {

    $whistValue = round(($heapValue * 10) / 3);
    array_push($whistValueArr, $whistValue);
}











































