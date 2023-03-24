<?php
require_once __DIR__ . '/../base/header.php';

/** @var string $title */
/** @var int $invoice_id */
?>
<h1><?= $title; ?></h1>
<a class="btn btn-primary" href="/invoices/new" role="button" aria-disabled="true">New Invoice</a>
<div class="mt-3">
    <p>There are no invoices.</p>
    <p>Invoice ID: <?= $invoice_id; ?></p>
</div>
<?php require_once __DIR__ . '/../base/footer.php'; ?>
