<?php
require_once __DIR__ . '/../base/header.php';

/** @var string $title */
/** @var array $invoices */
?>
<h1><?= $title; ?></h1>
<a class="btn btn-primary" href="/invoices/new" role="button" aria-disabled="true">New Invoice</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Number</th>
        <th scope="col">To</th>
        <th scope="col">Date</th>
        <th scope="col">Due Date</th>
        <th scope="col">Paid</th>
        <th scope="col">Due Paid</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <?php if (empty($invoices)): ?>
        <tr>
            <td colspan="7">
                There are no invoices.
            </td>
        </tr>
    <?php else: ?>
        <?php foreach ($invoices as $invoice): ?>
            <tr>
                <th scope="row"><a href="/invoices/view?id=<?= $invoice['invoice_id']; ?>"><?= $invoice['invoice_number']; ?></a></th>
                <td><?= $invoice['invoice_to']; ?></td>
                <td><?= $invoice['date']; ?></td>
                <td><?= $invoice['due_date']; ?></td>
                <td><?= $invoice['paid']; ?></td>
                <td><?= $invoice['due_paid']; ?></td>
                <td>
                    <?php if ($invoice['status'] === 'awaiting_payment'): ?>
                        <span class="badge text-bg-primary">Awaiting Payment</span>
                        <a href="/invoices/payment/add?invoice_id=<?= $invoice['invoice_id']; ?>">Add Payment</a>
                    <?php elseif ($invoice['status'] === 'paid'): ?>
                        <span class="badge text-bg-success">Paid</span>
                    <?php endif;?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<?php require_once __DIR__ . '/../base/footer.php'; ?>
