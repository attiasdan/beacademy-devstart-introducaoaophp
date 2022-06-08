<select name="" id="">
    <option selected> -- Selecione o Ano --</option>

    <?php
        for ($ano = 2022; $ano >= 1900; $ano--)
            echo "<option>{$ano}</option>";
    ?>
</select>