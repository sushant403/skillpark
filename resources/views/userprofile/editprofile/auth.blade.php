@extends('layouts.userprofilemaster')

@section('content')

<div class="col-lg-9">
    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h5 class="card-title">Two-step verification</h5>
                <span class="badge badge-soft-danger ml-2">Disabled</span>
            </div>
        </div>

        <!-- Body -->
        <div class="card-body">
            <p class="card-text">Start by entering your password so that we know it's you. Then we'll walk
                you through two more simple steps.</p>

            <form>
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="accountPasswordLabel" class="col-sm-3 col-form-label input-label">Account
                        password</label>

                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="currentPassword" id="accountPasswordLabel"
                            placeholder="Enter current password" aria-label="Enter current password">
                        <small class="form-text">This is the password you use to log in to your Front
                            account.</small>
                    </div>
                </div>
                <!-- End Form Group -->

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Set up</button>
                </div>
            </form>
        </div>
        <!-- End Body -->
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
        <div class="card-header">
            <h5 class="card-title">Password</h5>
        </div>

        <!-- Body -->
        <div class="card-body">
            <!-- Form -->
            <form>
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Current
                        password</label>

                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel"
                            placeholder="Enter current password" aria-label="Enter current password">
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="newPassword" class="col-sm-3 col-form-label input-label">New
                        password</label>

                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="newPassword" id="newPassword"
                            placeholder="Enter new password" aria-label="Enter new password">
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm
                        new password</label>

                    <div class="col-sm-9">
                        <div class="mb-3">
                            <input type="password" class="form-control" name="confirmNewPassword"
                                id="confirmNewPasswordLabel" placeholder="Confirm your new password"
                                aria-label="Confirm your new password">
                        </div>

                        <h5>Password requirements:</h5>

                        <p class="card-text font-size-1">Ensure that these requirements are met:</p>

                        <ul class="font-size-1">
                            <li>Minimum 8 characters long - the more, the better</li>
                            <li>At least one lowercase character</li>
                            <li>At least one uppercase character</li>
                            <li>At least one number, symbol, or whitespace character</li>
                        </ul>
                    </div>
                </div>
                <!-- End Form Group -->

                <div class="d-flex justify-content-end">
                    <a class="btn btn-white" href="javascript:;">Cancel</a>
                    <span class="mx-2"></span>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
            </form>
            <!-- End Form -->
        </div>
        <!-- End Body -->
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="card mb-3 mb-lg-5">
        <div class="card-header">
            <h5 class="card-header-title">Social accounts</h5>
        </div>

        <!-- Body -->
        <div class="card-body">
            <form>
                <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                    <!-- List Item -->
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fab fa-twitter list-group-icon mt-1"></i>
                            <div class="media-body">
                                <div class="row align-items-center">
                                    <div class="col-sm mb-1 mb-sm-0">
                                        <h6 class="mb-0">Twitter</h6>
                                        <a class="small" href="#">www.twitter.com/skillpark</a>
                                    </div>

                                    <div class="col-sm-auto">
                                        <a class="btn btn-xs btn-white" href="javascript:;">Disconnect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fab fa-facebook list-group-icon mt-1"></i>
                            <div class="media-body">
                                <div class="row align-items-center">
                                    <div class="col-sm mb-1 mb-sm-0">
                                        <h6 class="mb-0">Facebook</h6>
                                        <a class="small" href="#">www.facebook.com/skillpark</a>
                                    </div>

                                    <div class="col-sm-auto">
                                        <a class="btn btn-xs btn-white" href="javascript:;">Connect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fab fa-github list-group-icon mt-1"></i>
                            <div class="media-body">
                                <div class="row align-items-center">
                                    <div class="col-sm mb-1 mb-sm-0">
                                        <h6 class="mb-0">Github</h6>
                                        <small>Not connected</small>
                                    </div>

                                    <div class="col-sm-auto">
                                        <a class="btn btn-xs btn-white" href="javascript:;">Connect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End List Item -->

                    <!-- List Item -->
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fab fa-google list-group-icon mt-1"></i>
                            <div class="media-body">
                                <div class="row align-items-center">
                                    <div class="col-sm mb-1 mb-sm-0">
                                        <h6 class="mb-0">Google</h6>
                                        <a class="small" href="#">www.google.com/skillpark</a>
                                    </div>

                                    <div class="col-sm-auto">
                                        <a class="btn btn-xs btn-white" href="javascript:;">Disconnect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End List Item -->

                </div>
            </form>
        </div>
        <!-- End Body -->
    </div>
    <!-- End Card -->
</div>
@endsection