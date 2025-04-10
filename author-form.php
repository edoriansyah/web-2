<?php
if ($_GET) {
    require_once 'models/Author.php';
    $data = models\Author::find($_GET['id']);
    $hidden_input = '<input type="hidden" name="author_id" value="' . $_GET['id'] . '">';
}
?>

<?= $hidden_input ?? '' ?>

<div class="col-md-4">
    <label class="form-label">First Name</label>
    <input class="form-control" name="first_name" required value="<?= $data['first_name'] ?? '' ?>">
</div>
<div class="col-md-4">
    <label class="form-label">Middle Name</label>
    <input class="form-control" name="middle_name" value="<?= $data['middle_name'] ?? '' ?>">
</div>
<div class="col-md-4">
    <label class="form-label">Last Name</label>
    <input class="form-control" name="last_name" value="<?= $data['last_name'] ?? '' ?>">
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary"><?= $_GET ? 'Save' : 'Create' ?></button>
</div>