<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='id'>1</td>
                            <td>Sports</td>
                            <td>0</td>
                            <td class='edit'><a href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>2</td>
                            <td>Entertainment</td>
                            <td>1</td>
                            <td class='edit'><a href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>3</td>
                            <td>Politics</td>
                            <td>2</td>
                            <td class='edit'><a href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <tr>
                            <td class='id'>4</td>
                            <td>Health</td>
                            <td>0</td>
                            <td class='edit'><a href='update-category.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        
                    </tbody>
                </table>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
