<div class="container-fluid">
    <?php Flasher::flash() ?>

    <form action="save" method="post">
        <div class="form-group">
            <label for="nama">stockCode</label>
            <input type="text" id="nama" class="form-control" name="stockCode" placeholder="stockCode">
        </div>

        <div class="form-group">
            <label for="umur">avgBuy</label>
            <input type="number" id="umur" class="form-control" placeholder="price" name="avgBuy">
        </div>
        <div class="form-group">
            <label for="umur">lot</label>
            <input type="number" id="umur" class="form-control" placeholder="lot" name="lot">
        </div>

        <div class="form-group">
            <label for="example-date-input">buyAt</label>

            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="buyAt">

        </div>


        <div class="form-group">
            <label for="nama">stockBroker</label>
            <input type="text" id="nama" class="form-control" name="stockBroker" placeholder="stockBroker">
        </div>






        <input type="submit" class="btn btn-primary">
    </form>


</div>