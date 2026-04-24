<?PHP 
$blogs = getblogs ();
var_dump($blogs );
?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>All Blogs</h1>
        <a href = "index.php?page=create_blog&action=store" class="btn btn-primary mb-3">Add New Blog</a>
    </div>
  <?php if (!empty($blogs)): ?>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($blogs as $blog) :?>
            <tr>
                <td><?= $blog['id']  ?></td>
                <td><img width="50" src="<?= "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).$blog['img']?>"></td>
                <td><?= $blog['title']  ?></td>
                <td><?= $blog['content']  ?></td>
                <td>
                    <a href= "index.php?page=edit_blog&id=<?= $blog['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form method = "POST" action = "index.php?page=delete_blog&action=delete" >
                        <input type = "hidden" name = "id" value="<?= $blog['id'] ?>">
                        <button type = "submit"> Delete </button>
                        
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
  <?php endif; ?>
</div>

<!-- <main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5">
                    <form method="POST">
                        // form content 
                    </form>
                </div>
            </div>
        </div>
    </div>
</main> -->


