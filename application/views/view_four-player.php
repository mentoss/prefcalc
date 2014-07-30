<?php include_once "application/assets/calc-form/4game.php"; ?>
<div class="content-container">

    <ol class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Расчёт пули на четверых</li>
    </ol>

    <div class="panel panel-default pull-right hide">
        <div class="panel-body">
            <p class="text-center">Бланк пули на четверых<br>
                <a class="btn btn-default btn-sm" href="../../files/bullet-4.doc" target="_blank"><i class="fa fa-download"></i> Скачать</a>
                <a class="btn btn-default btn-sm" href="../../files/bullet-4.html" target="_blank"><i class="fa fa-print"></i> распечатать</a></p>
        </div>
    </div>

    <form method="post" action="/four-player" class="calculate-form">

       <table class="table table-options">
           <tbody>
               <tr>
                   <td colspan="3">
                        <h4>Настройка игры</h4>
                   </td>
               </tr>
               <tr>
                   <td>
                        <div class="radio">
                           <p><b>Делимость горы и пули</b></p>
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="optionsDivided" value="option1" > 1
                                </label>

                                <label>
                                    <input type="radio" name="optionsDivided" value="option2" > 3
                                </label>

                                <label>
                                    <input type="radio" name="optionsDivided" value="option3" > 4
                                </label>
                            </div>

                        </div>
                    </td>
                   <td>
                        <div class="checkbox">
                           <p><b>Стоимость в вистах очков горы и пули</b></p>
                            <div class="checkbox">
                                <label>
                                      <input type="radio" name="optionsCost" value="option1"> 1 пуля = 1 гора = 10 вистов (Классика)
                                </label>
                                <br>
                                <label>
                                      <input type="radio" name="optionsCost" value="option2"> 1 пуля = 2 гора, 1 гора = 10 вистов (Ленинград)
                                </label>
                            </div>
                        </div>
                   </td>
                   <td>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Игра идёт до:</label>
                           <input type="text" class="form-control" placeholder="Общая гора">
                       </div>
                   </td>
               </tr>
           </tbody>
       </table>

        <table class="table-calc table table-bordered">
            <thead>
                <tr class="active">
                    <th></th>
                    <th>
                        Игрок 1 - Север
                    </th>
                    <th>
                        Игрок 2 - Восток
                    </th>
                    <th>
                        Игрок 3 - Юг
                    </th>
                    <th>
                        Игрок 4 - Запад
                    </th>
                </tr>
            </thead>
            <tbody>
               <tr>
                    <td><b>Гора</b></td>
                    <td><input class="form-control" value="<?=$_POST['heap_player_1'];?>" type="text" name="heap_player_1" placeholder="Гора"></td>
                    <td><input class="form-control" value="<?=$_POST['heap_player_2'];?>" type="text" name="heap_player_2" placeholder="Гора"></td>
                    <td><input class="form-control" value="<?=$_POST['heap_player_3'];?>" type="text" name="heap_player_3" placeholder="Гора"></td>
                    <td><input class="form-control" value="<?=$_POST['heap_player_4'];?>" type="text" name="heap_player_4" placeholder="Гора"></td>
                </tr>
                <tr>
                    <td><b>Пуля</b></td>
                    <td><input class="form-control" value="<?=$_POST['pool_player_1'];?>" type="text" name="pool_player_1" placeholder="Пуля"></td>
                    <td><input class="form-control" value="<?=$_POST['pool_player_2'];?>" type="text" name="pool_player_2" placeholder="Пуля"></td>
                    <td><input class="form-control" value="<?=$_POST['pool_player_3'];?>" type="text" name="pool_player_3" placeholder="Пуля"></td>
                    <td><input class="form-control" value="<?=$_POST['pool_player_4'];?>" type="text" name="pool_player_4" placeholder="Пуля"></td>
                </tr>
                <tr class="active">
                    <td colspan="5"><h5 class="text-center">Висты</h5></td>
                </tr>
                <tr>
                    <td><b>Игрок 1</b></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                    <td><input class="form-control" value="<?=$_POST['plr_1_whists_on_plr_2'];?>" type="text" name="plr_1_whists_on_plr_2" placeholder="Висты на игрока 2"></td>
                    <td><input class="form-control" value="<?=$_POST['plr_1_whists_on_plr_3'];?>" type="text" name="plr_1_whists_on_plr_3" placeholder="Висты на игрока 3"></td>
                    <td><input class="form-control" value="<?=$_POST['plr_1_whists_on_plr_4'];?>" type="text" name="plr_1_whists_on_plr_4" placeholder="Висты на игрока 4"></td>
                </tr>
                <tr>
                   <td><b>Игрок 2</b></td>
                    <td><input class="form-control" value="<?=$_POST['plr_2_whists_on_plr_1'];?>" type="text" name="plr_2_whists_on_plr_1" placeholder="Висты на игрока 1"></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                    <td><input class="form-control" value="<?=$_POST['plr_2_whists_on_plr_3'];?>" type="text" name="plr_2_whists_on_plr_3" placeholder="Висты на игрока 3"></td>
                    <td><input class="form-control" value="<?=$_POST['plr_2_whists_on_plr_4'];?>" type="text" name="plr_2_whists_on_plr_4" placeholder="Висты на игрока 4"></td>
                </tr>
                <tr>
                   <td><b>Игрок 3</b></td>
                    <td><input class="form-control" value="<?=$_POST['plr_3_whists_on_plr_1'];?>" type="text" name="plr_3_whists_on_plr_1" placeholder="Висты на игрока 1"></td>
                    <td><input class="form-control" value="<?=$_POST['plr_3_whists_on_plr_2'];?>" type="text" name="plr_3_whists_on_plr_2" placeholder="Висты на игрока 2"></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                    <td><input class="form-control" value="<?=$_POST['plr_3_whists_on_plr_4'];?>" type="text" name="plr_3_whists_on_plr_4" placeholder="Висты на игрока 4"></td>
                </tr>
                <tr>
                   <td><b>Игрок 4</b></td>
                    <td><input class="form-control" value="<?=$_POST['plr_4_whists_on_plr_1'];?>" type="text" name="plr_4_whists_on_plr_1" placeholder="Висты на игрока 1"></td>
                    <td><input class="form-control" value="<?=$_POST['plr_4_whists_on_plr_2'];?>" type="text" name="plr_4_whists_on_plr_2" placeholder="Висты на игрока 2"></td>
                    <td><input class="form-control" value="<?=$_POST['plr_4_whists_on_plr_3'];?>" type="text" name="plr_4_whists_on_plr_3" placeholder="Висты на игрока 3"></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                </tr>

               <tr class="total active">
                    <td><h3>Итог</h3></td>
                    <td><span class="text-danger">- 265</span></td>
                    <td><span class="text-success">+ 354</span></td>
                    <td><span class="text-success">+ 132</span></td>
                    <td><span class="text-danger">- 221</span></td>
                </tr>
            </tbody>
            <tfoot class="">
                <tr>
                    <td colspan="5">
                        <h3 class="text-center">Как вели подсчёт:
                            <span class="pull-right">
                                <a id="collapse" class="text-info" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Показать <i class="fa fa-angle-down"></i></a></span>
                        </h3>
                        <div id="collapseOne" class="panel-collapse collapse in">

                            <ul class="list-unstyled">
                                <li><h4>Определяем амнистёра:</h4>
                                    <ul class="list-unstyled">
                                        <li><p>Это <b><?php echo $amnister; ?></b> с горой <b><?php echo $amnesty; ?></b></p></li>
                                    </ul>
                                </li>
                                <li><h4>Уравниваем (амнистируем) гору у игроков</h4></li>
                                <li></li>
                            </ul>

                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>

        <button id="submit" type="submit" class="btn btn-primary btn-lg">Спустить курок !</button>

    </form>
    <br>
    <pre>

        <?php
            print_r($amnesty);
        ?>

    </pre>

    <p class="bs-callout bs-callout-info">В форме допускается использовать ТОЛЬКО цифры. <i class="fa fa-warning fa-2x pull-right"></i> </p>


</div>