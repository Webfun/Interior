@extends('admin.includes.app')
@section('title', 'edit project' . ' ' . $project->title)
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"> Edit Project</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">edit project</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.project.update', $project->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="title">Project Title</label>
                                                    <input type="text" id="title" class="form-control"
                                                        placeholder="write your project title here" name="title"
                                                        value="{{ old('title') ?? $project->title }}">
                                                    @error('title')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="date" id="date" class="form-control" name="date"
                                                        placeholder="Date" value="{{ old('date') ?? $project->date }}">
                                                    @error('date')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company_name">Company Name</label>
                                                    <input type="text" id="company_name" class="form-control"
                                                        name="company_name" placeholder="Company Name"
                                                        value="{{ old('company_name') ?? $project->company_name }}">
                                                    @error('company_name')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input type="text" id="location" class="form-control"
                                                        name="location" placeholder="Company Name"
                                                        value="{{ old('location') ?? $project->location }}">
                                                    @error('location')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class=" col-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="description" rows="5" class="form-control" placeholder="Description">{{ old('description') ?? $project->description }}</textarea>
                                                    @error('description')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6 mb-2">
                                                <div class="border rounded p-2">
                                                    <h4 class="mb-1">Featured Image</h4>
                                                    <div class="media flex-column flex-md-row">
                                                        <img src="{{ url('projectt/preview/' . $project->preview_img) }}"
                                                            id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0"
                                                            width="100" height="100" alt="Blog Featured Image">
                                                        <div class="media-body">
                                                            <small class="text-muted">Required image resolution 800x400,
                                                                image size 10mb.</small>
                                                            <p class="my-50">
                                                                <a href="javascript:void(0);" id="blog-image-text"></a>
                                                            </p>
                                                            <div class="d-inline-block">
                                                                <div class="form-group mb-0">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="preview_img"
                                                                            class="custom-file-input" id="preview_img">
                                                                        <label class="custom-file-label"
                                                                            for="preview_img">Choose file</label>
                                                                    </div>
                                                                    @error('company_logo')
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-6 mb-2">
                                                <div class="border rounded p-2">
                                                    <h4 class="mb-1">Company Logo</h4>
                                                    <div class="media flex-column flex-md-row">
                                                        <img src="{{ url('projectt/client/' . $project->company_logo) }}"
                                                            id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0"
                                                            width="100" height="100" alt="Blog Featured Image">
                                                        <div class="media-body">
                                                            <small class="text-muted">Required image resolution 800x400,
                                                                image size 10mb.</small>
                                                            <p class="my-50">
                                                                <a href="javascript:void(0);" id="blog-image-text"></a>
                                                            </p>
                                                            <div class="d-inline-block">
                                                                <div class="form-group mb-0">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="company_logo"
                                                                            class="custom-file-input" id="company_logo">
                                                                        <label class="custom-file-label"
                                                                            for="company_logo">Choose file</label>
                                                                    </div>
                                                                    @error('company_logo')
                                                                        <span class="text-danger">
                                                                            {{ $message }}
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    {{--  --}}

@endsection
