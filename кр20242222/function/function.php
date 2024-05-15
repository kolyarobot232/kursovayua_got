<?php
    include "connect.php";
        
    function fnGetProfile($login) {
        global $connect;

        $sql = sprintf("SELECT `surname`, `name`, `otchestvo`, `phone` FROM `klient`
        WHERE `login` = '%s'", $login);

        if(!$result = $connect->query($sql)){
        echo "Ошибка получения данных";
        }
        $row = $result->fetch_assoc();

        
        $data = sprintf('<div class="okno okno23"<p><span class="">Фамилия:</span> %s</p>
        <p><span class="">Имя:</span> %s</p>
        <p><span class="">Отчество:</span> %s</p>
        <p><span class="">Телефон:</span> %s</p>
        <div>',
        $row["surname"], $row["name"], $row["otchestvo"], $row["phone"]);

        return $data;
        
    }
    function fnGetProfile2($login) {
        global $connect;

        $sql = sprintf("SELECT  `sotrydnik`.`id_dolzhnost`, `surname`, `name`, `otchestvo`, `obrazovanie`, `nazvanie`, `oklad` FROM `sotrydnik`
        INNER JOIN `dolzhnost` ON `sotrydnik`.`id_dolzhnost` = `dolzhnost`.`id_dolzhnost`
        WHERE `login` = '%s'", $login);

        if(!$result = $connect->query($sql)){
        echo "Ошибка получения данных";
        }
        $row = $result->fetch_assoc();

        
        $data = sprintf('<div class="okno okno23"<p><span class="">Фамилия:</span> %s</p>
        <p><span class="">Имя:</span> %s</p>
        <p><span class="">Отчество:</span> %s</p>
        <p><span class="">Образование:</span> %s</p>
        <p><span class="">Должность:</span> %s</p>
        <p><span class="">Оклад:</span> %s рублей</p>
        <p class=""><span class="">График работы: С 8:00 до 16:00</span></p>
    
        <div>',
        $row["surname"], $row["name"], $row["otchestvo"], $row["obrazovanie"], $row["nazvanie"], $row["oklad"]);

        return $data;
        
    }
    function fnGetCardProfile2($login) {
        global $connect;
  
        $select = sprintf("SELECT `id_klient` FROM `klient` WHERE `login` = '%s'", $login);
        $select_result = $connect->query($select);
        $select_row = $select_result->fetch_assoc();
        $id = $select_row['id_klient'];

        

        $data = '<div class="container">';
        $sql = sprintf("SELECT `zayavka`.`id_klient`,`klient`.`surname`,`zayavka`.`id_zayavka`, `tip_nomera`, `zaezd`, `viezd`, `status` FROM `zayavka`
        INNER JOIN `nomer` ON `zayavka`.`id_nomer` = `nomer`.`id_nomer` 
        INNER JOIN `klient`ON `zayavka`.`id_klient` = `klient`.`id_klient`
        ORDER BY `id_zayavka` DESC");

        

    if(!$result = $connect->query($sql)){
        echo "Ошибка получения данных";
    }

    while($row = $result->fetch_assoc()){
        if($_POST["nomer"] == $row['id_zayavka']){
        $data .= sprintf('<div class="">
        <div class="card255">
        <p>Заявка</p>
        <p class=""><span class="">Фамилия клиента:</span>%s</p>
        <p class=""><span class="">Тип номера:</span>%s</p>
        <p class=""><span class="">Заезд:</span>%s</p>
        <p class=""><span class="">Выезд:</span>%s</p>
        <p class=""><span class="">Статус:</span> %s</p>

        
        </div>
        </div>',
        $row['surname'],
        $row['tip_nomera'],
        $row['zaezd'],
        $row['viezd'],
        $row['status']);
        }
        }

        while($row = $result->fetch_assoc()){
            if($row['status'] == 'Отменен'){
            $data .= sprintf('<div class=""></div>',
            $row['tip_nomera'],
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            } elseif($row['status'] == 'Подтвержден'){
            $data .= sprintf('<div class=""></div>',
            $row['tip_nomera'],
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            } else{
            $data .= sprintf('<div class=""></div>',
            $row['tip_nomera'],
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            }
            }

    $data .= "</div>";
    return $data;
    }
    function fnGetCardProfile($login) {
        global $connect;
  
        $select = sprintf("SELECT `id_klient` FROM `klient` WHERE `login` = '%s'", $login);
        $select_result = $connect->query($select);
        $select_row = $select_result->fetch_assoc();
        $id = $select_row['id_klient'];

        

        $data = '<div class="container">';
        $sql = sprintf("SELECT `id_zayavka`,`zaezd`, `viezd`, `status`, `tip_nomera`, `stoimost` FROM
        `zayavka` INNER JOIN `klient` ON `zayavka`.`id_klient` = `klient`.`id_klient` INNER JOIN `nomer` ON `zayavka`.`id_nomer` = `nomer`.`id_nomer` WHERE
        `zayavka`.`id_klient` = '%s' ORDER BY `id_zayavka` DESC", $id);

        

    if(!$result = $connect->query($sql)){
        echo "Ошибка получения данных";
    }

    while($row = $result->fetch_assoc()){
        $data .= sprintf('<div class="">
        <div class="card255">
        <p>Заявка</p>
        <p class=""><span class="">Тип номера:</span>%s</p>
        <p class=""><span class="">Посуточная стоимость:</span>%s</p>
        <p class=""><span class="">Заезд:</span>%s</p>
        <p class=""><span class="">Выезд:</span>%s</p>
        <p class=""><span class="">Статус:</span> %s</p>
        <a href="/admin/controllers/update_zayavka.php?id=%s&action=delete" class="card-button button255 menu-link">Удалить</a>
        
        </div>
        </div>',
        $row['tip_nomera'],
        $row['stoimost'],
        $row['zaezd'],
        $row['viezd'],
        $row['status'],
        $row['id_zayavka']);
        }

        while($row = $result->fetch_assoc()){
            if($row['status'] == 'Отменен'){
            $data .= sprintf('<div class=""></div>',
            $row['tip_nomera'],
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            } elseif($row['status'] == 'Подтвержден'){
            $data .= sprintf('<div class=""></div>',
            $row['tip_nomera'],
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            } else{
            $data .= sprintf('<div class=""></div>',
            $row['tip_nomera'],
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            }
            }

    $data .= "</div>";
    return $data;
    }
    
    function fnGetCardAdmin(){
        global $connect;

        $data = '<div class="cards">';
        $sql = "SELECT `id_zayavka`, `surname`, `name`, `otchestvo`, `zaezd`, `stoimost`, `tip_nomera`,
`viezd`, `status` FROM `zayavka` INNER JOIN `klient` ON
`zayavka`.`id_klient` = `klient`.`id_klient` INNER JOIN `nomer` ON `zayavka`.`id_nomer` = `nomer`.`id_nomer` ORDER BY `id_zayavka` DESC";
    if(!$result = $connect->query($sql)){
        echo "Ошибка получения данных";
    }
    // место для вывода карточек Листинг 5.8 
    while($row = $result->fetch_assoc()){
        
        $data .= sprintf('
        <section>
        <div class="card255">
        <p class="mb-1">
        <span class="fw-semibold">Фамилия:</span> %s
        </p>
        <p class="mb-1">
        <span class="fw-semibold">Имя:</span> %s
        </p>
        <p class="mb-1"><span class="fw-semibold">Отчество:</span> %s</p>
        <p class=""><span class="">Тип номера:</span>%s</p>
        <p class=""><span class="">Посуточная стоимость:</span>%s</p>
        <p class="mb-1"><span class="">Заезд:</span> %s</p>
        <p class="card-text"<span class="">Выезд:</span>%s</p>
        <p class="mb-1"><span class="">Статус:</span>%s</p>
        <div class="button25555">
        <a href="controllers/update_zayavka.php?id=%s&action=success" class="card-button menu-link">Подтвердить</a>
        <a href="controllers/update_zayavka.php?id=%s&action=cancel" class="card-button  menu-link">Отменить</a>
        <a href="controllers/update_zayavka.php?id=%s&action=delate" class="card-button  menu-link">Удалить</a>
        </div>
        </div>
  
        </section>',

        $row['surname'],
        $row['name'],
        $row['otchestvo'],
        $row['tip_nomera'],
        $row['stoimost'],
        $row['zaezd'],
        $row['viezd'],
        $row['status'],
        $row['id_zayavka'],
        $row['id_zayavka'],
        $row['id_zayavka'] );
        }
    
    
        while($row = $result->fetch_assoc()){
            if($row['status'] == 'Отменен'){
            $data .= sprintf('<div class="card w-100 mb-3 mt-3 text-body-tertiary">
            // см. код Листинг 5.7
            </div>',
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            } elseif($row['status'] == 'Подтвержден'){
            $data .= sprintf('<div class="card w-100 mb-3 mt-3 text-success">
            // см. код Листинг 5.7
            </div>',
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            }
            // elseif($row['status'] == 'Удалён'){
            //     $data .= sprintf('<div class="card w-100 mb-3 mt-3 text-body-tertiary">
            //     // см. код Листинг 5.7
            //     </div>',
            //     $row['number'],
            //     $row['status'],
            //     $row['number_car'],
            //     $row['message']);
            // }
            else{
            $data .= sprintf('<div class="card w-100 mb-3 mt-3">
            // см. код Листинг 5.7
            </div>',
            $row['zaezd'],
            $row['viezd'],
            $row['status']);
            }
            }
        
    $data .= "</div>";
    return $data;
}



?>




