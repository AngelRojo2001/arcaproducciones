<div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th>Título</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($audios as $audio): ?>
            <tr>
                <td><?= $audio->titulo; ?></td>
                <td><?= $audio->url_audio; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>