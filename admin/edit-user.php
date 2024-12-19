<?php
include 'partials/header.php';
?>


<!-- ===== Add Post Section ===== -->
<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <select>
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>