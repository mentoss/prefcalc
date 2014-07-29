<div class="content-container">

    <ol class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Расчёт пули на четверых</li>
    </ol>

    <form method="post" action="../assets/calc-form/4game.php" class="calculate-form">

       <table class="table table-options">
           <tbody>
               <tr>
                   <td rowspan="2">
                       <h4>Бланк пули на четверых</h4>
                        <p><a class="btn btn-default" href="../../files/bullet-4.doc" target="_blank"><i class="fa fa-download"></i> Скачать</a>
                            <a class="btn btn-default" href="../../files/bullet-4.html" target="_blank"><i class="fa fa-print"></i> распечатать</a></p>
                   </td>
                   <td colspan="2">
                        <h4>Настройки игры</h4>
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
                                      <input type="radio" name="optionsCost" value="option1"> 1 пуля = 1 гора = 10 вистов
                                </label>
                                <br>
                                <label>
                                      <input type="radio" name="optionsCost" value="option2"> 1 пуля = 20 вистов, 1 гора = 10 вистов
                                </label>
                            </div>
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
                    <td><input class="form-control" type="text" name="heap_player-1" placeholder="Гора"></td>
                    <td><input class="form-control" type="text" name="heap_player-2" placeholder="Гора"></td>
                    <td><input class="form-control" type="text" name="heap_player-3" placeholder="Гора"></td>
                    <td><input class="form-control" type="text" name="heap_player-4" placeholder="Гора"></td>
                </tr>
                <tr>
                    <td><b>Пуля</b></td>
                    <td><input class="form-control" type="text" name="pool_player-1" placeholder="Пуля"></td>
                    <td><input class="form-control" type="text" name="pool_player-2" placeholder="Пуля"></td>
                    <td><input class="form-control" type="text" name="pool_player-3" placeholder="Пуля"></td>
                    <td><input class="form-control" type="text" name="pool_player-4" placeholder="Пуля"></td>
                </tr>
                <tr class="active">
                    <td colspan="5"><h5 class="text-center">Висты</h5></td>
                </tr>
                <tr>
                    <td><b>Игрок 1</b></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                    <td><input class="form-control" type="text" name="plr-1_whists-on-plr-2" placeholder="Висты на игрока 2"></td>
                    <td><input class="form-control" type="text" name="plr-1_whists-on-plr-3" placeholder="Висты на игрока 3"></td>
                    <td><input class="form-control" type="text" name="plr-1_whists-on-plr-4" placeholder="Висты на игрока 4"></td>
                </tr>
                <tr>
                   <td><b>Игрок 2</b></td>
                    <td><input class="form-control" type="text" name="plr-2_whists-on-plr-1" placeholder="Висты на игрока 1"></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                    <td><input class="form-control" type="text" name="plr-2_whists-on-plr-3" placeholder="Висты на игрока 3"></td>
                    <td><input class="form-control" type="text" name="plr-2_whists-on-plr-4" placeholder="Висты на игрока 4"></td>
                </tr>
                <tr>
                   <td><b>Игрок 3</b></td>
                    <td><input class="form-control" type="text" name="plr-3_whists-on-plr-1" placeholder="Висты на игрока 1"></td>
                    <td><input class="form-control" type="text" name="plr-3_whists-on-plr-2" placeholder="Висты на игрока 2"></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                    <td><input class="form-control" type="text" name="plr-3_whists-on-plr-4" placeholder="Висты на игрока 4"></td>
                </tr>
                <tr>
                   <td><b>Игрок 4</b></td>
                    <td><input class="form-control" type="text" name="plr-4_whists-on-plr-1" placeholder="Висты на игрока 1"></td>
                    <td><input class="form-control" type="text" name="plr-4_whists-on-plr-2" placeholder="Висты на игрока 2"></td>
                    <td><input class="form-control" type="text" name="plr-4_whists-on-plr-3" placeholder="Висты на игрока 3"></td>
                    <td class="disabled text-center text-danger"><i class="fa fa-times"></i></td>
                </tr>

               <tr class="total">
                    <td><h5>Итог</h5></td>
                    <td><span class="text-danger">- 265</span></td>
                    <td><span class="text-success">+ 354</span></td>
                    <td><span class="text-success">+ 132</span></td>
                    <td><span class="text-danger">- 221</span></td>
                </tr>
            </tbody>
            <tfoot class="hide">
                <tr>
                    <td colspan="5">
                        <h4 class="text-center">Как вели подсчёт:
                            <span class="pull-right">
                                <a id="collapse" class="text-info" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Показать <i class="fa fa-angle-down"></i></a></span>
                        </h4>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <p> Уравниваем пули. Поскольку пуля является «обратной стороной» горы, то, чтобы уравнять пули всех игроков нужно 12 списать с горы S. Но горы у всех нулевые. В этом случае списание 12 с горы S будет эквивалентно записью 12 в гору каждого игрока (т.е. W и E получают по 12 в свои горы). Теперь обратим их горы в висты умножением на 10 и делением на 3. Получаем 40. Это значит W должен 40 E и 40 S, в тоже время E должен 40 W и 40 S. W и E взаимно компенсируются, и каждый из них должен только S по 40. Таким образом, S выиграл 80, а W и E проиграли по 40.</p>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>

        <button id="submit" type="submit" class="btn btn-primary btn-lg">Спустить курок !</button>

    </form>
</div>