<?php 
    require_once dirname(__FILE__).'/include/header.php';
    require_once dirname(__FILE__).'/include/api.php';
    require_once dirname(__FILE__).'/include/navbar.php';
?>

<div class="socialcodia">
    <div class="row">
        <div class="col l10 offset-l1 s12 m12" style="padding: 30px 0px 30px 10px;">
            <div class="card  z-depth-0">
                <div class="card-content">
                    <div class="input-field">
                        <input type="text" name="categoryName" id="categoryName">
                        <label for="categoryName blue-text">Enter Category Name</label>
                    </div>
                    <div class="input-field center">
                        <button type="submit" class="btn blue" onclick="addCategory()" name="btnAddCategory" id="btnAddCategory">Add Category</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once dirname(__FILE__).'/include/sidenav.php'; ?>
<?php require_once dirname(__FILE__).'/include/footer.php'; ?>