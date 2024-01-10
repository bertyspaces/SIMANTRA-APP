<tr>
    <td><?= $row->id; ?></td>
    <td><?= $row->username; ?></td>
    <td><?= empty($group) ? '' : $group[0]['name']; ?></td>
    <td><?= $row->email; ?></td>
    <td align="center">
        <a href="#" class="btn btn-sm btn-circle btn-active-users" data-id="<?= $row->id; ?>" data-active="<?= $row->active == 1 ? 1 : 0; ?>" title="Klik untuk Mengaktifkan atau Menonaktifkan">
            <?= $row->active == 1 ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-times-circle"></i>'; ?>
        </a>
    </td>
    <td align="center">
        <a href="#" class="btn btn-warning btn-circle btn-sm btn-ubah" data-username="<?= $row->username ?>" data-id="<?= $row->id ?>" title="Ubah Password">
            <i class="fas fa-key"></i>
        </a>

        <?php if (!empty($group)) { ?>
            <?php if ($group[0]['name'] == 'admin') { ?>
                <button href="#" class="btn btn-secondary btn-circle btn-sm btn-change" data-id="<?= $row->id; ?>" title="Ubah Grup">
                    <i class="fas fa-tasks"></i>
                </button>


            <?php } else { ?>
                <a class="btn btn-success btn-circle btn-sm btn-change-group" data-id="<?= $row->id; ?>" title="Ubah Grup">
                    <i class="fas fa-tasks"></i>
                </a>
            <?php } ?>
        <?php } else { ?>
            <a class="btn btn-success btn-circle btn-sm btn-change-group" data-id="<?= $row->id; ?>" title="Ubah Grup">
                <i class="fas fa-tasks"></i>
            </a>

        <?php  } ?>
    </td>
</tr>