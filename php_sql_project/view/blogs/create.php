<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5">

                    <form method="POST" enctype="multipart/form-data" action = "index.php?page=store_blog">
                        
                        <div class="form-floating">
                            <input class="form-control" name="title" type="text" />
                            <label for="title">Title</label>
                        </div>

                        <div class="form-floating">
                            <input class="form-control" name="image" type="file" />
                            <label for="image">Image</label>
                        </div>

                        <div class="form-floating">
                            <textarea name="content" rows="3"></textarea>
                            <label for="content">Content</label>
                        </div>

                        <button class="btn btn-primary text-uppercase mt-4" type="submit">
                            Create
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
