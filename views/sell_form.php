<form action="sell.php" method="post">
    <fieldset>
        <div class="form-group">
            <select autocomplete="off" autofocus class="form-control" name="symbol" placeholder="Symbol">
                <?php foreach ($symbols as $symbol): ?>
                <option value="<?= $symbol?>"><?= $symbol ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Sell
            </button>
        </div>
    </fieldset>
</form>