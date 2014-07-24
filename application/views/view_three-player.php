<div class="content-container">
    <form method="post" action="" class="calculate-form">

        <table class="option">
           <tbody><tr>
               <td>
                   <h4>Бланк пули на троих</h4>
                    <p><a class="button" href="#"><i class="fa fa-download"></i> Скачать</a><a class="button" href="#"><i class="fa fa-print"></i> распечатать</a></p>
               </td>
               <td>
                    <h4>Настройки игры</h4>                                                                           

                    <div class="checkbox">
                       <p><b>Делимость горы и пули</b><br>
                        <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                        </label>
                        <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                        </label>
                        <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                        </label>
                        </p>
                    </div>
                    <div class="checkbox">
                       <p><b>Стоимость в вистах очков горы и пули</b><br>
                        <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1 пуля = 1 гора = 10 вистов
                        </label>
                        <br>
                        <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 1 пуля = 20 вистов, 1 гора = 10 вистов
                        </label>
                        </p>
                    </div>
               </td>
           </tr>
        </tbody></table>                                                               

        <table class="table">
            <thead>
                <tr>
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
                </tr>
            </thead>
            <tbody>
               <tr>
                    <td><b>Гора</b></td>
                    <td><input type="text" name="heap_player-1" placeholder="Гора"></td>
                    <td><input type="text" name="heap_player-2" placeholder="Гора"></td>
                    <td><input type="text" name="heap_player-3" placeholder="Гора"></td>                                            
                </tr>
                <tr>
                    <td><b>Пуля</b></td>
                    <td><input type="text" name="pool_player-1" placeholder="Пуля"></td>
                    <td><input type="text" name="pool_player-2" placeholder="Пуля"></td>
                    <td><input type="text" name="pool_player-3" placeholder="Пуля"></td>                                            
                </tr>
                <tr>
                    <td colspan="4"><h5 class="text-center">Висты</h5></td>
                </tr>
                <tr>
                    <td><b>Игрок 1</b></td>
                    <td class="disabled text-center"><i class="fa fa-times"></i></td>
                    <td><input type="text" name="plr-1_whists-on-plr-2" placeholder="Висты на игрока 2"></td>
                    <td><input type="text" name="plr-1_whists-on-plr-3" placeholder="Висты на игрока 3"></td>                                            
                </tr>
                <tr>
                   <td><b>Игрок 2</b></td>                                            
                    <td><input type="text" name="plr-2_whists-on-plr-1" placeholder="Висты на игрока 1"></td>
                    <td class="disabled text-center"><i class="fa fa-times"></i></td>
                    <td><input type="text" name="plr-2_whists-on-plr-3" placeholder="Висты на игрока 3"></td>                                            
                </tr>
                <tr>                      
                   <td><b>Игрок 3</b></td>                     
                    <td><input type="text" name="plr-3_whists-on-plr-1" placeholder="Висты на игрока 1"></td>
                    <td><input type="text" name="plr-3_whists-on-plr-2" placeholder="Висты на игрока 2"></td>
                    <td class="disabled text-center"><i class="fa fa-times"></i></td>                                            
                </tr>                                        

               <tr class="total">
                    <td><h5>Итог</h5></td>
                    <td><span class="text-red">- 265</span></td>
                    <td><span class="text-green">+ 354</span></td>
                    <td><span class="text-green">+ 132</span></td>                                            
                </tr>                                                                           
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <h5 class="text-center">Как вели подсчёт:</h5>
                        <p>asdf</p>
                    </td>
                </tr>
            </tfoot>
        </table>

        <button id="submit" type="submit" class="button color large">Расписать пулю</button>

    </form>
</div>