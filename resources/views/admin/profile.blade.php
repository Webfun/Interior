@extends('admin.includes.app')
@section('title', 'Profile')
@section('content')


    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">

                    <form method="post" enctype="multipart/form-data" action="{{ route('profile.update') }}" class="row g-3">
                        @csrf
                        @method('patch')
                        {{-- <div class="col-lg-12">
                            <div class="rounded-circle">
                                <div class="rounded-circle">
                                    <img src="{{ asset('admin-assets/img/team/2.jpg') }}" width="100" alt=""
                                        data-dz-thumbnail="data-dz-thumbnail"><input class="d-none" id="profile-image"
                                        type="file">
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="mr-25">
                                <img src="{{ Auth::user()->profile_img ? url('profile/' . Auth::user()->profile_img) : url('profile/user.jpg') }}"
                                    id="account-upload-img" class="rounded mr-50"
                                    alt="{{ Auth::user()->name }} profile image" height="80" width="80">
                            </a>
                            <div class="media-body mt-3 mt-75 ml-1">
                                <button type="button" class="btn btn-sm btn-primary  mr-0 mr-sm-1 mb-1 mb-sm-0"
                                    data-toggle="modal" data-target="#addImagePopup">
                                    Change Profile Picture
                                </button>
                                @if (Auth::user()->profile_img)
                                    <a href="{{ route('profile.image.destroy') }}"
                                        onclick="confirm('are your sure you want to delete your profile picture')"
                                        class="btn btn-sm btn-danger mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        Delete Profile Picture
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-12 mb-2 col-sm-6">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text"
                                    class="form-control" value="{{ Auth::user()->name }}" autofocus
                                    autocomplete="name" />
                                <x-input-error
                                    class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                    :messages="$errors->get('name')" />
                            </div> </div>
                        {{-- <div class="col-lg-6"> <label class="form-label" for="last-name">Last Name</label><input
                                class="form-control" id="last-name" type="text" value="Hopkins"></div> --}}
                        <div class="col-lg-6">
                            <label class="form-label" for="email1">Email</label>
                            <input class="form-control" name="email" type="text" value="anthony@gmail.com">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="email2">Phone</label>
                            <input class="form-control" name="phone" type="text" value="+44098098304">
                        </div>

                        {{-- <div class="col-lg-12"> <label class="form-label" for="intro">Intro</label>
                            <textarea class="form-control" id="intro" name="intro" cols="30" rows="13">Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking. I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance. It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face. There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.</textarea>
                        </div> --}}
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Change Password</h5>
                    </div>
                    <div class="card-body bg-light">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="mb-3"><label class="form-label" for="old-password">Current Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="current_password" name="current_password" type="password"
                                        class="form-control" autocomplete="current-password" />
                                    {{-- <div class="input-group-append">
                                        <div class="input-group-text cursor-pointer">
                                            <i data-feather="eye"></i>
                                        </div>
                                    </div> --}}
                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="err-msg" />
                            </div>
                            <div class="mb-3"><label class="form-label" for="new-password">New Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="password" name="password" type="password" class="form-control"
                                        autocomplete="new-password" />

                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="err-msg" />

                            </div>
                            <div class="mb-3"><label class="form-label" for="confirm-password">Confirm
                                    Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                        class="form-control" autocomplete="new-password" />

                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"class="err-msg" />

                            </div><button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Danger Zone</h5>
                    </div>
                    <div class="card-body bg-light">
                        <h5 class="fs-0">Delete this account</h5>
                        <p class="fs--1">Once you delete a account, there is no going back. Please be certain.</p><a
                            class="btn btn-falcon-danger d-block" href="#!">Delete Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @if ($errors->any())
        <script>
            $('#addImagePopup').modal('show')
        </script>
    @endif
@endsection
