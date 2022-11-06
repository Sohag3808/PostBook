<?php 
include('layout/header.php');
include('database/connection.php');

$id = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id = $id";

$result = mysqli_query($conn,$sql);

$user = mysqli_fetch_assoc($result);
?>
<style>
    body{
        background: #ddd;
    }
</style>
<div class="profile_header">
    <img src="assets/images/bg.jpg" alt="">
    <div class="contents">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hello <?= $_SESSION['name']; ?></h1>
                    <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                    <button data-bs-toggle="modal" data-bs-target="#modelId" class="btn btn-info">Edit profile</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container profile_Content">
<div class="row">
    <div class="col-md-8">
        <div class="card card-body border-0" style="border-radius: 8px;">
            <div>
                <h4>My Account</h4>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="mb-0 text-gray">Username</label>
                    <p class="m-0"><?= $user['name'] ?? 'N/A' ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-0 text-gray">Email address</label>
                    <p class="m-0"><?= $user['email']?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-0 text-gray">Address</label>
                    <p class="m-0"><?= $user['address'] ?? 'N/A' ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-0 text-gray">Country</label>
                    <p class="m-0"><?= $user['country'] ?? 'N/A' ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-0 text-gray">City</label>
                    <p class="m-0"><?= $user['city'] ?? 'N/A' ?></p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-0 text-gray">Post Code</label>
                    <p class="m-0"><?= $user['post_code'] ?? 'N/A' ?></p>
                </div>
                <div class="col-md-12">
                    <label class="mb-0 text-gray">About Us</label>
                    <p class="m-0"><?= $user['about_us'] ?? 'N/A' ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0" style="border-radius: 8px;">
            <div class="card-body">
                <div class="thumbnail text-center">
                    <img src="assets/images/avatar.png" class="rounded-circle" width="100" height="100">
                </div>
                <h2 class="text-center mt-2"><?= $user['name'] ?? 'N/A' ?></h2>
            </div>
        </div>
    </div>
</div>

</div>


<!-- Modal -->
<form action="database/profile_update.php" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="modelId">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profile</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                        <input type="file" name="profile_photo" class="form-control">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label">Username</label>
                                    <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email address</label>
                                    <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-1">
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-address">Address</label>
                                    <input class="form-control" name="address" value="<?= $user['address'] ?>" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-city">City</label>
                                    <input type="text" name="city" class="form-control" value="<?= $user['city'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-country">Country</label>
                                    <input type="text" id="input-country" name="country" class="form-control" value="<?= $user['country'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Postal code</label>
                                    <input type="number" name="post_code" class="form-control" value="<?= $user['post_code'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-1">
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">About me</h6>
                    <div class="pl-lg-4">
                        <div class="form-group focused">
                            <label>About Me</label>
                            <textarea rows="4" name="about_us" class="form-control"><?= $user['about_us'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>






<?php include('layout/footer.php') ?>