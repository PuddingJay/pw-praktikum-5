<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Device</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Device name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($devices as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d['device_name']; ?></td>
                            <td><?= $d['device_brand']; ?></td>
                            <td><?= $d['device_quantity']; ?></td>
                            <td><?= $d['device_status']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>