<?php
include("system/query/admin.php");
$barang = getItem($db_PDO);
$members = getMember($db_PDO);
?>

<h1>Transaksi</h1>
<form action="<?= action("order/create", $db_PDO) ?>" method="post" id="transaction-form">
    <div id="items-container">

    </div>
    <div id="member">
        <label for="member">Member</label>
        <select name="member" id="member">
            <option value="null">No Membership</option>
            <?php foreach ($members as $member):
                echo "<option value=" . $member['id'] . ">" . $member['name'] . "</option>";
            endforeach; ?>
        </select>
    </div>
    <a class="nav-button" href="#" id="add-item-link">Add Item</a>
    <input type="submit" value="Submit">
</form>

<script>
document.getElementById('add-item-link').addEventListener('click', function(e) {
    e.preventDefault();

    var newItemDiv = document.createElement('div');

    var label = document.createElement('label');
    label.setAttribute('for', 'item');
    label.innerText = 'Barang';
    newItemDiv.appendChild(label);

    var select = document.createElement('select');
    select.name = 'item[]';
    select.id = 'item';

    <?php foreach ($barang as $item): ?>
    <?php if ($item["stock"] > 0): ?>
    var option = document.createElement('option');
    option.value = '<?php echo htmlspecialchars($item['id']); ?>';
    option.text = '<?php echo htmlspecialchars($item['name']); ?>';
    select.appendChild(option);
    <?php endif; ?>
    <?php endforeach; ?>

    newItemDiv.appendChild(select);

    var qtyLabel = document.createElement('label');
    qtyLabel.setAttribute('for', 'qty');
    qtyLabel.innerText = 'Jumlah';
    newItemDiv.appendChild(qtyLabel);

    var qtyInput = document.createElement('input');
    qtyInput.type = 'number';
    qtyInput.name = 'qty[]';
    qtyInput.id = 'qty';
    newItemDiv.appendChild(qtyInput);

    document.getElementById('items-container').appendChild(newItemDiv);
});
</script>