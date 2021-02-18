<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<style>
    .depo-calc{
        display: flex;
        flex-direction: column;
        width: 100%;
        background-color: #e6b8ff;
        align-items: center;
    }
    .h2-s{
        color: #fff;
    }
    .header-block{
        display: flex;
        flex-direction: column;
        width: 80%;

        padding: 10px;
        margin: 10px;
    }
    .whiter-style{
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
    }
    .select-item{
        padding: 6px 15px;
        border: none;
        text-align: center;
    }
    .button-block{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .tariffs-data{
        display: block;
    }
</style>
<div class="depo-calc" id="app">
    <div class="tariffs-data">
        <?php foreach ($tariffs as $key => $value) :?>
            <div id="<?=$key.'*'.'title'?>"><?=$key.'*'.$value['title']?></div>
            <div id="<?=$key.'description'?>"><?=$key.$value['description']?></div>
            <div id="<?=$key.'hour'?>"><?=$key.$value['hour']?></div>
            <div id="<?=$key.'percent'?>"><?=$key.$value['percent']?></div>
            <div id="<?=$key.'min'?>"><?=$key.$value['min']?></div>
            <div id="<?=$key.'max'?>"><?=$key.$value['max']?></div>
        <?php endforeach; ?>
    </div>
    <div class="header-block whiter-style">
        <h2 class="h2-s">Рассщитайте вашу прибыль</h2>
        <a href="../../../index.php">Узнать больше ></a>
        <div>
            <label for="">Выберите тип депозита</label>
            <select class="whiter-style select-item">
                <?php foreach ($tariffs as $key => $val): ?>
                    <option>
                        <?php echo $val['title']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="">Введите суму</label>
            <input type="text" value="1000" pattern="\d [100-99999]" required @input="depoSum=$event.target.value" class="whiter-style select-item">
        </div>
        <div class="button-block">
            <p @click="calculate" class="whiter-style">Рассщитать</p>

        </div>

    </div>
    <div class="output-value">
        <div class="output-value-row">
            <span>Сума вклада</span>
            <span>{{depositAmount}}$</span>
        </div>
        <div class="output-value-row">
            <span>Срок инвестиции</span>
            <span>{{term}}часов</span>
        </div>
        <div class="output-value-row">
            <span>Процентная ставка</span>
            <span>{{rate}}% в месяц</span>
        </div>
        <div class="output-value-row">
            <span>Сума по окончанию</span>
            <span>{{amountAfter}}$</span>
        </div>
        <div class="output-value-row">
            <span>Ваш профит</span>
            <span>{{profit}}$</span>
        </div>
        {{outputValue}}

    </div>
</div>
<script src="/application/views/application/calc.js"></script>
<?php
foreach ($tariffs as $key => $val){
    echo $key.' => '.$val['title'].', ';
    echo $val['description'].', ';
    echo $val['hour'].', ';
    echo $val['percent'].', ';
    echo $val['min'].', ';
    echo $val['max'].', ';
    echo "<br>";
}
?>