<?php require_once __DIR__ . '/../base/header.php'; ?>
<h1>Settings</h1>
<form action="/settings/save" method="post">
    <button class="btn btn-primary" type="submit" role="button" aria-disabled="true">Save</button>
    <div class="container mt-5 bg-light p-5">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="invoice_prefix" class="form-label fw-bold">Invoice Number Prefix</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="invoice_prefix" name="settings[invoice_prefix]"
                               value=""
                        />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="currency" class="form-label fw-bold">Currency</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="currency" name="settings[currency]"
                               value=""
                        />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="from_address" class="form-label fw-bold">From Address</label>
                    <div class="input-group">
                        <textarea rows="4" class="form-control" id="from_address" name="settings[from_address]"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require_once __DIR__ . '/../base/footer.php'; ?>
