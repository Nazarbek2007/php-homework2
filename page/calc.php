
        <main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2>
                <? $now_motch = date('n') ?>
                    <p class="head__date">Сегодня <?=date('j')?> <?=$month[$now_motch]?> <?=date('Y')?> года</p>
            </section>
            <form action="" class="form" method="get">
                <label class="form__label">
                    <span class="form__text">Число 1</span>
                    <input type="text" class="form__input" name="one" data-type="number">
                </label>
                <div class="form__mySelect">
                    <div class="form__select">
                        <div class="form__select-name">Выбирите знак</div>
                        <div class="form__select-option">
                            
                        </div>
                    </div>
                    <select name="symbol">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <label class="form__label">
                    <span class="form__text">Число 2</span>
                    <input type="text" class="form__input" name="two" data-type="number"> 
                </label>
                <button class="form__btn">Посчитать</button>



            </form>
        </main>