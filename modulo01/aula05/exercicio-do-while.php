<select name="" id="">
    <option selected> -- Selecione o Ano --</option>

    <?php
        $ano = 2022
        do {
            echo "<option>{$ano}</option>";
            $ano--
        } while ($ano >= 1900);
    ?>
</select>